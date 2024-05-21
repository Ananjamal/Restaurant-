<?php

namespace App\Http\Livewire\Website\Carts;

use App\Models\Cart;
use App\Models\Price;
use App\Models\Coupon;
use Livewire\Component;

class Carts extends Component
{
    public $CartItems;
    public $user_id;
    public $devide_id;
    public $subtotalPrice;
    public $totalPrice;
    public $shippingPrice = 10;
    public $couponCode;
    public $discount = 0;
    public function mount()
    {
        if (auth()->check()) {
            $this->user_id = auth()->id();
            $this->CartItems = Cart::where('user_id', $this->user_id)
                ->with('menu')
                ->get();
        } else {
            $this->device_id = session()->getId();
            $this->CartItems = Cart::where('device_id', $this->device_id)
                ->with('menu')
                ->get();
        }
        $this->calculateSubTotal();
        $this->calculateTotalPrice();
        $this->savePrices();
    }
    public function deleteFromCart($id)
    {
        $cartItem = Cart::find($id);
        if (!$cartItem) {
            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Item Not Found.']);
        }
        $cartItem->delete();
        $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'Item Removed From Cart Successfully.']);
        $this->mount();
    }
    public function increaseQuantity($id)
    {
        $cartItem = Cart::findOrFail($id); // Fetch the cart item based on the provided ID
        $cartItem->update([
            'quantity' => ++$cartItem->quantity,
            'total' => $cartItem->menu->price * $cartItem->quantity,
        ]);

        $this->mount();
    }
    public function decreaseQuantity($id)
    {
        $cartItem = Cart::findOrFail($id); // Fetch the cart item based on the provided ID
        if ($cartItem->quantity > 1) {
            $cartItem->update([
                'quantity' => --$cartItem->quantity,
                'total' => $cartItem->menu->price * $cartItem->quantity,
            ]);
            $this->mount();
        }
    }
    public function calculateSubTotal()
    {
        $subtotal = 0;
        foreach ($this->CartItems as $cartItem) {
            $subtotal += $cartItem->menu->price * $cartItem->quantity;
        }
        $this->subtotalPrice = $subtotal;
    }
    public function calculateTotalPrice()
    {
        $this->totalPrice = $this->subtotalPrice + $this->shippingPrice - $this->discount;
    }
    public function applyCoupon()
    {
        if ($this->CartItems->isEmpty()) {
            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Please add some items to your cart first']);
        } else {
            $coupon = Coupon::where('code', $this->couponCode)->first();

            if ($coupon) {
                $this->discount = $coupon->discount_amount;
                $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'Coupon Applied Successfully.']);
            } else {
                $this->discount = 0;
                $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Invalid Coupon Code.']);
            }

            $this->calculateTotalPrice();
            $this->mount();

        }
    }
    public function savePrices(){
        Price::updateOrCreate(
            ['user_id' => $this->user_id],
            [
                'sub_total' => $this->subtotalPrice,
                'shipping' => $this->shippingPrice,
                'discount' => $this->discount,
                'total_price' => $this->totalPrice,
            ]
        );
    }

    public function check(){
        $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Please add some items to your cart first']);
    }

    public function render()
    {
        return view('livewire.website.carts.carts')->layout('layout.website.cart');
    }
}

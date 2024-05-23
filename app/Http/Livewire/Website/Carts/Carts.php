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
    public $device_id;
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

            // foreach ($CartItems as $sessionCartItem) {
            //     $sessionCartItem->update(['user_id' => Auth::id()]);
            // }
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
    // public function mount()
    // {
    //     if (auth()->check()) {
    //         $this->user_id = auth()->id();

    //         // Retrieve session cart items
    //         $this->device_id = session()->getId();
    //         $sessionCartItems = Cart::where('device_id', $this->device_id)
    //             ->with('menu')
    //             ->get();

    //         // Update session cart items to the authenticated user
    //         foreach ($sessionCartItems as $sessionCartItem) {
    //             $sessionCartItem->update(['user_id' => $this->user_id, 'device_id' => null]);
    //         }

    //         // Retrieve all cart items for the authenticated user
    //         $this->CartItems = Cart::where('user_id', $this->user_id)
    //             ->with('menu')
    //             ->get();

    //     } else {
    //         $this->device_id = session()->getId();
    //         $this->CartItems = Cart::where('device_id', $this->device_id)
    //             ->with('menu')
    //             ->get();
    //     }

    //     $this->calculateSubTotal();
    //     $this->calculateTotalPrice();
    //     $this->savePrices();
    // }

    public function deleteFromCart($id)
    {
        $cartItem = Cart::find($id);
        if (!$cartItem) {
            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Item Not Found.']);
            return;
        }
        $cartItem->delete();
        $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'Item Removed From Cart Successfully.']);
        $this->mount();
    }

    public function increaseQuantity($id)
    {
        $cartItem = Cart::findOrFail($id);
        $cartItem->update([
            'quantity' => ++$cartItem->quantity,
            'total' => $cartItem->menu->price * $cartItem->quantity,
        ]);
        $this->mount();
    }

    public function decreaseQuantity($id)
    {
        $cartItem = Cart::findOrFail($id);
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
            return;
        }

        $coupon = Coupon::where('code', $this->couponCode)->first();
        if ($coupon) {
            $this->discount = $coupon->discount_amount;
            $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'Coupon Applied Successfully.']);
        } else {
            $this->discount = 0;
            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Invalid Coupon Code.']);
        }

        $this->calculateTotalPrice();
        $this->savePrices();
    }

    public function savePrices()
    {
        $this->calculateSubTotal();
        $this->calculateTotalPrice();

        Price::updateOrCreate(
            ['user_id' => $this->user_id ?? null, 'device_id' => $this->device_id ?? null],
            [
                'sub_total' => $this->subtotalPrice,
                'shipping' => $this->shippingPrice,
                'discount' => $this->discount,
                'total_price' => $this->totalPrice,
            ],
        );
    }

    public function check()
    {
        $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Please add some items to your cart first']);
    }

    public function render()
    {
        return view('livewire.website.carts.carts')->layout('layout.website.cart');
    }
}

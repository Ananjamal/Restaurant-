<?php

namespace App\Http\Livewire\Website\Checkout;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Price;
use Livewire\Component;
use App\Models\OrderItem;
use App\Models\UserAddress;

class Checkout extends Component
{
    public $user_id;
    public $device_id;

    public $CartItems;
    public $subtotalPrice;
    public $totalPrice;
    public $shippingPrice;
    public $discount;

    public $first_name;
    public $last_name;
    public $phone;
    public $address;
    public $city;
    public $state;
    public $country;
    public $zip_code;
    public $payment_method;

    public function mount()
    {
        if (auth()->check()) {
            $this->user_id = auth()->id();
            $this->CartItems = Cart::where('user_id', $this->user_id)
                ->with('menu')
                ->get();
            $this->prices = Price::where('user_id', $this->user_id)->first();
        }

        $this->subtotalPrice = $this->prices->sub_total;
        $this->totalPrice = $this->prices->total_price;
        $this->shippingPrice = $this->prices->shipping;
        $this->discount = $this->prices->discount;
    }

    public function placeOrder()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'zip_code' => 'required',
            'payment_method'=>'required'
        ]);
        $order = Order::create([
            'user_id' => $this->user_id,
            'total_amount' => $this->prices->total_price,
            'payment_method' => $this->payment_method,

        ]);
        foreach ($this->CartItems as $cart) {
            $orderItems = OrderItem::create([
                'order_id' => $order->id,
                'menu_id' => $cart->menu->id,
                'quantity' => $cart->quantity,
            ]);
        }
        $userAddress = UserAddress::create([
            'user_id' => $this->user_id,
            'order_id' => $order->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone' => $this->phone,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'country' => $this->country,
            'zip_code' => $this->zip_code,
        ]);
        $this->reset([
            'first_name',
            'last_name',
            'phone',
            'address',
            'city',
            'state',
            'country',
            'zip_code',
            'payment_method'
        ]);
        $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'Order Placed Successfully.']);
        return redirect()->route('/');
    }
    public function render()
    {
        return view('livewire.website.checkout.checkout')->layout('layout.website.checkout');
    }
}

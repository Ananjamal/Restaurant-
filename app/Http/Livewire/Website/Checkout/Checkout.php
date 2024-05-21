<?php

namespace App\Http\Livewire\Website\Checkout;

use App\Models\Cart;
use App\Models\Price;
use Livewire\Component;

class Checkout extends Component
{
    public $user_id;
    public $CartItems;
    public $subtotalPrice;
    public $totalPrice;
    public $shippingPrice;
    public $discount;

    public function mount()
    {
        $this->user_id = auth()->id();
        $this->CartItems = Cart::where('user_id', $this->user_id)
            ->with('menu')
            ->get();
        $prices =Price::where('user_id', $this->user_id)->first();
        $this->subtotalPrice = $prices->sub_total;
        $this->totalPrice = $prices->total_price;
        $this->shippingPrice = $prices->shipping;
        $this->discount = $prices->discount;
    }

    public function render()
    {
        return view('livewire.website.checkout.checkout')->layout('layout.website.checkout');
    }
}

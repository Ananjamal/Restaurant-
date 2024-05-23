<?php

namespace App\Http\Livewire\Website\Orders;

use App\Models\User;
use Livewire\Component;
use App\Models\OrderItem;

class OrderDetails extends Component
{
    public $orderItems;
    public $counter;
    public function mount($id)
    {
        $this->orderItems = OrderItem::where('order_id', $id)->get();
    }
    public function render()
    {
        return view('livewire.website.orders.order-details')->layout('layout.website.orders');
    }
}

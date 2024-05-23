<?php

namespace App\Http\Livewire\Website\Orders;

use App\Models\Order;
use Livewire\Component;

class Orders extends Component
{
    public $orders;
    public $order_id;
    protected $listeners = [
        'refreshPage' => 'mount',
    ];
    // #[On('refreshPage')]
    public function mount()
    {
        $this->orders = Order::whereHas('userAddress')->where('user_id', auth()->id())->get();
        $this->order_id = null;
    }
    public function cancelOrder($id)
    {
        $this->order_id = $id;
    }

    public function orderDetails($id)
    {
        $this->order_id = $id;
    }
    public function refresh(){
        $this->mount();
    }
    public function render()
    {
        return view('livewire.website.orders.orders')->layout('layout.website.orders');
    }
}

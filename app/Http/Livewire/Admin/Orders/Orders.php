<?php

namespace App\Http\Livewire\Admin\Orders;

use App\Models\Order;
use Livewire\Component;

class Orders extends Component
{
    public $orders;
    public $order_id;
    protected $listeners = [
        'refreshPage' => 'mount',
        'flash' => 'flash',
        'errorFlash' => 'errorFlash',
    ];
    // #[On('refreshPage')]
    public function mount()
    {
        $this->orders = Order::whereHas('userAddress')->get();
        $this->order_id = null;
    }
    public function completeOrder($id)
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
    public function flash($message)
    {
        session()->flash('success', $message);
    }
    public function errorFlash($message1)
    {
        session()->flash('error', $message1);
    }
    public function render()
    {
        return view('livewire.admin.orders.orders');
    }
}

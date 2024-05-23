<?php

namespace App\Http\Livewire\Admin\Orders;

use App\Models\Order;
use Livewire\Component;

class CompleteOrder extends Component
{
    public $order_id;

    public function mount($id)
    {
        $this->order_id = $id;
    }

    public function completeOrder()
    {
        $order = Order::find($this->order_id);

        if ($order->status == 'delivered') {
            $message = 'Order is already delivered.';
            $this->emit('errorFlash', $message);
            $this->emit('hideModal', 'completeOrder'); // Emit event to notify JS
            return;
        } elseif ($order->status == 'cancelled') {
            $message1 = 'Order is Cancelled.';
            $this->emit('errorFlash', $message1);
            $this->emit('hideModal', 'completeOrder'); // Emit e        }
            return;
        }
        $order->update(['status' => 'delivered']);
        $message = 'Order has been successfully delivered.';
        $this->emit('flash', $message);
        $this->emit('hideModal', 'completeOrder'); // Emit event to notify JS

        $this->emit('refreshPage');
    }
    public function refresh()
    {
        $this->emit('refreshPage');
    }
    public function render()
    {
        return view('livewire.admin.orders.complete-order');
    }
}

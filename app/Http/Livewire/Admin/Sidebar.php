<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Sidebar extends Component
{
    public function category(){
        $this->emit('expandCategories');
    }
    public function menu(){
        $this->emit('expandMenus');
    }
    public function coupon(){
        $this->emit('expandCoupons');
    }
    public function order(){
        $this->emit('expandOrders');
    }
    public function table(){
        $this->emit('expandTables');
    }
    public function reservation(){
        $this->emit('expandReservations');
    }
    public function chef(){
        $this->emit('expandChefs');
    }
    public function render()
    {
        return view('livewire.admin.sidebar')->layout('layout.admin.app');
    }
}

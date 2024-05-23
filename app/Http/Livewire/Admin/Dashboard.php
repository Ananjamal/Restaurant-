<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    public $categories = false;
    public $menus = false;
    public $coupons = false;
    public $orders = true;


    protected $listeners = [
        'expandCategories' => 'expandCategories',
        'expandMenus' => 'expandMenus',
        'expandCoupons' => 'expandCoupons',
        'expandOrders' => 'expandOrders',

    ];
    public function expandCategories()
    {
        $this->categories = true;
        $this->menus = false;
        $this->coupons = false;
        $this->orders = false;
    }
    public function expandMenus()
    {
        $this->categories = false;
        $this->menus = true;
        $this->coupons = false;
        $this->orders = false;

    }
    public function expandCoupons()
    {
        $this->coupons = true;
        $this->categories = false;
        $this->menus = false;
        $this->orders = false;

    }
    public function expandOrders()
    {
        $this->coupons = false;
        $this->categories = false;
        $this->menus = false;
        $this->orders = true;

    }

    public function render()
    {
        return view('livewire.admin.dashboard')->layout('layout.admin.app');
    }
}

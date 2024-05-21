<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    public $categories = false;
    public $menus = false;
    public $coupons = true;

    protected $listeners = [
        'expandCategories' => 'expandCategories',
        'expandMenus' => 'expandMenus',
        'expandCoupons' => 'expandCoupons',
    ];
    public function expandCategories()
    {
        $this->categories = true;
        $this->menus = false;
        $this->coupons = false;
    }
    public function expandMenus()
    {
        $this->categories = false;
        $this->menus = true;
        $this->coupons = false;
    }
    public function expandCoupons()
    {
        $this->coupons = true;
        $this->categories = false;
        $this->menus = false;
    }

    public function render()
    {
        return view('livewire.admin.dashboard')->layout('layout.admin.app');
    }
}

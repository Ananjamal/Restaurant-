<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    public $categories = false;
    public $menus = false;
    public $coupons = false;
    public $orders = false;
    public $tables = false;
    public $reservations = false;
    public $chefs = false;
    public $gallery = true;



    protected $listeners = [
        'expandCategories' => 'expandCategories',
        'expandMenus' => 'expandMenus',
        'expandCoupons' => 'expandCoupons',
        'expandOrders' => 'expandOrders',
        'expandTables' => 'expandTables',
        'expandReservations' => 'expandReservations',
        'expandChefs' => 'expandChefs',
        'expandGallery' => 'expandGallery',


    ];
    public function expandCategories()
    {
        $this->categories = true;
        $this->menus = false;
        $this->coupons = false;
        $this->orders = false;
        $this->tables = false;
        $this->reservations = false;
        $this->chefs = false;
        $this->gallery = false;

    }
    public function expandMenus()
    {
        $this->categories = false;
        $this->menus = true;
        $this->coupons = false;
        $this->orders = false;
        $this->tables = false;
        $this->reservations = false;
        $this->chefs = false;
        $this->gallery = false;

    }
    public function expandCoupons()
    {
        $this->coupons = true;
        $this->categories = false;
        $this->menus = false;
        $this->orders = false;
        $this->tables = false;
        $this->reservations = false;
        $this->chefs = false;

    }
    public function expandOrders()
    {
        $this->coupons = false;
        $this->categories = false;
        $this->menus = false;
        $this->orders = true;
        $this->tables = false;
        $this->reservations = false;
        $this->chefs = false;

    }
    public function expandTables()
    {
        $this->tables = true;
        $this->coupons = false;
        $this->categories = false;
        $this->menus = false;
        $this->orders = false;
        $this->reservations = false;
        $this->chefs = false;
        $this->gallery = false;

    }
    public function expandReservations()
    {
        $this->reservations = true;
        $this->tables = false;
        $this->coupons = false;
        $this->categories = false;
        $this->menus = false;
        $this->orders = false;
        $this->chefs = false;
        $this->gallery = false;

    }
    public function expandChefs()
    {
        $this->chefs = true;
        $this->reservations = false;
        $this->tables = false;
        $this->coupons = false;
        $this->categories = false;
        $this->menus = false;
        $this->orders = false;
        $this->gallery = false;

    }
    public function expandGallery()
    {
        $this->gallery = true;

        $this->chefs = false;
        $this->reservations = false;
        $this->tables = false;
        $this->coupons = false;
        $this->categories = false;
        $this->menus = false;
        $this->orders = false;
    }

    public function render()
    {
        return view('livewire.admin.dashboard')->layout('layout.admin.app');
    }
}

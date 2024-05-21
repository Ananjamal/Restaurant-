<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.admin.navbar')->layout('layout.admin.app');
    }
}

<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Main extends Component
{
    public function render()
    {
        return view('livewire.admin.main')->layout('layout.admin.app');
    }
}

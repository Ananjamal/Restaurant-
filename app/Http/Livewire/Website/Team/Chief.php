<?php

namespace App\Http\Livewire\Website\Team;

use App\Models\Chef;
use Livewire\Component;

class Chief extends Component
{
    public function render()
    {
        $chefs = Chef::all();
        return view('livewire.website.team.chief',[
            'chefs' => $chefs
        ]);
    }
}

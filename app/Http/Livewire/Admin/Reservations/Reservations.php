<?php

namespace App\Http\Livewire\Admin\Reservations;

use Livewire\Component;
use App\Models\Reservation;

class Reservations extends Component
{
    public $counter;
    public function render()
    {
        $reservations = Reservation::all();
        return view('livewire.admin.reservations.reservations',[
            'reservations' => $reservations
        ]);
    }
}

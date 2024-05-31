<?php

namespace App\Http\Livewire\Website\Reservations;

use Livewire\Component;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class MyReservations extends Component
{
    public $reservation_id;
    public $user_id;
    public $counter;
    public $pageTitle;

    protected $listeners = [
        'refreshPage' => 'refresh',
    ];
    public function mount()
    {
        $this->user_id = Auth::id();
        $this->pageTitle = 'Reservations'; // Set the title here
    }

    public function cancelResresvation($id)
    {
        $this->reservation_id = $id;
    }
    public function refresh()
    {
        $this->reservation_id = null;
    }
    public function render()
    {
        $reservations = Reservation::where('user_id', $this->user_id)->get();
        return view('livewire.website.reservations.my-reservations', [
            'reservations' => $reservations,
        ])->layout('layout.website.reservations');
    }
}

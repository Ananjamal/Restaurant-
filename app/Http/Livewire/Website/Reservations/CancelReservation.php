<?php

namespace App\Http\Livewire\Website\Reservations;

use Livewire\Component;
use App\Models\Reservation;

class CancelReservation extends Component
{
    public $reservation_id;
    public function mount($id)
    {
        $this->reservation_id = $id;
    }
    public function cancelReservation()
    {
        $reservation = Reservation::find($this->reservation_id);
        if ($reservation->status == 'cancelled') {
            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Reservation is already cancelled.']);
            $this->emit('hideModal', 'cancelReservation'); // Emit event to notify JS
            return;
        }

        $reservation->update(['status' => 'cancelled']);

        $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'Your Reservation has been successfully canceled.']);
        $this->emit('hideModal', 'cancelReservation'); // Emit event to notify JS

        $this->emit('refreshPage');
    }
    public function render()
    {
        return view('livewire.website.reservations.cancel-reservation');
    }
}

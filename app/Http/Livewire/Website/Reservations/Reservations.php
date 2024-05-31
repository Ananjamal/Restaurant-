<?php

namespace App\Http\Livewire\Website\Reservations;

use App\Models\Table;
use Livewire\Component;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

// class Reservations extends Component
// {
//     public $tablesAvailable;
//     public $user_id;
//     public $table_id;

//     public $name;
//     public $email;
//     public $phone;
//     public $date;
//     public $time;
//     public $num_guests;
//     public $occasion;

//     protected $rules = [
//         'table_id' => 'required|exists:tables,id',
//         'name' => 'required|string',
//         'email' => 'required|email',
//         'phone' => 'required|numeric',
//         'date' => 'required|date',
//         'time' => 'required|string',
//         'num_guests' => 'required|numeric',
//         'occasion' => 'required|string',
//     ];

//     public function updated($propertyName)
//     {
//         $this->validateOnly($propertyName);
//     }

//     public function mount()
//     {
//         $this->tablesAvailable = Table::all();

//         if (auth()->check()) {
//             $this->user_id = auth()->id();
//         } else {
//             session()->flash('error', 'Please login to make a reservation');
//         }
//     }

//     public function makeReservation()
//     {
//         if (!$this->user_id) {
//             $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Please login to make a reservation']);
//             return;
//         }

//         $validatedData = $this->validate();

//         Reservation::create([
//             'user_id' => $this->user_id,
//             'table_id' => $this->table_id,
//             'name' => $this->name,
//             'email' => $this->email,
//             'phone' => $this->phone,
//             'reservation_date' => $this->date,
//             'reservation_time' => $this->time,
//             'num_guests' => $this->num_guests,
//             'occasion' => $this->occasion,
//         ]);

//         $this->reset(['table_id', 'name', 'email', 'phone', 'date', 'time', 'num_guests', 'occasion']);
//         $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'Reservation successfully submitted.']);
//     }

//     public function getFilteredTablesProperty()
//     {
//          $this->tablesAvailable = Table::where('capacity', $this->num_guests)->get();

//     }

//     public function render()
//     {
//         return view('livewire.website.reservations.reservations');
//     }
// }

class Reservations extends Component
{
    public $user_id;
    public $table_id;
    public $name;
    public $email;
    public $phone;
    public $date;
    public $time;
    public $num_guests;
    public $occasion;

    protected $rules = [
        'table_id' => 'required|exists:tables,id',
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'date' => 'required|date',
        'time' => 'required|string',
        'num_guests' => 'required|numeric',
        'occasion' => 'required|string',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount()
    {
        if (auth()->check()) {
            $this->user_id = auth()->id();
        } else {
            session()->flash('error', 'Please login to make a reservation');
        }
    }

    public function makeReservation()
    {
        if (!$this->user_id) {
            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Please login to make a reservation']);
            return;
        }

        $validatedData = $this->validate();

        // Check if the selected table is available at the given date and time
        $tableAvailable = $this->isTableAvailable($this->table_id, $this->date, $this->time);

        if (!$tableAvailable) {
            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'The selected table is not available for the given date and time.']);
            return;
        }

        Reservation::create([
            'user_id' => $this->user_id,
            'table_id' => $this->table_id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'reservation_date' => $this->date,
            'reservation_time' => $this->time,
            'num_guests' => $this->num_guests,
            'occasion' => $this->occasion,
        ]);

        $this->reset(['table_id', 'name', 'email', 'phone', 'date', 'time', 'num_guests', 'occasion']);
        $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'Reservation successfully submitted.']);
    }

    public function isTableAvailable($tableId, $date, $time)
    {
        $existingReservation = Reservation::where('table_id', $tableId)
            ->where('reservation_date', $date)
            ->where('reservation_time', $time)
            ->exists();

        return !$existingReservation;
    }

    public function render()
    {
        $tablesAvailable = Table::where('capacity', $this->num_guests)->get();

        return view('livewire.website.reservations.reservations', ['tablesAvailable' => $tablesAvailable]);
    }
}

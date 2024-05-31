<?php

namespace App\Http\Livewire\Admin\Tables;

use App\Models\Table;
use Livewire\Component;

class Create extends Component
{
    public $capacity;

    protected $rules = [
        'capacity' => 'required|integer|min:1|max:10',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function create()
    {
        $validatedData = $this->validate();
        Table::create([
            'capacity' => $this->capacity,
        ]);

        $this->reset(['capacity']);
        $message = 'Table successfully created.';
        $this->emit('flash', $message);
        $this->emit('refreshPage');
        $this->emit('hideModal', 'CreateTable'); // Emit event to notify JS
    }

    public function render()
    {
        return view('livewire.admin.tables.create');
    }
}

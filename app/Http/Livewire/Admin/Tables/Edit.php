<?php

namespace App\Http\Livewire\Admin\Tables;

use App\Models\Table;
use Livewire\Component;

class Edit extends Component
{
    public $table_id;
    public $capacity;
    public $tables;

    protected $rules = [
        'capacity' => 'required|integer|min:1|max:10',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($id)
    {
        $this->tables = Table::all();
        $this->table_id = $id;
        $this->table = Table::find($id);
        $this->capacity = $this->table->capacity;
    }
    public function UpdateTable()
    {
        $validatedData = $this->validate();
        $data = [
            'capacity' => $this->capacity,
        ];
        $this->table->update($data);
        $this->reset(['capacity']);
        $message = 'Table Successfully Updated.';
        $this->emit('flash', $message);
        $this->emit('hideModal', 'EditTable');
        $this->emit('refreshPage');
    }
    public function refresh()
    {
        $this->emit('refreshPage');
    }
    public function render()
    {
        return view('livewire.admin.tables.edit');
    }
}

<?php

namespace App\Http\Livewire\Admin\Tables;

use App\Models\Table;
use Livewire\Component;

class Delete extends Component
{
    public $table_id;
    public $table;
    public function mount($id)
    {

        $this->table_id = $id;
        $this->table = Table::find($id);
    }
    public function delete()
    {
        $this->table->delete();
        $message = 'Table Deleted Successfully';
        $this->emit('flash', $message);
        $this->emit('refreshPage');
        $this->emit('hideModal', 'DeleteTable');
    }
    public function refresh()
    {
        $this->emit('refreshPage');
    }
    public function render()
    {
        return view('livewire.admin.tables.delete');
    }
}

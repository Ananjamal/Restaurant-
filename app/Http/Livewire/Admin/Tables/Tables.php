<?php

namespace App\Http\Livewire\Admin\Tables;

use App\Models\Table;
use Livewire\Component;

class Tables extends Component
{
    public $counter;
    public $table_id;


    protected $listeners = [
        'flash' => 'flash',
        'refreshPage' => 'refresh',
    ];

    public function deleteTable($id)
    {
        $this->table_id = $id;
    }
    public function editTable($id)
    {
        $this->table_id = $id;
    }

    public function flash($message)
    {
        session()->flash('success', $message);
    }
    public function refresh()
    {
        $this->table_id = null;
    }
    public function toggleAvailability($id)
    {
        $table = Table::find($id);
        $table->status = !$table->status;
        $table->save();
    }
    public function render()
    {
        $tables = Table::all();
        return view('livewire.admin.tables.tables',[
            'tables' => $tables,
        ]);
    }
}

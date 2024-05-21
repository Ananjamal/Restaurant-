<?php

namespace App\Http\Livewire\Admin\Menus;

use Livewire\Component;
use App\Models\Menu; // Assuming Menu is in the Models directory
use Illuminate\Support\Facades\Storage; // Correct namespace for Storage

class Delete extends Component
{
    public $item_id;
    public $item;
    public function mount($id)
    {
        
        $this->item_id = $id;
        $this->item = Menu::find($id);
    }
    public function delete()
    {

        Storage::delete($this->item->image);
        $this->item->delete();

        $message = 'Item Deleted Successfully';
        $this->emit('flash', $message);
        $this->emit('refreshPage');
        $this->emit('hideModal', 'DeleteItem');
    }
    public function refresh()
    {
        $this->emit('refreshPage');
    }
    public function render()
    {
        return view('livewire.admin.menus.delete');
    }
}

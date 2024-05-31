<?php

namespace App\Http\Livewire\Admin\Chefs;

use App\Models\Chef;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public $chef;
    public $chef_id;
    public function mount($id)
    {
        $this->chef_id = $id;
        $this->chef = Chef::find($id);
    }
    public function delete()
    {
        if ($this->chef->image) {
            Storage::delete($this->chef->image);
        }

        $this->chef->delete();

        $message = 'Chef Deleted Successfully';
        $this->emit('flash', $message);
        $this->emit('refreshPage');
        $this->emit('hideModal', 'DeleteChef');
    }
    public function refresh()
    {
        $this->emit('refreshPage');
    }

    public function render()
    {
        return view('livewire.admin.chefs.delete');
    }
}

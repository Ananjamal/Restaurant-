<?php

namespace App\Http\Livewire\Admin\Galleries;

use App\Models\Gallery;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public $gallery;
    public $gallery_id;
    public function mount($id)
    {
        $this->gallery_id = $id;
        $this->gallery = Gallery::find($id);
    }
    public function delete()
    {
        if ($this->gallery->image) {
            Storage::delete($this->gallery->image);
        }

        $this->gallery->delete();

        $message = 'Picture Deleted Successfully';
        $this->emit('flash', $message);
        $this->emit('refreshPage');
        $this->emit('hideModal', 'DeleteGallery');
    }
    public function refresh()
    {
        $this->emit('refreshPage');
    }
    public function render()
    {
        return view('livewire.admin.galleries.delete');
    }
}

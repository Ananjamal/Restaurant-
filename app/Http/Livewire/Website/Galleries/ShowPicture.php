<?php

namespace App\Http\Livewire\Website\Galleries;

use App\Models\Gallery;
use Livewire\Component;

class ShowPicture extends Component
{
    public $gallery_id;
    public $image;
    public $title;

    public function mount($id)
    {
        $gallery = Gallery::find($id);
        $this->gallery_id = $id;
        $this->image = $gallery->image;
        $this->title = $gallery->title;
    }

    public function render()
    {
        return view('livewire.website.galleries.show-picture');
    }
}
?>

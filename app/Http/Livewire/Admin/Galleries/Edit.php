<?php

namespace App\Http\Livewire\Admin\Galleries;

use App\Models\Gallery;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;

    public $gallery_id;
    public $gallery;
    public $title;
    public $description;
    public $newImage;

    public function mount($id)
    {
        $this->gallery_id = $id;
        $this->gallery = Gallery::find($id);
        $this->title = $this->gallery->title;
        $this->description = $this->gallery->description;
    }

    public function UpdateGallery()
    {
        $this->validate([
            'title' => 'min:3',
            'description' => 'min:3',
            'newImage' => 'nullable',
        ]);
        $data = [
            'title' => $this->title,
            'description' => $this->description,
        ];

        if ($this->newImage) {
            // Delete previous image if it exists
            if ($this->gallery->image) {
                Storage::delete($this->gallery->image);
            }
            // Store new image
            $data['image'] = $this->newImage->store('public/galleries');
        }

        $this->gallery->update($data);
        $this->reset(['title', 'description', 'newImage']);
        $message = 'Picture Successfully Updated.';
        $this->emit('flash', $message);
        $this->emit('hideModal', 'EditGallery');
        $this->emit('refreshPage');
    }
    public function refresh(){
        $this->emit('refreshPage');
    }
    public function render()
    {
        return view('livewire.admin.galleries.edit');
    }
}

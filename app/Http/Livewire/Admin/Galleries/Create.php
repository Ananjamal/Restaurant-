<?php

namespace App\Http\Livewire\Admin\Galleries;

use App\Models\Gallery;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $image;

    protected $rules = [
        'title' => 'required|min:3',
        'description' => 'required|min:6',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $validatedData = $this->validate();

        if ($this->image) {
            $imagePath = $this->image->store('public/galleries');
            $validatedData['image'] = $imagePath;
        }

        Gallery::create([
            'title' => $this->title,
            'description' => $this->description,
            'image' => $imagePath,
        ]);

        $this->reset(['title', 'description', 'image']);
        $message = "Picture successfully created.";
        $this->emit('flash', $message);
        $this->emit('hideModal','CreateGallery'); // Emit event to notify JS
    }
    public function render()
    {
        return view('livewire.admin.galleries.create');
    }
}

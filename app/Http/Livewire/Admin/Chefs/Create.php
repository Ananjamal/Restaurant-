<?php

namespace App\Http\Livewire\Admin\Chefs;

use App\Models\Chef;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $specialization;
    public $bio;
    public $image;

    protected $rules = [
        'name' => 'required|min:3',
        'specialization' => 'required',
        'bio' => 'required|min:6',
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
            $imagePath = $this->image->store('public/chefs');
            $validatedData['image'] = $imagePath;
        }

        Chef::create([
            'name' => $this->name,
            'specialization' => $this->specialization,
            'bio' => $this->bio,
            'image' => $imagePath,
        ]);

        $this->reset(['name', 'specialization', 'bio', 'image']);
        $message = 'Chef successfully created.';
        $this->emit('flash', $message);
        $this->emit('hideModal', 'CreateChef'); // Emit event to notify JS
    }

    public function render()
    {
        return view('livewire.admin.chefs.create');
    }
}

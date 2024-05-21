<?php

namespace App\Http\Livewire\Admin\Categories;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $description;
    public $image;

    protected $rules = [
        'name' => 'required|min:3',
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
            $imagePath = $this->image->store('public/categories');
            $validatedData['image'] = $imagePath;
        }

        Category::create([
            'name' => $this->name,
            'description' => $this->description,
            'image' => $imagePath,
        ]);

        $this->reset(['name', 'description', 'image']);
        $message = "Category successfully created.";
        $this->emit('flash', $message);
        $this->emit('hideModal','CreateCategory'); // Emit event to notify JS
    }

    public function render()
    {
        return view('livewire.admin.categories.create');
    }
}

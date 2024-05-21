<?php

namespace App\Http\Livewire\Admin\Menus;

use App\Models\Menu;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $category_id;
    public $description;
    public $image;
    public $availability;
    public $price;

    protected $rules = [
        'name' => 'required|min:3',
        'category_id' => 'required|exists:categories,id',
        'description' => 'required|min:6',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // 'availability' => 'boolean',
        'price' => 'required|numeric|min:0',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function store()
    {
        $validatedData = $this->validate();

        if ($this->image) {
            $imagePath = $this->image->store('public/menus');
            $validatedData['image'] = $imagePath;
        }

        Menu::create([
            'name' => $this->name,
            'category_id' => $this->category_id,
            'description' => $this->description,
            'price' => $this->price,
            // 'availability' => $this->availability,
            'image' => $imagePath,
        ]);

        $this->reset(['name', 'description', 'image','price','category_id']);
        $message = 'Item successfully created.';
        $this->emit('flash', $message);
        $this->emit('hideModal', 'CreateItem'); // Emit event to notify JS
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.menus.create', [
            'categories' => $categories,
        ]);
    }
}

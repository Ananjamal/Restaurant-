<?php

namespace App\Http\Livewire\Admin\Categories;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;

    public $category_id;
    public $category;
    public $name;
    public $description;
    public $newImage;

    public function mount($id)
    {
        $this->category_id = $id;
        $this->category = Category::find($id);
        $this->name = $this->category->name;
        $this->description = $this->category->description;
    }

    public function UpdateCategory()
    {
        $this->validate([
            'name' => 'min:3',
            'description' => 'min:3',
            'newImage' => 'nullable',
        ]);
        $data = [
            'name' => $this->name,
            'description' => $this->description,
        ];

        if ($this->newImage) {
            // Delete previous image if it exists
            if ($this->category->image) {
                Storage::delete($this->category->image);
            }
            // Store new image
            $data['image'] = $this->newImage->store('public/categories');
        }

        $this->category->update($data);
        $this->reset(['name', 'description', 'newImage']);
        $message = 'Category Successfully Updated.';
        $this->emit('flash', $message);
        $this->emit('hideModal', 'EditCategory');
        $this->emit('refreshPage');
    }
    public function refresh(){
        $this->emit('refreshPage');
    }
    public function render()
    {
        return view('livewire.admin.categories.edit');
    }
}

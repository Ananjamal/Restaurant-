<?php

namespace App\Http\Livewire\Admin\Menus;

use App\Models\Menu;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;

    public $item_id;
    public $name;
    public $category_id;
    public $price;
    public $description;
    public $newImage;
    public $categories;
    protected $rules = [
        'name' => 'min:3',
        'category_id' => 'exists:categories,id',
        'description' => 'min:6',
        'newImage' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4000',
        'price' => 'numeric|min:0',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($id)
    {
        $this->categories = Category::all();
        $this->item_id = $id;
        $this->item = Menu::find($id);
        $this->name = $this->item->name;
        $this->category_id = $this->item->category_id;
        $this->price = $this->item->price;
        $this->description = $this->item->description;
    }
    public function UpdateItem()
    {
        $validatedData = $this->validate();
        $data = [
            'name' => $this->name,
            'category_id' => $this->category_id,
            'price' => $this->price,
            'description' => $this->description,
        ];
        if ($this->newImage) {
            if ($this->item->image) {
                Storage::delete($this->item->image);
            }
            $data['image'] = $this->newImage->store('public/menus');
        }
        $this->item->update($data);
        $this->reset(['name', 'description', 'newImage','price','category_id']);
        $message = 'Item Successfully Updated.';
        $this->emit('flash', $message);
        $this->emit('hideModal', 'EditItem');
        $this->emit('refreshPage');
    }
    public function refresh()
    {
        $this->emit('refreshPage');
    }
    public function render()
    {
        return view('livewire.admin.menus.edit');
    }
}

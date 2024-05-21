<?php

namespace App\Http\Livewire\Admin\Categories;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public $category;
    public $category_id;
    public function mount($id)
    {
        $this->category_id = $id;
        $this->category = Category::find($id);
    }
    public function delete()
    {
        if ($this->category->image) {
            Storage::delete($this->category->image);
        }

        $this->category->delete();

        $message = 'Category Deleted Successfully';
        $this->emit('flash', $message);
        $this->emit('refreshPage');
        $this->emit('hideModal', 'DeleteCategory');
    }
    public function refresh()
    {
        $this->emit('refreshPage');
    }

    public function render()
    {
        return view('livewire.admin.categories.delete');
    }
}

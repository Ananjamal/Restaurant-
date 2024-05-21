<?php

namespace App\Http\Livewire\Admin\Categories;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination;

    protected $listeners = [
        'flash' => 'flash',
        'refreshPage' => 'refresh',
    ];
    public $category_id;
    public $counter;
    // public function mount(){
    //     $this->category_id = null;
    // }
    public function flash($message)
    {
        session()->flash('success', $message);
    }
    public function refresh()
    {
        // $this->mount();
        $this->category_id = null;
    }
    public function deleteCategory($id)
    {
        $this->category_id = $id;
    }
    public function editCategory($id)
    {
        $this->category_id = $id;
    }
    public function render()
    {
        $categories = Category::latest()->paginate(10);
        return view('livewire.admin.categories.categories', [
            'categories' => $categories,
        ]);
    }
}

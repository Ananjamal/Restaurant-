<?php

namespace App\Http\Livewire\Admin\Menus;

use App\Models\Menu;
use Livewire\Component;
use Livewire\WithPagination;

class Menus extends Component
{
    use WithPagination;
    public $counter;
    public $item_id;
    public $availability;

    protected $listeners = [
        'flash' => 'flash',
        'refreshPage' => 'refresh',
    ];

    public function deleteItem($id)
    {
        $this->item_id = $id;
    }
    public function editItem($id)
    {
        $this->item_id = $id;
    }
    public function toggleAvailability($id)
    {
        $item = Menu::find($id);
        $item->availability = !$item->availability;
        $item->save();
    }
    public function flash($message)
    {
        session()->flash('success', $message);
    }
    public function refresh()
    {
        $this->item_id = null;
    }
    public function render()
    {
        $menu = Menu::latest()->paginate(10);
        return view('livewire.admin.menus.menus', [
            'menu' => $menu,
        ]);
    }
}

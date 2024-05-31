<?php

namespace App\Http\Livewire\Admin\Chefs;

use App\Models\Chef;
use Livewire\Component;
use Livewire\WithPagination;

class Chefs extends Component
{
    use WithPagination;

    protected $listeners = [
        'flash' => 'flash',
        'refreshPage' => 'refresh',
    ];
    public $chef_id;
    public $counter;

    public function flash($message)
    {
        session()->flash('success', $message);
    }
    public function refresh()
    {
        // $this->mount();
        $this->chef_id = null;
    }
    public function deleteChef($id)
    {
        $this->chef_id = $id;
    }
    public function editChef($id)
    {
        $this->chef_id = $id;
    }
    public function render()
    {
        $chefs = Chef::latest()->paginate(10);

        return view('livewire.admin.chefs.chefs',[
            'chefs' => $chefs,
        ]);
    }
}

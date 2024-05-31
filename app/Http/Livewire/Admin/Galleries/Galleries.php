<?php

namespace App\Http\Livewire\Admin\Galleries;

use App\Models\Gallery;
use Livewire\Component;
use Livewire\WithPagination;

class Galleries extends Component
{
    use WithPagination;

    protected $listeners = [
        'flash' => 'flash',
        'refreshPage' => 'refresh',
    ];
    public $gallery_id;
    public $counter;

    public function flash($message)
    {
        session()->flash('success', $message);
    }
    public function refresh()
    {
        $this->gallery_id = null;
    }
    public function deleteGallery($id)
    {
        $this->gallery_id = $id;
    }
    public function editGallery($id)
    {
        $this->gallery_id = $id;
    }
    public function render()
    {
        $galleries = Gallery::latest()->paginate(10);
        return view('livewire.admin.galleries.galleries',[
            'galleries' => $galleries,
        ]);
    }
}

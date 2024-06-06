<?php

namespace App\Http\Livewire\Website\Galleries;

use App\Models\Gallery;
use Livewire\Component;

class Galleries extends Component
{
    public $gallery_id;
    public $gallery;
    public $title;
    public $image;

    // public function showPic($id){
    //     $this->gallery_id = $id;

    // }
    // public function refresh($id){
    //     $this->gallery_id = null;

    // }
    public function render()
    {
        $galleries = Gallery::all();
        return view('livewire.website.galleries.galleries', [
            'galleries' => $galleries,
        ]);
    }
}

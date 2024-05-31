<?php

namespace App\Http\Livewire\Admin\Chefs;

use App\Models\Chef;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;

    public $chef_id;
    public $chef;
    public $name;
    public $specialization;
    public $bio;
    public $newImage;

    public function mount($id)
    {
        $this->chef_id = $id;
        $this->chef = Chef::find($id);
        $this->name = $this->chef->name;
        $this->specialization = $this->chef->specialization;
        $this->bio = $this->chef->bio;
    }

    public function UpdateChef()
    {
        $this->validate([
            'name' => 'min:3',
            'specialization' => '',
            'bio' => 'min:3',
            'newImage' => 'nullable',
        ]);
        $data = [
            'name' => $this->name,
            'specialization' => $this->specialization,
            'bio' => $this->bio,

        ];

        if ($this->newImage) {
            // Delete previous image if it exists
            if ($this->chef->image) {
                Storage::delete($this->chef->image);
            }
            // Store new image
            $data['image'] = $this->newImage->store('public/chefs');
        }

        $this->chef->update($data);
        $this->reset(['name', 'specialization', 'bio', 'newImage']);
        $message = 'chef Successfully Updated.';
        $this->emit('flash', $message);
        $this->emit('hideModal', 'EditChef');
        $this->emit('refreshPage');
    }
    public function refresh()
    {
        $this->emit('refreshPage');
    }
    public function render()
    {
        return view('livewire.admin.chefs.edit');
    }
}

<?php

namespace App\Http\Livewire\Admin\Contacts;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class Contacts extends Component
{
    use WithPagination;
    public $counter;
    public function render()
    {
        $messages = Contact::latest()->paginate(10);
        return view('livewire.admin.contacts.contacts',[
            'messages' => $messages
        ]);
    }
}

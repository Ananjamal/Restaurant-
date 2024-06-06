<?php

namespace App\Http\Livewire\Website;

use App\Models\Menu;
use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;

class Footer extends Component
{
    use WithPagination;
    public $email;
    public $message;
    public function sendMessage()
    {
        $this->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);
        Contact::create([
            'email' => $this->email,
            'message' => $this->message,
        ]);
        $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'Your Message Sent Successfully.']);
        $this->reset('email', 'message');
    }
    public function render()
    {
        $menus = Menu::paginate(4);
        return view('livewire.website.footer',[
            'menus' => $menus,
        ]);
    }
}

<?php

namespace App\Http\Livewire\Website\Favorites;

use App\Models\Cart;
use App\Models\Menu;
use Livewire\Component;
use App\Models\Favorite;

class Favorites extends Component
{
    public $favorites;
    public $user_id;
    public $device_id;
    public $quantity = 1;
    public function mount()
    {
        if (auth()->check()) {
            $this->user_id = auth()->id();
            $this->favorites = Favorite::where('user_id', $this->user_id)
                ->with('menu')
                ->get();
        } else {
            $this->device_id = session()->getId();
            $this->favorites = Favorite::where('device_id', $this->device_id)
                ->with('menu')
                ->get();
        }
    }
    public function addToCart($id)
    {
        $item = Menu::find($id);

        if (auth()->check()) {
            $this->user_id = auth()->id();
        } else {
            $this->device_id = session()->getId();
        }

        $existingItem = null;
        if (auth()->check()) {
            $this->user_id = auth()->id();
            $existingItem = Cart::where('user_id', $this->user_id)
                ->where('item_id', $item->id)
                ->first();
        } elseif ($this->device_id) {
            $existingItem = Cart::where('device_id', $this->device_id)
                ->where('item_id', $item->id)
                ->first();
        }

        if ($existingItem) {
            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Item is already in your Cart.']);
        } else {
            Cart::create([
                'user_id' => $this->user_id,
                'device_id' => $this->device_id,
                'item_id' => $item->id,
                'item_name' => $item->name,
                'quantity' => $this->quantity,
                'price' => $item->price,
                'image' => $item->image,
                'total' => $item->price * $this->quantity,
            ]);
            $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'Item Added In Your Cart Successfully.']);
        }
    }
    public function deleteFromFavorites($id)
    {
        $item = Favorite::find($id);
        if (!$item) {
            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Item Not Found.']);
        }
        $item->delete();
        $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'Item Removed From Favorites Successfully.']);
        $this->mount();
    }
    public function render()
    {
        return view('livewire.website.favorites.favorites')->layout('layout.website.favorites');
    }
}

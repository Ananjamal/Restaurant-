<?php

namespace App\Http\Livewire\Website\Menus;

use App\Models\Cart;
use App\Models\Menu;
use Livewire\Component;
use App\Models\Favorite;
use Livewire\WithPagination;

class SpecialMenu extends Component
{
    public $user_id;
    public $device_id;
    public $quantity = 1;

    use WithPagination;
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
            $this->emit('refreshcount');
        }
    }
    public function addToFavorite($id)
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
            $existingItem = Favorite::where('user_id', $this->user_id)
                ->where('item_id', $item->id)
                ->first();
        } elseif ($this->device_id) {
            $existingItem = Favorite::where('device_id', $this->device_id)
                ->where('item_id', $item->id)
                ->first();
        }

        if ($existingItem) {
            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Item is already in your Favorites.']);
        } else {
            Favorite::create([
                'user_id' => $this->user_id,
                'device_id' => $this->device_id,
                'item_id' => $item->id,
            ]);
            $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'Item Added In Your Favorites Successfully.']);
            $this->emit('refreshcount');
        }
    }
    public function render()
    {
        $specialMenu = Menu::inRandomOrder()->paginate(3);
        return view('livewire.website.menus.special-menu', [
            'specialMenu' => $specialMenu,
        ]);
    }
}

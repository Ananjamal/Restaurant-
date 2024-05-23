<?php

namespace App\Models;

use App\Models\Menu;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'device_id', 'item_id', 'item_name', 'quantity', 'price', 'image', 'total'];

    public function menu()
    {
        return $this->belongsTo(Menu::class,'item_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    
}

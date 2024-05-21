<?php

namespace App\Models;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Favorite;
use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'name', 'image', 'price', 'description', 'availability'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'item_id', 'item_id');
    }
    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function carts()
    {
        return $this->belongsToMany(Cart::class);
    }
}

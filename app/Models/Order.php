<?php

namespace App\Models;

use App\Models\User;
use App\Models\OrderItem;
use App\Models\UserAddress;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'total_amount', 'type', 'payment_method', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function prices()
    {
        return $this->hasMany(Price::class);
    }
    public function userAddress()
    {
        return $this->hasOne(UserAddress::class);
    }
}

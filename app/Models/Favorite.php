<?php

namespace App\Models;

use App\Models\Menu;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Favorite extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','device_id','item_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'item_id'); // Assuming 'item_id' is the foreign key in favorites table
    }
}

<?php

namespace App\Models;

use App\Models\User;
use App\Models\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = ['table_id', 'name', 'email', 'phone', 'reservation_date', 'reservation_time', 'num_guests', 'occasion', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function table()
    {
        return $this->belongsTo(Table::class);
    }

    public function getReservationDateTimeAttribute()
    {
        return $this->reservation_date . ' ' . $this->reservation_time;
    }
}

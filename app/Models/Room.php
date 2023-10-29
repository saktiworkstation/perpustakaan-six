<?php

namespace App\Models;

use App\Models\BookingRoom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function bookingRoom(){
        return $this->hasMany(BookingRoom::class);
    }
}

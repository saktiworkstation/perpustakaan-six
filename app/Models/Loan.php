<?php

namespace App\Models;

use App\Models\Book;
use App\Models\User;
use App\Models\BookReturn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Loan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function book(){
        return $this->belongsTo(Book::class, 'buku_id');
    }

    public function bookReturn(){
        return $this->hasMany(BookReturn::class);
    }
}

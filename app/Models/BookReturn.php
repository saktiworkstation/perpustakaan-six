<?php

namespace App\Models;

use App\Models\Loan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BookReturn extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function loan(){
        return $this->belongsTo(Loan::class, 'id_pinjam');
    }
}

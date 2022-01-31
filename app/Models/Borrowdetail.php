<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowdetail extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
    public function borrow()
    {
        return $this->belongsTo(Borrow::class);
    }
  
}

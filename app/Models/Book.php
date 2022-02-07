<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{

    protected $guarded = [];
    use HasFactory;

    public function categories()
    {
        return $this->belongsTo(Category::class,'category','id');
    }


    
}

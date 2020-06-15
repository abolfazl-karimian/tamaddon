<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // Accessor
    public function getPriceAttribute($value)
    {
        return number_format($value).' تومان';
    }
}

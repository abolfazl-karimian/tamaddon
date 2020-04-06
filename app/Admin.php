<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Admin extends Model
{
    public static function GetInfo()
    {
       return Admin::latest()->first();
    }

    // Mutator
    public function setEmailAttribute($value)
    {
        $this->attributes['Email'] = ucfirst($value);
    }
}

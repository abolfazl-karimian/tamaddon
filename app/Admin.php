<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Admin extends Model
{
    public static function GetInfo()
    {
       return User::latest()->first();
    }

    //  Mutator
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = ucfirst($value);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public static function authorizedComments()
    {
        return static::where('authorized',1)->latest()->get();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public static function AuthorizedComments()
    {
        return static::where('Authorized',1)->latest()->get();
    }
}

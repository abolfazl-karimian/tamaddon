<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suggestion extends Model
{
    protected $fillable = ['full_name','body','email'];
}

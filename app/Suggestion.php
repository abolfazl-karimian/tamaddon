<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suggestion extends Model
{
    protected $fillable = ['FullName','Message','Email'];
}

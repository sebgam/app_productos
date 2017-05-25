<?php

namespace desaroolloG;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
     protected $fillable = [
        'name', 'short', 'body',
    ];
}

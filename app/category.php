<?php

namespace Advance;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = [
        'name', 'description',
    ];
}

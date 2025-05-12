<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feria extends Model
{
    protected $fillable = [
        'name',
        'date',
        'place',
        'address',
        'description',
    ];
}



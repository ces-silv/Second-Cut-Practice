<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emprendedores extends Model
{
    protected $fillable = [
        'name',
        'phone_number',
        'product',
    ];
}

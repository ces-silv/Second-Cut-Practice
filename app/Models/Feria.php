<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Emprenddores;
class Feria extends Model
{
    protected $fillable = [
        'name',
        'date',
        'place',
        'address',
        'description',
    ];

    public function emprendedores(){
        return $this->belongsToMany(Emprendedores::class, 'feria_emprendedor');
    }   

}



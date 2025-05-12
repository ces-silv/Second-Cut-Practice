<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Feria;

class Emprendedores extends Model
{
    protected $fillable = [
        'name',
        'phone_number',
        'product',
    ];

    public function ferias(){
        return $this->belongsToMany(Feria::class, 'feria_emprendedor');
    }

}

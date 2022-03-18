<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acessorio extends Model
{
    use HasFactory;

    public function marcas(){
        return $this->hasMany(Marca::class);
    }
}

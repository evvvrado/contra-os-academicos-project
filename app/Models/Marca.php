<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    public function historico(){
        return $this->hasMany(MarcaHistorico::class);
    }

    public function ingrediente(){
        return $this->belongsTo(Ingrediente::class);
    }

    public function acessorio(){
        return $this->belongsTo(Acessorio::class);
    }
}

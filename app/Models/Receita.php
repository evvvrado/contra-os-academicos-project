<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    use HasFactory;

    public function ingredientes(){
        return $this->belongsToMany(Ingrediente::class, "receita_ingredientes");
    }

    public function receita_ingredientes(){
        return $this->hasMany(ReceitaIngrediente::class);
    }
}

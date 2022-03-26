<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    use HasFactory;

    public function produtos(){
        return $this->belongsToMany(Produto::class, 'produto_ingredientes');
    }

    public function marcas(){
        return $this->hasMany(Marca::class);
    }

    public function fornecedores(){
        return $this->belongsToMany(Fornecedor::class, "ingrediente_fornecedors");
    }
}

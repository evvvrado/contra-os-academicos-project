<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrcamentoProdutoIngrediente extends Model
{
    use HasFactory;

    public function ingrediente(){
        return $this->belongsTo(Ingrediente::class);
    }

    public function marca(){
        return $this->belongsTo(Marca::class);
    }
}

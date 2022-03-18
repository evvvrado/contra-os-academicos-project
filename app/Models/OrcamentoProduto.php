<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrcamentoProduto extends Model
{
    use HasFactory;

    public function produto(){
        return $this->belongsTo(Produto::class);
    }

    public function orcamento_produto_ingredientes(){
        return $this->hasMany(OrcamentoProdutoIngrediente::class);
    }

    public function orcamento_produto_acessorios(){
        return $this->hasMany(OrcamentoProdutoAcessorio::class);
    }

    public function ingredientes(){
        return $this->belongsToMany(Ingrediente::class, "orcamento_produto_ingredientes");
    }

    public function acessorios(){
        return $this->belongsToMany(Acessorio::class, "orcamento_produto_acessorios");
    }
}

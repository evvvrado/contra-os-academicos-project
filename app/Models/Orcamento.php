<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    use HasFactory;

    public function produtos(){
        return $this->belongsToMany(Produto::class, 'orcamento_produtos');
    }

    public function orcamento_produtos(){
        return $this->hasMany(OrcamentoProduto::class);
    }

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function orcamento_servicos(){
        return $this->hasMany(OrcamentoServico::class);
    }

    public function servicos(){
        return $this->belongsToMany(Servico::class, "orcamento_servicos");
    }

    public function descontos(){
        return $this->hasMany(OrcamentoDesconto::class);
    }
}

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

    public function lead(){
        return $this->belongsTo(Lead::class);
    }
}

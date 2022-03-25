<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrcamentoProdutoAcessorio extends Model
{
    use HasFactory;

    public function acessorio(){
        return $this->belongsTo(Acessorio::class);
    }

    public function marca(){
        return $this->belongsTo(Marca::class);
    }
}

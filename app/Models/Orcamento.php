<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    use HasFactory;

    public function produtos(){
        return $this->belongsToMany(Produto::class, 'orcamentoprodutos');
    }

    public function lead(){
        return $this->belongsTo(Lead::class);
    }
}

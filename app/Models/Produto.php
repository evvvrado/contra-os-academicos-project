<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    public function ingredientes(){
        return $this->belongsToMany(Ingrediente::class, 'produto_ingredientes');
    }

    public function acessorios(){
        return $this->belongsToMany(Acessorio::class, 'produto_acessorios');
    }
}

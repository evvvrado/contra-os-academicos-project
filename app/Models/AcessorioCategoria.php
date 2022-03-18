<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcessorioCategoria extends Model
{
    use HasFactory;

    public function acessorios(){
        return $this->hasMany(Acessorio::class);
    }
}

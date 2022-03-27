<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReceitaAcessorio extends Model
{
    use HasFactory;

    public function acessorio(){
        return $this->belongsTo(Acessorio::class);
    }
}

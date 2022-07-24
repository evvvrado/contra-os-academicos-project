<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioSiteUltimosAcesso extends Model
{
    use HasFactory;

    public function blog(){
        return $this->belongsTo(Blog::class);
    }

    public function revista(){
        return $this->belongsTo(Revista::class);
    }

    public function lista(){
        return $this->belongsTo(Lista::class);
    }
}

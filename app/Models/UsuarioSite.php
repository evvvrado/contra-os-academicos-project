<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioSite extends Model
{
    use HasFactory;

    // ---------------------------------------------------
    public function blog_comentarios(){
        return $this->hasMany(BlogComentario::class);
    }

    public function blog_curtidas(){
        return $this->hasMany(BlogCurtir::class);
    }

    // ---------------------------------------------------
    public function lista_comentarios(){
        return $this->hasMany(ListaComentario::class);
    }

    public function lista_curtidas(){
        return $this->hasMany(ListaCurtir::class);
    }

    // ---------------------------------------------------
    public function revista_comentarios(){
        return $this->hasMany(RevistaComentario::class);
    }

    public function revista_curtidas(){
        return $this->hasMany(RevistaCurtir::class);
    }
}

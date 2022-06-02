<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComentario extends Model
{
    use HasFactory;

    public function usuario_site()
    {
        return $this->belongsTo(UsuarioSite::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function noticias(){
        return $this->belongsToMany(Noticia::class, "noticia_tags", "tag_id", "noticia_id");
    } 
}

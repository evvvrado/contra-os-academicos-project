<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public function revista(){
        return $this->hasOne(Revista::class);
    }

    public function blog(){
        return $this->hasOne(Blog::class);
    }

    public function lista(){
        return $this->hasOne(Lista::class);
    }

    public function curso(){
        return $this->hasOne(Curso::class);
    }
}

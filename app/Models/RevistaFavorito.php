<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RevistaFavorito extends Model
{
    use HasFactory;

    public function revista(){
        return $this->belongsTo(Revista::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailsNew extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
    ];
}

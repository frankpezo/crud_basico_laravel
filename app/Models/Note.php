<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    //1. Los campos que vamos a utilizar
    protected  $fillable=['title', 'description'];
}

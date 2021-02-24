<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios_proyectos extends Model
{
    use HasFactory;
    protected $table = 'usuarios_proyectos';

    protected $guarded = [];
}

<?php

// app/Models/Estudiante.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = ['codigo', 'nombres', 'contacto'];
}
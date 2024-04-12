<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['nombrec','apellidoc','edadc','correo_electronicoc','telefonoc','fecha_nacimientoc'];
    public $timestamps = false;
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programacion extends Model
{
    protected $fillable = ['id_user','id_valvula','id_producto','segmento','at','fecha'];
}

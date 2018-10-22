<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agroquimico extends Model
{
    protected $fillable = ['nombre','marca','familia','dh','unidad','stock'];
}

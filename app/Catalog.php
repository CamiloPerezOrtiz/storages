<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    //campos que se puede traer de la tabla
    protected $table = "user_catalog";
    protected $fillable = ['quantity'];
}

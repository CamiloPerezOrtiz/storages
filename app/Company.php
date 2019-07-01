<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //campos que se puede traer de la tabla
    protected $fillable = ['name','alias','rfc','address','logo','licence_id'];

    //relación 1:1
    public function license()
    {
        return $this->belongsTo('App\License');
    }

    //relación 1:N
    public function users()
    {
        return $this->hasMany('App\Users');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    //campos que se puede traer de la tabla
    protected $fillable = ['type','time','status','total_space','total_license','free_space','free_license','serial','end_date'];

    //relación de 1:1
    public function company()
    {
        return $this->hasOne('App\Company');
    }
}

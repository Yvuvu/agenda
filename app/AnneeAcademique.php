<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class AnneeAcademique extends Model
{
    public function semaine()
    {
        return $this->hasMany('App\Semaine');
    }   
}

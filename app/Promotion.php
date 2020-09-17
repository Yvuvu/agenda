<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Promotion extends Model
{
    public function seance()
    {
        return $this->hasMany('App\Seance');
    }
    // public function anneeacademique()
    // {
    //     return $this->belongsTo('App\AnneeAcademique');
    // }
}

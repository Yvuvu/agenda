<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Matiere extends Model
{
    public function seance()
    {
        return $this->hasMany('App\Seance');
    }
}

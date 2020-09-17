<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Professeur extends Model
{
    public function seance()
    {
        return $this->hasMany('App\Seance');
    }
    
}

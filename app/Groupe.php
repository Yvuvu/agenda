<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Groupe extends Model
{
    public function seance()
    {
        return $this->belongsTo('App\Seance');
    }
}
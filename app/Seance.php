<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Seance extends Model
{
    protected $fillable = ['title','start','end'];
    
    public function type()
    {
        return $this->belongsTo('App\Type');
    }
    public function matiere()
    {
        return $this->belongsTo('App\Matiere');
    }
    public function professeur()
    {
        return $this->belongsTo('App\Professeur');
    }
    public function semaine()
    {
        return $this->belongsTo('App\Semaine');
    }
    public function niveau()
    {
        return $this->belongsTo('App\Niveau');
    }
    public function groupe()
    {
        return $this->hasMany('App\Groupe');
    }
}

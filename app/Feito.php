<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feito extends Model
{
    protected $hidden = ['created_at', 'updated_at'];

    public function personas()
    {
        return $this->belongsToMany('App\Persona', 'persona_feito');
    }
}

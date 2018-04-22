<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pericia extends Model
{
    protected $hidden = ['created_at', 'updated_at'];

    public function personas()
    {
        return $this->belongsToMany('App\Persona', 'persona_pericia');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function pericias()
    {
        return $this->belongsToMany('App\Pericia', 'persona_pericia')
        ->as('info')
        ->withPivot('points');
    }

    public function feitos()
    {
        return $this->belongsToMany('App\Feito', 'persona_feito')
        ->as('info')
        ->withPivot('points');
    }
}

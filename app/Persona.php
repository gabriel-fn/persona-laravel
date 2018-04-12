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
        return $this->belongsToMany('App\Pericia');
    }

    public function feitos()
    {
        return $this->belongsToMany('App\Feito');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    protected $hidden = ['periciasPersona', 'feitosPersona']; 

    protected $appends = ['pericias', 'feitos'];

    public function getPericiasAttribute() 
    {
        return $this->periciasPersona->map(function ($pericia) {
            $id = $pericia->id;
            $label = $pericia->label;
            $bonusKeys = $pericia->bonus_key;
            $points = $pericia->info->points;
            return compact(['id', 'label', 'bonusKeys', 'points']);
        }); 
    }

    public function getFeitosAttribute() 
    {
        return $this->feitosPersona->map(function ($feito) {
            $id = $feito->id;
            $label = $feito->label;
            $points = $feito->info->points;
            return compact(['id', 'label', 'points']);
        }); 
    }

    public function periciasSync($pericias) 
    {
        $pericias_persona = array();
        foreach ($pericias as $pericia) {
            $pericias_persona[$pericia['id']] = ['points' => $pericia['points']];
        }
        $this->periciasPersona()->sync($pericias_persona);
    }

    public function feitosSync($feitos) 
    {
        $feitos_persona = array();
        foreach ($feitos as $feito) {
            $feitos_persona[$feito['id']] = ['points' => $feito['points']];
        }
        $this->feitosPersona()->sync($feitos_persona);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function periciasPersona()
    {
        return $this->belongsToMany('App\Pericia', 'pericia_persona')
        ->as('info')
        ->withPivot('points');
    }

    public function feitosPersona()
    {
        return $this->belongsToMany('App\Feito', 'feito_persona')
        ->as('info')
        ->withPivot('points');
    }
}

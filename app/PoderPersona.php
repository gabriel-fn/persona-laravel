<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PoderPersona extends Model
{
    protected $table = "poder_persona";

    protected $guarded = ['id'];

    protected $hidden = ['extrasPersona', 'falhasPersona', 'poderPersona', 'persona_id', 'created_at', 'updated_at'];

    protected $appends = ['extras', 'falhas', 'info'];

    public function getExtrasAttribute() 
    {
        return $this->extrasPersona->map(function ($extra) {
            $id = $extra->id;
            $nome = $extra->nome;
            $modificador = $extra->info->modificador;
            $modificador_min = $extra->modificador_min;
            $modificador_max = $extra->modificador_max;
            return compact(['id', 'nome', 'modificador', 'modificador_min', 'modificador_max']);
        }); 
    }

    public function getFalhasAttribute() 
    {
        return $this->falhasPersona->map(function ($falha) {
            $id = $falha->id;
            $nome = $falha->nome;
            $modificador = $falha->info->modificador;
            $modificador_min = $falha->modificador_min;
            $modificador_max = $falha->modificador_max;
            return compact(['id', 'nome', 'modificador', 'modificador_min', 'modificador_max']);
        }); 
    }

    public function getInfoAttribute()
    {
        return $this->poderPersona;
    }

    public function extrasPersona()
    {
        return $this->belongsToMany('App\Extra', 'extra_persona')
        ->as('info')
        ->withPivot('modificador');
    }

    public function falhasPersona()
    {
        return $this->belongsToMany('App\Falha', 'falha_persona')
        ->as('info')
        ->withPivot('modificador');
    }

    public function poderPersona()
    {
        return $this->belongsTo('App\Poder', 'poder_id');
    }
}

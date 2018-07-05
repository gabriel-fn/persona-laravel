<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PoderPersona extends Model
{
    protected $table = "poder_persona";

    protected $guarded = ['id'];

    protected $hidden = ['extrasPersona', 'falhasPersona', 'opcoesPersona', 'poderesAlternativosPersona', 'poderPersona', 'persona_id', 'created_at', 'updated_at'];

    protected $appends = ['nome', 'custo_min', 'custo_max', 'extras', 'falhas', 'opcoes', 'poderes_alternativos'];
    
    public function getNomeAttribute()
    {
        return $this->poderPersona->nome;
    }

    public function getCustoMinAttribute()
    {
        return $this->poderPersona->custo_min;
    }

    public function getCustoMaxAttribute()
    {
        return $this->poderPersona->custo_max;
    }

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

    public function getOpcoesAttribute() 
    {
        return $this->opcoesPersona->map(function ($opcao) {
            $id = $opcao->id;
            $nome = $opcao->nome;
            $modificador = $opcao->info->modificador;
            $modificador_min = $opcao->modificador_min;
            $modificador_max = $opcao->modificador_max;
            return compact(['id', 'nome', 'modificador', 'modificador_min', 'modificador_max']);
        }); 
    }

    public function getPoderesAlternativosAttribute() 
    {
        return $this->poderesAlternativosPersona->map(function ($poder_alternativo) {
            $id = $poder_alternativo->id;
            $nome = $poder_alternativo->nome;
            $modificador = $poder_alternativo->info->modificador;
            $modificador_min = 1;
            $modificador_max = 2;
            return compact(['id', 'nome', 'modificador', 'modificador_min', 'modificador_max']);
        }); 
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

    public function opcoesPersona()
    {
        return $this->belongsToMany('App\Opcao', 'opcao_persona')
        ->as('info')
        ->withPivot('modificador');
    }

    public function poderesAlternativosPersona()
    {
        return $this->belongsToMany('App\Poder', 'poder_poder')
        ->as('info')
        ->withPivot('modificador');
    }

    public function poderPersona()
    {
        return $this->belongsTo('App\Poder', 'poder_id');
    }
}

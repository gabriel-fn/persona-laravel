<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PoderPersona extends Model
{
    protected $table = "poder_persona";

    protected $guarded = ['id'];

    protected $hidden = ['extrasPersona', 'falhasPersona', 'opcoesPersona', 'poderesAlternativosPersona', 'poderPersona', 'persona_id', 'created_at', 'updated_at'];

    protected $appends = ['nome', 'custos', 'extras', 'falhas', 'opcoes', 'poderes_alternativos'];
    
    public function getNomeAttribute()
    {
        return $this->poderPersona->nome;
    }

    public function getCustosAttribute()
    {
        return $this->poderPersona->custos;
    }

    public function getExtrasAttribute() 
    {
        return $this->extrasPersona->map(function ($extra) {
            $id = $extra->id;
            $nome = $extra->nome;
            $modificador = $extra->info->modificador;
            $modificadores = $extra->modificadores;
            return compact(['id', 'nome', 'modificador', 'modificadores']);
        }); 
    }

    public function getFalhasAttribute() 
    {
        return $this->falhasPersona->map(function ($falha) {
            $id = $falha->id;
            $nome = $falha->nome;
            $modificador = $falha->info->modificador;
            $modificadores = $falha->modificadores;
            return compact(['id', 'nome', 'modificador', 'modificadores']);
        }); 
    }

    public function getOpcoesAttribute() 
    {
        return $this->opcoesPersona->map(function ($opcao) {
            $id = $opcao->id;
            $nome = $opcao->nome;
            $modificador = $opcao->info->modificador;
            $modificadores = $opcao->modificadores;
            return compact(['id', 'nome', 'modificador', 'modificadores']);
        }); 
    }

    public function getPoderesAlternativosAttribute() 
    {
        return $this->poderesAlternativosPersona->map(function ($poder_alternativo) {
            $id = $poder_alternativo->id;
            $nome = $poder_alternativo->nome;
            $modificador = $poder_alternativo->info->modificador;
            $modificadores = [1,2];
            return compact(['id', 'nome', 'modificador', 'modificadores']);
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

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
            $nome = $pericia->nome;
            $habilidade_chave = $pericia->habilidade_chave;
            $graduacao = $pericia->info->graduacao;
            return compact(['id', 'nome', 'habilidade_chave', 'graduacao']);
        }); 
    }

    public function getFeitosAttribute() 
    {
        return $this->feitosPersona->map(function ($feito) {
            $id = $feito->id;
            $nome = $feito->nome;
            $graduacao = $feito->info->graduacao;
            return compact(['id', 'nome', 'graduacao']);
        }); 
    }

    public function periciasSync($pericias) 
    {
        $pericias_persona = array();
        foreach ($pericias as $pericia) {
            $pericias_persona[$pericia['id']] = ['graduacao' => $pericia['graduacao']];
        }
        $this->periciasPersona()->sync($pericias_persona);
    }

    public function feitosSync($feitos) 
    {
        $feitos_persona = array();
        foreach ($feitos as $feito) {
            $feitos_persona[$feito['id']] = ['graduacao' => $feito['graduacao']];
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
        ->withPivot('graduacao');
    }

    public function feitosPersona()
    {
        return $this->belongsToMany('App\Feito', 'feito_persona')
        ->as('info')
        ->withPivot('graduacao');
    }
}

<?php

namespace Classes;

class Persona {
    public function __construct($persona) {

        $this->nome = $persona->nome;
        $this->np = $persona->np;
        
        $this->forca = $persona->forca;
        $this->destreza = $persona->destreza;
        $this->constituicao = $persona->constituicao;
        $this->inteligencia = $persona->inteligencia;
        $this->sabedoria = $persona->sabedoria;
        $this->carisma = $persona->carisma;
            
        $this->dano = $persona->dano;
        $this->ataque = $persona->ataque;
        $this->defesa = $persona->defesa;
        $this->vida = $persona->vida;
        $this->iniciativa = $persona->iniciativa;
        
        $this->resistencia = $persona->resistencia;
        $this->reflexo = $persona->reflexo;
        $this->fortitude = $persona->fortitude;
        $this->vontade = $persona->vontade;
        
        $this->feitos = $persona->feitos;
        $this->pericias = $persona->pericias;
        $this->desvantagens = $persona->desvantagens;
        $this->poderes = $persona->poderes;

    }

    public function bonusPoints() {
        return [   
            'forca' => floor(($this->forca-10)/2),
            'destreza' => floor(($this->destreza-10)/2),
            'constituicao' => floor(($this->constituicao-10)/2),
            'inteligencia' => floor(($this->inteligencia-10)/2),
            'sabedoria' => floor(($this->sabedoria-10)/2),
            'carisma' => floor(($this->carisma-10)/2),
        
            'dano' => floor(($this->dano+($this->forca-10))/2),
            'ataque' => floor($this->ataque/2),
            'defesa' => floor(10 + ($this->defesa/2)),
            'vida' => floor($this->constituicao + ($this->constituicao-10)/2 + $this->vida + $this->np),
            'iniciativa' => floor($this->iniciativa + ($this->destreza-10)/2),
        
            'resistencia' => floor($this->resistencia + ($this->constituicao-10)/2),
            'reflexo' => floor($this->reflexo + ($this->destreza-10)/2),
            'fortitude' => floor($this->fortitude + ($this->constituicao-10)/2),
            'vontade' => floor($this->vontade + ($this->sabedoria-10)/2),
        ];
    }

    public function totalPoints() {    
        $total = [
            'habilidade' => $this->forca + $this->destreza + $this->constituicao + $this->sabedoria + $this->inteligencia + $this->carisma - 60,
            'combate' => $this->dano + $this->ataque + $this->defesa + $this->vida + $this->iniciativa,
            'salvamento' => $this->resistencia + $this->reflexo + $this->fortitude + $this->vontade,
            'feito' => collect($this->feitos)->reduce(function ($total, $feito) { return $total + $feito['graduacao']; }, 0),
            'pericia' => ceil(collect($this->pericias)->reduce(function ($total, $pericia) { return $total + $pericia['graduacao']; }, 0)/4),
            'desvantagem' => collect($this->desvantagens)->reduce(function ($total, $desvantagem) { return $total + $desvantagem['graduacao']; }, 0),
            'poder' => collect($this->poderes)->reduce(function ($total, $poder) {
                $custoTotal;
                $custoTotal = $poder['custo'];

                $custoTotal += collect($poder->extras)->reduce(function ($total, $extra) {
                    return $total + $extra['modificador'];
                }, 0);

                $custoTotal -= collect($poder->falhas)->reduce(function ($total, $falha) {
                    return $total + $falha['modificador'];
                }, 0);

                if ($custoTotal <= 0) {
                    $custoTotal = ceil($poder['graduacao']/(2 - $custoTotal));
                } else {
                    $custoTotal = $poder['graduacao'] * $custoTotal;
                }

                $custoTotal += collect($poder->opcoes)->reduce(function ($total, $opcao) {
                    return $total + $opcao['modificador'];
                }, 0);

                $custoTotal += collect($poder->poderes_alternativos)->reduce(function ($total, $poderAlternativo) {
                    return $total + $poderAlternativo['modificador'];
                }, 0);

                return $total + $custoTotal;
            }, 0),
            'all' => 0,
        ];

        $total['all'] = $total['habilidade'] + $total['combate'] + $total['salvamento'] + $total['feito'] + $total['pericia'] - $total['desvantagem'] + $total['poder'];
        return $total;
    }
    
}
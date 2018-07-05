<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poder extends Model
{
    protected $table = "poderes";

    protected $guarded = ['id'];

    protected $hidden = ['created_at', 'updated_at', 'efeito', 'acao', 'alcance', 'duracao', 'salvamento', 'custo_min', 'custo_max'];

    //protected $appends = ['custos'];

    public function getCustosAttribute() {
        $custos = array();
        for ($i = $this->custo_min; $i <= $this->custo_max; $i++) {
            $custos[] = $i;
        }
        return $custos;
    }
}
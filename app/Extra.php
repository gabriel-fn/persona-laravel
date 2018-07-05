<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    protected $guarded = ['id'];

    protected $hidden = ['created_at', 'updated_at', 'modificador_min', 'modificador_max'];

    protected $appends = ['modificadores'];

    public function getModificadoresAttribute() {
        $modificadores = array();
        for ($i = $this->modificador_min; $i <= $this->modificador_max; $i++) {
            $modificadores[] = $i;
        }
        return $modificadores;
    }
}
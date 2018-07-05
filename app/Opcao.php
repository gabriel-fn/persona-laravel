<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opcao extends Model
{
    protected $table = "opcoes";

    protected $guarded = ['id'];

    protected $hidden = ['created_at', 'updated_at'];
}

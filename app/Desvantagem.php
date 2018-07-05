<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desvantagem extends Model
{
    protected $table = "desvantagens";

    protected $guarded = ['id'];

    protected $hidden = ['created_at', 'updated_at'];
}

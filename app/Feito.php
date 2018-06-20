<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feito extends Model
{
    protected $guarded = ['id'];

    protected $hidden = ['created_at', 'updated_at'];
}
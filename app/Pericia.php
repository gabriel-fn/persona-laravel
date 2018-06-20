<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pericia extends Model
{
    protected $guarded = ['id'];

    protected $hidden = ['created_at', 'updated_at'];
}
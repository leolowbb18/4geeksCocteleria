<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Head extends Model
{
    protected $fillable = [
        'id_user', 'id_pago', 'total'
    ];
}

         
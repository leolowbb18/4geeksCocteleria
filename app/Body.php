<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Body extends Model
{
    protected $fillable = [
        'id_producto', 'cantidad', 'precio', 'total_linea'
    ];
}
            
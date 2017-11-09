<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'titulo', 'description', 'tipo', 'existencia', 'precio', 'img', 'type_id'
    ];
}
  
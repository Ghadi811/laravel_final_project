<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products_Derails extends Model
{
    //
    protected $fillable = [
        'id_products',
        'price',
        'qty',
        'image',
        'color',
    ];
}

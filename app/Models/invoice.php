<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    //
    protected $fillable = [
        'customer_id',
        'products_id',
        'price',
        'qty',
        'total',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class custmrs extends Model
{
    //
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'password',
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merch extends Model
{
    protected $fillable = [
        'name',
        'type',
        'price'
    ];
}

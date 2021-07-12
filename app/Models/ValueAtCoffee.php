<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValueAtCoffee extends Model
{
    // use HasFactory;
    protected $table = 'value_at_coffee';

    protected $fillable = [
        'at_price',
        'kilogram_price',
        'land_id',
        'created_at',
        'updated_at',
    ];

}

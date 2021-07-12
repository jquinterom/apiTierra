<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    // use HasFactory;
    protected $table = 'payment';

    protected $fillable = [
        'total_kilograms_paid',
        'value_kilogram',
        'subtotal',
        'value_lending',
        'total',
        'employee_land_id',
        'created_at',
        'updated_at',
    ];
}

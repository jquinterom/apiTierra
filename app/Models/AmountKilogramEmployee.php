<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmountKilogramEmployee extends Model
{
    //use HasFactory;
    protected $table = 'amount_kilogram_employee';

    protected $fillable = [
        'amount_kilogram',
        'employee_id',
        'created_at',
        'updated_at',
    ];
}

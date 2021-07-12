<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeLand extends Model
{
    //use HasFactory;
    protected $table = 'employee_land';

    protected $fillable = [
        'land_id',
        'employee_id',
        'created_at',
        'updated_at',
    ];
}

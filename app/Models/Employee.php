<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //use HasFactory;
    protected $table = 'employee';

    protected $fillable = [
        'full_name',
        'identification',
        'phone_number',
        'created_at',
        'updated_at',
    ];

}

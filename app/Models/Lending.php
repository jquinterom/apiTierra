<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lending extends Model
{
    //use HasFactory;
    protected $table = 'lending';

    protected $fillable = [
        'employee_id',
        'amount_lending',
        'created_at',
        'updated_at',
    ];
}

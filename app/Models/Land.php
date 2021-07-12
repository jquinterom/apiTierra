<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    // use HasFactory;
    protected $table = "land";

    protected $fillable = [
        'full_name',
        'created_at',
        'updated_at',
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandUser extends Model
{
    // use HasFactory;
    protected $table = "land_user";

    protected $fillable = [
        'land_id',
        'user_id',
    ];

    public function land()
    {
        return $this->belongsTo('Apps\Models\Land', 'land_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}

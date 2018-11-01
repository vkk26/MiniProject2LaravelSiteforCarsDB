<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cars extends Model
{
    protected $fillable = [
        'Make', 'Model', 'year','updated_at','created_at'
    ];
}

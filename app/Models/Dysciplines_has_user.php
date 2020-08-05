<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dysciplines_has_user extends Model
{
    protected $fillable=[
        'users_id',
        'dysciplines_id',
    ];
}

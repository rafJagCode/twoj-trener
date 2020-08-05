<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Dysciplines extends Model
{
    public function user(){
        return $this->belongsToMany(User::class, 'dysciplines_has_users', 'users_id', 'dysciplines_id')->withTimestamps();
    }
}

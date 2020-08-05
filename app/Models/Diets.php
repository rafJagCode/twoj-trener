<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diets extends Model
{
    public function user(){

        return $this->belongsToMany(User::class, 'diets_has_users', 'users_id', 'diets_id')->withTimestamps();
    }
}

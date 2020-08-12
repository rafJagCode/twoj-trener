<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public function users(){
        return $this->belongsToMany(User::class, 'roles_has_users', 'users_id', 'roles_id')->withTimestamps();
    }
}

<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public function user(){
<<<<<<< HEAD:app/Roles.php
        
=======

>>>>>>> 7cbb99ea5cb6ab2c0bd89bf7d4319ef2bc90ad30:app/Models/Roles.php
        return $this->belongsToMany(User::class, 'roles_has_users', 'users_id', 'roles_id')->withTimestamps();
    }
}

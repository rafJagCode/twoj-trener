<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    public function user(){
        
        return $this->belongsToMany(User::class, 'ratings_has_users', 'users_id', 'ratings_id')->withTimestamps();
    }
}

<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    public function user(){
<<<<<<< HEAD:app/Ratings.php
        
        return $this->belongsToMany(User::class, 'ratings_has_users', 'users_id', 'ratings_id')->withTimestamps();
=======

        return $this->belongsToMany(User::class, 'ratings_has_users', 'users_id', 'ratings_id')->withTimestamps();

>>>>>>> 7cbb99ea5cb6ab2c0bd89bf7d4319ef2bc90ad30:app/Models/Ratings.php
    }
}

<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Gyms extends Model
{
    public function user(){
<<<<<<< HEAD:app/Gyms.php
      
        return $this->belongsToMany(User::class, 'gyms_has_users', 'users_id', 'gyms_id')->withTimestamps();
=======
        
        return $this->belongsToMany(User::class, 'gyms_has_users', 'users_id', 'gyms_id')->withTimestamps();
        
        
>>>>>>> 7cbb99ea5cb6ab2c0bd89bf7d4319ef2bc90ad30:app/Models/Gyms.php
    }
}

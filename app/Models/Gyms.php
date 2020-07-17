<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Gyms extends Model
{
    public function user(){
        return $this->belongsToMany(User::class, 'gyms_has_users', 'users_id', 'gyms_id')->withTimestamps();
    }
}

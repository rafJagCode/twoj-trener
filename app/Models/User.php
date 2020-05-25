<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD:app/User.php
        'firstName','secondName', 'email','city','phone_number', 'password',
=======
        'firstName','secondName','email','cities_id', 'password',
>>>>>>> 7cbb99ea5cb6ab2c0bd89bf7d4319ef2bc90ad30:app/Models/User.php
    ];




    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

  


    public function hasAnyRole($role)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }

    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }

  public function roles()
    {
        //return $this->belongsToMany(Roles::class, 'roles_has_users', 'users_id', 'roles_id')->withTimestamps();
        return $this->belongsToMany(Roles::class)->withTimestamps();
    }

    public function diets()
    {
        //return $this->belongsToMany(Diets::class, 'diets_has_users', 'users_id', 'diets_id')->withTimestamps();
        return $this->belongsToMany(Diets::class)->withTimestamps();
    }

    public function ratings()
    {
        //return $this->belongsToMany(Ratings::class, 'ratings_has_users', 'users_id', 'ratings_id')->withTimestamps();
        return $this->belongsToMany(Ratings::class)->withTimestamps();
    }

    public function gyms()
    {
<<<<<<< HEAD:app/User.php
       // return $this->belongsToMany(Gyms::class, 'gyms_has_users', 'users_id', 'gyms_id')->withTimestamps();
        return $this->belongsToMany(Gyms::class)->withTimestamps();
    }

    public function  disciplines(){
        return $this->belongsToMany(Dysciplines::class,'dysciplines_has_users','users_id')->withTimestamps();
=======
        return $this->belongsToMany(Gyms::class, 'gyms_has_users', 'users_id', 'gyms_id')->withTimestamps();

>>>>>>> 7cbb99ea5cb6ab2c0bd89bf7d4319ef2bc90ad30:app/Models/User.php
    }

  
}

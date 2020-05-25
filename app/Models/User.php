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
        'firstName', 'secondName', 'email', 'city', 'phoneNumber', 'password',
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




    public function hasAnyRole($roles)
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
      return $this->belongsToMany(Roles::class, 'roles_has_users', 'users_id', 'roles_id')->withTimestamps();

  }

    public function diets()
    {
        return $this->belongsToMany(Diets::class, 'diets_has_users', 'users_id', 'diets_id')->withTimestamps();
    }

    public function ratings()
    {
        return $this->belongsToMany(Ratings::class, 'ratings_has_users', 'users_id', 'ratings_id')->withTimestamps();
    }

    public function gyms()
    {
        return $this->belongsToMany(Gyms::class, 'gyms_has_users', 'users_id', 'gyms_id')->withTimestamps();
    }

    public function  disciplines(){
        return $this->belongsToMany(Dysciplines::class,'dysciplines_has_users','users_id')->withTimestamps();
    }

    
    public function dysciplines()
    {
        return $this->belongsToMany(Gyms::class, 'dysciplines_has_users', 'users_id', 'dysciplines_id')->withTimestamps();

    }
  
}

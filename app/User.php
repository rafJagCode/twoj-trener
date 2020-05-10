<?php

namespace App;

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
        'name', 'email', 'password',
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
}

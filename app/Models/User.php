<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
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
        'firstName', 'secondName','avatar' , 'email', 'city', 'phoneNumber', 'password', 'profilePicture'
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

    public function profilePicture()
    {
        return ($this->profilePicture != 'profile.jpg') ? 'images/avatars/' . $this->profilePicture : 'images/profile.jpg';
    }

    //'nowy' jako jeden z ostatnich, czy wzgledem daty ???
    public function profileFeature()
    {
        //czas dodania
        $daysAgo = now()->modify('-3 days')->format('Y-m-d');
        // dd($diff);
        return $this['created_at']->format('Y-m-d') >= $daysAgo
            ? ['Nowy','f3']
            //srednia wysokosc oceny
            : ($this->avgStars() > 4.6
                ? ['Wysoko oceniany','f1']
                //liczba ocen
                : (count($this->ratings()->get()) > 0
                    ? ['Popularny','f2']
                    : null));
    }


    public function events()
    {
        return $this->belongsToMany('App\Models\Event')->withTimestamps();
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

    public function  disciplines()
    {
        return $this->belongsToMany(Dysciplines::class, 'dysciplines_has_users', 'users_id', 'dysciplines_id')->withTimestamps();
    }

    public function images(){
        return $this->hasMany(Images::class,'users_id');
    }

    public function certificates(){
        return $this->hasMany(Certificates::class,'users_id');
    }

    public function isTrainer(){
        $roles=$this->roles()->get();
        $role = Roles::where('name', 'Trainer')->first();
        if($roles->contains($role))
            return true;

        return false;
    }

    public function avgStars(){
        return number_format($this->ratings()->get()->avg('stars'), 1);
    }

    /**
     * Zliczanie każdej oceny
     */
    public function countStars()
    {
        $ratings = $this->ratings()->select('stars', DB::raw('count(ratings_id) as amount'))
            ->groupBy('stars')
            ->get();
        $total = $ratings->sum('amount');
        $out = compact('ratings', 'total');
        return $out;
    }
}

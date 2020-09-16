<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [ 'title' , 'description' , 'kind', 'start' , 'end' ];

    public function users(){
        return $this->belongsToMany('App\Models\User')->withTimestamps();
    }
}


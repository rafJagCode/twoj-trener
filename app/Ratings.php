<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}

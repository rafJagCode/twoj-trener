<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificates extends Model
{
    public function users(){
        return $this->belongsTo(User::class, 'users_id')->withTimestamps();
    }
}

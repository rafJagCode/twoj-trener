<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Message extends Model
{
    protected $fillable = ['from', 'to', 'message', 'is_read'];

    public function fromContact()
    {
        return $this->hasOne(User::class, 'id', 'from');
    }
}

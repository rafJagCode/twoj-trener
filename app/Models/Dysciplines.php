<?php

<<<<<<< HEAD:app/Dysciplines.php
namespace App;


=======
namespace App\Models;
>>>>>>> 7cbb99ea5cb6ab2c0bd89bf7d4319ef2bc90ad30:app/Models/Dysciplines.php
use Illuminate\Database\Eloquent\Model;

class Dysciplines extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
}

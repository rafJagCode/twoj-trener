<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function show($id){
        $user = User::findOrFail($id);
        return view('user_show') -> with('user', $user);
    }

}

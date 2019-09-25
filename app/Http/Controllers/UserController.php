<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user)
    {   
        $user = Auth::user();
        return view('users.edit', ['user'=>$user] );
    }

    public function update(User $user)
    { 
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->belonging_to = request('belonging_to');
        $user->save();

        // return back();
    }
}

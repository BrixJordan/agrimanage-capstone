<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class RegisterController extends Controller
{
    

    public function showRegistrationForm(){
        return view('auth.register');
    }

    public function register(Request $request){
        User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' =>$request->email,
            'password' =>Hash::make($request->password),
        ]);

        auth()->attempt($request->only('email', 'password'));
        return view('admin.dashboard');

    }

    
    //
}

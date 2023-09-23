<?php

namespace App\Http\Controllers;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index()
{
    return view('admin.dashboard');
}
public function announcement()
{
    return view('admin.announcement');
}

public function event(){
    return view('admin.event');
}

public function user()
{
    return view('admin.user');
}
public function farmer(){
    return view('admin.farmer');
}

public function notification()
{
    return view('admin.notification');
}

public function transaction(){
    return view('admin.transaction');
}
public function stock()
{
    return view('admin.stock');
}

public function profile()
{
    return view('admin.profile');
}

public function setting()
{
    return view('admin.setting');
}

public function showLoginForm()
    {
        return view('admin.login');
    }

    // Handle admin login
    public function login(Request $request)
{
    // Validate the login request
    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        $user = Auth::user();


        // Redirect to the admin dashboard
        return redirect()->route('admin.dashboard')->withSuccess('You have successfully logged in');
    }

    return redirect("admin.login")->with('error', 'Oops! You have entered invalid credentials');
}


    // Display the admin dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
    }



    //
}

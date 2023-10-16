<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Farmers;
use App\Mail\SendAccountMail;

class UserController extends Controller
{
    public function sendAccount(Request $request)
    {
        // Get the user's email and password from the request
        $email = $request->input('email');
        $password = $request->input('password');
    
        // Send an email using the SendAccountMail mailable
        Mail::to($email)->send(new SendAccountMail($email, $password));
    
        return redirect()->route('admin.user')->with('message', 'Account information sent successfully');
    }
    

    //
}

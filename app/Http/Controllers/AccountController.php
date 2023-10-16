<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\AccountDetailsEmail;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function sendAccountDetails(User $user)
{
    // Generate a random password for the user
    $password = Str::random(10); // You may use any method to generate a password.

    // Update the user's password in the database
    $user->update(['password' => bcrypt($password)]);

    // Send an email to the user with their account details
    Mail::to($user->email)->send(new AccountDetailsEmail($user, $password));

    return redirect()->back()->with('success', 'Account details sent to ' . $user->email);
}
    //
}

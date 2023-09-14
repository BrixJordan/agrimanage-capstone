<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function setLang($locale)
    {
        App::setLocale($locale);
        Session::put("locale", $locale);
        return redirect()->back();
    }
    public function handle(Request $request, Closure $next)
{
    if (Session::get("locale") === null) {
        Session::put("locale", "en");
    }

    App::setLocale(Session::get("locale"));

    // Add this line to check the session locale
    dd(Session::get("locale")); // Debugging line

    return $next($request);
}

}

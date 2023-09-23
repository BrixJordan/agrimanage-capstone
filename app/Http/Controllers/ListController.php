<?php

namespace App\Http\Controllers;
use App\Models\Farmers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index(){
        $farmers = Farmers::all();
        return view('farmer.list', compact('farmers'));
    }
    
   
    //
}

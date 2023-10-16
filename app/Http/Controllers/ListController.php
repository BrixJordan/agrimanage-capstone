<?php

namespace App\Http\Controllers;
use App\Models\Farmers;
use App\Models\Stock;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {
        $stocks = Stock::all();
        $farmers = Farmers::all(); // You need to fetch the list of farmers as well
        return view('farmer.list', compact('stocks', 'farmers'));
    }
    

    public function list()
    {
        $stocks = Stock::all();
        return view('farmer.list', compact('stocks'));
    }
    
   
    //
}

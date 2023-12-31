<?php

namespace App\Http\Controllers;

use App\Models\Stock;

use Illuminate\Http\Request;


    class StockController extends Controller
    {
        public function index()
    {
        $stocks = Stock::all();
        return view('admin.stock', compact('stocks'));
    }

    public function store(Request $request)
    {

     

        Stock::create($request->all());
        return redirect()->route('admin.stock');
    }

    public function destroy(Stock $stock){
        $stock->delete();
        return redirect()->route('admin.stock');

    }

    public function edit(Stock $stock)
    {
        return view('stock.edit', compact('stock'));

    }

    public function update(Request $request, Stock $stock)
    {
        $stock->update($request->all());
        return redirect()->route('admin.stock');
    }




 


    }


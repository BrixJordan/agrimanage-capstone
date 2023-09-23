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

        $request->validate([
            'gate_pass_no' => 'required|string|max:255',
            'date' => 'required|date',
            'no' => 'required|integer',
            'quantity' => 'required|string|max:255',
            'unit' => 'required|string|max:255',
            'description' => 'required|string',
            'allocation' => 'required|string|max:255',
            'balance' => 'required|string|max:255',
            'lot_number' => 'required|string|max:255',
            'requesting_officer' => 'required|string|max:255',
            'authorized_by' => 'required|string|max:255',
            'received_by' => 'required|string|max:255',
        ]);

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


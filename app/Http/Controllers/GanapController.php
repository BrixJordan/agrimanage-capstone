<?php

namespace App\Http\Controllers;
use App\Models\Ganap;

use Illuminate\Http\Request;

class GanapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ganaps=Ganap::all();
        return view('admin.event', compact('ganaps'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ganap::create($request->all());
        return redirect()->route('admin.event');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ganap $ganap)
    {
        return view('ganap.edit', compact('ganap'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Ganap $ganap)
    {
        $ganap->update($request->all());
        return redirect()->route('admin.event');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ganap $ganap)
    {
        $ganap->delete();
        return redirect()->route('admin.event');

        //
    }

    public function search(Request $request){
        $searchQuery = $request->input('search');

        $ganaps = Ganap::where('event_name', 'like', '%' . $searchQuery . '%')->get();

        return view('admin.event', ['ganaps' => $ganaps]);
    }


}

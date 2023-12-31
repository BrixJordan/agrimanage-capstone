<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class EvenetController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('admin.announcement', compact('events'));
    }


    // Store a newly created event in the database
   // Store a newly created event in the database
   public function store(Request $request)
   {

   Event::create($request->all());

    // Redirect to the appropriate route
    return redirect()->route('admin.announcement');
      


    
    
}
public function edit(Event $event)
{
    return view('announcement.edit', compact('event'));
    //
}

public function update(Request $request,Event $event)
{
    $event->update($request->all());
    return redirect()->route('admin.announcement');

    //
}
 /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.announcement');
        //
    }
    public function search(Request $request)
{
    $searchQuery = $request->input('search');

  
    $events = Event::where('body', 'like', '%' . $searchQuery . '%')->get();

   
    return view('admin.announcement', ['events' => $events]);
}

}

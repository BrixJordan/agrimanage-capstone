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
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation rules for an image upload
        // Add other validation rules for your form fields
    ]);

    // Get the image data from the form
    $image = $request->file('image');

    // Generate a unique filename for the image
    $filename = uniqid() . '.' . $image->getClientOriginalExtension(); // Example: "12345.png"

    // Save the image to the "public/images" folder
    $imagePath = public_path('images/' . $filename);
    $image->move(public_path('images'), $filename);

    // Create a new Event model instance and set its attributes
    $event = new Event;
    $event->title = $request->input('title');
    $event->description = $request->input('description');
    $event->image = 'images/' . $filename; // Set the image path

    // Save the event to the database
    $event->save();

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

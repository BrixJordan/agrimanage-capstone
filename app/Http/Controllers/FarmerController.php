<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmers;
use App\Models\User; 
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Hash;

class FarmerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farmers=Farmers::all();
        return view('admin.farmer', compact('farmers'));
        //
    }

    public function indexUser()
    {
        $users = User::where('surname', '!=', 'admin')->get();

        return view('admin.user', compact('users'));
    }



    public function filter(Request $request)
    {
        $filter = $request->input('filter');
        
        // Check if a filter is applied
        if ($filter) {
            $farmers = Farmers::where('barangay', $filter)->get();
        } else {
            $farmers = Farmers::all();
        }
    
        return view('admin.farmer', compact('farmers'));
    }
    


   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
        // Store data in the farmers table
        $farmerData = $request->only([
            'first_name', 'middle_name', 'extension_name', 'sex', 'email_add', 'house_number', 'street',
            'barangay', 'municipality', 'province', 'region', 'religion', 'civil_status',
            'education', 'disability', 'four_ps', 'government_id', 'id_number',
            'cooperative_member', 'coop_specify', 'maiden_name', 'household_head',
            'head_name', 'relationship', 'emergency_contact', 'emergency_contact_number',
            'for_farmers', 'kind_of_work', 'type_of_fishing_activity', 'type_of_involvement',
            'for_gross_annual_income_last_year', 'farm_location', 'total_farm_area',
            'within_ancestral_domain', 'agrarian_reform_beneficiary', 'ownership_document_no',
            'ownership_type',
        ]);
    
        $farmer = Farmers::create($farmerData);
    
        // Store data in the users table
        // Store data in the users table
$userData = $request->only(['surname', 'email', 'password']);
$userData['username'] = Str::slug($userData['surname'] . '_' . $userData['email']); // Generate a username
$userData['password'] = Hash::make($userData['password']); // Hash the password
$user = User::create($userData);

    
        // Redirect or return a response
        return redirect()->route('admin.farmer');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Farmers $farmer)
    {
        return view('users.view');
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Farmers $farmer)
    {
        return view('users.edit', compact('farmer'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Farmers $farmer)
    {
        $farmer->update($request->all());
        return redirect()->route('admin.farmer');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Farmers $farmer)
    {
        $farmer->delete();
        return redirect()->route('admin.farmer');

        //
    }
}

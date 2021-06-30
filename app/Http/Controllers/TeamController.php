<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Carbon\Carbon;

class TeamController extends Controller
{

    /**
     * Constructor
     */
    public function __construct(){

        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('checkAdmin');

    }

    /**
     * List/Add Team
     */
    public function index(){

        return view('admin.teams.index' , [
            'teams' => Team::latest()->get(),
        ]);
    }
 
    /**
     * Team Store
     */
    public function store(Request $request){

        //form validation
        $request -> validate([
            'name'  => 'required',
            'title' => 'required',
            'image' => 'required|image',
        ]);

        // Insert data in database
        $teams = Team::create($request->except('_token') + ['created_at' => Carbon::now() ]);

         // Upload Image
         $image     = $request->file('image');
         $filename  = $teams->id. '.' .$image->extension();
         $location  = public_path('uploads/teams/');
         $image->move($location , $filename);

         // Save Image name in the database
         $teams->image = $filename;
         $teams->save();

         //success message session
         return back()->withSuccess('Team Added');

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){

        $team = Team::Find($id);

        return view('admin.teams.edit' , compact('team'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){

        $teams = Team::findOrFail($request->id);

        // Update Validation
        $request->validate([
            'name'  => 'required',
            'title' => 'required',
            'image' => 'image',
        ]);

        // check if request has image
        if($request->has('image')){

            // Delete Existing image
            $existing = public_path('uploads/teams/' . $teams->image);
            unlink($existing);

            //Upload New Image
            $image      = $request->file('image');
            $filename   = $teams->id. '.' .$image->extension();
            $location   = public_path('uploads/teams/');
            $image->move($location, $filename);

            // Save Image name in the database
            $teams->image = $filename;
            
        }

        // Update Other Fields
        $teams->name = $request->name;
        $teams->title = $request->title;

        // Save Everything In Database
        $teams->save();

        return back()->withSuccess('Updated Succesfully');

    }

    /**
     * Team Delete 
     */
    public function delete($id){

        $team = Team::find($id);
        
        // Delete from database
        $existing_image = public_path('uploads/teams/'. $team->image); 
        unlink($existing_image); 

        // Delete from database
        $team->delete();
        return back()->withSuccess('Deleted Successfully');
        
    }

}

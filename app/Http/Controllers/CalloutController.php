<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Callout;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CalloutController extends Controller
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
     * List/Add Callout
     */
    public function index(){

        return view('admin.callouts.index' , [
            'data' => Callout::first(),
        ]);
    }
 
    /**
     * Callout Store
     */
    public function store(Request $request){

        //form validation
        $request -> validate([
            'title'         => 'required',
            'description'   => 'required',
            'image'         => 'image',
        ]);

        // Insert data in database
        $callouts = Callout::find($request->id);
        $callouts->update($request->except('_token') + ['created_at' => Carbon::now() ]);

         // Upload Image
         if($request->has('image'))
         {
            $image     = $request->file('image');
            $filename  = $callouts->id. '.' .$image->extension();
            $location  = public_path('uploads/callouts/');
            $image->move($location , $filename);
            
            // Save Image name in the database
            $callouts->image = $filename;
         }
         $callouts->save();

         //success message session
         return back()->withSuccess('Callout Added');

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){

        $callout = Callout::Find($id);

        return view('admin.callouts.edit' , compact('callout'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){

        $callouts = Callout::findOrFail($request->id);

        // Update Validation
        $request->validate([
            'title'         => 'required',
            'description'   => 'required',
            'image'         => 'image',
        ]);

        // check if request has image
        if($request->has('image')){

            // Delete Existing image
            $existing = public_path('uploads/callouts/' . $callouts->image);
            unlink($existing);

            //Upload New Image
            $image      = $request->file('image');
            $filename   = $callouts->id. '.' .$image->extension();
            $location   = public_path('uploads/callouts/');
            $image->move($location, $filename);

            // Save Image name in the database
            $callouts->image = $filename;
        }

        // Update Other Fields
        $callouts->title       = $request->title;
        $callouts->description = $request->description;

        // Save Everything In Database
        $callouts->save();

        return back()->withSuccess('Updated Succesfully');

    }

    /**
     * Callout Delete 
     */
    public function delete($id){

        $callout = Callout::find($id);
        
        // Delete from database
        $existing_image = public_path('uploads/callouts/'. $callout->image); 
        unlink($existing_image); 

        // Delete from database
        $callout->delete();
        return back()->withSuccess('Deleted Successfully');

    }

}

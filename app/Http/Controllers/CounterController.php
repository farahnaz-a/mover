<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Counter;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CounterController extends Controller
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
     * List/Add Counter
     */
    public function index(){

        return view('admin.counters.index' , [
            'data' => Counter::first(),
        ]);
    }
 
    /**
     * Counter Store
     */
    public function store(Request $request){

        //form validation
        $request -> validate([
            'locations' => 'required',
            'vehicles'  => 'required',
            'clients'   => 'required',
            'tons'      => 'required',
        ]);

        // Insert data in database
        $counter = Counter::find($request->id);
        $counter->update($request->except('_token') + ['created_at' => Carbon::now() ]);

         // Upload Image
        //  $image     = $request->file('image');
        //  $filename  = $counters->id. '.' .$image->extension();
        //  $location  = public_path('uploads/counters/');
        //  $image->move($location , $filename);

        //  // Save Image name in the database
        //  $counters->image = $filename;
        //  $counters->save();

         //success message session
         return back()->withSuccess('Counter Added');

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){

        $counter = Counter::Find($id);

        return view('admin.counters.edit' , compact('counter'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){

        // $counters = Counter::findOrFail($request->id);

        // // Update Validation
        // $request->validate([
        //     'count'   => 'required',
        //     'title'   => 'required',
        //     'image'   => 'image',
        // ]);

        // // check if request has image
        // if($request->has('image')){

        //     // Delete Existing image
        //     $existing = public_path('uploads/counters/' . $counters->image);
        //     unlink($existing);

        //     //Upload New Image
        //     $image      = $request->file('image');
        //     $filename   = $counters->id. '.' .$image->extension();
        //     $location   = public_path('uploads/counters/');
        //     $image->move($location, $filename);

        //     // Save Image name in the database
        //     $counters->image = $filename;
        // }

        // // Update Other Fields
        // $counters->count = $request->count;
        // $counters->title = $request->title;

        // // Save Everything In Database
        // $counters->save();

        // return back()->withSuccess('Updated Succesfully');

    }


    /**
     * Counter Delete 
     */
    public function delete($id){

        // $counter = Counter::find($id);
        
        // // Delete from database
        // $existing_image = public_path('uploads/counters/'. $counter->image); 
        // unlink($existing_image); 

        // // Delete from database
        // $counter->delete();
        // return back()->withSuccess('Deleted Successfully');
    }

}

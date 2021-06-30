<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use Carbon\Carbon;

class WorkController extends Controller
{
    /**
     * Constructor
     */
    public function __construct(){

        $this->middleware('auth');
        $this->middleware('verified');

    }

    /**
     * List/Add Works
     */
    public function index(){

        return view('admin.works.index' , [
            'works' => Work::latest()->get(),
        ]);

    }

    /**
     * Work Store
     */
    public function store(Request $request){

        // Form Validation
        $request->validate([
            'title'        => 'required',
            'description'  => 'required',
            'image'        => 'required|image',
        ]);


       // Insert data in database
       $works = Work::create($request->except('_token') + ['created_at' => Carbon::now()]); 
        
       // Upload Image
       $image    = $request->file('image');
       $filename = $works->id. '.' .$image->extension();
       $location = public_path('uploads/works/');
       $image->move($location, $filename); 

       // Save Image name in the database 
       $works->image = $filename; 
       $works->save(); 

        // Success message session
       return back()->withSuccess('Works Added');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){

        $works = Work::find($id);
        return view('admin.works.edit' , compact('works'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){

        $works = Work::findOrFail($request->id);

          // Update Validation 
          $request->validate([
            'title'       => 'required', 
            'description' => 'required',
            'image'       => 'image',
        ]);

         // Check if request has image 
        if($request->has('image')){

            // Delete existing image
            $existing = public_path('uploads/works/' . $works->image) ; 
            unlink($existing);
              
             // Upload Image
            $image    = $request->file('image');
            $filename = $works->id. '.' .$image->extension();
            $location = public_path('uploads/works/');
            $image->move($location, $filename); 

            // Save Image name in the database 
            $works->image = $filename; 
        } 

        // Update other fields 
        $works->title        = $request->title;
        $works->description  = $request->description; 

        // Save Everything in database
        $works->save(); 

        return back()->withSuccess('Work Updated');
    }


    /**
     * Work Delete 
     */
    public function delete($id){

        $work = Work::find($id);
        
        // Delete from database
        $existing_image = public_path('uploads/works/'. $work->image); 
        unlink($existing_image); 

        // Delete from database
        $work->delete();
        return back()->withSuccess('Deleted Successfully');
    }
}

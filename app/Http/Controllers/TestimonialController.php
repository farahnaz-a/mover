<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Carbon\Carbon;

class TestimonialController extends Controller
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
     * List/Add Testimonial
     */
    public function index(){

        return view('admin.testimonials.index' , [
            'testimonials' => Testimonial::latest()->get(),
        ]);
    }
 
    /**
     * Testimonial Store
     */
    public function store(Request $request){

        //form validation
        $request -> validate([
            'name'        => 'required',
            'description' => 'required',
            'image'       => 'required|image',
        ]);

        // Insert data in database
        $testimonials = Testimonial::create($request->except('_token') + ['created_at' => Carbon::now() ]);

         // Upload Image
         $image     = $request->file('image');
         $filename  = $testimonials->id. '.' .$image->extension();
         $location  = public_path('uploads/testimonials/');
         $image->move($location , $filename);

         // Save Image name in the database
         $testimonials->image = $filename;
         $testimonials->save();

         //success message session
         return back()->withSuccess('Testimonial Added');

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){

        $testimonial = Testimonial::Find($id);

        return view('admin.testimonials.edit' , compact('testimonial'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){

        $testimonials = Testimonial::findOrFail($request->id);

        // Update Validation
        $request->validate([
            'name'        => 'required',
            'description' => 'required',
            'image'       => 'image',
        ]);

        // check if request has image
        if($request->has('image')){

            // Delete Existing image
            $existing = public_path('uploads/testimonials/' . $testimonials->image);
            unlink($existing);

            //Upload New Image
            $image      = $request->file('image');
            $filename   = $testimonials->id. '.' .$image->extension();
            $location   = public_path('uploads/testimonials/');
            $image->move($location, $filename);

            // Save Image name in the database
            $testimonials->image = $filename;
        }

        // Update Other Fields
        $testimonials->name = $request->name;
        $testimonials->description = $request->description;

        // Save Everything In Database
        $testimonials->save();

        return back()->withSuccess('Updated Succesfully');

    }
    
    /**
     * Testimonial Delete 
     */
    public function delete($id){

        $testimonial = Testimonial::find($id);
        
        // Delete from database
        $existing_image = public_path('uploads/testimonials/'. $testimonial->image); 
        unlink($existing_image); 

        // Delete from database
        $testimonial->delete();
        return back()->withSuccess('Deleted Successfully');

    }

}

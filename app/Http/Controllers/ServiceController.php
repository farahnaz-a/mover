<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use Carbon\Carbon;

class ServiceController extends Controller
{
    /**
     * Constructor
     */
    public function __construct(){

        $this->middleware('auth');
        $this->middleware('verified');

    }

    /**
     * List/Add Services
     */
    public function index(){

        return view('admin.services.index' , [
            'services' => Service::latest()->get(),
        ]);
    //End
    }

    /**
     * Services Store
     */
    public function store(Request $request){

        // Form Validation
        $request->validate([
            'title'        => 'required',
            'description'  => 'required',
            'image'        => 'required|image',
        ]);


       // Insert data in database
       $service = Service::create($request->except('_token') + ['created_at' => Carbon::now()]); 
        
       // Upload Image
       $image    = $request->file('image');
       $filename = $service->id. '.' .$image->extension();
       $location = public_path('uploads/services/');
       $image->move($location, $filename); 

       // Save Image name in the database 
       $service->image = $filename; 
       $service->save(); 

        // Success message session
       return back()->withSuccess('service Added');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){

        $service = Service::find($id);
        return view('admin.services.edit' , compact('service'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){

        $service = Service::findOrFail($request->id);

          // Update Validation 
          $request->validate([
            'title'       => 'required', 
            'description' => 'required',
            'image'       => 'image',
        ]);

         // Check if request has image 
        if($request->has('image')){

            // Delete existing image
            $existing = public_path('uploads/services/' . $service->image) ; 
            unlink($existing);
              
             // Upload Image
            $image    = $request->file('image');
            $filename = $service->id. '.' .$image->extension();
            $location = public_path('uploads/services/');
            $image->move($location, $filename); 

            // Save Image name in the database 
            $service->image = $filename; 
            $service->save(); 
        } 

        // Update other fields 
        $service->title        = $request->title;
        $service->description  = $request->description; 

        // Save Everything in database
        $service->save(); 

        return back()->withSuccess('service Updated');
    }


    /**
     * Service Delete 
     */
    public function delete($id){

        $service = Service::find($id);
        
        // Delete from database
        $existing_image = public_path('uploads/services/'. $service->image); 
        unlink($existing_image); 

        // Delete from database
        $service->delete();
        return back()->withSuccess('Deleted Successfully');

    }

}

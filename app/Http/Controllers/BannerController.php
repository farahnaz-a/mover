<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     *  Constructor
     */
    public function __construct(){

      $this->middleware('auth');
      $this->middleware('verified');

  }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.banners.index', [
            'banners' => Banner::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Create Page is not required
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form Validation
       $request->validate([
         'title'        => 'required', 
         'description'  => 'required', 
         'image'        => 'required|image',
       ]);

        // Insert data in database
       $banner = Banner::create($request->except('_token') + ['created_at' => Carbon::now()]); 

         // Upload Image
       $image    = $request->file('image');
       $filename = $banner->id. '.' .$image->extension();
       $location = public_path('uploads/banners/');
       $image->move($location, $filename); 

       // Save Image name in the database 
       $banner->image = $filename; 
       $banner->save(); 

        // Success message session
       return back()->withSuccess('Banner Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        // Show is not required
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
          // Update Validation 
        $request->validate([
            'title'       => 'required', 
            'description' => 'required',
            'image'       => 'image',
        ]);

         // Check if request has image 
        if($request->has('image'))
        {
              // Delete existing image
            $existing = public_path('uploads/banners/' . $banner->image); 
            unlink($existing);
              
             // Upload new image 
            $image    = $request->file('image');
            $filename = $banner->id. '.' .$image->extension();
            $location = public_path('uploads/banners/');
            $image->move($location, $filename);  

              // Declare new name for saving in database 
            $banner->image = $filename; 
        } 

          // Update other fields 
        $banner->title        = $request->title;
        $banner->description  = $request->description; 

         // Save Everything in database 
        $banner->save(); 

         // Return back to banner list with success session message 
        return redirect()->route('banners.index')->withSuccess('Banner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        // Remove Image from server 
        $existing = public_path('uploads/banners/' . $banner->image);
        unlink($existing); 

        // Delete from database
        $banner->delete(); 

        // Return success message after deletion 
        return back()->withSuccess('Banner deleted successfully');
    }
}

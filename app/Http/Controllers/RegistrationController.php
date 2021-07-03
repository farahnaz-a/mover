<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Bullet;

class RegistrationController extends Controller
{
    /**
     *  Constructor 
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('checkAdmin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.registrations.index',[
            'data'     => Registration::first(),
            'bullets'  => Bullet::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
       
        // Form Validation
        $request -> validate([
            'title'       => 'required',
            'description' => 'required',
            'bg_image'    => 'image'
        ]);

        // Insert data in database
        $data = Registration::find($request->id);
         $data->update([
            'title'         => $request->title, 
            'description'   => $request->description, 
         ]);

         if($request->hasFile('bg_image'))
         {
            $image    = $request->file('bg_image');
            $filename = $data->id. '.' .$image->getClientOriginalExtension('bg_image');
            $location = public_path('uploads/registrations/');
            $image->move($location, $filename); 
            $data->bg_image = $filename; 
         }

         // Update Bullets 
        
         if($request->bullet_id)
         {
            foreach($request->bullet_id as $key => $id)
            {
                 if($request->bullet[$key] == null)
                 {
                     Bullet::find($id)->delete();
                 }
                
                 if($request->bullet[$key] != null)
                 {
                    Bullet::find($id)->update([
                        'bullets' => $request->bullet[$key],
                    ]);
                 }
                
            }
         }
 
        // Insert new bullets

         if($request->bullets)
         {
             foreach($request->bullets as $bull)
             {
                 Bullet::create([
                     'bullets'     => $bull,
                     'created_at'  => Carbon::now(),
                 ]);
             }
         }

         $data->save();

        // Success Message Session
        return back()->withSuccess('Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        return view('admin.registrations.edit', compact('registration'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
         // Update Validation 
         $request->validate([
            'title'       => 'required', 
            'description' => 'required',
        ]);

          // Update other fields 
        $registration->title        = $request->title;
        $registration->description  = $request->description; 

         // Save Everything in database 
        $registration->save(); 

         // Return back to banner list with success session message 
        return redirect()->route('registrations.index')->withSuccess('Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        // Delete from database
        $registration->delete(); 

        // Return success message after deletion 
        return back()->withSuccess('Deleted successfully');
    }
}

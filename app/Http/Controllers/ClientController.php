<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    /**
     * Constructor
     */
    public function __construct(){

        $this->middleware('auth');
        $this->middleware('verified');

    }

    /**
     * List/Add Clients
     */
    public function index(){

        return view('admin.clients.index' , [
            'clients' => Client::latest()->get(),
        ]);
    }
 
    /**
     * Clients Store
     */
    public function store(Request $request){

        //form validation
        $request -> validate([
            'image'         => 'required|image',
        ]);

        // Insert data in database
        $clients = Client::create($request->except('_token') + ['created_at' => Carbon::now() ]);

         // Upload Image
         $image     = $request->file('image');
         $filename  = $clients->id. '.' .$image->extension();
         $location  = public_path('uploads/clients/');
         $image->move($location , $filename);

         // Save Image name in the database
         $clients->image = $filename;
         $clients->save();

         //success message session
         return back()->withSuccess('Client Added');

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){

        $client = Client::Find($id);

        return view('admin.clients.edit' , compact('client'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){

        $clients = Client::findOrFail($request->id);

        // Update Validation
        $request->validate([
            'image'         => 'image',
        ]);

        // check if request has image
        if($request->has('image')){

            // Delete Existing image
            $existing = public_path('uploads/clients/' . $clients->image);
            unlink($existing);

            //Upload New Image
            $image      = $request->file('image');
            $filename   = $clients->id. '.' .$image->extension();
            $location   = public_path('uploads/clients/');
            $image->move($location, $filename);

            // Save Image name in the database
            $clients->image = $filename;
        }

        // Save Everything In Database
        $clients->save();

        return back()->withSuccess('Updated Succesfully');

    }

    /**
     * Client Delete 
     */
    public function delete($id)
    {
        Client::find($id)->delete();
       return back()->withSuccess('Deleted Successfully');
    }

}

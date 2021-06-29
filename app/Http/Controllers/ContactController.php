<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Constructor
     */
    public function __construct(){

        $this->middleware('auth');
        $this->middleware('verified');

    }

    /**
     * List/Add Contact
     */
    public function index(){

        return view('admin.contacts.index' , [
            'contacts' => Contact::latest()->get(),
        ]);
    }
 
    /**
     * Contact Store
     */
    public function store(Request $request){

        //form validation
        $request -> validate([
            'g_number'  => 'regex:/^([0-9\s\-\+\(\)]*)$/',
            'g_mail'    => 'email',
            's_number'  => 'regex:/^([0-9\s\-\+\(\)]*)$/',
            's_mail'  => 'email',
        ],[
            'g_number.regex' => 'Invalid Number',
            'g_mail.email'   => 'Invalid Email',
            's_number.regex' => 'Invalid Number',
            's_mail.email'   => 'Invalid Email',
        ]);

        // Insert data in database
        $contacts = Contact::create($request->except('_token') + ['created_at' => Carbon::now() ]);

         //success message session
         return back()->withSuccess('Contact Added');

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){

        $contact = Contact::Find($id);

        return view('admin.contacts.edit' , compact('contact'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){

        // Update Validation
        $request -> validate([
            'g_number'  => 'regex:/^([0-9\s\-\+\(\)]*)$/',
            'g_mail'    => 'email',
            's_number'  => 'regex:/^([0-9\s\-\+\(\)]*)$/',
            's_mail'  => 'email',
        ],[
            'g_number.regex' => 'Invalid Number',
            'g_mail.email'   => 'Invalid Email',
            's_number.regex' => 'Invalid Number',
            's_mail.email'   => 'Invalid Email',
        ]);

        $contacts = Contact::findOrFail($request->id);

        // Update Fields
            // germany
        $contacts->g_mail   = $request->g_mail;
        $contacts->g_number = $request->g_number;
            // spain
        $contacts->s_mail   = $request->s_mail;
        $contacts->s_number = $request->s_number;

        // Save Everything In Database
        $contacts->save();
        return back()->withSuccess('Updated Succesfully');

    }

    /**
     * Contact Delete 
     */
    public function delete($id)
    {
       Contact::find($id)->delete();
       return back()->withSuccess('Deleted Successfully');
    }

}

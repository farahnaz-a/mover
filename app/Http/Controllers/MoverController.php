<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoverController extends Controller
{
    /**
     *  Constructor 
     */
    public function __construct()
    {
        $this->middleware('auth')->except('register');
    }

    /** 
     *  Mover Registration 
     */
    public function register(Request $request)
    {
        $request->validate([
            'company'  => 'required',
            'address'  => 'required',
            'phone'    => 'required',
            'email'    => 'required|email', 
            'name'     => 'required', 
            'username' => 'required', 
            'password' => 'required|confirmed|min:8', 
        ]);

        dd('successful. Will proceed to mover profile in next step');
    }

// END    
}

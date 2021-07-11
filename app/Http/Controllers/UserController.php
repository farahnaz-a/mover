<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     *  Constructor 
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkUser'); 
    }

    /**
     *  User Dashboard 
     */
    public function index()
    {
        return view('customer.index');
    }

// END    
}

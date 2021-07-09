<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiscellaneousController extends Controller
{
    /**
     * Constructor 
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }
    /**
     *  Store 
     */
    public function store(Request $request)
    {
        dd($request->all);
    }
}

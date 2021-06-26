<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     *  Constructor
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkAdmin');
    }

    /**
     *  Admin Statistics 
     */
    public function index()
    {
        return view('admin.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PackageController extends Controller
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
        $request->validate([
            'model_name'       => 'required', 
            'articleName'      => 'required', 
            'length'           => 'required|numeric',
            'width'            => 'required|numeric',
            'height'           => 'required|numeric', 
            'weight'           => 'required|numeric', 
            'quantity'         => 'required|numeric', 

        ]);

        Package::create($request->except('_token') + ['user_id'=>Carbon::now()]);
    }
}

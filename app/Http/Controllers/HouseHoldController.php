<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HouseHold;
use Carbon\Carbon;

class HouseHoldController extends Controller
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
            'category'     => 'required', 
            'equipment'    => 'required', 
            'articleName'  => 'required',
            'length'       => 'required|numeric',
            'width'        => 'required|numeric', 
            'height'       => 'required|numeric', 
            'weight'       => 'required|numeric', 
            'quantity'     => 'required|numeric',
        ]);

        HouseHold::create($request->except('_token') + ['user_id'=>Carbon::now()]);
    }
}

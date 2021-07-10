<?php

namespace App\Http\Controllers;

use App\Models\Miscellaneous;
use Carbon\Carbon;
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
        $request->validate([
            'others'       => 'required', 
            'articleName'  => 'required', 
            'length'       => 'required|numeric', 
            'width'        => 'required|numeric', 
            'height'       => 'required|numeric', 
            'weight'       => 'required|numeric', 
            'quantity'     => 'required|numeric', 
        ]);

        Miscellaneous::create($request->except('_token') + ['user_id'=>Carbon::now()]);
    }
}

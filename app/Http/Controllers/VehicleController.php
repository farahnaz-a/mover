<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
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
            'model_name'      => 'required', 
            'vehicleName'     => 'required', 
            'make'            => 'required',
            'model'           => 'required',
            'estimationValue' => 'required', 
        
        ]);

        Vehicle::create($request->except('_token') + ['user_id'=>Auth::id(), 'created_at'=>Carbon::now()]);
    
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\MotorcyclesAndSports;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MotorcyclesAndSportsController extends Controller
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
            'estimationValue' => 'required|numeric', 
            'movingVehicle'   => 'required', 
            'conveyors'       => 'required', 
        ]);

        MotorcyclesAndSports::create($request->except('_token') + ['user_id'=>Carbon::now()]);
    
    }
}

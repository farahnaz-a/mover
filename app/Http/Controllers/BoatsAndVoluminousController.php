<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BoatsAndVoluminous;
use Carbon\Carbon;

class BoatsAndVoluminousController extends Controller
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
            'boatName'        => 'required',
            'lenght'          => 'required|numeric',
            'width'           => 'required|numeric',
            'height'          => 'required|numeric',
            'quantity'        => 'required|numeric',
            'make'            => 'required',
            'model'           => 'required',
            'estimationValue' => 'required',
            'conveyors'       => 'required',
        ]);

        BoatsAndVoluminous::create($request->except('_token') + ['user_id'=>Carbon::now()] );
    }
}

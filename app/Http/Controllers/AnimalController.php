<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use Carbon\Carbon;

class AnimalController extends Controller
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
        $request -> validate([
            'model_name'    =>'required',
            'animalName'    =>'required',
            'animalBreed'   =>'required',
            'weight'        => 'required|numeric',
            'specialNeeds'  => 'required',
            'vaccinations'  => 'required',
            'lenght'        => 'required|numeric',
            'width'         => 'required|numeric',
            'height'        => 'required|numeric'
        ]);

        Animal::create($request->except('_token') + ['user_id'=>Carbon::now()]);

        return back()->withSuccess('Added Successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgriFood;
use Carbon\Carbon;

class AgriFoodController extends Controller
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
            'food_name'          => 'required',
            'articleName'        => 'required',
            'quantity'           => 'required|numeric',
            'weight'             => 'required|numeric',
            //common form
            'loading_address'    => 'required',
            'loading_start'      => 'required', 
            'loading_end'        => 'required', 
            'loading_time_slot'  => 'required',
            'loading_house'      => 'required', 
            'loading_floor'      => 'required',
            'loading_elevator'   => 'required',
            'loading_lift'       => 'required',
            'information'        => 'required',
            'delivery_address'   => 'required',
            'delivery_start'     => 'required',
            'delivery_end'       => 'required',
            'delivery_time_slot' => 'required',
            'delivery_house'     => 'required',
            'delivery_floor'     => 'required',
            'delivery_elevator'  => 'required',
            'delivery_lift'      => 'required', 
            'offers'             => 'required',
            'terms'              => 'required',
            'hired'              => 'required',
        ]);

       $agrifoods = AgriFood::create($request->except('_token') + ['user_id'=>Carbon::now()]);


       if ($request->has('image')) {

            // Upload Image
            $image     = $request->file('image');
            $filename  = $agrifoods->id. '.' .$image->extension();
            $location  = public_path('uploads/agrifoods/');
            $image->move($location , $filename);

            // Save Image name in the database
            $agrifoods->image = $filename;
        }

        // Save Everything in database 
        $agrifoods->save();

        return back()->withSuccess('Added Successfully');

    }
}

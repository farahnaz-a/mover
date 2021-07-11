<?php

namespace App\Http\Controllers;

use App\Models\Pallet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PalletController extends Controller
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
        ]);

        $pallets = Pallet::create([

            'model_name'     => $request->model_name,
            'articleName'    => $request->articleName,
            'dim'            => $request->dim,
            'height'         => $request->height,
            'weight'         => $request->weight,
            'quantity'       => $request->quantity,
            //common
            'loading_address'         => $request->loading_address,
            'loading_start'           => $request->loading_start,
            'loading_end'             => $request->loading_end,
            'loading_time_slot'       => $request->loading_time_slot,
            'loading_house'           => $request->loading_house,
            'loading_floor'           => $request->loading_floor,
            'loading_elevator'        => $request->loading_elevator,
            'loading_lift'            => $request->loading_lift,
            'information'             => $request->information,
            'delivery_address'        => $request->delivery_address,
            'delivery_start'          => $request->delivery_start,
            'delivery_end'            => $request->delivery_end,
            'delivery_time_slot'      => $request->delivery_time_slot,
            'delivery_house'          => $request->delivery_house,
            'delivery_floor'          => $request->delivery_floor,
            'delivery_elevator'       => $request->delivery_elevator,
            'delivery_lift'           => $request->delivery_lift,
            'image'                   => 'foo.jpg', 
            'user_id'                 => Auth::id(), 
            'created_at'              => Carbon::now(), 
            'offers'                  => 'yes', 
            
        ]); 

        if ($request->has('image')) {

            // Upload Image
            $image     = $request->file('image');
            $filename  = $pallets->id. '.' .$image->extension();
            $location  = public_path('uploads/pallets/');
            $image->move($location , $filename);

            // Save Image name in the database
            $pallets->image = $filename;
        }

        // Save Everything in database 
        $pallets->save();

        return redirect('/')->withSuccess('Posted Successfully');

    }
}

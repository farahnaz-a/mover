<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Bidding;
use Illuminate\Http\Request;


class BiddingController extends Controller
{
   /**
    * Constructor
    */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkMover');
    }

    /**
     *  Store 
     */
    public function store(Request $request)
    {
        $request->validate([
            'price' => 'required|numeric', 
            'notes' => 'required', 
        ]);

        Bidding::create([
            'price' => $request->price,
            'notes' => $request->notes,
            'mover_id' => $request->mover_id,
            'customer_id' => $request->customer_id,
            'announcement_id' => $request->announcement_id,
            'created_at'  => Carbon::now(),
        ]);

        return back()->withSuccess('Your bid has been submitted');
    }
}

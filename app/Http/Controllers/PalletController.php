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
        $request->validate([
            'model_name'    => 'required', 
            'articleName'   => 'required', 
            'dim'           => 'required',
            'height'        => 'required|numeric', 
            'weight'        => 'required|numeric', 
            'quantity'      => 'required|numeric',

        ]);

        Pallet::create($request->except('_token') + ['user_id'=>Auth::id(), 'created_at'=>Carbon::now()]);
    }
}

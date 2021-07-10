<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommercialGoods;
use Carbon\Carbon;

class CommercialGoodsController extends Controller
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
            'articleName'     => 'required',
            'lenght'          => 'required|numeric',
            'width'           => 'required|numeric',
            'height'          => 'required|numeric',
            'weight'          => 'required|numeric',
            'quantity'        => 'required|numeric',
        ]);

        CommercialGoods::created($request->except('_token') + ['user_id'=>Carbon::now()]);
    }
}

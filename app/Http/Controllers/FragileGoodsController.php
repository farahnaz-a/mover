<?php

namespace App\Http\Controllers;

use App\Models\FragileGoods;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FragileGoodsController extends Controller
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

        FragileGoods::create($request->except('_token') + ['user_id'=>Carbon::now()]);
    }
}

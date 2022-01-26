<?php

namespace App\Http\Controllers;

use Auth;
use Hash; 
use App\Models\User;
use App\Models\Bidding;
use Illuminate\Http\Request;

class MoverController extends Controller
{
    /**
     *  Constructor 
     */
    public function __construct()
    {
        $this->middleware('auth')->except('register');
        $this->middleware('checkMover')->except('register');
    }

    /**
     * Mover Dashboard
     */
    public function index()
    {
        return view('mover.index', ['bids' => Bidding::where('mover_id', Auth::id())->orderBy('id', 'desc')->get(),]);
    }

    /** 
     *  Mover Registration 
     */
    public function register(Request $request)
    {
        $request->validate([ 
            'company'  => 'required',
            'address'  => 'required',
            'phone'    => 'required',
            'email'    => 'required|email|unique:users', 
            'name'     => 'required', 
            'username' => 'required', 
            'password' => 'required|confirmed|min:8', 
        ]);

        $user = User::create([ 
            'company'   => $request->company,
            'address'   => $request->address,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'name'      => $request->name,
            'username'  => $request->username,
            'password'  => Hash::make($request->password),
            'role'      => 'mover',
        ]);

        Auth::login($user);
        return redirect()->route('mover.dashboard');

        
    }

// END    
}

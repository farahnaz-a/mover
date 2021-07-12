<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Announcement;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     *  Constructor 
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkUser'); 
    }

    /**
     *  User Dashboard 
     */
    public function index()
    {
        return view('customer.index', ['announcements' => Announcement::where('user_id', Auth::id())->get()]);
    }

// END    
}

<?php

namespace App\Http\Controllers;

use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    /**
     *  Constructor 
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('checkAdmin');
    }

    /**
     *  Setting Form 
     */
    public function index()
    {
        return view('admin.settings.index', ['data' => GeneralSetting::first()]);
    }

    /**
     *  Update/Save Settings
     */ 
    public function store(Request $request)
    {
        // Validate Fields 
        $request->validate([
            'logo'         => 'image',
            'favicon'      => 'image', 
            'description'  => 'required', 
        ]);

        // Fetch record 
        $data = GeneralSetting::find($request->id); 

        // Check Logo 
        if($request->hasFile('logo'))
        {
            $logo      = $request->file('logo');
            $logoname  = 'logo.'.$logo->extension('logo');
            $location  = public_path('uploads/settings');
            $logo->move($location, $logoname); 
            $data->logo = $logoname; 
            
        }

        // Check Favicon 
        if($request->hasFile('favicon'))
        {
            $fav      = $request->file('favicon');
            $favname  = 'favicon.'.$fav->extension('favicon');
            $location  = public_path('uploads/settings');
            $fav->move($location, $favname); 
            $data->favicon = $favname; 
        }

        // Update Regular fields 
        
        $data->description       = $request->description;
        $data->description_one   = $request->description_one;
        $data->facebook          = $request->facebook;
        $data->twitter           = $request->twitter;
        $data->whatsapp          = $request->whatsapp;
        $data->google            = $request->google;

        // Save now !!! 
        $data->save(); 

        // Return success message 
        return back()->withSuccess('Site settings updated');



    }

 // END   
}

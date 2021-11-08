<?php

namespace App\Http\Controllers;

use App\Models\ThemeSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThemeSettingController extends Controller
{
    // Color Mode Settings 
    public function color(){
        $data = ThemeSetting::where('user_id', Auth::id())->first();
        
        if($data->theme == 'light-layout')
        {
            $data->theme = 'dark-layout'; 
        }

        else if($data->theme == 'dark-layout')
        {
            $data->theme = 'light-layout'; 
        }
        $data->save(); 

        die();
    }

     // Theme Toggle Menu 
     public function themeToggle()
     {
         $data = ThemeSetting::where('user_id', Auth::id())->first();
 
         if ($data->theme_toggle == 'expanded') {
 
             $data->theme_toggle = 'collapsed';
         } else if ($data->theme_toggle == 'collapsed') {
 
             $data->theme_toggle = 'expanded';
         }
 
         $data->save();
         die();
     }
}

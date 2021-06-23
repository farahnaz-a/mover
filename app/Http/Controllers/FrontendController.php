<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
   /**
    *  Home Page (Frontend)
    */
   public function index()
   {
     return view('frontend.index');
   }

   /**
    * Announcements Page (Frontend)
    */
   public function announcements()
   {
       return view('frontend.announcements');
   }

   /**
    * Details Page (Frontend)
    */
   public function details()
   {
       return view('frontend.details');
   }
  
  /**
   *  Request A Quote (Frontend)
   */
  public function requestQuote()
  {
      return view('frontend.requestQuote');
  }

  /**
   *  Contact Page (Frontend)
   */
  public function contact()
  {
      return view('frontend.contact');
  }
   
  /**
   *  Mover Company Registration
   */
  public function moverReg()
  {
      return view('frontend.moverReg');
  }

// END  
}

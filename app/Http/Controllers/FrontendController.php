<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Team;
use App\Models\Work;
use App\Models\Banner;
use App\Models\Bullet;
use App\Models\Client;
use App\Models\Callout;
use App\Models\Contact;
use App\Models\Counter;
use App\Models\Country;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Registration;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Constructor 
     */
    public function __construct()
    {
        $this->middleware('auth')->only('form', 'formThree');
        $this->middleware('verified')->only('form', 'formThree');
    }
   /**
    *  Home Page (Frontend)
    */
   public function index()
   {
     return view('frontend.index', [
         'banners'      => Banner::latest()->get(),
         'services'     => Service::all(),
         'works'        => Work::all(),
         'teams'        => Team::all(),
         'testimonials' => Testimonial::latest()->get(),
         'counter'      => Counter::first(),
         'blogs'        => Blog::latest()->get(),
         'clients'      => Client::latest()->get(),
         'callout'      => Callout::first(),
         'contact'      => Contact::first(),
     ]); 
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
   *  Request A Quote (Form)
   */
  public function form($category)
  {
      return view('frontend.quoteForm', compact('category'));
  }
  
  /**
   *  Request A Quote (Step Three From Household)
   */
  public function householdThree(Request $request)
  {
      

      return view('frontend.householdThree', [

      'category'     => $request->category, 
      'equipment'    => $request->equipment, 
      'articleName'  => $request->articleName,
      'length'       => $request->length,
      'width'        => $request->width, 
      'height'       => $request->height, 
      'weight'       => $request->weight, 
      'quantity'     => $request->quantity,

      ]);
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
      return view('frontend.moverReg', [
          'countries' => Country::orderBy('name', 'asc')->get(),
          'registration'=> Registration::first(),
          'bullets'      => Bullet::all(),
      ]);
  }

// END  
}

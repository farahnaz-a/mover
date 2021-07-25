<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Team;
use App\Models\Work;
use App\Models\Animal;
use App\Models\Banner;
use App\Models\Bullet;
use App\Models\Client;
use App\Models\Pallet;
use App\Models\Callout;
use App\Models\Contact;
use App\Models\Counter;
use App\Models\Country;
use App\Models\Package;
use App\Models\Service;
use App\Models\Vehicle;
use App\Models\AgriFood;
use App\Models\HouseHold;
use App\Models\Testimonial;
use App\Models\Announcement;
use App\Models\FragileGoods;
use App\Models\Registration;
use Illuminate\Http\Request;
use App\Models\Miscellaneous;
use App\Models\CommercialGoods;
use App\Models\BoatsAndVoluminous;
use App\Models\MotorcyclesAndSports;

class FrontendController extends Controller
{
    /**
     * Constructor 
     */
    public function __construct()
    {
        // $this->middleware('auth')->only('form', 'formThree');
        // $this->middleware('verified')->only('form', 'formThree');
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
       return view('frontend.announcements', [
          // 'agrifoods' => AgriFood::where('hired', 'no')->orderBy('id', 'asc')->get(),
          // 'animals'   => Animal::where('hired', 'no')->orderBy('id', 'asc')->get(),
          // 'boats'     => BoatsAndVoluminous::where('hired', 'no')->orderBy('id', 'asc')->get(),
          // 'commercials'=> CommercialGoods::where('hired', 'no')->orderBy('id', 'asc')->get(),
          // 'fragiles'   => FragileGoods::where('hired', 'no')->orderBy('id', 'asc')->get(),
          // 'households' => HouseHold::where('hired', 'no')->orderBy('id', 'asc')->get(),
          // 'miscs' => Miscellaneous::where('hired', 'no')->orderBy('id', 'asc')->get(),
          // 'motorsports' => MotorcyclesAndSports::where('hired', 'no')->orderBy('id', 'asc')->get(),
          // 'packages'    => Package::where('hired', 'no')->orderBy('id', 'asc')->get(),
          // 'pallets'    => Pallet::where('hired', 'no')->orderBy('id', 'asc')->get(),
          // 'vehicles'    => Vehicle::where('hired', 'no')->orderBy('id', 'asc')->get(),
          'announcements'    => Announcement::where('hired', 'no')->orderBy('id', 'asc')->get(),
       ]);
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
   *  Request A Quote (Step Three From Vehicle)
   */
  public function vehicleThree(Request $request)
  {
      return view('frontend.vehicleThree',[

        'model_name'      => $request->model_name, 
        'vehicleName'     => $request->vehicleName, 
        'make'            => $request->make,
        'model'           => $request->model,
        'estimationValue' => $request->estimationValue, 
        
      ]);
  }
  /**
   *  Request A Quote (Step Three From Motorcycle Sport)
   */
  public function motorcyclesportThree(Request $request)
  {
      return view('frontend.motorcyclesportThree',[

        'model_name'      => $request->model_name, 
        'vehicleName'     => $request->vehicleName, 
        'make'            => $request->make,
        'model'           => $request->model,
        'estimationValue' => $request->estimationValue, 
        'movingVehicle'   => $request->movingVehicle, 
        'conveyors'       => $request->conveyors, 

      ]);
  }
  /**
   *  Request A Quote (Step Three From Boat And Volimunous)
   */
  public function boatvolimunoussportThree(Request $request)
  {
      return view('frontend.boatvolimunoussportThree',[

        'model_name'       => $request->model_name, 
        'boatName'         => $request->boatName, 
        'length'           => $request->length,
        'width'            => $request->width,
        'height'           => $request->height, 
        'quantity'         => $request->quantity, 
        'make'             => $request->make, 
        'model'            => $request->model, 
        'estimationValue'  => $request->estimationValue, 
        'conveyors'        => $request->conveyors, 

      ]);
  }
  /**
   *  Request A Quote (Step Three From Fragilegoods)
   */
  public function fragilegoodsThree(Request $request)
  {
      return view('frontend.fragilegoodsThree',[

        'model_name'       => $request->model_name, 
        'articleName'      => $request->articleName, 
        'length'           => $request->length,
        'width'            => $request->width,
        'height'           => $request->height, 
        'weight'           => $request->weight, 
        'quantity'         => $request->quantity, 

      ]);
  }
  /**
   *  Request A Quote (Step Three From Package/Fold)
   */
  public function packageThree(Request $request)
  {
      return view('frontend.packageThree',[

        'model_name'       => $request->model_name, 
        'articleName'      => $request->articleName, 
        'length'           => $request->length,
        'width'            => $request->width,
        'height'           => $request->height, 
        'weight'           => $request->weight, 
        'quantity'         => $request->quantity, 

      ]);
  }
  /**
   *  Request A Quote (Step Three From Pallet)
   */
  public function palletThree(Request $request)
  {
      return view('frontend.palletThree',[

        'model_name'    => $request->model_name, 
        'articleName'   => $request->articleName, 
        'dim'           => $request->dim,
        'height'        => $request->height, 
        'weight'        => $request->weight, 
        'quantity'      => $request->quantity, 

      ]);
  }
  /**
   *  Request A Quote (Step Three From Animal)
   */
  public function animalThree(Request $request)
  {
      return view('frontend.animalThree',[

        'model_name'    => $request->model_name, 
        'animalName'    => $request->animalName, 
        'animalBreed'   => $request->animalBreed, 
        'weight'        => $request->weight, 
        'specialNeeds'  => $request->specialNeeds,
        'vaccinations'  => $request->vaccinations,
        'length'        => $request->length, 
        'width'         => $request->width, 
        'height'        => $request->height, 

      ]);
  }
  /**
   *  Request A Quote (Step Three From Agrifood)
   */
  public function agrifoodThree(Request $request)
  {
      return view('frontend.agrifoodThree',[

        'food_name'    => $request->food_name, 
        'articleName'  => $request->articleName, 
        'quantity'     => $request->quantity, 
        'weight'       => $request->weight, 

      ]);

  }
  /**
   *  Request A Quote (Step Three From Commercial goods)
   */
  public function commercialgoodsThree(Request $request)
  {
      return view('frontend.commercialgoodsThree',[

        'model_name'   => $request->model_name, 
        'articleName'  => $request->articleName, 
        'length'       => $request->length, 
        'width'        => $request->width, 
        'height'       => $request->height, 
        'weight'       => $request->weight, 
        'quantity'     => $request->quantity, 

      ]);
  }
  /**
   *  Request A Quote (Step Three From Miscellaneous)
   */
  public function miscellaneousThree(Request $request)
  {
      return view('frontend.miscellaneousThree',[

        'others'       => $request->others, 
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

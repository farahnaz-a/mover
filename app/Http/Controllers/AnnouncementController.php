<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Auth; 
use Carbon\Carbon;

class AnnouncementController extends Controller
{
   /**
    *  Constructor 
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     *  Go To Step Three 
     */
    public function announceThree(Request $request)
    {
        return view('frontend.announcementThree', [

            'category'             => $request->category, 
            'equipment'            => $request->equipment, 
            'articleName'          => $request->articleName,
            'length'               => $request->length,
            'width'                => $request->width, 
            'height'               => $request->height, 
            'weight'               => $request->weight, 
            'quantity'             => $request->quantity,
            'model_name'           => $request->model_name,
            'vehicleName'          => $request->vehicleName,
            'make'                 => $request->make,
            'model'                => $request->model,
            'estimationValue'      => $request->estimationValue,
            'movingVehicle'        => $request->movingVehicle,
            'conveyors'            => $request->conveyors,
            'boatName'             => $request->boatName,
            'food_name'            => $request->food_name,
            'dim'                  => $request->dim,
            'animalName'           => $request->animalName,
            'animalBreed'          => $request->animalBreed,
            'specialNeeds'         => $request->specialNeeds,
            'vaccinations'         => $request->vaccinations,
            'others'               => $request->others,
      
        ]);
    }
    /** 
     *  Store Announcement 
     */
    public function store(Request $request)
    {


        $announcement = Announcement::create([

            'category'             => $request->category,
            'equipment'            => $request->equipment,
            'articleName'          => $request->articleName,
            'length'               => $request->length,
            'width'                => $request->width,
            'height'               => $request->height,
            'weight'               => $request->weight,
            'quantity'             => $request->quantity,
            'model_name'           => $request->model_name,
            'vehicleName'          => $request->vehicleName,
            'make'                 => $request->make,
            'model'                => $request->model,
            'estimationValue'      => $request->estimationValue,
            'movingVehicle'        => $request->movingVehicle,
            'conveyors'            => $request->conveyors,
            'boatName'             => $request->boatName,
            'food_name'            => $request->food_name,
            'dim'                  => $request->dim,
            'animalName'           => $request->animalName,
            'animalBreed'          => $request->animalBreed,
            'specialNeeds'         => $request->specialNeeds,
            'vaccinations'         => $request->vaccinations,
            'others'               => $request->others,
            //common
            'loading_address'         => $request->loading_address,
            'loading_start'           => $request->loading_start,
            'loading_end'             => $request->loading_end,
            'loading_time_slot'       => $request->loading_time_slot,
            'loading_house'           => $request->loading_house,
            'loading_floor'           => $request->loading_floor,
            'loading_elevator'        => $request->loading_elevator,
            'loading_lift'            => $request->loading_lift,
            'information'             => $request->information,
            'delivery_address'        => $request->delivery_address,
            'delivery_start'          => $request->delivery_start,
            'delivery_end'            => $request->delivery_end,
            'delivery_time_slot'      => $request->delivery_time_slot,
            'delivery_house'          => $request->delivery_house,
            'delivery_floor'          => $request->delivery_floor,
            'delivery_elevator'       => $request->delivery_elevator,
            'delivery_lift'           => $request->delivery_lift,
            'image'                   => 'foo.jpg', 
            'user_id'                 => Auth::id(), 
            'created_at'              => Carbon::now(), 
            'offers'                  => 'yes', 
            
        ]); 

        if ($request->has('image')) {

            // Upload Image
            $image     = $request->file('image');
            $filename  = $announcement->id. '.' .$image->extension();
            $location  = public_path('uploads/households/');
            $image->move($location , $filename);

            // Save Image name in the database
            $announcement->image = $filename;
        }

        // Save Everything in database 
        $announcement->save();

        return redirect('/')->withSuccess('Announcement posted');
    }

    public function details($id)
    {
        $data = Announcement::find($id); 

        return view('frontend.details', compact('data')); 
    }

// end    
}

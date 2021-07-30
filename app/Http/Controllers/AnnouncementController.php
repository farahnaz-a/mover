<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Auth; 
use Carbon\Carbon;

class AnnouncementController extends Controller
{
//    /**
//     *  Constructor 
//     */
//     public function __construct()
//     {
//         $this->middleware('auth')->only('store');
//     }

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


        // $announcement = Announcement::create([

        //     'category'             => $request->category,
        //     'equipment'            => $request->equipment,
        //     'articleName'          => $request->articleName,
        //     'length'               => $request->length,
        //     'width'                => $request->width,
        //     'height'               => $request->height,
        //     'weight'               => $request->weight,
        //     'quantity'             => $request->quantity,
        //     'model_name'           => $request->model_name,
        //     'vehicleName'          => $request->vehicleName,
        //     'make'                 => $request->make,
        //     'model'                => $request->model,
        //     'estimationValue'      => $request->estimationValue,
        //     'movingVehicle'        => $request->movingVehicle,
        //     'conveyors'            => $request->conveyors,
        //     'boatName'             => $request->boatName,
        //     'food_name'            => $request->food_name,
        //     'dim'                  => $request->dim,
        //     'animalName'           => $request->animalName,
        //     'animalBreed'          => $request->animalBreed,
        //     'specialNeeds'         => $request->specialNeeds,
        //     'vaccinations'         => $request->vaccinations,
        //     'others'               => $request->others,
        //     //common
        //     'loading_address'         => $request->loading_address,
        //     'loading_start'           => $request->loading_start,
        //     'loading_end'             => $request->loading_end,
        //     'loading_time_slot'       => $request->loading_time_slot,
        //     'loading_house'           => $request->loading_house,
        //     'loading_floor'           => $request->loading_floor,
        //     'loading_elevator'        => $request->loading_elevator,
        //     'loading_lift'            => $request->loading_lift,
        //     'information'             => $request->information,
        //     'delivery_address'        => $request->delivery_address,
        //     'delivery_start'          => $request->delivery_start,
        //     'delivery_end'            => $request->delivery_end,
        //     'delivery_time_slot'      => $request->delivery_time_slot,
        //     'delivery_house'          => $request->delivery_house,
        //     'delivery_floor'          => $request->delivery_floor,
        //     'delivery_elevator'       => $request->delivery_elevator,
        //     'delivery_lift'           => $request->delivery_lift,
        //     'image'                   => 'foo.jpg', 
        //     'user_id'                 => Auth::id(), 
        //     'created_at'              => Carbon::now(), 
        //     'offers'                  => 'yes', 
            
        // ]); 

        // if ($request->has('image')) {

        //     // Upload Image
        //     $image     = $request->file('image');
        //     $filename  = $announcement->id. '.' .$image->extension();
        //     $location  = public_path('uploads/households/');
        //     $image->move($location , $filename);

        //     // Save Image name in the database
        //     $announcement->image = $filename;
        // }

        // // Save Everything in database 
        // $announcement->save();

        // return redirect('/')->withSuccess('Announcement posted');

        session()->put('post', $request->all() );

        // redirect to auth
            return redirect()->route( 'post-store' );
    }

    public function save()
    {
        // dd(session('post'));

        echo session('post')['category'];
                $announcement = Announcement::create([

            'category'             => session('post')['category'] ?? '',
            'equipment'            => session('post')['equipment'] ?? '',
            'articleName'          => session('post')['articleName'] ?? '',
            'length'               => session('post')['length'] ?? '',
            'width'                => session('post')['width'] ?? '',
            'height'               => session('post')['height'] ?? '',
            'weight'               => session('post')['weight'] ?? '',
            'quantity'             => session('post')['quantity'] ?? '',
            'model_name'           => session('post')['model_name'] ?? '',
            'vehicleName'          => session('post')['vehicleName'] ?? '',
            'make'                 => session('post')['make'] ?? '',
            'model'                => session('post')['model'] ?? '',
            'estimationValue'      => session('post')['estimationValue'] ?? '',
            'movingVehicle'        => session('post')['movingVehicle'] ?? '',
            'conveyors'            => session('post')['conveyors'] ?? '',
            'boatName'             => session('post')['boatName'] ?? '',
            'food_name'            => session('post')['food_name'] ?? '',
            'dim'                  => session('post')['dim'] ?? '',
            'animalName'           => session('post')['animalName'] ?? '',
            'animalBreed'          => session('post')['animalBreed'] ?? '',
            'specialNeeds'         => session('post')['specialNeeds'] ?? '',
            'vaccinations'         => session('post')['vaccinations'] ?? '',
            'others'               => session('post')['others'] ?? '',
            //common
            'loading_address'         => session('post')['loading_address'] ?? '',
            'loading_start'           => session('post')['loading_start'] ?? '',
            'loading_end'             => session('post')['loading_end'] ?? '',
            'loading_time_slot'       => session('post')['loading_time_slot'] ?? '',
            'loading_house'           => session('post')['loading_house'] ?? '',
            'loading_floor'           => session('post')['loading_floor'] ?? '',
            'loading_elevator'        => session('post')['loading_elevator'] ?? '',
            'loading_lift'            => session('post')['loading_lift'] ?? '',
            'information'             => session('post')['information'] ?? '',
            'delivery_address'        => session('post')['delivery_address'] ?? '',
            'delivery_start'          => session('post')['delivery_start'] ?? '',
            'delivery_end'            => session('post')['delivery_end'] ?? '',
            'delivery_time_slot'      => session('post')['delivery_time_slot'] ?? '',
            'delivery_house'          => session('post')['delivery_house'] ?? '',
            'delivery_floor'          => session('post')['delivery_floor'] ?? '',
            'delivery_elevator'       => session('post')['delivery_elevator'] ?? '',
            'delivery_lift'           => session('post')['delivery_lift'] ?? '',
            'image'                   => 'foo.jpg', 
            'user_id'                 => Auth::id(), 
            'created_at'              => Carbon::now(), 
            'offers'                  => 'yes', 
            
        ]); 

        // if (session('post')['image']->exists()) {

        //     // Upload Image
        //     $image     = session('post')['image'] ?? '';
        //     $filename  = $announcement->id. '.' .$image->extension();
        //     $location  = public_path('uploads/households/');
        //     $image->move($location , $filename);

        //     // Save Image name in the database
        //     $announcement->image = $filename;
        // }

        // Save Everything in database 
        // $announcement->save();

        return redirect('/')->withSuccess('Announcement posted');
    }

    public function details($id)
    {
        $data = Announcement::find($id); 
        $data->increment('views'); 
        $data->save();

        return view('frontend.details', compact('data')); 
    }

// end    
}

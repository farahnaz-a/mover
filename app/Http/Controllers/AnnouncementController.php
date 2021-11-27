<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Models\SecondAnnouncement;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Str;

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

            'category'              => $request->category,
            'volume'                => $request->volume,
            'list'                  => $request->list,
            'individual_goods'      => $request->individual_goods,
            'place_type'            => $request->place_type,
            'floor'                 => $request->floor,
            'ascenseur'             => $request->ascenseur,
            'access'                => $request->access,
            'services'              => $request->services,
            'help'                  => $request->help,
            'article_name'          => $request->article_name,
            'height'                => $request->height,
            'width'                 => $request->width,
            'length'                => $request->length,
            'weight'                => $request->weight,
            'quantity'              => $request->quantity,
            'size'                  => $request->size,
            'load_unload'           => $request->load_unload,
            'need_tailgate'         => $request->need_tailgate,
            'need_truck'            => $request->need_truck,
            'brand_model'           => $request->brand_model,
            'rolling'               => $request->rolling,
            // 'category'             => $request->category, 
            // 'equipment'            => $request->equipment, 
            // 'articleName'          => $request->articleName,
            // 'length'               => $request->length,
            // 'width'                => $request->width, 
            // 'height'               => $request->height, 
            // 'weight'               => $request->weight, 
            // 'quantity'             => $request->quantity,
            // 'model_name'           => $request->model_name,
            // 'vehicleName'          => $request->vehicleName,
            // 'make'                 => $request->make,
            // 'model'                => $request->model,
            // 'estimationValue'      => $request->estimationValue,
            // 'movingVehicle'        => $request->movingVehicle,
            // 'conveyors'            => $request->conveyors,
            // 'boatName'             => $request->boatName,
            // 'food_name'            => $request->food_name,
            // 'dim'                  => $request->dim,
            // 'animalName'           => $request->animalName,
            // 'animalBreed'          => $request->animalBreed,
            // 'specialNeeds'         => $request->specialNeeds,
            // 'vaccinations'         => $request->vaccinations,
            // 'others'               => $request->others,

        ]);
    }
    /** 
     *  Store Announcement 
     */
    public function store(Request $request)

    {
 
        if($request->category == 'déménagement'){
            $request->validate([ 
               'économique'    => 'required_without_all:standard,compléte',
               'standard'      => 'required_without_all:compléte,clicmove',
               'compléte'      =>  'required_without_all:économique,clicmove',
               'clicmove'      =>  'required_without_all:économique,standard' 
            ]);

        }

        if (Auth::id()) { 

            $announcement = SecondAnnouncement::create([
                // $announcement = Announcement::create([
             
                'category'                  => $request->category ?? 'Not Available',
                'volume'                    => $request->volume ?? 'Not Available',
                'list'                      => $request->list ?? 'Not Available',
                'individual_goods_status'   => $request->individual_goods_status ?? 'Not Available',
                'individual_goods'          => $request->individual_goods ?? 'Not Available',
                'place_type_depart'         => $request->place_type_depart ?? 'Not Available',
                'place_type_arrivee'        => $request->place_type_arrivee ?? 'Not Available',
                'floor_depart'              => $request->floor_depart ?? 'Not Available',
                'floor_arrivee'             => $request->floor_arrivee ?? 'Not Available',
                'ascenseur_depart'          => $request->ascenseur_depart ?? 'Not Available',
                'ascenseur_arrivee'         => $request->ascenseur_arrivee ?? 'Not Available',
                'access_depart'             => $request->access_depart ?? 'Not Available',
                'access_arrivee'            => $request->access_arrivee ?? 'Not Available',
                'services'                  => $request->services ?? 'Not Available',
                'économique'                => $request->économique ?? 'Not Available',
                'standard'                  => $request->standard ?? 'Not Available',
                'compléte'                  => $request->compléte ?? 'Not Available',
                'clicmove'                  => $request->clicmove ?? 'Not Available',

                'help'                      => $request->help ?? 'Not Available',
                'article_name'              => $request->article_name ?? 'Not Available',
                'height'                    => $request->height ?? 'Not Available',
                'width'                     => $request->width ?? 'Not Available',
                'length'                    => $request->length ?? 'Not Available',
                'weight'                    => $request->weight ?? 'Not Available',
                'quantity'                  => $request->quantity ?? 'Not Available',
                'size'                      => $request->size ?? 'Not Available',
                'load_unload'               => $request->load_unload ?? 'Not Available',
                'need_tailgate'             => $request->need_tailgate ?? 'Not Available',
                'need_truck'                => $request->need_truck ?? 'Not Available',
                'brand_model'               => $request->brand_model ?? 'Not Available',
                'rolling'                   => $request->rolling ?? 'Not Available',
                // common
                'depart'                    => $request->depart ?? 'Not Available',
                'arrivee'                   => $request->arrivee ?? 'Not Available',
                'loading_date'              => $request->loading_date ?? 'Not Available',
                'delevary_date'             => $request->delevary_date ?? 'Not Available',
                'informations'              => $request->informations ?? 'Not Available',
                'pseudo'                    => Auth::user()->username,
                // 'image'                     => $filename,
                'terms'                     => $request->terms ?? 'Not Available',
                'offers'                    => 'yes',
                'user_id'                   => Auth::id(),
                'created_at'                => Carbon::now(),

            ]);
       
                if($request->file('image'))
                {
                    $image = $request->file('image');
                    $filename = $announcement->id.'.'.$image->extension('image');
                    $path = public_path('uploads/announcement');
                    $image->move($path, $filename);
                    $announcement->image = $filename;
                    $announcement->save();
                    
                }

            return redirect()->route('announcement.details', $announcement->id);
        } else {

            $user = User::where('email', $request->email)->first();

            if (!$user) {
                $phone = $request->country_code . $request->phone;
                $newuser = User::create([ 
                    'name'      => $request->name,
                    'email'     => $request->email,
                    'password'  => Hash::make($request->password),
                    'phone'     => $phone, 
                    'username'  => $request->pseudo,
                ]);

                Auth::login($newuser);
                
                $announcement = SecondAnnouncement::create([
                    // $announcement = Announcement::create([

                    'category'                  => $request->category ?? 'Not Available',
                    'volume'                    => $request->volume ?? 'Not Available',
                    'list'                      => $request->list ?? 'Not Available',
                    'individual_goods_status'   => $request->individual_goods_status ?? 'Not Available',
                    'individual_goods'          => $request->individual_goods ?? 'Not Available',
                    
                    'place_type_depart'         => $request->place_type_depart ?? 'Not Available',
                    'place_type_arrivee'        => $request->place_type_arrivee ?? 'Not Available',
                    'floor_depart'              => $request->floor_depart ?? 'Not Available',
                    'floor_arrivee'             => $request->floor_arrivee ?? 'Not Available',
                    'ascenseur_depart'          => $request->ascenseur_depart ?? 'Not Available',
                    'ascenseur_arrivee'         => $request->ascenseur_arrivee ?? 'Not Available',
                    'access_depart'             => $request->access_depart ?? 'Not Available',
                    'access_arrivee'            => $request->access_arrivee ?? 'Not Available',
    
                    'services'                  => $request->services ?? 'Not Available',
                    'économique'                => $request->économique ?? 'Not Available',
                    'standard'                  => $request->standard ?? 'Not Available',
                    'compléte'                  => $request->compléte ?? 'Not Available',
                    'clicmove'                  => $request->clicmove ?? 'Not Available',
                    'help'                      => $request->help ?? 'Not Available',
                    'article_name'              => $request->article_name ?? 'Not Available',
                    'height'                    => $request->height ?? 'Not Available',
                    'width'                     => $request->width ?? 'Not Available',
                    'length'                    => $request->length ?? 'Not Available',
                    'weight'                    => $request->weight ?? 'Not Available',
                    'quantity'                  => $request->quantity ?? 'Not Available',
                    'size'                      => $request->size ?? 'Not Available',
                    'load_unload'               => $request->load_unload ?? 'Not Available',
                    'need_tailgate'             => $request->need_tailgate ?? 'Not Available',
                    'need_truck'                => $request->need_truck ?? 'Not Available',
                    'brand_model'               => $request->brand_model ?? 'Not Available',
                    'rolling'                   => $request->rolling ?? 'Not Available', 

                    // common
                    'depart'                    => $request->depart ?? 'Not Available',
                    'arrivee'                   => $request->arrivee ?? 'Not Available',
                    'loading_date'              => $request->loading_date ?? 'Not Available',
                    'delevary_date'             => $request->delevary_date ?? 'Not Available',
                    'informations'              => $request->informations ?? 'Not Available',
                    'pseudo'                    => Auth::user()->username,
                    'terms'                     => $request->terms ?? 'Not Available',
                    'offers'                    => 'yes',
                    'user_id'                   => Auth::id(),
                    'created_at'                => Carbon::now(),

                ]);
             

                if($request->file('image'))
                {
                    $image = $request->file('image');
                    $filename = $announcement->id.'.'.$image->extension('image');
                    $path = public_path('uploads/announcement');
                    $image->move($path, $filename);
                    $announcement->image = $filename;
                    $announcement->save();
                    
                }
                return redirect()->route('announcement.details', $announcement->id);
            } else {
                if (Hash::check($request->password, $user->password)) {
                    Auth::login($user); 
                    
                    // dd(session('post')); 
                    $announcement = SecondAnnouncement::create([
                        // $announcement = Announcement::create([

                        'category'                  => $request->category ?? 'Not Available',
                        'volume'                    => $request->volume ?? 'Not Available',
                        'list'                      => $request->list ?? 'Not Available',
                        'individual_goods_status'   => $request->individual_goods_status ?? 'Not Available',
                        'individual_goods'          => $request->individual_goods ?? 'Not Available',
                        'place_type_depart'         => $request->place_type_depart ?? 'Not Available',
                        'place_type_arrivee'        => $request->place_type_arrivee ?? 'Not Available',
                        'floor_depart'              => $request->floor_depart ?? 'Not Available',
                        'floor_arrivee'             => $request->floor_arrivee ?? 'Not Available',
                        'ascenseur_depart'          => $request->ascenseur_depart ?? 'Not Available',
                        'ascenseur_arrivee'         => $request->ascenseur_arrivee ?? 'Not Available',
                        'access_depart'             => $request->access_depart ?? 'Not Available',
                        'access_arrivee'            => $request->access_arrivee ?? 'Not Available',

                        'services'                  => $request->services ?? 'Not Available',
                        'économique'                => $request->économique ?? 'Not Available',
                        'standard'                  => $request->standard ?? 'Not Available',
                        'compléte'                  => $request->compléte ?? 'Not Available',
                        'clicmove'                  => $request->clicmove ?? 'Not Available',
                        'help'                      => $request->help ?? 'Not Available',
                        'article_name'              => $request->article_name ?? 'Not Available',
                        'height'                    => $request->height ?? 'Not Available',
                        'width'                     => $request->width ?? 'Not Available',
                        'length'                    => $request->length ?? 'Not Available',
                        'weight'                    => $request->weight ?? 'Not Available',
                        'quantity'                  => $request->quantity ?? 'Not Available',
                        'size'                      => $request->size ?? 'Not Available',
                        'load_unload'               => $request->load_unload ?? 'Not Available',
                        'need_tailgate'             => $request->need_tailgate ?? 'Not Available',
                        'need_truck'                => $request->need_truck ?? 'Not Available',
                        'brand_model'               => $request->brand_model ?? 'Not Available',
                        'rolling'                   => $request->rolling ?? 'Not Available',

                        // common
                        'depart'                    => $request->depart ?? 'Not Available',
                        'arrivee'                   => $request->arrivee ?? 'Not Available',
                        'loading_date'              => $request->loading_date ?? 'Not Available',
                        'delevary_date'             => $request->delevary_date ?? 'Not Available',
                        'informations'              => $request->informations ?? 'Not Available',
                        'pseudo'                    => Auth::user()->username,
                        'terms'                     => $request->terms ?? 'Not Available',
                        'offers'                    => 'yes',
                        'user_id'                   => Auth::id(),
                        'created_at'                => Carbon::now(),

                    ]);

                    if($request->file('image'))
                    {
                        $image = $request->file('image');
                        $filename = $announcement->id.'.'.$image->extension('image');
                        $path = public_path('uploads/announcement');
                        $image->move($path, $filename);
                        $announcement->image = $filename;
                        $announcement->save();
                        
                    } 
                    return redirect()->route('announcement.details', $announcement->id);
                } else {
                    return back()->with('errors', 'Wrong Password');
                }
            }
        }

        // redirect to auth
        // return redirect()->route( 'post-store' );
    }

    // public function save()
    // {
    //     // dd(session('post')); 
    //     $announcement = SecondAnnouncement::create([
    //         // $announcement = Announcement::create([

    //         'category'                  => $request->category ?? '',
    //         'volume'                    => $request->volume ?? '',
    //         'list'                      => $request->list ?? '',
    //         'individual_goods_status'   => $request->individual_goods_status ?? 'Not Available',
    //         'individual_goods'          => $request->individual_goods ?? '',
    //         'place_type'                => $request->place_type ?? '',
    //         'floor'                     => $request->floor ?? '',
    //         'ascenseur'                     => $request->ascenseur ?? '',
    //         'access'                    => $request->access ?? '',
    //         'services'                  => $request->services ?? '',
    //         'help'                      => $request->help ?? '',
    //         'article_name'              => $request->article_name ?? '',
    //         'height'                    => $request->height ?? '',
    //         'width'                     => $request->width ?? '',
    //         'length'                    => $request->length ?? '',
    //         'weight'                    => $request->weight ?? '',
    //         'quantity'                  => $request->quantity ?? '',
    //         'size'                      => $request->size ?? '',
    //         'load_unload'                   => $request->load_unload ?? '',
    //         'need_tailgate'             => $request->need_tailgate ?? '',
    //         'need_truck'                => $request->need_truck ?? '',
    //         'brand_model'               => $request->brand_model ?? '',
    //         'rolling'                   => $request->rolling ?? '',

    //         // common
    //         'depart'                    => $request->depart ?? '',
    //         'arrivee'                   => $request->arrivee ?? '',
    //         'loading_date'              => $request->loading_date ?? '',
    //         'delevary_date'             => $request->delevary_date ?? '',
    //         'informations'              => $request->informations ?? '',
    //         'name'                      => $request->name ?? '',
    //         'email'                     => $request->email ?? '',
    //         'country_code'              => $request->country_code ?? '',
    //         'phone'                     => $request->phone ?? '',
    //         'pseudo'                    => $request->pseudo ?? '',
    //         'password'                  => $request->password ?? '',
    //         'terms'                     => $request->terms ?? '',
    //         'offers'                    => 'yes',
    //         'user_id'                   => Auth::id(),
    //         'created_at'                => Carbon::now(),


    //         // 'category'             => $request->category ?? '',
    //         // 'equipment'            => $request->equipment ?? '',
    //         // 'articleName'          => $request->articleName ?? '',
    //         // 'length'               => $request->length ?? '',
    //         // 'width'                => $request->width ?? '',
    //         // 'height'               => $request->height ?? '',
    //         // 'weight'               => $request->weight ?? '',
    //         // 'quantity'             => $request->quantity ?? '',
    //         // 'model_name'           => $request->model_name ?? '',
    //         // 'vehicleName'          => $request->vehicleName ?? '',
    //         // 'make'                 => $request->make ?? '',
    //         // 'model'                => $request->model ?? '',
    //         // 'estimationValue'      => $request->estimationValue ?? '',
    //         // 'movingVehicle'        => $request->movingVehicle ?? '',
    //         // 'conveyors'            => $request->conveyors ?? '',
    //         // 'boatName'             => $request->boatName ?? '',
    //         // 'food_name'            => $request->food_name ?? '',
    //         // 'dim'                  => $request->dim ?? '',
    //         // 'animalName'           => $request->animalName ?? '',
    //         // 'animalBreed'          => $request->animalBreed ?? '',
    //         // 'specialNeeds'         => $request->specialNeeds ?? '',
    //         // 'vaccinations'         => $request->vaccinations ?? '',
    //         // 'others'               => $request->others ?? '',
    //         // //common
    //         // 'loading_address'         => $request->loading_address ?? '',
    //         // 'loading_start'           => $request->loading_start ?? '',
    //         // 'loading_end'             => $request->loading_end ?? '',
    //         // 'loading_time_slot'       => $request->loading_time_slot ?? '',
    //         // 'loading_house'           => $request->loading_house ?? '',
    //         // 'loading_floor'           => $request->loading_floor ?? '',
    //         // 'loading_elevator'        => $request->loading_elevator ?? '',
    //         // 'loading_lift'            => $request->loading_lift ?? '',
    //         // 'information'             => $request->information ?? '',
    //         // 'delivery_address'        => $request->delivery_address ?? '',
    //         // 'delivery_start'          => $request->delivery_start ?? '',
    //         // 'delivery_end'            => $request->delivery_end ?? '',
    //         // 'delivery_time_slot'      => $request->delivery_time_slot ?? '',
    //         // 'delivery_house'          => $request->delivery_house ?? '',
    //         // 'delivery_floor'          => $request->delivery_floor ?? '',
    //         // 'delivery_elevator'       => $request->delivery_elevator ?? '',
    //         // 'delivery_lift'           => $request->delivery_lift ?? '',
    //         // 'image'                   => 'foo.jpg', 
    //         // 'user_id'                 => Auth::id(), 
    //         // 'created_at'              => Carbon::now(), 
    //         // 'offers'                  => 'yes', 

    //     ]);

    //     // if ($request->image->exists()) {

    //     //     // Upload Image
    //     //     $image     = $request->image ?? '';
    //     //     $filename  = $announcement->id. '.' .$image->extension();
    //     //     $location  = public_path('uploads/households/');
    //     //     $image->move($location , $filename);

    //     //     // Save Image name in the database
    //     //     $announcement->image = $filename;
    //     // }

    //     // Save Everything in database 
    //     // $announcement->save();

    //     return redirect()->route('announcement.details', $announcement->id);
    // }

    public function details($id)
    {
        $data = SecondAnnouncement::find($id);
        $data->increment('views');
        $data->save();

        return view('frontend.details', compact('data'));
    }

    public function distancePost(Request $request)
    {


        $data = SecondAnnouncement::findOrFail($request->id);


        if ($data->distance == 'Location not found') {

            $data->distance = $request->distance;
            $data->save();
        }

        echo $data->distance;
    }

    // end    
}

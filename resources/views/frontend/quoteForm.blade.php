@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} - Demande de devis
@endsection

@section('meta-description')
    Transportation Website
@endsection

@section('meta-keywords')
    transport, france, best affordable transport listing
@endsection

@section('css')
@endsection

@section('content')
    <!-- Main Body Content Start -->
    <main id="body-content" style="overflow-y: inherit">
        <!-- steps start -->
        <section class="transport-steps">
            <div class="container">
                <div class="transport-steps-wrapper">
                    <div>
                        <span class="number">1</span>
                        <p>Choice of Category</p>
                    </div>
                    <div class="active">
                        <span class="number">2</span>
                        <p>Add item / volume</p>
                    </div>
                    <div>
                        <span class="number">3</span>
                        <p>Address, Information / Photo</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- steps end -->

        <!-- transport start -->
        <section class="transport-type">
            <div class="container">
                <div class="transport-type-wrapper">
                    <div class="row">
                        <div class="col">
                            @if ($category == 'déménagement')
                                <!-- household equipment form start -->
                                <div class="bg-white shadow-sm my-3 p-3 rounded" id="household">
                                    <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                                    <span>Give a name to your listing:</span>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="bg-light-gray p-3 rounded mt-3">
                                                <form action="{{ route('announcement.three') }}" class="needs-validation"
                                                    id="household-form" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="category" value="{{ $category }}" />
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Départ"
                                                                    class="form-control" name="depart" />
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Arrivée"
                                                                    class="form-control" name="arrivee" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for=""> Date de chargement </label>
                                                                <input type="date" placeholder="Date de chargement "
                                                                    class="form-control" name="loading_date" />
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for=""> Date de livraison </label>
                                                                <input type="date" placeholder="Date de livraison "
                                                                    class="form-control" name="delevary_date" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="je connais mon volume"
                                                                    class="form-control" name="loading_date" />
                                                            </div>
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="form-group">
                                                                <textarea name="list" id="" class="form-control" rows="7"
                                                                    placeholder=" j'ai une liste (*pensez à faire un iventaire pièce par pièce )">
                                                                    </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for=""> Biens particuliers</label>
                                                                {{-- <input type="text" placeholder="Biens particuliers"
                                                                    class="form-control" name="individual_goods"/> --}}
                                                            </div>
                                                        </div>
                                                        <div class="col-8">

                                                            <div class="d-flex">
                                                                <label for="no" class="d-flex align-items-center mr-3">
                                                                    non <input type="radio" id="no" name="individual_goods"
                                                                        style="margin-left: 5px" value="no">
                                                                </label>

                                                                <label for="yes" class="d-flex align-items-center">
                                                                    oui <input type="radio" id="yes" name="individual_goods"
                                                                        value="yes" style="margin-left: 5px">
                                                                </label>
                                                            </div>
                                                            
                                                            <br>
                                                            {{-- <label for="vehicle1">non</label>
                                                            <input type="checkbox" id="vehicle1" name="vehicle1">
                                                            <label for="vehicle2"> oui</label> 
                                                            <input type="checkbox" id="vehicle2" name="vehicle2"><br> --}}
                                                            <span>*piano droit, frigo américain, coffre fort, table en
                                                                marbre….</span>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                {{-- <input type="text" placeholder="type de lieu"
                                                                    class="form-control" name="place_type" /> --}}
                                                                <select name="place_type" id="" required>
                                                                    <option value="">type de lieu </option>
                                                                    <option value="maison">maison</option>
                                                                    <option value="appartement">appartement</option>
                                                                    <option value="garde-meuble">garde meuble</option>
                                                                    <option value="commercial">local commercial </option>
                                                                    <option value="bureau">bureau </option>

                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <select name="floor" id="" required>
                                                                    <option value="">étages</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9 et plus">9 et plus</option>


                                                                </select>
                                                                {{-- <input type="text" placeholder="étages"
                                                                    class="form-control" name="floor" /> --}}
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label for=""> ascenseur</label>
                                                            {{-- <label for="no">non</label>
                                                             <input type="radio" id="no" name="ascenseur" value="no">
                                                               <label for="yes">oui</label>
                                                               <input type="radio" id="yes" name="ascenseur" value="yes">
                                                             <br> --}}
                                                        </div>

                                                        <div class="col-4">
                                                            <div class="d-flex">
                                                                <label for="no2" class="d-flex align-items-center mr-3">
                                                                    non <input type="radio" id="no2" name="ascenseur"
                                                                        style="margin-left: 5px" value="no">
                                                                </label>

                                                                <label for="yes2" class="d-flex align-items-center">
                                                                    oui <input type="radio" id="yes2" name="ascenseur"
                                                                        value="yes" style="margin-left: 5px">
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <h5>accès</h5>
                                                            {{-- <label for=""> accès</label> <br> --}}
                                                            <table>
                                                                <tr>
                                                                    <td> <label for="no">on peut se garer devant </label>
                                                                    </td>
                                                                    <td> <input class="ml-2" style="margin-top: -4px" type="radio" id="no" name="ascenseur"
                                                                            value="no"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label for="yes">on doit se garer plus loin </label>
                                                                    </td>
                                                                    <td> <input class="ml-2" style="margin-top: -4px" type="radio" id="yes" name="ascenseur"
                                                                            value="yes"></td>
                                                                </tr>
                                                                
                                                            </table>

                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="services de déménagement"
                                                                    class="form-control" name="services" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4 mb-3">
                                                            <span>photo </span>
                                                            <img src="{{ asset('uploads/callouts/1.jpg') }}" alt="">
                                                            <a class="d-inline-block my-3" target="_blank"
                                                                href="{{ asset('uploads/callouts/1.jpg') }}">Télécharger</a>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <textarea name="informations" id="" class="form-control"
                                                                rows="7" placeholder=" informations complémentaires ">
                                                                </textarea>
                                                        </div>
                                                    </div>

                                            </div>
                                            <h3>données </h3>
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="name"><i
                                                                    class="icofont-user-alt-3"></i></span>
                                                        </div>
                                                        <input name="name" type="text" placeholder="Nom et premon"
                                                            class="form-control" />
                                                    </div>
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="email"><i
                                                                    class="icofont-email"></i></span>
                                                        </div>
                                                        <input name="email" type="text" placeholder="Email"
                                                            class="form-control" />
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <div class="form-group ">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <label class="input-group-text" for="contry_code">
                                                                            <i class="icofont-globe-alt"></i></label>
                                                                    </div>
                                                                    {{-- <div class="input-group-append">
                                                                            <label class="input-group-text" id="contry_code"> <i class="icofont-globe-alt"></i></label>
                                                                        </div> --}}
                                                                    <select class="flex-grow-1" name="country_code"
                                                                        id="contry_code">
                                                                        <option value="+93"> AF(+93)</option>
                                                                        <option value="+88"> DB(+88)</option>
                                                                        <option value="+79"> NZ(+79)</option>
                                                                        <option value="+93"> AF(+93)</option>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-7">
                                                            <div class="form-group input-group">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="phone"><i
                                                                            class="icofont-ui-call"></i></span>
                                                                </div>
                                                                <input name="phone" type="text" placeholder="Phone"
                                                                    class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="pseudo"><i
                                                                    class="icofont-ui-user"></i></span>
                                                        </div>
                                                        <input name="pseudo" type="text" placeholder="pseudo"
                                                            class="form-control" />
                                                    </div>
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="password"><i
                                                                    class="icofont-lock"></i></span>
                                                        </div>
                                                        <input name="password" type="password" placeholder="Mot de passe"
                                                            class="form-control" />
                                                    </div>
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="confirm_password"><i
                                                                    class="icofont-lock"></i></span>
                                                        </div>
                                                        <input name="confirm_password" type="password"
                                                            placeholder="Confirmer votre mot de passe"
                                                            class="form-control" />
                                                    </div>
                                                    <input type="checkbox" id="condition" name="condition" value="yes"
                                                        required>
                                                    <label for="condition"> j'accepte les dispositions des conditions
                                                        générales et de la politique de confidentialité
                                                    </label><br>

                                                </div>
                                            </div>

                                            {{-- <p>
                                                        Information about your equipment
                                                        <span class="text-navy-blue">(required)</span> :
                                                    </p>
                                                    <div class="form-group">
                                                        <input name="articleName" type="text" placeholder="Article name"
                                                            class="form-control" />
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group input-group col-md-6">
                                                            <input name="length" type="number" placeholder="Length (cm)"
                                                                class="form-control" />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon1"><i
                                                                        class="icofont-box"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group input-group col-md-6">
                                                            <input name="width" type="number" placeholder="Width (cm)"
                                                                class="form-control" />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon1"><i
                                                                        class="icofont-box"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group input-group col-md-6">
                                                            <input name="height" type="number" placeholder="Height (cm)"
                                                                class="form-control" />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon1"><i
                                                                        class="icofont-box"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group input-group col-md-6">
                                                            <input name="weight" type="number" placeholder="Weight"
                                                                class="form-control" />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon1">KG</span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group input-group col-md-6">
                                                            <input name="quantity" type="number" placeholder="Quantity"
                                                                class="form-control" />
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="basic-addon1"><i
                                                                        class="icofont-numbered"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="household-empty-alert" class="form-group d-block">
                                                        <div class="alert alert-danger">
                                                            Please fill every field carefully
                                                        </div>
                                                    </div> --}}
                                            {{-- <div class="form-group">
                                                        <button
                                                        class="article-btn btn text-white bg-navy-blue"
                                                        data-target="#household-form"
                                                        data-article="#household-articles"
                                                        data-alert="#household-empty-alert"
                                                        >
                                                        Add an article
                                                        </button>
                                                    </div> --}}

                                        </div>
                                    </div>
                                    <div class="col-md-6 d-block" id="household-articles"></div>
                                </div>
                                <div class="text-right">
                                    {{-- <a href="{{ URL::previous() }}" class="back btn btn-outline-danger">
                                        <i class="icofont-simple-left mr-2"></i>Back
                                    </a> --}}
                                    <button type="submit" data-section="1"
                                        class="continue btn text-white bg-navy-blue ml-3">
                                        Publiez mon annonce

                                    </button>
                                    </form>
                                </div>
                        </div>
                        <!-- household equipment form end -->
                        @endif

                        @if ($category == 'vehicle')
                            <!-- vehicle form start -->
                            <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="vehicle">
                                <div id="vehicle1">
                                    <h4 class="font-weight-bold text-navy-blue">
                                        Type of transport
                                    </h4>
                                    <ul>
                                        <li class="vehicleType">Cars and vans</li>
                                        <li class="vehicleType">Recreational vehicles (RVs)</li>
                                        <li class="vehicleType">Trailers</li>
                                        <li class="vehicleType">Caravans</li>
                                        <li class="vehicleType">Vehicle spare parts</li>
                                        <li class="vehicleType">Aircrafts</li>
                                        <li class="vehicleType">Vintage vehicles</li>
                                        <li class="vehicleType">
                                            HGVs and construction vehicles
                                        </li>
                                    </ul>
                                    <div class="text-right mt-3">
                                        <a href="{{ URL::previous() }}" class="back btn btn-outline-danger">
                                            <i class="icofont-simple-left mr-2"></i>Back
                                        </a>
                                    </div>
                                </div>
                                <div id="vehicle2" class="d-block">
                                    <h4 class="font-weight-bold text-navy-blue">
                                        ADD ARTICLES
                                    </h4>
                                    <span>Give a name to your listing:</span>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="bg-light-gray p-3 rounded mt-3">
                                                <form action="{{ route('announcement.three') }}" class="needs-validation"
                                                    id="vehicle-form" method="POST">
                                                    @csrf
                                                    <input type="hidden" id="vehicle-type" />
                                                    <input type="hidden" name="category" value="{{ $category }}" />
                                                    <div class="form-group">
                                                        <input name="model_name" type="text"
                                                            placeholder="Ford Fiesta, Peugeot 405, Golf IV..."
                                                            class="form-control" />
                                                    </div>
                                                    <p>
                                                        Information about your equipment
                                                        <span class="text-navy-blue">(required)</span> :
                                                    </p>
                                                    <div class="form-group">
                                                        <input name="vehicleName" type="text" placeholder="Vehicle name"
                                                            class="form-control" />
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group input-group col-md-6">
                                                            <input name="make" type="text" placeholder="Make"
                                                                class="form-control" />
                                                        </div>
                                                        <div class="form-group input-group col-md-6">
                                                            <input name="model" type="text" placeholder="Model"
                                                                class="form-control" />
                                                        </div>
                                                        <div class="form-group input-group col-12">
                                                            <input name="estimationValue" type="number"
                                                                placeholder="Estimation value" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <label for="movingVehicle">Moving vehicle</label>
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="movingVehicle" name="movingVehicle" />
                                                            <label class="custom-control-label"
                                                                for="movingVehicle"></label>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <label for="acceptConveyorsVehicle">I accept conveyors</label>
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="acceptConveyorsVehicle" name="conveyors" />
                                                            <label class="custom-control-label"
                                                                for="acceptConveyorsVehicle"></label>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        The courier is an approved professional driver who
                                                        is authorised to drive your vehicle from point A
                                                        to point B.
                                                    </p>
                                                    <p class="text-danger">
                                                        Warning, this often more economical option is not
                                                        possible in case of a vehicle which is not in
                                                        working order or speed-limited (ex: small car
                                                        without a license).
                                                    </p>
                                                    <div id="vehicle-empty-alert" class="form-group d-block">
                                                        <div class="alert alert-danger">
                                                            Please fill every field carefully
                                                        </div>
                                                    </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6 d-block" id="vehicle-articles"></div>
                                    </div>
                                    <form class="text-right">
                                        <button data-section="0" class="back btn btn-outline-danger">
                                            <i class="icofont-simple-left mr-2"></i>Back
                                        </button>
                                        <button data-section="1" class="continue btn text-white bg-navy-blue ml-3"
                                            type="submit">
                                            Continue
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>
                    <!-- vehicle form end -->
                    @endif

                    @if ($category == 'motorcyclesport')
                        <!-- motorcycle and sport form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="motorcycleSport">
                            <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                            <span>Give a name to your listing:</span>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form method="POST" action="{{ route('announcement.three') }}"
                                            class="needs-validation article-form" id="motorcycleSport-form">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" />
                                            <div class="form-group">
                                                <input name="model_name" type="text"
                                                    placeholder="750 GSXR, 1000 Hayabusa..." class="form-control" />
                                            </div>
                                            <p>
                                                Information about your equipment
                                                <span class="text-navy-blue">(required)</span> :
                                            </p>
                                            <div class="form-group">
                                                <input name="vehicleName" type="text" placeholder="Motorcycle name"
                                                    class="form-control" />
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group input-group col-md-6">
                                                    <input name="make" type="text" placeholder="Make"
                                                        class="form-control" />
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="model" type="text" placeholder="Model"
                                                        class="form-control" />
                                                </div>
                                                <div class="form-group input-group col-12">
                                                    <input name="estimationValue" type="number"
                                                        placeholder="Estimation value" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <label for="movingVehicle2">Moving vehicle</label>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input" id="movingVehicle2"
                                                        name="movingVehicle" />
                                                    <label class="custom-control-label" for="movingVehicle2"></label>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between mb-3">
                                                <label for="acceptConveyorsMotorcycle">I accept conveyors</label>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="acceptConveyorsMotorcycle" name="conveyors" />
                                                    <label class="custom-control-label"
                                                        for="acceptConveyorsMotorcycle"></label>
                                                </div>
                                            </div>
                                            <p>
                                                The courier is an approved professional driver who
                                                is authorised to drive your vehicle from point A to
                                                point B.
                                            </p>
                                            <p class="text-danger">
                                                Warning, this often more economical option is not
                                                possible in case of a vehicle which is not in
                                                working order or speed-limited (ex: small car
                                                without a license).
                                            </p>
                                            <div id="motorcycleSport-empty-alert" class="form-group d-block">
                                                <div class="alert alert-danger">
                                                    Please fill every field carefully
                                                </div>
                                            </div>

                                    </div>
                                </div>
                                <div class="col-md-6 d-block" id="motorcycleSport-articles"></div>
                            </div>
                            <div class="text-right">
                                <a href="{{ URL::previous() }}" class="back btn btn-outline-danger">
                                    <i class="icofont-simple-left mr-2"></i>Back
                                </a>
                                <button data-section="1" class="continue btn text-white bg-navy-blue ml-3" type="submit">
                                    Continue
                                </button>
                                </form>
                            </div>
                        </div>
                        <!-- motorcycle and sport form end -->
                    @endif

                    @if ($category == 'boatvolimunoussport')
                        <!-- boats and voluminous sport form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="boat-voluminous">
                            <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                            <span>Give a name to your listing:</span>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form action="{{ route('announcement.three') }}" method="POST"
                                            class="needs-validation article-form" id="boat-voluminous-form">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" />
                                            <div class="form-group">
                                                <input name="model_name" type="text"
                                                    placeholder="3-seater Sofa, chairs, desks..." class="form-control" />
                                            </div>
                                            <p>
                                                Information on the boat to be transported
                                                <span class="text-navy-blue">(required)</span> :
                                            </p>
                                            <div class="form-group">
                                                <input name="boatName" type="text" placeholder="Boat name"
                                                    class="form-control" />
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group input-group col-md-6">
                                                    <input name="length" type="number" placeholder="Length (cm)"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-box"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="width" type="number" placeholder="Width (cm)"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-box"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="height" type="number" placeholder="Height (cm)"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-box"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="quantity" type="number" placeholder="Quantity"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-numbered"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="make" type="text" placeholder="Make"
                                                        class="form-control" />
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="model" type="text" placeholder="Model"
                                                        class="form-control" />
                                                </div>
                                                <div class="form-group input-group col-12">
                                                    <input name="estimationValue" type="number"
                                                        placeholder="Estimation value" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between mb-3">
                                                <label for="acceptConveyors">I accept conveyors</label>
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="acceptConveyors" name="conveyors" />
                                                    <label class="custom-control-label" for="acceptConveyors"></label>
                                                </div>
                                            </div>
                                            <div id="boat-voluminous-empty-alert" class="form-group d-block">
                                                <div class="alert alert-danger">
                                                    Please fill every field carefully
                                                </div>
                                            </div>


                                    </div>
                                </div>
                                <div class="col-md-6 d-block" id="boat-voluminous-articles"></div>
                            </div>
                            <div class="text-right">
                                <a href="{{ URL::previous() }}" class="back btn btn-outline-danger">
                                    <i class="icofont-simple-left mr-2"></i>Back
                                </a>
                                <button type="submit" data-section="1" class="continue btn text-white bg-navy-blue ml-3">

                                    Continue
                                </button>
                                </form>
                            </div>
                        </div>
                        <!-- boats and voluminous sport form end -->
                    @endif

                    @if ($category == 'fragilegoods')
                        <!--  Fragile goods form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="fragileGoods">
                            <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                            <span>Give a name to your listing:</span>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form action="{{ route('announcement.three') }}" method="POST"
                                            class="needs-validation article-form" id="fragileGoods-form">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" />
                                            <div class="form-group">
                                                <input name="model_name" type="text"
                                                    placeholder="Grand piano, Antique paintings..."
                                                    class="form-control" />
                                            </div>
                                            <p>
                                                Information about your equipment
                                                <span class="text-navy-blue">(required)</span> :
                                            </p>
                                            <div class="form-group">
                                                <input name="articleName" type="text" placeholder="Article name"
                                                    class="form-control" />
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group input-group col-md-6">
                                                    <input name="length" type="number" placeholder="Length (cm)"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-box"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="width" type="number" placeholder="Width (cm)"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-box"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="height" type="number" placeholder="Height (cm)"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-box"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="weight" type="number" placeholder="Weight"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1">KG</span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="quantity" type="number" placeholder="Quantity"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-numbered"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="fragileGoods-empty-alert" class="form-group d-block">
                                                <div class="alert alert-danger">
                                                    Please fill every field carefully
                                                </div>
                                            </div>

                                    </div>
                                </div>
                                <div class="col-md-6 d-block" id="fragileGoods-articles"></div>
                            </div>
                            <div class="text-right">
                                <a href="{{ URL::previous() }}" class="back btn btn-outline-danger">
                                    <i class="icofont-simple-left mr-2"></i>Back
                                </a>
                                <button data-section="1" class="continue btn text-white bg-navy-blue ml-3" type="submit">
                                    Continue
                                </button>

                                </form>
                            </div>
                        </div>
                        <!-- Fragile goods form end -->
                    @endif

                    @if ($category == 'package')
                        <!--  Package/Flod form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="package">
                            <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                            <span>Give a name to your listing:</span>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form method="POST" action="{{ route('announcement.three') }}"
                                            class="needs-validation article-form" id="package-form">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" />
                                            <div class="form-group">
                                                <input name="model_name" type="text"
                                                    placeholder="Grand piano, Antique paintings..."
                                                    class="form-control" />
                                            </div>
                                            <p>
                                                Information about your equipment
                                                <span class="text-navy-blue">(required)</span> :
                                            </p>
                                            <div class="form-group">
                                                <input name="articleName" type="text" placeholder="Article name"
                                                    class="form-control" />
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group input-group col-md-6">
                                                    <input name="length" type="number" placeholder="Length (cm)"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-box"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="width" type="number" placeholder="Width (cm)"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-box"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="height" type="number" placeholder="Height (cm)"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-box"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="weight" type="number" placeholder="Weight"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1">KG</span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="quantity" type="number" placeholder="Quantity"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-numbered"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="package-empty-alert" class="form-group d-block">
                                                <div class="alert alert-danger">
                                                    Please fill every field carefully
                                                </div>
                                            </div>


                                    </div>
                                </div>
                                <div class="col-md-6 d-block" id="package-articles"></div>
                            </div>
                            <div class="text-right">
                                <button data-section="0" class="back btn btn-outline-danger">
                                    <i class="icofont-simple-left mr-2"></i>Back
                                </button>
                                <button type="submit" data-section="1" class="continue btn text-white bg-navy-blue ml-3">
                                    Continue
                                </button>
                                </form>
                            </div>
                        </div>
                        <!-- Package/Flod form end -->
                    @endif

                    @if ($category == 'pallet')
                        <!--  Pallet form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="pallet">

                            <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                            <span>Give a name to your listing:</span>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form method="POST" action="{{ route('announcement.three') }}"
                                            class="needs-validation article-form" id="pallet-form">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" />
                                            <div class="form-group">
                                                <input name="model_name" type="text"
                                                    placeholder="Grand piano, Antique paintings..."
                                                    class="form-control" />
                                            </div>
                                            <p>
                                                Information about your pallet
                                                <span class="text-navy-blue">(required)</span> :
                                            </p>
                                            <div class="form-group">
                                                <input name="articleName" type="text" placeholder="Article name"
                                                    class="form-control" />
                                            </div>
                                            <div class="form-group">
                                                <select name="dim">
                                                    <option value="120 x 80 cm EUR EPAL">
                                                        120 x 80 cm EUR EPAL
                                                    </option>
                                                    <option value="80 x 60 cm half pallet">
                                                        80 x 60 cm half pallet
                                                    </option>
                                                    <option value="120 x 100 cm Standard Export">
                                                        120 x 100 cm Standard Export
                                                    </option>
                                                    <option value="107 x 107 cm">107 x 107 cm</option>
                                                    <option value="110 x 110 cm">110 x 110 cm</option>
                                                    <option value="114 x 114 cm">114 x 114 cm</option>
                                                    <option value="114 x 76 cm">114 x 76 cm</option>
                                                    <option value="120 x 120 cm">120 x 120 cm</option>
                                                    <option value="122 x 102 cm">122 x 102 cm</option>
                                                    <option value="130 x 110 cm">130 x 110 cm</option>
                                                </select>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group input-group col-md-6">
                                                    <input name="height" type="number" placeholder="Height (cm)"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-box"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="weight" type="number" placeholder="Weight"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1">KG</span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="quantity" type="number" placeholder="Quantity"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-numbered"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="pallet-empty-alert" class="form-group d-block">
                                                <div class="alert alert-danger">
                                                    Please fill every field carefully
                                                </div>
                                            </div>


                                    </div>
                                </div>
                                <div class="col-md-6 d-block" id="pallet-articles"></div>
                            </div>
                            <div class="text-right">
                                <a href="{{ URL::previous() }}" class="back btn btn-outline-danger">
                                    <i class="icofont-simple-left mr-2"></i>Back
                                </a>
                                <button data-section="1" class="continue btn text-white bg-navy-blue ml-3" type="submit">
                                    Continue
                                </button>
                                </form>
                            </div>
                        </div>
                        <!-- Pallet form end -->
                    @endif

                    @if ($category == 'animal')
                        <!--  Animal form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="animal">
                            <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                            <span>Give a name to your listing:</span>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form method="POST" action="{{ route('announcement.three') }}"
                                            class="needs-validation article-form" id="animal-form">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" />
                                            <div class="form-group">
                                                <input name="model_name" type="text"
                                                    placeholder="2 cats, 1 dogs, 40 chickens..." class="form-control" />
                                            </div>
                                            <p>
                                                Information about your animals
                                                <span class="text-navy-blue">(required)</span> :
                                            </p>
                                            <div class="form-group">
                                                <input name="animalName" type="text" placeholder="Animal name"
                                                    class="form-control" />
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <input name="animalBreed" type="text" placeholder="Animal breed"
                                                        class="form-control" />
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="weight" type="number" placeholder="Weight"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1">KG</span>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input name="specialNeeds" type="text" placeholder="Special needs"
                                                        class="form-control" />
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input name="vaccinations" type="text"
                                                        placeholder="Are the vaccinations up to date?"
                                                        class="form-control" />
                                                </div>
                                            </div>
                                            <p>Cage (optional) :</p>
                                            <div class="form-row">
                                                <div class="form-group input-group col-md-6">
                                                    <input name="length" type="number" placeholder="Length (cm)"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-box"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="width" type="number" placeholder="Width"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1">KG</span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="height" type="number" placeholder="Height (cm)"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-box"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="animal-empty-alert" class="form-group d-block">
                                                <div class="alert alert-danger">
                                                    Please fill every field carefully
                                                </div>
                                            </div>


                                    </div>
                                </div>
                                <div class="col-md-6 d-block" id="animal-articles"></div>
                            </div>
                            <div class="text-right">
                                <button data-section="0" class="back btn btn-outline-danger">
                                    <i class="icofont-simple-left mr-2"></i>Back
                                </button>
                                <button data-section="1" class="continue btn text-white bg-navy-blue ml-3" type="submit">
                                    Continue
                                </button>
                                </form>
                            </div>
                        </div>
                        <!-- Animal form end -->
                    @endif

                    @if ($category == 'agrifood')
                        <!--  Agri-food form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="agri-food">
                            <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                            <span>Give a name to your listing:</span>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form method="POST" action="{{ route('announcement.three') }}"
                                            class="needs-validation article-form" id="agri-food-form">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" />
                                            <div class="form-group">
                                                <input name="food_name" type="text"
                                                    placeholder="Roquefort, dried fruit, spices..."
                                                    class="form-control" />
                                            </div>
                                            <p>
                                                Information about your agri-food
                                                <span class="text-navy-blue">(required)</span> :
                                            </p>
                                            <div class="form-group">
                                                <input name="articleName" type="text" placeholder="Article name"
                                                    class="form-control" />
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group input-group col-md-6">
                                                    <input name="weight" type="number" placeholder="Weight"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1">KG</span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="quality" type="number" placeholder="Quantity"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-numbered"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="agri-food-empty-alert" class="form-group d-block">
                                                <div class="alert alert-danger">
                                                    Please fill every field carefully
                                                </div>
                                            </div>


                                    </div>
                                </div>
                                <div class="col-md-6 d-block" id="agri-food-articles"></div>
                            </div>
                            <div class="text-right">
                                <a href="{{ URL::previous() }}" class="back btn btn-outline-danger">
                                    <i class="icofont-simple-left mr-2"></i>Back
                                </a>
                                <button data-section="1" class="continue btn text-white bg-navy-blue ml-3" type="submit">
                                    Continue
                                </button>
                                </form>
                            </div>
                        </div>
                        <!-- Agri-food form end -->
                    @endif

                    @if ($category == 'commercialgoods')

                        <!--  Commercial Goods form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="commercial-good">
                            <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                            <span>Give a name to your listing:</span>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form method="POST" action="{{ route('announcement.three') }}"
                                            class="needs-validation article-form" id="commercial-good-form">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" />
                                            <div class="form-group">
                                                <input name="model_name" type="text" placeholder="Marble, Petrol, Acid..."
                                                    class="form-control" />
                                            </div>
                                            <p>
                                                Information about your equipment
                                                <span class="text-navy-blue">(required)</span> :
                                            </p>
                                            <div class="form-group">
                                                <input name="articleName" type="text" placeholder="Article name"
                                                    class="form-control" />
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group input-group col-md-6">
                                                    <input name="length" type="number" placeholder="Length (cm)"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-box"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="width" type="number" placeholder="Width (cm)"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-box"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="height" type="number" placeholder="Height (cm)"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-box"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="weight" type="number" placeholder="Weight"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1">KG</span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="quantity" type="number" placeholder="Quantity"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-numbered"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="commercial-good-empty-alert" class="form-group d-block">
                                                <div class="alert alert-danger">
                                                    Please fill every field carefully
                                                </div>
                                            </div>

                                    </div>
                                </div>
                                <div class="col-md-6 d-block" id="commercial-good-articles"></div>
                            </div>
                            <div class="text-right">
                                <a href="{{ URL::previous() }}" class="back btn btn-outline-danger">
                                    <i class="icofont-simple-left mr-2"></i>Back
                                </a>
                                <button data-section="1" class="continue btn text-white bg-navy-blue ml-3" type="submit">
                                    Continue
                                </button>
                                </form>
                            </div>
                        </div>
                        <!-- Commercial Goods form end -->
                    @endif

                    @if ($category == 'miscellaneous')
                        <!--  Miscellaneous form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="miscellaneous">
                            <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                            <span>Give a name to your listing:</span>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form method="POST" action="{{ route('announcement.three') }}"
                                            class="needs-validation article-form" id="miscellaneous-form">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" />
                                            <div class="form-group">
                                                <input name="others" type="text" placeholder="Others..."
                                                    class="form-control" />
                                            </div>
                                            <p>
                                                Information about your equipment
                                                <span class="text-navy-blue">(required)</span> :
                                            </p>
                                            <div class="form-group">
                                                <input name="articleName" type="text" placeholder="Article name"
                                                    class="form-control" />
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group input-group col-md-6">
                                                    <input name="length" type="number" placeholder="Length (cm)"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-box"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="width" type="number" placeholder="Width (cm)"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-box"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="height" type="number" placeholder="Height (cm)"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-box"></i></span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="weight" type="number" placeholder="Weight"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1">KG</span>
                                                    </div>
                                                </div>
                                                <div class="form-group input-group col-md-6">
                                                    <input name="quantity" type="number" placeholder="Quantity"
                                                        class="form-control" />
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" id="basic-addon1"><i
                                                                class="icofont-numbered"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="miscellaneous-empty-alert" class="form-group d-block">
                                                <div class="alert alert-danger">
                                                    Please fill every field carefully
                                                </div>
                                            </div>


                                    </div>
                                </div>
                                <div class="col-md-6 d-block" id="miscellaneous-articles"></div>
                            </div>
                            <div class="text-right">
                                <a href="{{ URL::previous() }}" class="back btn btn-outline-danger">
                                    <i class="icofont-simple-left mr-2"></i>Back
                                </a>
                                <button data-section="1" class="continue btn text-white bg-navy-blue ml-3" type="submit">
                                    Continue
                                </button>
                                </form>
                            </div>
                        </div>
                        <!-- Miscellaneous form end -->
                    @endif

                </div>
                {{-- <div class="col-lg-3 d-block d-lg-block">
                        <div class="shadow-sm my-3 p-3 bg-white rounded">
                            <h5 class="text-navy-blue font-weight-bold">
                                Publish your listing
                            </h5>
                            <p>
                                Our system matches your move with those of our other Fretbay
                                users.
                            </p>
                            <h5 class="text-navy-blue font-weight-bold">
                                Compare the quotes
                            </h5>
                            <p>
                                Grouped quotes at low prices are offered by our network of
                                professional carriers.
                            </p>
                            <h5 class="text-navy-blue font-weight-bold">
                                Select a quote
                            </h5>
                            <p>
                                Establish your transportation terms by contacting the
                                carrier of your choice.
                            </p>
                            <h5 class="text-navy-blue font-weight-bold">
                                Evaluate the service
                            </h5>
                            <p>
                                Following the move, give your opinion on the mover's service
                                and the quality of the grouped transport of your goods.
                            </p>
                        </div>
                    </div> --}}
            </div>
            </div>
            </div>
        </section>
        <!-- transport end -->
        <!-- Main Body Content Start -->
    @endsection


    @section('js')
        <!-- transport scripts -->
        <script src="{{ asset('assets/js/transport.js') }}"></script>
    @endsection

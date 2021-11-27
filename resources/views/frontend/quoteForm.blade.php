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
<style>
    .customSelectFix .nice-select{
        white-space: initial;
        height: auto;
        padding-right: 30px;
    }
</style>
@endsection

@section('content')
<div id="map-canvas"></div>
    <!-- Main Body Content Start -->
    <main id="body-content" style="overflow-y: inherit">
        <!-- steps start -->
        {{-- <section class="transport-steps">
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
        </section> --}}
        <!-- steps end -->

        <!-- transport start -->
        <section class="transport-type">
            <div class="container">
                <div class="transport-type-wrapper">
                   
                    @if ($category == 'déménagement')
                                <!-- household equipment form start -->
                                <div class="bg-white shadow-sm my-3 p-3 rounded" id="household">
                                    <h4 class="font-weight-bold text-navy-blue">Décrivez votre demande</h4>
                                    {{-- <span>Give a name to your listing:</span> --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="bg-light-gray p-3 rounded mt-3">
                                                <form action="{{ route('announcement.store') }}" class="needs-validation" id="household-form" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="category" value="{{ $category }}" /> 

                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <input id="depart" style="position: relative" type="text" placeholder="Adresse de départ" class="form-control" name="depart" required/> 
                                                                <label for="depart"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                           </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <input id="arrivee" style="position: relative" type="text" placeholder="Adresse d'arrivée" class="form-control" name="arrivee" required/>
                                                                <label for="arrivee"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for=""> Date de chargement </label>
                                                                <input type="date" placeholder="Date de chargement " class="form-control" name="loading_date" required/>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for=""> Date de livraison </label>
                                                                <input type="date" placeholder="Date de livraison " class="form-control" name="delevary_date" required/>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <div class="form-group">
                                                                <input style="position: relative" type="text" id="volume" placeholder="je connais mon volume"  class="form-control" name="volume" required/>
                                                                <label for="volume"> <span style="position: absolute; top: 10px; right: 25px;"><small>m</small>3</span> </label>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <div class="form-group">
                                                                <textarea name="list"   class="form-control" rows="7"
                                                                    placeholder="je ne connais pas mon volume mais j'ai une liste" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row my-3">
                                                        <div class="col-3">
                                                            <div class="form-group">
                                                                <h5> Biens particuliers </h5>
                                                                {{-- <input type="text" placeholder="Biens particuliers"
                                                                    class="form-control" name="individual_goods"/> --}}
                                                            </div>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="d-flex">
                                                                        <label for="no" class="d-flex align-items-center mr-3">
                                                                            non <input type="radio" id="no" name="individual_goods_status" style="margin-left: 5px" value="no" required>
                                                                        </label>
        
                                                                        <label for="yes" class="d-flex align-items-center">
                                                                            oui <input type="radio" id="yes" name="individual_goods_status" value="yes" style="margin-left: 5px" required>
                                                                        </label> 
                                                                    </div> 
                                                                </div>
                                                                <div class="col-9">
                                                                    <textarea name="individual_goods" class="form-control" style="height: 45px"></textarea>
                                                                </div>
                                                            </div> 
                                                            {{-- <label for="vehicle1">non</label>
                                                            <input type="checkbox" id="vehicle1" name="vehicle1">
                                                            <label for="vehicle2"> oui</label> 
                                                            <input type="checkbox" id="vehicle2" name="vehicle2"><br> --}}
                                                            <span>*piano droit, frigo américain, coffre fort, table en
                                                                marbre….</span>

                                                        </div>
                                                    </div>
                                                    <div class="row my-3">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <h5>départ</h5>
                                                                {{-- <input type="text" placeholder="type de lieu"
                                                                    class="form-control" name="place_type" /> --}}
                                                                <select name="place_type_depart"   required>
                                                                    <option value="">type de lieu depart</option>
                                                                    <option value="maison">maison</option>
                                                                    <option value="appartement">appartement</option>
                                                                    <option value="garde-meuble">garde meuble</option>
                                                                    <option value="commercial">local commercial </option>
                                                                    <option value="bureau">bureau </option>

                                                                </select>
                                                            </div> 
                                                        </div> 
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <h5>arrivée</h5>
                                                                {{-- <input type="text" placeholder="type de lieu"
                                                                    class="form-control" name="place_type" /> --}}
                                                                <select name="place_type_arrivee"   required>
                                                                    <option value="">type de lieu arrivee</option>
                                                                    <option value="maison">maison</option>
                                                                    <option value="appartement">appartement</option>
                                                                    <option value="garde-meuble">garde meuble</option>
                                                                    <option value="commercial">local commercial </option>
                                                                    <option value="bureau">bureau </option>
        
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row my-3">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <h5>départ</h5>
                                                                <select name="floor_depart"   required>
                                                                    <option value="">étages depart</option>
                                                                    <option value="RDC">RDC</option>
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
                                                            </div>
                                                        </div>
                                                        <div class="col-4"> 
                                                             <div class="form-group">
                                                                <h5>arrivée</h5>
                                                                <select name="floor_arrivee"   required>
                                                                    <option value="">étages arrivee</option>
                                                                    <option value="RDC">RDC</option>
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
                                                    <div class="row my-3">
                                                        <div class="col-4">
                                                            <h5>départ</h5>
                                                             <select name="ascenseur_depart" required> 
                                                                <option value="">ascenseur depart</option>
                                                                <option value="non">non</option>
                                                                <option value="oui">oui</option>
                                                            </select>
                                                        </div>  
                                                        <div class="col-4">
                                                            <h5>arrivée</h5>
                                                             <select name="ascenseur_arrivee" required> 
                                                                <option value="">ascenseur arrivee</option>
                                                                <option value="non">non</option>
                                                                <option value="oui">oui</option>
                                                            </select>
                                                        </div>  
                                                    </div> 
                                                    <div class="row my-3">
                                                        <div class="col-4"> 
                                                            <h5>départ</h5>
                                                            <select name="access_depart" required> 
                                                                <option value="">accès depart</option>
                                                                <option value="on peut se garer devant">on peut se garer devant</option>
                                                                <option value="on doit se garer plus loin">on doit se garer plus loin</option>
                                                            </select> 
                                                        </div>
                                                        <div class="col-4"> 
                                                            <h5>arrivée</h5>
                                                            <select name="access_arrivee" required> 
                                                                <option value="">accès arrivee</option>
                                                                <option value="on peut se garer devant">on peut se garer devant</option>
                                                                <option value="on doit se garer plus loin">on doit se garer plus loin</option>
                                                            </select> 
                                                        </div>

                                                    </div> 
                                                    <br>
                                                    <h5 class="mt-3">Je choisis ma formule en focntion de mes besoins</h5>
                                                    <div class="row mt-4">
                                                        <div class="col-2 mt-1">
                                                            <div class="form-group" style="position: relative">
                                                                
                                                                <span style="font-size: 20px">Économique</span> <input id="économique" name="économique" value="économique" style="position: absolute; top: 10px; right: 0" type="checkbox">
                                                            </div>

                                                        </div>
                                                        <div class="col-6 customSelectFix">
                                                            <select  required >
                                                                <option >Nombre de déménageur nécessaire (au minimum 2) </option>
                                                                fdasfdfdfadfd
                                                                <option disabled>&checkmark; protection du mobilier</option>
                                                                <option disabled>&checkmark; manutention au chargement </option>
                                                                <option disabled>&checkmark; transport</option>
                                                                <option disabled>&checkmark; manutention au déchargement </option>
                                                                <option disabled>&checkmark; Assurance</option>
                                                                <option disabled">&checkmark; frais de route (péage, carburant, ferry,…)</option>
                                                                
                                                            </select> 
                                                            @error('économique')
                                                                <span class="text-danger alert">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-2 mt-1">
                                                            <div class="form-group" style="position: relative">
                                                                <span style="font-size: 20px">Standard</span> <input id="standard" name="standard" value="standard" style="position: absolute; top: 10px; right: 0" type="checkbox">
                                                            </div>
                                                           
                                                        </div>
                                                        <div class="col-6 customSelectFix">
                                                            <select  required>
                                                                <option >Nombre de déménageur nécessaire (au minimum 2)</option>
                                                                <option disabled>&checkmark;  démontage du mobilier </option>
                                                                <option disabled>&checkmark;  Emballage du fragile </option>
                                                                <option disabled>&checkmark; protection du mobilier</option>
                                                                <option disabled>&checkmark;  manutention au chargement</option>
                                                                <option disabled>&checkmark; transport</option>
                                                                <option disabled>&checkmark; manutention au déchargement</option>
                                                                <option disabled>&checkmark; remontage du mobilier</option>
                                                                <option disabled>&checkmark; Assurance</option>
                                                                <option disabled>&checkmark;  frais de route (péage, carburant, ferry,…)</option> 
                                                            </select>
                                                            @error('standard')
                                                            <span class="text-danger alert">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-2 mt-1">
                                                            <div class="form-group" style="position: relative">
                                                                <span style="font-size: 20px">Compléte</span> <input id="compléte" name="compléte" value="compléte"  style="position: absolute; top: 10px; right: 0" type="checkbox">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 customSelectFix">
                                                            <select required>
                                                                <option > Nombre de déménageur nécessaire  </option>
                                                                <option disabled>&checkmark; (Vêtement et linge de lit Livres et documents Vaisselles et fragile Divers)</option>
                                                                <option disabled>&checkmark; démontage du mobilier </option>
                                                                <option disabled>&checkmark; protection du mobilier</option>
                                                                <option disabled>&checkmark; manutention au chargement</option>
                                                                <option disabled>&checkmark; transport</option>
                                                                <option disabled>&checkmark; manutention au déchargement </option>
                                                                <option disabled>&checkmark; Déballage et mise en place des cartons</option>
                                                                <option disabled>&checkmark; remontage du mobilier </option>
                                                                <option disabled>&checkmark; Assurance </option>
                                                                <option disabled>&checkmark; frais de route (péage, carburant, ferry,…)</option>
                                                            </select>
                                                            @error('compléte')
                                                            <span class="text-danger alert">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-2 mt-1">
                                                            <div class="form-group" style="position: relative">
                                                                <span style="font-size: 20px">Ma formule Clicmove</span> <input id="clicmove"  name="clicmove" value="clicmove" style="position: absolute; top: 10px; right: 0" type="checkbox">
                                                            </div>
                                                        </div>
                                                        <div class="col-6 customSelectFix">
                                                            <select required>
                                                                <option > Cette formule permet de composer mon déménagement à la carte en adaptant les formules existantes en fonction de mon besoin réel. </option>
                                                                <option disabled>&checkmark; vous pouvez décrire vos besoins dans les informations complémentaires</option>
                                                                <option disabled>&checkmark; exemple 1 : je choisis la formule économique, et demande la livraison de 2 cartons penderie et le démontage de mon lit</option>
                                                                <option disabled>&checkmark; exemple 2 : j’ai besoin d’une formule standard avec 1 mois de stockage</option>
                                                            </select>
                                                            @error('clicmove')
                                                            <span class="text-danger alert">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <h5 class="mt-4 font-weight-bold text-navy-blue">
                                                        <i class="icofont-warning-alt mr-2"></i>informations complémentaires
                                                      </h5>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <textarea name="informations"   class="form-control"
                                                                rows="7" placeholder="informations complémentaires "></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-8 mb-3">
                                                            <h5>Vous pouvez compléter votre demande avec des photos</h5> 
                                                            {{-- <img src="{{ asset('uploads/callouts/1.jpg') }}" alt=""> --}} 
                                                            <input class="d-none" type="file" name="image" id="image" required>
                                                            <label for="image" class="my-3 btn website-bg-color"><i class="icofont-arrow-up bg-light website-color rounded-circle"></i>Télécharger</label>
                                                        </div>
                                                    </div>
                                                    

                                                    {{-- IF User Is not Login Then Show This  --}}
                                                   @guest 
                                                    {{-- <h3 class="mt-4">données </h3> --}}
                                                    
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <div class="form-group input-group">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="name"><i
                                                                            class="icofont-user-alt-3 website-color"></i></span>
                                                                </div>
                                                                <input name="name" type="text" placeholder="Nom et premon"
                                                                    class="form-control" />
                                                            </div>
                                                            <span class="text-success d-none" id="existing">You have Already An Account Please Login</span>
                                                            <div class="form-group input-group">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="email"><i
                                                                            class="icofont-email  website-color" ></i></span>
                                                                </div>
                                                                <input name="email" type="text" id="user_email" placeholder="Email"
                                                                    class="form-control" />
                                                            </div>
                                                            <div class="form-group input-group">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="password"><i
                                                                            class="icofont-lock  website-color"></i></span>
                                                                </div>
                                                                <input name="password" type="password"
                                                                    placeholder="Mot de passe" class="form-control"  id="pwd"/>
                                                            </div>
                                                            <div id="optional" class="">
                                                                <span class="text-danger" id="password_error"> </span>
                                                                <div class="form-group input-group">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text" id="confirm_password"><i
                                                                                class="icofont-lock  website-color"></i></span>
                                                                    </div>
                                                                    <input name="confirm_password" type="password"
                                                                        placeholder="Confirmer votre mot de passe"
                                                                        class="form-control" id="c_pwd"/>
                                                                </div> 

                                                                <div class="row">
                                                                    <div class="col-5">
                                                                        <div class="form-group ">
                                                                            <div class="input-group" id="country_code_wrapper">
                                                                                <div class="input-group-prepend">
                                                                                    <label class="input-group-text"
                                                                                        for="contry_code">
                                                                                         <i class="icofont-world  website-color"></i></label>
                                                                                </div> 
                                                                                <select class="flex-grow-1 w-auto"
                                                                                    name="country_code" id="contry_code">
                                                                                    @foreach ( countryCode() as $item)
                                                                                    <option value="{{ $item->phonecode }}"> {{ $item->iso }} ({{ $item->phonecode }})</option> 
                                                                                    @endforeach 
                                                                                </select>
                                                                            </div> 
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-7">
                                                                        <div class="form-group input-group">
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text" id="phone"><i
                                                                                        class="icofont-ui-call  website-color"></i></span>
                                                                            </div>
                                                                            <input name="phone" type="text" placeholder="Phone"
                                                                                class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group input-group">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text" id="pseudo"><i
                                                                                class="icofont-ui-user  website-color"></i></span>
                                                                    </div>
                                                                    <input name="pseudo" type="text" placeholder="pseudo"
                                                                        class="form-control" />
                                                                </div>
                                                            </div>
                                                       
                                                        </div>
                                                    </div>  
                                                    @endguest
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="checkbox" id="condition" name="terms"
                                                            value="yes" required>
                                                        <label for="condition"> j'accepte les dispositions des
                                                            conditions
                                                            générales et de la politique de confidentialité
                                                        </label><br> 
                                                        </div>
                                                    </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="col-md-6 d-block" id="household-articles"></div>
                                </div>
                                <div class="text-right">
                                    {{-- <a href="{{ URL::previous() }}" class="back btn btn-outline-danger">
                                        <i class="icofont-simple-left mr-2"></i>Back
                                    </a> --}}
                                    <button type="submit" id="demenagementForm" class="continue btn text-white bg-navy-blue ml-3">
                                        Publiez mon annonce
                                    </button>
                                    </form>
                                </div>
                         
                        <!-- household equipment form end -->
                    @endif

                    @if ($category == 'chauffeur')
                            <!-- vehicle form start -->
                            <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="vehicle">
                                {{-- <div id="vehicle1">
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
                                </div> --}}
                                <div id="vehicle2" class="d-block">
                                    <h4 class="font-weight-bold text-navy-blue">
                                        Décrivez votre demande
                                    </h4>
                                    {{-- <span>Give a name to your listing:</span> --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="bg-light-gray p-3 rounded mt-3">
                                                <form action="{{ route('announcement.store') }}" class="needs-validation" id="vehicle-form" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" id="vehicle-type" />
                                                    <input type="hidden" name="category" value="{{ $category }}" />
                                                     
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <input id="depart" style="position: relative" type="text" placeholder="Adresse de départ" class="form-control" name="depart" required/> 
                                                                <label for="depart"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                           </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <input id="arrivee" style="position: relative" type="text" placeholder="Adresse d'arrivée" class="form-control" name="arrivee" required/>
                                                                <label for="arrivee"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for=""> Date de chargement </label>
                                                                <input type="date" placeholder="Date de chargement " class="form-control" name="loading_date" required/>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for=""> Date de livraison </label>
                                                                <input type="date" placeholder="Date de livraison " class="form-control" name="delevary_date" required/>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="je connais mon volume"
                                                                    class="form-control" name="volume" required/>
                                                            </div>
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="form-group">
                                                                <textarea name="list"   class="form-control" rows="7"
                                                                    placeholder="je ne connais pas mon volume mais j'ai une liste" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row my-3">
                                                        <div class="col-3">
                                                            <div class="form-group">
                                                                <h5> Biens particuliers </h5>
                                                                {{-- <input type="text" placeholder="Biens particuliers"
                                                                    class="form-control" name="individual_goods"/> --}}
                                                            </div>
                                                        </div>
                                                        <div class="col-5">
                                                            <div class="row">
                                                                <div class="col-3">
                                                                    <div class="d-flex">
                                                                        <label for="no" class="d-flex align-items-center mr-3">
                                                                            non <input type="radio" id="no" name="individual_goods_status"
                                                                                style="margin-left: 5px" value="no" required>
                                                                        </label>
        
                                                                        <label for="yes" class="d-flex align-items-center">
                                                                            oui <input type="radio" id="yes" name="individual_goods_status"
                                                                                value="yes" style="margin-left: 5px" required>
                                                                        </label> 
                                                                    </div> 
                                                                </div>
                                                                <div class="col-9">
                                                                    <textarea name="individual_goods" class="form-control" style="height: 45px"></textarea>
                                                                </div>
                                                            </div> 
                                                            {{-- <label for="vehicle1">non</label>
                                                            <input type="checkbox" id="vehicle1" name="vehicle1">
                                                            <label for="vehicle2"> oui</label> 
                                                            <input type="checkbox" id="vehicle2" name="vehicle2"><br> --}}
                                                            <span>*piano droit, frigo américain, coffre fort, table en
                                                                marbre….</span>

                                                        </div> 
                                                    </div>
                                                    <div class="row my-3">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <h5>départ</h5>
                                                                {{-- <input type="text" placeholder="type de lieu"
                                                                    class="form-control" name="place_type" /> --}}
                                                                <select name="place_type_depart"   required>
                                                                    <option value="">type de lieu depart</option>
                                                                    <option value="maison">maison</option>
                                                                    <option value="appartement">appartement</option>
                                                                    <option value="garde-meuble">garde meuble</option>
                                                                    <option value="commercial">local commercial </option>
                                                                    <option value="bureau">bureau </option>

                                                                </select>
                                                            </div> 
                                                        </div> 
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <h5>arrivée</h5>
                                                                {{-- <input type="text" placeholder="type de lieu"
                                                                    class="form-control" name="place_type" /> --}}
                                                                <select name="place_type_arrivee"   required>
                                                                    <option value="">type de lieu arrivee</option>
                                                                    <option value="maison">maison</option>
                                                                    <option value="appartement">appartement</option>
                                                                    <option value="garde-meuble">garde meuble</option>
                                                                    <option value="commercial">local commercial </option>
                                                                    <option value="bureau">bureau </option>
        
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row my-3">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <h5>départ</h5>
                                                                <select name="floor_depart"   required>
                                                                    <option value="">étages depart</option>
                                                                    <option value="RDC">RDC</option>
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
                                                            </div>
                                                        </div>
                                                        <div class="col-4"> 
                                                             <div class="form-group">
                                                                <h5>arrivée</h5>
                                                                <select name="floor_arrivee"   required>
                                                                    <option value="">étages arrivee</option>
                                                                    <option value="RDC">RDC</option>
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
                                                    <div class="row my-3">
                                                        <div class="col-4">
                                                            <h5>départ</h5>
                                                             <select name="ascenseur_depart" required> 
                                                                <option value="">ascenseur depart</option>
                                                                <option value="non">non</option>
                                                                <option value="oui">oui</option>
                                                            </select>
                                                        </div>  
                                                        <div class="col-4">
                                                            <h5>arrivée</h5>
                                                             <select name="ascenseur_arrivee" required> 
                                                                <option value="">ascenseur arrivee</option>
                                                                <option value="non">non</option>
                                                                <option value="oui">oui</option>
                                                            </select>
                                                        </div>  
                                                    </div> 
                                                    <div class="row my-3">
                                                        <div class="col-4"> 
                                                            <h5>départ</h5>
                                                            <select name="access_depart" required> 
                                                                <option value="">accès depart</option>
                                                                <option value="on peut se garer devant">on peut se garer devant</option>
                                                                <option value="on doit se garer plus loin">on doit se garer plus loin</option>
                                                            </select> 
                                                        </div>
                                                        <div class="col-4"> 
                                                            <h5>arrivée</h5>
                                                            <select name="access_arrivee" required> 
                                                                <option value="">accès arrivee</option>
                                                                <option value="on peut se garer devant">on peut se garer devant</option>
                                                                <option value="on doit se garer plus loin">on doit se garer plus loin</option>
                                                            </select> 
                                                        </div> 
                                                    </div>  
                                                    <br>
                                                    <div class="row my-3">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <select name="help">
                                                                    <option value="">j'ai besoin d'aide</option>
                                                                    <option value="oui"> oui</option>
                                                                    <option value="non"> non</option>
                                                                </select> 
                                                            </div>
                                                        </div> 
                                                    </div> 
                                                    <h5 class="mt-4 font-weight-bold text-navy-blue">
                                                        <i class="icofont-warning-alt mr-2"></i>informations complémentaires
                                                      </h5>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <textarea name="informations"   class="form-control"
                                                                rows="7" placeholder="informations complémentaires "></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row mt-4">
                                                        <div class="col-8 mb-3">
                                                            <h5>Vous pouvez compléter votre demande avec des photos</h5> 
                                                            {{-- <img src="{{ asset('uploads/callouts/1.jpg') }}" alt=""> --}}
                                                            <input class="d-none" type="file" name="image" id="image" required>
                                                            <label for="image" class="my-3 btn website-bg-color"><i class="icofont-arrow-up bg-light website-color rounded-circle"></i>Télécharger</label>
                                                        </div>
                                                    </div>

                                                    {{-- IF User Is not Login Then Show This  --}}
                                                    @guest
                                                    {{-- <h3 class="mt-4">données </h3> --}}
                                                    @if (session('errors'))
                                                    <script>alert("{{ session('errors') }}")</script> 
                                                    @endif
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <div class="form-group input-group">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="name"><i
                                                                            class="icofont-user-alt-3  website-color"></i></span>
                                                                </div>
                                                                <input name="name" type="text" placeholder="Nom et premon"
                                                                    class="form-control" />
                                                            </div>
                                                            <span class="text-success d-none" id="existing">You have Already An Account Please Login</span>
                                                            <div class="form-group input-group">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="email"><i
                                                                            class="icofont-email  website-color"></i></span>
                                                                </div>
                                                                <input name="email" type="text" id="user_email" placeholder="Email"
                                                                    class="form-control" />
                                                                </div>
                                                            <div class="form-group input-group">
                                                                <div class="input-group-append">
                                                                    <span class="input-group-text" id="password"><i
                                                                            class="icofont-lock  website-color"></i></span>
                                                                </div>
                                                                <input name="password" type="password"
                                                                    placeholder="Mot de passe" class="form-control"  id="pwd"/>
                                                            </div>
                                                            <div id="optional" class="">
                                                                <div class="form-group input-group">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text" id="confirm_password"><i
                                                                                class="icofont-lock  website-color"></i></span>
                                                                    </div>
                                                                    <input name="confirm_password" type="password"
                                                                        placeholder="Confirmer votre mot de passe"
                                                                        class="form-control" id="c_pwd"/>
                                                                </div> 
                                                                <div class="row">
                                                                    <div class="col-5">
                                                                        <div class="form-group ">
                                                                            <div class="input-group" id="country_code_wrapper">
                                                                                <div class="input-group-prepend">
                                                                                    <label class="input-group-text"
                                                                                        for="contry_code">
                                                                                         <i class="icofont-world  website-color"></i></label>
                                                                                </div> 
                                                                                <select class="flex-grow-1 w-auto"
                                                                                    name="country_code" id="contry_code">
                                                                                    @foreach ( countryCode() as $item)
                                                                                    <option value="{{ $item->phonecode }}"> {{ $item->iso }} ({{ $item->phonecode }})</option> 
                                                                                    @endforeach 
                                                                                </select>
                                                                            </div> 
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-7">
                                                                        <div class="form-group input-group">
                                                                            <div class="input-group-append">
                                                                                <span class="input-group-text" id="phone"><i
                                                                                        class="icofont-ui-call  website-color"></i></span>
                                                                            </div>
                                                                            <input name="phone" type="text" placeholder="Phone"
                                                                                class="form-control" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group input-group">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text" id="pseudo"><i
                                                                                class="icofont-ui-user  website-color"></i></span>
                                                                    </div>
                                                                    <input name="pseudo" type="text" placeholder="pseudo"
                                                                        class="form-control" />
                                                                </div>
                                                            </div>
                                                       
                                                        </div>
                                                    </div>  
                                                    @endguest
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="checkbox" id="condition" name="terms"
                                                            value="yes" required>
                                                        <label for="condition"> j'accepte les dispositions des
                                                            conditions
                                                            générales et de la politique de confidentialité
                                                        </label><br>

                                                        </div>
                                                    </div>
                                                    
                                                    {{-- <button data-section="0" class="back btn btn-outline-danger">
                                                        <i class="icofont-simple-left mr-2"></i>Back
                                                    </button>
                                                    <button data-section="1"
                                                        class="continue btn text-white bg-navy-blue ml-3" type="submit">
                                                        Continue
                                                    </button>
                                                </form> --}}
                                            </div>
                                        </div>
                                        <div class="col-md-6 d-block" id="vehicle-articles"></div>
                                    </div>
                                    {{-- <form class="text-right"> --}}

                                </div>
                            </div>
                            <div class="text-right">
                                {{-- <a href="{{ URL::previous() }}" class="back btn btn-outline-danger">
                                    <i class="icofont-simple-left mr-2"></i>Back
                                </a> --}}
                                <button type="submit" class="continue btn text-white bg-navy-blue ml-3">
                                    Publiez mon annonce

                                </button>
                                </form>
                            </div>
                  
                    <!-- vehicle form end -->
                    @endif

                    @if ($category == 'meubles')
                        <!-- motorcycle and sport form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="motorcycleSport">
                            <h4 class="font-weight-bold text-navy-blue">Décrivez votre demande</h4>
                            {{-- <span>Give a name to your listing:</span> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form method="POST" action="{{ route('announcement.store') }}" class="needs-validation article-form" id="motorcycleSport-form" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" />
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <label for="article"> Article Name </label>
                                                        <input type="text" id="article" placeholder="Nom de l'article"
                                                            class="form-control" name="article_name" required/>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <input id="depart" style="position: relative" type="text" placeholder="Adresse de départ" class="form-control" name="depart" required/> 
                                                        <label for="depart"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                   </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <input id="arrivee" style="position: relative" type="text" placeholder="Adresse d'arrivée" class="form-control" name="arrivee" required/>
                                                        <label for="arrivee"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for=""> Date de chargement </label>
                                                        <input type="date" placeholder="Date de chargement " class="form-control" name="loading_date" required/>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for=""> Date de livraison </label>
                                                        <input type="date" placeholder="Date de livraison " class="form-control" name="delevary_date" required/>
                                                    </div>
                                                </div>
                                            </div>  
                                            <br>
                                           
                                           
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="height" type="text" placeholder="hauteur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="height"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="width" type="text" placeholder="largeur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="width"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="length" type="text" placeholder="longueur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="length"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="weight" type="text" placeholder="poids"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text website-color font-weight-bold" id="weight"> KG</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="quantity" type="text" placeholder="quantité"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="quantity"><i
                                                                    class="icofont-numbered website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                             
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <h5>départ</h5>
                                                        {{-- <input type="text" placeholder="type de lieu"
                                                            class="form-control" name="place_type" /> --}}
                                                        <select name="place_type_depart"   required>
                                                            <option value="">type de lieu depart</option>
                                                            <option value="maison">maison</option>
                                                            <option value="appartement">appartement</option>
                                                            <option value="garde-meuble">garde meuble</option>
                                                            <option value="commercial">local commercial </option>
                                                            <option value="bureau">bureau </option>

                                                        </select>
                                                    </div> 
                                                </div> 
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <h5>arrivée</h5>
                                                        {{-- <input type="text" placeholder="type de lieu"
                                                            class="form-control" name="place_type" /> --}}
                                                        <select name="place_type_arrivee"   required>
                                                            <option value="">type de lieu arrivee</option>
                                                            <option value="maison">maison</option>
                                                            <option value="appartement">appartement</option>
                                                            <option value="garde-meuble">garde meuble</option>
                                                            <option value="commercial">local commercial </option>
                                                            <option value="bureau">bureau </option>

                                                        </select>
                                                    </div>

                                                </div>
                                            </div>    
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <h5>départ</h5>
                                                        <select name="floor_depart"   required>
                                                            <option value="">étages depart</option>
                                                            <option value="RDC">RDC</option>
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
                                                    </div>
                                                </div>
                                                <div class="col-4"> 
                                                     <div class="form-group">
                                                        <h5>arrivée</h5>
                                                        <select name="floor_arrivee"   required>
                                                            <option value="">étages arrivee</option>
                                                            <option value="RDC">RDC</option>
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
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <h5>départ</h5>
                                                     <select name="ascenseur_depart" required> 
                                                        <option value="">ascenseur depart</option>
                                                        <option value="non">non</option>
                                                        <option value="oui">oui</option>
                                                    </select>
                                                </div>  
                                                <div class="col-4">
                                                    <h5>arrivée</h5>
                                                     <select name="ascenseur_arrivee" required> 
                                                        <option value="">ascenseur arrivee</option>
                                                        <option value="non">non</option>
                                                        <option value="oui">oui</option>
                                                    </select>
                                                </div>  
                                            </div> 
                                            <div class="row my-3">
                                                <div class="col-4"> 
                                                    <h5>départ</h5>
                                                    <select name="access_depart" required> 
                                                        <option value="">accès depart</option>
                                                        <option value="on peut se garer devant">on peut se garer devant</option>
                                                        <option value="on doit se garer plus loin">on doit se garer plus loin</option>
                                                    </select> 
                                                </div>
                                                <div class="col-4"> 
                                                    <h5>arrivée</h5>
                                                    <select name="access_arrivee" required> 
                                                        <option value="">accès arrivee</option>
                                                        <option value="on peut se garer devant">on peut se garer devant</option>
                                                        <option value="on doit se garer plus loin">on doit se garer plus loin</option>
                                                    </select> 
                                                </div> 
                                            </div>  
                                            <br>
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <select name="help">
                                                            <option value="">j'ai besoin d'aide</option>
                                                            <option value="oui"> oui</option>
                                                            <option value="non"> non</option>
                                                        </select> 
                                                    </div>
                                                </div> 
                                            </div> 
                                             
                                           
                                            {{-- <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="services de déménagement"
                                                            class="form-control" name="services" />
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <h5 class="mt-4 font-weight-bold text-navy-blue">
                                                <i class="icofont-warning-alt mr-2"></i>informations complémentaires
                                              </h5>
                                            <div class="row">
                                                <div class="col-8">
                                                    <textarea name="informations"   class="form-control"
                                                        rows="7" placeholder="informations complémentaires "></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="row mt-4">
                                                <div class="col-8 mb-3">
                                                    <h5>Vous pouvez compléter votre demande avec des photos</h5> 
                                                    {{-- <img src="{{ asset('uploads/callouts/1.jpg') }}" alt=""> --}}
                                                    <input class="d-none" type="file" name="image" id="image" required>
                                                    <label for="image" class="my-3 btn website-bg-color"><i class="icofont-arrow-up bg-light website-color rounded-circle"></i>Télécharger</label>
                                                </div>
                                            </div>

                                            {{-- IF User Is not Login Then Show This  --}}
                                            @guest
                                            {{-- <h3 class="mt-4">données </h3> --}}
                                            @if (session('errors'))
                                            <script>alert("{{ session('errors') }}")</script> 
                                            @endif
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="name"><i
                                                                    class="icofont-user-alt-3  website-color"></i></span>
                                                        </div>
                                                        <input name="name" type="text" placeholder="Nom et premon"
                                                            class="form-control" />
                                                    </div>
                                                    <span class="text-success d-none" id="existing">You have Already An Account Please Login</span>
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="email"><i
                                                                    class="icofont-email  website-color"></i></span>
                                                        </div>
                                                        <input name="email" type="text" id="user_email" placeholder="Email"
                                                            class="form-control" />
                                                        </div>
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="password"><i
                                                                    class="icofont-lock  website-color"></i></span>
                                                        </div>
                                                        <input name="password" type="password"
                                                            placeholder="Mot de passe" class="form-control"  id="pwd"/>
                                                    </div>
                                                    <div id="optional" class="">
                                                        <div class="form-group input-group">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="confirm_password"><i
                                                                        class="icofont-lock  website-color"></i></span>
                                                            </div>
                                                            <input name="confirm_password" type="password"
                                                                placeholder="Confirmer votre mot de passe"
                                                                class="form-control" id="c_pwd"/>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <div class="form-group ">
                                                                    <div class="input-group" id="country_code_wrapper">
                                                                        <div class="input-group-prepend">
                                                                            <label class="input-group-text"
                                                                                for="contry_code">
                                                                                 <i class="icofont-world  website-color"></i></label>
                                                                        </div> 
                                                                        <select class="flex-grow-1 w-auto"
                                                                            name="country_code" id="contry_code">
                                                                            @foreach ( countryCode() as $item)
                                                                            <option value="{{ $item->phonecode }}"> {{ $item->iso }} ({{ $item->phonecode }})</option> 
                                                                            @endforeach 
                                                                        </select>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="form-group input-group">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text" id="phone"><i
                                                                                class="icofont-ui-call  website-color"></i></span>
                                                                    </div>
                                                                    <input name="phone" type="text" placeholder="Phone"
                                                                        class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group input-group">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="pseudo"><i
                                                                        class="icofont-ui-user  website-color"></i></span>
                                                            </div>
                                                            <input name="pseudo" type="text" placeholder="pseudo"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                               
                                                </div>
                                            </div>   
                                            @endguest
                                            <div class="row">
                                                <div class="col">
                                                    <input type="checkbox" id="condition" name="terms"
                                                    value="yes" required>
                                                <label for="condition"> j'accepte les dispositions des
                                                    conditions
                                                    générales et de la politique de confidentialité
                                                </label><br>

                                                </div>
                                            </div>
                                             

                                    </div>
                                </div>
                                <div class="col-md-6 d-block" id="motorcycleSport-articles"></div>
                            </div>
                            <div class="text-right">
                                {{-- <a href="{{ URL::previous() }}" class="back btn btn-outline-danger">
                                    <i class="icofont-simple-left mr-2"></i>Back
                                </a> --}}
                                <button class="continue btn text-white bg-navy-blue ml-3" type="submit">
                                    Publiez mon annonce
                                </button>
                                </form>
                            </div>
                        </div>
                        <!-- motorcycle and sport form end -->
                    @endif

                    @if ($category == 'électroménager')
                        <!-- boats and voluminous sport form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="boat-voluminous">
                            <h4 class="font-weight-bold text-navy-blue">Décrivez votre demande</h4>
                            {{-- <span>Give a name to your listing:</span> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form action="{{ route('announcement.store') }}" method="POST" class="needs-validation article-form" id="boat-voluminous-form" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" />
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <label for="article"> Article Name </label>
                                                        <input type="text" id="article" placeholder="frigo, machine à laver"
                                                            class="form-control" name="article_name" required/>
                                                    </div>
                                                </div> 
                                            </div> 
                                            
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <input id="depart" style="position: relative" type="text" placeholder="Adresse de départ" class="form-control" name="depart" required/> 
                                                        <label for="depart"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <input id="arrivee" style="position: relative" type="text" placeholder="Adresse d'arrivée" class="form-control" name="arrivee" required/>
                                                        <label for="arrivee"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for=""> Date de chargement </label>
                                                        <input type="date" placeholder="Date de chargement " class="form-control" name="loading_date" required/>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for=""> Date de livraison </label>
                                                        <input type="date" placeholder="Date de livraison " class="form-control" name="delevary_date" required/>
                                                    </div>
                                                </div>
                                            </div>  
                                            <br> 
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="height" type="text" placeholder="hauteur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="height"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="width" type="text" placeholder="largeur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="width"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="length" type="text" placeholder="longueur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="length"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="weight" type="text" placeholder="poids"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text website-color font-weight-bold" id="weight"> KG</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="quantity" type="text" placeholder="quantité"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="quantity"><i
                                                                    class="icofont-numbered website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <h5>départ</h5>
                                                        {{-- <input type="text" placeholder="type de lieu"
                                                            class="form-control" name="place_type" /> --}}
                                                        <select name="place_type_depart"   required>
                                                            <option value="">type de lieu depart</option>
                                                            <option value="maison">maison</option>
                                                            <option value="appartement">appartement</option>
                                                            <option value="garde-meuble">garde meuble</option>
                                                            <option value="commercial">local commercial </option>
                                                            <option value="bureau">bureau </option>

                                                        </select>
                                                    </div> 
                                                </div> 
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <h5>arrivée</h5>
                                                        {{-- <input type="text" placeholder="type de lieu"
                                                            class="form-control" name="place_type" /> --}}
                                                        <select name="place_type_arrivee"   required>
                                                            <option value="">type de lieu arrivee</option>
                                                            <option value="maison">maison</option>
                                                            <option value="appartement">appartement</option>
                                                            <option value="garde-meuble">garde meuble</option>
                                                            <option value="commercial">local commercial </option>
                                                            <option value="bureau">bureau </option>

                                                        </select>
                                                    </div>

                                                </div>
                                            </div>    
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <h5>départ</h5>
                                                        <select name="floor_depart"   required>
                                                            <option value="">étages depart</option>
                                                            <option value="RDC">RDC</option>
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
                                                    </div>
                                                </div>
                                                <div class="col-4"> 
                                                     <div class="form-group">
                                                        <h5>arrivée</h5>
                                                        <select name="floor_arrivee"   required>
                                                            <option value="">étages arrivee</option>
                                                            <option value="RDC">RDC</option>
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
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <h5>départ</h5>
                                                     <select name="ascenseur_depart" required> 
                                                        <option value="">ascenseur depart</option>
                                                        <option value="non">non</option>
                                                        <option value="oui">oui</option>
                                                    </select>
                                                </div>  
                                                <div class="col-4">
                                                    <h5>arrivée</h5>
                                                     <select name="ascenseur_arrivee" required> 
                                                        <option value="">ascenseur arrivee</option>
                                                        <option value="non">non</option>
                                                        <option value="oui">oui</option>
                                                    </select>
                                                </div>  
                                            </div> 
                                            <div class="row my-3">
                                                <div class="col-4"> 
                                                    <h5>départ</h5>
                                                    <select name="access_depart" required> 
                                                        <option value="">accès depart</option>
                                                        <option value="on peut se garer devant">on peut se garer devant</option>
                                                        <option value="on doit se garer plus loin">on doit se garer plus loin</option>
                                                    </select> 
                                                </div>
                                                <div class="col-4"> 
                                                    <h5>arrivée</h5>
                                                    <select name="access_arrivee" required> 
                                                        <option value="">accès arrivee</option>
                                                        <option value="on peut se garer devant">on peut se garer devant</option>
                                                        <option value="on doit se garer plus loin">on doit se garer plus loin</option>
                                                    </select> 
                                                </div> 
                                            </div>  
                                            <br>
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <div class="form-group"> 
                                                        <select name="help">
                                                            <option value="">j'ai besoin d'aide</option>
                                                            <option value="oui"> oui</option>
                                                            <option value="non"> non</option>
                                                        </select> 
                                                    </div>
                                                </div> 
                                            </div> 
                                             
                                            {{-- <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="services de déménagement"
                                                            class="form-control" name="services" />
                                                    </div>
                                                </div>
                                            </div>  --}}
                                            <h5 class="mt-4 font-weight-bold text-navy-blue">
                                                <i class="icofont-warning-alt mr-2"></i>informations complémentaires
                                              </h5>
                                            <div class="row">
                                                <div class="col-8">
                                                    <textarea name="informations"   class="form-control"
                                                        rows="7" placeholder="informations complémentaires "></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="row mt-4">
                                                <div class="col-8 mb-3">
                                                    <h5>Vous pouvez compléter votre demande avec des photos</h5> 
                                                    {{-- <img src="{{ asset('uploads/callouts/1.jpg') }}" alt=""> --}}
                                                    <input class="d-none" type="file" name="image" id="image" required>
                                                    <label for="image" class="my-3 btn website-bg-color"><i class="icofont-arrow-up bg-light website-color rounded-circle"></i>Télécharger</label>
                                                </div>
                                            </div>

                                            {{-- IF User Is not Login Then Show This  --}}
                                            @guest
                                            {{-- <h3 class="mt-4">données </h3> --}}
                                            @if (session('errors'))
                                            <script>alert("{{ session('errors') }}")</script> 
                                            @endif
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="name"><i
                                                                    class="icofont-user-alt-3  website-color"></i></span>
                                                        </div>
                                                        <input name="name" type="text" placeholder="Nom et premon"
                                                            class="form-control" />
                                                    </div>
                                                    <span class="text-success d-none" id="existing">You have Already An Account Please Login</span>
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="email"><i
                                                                    class="icofont-email  website-color"></i></span>
                                                        </div>
                                                        <input name="email" type="text" id="user_email" placeholder="Email"
                                                            class="form-control" />
                                                        </div>
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="password"><i
                                                                    class="icofont-lock  website-color"></i></span>
                                                        </div>
                                                        <input name="password" type="password"
                                                            placeholder="Mot de passe" class="form-control"  id="pwd"/>
                                                    </div>
                                                    <div id="optional" class="">
                                                        <div class="form-group input-group">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="confirm_password"><i
                                                                        class="icofont-lock  website-color"></i></span>
                                                            </div>
                                                            <input name="confirm_password" type="password"
                                                                placeholder="Confirmer votre mot de passe"
                                                                class="form-control" id="c_pwd"/>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <div class="form-group ">
                                                                    <div class="input-group" id="country_code_wrapper">
                                                                        <div class="input-group-prepend">
                                                                            <label class="input-group-text"
                                                                                for="contry_code">
                                                                                    <i class="icofont-world  website-color"></i></label>
                                                                        </div> 
                                                                        <select class="flex-grow-1 w-auto"
                                                                            name="country_code" id="contry_code">
                                                                            @foreach ( countryCode() as $item)
                                                                            <option value="{{ $item->phonecode }}"> {{ $item->iso }} ({{ $item->phonecode }})</option> 
                                                                            @endforeach 
                                                                        </select>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="form-group input-group">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text" id="phone"><i
                                                                                class="icofont-ui-call  website-color"></i></span>
                                                                    </div>
                                                                    <input name="phone" type="text" placeholder="Phone"
                                                                        class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group input-group">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="pseudo"><i
                                                                        class="icofont-ui-user website-color"></i></span>
                                                            </div>
                                                            <input name="pseudo" type="text" placeholder="pseudo"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            </div>  
                                            @endguest
                                            <div class="row">
                                                <div class="col">
                                                    <input type="checkbox" id="condition" name="terms"
                                                    value="yes" required>
                                                <label for="condition"> j'accepte les dispositions des
                                                    conditions
                                                    générales et de la politique de confidentialité
                                                </label><br>

                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-block" id="boat-voluminous-articles"></div>
                            </div>
                            <div class="text-right">
                                {{-- <a href="{{ URL::previous() }}" class="back btn btn-outline-danger">
                                    <i class="icofont-simple-left mr-2"></i>Back
                                </a> --}}
                                <button type="submit" class="continue btn text-white bg-navy-blue ml-3">
                                    Publiez mon annonce 
                                </button>
                                </form>
                            </div>
                        </div>
                        <!-- boats and voluminous sport form end -->
                    @endif

                    @if ($category == 'colis')
                        <!--  Fragile goods form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="fragileGoods">
                            <h4 class="font-weight-bold text-navy-blue">Décrivez votre demande</h4>
                            {{-- <span>Give a name to your listing:</span> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form action="{{ route('announcement.store') }}" method="POST" class="needs-validation article-form" id="fragileGoods-form" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" />
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <label for="article"> Article Name </label>
                                                        <input type="text" id="article" placeholder="Nom de l'article"
                                                            class="form-control" name="article_name" required/>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <input id="depart" style="position: relative" type="text" placeholder="Adresse de départ" class="form-control" name="depart" required/> 
                                                        <label for="depart"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                   </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <input id="arrivee" style="position: relative" type="text" placeholder="Adresse d'arrivée" class="form-control" name="arrivee" required/>
                                                        <label for="arrivee"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for=""> Date de chargement </label>
                                                        <input type="date" placeholder="Date de chargement " class="form-control" name="loading_date" required/>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for=""> Date de livraison </label>
                                                        <input type="date" placeholder="Date de livraison " class="form-control" name="delevary_date" required/>
                                                    </div>
                                                </div>
                                            </div>  
                                            <br>
                                             
                                           
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="height" type="text" placeholder="hauteur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="height"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="width" type="text" placeholder="largeur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="width"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="length" type="text" placeholder="longueur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="length"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="weight" type="text" placeholder="poids"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text website-color font-weight-bold" id="weight"> KG</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="quantity" type="text" placeholder="quantité"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="quantity"><i
                                                                    class="icofont-numbered website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <h5>départ</h5>
                                                        {{-- <input type="text" placeholder="type de lieu"
                                                            class="form-control" name="place_type" /> --}}
                                                        <select name="place_type_depart"   required>
                                                            <option value="">type de lieu depart</option>
                                                            <option value="maison">maison</option>
                                                            <option value="appartement">appartement</option>
                                                            <option value="garde-meuble">garde meuble</option>
                                                            <option value="commercial">local commercial </option>
                                                            <option value="bureau">bureau </option>

                                                        </select>
                                                    </div> 
                                                </div> 
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <h5>arrivée</h5>
                                                        {{-- <input type="text" placeholder="type de lieu"
                                                            class="form-control" name="place_type" /> --}}
                                                        <select name="place_type_arrivee"   required>
                                                            <option value="">type de lieu arrivee</option>
                                                            <option value="maison">maison</option>
                                                            <option value="appartement">appartement</option>
                                                            <option value="garde-meuble">garde meuble</option>
                                                            <option value="commercial">local commercial </option>
                                                            <option value="bureau">bureau </option>

                                                        </select>
                                                    </div>

                                                </div>
                                            </div>    
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <h5>départ</h5>
                                                        <select name="floor_depart"   required>
                                                            <option value="">étages depart</option>
                                                            <option value="RDC">RDC</option>
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
                                                    </div>
                                                </div>
                                                <div class="col-4"> 
                                                     <div class="form-group">
                                                        <h5>arrivée</h5>
                                                        <select name="floor_arrivee"   required>
                                                            <option value="">étages arrivee</option>
                                                            <option value="RDC">RDC</option>
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
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <h5>départ</h5>
                                                     <select name="ascenseur_depart" required> 
                                                        <option value="">ascenseur depart</option>
                                                        <option value="non">non</option>
                                                        <option value="oui">oui</option>
                                                    </select>
                                                </div>  
                                                <div class="col-4">
                                                    <h5>arrivée</h5>
                                                     <select name="ascenseur_arrivee" required> 
                                                        <option value="">ascenseur arrivee</option>
                                                        <option value="non">non</option>
                                                        <option value="oui">oui</option>
                                                    </select>
                                                </div>  
                                            </div> 
                                            <div class="row my-3">
                                                <div class="col-4"> 
                                                    <h5>départ</h5>
                                                    <select name="access_depart" required> 
                                                        <option value="">accès depart</option>
                                                        <option value="on peut se garer devant">on peut se garer devant</option>
                                                        <option value="on doit se garer plus loin">on doit se garer plus loin</option>
                                                    </select> 
                                                </div>
                                                <div class="col-4"> 
                                                    <h5>arrivée</h5>
                                                    <select name="access_arrivee" required> 
                                                        <option value="">accès arrivee</option>
                                                        <option value="on peut se garer devant">on peut se garer devant</option>
                                                        <option value="on doit se garer plus loin">on doit se garer plus loin</option>
                                                    </select> 
                                                </div> 
                                            </div>      
                                            <br>
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <select name="help">
                                                            <option value="">j'ai besoin d'aide</option>
                                                            <option value="oui"> oui</option>
                                                            <option value="non"> non</option>
                                                        </select> 
                                                    </div>
                                                </div> 
                                            </div> 
                                             
                                            <h5 class="mt-4 font-weight-bold text-navy-blue">
                                                <i class="icofont-warning-alt mr-2"></i>informations complémentaires
                                              </h5>
                                            <div class="row">
                                                <div class="col-8">
                                                    <textarea name="informations"   class="form-control"
                                                        rows="7" placeholder="informations complémentaires "></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="row mt-4">
                                                <div class="col-8 mb-3">
                                                    <h5>Vous pouvez compléter votre demande avec des photos</h5> 
                                                    {{-- <img src="{{ asset('uploads/callouts/1.jpg') }}" alt=""> --}}
                                                    <input class="d-none" type="file" name="image" id="image" required>
                                                    <label for="image" class="my-3 btn website-bg-color"><i class="icofont-arrow-up bg-light website-color rounded-circle"></i>Télécharger</label>
                                                </div>
                                            </div>

                                            {{-- IF User Is not Login Then Show This  --}}
                                            @guest
                                            {{-- <h3 class="mt-4">données </h3> --}}
                                            @if (session('errors'))
                                            <script>alert("{{ session('errors') }}")</script> 
                                            @endif
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="name"><i
                                                                    class="icofont-user-alt-3  website-color"></i></span>
                                                        </div>
                                                        <input name="name" type="text" placeholder="Nom et premon"
                                                            class="form-control" />
                                                    </div>
                                                    <span class="text-success d-none" id="existing">You have Already An Account Please Login</span>
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="email"><i
                                                                    class="icofont-email  website-color"></i></span>
                                                        </div>
                                                        <input name="email" type="text" id="user_email" placeholder="Email"
                                                            class="form-control" />
                                                        </div>
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="password"><i
                                                                    class="icofont-lock  website-color"></i></span>
                                                        </div>
                                                        <input name="password" type="password"
                                                            placeholder="Mot de passe" class="form-control"  id="pwd"/>
                                                    </div>
                                                    <div id="optional" class="">
                                                        <div class="form-group input-group">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="confirm_password"><i
                                                                        class="icofont-lock  website-color"></i></span>
                                                            </div>
                                                            <input name="confirm_password" type="password"
                                                                placeholder="Confirmer votre mot de passe"
                                                                class="form-control" id="c_pwd"/>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <div class="form-group ">
                                                                    <div class="input-group" id="country_code_wrapper">
                                                                        <div class="input-group-prepend">
                                                                            <label class="input-group-text"
                                                                                for="contry_code">
                                                                                 <i class="icofont-world  website-color"></i></label>
                                                                        </div> 
                                                                        <select class="flex-grow-1 w-auto"
                                                                            name="country_code" id="contry_code">
                                                                            @foreach ( countryCode() as $item)
                                                                            <option value="{{ $item->phonecode }}"> {{ $item->iso }} ({{ $item->phonecode }})</option> 
                                                                            @endforeach 
                                                                        </select>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="form-group input-group">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text" id="phone"><i
                                                                                class="icofont-ui-call  website-color"></i></span>
                                                                    </div>
                                                                    <input name="phone" type="text" placeholder="Phone"
                                                                        class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group input-group">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="pseudo"><i
                                                                        class="icofont-ui-user  website-color"></i></span>
                                                            </div>
                                                            <input name="pseudo" type="text" placeholder="pseudo"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                               
                                                </div>
                                            </div>   
                                            @endguest
                                            <div class="row">
                                                <div class="col">
                                                    <input type="checkbox" id="condition" name="terms"
                                                    value="yes" required>
                                                <label for="condition"> j'accepte les dispositions des
                                                    conditions
                                                    générales et de la politique de confidentialité
                                                </label><br>

                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-block" id="fragileGoods-articles"></div>
                            </div>
                            <div class="text-right">
                                {{-- <a href="{{ URL::previous() }}" class="back btn btn-outline-danger">
                                    <i class="icofont-simple-left mr-2"></i>Back
                                </a> --}}
                                <button class="continue btn text-white bg-navy-blue ml-3" type="submit">
                                    Publiez mon annonce 
                                </button>

                                </form>
                            </div>
                        </div>
                        <!-- Fragile goods form end -->
                    @endif

                    @if ($category == 'palette')
                        <!--  Package/Flod form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="package">
                            <h4 class="font-weight-bold text-navy-blue">Décrivez votre demande</h4>
                            {{-- <span>Give a name to your listing:</span> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form method="POST" action="{{ route('announcement.store') }}" class="needs-validation article-form" id="package-form" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" />
                                           
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <input id="depart" style="position: relative" type="text" placeholder="Adresse de départ" class="form-control" name="depart" required/> 
                                                        <label for="depart"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <input id="arrivee" style="position: relative" type="text" placeholder="Adresse d'arrivée" class="form-control" name="arrivee" required/>
                                                        <label for="arrivee"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for=""> Date de chargement </label>
                                                        <input type="date" placeholder="Date de chargement " class="form-control" name="loading_date" required/>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for=""> Date de livraison </label>
                                                        <input type="date" placeholder="Date de livraison " class="form-control" name="delevary_date" required/>
                                                    </div>
                                                </div>
                                            </div>  
                                            <br>
                                             
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        {{-- <input type="text" placeholder="type de lieu"
                                                            class="form-control" name="place_type" /> --}}
                                                        <select name="size"   required>
                                                            <option value="">Taille</option>
                                                            <option value="EUR1 120*80">EUR1 120*80 </option>
                                                            <option value="EUR6 60*80">EUR6 60*80 </option>
                                                            <option value="EUR2 120*100">EUR2 120*100</option>
                                                            <option value="EUR3 100*120">EUR3 100*120 </option>
                                                            <option value="Palette conteneur 113*113">Palette conteneur 113*113 </option>
                                                            <option value="Palette personalisée">Palette personalisée</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                 
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="height" type="text" placeholder="hauteur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="height"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="width" type="text" placeholder="largeur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="width"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="length" type="text" placeholder="longueur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="length"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="weight" type="text" placeholder="poids"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text website-color font-weight-bold" id="weight"> KG</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="quantity" type="text" placeholder="quantité"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="quantity"><i
                                                                    class="icofont-numbered website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="row my-3">
                                                <div class="col-4"> 
                                                    <h5>départ</h5>
                                                    <select name="access_depart" required> 
                                                        <option value="">accès depart</option>
                                                        <option value="on peut se garer devant">on peut se garer devant</option>
                                                        <option value="on doit se garer plus loin">on doit se garer plus loin</option>
                                                    </select> 
                                                </div>
                                                <div class="col-4"> 
                                                    <h5>arrivée</h5>
                                                    <select name="access_arrivee" required> 
                                                        <option value="">accès arrivee</option>
                                                        <option value="on peut se garer devant">on peut se garer devant</option>
                                                        <option value="on doit se garer plus loin">on doit se garer plus loin</option>
                                                    </select> 
                                                </div> 
                                            </div>
                                            <br>
                                            <div class="row my-3">
                                                <div class="col-8">
                                                    <div class="form-group"> 
                                                        <select name="load_unload">
                                                            <option value=""> chargement et déchargement par vos soins </option>
                                                            <option value="oui">oui</option>
                                                            <option value="non">non</option>
                                                        </select>  
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="row my-3">
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select name="need_tailgate">
                                                            <option value="">besoin d'un hayon</option>
                                                            <option value="oui">oui</option>
                                                            <option value="non">non</option> 
                                                        </select> 
                                                    </div> 
                                                </div> 
                                            </div>
                                            <div class="row my-3">
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select name="need_truck">
                                                            <option value="">besoin d'un transpalette </option>
                                                            <option value="oui">oui</option>
                                                            <option value="non">non</option>
                                                        </select> 
                                                    </div>
                                                </div> 
                                            </div> 
                                            <h5 class="mt-4 font-weight-bold text-navy-blue">
                                                <i class="icofont-warning-alt mr-2"></i>informations complémentaires
                                              </h5>
                                            <div class="row">
                                                <div class="col-8">
                                                    <textarea name="informations"   class="form-control"
                                                        rows="7" placeholder="informations complémentaires "></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="row mt-4">
                                                <div class="col-8 mb-3">
                                                    <h5>Vous pouvez compléter votre demande avec des photos</h5> 
                                                    {{-- <img src="{{ asset('uploads/callouts/1.jpg') }}" alt=""> --}}
                                                    <input class="d-none" type="file" name="image" id="image" required>
                                                    <label for="image" class="my-3 btn website-bg-color"><i class="icofont-arrow-up bg-light website-color rounded-circle"></i>Télécharger</label>
                                                </div>
                                            </div>

                                            {{-- IF User Is not Login Then Show This  --}}
                                            @guest
                                            {{-- <h3 class="mt-4">données </h3> --}}
                                            @if (session('errors'))
                                            <script>alert("{{ session('errors') }}")</script> 
                                            @endif
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="name"><i
                                                                    class="icofont-user-alt-3  website-color"></i></span>
                                                        </div>
                                                        <input name="name" type="text" placeholder="Nom et premon"
                                                            class="form-control" />
                                                    </div>
                                                    <span class="text-success d-none" id="existing">You have Already An Account Please Login</span>
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="email"><i
                                                                    class="icofont-email  website-color"></i></span>
                                                        </div>
                                                        <input name="email" type="text" id="user_email" placeholder="Email"
                                                            class="form-control" />
                                                        </div>
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="password"><i
                                                                    class="icofont-lock  website-color"></i></span>
                                                        </div>
                                                        <input name="password" type="password"
                                                            placeholder="Mot de passe" class="form-control"  id="pwd"/>
                                                    </div>
                                                    <div id="optional" class="">
                                                        <div class="form-group input-group">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="confirm_password"><i
                                                                        class="icofont-lock  website-color"></i></span>
                                                            </div>
                                                            <input name="confirm_password" type="password"
                                                                placeholder="Confirmer votre mot de passe"
                                                                class="form-control" id="c_pwd"/>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <div class="form-group ">
                                                                    <div class="input-group" id="country_code_wrapper">
                                                                        <div class="input-group-prepend">
                                                                            <label class="input-group-text"
                                                                                for="contry_code">
                                                                                 <i class="icofont-world  website-color"></i></label>
                                                                        </div> 
                                                                        <select class="flex-grow-1 w-auto"
                                                                            name="country_code" id="contry_code">
                                                                            @foreach ( countryCode() as $item)
                                                                            <option value="{{ $item->phonecode }}"> {{ $item->iso }} ({{ $item->phonecode }})</option> 
                                                                            @endforeach 
                                                                        </select>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="form-group input-group">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text" id="phone"><i
                                                                                class="icofont-ui-call  website-color"></i></span>
                                                                    </div>
                                                                    <input name="phone" type="text" placeholder="Phone"
                                                                        class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group input-group">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="pseudo"><i
                                                                        class="icofont-ui-user  website-color"></i></span>
                                                            </div>
                                                            <input name="pseudo" type="text" placeholder="pseudo"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                               
                                                </div>
                                            </div>   
                                            @endguest
                                            <div class="row">
                                                <div class="col">
                                                    <input type="checkbox" id="condition" name="terms"
                                                    value="yes" required>
                                                <label for="condition"> j'accepte les dispositions des
                                                    conditions
                                                    générales et de la politique de confidentialité
                                                </label><br>

                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-block" id="package-articles"></div>
                            </div>
                            <div class="text-right">
                                {{-- <button data-section="0" class="back btn btn-outline-danger">
                                    <i class="icofont-simple-left mr-2"></i>Back
                                </button> --}}
                                <button type="submit" class="continue btn text-white bg-navy-blue ml-3">
                                    Publiez mon annonce 
                                </button>
                                </form>
                            </div>
                        </div>
                        <!-- Package/Flod form end -->
                    @endif

                    @if ($category == 'motos')
                        <!--  Pallet form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="pallet">

                            <h4 class="font-weight-bold text-navy-blue">Décrivez votre demande</h4>
                            {{-- <span>Give a name to your listing:</span> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form method="POST" action="{{ route('announcement.store') }}" class="needs-validation article-form" id="pallet-form" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}"/>
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="form-group"> 
                                                        <input type="text" id="article" placeholder="Marque et modèle " class="form-control" name="brand_model" required/>
                                                    </div>
                                                </div>  
                                            </div> 
                                            
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <input id="depart" style="position: relative" type="text" placeholder="Adresse de départ" class="form-control" name="depart" required/> 
                                                        <label for="depart"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <input id="arrivee" style="position: relative" type="text" placeholder="Adresse d'arrivée" class="form-control" name="arrivee" required/>
                                                        <label for="arrivee"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for=""> Date de chargement </label>
                                                        <input type="date" placeholder="Date de chargement " class="form-control" name="loading_date" required/>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for=""> Date de livraison </label>
                                                        <input type="date" placeholder="Date de livraison " class="form-control" name="delevary_date" required/>
                                                    </div>
                                                </div>
                                            </div>  
                                            <br>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="d-flex justify-content-between">
                                                        <label for="movingVehicle2">roulante </label>
                                                        <div class="custom-control custom-switch">
                                                            <input type="radio" class="custom-control-input" id="movingVehicle2"
                                                                name="rolling" value="yes" required/>
                                                            <label class="custom-control-label" for="movingVehicle2"></label>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <label for="acceptConveyorsMotorcycle">non roulante</label>
                                                        <div class="custom-control custom-switch">
                                                            <input type="radio" class="custom-control-input"
                                                                id="acceptConveyorsMotorcycle" name="rolling" value="no" required/>
                                                            <label class="custom-control-label"
                                                                for="acceptConveyorsMotorcycle"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                             
                                            <div class="row my-3">
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select name="load_unload">
                                                            <option value=""> chargement et déchargement par vos soins </option>
                                                            <option value="oui">oui</option>
                                                            <option value="non">non</option>
                                                        </select>  
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="row my-3">
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <select name="need_tailgate">
                                                            <option value="">besoin d'un hayon</option>
                                                            <option value="oui">oui</option>
                                                            <option value="non">non</option> 
                                                        </select> 
                                                    </div> 
                                                </div> 
                                            </div>
                                            <h5 class="mt-4 font-weight-bold text-navy-blue">
                                                <i class="icofont-warning-alt mr-2"></i>informations complémentaires
                                              </h5>
                                            <div class="row">
                                                <div class="col-8">
                                                    <textarea name="informations"   class="form-control"
                                                        rows="7" placeholder="informations complémentaires "></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="row mt-4">
                                                <div class="col-8 mb-3">
                                                    <h5>Vous pouvez compléter votre demande avec des photos</h5> 
                                                    {{-- <img src="{{ asset('uploads/callouts/1.jpg') }}" alt=""> --}}
                                                    <input class="d-none" type="file" name="image" id="image" required>
                                                    <label for="image" class="my-3 btn website-bg-color"><i class="icofont-arrow-up bg-light website-color rounded-circle"></i>Télécharger</label>
                                                </div>
                                            </div>

                                            {{-- IF User Is not Login Then Show This  --}}
                                            @guest
                                            {{-- <h3 class="mt-4">données </h3> --}}
                                            @if (session('errors'))
                                            <script>alert("{{ session('errors') }}")</script> 
                                            @endif
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="name"><i
                                                                    class="icofont-user-alt-3  website-color"></i></span>
                                                        </div>
                                                        <input name="name" type="text" placeholder="Nom et premon"
                                                            class="form-control" />
                                                    </div>
                                                    <span class="text-success d-none" id="existing">You have Already An Account Please Login</span>
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="email"><i
                                                                    class="icofont-email  website-color"></i></span>
                                                        </div>
                                                        <input name="email" type="text" id="user_email" placeholder="Email"
                                                            class="form-control" />
                                                        </div>
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="password"><i
                                                                    class="icofont-lock  website-color"></i></span>
                                                        </div>
                                                        <input name="password" type="password"
                                                            placeholder="Mot de passe" class="form-control"  id="pwd"/>
                                                    </div>
                                                    <div id="optional" class="">
                                                        <div class="form-group input-group">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="confirm_password"><i
                                                                        class="icofont-lock  website-color"></i></span>
                                                            </div>
                                                            <input name="confirm_password" type="password"
                                                                placeholder="Confirmer votre mot de passe"
                                                                class="form-control" id="c_pwd"/>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <div class="form-group ">
                                                                    <div class="input-group" id="country_code_wrapper">
                                                                        <div class="input-group-prepend">
                                                                            <label class="input-group-text"
                                                                                for="contry_code">
                                                                                    <i class="icofont-world  website-color"></i></label>
                                                                        </div> 
                                                                        <select class="flex-grow-1 w-auto"
                                                                            name="country_code" id="contry_code">
                                                                            @foreach ( countryCode() as $item)
                                                                            <option value="{{ $item->phonecode }}"> {{ $item->iso }} ({{ $item->phonecode }})</option> 
                                                                            @endforeach 
                                                                        </select>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="form-group input-group">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text" id="phone"><i
                                                                                class="icofont-ui-call  website-color"></i></span>
                                                                    </div>
                                                                    <input name="phone" type="text" placeholder="Phone"
                                                                        class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group input-group">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="pseudo"><i
                                                                        class="icofont-ui-user website-color"></i></span>
                                                            </div>
                                                            <input name="pseudo" type="text" placeholder="pseudo"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                            </div>  
                                            @endguest
                                            <div class="row">
                                                <div class="col">
                                                    <input type="checkbox" id="condition" name="terms"
                                                    value="yes" required>
                                                <label for="condition"> j'accepte les dispositions des
                                                    conditions
                                                    générales et de la politique de confidentialité
                                                </label><br>

                                                </div>
                                            </div>  
                                    </div>
                                </div>
                                <div class="col-md-6 d-block" id="pallet-articles"></div>
                            </div>
                            <div class="text-right">
                                {{-- <a href="{{ URL::previous() }}" class="back btn btn-outline-danger">
                                    <i class="icofont-simple-left mr-2"></i>Back
                                </a> --}}
                                <button class="continue btn text-white bg-navy-blue ml-3" type="submit">
                                    Publiez mon annonce 
                                </button>
                                </form>
                            </div>
                        </div>
                        <!-- Pallet form end -->
                    @endif

                    @if ($category == 'voitures')
                        <!--  Animal form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="animal">
                            <h4 class="font-weight-bold text-navy-blue">Décrivez votre demande</h4>
                            {{-- <span>Give a name to your listing:</span> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form method="POST" action="{{ route('announcement.store') }}" class="needs-validation article-form" id="animal-form" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" />
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="form-group"> 
                                                        <input type="text" id="article" placeholder="Marque et modèle " class="form-control" name="brand_model" required/>
                                                    </div>
                                                </div> 
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <input id="depart" style="position: relative" type="text" placeholder="Adresse de départ" class="form-control" name="depart" required/> 
                                                        <label for="depart"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                   </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <input id="arrivee" style="position: relative" type="text" placeholder="Adresse d'arrivée" class="form-control" name="arrivee" required/>
                                                        <label for="arrivee"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for=""> Date de chargement </label>
                                                        <input type="date" placeholder="Date de chargement " class="form-control" name="loading_date" required/>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for=""> Date de livraison </label>
                                                        <input type="date" placeholder="Date de livraison " class="form-control" name="delevary_date" required/>
                                                    </div>
                                                </div>
                                            </div>  
                                            <br>
                                             
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <div class="d-flex justify-content-between">
                                                        <label for="movingVehicle2">roulante </label>
                                                        <div class="custom-control custom-switch">
                                                            <input type="radio" class="custom-control-input" id="movingVehicle2"
                                                                name="rolling" value="yes" required/>
                                                            <label class="custom-control-label" for="movingVehicle2"></label>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <label for="acceptConveyorsMotorcycle">non roulante</label>
                                                        <div class="custom-control custom-switch">
                                                            <input type="radio" class="custom-control-input"
                                                                id="acceptConveyorsMotorcycle" name="rolling" value="no" required/>
                                                            <label class="custom-control-label"
                                                                for="acceptConveyorsMotorcycle"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div> 
                                            <h5 class="mt-4 font-weight-bold text-navy-blue">
                                                <i class="icofont-warning-alt mr-2"></i>informations complémentaires
                                            <div class="row">
                                                <div class="col-8">
                                                    <textarea name="informations"   class="form-control"
                                                        rows="7" placeholder="informations complémentaires "></textarea>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-8 mb-3">
                                                    <h5>Vous pouvez compléter votre demande avec des photos</h5> 
                                                    {{-- <img src="{{ asset('uploads/callouts/1.jpg') }}" alt=""> --}}
                                                    <input class="d-none" type="file" name="image" id="image" required>
                                                    <label for="image" class="my-3 btn website-bg-color"><i class="icofont-arrow-up bg-light website-color rounded-circle"></i>Télécharger</label>
                                                </div>
                                            </div>
                                            

                                            {{-- IF User Is not Login Then Show This  --}}
                                            @guest
                                            {{-- <h3 class="mt-4">données </h3> --}}
                                            @if (session('errors'))
                                            <script>alert("{{ session('errors') }}")</script> 
                                            @endif
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="name"><i
                                                                    class="icofont-user-alt-3  website-color"></i></span>
                                                        </div>
                                                        <input name="name" type="text" placeholder="Nom et premon"
                                                            class="form-control" />
                                                    </div>
                                                    <span class="text-success d-none" id="existing">You have Already An Account Please Login</span>
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="email"><i
                                                                    class="icofont-email  website-color"></i></span>
                                                        </div>
                                                        <input name="email" type="text" id="user_email" placeholder="Email"
                                                            class="form-control" />
                                                        </div>
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="password"><i
                                                                    class="icofont-lock  website-color"></i></span>
                                                        </div>
                                                        <input name="password" type="password"
                                                            placeholder="Mot de passe" class="form-control"  id="pwd"/>
                                                    </div>
                                                    <div id="optional" class="">
                                                        <div class="form-group input-group">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="confirm_password"><i
                                                                        class="icofont-lock  website-color"></i></span>
                                                            </div>
                                                            <input name="confirm_password" type="password"
                                                                placeholder="Confirmer votre mot de passe"
                                                                class="form-control" id="c_pwd"/>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <div class="form-group ">
                                                                    <div class="input-group" id="country_code_wrapper">
                                                                        <div class="input-group-prepend">
                                                                            <label class="input-group-text"
                                                                                for="contry_code">
                                                                                 <i class="icofont-world  website-color"></i></label>
                                                                        </div> 
                                                                        <select class="flex-grow-1 w-auto"
                                                                            name="country_code" id="contry_code">
                                                                            @foreach ( countryCode() as $item)
                                                                            <option value="{{ $item->phonecode }}"> {{ $item->iso }} ({{ $item->phonecode }})</option> 
                                                                            @endforeach 
                                                                        </select>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="form-group input-group">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text" id="phone"><i
                                                                                class="icofont-ui-call  website-color"></i></span>
                                                                    </div>
                                                                    <input name="phone" type="text" placeholder="Phone"
                                                                        class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group input-group">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="pseudo"><i
                                                                        class="icofont-ui-user website-color"></i></span>
                                                            </div>
                                                            <input name="pseudo" type="text" placeholder="pseudo"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                               
                                                </div>
                                            </div>   
                                            @endguest
                                            <div class="row">
                                                <div class="col">
                                                    <input type="checkbox" id="condition" name="terms"
                                                    value="yes" required>
                                                <label for="condition"> j'accepte les dispositions des
                                                    conditions
                                                    générales et de la politique de confidentialité
                                                </label><br>

                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-block" id="animal-articles"></div>
                            </div>
                            <div class="text-right">
                                {{-- <button data-section="0" class="back btn btn-outline-danger">
                                    <i class="icofont-simple-left mr-2"></i>Back
                                </button> --}}
                                <button class="continue btn text-white bg-navy-blue ml-3" type="submit">
                                    Publiez mon annonce 
                                </button>
                                </form>
                            </div>
                        </div>
                        <!-- Animal form end -->
                    @endif

                    @if ($category == 'divers')
                        <!--  Agri-food form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="agri-food">
                            <h4 class="font-weight-bold text-navy-blue">Décrivez votre demande</h4>
                            {{-- <span>Give a name to your listing:</span> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form method="POST" action="{{ route('announcement.store') }}" class="needs-validation article-form" id="agri-food-form" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" />
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <label for="article"> Article Name </label>
                                                        <input type="text" id="article" placeholder="Nom de l'article"
                                                            class="form-control" name="article_name" required/>
                                                    </div>
                                                </div> 
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <input id="depart" style="position: relative" type="text" placeholder="Adresse de départ" class="form-control" name="depart" required/> 
                                                        <label for="depart"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <input id="arrivee" style="position: relative" type="text" placeholder="Adresse d'arrivée" class="form-control" name="arrivee" required/>
                                                        <label for="arrivee"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for=""> Date de chargement </label>
                                                        <input type="date" placeholder="Date de chargement " class="form-control" name="loading_date" required/>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for=""> Date de livraison </label>
                                                        <input type="date" placeholder="Date de livraison " class="form-control" name="delevary_date" required/>
                                                    </div>
                                                </div>
                                            </div>  
                                            <br>
                                             
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="height" type="text" placeholder="hauteur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="height"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="width" type="text" placeholder="largeur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="width"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="length" type="text" placeholder="longueur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="length"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="weight" type="text" placeholder="poids"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text website-color font-weight-bold" id="weight"> KG</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="quantity" type="text" placeholder="quantité"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="quantity"><i
                                                                    class="icofont-numbered website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>  
                                            <h5 class="mt-4 font-weight-bold text-navy-blue">
                                                <i class="icofont-warning-alt mr-2"></i>informations complémentaires
                                              </h5>
                                            <div class="row">
                                                <div class="col-8">
                                                    <textarea name="informations"   class="form-control"
                                                        rows="7" placeholder="informations complémentaires "></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="row mt-4">
                                                <div class="col-8 mb-3">
                                                    <h5>Vous pouvez compléter votre demande avec des photos</h5> 
                                                    {{-- <img src="{{ asset('uploads/callouts/1.jpg') }}" alt=""> --}}
                                                    <input class="d-none" type="file" name="image" id="image" required>
                                                    <label for="image" class="my-3 btn website-bg-color"><i class="icofont-arrow-up bg-light website-color rounded-circle"></i>Télécharger</label>
                                                </div>
                                            </div>

                                            {{-- IF User Is not Login Then Show This  --}}
                                            @guest
                                            {{-- <h3 class="mt-4">données </h3> --}}
                                            @if (session('errors'))
                                            <script>alert("{{ session('errors') }}")</script> 
                                            @endif
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="name"><i
                                                                    class="icofont-user-alt-3  website-color"></i></span>
                                                        </div>
                                                        <input name="name" type="text" placeholder="Nom et premon"
                                                            class="form-control" />
                                                    </div>
                                                    <span class="text-success d-none" id="existing">You have Already An Account Please Login</span>
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="email"><i
                                                                    class="icofont-email  website-color"></i></span>
                                                        </div>
                                                        <input name="email" type="text" id="user_email" placeholder="Email"
                                                            class="form-control" />
                                                        </div>
                                                    <div class="form-group input-group">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="password"><i
                                                                    class="icofont-lock  website-color"></i></span>
                                                        </div>
                                                        <input name="password" type="password"
                                                            placeholder="Mot de passe" class="form-control"  id="pwd"/>
                                                    </div>
                                                    <div id="optional" class="">
                                                        <div class="form-group input-group">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="confirm_password"><i
                                                                        class="icofont-lock  website-color"></i></span>
                                                            </div>
                                                            <input name="confirm_password" type="password"
                                                                placeholder="Confirmer votre mot de passe"
                                                                class="form-control" id="c_pwd"/>
                                                        </div> 
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <div class="form-group ">
                                                                    <div class="input-group" id="country_code_wrapper">
                                                                        <div class="input-group-prepend">
                                                                            <label class="input-group-text"
                                                                                for="contry_code">
                                                                                 <i class="icofont-world  website-color"></i></label>
                                                                        </div> 
                                                                        <select class="flex-grow-1 w-auto"
                                                                            name="country_code" id="contry_code">
                                                                            @foreach ( countryCode() as $item)
                                                                            <option value="{{ $item->phonecode }}"> {{ $item->iso }} ({{ $item->phonecode }})</option> 
                                                                            @endforeach 
                                                                        </select>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                            <div class="col-7">
                                                                <div class="form-group input-group">
                                                                    <div class="input-group-append">
                                                                        <span class="input-group-text" id="phone"><i
                                                                                class="icofont-ui-call  website-color"></i></span>
                                                                    </div>
                                                                    <input name="phone" type="text" placeholder="Phone"
                                                                        class="form-control" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group input-group">
                                                            <div class="input-group-append">
                                                                <span class="input-group-text" id="pseudo"><i
                                                                        class="icofont-ui-user  website-color"></i></span>
                                                            </div>
                                                            <input name="pseudo" type="text" placeholder="pseudo"
                                                                class="form-control" />
                                                        </div>
                                                    </div>
                                               
                                                </div>
                                            </div>    
                                            @endguest
                                            <div class="row">
                                                <div class="col">
                                                    <input type="checkbox" id="condition" name="terms"
                                                    value="yes" required>
                                                <label for="condition"> j'accepte les dispositions des
                                                    conditions
                                                    générales et de la politique de confidentialité
                                                </label><br>

                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-block" id="agri-food-articles"></div>
                            </div>
                            <div class="text-right">
                                {{-- <a href="{{ URL::previous() }}" class="back btn btn-outline-danger">
                                    <i class="icofont-simple-left mr-2"></i>Back
                                </a> --}}
                                <button class="continue btn text-white bg-navy-blue ml-3" type="submit">
                                    Publiez mon annonce 
                                </button>
                                </form>
                            </div>
                        </div>
                        <!-- Agri-food form end -->
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

    <script>
        $(document).ready(function(){
            $('#user_email').blur(function(){
                var email = $(this).val(); 
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                
                $.ajax({
                    type: 'POST', 
                    url: "{{ route('email.check') }}",
                    data: {
                        email:email,
                    },
                    success: function(data){
                        if(data == 'true'){
                            $('#existing').addClass('d-block');
                            $('#optional').addClass('d-none');

                        }
                        else{
                            $('#existing').removeClass('d-block');
                            $('#optional').removeClass('d-none'); 
                        }
                    }
                });
            }); 


            $('#c_pwd').blur(function(){
                var pwd = $('#pwd').val();
                var c_pwd = $(this).val();
                if(c_pwd != pwd){
                    $('#password_error').text('Password Does not Match');  
                    $('#pwd').focus();
                }
                else{
                    $('#password_error').addClass('d-none');
                }
              
            });  


//   
            var autocomplete;
            var depart = 'depart';
            var arrivee = 'arrivee';
            
            autocomplete = new google.maps.places.Autocomplete((document.getElementById(depart)),
            {
                types:['geocode'],
            });
            autocomplete = new google.maps.places.Autocomplete((document.getElementById(arrivee)),
            {
                types:['geocode'],
            });
            google.maps.event.addListener(autocomplete, 'place_changed', function(){
                var near_place = autocomplete.getPlace();
            });
            
                
        });
    </script>
 
        <!-- transport scripts -->
        <script src="{{ asset('assets/js/transport.js') }}"></script>
    @endsection

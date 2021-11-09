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
                                    {{-- <span>Give a name to your listing:</span> --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="bg-light-gray p-3 rounded mt-3">
                                                <form action="{{ route('announcement.three') }}" class="needs-validation"
                                                    id="household-form" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="category" value="{{ $category }}" />
                                                    {{-- <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Départ"
                                                                    class="form-control" name="depart" required/>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Arrivée"
                                                                    class="form-control" name="arrivee" required/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for=""> Date de chargement </label>
                                                                <input type="date" placeholder="Date de chargement "
                                                                    class="form-control" name="loading_date" required/>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label for=""> Date de livraison </label>
                                                                <input type="date" placeholder="Date de livraison "
                                                                    class="form-control" name="delevary_date" required/>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="je connais mon volume"
                                                                    class="form-control" name="volume" required/>
                                                            </div>
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="form-group">
                                                                <textarea name="list"   class="form-control" rows="7"
                                                                    placeholder=" j'ai une liste (*pensez à faire un iventaire pièce par pièce )" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row my-3">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <h5> Biens particuliers </h5>
                                                                {{-- <input type="text" placeholder="Biens particuliers"
                                                                    class="form-control" name="individual_goods"/> --}}
                                                            </div>
                                                        </div>
                                                        <div class="col-8">

                                                            <div class="d-flex">
                                                                <label for="no" class="d-flex align-items-center mr-3">
                                                                    non <input type="radio" id="no" name="individual_goods"
                                                                        style="margin-left: 5px" value="no" required>
                                                                </label>

                                                                <label for="yes" class="d-flex align-items-center">
                                                                    oui <input type="radio" id="yes" name="individual_goods"
                                                                        value="yes" style="margin-left: 5px" required>
                                                                </label>
                                                            </div>

                                                           
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
                                                                <select name="place_type"   required>
                                                                    <option value="">type de lieu </option>
                                                                    <option value="maison">maison</option>
                                                                    <option value="appartement">appartement</option>
                                                                    <option value="garde-meuble">garde meuble</option>
                                                                    <option value="commercial">local commercial </option>
                                                                    <option value="bureau">bureau </option>

                                                                </select>
                                                            </div>

                                                            <div class="form-group">
                                                                <select name="floor"   required>
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
                                                    <div class="row my-3">
                                                        <div class="col-4">
                                                            <h5>ascenseur</h5>
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
                                                                        style="margin-left: 5px" value="no" required>
                                                                </label>

                                                                <label for="yes2" class="d-flex align-items-center">
                                                                    oui <input type="radio" id="yes2" name="ascenseur"
                                                                        value="yes" style="margin-left: 5px" required>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row my-3">
                                                        <div class="col-4">
                                                            <h5>accès</h5>
                                                            {{-- <label for=""> accès</label> <br> --}}
                                                            <table>
                                                                <tr>
                                                                    <td> <label for="no">on peut se garer devant </label>
                                                                    </td>
                                                                    <td> <input class="ml-2"
                                                                            style="margin-top: -4px" type="radio" id="no"
                                                                            name="access" value="no" required></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label for="yes">on doit se garer plus loin </label>
                                                                    </td>
                                                                    <td> <input class="ml-2"
                                                                            style="margin-top: -4px" type="radio" id="yes"
                                                                            name="access" value="yes" required></td>
                                                                </tr>

                                                            </table>

                                                        </div>

                                                    </div>
                                                    {{-- <div class="row mt-4">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="services de déménagement"
                                                                    class="form-control" name="services" required/>
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                    
                                                    {{-- <div class="row">
                                                        <div class="col-8">
                                                            <textarea name="informations"   class="form-control"
                                                                rows="7" placeholder="informations complémentaires "></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-4 mb-3">
                                                            <h5>photo</h5> 
                                                            <img src="{{ asset('uploads/callouts/1.jpg') }}" alt="">
                                                            <a class="d-inline-block my-3" target="_blank"
                                                                href="{{ asset('uploads/callouts/1.jpg') }}">Télécharger</a>
                                                        </div>
                                                    </div>
                                                    <h3 class="mt-4">données </h3>
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
                                                                        <div class="input-group" id="country_code_wrapper">
                                                                            <div class="input-group-prepend">
                                                                                <label class="input-group-text"
                                                                                    for="contry_code">
                                                                                     <i class="icofont-world"></i></label>
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
                                                                <input name="password" type="password"
                                                                    placeholder="Mot de passe" class="form-control" />
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
                                                            <input type="checkbox" id="condition" name="condition"
                                                                value="yes" required>
                                                            <label for="condition"> j'accepte les dispositions des
                                                                conditions
                                                                générales et de la politique de confidentialité
                                                            </label><br>

                                                        </div>
                                                    </div> --}}
                                            </div> 
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
                                        Continue 
                                    </button>
                                    </form>
                                </div>
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
                                        ADD ARTICLES
                                    </h4>
                                    {{-- <span>Give a name to your listing:</span> --}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="bg-light-gray p-3 rounded mt-3">
                                                <form action="{{ route('announcement.three') }}" class="needs-validation"
                                                    id="vehicle-form" method="POST">
                                                    @csrf
                                                    <input type="hidden" id="vehicle-type" />
                                                    <input type="hidden" name="category" value="{{ $category }}" />
                                                     
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="je connais mon volume"
                                                                    class="form-control" name="volume" required/>
                                                            </div>
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="form-group">
                                                                <textarea name="list"   class="form-control" rows="7"
                                                                    placeholder=" j'ai une liste (*pensez à faire un iventaire pièce par pièce )" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row my-3">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <h5>Biens particuliers</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-8">

                                                            <div class="d-flex">
                                                                <label for="no" class="d-flex align-items-center mr-3">
                                                                    non <input type="radio" id="no" name="individual_goods"
                                                                        style="margin-left: 5px" value="no" required>
                                                                </label>

                                                                <label for="yes" class="d-flex align-items-center">
                                                                    oui <input type="radio" id="yes" name="individual_goods"
                                                                        value="yes" style="margin-left: 5px" required>
                                                                </label>
                                                            </div> 
                                                            <span>*piano droit, frigo américain, coffre fort, table en
                                                                marbre….</span>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                {{-- <input type="text" placeholder="type de lieu"
                                                                    class="form-control" name="place_type" /> --}}
                                                                <select name="place_type"   required>
                                                                    <option value="">type de lieu </option>
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
                                                                <h5>j'ai besoin d'aide </h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-8">

                                                            <div class="d-flex">
                                                                <label for="no-help" class="d-flex align-items-center mr-3">
                                                                    non <input type="radio" id="no-help" name="help"
                                                                        style="margin-left: 5px" value="no" required>
                                                                </label>

                                                                <label for="yes-help" class="d-flex align-items-center">
                                                                    oui <input type="radio" id="yes-help" name="help"
                                                                        value="yes" style="margin-left: 5px" required>
                                                                </label>
                                                            </div> 
                                                            {{-- <span>*piano droit, frigo américain, coffre fort, table en
                                                                marbre….</span> --}}

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <select name="floor"   required>
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
                                                    <div class="row my-3">
                                                        <div class="col-4">
                                                            <h5>ascenseur </h5>
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
                                                                        style="margin-left: 5px" value="no" required>
                                                                </label>

                                                                <label for="yes2" class="d-flex align-items-center">
                                                                    oui <input type="radio" id="yes2" name="ascenseur"
                                                                        value="yes" style="margin-left: 5px" required>
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row my-3">
                                                        <div class="col-4">
                                                            <h5>accès</h5>
                                                            {{-- <label for=""> accès</label> <br> --}}
                                                            <table>
                                                                <tr>
                                                                    <td> <label for="no">on peut se garer devant </label>
                                                                    </td>
                                                                    <td> <input class="ml-2"
                                                                            style="margin-top: -4px" type="radio" id="no"
                                                                            name="access" value="no" required></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><label for="yes">on doit se garer plus loin </label>
                                                                    </td>
                                                                    <td> <input class="ml-2"
                                                                            style="margin-top: -4px" type="radio" id="yes"
                                                                            name="access" value="yes" required></td>
                                                                </tr>

                                                            </table>

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
                                <button type="submit" data-section="1"
                                    class="continue btn text-white bg-navy-blue ml-3">
                                    Continue

                                </button>
                                </form>
                            </div>
                    </div>
                    <!-- vehicle form end -->
                    @endif

                    @if ($category == 'meubles')
                        <!-- motorcycle and sport form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="motorcycleSport">
                            <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                            {{-- <span>Give a name to your listing:</span> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form method="POST" action="{{ route('announcement.three') }}"
                                            class="needs-validation article-form" id="motorcycleSport-form">
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
                                                    <div class="form-group input-group">
                                                        <input name="height" type="text" placeholder="hauteur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="height"><i
                                                                    class="icofont-box"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="width" type="text" placeholder="largeur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="width"><i
                                                                    class="icofont-box"></i></span>
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
                                                                    class="icofont-box"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="weight" type="text" placeholder="poids"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="weight"> KG</span>
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
                                                                    class="icofont-numbered"></i></span>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <h5>j'ai besoin d'aide</h5>
                                                    </div>
                                                </div>
                                                <div class="col-8">

                                                    <div class="d-flex">
                                                        <label for="no-help" class="d-flex align-items-center mr-3">
                                                            non <input type="radio" id="no-help" name="help"
                                                                style="margin-left: 5px" value="no" required>
                                                        </label>

                                                        <label for="yes-help" class="d-flex align-items-center">
                                                            oui <input type="radio" id="yes-help" name="help"
                                                                value="yes" style="margin-left: 5px" required>
                                                        </label>
                                                    </div> 
                                                    

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        {{-- <input type="text" placeholder="type de lieu"
                                                            class="form-control" name="place_type" /> --}}
                                                        <select name="place_type"   required>
                                                            <option value="">type de lieu </option>
                                                            <option value="maison">maison</option>
                                                            <option value="appartement">appartement</option>
                                                            <option value="garde-meuble">garde meuble</option>
                                                            <option value="commercial">local commercial </option>
                                                            <option value="bureau">bureau </option>

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <select name="floor"   required>
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
                                                    <h5>ascenseur</h5>
                                                </div>

                                                <div class="col-4">
                                                    <div class="d-flex">
                                                        <label for="no2" class="d-flex align-items-center mr-3">
                                                            non <input type="radio" id="no2" name="ascenseur"
                                                                style="margin-left: 5px" value="no" required>
                                                        </label>

                                                        <label for="yes2" class="d-flex align-items-center">
                                                            oui <input type="radio" id="yes2" name="ascenseur"
                                                                value="yes" style="margin-left: 5px" required>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <h5>accès</h5>
                                                    {{-- <label for=""> accès</label> <br> --}}
                                                    <table>
                                                        <tr>
                                                            <td> <label for="no">on peut se garer devant </label>
                                                            </td>
                                                            <td> <input class="ml-2"
                                                                    style="margin-top: -4px" type="radio" id="no"
                                                                    name="access" value="no" required></td>
                                                        </tr>
                                                        <tr>
                                                            <td><label for="yes">on doit se garer plus loin </label>
                                                            </td>
                                                            <td> <input class="ml-2"
                                                                    style="margin-top: -4px" type="radio" id="yes"
                                                                    name="access" value="yes" required></td>
                                                        </tr>

                                                    </table>

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
                                             

                                    </div>
                                </div>
                                <div class="col-md-6 d-block" id="motorcycleSport-articles"></div>
                            </div>
                            <div class="text-right">
                                {{-- <a href="{{ URL::previous() }}" class="back btn btn-outline-danger">
                                    <i class="icofont-simple-left mr-2"></i>Back
                                </a> --}}
                                <button data-section="1" class="continue btn text-white bg-navy-blue ml-3" type="submit">
                                    Continue 
                                </button>
                                </form>
                            </div>
                        </div>
                        <!-- motorcycle and sport form end -->
                    @endif

                    @if ($category == 'électroménager')
                        <!-- boats and voluminous sport form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="boat-voluminous">
                            <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                            {{-- <span>Give a name to your listing:</span> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form action="{{ route('announcement.three') }}" method="POST"
                                            class="needs-validation article-form" id="boat-voluminous-form">
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
                                                    <div class="form-group input-group">
                                                        <input name="height" type="text" placeholder="hauteur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="height"><i
                                                                    class="icofont-box"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="width" type="text" placeholder="largeur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="width"><i
                                                                    class="icofont-box"></i></span>
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
                                                                    class="icofont-box"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="weight" type="text" placeholder="poids"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="weight"> KG</span>
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
                                                                    class="icofont-numbered"></i></span>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <h5>j'ai besoin d'aide </h5>
                                                    </div>
                                                </div>
                                                <div class="col-8">

                                                    <div class="d-flex">
                                                        <label for="no-help" class="d-flex align-items-center mr-3">
                                                            non <input type="radio" id="no-help" name="help"
                                                                style="margin-left: 5px" value="no" required>
                                                        </label>

                                                        <label for="yes-help" class="d-flex align-items-center">
                                                            oui <input type="radio" id="yes-help" name="help"
                                                                value="yes" style="margin-left: 5px" required>
                                                        </label>
                                                    </div> 
                                                    

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        {{-- <input type="text" placeholder="type de lieu"
                                                            class="form-control" name="place_type" /> --}}
                                                        <select name="place_type"   required>
                                                            <option value="">type de lieu </option>
                                                            <option value="maison">maison</option>
                                                            <option value="appartement">appartement</option>
                                                            <option value="garde-meuble">garde meuble</option>
                                                            <option value="commercial">local commercial </option>
                                                            <option value="bureau">bureau </option>

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <select name="floor"   required>
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
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <h5>ascenseur </h5>
                                                </div>

                                                <div class="col-4">
                                                    <div class="d-flex">
                                                        <label for="no2" class="d-flex align-items-center mr-3">
                                                            non <input type="radio" id="no2" name="ascenseur"
                                                                style="margin-left: 5px" value="no" required>
                                                        </label>

                                                        <label for="yes2" class="d-flex align-items-center">
                                                            oui <input type="radio" id="yes2" name="ascenseur"
                                                                value="yes" style="margin-left: 5px" required>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <h5>accès</h5>
                                                    {{-- <label for=""> accès</label> <br> --}}
                                                    <table>
                                                        <tr>
                                                            <td> <label for="no">on peut se garer devant </label>
                                                            </td>
                                                            <td> <input class="ml-2"
                                                                    style="margin-top: -4px" type="radio" id="no"
                                                                    name="access" value="no" required></td>
                                                        </tr>
                                                        <tr>
                                                            <td><label for="yes">on doit se garer plus loin </label>
                                                            </td>
                                                            <td> <input class="ml-2"
                                                                    style="margin-top: -4px" type="radio" id="yes"
                                                                    name="access" value="yes" required></td>
                                                        </tr>

                                                    </table>

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
                                    </div>
                                </div>
                                <div class="col-md-6 d-block" id="boat-voluminous-articles"></div>
                            </div>
                            <div class="text-right">
                                {{-- <a href="{{ URL::previous() }}" class="back btn btn-outline-danger">
                                    <i class="icofont-simple-left mr-2"></i>Back
                                </a> --}}
                                <button type="submit" data-section="1" class="continue btn text-white bg-navy-blue ml-3">
                                    Continue 
                                </button>
                                </form>
                            </div>
                        </div>
                        <!-- boats and voluminous sport form end -->
                    @endif

                    @if ($category == 'colis')
                        <!--  Fragile goods form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="fragileGoods">
                            <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                            {{-- <span>Give a name to your listing:</span> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form action="{{ route('announcement.three') }}" method="POST"
                                            class="needs-validation article-form" id="fragileGoods-form">
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
                                                    <div class="form-group input-group">
                                                        <input name="height" type="text" placeholder="hauteur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="height"><i
                                                                    class="icofont-box"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="width" type="text" placeholder="largeur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="width"><i
                                                                    class="icofont-box"></i></span>
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
                                                                    class="icofont-box"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="weight" type="text" placeholder="poids"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="weight"> KG</span>
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
                                                                    class="icofont-numbered"></i></span>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <h5>j'ai besoin d'aide </h5>
                                                    </div>
                                                </div>
                                                <div class="col-8">

                                                    <div class="d-flex">
                                                        <label for="no-help" class="d-flex align-items-center mr-3">
                                                            non <input type="radio" id="no-help" name="help"
                                                                style="margin-left: 5px" value="no"required>
                                                        </label>

                                                        <label for="yes-help" class="d-flex align-items-center">
                                                            oui <input type="radio" id="yes-help" name="help"
                                                                value="yes" style="margin-left: 5px"required>
                                                        </label>
                                                    </div> 
                                                    

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        {{-- <input type="text" placeholder="type de lieu"
                                                            class="form-control" name="place_type" /> --}}
                                                        <select name="place_type"   required>
                                                            <option value="">type de lieu </option>
                                                            <option value="maison">maison</option>
                                                            <option value="appartement">appartement</option>
                                                            <option value="garde-meuble">garde meuble</option>
                                                            <option value="commercial">local commercial </option>
                                                            <option value="bureau">bureau </option>

                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <select name="floor"   required>
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
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <h5>ascenseur </h5>
                                                </div>

                                                <div class="col-4">
                                                    <div class="d-flex">
                                                        <label for="no2" class="d-flex align-items-center mr-3">
                                                            non <input type="radio" id="no2" name="ascenseur"
                                                                style="margin-left: 5px" value="no" required>
                                                        </label>

                                                        <label for="yes2" class="d-flex align-items-center">
                                                            oui <input type="radio" id="yes2" name="ascenseur"
                                                                value="yes" style="margin-left: 5px" required>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <h5>accès</h5>
                                                    {{-- <label for=""> accès</label> <br> --}}
                                                    <table>
                                                        <tr>
                                                            <td> <label for="no">on peut se garer devant </label>
                                                            </td>
                                                            <td> <input class="ml-2"
                                                                    style="margin-top: -4px" type="radio" id="no"
                                                                    name="access" value="no" required></td>
                                                        </tr>
                                                        <tr>
                                                            <td><label for="yes">on doit se garer plus loin </label>
                                                            </td>
                                                            <td> <input class="ml-2"
                                                                    style="margin-top: -4px" type="radio" id="yes"
                                                                    name="access" value="yes" required></td>
                                                        </tr>

                                                    </table>

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
                                <button data-section="1" class="continue btn text-white bg-navy-blue ml-3" type="submit">
                                    Continue 
                                </button>

                                </form>
                            </div>
                        </div>
                        <!-- Fragile goods form end -->
                    @endif

                    @if ($category == 'palette')
                        <!--  Package/Flod form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="package">
                            <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                            {{-- <span>Give a name to your listing:</span> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form method="POST" action="{{ route('announcement.three') }}"
                                            class="needs-validation article-form" id="package-form">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" />
                                           
                                             
                                            <div class="row">
                                                <div class="col-4">
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
                                                                    class="icofont-box"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="width" type="text" placeholder="largeur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="width"><i
                                                                    class="icofont-box"></i></span>
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
                                                                    class="icofont-box"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="weight" type="text" placeholder="poids"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="weight"> KG</span>
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
                                                                    class="icofont-numbered"></i></span>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <h5>chargement et déchargement par vos soins </h5>
                                                    </div>
                                                </div>
                                                <div class="col-8 mt-3"> 
                                                    <div class="d-flex">
                                                        <label for="yes-help" class="d-flex align-items-center">
                                                            oui <input type="radio" id="yes-help" name="load_unload"
                                                                value="yes" style="margin-left: 5px" required>
                                                        </label>
                                                        <label for="no-help" class="d-flex align-items-center ml-3">
                                                            non <input type="radio" id="no-help" name="load_unload"
                                                                style="margin-left: 5px" value="no" required>
                                                        </label>

                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <h5>besoin d'un hayon</h5>
                                                    </div> 
                                                </div>
                                                <div class="col-8">

                                                    <div class="d-flex">
                                                        <label for="yes-need_tailgate" class="d-flex align-items-center">
                                                            oui <input type="radio" id="yes-need_tailgate" name="need_tailgate"
                                                                value="yes" style="margin-left: 5px" required>
                                                        </label>
                                                        <label for="no-need_tailgate" class="d-flex align-items-center ml-3">
                                                            non <input type="radio" id="no-need_tailgate" name="need_tailgate"
                                                                style="margin-left: 5px" value="no" required>
                                                        </label>

                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <h5>besoin d'un transpalette  </h5> 
                                                    </div>
                                                </div>
                                                <div class="col-8"> 
                                                    <div class="d-flex">
                                                        <label for="yes-need_truck" class="d-flex align-items-center">
                                                            oui <input type="radio" id="yes-need_truck" name="need_truck"
                                                                value="yes" style="margin-left: 5px" required>
                                                        </label>
                                                        <label for="no-need_truck" class="d-flex align-items-center ml-3">
                                                            non <input type="radio" id="no-need_truck" name="need_truck"
                                                                style="margin-left: 5px" value="no" required>
                                                        </label> 
                                                    </div> 
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
                                <button type="submit" data-section="1" class="continue btn text-white bg-navy-blue ml-3">
                                    Continue 
                                </button>
                                </form>
                            </div>
                        </div>
                        <!-- Package/Flod form end -->
                    @endif

                    @if ($category == 'motos')
                        <!--  Pallet form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="pallet">

                            <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                            {{-- <span>Give a name to your listing:</span> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form method="POST" action="{{ route('announcement.three') }}"
                                            class="needs-validation article-form" id="pallet-form">
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
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <h5>chargement et déchargement par vos soins</h5>
                                                    </div>
                                                </div>
                                                <div class="col-8 pt-3">

                                                    <div class="d-flex">
                                                        <label for="yes-help" class="d-flex align-items-center">
                                                            oui <input type="radio" id="yes-help" name="load_unload"
                                                                value="yes" style="margin-left: 5px" required>
                                                        </label>
                                                        <label for="no-help" class="d-flex align-items-center ml-3">
                                                            non <input type="radio" id="no-help" name="load_unload"
                                                                style="margin-left: 5px" value="no" required>
                                                        </label>

                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="row my-3">
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <h5> besoin d'un hayon</h5>
                                                       
                                                    </div>
                                                </div>
                                                <div class="col-8">

                                                    <div class="d-flex">
                                                        <label for="yes-need_tailgate" class="d-flex align-items-center">
                                                            oui <input type="radio" id="yes-need_tailgate" name="need_tailgate"
                                                                value="yes" style="margin-left: 5px" required>
                                                        </label>
                                                        <label for="no-need_tailgate" class="d-flex align-items-center ml-3">
                                                            non <input type="radio" id="no-need_tailgate" name="need_tailgate"
                                                                style="margin-left: 5px" value="no" required>
                                                        </label>

                                                    </div> 
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
                                <button data-section="1" class="continue btn text-white bg-navy-blue ml-3" type="submit">
                                    Continue 
                                </button>
                                </form>
                            </div>
                        </div>
                        <!-- Pallet form end -->
                    @endif

                    @if ($category == 'voitures')
                        <!--  Animal form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="animal">
                            <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                            {{-- <span>Give a name to your listing:</span> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form method="POST" action="{{ route('announcement.three') }}"
                                            class="needs-validation article-form" id="animal-form">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" />
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="form-group"> 
                                                        <input type="text" id="article" placeholder="Marque et modèle " class="form-control" name="brand_model" required/>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                             
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
                                    </div>
                                </div>
                                <div class="col-md-6 d-block" id="animal-articles"></div>
                            </div>
                            <div class="text-right">
                                {{-- <button data-section="0" class="back btn btn-outline-danger">
                                    <i class="icofont-simple-left mr-2"></i>Back
                                </button> --}}
                                <button data-section="1" class="continue btn text-white bg-navy-blue ml-3" type="submit">
                                    Continue 
                                </button>
                                </form>
                            </div>
                        </div>
                        <!-- Animal form end -->
                    @endif

                    @if ($category == 'divers')
                        <!--  Agri-food form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="agri-food">
                            <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                            {{-- <span>Give a name to your listing:</span> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form method="POST" action="{{ route('announcement.three') }}"
                                            class="needs-validation article-form" id="agri-food-form">
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
                                                    <div class="form-group input-group">
                                                        <input name="height" type="text" placeholder="hauteur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="height"><i
                                                                    class="icofont-box"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="width" type="text" placeholder="largeur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="width"><i
                                                                    class="icofont-box"></i></span>
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
                                                                    class="icofont-box"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group input-group">
                                                        <input name="weight" type="text" placeholder="poids"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="weight"> KG</span>
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
                                                                    class="icofont-numbered"></i></span>
                                                        </div>
                                                    </div>
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
                                <button data-section="1" class="continue btn text-white bg-navy-blue ml-3" type="submit">
                                    Continue 
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
        <!-- transport scripts -->
        <script src="{{ asset('assets/js/transport.js') }}"></script>
    @endsection

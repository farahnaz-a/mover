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
    .form-group__wrapper__icon{
        width: 45px;
        height: 100%;
        cursor: pointer;
    }
    .form-group__wrapper__input{
        padding-left: 45px;
    }

    .form-group .nice-select .list{
        width: 100%;
        max-height: 300px;
        overflow-y: auto;
        scrollbar-width: thin;
    }
    .form-group .nice-select .list::-webkit-scrollbar{
        width: 8px;
    }

    .form-group__wrapper--counrty-select .form-group__wrapper__input .nice-select{
        border: 0;
        background: transparent;
    }

    .form-group__wrapper--counrty-select .form-group__wrapper__input .nice-select::after{
       margin-top: -7px;
    }

    .service-card{
        background-color: #ffffff;
        padding: 0 30px 50px;
        border: 1px solid #eaeaea;
        border-radius: 0.25rem;
    }
    .service-card__icon{
        font-size: 40px;
        width: 95px;
        height: 95px;
        color: #5fc2ba;
        background-color: #232135;
        border: 12px solid #fafafa;
        margin-top: -50%;
    }
    .service-card_icon{
        font-size: 40px;
        width: 95px;
        height: 95px;
        color: #232135;
        background-color: #fff;
        border: 12px solid #fafafa;
        margin-top: -50%;
    }

    .service-card__title{
        font-size: 28px;
        color: #232135;
    }

    .service-card__list{
        list-style: none;
    }

    .service-card__list__items{
        margin-bottom: 10px;
        display: flex;
    }

    .service-card__list__items__text{
        color: #232135;
        font-weight: 500;
    }

    .service-card__list__items__icon{
        width: 30px;
        height: 30px;
        color: #232135;
        background-color: #eaeaea;
        margin-right: 10px;
        flex-shrink: 0;
    }
    .service-card .service-card__label{
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #ffffff;
        background-color: #5fc2ba;
        transition: all .3s linear;
    }
    .service-card .service-card__label .service-card__label__icon{
        position: absolute;
        opacity: 0;
        /* color: #232135; */
    }
    .service-card .service-card__label .service-card__label__icon *{
        padding-left: 0;
    }
    .service-card .service-card__checkbox:checked ~ .service-card__label{
        width: 41px;
        height: 41px;
        border-radius: 50%;
        padding: 0;
    }
    .service-card .service-card__checkbox:checked ~ .service-card__label .service-card__label__text{
        opacity: 0;
    }
    .service-card .service-card__checkbox:checked ~ .service-card__label .service-card__label__icon{
        opacity: 1;
    }

    .continue{
        font-size: 20px;
        border-radius: .25rem !important;
        background-color: #5fc2ba;
    }


    .cleint_feature_image__gallery{
        padding: 15px;
        background: #fff;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        border: 1px solid #ced4da;
        min-height: 45px;
        border-radius: 5px;
        gap: 5px;
    }
    .cleint_feature_image__gallery img{
        width: 100%;
        max-width: 200px;
        height: 100%;
        max-height: 200px;
        object-fit: cover;
        margin: 5px;
    }
    
    .image-btn-color{
            background: #232135 !important;
            color: white;
        }
    .image-btn-color:hover{
            background: #232135 !important;
            color: white;
        }

    @media screen and (max-width: 575px){
        .logo-footer{
            max-width: 100%;
            width: auto !important;
        }
        .logo-footer img{
            object-fit: cover;
        }
        .service-card__list__items__icon{
            width: 20px;
            height: 20px;
            font-size: 8px;
        }
        .service-card{
            padding: 0 8px 20px;
        }
        .service-card__list__items__text{
            font-size: 14px;
        }
        .service-card__title{
            font-size: 20px;
        }
    }
    .capitalize_text{
        text-transform: uppercase !important;
    }

    .date-wrapper{
        position: relative;
    }
    .date-wrapper input[type="date"]{
        cursor: pointer;
        padding-right: 30px;
    }
    .date-wrapper input[type="date"]::-webkit-calendar-picker-indicator{
        background: transparent;
        color: transparent;
        cursor: pointer;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .date-wrapper .date-wrapper__icon{
        display: flex;
        align-items: center;
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        font-size: 20px;
        padding: 0 10px;
        pointer-events: none;
        user-select: none;
    }
    .hover-btn{
        font-size: 19px;
        font-weight: 800;
    }
    /* .hover-btn{
        background-color: transparent !important;
        color: #5fc2ba !important;
        font-weight: 800;
    }
    .hover-btn:hover{
        background-color: #5fc2ba !important;
        color: #fff !important;
    } */

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
                            <h4 class="font-weight-bold text-navy-blue capitalize_text">Décrivez votre demande</h4>
                            {{-- <span>Give a name to your listing:</span> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form action="{{ route('announcement.store') }}" class="needs-validation" id="household-form" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" /> 

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="depart" style="position: relative" type="text" placeholder="Adresse de départ" class="form-control" name="depart" required/> 
                                                        <label for="depart"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="arrivee" style="position: relative" type="text" placeholder="Adresse d'arrivée" class="form-control" name="arrivee" required/>
                                                        <label for="arrivee"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""> Date de chargement </label>
                                                        <div class="date-wrapper">
                                                            <input type="date" placeholder="Date de chargement" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="form-control" name="loading_date" required/>
                                                            <span class="date-wrapper__icon">
                                                                <i class="icofont-ui-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Date de livraison</label>
                                                        <div class="date-wrapper">
                                                            <input type="date" placeholder="Date de livraison" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="form-control" name="delevary_date" required/>
                                                            <span class="date-wrapper__icon">
                                                                <i class="icofont-ui-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                            <br>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <input style="position: relative" type="text" id="volume" placeholder="Je connais mon volume"  class="form-control" name="volume"/>
                                                        <label for="volume"> <span style="position: absolute; top: 10px; right: 25px;"><small>m</small>3</span> </label>
                                                    </div>
                                                    @error('volume')
                                                    <span class="text-danger alert">{{ $message }}</span>
                                                    @enderror
                                                </div> 
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <textarea name="list" class="form-control" rows="7" placeholder="Je ne connais pas mon volume mais j'ai une liste&#10;(*pensez à faire un inventaire pièce par pièce)"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row my-3">
                                                <div class="col-md-6">
                                                    <div class="form-group d-flex align-items-center">
                                                        <h5 class="d-inline-block capitalize_text">Biens particuliers</h5>
                                                        {{-- <input type="text" placeholder="Biens particuliers"
                                                            class="form-control" name="individual_goods"/> --}}
                                                        <div class="d-flex ml-auto">
                                                            <label for="no" class="d-flex align-items-center mr-3">
                                                                Non <input type="radio" id="no" name="individual_goods_status" style="margin-left: 5px" value="no" required>
                                                            </label>

                                                            <label for="yes" class="d-flex align-items-center">
                                                                Oui <input type="radio" id="yes" name="individual_goods_status" value="yes" style="margin-left: 5px" required>
                                                            </label> 
                                                        </div> 
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <textarea name="individual_goods" class="form-control" style="height: 45px"></textarea>
                                                    <span>*Piano droit, frigo américain, coffre fort </span> 

                                                </div>
                                            </div>
                                            <div class="row my-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{-- <h5>départ</h5> --}}
                                                        {{-- <input type="text" placeholder="type de lieu"
                                                            class="form-control" name="place_type" /> --}}
                                                        <select name="place_type_depart"   required>
                                                            <option value="">Type de lieu départ</option>
                                                            <option value="maison">Maison</option>
                                                            <option value="appartement">Appartement</option>
                                                            <option value="garde-meuble">Garde meuble</option>
                                                            <option value="commercial">Local commercial </option>
                                                            <option value="bureau">Bureau </option>

                                                        </select>
                                                    </div> 
                                                </div> 
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{-- <h5>arrivée</h5> --}}
                                                        {{-- <input type="text" placeholder="type de lieu"
                                                            class="form-control" name="place_type" /> --}}
                                                        <select name="place_type_arrivee"   required>
                                                            <option value="">Type de lieu arrivée</option>
                                                            <option value="maison">Maison</option>
                                                            <option value="appartement">Appartement</option>
                                                            <option value="garde-meuble">Garde meuble</option>
                                                            <option value="commercial">Local commercial </option>
                                                            <option value="bureau">Bureau </option>

                                                        </select>
                                                    </div>

                                                </div>
                                            </div>
                                            
                                            <div class="row my-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{-- <h5>départ</h5> --}}
                                                        <select name="floor_depart"   required>
                                                            <option value="">Étages départ</option>
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
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                        {{-- <h5>arrivée</h5> --}}
                                                        <select name="floor_arrivee"   required>
                                                            <option value="">Étages arrivée</option>
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
                                                <div class="col-md-6">
                                                    {{-- <h5>départ</h5> --}}
                                                    <div class="form-group">
                                                        <select name="ascenseur_depart" required> 
                                                            <option value="">Ascenseur départ</option>
                                                            <option value="non">Non</option>
                                                            <option value="oui">Oui</option>
                                                        </select>
                                                    </div>
                                                </div>  
                                                <div class="col-md-6">
                                                    {{-- <h5>arrivée</h5> --}}
                                                    <div class="form-group">
                                                        <select name="ascenseur_arrivee" required> 
                                                            <option value="">Ascenseur arrivée</option>
                                                            <option value="non">Non</option>
                                                            <option value="oui">Oui</option>
                                                        </select>
                                                    </div>
                                                </div>  
                                            </div> 
                                            <div class="row my-3">
                                                <div class="col-md-6">
                                                    {{-- <h5>départ</h5> --}}
                                                    <div class="form-group">
                                                        <select name="access_depart" required> 
                                                            <option value="">Accès départ</option>
                                                            <option value="on peut se garer devant">On peut se garer devant</option>
                                                            <option value="on doit se garer plus loin">On doit se garer plus loin</option>
                                                        </select> 
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> 
                                                    {{-- <h5>arrivée</h5> --}}
                                                    <div class="form-group">
                                                        <select name="access_arrivee" required> 
                                                            <option value="">Accès arrivée</option>
                                                            <option value="On peut se garer devant">On peut se garer devant</option>
                                                            <option value="On doit se garer plus loin">On doit se garer plus loin</option>
                                                        </select> 
                                                    </div>
                                                </div>
                                            </div> 
                                            <br>
                                            <h5 class="mt-3 capitalize_text">Je choisis ma formule de déménagement</h5>
                                            {{-- Service Card Section Start --}}
                                            <div class="row mt-4">
                                                <div class="col-md-6 d-flex flex-column">
                                                    <div class="service-card d-flex flex-column h-100 my-4">
                                                        <div class="service-card__header text-center">
                                                            <div class="service-card_icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                <i class="icofont-fast-delivery"></i>
                                                            </div>
                                                            <h3 class="service-card__title mt-3">Camion avec chauffeur</h3>
                                                        </div>
                                                        <ul class="service-card__list pl-0 mb-0">
                                                            {{-- <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">protection du mobilier</span>
                                                            </li> --}}
                                                            {{-- <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">manutention au chargement</span>
                                                            </li> --}}
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Transport</span>
                                                            </li>
                                                            {{-- <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">manutention au déchargement</span>
                                                            </li> --}}
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Assurance</span>
                                                            </li>
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Frais de route (péage, carburant, ferry,…)</span>
                                                            </li>
                                                        </ul>
                                                        <div class="text-center mt-auto">
                                                            <input type="radio" id="clicmove" name="services" value="clicmove" class="service-card__checkbox d-none" required>
                                                            <label for="clicmove" role="button" class="btn-theme bg-navy-blue no-shadow mt-3 service-card__label website-bg-color">
                                                                <span class="service-card__label__text">Choisir</span>
                                                                <span class="service-card__label__icon">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    @error('clicmove')
                                                    <span class="text-danger alert">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 d-flex flex-column">
                                                    <div class="service-card d-flex flex-column h-100 my-4">
                                                        <div class="service-card__header text-center">
                                                            <div class="service-card_icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                <i class="icofont-live-messenger"></i>
                                                            </div>
                                                            <h3 class="service-card__title mt-3">Économique</h3>
                                                        </div>
                                                        <ul class="service-card__list pl-0 mb-0">
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Nombre de déménageur nécessaire</span>
                                                            </li>
                                                            {{-- <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">démontage du mobilier</span>
                                                            </li> --}}
                                                            {{-- <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Emballage du fragile</span>
                                                            </li> --}}
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Protection du mobilier</span>
                                                            </li>
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Manutention au chargement</span>
                                                            </li>
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Transport</span>
                                                            </li>
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Manutention au déchargement</span>
                                                            </li>
                                                            {{-- <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">remontage du mobilier</span>
                                                            </li> --}}
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Assurance</span>
                                                            </li>
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Frais de route (péage, carburant, ferry,…)</span>
                                                            </li>
                                                        </ul>
                                                        <div class="text-center mt-auto">
                                                            <input type="radio" id="économique" name="services" value="économique" class="service-card__checkbox d-none" required>
                                                            <label for="économique" role="button" class="btn-theme bg-navy-blue no-shadow mt-3 service-card__label website-bg-color">
                                                                <span class="service-card__label__text">Choisir</span>
                                                                <span class="service-card__label__icon">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    @error('économique')
                                                        <span class="text-danger alert">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 d-flex flex-column">
                                                    <div class="service-card d-flex flex-column h-100 my-4">
                                                        <div class="service-card__header text-center">
                                                            <div class="service-card_icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                <i class="icofont-fix-tools"></i>
                                                            </div>
                                                            <h3 class="service-card__title mt-3">Standard</h3>
                                                        </div>
                                                        <ul class="service-card__list pl-0 mb-0">
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Nombre de déménageur nécessaire</span>
                                                            </li>
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Démontage du mobilier</span>
                                                            </li>
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Emballage du fragile</span>
                                                            </li>
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Protection du mobilier</span>
                                                            </li>
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Manutention au chargement</span>
                                                            </li>
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Transport</span>
                                                            </li>
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Manutention au déchargement</span>
                                                            </li>
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Remontage du mobilier</span>
                                                            </li>
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Assurance</span>
                                                            </li>
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Frais de route (péage, carburant, ferry,…)</span>
                                                            </li>
                                                        </ul>
                                                        <div class="text-center mt-auto">
                                                            <input type="radio" id="standard" name="services" value="standard" class="service-card__checkbox d-none" required>
                                                            <label for="standard" role="button" class="btn-theme bg-navy-blue no-shadow mt-3 service-card__label website-bg-color">
                                                                <span class="service-card__label__text">Choisir</span>
                                                                <span class="service-card__label__icon">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    @error('standard')
                                                    <span class="text-danger alert">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-6 d-flex flex-column">
                                                    <div class="service-card d-flex flex-column h-100 my-4">
                                                        <div class="service-card__header text-center">
                                                            <div class="service-card_icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                <i class="icofont-box"></i>
                                                            </div>
                                                            <h3 class="service-card__title mt-3">Complète</h3>
                                                        </div>
                                                        <ul class="service-card__list pl-0 mb-0">
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Nombre de déménageur nécessaire</span>
                                                            </li>
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Mise en carton complète (fournitures de matèriels et main d'oeuvre) (Vêtement et linge de lit Livres et documents Vaisselles et fragile Divers)</span>
                                                            </li>
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Démontage du mobilier</span>
                                                            </li>
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Protection du mobilier</span>
                                                            </li>
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Manutention au chargement</span>
                                                            </li>
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Transport</span>
                                                            </li>
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Manutention au déchargement</span>
                                                            </li>
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Remontage du mobilier</span>
                                                            </li>
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Assurance</span>
                                                            </li>
                                                            <li class="service-card__list__items">
                                                                <span class="service-card__list__items__icon d-inline-flex align-items-center justify-content-center rounded-circle">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                                <span class="service-card__list__items__text">Frais de route (péage, carburant, ferry,…)</span>
                                                            </li>
                                                        </ul>
                                                        <div class="text-center mt-auto">
                                                            <input type="radio" id="compléte" name="services" value="compléte" class="service-card__checkbox d-none" required>
                                                            <label for="compléte" role="button" class="btn-theme bg-navy-blue no-shadow mt-3 service-card__label website-bg-color">
                                                                <span class="service-card__label__text">Choisir</span>
                                                                <span class="service-card__label__icon">
                                                                    <i class="icofont-tick-mark"></i>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    @error('compléte')
                                                    <span class="text-danger alert">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            {{-- <div class="row mt-4">
                                                <div class="col-2 mt-1">
                                                    <div class="form-group" style="position: relative">
                                                        
                                                        <span style="font-size: 20px">Économique</span> <input id="économique" name="économique" value="économique" style="position: absolute; top: 10px; right: 0" type="checkbox">
                                                    </div>

                                                </div>
                                                <div class="col-6 customSelectFix">
                                                    <select  required >
                                                        <option >Nombre de déménageur nécessaire (au minimum 2) </option>
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
                                                <div class="col-md-3 mt-1">
                                                    <div class="form-group" style="position: relative">
                                                        <span style="font-size: 20px">Ma formule Clicmove</span> <input id="clicmove"  name="clicmove" value="clicmove" style="position: absolute; top: 10px; right: 0" type="checkbox">
                                                    </div>
                                                </div>
                                                <div class="col-md-9 customSelectFix">
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
                                            </div> --}}
                                            <h5 class="mt-4 font-weight-bold text-navy-blue capitalize_text">
                                                <i class="icofont-warning-alt mr-2 "></i>Informations complémentaires
                                                </h5>
                                            <div class="row">
                                                <div class="col-12">
                                                    <textarea name="informations" class="form-control"
                                                        rows="7" placeholder="INFORMATIONS COMPLÉMENTAIRES"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-12 mb-3">
                                                    <h5 class="capitalize_text">Vous pouvez compléter votre demande avec des photos</h5>
                                                    <div class="cleint_feature_image__gallery"></div>
                                                    <input class="d-none" name="image[]" type="file" multiple id="cleint_feature_image" accept="image/*,image/x-png,image/gif,image/jpeg,image/jpg" required>
                                                    <label for="cleint_feature_image" class="my-3 btn hover-btn  website-bg-color capitalize_text"><i class="icofont-arrow-up bg-light website-color rounded-circle "></i>Télécharger</label>
                                                </div>
                                            </div>
                                            

                                            {{-- IF User Is not Login Then Show This  --}}
                                            @guest 
                                            {{-- <h3 class="mt-4">données </h3> --}}
                                            
                                            @include('frontend.info')
                                            @endguest
                                            <div class="row">
                                                <div class="col">
                                                    <input type="checkbox" id="condition" name="terms" value="yes" required>
                                                    <label for="condition">J'accepte les dispositions des conditions générales et de la politique de confidentialité</label>
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
                            <button type="submit" id="demenagementForm" class="continue no-shadow btn-theme btn capitalize_text">
                                Publiez mon annonce
                            </button>
                            </form>
                        </div>
                    <!-- household equipment form end -->
                    @endif

                    @if ($category == 'chauffeur')
                    <!-- vehicle form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block">
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
                                <h4 class="font-weight-bold text-navy-blue capitalize_text">
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
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input id="depart" style="position: relative" type="text" placeholder="Adresse de départ" class="form-control" name="depart" required/> 
                                                            <label for="depart"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input id="arrivee" style="position: relative" type="text" placeholder="Adresse d'arrivée" class="form-control" name="arrivee" required/>
                                                            <label for="arrivee"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for=""> Date de chargement </label>
                                                            <div class="date-wrapper">
                                                                <input type="date" placeholder="Date de chargement" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="form-control" name="loading_date" required/>
                                                                <span class="date-wrapper__icon">
                                                                    <i class="icofont-ui-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="">Date de livraison</label>
                                                            <div class="date-wrapper">
                                                                <input type="date" placeholder="Date de livraison" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="form-control" name="delevary_date" required/>
                                                                <span class="date-wrapper__icon">
                                                                    <i class="icofont-ui-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Je connais mon volume" class="form-control" name="volume"/>
                                                        </div>
                                                        @error('volume')
                                                        <span class="text-danger alert">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <textarea name="list" class="form-control" rows="7"
                                                                placeholder="Je ne connais pas mon volume mais j'ai une liste&#10;(*pensez à faire un inventaire pièce par pièce)"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row my-3">
                                                    <div class="col-md-6">
                                                        <div class="form-group d-flex align-items-center">
                                                            <h5 class="d-inline-block capitalize_text capitalize_text">Biens particuliers</h5>
                                                            {{-- <input type="text" placeholder="Biens particuliers"
                                                                class="form-control" name="individual_goods"/> --}}
                                                            <div class="d-flex ml-auto">
                                                                <label for="no" class="d-flex align-items-center mr-3">
                                                                    Non <input type="radio" id="no" name="individual_goods_status" style="margin-left: 5px" value="no" required>
                                                                </label>

                                                                <label for="yes" class="d-flex align-items-center">
                                                                    Oui <input type="radio" id="yes" name="individual_goods_status" value="yes" style="margin-left: 5px" required>
                                                                </label> 
                                                            </div> 
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <textarea name="individual_goods" class="form-control" style="height: 45px"></textarea>
                                                        <span>*Piano droit, frigo américain, coffre fort </span> 

                                                    </div>
                                                </div>
                                                <div class="row my-3">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            {{-- <h5>départ</h5> --}}
                                                            {{-- <input type="text" placeholder="type de lieu"
                                                                class="form-control" name="place_type" /> --}}
                                                            <select name="place_type_depart"   required>
                                                                <option value="">Type de lieu départ</option>
                                                                <option value="maison">Maison</option>
                                                                <option value="appartement">Appartement</option>
                                                                <option value="garde-meuble">Garde meuble</option>
                                                                <option value="commercial">Local commercial </option>
                                                                <option value="bureau">Bureau </option>

                                                            </select>
                                                        </div> 
                                                    </div> 
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            {{-- <h5>arrivée</h5> --}}
                                                            {{-- <input type="text" placeholder="type de lieu"
                                                                class="form-control" name="place_type" /> --}}
                                                            <select name="place_type_arrivee"   required>
                                                                <option value="">Type de lieu arrivée</option>
                                                                <option value="maison">Maison</option>
                                                                <option value="appartement">Appartement</option>
                                                                <option value="garde-meuble">Garde meuble</option>
                                                                <option value="commercial">Local commercial </option>
                                                                <option value="bureau">Bureau </option>
    
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                                
                                                <div class="row my-3">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            {{-- <h5>départ</h5> --}}
                                                            <select name="floor_depart"   required>
                                                                <option value="">Étages départ</option>
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
                                                    <div class="col-md-6"> 
                                                            <div class="form-group">
                                                            {{-- <h5>arrivée</h5> --}}
                                                            <select name="floor_arrivee"  required>
                                                                <option value="">Étages arrivée</option>
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
                                                    <div class="col-md-6">
                                                        {{-- <h5>départ</h5> --}}
                                                            <select name="ascenseur_depart" required> 
                                                            <option value="">Ascenseur départ</option>
                                                            <option value="non">Non</option>
                                                            <option value="oui">Oui</option>
                                                        </select>
                                                    </div>  
                                                    <div class="col-md-6">
                                                        {{-- <h5>arrivée</h5> --}}
                                                            <select name="ascenseur_arrivee" required> 
                                                            <option value="">Ascenseur arrivée</option>
                                                            <option value="non">Non</option>
                                                            <option value="oui">Oui</option>
                                                        </select>
                                                    </div>  
                                                </div> 
                                                <div class="row my-3">
                                                    <div class="col-md-6"> 
                                                        {{-- <h5>départ</h5> --}}
                                                        <select name="access_depart" required> 
                                                            <option value="">Accès départ</option>
                                                            <option value="on peut se garer devant">On peut se garer devant</option>
                                                            <option value="on doit se garer plus loin">On doit se garer plus loin</option>
                                                        </select> 
                                                    </div>
                                                    <div class="col-md-6"> 
                                                        {{-- <h5>arrivée</h5> --}}
                                                        <select name="access_arrivee" required> 
                                                            <option value="">Accès arrivée</option>
                                                            <option value="on peut se garer devant">On peut se garer devant</option>
                                                            <option value="on doit se garer plus loin">On doit se garer plus loin</option>
                                                        </select> 
                                                    </div> 
                                                </div>  
                                                <br>
                                                <div class="row my-3">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="help">
                                                                <option value="">J'ai besoin d'aide</option>
                                                                <option value="oui">Oui</option>
                                                                <option value="non">Non</option>
                                                            </select> 
                                                        </div>
                                                    </div> 
                                                </div> 
                                                <h5 class="mt-4 font-weight-bold text-navy-blue capitalize_text">
                                                    <i class="icofont-warning-alt mr-2"></i>Informations complémentaires
                                                    </h5>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <textarea name="informations"   class="form-control"
                                                            rows="7" placeholder="INFORMATIONS COMPLÉMENTAIRES"></textarea>
                                                    </div>
                                                </div>
                                                
                                                <div class="row mt-4">
                                                    <div class="col-12 mb-3">
                                                        <h5 class="capitalize_text">Vous pouvez compléter votre demande avec des photos</h5>
                                                        <div class="cleint_feature_image__gallery">
                                                        </div>
                                                        <input class="d-none" name="image[]" type="file" multiple id="cleint_feature_image" accept="image/*,image/x-png,image/gif,image/jpeg,image/jpg" required>
                                                        <label for="cleint_feature_image" class="my-3 btn  website-bg-color hover-btn capitalize_text"><i class="icofont-arrow-up bg-light website-color rounded-circle"></i>Télécharger</label>
                                                    </div>
                                                </div>

                                                {{-- IF User Is not Login Then Show This  --}}
                                                @guest
                                                {{-- <h3 class="mt-4">données </h3> --}}
                                                {{-- @if (session('errors'))
                                                <script>alert("{{ session('errors') }}")</script>
                                                @endif --}}
                                                @include('frontend.info')
                                                @endguest
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="checkbox" id="condition" name="terms" value="yes" required>
                                                        <label for="condition"> J'accepte les dispositions des conditions générales et de la politique de confidentialité</label><br>
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
                            <button type="submit" class="continue no-shadow no-shadow btn-theme btn capitalize_text">
                                Publiez mon annonce
                            </button>
                            </form>
                        </div>
                    <!-- vehicle form end -->
                    @endif

                    @if ($category == 'meubles')
                    <!-- motorcycle and sport form start -->
                        <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="motorcycleSport">
                            <h4 class="font-weight-bold text-navy-blue capitalize_text">Décrivez votre demande</h4>
                            {{-- <span>Give a name to your listing:</span> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form method="POST" action="{{ route('announcement.store') }}" class="needs-validation article-form" id="motorcycleSport-form" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" />
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="article"> Article Name </label>
                                                        <input type="text" id="article" placeholder="Nom de l'article"
                                                            class="form-control" name="article_name" required/>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="depart" style="position: relative" type="text" placeholder="Adresse de départ" class="form-control" name="depart" required/> 
                                                        <label for="depart"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="arrivee" style="position: relative" type="text" placeholder="Adresse d'arrivée" class="form-control" name="arrivee" required/>
                                                        <label for="arrivee"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""> Date de chargement </label>
                                                        <div class="date-wrapper">
                                                            <input type="date" placeholder="Date de chargement" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="form-control" name="loading_date" required/>
                                                            <span class="date-wrapper__icon">
                                                                <i class="icofont-ui-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Date de livraison</label>
                                                        <div class="date-wrapper">
                                                            <input type="date" placeholder="Date de livraison" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="form-control" name="delevary_date" required/>
                                                            <span class="date-wrapper__icon">
                                                                <i class="icofont-ui-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>
                                           
                                           
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="height" type="text" placeholder="Hauteur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="height"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="width" type="text" placeholder="Largeur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="width"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="length" type="text" placeholder="Longueur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="length"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="weight" type="text" placeholder="Poids"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text website-color font-weight-bold" id="weight">KG</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="quantity" type="text" placeholder="Quantité"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="quantity"><i
                                                                    class="icofont-numbered website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                             
                                            <div class="row my-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{-- <h5>départ</h5> --}}
                                                        {{-- <input type="text" placeholder="type de lieu"
                                                            class="form-control" name="place_type" /> --}}
                                                        <select name="place_type_depart"   required>
                                                            <option value="">Type de lieu départ</option>
                                                            <option value="maison">Maison</option>
                                                            <option value="appartement">Appartement</option>
                                                            <option value="garde-meuble">Garde meuble</option>
                                                            <option value="commercial">Local commercial </option>
                                                            <option value="bureau">Bureau </option>

                                                        </select>
                                                    </div> 
                                                </div> 
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{-- <h5>arrivée</h5> --}}
                                                        {{-- <input type="text" placeholder="type de lieu"
                                                            class="form-control" name="place_type" /> --}}
                                                        <select name="place_type_arrivee"   required>
                                                            <option value="">Type de lieu arrivée</option>
                                                            <option value="maison">Maison</option>
                                                            <option value="appartement">Appartement</option>
                                                            <option value="garde-meuble">Garde meuble</option>
                                                            <option value="commercial">Local commercial </option>
                                                            <option value="bureau">Bureau </option>

                                                        </select>
                                                    </div>

                                                </div>
                                            </div>    
                                            <div class="row my-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{-- <h5>départ</h5> --}}
                                                        <select name="floor_depart"   required>
                                                            <option value="">Étages départ</option>
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
                                                <div class="col-md-6"> 
                                                     <div class="form-group">
                                                        {{-- <h5>arrivée</h5> --}}
                                                        <select name="floor_arrivee"   required>
                                                            <option value="">Étages arrivée</option>
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
                                                <div class="col-md-6">
                                                    {{-- <h5>départ</h5> --}}
                                                     <select name="ascenseur_depart" required> 
                                                        <option value="">Ascenseur départ</option>
                                                        <option value="non">Non</option>
                                                        <option value="oui">Oui</option>
                                                    </select>
                                                </div>  
                                                <div class="col-md-6">
                                                    {{-- <h5>arrivée</h5> --}}
                                                     <select name="ascenseur_arrivee" required> 
                                                        <option value="">Ascenseur arrivée</option>
                                                        <option value="non">Non</option>
                                                        <option value="oui">Oui</option>
                                                    </select>
                                                </div>  
                                            </div> 
                                            <div class="row my-3">
                                                <div class="col-md-6"> 
                                                    {{-- <h5>départ</h5> --}}
                                                    <select name="access_depart" required> 
                                                        <option value="">Accès départ</option>
                                                        <option value="on peut se garer devant">On peut se garer devant</option>
                                                        <option value="on doit se garer plus loin">On doit se garer plus loin</option>
                                                    </select> 
                                                </div>
                                                <div class="col-md-6"> 
                                                    {{-- <h5>arrivée</h5> --}}
                                                    <select name="access_arrivee" required> 
                                                        <option value="">Accès arrivée</option>
                                                        <option value="on peut se garer devant">On peut se garer devant</option>
                                                        <option value="on doit se garer plus loin">On doit se garer plus loin</option>
                                                    </select> 
                                                </div> 
                                            </div>  
                                            <br>
                                            <div class="row my-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="help">
                                                            <option value="">J'ai besoin d'aide</option>
                                                            <option value="oui">Oui</option>
                                                            <option value="non">Non</option>
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
                                            <h5 class="mt-4 font-weight-bold text-navy-blue capitalize_text">
                                                <i class="icofont-warning-alt mr-2"></i>Informations complémentaires
                                              </h5>
                                            <div class="row">
                                                <div class="col-12">
                                                    <textarea name="informations"   class="form-control"
                                                        rows="7" placeholder="INFORMATIONS COMPLÉMENTAIRES"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="row mt-4">
                                                <div class="col-12 mb-3">
                                                    <h5 class="capitalize_text">Vous pouvez compléter votre demande avec des photos</h5>
                                                    <div class="cleint_feature_image__gallery">
                                                    </div>
                                                    <input class="d-none" name="image[]" type="file" multiple id="cleint_feature_image" accept="image/*,image/x-png,image/gif,image/jpeg,image/jpg" required>
                                                    <label for="cleint_feature_image" class="my-3 btn  website-bg-color hover-btn capitalize_text"><i class="icofont-arrow-up bg-light website-color rounded-circle"></i>Télécharger</label>
                                                </div>
                                            </div>

                                            {{-- IF User Is not Login Then Show This  --}}
                                            @guest
                                            {{-- <h3 class="mt-4">données </h3> --}}
                                            {{-- @if (session('errors'))
                                            <script>alert("{{ session('errors') }}")</script> 
                                            @endif --}}
                                            @include('frontend.info')  
                                            @endguest
                                            <div class="row">
                                                <div class="col">
                                                    <input type="checkbox" id="condition" name="terms"
                                                    value="yes" required>
                                                <label for="condition">J'accepte les dispositions des
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
                                <button class="continue no-shadow btn-theme btn capitalize_text" type="submit">
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
                            <h4 class="font-weight-bold text-navy-blue capitalize_text">Décrivez votre demande</h4>
                            {{-- <span>Give a name to your listing:</span> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form action="{{ route('announcement.store') }}" method="POST" class="needs-validation article-form" id="boat-voluminous-form" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" />
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="article"> Article Name </label>
                                                        <input type="text" id="article" placeholder="Frigo, machine à laver"
                                                            class="form-control" name="article_name" required/>
                                                    </div>
                                                </div> 
                                            </div> 
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="depart" style="position: relative" type="text" placeholder="Adresse de départ" class="form-control" name="depart" required/> 
                                                        <label for="depart"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="arrivee" style="position: relative" type="text" placeholder="Adresse d'arrivée" class="form-control" name="arrivee" required/>
                                                        <label for="arrivee"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""> Date de chargement </label>
                                                        <div class="date-wrapper">
                                                            <input type="date" placeholder="Date de chargement" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="form-control" name="loading_date" required/>
                                                            <span class="date-wrapper__icon">
                                                                <i class="icofont-ui-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Date de livraison</label>
                                                        <div class="date-wrapper">
                                                            <input type="date" placeholder="Date de livraison" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="form-control" name="delevary_date" required/>
                                                            <span class="date-wrapper__icon">
                                                                <i class="icofont-ui-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <br> 
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="height" type="text" placeholder="Hauteur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="height"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="width" type="text" placeholder="Largeur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="width"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="length" type="text" placeholder="Longueur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="length"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="weight" type="text" placeholder="Poids"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text website-color font-weight-bold" id="weight"> KG</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="quantity" type="text" placeholder="Quantité"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="quantity"><i
                                                                    class="icofont-numbered website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="row my-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{-- <h5>départ</h5> --}}
                                                        {{-- <input type="text" placeholder="type de lieu"
                                                            class="form-control" name="place_type" /> --}}
                                                        <select name="place_type_depart"   required>
                                                            <option value="">Type de lieu départ</option>
                                                            <option value="maison">Maison</option>
                                                            <option value="appartement">Appartement</option>
                                                            <option value="garde-meuble">Garde meuble</option>
                                                            <option value="commercial">Local commercial </option>
                                                            <option value="bureau">Bureau </option>

                                                        </select>
                                                    </div> 
                                                </div> 
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{-- <h5>arrivée</h5> --}}
                                                        {{-- <input type="text" placeholder="type de lieu"
                                                            class="form-control" name="place_type" /> --}}
                                                        <select name="place_type_arrivee"   required>
                                                            <option value="">Type de lieu arrivée</option>
                                                            <option value="maison">Maison</option>
                                                            <option value="appartement">Appartement</option>
                                                            <option value="garde-meuble">Garde meuble</option>
                                                            <option value="commercial">Local commercial </option>
                                                            <option value="bureau">Bureau </option>

                                                        </select>
                                                    </div>

                                                </div>
                                            </div>    
                                            <div class="row my-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{-- <h5>départ</h5> --}}
                                                        <select name="floor_depart"   required>
                                                            <option value="">Étages départ</option>
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
                                                <div class="col-md-6"> 
                                                     <div class="form-group">
                                                        {{-- <h5>arrivée</h5> --}}
                                                        <select name="floor_arrivée"   required>
                                                            <option value="">Étages arrivée</option>
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
                                                <div class="col-md-6">
                                                    {{-- <h5>départ</h5> --}}
                                                     <select name="ascenseur_depart" required> 
                                                        <option value="">Ascenseur départ</option>
                                                        <option value="non">Non</option>
                                                        <option value="oui">Oui</option>
                                                    </select>
                                                </div>  
                                                <div class="col-md-6">
                                                    {{-- <h5>arrivée</h5> --}}
                                                     <select name="ascenseur_arrivee" required> 
                                                        <option value="">Ascenseur arrivée</option>
                                                        <option value="non">Non</option>
                                                        <option value="oui">Oui</option>
                                                    </select>
                                                </div>  
                                            </div> 
                                            <div class="row my-3">
                                                <div class="col-md-6"> 
                                                    {{-- <h5>départ</h5> --}}
                                                    <select name="access_depart" required> 
                                                        <option value="">Accès départ</option>
                                                        <option value="on peut se garer devant">On peut se garer devant</option>
                                                        <option value="on doit se garer plus loin">On doit se garer plus loin</option>
                                                    </select> 
                                                </div>
                                                <div class="col-md-6"> 
                                                    {{-- <h5>arrivée</h5> --}}
                                                    <select name="access_arrivee" required> 
                                                        <option value="">Accès arrivée</option>
                                                        <option value="on peut se garer devant">On peut se garer devant</option>
                                                        <option value="on doit se garer plus loin">On doit se garer plus loin</option>
                                                    </select> 
                                                </div> 
                                            </div>  
                                            <br>
                                            <div class="row my-3">
                                                <div class="col-md-6">
                                                    <div class="form-group"> 
                                                        <select name="help">
                                                            <option value="">J'ai besoin d'aide</option>
                                                            <option value="oui">Oui</option>
                                                            <option value="non">Non</option>
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
                                            <h5 class="mt-4 font-weight-bold text-navy-blue capitalize_text">
                                                <i class="icofont-warning-alt mr-2"></i>Informations complémentaires
                                              </h5>
                                            <div class="row">
                                                <div class="col-12">
                                                    <textarea name="informations"  class="form-control"
                                                        rows="7" placeholder="INFORMATIONS COMPLÉMENTAIRES"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="row mt-4">
                                                <div class="col-12 mb-3">
                                                    <h5 class="capitalize_text">Vous pouvez compléter votre demande avec des photos</h5>
                                                    <div class="cleint_feature_image__gallery">
                                                    </div>
                                                    <input class="d-none" name="image[]" type="file" multiple id="cleint_feature_image" accept="image/*,image/x-png,image/gif,image/jpeg,image/jpg" required>
                                                    <label for="cleint_feature_image" class="my-3 btn  website-bg-color hover-btn capitalize_text"><i class="icofont-arrow-up bg-light website-color rounded-circle"></i>Télécharger</label>
                                                </div>
                                            </div>

                                            {{-- IF User Is not Login Then Show This  --}}
                                            @guest
                                            {{-- <h3 class="mt-4">données </h3> --}}
                                            {{-- @if (session('errors'))
                                            <script>alert("{{ session('errors') }}")</script> 
                                            @endif --}}
                                            @include('frontend.info') 
                                            @endguest
                                            <div class="row">
                                                <div class="col">
                                                    <input type="checkbox" id="condition" name="terms"
                                                    value="yes" required>
                                                <label for="condition"> J'accepte les dispositions des
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
                                <button type="submit" class="continue no-shadow btn-theme btn capitalize_text">
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
                            <h4 class="font-weight-bold text-navy-blue capitalize_text">Décrivez votre demande</h4>
                            {{-- <span>Give a name to your listing:</span> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form action="{{ route('announcement.store') }}" method="POST" class="needs-validation article-form" id="fragileGoods-form" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" />
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="article"> Article Name </label>
                                                        <input type="text" id="article" placeholder="Nom de l'article"
                                                            class="form-control" name="article_name" required/>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="depart" style="position: relative" type="text" placeholder="Adresse de départ" class="form-control" name="depart" required/> 
                                                        <label for="depart"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="arrivee" style="position: relative" type="text" placeholder="Adresse d'arrivée" class="form-control" name="arrivee" required/>
                                                        <label for="arrivee"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""> Date de chargement </label>
                                                        <div class="date-wrapper">
                                                            <input type="date" placeholder="Date de chargement" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="form-control" name="loading_date" required/>
                                                            <span class="date-wrapper__icon">
                                                                <i class="icofont-ui-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Date de livraison</label>
                                                        <div class="date-wrapper">
                                                            <input type="date" placeholder="Date de livraison" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="form-control" name="delevary_date" required/>
                                                            <span class="date-wrapper__icon">
                                                                <i class="icofont-ui-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                             
                                           
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="height" type="text" placeholder="Hauteur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="height"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="width" type="text" placeholder="Largeur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="width"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="length" type="text" placeholder="Longueur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="length"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="weight" type="text" placeholder="Poids"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text website-color font-weight-bold" id="weight"> KG</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="quantity" type="text" placeholder="Quantité"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="quantity"><i
                                                                    class="icofont-numbered website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="row my-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{-- <h5>départ</h5> --}}
                                                        {{-- <input type="text" placeholder="type de lieu"
                                                            class="form-control" name="place_type" /> --}}
                                                        <select name="place_type_depart"   required>
                                                            <option value="">Type de lieu départ</option>
                                                            <option value="maison">Maison</option>
                                                            <option value="appartement">Appartement</option>
                                                            <option value="garde-meuble">Garde meuble</option>
                                                            <option value="commercial">Local commercial </option>
                                                            <option value="bureau">Bureau </option>

                                                        </select>
                                                    </div> 
                                                </div> 
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{-- <h5>arrivée</h5> --}}
                                                        {{-- <input type="text" placeholder="type de lieu"
                                                            class="form-control" name="place_type" /> --}}
                                                        <select name="place_type_arrivee"   required>
                                                            <option value="">Type de lieu arrivée</option>
                                                            <option value="maison">Maison</option>
                                                            <option value="appartement">Appartement</option>
                                                            <option value="garde-meuble">Garde meuble</option>
                                                            <option value="commercial">Local commercial </option>
                                                            <option value="bureau">Bureau </option>

                                                        </select>
                                                    </div>

                                                </div>
                                            </div>    
                                            <div class="row my-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        {{-- <h5>départ</h5> --}}
                                                        <select name="floor_depart"   required>
                                                            <option value="">Étages départ</option>
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
                                                <div class="col-md-6"> 
                                                     <div class="form-group">
                                                        {{-- <h5>arrivée</h5> --}}
                                                        <select name="floor_arrivee"   required>
                                                            <option value="">Étages arrivée</option>
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
                                                <div class="col-md-6">
                                                    {{-- <h5>départ</h5> --}}
                                                     <select name="ascenseur_depart" required> 
                                                        <option value="">Ascenseur départ</option>
                                                        <option value="non">Non</option>
                                                        <option value="oui">Oui</option>
                                                    </select>
                                                </div>  
                                                <div class="col-md-6">
                                                    {{-- <h5>arrivée</h5> --}}
                                                     <select name="ascenseur_arrivee" required> 
                                                        <option value="">Ascenseur arrivée</option>
                                                        <option value="non">Non</option>
                                                        <option value="oui">Oui</option>
                                                    </select>
                                                </div>  
                                            </div> 
                                            <div class="row my-3">
                                                <div class="col-md-6"> 
                                                    {{-- <h5>départ</h5> --}}
                                                    <select name="access_depart" required> 
                                                        <option value="">Accès départ</option>
                                                        <option value="on peut se garer devant">On peut se garer devant</option>
                                                        <option value="on doit se garer plus loin">On doit se garer plus loin</option>
                                                    </select> 
                                                </div>
                                                <div class="col-md-6"> 
                                                    {{-- <h5>arrivée</h5> --}}
                                                    <select name="access_arrivee" required> 
                                                        <option value="">Accès arrivée</option>
                                                        <option value="on peut se garer devant">On peut se garer devant</option>
                                                        <option value="on doit se garer plus loin">On doit se garer plus loin</option>
                                                    </select> 
                                                </div> 
                                            </div>      
                                            <br>
                                            <div class="row my-3">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="help">
                                                            <option value="">J'ai besoin d'aide</option>
                                                            <option value="oui">Oui</option>
                                                            <option value="non"> Non</option>
                                                        </select> 
                                                    </div>
                                                </div> 
                                            </div> 
                                             
                                            <h5 class="mt-4 font-weight-bold text-navy-blue capitalize_text">
                                                <i class="icofont-warning-alt mr-2"></i>Informations complémentaires
                                              </h5>
                                            <div class="row">
                                                <div class="col-12">
                                                    <textarea name="informations"   class="form-control"
                                                        rows="7" placeholder="INFORMATIONS COMPLÉMENTAIRES"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="row mt-4">
                                                <div class="col-12 mb-3">
                                                    <h5 class="capitalize_text">Vous pouvez compléter votre demande avec des photos</h5>
                                                    <div class="cleint_feature_image__gallery">
                                                    </div>
                                                    <input class="d-none" name="image[]" type="file" multiple id="cleint_feature_image" accept="image/*,image/x-png,image/gif,image/jpeg,image/jpg" required>
                                                    <label for="cleint_feature_image" class="my-3 btn  website-bg-color hover-btn capitalize_text"><i class="icofont-arrow-up bg-light website-color rounded-circle"></i>Télécharger</label>
                                                </div>
                                            </div>

                                            {{-- IF User Is not Login Then Show This  --}}
                                            @guest
                                            {{-- <h3 class="mt-4">données </h3> --}}
                                            {{-- @if (session('errors'))
                                            <script>alert("{{ session('errors') }}")</script> 
                                            @endif --}}
                                            @include('frontend.info')  
                                            @endguest
                                            <div class="row">
                                                <div class="col">
                                                    <input type="checkbox" id="condition" name="terms"
                                                    value="yes" required>
                                                <label for="condition"> J'accepte les dispositions des
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
                                <button class="continue no-shadow btn-theme btn capitalize_text" type="submit">
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
                            <h4 class="font-weight-bold text-navy-blue capitalize_text">Décrivez votre demande</h4>
                            {{-- <span>Give a name to your listing:</span> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form method="POST" action="{{ route('announcement.store') }}" class="needs-validation article-form" id="package-form" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" />
                                           
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="depart" style="position: relative" type="text" placeholder="Adresse de départ" class="form-control" name="depart" required/> 
                                                        <label for="depart"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="arrivee" style="position: relative" type="text" placeholder="Adresse d'arrivée" class="form-control" name="arrivee" required/>
                                                        <label for="arrivee"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""> Date de chargement </label>
                                                        <div class="date-wrapper">
                                                            <input type="date" placeholder="Date de chargement" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="form-control" name="loading_date" required/>
                                                            <span class="date-wrapper__icon">
                                                                <i class="icofont-ui-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Date de livraison</label>
                                                        <div class="date-wrapper">
                                                            <input type="date" placeholder="Date de livraison" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="form-control" name="delevary_date" required/>
                                                            <span class="date-wrapper__icon">
                                                                <i class="icofont-ui-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                            <br>
                                             
                                            <div class="row">
                                                <div class="col-6">
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
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="height" type="text" placeholder="Hauteur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="height"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="width" type="text" placeholder="Largeur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="width"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="length" type="text" placeholder="Longueur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="length"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="weight" type="text" placeholder="Poids"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text website-color font-weight-bold" id="weight"> KG</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="quantity" type="text" placeholder="Quantité"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="quantity"><i
                                                                    class="icofont-numbered website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="row my-3">
                                                <div class="col-md-6"> 
                                                    {{-- <h5>départ</h5> --}}
                                                    <select name="access_depart" required> 
                                                        <option value="">Accès départ</option>
                                                        <option value="on peut se garer devant">On peut se garer devant</option>
                                                        <option value="on doit se garer plus loin">On doit se garer plus loin</option>
                                                    </select> 
                                                </div>
                                                <div class="col-md-6"> 
                                                    {{-- <h5>arrivée</h5> --}}
                                                    <select name="access_arrivee" required> 
                                                        <option value="">Accès arrivée</option>
                                                        <option value="on peut se garer devant">On peut se garer devant</option>
                                                        <option value="on doit se garer plus loin">On doit se garer plus loin</option>
                                                    </select> 
                                                </div> 
                                            </div>
                                            <br>
                                            <div class="row my-3">
                                                <div class="col-6">
                                                    <div class="form-group"> 
                                                        <select name="load_unload">
                                                            <option value="">Chargement et déchargement par vos soins </option>
                                                            <option value="oui">Oui</option>
                                                            <option value="non">Non</option>
                                                        </select>  
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="row my-3">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <select name="need_tailgate">
                                                            <option value="">Besoin d'un hayon</option>
                                                            <option value="oui">Oui</option>
                                                            <option value="non">Non</option> 
                                                        </select> 
                                                    </div> 
                                                </div> 
                                            </div>
                                            <div class="row my-3">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <select name="need_truck">
                                                            <option value="">Besoin d'un transpalette </option>
                                                            <option value="oui">Oui</option>
                                                            <option value="non">Non</option>
                                                        </select> 
                                                    </div>
                                                </div> 
                                            </div> 
                                            <h5 class="mt-4 font-weight-bold text-navy-blue capitalize_text">
                                                <i class="icofont-warning-alt mr-2"></i>Informations complémentaires
                                              </h5>
                                            <div class="row">
                                                <div class="col-12">
                                                    <textarea name="informations"   class="form-control"
                                                        rows="7" placeholder="INFORMATIONS COMPLÉMENTAIRES"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="row mt-4">
                                                <div class="col-12 mb-3">
                                                    <h5 class="capitalize_text">Vous pouvez compléter votre demande avec des photos</h5>
                                                    <div class="cleint_feature_image__gallery">
                                                    </div>
                                                    <input class="d-none" name="image[]" type="file" multiple id="cleint_feature_image" accept="image/*,image/x-png,image/gif,image/jpeg,image/jpg" required>
                                                    <label for="cleint_feature_image" class="my-3 btn  website-bg-color hover-btn capitalize_text"><i class="icofont-arrow-up bg-light website-color rounded-circle"></i>Télécharger</label>
                                                </div>
                                            </div>

                                            {{-- IF User Is not Login Then Show This  --}}
                                            @guest
                                            {{-- <h3 class="mt-4">données </h3> --}}
                                            {{-- @if (session('errors'))
                                            <script>alert("{{ session('errors') }}")</script> 
                                            @endif --}}
                                            @include('frontend.info')  
                                            @endguest
                                            <div class="row">
                                                <div class="col">
                                                    <input type="checkbox" id="condition" name="terms"
                                                    value="yes" required>
                                                <label for="condition"> J'accepte les dispositions des
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
                                <button type="submit" class="continue no-shadow btn-theme btn capitalize_text">
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

                            <h4 class="font-weight-bold text-navy-blue capitalize_text">Décrivez votre demande</h4>
                            {{-- <span>Give a name to your listing:</span> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form method="POST" action="{{ route('announcement.store') }}" class="needs-validation article-form" id="pallet-form" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}"/>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group"> 
                                                        <input type="text" id="article" placeholder="Marque et modèle " class="form-control" name="brand_model" required/>
                                                    </div>
                                                </div>  
                                            </div> 
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="depart" style="position: relative" type="text" placeholder="Adresse de départ" class="form-control" name="depart" required/> 
                                                        <label for="depart"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="arrivee" style="position: relative" type="text" placeholder="Adresse d'arrivée" class="form-control" name="arrivee" required/>
                                                        <label for="arrivee"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""> Date de chargement </label>
                                                        <div class="date-wrapper">
                                                            <input type="date" placeholder="Date de chargement" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="form-control" name="loading_date" required/>
                                                            <span class="date-wrapper__icon">
                                                                <i class="icofont-ui-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Date de livraison</label>
                                                        <div class="date-wrapper">
                                                            <input type="date" placeholder="Date de livraison" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="form-control" name="delevary_date" required/>
                                                            <span class="date-wrapper__icon">
                                                                <i class="icofont-ui-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                            <br>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="d-flex justify-content-between">
                                                        <label for="movingVehicle2">Roulante </label>
                                                        <div class="custom-control custom-switch">
                                                            <input type="radio" class="custom-control-input" id="movingVehicle2"
                                                                name="rolling" value="yes" required/>
                                                            <label class="custom-control-label" for="movingVehicle2"></label>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <label for="acceptConveyorsMotorcycle">Non roulante</label>
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
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <select name="load_unload">
                                                            <option value=""> Chargement et déchargement par vos soins </option>
                                                            <option value="oui">Oui</option>
                                                            <option value="non">Non</option>
                                                        </select>  
                                                    </div>
                                                </div> 
                                            </div>
                                            <div class="row my-3">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <select name="need_tailgate">
                                                            <option value="">Besoin d'un hayon</option>
                                                            <option value="oui">Oui</option>
                                                            <option value="non">Non</option> 
                                                        </select> 
                                                    </div> 
                                                </div> 
                                            </div>
                                            <h5 class="mt-4 font-weight-bold text-navy-blue capitalize_text">
                                                <i class="icofont-warning-alt mr-2"></i>Informations complémentaires
                                              </h5>
                                            <div class="row">
                                                <div class="col-12">
                                                    <textarea name="informations"   class="form-control"
                                                        rows="7" placeholder="INFORMATIONS COMPLÉMENTAIRES"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="row mt-4">
                                                <div class="col-12 mb-3">
                                                    <h5 class="capitalize_text">Vous pouvez compléter votre demande avec des photos</h5>
                                                    <div class="cleint_feature_image__gallery">
                                                    </div>
                                                    <input class="d-none" name="image[]" type="file" multiple id="cleint_feature_image" accept="image/*,image/x-png,image/gif,image/jpeg,image/jpg" required>
                                                    <label for="cleint_feature_image" class="my-3 btn  website-bg-color capitalize_text hover-btn"><i class="icofont-arrow-up bg-light website-color rounded-circle"></i>Télécharger</label>
                                                </div>
                                            </div>

                                            {{-- IF User Is not Login Then Show This  --}}
                                            @guest
                                            {{-- <h3 class="mt-4">données </h3> --}}
                                            {{-- @if (session('errors'))
                                            <script>alert("{{ session('errors') }}")</script> 
                                            @endif --}}
                                            @include('frontend.info') 
                                            @endguest
                                            <div class="row">
                                                <div class="col">
                                                    <input type="checkbox" id="condition" name="terms"
                                                    value="yes" required>
                                                <label for="condition"> J'accepte les dispositions des
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
                                <button class="continue no-shadow btn-theme btn capitalize_text" type="submit">
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
                            <h4 class="font-weight-bold text-navy-blue capitalize_text">Décrivez votre demande</h4>
                            {{-- <span>Give a name to your listing:</span> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form method="POST" action="{{ route('announcement.store') }}" class="needs-validation article-form" id="animal-form" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" />
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group"> 
                                                        <input type="text" id="article" placeholder="Marque et modèle " class="form-control" name="brand_model" required/>
                                                    </div>
                                                </div> 
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="depart" style="position: relative" type="text" placeholder="Adresse de départ" class="form-control" name="depart" required/> 
                                                        <label for="depart"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                   </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="arrivee" style="position: relative" type="text" placeholder="Adresse d'arrivée" class="form-control" name="arrivee" required/>
                                                        <label for="arrivee"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""> Date de chargement </label>
                                                        <div class="date-wrapper">
                                                            <input type="date" placeholder="Date de chargement" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="form-control" name="loading_date" required/>
                                                            <span class="date-wrapper__icon">
                                                                <i class="icofont-ui-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Date de livraison</label>
                                                        <div class="date-wrapper">
                                                            <input type="date" placeholder="Date de livraison" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="form-control" name="delevary_date" required/>
                                                            <span class="date-wrapper__icon">
                                                                <i class="icofont-ui-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                            <br>
                                             
                                            <div class="row my-3">
                                                <div class="col-md-6">
                                                    <div class="d-flex justify-content-between">
                                                        <label for="movingVehicle2">Roulante </label>
                                                        <div class="custom-control custom-switch">
                                                            <input type="radio" class="custom-control-input" id="movingVehicle2"
                                                                name="rolling" value="yes" required/>
                                                            <label class="custom-control-label" for="movingVehicle2"></label>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <label for="acceptConveyorsMotorcycle">Non roulante</label>
                                                        <div class="custom-control custom-switch">
                                                            <input type="radio" class="custom-control-input"
                                                                id="acceptConveyorsMotorcycle" name="rolling" value="no" required/>
                                                            <label class="custom-control-label"
                                                                for="acceptConveyorsMotorcycle"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div> 
                                            <h5 class="mt-4 font-weight-bold text-navy-blue capitalize_text">
                                                <i class="icofont-warning-alt mr-2"></i>Informations complémentaires
                                            </h5>
                                            <div class="row">
                                                <div class="col-12">
                                                    <textarea name="informations"   class="form-control"
                                                        rows="7" placeholder="INFORMATIONS COMPLÉMENTAIRES"></textarea>
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-12 mb-3">
                                                    <h5 class="capitalize_text">Vous pouvez compléter votre demande avec des photos</h5>
                                                    <div class="cleint_feature_image__gallery">
                                                    </div>
                                                    <input class="d-none" name="image[]" type="file" multiple id="cleint_feature_image" accept="image/*,image/x-png,image/gif,image/jpeg,image/jpg" required>
                                                    <label for="cleint_feature_image" class="my-3 btn  website-bg-color hover-btn capitalize_text"><i class="icofont-arrow-up bg-light website-color rounded-circle"></i>Télécharger</label>
                                                </div>
                                            </div>
                                            

                                            {{-- IF User Is not Login Then Show This  --}}
                                            @guest
                                            {{-- <h3 class="mt-4">données </h3> --}}
                                            {{-- @if (session('errors'))
                                            <script>alert("{{ session('errors') }}")</script> 
                                            @endif --}}
                                            @include('frontend.info') 
                                            @endguest
                                            <div class="row">
                                                <div class="col">
                                                    <input type="checkbox" id="condition" name="terms"
                                                    value="yes" required>
                                                <label for="condition"> J'accepte les dispositions des
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
                                <button class="continue no-shadow btn-theme btn capitalize_text" type="submit">
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
                            <h4 class="font-weight-bold text-navy-blue capitalize_text">Décrivez votre demande</h4>
                            {{-- <span>Give a name to your listing:</span> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="bg-light-gray p-3 rounded mt-3">
                                        <form method="POST" action="{{ route('announcement.store') }}" class="needs-validation article-form" id="agri-food-form" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="category" value="{{ $category }}" />
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="article"> Article Name </label>
                                                        <input type="text" id="article" placeholder="Nom de l'article"
                                                            class="form-control" name="article_name" required/>
                                                    </div>
                                                </div> 
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="depart" style="position: relative" type="text" placeholder="Adresse de départ" class="form-control" name="depart" required/> 
                                                        <label for="depart"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input id="arrivee" style="position: relative" type="text" placeholder="Adresse d'arrivée" class="form-control" name="arrivee" required/>
                                                        <label for="arrivee"><i class="icofont-google-map" style="position: absolute; top: 12px; right: 25px;"></i></label>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for=""> Date de chargement </label>
                                                        <div class="date-wrapper">
                                                            <input type="date" placeholder="Date de chargement" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="form-control" name="loading_date" required/>
                                                            <span class="date-wrapper__icon">
                                                                <i class="icofont-ui-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Date de livraison</label>
                                                        <div class="date-wrapper">
                                                            <input type="date" placeholder="Date de livraison" min="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" class="form-control" name="delevary_date" required/>
                                                            <span class="date-wrapper__icon">
                                                                <i class="icofont-ui-calendar"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                            <br>
                                             
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="height" type="text" placeholder="Hauteur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="height"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="width" type="text" placeholder="Largeur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="width"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="length" type="text" placeholder="Longueur"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="length"><i
                                                                    class="icofont-box website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="weight" type="text" placeholder="Poids"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text website-color font-weight-bold" id="weight"> KG</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group input-group">
                                                        <input name="quantity" type="text" placeholder="Quantité"
                                                            class="form-control" required/>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="quantity"><i
                                                                    class="icofont-numbered website-color"></i></span>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>  
                                            <h5 class="mt-4 font-weight-bold text-navy-blue capitalize_text">
                                                <i class="icofont-warning-alt mr-2"></i>Informations complémentaires
                                              </h5>
                                            <div class="row">
                                                <div class="col-12">
                                                    <textarea name="informations"   class="form-control"
                                                        rows="7" placeholder="INFORMATIONS COMPLÉMENTAIRES"></textarea>
                                                </div>
                                            </div>
                                            
                                            <div class="row mt-4">
                                                <div class="col-12 mb-3">
                                                    <h5 class="capitalize_text">Vous pouvez compléter votre demande avec des photos</h5>
                                                    <div class="cleint_feature_image__gallery">
                                                    </div>
                                                    <input class="d-none" name="image[]" type="file" multiple id="cleint_feature_image" accept="image/*,image/x-png,image/gif,image/jpeg,image/jpg" required>
                                                    <label for="cleint_feature_image" class="my-3 btn  website-bg-color capitalize_text hover-btn"><i class="icofont-arrow-up bg-light website-color rounded-circle"></i>Télécharger</label>
                                                </div>
                                            </div>

                                            {{-- IF User Is not Login Then Show This  --}}
                                            @guest
                                            {{-- <h3 class="mt-4">données </h3> --}}
                                            {{-- @if (session('errors'))
                                            <script>alert("{{ session('errors') }}")</script> 
                                            @endif --}}
                                            @include('frontend.info') 
                                            @endguest
                                            <div class="row">
                                                <div class="col">
                                                    <input type="checkbox" id="condition" name="terms"
                                                    value="yes" required>
                                                <label for="condition"> J'accepte les dispositions des
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
                                <button class="continue no-shadow btn-theme btn capitalize_text" type="submit">
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
                            $('.optional').addClass('d-none'); 
                            $('#pwd').focus();

                        }
                        else{
                            $('#existing').removeClass('d-block');
                            $('.optional').removeClass('d-none');  
                        }
                    }
                });
            }); 


            $('#c_pwd').blur(function(){
                var pwd = $('#pwd').val();
                var c_pwd = $(this).val();
                if(c_pwd != pwd){
                    $('#password_error').removeClass('d-none');
                    $('#password_error').text('Password Does not Match');  
                    $('#pwd').focus();
                }
                else{
                    $('#password_error').addClass('d-none');
                } 
            });  



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


            // Multiple images preview in browser
            (function(){
                var imagesPreview = function(input, placeToInsertImagePreview) {

                if (input.files) {
                    var filesAmount = input.files.length;

                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }

                };

                $('#cleint_feature_image').on('change', function() {
                    imagesPreview(this, '.cleint_feature_image__gallery');
                });
            })()

        });

        
    </script>
 
        <!-- transport scripts -->
        <script src="{{ asset('assets/js/transport.js') }}"></script>
    @endsection

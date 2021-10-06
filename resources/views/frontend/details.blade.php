@extends('layouts.frontend')
@php
    $comments = \App\Models\Comment::where('announcement_id', $data->id)->get();
    $count = $comments->count();
@endphp
@section('title')
    {{ config('app.name') }} - Details
@endsection

@section('meta-description')
    Transportation Website
@endsection

@section('meta-keywords')
    transport, france, best affordable transport listing
@endsection

@section('css')
   <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
 
@endsection

@section('content')
     <!-- Main Body Content Start -->
     <main id="body-content" style="overflow-y: inherit">
        <!-- map view start -->
        <section class="map-view bg-light-gray">
          <div class="container">
            <div class="map-view-wrapper">
              <div class="row">
                <div class="col-lg-12 col-xl-12">
                  <div class="left">
                    <div
                      class="
                        d-flex
                        flex-wrap
                        justify-content-between
                        align-items-center
                      "
                    >
                      <a
                        href="{{ route('frontend.announcements') }}"
                        class="btn text-white bg-navy-blue mb-3"
                      >
                        <i class="icofont-arrow-left mr-2"></i>Retour
                      </a>
                      <div class="mb-3">
                        <span class="ml-3"><i class="icofont-eye-alt mr-2"></i> Vues: {{ $data->views }}</span>
                      </div>
                    </div>
                    <div class="map-content shadow-sm">
                      <div class="map-header">
                        <div class="icon"><i class="icofont-car-alt-3"></i></div>
                        <h3 class="d-inline">
                          {{-- {{ strtoupper($data->category) }} {{ $data->equipment ?? $data->model_name ?? $data->food_name ?? $data->animalName ?? $data->boatName }}  --}}
                          DÉMÉNAGEMENT
                          <br />
                          <small
                            >Référence : <strong>{{ $data->id }}</strong>
                            </small
                          >
                        </h3>
                        @auth 
                        @if(Auth::user()->role == 'mover')
                        @if(bidding(Auth::id(), $data->id))
                        <a style="margin-left: 10px;"
                        
                          class="btn text-white bg-navy-blue mb-3"
                        >
                        <i class="icofont-arrow-right mr-2"></i>Your bid = €{{ bidding(Auth::id(), $data->id)->price }}
                      </a>
                        @else 
                        <a style="margin-left: 10px;"
                        data-toggle="modal" data-target="#ModalExample"
                          class="btn text-white bg-navy-blue mb-3"
                        >
                        <i class="icofont-arrow-right mr-2"></i>Bid now
                      </a>
                        @endif
                      

                      <!-- Modal HTML Markup -->
                <div id="ModalExample" class="modal fade">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h4 class="modal-title text-xs-center">Bid Now</h4>
                          </div>
                          <div class="modal-body">
                              <form role="form" method="POST" action="{{ route('bidding.store') }}">
                                @csrf
                                <input type="hidden" name="announcement_id" value="{{ $data->id }}">
                                <input type="hidden" name="mover_id" value="{{ Auth::id() }}">
                                <input type="hidden" name="customer_id" value="{{ $data->user_id }}">
                                  <div class="form-group">
                                      <label class="control-label">Bidding price</label>
                                      <div>
                                          <input type="text" placeholder="Enter bidding price" class="form-control input-lg" name="price" value="">
                                      </div>
                                      @error('price')
                                        <small class="text-danger">{{ $message }}</small>
                                      @enderror
                                  </div>
                                  <div class="form-group">
                                      <label class="control-label">Your Notes to the customer</label>
                                      <div>
                                          <textarea name="notes" class="form-control input-lg" placeholder="Enter notes"></textarea>
                                          @error('notes')
                                          <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                      </div>
                                  </div>
                                 
                                  <div class="form-group">
                                      <div>
                                          <button type="submit" class="btn btn-info btn-block">Submit your bid</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                          <div class="modal-footer text-xs-center">
                              Don't have an account? <a href="{{ route('register') }}">Sign up »</a>
                          </div>
                      </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                        @endif
                        @endauth
                      </div>
                      <div id="map-canvas"></div>
                      <div class="row mt-4">
                        <div class="col-md-6">
                          <div class="chargement">
                            <h5><span><i class="icofont-location-pin"></i></span>{{ $data->loading_address }}</h5>
                            {{-- <small>entre le {{ $data->loading_start }} et le {{ $data->loading_end }}</small> --}}
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="livraison">
                            <h5><span><i class="icofont-location-pin"></i></span>{{ $data->delivery_address }}</h5>
                            {{-- <small> entre le {{ $data->delivery_start }} et le {{ $data->delivery_end }}</small> --}}
                          </div>
                        </div>
                        {{-- <div class="col-md-4">
                          <div class="livraison">
                            <h5><span><i class="icofont-map-pins"></i></span>{{ $data->delivery_address }}</h5>
                          </div>
                        </div> --}}
                      </div>
                    </div>
                    @if($data->category == 'household')
                    <div class="shadow-sm map-information d-flex">

                      <div class="row">
                        <div class="col-lg-6 order-1 order-lg-0" style="padding-top: 10px">
                          <h5>AN: <strong>{{ ucfirst($data->articleName) }}</strong></h5>
                            <h5>Length: <strong>{{ $data->length }}</strong></h5>
                            <h5>Width: <strong>{{ $data->width }}</strong></h5>
                            <h5>Height: <strong>{{ $data->height }}</strong></h5>
                            <h5>Weight: <strong>{{ $data->weight }}</strong></h5>
                            <p class="alert alert-warning">
                              Le client fait la mise en carton, le démontage des meubles
                              et la protection des objets fragiles. Le client fournira
                              des personnes de son entourage pour charger et décharger.
                              Le déménageur ne viendra qu'avec le camion et aidera à
                              charger et décharger au pied du camion.
                            </p>
                            <h6 class="font-weight-bold">Information supplémentaire</h6>
                            <p>
                              {{ $data->information ?? 'No informasion' }}
                            </p>
                        </div>
                        <div class="col-lg-6 order-0 order-lg-1" style="padding-top: 10px">                       
                          <div class="row">
                            <div class="col-6 col-sm-6">
                              <span class="">Postée le : {{ $data->created_at->format('d/M/Y') }}</span>
                            </div>
  
                            <div class="col-6 col-sm-6">
                              <span class="text-danger">Expire date : {{ $data->loading_start }}</span>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    @elseif($data->category == 'vehicle')

                    <div class="shadow-sm map-information">
                      <div class="row">
                        <div class="col-lg-6 order-1 order-lg-0" style="padding-top: 10px">
                          <h5>Vehicle Name: <strong>{{ ucfirst($data->vehicleName) }}</strong></h5>
                          <h5>Make: <strong>{{ $data->make }}</strong></h5>
                          <h5>Model: <strong>{{ $data->model }}</strong></h5>
                          <h5>Estimation Value: <strong>{{ $data->estimationValue }}</strong></h5>
                          <h5>Moving Vehicle: <strong>{{ $data->movingVehicle }}</strong></h5>
                          <h5>Conveyors: <strong>{{ $data->conveyors }}</strong></h5>
                          <p class="alert alert-warning">
                            Le client fait la mise en carton, le démontage des meubles
                            et la protection des objets fragiles. Le client fournira
                            des personnes de son entourage pour charger et décharger.
                            Le déménageur ne viendra qu'avec le camion et aidera à
                            charger et décharger au pied du camion.
                          </p>
                          <h6 class="font-weight-bold">Information supplémentaire</h6>
                          <p>
                            {{ $data->information ?? 'No informasion' }}
                          </p>
                        </div>
                        <div class="col-lg-6 order-0 order-lg-1" style="padding-top: 10px">                       
                          <div class="row">
                            <div class="col-6 col-sm-6">
                              <span class="">Postée le : {{ $data->created_at->format('d/M/Y') }}</span>
                            </div>

                            <div class="col-6 col-sm-6">
                              <span class="text-danger">Expire date : {{ $data->loading_start }}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    @elseif($data->category == 'motorcyclesport')
                    <div class="shadow-sm map-information">
                      <div class="row">
                        <div class="col-lg-6 order-1 order-lg-0" style="padding-top: 10px">
                          <h5>Vehicle Name: <strong>{{ ucfirst($data->vehicleName) }}</strong></h5>
                          <h5>Make: <strong>{{ $data->make }}</strong></h5>
                          <h5>Model: <strong>{{ $data->model }}</strong></h5>
                          <h5>Estimation Value: <strong>{{ $data->estimationValue }}</strong></h5>
                          <h5>Moving Vehicle: <strong>{{ $data->movingVehicle }}</strong></h5>
                          <h5>Conveyors: <strong>{{ $data->conveyors }}</strong></h5>
                          <p class="alert alert-warning">
                            Le client fait la mise en carton, le démontage des meubles
                            et la protection des objets fragiles. Le client fournira
                            des personnes de son entourage pour charger et décharger.
                            Le déménageur ne viendra qu'avec le camion et aidera à
                            charger et décharger au pied du camion.
                          </p>
                          <h6 class="font-weight-bold">Information supplémentaire</h6>
                          <p>
                            {{ $data->information ?? 'No informasion' }}
                          </p>
                        </div>
                        <div class="col-lg-6 order-0 order-lg-1" style="padding-top: 10px">                       
                          <div class="row">
                            <div class="col-6 col-sm-6">
                              <span class="">Postée le : {{ $data->created_at->format('d/M/Y') }}</span>
                            </div>

                            <div class="col-6 col-sm-6">
                              <span class="text-danger">Expire date : {{ $data->loading_start }}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    @elseif($data->category == 'boatvolimunoussport')
                    <div class="shadow-sm map-information">
                      <div class="row">
                        <div class="col-lg-6 order-1 order-lg-0" style="padding-top: 10px">
                          <h5>Boat Name: <strong>{{ ucfirst($data->boatName) }}</strong></h5>
                          <h5>Make: <strong>{{ $data->make }}</strong></h5>
                          <h5>Model: <strong>{{ $data->model }}</strong></h5>
                          <h5>Length: <strong>{{ $data->length }}</strong></h5>
                          <h5>Width: <strong>{{ $data->width }}</strong></h5>
                          <h5>Height: <strong>{{ $data->height }}</strong></h5>
                          <h5>Weight: <strong>{{ $data->weight }}</strong></h5>
                          <h5>Quantity: <strong>{{ $data->quantity }}</strong></h5>
                          <p class="alert alert-warning">
                            Le client fait la mise en carton, le démontage des meubles
                            et la protection des objets fragiles. Le client fournira
                            des personnes de son entourage pour charger et décharger.
                            Le déménageur ne viendra qu'avec le camion et aidera à
                            charger et décharger au pied du camion.
                          </p>
                          <h6 class="font-weight-bold">Information supplémentaire</h6>
                          <p>
                            {{ $data->information ?? 'No informasion' }}
                          </p>
                        </div>
                        <div class="col-lg-6 order-0 order-lg-1" style="padding-top: 10px">                       
                          <div class="row">
                            <div class="col-6 col-sm-6">
                              <span class="">Postée le : {{ $data->created_at->format('d/M/Y') }}</span>
                            </div>

                            <div class="col-6 col-sm-6">
                              <span class="text-danger">Expire date : {{ $data->loading_start }}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    @elseif($data->category == 'fragilegoods')
                    <div class="shadow-sm map-information">
                      <div class="row">
                        <div class="col-lg-6 order-1 order-lg-0" style="padding-top: 10px">
                          <h5>Article Name: <strong>{{ ucfirst($data->articleName) }}</strong></h5>
                          <h5>Length: <strong>{{ $data->length }}</strong></h5>
                          <h5>Width: <strong>{{ $data->width }}</strong></h5>
                          <h5>Height: <strong>{{ $data->height }}</strong></h5>
                          <h5>Weight: <strong>{{ $data->weight }}</strong></h5>
                          <p class="alert alert-warning">
                            Le client fait la mise en carton, le démontage des meubles
                            et la protection des objets fragiles. Le client fournira
                            des personnes de son entourage pour charger et décharger.
                            Le déménageur ne viendra qu'avec le camion et aidera à
                            charger et décharger au pied du camion.
                          </p>
                          <h6 class="font-weight-bold">Information supplémentaire</h6>
                          <p>
                            {{ $data->information ?? 'No informasion' }}
                          </p>
                        </div>
                        <div class="col-lg-6 order-0 order-lg-1" style="padding-top: 10px">                       
                          <div class="row">
                            <div class="col-6 col-sm-6">
                              <span class="">Postée le : {{ $data->created_at->format('d/M/Y') }}</span>
                            </div>

                            <div class="col-6 col-sm-6">
                              <span class="text-danger">Expire date : {{ $data->loading_start }}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    @elseif($data->category == 'package')
                    <div class="shadow-sm map-information">
                      <div class="row">
                        <div class="col-lg-6 order-1 order-lg-0" style="padding-top: 10px">
                          <h5>Article Name: <strong>{{ ucfirst($data->articleName) }}</strong></h5>
                          <h5>Length: <strong>{{ $data->length }}</strong></h5>
                          <h5>Width: <strong>{{ $data->width }}</strong></h5>
                          <h5>Height: <strong>{{ $data->height }}</strong></h5>
                          <h5>Weight: <strong>{{ $data->weight }}</strong></h5>
                          <p class="alert alert-warning">
                            Le client fait la mise en carton, le démontage des meubles
                            et la protection des objets fragiles. Le client fournira
                            des personnes de son entourage pour charger et décharger.
                            Le déménageur ne viendra qu'avec le camion et aidera à
                            charger et décharger au pied du camion.
                          </p>
                          <h6 class="font-weight-bold">Information supplémentaire</h6>
                          <p>
                            {{ $data->information ?? 'No informasion' }}
                          </p>
                        </div>
                        <div class="col-lg-6 order-0 order-lg-1" style="padding-top: 10px">                       
                            <div class="row">
                              <div class="col-6 col-sm-6">
                                <span class="">Postée le : {{ $data->created_at->format('d/M/Y') }}</span>
                              </div>
  
                              <div class="col-6 col-sm-6">
                                <span class="text-danger">Expire date : {{ $data->loading_start }}</span>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>

                    @elseif($data->category == 'pallet')
                    <div class="shadow-sm map-information">
                      <div class="row">
                        <div class="col-lg-6 order-1 order-lg-0" style="padding-top: 10px">
                          <h5>Article Name: <strong>{{ ucfirst($data->articleName) }}</strong></h5>
                          <h5>Dim: <strong>{{ $data->dim }}</strong></h5>
                          <h5>Width: <strong>{{ $data->width }}</strong></h5>
                          <h5>Height: <strong>{{ $data->height }}</strong></h5>
                          <h5>Weight: <strong>{{ $data->weight }}</strong></h5>
                          <p class="alert alert-warning">
                            Le client fait la mise en carton, le démontage des meubles
                            et la protection des objets fragiles. Le client fournira
                            des personnes de son entourage pour charger et décharger.
                            Le déménageur ne viendra qu'avec le camion et aidera à
                            charger et décharger au pied du camion.
                          </p>
                          <h6 class="font-weight-bold">Information supplémentaire</h6>
                          <p>
                            {{ $data->information ?? 'No informasion' }}
                          </p>
                        </div>
                        <div class="col-lg-6 order-0 order-lg-1" style="padding-top: 10px">                       
                          <div class="row">
                            <div class="col-6 col-sm-6">
                              <span class="">Postée le : {{ $data->created_at->format('d/M/Y') }}</span>
                            </div>

                            <div class="col-6 col-sm-6">
                              <span class="text-danger">Expire date : {{ $data->loading_start }}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    @elseif($data->category == 'animal')
                    <div class="shadow-sm map-information">
                      <div class="row">
                        <div class="col-lg-6 order-1 order-lg-0" style="padding-top: 10px">
                          <h5>Animal name: <strong>{{ ucfirst($data->animalBreed) }}</strong></h5>
                          <h5>Animal breed: <strong>{{ ucfirst($data->animalName) }}</strong></h5>
                          <h5>Special needs: <strong>{{ ucfirst($data->specialNeeds) }}</strong></h5>
                          <h5>Vaccination: <strong>{{ ucfirst($data->vaccinations) }}</strong></h5>
                          <h5>Width: <strong>{{ $data->width }}</strong></h5>
                          <h5>Height: <strong>{{ $data->height }}</strong></h5>
                          <h5>Weight: <strong>{{ $data->weight }}</strong></h5>
                          <p class="alert alert-warning">
                            Le client fait la mise en carton, le démontage des meubles
                            et la protection des objets fragiles. Le client fournira
                            des personnes de son entourage pour charger et décharger.
                            Le déménageur ne viendra qu'avec le camion et aidera à
                            charger et décharger au pied du camion.
                          </p>
                          <h6 class="font-weight-bold">Information supplémentaire</h6>
                          <p>
                            {{ $data->information ?? 'No informasion' }}
                          </p>
                        </div>
                        <div class="col-lg-6 order-0 order-lg-1" style="padding-top: 10px">                       
                          <div class="row">
                            <div class="col-6 col-sm-6">
                              <span class="">Postée le : {{ $data->created_at->format('d/M/Y') }}</span>
                            </div>

                            <div class="col-6 col-sm-6">
                              <span class="text-danger">Expire date : {{ $data->loading_start }}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    @elseif($data->category == 'agrifood')
                    <div class="shadow-sm map-information">
                      <div class="row">
                        <div class="col-lg-6 order-1 order-lg-0" style="padding-top: 10px">
                          <h5>Article name: <strong>{{ ucfirst($data->articleName) }}</strong></h5>
                          <h5>Weight: <strong>{{ $data->weight }}</strong></h5>
                          <h5>Quantity: <strong>{{ $data->quantity }}</strong></h5>
                          <p class="alert alert-warning">
                            Le client fait la mise en carton, le démontage des meubles
                            et la protection des objets fragiles. Le client fournira
                            des personnes de son entourage pour charger et décharger.
                            Le déménageur ne viendra qu'avec le camion et aidera à
                            charger et décharger au pied du camion.
                          </p>
                          <h6 class="font-weight-bold">Information supplémentaire</h6>
                          <p>
                            {{ $data->information ?? 'No informasion' }}
                          </p>
                        </div>
                        <div class="col-lg-6 order-0 order-lg-1" style="padding-top: 10px">                       
                          <div class="row">
                            <div class="col-6 col-sm-6">
                              <span class="">Postée le : {{ $data->created_at->format('d/M/Y') }}</span>
                            </div>

                            <div class="col-6 col-sm-6">
                              <span class="text-danger">Expire date : {{ $data->loading_start }}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    @elseif($data->category == 'commercialgoods')
                    <div class="shadow-sm map-information">
                      <div class="col-lg-6 order-1 order-lg-0" style="padding-top: 10px">
                        <h5>Article Name: <strong>{{ ucfirst($data->articleName) }}</strong></h5>
                        <h5>Length: <strong>{{ $data->length }}</strong></h5>
                        <h5>Width: <strong>{{ $data->width }}</strong></h5>
                        <h5>Height: <strong>{{ $data->height }}</strong></h5>
                        <h5>Weight: <strong>{{ $data->weight }}</strong></h5>
                        <h5>Quantity: <strong>{{ $data->quantity }}</strong></h5>
                        <p class="alert alert-warning">
                          Le client fait la mise en carton, le démontage des meubles
                          et la protection des objets fragiles. Le client fournira
                          des personnes de son entourage pour charger et décharger.
                          Le déménageur ne viendra qu'avec le camion et aidera à
                          charger et décharger au pied du camion.
                        </p>
                        <h6 class="font-weight-bold">Information supplémentaire</h6>
                        <p>
                          {{ $data->information ?? 'No informasion' }}
                        </p>
                      </div>
                      <div class="col-lg-6 order-0 order-lg-1" style="padding-top: 10px">                       
                        <div class="row">
                          <div class="col-6 col-sm-6">
                            <span class="">Postée le : {{ $data->created_at->format('d/M/Y') }}</span>
                          </div>

                          <div class="col-6 col-sm-6">
                            <span class="text-danger">Expire date : {{ $data->loading_start }}</span>
                          </div>
                        </div>
                      </div>
                    </div>

                    @elseif($data->category == 'miscellaneous')
                    <div class="shadow-sm map-information">
                      <div class="row">
                        <div class="col-lg-6 order-1 order-lg-0" style="padding-top: 10px">
                          <h5>Article Name: <strong>{{ ucfirst($data->articleName) }}</strong></h5>
                          <h5>Length: <strong>{{ $data->length }}</strong></h5>
                          <h5>Width: <strong>{{ $data->width }}</strong></h5>
                          <h5>Height: <strong>{{ $data->height }}</strong></h5>
                          <h5>Weight: <strong>{{ $data->weight }}</strong></h5>
                          <h5>Quantity: <strong>{{ $data->quantity }}</strong></h5>
                          <p class="alert alert-warning">
                            Le client fait la mise en carton, le démontage des meubles
                            et la protection des objets fragiles. Le client fournira
                            des personnes de son entourage pour charger et décharger.
                            Le déménageur ne viendra qu'avec le camion et aidera à
                            charger et décharger au pied du camion.
                          </p>
                          <h6 class="font-weight-bold">Information supplémentaire</h6>
                          <p>
                            {{ $data->information ?? 'No informasion' }}
                          </p>
                        </div>
                        <div class="col-lg-6 order-0 order-lg-1" style="padding-top: 10px">                       
                          <div class="row">
                            <div class="col-6 col-sm-6">
                              <span class="">Postée le : {{ $data->created_at->format('d/M/Y') }}</span>
                            </div>
  
                            <div class="col-6 col-sm-6">
                              <span class="text-danger">Expire date : {{ $data->loading_start }}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endif
                  </div>
                </div>
                 <div class="col-lg-12 col-xl-12">
                  <div class="right shadow-sm">
                    <div class="right-tab">
                      <span class="active" data-target="devis">Devis ({{ totalbid($data->id)->count() }})</span>
                      <span id="count" data-target="message">Message ({{ $count }})</span>
                    </div>
                    <div class="right-tab-body active" id="devis">
                      <p class="text-center">
                        Vous êtes une société de déménagement-transport, inscrivez-vous pour déposer des devis. C'est simple rapide et gratuit.
                      </p>
                   @guest
                   <div class="right-card">
                    <div>
                      <p>Vous êtes une société de déménagement-transport, inscrivez-vous pour déposer des devis. C'est simple rapide et gratuit.</p>
                    </div>
                    {{-- <div>
                      <a href="{{ route('frontend.moverReg') }}" class="btn bg-navy-blue text-white">
                        S'inscrire
                      </a>
                    </div> --}}
                    @foreach(totalbid($data->id) as $key => $bid)
                    <div class="bid-response">
                      <div class="rating">
                        <i class="icofont-car-alt-3"></i>
                        <div>
                          <span>{{ $bid->getmover->username }}</span>
                          <div class="star">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                          </div>
                        </div>
                      </div>
                      <div>
                        <h5>
                          <strong>{{ $bid->price }} €</strong> <br /><small
                            ><a style="cursor: pointer" data-toggle="modal" data-target="#DetailModal{{ $bid->id }}">Voir détails</a></small
                          >
                        </h5>
                      </div>
                      <div>
                        @auth
                        @if($data->user_id == Auth::id())
                        @if($bid->status == 'pending')
                        <a href="{{ route('bid.accept', $bid->id) }}"><span class="text-success">Accept</span></a>
                        @elseif($bid->status == 'rejected')
                        <a href="javascript:void(0);"><span class="text-danger">Rejected</span></a>
                        @else 
                        <a href="javascript:void(0);"><span class="text-success">Accepted</span></a>
                        @endif
                        @endif
                        @endauth
                      </div>
                              <!-- Modal HTML Markup -->
              <div id="DetailModal{{ $bid->id }}" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-xs-center">Bid Now</h4>
                        </div>
                        <div class="modal-body">
                            <p>
                              Price : € {{ $bid->price }}
                            </p>
                            <p>
                               Notes from mover : {{ $bid->notes }}
                            </p>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
            </div>
            @endforeach
                  </div>
                   
                      @endguest
                  @auth
                  @foreach(totalbid($data->id) as $key => $bid)
                  <div class="bid-response">
                    <div class="rating">
                      <i class="icofont-car-alt-3"></i>
                      <div>
                        <span>{{ $bid->getmover->username }}</span>
                        <div class="star">
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                          <i class="icofont-star"></i>
                        </div>
                      </div>
                    </div>
                    <div>
                      <h5>
                        <strong>{{ $bid->price }} €</strong> <br /><small
                          ><a style="cursor: pointer" data-toggle="modal" data-target="#DetailModal{{ $bid->id }}">Voir détails</a></small
                        >
                      </h5>
                    </div>
                    <div>
                      @auth
                      @if($data->user_id == Auth::id())
                      @if($bid->status == 'pending')
                      <a href="{{ route('bid.accept', $bid->id) }}"><span class="text-success">Accept</span></a>
                      @elseif($bid->status == 'rejected')
                      <a href="javascript:void(0);"><span class="text-danger">Rejected</span></a>
                      @else 
                      <a href="javascript:void(0);"><span class="text-success">Accepted</span></a>
                      @endif
                      @endif
                      @endauth
                    </div>
                            <!-- Modal HTML Markup -->
            <div id="DetailModal{{ $bid->id }}" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h4 class="modal-title text-xs-center">Bid Now</h4>
                      </div>
                      <div class="modal-body">
                          <p>
                            Price : € {{ $bid->price }}
                          </p>
                          <p>
                             Notes from mover : {{ $bid->notes }}
                          </p>
                      </div>
                  </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div>
          @endforeach
                  @endauth
                    </div>
                    <div class="right-tab-body" id="message">
                      @guest
                      <p class="text-center">
                        Vous êtes une société de déménagement-transport, inscrivez-vous pour déposer des devis. C'est simple rapide et gratuit.
                      </p>
                      {{-- <div class="right-card">
                        <div>
                          <h5>Pas encore inscrit ?</h5>
                          <p>L'inscription est rapide et gratuite</p>
                        </div>
                        <div>
                          <button class="btn bg-navy-blue text-white">
                            S'inscrire
                          </button>
                        </div>
                      </div> --}}
                      <div id="msg" class="message-wrapper">
                        @include('comments')
                       </div>
                      {{-- <div class="right-card">
                        <div>
                          <h5>Pas encore inscrit ?</h5>
                          <p>L'inscription est rapide et gratuite</p>
                        </div>
                        <div>
                          <button class="btn bg-navy-blue text-white">
                            S'inscrire
                          </button>
                        </div>
                      </div> --}}
                      @endguest
                      @auth 
                      <div id="msg" class="message-wrapper">
                       @include('comments')
                      </div>
                      
                        <div class="input-group">
                          <input
                            id="enter"
                            type="text"
                            class="form-control"
                            placeholder="message"
                            name="comment"
                            required
                          />
                 
                          <div class="input-group-append">
                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                            <input type="hidden" name="announcement_id" value="{{ $data->id }}">
                            <button type="button" id="commentSubmit" class="input-group-text">
                              <i class="icofont-paper-plane"></i>
                            </button>
                          </div>
                        </div>
                        <div class="p-3">
                          <small class="text-danger" id="error"></small>
                        </div>
                      @endauth
                    </div>
                  </div>
                </div> 
              </div>
            </div>
          </div>
        </section>
        <!-- map view end -->
  
@endsection

@section('js')
<script>
  $(document).ready(function() {



    $("#enter").keydown(function(event){ 
    var keyCode = (event.keyCode ? event.keyCode : event.which);   
    if (keyCode == 13) {
        $('#commentSubmit').trigger('click');
    }
    });
    $("#commentSubmit").on("click", function() {
      

      let comment = $("input[name=comment]").val();
      let user_id = $("input[name=user_id]").val();
      let announcement_id = $("input[name=announcement_id]").val();

      if(comment == '')
      {
        $("#error").html('Please write a message to send');
        return false;
      }

      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({

          url: "{{ route('comment.post') }}",
          type: "POST", 
          data:{
              comment : comment, 
              user_id : user_id,
              announcement_id : announcement_id,
          },
          success: function(data)
          {
            $("#msg").html(data.response);
            let push = "Message (" + data.count + ")";
            $("#count").html(push);
            $("input[name=comment]").val('');
          }

        })

    });
  });
</script>



<script>
  @if(count($errors) > 0 )
   $(document).ready(function(){
     $("#ModalExample").modal('show');
   });
  @endif
</script>
    <!-- google map -->
    <script>
        function initMap() {
          const directionsService = new google.maps.DirectionsService()
          const directionsRenderer = new google.maps.DirectionsRenderer()
          const map = new google.maps.Map(document.getElementById('map-canvas'), {
            zoom: 7,
            center: { lat: 41.85, lng: -87.65 },
          })
          directionsRenderer.setMap(map)
  
          calculateAndDisplayRoute(directionsService, directionsRenderer)
        }
  
        function calculateAndDisplayRoute(directionsService, directionsRenderer) {
          directionsService.route(
            {
              origin: {
                query: '{{ $data->loading_address }}',
              },
              destination: {
                query: '{{ $data->delivery_address }}',
              },
              travelMode: google.maps.TravelMode.DRIVING,
            },
            (response, status) => {
              if (status === 'OK') {
                directionsRenderer.setDirections(response)
              } else {
                console.log(status)
              }
            }
          )
        }
  
        //right body tab
        const tabButtons = document.querySelectorAll('.right-tab span')
        const tabBody = document.querySelectorAll('.right-tab-body')
  
        tabButtons.forEach((tabButton) => {
          tabButton.addEventListener('click', function () {
            const idName = tabButton.getAttribute('data-target')
            tabButtons.forEach((tabButtonItem) => {
              tabButtonItem.classList.remove('active')
              this.classList.add('active')
            })
            tabBody.forEach((tabBodyItem) => {
              tabBodyItem.classList.remove('active')
              document.getElementById(idName).classList.add('active')
            })
          })
        })
      </script>
       <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCYYbVzj3y4aUpnJCDZ756CrHJXVs93U4&callback=initMap&libraries=&v=weekly"
        async
      ></script> 
@endsection
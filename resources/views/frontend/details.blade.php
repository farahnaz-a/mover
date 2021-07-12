@extends('layouts.frontend')

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
                <div class="col-lg-7 col-xl-8">
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
                        <span class="ml-3"
                          ><i class="icofont-eye-alt mr-2"></i> Vues: 25</span
                        >
                        <span class="ml-3">Postée le : {{ $data->created_at->format('d/M/Y') }}</span>
                        <span class="text-danger ml-3">Expire date : {{ $data->loading_start }}</span>
                      </div>
                    </div>
                    <div class="map-content shadow-sm">
                      <div class="map-header">
                        <div class="icon"><i class="icofont-car-alt-3"></i></div>
                        <h3>
                          {{ strtoupper($data->category) }} {{ $data->equipment ?? $data->model_name ?? $data->food_name ?? $data->animalName ?? $data->boatName }} <br /><small
                            >Référence : {{ $data->id }}</small
                          >
                        </h3>
                      </div>
                      <div id="map-canvas"></div>
                      <div class="row mt-4">
                        <div class="col-md-6">
                          <div class="chargement">
                            <h5><span>a</span>{{ $data->loading_address }}</h5>
                            <small>entre le {{ $data->loading_start }} et le {{ $data->loading_end }}</small>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="livraison">
                            <h5><span>b</span>{{ $data->delivery_address }}</h5>
                            <small> entre le {{ $data->delivery_start }} et le {{ $data->delivery_end }}</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    @if($data->category == 'household')
                    <div class="shadow-sm map-information">
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
                    @elseif($data->category == 'vehicle')
                    <div class="shadow-sm map-information">
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
                    @elseif($data->category == 'motorcyclesport')
                    <div class="shadow-sm map-information">
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
                    @elseif($data->category == 'boatvolimunoussport')
                    <div class="shadow-sm map-information">
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
                    @elseif($data->category == 'fragilegoods')
                    <div class="shadow-sm map-information">
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
                    @elseif($data->category == 'package')
                    <div class="shadow-sm map-information">
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
                    @elseif($data->category == 'pallet')
                    <div class="shadow-sm map-information">
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
                    @elseif($data->category == 'animal')
                    <div class="shadow-sm map-information">
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
                    @elseif($data->category == 'agrifood')
                    <div class="shadow-sm map-information">
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
                    @elseif($data->category == 'commercialgoods')
                    <div class="shadow-sm map-information">
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
                    @elseif($data->category == 'miscellaneous')
                    <div class="shadow-sm map-information">
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
                    @endif
                  </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                  <div class="right shadow-sm">
                    <div class="right-tab">
                      <span class="active" data-target="devis">Devis (1)</span>
                      <span data-target="message">Message (1)</span>
                    </div>
                    <div class="right-tab-body active" id="devis">
                      <p class="text-center">
                        Je suis un transporteur, déménageur et je souhaite
                        proposer mes services.
                      </p>
                   @guest
                   <div class="right-card">
                    <div>
                      <h5>Pas encore inscrit ?</h5>
                      <p>L'inscription est rapide et gratuite</p>
                    </div>
                    <div>
                      <button class="btn bg-navy-blue text-white">
                        S'inscrire
                      </button>
                    </div>
                  </div>
                   
                      <div class="right-card">
                        <div>
                          <h5>Pas encore inscrit ?</h5>
                          <p>L'inscription est rapide et gratuite</p>
                        </div>
                        <div>
                          <button class="btn bg-navy-blue text-white">
                            S'inscrire
                          </button>
                        </div>
                      </div>
                      @endguest
                      <div class="bid-response">
                        <div class="rating">
                          <i class="icofont-car-alt-3"></i>
                          <div>
                            <span>SER75</span>
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
                            <strong>350 $</strong> <br /><small
                              ><a href="#">Voir détails</a></small
                            >
                          </h5>
                        </div>
                        <div>
                          <span class="text-danger">expire</span>
                        </div>
                      </div>
                    </div>
                    <div class="right-tab-body" id="message">
                      <p class="text-center">
                        Se connecter pour voir les messages.
                      </p>
                      @guest
                      <div class="right-card">
                        <div>
                          <h5>Pas encore inscrit ?</h5>
                          <p>L'inscription est rapide et gratuite</p>
                        </div>
                        <div>
                          <button class="btn bg-navy-blue text-white">
                            S'inscrire
                          </button>
                        </div>
                      </div>
                      <div class="right-card">
                        <div>
                          <h5>Pas encore inscrit ?</h5>
                          <p>L'inscription est rapide et gratuite</p>
                        </div>
                        <div>
                          <button class="btn bg-navy-blue text-white">
                            S'inscrire
                          </button>
                        </div>
                      </div>
                      @endguest
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
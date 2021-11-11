@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} - Demande en cours
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
        <!-- map banner start -->
        <section class="map" style="background-image: url({{ asset('ban.png') }})">
            <div class="container">
                <div class="map-wrapper">
                    <div class="row">
                        {{-- <div class="col-md-6">
                  <div class="left">
                    <h1>TROUVEZ DES CHARGEMENTS AUGMENTEZ VOS REVENUS</h1>
                    <h4>BOURSE DE FRET GRATUITE</h4>
                    <button class="btn btn-lg btn-dark">je m'inscris</button>
                  </div>
                </div> --}}
                        <div class="col-md-12">
                            <div class="right">
                                <ul style="background: none !important">
                                    <li style="color: #06163a !important;">
                                        <i style="color: #5fc2ba !important;" class="icofont-tick-mark"></i>
                                        Déposez gratuitement votre demande et sans engagement
                                    </li>
                                    <li style="color: #06163a !important;"><i style="color: #5fc2ba !important;"
                                            class="icofont-tick-mark"></i>Recevez et comparez les offres en toute
                                        transparence</li>
                                    <li style="color: #06163a !important;"><i class="icofont-tick-mark"></i>Validez votre
                                        devis et économisez de l’argent</li>
                                    <li style="color: #06163a !important;">
                                        <i style="color: #5fc2ba !important;" class="icofont-tick-mark"></i>Déménagez en
                                        toute sérénité avec des déménageurs agrées
                                    </li>
                                    <li style="color: #06163a !important;">
                                        <i style="color: #5fc2ba !important;" class="icofont-tick-mark"></i>Profitez d’un
                                        large réseau de déménageur européen
                                    </li>
                                </ul>
                                <button class="btn-theme bg-navy-blue"
                                    style="margin-left: 20px; background: #5fc2ba ">DEMANDEZ VOTRE DEVIS</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- map banner end -->

        <!-- steps start -->
        {{-- <div class="steps">
          <div class="container">
            <div class="steps-wrapper">
              <div class="row">
                <div class="col-md-4">
                  <div class="step-item">
                    <span class="number">1</span>
                    <p>
                      TROUVEZ DES CLIENTS<br /><small
                        >Gratuitement et facilement</small
                      >
                    </p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="step-item">
                    <span class="number">2</span>
                    <p>
                      PROPOSEZ VOTRE DEVIS<br /><small>Depuis n'importe où</small>
                    </p>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="step-item">
                    <span class="number">3</span>
                    <p>
                      AUGMENTEZ VOTRE CHIFFRE D’AFFAIRES<br /><small
                        >Pérennisez votre activité avec FretBay</small
                      >
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
        <!-- steps end -->
        <section class="bg-light-theme wide-tb-100 pb-0" id="comment">
            <div class="container pos-rel">
                <div class="row">
                    <!-- Heading Main -->
                    <!-- Heading Main -->

                    @foreach ($services as $key => $service)
                        <div class="col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="
                          @if ($key==0)
                            0.1s
                        @else
                            0.{{ $key * 2 }}s
                            @endif">
                            <!-- Icon Box 2 -->
                            <a href="javascript:void();">
                                <div class="icon-box-4 h-100">
                                    @if ($key == 0)
                                        <i style="color: #5fc2ba;font-size:3rem !important" class="icofont-responsive"></i>
                                    @elseif($key == 1)
                                        <i style="color: #5fc2ba;font-size:3rem !important" class="icofont-tick-boxed"></i>
                                    @elseif($key == 2)
                                        <i style="color: #5fc2ba;font-size:3rem !important" class="icofont-license"></i>
                                    @endif
                                    {{-- <img src="{{ asset('uploads/services') }}/{{ $service->image }}" alt=""> --}}
                                    {{-- <h4 class="h4-md mb-3"></h4> --}}
                                    <p style="color: #06163a; text-transform:uppercase"> <span
                                            style="color:#5fc2ba; font-weight:bold;">{{ $service->title }}</span>
                                        {{ $service->description }}</p>
                                </div>
                            </a>
                            <!-- Icon Box -->
                        </div>
                    @endforeach


                </div>

            </div>
        </section>
        <!-- map lists start -->
        <section class="map-body border-top bg-light-gray">
            <div class="container p-0" >
                <div class="map-body-wrapper">
                    <div class="filter">
                        <div class="filter-icon float-left btn bg-navy-blue d-block d-xl-none">
                            <i class="icofont-settings mr-2"></i> Filter
                        </div>
                        <h5 style="margin-left: 20px;">CATÉGORIE</h5>
                        <div class="filter-checks">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="demenagement"
                                    onclick='window.location.assign("/announce/déménagement")' />
                                <label class="form-check-label" for="demenagement">
                                    <i class="icofont-building-alt"></i>DÉMÉNAGEMENT
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="truckrental"
                                    onclick='window.location.assign("/announce/chauffeur")' />
                                <label class="form-check-label" for="truckrental">
                                    <i class="icofont-fast-delivery"></i>LOCATION CAMION AVEC CHAUFFEUR
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="meubles"
                                    onclick='window.location.assign("/announce/meubles")' />
                                <label class="form-check-label" for="meubles">
                                    <i class="icofont-bed"></i>MEUBLES
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="electromenager"
                                    onclick='window.location.assign("/announce/électroménager")' />
                                <label class="form-check-label" for="electromenager">
                                    <i class="icofont-refrigerator"></i>ÉLECTROMÉNAGER
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="colis"
                                    onclick='window.location.assign("/announce/colis")' />
                                <label class="form-check-label" for="colis">
                                    <i class="icofont-box"></i>COLIS
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="Pallet"
                                    onclick='window.location.assign("/announce/palette")' />
                                <label class="form-check-label" for="Pallet">
                                    <i class="icofont-truck-alt"></i>PALETTE
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="motos"
                                    onclick='window.location.assign("/announce/motos")' />
                                <label class="form-check-label" for="motos">
                                    <i class="icofont-motor-biker"></i>MOTOS
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="voitures"
                                    onclick='window.location.assign("/announce/voitures")' />
                                <label class="form-check-label" for="voitures">
                                    <i class="icofont-car-alt-3"></i>VOITURES
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="divers"
                                    onclick='window.location.assign("/announce/divers")' />
                                <label class="form-check-label" for="divers">
                                    <i class="icofont-search-2"></i>DIVERS
                                </label>
                            </div>

                        </div>
                        <div class="shadow-sm bg-white">
                            <div class="close-filter">
                                Affiner la recherche <i class="icofont-close"></i>
                            </div>
                            <form action="{{ route('search.ann') }}" method="GET" style="padding-right: 15px;">
                                <div class="filter-inputs">
                                    <div class="filter-input">
                                        <div class="filter-point">
                                            <span style="background: #5fc2ba !important;">d</span>
                                            <input placeholder="Ville, Code postal, Région, Pays" type="text"
                                                class="form-control" name="from" />
                                        </div>
                                    </div>
                                    <div class="filter-input">
                                        <div class="filter-point">
                                            <span>a</span>
                                            <input placeholder="Ville, Code postal, Région, Pays" type="text"
                                                class="form-control" name="to" />
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="p-3">
                       <input type="date" class="form-control" name="delivery_date"/>
                    </div> --}}
                                <div class="text-center py-3 border-top">
                                    <button type="submit" class="btn text-white bg-navy-blue">VALIDER</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="map-listing" style="width: calc(100% - 150px);">

                    {{-- <nav>
                  <ul class="pagination pagination-sm justify-content-end">
                    <li class="page-item active">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item disabled">
                      <span class="page-link">...</span>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">63</a>
                    </li>
                  </ul>
                </nav> --}}
                <div style="display: none" id="map-canvas"></div>
                    <div class="row">
                        <div class="col-md-3">
                            <h5> Catégorie </h5>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-3">
                                    <h5>Départ</h5>
                                </div>
                                <div class="col-3">
                                    <h5>Arrivée</h5>
                                </div>
                                <div class="col-2" style="margin-left: -8px;">
                                    <h5>Distance</h5>
                                </div>
                                <div class="col-1"  style="margin-left: -8px;">
                                    <h5>Devis</h5>
                                </div>
                                <div class="col-3"  style="margin-left: 10px;">
                                    <h5>Date</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <ul>
                        @foreach ($announcements as $item)
                            <li class="shadow-sm">
                                <div class="row">
                                    <div class="col-md-3">
                                        @if ($item->category == 'déménagement')

                                            <h5>
                                                <a href="{{ route('announcement.details', $item->id) }}">
                                                    <i style="color: #5fc2ba !important"
                                                        class="icofont-building-alt cat_icon"></i>{{ ucfirst($item->category) }}
                                                    {{-- <sup>3</sup> --}}
                                                </a>
                                            </h5>
                                        @elseif($item->category == 'chauffeur')
                                            <div class="nom">
                                                <h5>
                                                    <a href="{{ route('announcement.details', $item->id) }}"><i
                                                            style="color: #5fc2ba !important"
                                                            class="icofont-fast-delivery cat_icon"></i>{{ ucfirst($item->category) }}
                                                        {{-- <sup>3</sup> --}}
                                                    </a>
                                                </h5>
                                            </div>
                                        @elseif($item->category == 'meubles')
                                            <div class="nom">
                                                <h5>
                                                    <a href="{{ route('announcement.details', $item->id) }}"><i
                                                            style="color: #5fc2ba !important"
                                                            class="icofont-bed cat_icon"></i>{{ ucfirst($item->category) }}
                                                        {{-- <sup>3</sup> --}}
                                                    </a>
                                                </h5>

                                            </div>
                                        @elseif($item->category == 'électroménager')
                                            <div class="nom">
                                                <h5>
                                                    <a href="{{ route('announcement.details', $item->id) }}">
                                                        <i style="color: #5fc2ba !important"
                                                            class="icofont-refrigerator cat_icon"></i>{{ ucfirst($item->category) }}
                                                        {{-- <sup>3</sup> --}}
                                                    </a>
                                                </h5>

                                            </div>
                                        @elseif($item->category == 'colis')
                                            <div class="nom">
                                                <h5>
                                                    <a href="{{ route('announcement.details', $item->id) }}"><i
                                                            style="color: #5fc2ba !important"
                                                            class="icofont-box cat_icon"></i>{{ ucfirst($item->category) }}
                                                        {{-- <sup>3</sup> --}}
                                                    </a>
                                                </h5>

                                            </div>
                                        @elseif($item->category == 'palette')
                                            <div class="nom">
                                                <h5>
                                                    <a href="{{ route('announcement.details', $item->id) }}"><i
                                                            style="color: #5fc2ba !important"
                                                            class="icofont-truck-alt cat_icon"></i>{{ ucfirst($item->category) }}
                                                        {{-- <sup>3</sup> --}}
                                                    </a>
                                                </h5>
                                            </div>
                                        @elseif($item->category == 'motos')
                                            <div class="nom">
                                                <h5>
                                                    <a href="{{ route('announcement.details', $item->id) }}"><i
                                                            style="color: #5fc2ba !important"
                                                            class="icofont-motor-biker cat_icon"></i>{{ ucfirst($item->category) }}
                                                        {{-- <sup>3</sup> --}}
                                                    </a>
                                                </h5>
                                            </div>
                                        @elseif($item->category == 'voitures')
                                            <div class="nom">
                                                <h5>
                                                    <a href="{{ route('announcement.details', $item->id) }}"><i
                                                            style="color: #5fc2ba !important"
                                                            class="icofont-car-alt-3 cat_icon"></i>{{ ucfirst($item->category) }}
                                                        {{-- <sup>3</sup> --}}
                                                    </a>
                                                </h5>
                                            </div>
                                        @elseif($item->category == 'divers')
                                            <div class="nom">
                                                <h5>
                                                    <a href="{{ route('announcement.details', $item->id) }}"><i
                                                            style="color: #5fc2ba !important"
                                                            class="icofont-search-2 cat_icon"></i>{{ ucfirst($item->category) }}
                                                        {{-- <sup>3</sup> --}}
                                                    </a>
                                                </h5>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-3">
                                                <p> {{ ucfirst($item->depart) }}</p>
                                            </div>
                                            <div class="col-3">
                                                <p> {{ ucfirst($item->arrivee) }}</p>
                                            </div>
                                            <div class="col-2">
                                                 <p data-id-{{ $item->id }} class="getDataID" id="distance{{ $item->id }}"> </p>
                                            </div>
                                            <div class="col-1">
                                                <p>{{ totalbid($item->id)->count() }}</p>
                                            </div>
                                            <div class="col-3">

                                                <span class="d-block text-nowrap"> Depuis
                                                    {{ $item->created_at->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <script>
    
                                function initMap() {
                                    const directionsService = new google.maps.DirectionsService()
                                    const directionsRenderer = new google.maps.DirectionsRenderer()
                                    const map = new google.maps.Map(document.getElementById('map-canvas'), {
                                        zoom: 7,
                                        center: {
                                            lat: 41.85,
                                            lng: -87.65
                                        },
                                    })
                                    directionsRenderer.setMap(map)
                                    
                                    calculateAndDisplayRoute(directionsService, directionsRenderer)
                                }
                                
                                function calculateAndDisplayRoute(directionsService, directionsRenderer) {
                                    directionsService.route({
                                            origin: {
                                                query: '{{ $item->depart }}',
                                                
                                            },
                                            destination: {
                                                query: '{{ $item->arrivee }}',
                                            },
                                            travelMode: google.maps.TravelMode.DRIVING,
                                        },
                                        (response, status) => {
                                            let myId = {{ $item->id }}; 
                                            if (status === 'OK') {
                                                directionsRenderer.setDirections(response)
                                                let distance = response.routes[0].legs[0].distance.text
                                                //  $('#distance').append(distance); 
                                                
                                                console.log(myId)
                            
                                                $('.getDataID'+{{ $item->id }}).text(distance); 
                                                console.log(distance) 
                                            } else {
                                                // $('#distance').append('Map Not Found');
                                                // $('#distance'+{{ $item->id }}).text('not found'); 
                                                // console.log(status)
                                                console.log(myId)
                                            }
                                        }
                                    )
                                }
                                
                               
                            </script>
                        @endforeach
                    </ul>
                    {{-- <nav>
                  <ul class="pagination pagination-sm justify-content-end">
                    <li class="page-item active">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item disabled">
                      <span class="page-link">...</span>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">63</a>
                    </li>
                  </ul>
                </nav> --}}
                </div>
            </div>
            </div>
        </section>
        <!-- map lists end -->
    @endsection

    @section('js') 
    {{-- <script> 
        function calculateAndDisplayRoute(directionsService, directionsRenderer) {
        directionsService.route(
          {
            origin: {
              query: 'Chattogram',
            },
            destination: {
              query: 'Narshindi',
            },
            travelMode: google.maps.TravelMode.DRIVING,
          },
          (response, status) => {
            if (status === 'OK') {
              directionsRenderer.setDirections(response)
              const directionsData = response.routes[0].legs[0] // Get data about the mapped route
              if (!directionsData) {
                window.alert('Directions request failed')
                return
              } else {
                console.log(
                  Driving distance is ${directionsData.distance.text} ${directionsData.duration.text}
                )
              }
            } else {
              console.log(status)
            }
          }
        )
      }

     
      const directionsData = response.routes[0].legs[0] // Get data about the mapped route
            if (!directionsData) {
            window.alert('Directions request failed')
            return
            } else {
            console.log(
                Driving distance is ${directionsData.distance.text} ${directionsData.duration.text}
            )
    //         }

    </script> --}}
    @endsection
@push('js')

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCYYbVzj3y4aUpnJCDZ756CrHJXVs93U4&callback=initMap&libraries=&v=weekly"
async></script>
@endpush
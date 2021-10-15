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
                {{--  <div class="col-md-6">
                  <div class="left">
                    <h1>TROUVEZ DES CHARGEMENTS AUGMENTEZ VOS REVENUS</h1>
                    <h4>BOURSE DE FRET GRATUITE</h4>
                    <button class="btn btn-lg btn-dark">je m'inscris</button>
                  </div>
                </div>  --}} 
                <div class="col-md-12">
                  <div class="right">
                    <ul style="background: none !important">
                      <li style="color: #06163a !important;">
                      <i style="color: #5fc2ba !important;" class="icofont-tick-mark"></i>
                      Déposez gratuitement votre demande et sans engagement
                     </li>
                      <li style="color: #06163a !important;"><i style="color: #5fc2ba !important;"class="icofont-tick-mark"></i>Recevez et comparez les offres en toute transparence</li>
                      <li style="color: #06163a !important;"><i class="icofont-tick-mark"></i>Validez votre devis et économisez de l’argent</li>
                      <li style="color: #06163a !important;">
                        <i style="color: #5fc2ba !important;" class="icofont-tick-mark"></i>Déménagez en toute sérénité avec des déménageurs agrées
                      </li>
                      <li style="color: #06163a !important;">
                        <i style="color: #5fc2ba !important;"class="icofont-tick-mark"></i>Profitez d’un large réseau de déménageur européen
                      </li>
                    </ul>
                    <button class="btn-theme bg-navy-blue" style="margin-left: 20px; background: #5fc2ba ">DEMANDEZ VOTRE DEVIS</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- map banner end -->
  
        <!-- steps start -->
        {{--  <div class="steps">
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
        </div>  --}}
        <!-- steps end -->
        <section class="bg-light-theme wide-tb-100 pb-0" id="comment">
          <div class="container pos-rel">
            <div class="row">
              <!-- Heading Main -->
              <!-- Heading Main -->
    
               @foreach ($services as $key => $service)
               <div class="col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="
                @if($key == 0)
                0.1s 
                @else 
                0.{{ $key * 2 }}s
                @endif">            
                <!-- Icon Box 2 -->
                <a href="javascript:void();">
                  <div class="icon-box-4 h-100">
                    @if($key == 0)
                    <i style="color: #5fc2ba;font-size:3rem !important" class="icofont-responsive"></i>
                    @elseif($key == 1)
                    <i style="color: #5fc2ba;font-size:3rem !important" class="icofont-tick-boxed"></i>
                    @elseif($key == 2)
                    <i style="color: #5fc2ba;font-size:3rem !important" class="icofont-license"></i>
                    @endif
                    {{-- <img src="{{ asset('uploads/services') }}/{{ $service->image }}" alt=""> --}}
                    {{-- <h4 class="h4-md mb-3"></h4> --}}
                    <p style="color: #06163a; text-transform:uppercase"> <span style="color:#5fc2ba; font-weight:bold;">{{ $service->title }}</span> {{ $service->description }}</p>
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
          <div class="container">
            <div class="map-body-wrapper">
              <div class="filter">
                  <div
                  class="filter-icon float-left btn bg-navy-blue d-block d-xl-none">
                  <i class="icofont-settings mr-2"></i> Filter
                </div>
                <h5 style="margin-left: 20px;">CATÉGORIE</h5>
                  <div class="filter-checks">

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="demenagement" onclick='window.location.assign("/announce/household")'/>
                      <label class="form-check-label" for="demenagement">
                        <i class="icofont-building-alt"></i>DÉMÉNAGEMENT
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="truckrental" onclick='window.location.assign("/announce/truckrental")'/>
                      <label class="form-check-label" for="truckrental">
                        <i class="icofont-truck-loaded"></i>LOCATION CAMION AVEC CHAUFFEUR
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="meubles" onclick='window.location.assign("/announce/meubles")'/>
                      <label class="form-check-label" for="meubles">
                        <i class="icofont-bed"></i>MEUBLES
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="electromenager" onclick='window.location.assign("/announce/electromenager")'/>
                      <label class="form-check-label" for="electromenager">
                        <i class="icofont-refrigerator"></i>ÉLECTROMÉNAGER
                      </label>
                    </div>
                   
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="colis" onclick='window.location.assign("/announce/colis")'/>
                      <label class="form-check-label" for="colis">
                        <i class="icofont-box"></i>COLIS
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Pallet" onclick='window.location.assign("/announce/pallet")'/>
                      <label class="form-check-label" for="Pallet">
                        <i class="icofont-truck-alt"></i>PALETTE
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="motos" onclick='window.location.assign("/announce/motos")'/>
                      <label class="form-check-label" for="motos">
                        <i class="icofont-motor-biker"></i>MOTOS
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="voitures" onclick='window.location.assign("/announce/voitures")'/>
                      <label class="form-check-label" for="voitures">
                        <i class="icofont-car-alt-3"></i>VOITURES
                      </label>
                    </div>

                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="divers" onclick='window.location.assign("/announce/divers")'/>
                      <label class="form-check-label" for="divers">
                        <i class="icofont-search-2"></i>DIVERS
                      </label>
                    </div>

                  </div>
                  <div class="shadow-sm bg-white">
                    <div class="close-filter">
                      Affiner la recherche <i class="icofont-close"></i>
                    </div>
                    <form action="{{ route('search.ann') }}" method="GET">
                      
                    
                    <div class="filter-inputs">
                      <div class="filter-input">
                        <div class="filter-point">
                          <span style="background: #5fc2ba !important;">d</span>
                          <input
                            placeholder="Ville, Code postal, Région, Pays"
                            type="text"
                            class="form-control"
                            name="from"
                          />
                        </div>
                      </div>
                      <div class="filter-input">
                        <div class="filter-point">
                          <span>a</span>
                          <input
                            placeholder="Ville, Code postal, Région, Pays"
                            type="text"
                            class="form-control"
                            name="to"
                          />
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
              <div class="map-listing">

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
                <ul>
                  @foreach ($announcements as $item)
                  <li class="shadow-sm">
                    <div class="row">
                      <div class="col-lg-3">
                        <div class="map-item-left">
                          
                          @if($item->category == 'household')
                            <div class="nom">
                              <h5>
                                <a href="{{ route('announcement.details', $item->id) }}">
                                  <i style="color: #5fc2ba !important" class="icofont-building-alt"></i>{{ ucfirst($item->equipment) }} 
                                  {{-- <sup>3</sup> --}}
                                </a>
                              </h5>
                              {{-- <p><i style="color: #5fc2ba !important;" class="icofont-star"></i>Prioritaire</p> --}}
                              <span class="bg-light d-inline-block">{{ ucfirst($item->articleName) }}</span>
                              {{-- <span class="bg-light d-inline-block"> L: {{ $item->length }}, W: {{ $item->width }}, H: {{ $item->height }}, Wt: {{ $item->weight }} </span> --}}
                            </div>
                          @elseif($item->category == 'vehicle')
                            <div class="nom">
                              <h5>
                                <a href="{{ route('announcement.details', $item->id) }}"><i style="color: #5fc2ba !important" class="icofont-car-alt-3"></i>{{ ucfirst($item->model_name) }} 
                                  {{-- <sup>3</sup> --}}
                                </a>
                              </h5>
                              {{-- <p><i class="icofont-star"></i>Prioritaire</p>
                              <span class="bg-light d-inline-block">VN: {{ ucfirst($item->vehicleName) }}</span>
                              <span class="bg-light d-inline-block">Mk: {{ ucfirst($item->make) }}</span>
                              <span class="bg-light d-inline-block">Md: {{ ucfirst($item->model) }}</span>
                              <span class="bg-light d-inline-block">EV: {{ ucfirst($item->estimationValue) }}</span>
                              <span class="bg-light d-inline-block">MV: {{ ucfirst($item->movingVehicle) }}</span>
                              <span class="bg-light d-inline-block">C: {{ ucfirst($item->conveyors) }}</span> --}}
                            </div>
                          @elseif($item->category == 'motorcyclesport')
                            <div class="nom">
                              <h5>
                                <a href="{{ route('announcement.details', $item->id) }}"><i style="color: #5fc2ba !important" class="icofont-motor-biker"></i>{{ ucfirst($item->model_name) }} 
                                  {{-- <sup>3</sup> --}}
                                </a>
                              </h5>
                              {{-- <p><i class="icofont-star"></i>Prioritaire</p>
                              <span class="bg-light d-inline-block">VN: {{ ucfirst($item->vehicleName) }}</span>
                              <span class="bg-light d-inline-block">Mk: {{ ucfirst($item->make) }}</span>
                              <span class="bg-light d-inline-block">Md: {{ ucfirst($item->model) }}</span>
                              <span class="bg-light d-inline-block">EV: {{ ucfirst($item->estimationValue) }}</span>
                              <span class="bg-light d-inline-block">MV: {{ ucfirst($item->movingVehicle) }}</span>
                              <span class="bg-light d-inline-block">C: {{ ucfirst($item->conveyors) }}</span> --}}
                            </div>
                          @elseif($item->category == 'boatvolimunoussport')
                            <div class="nom">
                              <h5>
                                <a href="{{ route('announcement.details', $item->id) }}">
                                  <i style="color: #5fc2ba !important"class="icofont-speed-boat"></i>{{ ucfirst($item->model_name) }} 
                                  {{-- <sup>3</sup> --}}
                                </a>
                              </h5>
                              {{-- <p><i class="icofont-star"></i>Prioritaire</p>
                              <span class="bg-light d-inline-block">BN: {{ ucfirst($item->boatName) }}</span>
                              <span class="bg-light d-inline-block">Mk: {{ ucfirst($item->make) }}</span>
                              <span class="bg-light d-inline-block">Md: {{ ucfirst($item->model) }}</span>
                              <span class="bg-light d-inline-block">L: {{ $item->length }},  W: {{ $item->width }},  H: {{ $item->height }}, Qt: {{ $item->quantity }} </span> --}}
                            </div>
                          @elseif($item->category == 'fragilegoods')
                            <div class="nom">
                              <h5>
                                <a href="{{ route('announcement.details', $item->id) }}"><i style="color: #5fc2ba !important" class="icofont-speed-boat"></i>{{ ucfirst($item->model_name) }} 
                                  {{-- <sup>3</sup> --}}
                                </a>
                              </h5>
                              {{-- <p><i class="icofont-star"></i>Prioritaire</p>
                              <span class="bg-light d-inline-block">AN: {{ ucfirst($item->articleName) }}</span>
                              <span class="bg-light d-inline-block">L: {{ $item->length }},  W: {{ $item->width }},  H: {{ $item->height }}, Wt: {{ $item->weight }}, Qt: {{ $item->quantity }} </span> --}}
                            </div>
                          @elseif($item->category == 'package')
                            <div class="nom">
                              <h5>
                                <a href="{{ route('announcement.details', $item->id) }}"><i style="color: #5fc2ba !important" class="icofont-package"></i>{{ ucfirst($item->model_name) }} 
                                  {{-- <sup>3</sup> --}}
                                </a>
                              </h5>
                              {{-- <p><i class="icofont-star"></i>Prioritaire</p>
                              <span class="bg-light d-inline-block">AN: {{ ucfirst($item->articleName) }}</span>
                              <span class="bg-light d-inline-block">L: {{ $item->length }},  W: {{ $item->width }},  H: {{ $item->height }}, Wt: {{ $item->weight }}, Qt: {{ $item->quantity }} </span> --}}
                            </div>
                          @elseif($item->category == 'pallet')
                            <div class="nom">
                              <h5>
                                <a href="{{ route('announcement.details', $item->id) }}"><i style="color: #5fc2ba !important" class="icofont-gift-box"></i>{{ ucfirst($item->model_name) }} 
                                  {{-- <sup>3</sup> --}}
                                </a>
                              </h5>
                              {{-- <p><i class="icofont-star"></i>Prioritaire</p>
                              <span class="bg-light d-inline-block">AN: {{ ucfirst($item->articleName) }}</span>
                              <span class="bg-light d-inline-block">D: {{ $item->dim }}, H: {{ $item->height }}, Wt: {{ $item->weight }}, Qt: {{ $item->quantity }} </span> --}}
                            </div>
                          @elseif($item->category == 'animal')
                            <div class="nom">
                              <h5>
                                <a href="{{ route('announcement.details', $item->id) }}"><i style="color: #5fc2ba !important" class="icofont-cat-dog"></i>{{ ucfirst($item->model_name) }} 
                                  {{-- <sup>3</sup> --}}
                                </a>
                              </h5>
                              {{-- <p><i class="icofont-star"></i>Prioritaire</p>
                              <span class="bg-light d-inline-block">AN: {{ ucfirst($item->animalName) }}</span>
                              <span class="bg-light d-inline-block">AB: {{ ucfirst($item->animalBreed) }}</span>
                              <span class="bg-light d-inline-block">SN: {{ ucfirst($item->specialNeeds) }}</span>
                              <span class="bg-light d-inline-block">V: {{ ucfirst($item->vaccinations) }}</span>
                              <span class="bg-light d-inline-block">Wt: {{ $item->weight }}, Wd: {{ $item->width }}, H: {{ $item->height }}, L: {{ $item->length }} </span> --}}
                            </div>
                          @elseif($item->category == 'agrifood')
                            <div class="nom">
                              <h5>
                                <a href="{{ route('announcement.details', $item->id) }}"><i style="color: #5fc2ba !important" class="icofont-food-basket"></i>{{ ucfirst($item->food_name) }} 
                                  {{-- <sup>3</sup> --}}
                                  </a>
                              </h5>
                              <p><i class="icofont-star"></i>Prioritaire</p>
                              <span class="bg-light d-inline-block">
                              AN: {{ ucfirst($item->articleName) }}</span>
                              <span class="bg-light d-inline-block">Wt: {{ $item->weight }}, Qt: {{ $item->quantity }} </span>
                            </div>
                          @elseif($item->category == 'commercialgoods')
                            <div class="nom">
                              <h5>
             
                                <a href="{{ route('announcement.details', $item->id) }}"><i style="color: #5fc2ba !important" class="icofont-food-basket"></i>{{ ucfirst($item->model_name) }} 
                                  {{-- <sup>3</sup> --}}
                                </a>
                              </h5>
                              {{-- <p><i class="icofont-star"></i>Prioritaire</p>
                              <span class="bg-light d-inline-block">AN: {{ ucfirst($item->articleName) }}</span>
                              <span class="bg-light d-inline-block">L: {{ $item->length }},  W: {{ $item->width }},  H: {{ $item->height }}, Wt: {{ $item->weight }}, Qt: {{ $item->quantity }} </span> --}}
                            </div>
                          @elseif($item->category == 'miscellaneous')
                            <div class="nom">
                              <h5>
                                <a href="{{ route('announcement.details', $item->id) }}"><i style="color: #5fc2ba !important" class="icofont-question"></i>{{ ucfirst($item->others) }} 
                                  {{-- <sup>3</sup> --}}
                                </a>
                              </h5>
                              {{-- <p><i class="icofont-star"></i>Prioritaire</p>
                              <span class="bg-light d-inline-block">AN: {{ ucfirst($item->articleName) }}</span>
                              <span class="bg-light d-inline-block">L: {{ $item->length }},  W: {{ $item->width }},  H: {{ $item->height }}, Wt: {{ $item->weight }}, Qt: {{ $item->quantity }} </span> --}}
                            </div>
                          @endif
                        </div>
                      </div>
                      <div class="col-lg-9">
                        <div class="map-item-right">
                          <div class="chargement">
                            <p><span>a</span>{{ ucfirst($item->loading_address) }}</p>
                            {{-- <small>entre le {{ $item->loading_start }} et le {{ $item->loading_end }}</small> --}}
                          </div>
                          <div class="livraison">
                            <p><span>b</span>{{ ucfirst($item->delivery_address) }}</p>
                            {{-- <small> entre le {{ $item->delivery_start }} et le {{ $item->delivery_end }}</small> --}}
                          </div>
                          <div class="activity text-nowrap">
                            <p>{{ totalbid($item->id)->count() }}</p>
                          </div>
                          <div class="km">
                            <p><b>350km</b></p>
                          </div>
                          {{-- <div class="distance text-nowrap">
                            1 013,09 km<br />9h29
                          </div> --}}
                          {{-- <div class="expiration text-nowrap text-center">
                            Dans<br/>
                            {{ \Carbon\Carbon::parse($item->loading_start)->diffInDays(\Carbon\Carbon::parse($item->delivery_start)) }} days
                          </div> --}}
                          <div class="publication">
                            <span class="d-block">Depuis</span>
                            <span class="d-block text-nowrap">{{ $item->created_at->diffForHumans() }}</span>
                          </div>

                        </div>
                      </div>
                    </div>
                  </li>
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
@endsection
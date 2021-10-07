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
        <section class="map">
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
                      <li><i class="icofont-tick-mark"></i>Déposez gratuitement votre demande et sans engagement</li>
                      <li><i class="icofont-tick-mark"></i>Recevez et comparez les offres en toute transparence</li>
                      <li><i class="icofont-tick-mark"></i>Validez votre devis et économisez de l’argent</li>
                      <li>
                        <i class="icofont-tick-mark"></i>Déménagez en toute sérénité avec des déménageurs agrées
                      </li>
                      <li>
                        <i class="icofont-tick-mark"></i>Profitez d’un large réseau de déménageur européen
                      </li>
                    </ul>
                    <button class="btn btn-theme bg-white bordered" style="margin-left: 20px;">DEMANDEZ VOTRE DEVIS</button>
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
                @endif
               ">            
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
                  class="
                    filter-icon
                    float-left
                    btn
                    bg-navy-blue
                    d-block d-xl-none
                  "
                >
                  <i class="icofont-settings mr-2"></i> Filter
                </div>
                <h5 style="margin-left: 20px;">CATÉGORIE</h5>
                  <div class="filter-checks">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="maison"
                        onclick='window.location.assign("/announce/agrifood")'/>
                      <label class="form-check-label" for="maison">
                        <i class="icofont-vehicle-delivery-van"></i>Agri Food
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="Déménagements"
                      />
                      <label class="form-check-label" for="Déménagements">
                        <i class="icofont-vehicle-delivery-van"></i>Animals
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="Véhicule"
                        onclick='window.location.assign("/announce/animals")'
                      />
                      <label class="form-check-label" for="Véhicule">
                        <i class="icofont-vehicle-delivery-van"></i>Commercial Goods
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="Bateaux"
                        onclick='window.location.assign("/announce/boatvolimunoussport")'
                      />
                      <label class="form-check-label" for="Bateaux">
                        <i class="icofont-vehicle-delivery-van"></i>Bateaux &
                        volumineux
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="Divers"
                        onclick='window.location.assign("/announce/fragilegoods")'
                      />
                      <label class="form-check-label" for="Divers">
                        <i class="icofont-vehicle-delivery-van"></i>Fragile Goods
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Bien" onclick='window.location.assign("/announce/household")'/>
                      <label class="form-check-label" for="Bien">
                        <i class="icofont-building-alt"></i>DÉMÉNAGEMENT
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="Animaux"
                        onclick='window.location.assign("/announce/miscellaneous")'
                      />
                      <label class="form-check-label" for="Animaux">
                        <i class="icofont-vehicle-delivery-van"></i>Miscellaneous
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="Biens"
                        onclick='window.location.assign("/announce/motorcyclesport")'
                      />
                      <label class="form-check-label" for="Biens">
                        <i class="icofont-motor-biker"></i>MOTOS
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="Package"
                        onclick='window.location.assign("/announce/package")'
                      />
                      <label class="form-check-label" for="Package">
                        <i class="icofont-box"></i>COLIS
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="Pallet"
                        onclick='window.location.assign("/announce/pallet")'
                      />
                      <label class="form-check-label" for="Pallet">
                        <i class="icofont-truck-alt"></i>PALETTE
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="Agroalimentaire"
                        onclick='window.location.assign("/announce/vehicle")'
                      />
                      <label class="form-check-label" for="Agroalimentaire">
                        <i class="icofont-car-alt-3"></i>VOITURES
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
                      <div class="col-lg-6">
                        <div class="map-item-left">
                          <div class="publication">
                            <div class="float-right icon">
                              <span><i class="icofont-court-hammer"></i> 1</span>
                              <span><i class="icofont-ui-message"></i> 0</span>
                            </div>
                            <span class="d-block">Depuis</span>
                            <span class="d-block text-nowrap">{{ $item->created_at->diffForHumans() }}</span>
                          </div>
                          @if($item->category == 'household')
                          <div class="nom">
                            <h5>
                              <a href="{{ route('announcement.details', $item->id) }}"><i class="icofont-home"></i>{{ ucfirst($item->equipment) }} 
                                {{-- <sup>3</sup> --}}
                              </a>
                            </h5>
                            <p><i class="icofont-star"></i>Prioritaire</p>
                            <span class="bg-light d-inline-block">AN: {{ ucfirst($item->articleName) }}</span>
                            <span class="bg-light d-inline-block"> L: {{ $item->length }}, W: {{ $item->width }}, H: {{ $item->height }}, Wt: {{ $item->weight }} </span>
                          </div>
                          @elseif($item->category == 'vehicle')
                          <div class="nom">
                            <h5>
                              <a href="{{ route('announcement.details', $item->id) }}"><i class="icofont-home"></i>{{ ucfirst($item->model_name) }} 
                                {{-- <sup>3</sup> --}}
                              </a>
                            </h5>
                            <p><i class="icofont-star"></i>Prioritaire</p>
                            <span class="bg-light d-inline-block">VN: {{ ucfirst($item->vehicleName) }}</span>
                            <span class="bg-light d-inline-block">Mk: {{ ucfirst($item->make) }}</span>
                            <span class="bg-light d-inline-block">Md: {{ ucfirst($item->model) }}</span>
                            <span class="bg-light d-inline-block">EV: {{ ucfirst($item->estimationValue) }}</span>
                            <span class="bg-light d-inline-block">MV: {{ ucfirst($item->movingVehicle) }}</span>
                            <span class="bg-light d-inline-block">C: {{ ucfirst($item->conveyors) }}</span>
                          </div>
                          @elseif($item->category == 'motorcyclesport')
                          <div class="nom">
                            <h5>
                              <a href="{{ route('announcement.details', $item->id) }}"><i class="icofont-home"></i>{{ ucfirst($item->model_name) }} 
                                {{-- <sup>3</sup> --}}
                              </a>
                            </h5>
                            <p><i class="icofont-star"></i>Prioritaire</p>
                            <span class="bg-light d-inline-block">VN: {{ ucfirst($item->vehicleName) }}</span>
                            <span class="bg-light d-inline-block">Mk: {{ ucfirst($item->make) }}</span>
                            <span class="bg-light d-inline-block">Md: {{ ucfirst($item->model) }}</span>
                            <span class="bg-light d-inline-block">EV: {{ ucfirst($item->estimationValue) }}</span>
                            <span class="bg-light d-inline-block">MV: {{ ucfirst($item->movingVehicle) }}</span>
                            <span class="bg-light d-inline-block">C: {{ ucfirst($item->conveyors) }}</span>
                          </div>
                          @elseif($item->category == 'boatvolimunoussport')
                          <div class="nom">
                            <h5>
                              <a href="{{ route('announcement.details', $item->id) }}"><i class="icofont-home"></i>{{ ucfirst($item->model_name) }} 
                                {{-- <sup>3</sup> --}}
                              </a>
                            </h5>
                            <p><i class="icofont-star"></i>Prioritaire</p>
                            <span class="bg-light d-inline-block">BN: {{ ucfirst($item->boatName) }}</span>
                            <span class="bg-light d-inline-block">Mk: {{ ucfirst($item->make) }}</span>
                            <span class="bg-light d-inline-block">Md: {{ ucfirst($item->model) }}</span>
                            <span class="bg-light d-inline-block">L: {{ $item->length }},  W: {{ $item->width }},  H: {{ $item->height }}, Qt: {{ $item->quantity }} </span>
                          </div>
                          @elseif($item->category == 'fragilegoods')
                          <div class="nom">
                            <h5>
                              <a href="{{ route('announcement.details', $item->id) }}"><i class="icofont-home"></i>{{ ucfirst($item->model_name) }} 
                                {{-- <sup>3</sup> --}}
                              </a>
                            </h5>
                            <p><i class="icofont-star"></i>Prioritaire</p>
                            <span class="bg-light d-inline-block">AN: {{ ucfirst($item->articleName) }}</span>
                            <span class="bg-light d-inline-block">L: {{ $item->length }},  W: {{ $item->width }},  H: {{ $item->height }}, Wt: {{ $item->weight }}, Qt: {{ $item->quantity }} </span>
                          </div>
                          @elseif($item->category == 'package')
                          <div class="nom">
                            <h5>
                              <a href="{{ route('announcement.details', $item->id) }}"><i class="icofont-home"></i>{{ ucfirst($item->model_name) }} 
                                {{-- <sup>3</sup> --}}
                              </a>
                            </h5>
                            <p><i class="icofont-star"></i>Prioritaire</p>
                            <span class="bg-light d-inline-block">AN: {{ ucfirst($item->articleName) }}</span>
                            <span class="bg-light d-inline-block">L: {{ $item->length }},  W: {{ $item->width }},  H: {{ $item->height }}, Wt: {{ $item->weight }}, Qt: {{ $item->quantity }} </span>
                          </div>
                          @elseif($item->category == 'pallet')
                          <div class="nom">
                            <h5>
                              <a href="{{ route('announcement.details', $item->id) }}"><i class="icofont-home"></i>{{ ucfirst($item->model_name) }} 
                                {{-- <sup>3</sup> --}}
                              </a>
                            </h5>
                            <p><i class="icofont-star"></i>Prioritaire</p>
                            <span class="bg-light d-inline-block">AN: {{ ucfirst($item->articleName) }}</span>
                            <span class="bg-light d-inline-block">D: {{ $item->dim }}, H: {{ $item->height }}, Wt: {{ $item->weight }}, Qt: {{ $item->quantity }} </span>
                          </div>
                          @elseif($item->category == 'animal')
                          <div class="nom">
                            <h5>
                              <a href="{{ route('announcement.details', $item->id) }}"><i class="icofont-home"></i>{{ ucfirst($item->model_name) }} 
                                {{-- <sup>3</sup> --}}
                              </a>
                            </h5>
                            <p><i class="icofont-star"></i>Prioritaire</p>
                            <span class="bg-light d-inline-block">AN: {{ ucfirst($item->animalName) }}</span>
                            <span class="bg-light d-inline-block">AB: {{ ucfirst($item->animalBreed) }}</span>
                            <span class="bg-light d-inline-block">SN: {{ ucfirst($item->specialNeeds) }}</span>
                            <span class="bg-light d-inline-block">V: {{ ucfirst($item->vaccinations) }}</span>
                            <span class="bg-light d-inline-block">Wt: {{ $item->weight }}, Wd: {{ $item->width }}, H: {{ $item->height }}, L: {{ $item->length }} </span>
                          </div>
                          @elseif($item->category == 'agrifood')
                          <div class="nom">
                            <h5>
                              <a href="{{ route('announcement.details', $item->id) }}"><i class="icofont-home"></i>{{ ucfirst($item->food_name) }} 
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
                              <a href{{ route('announcement.details', $item->id) }}"><i class="icofont-home"></i>{{ ucfirst($item->model_name) }} 
                                {{-- <sup>3</sup> --}}
                              </a>
                            </h5>
                            <p><i class="icofont-star"></i>Prioritaire</p>
                            <span class="bg-light d-inline-block">AN: {{ ucfirst($item->articleName) }}</span>
                            <span class="bg-light d-inline-block">L: {{ $item->length }},  W: {{ $item->width }},  H: {{ $item->height }}, Wt: {{ $item->weight }}, Qt: {{ $item->quantity }} </span>
                          </div>
                          @elseif($item->category == 'miscellaneous')
                          <div class="nom">
                            <h5>
                              <a href{{ route('announcement.details', $item->id) }}"><i class="icofont-home"></i>{{ ucfirst($item->others) }} 
                                {{-- <sup>3</sup> --}}
                              </a>
                            </h5>
                            <p><i class="icofont-star"></i>Prioritaire</p>
                            <span class="bg-light d-inline-block">AN: {{ ucfirst($item->articleName) }}</span>
                            <span class="bg-light d-inline-block">L: {{ $item->length }},  W: {{ $item->width }},  H: {{ $item->height }}, Wt: {{ $item->weight }}, Qt: {{ $item->quantity }} </span>
                          </div>
                          @endif
                          <div class="activity text-nowrap">
                            <p>{{ totalbid($item->id)->count() }} ({{ totalbid($item->id)->count() }} en cours)</p>
                            <p>0 message</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="map-item-right">
                          <div class="chargement">
                            <p><span>a</span>{{ ucfirst($item->loading_address) }}</p>
                            <small>entre le {{ $item->loading_start }} et le {{ $item->loading_end }}</small>
                          </div>
                          <div class="livraison">
                            <p><span>b</span>{{ ucfirst($item->delivery_address) }}</p>
                            <small> entre le {{ $item->delivery_start }} et le {{ $item->delivery_end }}</small>
                          </div>
                          {{-- <div class="distance text-nowrap">
                            1 013,09 km<br />9h29
                          </div> --}}
                          <div class="expiration text-nowrap text-center">
                            Dans<br />
                            {{ \Carbon\Carbon::parse($item->loading_start)->diffInDays(\Carbon\Carbon::parse($item->delivery_start)) }} days
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
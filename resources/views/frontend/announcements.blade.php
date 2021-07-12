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
                <div class="col-md-6">
                  <div class="left">
                    <h1>TROUVEZ DES CHARGEMENTS AUGMENTEZ VOS REVENUS</h1>
                    <h4>BOURSE DE FRET GRATUITE</h4>
                    <button class="btn btn-lg btn-dark">je m'inscris</button>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="right">
                    <ul>
                      <li><i class="icofont-check"></i>GRATUIT</li>
                      <li><i class="icofont-check"></i>VISIBILITÉ IMMÉDIATE</li>
                      <li><i class="icofont-check"></i>PAS D’ABONNEMENT</li>
                      <li>
                        <i class="icofont-check"></i>AUGMENTEZ VOTRE CHIFFRE
                        D’AFFAIRE
                      </li>
                      <li>
                        <i class="icofont-check"></i>ASSISTANCE TÉLÉPHONIQUE
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- map banner end -->
  
        <!-- steps start -->
        <div class="steps">
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
        </div>
        <!-- steps end -->
  
        <!-- map lists start -->
        <section class="map-body border-top bg-light-gray">
          <div class="container">
            <div class="map-body-wrapper">
              <div class="filter">
                <div class="shadow-sm bg-white">
                  <div class="close-filter">
                    Affiner la recherche <i class="icofont-close"></i>
                  </div>
                  <div class="filter-inputs">
                    <div class="filter-input">
                      <div class="filter-point">
                        <span>a</span>
                        <input
                          placeholder="Ville, Code postal, Région, Pays"
                          type="text"
                          class="form-control"
                        />
                      </div>
                    </div>
                    <div class="filter-input">
                      <div class="filter-point">
                        <span>b</span>
                        <input
                          placeholder="Ville, Code postal, Région, Pays"
                          type="text"
                          class="form-control"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="p-3">
                    <input type="date" class="form-control" />
                  </div>
                  <div class="filter-checks">
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="maison"
                      />
                      <label class="form-check-label" for="maison">
                        <i class="icofont-vehicle-delivery-van"></i>Équipement de
                        la maison
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="Déménagements"
                      />
                      <label class="form-check-label" for="Déménagements">
                        <i class="icofont-vehicle-delivery-van"></i>Déménagements
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="Véhicule"
                      />
                      <label class="form-check-label" for="Véhicule">
                        <i class="icofont-vehicle-delivery-van"></i>Véhicule
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="Bateaux"
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
                      />
                      <label class="form-check-label" for="Divers">
                        <i class="icofont-vehicle-delivery-van"></i>Divers
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="Bien" />
                      <label class="form-check-label" for="Bien">
                        <i class="icofont-vehicle-delivery-van"></i>Bien
                        commerciaux
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="Animaux"
                      />
                      <label class="form-check-label" for="Animaux">
                        <i class="icofont-vehicle-delivery-van"></i>Animaux
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="Biens"
                      />
                      <label class="form-check-label" for="Biens">
                        <i class="icofont-vehicle-delivery-van"></i>Biens fragiles
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="Agroalimentaire"
                      />
                      <label class="form-check-label" for="Agroalimentaire">
                        <i class="icofont-vehicle-delivery-van"></i
                        >Agroalimentaire
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="Motos"
                      />
                      <label
                        class="form-check-label"
                        for="Motos et véhicules de sport"
                      >
                        <i class="icofont-vehicle-delivery-van"></i>Motos et
                        véhicules de sport
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="Colis"
                      />
                      <label class="form-check-label" for="Colis">
                        <i class="icofont-vehicle-delivery-van"></i>Colis/Pli
                      </label>
                    </div>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="Palette"
                      />
                      <label class="form-check-label" for="Palette">
                        <i class="icofont-vehicle-delivery-van"></i>Palette
                      </label>
                    </div>
                  </div>
                  <div class="text-center py-3 border-top">
                    <button class="btn text-white bg-navy-blue">Filter</button>
                  </div>
                </div>
              </div>
              <div class="map-listing">
                <div
                  class="
                    filter-icon
                    float-left
                    text-white
                    btn
                    bg-navy-blue
                    d-block d-xl-none
                  "
                >
                  <i class="icofont-settings mr-2"></i> Filter
                </div>
                <nav>
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
                </nav>
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
                              <a href="#"><i class="icofont-home"></i>{{ ucfirst($item->equipment) }} 
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
                              <a href="#"><i class="icofont-home"></i>{{ ucfirst($item->model_name) }} 
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
                              <a href="#"><i class="icofont-home"></i>{{ ucfirst($item->model_name) }} 
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
                              <a href="#"><i class="icofont-home"></i>{{ ucfirst($item->model_name) }} 
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
                              <a href="#"><i class="icofont-home"></i>{{ ucfirst($item->model_name) }} 
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
                              <a href="#"><i class="icofont-home"></i>{{ ucfirst($item->model_name) }} 
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
                              <a href="#"><i class="icofont-home"></i>{{ ucfirst($item->model_name) }} 
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
                              <a href="#"><i class="icofont-home"></i>{{ ucfirst($item->model_name) }} 
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
                              <a href="#"><i class="icofont-home"></i>{{ ucfirst($item->food_name) }} 
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
                              <a href="#"><i class="icofont-home"></i>{{ ucfirst($item->model_name) }} 
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
                              <a href="#"><i class="icofont-home"></i>{{ ucfirst($item->others) }} 
                                {{-- <sup>3</sup> --}}
                              </a>
                            </h5>
                            <p><i class="icofont-star"></i>Prioritaire</p>
                            <span class="bg-light d-inline-block">AN: {{ ucfirst($item->articleName) }}</span>
                            <span class="bg-light d-inline-block">L: {{ $item->length }},  W: {{ $item->width }},  H: {{ $item->height }}, Wt: {{ $item->weight }}, Qt: {{ $item->quantity }} </span>
                          </div>
                          @endif
                          <div class="activity text-nowrap">
                            <p>0 (0 en cours)</p>
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
                <nav>
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
                </nav>
              </div>
            </div>
          </div>
        </section>
        <!-- map lists end -->
@endsection

@section('js')
@endsection
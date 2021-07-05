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
      <section class="transport-type">
        <div class="container">
          <div class="transport-type-wrapper">
            <div class="row">
              <div class="col-lg-9">
                <div
                  class="bg-white shadow-sm my-3 rounded transports"
                  id="transport"
                >
                  <h4 class="font-weight-bold text-navy-blue p-3 mb-0">
                    TYPE OF TRANSPORT
                  </h4>
                  <!-- transport category start -->
                  <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                      <a href="{{ route('frontend.requestQuoteForm', 'household') }}">
                        <div class="transport-item" data-target="#household">
                          <span class="icon"
                            ><i class="icofont-building-alt"></i
                          ></span>
                          <span>Household equipment</span>
                        </div>
                      </a>
                    </div>
                    {{-- <div class="col-lg-3 col-md-4 col-sm-6">
                      <div class="transport-item" data-target="#moving">
                        <span class="icon"
                          ><i class="icofont-truck-loaded"></i
                        ></span>
                        <span>Moving</span>
                      </div>
                    </div> --}}
                    <div class="col-lg-3 col-md-4 col-sm-6">
                      <a href="{{ route('frontend.requestQuoteForm', 'vehicle') }}">
                        <div class="transport-item" data-target="#vehicle">
                          <span class="icon"
                            ><i class="icofont-car-alt-3"></i
                          ></span>
                          <span>Vehicle</span>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                      <a href="{{ route('frontend.requestQuoteForm', 'motorcyclesport') }}">
                      <div class="transport-item" data-target="#motorcycleSport">
                          <span class="icon" ><i class="icofont-motor-biker"></i ></span>
                          <span>Motorcycles and sports vehicles</span>
                      </div>
                    </a>
                    </div>
                    <div  class="col-lg-3 col-md-4 col-sm-6 d-none hidden-transport-item" >
                      <a href="{{ route('frontend.requestQuoteForm', 'boatvolimunoussport') }}">
                        <div class="transport-item" data-target="#boat-voluminous" >
                          <span class="icon" ><i class="icofont-speed-boat"></i></span>
                          <span>Boats & voluminous</span>
                        </div>
                      </a>
                    </div>
                    <div class=" col-lg-3 col-md-4 col-sm-6  d-none  hidden-transport-item  " >
                       <a href="{{ route('frontend.requestQuoteForm', 'fragilegoods') }}">
                        <div class="transport-item" data-target="#fragileGoods">
                          <span class="icon"
                            ><i class="icofont-speed-boat"></i
                          ></span>
                          <span>Fragile goods</span>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 d-none hidden-transport-item">
                       <a href="{{ route('frontend.requestQuoteForm', 'package') }}">
                        <div class="transport-item" data-target="#package">
                          <span class="icon"
                            ><i class="icofont-package"></i
                          ></span>
                          <span>Package/Fold</span>
                        </div>
                      </a>
                    </div>
                    <div class=" col-lg-3 col-md-4 col-sm-6 d-none hidden-transport-item" >
                      <a href="{{ route('frontend.requestQuoteForm', 'pallet') }}">
                        <div class="transport-item" data-target="#pallet">
                          <span class="icon"
                            ><i class="icofont-gift-box"></i
                          ></span>
                          <span>Pallet</span>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 d-none hidden-transport-item">
                      <a href="{{ route('frontend.requestQuoteForm', 'animal') }}">
                        <div class="transport-item" data-target="#animal">
                          <span class="icon"
                            ><i class="icofont-cat-dog"></i
                          ></span>
                          <span>Animals</span>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 d-none hidden-transport-item">
                      <a href="{{ route('frontend.requestQuoteForm', 'agrifood') }}">
                        <div class="transport-item" data-target="#agri-food">
                          <span class="icon"
                            ><i class="icofont-food-basket"></i
                          ></span>
                          <span>Agri-food</span>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 d-none hidden-transport-item">
                      <a href="{{ route('frontend.requestQuoteForm', 'commercialgoods') }}">
                        <div class="transport-item" data-target="#commercial-good" >
                          <span class="icon"
                            ><i class="icofont-food-basket"></i
                          ></span>
                          <span>Commercial goods</span>
                        </div>
                      </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 d-none hidden-transport-item " >
                      <a href="{{ route('frontend.requestQuoteForm', 'miscellaneous') }}">
                      <div class="transport-item" data-target="#miscellaneous">
                        <span class="icon"
                          ><i class="icofont-question"></i
                        ></span>
                        <span>Miscellaneous</span>
                      </div>
                      </a>
                    </div>
                  </div>

                  <div class="text-center pb-3">
                    <button
                      id="all-item"
                      class="btn-theme bg-navy-blue text-white"
                    >
                      Show All
                    </button>
                    <!-- transport category end -->
                  </div>
                </div>
              </div>

              <div class="col-lg-3 d-none d-lg-block">
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
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection

@section('js')
         <!-- transport scripts -->
         <script src="{{ asset('assets/js/transport.js') }}"></script>
@endsection
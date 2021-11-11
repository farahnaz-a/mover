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
            <div>
              <span class="number">2</span>
              <p>Add item / volume</p>
            </div>
            <div class="active">
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
              <div class="col-lg-9">
                <!-- address form start -->
                <div
                  class="bg-white shadow-sm my-3 p-3 rounded"
                  id="address"
                >
                  <h4 class="font-weight-bold text-navy-blue">
                    INFORMATION ON LOADING AND DELIVERY ADDRESSES TRANSPORT
                  </h4>
                  <div class="row">
                    <div class="col-md-6">
                      <h5 class="mt-4 text-navy-blue font-weight-bold">
                        <i class="icofont-vehicle-delivery-van mr-2"></i>Place
                        of loading:
                      </h5>
                      <div class="bg-light-gray my-3 p-3 rounded">
                        <form action="{{ route('announcement.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="category" value="{{ $category }}" id="">
                            <input type="hidden" name="volume" value="{{ $volume }}" id="">
                            <input type="hidden" name="list" value="{{ $list }}" id="">
                            <input type="hidden" name="individual_goods" value="{{ $individual_goods }}" id="">
                            <input type="hidden" name="place_type" value="{{ $place_type }}" id="">
                            <input type="hidden" name="floor" value="{{ $floor }}" id="">
                            <input type="hidden" name="ascenseur" value="{{ $ascenseur }}" id="">
                            <input type="hidden" name="access" value="{{ $access }}" id="">
                            <input type="hidden" name="services" value="{{ $services }}" id="">
                            <input type="hidden" name="help" value="{{ $help }}" id="">
                            <input type="hidden" name="article_name" value="{{ $article_name }}" id="">
                            <input type="hidden" name="height" value="{{ $height }}" id="">
                            <input type="hidden" name="width" value="{{ $width }}" id="">
                            <input type="hidden" name="length" value="{{ $length }}" id="">
                            <input type="hidden" name="weight" value="{{ $weight }}" id="">
                            <input type="hidden" name="quantity" value="{{ $quantity }}" id="">
                            <input type="hidden" name="size" value="{{ $size }}" id="">
                            <input type="hidden" name="load_unload" value="{{ $load_unload }}" id="">
                            <input type="hidden" name="need_tailgate" value="{{ $need_tailgate }}" id="">
                            <input type="hidden" name="need_truck" value="{{ $need_truck }}" id="">
                            <input type="hidden" name="brand_model" value="{{ $brand_model }}" id="">
                            <input type="hidden" name="rolling" value="{{ $rolling }}" id="">
                            {{-- <input type="hidden" name="category" value="{{ $category }}" id="">
                            <input type="hidden" name="equipment" value="{{ $equipment }}" id="">
                            <input type="hidden" name="articleName" value="{{ $articleName }}" id="">
                            <input type="hidden" name="length" value="{{ $length }}" id="">
                            <input type="hidden" name="width" value="{{ $width }}" id="">
                            <input type="hidden" name="height" value="{{ $height }}" id="">
                            <input type="hidden" name="weight" value="{{ $weight }}" id="">
                            <input type="hidden" name="quantity" value="{{ $quantity }}" id=""> 
                            <input type="hidden" name="make" value="{{ $make }}" id=""> 
                            <input type="hidden" name="model" value="{{ $model }}" id=""> 
                            <input type="hidden" name="model" value="{{ $model_name }}" id=""> 
                            <input type="hidden" name="estimationValue" value="{{ $estimationValue }}" id=""> 
                            <input type="hidden" name="movingVehicle" value="{{ $movingVehicle }}" id=""> 
                            <input type="hidden" name="conveyors" value="{{ $conveyors }}" id=""> 
                            <input type="hidden" name="boatName" value="{{ $boatName }}" id=""> 
                            <input type="hidden" name="food_name" value="{{ $food_name }}" id=""> 
                            <input type="hidden" name="dim" value="{{ $dim }}" id=""> 
                            <input type="hidden" name="animalName" value="{{ $animalName }}" id=""> 
                            <input type="hidden" name="animalBreed" value="{{ $animalBreed }}" id=""> 
                            <input type="hidden" name="specialNeeds" value="{{ $specialNeeds }}" id=""> 
                            <input type="hidden" name="vaccinations" value="{{ $vaccinations }}" id=""> 
                            <input type="hidden" name="others" value="{{ $others }}" id=""> 
                            <input type="hidden" name="vehicleName" value="{{ $vehicleName }}" id="">  --}}
                            <div class="form-group">
                              <input type="text" placeholder="Départ" class="form-control" name="depart" required/>
                              @error('depart')
                                  <div class="text-danger">
                                     {{ $message }}
                                  </div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for=""> Date de chargement </label>
                              <input type="date" placeholder="Date de chargement "
                                  class="form-control" name="loading_date" required/>
                            </div>
                            {{-- <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="">Start</label>
                                <input class="form-control" required name="loading_start" type="date" placeholder="Start"/>
                                 @error('loading_start')
                                    <div class="text-danger">
                                      {{ $message }}
                                    </div>
                                  @enderror
                              </div>
                              <div class="form-group col-md-6">
                                <label for="">End</label>
                                <input class="form-control" required name="loading_end" type="date" placeholder="End"/>
                                  @error('loading_end')
                                    <div class="text-danger">
                                      {{ $message }}
                                    </div>
                                  @enderror
                              </div>
                            </div> --}}
                            {{-- <div class="form-group">
                              <label>Time slot loading</label>
                              <select name="loading_time_slot" required class="rounded">
                                <option value="anytime">anytime</option>
                                <option value="morning">morning</option>
                                <option value="afternoon">afternoon</option>
                                <option value="evening">evening</option>
                              </select>
                              @error('loading_time_slot')
                                <div class="text-danger">
                                  {{ $message }}
                                </div>
                              @enderror
                            </div> --}}
                            {{-- <div class="form-group">
                              <select name="loading_house" required class="rounded">
                                <option value="House">House</option>
                                <option value="Building">Building</option>
                                <option value="Storage facility">
                                  Storage facility
                                </option>
                                <option value="Warehouse">Warehouse</option>
                                <option value="Store">Store</option>
                              </select>
                              @error('loading_house')
                                <div class="text-danger">
                                  {{ $message }}
                                </div>
                              @enderror
                            </div> --}}
                            {{-- <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="">Select the floor</label>
                                <select required name="loading_floor" class="rounded">
                                  <option value="RDC">RDC</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                  <option value="10">10</option>
                                  <option value="11">11</option>
                                  <option value="12">12</option>
                                  <option value="13">13</option>
                                </select>
                                @error('loading_floor')
                                  <div class="text-danger">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                              <div class="form-group col-md-6">
                                <label for="">Is there is an elevator?</label>
                                <select required name="loading_elevator" class="rounded">
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                </select>
                                @error('loading_elevator')
                                  <div class="text-danger">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                              <div class="form-group col-md-12">
                                <label for="">Furniture lift required?</label>
                                <select required name="loading_lift" class="loading_lift" class="rounded">
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                </select>
                                @error('loading_lift')
                                  <div class="text-danger">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                            </div> --}}
                        </div>
                      </div>
                      <div class="col-md-6">
                        <h5 class="mt-4 text-navy-blue font-weight-bold">
                          <i class="icofont-vehicle-delivery-van mr-2"></i>Place
                          of delivery:
                        </h5>
                        <div class="bg-light-gray my-3 p-3 rounded">
                            <div class="form-group">
                              <input type="text" placeholder="Arrivée" class="form-control" name="arrivee" required/>
                              @error('arrivee')
                                  <div class="text-danger">
                                    {{ $message }}
                                  </div>
                              @enderror
                            </div>
                            <div class="form-group"> 
                                <label for=""> Date de livraison </label>
                                <input type="date" placeholder="Date de livraison "
                                    class="form-control" name="delevary_date" required/> 
                            </div>
                            {{-- <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="">Start</label>
                                <input required class="form-control" name="delivery_start" type="date" placeholder="Start"/>
                                @error('delivery_start')
                                  <div class="text-danger">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                              <div class="form-group col-md-6">
                                <label for="">End</label>
                                <input required name="delivery_end" class="form-control" type="date" placeholder="End"/>
                                @error('delivery_end')
                                  <div class="text-danger">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                            </div> --}}
                            {{-- <div class="form-group">
                              <label>Time slot loading</label>
                              <select required name="delivery_time_slot" class="rounded">
                                <option value="anytime">anytime</option>
                                <option value="morning">morning</option>
                                <option value="afternoon">afternoon</option>
                                <option value="evening">evening</option>
                              </select>
                               @error('delivery_time_slot')
                                  <div class="text-danger">
                                    {{ $message }}
                                  </div>
                                @enderror
                            </div>
                            <div class="form-group">
                              <select required name="delivery_house" class="rounded">
                                <option value="House">House</option>
                                <option value="Building">Building</option>
                                <option value="Storage facility">
                                  Storage facility
                                </option>
                                <option value="Warehouse">Warehouse</option>
                                <option value="Store">Store</option>
                              </select>
                              @error('delivery_house')
                                  <div class="text-danger">
                                    {{ $message }}
                                  </div>
                              @enderror
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="">Select the floor</label>
                                <select required name="delivery_floor" class="rounded">
                                  <option value="RDC">RDC</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                  <option value="10">10</option>
                                  <option value="11">11</option>
                                  <option value="12">12</option>
                                  <option value="13">13</option>
                                </select>
                                @error('delivery_floor')
                                  <div class="text-danger">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                              <div class="form-group col-md-6">
                                <label for="">Is there is an elevator?</label>
                                <select required name="delivery_elevator" class="rounded">
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                </select>
                              </div>
                              <div class="form-group col-md-12">
                                <label for="">Furniture lift required?</label>
                                <select required name="delivery_lift" class="rounded">
                                  <option value="Yes">Yes</option>
                                  <option value="No">No</option>
                                </select>
                                @error('delivery_lift')
                                  <div class="text-danger">
                                    {{ $message }}
                                  </div>
                                @enderror
                              </div>
                            </div> --}}
                        </div>
                      </div>
                    </div>
                    <h5 class="mt-4 font-weight-bold text-navy-blue">
                      <i class="icofont-warning-alt mr-2"></i>Additional
                      information
                      <em class="font-weight-normal">(recommended)</em>
                    </h5>
                    <div class="p-3 rounded bg-light-gray">
                        <div class="row">
                            <div class="col-12">
                                <textarea name="informations"   class="form-control"
                                    rows="7" placeholder="informations complémentaires required"></textarea>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4 mb-3">
                                <h5>photo</h5> 
                                <img src="{{ asset('uploads/callouts/1.jpg') }}" alt="">
                                <a class="d-inline-block my-3" target="_blank" href="{{ asset('uploads/callouts/1.jpg') }}">Télécharger</a>
                            </div>
                        </div>
                        <h3 class="mt-4">données </h3>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="name"><i
                                                class="icofont-user-alt-3"></i></span>
                                    </div>
                                    <input name="name" type="text" placeholder="Nom et premon"
                                        class="form-control" required/>
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="email"><i
                                                class="icofont-email" ></i></span>
                                    </div>
                                    <input name="email" type="email" placeholder="Email"
                                        class="form-control" required/>
                                </div>
                                <div class="row">
                                    <div class="col-5">
                                        <div class="form-group ">
                                            <div class="input-group" id="country_code_wrapper">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text"
                                                        for="country_code">
                                                        <i class="icofont-world"></i></label>
                                                </div> 
                                                <select class="flex-grow-1 w-auto"
                                                    name="country_code" id="country_code" >
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
                                                class="form-control" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="pseudo"><i
                                                class="icofont-ui-user"></i></span>
                                    </div>
                                    <input name="pseudo" type="text" placeholder="pseudo"
                                        class="form-control" required/>
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="password"><i
                                                class="icofont-lock"></i></span>
                                    </div>
                                    <input name="password" type="password"
                                        placeholder="Mot de passe" class="form-control" required/>
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="confirm_password"><i
                                                class="icofont-lock"></i></span>
                                    </div>
                                    <input name="confirm_password" type="password"
                                        placeholder="Confirmer votre mot de passe"
                                        class="form-control" required/>
                                </div>
                             
                                  <input type="checkbox" id="condition" name="terms"
                                  value="yes" required>
                                  <label for="condition"> j'accepte les dispositions des
                                      conditions
                                      générales et de la politique de confidentialité
                                  </label>  
                            </div>
                    </div>
                    </div>
                    {{-- <div class="p-3 rounded bg-light-gray">
                      <div class="row">
                        <div class="col-md-6">
                          <textarea name="information" class="form-control" rows="8"></textarea>
                          @error('information')
                              <div class="text-danger">
                                {{ $message }}
                              </div>
                          @enderror
                        </div>
                        <div class="col-md-6">
                          <p class="alert alert-danger">
                            - This information is public, NEVER give your contact
                            details to preserve your privacy!
                          </p>
                          <h6 class="my-3 font-weight-bold text-navy-blue">
                            Be as specific as possible about:
                          </h6>
                          <p class="mb-2">- Loading and delivery conditions.</p>
                          <p class="mb-2">
                            Ex: narrow street, window loading, 2 people to help at
                            the start,...
                          </p>
                          <p class="mb-2">
                            - The list of elements to be dismantled.
                          </p>
                          <p class="mb-2">Ex: 4-door cabinet, buffet,...</p>
                          <p class="mb-2">
                            - The list of your main items to be transported.
                          </p>
                          <p class="mb-2">Ex: 1 large table of 3mx2m, ...</p>
                        </div>
                      </div>
                    </div> --}}
                     
                    </div>
                    <div class="mt-4">
                      {{-- <div class="custom-control custom-checkbox">
                        <input  name="offers" type="checkbox" class="custom-control-input" id="commercial-offer"/>
                        <label class="custom-control-label" for="commercial-offer">I agree to receive commercial offers from FretBay and its partners</label>
                        @error('offers')
                          <div class="text-danger">
                            {{ $message }}
                          </div>
                        @enderror
                      </div> --}}
                      {{-- <div class="custom-control custom-checkbox">
                        <input required name="terms" type="checkbox" class="custom-control-input" id="terms"
                        />
                        <label class="custom-control-label" for="terms"
                          >I accept FretBay's Terms of Use
                        </label>
                        @error('terms')
                          <div class="text-danger">
                            {{ $message }}
                          </div>
                        @enderror
                      </div> --}}
                      <small class="text-navy-blue mb-2 mt-3 d-block">
                        You have the right to access, modify, rectify, and delete
                        data concerning you from your FretBay account.
                      </small>
                      <small class="text-navy-blue mb-2 d-block">
                        You can also consult the Privacy Policy
                      </small>
                      <div class="text-right">
                        <a
                          href="{{ URL::previous() }}"
                          class="back btn btn-outline-danger"
                        >
                          <i class="icofont-simple-left mr-2"></i>Back
                      </a>
                        <button
                          data-section="2"
                          class="continue btn text-white bg-navy-blue ml-3"
                          type="submit" 
                        >
                        Publiez mon annonce
                        </button>
                      </form>  
                      </div>
                    </div>
                  </div>
                <!-- address form end -->
              </div>

              {{-- <div class="col-lg-3 d-none d-lg-block">
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
      <div style="display: none" id="map-canvas"></div>
      <!-- transport end -->
@endsection


@section('js')
         <!-- transport scripts -->
         <script src="{{ asset('assets/js/transport.js') }}"></script>
@endsection

@push('js')
       
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
              query: 'Adabar',
              
          },
          destination: {
              query: 'Dhanmondi',
          },
          travelMode: google.maps.TravelMode.DRIVING,
      },
      (response, status) => {
           

          
          if (status === 'OK') {
              directionsRenderer.setDirections(response)
              let distance = response.routes[0].legs[0].distance.text
              //  $('#distance').append(distance); 
              // Get all ID from the foreach

              console.log(distance)
      
              // $('.getDataID'+{{ $item->id }}).text(distance); 
              // console.log(distance) 
          } else {
              // $('#distance').append('Map Not Found');
              // $('#distance'+{{ $item->id }}).text('not found'); 
              // console.log(status)
              // console.log(myId)
              console.log(distance)
          }
      }
  )
}


</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCYYbVzj3y4aUpnJCDZ756CrHJXVs93U4&callback=initMap&libraries=&v=weekly"
async></script>
@endpush
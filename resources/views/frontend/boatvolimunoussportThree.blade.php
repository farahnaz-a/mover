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
                        <form action="" method="POST">
                            @csrf
                            <input type="hidden" name="model_name" value="{{ $model_name }}" id="">
                            <input type="hidden" name="boatName" value="{{ $boatName }}" id="">
                            <input type="hidden" name="length" value="{{ $length }}" id="">
                            <input type="hidden" name="width" value="{{ $width }}" id="">
                            <input type="hidden" name="height" value="{{ $height }}" id="">
                            <input type="hidden" name="quantity" value="{{ $quantity }}" id="">
                            <input type="hidden" name="make" value="{{ $make }}" id="">
                            <input type="hidden" name="model" value="{{ $model }}" id="">
                            <input type="hidden" name="estimationValue" value="estimationValue" id="">
                            <input type="hidden" name="conveyors" value="{{ $conveyors }}" id="">
                          <div class="form-group">
                            <input
                              class="form-control" name="loading_address" type="text" placeholder="Address"/>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="">Start</label>
                              <input class="form-control" name="loading_start" type="date" placeholder="Start"/>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="">End</label>
                              <input
                                class="form-control" name="loading_end" type="date" placeholder="End"/>
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Time slot loading</label>
                            <select name="loading_time_slot" class="rounded">
                              <option value="anytime">anytime</option>
                              <option value="morning">morning</option>
                              <option value="afternoon">afternoon</option>
                              <option value="evening">evening</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <select name="loading_house" class="rounded">
                              <option value="House">House</option>
                              <option value="Building">Building</option>
                              <option value="Storage facility">
                                Storage facility
                              </option>
                              <option value="Warehouse">Warehouse</option>
                              <option value="Store">Store</option>
                            </select>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="">Select the floor</label>
                              <select name="loading_floor" class="rounded">
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
                            </div>
                            <div class="form-group col-md-6">
                              <label for="">Is there is an elevator?</label>
                              <select name="loading_elevator" class="rounded">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                              </select>
                            </div>
                            <div class="form-group col-md-12">
                              <label for="">Furniture lift required?</label>
                              <select class="loading_lift" class="rounded">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                              </select>
                            </div>
                          </div>
                        
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h5 class="mt-4 text-navy-blue font-weight-bold">
                        <i class="icofont-vehicle-delivery-van mr-2"></i>Place
                        of delivery:
                      </h5>
                      <div class="bg-light-gray my-3 p-3 rounded">
                          <div class="form-group">
                            <input class="form-control" name="delivery_address" type="text"  placeholder="Address"
                            />
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="">Start</label>
                              <input class="form-control" name="delivery_start" type="date" placeholder="Start"/>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="">End</label>
                              <input name="delivery_end"
                                class="form-control"
                                type="date"
                                placeholder="End"
                              />
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Time slot loading</label>
                            <select name="delivery_time_slot" class="rounded">
                              <option value="anytime">anytime</option>
                              <option value="morning">morning</option>
                              <option value="afternoon">afternoon</option>
                              <option value="evening">evening</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <select name="delivery_house" class="rounded">
                              <option value="House">House</option>
                              <option value="Building">Building</option>
                              <option value="Storage facility">
                                Storage facility
                              </option>
                              <option value="Warehouse">Warehouse</option>
                              <option value="Store">Store</option>
                            </select>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="">Select the floor</label>
                              <select name="delivery_floor" class="rounded">
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
                            </div>
                            <div class="form-group col-md-6">
                              <label for="">Is there is an elevator?</label>
                              <select name="delivery_elevator" class="rounded">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                              </select>
                            </div>
                            <div class="form-group col-md-12">
                              <label for="">Furniture lift required?</label>
                              <select name="delivery_lift" class="rounded">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                              </select>
                            </div>
                          </div>
                        </form>
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
                      <div class="col-md-6">
                        <textarea name="information" class="form-control" rows="8"></textarea>
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
                  </div>
                  <h5 class="mt-4 font-weight-bold text-navy-blue">
                    <i class="icofont-image mr-2"></i>Increase your chances of
                    being solicited, insert a photo!
                  </h5>
                  <div class="bg-light-gray p-3 rounded">
                    <p>
                      This information can often be found on the Internet.
                      Approximate measures will already allow carriers to offer
                      you a suitable offer.
                    </p>
                    <div class="custom-file">
                      <input name="image"
                        type="file"
                        class="custom-file-input"
                        id="customFile"
                      />
                      <label class="custom-file-label" for="customFile"
                        >Choose file</label
                      >
                    </div>
                  </div>
                  <div class="mt-4">
                    <div class="custom-control custom-checkbox">
                      <input name="offers" type="checkbox" class="custom-control-input" id="commercial-offer"/>
                      <label class="custom-control-label" for="commercial-offer"
                        >I agree to receive commercial offers from FretBay and
                        its partners</label
                      >
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input name="terms" type="checkbox" class="custom-control-input" id="terms"
                      />
                      <label class="custom-control-label" for="terms"
                        >I accept FretBay's Terms of Use
                      </label>
                    </div>
                    <small class="text-navy-blue mb-2 mt-3 d-block">
                      You have the right to access, modify, rectify, and delete
                      data concerning you from your FretBay account.
                    </small>
                    <small class="text-navy-blue mb-2 d-block">
                      You can also consult the Privacy Policy
                    </small>
                    <div class="text-right">
                      <button
                        data-section="1"
                        class="back btn btn-outline-danger"
                      >
                        <i class="icofont-simple-left mr-2"></i>Back
                      </button>
                      <button
                        data-section="2"
                        class="continue btn text-white bg-navy-blue ml-3"
                      >
                        Continue
                      </button>
                    </div>
                  </div>
                </div>
                <!-- address form end -->
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
      <!-- transport end -->
@endsection


@section('js')
         <!-- transport scripts -->
         <script src="{{ asset('assets/js/transport.js') }}"></script>
@endsection
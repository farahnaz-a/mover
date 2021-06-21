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
            <div class="active">
              <span class="number">1</span>
              <p>Choice of Category</p>
            </div>
            <div>
              <span class="number">2</span>
              <p>Add item / volume</p>
            </div>
            <div>
              <span class="number">3</span>
              <p>Address, Information / Photo</p>
            </div>
          </div>
        </div>
      </section>
      <!-- transport start -->
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
                      <div class="transport-item" data-target="#household">
                        <span class="icon"
                          ><i class="icofont-building-alt"></i
                        ></span>
                        <span>Household equipment</span>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                      <div class="transport-item" data-target="#moving">
                        <span class="icon"
                          ><i class="icofont-truck-loaded"></i
                        ></span>
                        <span>Moving</span>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                      <div class="transport-item" data-target="#vehicle">
                        <span class="icon"
                          ><i class="icofont-car-alt-3"></i
                        ></span>
                        <span>Vehicle</span>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                      <div
                        class="transport-item"
                        data-target="#motorcycleSport"
                      >
                        <span class="icon"
                          ><i class="icofont-motor-biker"></i
                        ></span>
                        <span>Motorcycles and sports vehicles</span>
                      </div>
                    </div>
                    <div
                      class="
                        col-lg-3 col-md-4 col-sm-6
                        d-none
                        hidden-transport-item
                      "
                    >
                      <div
                        class="transport-item"
                        data-target="#boat-voluminous"
                      >
                        <span class="icon"
                          ><i class="icofont-speed-boat"></i
                        ></span>
                        <span>Boats & voluminous</span>
                      </div>
                    </div>
                    <div
                      class="
                        col-lg-3 col-md-4 col-sm-6
                        d-none
                        hidden-transport-item
                      "
                    >
                      <div class="transport-item" data-target="#fragileGoods">
                        <span class="icon"
                          ><i class="icofont-speed-boat"></i
                        ></span>
                        <span>Fragile goods</span>
                      </div>
                    </div>
                    <div
                      class="
                        col-lg-3 col-md-4 col-sm-6
                        d-none
                        hidden-transport-item
                      "
                    >
                      <div class="transport-item" data-target="#package">
                        <span class="icon"
                          ><i class="icofont-package"></i
                        ></span>
                        <span>Package/Fold</span>
                      </div>
                    </div>
                    <div
                      class="
                        col-lg-3 col-md-4 col-sm-6
                        d-none
                        hidden-transport-item
                      "
                    >
                      <div class="transport-item" data-target="#pallet">
                        <span class="icon"
                          ><i class="icofont-gift-box"></i
                        ></span>
                        <span>Pallet</span>
                      </div>
                    </div>
                    <div
                      class="
                        col-lg-3 col-md-4 col-sm-6
                        d-none
                        hidden-transport-item
                      "
                    >
                      <div class="transport-item" data-target="#animal">
                        <span class="icon"
                          ><i class="icofont-cat-dog"></i
                        ></span>
                        <span>Animals</span>
                      </div>
                    </div>
                    <div
                      class="
                        col-lg-3 col-md-4 col-sm-6
                        d-none
                        hidden-transport-item
                      "
                    >
                      <div class="transport-item" data-target="#agri-food">
                        <span class="icon"
                          ><i class="icofont-food-basket"></i
                        ></span>
                        <span>Agri-food</span>
                      </div>
                    </div>
                    <div
                      class="
                        col-lg-3 col-md-4 col-sm-6
                        d-none
                        hidden-transport-item
                      "
                    >
                      <div
                        class="transport-item"
                        data-target="#commercial-good"
                      >
                        <span class="icon"
                          ><i class="icofont-food-basket"></i
                        ></span>
                        <span>Commercial goods</span>
                      </div>
                    </div>
                    <div
                      class="
                        col-lg-3 col-md-4 col-sm-6
                        d-none
                        hidden-transport-item
                      "
                    >
                      <div class="transport-item" data-target="#miscellaneous">
                        <span class="icon"
                          ><i class="icofont-question"></i
                        ></span>
                        <span>Miscellaneous</span>
                      </div>
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

                <!-- household equipment form start -->
                <div
                  class="bg-white shadow-sm my-3 p-3 rounded d-none"
                  id="household"
                >
                  <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                  <span>Give a name to your listing:</span>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="bg-light-gray p-3 rounded mt-3">
                        <form
                          action="#"
                          onsubmit="return false"
                          class="needs-validation"
                          id="household-form"
                        >
                          <input
                            type="hidden"
                            name="transportType"
                            value="household"
                          />
                          <div class="form-group">
                            <input
                              type="text"
                              placeholder="3-seater Sofa, chairs, desks..."
                              class="form-control"
                            />
                          </div>
                          <p>
                            Information about your equipment
                            <span class="text-navy-blue">(required)</span> :
                          </p>
                          <div class="form-group">
                            <input
                              name="articleName"
                              type="text"
                              placeholder="Article name"
                              class="form-control"
                            />
                          </div>
                          <div class="form-row">
                            <div class="form-group input-group col-md-6">
                              <input
                                name="length"
                                type="number"
                                placeholder="Length (cm)"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-box"></i
                                ></span>
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                name="width"
                                type="number"
                                placeholder="Width (cm)"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-box"></i
                                ></span>
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                name="height"
                                type="number"
                                placeholder="Height (cm)"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-box"></i
                                ></span>
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                name="weight"
                                type="number"
                                placeholder="Weight"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  >KG</span
                                >
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                name="quantity"
                                type="number"
                                placeholder="Quantity"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-numbered"></i
                                ></span>
                              </div>
                            </div>
                          </div>
                          <div
                            id="household-empty-alert"
                            class="form-group d-none"
                          >
                            <div class="alert alert-danger">
                              Please fill every field carefully
                            </div>
                          </div>
                          <div class="form-group">
                            <button
                              class="article-btn btn text-white bg-navy-blue"
                              data-target="#household-form"
                              data-article="#household-articles"
                              data-alert="#household-empty-alert"
                            >
                              Add an article
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-6 d-none" id="household-articles"></div>
                  </div>
                  <div class="text-right">
                    <button
                      data-section="0"
                      class="back btn btn-outline-danger"
                    >
                      <i class="icofont-simple-left mr-2"></i>Back
                    </button>
                    <button
                      data-section="1"
                      class="continue btn text-white bg-navy-blue ml-3"
                    >
                      Continue
                    </button>
                  </div>
                </div>
                <!-- household equipment form end -->

                <!-- vehicle form start -->
                <div
                  class="bg-white shadow-sm my-3 p-3 rounded d-none"
                  id="vehicle"
                >
                  <div id="vehicle1">
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
                      <button
                        data-section="0"
                        class="back btn btn-outline-danger"
                      >
                        <i class="icofont-simple-left mr-2"></i>Back
                      </button>
                    </div>
                  </div>
                  <div id="vehicle2" class="d-none">
                    <h4 class="font-weight-bold text-navy-blue">
                      ADD ARTICLES
                    </h4>
                    <span>Give a name to your listing:</span>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="bg-light-gray p-3 rounded mt-3">
                          <form
                            action="#"
                            onsubmit="return false"
                            class="needs-validation"
                            id="vehicle-form"
                          >
                            <input type="hidden" id="vehicle-type" />
                            <input
                              type="hidden"
                              name="transportType"
                              value="vehicle"
                            />
                            <div class="form-group">
                              <input
                                type="text"
                                placeholder="Ford Fiesta, Peugeot 405, Golf IV..."
                                class="form-control"
                              />
                            </div>
                            <p>
                              Information about your equipment
                              <span class="text-navy-blue">(required)</span> :
                            </p>
                            <div class="form-group">
                              <input
                                name="vehicleName"
                                type="text"
                                placeholder="Vehicle name"
                                class="form-control"
                              />
                            </div>
                            <div class="form-row">
                              <div class="form-group input-group col-md-6">
                                <input
                                  name="make"
                                  type="text"
                                  placeholder="Make"
                                  class="form-control"
                                />
                              </div>
                              <div class="form-group input-group col-md-6">
                                <input
                                  name="model"
                                  type="text"
                                  placeholder="Model"
                                  class="form-control"
                                />
                              </div>
                              <div class="form-group input-group col-12">
                                <input
                                  name="estimationValue"
                                  type="number"
                                  placeholder="Estimation value"
                                  class="form-control"
                                />
                              </div>
                            </div>
                            <div class="d-flex justify-content-between">
                              <label for="movingVehicle1">Moving vehicle</label>
                              <div class="custom-control custom-switch">
                                <input
                                  type="checkbox"
                                  class="custom-control-input"
                                  id="movingVehicle1"
                                  name="movingVehicle"
                                />
                                <label
                                  class="custom-control-label"
                                  for="movingVehicle1"
                                ></label>
                              </div>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                              <label for="acceptConveyorsVehicle"
                                >I accept conveyors</label
                              >
                              <div class="custom-control custom-switch">
                                <input
                                  type="checkbox"
                                  class="custom-control-input"
                                  id="acceptConveyorsVehicle"
                                  name="conveyors"
                                />
                                <label
                                  class="custom-control-label"
                                  for="acceptConveyorsVehicle"
                                ></label>
                              </div>
                            </div>
                            <p>
                              The courier is an approved professional driver who
                              is authorised to drive your vehicle from point A
                              to point B.
                            </p>
                            <p class="text-danger">
                              Warning, this often more economical option is not
                              possible in case of a vehicle which is not in
                              working order or speed-limited (ex: small car
                              without a license).
                            </p>
                            <div
                              id="vehicle-empty-alert"
                              class="form-group d-none"
                            >
                              <div class="alert alert-danger">
                                Please fill every field carefully
                              </div>
                            </div>
                            <div class="form-group">
                              <button
                                class="article-btn btn text-white bg-navy-blue"
                                data-target="#vehicle-form"
                                data-article="#vehicle-articles"
                                data-alert="#vehicle-empty-alert"
                              >
                                Add an article
                              </button>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div class="col-md-6 d-none" id="vehicle-articles"></div>
                    </div>
                    <div class="text-right">
                      <button
                        data-section="0"
                        class="back btn btn-outline-danger"
                      >
                        <i class="icofont-simple-left mr-2"></i>Back
                      </button>
                      <button
                        data-section="1"
                        class="continue btn text-white bg-navy-blue ml-3"
                      >
                        Continue
                      </button>
                    </div>
                  </div>
                </div>
                <!-- vehicle form end -->

                <!-- motorcycle and sport form start -->
                <div
                  class="bg-white shadow-sm my-3 p-3 rounded d-none"
                  id="motorcycleSport"
                >
                  <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                  <span>Give a name to your listing:</span>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="bg-light-gray p-3 rounded mt-3">
                        <form
                          action="#"
                          onsubmit="return false"
                          class="needs-validation article-form"
                          id="motorcycleSport-form"
                        >
                          <input
                            type="hidden"
                            name="transportType"
                            value="motorcycleSport"
                          />
                          <div class="form-group">
                            <input
                              type="text"
                              placeholder="750 GSXR, 1000 Hayabusa..."
                              class="form-control"
                            />
                          </div>
                          <p>
                            Information about your equipment
                            <span class="text-navy-blue">(required)</span> :
                          </p>
                          <div class="form-group">
                            <input
                              name="vehicleName"
                              type="text"
                              placeholder="Motorcycle name"
                              class="form-control"
                            />
                          </div>
                          <div class="form-row">
                            <div class="form-group input-group col-md-6">
                              <input
                                name="make"
                                type="text"
                                placeholder="Make"
                                class="form-control"
                              />
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                name="model"
                                type="text"
                                placeholder="Model"
                                class="form-control"
                              />
                            </div>
                            <div class="form-group input-group col-12">
                              <input
                                name="height"
                                type="number"
                                placeholder="Estimation value"
                                class="form-control"
                              />
                            </div>
                          </div>
                          <div class="d-flex justify-content-between">
                            <label for="movingVehicle2">Moving vehicle</label>
                            <div class="custom-control custom-switch">
                              <input
                                type="checkbox"
                                class="custom-control-input"
                                id="movingVehicle2"
                                name="movingVehicle"
                              />
                              <label
                                class="custom-control-label"
                                for="movingVehicle2"
                              ></label>
                            </div>
                          </div>
                          <div class="d-flex justify-content-between mb-3">
                            <label for="acceptConveyorsMotorcycle"
                              >I accept conveyors</label
                            >
                            <div class="custom-control custom-switch">
                              <input
                                type="checkbox"
                                class="custom-control-input"
                                id="acceptConveyorsMotorcycle"
                                name="conveyors"
                              />
                              <label
                                class="custom-control-label"
                                for="acceptConveyorsMotorcycle"
                              ></label>
                            </div>
                          </div>
                          <p>
                            The courier is an approved professional driver who
                            is authorised to drive your vehicle from point A to
                            point B.
                          </p>
                          <p class="text-danger">
                            Warning, this often more economical option is not
                            possible in case of a vehicle which is not in
                            working order or speed-limited (ex: small car
                            without a license).
                          </p>
                          <div
                            id="motorcycleSport-empty-alert"
                            class="form-group d-none"
                          >
                            <div class="alert alert-danger">
                              Please fill every field carefully
                            </div>
                          </div>
                          <div class="form-group">
                            <button
                              class="article-btn btn text-white bg-navy-blue"
                              data-target="#motorcycleSport-form"
                              data-article="#motorcycleSport-articles"
                              data-alert="#motorcycleSport-empty-alert"
                            >
                              Add an article
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div
                      class="col-md-6 d-none"
                      id="motorcycleSport-articles"
                    ></div>
                  </div>
                  <div class="text-right">
                    <button
                      data-section="0"
                      class="back btn btn-outline-danger"
                    >
                      <i class="icofont-simple-left mr-2"></i>Back
                    </button>
                    <button
                      data-section="1"
                      class="continue btn text-white bg-navy-blue ml-3"
                    >
                      Continue
                    </button>
                  </div>
                </div>
                <!-- motorcycle and sport form end -->

                <!-- boats and voluminous sport form start -->
                <div
                  class="bg-white shadow-sm my-3 p-3 rounded d-none"
                  id="boat-voluminous"
                >
                  <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                  <span>Give a name to your listing:</span>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="bg-light-gray p-3 rounded mt-3">
                        <form
                          action="#"
                          onsubmit="return false"
                          class="needs-validation article-form"
                          id="boat-voluminous-form"
                        >
                          <input
                            type="hidden"
                            name="transportType"
                            value="boat-voluminous"
                          />
                          <div class="form-group">
                            <input
                              type="text"
                              placeholder="3-seater Sofa, chairs, desks..."
                              class="form-control"
                            />
                          </div>
                          <p>
                            Information on the boat to be transported
                            <span class="text-navy-blue">(required)</span> :
                          </p>
                          <div class="form-group">
                            <input
                              name="boatName"
                              type="text"
                              placeholder="Boat name"
                              class="form-control"
                            />
                          </div>
                          <div class="form-row">
                            <div class="form-group input-group col-md-6">
                              <input
                                name="length"
                                type="number"
                                placeholder="Length (cm)"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-box"></i
                                ></span>
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                name="width"
                                type="number"
                                placeholder="Width (cm)"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-box"></i
                                ></span>
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                name="height"
                                type="number"
                                placeholder="Height (cm)"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-box"></i
                                ></span>
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                name="quantity"
                                type="number"
                                placeholder="Quantity"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-numbered"></i
                                ></span>
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                name="make"
                                type="text"
                                placeholder="Make"
                                class="form-control"
                              />
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                name="model"
                                type="text"
                                placeholder="Model"
                                class="form-control"
                              />
                            </div>
                            <div class="form-group input-group col-12">
                              <input
                                type="number"
                                placeholder="Estimation value"
                                class="form-control"
                              />
                            </div>
                          </div>
                          <div class="d-flex justify-content-between mb-3">
                            <label for="acceptConveyors"
                              >I accept conveyors</label
                            >
                            <div class="custom-control custom-switch">
                              <input
                                type="checkbox"
                                class="custom-control-input"
                                id="acceptConveyors"
                                name="conveyors"
                              />
                              <label
                                class="custom-control-label"
                                for="acceptConveyors"
                              ></label>
                            </div>
                          </div>
                          <div
                            id="boat-voluminous-empty-alert"
                            class="form-group d-none"
                          >
                            <div class="alert alert-danger">
                              Please fill every field carefully
                            </div>
                          </div>
                          <div class="form-group">
                            <button
                              class="article-btn btn text-white bg-navy-blue"
                              data-target="#boat-voluminous-form"
                              data-article="#boat-voluminous-articles"
                              data-alert="#boat-voluminous-empty-alert"
                            >
                              Add an article
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div
                      class="col-md-6 d-none"
                      id="boat-voluminous-articles"
                    ></div>
                  </div>
                  <div class="text-right">
                    <button
                      data-section="0"
                      class="back btn btn-outline-danger"
                    >
                      <i class="icofont-simple-left mr-2"></i>Back
                    </button>
                    <button
                      data-section="1"
                      class="continue btn text-white bg-navy-blue ml-3"
                    >
                      Continue
                    </button>
                  </div>
                </div>
                <!-- boats and voluminous sport form end -->

                <!--  Fragile goods form start -->
                <div
                  class="bg-white shadow-sm my-3 p-3 rounded d-none"
                  id="fragileGoods"
                >
                  <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                  <span>Give a name to your listing:</span>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="bg-light-gray p-3 rounded mt-3">
                        <form
                          action="#"
                          onsubmit="return false"
                          class="needs-validation article-form"
                          id="fragileGoods-form"
                        >
                          <input
                            type="hidden"
                            name="transportType"
                            value="fragileGoods"
                          />
                          <div class="form-group">
                            <input
                              name="articleName"
                              type="text"
                              placeholder="Grand piano, Antique paintings..."
                              class="form-control"
                            />
                          </div>
                          <p>
                            Information about your equipment
                            <span class="text-navy-blue">(required)</span> :
                          </p>
                          <div class="form-group">
                            <input
                              type="text"
                              placeholder="Article name"
                              class="form-control"
                            />
                          </div>
                          <div class="form-row">
                            <div class="form-group input-group col-md-6">
                              <input
                                name="length"
                                type="number"
                                placeholder="Length (cm)"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-box"></i
                                ></span>
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                name="width"
                                type="number"
                                placeholder="Width (cm)"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-box"></i
                                ></span>
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                name="height"
                                type="number"
                                placeholder="Height (cm)"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-box"></i
                                ></span>
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                type="number"
                                placeholder="Weight"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  >KG</span
                                >
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                name="quantity"
                                type="number"
                                placeholder="Quantity"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-numbered"></i
                                ></span>
                              </div>
                            </div>
                          </div>
                          <div
                            id="fragileGoods-empty-alert"
                            class="form-group d-none"
                          >
                            <div class="alert alert-danger">
                              Please fill every field carefully
                            </div>
                          </div>
                          <div class="form-group">
                            <button
                              class="article-btn btn text-white bg-navy-blue"
                              data-target="#fragileGoods-form"
                              data-article="#fragileGoods-articles"
                              data-alert="#fragileGoods-empty-alert"
                            >
                              Add an article
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div
                      class="col-md-6 d-none"
                      id="fragileGoods-articles"
                    ></div>
                  </div>
                  <div class="text-right">
                    <button
                      data-section="0"
                      class="back btn btn-outline-danger"
                    >
                      <i class="icofont-simple-left mr-2"></i>Back
                    </button>
                    <button
                      data-section="1"
                      class="continue btn text-white bg-navy-blue ml-3"
                    >
                      Continue
                    </button>
                  </div>
                </div>
                <!-- Fragile goods form end -->

                <!--  Package/Flod form start -->
                <div
                  class="bg-white shadow-sm my-3 p-3 rounded d-none"
                  id="package"
                >
                  <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                  <span>Give a name to your listing:</span>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="bg-light-gray p-3 rounded mt-3">
                        <form
                          action="#"
                          onsubmit="return false"
                          class="needs-validation article-form"
                          id="package-form"
                        >
                          <input
                            type="hidden"
                            name="transportType"
                            value="package"
                          />
                          <div class="form-group">
                            <input
                              type="text"
                              placeholder="Grand piano, Antique paintings..."
                              class="form-control"
                            />
                          </div>
                          <p>
                            Information about your equipment
                            <span class="text-navy-blue">(required)</span> :
                          </p>
                          <div class="form-group">
                            <input
                              name="articleName"
                              type="text"
                              placeholder="Article name"
                              class="form-control"
                            />
                          </div>
                          <div class="form-row">
                            <div class="form-group input-group col-md-6">
                              <input
                                name="length"
                                type="number"
                                placeholder="Length (cm)"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-box"></i
                                ></span>
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                name="width"
                                type="number"
                                placeholder="Width (cm)"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-box"></i
                                ></span>
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                name="height"
                                type="number"
                                placeholder="Height (cm)"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-box"></i
                                ></span>
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                name="weight"
                                type="number"
                                placeholder="Weight"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  >KG</span
                                >
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                name="quantity"
                                type="number"
                                placeholder="Quantity"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-numbered"></i
                                ></span>
                              </div>
                            </div>
                          </div>
                          <div
                            id="package-empty-alert"
                            class="form-group d-none"
                          >
                            <div class="alert alert-danger">
                              Please fill every field carefully
                            </div>
                          </div>
                          <div class="form-group">
                            <button
                              class="article-btn btn text-white bg-navy-blue"
                              data-target="#package-form"
                              data-article="#package-articles"
                              data-alert="#package-empty-alert"
                            >
                              Add an article
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-6 d-none" id="package-articles"></div>
                  </div>
                  <div class="text-right">
                    <button
                      data-section="0"
                      class="back btn btn-outline-danger"
                    >
                      <i class="icofont-simple-left mr-2"></i>Back
                    </button>
                    <button
                      data-section="1"
                      class="continue btn text-white bg-navy-blue ml-3"
                    >
                      Continue
                    </button>
                  </div>
                </div>
                <!-- Package/Flod form end -->

                <!--  Pallet form start -->
                <div
                  class="bg-white shadow-sm my-3 p-3 rounded d-none"
                  id="pallet"
                >
                  <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                  <span>Give a name to your listing:</span>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="bg-light-gray p-3 rounded mt-3">
                        <form
                          action="#"
                          onsubmit="return false"
                          class="needs-validation article-form"
                          id="pallet-form"
                        >
                          <input
                            type="hidden"
                            name="transportType"
                            value="pallet"
                          />
                          <div class="form-group">
                            <input
                              type="text"
                              placeholder="Grand piano, Antique paintings..."
                              class="form-control"
                            />
                          </div>
                          <p>
                            Information about your pallet
                            <span class="text-navy-blue">(required)</span> :
                          </p>
                          <div class="form-group">
                            <input
                              name="articleName"
                              type="text"
                              placeholder="Article name"
                              class="form-control"
                            />
                          </div>
                          <div class="form-group">
                            <select name="dim">
                              <option value="120 x 80 cm EUR EPAL">
                                120 x 80 cm EUR EPAL
                              </option>
                              <option value="80 x 60 cm half pallet">
                                80 x 60 cm half pallet
                              </option>
                              <option value="120 x 100 cm Standard Export">
                                120 x 100 cm Standard Export
                              </option>
                              <option value="107 x 107 cm">107 x 107 cm</option>
                              <option value="110 x 110 cm">110 x 110 cm</option>
                              <option value="114 x 114 cm">114 x 114 cm</option>
                              <option value="114 x 76 cm">114 x 76 cm</option>
                              <option value="120 x 120 cm">120 x 120 cm</option>
                              <option value="122 x 102 cm">122 x 102 cm</option>
                              <option value="130 x 110 cm">130 x 110 cm</option>
                            </select>
                          </div>
                          <div class="form-row">
                            <div class="form-group input-group col-md-6">
                              <input
                                name="height"
                                type="number"
                                placeholder="Height (cm)"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-box"></i
                                ></span>
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                name="weight"
                                type="number"
                                placeholder="Weight"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  >KG</span
                                >
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                name="quantity"
                                type="number"
                                placeholder="Quantity"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-numbered"></i
                                ></span>
                              </div>
                            </div>
                          </div>
                          <div
                            id="pallet-empty-alert"
                            class="form-group d-none"
                          >
                            <div class="alert alert-danger">
                              Please fill every field carefully
                            </div>
                          </div>
                          <div class="form-group">
                            <button
                              class="article-btn btn text-white bg-navy-blue"
                              data-target="#pallet-form"
                              data-article="#pallet-articles"
                              data-alert="#pallet-empty-alert"
                            >
                              Add an article
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-6 d-none" id="pallet-articles"></div>
                  </div>
                  <div class="text-right">
                    <button
                      data-section="0"
                      class="back btn btn-outline-danger"
                    >
                      <i class="icofont-simple-left mr-2"></i>Back
                    </button>
                    <button
                      data-section="1"
                      class="continue btn text-white bg-navy-blue ml-3"
                    >
                      Continue
                    </button>
                  </div>
                </div>
                <!-- Pallet form end -->

                <!--  Animal form start -->
                <div
                  class="bg-white shadow-sm my-3 p-3 rounded d-none"
                  id="animal"
                >
                  <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                  <span>Give a name to your listing:</span>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="bg-light-gray p-3 rounded mt-3">
                        <form
                          action="#"
                          onsubmit="return false"
                          class="needs-validation article-form"
                          id="animal-form"
                        >
                          <input
                            type="hidden"
                            name="transportType"
                            value="animal"
                          />
                          <div class="form-group">
                            <input
                              type="text"
                              placeholder="2 cats, 1 dogs, 40 chickens..."
                              class="form-control"
                            />
                          </div>
                          <p>
                            Information about your animals
                            <span class="text-navy-blue">(required)</span> :
                          </p>
                          <div class="form-group">
                            <input
                              name="animalName"
                              type="text"
                              placeholder="Animal name"
                              class="form-control"
                            />
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <input
                                name="animalBreed"
                                type="text"
                                placeholder="Animal breed"
                                class="form-control"
                              />
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                name="weight"
                                type="number"
                                placeholder="Weight"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  >KG</span
                                >
                              </div>
                            </div>
                            <div class="form-group col-md-6">
                              <input
                                name="specialNeeds"
                                type="text"
                                placeholder="Special needs"
                                class="form-control"
                              />
                            </div>
                            <div class="form-group col-md-6">
                              <input
                                name="vaccinations"
                                type="text"
                                placeholder="Are the vaccinations up to date?"
                                class="form-control"
                              />
                            </div>
                          </div>
                          <p>Cage (optional) :</p>
                          <div class="form-row">
                            <div class="form-group input-group col-md-6">
                              <input
                                name="length"
                                type="number"
                                placeholder="Length (cm)"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-box"></i
                                ></span>
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                name="width"
                                type="number"
                                placeholder="Width"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  >KG</span
                                >
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                name="height"
                                type="number"
                                placeholder="Height (cm)"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-box"></i
                                ></span>
                              </div>
                            </div>
                          </div>
                          <div
                            id="animal-empty-alert"
                            class="form-group d-none"
                          >
                            <div class="alert alert-danger">
                              Please fill every field carefully
                            </div>
                          </div>
                          <div class="form-group">
                            <button
                              class="article-btn btn text-white bg-navy-blue"
                              data-target="#animal-form"
                              data-article="#animal-articles"
                              data-alert="#animal-empty-alert"
                            >
                              Add an article
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-6 d-none" id="animal-articles"></div>
                  </div>
                  <div class="text-right">
                    <button
                      data-section="0"
                      class="back btn btn-outline-danger"
                    >
                      <i class="icofont-simple-left mr-2"></i>Back
                    </button>
                    <button
                      data-section="1"
                      class="continue btn text-white bg-navy-blue ml-3"
                    >
                      Continue
                    </button>
                  </div>
                </div>
                <!-- Animal form end -->

                <!--  Agri-food form start -->
                <div
                  class="bg-white shadow-sm my-3 p-3 rounded d-none"
                  id="agri-food"
                >
                  <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                  <span>Give a name to your listing:</span>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="bg-light-gray p-3 rounded mt-3">
                        <form
                          action="#"
                          onsubmit="return false"
                          class="needs-validation article-form"
                          id="agri-food-form"
                        >
                          <input
                            type="hidden"
                            name="transportType"
                            value="agri-food"
                          />
                          <div class="form-group">
                            <input
                              type="text"
                              placeholder="Roquefort, dried fruit, spices..."
                              class="form-control"
                            />
                          </div>
                          <p>
                            Information about your agri-food
                            <span class="text-navy-blue">(required)</span> :
                          </p>
                          <div class="form-group">
                            <input
                              name="articleName"
                              type="text"
                              placeholder="Article name"
                              class="form-control"
                            />
                          </div>
                          <div class="form-row">
                            <div class="form-group input-group col-md-6">
                              <input
                                name="weight"
                                type="number"
                                placeholder="Weight"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  >KG</span
                                >
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                                name="quality"
                                type="number"
                                placeholder="Quantity"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-numbered"></i
                                ></span>
                              </div>
                            </div>
                          </div>
                          <div
                            id="agri-food-empty-alert"
                            class="form-group d-none"
                          >
                            <div class="alert alert-danger">
                              Please fill every field carefully
                            </div>
                          </div>
                          <div class="form-group">
                            <button
                              class="article-btn btn text-white bg-navy-blue"
                              data-target="#agri-food-form"
                              data-article="#agri-food-articles"
                              data-alert="#agri-food-empty-alert"
                            >
                              Add an article
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-6 d-none" id="agri-food-articles"></div>
                  </div>
                  <div class="text-right">
                    <button
                      data-section="0"
                      class="back btn btn-outline-danger"
                    >
                      <i class="icofont-simple-left mr-2"></i>Back
                    </button>
                    <button
                      data-section="1"
                      class="continue btn text-white bg-navy-blue ml-3"
                    >
                      Continue
                    </button>
                  </div>
                </div>
                <!-- Agri-food form end -->

                <!--  Commercial Goods form start -->
                <div
                  class="bg-white shadow-sm my-3 p-3 rounded d-none"
                  id="commercial-good"
                >
                  <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                  <span>Give a name to your listing:</span>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="bg-light-gray p-3 rounded mt-3">
                        <form
                          action="#"
                          onsubmit="return false"
                          class="needs-validation article-form"
                          id="commercial-good-form"
                        >
                          <input
                            type="hidden"
                            name="transportType"
                            value="commercial-good"
                          />
                          <div class="form-group">
                            <input
                              type="text"
                              placeholder="Marble, Petrol, Acid..."
                              class="form-control"
                            />
                          </div>
                          <p>
                            Information about your equipment
                            <span class="text-navy-blue">(required)</span> :
                          </p>
                          <div class="form-group">
                            <input
                            name="articleName"
                              type="text"
                              placeholder="Article name"
                              class="form-control"
                            />
                          </div>
                          <div class="form-row">
                            <div class="form-group input-group col-md-6">
                              <input
                              name="length"
                                type="number"
                                placeholder="Length (cm)"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-box"></i
                                ></span>
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                              name="width"
                                type="number"
                                placeholder="Width (cm)"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-box"></i
                                ></span>
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                              name="height"
                                type="number"
                                placeholder="Height (cm)"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-box"></i
                                ></span>
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                              name="weight"
                                type="number"
                                placeholder="Weight"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  >KG</span
                                >
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                              name="quantity"
                                type="number"
                                placeholder="Quantity"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-numbered"></i
                                ></span>
                              </div>
                            </div>
                          </div>
                          <div id="commercial-good-empty-alert" class="form-group d-none">
                            <div class="alert alert-danger">
                              Please fill every field carefully
                            </div>
                          </div>
                          <div class="form-group">
                            <button
                              class="article-btn btn text-white bg-navy-blue"
                              data-target="#commercial-good-form"
                              data-article="#commercial-good-articles"
                              data-alert="#commercial-good-empty-alert"
                            >
                              Add an article
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-6 d-none" id="commercial-good-articles"></div>
                  </div>
                  <div class="text-right">
                    <button
                      data-section="0"
                      class="back btn btn-outline-danger"
                    >
                      <i class="icofont-simple-left mr-2"></i>Back
                    </button>
                    <button
                      data-section="1"
                      class="continue btn text-white bg-navy-blue ml-3"
                    >
                      Continue
                    </button>
                  </div>
                </div>
                <!-- Commercial Goods form end -->

                <!--  Miscellaneous form start -->
                <div
                  class="bg-white shadow-sm my-3 p-3 rounded d-none"
                  id="miscellaneous"
                >
                  <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                  <span>Give a name to your listing:</span>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="bg-light-gray p-3 rounded mt-3">
                        <form
                          action="#"
                          onsubmit="return false"
                          class="needs-validation article-form"
                          id="miscellaneous-form"
                        >
                          <input
                            type="hidden"
                            name="transportType"
                            value="miscellaneous"
                          />
                          <div class="form-group">
                            <input
                              type="text"
                              placeholder="Others..."
                              class="form-control"
                            />
                          </div>
                          <p>
                            Information about your equipment
                            <span class="text-navy-blue">(required)</span> :
                          </p>
                          <div class="form-group">
                            <input
                            name="articleName"
                              type="text"
                              placeholder="Article name"
                              class="form-control"
                            />
                          </div>
                          <div class="form-row">
                            <div class="form-group input-group col-md-6">
                              <input
                              name="length"
                                type="number"
                                placeholder="Length (cm)"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-box"></i
                                ></span>
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                              name="width"
                                type="number"
                                placeholder="Width (cm)"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-box"></i
                                ></span>
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                              name="height"
                                type="number"
                                placeholder="Height (cm)"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-box"></i
                                ></span>
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                              name="weight"
                                type="number"
                                placeholder="Weight"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  >KG</span
                                >
                              </div>
                            </div>
                            <div class="form-group input-group col-md-6">
                              <input
                              name="quantity"
                                type="number"
                                placeholder="Quantity"
                                class="form-control"
                              />
                              <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-numbered"></i
                                ></span>
                              </div>
                            </div>
                          </div>
                          <div id="miscellaneous-empty-alert" class="form-group d-none">
                            <div class="alert alert-danger">
                              Please fill every field carefully
                            </div>
                          </div>
                          <div class="form-group">
                            <button
                              class="article-btn btn text-white bg-navy-blue"
                              data-target="#miscellaneous-form"
                              data-article="#miscellaneous-articles"
                              data-alert="#miscellaneous-empty-alert"
                            >
                              Add an article
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-6 d-none" id="miscellaneous-articles"></div>
                  </div>
                  <div class="text-right">
                    <button
                      data-section="0"
                      class="back btn btn-outline-danger"
                    >
                      <i class="icofont-simple-left mr-2"></i>Back
                    </button>
                    <button
                      data-section="1"
                      class="continue btn text-white bg-navy-blue ml-3"
                    >
                      Continue
                    </button>
                  </div>
                </div>
                <!-- Miscellaneous form end -->

                <!-- address form start -->
                <div
                  class="bg-white shadow-sm my-3 p-3 rounded d-none"
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
                        <form action="#">
                          <div class="form-group">
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Address"
                            />
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="">Start</label>
                              <input
                                class="form-control"
                                type="date"
                                placeholder="Start"
                              />
                            </div>
                            <div class="form-group col-md-6">
                              <label for="">End</label>
                              <input
                                class="form-control"
                                type="date"
                                placeholder="End"
                              />
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Time slot loading</label>
                            <select class="rounded">
                              <option value="anytime">anytime</option>
                              <option value="morning">morning</option>
                              <option value="afternoon">afternoon</option>
                              <option value="evening">evening</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <select class="rounded">
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
                              <select class="rounded">
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
                              <select class="rounded">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                              </select>
                            </div>
                            <div class="form-group col-md-12">
                              <label for="">Furniture lift required?</label>
                              <select class="rounded">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                              </select>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h5 class="mt-4 text-navy-blue font-weight-bold">
                        <i class="icofont-vehicle-delivery-van mr-2"></i>Place
                        of delivery:
                      </h5>
                      <div class="bg-light-gray my-3 p-3 rounded">
                        <form action="#">
                          <div class="form-group">
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Address"
                            />
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="">Start</label>
                              <input
                                class="form-control"
                                type="date"
                                placeholder="Start"
                              />
                            </div>
                            <div class="form-group col-md-6">
                              <label for="">End</label>
                              <input
                                class="form-control"
                                type="date"
                                placeholder="End"
                              />
                            </div>
                          </div>
                          <div class="form-group">
                            <label>Time slot loading</label>
                            <select class="rounded">
                              <option value="anytime">anytime</option>
                              <option value="morning">morning</option>
                              <option value="afternoon">afternoon</option>
                              <option value="evening">evening</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <select class="rounded">
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
                              <select class="rounded">
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
                              <select class="rounded">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                              </select>
                            </div>
                            <div class="form-group col-md-12">
                              <label for="">Furniture lift required?</label>
                              <select class="rounded">
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
                        <textarea class="form-control" rows="8"></textarea>
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
                      <input
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
                      <input
                        type="checkbox"
                        class="custom-control-input"
                        id="commercial-offer"
                      />
                      <label class="custom-control-label" for="commercial-offer"
                        >I agree to receive commercial offers from FretBay and
                        its partners</label
                      >
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input
                        type="checkbox"
                        class="custom-control-input"
                        id="terms"
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

                <!-- registration & login form start -->
                <div
                  class="bg-white shadow-sm my-3 p-3 rounded d-none"
                  id="user-form"
                >
                  <div class="row justify-content-center">
                    <div class="col-md-8" id="registration">
                      <div
                        class="
                          d-flex
                          justify-content-between
                          align-items-center
                          flex-wrap
                          mt-4
                        "
                      >
                        <h4 class="font-weight-bold text-navy-blue mr-3">
                          Your FretBay account
                        </h4>
                        <span id="to-login" class="mb-2" style="cursor: pointer"
                          ><i class="icofont-user-alt-7 mr-2"></i>Already have
                          an account?</span
                        >
                      </div>
                      <div class="bg-light-gray p-3 rounded mt-3">
                        <p class="text-center">
                          Don't worry, your number will only be visible by the
                          FretBay team who can contact you if necessary to
                          facilitate your search for carriers
                        </p>
                        <form action="#">
                          <div class="form-group input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1"
                                ><i class="icofont-box"></i
                              ></span>
                            </div>
                            <input
                              type="email"
                              placeholder="Email"
                              class="form-control"
                            />
                          </div>
                          <div class="form-group input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1"
                                ><i class="icofont-user-alt-7"></i
                              ></span>
                            </div>
                            <input
                              type="text"
                              placeholder="Username"
                              class="form-control"
                            />
                          </div>
                          <div class="form-group input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1"
                                ><i class="icofont-flag"></i
                              ></span>
                            </div>
                            <input
                              type="tel"
                              placeholder="Telephone"
                              class="form-control"
                            />
                          </div>
                          <div class="form-group input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1"
                                ><i class="icofont-lock"></i
                              ></span>
                            </div>
                            <input
                              type="password"
                              placeholder="Password"
                              class="form-control"
                            />
                          </div>
                          <div class="form-group input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1"
                                ><i class="icofont-lock"></i
                              ></span>
                            </div>
                            <input
                              type="password"
                              placeholder="Confirm password"
                              class="form-control"
                            />
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-8 d-none" id="login">
                      <div
                        class="
                          d-flex
                          justify-content-between
                          align-items-center
                          flex-wrap
                          mt-4
                        "
                      >
                        <h4 class="font-weight-bold text-navy-blue mr-3">
                          FretBay Login
                        </h4>
                        <span
                          id="to-registration"
                          class="mb-2"
                          style="cursor: pointer"
                          ><i class="icofont-user-alt-7 mr-2"></i>I create an
                          account</span
                        >
                      </div>
                      <div class="bg-light-gray p-3 rounded mt-3">
                        <p class="text-center">
                          Enter your email address or username and password to
                          access all FretBay services.
                        </p>
                        <form action="#">
                          <div class="form-group input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1"
                                ><i class="icofont-box"></i
                              ></span>
                            </div>
                            <input
                              type="email"
                              placeholder="Email"
                              class="form-control"
                            />
                          </div>
                          <div class="form-group input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1"
                                ><i class="icofont-lock"></i
                              ></span>
                            </div>
                            <input
                              type="password"
                              placeholder="Password"
                              class="form-control"
                            />
                          </div>
                          <a href="#">Forgotten password?</a>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="text-right mt-4">
                    <button
                      data-section="2"
                      class="back btn btn-outline-danger"
                    >
                      <i class="icofont-simple-left mr-2"></i>Back
                    </button>
                    <button class="continue btn text-white bg-navy-blue ml-3">
                      Continue
                    </button>
                  </div>
                </div>
                <!-- registration & login form end -->
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
      
    <!-- Contact Footer Start -->
    <section>
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-6 col-sm-12 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.1s">
            <h4 class="h4-md mb-4 txt-orange">Find us at the office</h4>
            <div class="contact-details standard row pos-rel d-inline-flex">
              <div class="col">
                <h4>Germany</h4>
                <p><i class="icofont-phone"></i> +1 (408) 786 - 5117</p>
                <div class="text-nowrap"><i class="icofont-email"></i> <a href="#">germany@logzee.com</a></div>
              </div>
              <div class="col">
                <h4>Spain</h4>
                <p><i class="icofont-phone"></i> +1 (408) 786 - 5117</p>
                <div class="text-nowrap"><i class="icofont-email"></i> <a href="#">spain@logzee.com</a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12">
            <!-- Google Map Start -->
              <section class="map-bg map-shadow">
                
                <div id="map-holder" class="pos-rel">
                    <div id="map_extended">
                        <p>This will be replaced with the Google Map.</p>
                    </div>
                </div>
                <!-- Google Map Start -->
              </section>     
            
            <!-- Main Body Content Start -->
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Footer End -->

    </main>

@endsection

@section('js')
         <!-- transport scripts -->
         <script src="{{ asset('assets/js/transport.js') }}"></script>
@endsection
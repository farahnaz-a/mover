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
              <div class="active">
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
        <!-- steps end -->
  
        <!-- transport start -->
        <section class="transport-type">
          <div class="container">
            <div class="transport-type-wrapper">
              <div class="row">
                <div class="col-lg-9">
                  
            @if($category == 'household')
                <!-- household equipment form start -->
                <div class="bg-white shadow-sm my-3 p-3 rounded"
                id="household" >
                <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                <span>Give a name to your listing:</span>
                <div class="row">
                    <div class="col-md-6">
                    <div class="bg-light-gray p-3 rounded mt-3">
                        <form
                        action="{{ route('step3.household') }}"
                        class="needs-validation"
                        id="household-form"
                        method="POST"
                        >
                        @csrf
                        <input
                            type="hidden"
                            name="category"
                            value="{{ $category }}"
                        />
                        <div class="form-group">
                            <input
                            type="text"
                            placeholder="3-seater Sofa, chairs, desks..."
                            class="form-control"
                            name="equipment"
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
                            class="form-group d-block"
                        >
                            <div class="alert alert-danger">
                            Please fill every field carefully
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <button
                            class="article-btn btn text-white bg-navy-blue"
                            data-target="#household-form"
                            data-article="#household-articles"
                            data-alert="#household-empty-alert"
                            >
                            Add an article
                            </button>
                        </div> --}}
                        
                    </div>
                    </div>
                    <div class="col-md-6 d-block" id="household-articles"></div>
                </div>
                <div class="text-right">
                    <a href="{{ URL::previous() }}"
                    class="back btn btn-outline-danger">
                    <i class="icofont-simple-left mr-2"></i>Back
                    </a>
                    <button 
                    type="submit" 

                    data-section="1"
                    class="continue btn text-white bg-navy-blue ml-3"
                    >
                    Continue
                    </button>
                </form>
                </div>
                </div>
                <!-- household equipment form end -->
            @endif
  
            @if($category == 'vehicle')
                <!-- vehicle form start -->
                <div class="bg-white shadow-sm my-3 p-3 rounded d-block"
                id="vehicle">
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
                        <a href="{{ URL::previous() }}"
                        class="back btn btn-outline-danger">
                        <i class="icofont-simple-left mr-2"></i>Back
                        </a>
                    </div>
                </div>
                <div id="vehicle2" class="d-block">
                    <h4 class="font-weight-bold text-navy-blue">
                    ADD ARTICLES
                    </h4>
                    <span>Give a name to your listing:</span>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="bg-light-gray p-3 rounded mt-3">
                        <form
                            action="{{ route('step3.vehicle') }}"
                            class="needs-validation"
                            id="vehicle-form"
                            method="POST"
                        >
                            <input type="hidden" id="vehicle-type" />
                            <input
                            type="hidden"
                            name="transportType"
                            value="vehicle"
                            />
                            <div class="form-group">
                            <input name="model_name"
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
                            class="form-group d-block"
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
                    <div class="col-md-6 d-block" id="vehicle-articles"></div>
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
            @endif
  
            @if($category == 'motorcyclesport')
                <!-- motorcycle and sport form start -->
                    <div class="bg-white shadow-sm my-3 p-3 rounded d-block"
                        id="motorcycleSport">
                        <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                        <span>Give a name to your listing:</span>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="bg-light-gray p-3 rounded mt-3">
                            <form action="{{ route('step3.motorcyclesport') }}" class="needs-validation article-form" id="motorcycleSport-form">
                                <input
                                type="hidden"
                                name="transportType"
                                value="motorcycleSport"
                                />
                                <div class="form-group">
                                <input name="model_name"
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
                                    name="estimationValue"
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
                                class="form-group d-block"
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
                        <div class="col-md-6 d-block" id="motorcycleSport-articles"></div>
                        </div>
                        <div class="text-right">
                            <a href="{{ URL::previous() }}"
                            class="back btn btn-outline-danger">
                            <i class="icofont-simple-left mr-2"></i>Back
                            </a>
                        <button
                            data-section="1"
                            class="continue btn text-white bg-navy-blue ml-3"
                        >
                            Continue
                        </button>
                        </div>
                    </div>
                <!-- motorcycle and sport form end -->
            @endif
  
            @if($category == 'boatvolimunoussport')
                <!-- boats and voluminous sport form start -->
                <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="boat-voluminous">
                            <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                            <span>Give a name to your listing:</span>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="bg-light-gray p-3 rounded mt-3">
                                    <form
                                    action="{{ route('step3.boatvolimunoussport') }}"
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
                                        <input name="model_name"
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
                                        name="estimationValue"  type="number"   placeholder="Estimation value"  class="form-control"
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
                                        class="form-group d-block"
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
                                <div class="col-md-6 d-block"
                                id="boat-voluminous-articles"></div>
                            </div>
                            <div class="text-right">
                                <a href="{{ URL::previous() }}"
                                class="back btn btn-outline-danger">
                                <i class="icofont-simple-left mr-2"></i>Back
                                </a>
                                <button
                                data-section="1"
                                class="continue btn text-white bg-navy-blue ml-3"
                                >
                                Continue
                                </button>
                            </div>
                </div>
                <!-- boats and voluminous sport form end -->
            @endif
  
            @if($category == 'fragilegoods')
                    <!--  Fragile goods form start -->
                    <div class="bg-white shadow-sm my-3 p-3 rounded d-block"
                    id="fragileGoods" >
                    <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                    <span>Give a name to your listing:</span>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="bg-light-gray p-3 rounded mt-3">
                            <form
                            action="{{ route('step3.fragilegoods') }}"
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
                                name="model_name"
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
                                id="fragileGoods-empty-alert"
                                class="form-group d-block"
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
                        class="col-md-6 d-block"
                        id="fragileGoods-articles"
                        ></div>
                    </div>
                    <div class="text-right">
                        <a href="{{ URL::previous() }}"
                        class="back btn btn-outline-danger">
                        <i class="icofont-simple-left mr-2"></i>Back
                        </a>
                        <button
                        data-section="1"
                        class="continue btn text-white bg-navy-blue ml-3"
                        >
                        Continue
                        </button>
                    </div>
                    </div>
                    <!-- Fragile goods form end -->
            @endif
  
            @if($category == 'package')
                              <!--  Package/Flod form start -->
                              <div class="bg-white shadow-sm my-3 p-3 rounded d-block"
                              id="package">
                              <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                              <span>Give a name to your listing:</span>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="bg-light-gray p-3 rounded mt-3">
                                    <form action="{{ route('step3.package') }}" class="needs-validation article-form" id="package-form" >
                                      <input
                                        type="hidden"
                                        name="transportType"
                                        value="package"
                                      />
                                      <div class="form-group">
                                        <input name="model_name"
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
                                      <div id="package-empty-alert" class="form-group d-block" >
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
                                <div class="col-md-6 d-block" id="package-articles"></div>
                              </div>
                              <div class="text-right">
                                <button data-section="0" class="back btn btn-outline-danger" >
                                  <i class="icofont-simple-left mr-2"></i>Back
                                </button>
                                <button data-section="1" class="continue btn text-white bg-navy-blue ml-3" >
                                  Continue
                                </button>
                              </div>
                            </div>
                            <!-- Package/Flod form end -->
            @endif

            @if($category == 'pallet')
                            <!--  Pallet form start -->
                            <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="pallet">
                          
                            <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                            <span>Give a name to your listing:</span>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="bg-light-gray p-3 rounded mt-3">
                                  <form
                                    action="{{ route('step3.pallet') }}"
                                    class="needs-validation article-form"
                                    id="pallet-form"
                                  >
                                    <input
                                      type="hidden"
                                      name="transportType"
                                      value="pallet"
                                    />
                                    <div class="form-group">
                                      <input name="model_name"
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
                                      class="form-group d-block"
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
                              <div class="col-md-6 d-block" id="pallet-articles"></div>
                            </div>
                            <div class="text-right">
                                <a href="{{ URL::previous() }}"
                                class="back btn btn-outline-danger">
                                <i class="icofont-simple-left mr-2"></i>Back
                                </a>
                              <button
                                data-section="1"
                                class="continue btn text-white bg-navy-blue ml-3"
                              >
                                Continue
                              </button>
                            </div>
                          </div>
                          <!-- Pallet form end -->
            @endif
            
            @if($category == 'animal')
                <!--  Animal form start -->
                <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="animal" >
                <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                <span>Give a name to your listing:</span>
                <div class="row">
                    <div class="col-md-6">
                    <div class="bg-light-gray p-3 rounded mt-3">
                        <form
                        action="{{ route('step3.animal') }}"
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
                            name="model_name"
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
                            class="form-group d-block"
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
                    <div class="col-md-6 d-block" id="animal-articles"></div>
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
            @endif 

            @if($category == 'agrifood')
                  <!--  Agri-food form start -->
                  <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="agri-food" >
                    <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                    <span>Give a name to your listing:</span>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="bg-light-gray p-3 rounded mt-3">
                          <form
                            action="{{ route('step3.agrifood') }}"
                            class="needs-validation article-form"
                            id="agri-food-form"
                          >
                            <input
                              type="hidden"
                              name="transportType"
                              value="agri-food"
                            />
                            <div class="form-group">
                              <input name="food_name"
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
                              class="form-group d-block"
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
                      <div class="col-md-6 d-block" id="agri-food-articles"></div>
                    </div>
                    <div class="text-right">
                        <a href="{{ URL::previous() }}"
                        class="back btn btn-outline-danger">
                        <i class="icofont-simple-left mr-2"></i>Back
                        </a>
                      <button
                        data-section="1"
                        class="continue btn text-white bg-navy-blue ml-3"
                      >
                        Continue
                      </button>
                    </div>
                  </div>
                  <!-- Agri-food form end -->
            @endif
            
            @if($category == 'commercialgoods')
            
                <!--  Commercial Goods form start -->
                <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="commercial-good">
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
                            name="model_name"
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
                        <div id="commercial-good-empty-alert" class="form-group d-block">
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
                    <div class="col-md-6 d-block" id="commercial-good-articles"></div>
                </div>
                <div class="text-right">
                    <a href="{{ URL::previous() }}"
                    class="back btn btn-outline-danger">
                    <i class="icofont-simple-left mr-2"></i>Back
                    </a>
                    <button
                    data-section="1"
                    class="continue btn text-white bg-navy-blue ml-3"
                    >
                    Continue
                    </button>
                </div>
                </div>
                <!-- Commercial Goods form end -->
            @endif
            
            @if($category == 'miscellaneous')
                <!--  Miscellaneous form start -->
                <div class="bg-white shadow-sm my-3 p-3 rounded d-block" id="miscellaneous">
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
                              name="others"
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
                            <div id="miscellaneous-empty-alert" class="form-group d-block">
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
                      <div class="col-md-6 d-block" id="miscellaneous-articles"></div>
                    </div>
                    <div class="text-right">
                        <a href="{{ URL::previous() }}"
                        class="back btn btn-outline-danger">
                        <i class="icofont-simple-left mr-2"></i>Back
                        </a>
                      <button
                        data-section="1"
                        class="continue btn text-white bg-navy-blue ml-3"
                      >
                        Continue
                      </button>
                    </div>
                  </div>
                  <!-- Miscellaneous form end -->
            @endif

                </div>
  
                <div class="col-lg-3 d-block d-lg-block">
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
        <!-- transport end -->   <!-- Main Body Content Start -->
@endsection


@section('js')
         <!-- transport scripts -->
         <script src="{{ asset('assets/js/transport.js') }}"></script>
@endsection
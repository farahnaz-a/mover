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
            <!-- steps end -->
      
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
                        <div class="row">
                          <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="transport-item" data-target="household">
                              <span class="icon"
                                ><i class="icofont-building-alt"></i
                              ></span>
                              <span>Household equipment</span>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="transport-item" data-target="moving">
                              <span class="icon"
                                ><i class="icofont-truck-loaded"></i
                              ></span>
                              <span>Moving</span>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="transport-item" data-target="vehicle">
                              <span class="icon"
                                ><i class="icofont-car-alt-3"></i
                              ></span>
                              <span>Vehicle</span>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="transport-item" data-target="bike">
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
                            <div class="transport-item" data-target="bike">
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
                            <div class="transport-item" data-target="bike">
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
                            <div class="transport-item" data-target="bike">
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
                            <div class="transport-item" data-target="bike">
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
                            <div class="transport-item" data-target="bike">
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
                            <div class="transport-item" data-target="bike">
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
                            <div class="transport-item" data-target="bike">
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
                            <div class="transport-item" data-target="bike">
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
                        </div>
                      </div>
                      <div
                        class="bg-white shadow-sm my-3 p-3 rounded d-none"
                        id="article"
                      >
                        <h4 class="font-weight-bold text-navy-blue">ADD ARTICLES</h4>
                        <span>Give a name to your listing:</span>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="bg-light-gray p-3 rounded mt-3">
                              <form
                                action="#"
                                id="article-form"
                                onsubmit="return false"
                                class="needs-validation"
                              >
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
                                <div id="empty-alert" class="form-group d-none">
                                  <div class="alert alert-danger">
                                    Please fill every field carefully
                                  </div>
                                </div>
                                <div class="form-group">
                                  <button
                                    class="btn text-white bg-navy-blue"
                                    id="article-btn"
                                  >
                                    Add an article
                                  </button>
                                  <button
                                    class="btn bg-success d-none"
                                    id="update-article-btn"
                                  >
                                    Update article
                                  </button>
                                </div>
                              </form>
                            </div>
                          </div>
                          <div class="col-md-6 d-none" id="articles">
                            <p class="mt-5 d-flex justify-content-between">
                              <span>Article details</span
                              ><strong
                                id="total-article"
                                class="text-navy-blue font-weight-bold"
                                >TOTAL: 0</strong
                              >
                            </p>
                          </div>
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
<script>
    const steps = document.querySelectorAll('.transport-steps-wrapper > div')
    const transportSection = document.querySelector('#transport')
    const transportItems = document.querySelectorAll('.transport-item')
    const backBtns = document.querySelectorAll('.back')
    const continueBtns = document.querySelectorAll('.continue')
    const articleSection = document.querySelector('#article')
    const addressSection = document.querySelector('#address')
    const articleForm = document.querySelector('#article-form')
    const articleFormInputs = document.querySelectorAll('#article-form input')
    const totalArticles = document.querySelector('#total-article')
    const articles = document.querySelector('#articles')
    const articleBtn = document.querySelector('#article-btn')
    const updateArticleBtn = document.querySelector('#update-article-btn')
    const emptyAlert = document.querySelector('#empty-alert')
    const userForm = document.querySelector('#user-form')
    const login = document.querySelector('#login')
    const toLogin = document.querySelector('#to-login')
    const registration = document.querySelector('#registration')
    const toRegistration = document.querySelector('#to-registration')
    const hiddenTransportItems = document.querySelectorAll(
      '.hidden-transport-item'
    )
    const showAllBtn = document.querySelector('#all-item')
    showAllBtn.addEventListener('click', function () {
      hiddenTransportItems.forEach((item) => item.classList.remove('d-none'))
      this.parentElement.classList.add('d-none')
    })

    //user form handle
    toLogin.addEventListener('click', () => {
      registration.classList.add('d-none')
      login.classList.remove('d-none')
    })
    toRegistration.addEventListener('click', () => {
      registration.classList.remove('d-none')
      login.classList.add('d-none')
    })

    const articleHtml = (
      sl,
      articleName,
      length,
      height,
      weight,
      width,
      quantity
    ) => `<div class="p-3 bg-light-gray rounded mb-3 article-item">
                      <div class="
                          border-bottom
                          mb-3
                          pb-2
                          d-flex
                          flex-wrap
                          text-nowrap
                          justify-content-between
                        ">
                        <div>
                          <span class="mr-3 text-navy-blue">${sl}</span>
                          <span class="mr-3 text-navy-blue">${articleName}</span>
                        </div>
                        <div>
                          <i onclick="handleArticleUpdate(
                                      '${sl}',
                                      '${articleName}',
                                      '${length}',
                                      '${height}',
                                      '${weight}',
                                      '${width}',
                                      '${quantity}')"
                                      style="cursor: pointer" class="icofont-edit ml-2"></i>
                          <i style="cursor: pointer" class="icofont-close text-danger ml-2"></i>
                        </div>
                      </div>
                      <div class="badges">
                        <small class="
                            bg-white
                            text-navy-blue
                            mr-2
                            rounded
                            px-3
                            py-2
                            mb-2
                            d-inline-block
                          ">Article name ${articleName}</small>
                        <small class="
                            bg-white
                            text-navy-blue
                            mr-2
                            rounded
                            px-3
                            py-2
                            mb-2
                            d-inline-block
                          ">Length (cm) ${length}</small>
                        <small class="
                            bg-white
                            text-navy-blue
                            mr-2
                            rounded
                            px-3
                            py-2
                            mb-2
                            d-inline-block
                          ">Width (cm) ${width}</small>
                        <small class="
                            bg-white
                            text-navy-blue
                            mr-2
                            rounded
                            px-3
                            py-2
                            mb-2
                            d-inline-block
                          ">Height (cm) ${height}</small>
                        <small class="
                            bg-white
                            text-navy-blue
                            mr-2
                            rounded
                            px-3
                            py-2
                            mb-2
                            d-inline-block
                          ">Weight (kg) ${weight}</small>
                        <small class="
                            bg-white
                            text-navy-blue
                            mr-2
                            rounded
                            px-3
                            py-2
                            mb-2
                            d-inline-block
                          ">Quantity ${quantity}</small>
                      </div>
                    </div>`

    //step up from 0 to 1
    transportItems.forEach((transportItem) => {
      transportItem.addEventListener('click', () => {
        transportSection.classList.add('d-none')
        articleSection.classList.remove('d-none')
        steps[0].classList.remove('active')
        steps[1].classList.add('active')
      })
    })

    //step up ++
    continueBtns.forEach((continueBtn) => {
      continueBtn.addEventListener('click', () => {
        const step = parseInt(continueBtn.getAttribute('data-section'))
        console.log(step)
        if (step === 1) {
          articleSection.classList.add('d-none')
          addressSection.classList.remove('d-none')
          steps[1].classList.remove('active')
          steps[2].classList.add('active')
        } else if (step === 2) {
          addressSection.classList.add('d-none')
          userForm.classList.remove('d-none')
          steps[2].classList.remove('active')
        }
      })
    })

    //step down --
    backBtns.forEach((backBtn) => {
      backBtn.addEventListener('click', () => {
        const step = parseInt(backBtn.getAttribute('data-section'))
        if (step === 0) {
          articleSection.classList.add('d-none')
          transportSection.classList.remove('d-none')
          steps[0].classList.add('active')
          steps[1].classList.remove('active')
        } else if (step === 1) {
          addressSection.classList.add('d-none')
          articleSection.classList.remove('d-none')
          steps[2].classList.remove('active')
          steps[1].classList.add('active')
        } else {
          addressSection.classList.remove('d-none')
          userForm.classList.add('d-none')
          steps[2].classList.add('active')
        }
        console.log(step)
      })
    })

    // handle article add
    let sl = 1
    articleBtn.addEventListener('click', () => {
      articleFormInputs.forEach((input, index) => {
        if (index !== 0) {
          if (input.value === '') {
            console.log(input)
            input.classList.add('border', 'border-danger')
          } else {
            input.classList.remove('border', 'border-danger')
          }
        }
      })
      if (
        articleForm.articleName.value !== '' &&
        articleForm.length.value !== '' &&
        articleForm.height.value !== '' &&
        articleForm.weight.value !== '' &&
        articleForm.width.value !== '' &&
        articleForm.quantity.value !== ''
      ) {
        articles.classList.remove('d-none')
        emptyAlert.classList.add('d-none')
        articles.innerHTML += articleHtml(
          sl,
          articleForm.articleName.value,
          articleForm.length.value,
          articleForm.height.value,
          articleForm.weight.value,
          articleForm.width.value,
          articleForm.quantity.value
        )
        totalArticles.innerText = 'TOTAL : ' + sl
        sl++
        articleForm.reset()
      } else {
        emptyAlert.classList.remove('d-none')
      }
    })
  </script>
@endsection
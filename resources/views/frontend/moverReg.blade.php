@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} - Inscription déménageur
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
        <!-- map view start -->
        <section class="subscription">
          <div class="container">
            <div class="subscription-wrapper">
              <div class="bg-navy-blue text-white p-3">
                <div class="row">
                  <div class="col-md-4">
                    <h1 class="text-uppercase text-theme bg-white font-italic">
                      Deem pour les .....
                    </h1>
                    <button
                      class="text-white btn bg-orange btn-lg rounded-0 mt-5"
                    >
                      Button
                    </button>
                  </div>
                  <div class="col-md-6">
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Perferendis quos ab fuga incidunt obcaecati explicabo
                      officiis sequi consequuntur vero unde aperiam, suscipit,
                      sapiente et fugiat deserunt minus voluptatum illo! Ipsam!
                      officiis sequi consequuntur vero unde aperiam, suscipit,
                      sapiente et fugiat deserunt minus voluptatum illo! Ipsam!
                      officiis sequi consequuntur vero unde aperiam, suscipit,
                      sapiente et fugiat deserunt minus voluptatum illo! Ipsam!
                    </p>
                    <p>
                      officiis sequi consequuntur vero unde aperiam, suscipit,
                      sapiente et fugiat deserunt minus voluptatum illo! Ipsam!
                      officiis sequi consequuntur vero unde aperiam, suscipit,
                      sapiente et fugiat deserunt minus voluptatum illo! Ipsam!
                    </p>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Perferendis quos ab fuga incidunt obcaecati explicabo Lorem
                      ipsum dolor sit amet consectetur adipisicing elit.
                      Perferendis quos ab fuga incidunt obcaecati explicabo Lorem
                      ipsum dolor sit amet consectetur adipisicing elit. officiis
                      sequi consequuntur vero unde aperiam,
                    </p>
                  </div>
                </div>
              </div>
              <form action="{{ route('mover.register') }}" method="POST">
                @csrf
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label"
                    >NOM DE <strong>I'enterprise</strong></label
                  >
                  <div class="col-sm-10">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"
                          ><i class="icofont-building-alt"></i
                        ></span>
                      </div>
                      <input
                        type="text"
                        class="form-control form-control-lg"
                        placeholder="Nom complet de I'enterprise"
                        name="company" 
                        required
                      />
                    </div>
                    <div>
                        @error('company')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label"
                    ><strong>Address de I'enterprise</strong></label
                  >
                  <div class="col-sm-10">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"
                          ><i class="icofont-building-alt"></i
                        ></span>
                      </div>
                      <input
                        type="text"
                        class="form-control form-control-lg"
                        placeholder="Address de I'enterprise"
                        name="address"
                        required 
                      />
                    </div>
                    <div>
                        @error('address')
                         <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label"
                    >Nomet <strong>PRENOM DU GÉRANT</strong></label
                  >
                  <div class="col-sm-10">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"
                          ><i class="icofont-user-alt-3"></i
                        ></span>
                      </div>
                      <input
                        type="text"
                        class="form-control form-control-lg"
                        placeholder="Name"
                        name="name"
                        required
                      />
                    </div>
                    <div>
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">E-mail</label>
                  <div class="col-sm-10">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"
                          ><i class="icofont-ui-message"></i
                        ></span>
                      </div>
                      <input
                        type="email"
                        class="form-control form-control-lg"
                        placeholder="Email"
                        name="email"
                        required 
                      />
                    </div>
                    <div>
                        @error('email')
                         <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label"
                    >NUMÉRO DE TÉLÉPHONE</label
                  >
                  <div class="col-md-4">
                    <div class="input-group flex-nowrap mb-3 mb-md-0">
                      <div class="input-group-prepend">
                        <span class="input-group-text"
                          ><i class="icofont-world"></i
                        ></span>
                      </div>
                      <select class="w-100">
                        <option value="">GB (+44)</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"
                          ><i class="icofont-ui-call"></i
                        ></span>
                      </div>
                      <input
                        type="tel"
                        class="form-control form-control-lg"
                        placeholder="Phone"
                        name="phone"
                        required 
                      />
                    </div>
                    <div>
                        @error('phone')
                         <small class="text-danger">{{ $phone }}</small>
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label"
                    ><strong>Choisir un pseudo</strong></label
                  >
                  <div class="col-sm-10">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"
                          ><i class="icofont-ui-message"></i
                        ></span>
                      </div>
                      <input
                        type="text"
                        class="form-control form-control-lg"
                        placeholder="username"
                        name="username"
                        required
                      />
                    </div>
                    <div>
                        @error('username')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">LEE MOT DE PASSE</label>
                  <div class="col-sm-10">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"
                          ><i class="icofont-lock"></i
                        ></span>
                      </div>
                      <input
                        type="password"
                        class="form-control form-control-lg"
                        placeholder="Créer un mot de passe"
                        name="password"
                        required
                      />
                    </div>
                    <div>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label"
                    ><strong>CONFIRMER LEE MOT DE PASSE</strong></label
                  >
                  <div class="col-sm-10">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"
                          ><i class="icofont-lock"></i
                        ></span>
                      </div>
                      <input
                        type="password"
                        class="form-control form-control-lg"
                        placeholder="Confirmer créer un mot de passe"
                        name="password_confirmation"
                        required
                      />
                    </div>
                    <div>
                        @error('password_confirmation')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <i class="icofont-info-circle"></i> Lorem ipsum dolor sit amet
                    consectetur adipisicing elit.
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <div class="custom-control custom-checkbox">
                      <input
                        type="checkbox"
                        class="custom-control-input"
                        id="customCheck1"
                        required
                      />
                      <label class="custom-control-label" for="customCheck1"
                        >Check this custom checkbox</label
                      >
                    </div>
                  </div>
                </div>
                <div class="text-center mt-5">
                  <button
                    class="btn btn-lg text-white"
                    style="background-color: #fd6f01"
                    type="submit"
                  >
                    S'inscrire
                  </button>
                </div>
              </form>
            </div>
          </div>
        </section>
        <!-- map view end -->
  
      </main>
@endsection

@section('js')
@endsection

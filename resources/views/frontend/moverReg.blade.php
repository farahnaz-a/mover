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
              <div class="bg-road text-white p-3" style="background-image: url('{{ asset('uploads/registrations') }}/{{ $registration->bg_image }}');">
                <div class="row">
                  <div class="col-md-5 col-lg-4">
                    <h1 class="text-uppercase text-white font-italic">
                      {{ strtoupper($registration->title) }}
                    </h1>
                    <button
                      class="text-white btn bg-orange btn-lg rounded-0 mt-5"
                    >
                      INSCRIVEZ-VOUS
                    </button>
                  </div>
                  <div class="col-md-7 col-lg-8">
                    <p>
                     {{ ucfirst($registration->description) }}
                    </p>
                    <ul>
                       @foreach ($bullets as $bullet)
                       <li>
                        {{ $bullet->bullets }}
                      </li>
                       @endforeach
                    </ul>
                  </div>
                </div>
              </div>
              <form action="{{ route('mover.register') }}" method="POST">
                @csrf
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label"
                    >Nom de l'entreprise</label
                  >
                  <div class="col-sm-10">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"
                          ><i class="icofont-id"></i></span>
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
                    >Adresse de l'entreprise</label
                  >
                  <div class="col-sm-10">
                    <div class="input-group">
                      <div class="input-group-prepend">  
                        <span class="input-group-text"
                          ><i class="icofont-location-pin"></i></span>
                      </div>
                      <input
                        type="text"
                        class="form-control form-control-lg"
                        placeholder="Adresse de I'enterprise"
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
                    >Nom prenom du gérant</label
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
                        placeholder="Nom et prénom"
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
                    >Numéro de téléphone</label
                  >
                  <div class="col-md-4">
                    <div class="input-group flex-nowrap mb-3 mb-md-0">
                      <div class="input-group-prepend">  
                        <span class="input-group-text"
                          ><i class="icofont-world"></i
                        ></span>
                      </div>
                      <select class="w-100"> 
                        @foreach ($countries as $country)
                            <option value="{{ $country->iso }} (+{{ $country->phonecode }})">{{ $country->iso }} (+{{ $country->phonecode }})</option>
                        @endforeach
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
                          ><i class="icofont-ui-user"></i
                        ></span>
                      </div>
                      <input
                        type="text"
                        class="form-control form-control-lg"
                        placeholder="PSEUDO"
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
                  <label class="col-sm-2 col-form-label">Mot de passe</label>
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
                        placeholder="Créer votre mot de passe"
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
                    >Confirmer votre mot de passe</label
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
                        placeholder="Confirmer votre mot de passe"
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
                  {{--  <div class="col-sm-10">
                    <i class="icofont-info-circle"></i> j'accepte les dispositions des conditions générales et de la politique de confidentialité
                  </div>  --}}
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
                        >j'accepte les dispositions des conditions générales et de la politique de confidentialité</label
                      >
                    </div>
                  </div>
                </div>
                <div class="text-center mt-5">
                  <button
                    class="btn btn-lg text-white"
                    style="background-color: #5fc2ba"
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

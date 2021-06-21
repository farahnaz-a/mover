{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} - Register
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
                    <!-- registration & login form start -->
                    <div
                    class="bg-white shadow-sm my-3 p-3 rounded"
                    id="user-form"
                  >
                    <div class="row justify-content-center">
                      <div class="col-md-6 m-auto" id="registration">
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
                          <form method="POST" action="{{ route('register') }}">
                            @csrf
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
                                name="email" 
                                :value="old('email')" 
                                required
                              />
                            </div>
                            @error('email')
                                <div class="pb-3">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                            @enderror
                            <div class="form-group input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"
                                  ><i class="icofont-user-alt-7"></i
                                ></span>
                              </div>
                              <input
                                type="text"
                                placeholder="Full name"
                                class="form-control"
                                name="name"
                                :value="old('name')" 
                                required 
                                autofocus 
                                autocomplete="name"
                              />
                            </div>
                            @error('name')
                                <div class="pb-3">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                            @enderror
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
                                name="password" 
                                required 
                                autocomplete="new-password"
                              />
                            </div>
                            @error('password')
                                <div class="pb-3">
                                    <span class="text-danger">{{ $message }}</span>
                                </div>
                            @enderror
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
                                name="password_confirmation" 
                                required 
                                autocomplete="new-password"
                              />
                            </div>

                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="py-3 text-center">
                              <button class="btn-theme bg-navy-blue">Register</button>
                           </div>

                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- registration & login form end -->
                </div>
@endsection

@section('js')
    
@endsection

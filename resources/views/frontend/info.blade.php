<div class="row">
    <div class="col-12">
        <div class="form-group input-group">
            <div class="form-group__wrapper w-100 position-relative">
                <label class="form-group__wrapper__icon d-inline-flex align-items-center justify-content-center position-absolute mb-0 p-2" for="fname">
                    <i class="icofont-ui-user"></i>
                </label>
                <input id="fname" name="name" type="text" placeholder="Nom et premon" class="form-control form-group__wrapper__input" required/>
            </div>
            @error('name')
            <span class="text-danger alert">{{ $message }}</span>
            @enderror
        </div>
        <span class="text-success d-none" id="existing">You Already have An Account Please Login</span>
        <div class="form-group input-group">
            <div class="form-group__wrapper w-100 position-relative">
                <label class="form-group__wrapper__icon d-inline-flex align-items-center justify-content-center position-absolute mb-0 p-2" for="user_email">
                    <i class="icofont-ui-message"></i>
                </label>
                <input name="email" type="text" id="user_email" placeholder="Email" class="form-control form-group__wrapper__input" required/>
            </div>
            @error('email')
            <span class="text-danger alert">{{ $message }}</span>
            @enderror
        </div> 
        <div class="row optional">
            <div class="col-md-6">
                <div class="form-group ">
                    <div class="input-group" id="country_code_wrapper">
                        <div class="form-group__wrapper form-group__wrapper--counrty-select w-100 position-relative">
                            <label class="form-group__wrapper__icon d-inline-flex align-items-center justify-content-center position-absolute mb-0 p-2" for="contry_code">
                                <i class="icofont-world"></i>
                            </label>
                            <div class="form-control form-group__wrapper__input pt-0 pb-0 pr-0">
                                <select class="w-100"
                                    name="country_code" id="contry_code">
                                    @foreach ( countryCode() as $item)
                                    <option value="{{ $item->phonecode }}"> {{ $item->iso }} ({{ $item->phonecode }})</option> 
                                    @endforeach 
                                </select>
                            </div>
                        </div>
                    </div> 
                    @error('country_code')
                    <span class="text-danger alert">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group input-group">
                    <div class="form-group__wrapper w-100 position-relative">
                        <label class="form-group__wrapper__icon d-inline-flex align-items-center justify-content-center position-absolute mb-0 p-2" for="phone">
                            <i class="icofont-ui-call"></i>
                        </label>
                        <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control form-group__wrapper__input"/>
                    </div>
                    @error('phone')
                    <span class="text-danger alert">{{ $message }}</span>
                    @enderror   
                </div>
            </div>
        </div>
        <div class="form-group input-group optional">
            <div class="form-group__wrapper w-100 position-relative">
                <label class="form-group__wrapper__icon d-inline-flex align-items-center justify-content-center position-absolute mb-0 p-2" for="pseudo">
                    <i class="icofont-ui-user"></i>
                </label>
                <input id="pseudo" name="pseudo" type="text" placeholder="Pseudo" class="form-control form-group__wrapper__input"/>
            </div>
            @error('pseudo')
            <span class="text-danger alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group input-group">
            <div class="form-group__wrapper w-100 position-relative">
                <label class="form-group__wrapper__icon d-inline-flex align-items-center justify-content-center position-absolute mb-0 p-2" for="pwd">
                    <i class="icofont-lock"></i>
                </label>
                <input name="password" type="password" placeholder="Mot de passe" class="form-control form-group__wrapper__input"  id="pwd" required/>
            </div>
            @error('password')
            <span class="text-danger alert">{{ $message }}</span>
            @enderror
        </div>
        <span class="text-danger" id="password_error"> </span>
        <div class="form-group input-group optional">
            <div class="form-group__wrapper w-100 position-relative">
                <label class="form-group__wrapper__icon d-inline-flex align-items-center justify-content-center position-absolute mb-0 p-2" for="c_pwd">
                    <i class="icofont-lock"></i>
                </label>
                <input name="confirm_password" type="password" placeholder="Confirmer votre mot de passe" class="form-control form-group__wrapper__input" id="c_pwd"/>
                @error('confirm_password')
                <span class="text-danger alert">{{ $message }}</span>
                @enderror
            </div>
        </div>    
    </div>
</div>  
{{-- <div class="row">
    <div class="col-12">
        <div class="form-group input-group">
            <div class="form-group__wrapper w-100 position-relative">
                <label class="form-group__wrapper__icon d-inline-flex align-items-center justify-content-center position-absolute mb-0 p-2" for="fname">
                    <i class="icofont-user-alt-3 website-color"></i>
                </label>
                <input id="fname" name="name" type="text" placeholder="Nom et premon" class="form-control form-group__wrapper__input" />
            </div>
        </div>
        <span class="text-success d-none" id="existing">You Already have An Account Please Login</span>
        <div class="form-group input-group">
            <div class="form-group__wrapper w-100 position-relative">
                <label class="form-group__wrapper__icon d-inline-flex align-items-center justify-content-center position-absolute mb-0 p-2" for="user_email">
                    <i class="icofont-email website-color"></i>
                </label>
                <input name="email" type="text" id="user_email" placeholder="Email" class="form-control form-group__wrapper__input" />
            </div>
        </div>
        <div class="form-group input-group">
            <div class="form-group__wrapper w-100 position-relative">
                <label class="form-group__wrapper__icon d-inline-flex align-items-center justify-content-center position-absolute mb-0 p-2" for="pwd">
                    <i class="icofont-lock website-color"></i>
                </label>
                <input name="password" type="password" placeholder="Mot de passe" class="form-control form-group__wrapper__input"  id="pwd"/>
            </div>
        </div>
        <div id="optional" class="">
            <span class="text-danger" id="password_error"> </span>
            <div class="form-group input-group">
                <div class="form-group__wrapper w-100 position-relative">
                    <label class="form-group__wrapper__icon d-inline-flex align-items-center justify-content-center position-absolute mb-0 p-2" for="c_pwd">
                        <i class="icofont-lock website-color"></i>
                    </label>
                    <input name="confirm_password" type="password" placeholder="Confirmer votre mot de passe" class="form-control form-group__wrapper__input" id="c_pwd"/>
                </div>
            </div> 

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group ">
                        <div class="input-group" id="country_code_wrapper">
                            <div class="form-group__wrapper form-group__wrapper--counrty-select w-100 position-relative">
                                <label class="form-group__wrapper__icon d-inline-flex align-items-center justify-content-center position-absolute mb-0 p-2" for="contry_code">
                                    <i class="icofont-world website-color"></i>
                                </label>
                                <div class="form-control form-group__wrapper__input pt-0 pb-0 pr-0">
                                    <select class="w-100"
                                        name="country_code" id="contry_code">
                                        @foreach ( countryCode() as $item)
                                        <option value="{{ $item->phonecode }}"> {{ $item->iso }} ({{ $item->phonecode }})</option> 
                                        @endforeach 
                                    </select>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group input-group">
                        <div class="form-group__wrapper w-100 position-relative">
                            <label class="form-group__wrapper__icon d-inline-flex align-items-center justify-content-center position-absolute mb-0 p-2" for="phone">
                                <i class="icofont-ui-call website-color"></i>
                            </label>
                            <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control form-group__wrapper__input" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group input-group">
                <div class="form-group__wrapper w-100 position-relative">
                    <label class="form-group__wrapper__icon d-inline-flex align-items-center justify-content-center position-absolute mb-0 p-2" for="pseudo">
                        <i class="icofont-ui-user website-color"></i>
                    </label>
                    <input id="pseudo" name="pseudo" type="text" placeholder="pseudo" class="form-control form-group__wrapper__input" />
                </div>
            </div>
        </div>
   
    </div>
</div>   --}}
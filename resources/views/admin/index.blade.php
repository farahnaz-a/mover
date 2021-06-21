@extends('layouts.dashboard')
                
@section('title')
    {{ config('app.name') }} - Admin Dashboard
@endsection
           
@section('breadcrumb')
<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Admin Dashboard</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                    </li>
                    {{-- <li class="breadcrumb-item"><a href="#">Layouts</a>
                    </li>
                    <li class="breadcrumb-item active">Admin Dashboard
                    </li> --}}
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection
                
@section('content')
<div class="row">
    <div class="col-12">
        <h1 class="text-center">Welcome to Admin Dashboard !!!</h1>
    </div>
</div>

<div class="row py-5">
    <div class="col-10 m-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="text-center">Create Admin</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    @csrf
                    
                    <div class="form-group icon-input mb-3">
                        <i class="font-sm ti-user text-grey-500 pr-0"></i>
                        <input type="text" class="style2-input pl-5 form-control text-grey-900 font-xsss fw-600" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Your Name">                        
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group icon-input mb-3">
                        <i class="font-sm ti-email text-grey-500 pr-0"></i>
                        <input type="email" name="email" :value="old('email')" required class="style2-input pl-5 form-control text-grey-900 font-xsss fw-600" placeholder="Your Email Address">                        
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group icon-input mb-3">
                        <input type="password" name="password" required autocomplete="new-password" class="style2-input pl-5 form-control text-grey-900 font-xss ls-3" placeholder="Password">
                        <i class="font-sm ti-lock text-grey-500 pr-0"></i>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group icon-input mb-1">
                        <input type="password" name="password_confirmation" required autocomplete="new-password" class="style2-input pl-5 form-control text-grey-900 font-xss ls-3" placeholder="Confirm Password">
                        <i class="font-sm ti-lock text-grey-500 pr-0"></i>
                        @error('password_confirmation')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                 
                <div class="col-sm-12 p-0 text-left">
                    <div class="form-group mb-1"><button type="submit" class="form-control text-center style2-input text-white fw-600 bg-dark border-0 p-0 ">Register</button></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

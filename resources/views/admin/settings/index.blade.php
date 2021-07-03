@extends('layouts.dashboard')
                
@section('title')
    {{ config('app.name') }} - General Settings
@endsection

@section('settings')
    active
@endsection
           
@section('breadcrumb')
<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">General Settings</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                    </li>
                    {{-- <li class="breadcrumb-item"><a href="#">Layouts</a>
                    </li> --}}
                    <li class="breadcrumb-item active">Callouts Settings
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<section id="basic-vertical-layouts">
    <div class="row justify-content-center">
        <div class="col-lg-8 m-auto col-md-11 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Callouts</h4>
                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('settings.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical" style="color:#000; font-size:18px;">Logo</label>
                                    <input type="file" id="first-name-vertical" class="form-control" name="logo">
                                    @error('logo')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="py-3">
                                    <p>Existing logo : </p>
                                    <img width="200" src="{{ asset('uploads/settings') }}/{{ $data->logo }}" alt="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical" style="color:#000; font-size:18px;">Favicon</label>
                                    <input type="file" id="first-name-vertical" class="form-control" name="favicon">
                                    @error('favicon')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="py-3">
                                    <p>Existing Favicon : </p>
                                    <img width="200" src="{{ asset('uploads/settings') }}/{{ $data->favicon }}" alt="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical" style="color:#000; font-size:18px;">Description</label>
                                    <textarea type="text" id="email-id-vertical" class="form-control" name="description" >{{ $data->description }}</textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical" style="color:#000; font-size:18px;">Description (Optional)</label>
                                    <textarea type="text" id="email-id-vertical" class="form-control" name="description_one" >{{ $data->description_one }}</textarea>
                                    @error('description_one')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="contact-info-vertical" style="color:#000; font-size:18px;">Facebook (optional)</label>
                                    <input type="text" id="contact-info-vertical" class="form-control" name="facebook" value="{{ $data->facebook }}" >
                                    @error('facebook')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="contact-info-vertical" style="color:#000; font-size:18px;">Twitter (optional)</label>
                                    <input type="text" id="contact-info-vertical" class="form-control" name="twitter" value="{{ $data->twitter }}" >
                                    @error('twitter')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="contact-info-vertical" style="color:#000; font-size:18px;">Whatsapp (optional)</label>
                                    <input type="text" id="contact-info-vertical" class="form-control" name="whatsapp" value="{{ $data->whatsapp }}" >
                                    @error('whatsapp')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="contact-info-vertical" style="color:#000; font-size:18px;">Google+ (optional)</label>
                                    <input type="text" id="contact-info-vertical" class="form-control" name="google" value="{{ $data->google }}" >
                                    @error('google')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <input type="hidden" name="id" id="" value="{{ $data->id }}">
                                <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
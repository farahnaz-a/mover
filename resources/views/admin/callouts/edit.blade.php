@extends('layouts.dashboard')
                
@section('title')
    {{ config('app.name') }} - Callout Settings
@endsection
           
@section('breadcrumb')
<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Edit Callout</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                    </li>
                    {{-- <li class="breadcrumb-item"><a href="#">Layouts</a>
                    </li> --}}
                    <li class="breadcrumb-item active">Edit Callout
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<section id="basic-vertical-layouts">
    <div class="row">
        <div class="col-md-12 col-12 m-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Callout</h4>
                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('callouts.update') }}" enctype="multipart/form-data" method="POST">
                        {{-- Initiate PUT Method for update --}}
                        {{-- {{ method_field('PUT') }} --}}
                        @csrf
                        <input type="hidden" name="id" value="{{ $callout->id }}">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical" style="color:#000; font-size:18px;">Title</label>
                                    <input type="text" id="first-name-vertical" class="form-control" name="title" value="{{ $callout->title }}">
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical" style="color:#000; font-size:18px;">Description</label>
                                    <input type="text" id="first-name-vertical" class="form-control" name="description" value="{{ $callout->description }}">
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="contact-info-vertical" style="color:#000; font-size:18px;">Callout Image</label>
                                    <input type="file" id="contact-info-vertical" class="form-control" name="image" >
                                    @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="py-2">
                                    <p>Existing Image : </p>
                                    <img src="{{ asset('uploads/callouts') }}/{{ $callout->image }}" width="300" alt="">
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                                <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
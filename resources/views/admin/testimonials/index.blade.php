@extends('layouts.dashboard')
                
@section('title')
    {{ config('app.name') }} - Testimonials Settings
@endsection

@section('testimonials')
    active
@endsection
           
@section('breadcrumb')
<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Testimonials Settings</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                    </li>
                    {{-- <li class="breadcrumb-item"><a href="#">Layouts</a>
                    </li> --}}
                    <li class="breadcrumb-item active">Testimonials Settings
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
        <div class="col-lg-6 col-md-11 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Testimonials</h4>
                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('testimonials.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical" style="color:#000; font-size:18px;">Name</label>
                                    <input type="text" id="first-name-vertical" class="form-control" name="name" placeholder="Enter Name">
                                    @error('name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical" style="color:#000; font-size:18px;">Description</label>
                                    <textarea type="text" id="email-id-vertical" class="form-control" name="description" placeholder="Enter Description"></textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="contact-info-vertical" style="color:#000; font-size:18px;">Image</label>
                                    <input type="file" id="contact-info-vertical" class="form-control" name="image" >
                                    @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
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
        <div class="col-lg-6 col-md-11 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Testimonials</h4>
                </div>
                <div class="card-body">
                    <p class="card-text" style="font-size: 20px; color:#000;" >
                        List of all the Testimonials
                    </p>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Sl.</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonials as $testimonial)
                            <tr>
                                <td>
                                     {{ $loop->index + 1 }}
                                </td>
                                <td>
                                    
                                    <span class="font-weight-bold">{{ $testimonial->name }}</span>
                                </td>
                                <td>{{ $testimonial->description }}</td>
                                <td>
                                   <img src="{{ asset('uploads/testimonials') }}/{{ $testimonial->image }}" width="200" alt="">
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('testimonials.edit', $testimonial->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                <span>Edit</span>
                                            </a>
                                            <a class="dropdown-item" href="{{ route('testimonials.delete', $testimonial->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                </svg>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                       
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
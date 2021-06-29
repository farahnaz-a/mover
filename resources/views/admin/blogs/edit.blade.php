@extends('layouts.dashboard')
                
@section('title')
    {{ config('app.name') }} - Blog Settings
@endsection
           
@section('breadcrumb')
<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Edit Blog</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                    </li>
                    {{-- <li class="breadcrumb-item"><a href="#">Layouts</a>
                    </li> --}}
                    <li class="breadcrumb-item active">Edit Blog
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
                    <h4 class="card-title">Edit Blog</h4>
                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('blogs.update') }}" enctype="multipart/form-data" method="POST">
                        {{-- Initiate PUT Method for update --}}
                        {{-- {{ method_field('PUT') }} --}}
                        @csrf
                        <input type="hidden" name="id" value="{{ $blog->id }}">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-title-vertical" style="color:#000; font-size:18px;">Title</label>
                                    <input type="text" id="first-title-vertical" class="form-control" name="title" placeholder="Enter Title">
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description" style="color:#000; font-size:18px;">Description</label>
                                    <textarea type="text" id="description" class="form-control" name="description" placeholder="Enter Description"></textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="image" style="color:#000; font-size:18px;">Image</label>
                                    <input type="file" id="image" class="form-control" name="image" >
                                    @error('image')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="py-2">
                                    <p>Existing Image : </p>
                                    <img src="{{ asset('uploads/blogs') }}/{{ $blog->image}}" width="300" alt="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description_one" style="color:#000; font-size:18px;">Description one</label>
                                    <textarea type="text" id="description_one" class="form-control" name="description_one" placeholder="Enter Description"></textarea>
                                    @error('description_one')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="image_one" style="color:#000; font-size:18px;">Image One</label>
                                    <input type="file" id="image_one" class="form-control" name="image_one">
                                    @error('image_one')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="py-2">
                                    <p>Existing Image : </p>
                                    <img src="{{ asset('uploads/blogs') }}/{{ $blog->image_one }}" width="300" alt="">
                                </div> 
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description_two" style="color:#000; font-size:18px;">Description Two</label>
                                    <textarea type="text" id="description_two" class="form-control" name="description_two" placeholder="Enter Description"></textarea>
                                    @error('description_two')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="image_two" style="color:#000; font-size:18px;">Image Two</label>
                                    <input type="file" id="image_two" class="form-control" name="image_two">
                                    @error('image_two')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="py-2">
                                    <p>Existing Image : </p>
                                    <img src="{{ asset('uploads/blogs') }}/{{ $blog->image_two }}" width="300" alt="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description_three" style="color:#000; font-size:18px;">Description Three</label>
                                    <textarea type="text" id="description_three" class="form-control" name="description_three" placeholder="Enter Description"></textarea>
                                    @error('description_three')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="image_three" style="color:#000; font-size:18px;">Image Three</label>
                                    <input type="file" id="image_three" class="form-control" name="image_three" >
                                    @error('image_three')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="py-2">
                                    <p>Existing Image : </p>
                                    <img src="{{ asset('uploads/blogs') }}/{{ $blog->image_three }}" width="300" alt="">
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
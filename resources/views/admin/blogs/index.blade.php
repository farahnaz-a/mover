@extends('layouts.dashboard')
                
@section('title')
    {{ config('app.name') }} - Blogs Settings
@endsection
           
@section('breadcrumb')
<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Blogs Settings</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                    </li>
                    {{-- <li class="breadcrumb-item"><a href="#">Layouts</a>
                    </li> --}}
                    <li class="breadcrumb-item active">Blogs Settings
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Blogs</h4>
                    <h4 class="card-title"><a href="{{ route('blogs.create') }}" class="btn btn-primary">Add New</a></h4>
                </div>
                <div class="card-body">
                    <p class="card-text" style="font-size: 20px; color:#000;" >
                        List of all the Blogs
                    </p>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Sl.</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Description One</th>
                                <th>Image One</th>
                                <th>Description Two</th>
                                <th>Image Two</th>
                                <th>Description THree</th>
                                <th>Image Three</th>
                                <th>Written By</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                            <tr>
                                <td>
                                     {{ $loop->index + 1 }}
                                </td>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->description }}</td>
                                <td>
                                   <img src="{{ asset('uploads/blogs') }}/{{ $blog->image }}" width="200" alt="not-found">
                                </td>
                                <td>{{ $blog->description_one }}</td>
                                <td><img src="{{ asset('uploads/blogs') }}/{{ $blog->image_one }}" alt=""></td>
                                <td>{{ $blog->description_two }}</td>
                                <td><img src="{{ asset('uploads/blogs') }}/{{ $blog->image_two }}" alt=""></td>
                                <td>{{ $blog->description_three }}</td>
                                <td><img src="{{ asset('uploads/blogs') }}/{{ $blog->image_three }}" alt=""></td>
                                <td>{{ $blog->getUser->name }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('blogs.edit', $blog->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                <span>Edit</span>
                                            </a>
                                            <a class="dropdown-item" href="{{ route('blogs.delete', $blog->id) }}">
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
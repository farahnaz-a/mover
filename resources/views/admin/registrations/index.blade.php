@extends('layouts.dashboard')
                
@section('title')
    {{ config('app.name') }} - Registration Settings
@endsection

@section('registrations')
    active
@endsection
           
@section('breadcrumb')
<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Registration Settings</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                    </li>
                    {{-- <li class="breadcrumb-item"><a href="#">Layouts</a>
                    </li> --}}
                    <li class="breadcrumb-item active">Registration Settings
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
                    <h4 class="card-title">Add Registration</h4>
                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('registrations.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical" style="color:#000; font-size:18px;">Title</label>
                                    <input type="text" id="first-name-vertical" class="form-control" name="title" value="{{ $data->title }}">
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical" style="color:#000; font-size:18px;">Description</label>
                                    <textarea type="text" id="email-id-vertical" class="form-control" name="description">{{ $data->description }}</textarea>
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email-id-vertical" style="color:#000; font-size:18px;">Description</label>
                                    <input type="file" name="bg_image" class="form-control">
                                    @error('description')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="py-3">
                                    <p>Existing Image : </p>
                                    <img src="{{ asset('uploads/registrations') }}/{{ $data->bg_image }}" alt="">
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="form-group" id="newItem">
                                    <label for="first-name-vertical" style="color:#000; font-size:18px;">Bullet points</label>
                                    @foreach ($bullets as $bullet)
                                    <input type="hidden" name="bullet_id[]" value="{{ $bullet->id }}}">
                                    <input type="text" id="first-name-vertical" class="form-control my-3" name="bullet[]" value="{{ $bullet->bullets }}">
                                    @endforeach
                                    @error('title')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-3 " style="margin-top: 40px;">
                                <a id="addMore" class="btn btn-success btn-sm">+Add more</a>
                            </div>
                            <div class="col-12">
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-6 col-md-11 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Registrations</h4>
                </div>
                <div class="card-body">
                    <p class="card-text" style="font-size: 20px; color:#000;" >
                        List of all the Registrations
                    </p>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Sl.</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($registrations as $registration)
                            <tr>
                                <td>
                                     {{ $loop->index + 1 }}
                                </td>
                                <td>
                                    <span class="font-weight-bold">{{ $registration->title }}</span>
                                </td>
                                <td>{{ $registration->description }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow waves-effect waves-float waves-light" data-toggle="dropdown">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('registrations.edit', $registration->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                <span>Edit</span>
                                            </a>
                                            <form action="{{ route('registrations.destroy', $registration->id) }}" method="POST">
                                               
                                                {{ method_field('DELETE') }}
                                                @csrf 
                                                <a class="dropdown-item" href="{{ route('registrations.destroy', $registration->id) }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                    <span>Delete</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> --}}
    </div>
</section>
@endsection

@section('js')
  <script>
      let addMore = document.getElementById('addMore'); 
// let newItem   = "<input type='text' name='bullets[]' class='form-control' id='validationTooltip03' required>";

            addMore.addEventListener('click', function(event){
            let itemParent = document.getElementById('newItem');
            let newItem = document.createElement('input'); 
            newItem.setAttribute('name', 'bullets[]');
            newItem.setAttribute('class', 'form-control mt-3');
            newItem.setAttribute('placeholder', 'List your bullet points here');
            itemParent.appendChild(newItem);
            
            });
  </script>
@endsection
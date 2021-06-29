@extends('layouts.dashboard')
                
@section('title')
    {{ config('app.name') }} - Contact Settings
@endsection
           
@section('breadcrumb')
<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Edit Contact</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                    </li>
                    {{-- <li class="breadcrumb-item"><a href="#">Layouts</a>
                    </li> --}}
                    <li class="breadcrumb-item active">Edit Contact
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
                    <h4 class="card-title">Edit Contact</h4>
                </div>
                <div class="card-body">
                    <form class="form form-vertical" action="{{ route('contacts.update') }}" enctype="multipart/form-data" method="POST">
                        {{-- Initiate PUT Method for update --}}
                        {{-- {{ method_field('PUT') }} --}}
                        @csrf
                        <input type="hidden" name="id" value="{{ $contact->id }}">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical" style="color:#000; font-size:18px;">Germany Number</label>
                                    <input type="text" id="first-name-vertical" class="form-control" name="g_number" value="{{ $contact->g_number }}">
                                    @error('g_number')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical-1" style="color:#000; font-size:18px;">Germany Email</label>
                                    <input type="text" id="first-name-vertical-1" class="form-control" name="g_mail"  value="{{ $contact->g_mail }}">
                                    @error('g_mail')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical-2" style="color:#000; font-size:18px;">Spain Number</label>
                                    <input type="text" id="first-name-vertical-2" class="form-control" name="s_number"  value="{{ $contact->s_number }}">
                                    @error('s_number')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-vertical-3" style="color:#000; font-size:18px;">Spain Email</label>
                                    <input type="text" id="first-name-vertical-3" class="form-control" name="s_mail" value="{{ $contact->s_mail }}">
                                    @error('s_mail')
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
    </div>
</section>
@endsection
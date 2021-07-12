@extends('layouts.mover')
                
@section('title')
    {{ config('app.name') }} - Banner Settings
@endsection

@section('banners')
    active
@endsection
           
@section('breadcrumb')
<div class="content-header-left col-md-9 col-12 mb-2">
    <div class="row breadcrumbs-top">
        <div class="col-12">
            <h2 class="content-header-title float-left mb-0">Banner Settings</h2>
            <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
                    </li>
                    {{-- <li class="breadcrumb-item"><a href="#">Layouts</a>
                    </li> --}}
                    <li class="breadcrumb-item active">Banner Settings
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
    <h1>Welcome TO Mover</h1>
@endsection
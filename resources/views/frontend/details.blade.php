@extends('layouts.frontend')
@php
$comments = \App\Models\Comment::where('announcement_id', $data->id)->get();
$count = $comments->count();
@endphp
@section('title')
    {{ config('app.name') }} - Details
@endsection

@section('meta-description')
    Transportation Website
@endsection

@section('meta-keywords')
    transport, france, best affordable transport listing
@endsection

@section('css')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

@endsection

@section('content')
    <!-- Main Body Content Start -->
    <main id="body-content" style="overflow-y: inherit">
        <!-- map view start -->
        <section class="map-view bg-light-gray">
            <div class="container">
                <div class="map-view-wrapper">
                    <div class="row">
                        <div class="col-lg-12 col-xl-12">
                            <div class="left">
                                <div class=" d-flex flex-wrap justify-content-between align-items-center ">
                                    <a href="{{ route('frontend.announcements') }}"
                                        class="btn text-white bg-navy-blue mb-3">
                                        <i class="icofont-arrow-left mr-2"></i>Retour
                                    </a>
                                </div>
                                <div class="map-content shadow-sm">
                                    <div class="map-header">
                                        <div class="icon"></div>
                                        <h3 class="d-inline">
                                        @if ($data->category == 'déménagement')  
                                            <i style="color: #5fc2ba !important" class="icofont-building-alt"></i>  
                                        @elseif($data->category == 'chauffeur')
                                            <i style="color: #5fc2ba !important" class="icofont-fast-delivery"></i> 
                                        @elseif($data->category == 'meubles')
                                            <i style="color: #5fc2ba !important" class="icofont-bed"></i> 
                                        @elseif($data->category == 'électroménager') 
                                            <i style="color: #5fc2ba !important" class="icofont-refrigerator"></i> 
                                        @elseif($data->category == 'colis')
                                            <i style="color: #5fc2ba !important" class="icofont-box"></i> 
                                        @elseif($data->category == 'palette')
                                            <i style="color: #5fc2ba !important" class="icofont-truck-alt"></i> 
                                        @elseif($data->category == 'motos')
                                             <i style="color: #5fc2ba !important" class="icofont-motor-biker"></i> 
                                        @elseif($data->category == 'voitures')
                                             <i style="color: #5fc2ba !important" class="icofont-car-alt-3"></i> 
                                        @elseif($data->category == 'divers')
                                            <i style="color: #5fc2ba !important" class="icofont-search-2"></i> 
                                        @endif 
                                            {{-- {{ strtoupper($data->category) }} {{ $data->equipment ?? $data->model_name ?? $data->food_name ?? $data->animalName ?? $data->boatName }} --}}
                                            @if ($data->category == 'déménagement') 
                                                DÉMÉNAGEMENT
                                            @else
                                                {{ strtoupper($data->category) }}
                                            @endif 
                                            <br />
                                            <small>Référence : <strong>{{ $data->id.rand(1000,9999) }}</strong>
                                            </small>
                                        </h3>
                                        @auth
                                            @if (Auth::user()->role == 'mover')
                                                @if (bidding(Auth::id(), $data->id))
                                                    <a style="margin-left: 10px;" class="btn text-white bg-navy-blue mb-3">
                                                        <i class="icofont-arrow-right mr-2"></i>Your bid =
                                                        €{{ bidding(Auth::id(), $data->id)->price }}
                                                    </a>
                                                @else
                                                    <a style="margin-left: 10px;" data-toggle="modal"
                                                        data-target="#ModalExample" class="btn text-white bg-navy-blue mb-3">
                                                        <i class="icofont-arrow-right mr-2"></i>Bid now
                                                    </a>
                                                @endif


                                                <!-- Modal HTML Markup -->
                                                <div id="ModalExample" class="modal fade">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title text-xs-center">Bid Now</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form role="form" method="POST"
                                                                    action="{{ route('bidding.store') }}">
                                                                    @csrf
                                                                    <input type="hidden" name="announcement_id"
                                                                        value="{{ $data->id }}">
                                                                    <input type="hidden" name="mover_id"
                                                                        value="{{ Auth::id() }}">
                                                                    <input type="hidden" name="customer_id"
                                                                        value="{{ $data->user_id }}">
                                                                    <div class="form-group">
                                                                        <label class="control-label">Bidding price</label>
                                                                        <div>
                                                                            <input type="text" placeholder="Enter bidding price"
                                                                                class="form-control input-lg" name="price"
                                                                                value="">
                                                                        </div>
                                                                        @error('price')
                                                                            <small
                                                                                class="text-danger">{{ $message }}</small>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label">Your Notes to the
                                                                            customer</label>
                                                                        <div>
                                                                            <textarea name="notes" class="form-control input-lg"
                                                                                placeholder="Enter notes"></textarea>
                                                                            @error('notes')
                                                                                <small
                                                                                    class="text-danger">{{ $message }}</small>
                                                                            @enderror
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <div>
                                                                            <button type="submit"
                                                                                class="btn btn-info btn-block">Submit your
                                                                                bid</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer text-xs-center">
                                                                Don't have an account? <a href="{{ route('register') }}">Sign
                                                                    up »</a>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                            @endif
                                        @endauth
                                    </div>
                                    <div id="map-canvas"></div>
                                    <div class="row mt-4">
                                        <div class="col-lg-4">
                                            <div class="chargement">
                                                <h5>
                                                    <span>
                                                        <i class="icofont-ui-user"></i>
                                                    </span>
                                                    Pseudo: <small>{{ $data->pseudo ?? 'Not Available' }}</small>
                                                </h5>
                                                <h5>
                                                    <span>
                                                        <i class="icofont-location-pin" style="color:#5fc2ba;"></i>
                                                    </span>
                                                    {{ $data->depart }}
                                                </h5>
                                                {{-- <small>entre le {{ $data->loading_start }} et le {{ $data->loading_end }}</small> --}}
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="livraison">
                                                <h5>
                                                    <span>
                                                        <i class="icofont-clock-time"></i>
                                                    </span>
                                                    Mise en ligne: <small>{{ $data->created_at->format('Y-m-d') ?? 'Not Available' }}</small></h5>
                                                <h5>
                                                    <span>
                                                        <i class="icofont-location-pin" style="color:#5fc2ba;"></i>
                                                    </span>
                                                    {{ $data->arrivee }}
                                                </h5>
                                                {{-- <small> entre le {{ $data->delivery_start }} et le {{ $data->delivery_end }}</small> --}}
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="livraison">
                                                <span>
                                                    <i class="icofont-eye-alt mr-2" style="color:#5fc2ba;"></i>
                                                    Vues: {{ $data->views }}
                                                </span>
                                                <h5>
                                                    <span>
                                                        <i class="icofont-map-pins" style="color:#5fc2ba;"></i>
                                                    </span>
                                                   <span id="distance">{{ $data->distance }}</span>
                                                </h5>
                                            </div>
                                        </div> 
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card shadow-sm border-0 my-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h5 class="mb-3">Date de départ: <small class="font-weight-bold"> {{ $data->loading_date ?? 'Not Available' }}</small></h5>
                                            <h5 class="mb-3">Type de lieu départ: <small class="font-weight-bold">{{ $data->place_type_depart ?? 'Not Available' }}</small></h5>
                                            <h5 class="mb-3">Étages: <small class="font-weight-bold">{{ $data->floor_depart ?? 'Not Available' }}</small></h5>
                                            <h5 class="mb-3">Ascenseur: <small class="font-weight-bold">{{ $data->ascenseur_depart ?? 'Not Available' }}</small></h5>
                                            <h5 class="mb-4 mb-lg-0">Accéss:<small class="font-weight-bold"> {{ $data->access_depart ?? 'Not Available' }}</small></h5>
                                        </div>
                                        <div class="col-lg-6">
                                            <h5 class="mb-3">Date d'arrivée: <small class="font-weight-bold">{{ $data->delevary_date ?? 'Not Available'}}</small></h5>
                                            <h5 class="mb-3">Type de lieu arrivée: <small class="font-weight-bold">{{ $data->place_type_arrivee ?? 'Not Available' }}</small></h5>
                                            <h5 class="mb-3">Étages: <small class="font-weight-bold">{{ $data->floor_arrivee ?? 'Not Available' }}</small></h5>
                                            <h5 class="mb-3">Ascenseur: <small class="font-weight-bold">{{ $data->ascenseur_arrivee ?? 'Not Available' }}</small></h5>
                                            <h5>Accéss: <small class="font-weight-bold">{{ $data->access_arrivee ?? 'Not Available' }}</small></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-sm border-0 my-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Biens particuliers: <small class="font-weight-bold">{{ $data->individual_goods ?? 'Not Available' }}</small></h5>
                                        </div>
                                        <div class="col-md-6">
                                            <h5>Volume: <small class="font-weight-bold">{{ $data->volume ?? 'Not Available' }}</small> </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-sm border-0 my-4">
                                <div class="card-body">
                                    <h5>Liste: <small class="font-weight-bold">{{ $data->list ?? 'Not Available' }}</small></h5>
                                </div>
                            </div>
                            <div class="card shadow-sm border-0 my-4">
                                <div class="card-body">
                                    <h5>Informations complémentaires: <small>{{ $data->informations ?? 'Not Available' }}</small></h5>  
                                    <h5>Photo:</h5> 
                                    @foreach ($data->getImage as $image)
                                    <img class="img-fluid w-25 m-1" src="{{ asset('uploads/announcement/image') }}/{{ $image->image }}" alt=""> 
                                    @endforeach
                                </div>
                            </div>
                            @if ($data->category == 'déménagement')
                            <div class="card shadow-sm border-0 my-4">
                                <div class="card-body">
                                    <h5>Formule:</h5> 
                                    @if ($data->services == 'clicmove')
                                        <h6>Camion avec chauffeur</h6>
                                        <ul class="custom-list">
                                            {{-- <li>protection du mobilier</li> --}}
                                            {{-- <li>manutention au chargement</li> --}}
                                            <li>transport</li>
                                            {{-- <li>manutention au déchargement</li> --}}
                                            <li>Assurance</li>
                                            <li>frais de route (péage, carburant, ferry,…)</li> 
                                        </ul>
                                    @endif  
                                    @if ($data->services == 'économique')
                                        <h6>Économique</h6>
                                        <ul class="custom-list">
                                            <li>Nombre de déménageur nécessaire</li>
                                            {{-- <li>démontage du mobilier</li> --}}
                                            {{-- <li>Emballage du fragile</li> --}}
                                            <li>protection du mobilier</li>
                                            <li>manutention au chargement</li>
                                            <li>transport</li>
                                            <li>manutention au déchargement</li>
                                            {{-- <li>remontage du mobilier</li> --}}
                                            <li>Assurance</li>
                                            <li>frais de route (péage, carburant, ferry,…)</li>
                                        </ul>
                                    @endif
                                    @if ($data->services == 'standard')
                                        <h6>Standard</h6>
                                        <ul class="custom-list">
                                            <li>Nombre de déménageur nécessaire</li>
                                            <li>démontage du mobilier</li>
                                            <li>Emballage du fragile</li>
                                            <li>protection du mobilier</li>
                                            <li>manutention au chargement</li>
                                            <li>transport</li>
                                            <li>manutention au déchargement</li>
                                            <li>remontage du mobilier</li>
                                            <li>Assurance</li>
                                            <li>frais de route (péage, carburant, ferry,…)</li>  
                                        </ul>
                                    @endif
                                    @if ($data->services == 'compléte')
                                        <h6>Complète</h6>
                                        <ul class="custom-list">
                                            <li>Nombre de déménageur nécessaire</li>
                                            <li>mise en carton complète (fournitures de matèriels et main d'oeuvre) (Vêtement et linge de lit Livres et documents Vaisselles et fragile Divers)</li>
                                            <li>démontage du mobilier</li>
                                            <li>protection du mobilier</li>
                                            <li>manutention au chargement</li>
                                            <li>transport</li>
                                            <li>manutention au déchargement</li>
                                            <li>remontage du mobilier</li> 
                                            <li>Assurance</li>
                                            <li>frais de route (péage, carburant, ferry,…)</li>  
                                        </ul>
                                    @endif
                                </div>
                            </div>
                            @endif
                        </div>
                       @guest
                        <div class="col-12">
                            <p class="text-center my-5">
                                Vous êtes une société de déménagement-transport, inscrivez-vous pour déposer des
                                devis. C'est simple rapide et gratuit. <a class="btn" style="background: #5fc2ba; color:white;" href="{{ route('register') }}">INSCRIVEZ-VOUS</a>
                            </p>
                        </div>
                       @endguest
                        <div class="col-lg-12 col-xl-12 mt-5">
                            <div class="left">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="active">Devis ({{ totalbid($data->id)->count() }})</h5>
                                         @foreach (totalbid($data->id) as $key => $bid)
                                         <div class="row"  style="background: #d7f4e2; padding:10px; margin-bottom: 2px">
                                            @guest
                                                <div class="col-4">
                                                    <h5><strong>{{ $bid->price }} €</strong> </h5>
                                                </div>
                                                <div class="col-4">
                                                    <h5> <span class="d-block"><i class="icofont-fast-delivery"></i></span></h5>
                                                    {{-- <strong>{{ $bid->getAnnouncement->category }}</strong>  --}}

                                                </div>
                                                <div class="col-4">
                                                    <h5><small><a style="cursor: pointer" data-toggle="modal"
                                                        data-target="#DetailModal{{ $bid->id }}">Voir
                                                        détails</a></small></h5>
                                                </div>  
                                            @endguest
                                            @auth
                                                <div class="col-3">
                                                    <h5><strong>{{ $bid->price }} €</strong> </h5>
                                                </div>
                                                <div class="col-3">
                                                    <h5> <span class="d-block"><i class="icofont-fast-delivery"></i></span></h5>
                                                    {{-- <strong>{{ $bid->getAnnouncement->category }}</strong>  --}}

                                                </div>
                                                <div class="col-3">
                                                    <h5><small><a style="cursor: pointer" data-toggle="modal"
                                                        data-target="#DetailModal{{ $bid->id }}">Voir
                                                        détails</a></small></h5>
                                                </div>
                                                <div class="col-3"> 
                                                    @if ($data->user_id == Auth::id())
                                                        @if ($bid->status == 'pending')
                                                            <a href="{{ route('bid.accept', $bid->id) }}"><span
                                                                    class="text-success">Accept</span></a>
                                                        @elseif($bid->status == 'rejected')
                                                            <a href="javascript:void(0);"><span
                                                                    class="text-danger">Rejected</span></a>
                                                        @else
                                                            <a href="javascript:void(0);"><span
                                                                    class="text-success">Accepted</span></a>
                                                        @endif
                                                    @endif
                                                </div>
                                            @endauth
                                            <!-- Modal HTML Markup -->
                                            <div id="DetailModal{{ $bid->id }}" class="modal fade">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title text-xs-center">Bid Now</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>
                                                                Price : € {{ $bid->price }}
                                                            </p>
                                                            <p>
                                                                Notes from mover : {{ $bid->notes }}
                                                            </p>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                         </div>
                                        @endforeach     
                                    </div>
                                    <div class="col-md-6">
                                        <h5 id="count" data-target="message">Message ({{ $count }})</h5>
                                        @guest
                                            <div id="msg" class="message-wrapper" style="background: #{{ ($count != 0)?'d7f4e2':'' }}; padding:10px;">
                                                @include('comments')
                                            </div> 
                                        @endguest
                                    @auth
                                        <div id="msg" class="message-wrapper" style="background: #{{ ($count != 0)?'d7f4e2':'' }}; padding:10px;">
                                            @include('comments')
                                        </div>

                                        <div class="input-group">
                                            <input id="enter" type="text" class="form-control" placeholder="message"
                                                name="comment" required />

                                            <div class="input-group-append">
                                                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                                <input type="hidden" name="announcement_id" value="{{ $data->id }}">
                                                <button type="button" id="commentSubmit" class="input-group-text">
                                                    <i class="icofont-paper-plane"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="p-3">
                                            <small class="text-danger" id="error"></small>
                                        </div>
                                    @endauth

                                    </div>
                                </div>
                                </div> 
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- map view end -->

    @endsection

    @section('js')
        <script>
            $(document).ready(function() {



                $("#enter").keydown(function(event) {
                    var keyCode = (event.keyCode ? event.keyCode : event.which);
                    if (keyCode == 13) {
                        $('#commentSubmit').trigger('click');
                    }
                });
                $("#commentSubmit").on("click", function() {


                    let comment = $("input[name=comment]").val();
                    let user_id = $("input[name=user_id]").val();
                    let announcement_id = $("input[name=announcement_id]").val();

                    if (comment == '') {
                        $("#error").html('Please write a message to send');
                        return false;
                    }

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({

                        url: "{{ route('comment.post') }}",
                        type: "POST",
                        data: {
                            comment: comment,
                            user_id: user_id,
                            announcement_id: announcement_id,
                        },
                        success: function(data) {
                            $("#msg").html(data.response);
                            let push = "Message (" + data.count + ")";
                            $("#count").html(push);
                            $("input[name=comment]").val('');
                        }

                    })

                });
            });
        </script>



        <script>
            @if (count($errors) > 0)
                $(document).ready(function(){
                $("#ModalExample").modal('show');
                });
            @endif
        </script>
        <!-- google map -->
        <script>
            function initMap() {
                const directionsService = new google.maps.DirectionsService()
                const directionsRenderer = new google.maps.DirectionsRenderer()
                const map = new google.maps.Map(document.getElementById('map-canvas'), {
                    zoom: 7,
                    center: {
                        lat: 41.85,
                        lng: -87.65
                    },
                })
                directionsRenderer.setMap(map)

                calculateAndDisplayRoute(directionsService, directionsRenderer)
            }

            function calculateAndDisplayRoute(directionsService, directionsRenderer) {
                directionsService.route({
                        origin: {
                            query: '{{ $data->depart }}',
                            
                        },
                        destination: {
                            query: '{{ $data->arrivee }}',
                        },
                        travelMode: google.maps.TravelMode.DRIVING,
                    },
                    (response, status) => {
                        if (status === 'OK') {
                            directionsRenderer.setDirections(response)
                            let distance = response.routes[0].legs[0].distance.text


                             $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
});

                             $.ajax({
                                type : 'POST',
                                url : "{{ route('distance.post') }}",
                                data : {
                                    distance : distance,
                                    id : '{{ $data->id }}',
                                },
                                success : function(data){
                                    
                                    $("#distance").html(data);
                                }
                             });


                        } else {
                            // $('#distance').append('Map Not Found');
                            console.log(status)
                        }
                    }
                )
            }

            //right body tab
            const tabButtons = document.querySelectorAll('.right-tab span')
            const tabBody = document.querySelectorAll('.right-tab-body')

            tabButtons.forEach((tabButton) => {
                tabButton.addEventListener('click', function() {
                    const idName = tabButton.getAttribute('data-target')
                    tabButtons.forEach((tabButtonItem) => {
                        tabButtonItem.classList.remove('active')
                        this.classList.add('active')
                    })
                    tabBody.forEach((tabBodyItem) => {
                        tabBodyItem.classList.remove('active')
                        document.getElementById(idName).classList.add('active')
                    })
                })
            })
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCYYbVzj3y4aUpnJCDZ756CrHJXVs93U4&callback=initMap&libraries=&v=weekly"
                async></script>
    @endsection

    @push('css')
    <style>
        .custom-list{
            list-style-image: url({{ asset('uploads/check.png') }}); 
        }
    </style>
        
    @endpush

    
@extends('layouts.frontend')

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
                <div class="col-lg-7 col-xl-8">
                  <div class="left">
                    <div
                      class="
                        d-flex
                        flex-wrap
                        justify-content-between
                        align-items-center
                      "
                    >
                      <a
                        href="/map.html"
                        class="btn text-white bg-navy-blue mb-3"
                      >
                        <i class="icofont-arrow-left mr-2"></i>Retour
                      </a>
                      <div class="mb-3">
                        <span class="ml-3"
                          ><i class="icofont-eye-alt mr-2"></i> Vues: 25</span
                        >
                        <span class="ml-3">Postée le : 25/05/2021</span>
                        <span class="text-danger ml-3">Expire dans 21 jours</span>
                      </div>
                    </div>
                    <div class="map-content shadow-sm">
                      <div class="map-header">
                        <div class="icon"><i class="icofont-car-alt-3"></i></div>
                        <h3>
                          Biens fragiles TABLEAU <br /><small
                            >Référence : 422983</small
                          >
                        </h3>
                      </div>
                      <div id="map-canvas"></div>
                      <div class="row mt-4">
                        <div class="col-md-6">
                          <div class="chargement">
                            <h5><span>a</span>Provincia de Sevilla (41013)</h5>
                            <small>entre le 31/05 et le 02/06</small>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="livraison">
                            <h5><span>b</span>Cataluña (08328)</h5>
                            <small> entre le 01/06 et le 06/06</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="shadow-sm map-information">
                      <h5>Volume : <strong>1m3</strong></h5>
                      <h5>Formule : <strong>Camion avec chauffeur</strong></h5>
                      <p class="alert alert-warning">
                        Le client fait la mise en carton, le démontage des meubles
                        et la protection des objets fragiles. Le client fournira
                        des personnes de son entourage pour charger et décharger.
                        Le déménageur ne viendra qu'avec le camion et aidera à
                        charger et décharger au pied du camion.
                      </p>
                      <h6 class="font-weight-bold">Information supplémentaire</h6>
                      <p>
                        1 personne à aider au départ et à l'arrivée - un vélo - 3
                        cartons livres - 2 cartons papiers - un tapis - un cadre
                        de tableau
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                  <div class="right shadow-sm">
                    <div class="right-tab">
                      <span class="active" data-target="devis">Devis (1)</span>
                      <span data-target="message">Message (1)</span>
                    </div>
                    <div class="right-tab-body active" id="devis">
                      <p class="text-center">
                        Je suis un transporteur, déménageur et je souhaite
                        proposer mes services.
                      </p>
                      <div class="right-card">
                        <div>
                          <h5>Pas encore inscrit ?</h5>
                          <p>L'inscription est rapide et gratuite</p>
                        </div>
                        <div>
                          <button class="btn bg-navy-blue text-white">
                            S'inscrire
                          </button>
                        </div>
                      </div>
                      <div class="right-card">
                        <div>
                          <h5>Pas encore inscrit ?</h5>
                          <p>L'inscription est rapide et gratuite</p>
                        </div>
                        <div>
                          <button class="btn bg-navy-blue text-white">
                            S'inscrire
                          </button>
                        </div>
                      </div>
                      <div class="bid-response">
                        <div class="rating">
                          <i class="icofont-car-alt-3"></i>
                          <div>
                            <span>SER75</span>
                            <div class="star">
                              <i class="icofont-star"></i>
                              <i class="icofont-star"></i>
                              <i class="icofont-star"></i>
                              <i class="icofont-star"></i>
                              <i class="icofont-star"></i>
                            </div>
                          </div>
                        </div>
                        <div>
                          <h5>
                            <strong>350 $</strong> <br /><small
                              ><a href="#">Voir détails</a></small
                            >
                          </h5>
                        </div>
                        <div>
                          <span class="text-danger">expire</span>
                        </div>
                      </div>
                    </div>
                    <div class="right-tab-body" id="message">
                      <p class="text-center">
                        Se connecter pour voir les messages.
                      </p>
                      <div class="right-card">
                        <div>
                          <h5>Pas encore inscrit ?</h5>
                          <p>L'inscription est rapide et gratuite</p>
                        </div>
                        <div>
                          <button class="btn bg-navy-blue text-white">
                            S'inscrire
                          </button>
                        </div>
                      </div>
                      <div class="right-card">
                        <div>
                          <h5>Pas encore inscrit ?</h5>
                          <p>L'inscription est rapide et gratuite</p>
                        </div>
                        <div>
                          <button class="btn bg-navy-blue text-white">
                            S'inscrire
                          </button>
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
    <!-- google map -->
    <script>
        function initMap() {
          const directionsService = new google.maps.DirectionsService()
          const directionsRenderer = new google.maps.DirectionsRenderer()
          const map = new google.maps.Map(document.getElementById('map-canvas'), {
            zoom: 7,
            center: { lat: 41.85, lng: -87.65 },
          })
          directionsRenderer.setMap(map)
  
          calculateAndDisplayRoute(directionsService, directionsRenderer)
        }
  
        function calculateAndDisplayRoute(directionsService, directionsRenderer) {
          directionsService.route(
            {
              origin: {
                query: 'Chattogram',
              },
              destination: {
                query: 'Narshindi',
              },
              travelMode: google.maps.TravelMode.DRIVING,
            },
            (response, status) => {
              if (status === 'OK') {
                directionsRenderer.setDirections(response)
              } else {
                console.log(status)
              }
            }
          )
        }
  
        //right body tab
        const tabButtons = document.querySelectorAll('.right-tab span')
        const tabBody = document.querySelectorAll('.right-tab-body')
  
        tabButtons.forEach((tabButton) => {
          tabButton.addEventListener('click', function () {
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
      <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCYYbVzj3y4aUpnJCDZ756CrHJXVs93U4&callback=initMap&libraries=&v=weekly"
        async
      ></script>
@endsection
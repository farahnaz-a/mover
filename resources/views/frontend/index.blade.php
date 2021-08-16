
@extends('layouts.frontend')

@section('title')
    {{ config('app.name') }} - Home
@endsection

@section('meta-description')
    Transportation Website
@endsection

@section('meta-keywords')
    transport, france, best affordable transport listing
@endsection

@section('css')
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
@endsection

@section('content')
    <!-- Fullscreen Slider Start -->
    <div id="banner_slider">
      @foreach ($banners as $banner)
      <div class="banner_section" style="background-image: url('{{ asset('uploads/banners/') }}/{{ $banner->image }}')">
        <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="banner_content">
                  <div class="text-left" style="margin-bottom: 100px;">
                    <h1 data-aos-delay="1000" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700" style="color: #06163a; font-family : Cordoba; font-size: 34px; padding-bottom: 50px; text-transform: uppercase;">{{ $banner->title }}</h1>
                    <h1 data-aos-delay="1300" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700" style="color: #06163a; text-transform:uppercase; font-family : Cordoba; font-size: 34px">{{ $banner->description }}</h4>
                    {{-- <p data-aos-delay="1600" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700" style="color: #06163a;">
                      We deliver your products on time with pure safety. Sed ut perspiciatis unde<br>
                      omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    </p> --}}
                 {{-- <a href="#body-content">
                  <div data-aos-delay="1900" data-aos="flip-left" data-aos-easing="linear" data-aos-duration="700"  class="tp-caption tp-resizeme btn-theme bg-navy-blue">
                    Learn More<i class="icofont-rounded-right" style="transition: none 0s ease 0s; text-align: inherit; line-height: 44px; border-width: 0px; margin: 0px; padding: 0px 0px 0px 5px; letter-spacing: 0px; font-weight: 400; font-size: 17px;"></i>
                  </div>
                 </a> --}}
                  </div>
               </div>
              </div>
            </div>
        </div>  
      </div>
      @endforeach
    </div>
  <!-- Fullscreen Slider End -->

  <!-- Main Body Content Start -->
  <main id="body-content" style="overflow-y: inherit;">

    <!-- What Makes Us Special Start -->
    <section class="bg-light-theme wide-tb-100 pb-0">
      <div class="container pos-rel">
        <div class="row">
          <!-- Heading Main -->
          <div class="col-sm-12 wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
            <h1 class="heading-main">
              {{-- <span>What We Offer</span> --}}
              COMMENT ÇA MARCHE
            </h1>
          </div>
          <!-- Heading Main -->

           @foreach ($services as $key => $service)
           <div class="col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="
            @if($key == 0)
            0.1s 
            @else 
            0.{{ $key * 2 }}s
            @endif
           ">            
            <!-- Icon Box 2 -->
            <a href="javascript:void();">
              <div class="icon-box-4 h-100">
                @if($key == 0)
                <i style="color: #5fc2ba;" class="icofont-responsive"></i>
                @elseif($key == 1)
                <i style="color: #5fc2ba;" class="icofont-tick-boxed"></i>
                @elseif($key == 2)
                <i style="color: #5fc2ba;" class="icofont-license"></i>
                @endif
                {{-- <img src="{{ asset('uploads/services') }}/{{ $service->image }}" alt=""> --}}
                {{-- <h4 class="h4-md mb-3"></h4> --}}
                <p style="color: #06163a; text-transform:uppercase"> <span style="color:#5fc2ba; font-weight:bold;">{{ $service->title }}</span> {{ $service->description }}</p>
              </div> 
            </a>
            <!-- Icon Box -->
          </div>
           @endforeach


          <div class="text-center btn-center mx-auto">
            <a href="{{ route('frontend.requestQuote') }}" class="btn-theme bg-navy-blue">Demande de devis<i class="icofont-rounded-right"></i></a>
          </div>

        </div>
        
      </div>
    </section>
    <!-- What Makes Us Special End -->

    <!-- What Makes Us Special Start -->
    <section id="howitworks" class="bg-white wide-tb-100 bg-wave">
      <div class="container pos-rel">
        <div class="row">
          <div class="img-business-man">
            <img src="assets/images/business-man.png" alt="">
          </div>
          <!-- Heading Main -->
          <div class="col-sm-12">
            <h1 class="heading-main wow fadeInDown" data-wow-duration="0" data-wow-delay="0s">
              <span>Our Goodness</span>
              Comment ça marche                 
            </h1>
          </div>
          <!-- Heading Main -->
          <div class="col-md-8 ml-auto why-choose wow fadeInRight" data-wow-duration="0" data-wow-delay="0.6s">
              <div class="row">
                
                @foreach ($works as $key => $work)
                @if($key == 2)
                    <!-- Spacer For Medium -->
                    <div class="w-100 spacer-60 d-none d-md-none d-lg-block d-sm-none"></div>
                    <!-- Spacer For Medium -->
                @endif
                     <!-- Icon Box 2 -->
                <div class="col-12 col-lg-6">              
                  <div class="icon-box-2">
                    <div class="media">
                        <div class="service-icon">
                            {{-- <i class="icofont-id"></i> --}}
                            <img src="{{ asset('uploads/works') }}/{{ $work->image }}" alt="">
                        </div>
                        <div class="service-inner-content media-body">
                            <h4 class="h4-md">{{ $work->title }}</h4>
                            <p>{{ $work->description }}</p>
                        </div>
                    </div>
                  </div>              
                </div>
                <!-- Icon Box -->
                @endforeach

            
              </div>

              <div class="col-sm-12 text-center">
                <div class="spacer-50">
                </div>
                <a href="{{ route('frontend.requestQuote') }}" class="btn-theme bg-navy-blue">Demande de devis <i class="icofont-rounded-right"></i></a>
                <div class="spacer-30">
                </div>
              </div>
          </div>
        </div>
        
      </div>
    </section>
    <!-- What Makes Us Special End -->


    <!-- Our Team Start -->
    <section class="wide-tb-100 pb-100 team-section-bottom pos-rel">
      <div class="container">          
        <!-- Heading Main -->
        <div class="col-sm-12">
          <h1 class="heading-main">
            <span>Face Behind Deem</span>
            Our Team
          </h1>
        </div>
        <!-- Heading Main -->

        <div class="row pb-4">
          <!-- Team Column One -->
           @foreach ($teams as $key => $team)
           <div class="col-sm-12 col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="
            @if($key == 0)
            0s
            @else 
            0.{{ $key * 4 }}s
            @endif
           ">
            <div class="team-section-two">
              <img src="{{ asset('uploads/teams') }}/{{ $team->image }}" alt="" class="rounded">
              <h4 class="h4-md txt-orange">{{ $team->name }}</h4>
              <h5 class="h5-md txt-ligt-gray">{{ $team->title }}</h5>
            </div>            
          </div>
           @endforeach
          <!-- Team Column One -->

        </div>
      </div>
    </section>
    <!-- Our Team End -->

    <!-- Free Quote Start -->
  {{--  <section class="bg-white wide-tb-100 mb-spacer-md">
      <div class="container">          
        <!-- Heading Main -->
        <div class="col-sm-12">
          <h1 class="heading-main">
            <span>Demande de  </span>
            devis 
          </h1>
        </div>
        <!-- Heading Main -->

         <div class="row">
            <!-- Right Text Start -->
            <div class="col-lg-4 wow fadeInRight" data-wow-duration="0" data-wow-delay="0.2s">
              <div class="align-self-stretch h-100 align-items-center d-flex bg-with-text">
                  Whether you require distribution or fulfillment, defined freight forwarding, or a complete supply chain solution, we are here for you.
              </div>
            </div>
            <!-- Right Text Start -->

            <!-- Spacer For Medium -->
            <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
            <!-- Spacer For Medium -->

            <div class="col-lg-8 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.2s">
              <!-- Free Quote From -->
              <form action="#" method="post" novalidate="novalidate" class="rounded-field gray-field">
                  <div class="form-row mb-4">
                    <div class="col">
                      <input type="text" name="name" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="col">
                      <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-row mb-4">
                    <div class="col">
                      <select title="Please choose a package" required="" name="package" class="form-control wide" aria-required="true" aria-invalid="false">
                          <option value="">Transport Type</option>
                          <option value="Type 1">Type 1</option>
                          <option value="Type 2">Type 2</option>
                          <option value="Type 3">Type 3</option>
                          <option value="Type 4">Type 4</option>
                      </select>
                    </div>
                    <div class="col">
                      <select title="Please choose a package" required="" name="package" class="form-control wide" aria-required="true" aria-invalid="false">
                          <option value="">Type of freight</option>
                          <option value="Type 1">Type 1</option>
                          <option value="Type 2">Type 2</option>
                          <option value="Type 3">Type 3</option>
                          <option value="Type 4">Type 4</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row mb-4">
                    <div class="col">
                      <textarea rows="7" placeholder="Message" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="form-row text-center">
                      <button type="submit" class="form-btn mx-auto btn-theme bg-orange">Demande de devis<i class="icofont-rounded-right"></i></button>
                  </div>
              </form>
              <!-- Free Quote From -->
            </div>
            
        </div>
      </div>
    </section>
    <!-- Free Quote End --> --}}

    <!-- Client Testimonials Start -->
    <section class="wide-tb-60 p-0">
      <div class="container wow fadeInUp" data-wow-duration="0" data-wow-delay="0.2s">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <div class="bg-scroll client-testimonials-bg pos-rel rounded">
                <div class="bg-overlay blue opacity-80"></div>
                <div class="owl-carousel owl-theme" id="client-testimonials-bg">

                  <!-- Client Testimonials Slider Item -->
                   @foreach ($testimonials as $testimonial)
                   <div class="item">
                    <div class="client-testimonial">
                      <div class="client-testimonial-icon rounded-circle bg-navy-blue mx-auto mb-4">
                          <img src="{{ asset('uploads/testimonials') }}/{{ $testimonial->image }}" alt="">
                      </div>
                      <div class="client-inner-content media-body">
                          <p>{{ $testimonial->description }}</p>
                          <footer class="blockquote-footer"><cite title="Source Title">{{ $testimonial->name }}</cite></footer>
                      </div>
                    </div>
                  </div>
                   @endforeach
                  <!-- Client Testimonials Slider Item -->


                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- Client Testimonials End -->

    <!-- Counter Start -->
    <section class="wide-tb-100 pb-0 mb-spacer-md">
      <div class="container">
        <div class="row d-flex align-items-center">
            <!-- Counter Col Start -->
            <div class="col col-12 col-lg-3 col-sm-6 wow pulse" data-wow-duration="0" data-wow-delay="0s">
              <div class="counter-style-1 light-bg">
                <p class="mb-1"><i class="icofont-google-map"></i></p>
                <span class="counter">{{ $counter->locations }}</span>
                <div>
                  Our Locations
                </div>
              </div>
            </div>
            <!-- Counter Col End -->

            <!-- Counter Col Start -->
            <div class="col col-12 col-lg-3 col-sm-6 wow pulse" data-wow-duration="0" data-wow-delay="0.3s">
              <div class="counter-style-1 light-bg">
                <p class="mb-1"><i class="icofont-globe"></i></p>                
                <span class="counter">{{ $counter->clients }}</span>
                  <span>+</span>
                <div>
                  Clients Worldwide
                </div>
              </div>
            </div>
            <!-- Counter Col End -->

            <!-- Spacer For Medium -->
            <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
            <!-- Spacer For Medium -->

            <!-- Counter Col Start -->
            <div class="col col-12 col-lg-3 col-sm-6 wow pulse" data-wow-duration="0" data-wow-delay="0.6s">
              <div class="counter-style-1 light-bg">
                <p class="mb-1"><i class="icofont-vehicle-delivery-van"></i></p>
                <span class="counter">{{ $counter->vehicles }}</span>
                <span>+</span>
                <div>
                  Owned Vehicles
                </div>
              </div>
            </div>
            <!-- Counter Col End -->

            <!-- Counter Col Start -->
            <div class="col col-12 col-lg-3 col-sm-6 wow pulse" data-wow-duration="0" data-wow-delay="0.9s">
              <div class="counter-style-1 light-bg">
                <p class="mb-1"><i class="icofont-umbrella-alt"></i></p>
                <span class="counter">{{ $counter->tons }}</span>
                <div>
                  Tonnes Transported
                </div>
              </div>
            </div>
            <!-- Counter Col End -->
        </div>
      </div>        
    </section>
    <!-- Counter End -->    

    <!-- Recent Posts Start -->
    <section class="wide-tb-100">
      <div class="container">
        <div class="row">
            <!-- Heading Main -->
            <div class="col-sm-12">
              <h1 class="heading-main">
                <span>COMPANY'S NEWS</span>
                Recent Posts
              </h1>
            </div>
            <!-- Heading Main -->

            <!-- Blog Items -->
              @foreach ($blogs as $key => $blog)
              <div class="col-sm-12 col-md-4 wow fadeInLeft" data-wow-duration="0" data-wow-delay="
                @if($key == 0)
                0.1s
                @else 
                0.{{ $key * 2 }}}s
                @endif
              ">
                <div class="blog-warp">
                  <img src="{{ asset('uploads/blogs') }}/{{ $blog->image }}" alt="" class="rounded">
                  <div class="meta-box"><a href="#">{{ $blog->getUser->name }}</a> <span>/</span>   {{ $blog->created_at->format('M d, Y') }}</div>
                  <h4 class="h4-md mb-3"><a href="#">{{ $blog->title }}</a></h4>
                  <p>{{ Str::limit($blog->description, 100) }}</p>
                </div>
            </div>
              @endforeach
            <!-- Blog Items -->


        </div>
      </div>
    </section>
    <!-- Recent Posts End -->

    <!-- Callout Start -->
    <section class="wide-tb-80 bg-scroll bg-img-6 pos-rel callout-style-1" style="background-image: url({{ asset('uploads/callouts') }}/{{ $callout->image }});">
      <div class="bg-overlay blue opacity-60"></div>
      <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12 mb-0 wow slideInUp" data-wow-duration="0" data-wow-delay="0.1s">
              <h4 class="h4-xl">{{ $callout->title }}</h4>
            </div>
            <div class="col wow slideInUp" data-wow-duration="0" data-wow-delay="0.2s">
              <div class="center-text">
                {{ $callout->description }}
              </div>
            </div>
            <div class="col-sm-auto wow slideInUp" data-wow-duration="0" data-wow-delay="0.3s">
              <a href="{{ route('frontend.contact') }}" class="btn btn-theme bg-white bordered">Get In Touch <i class="icofont-rounded-right"></i></a>
            </div>
        </div>
      </div>
    </section>
    <!-- Callout End -->


    <!-- Clients Start -->
    <section class="wide-tb-100">
      <div class="container">
        <div class="row">

            <div class="col-sm-12 wow slideInDown" data-wow-duration="0" data-wow-delay="0.1s">
              <div class="owl-carousel owl-theme" id="home-clients">

                <!-- Client Logo -->
                 @foreach ($clients as $client)
                 <div class="item bg-light-theme">
                  <img src="{{ asset('uploads/clients') }}/{{ $client->image }}" alt="">
                </div>
                 @endforeach
                <!-- Client Logo -->

              </div>
            </div>
        </div>
      </div>        
    </section>
    <!-- Clients End -->

    <!-- Contact Footer Start -->
    <section>
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-6 col-sm-12 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.1s">
            <h4 class="h4-md mb-4 txt-orange">Find us at the office</h4>
            <div class="contact-details standard row pos-rel d-inline-flex">
              <div class="col">
                <h4>France</h4>
                <p><i class="icofont-phone"></i> {{ $contact->g_number }}</p>
                <div class="text-nowrap"><i class="icofont-email"></i> <a href="mailto:{{ $contact->g_mail }}">{{ $contact->g_mail }}</a></div>
              </div>
              <div class="col">
                <h4>Belgium</h4>
                <p><i class="icofont-phone"></i> {{ $contact->s_number }}</p>
                <div class="text-nowrap"><i class="icofont-email"></i> <a href="mailto:{{ $contact->s_mail }}">{{ $contact->s_mail }}</a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12">
            <!-- Google Map Start -->
              <section class="map-bg map-shadow">
                
                <div id="map-holder" class="pos-rel">
                    <div id="map_extended">
                        <p>This will be replaced with the Google Map.</p>
                    </div>
                </div>
                <!-- Google Map Start -->
              </section>     
            
            <!-- Main Body Content Start -->
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Footer End -->

    </main>
@endsection

@section('js')

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script>

     // banner slider 
     $('#banner_slider').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 1800,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
     });
  </script>
@endsection

 

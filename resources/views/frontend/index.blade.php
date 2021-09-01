
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
  <style>
    .overlaay{
      position: absolute;
    top: 0;
    left: 14px;
    width: 91%;
    height: 87%;
    background: rgba(255,255,255, 0.6);
    opacity: 0;
    }

    .butt{
      position: absolute;
      top:40%;
      left: 25%;
      /* background: #5fc2ba;
      padding: 20px;
      color: #06163a; */
      font-weight: bold;
      opacity: 0;

    }

    .team-section-two:hover .overlaay{
        opacity: 1;

    }

    .blog-warp:hover .butt{
      opacity: 1;
      z-index: 99999;
    }
  </style>
@endsection

@section('content')
    <!-- Fullscreen Slider Start -->
    {{-- <div id="banner_slider">
      @foreach ($banners as $banner)
      <div class="banner_section" style="background-image: url('{{ asset('uploads/banners/') }}/{{ $banner->image }}')">
        <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="banner_content">
                  <div class="text-left" style="margin-bottom: 200px;">
                    <h1 data-aos-delay="1000" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700" style="color: #06163a; font-family : Cordoba; font-size: 34px; padding-bottom: 50px; text-transform: uppercase;">{{ $banner->title }}</h1>
                    <h1 data-aos-delay="1300" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700" style="color: #06163a; text-transform:uppercase; font-family : Cordoba; font-size: 34px">{{ $banner->description }}</h4>
                     <h1 data-aos-delay="1600" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700" style="color: #06163a;text-transform:uppercase; font-family : Cordoba; font-size: 32px; padding-top:50px;">
                      DEMANDEZ VOTRE DEVIS, SIMPLE, RAPIDE, GRATUIT ET SANS ENGAGEMENT
                    </h1> 
               
                  </div>
                  <div class="text-right">
                    <a href="{{ route('frontend.requestQuote') }}">
                      <div    class="tp-caption tp-resizeme btn-theme bg-navy-blue">
                        Demande de devis<i class="icofont-rounded-right" style="transition: none 0s ease 0s; text-align: inherit; line-height: 44px; border-width: 0px; margin: 0px; padding: 0px 0px 0px 5px; letter-spacing: 0px; font-weight: 400; font-size: 17px;"></i>
                      </div>
                     </a> 
                  </div>
               </div>
              </div>
            </div>
        </div>  
      </div>
      @endforeach
    </div> --}}
  <!-- Fullscreen Slider End -->
  <div class="slider bg-navy-blue">
    <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;"> 
      <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
      <div id="rev_slider_1078_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
        <ul>

          <!-- SLIDE  -->
          @foreach ($banners as $banner)
          <li data-index="rs-3045" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="{{ asset('uploads/banners/') }}/{{ $banner->image }}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> 
            <!-- MAIN IMAGE --> 
            <img src="{{ asset('uploads/banners/') }}/{{ $banner->image }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina> 
            <!-- LAYERS --> 
            
            <!-- LAYER NR. 1 -->
            <div class="tp-caption NotGeneric-Title tp-resizeme" 
                id="slide-3-layer-1" 
                data-x="left" data-hoffset="60" 
                data-y="center" data-voffset="-120" 
                data-width="['auto','auto','auto','auto']"
                data-height="['auto','auto','auto','auto']"
                data-transform_idle="o:1;"
                
                data-fontsize="['70','70','70','45']"
                
                data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                data-start="700" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on" 

                
                style="z-index: 1; white-space: nowrap; color: #06163a; font-family : Cordoba;"><span class="slider-small">{{ $banner->title }}</span> <br>
            </div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption NotGeneric-Title tp-resizeme" 
               id="slide-3-layer-2" 
                data-x="left" data-hoffset="60" 
                data-y="center" data-voffset="10" 
                data-width="['auto','auto','auto','auto']"
                data-height="['auto','auto','auto','auto']"
                data-transform_idle="o:1;"
                
                data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on" 

                
                style="z-index: 2; white-space: nowrap; font-size: 18px; line-height: 30px; color: #06163a; font-family : Cordoba; font-size: 32px; text-transform:uppercase">{{ $banner->description }} 
            </div>
            <!-- LAYER NR. 2 -->
            <div class="tp-caption NotGeneric-Title tp-resizeme" 
               id="slide-3-layer-2" 
                data-x="left" data-hoffset="60" 
                data-y="center" data-voffset="10" 
                data-width="['auto','auto','auto','auto']"
                data-height="['auto','auto','auto','auto']"
                data-transform_idle="o:1;"
                
                data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                data-start="1400" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on" 

                
                style="z-index: 2; white-space: nowrap; font-size: 18px; line-height: 30px; color: #06163a; font-family : Cordoba; padding:300px 0 200px 0; font-size: 32px;"> DEMANDEZ VOTRE DEVIS, SIMPLE, RAPIDE, GRATUIT ET SANS ENGAGEMENT
            </div>
            
            <!-- LAYER NR. 3 -->
            <a href="{{ route('frontend.requestQuote') }}">
            <div class="tp-caption tp-resizeme btn-theme bg-navy-blue" 
                id="slide-3-layer-3" 
                data-x="left" data-hoffset="60" 
                data-y="center" data-voffset="100" 
                data-width="['auto']"
                data-height="['auto']"
                data-transform_idle="o:1;"
                data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgba(41, 46, 49, 0);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;" 
                data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                data-start="2100" 
                data-splitin="none" 
                data-splitout="none" 
                data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                data-responsive_offset="on" 
                data-responsive="off"
                
                style="z-index: 3; white-space: nowrap; font-weight: 800;background-color:rgba(41, 46, 49, 1.00);border-color:rgba(255, 255, 255, 0);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box; margin-top:100px;">READ MORE
            </div>
            </a>
          </li>
          @endforeach
        </ul>
        <div class="tp-bannertimer tp-bottom" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
      </div>
    </div>
  </div>
  <!-- Fullscreen Slider End -->

  <!-- Main Body Content Start -->
  <main id="body-content" style="overflow-y: inherit;">

    <!-- What Makes Us Special Start -->
    <section class="bg-light-theme wide-tb-100 pb-0" id="comment">
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
                <i style="color: #5fc2ba;font-size:3rem !important" class="icofont-responsive"></i>
                @elseif($key == 1)
                <i style="color: #5fc2ba;font-size:3rem !important" class="icofont-tick-boxed"></i>
                @elseif($key == 2)
                <i style="color: #5fc2ba;font-size:3rem !important" class="icofont-license"></i>
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
            <a href="{{ route('frontend.requestQuote') }}" class="btn-theme bg-navy-blue">DEMANDEZ VOTRE DEVIS<i class="icofont-rounded-right"></i></a>
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
             
              POURQUOI CLICMOVE                
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
                            @if($key == 0)
                            <i style="" class="icofont-safety"></i>
                            @elseif($key == 1)
                            <i style="" class="icofont-wallet"></i>
                            @elseif($key == 2)
                            <i style="" class="icofont-search-document"></i>
                            @elseif($key == 3)
                            <i style="" class="icofont-headphone-alt-2"></i>
                            @endif
                            {{-- <img src="{{ asset('uploads/works') }}/{{ $work->image }}" alt=""> --}}
                        </div>
                        <div class="service-inner-content media-body">
                            <h4 class="h4-md">{{ $work->title }}</h4>
                            <p style="color : #06163a">{{ $work->description }}</p>
                        </div>
                    </div>
                  </div>              
                </div>
                <!-- Icon Box -->
                @endforeach

            
              </div>

              {{-- <div class="col-sm-12 text-center">
                <div class="spacer-50">
                </div>
                <a href="{{ route('frontend.requestQuote') }}" class="btn-theme bg-navy-blue">Demande de devis <i class="icofont-rounded-right"></i></a>
                <div class="spacer-30">
                </div>
              </div> --}}
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
            CLICMOVE SERVICES
          </h1>
        </div>
        <!-- Heading Main -->

        <div class="row pb-2">
          <!-- Team Column One -->
           @foreach ($teams as $key => $team)
           <div class="col-sm-12 col-md-4 wow fadeInUp" data-wow-duration="0" data-wow-delay="
            @if($key == 0)
            0s
            @else 
            0.{{ $key * 4 }}s
            @endif
           ">
            {{-- <div class="team-section-two" style="position: relative; margin-bottom:30px;">
              <img src="{{ asset('uploads/teams') }}/{{ $team->image }}" alt="" class="rounded">
               <div class="butt btn-theme bg-navy-blue">Obtenir mon devis</div> 
              <div class="overlaay"></div>
              <h4 class="h4-md txt-orange" style="color: #06163a">{{ $team->name }}</h4>
            </div>             --}}
            <div class="blog-warp" style="margin-bottom:50px;">
              <img src="{{ asset('uploads/teams') }}/{{ $team->image }}" alt="" class="rounded">
              {{--  <div class="meta-box"><a href="#">{{ $blog->getUser->name }}</a> <span>/</span>   {{ $blog->created_at->format('M d, Y') }}</div>  --}}
              {{-- <h4 class="h4-md mb-3"><a href="#">{{ strtoupper($blog->title) }}</a></h4> --}}
              <div class="butt btn-theme bg-navy-blue">Obtenir mon devis</div>
              <h4 class="h4-md txt-orange" style="color: #06163a">{{ $team->name }}</h4>
              {{-- <p>{{ Str::limit($blog->description, 100) }}</p> --}}
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
                <!-- Heading Main -->
                <div class="col-sm-12">
                  <h1 class="heading-main">
                    EXPÉRIENCES RÉCENTES
                  </h1>
                </div>
                <!-- Heading Main -->
        
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <div class="bg-scroll client-testimonials-bg pos-rel rounded" style="background-image: url({{ asset('assets/images/bg_2.jpg') }}) !important;">
                <div class="bg-overlay blue opacity-80"></div>
                <div class="owl-carousel owl-theme" id="client-testimonials-bg">

                  <!-- Client Testimonials Slider Item -->
                   @foreach ($testimonials as $testimonial)
                   <div class="item">
                    <div class="client-testimonial">
                      {{-- <div class="client-testimonial-icon rounded-circle bg-navy-blue mx-auto mb-4">
                          {{-- <img src="{{ asset('uploads/avatar.jpg') }}" alt=""> --}}
                         
                      {{-- </div>  --}}
                      <i style="font-size: 3rem !important;" class="icofont-quote-left"></i>
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
              <div class="counter-style-1 light-bg" style="border-bottom : 4px solid #5fc2ba !important">
                <p class="mb-1"><i style="color: #5fc2ba" class="icofont-google-map"></i></p>
                {{-- <span class="counter">{{ $counter->locations }}</span> --}}
                <div style="text-align: center; margin-left : 20px;text-transform : uppercase; font-size: 16px;" >
                  PROFITEZ DES LIGNES RÉGULIÈRES ET RETOURS À VIDE

                </div>
              </div>
            </div>
            <!-- Counter Col End -->

            <!-- Counter Col Start -->
            <div class="col col-12 col-lg-3 col-sm-6 wow pulse" data-wow-duration="0" data-wow-delay="0.3s">
              <div class="counter-style-1 light-bg" style="border-bottom : 4px solid #5fc2ba !important">
                <p class="mb-1"><i style="color: #5fc2ba" class="icofont-globe"></i></p>                
                {{-- <span class="counter">{{ $counter->clients }}</span>
                  <span>+</span> --}}
                <div style="text-align: center; margin-left : 20px;text-transform : uppercase; font-size: 16px;">
                  Pour un déménagement local, national ou international
                </div>
              </div>
            </div>
            <!-- Counter Col End -->

            <!-- Spacer For Medium -->
            <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
            <!-- Spacer For Medium -->

            <!-- Counter Col Start -->
            <div class="col col-12 col-lg-3 col-sm-6 wow pulse" data-wow-duration="0" data-wow-delay="0.6s">
              <div class="counter-style-1 light-bg" style="border-bottom : 4px solid #5fc2ba !important">
                <p class="mb-1"><i class="icofont-vehicle-delivery-van" style="color: #5fc2ba"></i></p>
                {{-- <span class="counter">{{ $counter->vehicles }}</span>
                <span>+</span> --}}
                <div style="text-align: center; margin-left : 20px;text-transform : uppercase; font-size: 16px;">
                  Des milliers de déménageurs <br> disponibles
                </div>
              </div>
            </div>
            <!-- Counter Col End -->

            <!-- Counter Col Start -->
            <div class="col col-12 col-lg-3 col-sm-6 wow pulse" data-wow-duration="0" data-wow-delay="0.9s">
              <div class="counter-style-1 light-bg" style="border-bottom : 4px solid #5fc2ba !important">
                <p class="mb-1"><i style="color: #5fc2ba" class="icofont-umbrella-alt"></i></p>
                {{-- <span class="counter">{{ $counter->tons }}</span> --}}
                <div style="text-align: center; margin-left : 20px;text-transform : uppercase; font-size: 16px;">
                  Des déménageurs vérifiés et <br> agrées
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
                {{-- <span>COMPANY'S NEWS</span> --}}
                CLICMOVE NEWS
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
                  {{--  <div class="meta-box"><a href="#">{{ $blog->getUser->name }}</a> <span>/</span>   {{ $blog->created_at->format('M d, Y') }}</div>  --}}
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
              {{-- <h4 class="h4-xl">{{ $callout->title }}</h4>  --}}
              <img src="https://i.postimg.cc/v8KHm8DB/1-Transparent-Logo-WHITE.png" alt="">
            </div>
            <div class="col wow slideInUp" data-wow-duration="0" data-wow-delay="0.2s">
              <h4 style="color:white;font-size : 25px; margin-bottom:20px;">CLICMOVE POUR LES DÉMÉNAGEURS</h4>
              <div class="left-text" style="font-size : 20px;">
                {{-- {{ $callout->description }} --}}
                
                <p>
                  Vous êtes déménageur-transporteur professionnel, CLICMOVE est un espace d’échange qui vous facilite la mise en relation avec une nouvelle clientèle pour augmenter votre chiffre d’affaire  : <br>
                </p>
                <i class="icofont-tick-mark"></i>	Inscrivez-vous gratuitement et sans engagement <br>
                <i class="icofont-tick-mark"></i>	Aucun frais d’abonnement <br>
                <i class="icofont-tick-mark"></i>	Accès immédiat et illimité aux offres 24h/24 et 7jours/7 <br>
                <i class="icofont-tick-mark"></i>	Augmenter votre visibilité, gagnez du temps et trouvez de nouveaux clients <br>
                <i class="icofont-tick-mark"></i>	Discuter en direct et en toute transparence avec les clients par système de messagerie <br>
                <i class="icofont-tick-mark"></i>	Aucune concurrence déloyale, tous les déménageurs-transporteurs sont agrées <br>
                <i class="icofont-tick-mark"></i>	Déposez gratuitement vos devis <br>
                <i class="icofont-tick-mark"></i>	Étendez votre notoriété, gérez votre profil, mettez en avant vos anciennes réalisations et partagez l’expérience de vos clients <br>
                <i class="icofont-tick-mark"></i>	Étendez votre zone géographique d’intervention <br>
              </div>
            </div>
            <div class="col-sm-auto wow slideInUp" data-wow-duration="0" data-wow-delay="0.3s">
              <a href="{{ url('/inscription/demenageur') }}" class="btn btn-theme bg-white bordered">Inscription déménageur <i class="icofont-rounded-right"></i></a>
            </div>
        </div>
      </div>
    </section>
    <!-- Callout End -->


    <!-- Clients Start -->
    {{-- <section class="wide-tb-100">
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
    </section> --}}
    <!-- Clients End -->

    <!-- Contact Footer Start -->
    {{-- <section>
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
    </section> --}}
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

 

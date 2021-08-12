
<!doctype html>
<html lang="en">
  <head>
    <!-- xxx Basics xxx -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- xxx Change With Your Information xxx -->    
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
    <title>@yield('title')</title>
    <meta name="author" content="Digital Tech">     
    <meta name="description" content="@yield('meta-description')">
    <meta name="keywords" content="@yield('meta-keywords')">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
      .nav-link {
        color: #06163a !important; 
        font-weight:bold !important;
      }
    </style>
    <!-- xxx Favicon xxx -->    
    
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/settings') }}/{{ settings()->favicon }}">

    <!-- xxx Favicon xxx -->    
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/settings') }}/{{ settings()->favicon }}">

    <!-- Main Style CSSS -->
    <link href="{{ asset('assets/css/theme-plugins.min.css') }}" rel="stylesheet">
    <!-- Main Theme CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Responsive Theme CSS -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/navigation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/fonts/font-awesome/css/font-awesome.css') }}">
       <!-- map styles -->
       
    <link rel="stylesheet" href="{{ asset('assets/assets/css/main.min.css') }}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->		
    @yield('css')
	</head>
<body>

  <!-- Page loader Start -->
  <div id="pageloader">   
    <div class="loader-item">
      <div class="loader">
        <div class="spin"></div>
        <div class="bounce"></div>
      </div>
    </div>
  </div>
  <!-- Page loader End -->

  <header class="wow fadeInDown">
    <div class="top-bar d-flex align-items-center text-md-left">
      <div class="container">
        <div class="row align-items-center">
          <div class="col" style="color: #06163a; font-weight:bold">
            {{-- <i class="icofont-google-map"></i>  254 Street Avenue, Los Angeles, LA 2415 US --}}
          </div>
          <div class="col-md-auto" style="padding-right: 7px !important">

            <span style="color: #06163a; font-weight:bold" class="mr-3"><i class="icofont-ui-touch-phone"></i> +00 41 895 785 6985</span>

            @auth
            <span class="mr-3"><i class="icofont-ui-user mr-2"></i> 
                <a style="color: #06163a; font-weight:bold;" href="{{ route('dashboard') }}">My Account</a>
                @if(Auth::user()->role == 'user')
                <a style="color: #06163a; font-weight:bold;" href="{{ route('my.announcements') }}">My Announcements</a>
                @endif
                @endauth
                @guest
                <a style="color: #06163a; font-weight: bold;" href="{{ route('register') }}">S'inscrire</a>
              <a style="color: #06163a; font-weight:bold;" href="{{ route('login') }}">Se connector</a> 
              @endguest
            </span>
            <!-- Topbar Language Dropdown Start -->
            <div class="dropdown d-inline-flex lang-toggle">
              <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-hover="dropdown" data-animations="slideInUp slideInUp slideInUp slideInUp">
                <img src="assets/images/us.svg" alt="" class="dropdown-item-icon"> 
                <span class="d-inline-block d-lg-none">US</span>
                <span class="d-none d-lg-inline-block">United States</span> <i class="icofont-rounded-down"></i>
              </a> -->
              <!-- <div class="dropdown-menu dropdownhover-bottom dropdown-menu-right" role="menu">
                <a class="dropdown-item active" href="#">English</a>
                <a class="dropdown-item" href="#">Deutsch</a>
                <a class="dropdown-item" href="#">Español&lrm;</a>
              </div> -->
            </div>            
            <!-- Topbar Language Dropdown End -->          
          </div>
        </div>
      </div>
    </div>
    
    <!-- Main Navigation Start -->
    <nav class="header-fullpage navbar navbar-expand-lg">
      <div class="container">
        <div class="d-flex align-items-center w-100 col p-0">
          <a class="navbar-brand rounded-bottom light-bg" href="{{ route('frontend.index') }}">
            <img src="{{ asset('uploads/settings') }}/{{ settings()->logo }}" alt="">
          </a> 
        </div>
        <!-- Topbar Request Quote Start -->
        <div class="d-inline-flex request-btn order-lg-last col p-0"> 
          <a class="btn-theme icon-left bg-navy-blue no-shadow align-self-center" href="{{ route('frontend.requestQuote') }}"><i class="icofont-list"></i><span class="d-none d-sm-inline-block"> Demande de devis</span></a>
          <!-- Toggle Button Start -->
          <button class="navbar-toggler x collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
          <!-- Toggle Button End -->  
        </div>
        <!-- Topbar Request Quote End -->

        <div class="collapse navbar-collapse" id="navbarCollapse" data-hover="dropdown" data-animations="slideInUp slideInUp slideInUp slideInUp">
          <ul class="navbar-nav ml-auto">
             
                  <li class="nav-item">
                    <a class="nav-link" aria-haspopup="true" aria-expanded="false" href="#howitworks">Comment ça marche</a>
                  </li>
              </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-haspopup="true" aria-expanded="false" href="{{ route('frontend.announcements') }}">Demande en cours</a>
                  </li>
                @guest
                <li class="nav-item">
                  <a class="nav-link" aria-haspopup="true" aria-expanded="false" href="{{ route('frontend.moverReg') }}">Inscription déménageur</a>
                </li>
                @endguest
              <li class="nav-item dropdown">
                <a class="nav-link" href="{{ route('frontend.contact') }}" >Contact</a>
               
              </li>
          </ul>
          <!-- Main Navigation End -->
        </div>
      </div>
    </nav>
    <!-- Main Navigation End -->
  </header>
 
   @if(session('success'))
   <div class="alert alert-success">
     {{ session('success') }}
   </div>
   @endif

  @yield('content')

      <!-- Emaild Subscribe Start -->
      <section class="wide-tb-70 bg-light-gray pb-5 footer-subscribe">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 d-flex col-md-12 col-lg-6">
              <div class="d- align-items-center d-sm-inline-flex  w-100">
                <div class="head">
                  <span class="d-block">SUBSCRIBE For</span> NEWSLETTER
                </div>
                <form class="flex-nowrap col ml-auto">
                  <input type="text" class="form-control" placeholder="Enter order number">
                  <button type="submit" class="btn btn-theme bg-navy-blue">Check Now <i class="icofont-envelope"></i></button>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </section>
      <!-- Emaild Subscribe End -->
  
      
  
    <!-- Main Footer Start -->

  <footer class="wide-tb-70 bg-light-gray pb-0">
    <div class="container">
      <div class="row">

        <!-- Column First -->
        <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0s">
          <div class="logo-footer">
            <img src="{{ asset('uploads/settings') }}/{{ settings()->logo }}" alt="">
          </div>
          <p>{{ settings()->description }}</p>
          <p>{{ settings()->description_one }}</p>

          <h3 class="footer-heading">We're Social</h3>
          <div class="social-icons">
              <a href="{{ settings()->facebook }}"><i class="icofont-facebook"></i></a> 
              <a href="{{ settings()->twitter }}"><i class="icofont-twitter"></i></a> 
              <a href="{{ settings()->whatsapp }}"><i class="icofont-whatsapp"></i></a> 
              <a href="{{ settings()->google }}"><i class="icofont-google-plus"></i></a> 
            </div>
        </div>
        <!-- Column First -->

        <!-- Column Second -->
        <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.2s">
          <h3 class="footer-heading">Recent Post</h3>
          <div class="blog-list-footer">
            <ul class="list-unstyled">
              @foreach (blogs() as $blog)
              <li>
                <div class="media">
                  <div class="post-thumb">
                     <img src="{{ asset('uploads/blogs') }}/{{ $blog->image }}" alt="" class="rounded-circle">
                  </div>
                  <div class="media-body post-text">
                      <h5 class="mb-3 h5-md"><a href="#">{{ $blog->title }}</a></h5>
                      <p>{{ Str::limit($blog->description, 50) }}</p>

                      <div class="comment-box">
                        <span><i class="icofont-ui-calendar"></i>  {{ $blog->created_at->format('d.m.Y') }}</span>
                        {{-- <span><a href="#"><i class="icofont-speech-comments"></i>  25</a></span> --}}
                      </div>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
            
          </div>
        </div>
        <!-- Column Second -->

        <!-- Column Third -->
        <div class="col-lg-4 col-md-12 wow fadeInLeft" data-wow-duration="0" data-wow-delay="0.4s">
          <h3 class="footer-heading">Our Photostream</h3>
          <ul id="basicuse" class="photo-thumbs"></ul>
        </div>
        <!-- Column Third -->
        
      </div>
    </div>  

    <div class="copyright-wrap bg-navy-blue wide-tb-30">
      <div class="container">
        <div class="row text-md-left text-center">
            <div class="col-sm-12 col-md-6 copyright-links">  
              <a href="#">Privacy Policy</a>   <span>|</span>   <a href="#">Contact</a>   <span>|</span>   <a href="#">Faq's</a>
            </div>
            <div class="col-sm-12 col-md-6 text-md-right text-center">
                  Designed by <a href="#" rel="nofollow">Farahnaz Ahmed</a> © <span id="year"></span> All Rights Reserved
            </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Main Footer End -->

  <!-- Search Popup Start -->
  <div class="overlay overlay-hugeinc">    
    <form class="form-inline mt-2 mt-md-0">
      <div class="form-inner">
        <div class="form-inner-div d-inline-flex align-items-center no-gutters">
          <div class="col-md-1">
            <i class="icofont-search"></i>
          </div> 
          <div class="col-10">
            <input class="form-control w-100 p-0" type="text" placeholder="Search" aria-label="Search">
          </div>
          <div class="col-md-1">
            <a href="#" class="overlay-close link-oragne"><i class="icofont-close-line"></i></a>
          </div>
        </div>
      </div>
    </form>
  </div>
  <!-- Search Popup End -->

  <!-- Request Modal -->
  <div class="modal fade" id=request_popup tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered request_popup" role="document">
      <div class="modal-content">
        <div class="modal-body p-0">
          <!-- Contact Details Start -->
          <section class="pos-rel bg-light-gray">
            <div class="container-fluid p-0">
              <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                  <i class="icofont-close-line"></i>
                </a>
              <div class="d-lg-flex justify-content-end no-gutters mb-spacer-md" style="box-shadow: 0px 18px 76px 0px rgba(0, 0, 0, 0.06);">
                <div class="col bg-fixed bg-img-7 request_pag_img">
                    &nbsp;
                </div>


                <div class="col-md-7 col-12">
                    <div class="px-3 m-5">
                      <h2 class="h2-xl mb-4 fw-6">Need more Info?</h2>                       
                      <form action="#" method="post" novalidate="novalidate" class="rounded-field">
                          
                          <div class="form-row mb-4">
                            <div class="col">
                              <select title="Please choose a package" required="" name="package" class="form-control wide" aria-required="true" aria-invalid="false">
                                  <option value="">Freight Type</option>
                                  <option value="Type 1">Type 1</option>
                                  <option value="Type 2">Type 2</option>
                                  <option value="Type 3">Type 3</option>
                                  <option value="Type 4">Type 4</option>
                              </select>
                            </div>
                            <div class="col">
                              <select title="Please choose a package" required="" name="package" class="form-control wide" aria-required="true" aria-invalid="false">
                                  <option value="">Incoterms</option>
                                  <option value="Type 1">Type 1</option>
                                  <option value="Type 2">Type 2</option>
                                  <option value="Type 3">Type 3</option>
                                  <option value="Type 4">Type 4</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-row mb-4">
                            <div class="col">
                              <input type="text" name="name" class="form-control" placeholder="City of departure">
                            </div>
                            <div class="col">
                              <input type="text" name="email" class="form-control" placeholder="Delivery city">
                            </div>
                          </div>
                          <div class="form-row mb-4">
                            <div class="col">
                              <input type="text" name="name" class="form-control" placeholder="Total gross weight (KG)">
                            </div>
                            <div class="col">
                              <input type="text" name="email" class="form-control" placeholder="Dimension">
                            </div>
                          </div>

                          <div class="form-row">
                            <div class="col">
                              <div class="center-head"><span class="bg-light-gray txt-orange">Your Personal Details</span></div>
                            </div>
                          </div>
                          <div class="form-row mb-4">
                            <div class="col">
                              <input type="text" name="name" class="form-control mb-3" placeholder="Your Name">
                              <input type="text" name="name" class="form-control mb-3" placeholder="Email">
                              <input type="text" name="name" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="col">
                              <textarea rows="7" placeholder="Message" class="form-control"></textarea>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col pt-3">
                              <button type="submit" class="form-btn btn-theme bg-orange">Send Message <i class="icofont-rounded-right"></i></button>
                            </div>
                          </div>
                      </form>        
                    </div>  
                </div>
              </div>
            </div>        
          </section>
          <!-- Contact Details End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Request Modal -->

  <!-- Back To Top Start -->
  <a id="mkdf-back-to-top" href="#" class="off"><i class="icofont-rounded-up"></i></a>
  <!-- Back To Top End -->

  <!-- Jquery Library JS -->
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/theme-plugins.min.js') }}"></script>    
  <script src="{{ asset('assets/twitter/jquery.tweet.js') }}"></script>

  <!-- JQuery Map Plugin -->
  <script
      type="text/javascript"
      src="https://maps.google.com/maps/api/js?key=AIzaSyCCYYbVzj3y4aUpnJCDZ756CrHJXVs93U4&sensor=false"
    ></script>
  
  <script type="text/javascript" src="{{ asset('assets/js/jquery.gmap.min.js') }}"></script>    
  

  <!-- REVOLUTION JS FILES -->
  <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
  <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

  <!-- Theme Custom FIle -->
  <script src="{{ asset('assets/js/site-custom.js') }}"></script> 
  @yield('js')
  <script type="text/javascript">
    var tpj=jQuery;
    
    var revapi1078;
    tpj(document).ready(function() {
      if(tpj("#rev_slider_1078_1").revolution == undefined){
        revslider_showDoubleJqueryError("#rev_slider_1078_1");
      }else{
        revapi1078 = tpj("#rev_slider_1078_1").show().revolution({
          sliderType:"standard",
jsFileLocation:"revolution/js/",
          sliderLayout:"fullscreen",
          dottedOverlay:"none",
          delay:9000,
          navigation: {
            keyboardNavigation:"off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation:"off",
            mouseScrollReverse:"default",
            onHoverStop:"off",
            touch:{
              touchenabled:"on",
              swipe_threshold: 75,
              swipe_min_touches: 1,
              swipe_direction: "horizontal",
              drag_block_vertical: false
            }
            ,
            arrows: {
              style:"metis",
              enable:true,
              hide_onmobile:true,
              hide_under:600,
              hide_onleave:true,
              hide_delay:200,
              hide_delay_mobile:1200,
              //tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
              left: {
                h_align:"left",
                v_align:"center",
                h_offset:30,
                v_offset:0
              },
              right: {
                h_align:"right",
                v_align:"center",
                h_offset:30,
                v_offset:0
              }
            }
            ,
            bullets: {
              style: 'hades',
              tmp: '<span class="tp-bullet-image"></span>',
              enable:false,
              hide_onmobile:true,
              hide_under:600,
              //style:"metis",
              hide_onleave:true,
              hide_delay:200,
              hide_delay_mobile:1200,
              direction:"horizontal",
              h_align:"center",
              v_align:"bottom",
              h_offset:0,
              v_offset:30,
              space:5,
            }
          },
          viewPort: {
            enable:true,
            outof:"pause",
            visible_area:"80%",
            presize:false
          },
          responsiveLevels:[1240,1024,778,480],
          visibilityLevels:[1240,1024,778,480],
          gridwidth:[1240,1024,778,480],
          gridheight:[600,600,500,400],
          lazyType:"none",
          parallax: {
            type:"mouse",
            origo:"slidercenter",
            speed:2000,
            levels:[2,3,4,5,6,7,12,16,10,50,47,48,49,50,51,55],
            type:"mouse",
          },
          shadow:0,
          spinner: 'spinner2',
          stopLoop:"off",
          stopAfterLoops:-1,
          stopAtSlide:-1,
          shuffle:"off",
          autoHeight:"off",
          hideThumbsOnMobile:"off",
          hideSliderAtLimit:0,
          hideCaptionAtLimit:0,
          hideAllCaptionAtLilmit:0,
          debugMode:false,
          fallbacks: {
            simplifyAll:"off",
            nextSlideOnWindowFocus:"off",
            disableFocusListener:false,
          }
        });
      }
    }); /*ready*/
  </script> 
  <script>
    document.getElementById("year").innerHTML = new Date().getFullYear();
</script>
  </body>
</html>
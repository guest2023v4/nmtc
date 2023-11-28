<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="title" content="NMTC">
  <meta name="description" content="NMTC or National Microsoft Technologies Camp, is a national Event organized in collaboration between the professional community of Microsoft and all the Microsoft clubs in Tunisia.">
  <meta name="keywords" content="nmtc, NMTC, Event, Tunisia, WEB 3, technology, national microsoft Technologies camp">
  <meta name="language" content="en">
  <link rel="shortcut icon" href="{{ asset('assets2/images/nmtc/favicon.png')}}" type="image/x-icon">
  <!-- link -->
  <link rel="stylesheet" href="{{ asset('assets2/css/bundle.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets2/css/fonts.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets2/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets2/css/templates.css')}}">

  <!-- 404's css files -->

  <!-- about's css files -->
  <link rel="stylesheet" href="{{ asset('assets2/css/pages/about.css')}}">
  <link rel="stylesheet" href="{{ asset('assets2/css/pages/game-servers.css')}}">

  <!-- title -->
  <title>NMTC V1 V2 | NMTC</title>
</head>

<body class="position-relative about-page dark-theme" id="about-page"><!-- Preloader -->
  <div class="preloader" id="preloader">
    <div class="content d-flex align-items-center justify-content-center">
      <div class="spinner"></div>
    </div>
  </div>
  <nav class="theme-navbar" id="theme-navbar">
    <!-- notices-bar -->

    <div class="container-fluid">
      <!-- nav-top -->
      <div class="nav-top d-flex align-items-center">
        <!-- menu-icon -->
        <div class="menu-icon" id="open-links-btn">
          <img src="{{ asset('assets2/images/templates/navbar/hamburger.png')}}" class="menu-icon img-fluid" alt="NMTC">
        </div>
        <!-- brand -->
        <a href="./index.html" class="brand d-flex align-items-center">
          <img src="{{ asset('assets2/images/nmtc/logo.png')}}" class="dt-img img-fluid" alt="NMTC">
        </a>
        <!-- options -->
        <div class="options d-md-flex d-none align-items-center justify-content-end ml-auto">
          <!-- c-link -->

          <a href="/" class="c-link">

            <span class="text">Home</span>
          </a>
          <!-- c-link -->
          <a href="/nmtc" class="c-link">
            <span class="text">NMTC V1 V2</span>
          </a>
          <a href="/contact" class="c-link">
            <span class="text">Contact</span>
          </a>
          <!-- buttons -->
          @if (Route::has('login'))
       
          @auth
              {{-- <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a> --}}

              @if ( Auth::user()->role == 1)
                  <a href="{{ route('admin.dashboard') }}" class="btn btn-fill-primary btn-sm btn-rounded shadow-off text-uppercase mr--sm">Home</a>
              @endif

              @if ( Auth::user()->role == 2)
              <a href="{{ route('user.dashboard') }}" class="btn btn-fill-primary btn-sm btn-rounded shadow-off text-uppercase mr--sm">Home</a>
                                          
              @endif
              @if ( Auth::user()->role == 3)
              <a href="{{ route('organizer.dashboard') }}" class="btn btn-fill-primary btn-sm btn-rounded shadow-off text-uppercase mr--sm">Home</a>
                                          
              @endif
          @else
          @if (Route::has('register'))
          <a href="{{ route('register') }}" class="btn btn-fill-primary btn-sm btn-rounded shadow-off text-uppercase mr--sm">Register</a>
             
              @endif
              <a href="{{ route('login') }}" class="btn btn-outline-dark btn-sm btn-rounded shadow-off text-uppercase">Login</a>

          @endauth
      
  @endif
          <!-- lang -->
         
        </div>
        <!-- second-options -->
        <div class="second-options d-md-none d-flex align-content-center justify-content-end ml-auto">
          <!-- o-link -->

          <!-- o-link -->

          <!-- o-link -->

        </div>
      </div>
      <!-- nav-bottom -->
      <div class="nav-bottom d-flex align-items-center justify-content-between">
        <!-- info -->
        <div class="info d-flex align-items-center">
          <!-- item -->
          <a href="tel:25556633" class="item">
            <img src="{{ asset('assets2/images/icons/fill-font-icons/fi-sr-phone-call.svg')}}" class="img-fluid" alt="Icon">
            <span class="text">+216 26 632 727</span>
          </a>
        </div>
        <!-- links -->
        <div class="links d-xl-flex align-items-center ml-auto" id="theme-navbar-links">
          <!-- close-links-btn -->
          <div class="close-links-btn" id="close-links-btn">
            <img src="{{ asset('assets2/images/templates/navbar/close.png')}}" class="img-fluid" alt="Close">
          </div>
          <!-- link -->
          <div class="link link-vis">
            <a href="/">Home</a>
          </div>
          <div class="link active">
            <a href="/nmtc">NMTC V1 V2</a>
          </div>
          <div class="link link-vis">
            <a href="/contact">Contact</a>
          </div>
          @if (Route::has('login'))
       
          @auth
              {{-- <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a> --}}

              @if ( Auth::user()->role == 1)
                  <a href="{{ route('admin.dashboard') }}" class="btn btn-fill-primary btn-sm btn-rounded shadow-off text-uppercase mr--sm link-vis">Home</a>
              @endif

              @if ( Auth::user()->role == 2)
              <a href="{{ route('user.dashboard') }}" class="btn btn-fill-primary btn-sm btn-rounded shadow-off text-uppercase mr--sm link-vis">Home</a>
                                          
              @endif
              @if ( Auth::user()->role == 3)
              <a href="{{ route('organizer.dashboard') }}" class="btn btn-fill-primary btn-sm btn-rounded shadow-off text-uppercase mr--sm link-vis">Home</a>
                                          
              @endif
          @else
          @if (Route::has('register'))
          <a href="{{ route('register') }}" class="btn btn-fill-primary btn-sm btn-rounded shadow-off text-uppercase mr--sm link-vis">Register</a>
             
              @endif
              <a href="{{ route('login') }}" class="btn btn-outline-dark btn-sm btn-rounded shadow-off text-uppercase link-vis">Login</a>

          @endauth
      
  @endif

          


          <!-- indicator -->
          <span class="indicator"></span>
        </div>
        <!-- side-box-btn -->

      </div>
      <!-- side-box -->

    </div>
  </nav>

  <!-- Section I -->
  <div class="se-i">
    <div class="container position-relative">
      <!-- se-head -->
      <div class="se-head">
        <h3 class="se-title-1">About NMTC</h3>
        <h4 class="se-title-2">Paving the way for a brighter, more innovative tomorrow.</h4>
      </div>
      <!-- content -->
      <div class="content align-content-center align-items-center">
        <!-- media -->

        <div class="col-lg-12 pr-xl-3 order-lg-1 order-2">

          <p class="about-nmtc text-center mb-2">We're all working TOGETHER , That's the SECRET ❗</p>
          </p>
          <p class="about-nmtc text-center mb-2"> This event is more than just a gathering of like-minded individuals,
            it's an opportunity to be part of something bigger. When we first launched this event, we had a vision to
            create a platform for the brightest minds in technology to come together and share their knowledge, ideas,
            and insights. Our goal is to provide an environment where attendees can be inspired, challenged, and
            motivated to push the boundaries of what is possible. And that is exactly what we have done.<br>
          </p>
          <p class="about-nmtc text-center mb-2">With an impressive lineup of keynote speakers, thought-provoking panel
            discussions, and a competitive hackathon, this event is designed to spark new ideas and ignite the passion
            of all who attend. Whether you are a seasoned tech professional or just starting your journey in the
            industry, you will find something of value at this event.<br>
          </p>
          <p class="about-nmtc text-center mb-2"> This is your chance to explore the latest trends and developments in
            technology, learn from experts in the field, and connect with like-minded individuals from Tunisia.
            This is an opportunity you don't want to miss, don't be a captive of the environment where you first find
            yourself, but be a leader and join us in Tunisia, to discover the future of technology and pave the way for
            a brighter, more innovative tomorrow.</p>
        </div>

      </div>
      <!-- random-icons -->
      <div class="random-icons">
        <img data-src="./assets/images/pages/about/icons/cobrowse-icon.svg" class="blue-random lazy" alt="Devzilla">
        <img data-src="./assets/images/pages/about/icons/screen-share-icon.svg" class="yellow-random lazy"
          alt="Devzilla">
        <img data-src="./assets/images/pages/about/icons/call-icon.svg" class="green-random lazy" alt="Devzilla">
      </div>
      <!-- random-icons-right -->
      <div class="random-icons-right">
        <img data-src="./assets/images/pages/about/icons/live-chat-icon.svg" class="red-random lazy" alt="Devzilla">
      </div>
    </div>
  </div>

  <!-- Section II -->
  <div class="se-ii">
    <div class="container">

      <!-- content -->
      <div class="content text-lg-left text-md-center text-left">
        <!-- row -->
        <div class="row align-items-center">
          <!-- col -->
          <div class="col-lg-6 pr-xl-3 mb-lg-0 mb-2">
            <!-- side-img -->
            <img data-src="{{ asset('assets2/images/nmtc/1st_cover.jpg')}}" style="border-radius: 10px;" class="side-img lazy img-fluid" alt="Image">
          </div>
          <!-- col -->
          <div class="col-lg-6 pl-xl-3">
            <!-- title-2 -->
            <h4 class="title-2">Committed to Change</h4>
            <!-- title-2 -->
            <h2 class="title-1">"The journey of a thousand miles begins with a single step." - <span
                style="font-style: italic;">Lao Tzu.</span></i></h2>
            <!-- para-2 -->
            <p class="para-2">The first edition of NMTC was a defining moment in our history. We brought together
              experts and enthusiasts from around the world to share their knowledge, ideas and insights. It featured
              keynote speakers, panel discussions and a hackathon that challenged attendees to push boundaries of what
              is possible. It was a true celebration of innovation and progress, specifically, it highlighted the
              potential of artificial intelligence and its importance in the health field, one of the most critical and
              sensitive areas. It set the stage for a successful event series.</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <!-- col -->
          <div class="col-lg-4 col-md-6">
            <!-- box -->
            <div class="box text-center">
              <!-- box-title -->
              <h3 class="box-title">400+</h3>
              <!-- box-text -->
              <p class="box-text">Participants</p>
            </div>
          </div>
          <!-- col -->
          <div class="col-lg-4 col-md-6">
            <!-- box -->
            <div class="box text-center">
              <!-- box-title -->
              <h3 class="box-title">20+</h3>
              <!-- box-text -->
              <p class="box-text">Experts and guests</p>
            </div>
          </div>
          <!-- col -->
          <div class="col-lg-4 col-md-6">
            <!-- box -->
            <div class="box text-center">
              <!-- box-title -->
              <h3 class="box-title">5+</h3>
              <!-- box-text -->
              <p class="box-text">Awards.</p>
            </div>
          </div>
        </div>
        <!-- row -->
        <div class="row align-items-center ">
          <!-- col -->
          <div class="col-lg-6 pr-xl-3 order-lg-1 order-2">
            <!-- title-2 -->
            <h4 class="title-2">Dedicated to the Goal</h4>
            <!-- title-2 -->
            <h2 class="title-1">Building on our achievements, we march towards an even greater future.</h2>
            <!-- para-2 -->
            <p class="para-2">The second edition of this event focused on the theme of Industry 4.0, bringing together
              experts to discuss the latest advancements and trends in technology, automation and data analytics. It
              featured keynote speakers, panel discussions, and a hackathon that challenged attendees to push the
              boundaries of what is possible in the field of Industry 4.0, it was a true celebration of innovation and
              progress.</p>
          </div>
          <!-- col -->
          <div class="col-lg-6 pl-xl-3 mb-lg-0 mb-2 order-lg-2 order-1">
            <!-- side-img -->
            <img data-src="{{ asset('assets2/images/nmtc/2nd_cover.jpg')}}" style="border-radius: 10px;"  class="side-img lazy img-fluid" alt="Image">
          </div>
        </div>
        <div class="row justify-content-center pb-5">
          <!-- col -->
          <div class="col-lg-4 col-md-6">
            <!-- box -->
            <div class="box text-center">
              <!-- box-title -->
              <h3 class="box-title">650+</h3>
              <!-- box-text -->
              <p class="box-text">Participants</p>
            </div>
          </div>
          <!-- col -->
          <div class="col-lg-4 col-md-6">
            <!-- box -->
            <div class="box text-center">
              <!-- box-title -->
              <h3 class="box-title">25+</h3>
              <!-- box-text -->
              <p class="box-text">Experts and guests</p>
            </div>
          </div>
          <!-- col -->
          <div class="col-lg-4 col-md-6">
            <!-- box -->
            <div class="box text-center">
              <!-- box-title -->
              <h3 class="box-title">5+</h3>
              <!-- box-text -->
              <p class="box-text">Awards.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 
  </div>

  <div class="map-se pt-120">
    <div class="container">
      <!-- se-head -->

    </div>
    <!-- map-area -->
    <div class="map-area position-relative pt-lg-3 pt-md-2">
      <!-- map -->
      <img data-src="{{ asset('assets2/images/pages/game-servers/map.png')}}" class="lazy map img-fluid w-100" alt="Map">
      <!-- markers -->
      <div class="markers">

        <!-- marker -->
        <div class="marker cursor-pointer">
          <!-- icon -->
          <div class="icon"></div>
          <!-- m-body -->
          <div class="m-body">
            <!-- div -->
            <div class="d-flex align-items-center mb-1">
              <img src="{{ asset('assets2/images/flags/tunisia.svg')}}" class="flag img-fluid" alt="Tunisia">
              <h5 class="m-title">Tunisia</h5>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>




  <!-- Theme Footer -->
  <footer class="theme-footer">
    <!-- footer-top -->

    <!-- footer-middle -->

    <!-- footer-bottom -->
    <div class="footer-bottom">
      <div class="container-fluid">
        <!-- content -->
        <div class="content d-flex align-items-start mb-2">
          <!-- logo -->
          <div class="logo mb-lg-0 mb-1">
            <a href="./index.html">
              <img src="{{ asset('assets2/images/nmtc/logo.png')}}" class="img-fluid">
            </a>
          </div>
          <!-- copyright -->
          <div class="copyright mr-lg-5">
            <!-- links -->

            <!-- para-3 -->
            <p class="para-3">Copyright &copy; 2023, National Microsoft Technologies Camp. All Rights Reserved.
              <br>contact@nmtc.tn - +216 25 55 66 33</p>
          </div>
          <!-- social-list -->
          <ul
            class="social-list list-unstyled d-flex align-items-center justify-content-lg-end justify-content-center ml-lg-auto mt-lg-0 mt-2">

            <li><a href="https://www.facebook.com/NMTC.TUNISIA"><img src="{{ asset('assets2/images/templates/footer/facebook.png')}}"
                  alt="Icon"></a></li>
            <li><a href="https://www.linkedin.com/company/nmtctunisia"><img
                  src="{{ asset('assets2/images/templates/footer/linkedin.png')}}" alt="Icon"></a></li>
          </ul>
        </div>
        <!-- content -->


      </div>
    </div>
  </footer>

  <!-- jquery-3.3.1.min.js -->
  <script src="{{ asset('assets2/js/jquery-3.3.1.min.js')}}"></script>

  <!-- jquery.lazy.min.js -->
  <script src="{{ asset('assets2/js/jquery.lazy.min.js')}}"></script>

  <!-- jquery.validate.min.js -->

  <!-- jQuery.cookies.js -->
  <script src="{{ asset('assets2/js/jQuery.cookies.js')}}"></script>

  <!-- templates.js -->
  <script src="{{ asset('assets2/js/templates.js')}}"></script>

  <!-- forms.js -->

  <!-- script.js -->
  <script src="{{ asset('assets2/js/script.js')}}"></script>

  <!-- Abuse's page script -->

</body>

</html>
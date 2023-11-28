<!DOCTYPE html>
<html lang="en">
<head>
  <!-- meta -->
  <!-- Google tag (gtag.js) --> 
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-QVTN9XE2HP"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-QVTN9XE2HP'); </script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="title" content="NMTC">
  <meta name="description" content="NMTC or National Microsoft Technologies Camp, is a national Event organized in collaboration between the professional community of Microsoft and all the Microsoft clubs in Tunisia.">
  <meta name="keywords" content="nmtc, NMTC, Event, Tunisia, WEB 3, technology, national microsoft Technologies camp">
  <meta name="language" content="en">
  <link rel="shortcut icon" href="{{ asset('assets2/images/nmtc/favicon.png')}}" type="image/x-icon">
  <!-- link -->
  <link href="https://vjs.zencdn.net/7.20.3/video-js.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('assets2/css/bundle.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets2/css/fonts.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets2/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets2/css/templates.css')}}">
  <link rel="stylesheet" href="{{ asset('assets2/css/index.css')}}">
  <link rel="stylesheet" href="{{ asset('assets2/css/pages/about.css')}}">
  <link rel="stylesheet" href="{{ asset('assets2/css/video.css')}}"  />
  <link rel="stylesheet" href="{{ asset('assets/css/nmtc3.css')}}"  />
  <link rel="stylesheet" href="{{ asset('assets2/css/pages/dedi-servers.css')}}">
  <script src='https://www.google.com/recaptcha/api.js?render=6LdohwwkAAAAAESaSsofW6NrEKFoxXNCx3Q947E2'></script>

  <!-- title -->
  <title>NMTC</title>
</head>
<body class="position-relative index-page dark-theme" id="index-page">

  <!-- Preloader -->
  <div class="preloader" id="preloader">
    <div class="content d-flex align-items-center justify-content-center">
      <div class="spinner"></div>
    </div>
  </div>  

  <!-- Navbar -->
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
        <a href="/" class="brand d-flex align-items-center">
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

                @if ( Auth::user()->role == 0 || Auth::user()->role == 1)
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-fill-primary btn-sm btn-rounded shadow-off text-uppercase mr--sm">Dashboard</a>
                @endif

                @if ( Auth::user()->role == 4 || Auth::user()->role == 5 || Auth::user()->role == 6)
                <a href="{{ route('user.dashboard') }}" class="btn btn-fill-primary btn-sm btn-rounded shadow-off text-uppercase mr--sm">Dashboard</a>
                                            
                @endif
                @if ( Auth::user()->role == 2 || Auth::user()->role == 3)
                <a href="{{ route('organizer.dashboard') }}" class="btn btn-fill-primary btn-sm btn-rounded shadow-off text-uppercase mr--sm">Dashboard</a>
                                            
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
          <div class="link active">
            <a href="/">Home</a>
          </div>
          <div class="link link-vis">
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

  <!-- Header -->
  <header class="main-header" style="height: 100vh !important;">
    <div class="container">
      <!-- row -->
     
      <div class="row align-items-center">

        <!-- col -->
        <div class="col-xl-12 text-center">
          <!-- title-1 & para-1 -->
          <div id="timer" class="flex-wrap d-flex justify-content-center mb-2">
            <div id="days" class="align-items-center flex-column d-flex justify-content-center"></div>
            <div id="hours" class="align-items-center flex-column d-flex justify-content-center"></div>
            <div id="minutes" class="align-items-center flex-column d-flex justify-content-center"></div>
            <div id="seconds" class="align-items-center flex-column d-flex justify-content-center"></div>
        </div>
          <h1 class="title-1 text-uppercase mb-2 mx-auto">NATIONAL MICROSOFT TECHNOLOGIES CAMP</h1>
          <!-- <p class="para-1 mb-2 mx-xl-0 mx-auto">Check out the services we offer below. We're determined to provide these services at the best quality - customer satisfaction and convenience are of the utmost importance for us.</p> -->
          <!-- notify -->
          <div class="notify glassy mb-4">
            
          </div>
          <!-- buttons -->
          <div class="buttons">
            <a href="#register" class="btn btn-fill-primary shadow-off mr-1 mb-md-0 mb-1">Register</a>
            
          </div>
        </div>

        <!-- col -->
       

      </div>
      <div class="cover-for-bg" id="aaaa">
        <canvas id="background"></canvas></div>
    </div>
    
  </header>

 


  <div class="se-ii" id="about-section">
    <div class="container mb-6">
      <!-- se-head -->
      <div class="se-head" >
        <h3 class="se-title-1">NMTC</h3>
        <h4 class="se-title-2">Empowering the Next Generation of Digital Thinkers.</h4>
      </div>
      <!-- row -->
      <div class="row justify-content-center">
        <!-- col -->
        <div class="col-lg-4 col-md-6">
          <!-- box -->
          <div class="box text-center">
            <!-- box-title -->
            <h3 class="box-title">1200+</h3>
            <!-- box-text -->
            <p class="box-text">Participant have joined NMTC from all over the country.</p>
          </div>
        </div>
        <!-- col -->
        <div class="col-lg-4 col-md-6">
          <!-- box -->
          <div class="box text-center">
            <!-- box-title -->
            <h3 class="box-title">25+</h3>
            <!-- box-text -->
            <p class="box-text">Insights from Over 25 Industry Experts.</p>
          </div>
        </div>
        <!-- col -->
        <div class="col-lg-4 col-md-6">
          <!-- box -->
          <div class="box text-center">
            <!-- box-title -->
            <h3 class="box-title">10+</h3>
            <!-- box-text -->
            <p class="box-text">Awards have been given in NMTC.</p>
          </div>
        </div>
      </div>
      <!-- content -->
      <div class="content text-lg-left text-md-center text-left pb-6">
        <!-- row -->
        <div class="row align-items-center">
          <!-- col -->
          <div class="col-lg-6 pr-xl-3 mb-lg-0 mb-2">
            <!-- side-img -->
            <img data-src="{{ asset('assets2/images/nmtc/v2-images-1.jpg')}}" class="side-img lazy img-fluid" style="border-radius: 10px;" alt="Image">
          </div> 
          <!-- col -->
          <div class="col-lg-6 pl-xl-3">
            <!-- title-2 -->
            <h4 class="title-2">What's NMTC</h4>
            <!-- title-2 -->
            <h2 class="title-1">National Microsoft Technologies Camp</h2>
            <!-- para-2 -->
            <p class="para-2">
              NMTC is a national event organized in collaboration between all the Microsoft clubs and MLSA community in Tunisia. This event will be located in one of the most prestigious Tunisian hotels "L’orient" Sousse. The three days of this event will be dedicated to high quality conferences, workshops and a competition that aim to improve the digital thinking and soft skills of our challengers and visitors.</p>
          </div>
        </div>
        <!-- row -->
       
        <!-- row -->
     
      </div>
    </div>
  </div>

  <!-- Section II -->
 

  <!-- Section IV -->
  <div class="se-iv py-90 bg-2 mt-6">
    <div class="container">
      <!-- se-head -->
      <div class="se-head">
        <h3 class="se-title-1">WHY ?</h3>
        <h4 class="se-title-2">Why should you join our event ?</h4>
      </div>
      <!-- space -->
      <div class="space space-sm"></div>
      <!-- row -->
      <div class="row justify-content-center">
        <!-- col -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
          <!-- box -->
          <div class="box color-1">
            <!-- link -->
           
            <!-- icon -->
            <div class="icon">
              <img data-src="{{ asset('assets2/images/icons/businessman.svg')}}" class="lazy img-fluid" alt="businessman">
            </div>
            <!-- box-title -->
            <h4 class="box-title">Worldwide <br>Speakers</h4>
            <!-- box-para -->
            <p class="box-para">Many guests of honour from all over the world will be present during the event to present our workshops.</p>
            <!-- arrow -->
            
          </div>
        </div>
        <!-- col -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
          <!-- box -->
          <div class="box color-2">
            <!-- link -->
            
            <!-- icon -->
            <div class="icon">
              <img data-src="{{ asset('assets2/images/icons/network.svg')}}" class="lazy img-fluid" alt="priority">
            </div>
            <!-- box-title -->
            <h4 class="box-title">Networking<br>‏‏‎ ‎</h4>
            <!-- box-para -->
            <p class="box-para">NMTC is a real opportunity to collaborate with other people and meet new ones also to attend one of the best and most awaited events of the year.</p>
            <!-- arrow -->
          
          </div>
        </div>
        <!-- col -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
          <!-- box -->
          <div class="box color-3">
            <!-- link -->
           
            <!-- icon -->
            <div class="icon">
              <img data-src="{{ asset('assets2/images/icons/mission.svg')}}" class="lazy img-fluid" alt="mission">
            </div>
            <!-- box-title -->
            <h4 class="box-title">Challenging Yourself<br>‏‏‎ ‎</h4>
            <!-- box-para -->
            <p class="box-para">Unleash Your Potential: Join us and Challenge Yourself to Reach New Heights</p>
            <!-- arrow -->
          
          </div>
        </div>
      
        <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
          <!-- box -->
          <div class="box color-5">
            <!-- link -->
          
            <!-- icon -->
            <div class="icon">
              <img data-src="{{ asset('assets2/images/icons/security-on.svg')}}" class="lazy img-fluid" alt="data-storage-device">
            </div>
            <!-- box-title -->
            <h4 class="box-title">Certification<br>‏‏‎ ‎</h4>
            <!-- box-para -->
            <p class="box-para">Excel in Your Field: Achieve Mastery and Get Certified in Multiple Topics.</p>
            <!-- arrow -->
           
          </div>
        </div>
        <!-- col -->
       
      </div>
    </div>
  </div>
  <div class="se-ii bg-2" style="padding: 60px 0 !important;">
    <div class="container">
      <!-- row -->
      
      <div class="row align-items-center">
        <!-- col -->
        <div class="col-xl-4 col-12 text-xl-left text-center mb-xl-0 mb-5">
          <!-- title-1 -->
          <h2 class="title-1 mb-1">
            <span>Discover</span><br class="d-xl-block d-none">
            <span>the Latest in</span><br class="d-xl-block d-none">
            <span>Technology's</span><br>
            <span class="primary-color">Fascinating Topics.</span>
          </h2>
          <!-- para-1 -->
          <p class="para-1 mb-0">(This edition topics)</p>
        </div>
        <!-- col -->
        <div class="col-xl-8 col-12">
          <!-- row -->
          <div class="row justify-content-center">
            <!-- col -->
            <div class="col-lg-2 col-md-3 col-6">
              <!-- item -->
              <div class="item text-center topicss">
                <img data-src="{{ asset('assets2/images/theme/7.jpg')}}" class="lazy img-fluid" style="border-radius: 5px;" alt="Blockchain">
                <h3 class="text mb-0">Blockchain</h3>
              </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
              <!-- item -->
              <div class="item text-center topicss">
                <img data-src="{{ asset('assets2/images/theme/5.jpg')}}" class="lazy img-fluid"  style="border-radius: 5px;" alt="Web3">
                <h3 class="text mb-0">Web 3.0</h3>
              </div>
            </div>
            <!-- col -->
         
            <!-- col -->
            <div class="col-lg-2 col-md-3 col-6">
              <!-- item -->
              <div class="item text-center topicss">
                <img data-src="{{ asset('assets2/images/theme/2.jpg')}}" class="lazy img-fluid" style="border-radius: 5px;" alt="NFT">
                <h3 class="text mb-0">NFT</h3>
              </div>
            </div>
            <!-- col -->
      
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="se-i py-120" id="se-i">
    <div class="container">
      <!-- se-head -->
      <div class="se-head mb-5">
        
        <h4 class="se-title-2">Event Schedule:</h4>
      </div>
      <!-- filter-bar -->
      <div class="filter-bar">
        <!-- row -->
        <div class="row justify-content-center">
          <!-- col -->
          <div class="col-xl-2 col-lg-3 col-md-4 col-4">
            <!-- item -->
            <div class="item active" data-show="day1">DAY 1</div>
          </div>
          <!-- col -->
          <div class="col-xl-2 col-lg-3 col-md-4 col-4">
            <!-- item -->
            <div class="item " data-show="day2">DAY 2</div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-4">
            <!-- item -->
            <div class="item " data-show="day3">DAY 3</div>
          </div>
        </div>
      </div>
      <!-- plans-container -->
      <div class="plans-container filter-day1 show my-3">
        <!-- plans -->
        <div class="plans">
          <!-- plan -->
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">10:00-12:30</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- price-se -->
            <div class="price-se">
              <!-- price -->
              <div class="price">
                Check In
              </div>
              <!-- price-comment -->
              
            </div>
          </div>
          <!-- plan -->
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">12:30-14:30</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- price-se -->
            <div class="price-se">
              <!-- price -->
              <div class="price">
                Lunch
              </div>
              <!-- price-comment -->
              
            </div>
          </div>
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">14:45-15:45</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- price-se -->
            <div class="price-se">
              <!-- price -->
              <div class="price">
                Unveiling the Revolution Opening Ceremony
              </div>
              <!-- price-comment -->
              <p class="price-comment">Welcome to NMTC 202v3.0</p>
              <p class="price-comment">The Rise of NFTC</p>
            
            </div>
          </div>
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">15:45-16:30</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- price-se -->
            <div class="price-se">
              <!-- price -->
              <div class="price">
                Unlocking the Potential of Blockchain
              </div>
              <!-- price-comment -->
              <p class="price-comment">Delving into the World of Blockchain</p>
              <p class="price-comment">Privacy and security implications of blockchain</p>
            
            </div>
          </div>
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">16:30-17:00</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- price-se -->
            <div class="price-se">
              <!-- price -->
              <div class="price">
                Break
              </div>
              <!-- price-comment -->
              
            
            </div>
          </div>
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">17:00-17:30</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- price-se -->
            <div class="price-se">
              <!-- price -->
              <div class="price">
                The Future of Money (Success Story)
              </div>
              <!-- price-comment -->
              <p class="price-comment">Blockchain's Impact on the Global Economy and Finance, Opportunities and Challenges</p>
            
            </div>
          </div>
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">17:30-18:00</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- price-se -->
            <div class="price-se">
              <!-- price -->
              <div class="price">
                Evolution from Web1 to Web3: A Journey Through Time
              </div>
              <!-- price-comment -->
              <p class="price-comment">From Static Pages to Decentralized Networks</p>
            
            </div>
          </div>
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">18:30-21:30</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- price-se -->
            <div class="price-se">
              <!-- price -->
              <div class="price">
                Dinner
              </div>
              <!-- price-comment -->
              
            </div>
          </div>
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">22:00-01:00</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- price-se -->
            <div class="price-se">
              <!-- price -->
              <div class="price">
                Night Party
              </div>
              <!-- price-comment -->
              <p class="price-comment">Live Band Show</p>
            
            </div>
          </div>
        </div>
      </div>
      <!-- plans-container -->
      <div class="plans-container filter-day2 my-3">
        <!-- plans -->
        <div class="plans">
          <!-- plan -->
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">06:00-10:00</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- price-se -->
            <div class="price-se">
              <!-- price -->
              <div class="price">
                Breakfast
              </div>
              <!-- price-comment -->
              
            </div>
          </div>
          <!-- plan -->
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">10:15-10:45</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- price-se -->
            <div class="price-se">
              <!-- price -->
              <div class="price">
                Blockchain and the Digital Revolution
              </div>
              <!-- price-comment -->
              <p class="price-comment">A Deep Dive into the Technology and its Applications</p>
            </div>
          </div>
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">10:45-11:00</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- price-se -->
            <div class="price-se">
              <!-- price -->
              <div class="price">
                Launching the Hackathon Adventure
              </div>
              <!-- price-comment -->
              
            </div>
          </div>
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">11:30-13:00</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- spec-se -->
            <div class="spec-se" style="flex:0 0 15% !important;padding-left:15px !important;padding-right:15px !important;">
              <!-- icons-bar -->
            
              <!-- text-bar -->
              <div class="text-bar d-flex flex-wrap">
                <!-- text -->
                <div class="text workshop flex-wrap">
                  <p class="tit-wok"><b>Blockchain for Business</b></p><br>
                  <p class="text-center">Understanding the Benefits and Use Cases</p>
                </div>
                <!-- text -->
                
              </div>
            </div>
            <!-- spec-se -->
            <div class="spec-se" style="flex:0 0 15% !important;padding-left:15px !important;padding-right:15px !important;">
              <!-- icons-bar -->
           
              <!-- text-bar -->
              <div class="text-bar">
                <!-- text -->
                <div class="text workshop flex-wrap">
                  <p class="tit-wok"><b>Web 3.0 Revolution </b></p>
                  <p class="text-center">Upgrading Your Web 2.0 to Web 3.0</p>
                </div>
              </div>
            </div>
            <div class="spec-se" style="flex:0 0 15% !important;padding-left:15px !important;padding-right:15px !important;">
              <!-- icons-bar -->
            
              <!-- text-bar -->
              <div class="text-bar">
                <!-- text -->
                <div class="text workshop flex-wrap">
                  <p class="tit-wok"><b>Web 3.0 Revolution</b></p>
                  <p class="text-center">Upgrading Your Web 2.0 to Web 3.0</p>
                </div>
              </div>
            </div>
            <div class="spec-se" style="flex:0 0 20% !important; border-left: 1px solid;padding-left:15px !important;">
              <!-- icons-bar -->
             
              <!-- text-bar -->
              <div class="text-bar">
                <!-- text -->
                <div class="text workshop flex-wrap">
                  <p class="tit-wok"><b>Unleashing the Power of AR/VR using UE4</b></p>
                  <p class="text-center">Learn how to create AR/VR applications using Unreal Engine 4</p>
                </div>
              </div>
            </div>
            
            <!-- price-se -->
         
          </div>
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">13:00-14:30</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- price-se -->
            <div class="price-se">
              <!-- price -->
              <div class="price">
                Lunch Break
              </div>
              <!-- price-comment -->
              
            
            </div>
          </div>
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">15:00-16:30</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- spec-se -->
            <div class="spec-se" style="flex:0 0 15% !important;padding-left:15px !important;padding-right:15px !important;">
              <!-- icons-bar -->
            
              <!-- text-bar -->
              <div class="text-bar d-flex flex-wrap">
                <!-- text -->
                <div class="text workshop flex-wrap">
                  <p class="tit-wok"><b>Blockchain for Supply Chain Management</b></p><br>
                  <p class="text-center">transparency, security, and efficiency</p>
                </div>
                <!-- text -->
                
              </div>
            </div>
            <!-- spec-se -->
            <div class="spec-se" style="flex:0 0 15% !important;padding-left:15px !important;padding-right:15px !important;">
              <!-- icons-bar -->
           
              <!-- text-bar -->
              <div class="text-bar">
                <!-- text -->
                <div class="text workshop flex-wrap">
                  <p class="tit-wok"><b>Cryptocurrency Trading and Investment Strategies</b></p>
                  <p class="text-center">Cryptocurrency Trading and Investment Strategies</p>
                </div>
              </div>
            </div>
            <div class="spec-se" style="flex:0 0 15% !important;padding-left:15px !important;padding-right:15px !important;">
              <!-- icons-bar -->
            
              <!-- text-bar -->
              <div class="text-bar">
                <!-- text -->
                <div class="text workshop flex-wrap">
                  <p class="tit-wok"><b>Security and Privacy in Blockchain Systems</b></p>
                  <p class="text-center">Learn how to secure your blockchain applications</p>
                </div>
              </div>
            </div>
            <div class="spec-se" style="flex:0 0 20% !important; border-left: 1px solid;padding-left:15px !important;">
              <!-- icons-bar -->
             
              <!-- text-bar -->
              <div class="text-bar">
                <!-- text -->
                <div class="text workshop flex-wrap">
                  <p class="tit-wok"><b>Writing a Smart Contract Using Solidity</b></p>
                  <p class="text-center">Learn how to write a smart contract on the Ethereum Network</p>
                </div>
              </div>
            </div>
            
            <!-- price-se -->
         
          </div>
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">16:30-17:30</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- price-se -->
            <div class="price-se">
              <!-- price -->
              <div class="price">
                Relax, Network and Have Fun
              </div>
              <!-- price-comment -->
              
            
            </div>
          </div>
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">17:30-:19:00</span>
              
            </div>
            <!-- spec-se -->
          
            <div class="spec-se" style="flex:0 0 15% !important;padding-left:15px !important;padding-right:15px !important;">
              <!-- icons-bar -->
            
              <!-- text-bar -->
              <div class="text-bar d-flex flex-wrap">
                <!-- text -->
                <div class="text workshop flex-wrap">
                  <p class="tit-wok"><b>From Vision to Reality</b></p><br>
                  <p class="text-center">A Blockchain Success Story</p>
                </div>
                <!-- text -->
                
              </div>
            </div>
            <!-- spec-se -->
            <div class="spec-se" style="flex:0 0 15% !important;padding-left:15px !important;padding-right:15px !important;">
              <!-- icons-bar -->
           
              <!-- text-bar -->
              <div class="text-bar">
                <!-- text -->
                <div class="text workshop flex-wrap">
                  <p class="tit-wok"><b>Cryptocurrency Trading and Investment Strategies</b></p>
                  <p class="text-center">Cryptocurrency Trading and Investment Strategies</p>
                </div>
              </div>
            </div>
            <div class="spec-se" style="flex:0 0 15% !important;padding-left:15px !important;padding-right:15px !important;">
              <!-- icons-bar -->
            
              <!-- text-bar -->
              <div class="text-bar">
                <!-- text -->
                <div class="text workshop flex-wrap">
                  <p class="tit-wok"><b>Security and Privacy in Blockchain Systems</b></p>
                  <p class="text-center">Learn how to secure your blockchain applications</p>
                </div>
              </div>
            </div>
            <div class="spec-se" style="flex:0 0 20% !important; border-left: 1px solid;padding-left:15px !important;">
              <!-- icons-bar -->
             
              <!-- text-bar -->
              <div class="text-bar">
                <!-- text -->
                <div class="text workshop flex-wrap">
                  <p class="tit-wok"><b>Writing a Smart Contract Using Solidity</b></p>
                  <p class="text-center">Learn how to write a smart contract on the Ethereum Network</p>
                </div>
              </div>
            </div>
            <!-- price-se -->
         
          </div>
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">19:00-21:30</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- price-se -->
            <div class="price-se">
              <!-- price -->
              <div class="price">
                Dinner
              </div>
              <!-- price-comment -->
              
            
            </div>
          </div>
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">21:30-23:00</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- price-se -->
            <div class="price-se">
              <!-- price -->
              <div class="price">
                Night of Fun and Competition
              </div>
              <!-- price-comment -->
              
              <p class="price-comment">Game Mode On</p>
            </div>
          </div>
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">23:00-02:00</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- price-se -->
            <div class="price-se">
              <!-- price -->
              <div class="price">
                DJ Night
              </div>
              <!-- price-comment -->
              
            </div>
          </div>
        </div>
      </div>
      <div class="plans-container filter-day3 my-3">
        <!-- plans -->
        <div class="plans">
          <!-- plan -->
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">06:00-10:00</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- price-se -->
            <div class="price-se">
              <!-- price -->
              <div class="price">
                Breakfast
              </div>
              <!-- price-comment -->
              
            </div>
          </div>
          <!-- plan -->
         
       
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">09:30-:11:00</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- spec-se -->
            <div class="spec-se" style="flex:0 0 20% !important;padding-left:15px !important;padding-right:15px !important;">
              <!-- icons-bar -->
            
              <!-- text-bar -->
              <div class="text-bar d-flex flex-wrap">
                <!-- text -->
                <div class="text workshop flex-wrap">
                  <p class="tit-wok"><b>Web 3.0 Revolution</b></p><br>
                  <p class="text-center">Upgrading Your Web 2.0 to Web 3.0</p>
                </div>
                <!-- text -->
                
              </div>
            </div>
            <!-- spec-se -->
            <div class="spec-se" style="flex:0 0 22% !important;padding-left:15px !important;padding-right:15px !important;">
              <!-- icons-bar -->
           
              <!-- text-bar -->
              <div class="text-bar">
                <!-- text -->
                <div class="text workshop flex-wrap">
                  <p class="tit-wok"><b>Unleashing the Power of AR/VR using UE4</b></p>
                  <p class="text-center">Learn how to create AR/VR applications using Unreal Engine 4</p>
                </div>
              </div>
            </div>
          
            <div class="spec-se" style="flex:0 0 20% !important;padding-left:15px !important;">
              <!-- icons-bar -->
             
              <!-- text-bar -->
              <div class="text-bar">
                <!-- text -->
                <div class="text workshop flex-wrap">
                  <p class="tit-wok"><b>Blockchain on Azure</b></p>
                  <p class="text-center">From Development to Deployment</p>
                </div>
              </div>
            </div>
           
            
            <!-- price-se -->
         
          </div>
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">11:00-11:30</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- price-se -->
            <div class="price-se">
              <!-- price -->
              <div class="price">
                The Revolution Continues
              </div>
              <!-- price-comment -->
              <p class="price-comment">Exploring the Boundaries of the Next Revolution of Industry and Technology</p>
            </div>
          </div>
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">11:30-12:00</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- price-se -->
            <div class="price-se">
              <!-- price -->
              <div class="price">
                Awards Ceremony & Closing Remarks
              </div>
              <!-- price-comment -->
             
            </div>
          </div>
          <div class="plan">
            <!-- main-info-se -->
            <div class="main-info-se">
              <span class="plan-name">12:00-12:30</span>
              
            </div>
            <!-- spec-se -->
          
            <!-- price-se -->
            <div class="price-se">
              <!-- price -->
              <div class="price">
                Pack-up & Check Out
              </div>
              <!-- price-comment -->
             
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>




  <div class="se-i mb-6">
    <div class="container position-relative mb-5">
      <!-- se-head -->
      <div class="se-head">
        <h3 class="se-title-1">More of NMTC</h3>
        <h4 class="se-title-2">Watch Our Last Edition After Movie.</h4>
      </div>
      <!-- content -->
      <div class="content">
        <!-- media -->
        <div class="media" style="border-radius: 15px;">
          <!-- media-img -->
          <video style="border-radius: 15px;" id="uniqueID" class="video-js vjs-fluid " controls
                                preload="auto" width="640" height="264" poster="{{ asset('assets2/images/pages/about/media-01.jpg')}}"
                                data-setup='{}'>
                                <source src="{{ asset('assets2/images/nmtc/v2.mp4')}}" type="video/mp4">
          </video>
          <!-- play-btn -->
          
        </div>
      </div>
      <!-- random-icons -->
      <div class="random-icons">
        <img data-src="{{ asset('assets2/images/pages/about/icons/cobrowse-icon.svg')}}" class="blue-random lazy" alt="Devzilla">
        <img data-src="{{ asset('assets2/images/pages/about/icons/screen-share-icon.svg')}}" class="yellow-random lazy" alt="Devzilla">
        <img data-src="{{ asset('assets2/images/pages/about/icons/call-icon.svg')}}" class="green-random lazy" alt="Devzilla">
      </div>
      <!-- random-icons-right -->
      <div class="random-icons-right">
        <img data-src="{{ asset('assets2/images/pages/about/icons/live-chat-icon.svg')}}" class="red-random lazy" alt="Devzilla">
      </div>
    </div>
  </div>











 

    <div class="se-iii py-90" >
      <div class="container">
        <!-- se-head -->
        <div class="se-head">
          <h3 class="se-title-1">NMTC</h3>
          <h4 class="se-title-2">Pricing</h4>
        </div>
        <!-- plans -->
        <div class="plans mb-xl-4 mb-2">
          <!-- row -->
          <div class="row mx-xl-0" id="register">
            <!-- col -->
            <div class="col-xl-4 col-md-6 mb-xl-0 mb-2 px-xl-0">
              <!-- plan -->
              <div class="plan">
                <!-- plan-head -->
                <div class="plan-head">
                  <!-- plan-name -->
                  <h3 class="plan-name">Basic</h3>
                  <!-- plan-para -->
                  
                </div>
                <!-- plan-price -->
                <div class="plan-price">
                  <!-- price -->
                  <h4 class="price">190 TND</h4>
                  <!-- price-comment -->
                  
                </div>
                <!-- actions -->
                <div class="actions">
                  <a href="/register?plan=basic" class="btn btn-fill-primary btn-sm shadow-off w-100">Choose Basic</a>
                </div>
                <!-- group -->
                <div class="group">
                  <!-- title-4 -->
                  <h4 class="title-4">Includes</h4>
                  <!-- list -->
                  <ul class="list list-unstyled">
                    <li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle.svg')}}" class="lazy img-fluid" alt="Icon">Free access to all the conferences</li>
                    <li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle.svg')}}" class="lazy img-fluid" alt="Icon">2 Nights Full board</li>
                    <li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle.svg')}}" class="lazy img-fluid" alt="Icon">Cerificates </li>
                    <li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle.svg')}}" class="lazy img-fluid" alt="Icon">Hotel Tax</li>
                    <li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle-red.svg')}}" class="lazy img-fluid" alt="Icon">Notebook</li>
					<li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle-red.svg')}}" class="lazy img-fluid" alt="Icon">Pen</li>
					<li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle-red.svg')}}" class="lazy img-fluid" alt="Icon">Stickers</li>
					<li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle-red.svg')}}" class="lazy img-fluid" alt="Icon">Mouse Pad</li>
					<li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle-red.svg')}}" class="lazy img-fluid" alt="Icon">Mug</li>
					<li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle-red.svg')}}" class="lazy img-fluid" alt="Icon">Drinking Bottle</li>
                  
                  </ul>
                </div>
           
              </div>
            </div>
          
            <!-- col -->
            <div class="col-xl-4 col-md-6 mb-xl-0 mb-2 px-xl-0">
              <!-- plan -->
              <div class="plan">
                <!-- plan-head -->
                <div class="plan-head">
                  <!-- plan-name -->
                  <h3 class="plan-name">Standard</h3>
                  <!-- plan-para -->
                  
                </div>
                <!-- plan-price -->
                <div class="plan-price">
                  <!-- price -->
                  <h4 class="price">210 TND</h4>
                  <!-- price-comment -->
                  
                </div>
                <!-- actions -->
                <div class="actions">
                  <a href="/register?plan=standard" class="btn btn-fill-primary btn-sm shadow-off w-100">Choose Standard</a>
                </div>
                <!-- group -->
                <div class="group">
                  <!-- title-4 -->
                  <h4 class="title-4">Includes</h4>
                  <!-- list -->
                  <ul class="list list-unstyled">
                    <li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle.svg')}}" class="lazy img-fluid" alt="Icon">Free access to all the conferences</li>
                    <li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle.svg')}}" class="lazy img-fluid" alt="Icon">2 Nights Full board</li>
                    <li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle.svg')}}" class="lazy img-fluid" alt="Icon">Cerificates</li>
                    <li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle.svg')}}" class="lazy img-fluid" alt="Icon">Hotel Tax</li>
                    <li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle.svg')}}" class="lazy img-fluid" alt="Icon">Notebook</li>
					<li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle.svg')}}" class="lazy img-fluid" alt="Icon">Pen</li>
					<li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle.svg')}}" class="lazy img-fluid" alt="Icon">Stickers</li>
					<li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle.svg')}}" class="lazy img-fluid" alt="Icon">Mouse Pad</li>
					<li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle-red.svg')}}" class="lazy img-fluid" alt="Icon">Mug</li>
					<li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle-red.svg')}}" class="lazy img-fluid" alt="Icon">Drinking Bottle</li>                  
                  </ul>
                </div>
           
              </div>
            </div>
          
            <div class="col-xl-4 col-md-6 mb-xl-0 mb-2 px-xl-0">
              <!-- plan -->
              <div class="plan">
                <!-- plan-head -->
                <div class="plan-head">
                  <!-- plan-name -->
                  <h3 class="plan-name">Premium</h3>
                  <!-- plan-para -->
                  
                </div>
                <!-- plan-price -->
                <div class="plan-price">
                  <!-- price -->
                  <h4 class="price">230 TND</h4>
                  <!-- price-comment -->
                  
                </div>
                <!-- actions -->
                <div class="actions">
                  <a href="/register?plan=premium" class="btn btn-fill-primary btn-sm shadow-off w-100">Choose Premium</a>
                </div>
                <!-- group -->
                <div class="group">
                  <!-- title-4 -->
                  <h4 class="title-4">Includes</h4>
                  <!-- list -->
                  <ul class="list list-unstyled">
                    <li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle.svg')}}" class="lazy img-fluid" alt="Icon">Free access to all the conferences</li>
                    <li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle.svg')}}" class="lazy img-fluid" alt="Icon">2 Nights Full board</li>
                    <li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle.svg')}}" class="lazy img-fluid" alt="Icon">Cerificates </li>
                    <li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle.svg')}}" class="lazy img-fluid" alt="Icon">Hotel Tax</li>
					<li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle.svg')}}" class="lazy img-fluid" alt="Icon">Notebook</li>
					<li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle.svg')}}" class="lazy img-fluid" alt="Icon">Pen</li>
					<li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle.svg')}}" class="lazy img-fluid" alt="Icon">Stickers</li>
					<li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle.svg')}}" class="lazy img-fluid" alt="Icon">Mouse Pad</li>
					<li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle.svg')}}" class="lazy img-fluid" alt="Icon">Mug</li>
					<li><img data-src="{{asset('assets/images/pages/shared-hosting/check-circle.svg')}}" class="lazy img-fluid" alt="Icon">Drinking Bottle</li>   
                  </ul>
                </div>
           
              </div>
            </div>
          
          </div>
        </div>
        <!-- se-footer -->
      
      </div>
    </div>








 
  
 

  <!-- Theme Footer -->
  <footer class="theme-footer">
    <!-- footer-top -->
   
    <!-- footer-middle -->
    <div class="footer-middle ">
      <div class="container-fluid pt-5">
        <!-- reg-bar -->
        <div class="reg-bar text-md-left text-center ">
          <div class="d-lg-flex align-items-center justify-content-between">
            <!-- text -->
            <div class="text m-3">
              <!-- title-4 -->
              <h4 class="title-4">Sign up to our newsletter</h4>
              <!-- para-2 -->
              
              <p class="para-2"> <form class="user-form" id="newsform" action="{{ asset('assets/script/subscribe.php')}}" method="POST" id="newsletter">
               @csrf
                <label class="form-label" for="email">
                  <!-- form-input -->
                  <input class="form-input" type="email" name="email" id="email" placeholder="Email Address" required>
                  <!-- state -->
                  <span class="state"></span>
                </label></p>
            </div>
            <!-- buttons -->
            <div class="buttons mt-lg-0 mt-3">
              <button id="submbtn" class="btn btn-fill-primary shadow-off text-uppercase font-500">Sign me up</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer-bottom -->
    <div class="footer-bottom">
      <div class="container-fluid">
        <!-- content -->
        <div class="content d-flex align-items-start mb-2">
          <!-- logo -->
          <div class="logo mb-lg-0 mb-1">
            <a href="/">
              <img src="{{ asset('assets2/images/nmtc/logo.png')}}" class="img-fluid" >              
            </a>
          </div>
          <!-- copyright -->
          <div class="copyright mr-lg-5">
            <!-- links -->
            
            <!-- para-3 -->
            <p class="para-3">Copyright &copy; 2023, National Microsoft Technologies Camp. All Rights Reserved. <br>contact@nmtc.tn  -  +216 25 55 66 33</p>
          </div>
          <!-- social-list -->
          <ul class="social-list list-unstyled d-flex align-items-center justify-content-lg-end justify-content-center ml-lg-auto mt-lg-0 mt-2">
         
            <li><a href="https://www.facebook.com/NMTC.TUNISIA"><img src="{{ asset('assets2/images/templates/footer/facebook.png')}}" alt="Icon"></a></li>
            <li><a href="https://www.linkedin.com/company/nmtctunisia"><img src="{{ asset('assets2/images/templates/footer/linkedin.png')}}" alt="Icon"></a></li>
          </ul>
        </div>
        <!-- content -->
       
        
      </div>
    </div>
  </footer>
  <script src="https://vjs.zencdn.net/7.20.3/video.min.js"></script>
  <script src="{{ asset('assets2/js/jquery-3.3.1.min.js')}}"></script> 
  <script>
      
      $(document).ready(function() {
    $('#submbtn').click(function(event) {
        event.preventDefault(); // prevent the button from submitting normally

        grecaptcha.ready(function() {
            grecaptcha.execute('6LdohwwkAAAAAESaSsofW6NrEKFoxXNCx3Q947E2', {action: 'homepage'}).then(function(token) {
                // Get the form data
                var formData = {
                    'email': $('input[name=email]').val(),
                    'g-recaptcha-response': token
                };

                // Send the data using AJAX
                $.ajax({
                    type: 'POST',
                    url: 'assets/script/subscribe.php',
                    data: formData,
                    dataType: 'json',
                    encode: true
                })
                .done(function(data) {
                    if(data=="invalid") {
                       alert("Error, please try again later")
                    } else if (data == "done"){
                        alert("Thank you for subscribing to our newsletter")
                    } else if (data == "already"){
                        alert("You are already subscribed to our newsletter")
                    }
                });
            });
        });
    });
});
    </script>
  <!-- jquery-3.3.1.min.js -->
  
  <!-- jquery.lazy.min.js -->
  <script src="{{ asset('assets2/js/jquery.lazy.min.js')}}"></script> 
  <!-- jQuery.cookies.js -->
  <script src="{{ asset('assets2/js/jQuery.cookies.js')}}"></script>
  <!-- templates.js -->
  <script src="{{ asset('assets2/js/templates.js')}}"></script>
  <!-- script.js -->
  <script src="{{ asset('assets2/js/forms.js')}}"></script>
  <script src="{{ asset('assets2/js/jquery.validate.min.js')}}"></script>
  <script src="{{ asset('assets2/js/script.js')}}"></script>  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/100/three.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/simplex-noise/2.4.0/simplex-noise.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/chroma-js/2.0.3/chroma.min.js'></script>
  <script  src="{{ asset('assets2/js/script-bg.js')}}"></script>
  <script>
    function makeTimer() {
   var endTime = new Date("December 19, 2023 00:00:01 GMT+1");
   var endTime = (Date.parse(endTime)) / 1000;
   var now = new Date();
   var now = (Date.parse(now) / 1000);
   var timeLeft = endTime - now;
   var days = Math.floor(timeLeft / 86400); 
   var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
   var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
   var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
   if (hours < "10") { hours = "0" + hours; }
   if (minutes < "10") { minutes = "0" + minutes; }
   if (seconds < "10") { seconds = "0" + seconds; }
   $("#days").html(days + "<span>Days</span>");
   $("#hours").html(hours + "<span>Hours</span>");
   $("#minutes").html(minutes + "<span>Minutes</span>");
   $("#seconds").html(seconds + "<span>Seconds</span>");
}
setInterval(function() { makeTimer(); }, 0);
  </script>
</body>
</html>

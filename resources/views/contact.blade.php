<!DOCTYPE html>
<html lang="en">
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
  <script src='https://www.google.com/recaptcha/api.js?render=6LdohwwkAAAAAESaSsofW6NrEKFoxXNCx3Q947E2'></script>

      <link rel="stylesheet" href="{{ asset('assets2/css/pages/contact.css')}}">
  
  <title>Contact Us | NMTC</title>
</head>
<body class="position-relative contact-page dark-theme" id="contact-page"><!-- Preloader -->
  <div class="preloader" id="preloader">
    <div class="content d-flex align-items-center justify-content-center">
      <div class="spinner"></div>
    </div>
  </div>  
<!-- Navbar -->
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
          <span class="text">contact</span>
        </a>
       

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


            
            
          
        <!-- buttons -->
       
        
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



<!-- Section I -->
<div class="se-i">
  <div class="container">
    <!-- row -->
    <div class="row">
      <!-- col -->
      <div class="col-lg-6 left-col d-flex flex-column justify-content-between">
        <!-- t-s -->
        <div class="t-s mb-lg-0 mb-5">
          <!-- title-1 & title-2 & para-1 -->
          <h2 class="title-2">Contact Us</h2>
          <h1 class="title-1">Get in Touch With Us</h1>
          <p class="para-1">Don't hesitate to get in touch with us if you have any question or comment.</p>
        </div>
        <!-- b-s -->
        <div class="b-s">
          <!-- row -->
          <div class="row">
            <!-- col -->
           
            <!-- col -->
            <div class="col-xl-4 col-lg-6 col-md-4 col-6 mb-lg-0 mb-2">
              <!-- box -->
              <div class="box">
                <!-- icon -->
                <div class="icon">
                  <img src="{{ asset('assets2/images/pages/contact/icons/envelope.png')}}" class="lazy img-fluid" alt="icon">
                </div>
                <!-- text -->
                <a href="mailto:contact@nmtc.tn" class="text">contact@nmtc.tn</a>
                <p class="text">Mail Us 24/7</p>
              </div>
            </div>
            <!-- col -->
            <div class="col-xl-4 col-lg-6 col-md-4 col-6">
              <!-- box -->
              <div class="box">
                <!-- icon -->
                <div class="icon">
                  <img src="{{ asset('assets2/images/pages/contact/icons/phone-call.png')}}" class="lazy img-fluid" alt="icon">
                </div>
                <!-- text -->
                <a href="tel:26632727" class="text">+216 26 632 727</a>
                <p class="text">Contact Us 24/7</p>
              </div>
            </div>              
          </div>
        </div>
      </div>
      <div class="col-lg-6 right-col">
        <!-- contact-form -->
        <form action="assets2/script/contact.php" class="contact-form ml-auto" id="contact-form" method="POST">
          <!-- form-title -->
          <h1 class="form-title">Fill up the form and our team will get back to you within 24 hours.</h1>
          <!-- form-label -->
          <label for="fname" class="form-label">
            <span class="input-label">Full Name</span>
            <input type="text" name="fname" id="fname" class="form-input" placeholder="Flen Ben Foulen" required>
            <span class="state"></span>
          </label>
          <!-- form-label -->
          <label for="email" class="form-label">
            <span class="input-label">Email</span>
            <input type="text" name="email" id="email" class="form-input" placeholder="flen@mail.com" required>
            <span class="state"></span>
          </label>
          <!-- form-label -->
          <label for="msg" class="form-label">
            <span class="input-label">Message</span>
            <textarea name="msg" id="msg" rows="5" class="form-input" placeholder="Hello!" required></textarea>
            <span class="state"></span>
          </label>
          <!-- buttons -->
          <div class="buttons mt-2">
            <button type="submit" id="submbtn" class="btn btn-sm btn-fill-success shadow-off text-uppercase w-100">Send</button>
          </div>
        </form>
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
                    'fname': $('input[name=fname]').val(),
                    'msg': $('textarea[name=msg]').val(),
                    'g-recaptcha-response': token
                };

                // Send the data using AJAX
                $.ajax({
                    type: 'POST',
                    url: 'assets2/script/contact.php',
                    data: formData,
                    dataType: 'json',
                    encode: true
                })
                .done(function(data) {
                    if(data.success == false) {
                       alert("Error, please try again later");
                    
                        $('#contact-form')[0].reset();
                    } else if (data.success == true){
                        alert("Thank you for sending a message, we will get back to you soon");
                        $('#contact-form')[0].reset();
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

  <!-- jquery.validate.min.js -->
      <script src="{{ asset('assets2/js/jquery.validate.min.js')}}"></script>
  
  <!-- jQuery.cookies.js -->
  <script src="{{ asset('assets2/js/jQuery.cookies.js')}}"></script>

  <!-- templates.js -->
  <script src="{{ asset('assets2/js/templates.js')}}"></script>
  
  <!-- forms.js -->
      <script src="{{ asset('assets2/js/forms.js')}}"></script>
  
  <!-- script.js -->
  <script src="{{ asset('assets2/js/script.js')}}"></script>  

  <!-- Abuse's page script -->
  
</body>

</html>
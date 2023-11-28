<!DOCTYPE html>

<html lang="en" data-theme="light">
<!--begin::Head-->

<head>
    <title>NMTC - Sign Up</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank" data-theme="light">
    <!--begin::Theme mode setup on page load-->

    <!--end::Theme mode setup on page load-->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Multi-steps-->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column stepper-multistep"
            id="kt_create_account_stepper">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto w-lg-350px w-xl-500px">
                <div class="d-flex flex-column position-lg-fixed top-0 bottom-0 w-lg-350px w-xl-500px scroll-y bgi-size-cover bgi-position-center"
                    style="background : #181C32                    ">
                    <!--begin::Header-->
                    <div class="d-flex flex-center py-10 py-lg-20 mt-lg-20">
                        <!--begin::Logo-->
                        <a href="../../demo2/dist/index.html">
                            <img alt="Logo" src="{{asset('assets/media/logos/logo_2x.png')}}" class="h-50px" />
                        </a>
                        <!--end::Logo-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="d-flex flex-row-fluid justify-content-center p-10">
                        <!--begin::Nav-->
                        <div class="stepper-nav">
                            <!--begin::Step 1-->
                           
                            <!--end::Step 1-->

                            <!--begin::Step 3-->
                            <div class="stepper-item " data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title fs-2">Personal Infroamtions</h3>
                                        <div class="stepper-desc fw-normal">Tell us more about yourself</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 2-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon rounded-3">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">2</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title fs-2">Participation Type</h3>
                                        <div class="stepper-desc fw-normal">Choose your participation type</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 5-->
                            <div class="stepper-item current" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">Completed</h3>
                                        <div class="stepper-desc fw-normal">Your account is created</div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 5-->
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="d-flex flex-center flex-wrap px-5 py-10">
                        <!--begin::Links-->
                       
                        <!--end::Links-->
                    </div>
                    <!--end::Footer-->
                </div>
            </div>
            <!--begin::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid py-10" style="background-color: white !important">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-650px w-xl-700px p-10 p-lg-15 mx-auto">
                        <!--begin::Form-->
                        <form method="POST" class="my-auto pb-5" action="{{ route('completeProfile') }}" id="kt_create_account_form">
                            @if ( Session::get('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                       @endif
                       @if ( Session::get('error'))
                            <div class="alert alert-danger">
                                {{ Session::get('error') }}
                            </div>
                       @endif
                     
                         
                            
                          
                            <!--end::Step 3-->
                            <!--begin::Step 5-->
                            <div class="current" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-8 pb-lg-10">
                                        <!--begin::Title-->
                                        <div class="" style="position: absolute; top:0; right:25% ;">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>
                                        </div>
                                        <h1 class="fw-bold text-primary mb-8">Steps completed successfully!</h1>
                                        <h3 class="fw-bold text-dark mb-8"><span id="welcome"></span></h3>
                                        <a href="{{ route('user.dashboard') }}" id="welcome2" class="btn btn-primary">Go to your dashboard</a>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                      
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                   
                                    <!--end::Body-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 5-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-stack pt-15">
                                <div class="mr-2">
                                    <button type="button" class="btn btn-lg btn-light-primary me-3"
                                        data-kt-stepper-action="previous">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                        <span class="svg-icon svg-icon-4 me-1">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="6" y="11" width="13"
                                                    height="2" rx="1" fill="currentColor" />
                                                <path
                                                    d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->Previous
                                    </button>
                                </div>
                              
                            </div>
                            <!--end::Actions-->
                            @csrf
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Multi-steps-->
    </div>
    <!--end::Root-->

    <!--end::Main-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js')}}"></script>

    <script src="{{ asset('assets/js/scripts.bundle.js')}}"></script>
    <script src="{{ asset('assets/plugins/custom/typedjs/typedjs.bundle.js')}}"></script>
    <script src="{{ asset('assets/js/confetti.min.js')}}"></script>
    <script>
        // confetti.js on page load 

       let confetti = new Confetti('welcome2');
confetti.setCount(75);
confetti.setSize(1);
confetti.setPower(25);
confetti.setFade(false);
confetti.destroyTarget(true);
       var typed = new Typed("#welcome", {
    strings: ["Welcome to the future.", "Weclome to NMTC!",],
    typeSpeed: 30
});

    </script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Custom Javascript(used for this page only)-->

    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>

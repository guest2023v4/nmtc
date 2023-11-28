<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('assets/vendors/liquid-icon/lqd-essentials/lqd-essentials.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/utility.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo/start-hub-x.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link href="css2?family=Golos+Text:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <title>NMTC</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/demo/events-hub/logo.ico') }}">


</head>

<body class="lqd-preloader-activated lqd-preloader-style-spinner" data-localscroll-offset="120"
    data-mobile-nav-breakpoint="1199" data-mobile-nav-style="minimal" data-mobile-nav-scheme="light"
    data-mobile-nav-trigger-alignment="right" data-mobile-header-scheme="light" data-mobile-logo-alignment="default"
    data-overlay-onmobile="false">
    <div class="lqd-preloader-wrap lqd-preloader-spinner" data-preloader-options='{"animationType": "fade" }'>
        <div class="lqd-preloader-inner">
            <div class="lqd-preloader-el inline-flex">
                <svg class="lqd-spinner-circular" height="64" width="64">
                    <circle cx="32" cy="32" r="28" fill="none" stroke-width="5" stroke-miterlimit="10">
                    </circle>
                </svg>
            </div>
        </div>
    </div>
    <div id="wrap">
        <div class="lqd-sticky-placeholder hidden"></div>
        <header id="site-header" class="main-header main-header-overlay sticky-header-noshadow"
            data-sticky-header="true" data-sticky-values-measured="false">
            <div class="lqd-hide-onstuck w-full flex justify-center module-header-middle mt-20 px-10 md:hidden"
                data-custom-animations="true"
                data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues": {"opacity" : 0} , "animations": {"opacity" : 1}}'>
                <div class="w-950 flex items-center justify-between gap-10 py-10">
                    <div class="social-icons-wrapper flex-grow-1 gap-20 animation-element">
                        <span class="grid-item"><a class="icon social-icon social-icon-facebook-square"
                                href="https://www.facebook.com/NMTC.TUNISIA" target="_blank"><span
                                    class="sr-only">Facebook-square</span>
                                <svg class="w-1em h-1em" viewbox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"
                                        fill="#B4B6C6"></path>
                                </svg> </a></span>
                        <span class="grid-item">
                            <a class="icon social-icon social-icon-linkedin"
                                href="https://www.linkedin.com/company/nmtctunisia/" target="_blank">
                                <span class="sr-only">Linkedin</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                                        fill="#B4B6C6" />
                                </svg> </a>
                        </span>





                        <span class="grid-item"><a class="icon social-icon social-icon-twitter"
                                href="https://www.instagram.com/nmtc_2023/" target="_blank"><span
                                    class="sr-only">Twitter</span>
                                <svg class="w-1em h-1em" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                                        fill="#B4B6C6"></path>
                                </svg> </a></span>
                    </div>
                    <div class="ld-dropdown-menu flex relative animation-element" role="menubar">
                        <div class="ld-module-dropdown left collapse absolute" id="dropdown-language"
                            aria-expanded="false" role="menuitem">
                        </div>
                    </div>
                    <div class="flex animation-element">
                        <div class="ld-module-search lqd-module-search-default flex items-center relative">
                            <span class="ld-module-trigger collapsed text-slate-500" role="button"
                                data-ld-toggle="true" data-bs-toggle="collapse" data-bs-target="#search-header"
                                aria-controls="search-header" aria-expanded="false">
                                <span class="ld-module-trigger-txt"></span>
                                <span class="ld-module-trigger-icon"></span>
                                <div role="search" class="ld-module-dropdown collapse absolute" id="search-header"
                                    aria-expanded="false">
                                    <div class="ld-search-form-container">
                                        <form role="search" method="get"
                                            action="https://starthub-x.liquid-themes.com/"
                                            class="ld-search-form relative">
                                            <input class="w-full" type="search" placeholder="Start searching"
                                                value="" name="s" />
                                            <span role="search" class="input-icon inline-block absolute"
                                                data-ld-toggle="true" data-bs-toggle="collapse"
                                                data-bs-target="#search-header" aria-controls="search-header"
                                                aria-expanded="false"><i
                                                    class="lqd-icn-ess icon-ld-search"></i></span>
                                            <input type="hidden" name="post_type" value="post" />
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full flex items-stretch justify-center px-10 md:hidden">
                <div class="w-960 flex items-stretch justify-center py-10">
                    <div class="w-full statick flex items-center justify-between px-30 rounded-10 shadow-blue module-header-bottom"
                        style="background-color: #282828">
                        <div class="module-logo flex navbar-brand-plain">
                            <a class="navbar-brand flex p-0 relative" href="/" rel="home"><span
                                    class="navbar-brand-inner post-rel"><img class="logo-default"
                                        src="{{ asset('assets/images/demo/start-hub-x/logo/logo.svg') }}"
                                        width="90px"></a>
                        </div>
                        <div class="module-primary-nav flex">
                            <div class="navbar-collapse inline-flex p-0 lqd-submenu-default-style"
                                aria-expanded="false" role="navigation">
                                <ul class="main-nav flex reset-ul inline-ul lqd-menu-counter-right lqd-menu-items-inline main-nav-hover-fill link-13 link-white link-medium"
                                    data-submenu-options='{"toggleType": "fade", "handler": "mouse-in-out"}'
                                    data-localscroll="true"
                                    data-localscroll-options='{"itemsSelector":"> li > a", "trackWindowScroll": true, "includeParentAsOffset": true}'>
                                    <li>
                                        <a href="#features">Introduction
                                            <span class="link-icon inline-flex hide-if-empty right-icon">
                                            </span></a>
                                    </li>
                                    <li>
                                        <a href="#commit">What's NMTC
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#events">Our Program
                                            <span class="link-icon inline-flex hide-if-empty right-icon"></span></a>
                                    </li>
                                    <li>
                                        <a href="/team">Our Team
                                            <span
                                                class="link-icon inline-flex hide-if-empty right-icon"></i></span></a>
                                    </li>
                                    <li>
                                        <a href="#clients">Partners
                                            <span
                                                class="link-icon inline-flex hide-if-empty right-icon"></i></span></a>
                                    </li>

                                    @if (Route::has('login'))

                                        @auth
                                            @if ( Auth::user()->role == 0 || Auth::user()->role == 1)
                                            <li
                                            style="margin-left: 10px; display: flex; justify-content: center; align-items: center;">
                                                <a
                                                    href="{{ route('admin.dashboard') }}"style="text-decoration: none; color: inherit;">
                                                    <div class="ld-fancy-heading relative flex self-center bg-transparent rounded-100 animation-element"
                                                        style="background-image: linear-gradient(180deg, #009fff 0%, #8316bd 100%);">
                                                        <h6
                                                            class="ld-fh-element inline-block text-white-90 relative py-5 px-15 m-0">
                                                            Dashboard</h6>
                                                    </div>
                                                </a>
                                              </li>
                                            @endif

                                            @if (Auth::user()->role == 4 || Auth::user()->role == 5 || Auth::user()->role == 6)
                                            <li
                                            style="margin-left: 10px; display: flex; justify-content: center; align-items: center;">
                                                <a href="{{ route('user.dashboard') }}"
                                                    style="text-decoration: none; color: inherit;">
                                                    <div class="ld-fancy-heading relative flex self-center bg-transparent rounded-100 animation-element"
                                                        style="background-image: linear-gradient(180deg, #009fff 0%, #8316bd 100%);">
                                                        <h6
                                                            class="ld-fh-element inline-block text-white-90 relative py-5 px-15 m-0">
                                                            Dashboard</h6>
                                                    </div>
                                                </a>
                                              </li>
                                            @endif
                                            @if ( Auth::user()->role == 2 || Auth::user()->role == 3)
                                            <li
                                            style="margin-left: 10px; display: flex; justify-content: center; align-items: center;">
                                                <a href="{{ route('organizer.dashboard') }}"
                                                    style="text-decoration: none; color: inherit;">
                                                    <div class="ld-fancy-heading relative flex self-center bg-transparent rounded-100 animation-element"
                                                        style="background-image: linear-gradient(180deg, #009fff 0%, #8316bd 100%);">
                                                        <h6
                                                            class="ld-fh-element inline-block text-white-90 relative py-5 px-15 m-0">
                                                            Dashboard</h6>
                                                    </div>
                                                </a>
                                              </li>
                                            @endif
                                        @else
                                            @if (Route::has('register'))
                                                <ul
                                                    style="list-style: none; padding: 0; display: flex; justify-content: space-between;">
                                                    <li
                                                        style="margin-right: 10px; display: flex; justify-content: center; align-items: center;">
                                                        <a href="{{ route('register') }}"
                                                            style="text-decoration: none; color: inherit;">
                                                            <div class="ld-fancy-heading relative flex self-center bg-transparent rounded-100 animation-element"
                                                                style="background-image: linear-gradient(180deg, #009fff 0%, #8316bd 100%);">
                                                                <h6
                                                                    class="ld-fh-element inline-block text-white-90 relative py-5 px-15 m-0">
                                                                    Sign Up</h6>
                                                            </div>
                                                        </a>
                                                    </li>
                                               
                                        @endif

                                        <li
                                            style="margin-left: 10px; display: flex; justify-content: center; align-items: center;">
                                            <a href="{{ route('login') }}"
                                                style="text-decoration: none; color: inherit;">
                                                <div class="ld-fancy-heading relative flex self-center bg-transparent rounded-100 animation-element"
                                                    style="background-image: linear-gradient(90deg ,  #009fff 0%, #8316bd 100%);">
                                                    <h6
                                                        class="ld-fh-element inline-block text-white-90 relative py-5 px-15 m-0">
                                                        Sign In</h6>
                                                </div>
                                            </a>
                                        </li>
                                        @endauth
                                </ul>
                                @endif



                                </ul>
                            </div>
                        </div>
                        <div class="pb-0/2em">
                            <a href="#"
                                class="btn btn-naked btn-icon-right btn-hover-reveal text-13 font-medium text-white hover:text-primery"><span
                                    data-text="Join Hub" class="btn-txt"> </span><span class="btn-icon"><i
                                        aria-hidden="true"
                                        class="lqd-icn-ess icon-ion-ios-arrow-round-forward"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="lqd-stickybar-wrap lqd-stickybar-right pointer-events-none items-end justify-center gap-10 px-10 md:hidden">
                <div class="flex flex-col transition-bg mr-65 mb-30 p-10">
                    <a class="btn btn-solid btn-custom-size btn-icon-block btn-icon-top w-60 h-60 bg-white rounded-full p-0 text-black text-26 pointer-events-auto"
                        data-lity="#modal-mini" href="#modal-mini"><span class="btn-icon text-black"><svg
                                xmlns="http://www.w3.org/2000/svg" width="26.034" height="26.039"
                                viewbox="0 0 26.034 26.039">
                                <path
                                    d="M28.987,3.775a1.025,1.025,0,0,0-1.3-.739S3.646,11.521,3.642,11.524a1.018,1.018,0,0,0-.66.892,1.036,1.036,0,0,0,.574.954l9.312,4.347,4.545-4.545c.9-.9,2.337.492,1.414,1.414l-4.545,4.545s4.341,9.3,4.349,9.317a1.071,1.071,0,0,0,.9.573,1.033,1.033,0,0,0,.943-.667L28.962,4.312a.937.937,0,0,0,.025-.537Z"
                                    transform="translate(-2.981 -2.983)"></path>
                            </svg></span></a>
                </div>
            </div>
            <div class="lqd-mobile-sec relative">
                <div class="lqd-mobile-sec-inner navbar-header flex items-stretch w-full">
                    <div class="lqd-mobile-modules-container empty"></div>
                    <button type="button"
                        class="navbar-toggle collapsed nav-trigger style-mobile flex relative items-center justify-end border-none bg-transparent p-0"
                        data-ld-toggle="true" data-bs-toggle="collapse" data-bs-target="#lqd-mobile-sec-nav"
                        aria-expanded="false"
                        data-bs-toggle-options='{"changeClassnames":  {"html": "mobile-nav-activated"} }'>
                        <span class="sr-only">Menu</span>
                        <span class="bars inline-block relative z-1"><span
                                class="bars-inner flex flex-col w-full h-full"><span class="bar inline-block"></span>
                                <span class="bar inline-block"></span>
                                <span class="bar inline-block"></span></span></span>
                    </button>
                    <a class="navbar-brand flex relative" href="/"><span class="navbar-brand-inner"><img
                                class="logo-default"
                                src="{{ asset('assets/images/demo/start-hub-x/logo/logoC.png') }}" width="90"
                                height="90"></a>
                </div>
                <div class="lqd-mobile-sec-nav w-full absolute z-10">
                    <div class="mobile-navbar-collapse navbar-collapse collapse w-full bg-dark "
                        id="lqd-mobile-sec-nav" aria-expanded="false" role="navigation">
                        <ul id="mobile-primary-nav" class="reset-ul lqd-mobile-main-nav main-nav text-white">
                            <li>
                                <a href="#features">Introduction
                                    <span class="link-icon inline-flex hide-if-empty right-icon">
                                    </span></a>
                            </li>
                            <li>
                                <a href="#commit">What's NMTC
                                </a>
                            </li>
                            <li>
                                <a href="#events">Our Program
                                    <span class="link-icon inline-flex hide-if-empty right-icon"></span></a>
                            </li>
                            <li>
                                <a href="#speakers">Our Team
                                    <span class="link-icon inline-flex hide-if-empty right-icon"></i></span></a>
                            </li>
                            <li>
                                <a href="#clients">Partners
                                    <span class="link-icon inline-flex hide-if-empty right-icon"></i></span></a>
                            </li>
                            @if (Route::has('login'))

                                        @auth
                                            @if ( Auth::user()->role == 0 || Auth::user()->role == 1)
                                            <li
                                            style="margin-left: 10px; display: flex; justify-content: center; align-items: center;">
                                                <a
                                                    href="{{ route('admin.dashboard') }}"style="text-decoration: none; color: inherit;">
                                                    <div class="ld-fancy-heading relative flex self-center bg-transparent rounded-100 animation-element"
                                                        style="background-image: linear-gradient(180deg, #009fff 0%, #8316bd 100%);">
                                                        <h6
                                                            class="ld-fh-element inline-block text-white-90 relative py-5 px-15 m-0">
                                                            Dashboard</h6>
                                                    </div>
                                                </a>
                                              </li>
                                            @endif

                                            @if (Auth::user()->role == 4 || Auth::user()->role == 5 || Auth::user()->role == 6)
                                            <li
                                            style="margin-left: 10px; display: flex; justify-content: center; align-items: center;">
                                                <a href="{{ route('user.dashboard') }}"
                                                    style="text-decoration: none; color: inherit;">
                                                    <div class="ld-fancy-heading relative flex self-center bg-transparent rounded-100 animation-element"
                                                        style="background-image: linear-gradient(180deg, #009fff 0%, #8316bd 100%);">
                                                        <h6
                                                            class="ld-fh-element inline-block text-white-90 relative py-5 px-15 m-0">
                                                            Dashboard</h6>
                                                    </div>
                                                </a>
                                              </li>
                                            @endif
                                            @if ( Auth::user()->role == 2 || Auth::user()->role == 3)
                                            <li
                                            style="margin-left: 10px; display: flex; justify-content: center; align-items: center;">
                                                <a href="{{ route('organizer.dashboard') }}"
                                                    style="text-decoration: none; color: inherit;">
                                                    <div class="ld-fancy-heading relative flex self-center bg-transparent rounded-100 animation-element"
                                                        style="background-image: linear-gradient(180deg, #009fff 0%, #8316bd 100%);">
                                                        <h6
                                                            class="ld-fh-element inline-block text-white-90 relative py-5 px-15 m-0">
                                                            Dashboard</h6>
                                                    </div>
                                                </a>
                                              </li>
                                            @endif
                                        @else
                                            @if (Route::has('register'))
                                                <ul
                                                    style="list-style: none; padding: 0; display: flex; justify-content: space-between;">
                                                    <li
                                                        style="margin-right: 10px; display: flex; justify-content: center; align-items: center;">
                                                        <a href="{{ route('register') }}"
                                                            style="text-decoration: none; color: inherit;">
                                                            <div class="ld-fancy-heading relative flex self-center bg-transparent rounded-100 animation-element"
                                                                style="background-image: linear-gradient(180deg, #009fff 0%, #8316bd 100%);">
                                                                <h6
                                                                    class="ld-fh-element inline-block text-white-90 relative py-5 px-15 m-0">
                                                                    Sign Up</h6>
                                                            </div>
                                                        </a>
                                                    </li>
                                               
                                        @endif

                                        <li
                                            style="margin-left: 10px; display: flex; justify-content: center; align-items: center;">
                                            <a href="{{ route('login') }}"
                                                style="text-decoration: none; color: inherit;">
                                                <div class="ld-fancy-heading relative flex self-center bg-transparent rounded-100 animation-element"
                                                    style="background-image: linear-gradient(90deg ,  #009fff 0%, #8316bd 100%);">
                                                    <h6
                                                        class="ld-fh-element inline-block text-white-90 relative py-5 px-15 m-0">
                                                        Sign In</h6>
                                                </div>
                                            </a>
                                        </li>
                                        @endauth
                                </ul>
                                @endif



                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <main class="content" id="lqd-site-content">
            <div id="lqd-contents-wrap">
                <section
                    class="lqd-section banner min-h-100vh flex items-stretch justify-center bg-center bg-cover bg-no-repeat px-10 top-0 sm:justify-start"
                    id="banner"
                    style="
              background-image: url({{ asset('assets/images/demo/start-hub-x/banner/bg1.jpg') }});
            ">
                    <div class="w-full min-h-100vh flex flex-col justify-center items-center py-10"
                        data-parallax="true"
                        data-parallax-options='{"ease": "linear", "start": "top top", "end": "bottom top"}'
                        data-parallax-from='{"y": "0vh", "scale": 1 }' data-parallax-to='{"y": "70vh", "scale": 1.5}'>
                        <div class="w-550 max-w-full flex flex-wrap transition-bg gap-5 p-10 mt-130 sm:w-full lg:m-0 items-center justify-center"
                            data-custom-animations="true"
                            data-ca-options='{"animationTarget": ".animation-element", "duration" : 850, "delay" : 100, "ease": "expo.out", "initValues": {"opacity" : 0, "y" : 150} , "animations": {"opacity" : 1, "y" : 0}}'>
                            <div class="ld-fancy-heading relative flex text-center max-w-full animation-element">
                                <h2 class="ld-fh-element inline-block relative ld-gradient-heading lqd-highlight-custom lqd-highlight-custom-2 bg-transparent text-80 font-bold -tracking-3/5 mb-0/2em pb-0/2em"
                                    data-inview="true" data-transition-delay="true"
                                    data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'
                                    style="
                      background-image: linear-gradient(
                        180deg,
                        #f8f8f8 0%,
                        #f1f1f1 100%
                      );
                    ">
                                    <span>National Microsoft Tech</span>
                                    <mark class="lqd-highlight"><span class="lqd-highlight-txt">Camp</span>
                                        <span class="lqd-highlight-inner text-white left-0 -bottom-0/2em"><svg
                                                class="lqd-highlight-pen" width="51" height="51"
                                                viewbox="0 0 51 51" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M36.204 1.044C32.02 2.814 5.66 31.155 4.514 35.116c-.632 2.182-1.75 5.516-2.483 7.409-3.024 7.805-1.54 9.29 6.265 6.265 1.893-.733 5.227-1.848 7.41-2.477 3.834-1.105 4.473-1.647 19.175-16.27 0 0 10.63-10.546 15.21-15.125C53 8.997 42.021-1.418 36.203 1.044Zm7.263 5.369c3.56 3.28 4.114 4.749 2.643 6.995l-1.115 1.7-4.586-4.543-4.585-4.544 1.42-1.157C39.311 3.18 40.2 3.4 43.467 6.413ZM37.863 13.3l4.266 4.304-11.547 11.561-11.547 11.561-4.48-4.446-4.481-4.447 11.404-11.418c6.273-6.28 11.566-11.42 11.762-11.42.197 0 2.277 1.938 4.623 4.305ZM12.016 39.03l3.54 3.584-3.562 1.098-5.316 1.641c-1.665.516-1.727.455-1.211-1.21l1.614-5.226c1.289-4.177.685-4.191 4.935.113Z">
                                                </path>
                                            </svg>
                                            <svg class="lqd-highlight-brush-svg lqd-highlight-brush-svg-2"
                                                width="233" height="13" viewbox="0 0 233 13"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                preserveaspectratio="none">
                                                <path
                                                    d="m.624 9.414-.312-2.48C0 4.454.001 4.454.002 4.454l.035-.005.102-.013.398-.047c.351-.042.872-.102 1.557-.179 1.37-.152 3.401-.368 6.05-.622C13.44 3.081 21.212 2.42 31.13 1.804 50.966.572 79.394-.48 113.797.24c34.387.717 63.927 2.663 84.874 4.429a1048.61 1048.61 0 0 1 24.513 2.34 641.605 641.605 0 0 1 8.243.944l.432.054.149.02-.318 2.479-.319 2.48-.137-.018c-.094-.012-.234-.03-.421-.052a634.593 634.593 0 0 0-8.167-.936 1043.26 1043.26 0 0 0-24.395-2.329c-20.864-1.76-50.296-3.697-84.558-4.413-34.246-.714-62.535.332-82.253 1.556-9.859.612-17.574 1.269-22.82 1.772-2.622.251-4.627.464-5.973.614a213.493 213.493 0 0 0-1.901.22l-.094.01-.028.004Z">
                                                </path>
                                            </svg></span></mark>
                                </h2>
                            </div>
                            <div
                                class="ld-fancy-heading relative flex text-center animation-element text-center justify-center items-center">
                                <p
                                    class="ld-fh-element inline-block relative mb-0/5em text-18 text-center font-medium leading-22 text-white-90">
                                    “Strong, United, Working until we fall”
                                </p>
                            </div>
                            <div class="w-full mt-20">
                                <div
                                    class="ld-sf relative ld-sf--input-bordered ld-sf--button-solid ld-sf--size-sm ld-sf--round ld-sf--border-none ld-sf--input-shadow ld-sf--button-show ld-sf--button-inline animation-element">
                                    <div class="ld_sf_response"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="module-sections relative flex flex-col items-center gap-60 pt-100 pb-50 px-10 bg-top-center bg-cover bg-no-repeat transition-all shadow-top lg:border-radius-0 lg:py-0"
                    style="
              background-image: url({{ asset('assets/images/demo/start-hub-x/bg/page-bg.svg') }});
            ">
                    <!-- <section
              class="lqd-section commit flex flex-row flex-grow-0 flex-shrink-1 items-center justify-center transition-all rounded-30 bg-dark px-30 lg:flex-col"
              style="justify-content: center"
            >
              <div class="flex items-center justify-center">
                <div id="timer" class="flex-wrap d-flex justify-content-center">
                  <div
                    id="days"
                    class="align-items-center flex-column bg-dark d-flex justify-content-center"
                  ></div>
                  <div
                    id="hours"
                    class="align-items-center flex-column d-flex justify-content-center"
                  ></div>
                  <div
                    id="minutes"
                    class="align-items-center flex-column d-flex justify-content-center"
                  ></div>
                  <div
                    id="seconds"
                    class="align-items-center flex-column d-flex justify-content-center"
                  ></div>
                </div>
              </div>
            </section> -->
                    <section
                        class="lqd-section features flex flex-col items-center justify-center transition-all rounded-30 bg-dark py-40"
                        id="features">
                        <div class="max-w-full absolute top-80 z-0 ltr-left-0">
                            <div id="lqd-lottie-features" class="lqd-lottie"></div>
                        </div>
                        <div class="w-full relative flex flex-col items-center justify-center gap-20 p-10 border-bottom border-white-10"
                            data-custom-animations="true"
                            data-ca-options='{"animationTarget": "figure, h2, .btn", "duration" : 850, "startDelay" : 300, "delay" : 75, "ease": "expo.out", "initValues": {"opacity" : 0, "y" : 150} , "animations": {"opacity" : 1, "y" : 0}}'>
                            <div class="lqd-imggrp-single block relative" data-float="ease">
                            </div>
                            <div class="ld-fancy-heading relative w-80percent max-w-full text-center sm:w-full">
                                <h2 class="ld-fh-element inline-block relative ld-gradient-heading bg-transparent mb-0/2em pb-0/2em"
                                    style="background-image: linear-gradient(180deg, #f0f0f0 0%, #f4f4f4 100%); display: flex; justify-content: center; align-items: center;">
                                    Welcome to the biggest IT camp in Tunisia
                                </h2>
                            </div>
                            <div class="hidden sm:block">
                                <a href="#"
                                    class="btn btn-solid btn-icon-left mb-20 bg-transparent rounded-full text-12 font-bold leading-1em text-slate-700 module-btn-sm"
                                    style="
                    background-image: linear-gradient(
                      145deg,
                      #98c8ff 0%,
                      #e5fff6 100%
                    );
                  ">
                                    <span data-text="available in <br> countries" class="btn-txt">Coming Sonner<br />
                                        than you think </span><span class="btn-icon text-20 mr-10"><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20.486" height="20.486"
                                            viewbox="0 0 20.486 20.486">
                                            <defs>
                                                <clippath id="a-1">
                                                    <path d="M0-682.665H20.486v20.486H0Z"></path>
                                                </clippath>
                                            </defs>
                                            <g transform="translate(0 682.665)" clip-path="url(#a)">
                                                <g transform="translate(0.6 -682.065)">
                                                    <path
                                                        d="M-623.38-311.69a9.671,9.671,0,0,1-9.643,9.643,9.671,9.671,0,0,1-9.643-9.643,9.671,9.671,0,0,1,9.643-9.643A9.671,9.671,0,0,1-623.38-311.69Z"
                                                        transform="translate(642.665 321.333)" fill="none"
                                                        stroke="currentColor" stroke-miterlimit="10"
                                                        stroke-width="1"></path>
                                                </g>
                                                <g transform="translate(5.442 -682.065)">
                                                    <path
                                                        d="M-310.4-311.69c0,5.3-2.15,9.643-4.8,9.643s-4.8-4.339-4.8-9.643,2.15-9.643,4.8-9.643S-310.4-316.993-310.4-311.69Z"
                                                        transform="translate(319.999 321.333)" fill="none"
                                                        stroke="currentColor" stroke-miterlimit="10"
                                                        stroke-width="1"></path>
                                                </g>
                                                <g transform="translate(10.243 -682.065)">
                                                    <path d="M0,0V19.285" fill="none" stroke="currentColor"
                                                        stroke-miterlimit="10" stroke-width="1"></path>
                                                </g>
                                                <g transform="translate(0.6 -672.422)">
                                                    <path d="M0,0H19.285" fill="none" stroke="currentColor"
                                                        stroke-miterlimit="10" stroke-width="1"></path>
                                                </g>
                                                <g transform="translate(1.925 -667.621)">
                                                    <path d="M-537.743,0h-16.636" transform="translate(554.379)"
                                                        fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                        stroke-width="1"></path>
                                                </g>
                                                <g transform="translate(1.925 -677.263)">
                                                    <path d="M0,0H16.636" fill="none" stroke="currentColor"
                                                        stroke-miterlimit="10" stroke-width="1"></path>
                                                </g>
                                            </g>
                                        </svg></span></a>
                            </div>
                            <div class="module-arrow absolute top-40 lg:hidden" data-custom-animations="true"
                                data-ca-options='{"animationTarget": "figure", "startDelay" : 2000, "ease": "expo.inOut", "initValues": {"x": "100px", "y": "50px", "scaleX" : 0, "scaleY" : 0, "opacity" : 0} , "animations": {"x": "0px", "y": "0px", "scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'>
                                <div class="lqd-imggrp-single block relative">
                                    <div
                                        class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                        <figure class="w-full relative">
                                            <img width="106" height="110"
                                                src="{{ asset('assets/images/demo/start-hub-x/features/Arrow-1.svg') }}"
                                                alt="features" />
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="module-btn absolute top-50 sm:hidden" data-custom-animations="true"
                                data-ca-options='{"animationTarget": ".btn", "startDelay" : 3000, "ease": "power4.out", "initValues": {"opacity" : 0} , "animations": {"opacity" : 1}}'>
                                <a href="#"
                                    class="btn btn-solid btn-icon-left bg-transparent rounded-full text-12 font-bold leading-1em text-slate-700 module-btn-sm"
                                    style="
                    background-image: linear-gradient(
                      145deg,
                      #98c8ff 0%,
                      #e5fff6 100%
                    );
                  "><span
                                        data-text="available in <br> countries" class="btn-txt">Coming
                                        Sooner<br />Than you think </span><span class="btn-icon text-20 mr-10"><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20.486" height="20.486"
                                            viewbox="0 0 20.486 20.486">
                                            <defs>
                                                <clippath id="a">
                                                    <path d="M0-682.665H20.486v20.486H0Z"></path>
                                                </clippath>
                                            </defs>
                                            <g transform="translate(0 682.665)" clip-path="url(#a)">
                                                <g transform="translate(0.6 -682.065)">
                                                    <path
                                                        d="M-623.38-311.69a9.671,9.671,0,0,1-9.643,9.643,9.671,9.671,0,0,1-9.643-9.643,9.671,9.671,0,0,1,9.643-9.643A9.671,9.671,0,0,1-623.38-311.69Z"
                                                        transform="translate(642.665 321.333)" fill="none"
                                                        stroke="currentColor" stroke-miterlimit="10"
                                                        stroke-width="1"></path>
                                                </g>
                                                <g transform="translate(5.442 -682.065)">
                                                    <path
                                                        d="M-310.4-311.69c0,5.3-2.15,9.643-4.8,9.643s-4.8-4.339-4.8-9.643,2.15-9.643,4.8-9.643S-310.4-316.993-310.4-311.69Z"
                                                        transform="translate(319.999 321.333)" fill="none"
                                                        stroke="currentColor" stroke-miterlimit="10"
                                                        stroke-width="1"></path>
                                                </g>
                                                <g transform="translate(10.243 -682.065)">
                                                    <path d="M0,0V19.285" fill="none" stroke="currentColor"
                                                        stroke-miterlimit="10" stroke-width="1"></path>
                                                </g>
                                                <g transform="translate(0.6 -672.422)">
                                                    <path d="M0,0H19.285" fill="none" stroke="currentColor"
                                                        stroke-miterlimit="10" stroke-width="1"></path>
                                                </g>
                                                <g transform="translate(1.925 -667.621)">
                                                    <path d="M-537.743,0h-16.636" transform="translate(554.379)"
                                                        fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                        stroke-width="1"></path>
                                                </g>
                                                <g transform="translate(1.925 -677.263)">
                                                    <path d="M0,0H16.636" fill="none" stroke="currentColor"
                                                        stroke-miterlimit="10" stroke-width="1"></path>
                                                </g>
                                            </g>
                                        </svg></span></a>
                            </div>
                        </div>
                        <div class="flex flex-wrap justify-around p-10" data-custom-animations="true"
                            data-ca-options='{"animationTarget": "h6, .ico')}}nbox, .animation-element", "duration" :
                            750, "startDelay" : 300, "delay" : 75, "ease" : "expo.out" , "initValues" : {"y": "30px"
                            , "scaleX" : 0.8, "scaleY" : 0.8, "opacity" : 0} , "animations" : {"y": "0px" , "scaleX" :
                            1, "scaleY" : 1, "opacity" : 1}}'>
                            <div class="w-90percent flex flex-wrap p-10 sm:w-full">
                                <div class="ld-fancy-heading relative flex"></div>
                                <div class="iconbox flex flex-grow-1 relative iconbox-heading-arrow-onhover mb-30">
                                    <div class="contents">
                                        <h3 class="lqd-iconbox-heading text-center text-white-80 font-medium text-14 mb-0/7em leading-1em"
                                            style="line-height: 25px">
                                            <span>NMTC is a national event organized in collaboration
                                                between all the Microsoft clubs and MLSA community in
                                                Tunisia.This event will take place at one of Tunisia's
                                                most distinguished hotels, Orient Palace in Sousse.
                                                Over the course of three days, the event will feature
                                                top-notch conferences, workshops, and a competition
                                                designed to enhance the digital thinking and soft
                                                skills of our participants and visitors.</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section
                        class="lqd-section commit flex flex-row flex-grow-0 flex-shrink-1 items-center transition-all rounded-30 bg-dark py-40 px-30 lg:flex-col"
                        id="commit" data-custom-animations="true"
                        data-ca-options='{" addChildTimelines": false, "animationTarget": ".animation-element", "duration" : 850, "startDelay" : 300, "delay" : 75, "ease": "expo.out", "initValues": {"y": "30px", "scaleX" : 0.8, "scaleY" : 0.8, "opacity" : 0} , "animations": {"y": "0px", "scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'>
                        <div class="w-80percent flex justify-center rounded-inherit lg:w-full animation-element">
                            <div class="lqd-imggrp-single block relative" data-shadow-style="1" data-inview="true"
                                data-animate-shadow="true">
                                <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                    <figure class="w-full relative">
                                        <img class="rounded-30" width="820" height="756"
                                            style="max-width: 122%"
                                            src="{{ asset('assets/images/demo/start-hub-x/commit/v2-images-1.jpg') }}"
                                            alt="commit" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex flex-col p-10 mr-10 ml-90 transition-bg text-start lg:text-center lg:m-0 animation-element">
                            <div class="ld-fancy-heading relative flex self-start bg-transparent rounded-100 lg:self-center"
                                style="
                    background-image: linear-gradient(
                      90deg,
                      #009fff 0%,
                      #8316bd 100%
         
                    );
                  ">
                                <h6 class="ld-fh-element inline-block text-white-90 relative py-5 px-15 m-0">
                                    What's NMTC
                                </h6>
                            </div>
                            <div class="spacer w-full">
                                <div class="w-full h-20"></div>
                            </div>
                            <div class="ld-fancy-heading relative text-start lg:text-center">
                                <h2 class="ld-fh-element inline-block relative ld-gradient-heading bg-transparent mb-0/2em pb-0/2em"
                                    style="
                      background-image: linear-gradient(
                        180deg,
                        #f6f6f6 0%,
                        #f8fbff 100%
                      );
                    ">
                                    Welcome to the biggest IT camp in Tunisia
                                </h2>
                            </div>
                            <div class="ld-fancy-heading relative lg:text-center text-center">
                                <p
                                    class="ld-fh-element inline-block relative mb-0/5em text-17 font-medium leading-22 text-white-70">
                                    Tunisia's NMTC at <br>
                                    <span style="background-image: linear-gradient(90deg, #009fff 0%, #8316bd 100%);">
                                        "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"
                                    </span>
                                    <br>in Sousse, organized by Microsoft clubs and MLSA, <br>
                                    aims to enhance digital thinking and soft skills with conferences, workshops, and
                                    competitions.
                                </p>
                            </div>
                        </div>
                    </section>


                    <section
                        class="lqd-section features flex flex-col items-center justify-center transition-all rounded-30 bg-dark py-40"
                        id="features">
                        <div class="max-w-full absolute top-80 z-0 ltr-left-0">
                            <div id="lqd-lottie-features" class="lqd-lottie"></div>
                        </div>
                        <div class="w-full relative flex flex-col items-center justify-center gap-20 p-10 border-bottom border-white-10"
                            data-custom-animations="true"
                            data-ca-options='{"animationTarget": "figure, h2, .btn", "duration" : 850, "startDelay" : 300, "delay" : 75, "ease": "expo.out", "initValues": {"opacity" : 0, "y" : 150} , "animations": {"opacity" : 1, "y" : 0}}'>
                            <div class="lqd-imggrp-single block relative" data-float="ease"></div>
                            <div class="ld-fancy-heading relative w-80percent max-w-full text-center sm:w-full">
                                <h2 class="ld-fh-element inline-block relative ld-gradient-heading bg-transparent mb-0/2em pb-0/2em"
                                    style="
                      background-image: linear-gradient(
                        180deg,
                        #f0f0f0 0%,
                        #ffffff 100%
                      );
                    ">
                                    So why should you join our Event?
                                </h2>
                            </div>
                            <div class="hidden sm:block">
                                <a href="#"
                                    class="btn btn-solid btn-icon-left mb-20 bg-transparent rounded-full text-12 font-bold leading-1em text-slate-700 module-btn-sm"
                                    style="
                      background-image: linear-gradient(
                        145deg,
                        #98c8ff 0%,
                        #e5fff6 100%
                      );
                    "><span
                                        data-text="available in <br> countries" class="btn-txt">Date <br />19-20-21
                                        December 2023</span><span class="btn-icon text-20 mr-10"><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20.486" height="20.486"
                                            viewbox="0 0 20.486 20.486">
                                            <defs>
                                                <clippath id="a-1">
                                                    <path d="M0-682.665H20.486v20.486H0Z"></path>
                                                </clippath>
                                            </defs>
                                            <g transform="translate(0 682.665)" clip-path="url(#a)">
                                                <g transform="translate(0.6 -682.065)">
                                                    <path
                                                        d="M-623.38-311.69a9.671,9.671,0,0,1-9.643,9.643,9.671,9.671,0,0,1-9.643-9.643,9.671,9.671,0,0,1,9.643-9.643A9.671,9.671,0,0,1-623.38-311.69Z"
                                                        transform="translate(642.665 321.333)" fill="none"
                                                        stroke="currentColor" stroke-miterlimit="10"
                                                        stroke-width="1"></path>
                                                </g>
                                                <g transform="translate(5.442 -682.065)">
                                                    <path
                                                        d="M-310.4-311.69c0,5.3-2.15,9.643-4.8,9.643s-4.8-4.339-4.8-9.643,2.15-9.643,4.8-9.643S-310.4-316.993-310.4-311.69Z"
                                                        transform="translate(319.999 321.333)" fill="none"
                                                        stroke="currentColor" stroke-miterlimit="10"
                                                        stroke-width="1"></path>
                                                </g>
                                                <g transform="translate(10.243 -682.065)">
                                                    <path d="M0,0V19.285" fill="none" stroke="currentColor"
                                                        stroke-miterlimit="10" stroke-width="1"></path>
                                                </g>
                                                <g transform="translate(0.6 -672.422)">
                                                    <path d="M0,0H19.285" fill="none" stroke="currentColor"
                                                        stroke-miterlimit="10" stroke-width="1"></path>
                                                </g>
                                                <g transform="translate(1.925 -667.621)">
                                                    <path d="M-537.743,0h-16.636" transform="translate(554.379)"
                                                        fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                        stroke-width="1"></path>
                                                </g>
                                                <g transform="translate(1.925 -677.263)">
                                                    <path d="M0,0H16.636" fill="none" stroke="currentColor"
                                                        stroke-miterlimit="10" stroke-width="1"></path>
                                                </g>
                                            </g>
                                        </svg></span></a>
                            </div>


                        </div>
                        <div class="flex flex-wrap justify-around p-10" data-custom-animations="true"
                            data-ca-options='{"animationTarget": "h6, .ico')}}nbox, .animation-element", "duration" :
                            750, "startDelay" : 300, "delay" : 75, "ease" : "expo.out" , "initValues" : {"y": "30px"
                            , "scaleX" : 0.8, "scaleY" : 0.8, "opacity" : 0} , "animations" : {"y": "0px" , "scaleX" :
                            1, "scaleY" : 1, "opacity" : 1}}'>
                            <div class="w-40percent flex flex-wrap p-10 sm:w-full">
                                <div class="ld-fancy-heading relative flex"></div>
                                <div
                                    class="iconbox flex flex-grow-1 relative iconbox-heading-arrow-onhover mb-30 ext-left">
                                    <div class="iconbox-icon-wrap mr-25">
                                        <div class="iconbox-icon-container inline-flex text-40 text-primary">
                                            <svg class="w-1em" xmlns="http://www.w3.org/2000/svg" width="40.764"
                                                height="40.764" viewbox="0 0 40.764 40.764">
                                                <g transform="translate(-1 -1)">
                                                    <g transform="translate(16.78 16.78)">
                                                        <path
                                                            d="M33.22,42l1.6,8.019a.659.659,0,0,0,.645.528h9.679a.659.659,0,0,0,.645-.528L47.4,42Zm3.894,7.226a.658.658,0,0,1-.744-.558l-.657-4.6a.658.658,0,0,1,1.3-.186l.657,4.6a.658.658,0,0,1-.558.744Zm3.852-.651a.657.657,0,1,1-1.315,0v-4.6a.657.657,0,0,1,1.315,0Zm3.281.093a.658.658,0,0,1-1.3-.186l.657-4.6a.658.658,0,0,1,1.3.186Z"
                                                            transform="translate(-27.815 -30.823)" fill="#c4a2fc">
                                                        </path>
                                                        <path
                                                            d="M45.3,35.476A.659.659,0,0,0,44.667,35H38.761a.659.659,0,0,0-.632.476l-.8,2.811H46.1Z"
                                                            transform="translate(-29.222 -28.425)" fill="#c4a2fc">
                                                        </path>
                                                        <path
                                                            d="M37.492,25A12.492,12.492,0,1,0,49.984,37.492,12.492,12.492,0,0,0,37.492,25Zm8.377,11.435-1.6,8.019a1.977,1.977,0,0,1-1.934,1.585H32.653a1.977,1.977,0,0,1-1.934-1.586l-1.6-8.018A1.315,1.315,0,0,1,30.4,34.862h1.332l.906-3.172a1.981,1.981,0,0,1,1.9-1.431h5.906a1.981,1.981,0,0,1,1.9,1.431l.906,3.172H44.58a1.315,1.315,0,0,1,1.289,1.573Z"
                                                            transform="translate(-25 -25)" fill="#c4a2fc"></path>
                                                    </g>
                                                    <path
                                                        d="M31.9,1H2.972A1.975,1.975,0,0,0,1,2.972V24.012a1.975,1.975,0,0,0,1.972,1.972H31.9a1.975,1.975,0,0,0,1.972-1.972V2.972A1.975,1.975,0,0,0,31.9,1ZM2.315,6.26H32.559V8.89H2.315Zm.657-3.945H31.9a.658.658,0,0,1,.657.657V4.945H2.315V2.972a.658.658,0,0,1,.657-.657ZM31.9,24.669H2.972a.658.658,0,0,1-.657-.657V10.2H32.559v4.6h-9.2a.657.657,0,0,0,0,1.315h9.2v2.63H27.3a.657.657,0,1,0,0,1.315h5.26v3.945A.658.658,0,0,1,31.9,24.669Z"
                                                        fill="#151a6a"></path>
                                                    <path
                                                        d="M15.547,22H7.657A.657.657,0,0,0,7,22.657V26.6a.657.657,0,0,0,.657.657h7.89A.657.657,0,0,0,16.2,26.6V22.657A.657.657,0,0,0,15.547,22Zm-.657,3.945H8.315v-2.63H14.89Z"
                                                        transform="translate(-2.055 -7.193)" fill="#151a6a"></path>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="contents">
                                        <h3
                                            class="lqd-iconbox-heading text-white-90 text-white-90 text-16 mb-0/7em leading-1em">
                                            <span>Worldwide Speakers</span>

                                        </h3>
                                        <p class="mb-0 text-12 font-medium leading-16 text-white-80">
                                            Numerous national and international guests of honour
                                            will be present as speakers at our event and to lead our
                                            workshops
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="iconbox flex flex-grow-1 relative iconbox-heading-arrow-onhover mb-30 ext-left">
                                    <div class="iconbox-icon-wrap mr-25">
                                        <div class="iconbox-icon-container inline-flex text-40 text-primary">
                                            <svg class="w-1em" xmlns="http://www.w3.org/2000/svg" width="34.394"
                                                height="34.394" viewbox="0 0 34.394 34.394">
                                                <g transform="translate(-1 -1)">
                                                    <g transform="translate(9.876 9.876)">
                                                        <path
                                                            d="M40.3,30.65a.555.555,0,0,0-.555-.555A10.552,10.552,0,0,1,29.2,19.555a.555.555,0,1,0-1.11,0A10.552,10.552,0,0,1,17.555,30.1a.555.555,0,0,0,0,1.11A10.552,10.552,0,0,1,28.1,41.745a.555.555,0,0,0,1.11,0A10.552,10.552,0,0,1,39.745,31.2a.555.555,0,0,0,.555-.555Z"
                                                            transform="translate(-17 -17.89)" fill="#c4a2fc"></path>
                                                        <path
                                                            d="M55.321,50.883a3.332,3.332,0,0,1-3.329-3.329.555.555,0,1,0-1.109,0,3.332,3.332,0,0,1-3.328,3.329.555.555,0,1,0,0,1.109,3.332,3.332,0,0,1,3.328,3.329.555.555,0,0,0,1.109,0,3.332,3.332,0,0,1,3.329-3.329.555.555,0,1,0,0-1.11Z"
                                                            transform="translate(-30.357 -30.357)" fill="#c4a2fc">
                                                        </path>
                                                        <path
                                                            d="M47.555,21.993a3.332,3.332,0,0,1,3.329,3.329.555.555,0,1,0,1.109,0,3.332,3.332,0,0,1,3.329-3.328.555.555,0,1,0,0-1.11,3.332,3.332,0,0,1-3.329-3.329.555.555,0,1,0-1.109,0,3.332,3.332,0,0,1-3.328,3.329.555.555,0,1,0,0,1.11Z"
                                                            transform="translate(-30.357 -17)" fill="#c4a2fc"></path>
                                                    </g>
                                                    <path
                                                        d="M24.42,25.955a11.76,11.76,0,0,0-8.459-9.02,6.936,6.936,0,0,0,3.9-6.226V7.934a6.934,6.934,0,1,0-13.869,0v2.774a6.936,6.936,0,0,0,3.9,6.226,11.76,11.76,0,0,0-8.459,9.02l-.424,2.119a.555.555,0,0,0,.544.664H24.3a.555.555,0,0,0,.544-.664ZM7.1,7.934a5.822,5.822,0,1,1,11.642-.159,10.644,10.644,0,0,1-3.459-2.594.573.573,0,0,0-.833,0A10.537,10.537,0,0,1,7.1,8.737Zm0,2.774v-.86a11.642,11.642,0,0,0,7.767-3.485,11.732,11.732,0,0,0,3.883,2.628v1.717a5.825,5.825,0,0,1-11.65,0ZM2.231,27.628l.291-1.456a10.611,10.611,0,0,1,20.809,0l.291,1.456Z"
                                                        transform="translate(0 0)" fill="#151a6a"></path>
                                                    <path
                                                        d="M13.578,38.186l-2.544,2.862-1.065-1.2a.555.555,0,1,0-.829.737l1.479,1.664a.555.555,0,0,0,.829,0l2.959-3.328a.555.555,0,1,0-.829-.737Z"
                                                        transform="translate(-3.562 -16.474)" fill="#151a6a"></path>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="contents">
                                        <h3 class="lqd-iconbox-heading text-white-90 text-16 mb-0/7em leading-1em">
                                            <span>Networking</span>

                                        </h3>
                                        <p class="mb-0 text-12 font-medium leading-16 text-white-80">
                                            Our attendees are diverse, from students to startup
                                            representatives and more. It's a perfect opportunity to
                                            network and engage in discussions with individuals from
                                            various backgrounds within the IT world
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="iconbox flex flex-grow-1 relative iconbox-heading-arrow-onhover mb-30 ext-left">
                                    <div class="iconbox-icon-wrap mr-25">
                                        <div class="iconbox-icon-container inline-flex text-40 text-primary">
                                            <svg class="w-1em" xmlns="http://www.w3.org/2000/svg" width="34.394"
                                                height="34.394" viewbox="0 0 34.394 34.394">
                                                <g transform="translate(-1 -1)">
                                                    <g transform="translate(9.876 9.876)">
                                                        <path
                                                            d="M40.3,30.65a.555.555,0,0,0-.555-.555A10.552,10.552,0,0,1,29.2,19.555a.555.555,0,1,0-1.11,0A10.552,10.552,0,0,1,17.555,30.1a.555.555,0,0,0,0,1.11A10.552,10.552,0,0,1,28.1,41.745a.555.555,0,0,0,1.11,0A10.552,10.552,0,0,1,39.745,31.2a.555.555,0,0,0,.555-.555Z"
                                                            transform="translate(-17 -17.89)" fill="#c4a2fc"></path>
                                                        <path
                                                            d="M55.321,50.883a3.332,3.332,0,0,1-3.329-3.329.555.555,0,1,0-1.109,0,3.332,3.332,0,0,1-3.328,3.329.555.555,0,1,0,0,1.109,3.332,3.332,0,0,1,3.328,3.329.555.555,0,0,0,1.109,0,3.332,3.332,0,0,1,3.329-3.329.555.555,0,1,0,0-1.11Z"
                                                            transform="translate(-30.357 -30.357)" fill="#c4a2fc">
                                                        </path>
                                                        <path
                                                            d="M47.555,21.993a3.332,3.332,0,0,1,3.329,3.329.555.555,0,1,0,1.109,0,3.332,3.332,0,0,1,3.329-3.328.555.555,0,1,0,0-1.11,3.332,3.332,0,0,1-3.329-3.329.555.555,0,1,0-1.109,0,3.332,3.332,0,0,1-3.328,3.329.555.555,0,1,0,0,1.11Z"
                                                            transform="translate(-30.357 -17)" fill="#c4a2fc"></path>
                                                    </g>
                                                    <path
                                                        d="M24.42,25.955a11.76,11.76,0,0,0-8.459-9.02,6.936,6.936,0,0,0,3.9-6.226V7.934a6.934,6.934,0,1,0-13.869,0v2.774a6.936,6.936,0,0,0,3.9,6.226,11.76,11.76,0,0,0-8.459,9.02l-.424,2.119a.555.555,0,0,0,.544.664H24.3a.555.555,0,0,0,.544-.664ZM7.1,7.934a5.822,5.822,0,1,1,11.642-.159,10.644,10.644,0,0,1-3.459-2.594.573.573,0,0,0-.833,0A10.537,10.537,0,0,1,7.1,8.737Zm0,2.774v-.86a11.642,11.642,0,0,0,7.767-3.485,11.732,11.732,0,0,0,3.883,2.628v1.717a5.825,5.825,0,0,1-11.65,0ZM2.231,27.628l.291-1.456a10.611,10.611,0,0,1,20.809,0l.291,1.456Z"
                                                        transform="translate(0 0)" fill="#151a6a"></path>
                                                    <path
                                                        d="M13.578,38.186l-2.544,2.862-1.065-1.2a.555.555,0,1,0-.829.737l1.479,1.664a.555.555,0,0,0,.829,0l2.959-3.328a.555.555,0,1,0-.829-.737Z"
                                                        transform="translate(-3.562 -16.474)" fill="#151a6a"></path>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="contents">
                                        <h3 class="lqd-iconbox-heading text-white-90 text-16 mb-0/7em leading-1em">
                                            <span>Exceptional Experience</span>

                                        </h3>
                                        <p class="mb-0 text-12 font-medium leading-16 text-white-80">
                                            Whether it is the workshops, the competition or the
                                            parties, our event is here to push the limits and
                                            deliver the best of the best, promising a unique
                                            journey.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-40percent flex flex-wrap p-10 sm:w-full">
                                <div class="ld-fancy-heading relative flex self-start"></div>
                                <div class="ld-fancy-heading relative flex self-start animation-element"></div>
                                <div
                                    class="iconbox flex flex-grow-1 relative iconbox-heading-arrow-onhover mb-30 ext-left">
                                    <div class="iconbox-icon-wrap mr-25">
                                        <div class="iconbox-icon-container inline-flex text-40 text-primary">
                                            <svg class="w-1em" xmlns="http://www.w3.org/2000/svg" width="36.993"
                                                height="36.99" viewbox="0 0 36.993 36.99">
                                                <g transform="translate(-1 -1.005)">
                                                    <path
                                                        d="M33.53,21A12.53,12.53,0,1,0,46.06,33.53,12.53,12.53,0,0,0,33.53,21Zm4.785,13.094-7.928,4.324a.6.6,0,0,1-.882-.524V29.246a.6.6,0,0,1,.882-.524l7.928,4.325a.6.6,0,0,1,0,1.048Z"
                                                        transform="translate(-8.067 -8.065)" fill="#c4a2fc"></path>
                                                    <g transform="translate(1 1.005)">
                                                        <path
                                                            d="M19.205,1.241,8.578,7.315l-5.934.495A1.8,1.8,0,0,0,1,9.594v6.157a1.8,1.8,0,0,0,1.641,1.783l5.923.494,10.586,6.552a1.79,1.79,0,0,0,2.732-1.521V2.792a1.79,1.79,0,0,0-2.678-1.551ZM2.193,15.75V9.594A.6.6,0,0,1,2.74,9l5.419-.45V16.8L2.74,16.344A.6.6,0,0,1,2.193,15.75Zm18.5,7.309a.6.6,0,0,1-.91.507L9.353,17.112V8.245L19.795,2.278a.6.6,0,0,1,.895.514Z"
                                                            transform="translate(-1 -1.005)" fill="#151a6a"></path>
                                                        <path
                                                            d="M39.33,14.6a.6.6,0,0,0-.267.8,5.747,5.747,0,0,1,0,5.456.6.6,0,0,0,1.068.534,6.963,6.963,0,0,0,0-6.524A.6.6,0,0,0,39.33,14.6Z"
                                                            transform="translate(-16.327 -6.463)" fill="#151a6a">
                                                        </path>
                                                        <path
                                                            d="M45.936,11.1a.6.6,0,1,0-1.067.533,10.484,10.484,0,0,1,0,9.949.6.6,0,1,0,1.067.533,11.754,11.754,0,0,0,0-11.015Z"
                                                            transform="translate(-18.669 -4.945)" fill="#151a6a">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="contents">
                                        <h3 class="lqd-iconbox-heading text-white-90 text-16 mb-0/7em leading-1em">
                                            <span>Challenging Yourself</span>

                                        </h3>
                                        <p class="mb-0 text-12 font-medium leading-16 text-white-80">
                                            Unleash Your Potential: Join us and Challenge Yourself
                                            to Reach New Heights.
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="iconbox flex flex-grow-1 relative iconbox-heading-arrow-onhover mb-30 ext-left">
                                    <div class="iconbox-icon-wrap mr-25">
                                        <div class="iconbox-icon-container inline-flex text-40 text-primary">
                                            <svg class="w-1em" xmlns="http://www.w3.org/2000/svg" width="36.897"
                                                height="39.442" viewbox="0 0 36.897 39.442">
                                                <g transform="translate(-5 -1)">
                                                    <path
                                                        d="M37.984,34.1c-3.391-8.136-15.5-5.961-15.9,2.805a7,7,0,0,0,1.908,13.735h14a8.27,8.27,0,1,0,0-16.54Zm-2.093,6.177L30.8,45.365a.636.636,0,0,1-.9,0l-2.545-2.545a.639.639,0,0,1,.9-.9l2.093,2.1,4.638-4.644a.639.639,0,0,1,.9.9Z"
                                                        transform="translate(-4.357 -10.198)" fill="#c4a2fc"></path>
                                                    <path
                                                        d="M22.176,1H6.908A1.908,1.908,0,0,0,5,2.908V30.9a1.908,1.908,0,0,0,1.908,1.908H22.176A1.908,1.908,0,0,0,24.085,30.9V2.908A1.908,1.908,0,0,0,22.176,1ZM18.359,8.634a2.545,2.545,0,0,0-2.545,2.545v7a1.272,1.272,0,1,1-2.545,0V16.268a2.545,2.545,0,1,0-5.089,0v3.817a1.272,1.272,0,0,1-1.272,1.272H6.272V6.089h16.54v7.634h-.636A1.272,1.272,0,0,1,20.9,12.451V11.178A2.545,2.545,0,0,0,18.359,8.634Zm-12.087,14h.636a2.545,2.545,0,0,0,2.545-2.545V16.268a1.272,1.272,0,1,1,2.545,0v1.908a2.545,2.545,0,1,0,5.089,0v-7a1.272,1.272,0,1,1,2.545,0v1.272A2.545,2.545,0,0,0,22.176,15h.636V26.446H6.272ZM6.908,2.272H22.176a.636.636,0,0,1,.636.636V4.817H6.272V2.908A.636.636,0,0,1,6.908,2.272ZM22.176,31.535H6.908a.636.636,0,0,1-.636-.636V27.718h16.54V30.9A.636.636,0,0,1,22.176,31.535ZM20.9,25.174H17.087a.636.636,0,1,1,0-1.272H20.9a.636.636,0,1,1,0,1.272Zm0-2.545H18.359a.636.636,0,0,1,0-1.272H20.9a.636.636,0,1,1,0,1.272ZM12,9.906H9.453a.636.636,0,1,1,0-1.272H12a.636.636,0,0,1,0,1.272Zm5.089,20.357H12a.636.636,0,0,1,0-1.272h5.089a.636.636,0,0,1,0,1.272Z"
                                                        transform="translate(0)" fill="#151a6a"></path>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="contents">
                                        <h3 class="lqd-iconbox-heading text-white-90 text-16 mb-0/7em leading-1em">
                                            <span>Certification</span>

                                        </h3>
                                        <p class="mb-0 text-12 font-medium leading-16 text-white-80">
                                            Excel in Your Field: Achieve Mastery and Get Certified
                                            in Multiple Topics.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- <section
              class="lqd-section manage-data flex flex-grow-0 flex-shrink-1 items-center transition-all rounded-30   bg-dark py-40 px-60 lg:flex-col-reverse"
              id="manage-data"
              data-custom-animations="true"
              data-ca-options='{"animationTarget": ".animation-element", "duration" : 850, "startDelay" : 300, "delay" : 100, "ease": "expo.out", "initValues": {"y": "30px", "scaleX" : 0.8, "scaleY" : 0.8, "opacity" : 0} , "animations": {"y": "0px", "scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'
            >
              <div
                class="w-50percent relative flex flex-col p-10 lg:w-full lg:text-center bg-top-left bg-cover"
                style="
                  background-image: url({{ asset('assets/images/demo/start-hub-x/manage-data/lines.jpg') }});
                "
              >
                <div
                  class="ld-fancy-heading relative flex self-start bg-transparent rounded-100 lg:self-center animation-element"
                  style="
                    background-image: linear-gradient(
                      90deg,
                      #e3c4e9 0%,
                      #eaedfb 100%
                    );
                  "
                >
                  <h6
                    class="ld-fh-element inline-block relative py-5 px-15 m-0"
                  >
                    Intelligent Assistant • WYSIWYG
                  </h6>
                </div>
                <div class="spacer w-full animation-element">
                  <div class="w-full h-30"></div>
                </div>
                <div
                  class="ld-fancy-heading relative flex text-start mr-30percent lg:mr-0 lg:self-center lg:text-center animation-element"
                >
                  <h2
                    class="ld-fh-element inline-block relative ld-gradient-heading bg-transparent mb-0/2em pb-0/2em"
                    style="
                      background-image: linear-gradient(
                        180deg,
                        #7f5bc4 0%,
                        #60a3e6 100%
                      );
                    "
                  >
                    Manage your data.
                  </h2>
                </div>
                <div class="max-w-full absolute top-55 module-emoji lg:hidden">
                  <div class="ld-fancy-heading relative animation-element">
                    <span
                      class="ld-fh-element inline-block relative m-0 text-52"
                      >🤩</span
                    >
                  </div>
                </div>
                <div
                  class="ld-fancy-heading relative mr-25percent lg:m-0 lg:self-center animation-element"
                >
                  <p
                    class="ld-fh-element inline-block relative mb-0/5em text-17 font-medium leading-22 text-white-70"
                  >
                    Advanced algorithms and machine learning models can analyze
                    large data sets and provide you with actionable insights.
                  </p>
                </div>
                <div
                  class="w-full flex flex-row flex-wrap mt-40 gap-15 lg:justify-center"
                >
                  <div
                    class="ld-fancy-heading relative flex self-start animation-element"
                  >
                    <span
                      class="ld-fh-element inline-block relative text-12 font-medium m-0 py-5 px-15 text-black bg-gray-200 rounded-6"
                      >Analytics</span
                    >
                  </div>
                  <div
                    class="ld-fancy-heading relative flex self-start animation-element"
                  >
                    <span
                      class="ld-fh-element inline-block relative text-12 font-medium m-0 py-5 px-15 text-black bg-gray-200 rounded-6"
                      >Balance</span
                    >
                  </div>
                  <div
                    class="ld-fancy-heading relative flex self-start animation-element"
                  >
                    <span
                      class="ld-fh-element inline-block relative text-12 font-medium m-0 py-5 px-15 text-black bg-gray-200 rounded-6"
                      >User Access</span
                    >
                  </div>
                </div>
              </div>
              <div
                class="relative flex justify-center items-center rounded-20 overflow-auto module-video animation-element"
              >
                <div
                  class="background-video-container w-full h-full absolute flex justify-center items-center top-0 left-0 overflow-hidden rounded-20 z-0 transition-opacity pointer-events-none sm:hidden"
                >
                  <video
                    class="background-video-hosted html5-video max-w-full absolute rounded-20"
                    src="{{ asset('assets/videos/start-hub-x/manage-data/sticky.mp4') }}"
                    height="370"
                    autoplay=""
                    muted=""
                    playsinline=""
                    loop=""
                  ></video>
                </div>
              </div>
            </section> -->
                    <section
                        class="lqd-section throwable flex flex-col flex-grow-0 flex-shrink-1 items-center transition-all rounded-30 bg-dark pt-40"
                        id="throwable" data-custom-animations="true"
                        data-ca-options='{"animationTarget": ".animation-element", "duration" : 850, "startDelay" : 300, "delay" : 75, "ease": "expo.out", "initValues": {"y": "40px", "scaleX" : 0.8, "scaleY" : 0.8, "opacity" : 0} , "animations": {"y": "0px", "scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'>
                        <div
                            class="w-500 max-w-full relative flex flex-col items-center justify-center text-center transition-bg p-10">
                            <div class="ld-fancy-heading relative flex self-center bg-transparent rounded-100 animation-element"
                                style="
                    background-image: linear-gradient(
                      90deg,
                      #009fff 0%,
                      #8316bd 100%
                    );
                  ">
                                <h6 class="ld-fh-element inline-block text-white-90 relative py-5 px-15 m-0">
                                    Topics
                                </h6>
                            </div>
                            <div class="spacer w-full animation-element">
                                <div class="w-full h-10"></div>
                            </div>
                            <div class="ld-fancy-heading relative flex max-w-full text-center animation-element">
                                <h2 class="ld-fh-element relative ld-gradient-heading bg-transparent mb-0/2em pb-0/2em"
                                    style="
                      background-image: linear-gradient(
                        180deg,
                        #f8f8f8 0%,
                        #ffffff 100%
                      );
                    ">
                                    Our learning goals this year ?
                                </h2>
                            </div>
                            <div class="max-w-full absolute top-60 module-shape">
                                <div class="lqd-imggrp-single block relative" data-float="ease">
                                    <div
                                        class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                                        <figure class="w-full rotate-45 relative animation-element">
                                            <img class="w-80" width="80" height="80"
                                                src="{{ asset('assets/images/demo/start-hub-x/shape/like1.png') }}"
                                                alt="like" />
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="max-w-full absolute top-90 module-emoji sm:hidden">
                                <div class="ld-fancy-heading relative"></div>
                            </div>
                        </div>
                        <div
                            class="w-full flex transition-all pointer-events-none border-top border-white-10 animation-element">
                            <div class="lqd-throwable-scene relative overflow-hidden w-full h-250"
                                data-lqd-throwable-scene="true">
                                <p class="lqd-throwable-element inline-block absolute top-0 left-0 whitespace-nowrap m-0 pointer-events-auto user-select-none"
                                    data-lqd-throwable-el="">
                                    <span
                                        class="lqd-throwable-element-rot inline-block rounded-100 py-0/25em px-1/5em text-18 font-medium text-white module-text-1">Natural
                                        language processing</span>
                                </p>
                                <p class="lqd-throwable-element inline-block absolute top-0 left-0 whitespace-nowrap m-0 pointer-events-auto user-select-none"
                                    data-lqd-throwable-el="">
                                    <span
                                        class="lqd-throwable-element-rot inline-block rounded-100 py-0/25em px-1/5em text-18 font-medium text-white module-text-2">Artificial
                                        Intelligence</span>
                                </p>



                                <p class="lqd-throwable-element inline-block absolute top-0 left-0 whitespace-nowrap m-0 pointer-events-auto user-select-none"
                                    data-lqd-throwable-el="">
                                    <span
                                        class="lqd-throwable-element-rot inline-block rounded-100 py-0/25em px-1/5em text-18 font-medium text-white module-text-1">Chatbots</span>
                                </p>
                                <p class="lqd-throwable-element inline-block absolute top-0 left-0 whitespace-nowrap m-0 pointer-events-auto user-select-none"
                                    data-lqd-throwable-el="">
                                    <span
                                        class="lqd-throwable-element-rot inline-block rounded-100 py-0/25em px-1/5em text-18 font-medium text-white module-text-2">Neural
                                        networks</span>
                                </p>
                                <p class="lqd-throwable-element inline-block absolute top-0 left-0 whitespace-nowrap m-0 pointer-events-auto user-select-none"
                                    data-lqd-throwable-el="">
                                    <span
                                        class="lqd-throwable-element-rot inline-block rounded-100 py-0/25em px-1/5em text-18 font-medium text-white module-text-1">Content
                                        optimization</span>
                                </p>
                                <p class="lqd-throwable-element inline-block absolute top-0 left-0 whitespace-nowrap m-0 pointer-events-auto user-select-none"
                                    data-lqd-throwable-el="">
                                    <span
                                        class="lqd-throwable-element-rot inline-block rounded-100 py-0/25em px-1/5em text-18 font-medium text-white module-text-2">Image
                                        recognition</span>
                                </p>




                                <p class="lqd-throwable-element inline-block absolute top-0 left-0 whitespace-nowrap m-0 pointer-events-auto user-select-none"
                                    data-lqd-throwable-el="">
                                    <span
                                        class="lqd-throwable-element-rot inline-block rounded-100 py-0/25em px-1/5em text-18 font-medium text-white module-text-3">Predictive
                                        analytics</span>
                                </p>
                                <p class="lqd-throwable-element inline-block absolute top-0 left-0 whitespace-nowrap m-0 pointer-events-auto user-select-none"
                                    data-lqd-throwable-el="">
                                    <span
                                        class="lqd-throwable-element-rot inline-block rounded-100 py-0/25em px-1/5em text-18 font-medium text-white module-text-4">Data
                                        mining</span>
                                </p>
                                <p class="lqd-throwable-element inline-block absolute top-0 left-0 whitespace-nowrap m-0 pointer-events-auto user-select-none"
                                    data-lqd-throwable-el="">
                                    <span
                                        class="lqd-throwable-element-rot inline-block rounded-100 py-0/25em px-1/5em text-18 font-medium text-white module-text-5">Micorosft
                                        Apps</span>
                                </p>
                                <p class="lqd-throwable-element inline-block absolute top-0 left-0 whitespace-nowrap m-0 pointer-events-auto user-select-none"
                                    data-lqd-throwable-el="">
                                    <span
                                        class="lqd-throwable-element-rot inline-block rounded-100 py-0/25em px-1/5em text-18 font-medium text-white module-text-6">Personalization</span>
                                </p>
                            </div>
                        </div>
                    </section>


                    <section class="lqd-section events pt-40 pb-70" id="events">
                        <div class="container">
                            <div class="row">
                                <div class="col col-12 mb-30">
                                    <div class="lqd-tabs lqd-tabs-style-3 lqd-tabs-nav-items-not-expanded lqd-nav-underline-"
                                        data-tabs-options='{ "trigger" : "click" }'>
                                        <nav class="lqd-tabs-nav-wrap mb-2rem">
                                            <ul class="reset-ul lqd-tabs-nav flex items-center justify-center border-white-20 link-13 uppercase font-ultrabold link-primary md:justify-between"
                                                role="tablist">
                                                <li data-controls="lqd-tab-events-item-1" role="presentation"
                                                    class="text-center">
                                                    <a href="#lqd-tab-events-item-1" class="active"
                                                        aria-expanded="false" aria-controls="lqd-tab-events-item-1"
                                                        role="tab" data-bs-toggle="tab"><span
                                                            class="iconbox items-center justify-center"><span
                                                                class="flex flex-col"><span
                                                                    class="iconbox-title h3 my-0">Day 1</span>
                                                            </span></span><span class="lqd-tabs-nav-progress"><span
                                                                class="lqd-tabs-nav-progress-inner"></span></span></a>
                                                </li>
                                                <li data-controls="lqd-tab-events-item-2" role="presentation"
                                                    class="text-center">
                                                    <a href="#lqd-tab-events-item-2" aria-expanded="false"
                                                        aria-controls="lqd-tab-events-item-2" role="tab"
                                                        data-bs-toggle="tab"><span
                                                            class="iconbox items-center justify-center"><span
                                                                class="flex flex-col"><span
                                                                    class="iconbox-title h3 my-0">Day 2</span>
                                                            </span></span><span class="lqd-tabs-nav-progress"><span
                                                                class="lqd-tabs-nav-progress-inner"></span></span></a>
                                                </li>
                                                <li data-controls="lqd-tab-events-item-3" role="presentation"
                                                    class="text-center">
                                                    <a href="#lqd-tab-events-item-3" aria-expanded="false"
                                                        aria-controls="lqd-tab-events-item-3" role="tab"
                                                        data-bs-toggle="tab"><span
                                                            class="iconbox items-center justify-center"><span
                                                                class="flex flex-col"><span
                                                                    class="iconbox-title h3 my-0">Day 3</span>
                                                            </span></span><span class="lqd-tabs-nav-progress"><span
                                                                class="lqd-tabs-nav-progress-inner"></span></span></a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <!------------------------------------->
                                        <div class="lqd-tabs-content mb-2rem pt-15">
                                            <div id="lqd-tab-events-item-1" role="tabpanel"
                                                class="lqd-tabs-pane fade active show">
                                                <div class="container p-0 module-container">
                                                    <div
                                                        class="w-full bg-dark relative flex flex-wrap bg-white rounded-100 bg-dark transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                        <div
                                                            class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                            <p
                                                                class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-white">
                                                                10:00 - 12:00
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="w-35percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                            <p
                                                                class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                                Check In
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="w-30percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center">
                                                            <!-- <p
                                  class="ld-fh-element relative m-0 text-14 text-white"
                                >
                                  Speakers
                                </p>
                                <p
                                  class="ld-fh-element relative m-0 text-17 font-bold text-white"
                                >
                                  Mary Jane, Terry Jack
                                </p> -->
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="w-full bg-dark relative flex flex-wrap bg-white rounded-100 bg-dark transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                        <div
                                                            class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                            <p
                                                                class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-white">
                                                                12:30 - 14:30
                                                            </p>
                                                            <!-- <p
                                class="ld-fh-element relative m-0 text-14 text-white"
                              >
                                Orlando
                              </p> -->
                                                        </div>
                                                        <div
                                                            class="w-35percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                            <!-- <p
                                class="ld-fh-element relative m-0 text-14 text-white"
                              >
                                Conference / Event
                              </p> -->
                                                            <p
                                                                class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                                Lunch
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="w-30percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center">
                                                            <!-- <p
                                class="ld-fh-element relative m-0 text-14 text-white"
                              >
                                Speakers
                              </p>
                              <p
                                class="ld-fh-element relative m-0 text-17 font-bold text-white"
                              >
                                Mary Jane, Terry Jack
                              </p> -->
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="w-full bg-dark relative flex flex-wrap bg-white rounded-100 bg-dark transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                        <div
                                                            class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                            <p
                                                                class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-white">
                                                                14:30 - 16:15
                                                            </p>
                                                            <!-- <p
                                  class="ld-fh-element relative m-0 text-14 text-white"
                                >
                                  Orlando
                                </p> -->
                                                        </div>
                                                        <div
                                                            class="w-35percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                            <!-- <p
                                  class="ld-fh-element relative m-0 text-14 text-white"
                                >
                                  Conference / Event
                                </p> -->
                                                            <p
                                                                class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                                Opening Ceremony
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="w-30percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center">
                                                            <!-- <p
                                  class="ld-fh-element relative m-0 text-14 text-white"
                                >
                                  Speakers
                                </p> -->
                                                            <!-- <p
                                  class="ld-fh-element relative m-0 text-17 font-bold text-white"
                                >
                                  Mary Jane, Terry Jack
                                </p> -->
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="w-full bg-dark relative flex flex-wrap bg-white rounded-100 bg-dark transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                        <div
                                                            class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                            <p
                                                                class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-white">
                                                                16:15 - 17:00
                                                            </p>
                                                            <!-- <p
                                  class="ld-fh-element relative m-0 text-14 text-white"
                                >
                                  Orlando
                                </p> -->
                                                        </div>
                                                        <div
                                                            class="w-35percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                            <!-- <p
                                  class="ld-fh-element relative m-0 text-14 text-white"
                                >
                                Break for sponsors stands
                                </p> -->
                                                            <p
                                                                class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                                Break for sponsors stands </p>
                                                        </div>
                                                        <div
                                                            class="w-30percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center">
                                                            <!-- <p
                                  class="ld-fh-element relative m-0 text-14 text-white"
                                >
                                  Speakers
                                </p> -->
                                                            <!-- <p
                                  class="ld-fh-element relative m-0 text-17 font-bold text-white"
                                >
                                  Mary Jane, Terry Jack
                                </p> -->
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="w-full bg-dark relative flex flex-wrap bg-white rounded-100 bg-dark transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                        <div
                                                            class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                            <p
                                                                class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-white">
                                                                17:00 - 19:00
                                                            </p>
                                                            <!-- <p
                                class="ld-fh-element relative m-0 text-14 text-white"
                              >
                                Orlando
                              </p> -->
                                                        </div>
                                                        <div
                                                            class="w-35percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                            <p class="ld-fh-element relative m-0 text-14 text-white">
                                                                1st Discussion Panel
                                                            </p>
                                                            <p
                                                                class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                                Marketing
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="w-40percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center">
                                                            <!-- <p
                                class="ld-fh-element relative m-0 text-14 text-white"
                              >
                                Speakers
                              </p> -->
                                                            <p
                                                                class="ld-fh-element relative m-0 text-16 font-bold text-white">
                                                                Success story included in the panel
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="w-full bg-dark relative flex flex-wrap bg-white rounded-100 bg-dark transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                        <div
                                                            class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                            <p
                                                                class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-white">
                                                                19:00 - 20:30
                                                            </p>
                                                            <!-- <p
                              class="ld-fh-element relative m-0 text-14 text-white"
                            >
                              Orlando
                            </p> -->
                                                        </div>
                                                        <div
                                                            class="w-35percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                            <!-- <p
                              class="ld-fh-element relative m-0 text-14 text-white"
                            >
                              Conference / Event
                            </p> -->
                                                            <p
                                                                class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                                Exchange forum with Sponsors
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="w-30percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center">
                                                            <!-- <p
                              class="ld-fh-element relative m-0 text-14 text-white"
                            >
                              Speakers
                            </p>
                            <p
                              class="ld-fh-element relative m-0 text-17 font-bold text-white"
                            >
                              Mary Jane, Terry Jack
                            </p> -->
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="w-full bg-dark relative flex flex-wrap bg-white rounded-100 bg-dark transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                        <div
                                                            class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                            <p
                                                                class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-white">
                                                                20:30 - 23:00
                                                            </p>
                                                            <!-- <p
                            class="ld-fh-element relative m-0 text-14 text-white"
                          >
                            Orlando
                          </p> -->
                                                        </div>
                                                        <div
                                                            class="w-35percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                            <!-- <p
                            class="ld-fh-element relative m-0 text-14 text-white"
                          >
                            Conference / Event
                          </p> -->
                                                            <p
                                                                class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                                Dinner
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="w-30percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center">
                                                            <!-- <p
                            class="ld-fh-element relative m-0 text-14 text-white"
                          >
                            Speakers
                          </p>
                          <p
                            class="ld-fh-element relative m-0 text-17 font-bold text-white"
                          >
                            Mary Jane, Terry Jack
                          </p> -->
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="w-full bg-dark relative flex flex-wrap bg-white rounded-100 bg-dark transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                        <div
                                                            class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                            <p
                                                                class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-white">
                                                                23:00 - 01:00
                                                            </p>
                                                            <!-- <p
                          class="ld-fh-element relative m-0 text-14 text-white"
                        >
                          Orlando
                        </p> -->
                                                        </div>
                                                        <div
                                                            class="w-35percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                            <!-- <p
                          class="ld-fh-element relative m-0 text-14 text-white"
                        >
                          Conference / Event
                        </p> -->
                                                            <p
                                                                class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                                1st Night Party
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="w-30percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center">
                                                            <!-- <p
                          class="ld-fh-element relative m-0 text-14 text-white"
                        >
                          Speakers
                        </p>
                        <p
                          class="ld-fh-element relative m-0 text-17 font-bold text-white"
                        >
                          Mary Jane, Terry Jack
                        </p> -->
                                                        </div>
                                                    </div>













                                                </div>
                                            </div>
                                        </div>
                                        <!---------------------------------------------------------------------------->
                                        <div id="lqd-tab-events-item-2" role="tabpanel" class="lqd-tabs-pane fade">
                                            <div class="container p-0 module-container">
                                                <div
                                                    class="w-full bg-dark relative flex flex-wrap bg-white rounded-100 bg-dark transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                    <div
                                                        class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <p
                                                            class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-white">
                                                            06:00 - 09:00
                                                        </p>
                                                        <!-- <p
                                  class="ld-fh-element relative m-0 text-14 text-white"
                                >
                                  Orlando
                                </p> -->
                                                    </div>
                                                    <div
                                                        class="w-35percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <!-- <p
                                  class="ld-fh-element relative m-0 text-14 text-white"
                                >
                                  Conference / Event
                                </p> -->
                                                        <p
                                                            class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                            Breakfast
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="w-30percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center">
                                                        <!-- <p
                                  class="ld-fh-element relative m-0 text-14 text-white"
                                >
                                  Speakers
                                </p>
                                <p
                                  class="ld-fh-element relative m-0 text-17 font-bold text-white"
                                >
                                  Mary Jane, Terry Jack
                                </p> -->
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-full bg-dark relative flex flex-wrap bg-white rounded-100 bg-dark transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                    <div
                                                        class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <p
                                                            class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-white">
                                                            09:00 - 10:45
                                                        </p>
                                                        <!-- <p
                                  class="ld-fh-element relative m-0 text-14 text-white"
                                >
                                  Orlando
                                </p> -->
                                                    </div>
                                                    <div
                                                        class="w-35percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <!-- <p
                                  class="ld-fh-element relative m-0 text-14 text-white"
                                >
                                  Conference / Event
                                </p> -->
                                                        <p
                                                            class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                            4 Workshops
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="w-30percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center">
                                                        <!-- <p
                                  class="ld-fh-element relative m-0 text-14 text-white"
                                >
                                  Speakers
                                </p> -->
                                                        <!-- <p
                                  class="ld-fh-element relative m-0 text-17 font-bold text-white"
                                >
                                  Mary Jane, Terry Jack
                                </p> -->
                                                    </div>
                                                </div>

                                                <div
                                                    class="w-full relative flex flex-wrap bg-white rounded-100 shadow-md transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                    <div
                                                        class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <p
                                                            class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-primary">
                                                            10:00 - 11:00
                                                        </p>
                                                        <p class="ld-fh-element relative m-0 text-14 text-primary">
                                                            1st Conference
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="w-45percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <!-- <p
                                  class="ld-fh-element relative m-0 text-14 text-white"
                                >
                                  Conference / Event
                                </p> -->
                                                        <p
                                                            class="ld-fh-element relative m-0 text-15 font-bold text-primary">
                                                            1-Workshop I </p>
                                                        <p
                                                            class="ld-fh-element relative m-0 text-15 font-bold text-primary">
                                                            2-Workshop II </p>
                                                        <p
                                                            class="ld-fh-element relative m-0 text-15 font-bold text-primary">
                                                            3-Workshop III </p>
                                                        <p
                                                            class="ld-fh-element relative m-0 text-15 font-bold text-primary">
                                                            4-Workshop IV </p>

                                                    </div>
                                                    <!-- <div
                                class="w-40percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center"
                              >
                                <p
                                  class="ld-fh-element relative m-0 text-14 text-primary"
                                >
                                Trainer : Rahma jlassi
                                </p>
                                <p
                                class="ld-fh-element relative m-0 text-14 text-primary"
                              >
                              Trainer : Hassen Amri
                              </p>
                              <p
                              class="ld-fh-element relative m-0 text-14 text-primary"
                            >
                            Trainer : Mortadha mannai
                            </p>
                            <p
                            class="ld-fh-element relative m-0 text-14 text-primary"
                          >
                          Trainer : Yosri kessentini
                          </p>



                              </div> -->


                                                </div>




                                                <div
                                                    class="w-full bg-dark relative flex flex-wrap bg-white rounded-100 bg-dark transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                    <div
                                                        class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <p
                                                            class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-white">
                                                            11:00 - 11:30
                                                        </p>
                                                        <!-- <p
                                class="ld-fh-element relative m-0 text-14 text-white"
                              >
                                Orlando
                              </p> -->
                                                    </div>
                                                    <div
                                                        class="w-35percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <!-- <p
                                class="ld-fh-element relative m-0 text-14 text-white"
                              >
                                Conference / Event
                              </p> -->
                                                        <p
                                                            class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                            Break
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="w-30percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center">
                                                        <!-- <p
                                class="ld-fh-element relative m-0 text-14 text-white"
                              >
                                Speakers
                              </p>
                              <p
                                class="ld-fh-element relative m-0 text-17 font-bold text-white"
                              >
                                Mary Jane, Terry Jack
                              </p> -->
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-full bg-dark relative flex flex-wrap bg-white rounded-100 bg-dark transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                    <div
                                                        class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <p
                                                            class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-white">
                                                            11:30 - 13:00
                                                        </p>
                                                        <!-- <p
                              class="ld-fh-element relative m-0 text-14 text-white"
                            >
                              Orlando
                            </p> -->
                                                    </div>
                                                    <div
                                                        class="w-35percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <!-- <p
                              class="ld-fh-element relative m-0 text-14 text-white"
                            >
                              Conference / Event
                            </p> -->
                                                        <p
                                                            class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                            4 Workshops
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="w-30percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center">
                                                        <!-- <p
                              class="ld-fh-element relative m-0 text-14 text-white"
                            >
                              Speakers
                            </p>
                            <p
                              class="ld-fh-element relative m-0 text-17 font-bold text-white"
                            >
                              Mary Jane, Terry Jack
                            </p> -->
                                                    </div>
                                                </div>


                                                <div
                                                    class="w-full relative flex flex-wrap bg-white rounded-100 shadow-md transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                    <div
                                                        class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <p
                                                            class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-primary">
                                                            11:30 - 13:00
                                                        </p>
                                                        <p class="ld-fh-element relative m-0 text-14 text-primary">
                                                            2nd Conference
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="w-45percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <!-- <p
                            class="ld-fh-element relative m-0 text-14 text-white"
                          >
                            Conference / Event
                          </p> -->
                                                        <p
                                                            class="ld-fh-element relative m-0 text-15 font-bold text-primary">
                                                            1-Workshop I </p>
                                                        <p
                                                            class="ld-fh-element relative m-0 text-15 font-bold text-primary">
                                                            2-Workshop II </p>
                                                        <p
                                                            class="ld-fh-element relative m-0 text-15 font-bold text-primary">
                                                            3-Workshop III
                                                        <p
                                                            class="ld-fh-element relative m-0 text-15 font-bold text-primary">
                                                            4-Workshop IV </p>

                                                    </div>
                                                    <!-- <div
                          class="w-40percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center"
                        >
                          <p
                            class="ld-fh-element relative m-0 text-14 text-primary"
                          >
                          Trainer :
                          </p>
                          <p
                          class="ld-fh-element relative m-0 text-14 text-primary"
                        >
                        Trainer :
                        </p>
                        <p
                        class="ld-fh-element relative m-0 text-14 text-primary"
                      >
                      Trainer : Mariem kharrat
                      </p>
                      <p
                      class="ld-fh-element relative m-0 text-14 text-primary"
                    >
                    Trainer : Yosri kessentini
                    </p>



                   
                        </div> -->
                                                </div>















                                                <div
                                                    class="w-full bg-dark relative flex flex-wrap bg-white rounded-100 bg-dark transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                    <div
                                                        class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <p
                                                            class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-white">
                                                            12:30 - 14:30
                                                        </p>
                                                        <!-- <p
                          class="ld-fh-element relative m-0 text-14 text-white"
                        >
                          Lunch
                        </p> -->
                                                    </div>
                                                    <div
                                                        class="w-35percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <!-- <p
                          class="ld-fh-element relative m-0 text-14 text-white"
                        >
                          Conference / Event
                        </p> -->
                                                        <p
                                                            class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                            Lunch
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="w-30percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center">
                                                        <!-- <p
                          class="ld-fh-element relative m-0 text-14 text-white"
                        >
                          Speakers
                        </p>
                        <p
                          class="ld-fh-element relative m-0 text-17 font-bold text-white"
                        >
                          Mary Jane, Terry Jack
                        </p> -->
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-full bg-dark relative flex flex-wrap bg-white rounded-100 bg-dark transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                    <div
                                                        class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <p
                                                            class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-white">
                                                            15:00 - 17:00
                                                        </p>
                                                        <!-- <p
                        class="ld-fh-element relative m-0 text-14 text-white"
                      >
                        Orlando
                      </p> -->
                                                    </div>
                                                    <div
                                                        class="w-35percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <p class="ld-fh-element relative m-0 text-14 text-white">
                                                            2nd Discussion Panel
                                                        </p>
                                                        <p
                                                            class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                            Finance
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="w-40percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center">
                                                        <!-- <p
                        class="ld-fh-element relative m-0 text-14 text-white"
                      >
                        Speakers
                      </p> -->
                                                        <p
                                                            class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                            Success story included in the panel
                                                        </p>
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-full bg-dark relative flex flex-wrap bg-white rounded-100 bg-dark transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                    <div
                                                        class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <p
                                                            class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-white">
                                                            17:00 - 17:30
                                                        </p>
                                                        <!-- <p
                      class="ld-fh-element relative m-0 text-14 text-white"
                    >
                      Break
                    </p> -->
                                                    </div>
                                                    <div
                                                        class="w-35percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <!-- <p
                      class="ld-fh-element relative m-0 text-14 text-white"
                    >
                      Conference / Event
                    </p> -->
                                                        <p
                                                            class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                            Break
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="w-30percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center">
                                                        <!-- <p
                      class="ld-fh-element relative m-0 text-14 text-white"
                    >
                      Speakers
                    </p>
                    <p
                      class="ld-fh-element relative m-0 text-17 font-bold text-white"
                    >
                      Mary Jane, Terry Jack
                    </p> -->
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-full bg-dark relative flex flex-wrap bg-white rounded-100 bg-dark transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                    <div
                                                        class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <p
                                                            class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-white">
                                                            17:30 - 19:30
                                                        </p>
                                                        <!-- <p
                    class="ld-fh-element relative m-0 text-14 text-white"
                  >
                    Orlando
                  </p> -->
                                                    </div>
                                                    <div
                                                        class="w-35percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <!-- <p
                    class="ld-fh-element relative m-0 text-14 text-white"
                  >
                    Conference / Event
                  </p> -->
                                                        <p
                                                            class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                            4 Workshops
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="w-30percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center">
                                                        <!-- <p
                    class="ld-fh-element relative m-0 text-14 text-white"
                  >
                    Speakers
                  </p> -->
                                                        <!-- <p
                    class="ld-fh-element relative m-0 text-17 font-bold text-white"
                  >
                    Mary Jane, Terry Jack
                  </p> -->
                                                    </div>
                                                </div>

                                                <div
                                                    class="w-full relative flex flex-wrap bg-white rounded-100 shadow-md transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                    <div
                                                        class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <p
                                                            class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-primary">
                                                            17:30 - 19:00
                                                        </p>
                                                        <p class="ld-fh-element relative m-0 text-14 text-primary">
                                                            3rd Conference
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="w-45percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <!-- <p
                  class="ld-fh-element relative m-0 text-14 text-white"
                >
                  Conference / Event
                </p> -->
                                                        <p
                                                            class="ld-fh-element relative m-0 text-15 font-bold text-primary">
                                                            1-Workshop I </p>
                                                        <p
                                                            class="ld-fh-element relative m-0 text-15 font-bold text-primary">
                                                            2-Workshop II </p>
                                                        <p
                                                            class="ld-fh-element relative m-0 text-15 font-bold text-primary">
                                                            3-Workshop III </p>
                                                        <p
                                                            class="ld-fh-element relative m-0 text-15 font-bold text-primary">
                                                            4-Workshop IV </p>

                                                    </div>
                                                    <!-- <div
                class="w-40percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center"
              >
                <p
                  class="ld-fh-element relative m-0 text-14 text-primary"
                >
                Trainer : Rahma jlassi
                </p>
                <p
                class="ld-fh-element relative m-0 text-14 text-primary"
              >
              Trainer : Bessma guesmi
              </p>
              <p
              class="ld-fh-element relative m-0 text-14 text-primary"
            >
            Trainer : Mortadha mannai
            </p>
            <p
            class="ld-fh-element relative m-0 text-14 text-primary"
          >
          Trainer : Yosri kessentini
          </p>
              </div> -->

                                                </div>



                                                <div
                                                    class="w-full bg-dark relative flex flex-wrap bg-white rounded-100 bg-dark transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                    <div
                                                        class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <p
                                                            class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-white">
                                                            19:00 - 21:30
                                                        </p>
                                                        <!-- <p
                  class="ld-fh-element relative m-0 text-14 text-white"
                >
                  Orlando
                </p> -->
                                                    </div>
                                                    <div
                                                        class="w-35percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <!-- <p
                  class="ld-fh-element relative m-0 text-14 text-white"
                >
                  Conference / Event
                </p> -->
                                                        <p
                                                            class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                            Dinner
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="w-30percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center">
                                                        <!-- <p
                  class="ld-fh-element relative m-0 text-14 text-white"
                >
                  Speakers
                </p> -->
                                                        <!-- <p
                  class="ld-fh-element relative m-0 text-17 font-bold text-white"
                >
                  Mary Jane, Terry Jack
                </p> -->
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-full bg-dark relative flex flex-wrap bg-white rounded-100 bg-dark transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                    <div
                                                        class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <p
                                                            class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-white">
                                                            19:30 - 22:00
                                                        </p>
                                                        <!-- <p
                class="ld-fh-element relative m-0 text-14 text-white"
              >
                Orlando
              </p> -->
                                                    </div>
                                                    <div
                                                        class="w-35percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <!-- <p
                class="ld-fh-element relative m-0 text-14 text-white"
              >
                Conference / Event
              </p> -->
                                                        <p
                                                            class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                            Games and Having Fun
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="w-30percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center">
                                                        <!-- <p
                class="ld-fh-element relative m-0 text-14 text-white"
              >
                Speakers
              </p> -->
                                                        <!-- <p
                class="ld-fh-element relative m-0 text-17 font-bold text-white"
              >
                Mary Jane, Terry Jack
              </p> -->
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-full bg-dark relative flex flex-wrap bg-white rounded-100 bg-dark transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                    <div
                                                        class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <p
                                                            class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-white">
                                                            23:00 - 02:00
                                                        </p>
                                                        <!-- <p
              class="ld-fh-element relative m-0 text-14 text-white"
            >
              Orlando
            </p> -->
                                                    </div>
                                                    <div
                                                        class="w-35percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                        <!-- <p
              class="ld-fh-element relative m-0 text-14 text-white"
            >
              Conference / Event
            </p> -->
                                                        <p
                                                            class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                            2nd Night Party
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="w-30percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center">
                                                        <!-- <p
              class="ld-fh-element relative m-0 text-14 text-white"
            >
              Speakers
            </p> -->
                                                        <!-- <p
              class="ld-fh-element relative m-0 text-17 font-bold text-white"
            >
              Mary Jane, Terry Jack
            </p> -->
                                                    </div>
                                                </div>
















                                            </div>
                                        </div>
                                    </div>

                                    <!----------------------------------------------------------------------------->
                                    <div id="lqd-tab-events-item-3" role="tabpanel" class="lqd-tabs-pane fade">
                                        <div class="container p-0 module-container">
                                            <div
                                                class="w-full bg-dark relative flex flex-wrap bg-white rounded-100 bg-dark transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                <div
                                                    class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                    <p
                                                        class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-white">
                                                        06:00 - 09:15
                                                    </p>
                                                    <!-- <p
                                  class="ld-fh-element relative m-0 text-14 text-white"
                                >
                                  Orlando
                                </p> -->
                                                </div>
                                                <div
                                                    class="w-35percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                    <!-- <p
                                  class="ld-fh-element relative m-0 text-14 text-white"
                                >
                                  Conference / Event
                                </p> -->
                                                    <p
                                                        class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                        Breakfast
                                                    </p>
                                                </div>
                                                <div
                                                    class="w-30percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center">
                                                    <!-- <p
                                  class="ld-fh-element relative m-0 text-14 text-white"
                                >
                                  Speakers
                                </p>
                                <p
                                  class="ld-fh-element relative m-0 text-17 font-bold text-white"
                                >
                                  Mary Jane, Terry Jack
                                </p> -->
                                                </div>
                                                <!-- <div
                                class="w-20percent flex flex-col items-center justify-center py-25 md:w-25percent sm:w-full"
                              >
                                <a
                                  href="#contact-modal"
                                  class="button btn btn-solid btn-md btn-hover-txt-switch-change btn-hover-txt-switch btn-hover-txt-switch-y btn-md btn-has-label bg-slate-700 rounded-100 text-13 uppercase leading-1/3em tracking-1 text-white font-bold hover:bg-secondary hover:text-primary"
                                  data-lity="#contact-modal"
                                  ><span
                                    class="btn-txt"
                                    data-text="20 seats left"
                                    data-split-text="true"
                                    data-split-options='{ "type": "chars, words" }'
                                    >Get a ticket</span
                                  ></a
                                >
                              </div> -->
                                            </div>
                                            <div
                                                class="w-full bg-dark relative flex flex-wrap bg-white rounded-100 bg-dark transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                <div
                                                    class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                    <p
                                                        class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-white">
                                                        09:45 - 10:45
                                                    </p>
                                                    <!-- <p
                                class="ld-fh-element relative m-0 text-14 text-white"
                              >
                                Orlando
                              </p> -->
                                                </div>
                                                <div
                                                    class="w-35percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                    <!-- <p
                                class="ld-fh-element relative m-0 text-14 text-white"
                              >
                                Conference / Event
                              </p> -->
                                                    <p
                                                        class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                        4 Workshops
                                                    </p>
                                                </div>
                                                <div
                                                    class="w-30percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center">
                                                    <!-- <p
                                class="ld-fh-element relative m-0 text-14 text-white"
                              >
                                Speakers
                              </p> -->
                                                    <!-- <p
                                class="ld-fh-element relative m-0 text-17 font-bold text-white"
                              >
                                Mary Jane, Terry Jack
                              </p> -->
                                                </div>
                                            </div>

                                            <div
                                                class="w-full relative flex flex-wrap bg-white rounded-100 shadow-md transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                <div
                                                    class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                    <p
                                                        class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-primary">
                                                        09:00 - 10:45
                                                    </p>
                                                    <p class="ld-fh-element relative m-0 text-13 text-primary">
                                                        Last Conference
                                                    </p>
                                                </div>
                                                <div
                                                    class="w-45percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                    <!-- <p
                              class="ld-fh-element relative m-0 text-14 text-white"
                            >
                              Conference / Event
                            </p> -->
                                                    <p
                                                        class="ld-fh-element relative m-0 text-15 font-bold text-primary">
                                                        1-Workshop I </p>
                                                    <p
                                                        class="ld-fh-element relative m-0 text-15 font-bold text-primary">
                                                        2-Workshop II </p>
                                                    <p
                                                        class="ld-fh-element relative m-0 text-15 font-bold text-primary">
                                                        3-workshop III </p>
                                                    <p
                                                        class="ld-fh-element relative m-0 text-15 font-bold text-primary">
                                                        4-Workshop IV </p>

                                                </div>
                                                <!-- <div
                            class="w-40percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center"
                          >
                            <p
                              class="ld-fh-element relative m-0 text-14 text-primary"
                            >
                            Trainer :
                            </p>
                            <p
                            class="ld-fh-element relative m-0 text-14 text-primary"
                          >
                          Trainer : Bessma guesmi
                          </p>
                          <p
                          class="ld-fh-element relative m-0 text-14 text-primary"
                        >
                        Trainer :
                        </p>
                        <p
                        class="ld-fh-element relative m-0 text-14 text-primary"
                      >
                      Trainer : Mariem kharrat
                      </p>



                          </div> -->
                                            </div>












                                            <div
                                                class="w-full bg-dark relative flex flex-wrap bg-white rounded-100 bg-dark transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                <div
                                                    class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                    <p
                                                        class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-white">
                                                        11:00 - 12:30
                                                    </p>
                                                    <!-- <p
                                  class="ld-fh-element relative m-0 text-14 text-white"
                                >
                                  Orlando
                                </p> -->
                                                </div>
                                                <div
                                                    class="w-35percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                    <!-- <p
                                  class="ld-fh-element relative m-0 text-14 text-white"
                                >
                                  Conference / Event
                                </p> -->
                                                    <p
                                                        class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                        Closing
                                                    </p>
                                                </div>
                                                <div
                                                    class="w-30percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center">
                                                    <!-- <p
                                  class="ld-fh-element relative m-0 text-14 text-white"
                                >
                                  Speakers
                                </p>
                                <p
                                  class="ld-fh-element relative m-0 text-17 font-bold text-white"
                                >
                                  Mary Jane, Terry Jack
                                </p> -->
                                                </div>
                                            </div>


                                            <!-- <div
                                class="w-20percent flex flex-col items-center justify-center py-25 md:w-25percent sm:w-full"
                              >
                                <a
                                  href="#contact-modal"
                                  class="button btn btn-solid btn-md btn-hover-txt-switch-change btn-hover-txt-switch btn-hover-txt-switch-y btn-md btn-has-label bg-slate-700 rounded-100 text-13 uppercase leading-1/3em tracking-1 text-white font-bold hover:bg-secondary hover:text-primary"
                                  data-lity="#contact-modal"
                                  ><span
                                    class="btn-txt"
                                    data-text="20 seats left"
                                    data-split-text="true"
                                    data-split-options='{ "type": "chars, words" }'
                                    >Get a ticket</span
                                  ></a
                                >
                              </div> -->
                                            <div
                                                class="w-full bg-dark relative flex flex-wrap bg-white rounded-100 bg-dark transition-all px-25 mb-25 sm:rounded-10 sm:p-0">
                                                <div
                                                    class="w-15percent flex flex-col items-center justify-center border-right border-black-10 py-25 px-15 sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                    <p
                                                        class="ld-fh-element relative m-0 text-16 font-bold leading-1em text-white">
                                                        12:30 - 13:00
                                                    </p>
                                                    <!-- <p
                                  class="ld-fh-element relative m-0 text-14 text-white"
                                >
                                  Orlando
                                </p> -->
                                                </div>
                                                <div
                                                    class="w-35percent flex flex-col justify-center border-right border-black-10 py-25 pr-15 pl-30 md:w-30percent sm:w-full sm:items-center sm:border-right-0 sm:border-bottom">
                                                    <!-- <p
                                  class="ld-fh-element relative m-0 text-14 text-white"
                                >
                                  Conference / Event
                                </p> -->
                                                    <p
                                                        class="ld-fh-element relative m-0 text-17 font-bold text-white">
                                                        Check-out
                                                    </p>
                                                </div>
                                                <div
                                                    class="w-30percent flex flex-col justify-center py-25 pr-15 pl-30 sm:w-full sm:items-center">
                                                    <!-- <p
                                  class="ld-fh-element relative m-0 text-14 text-white"
                                >
                                  Speakers
                                </p>
                                <p
                                  class="ld-fh-element relative m-0 text-17 font-bold text-white"
                                >
                                  Mary Jane, Terry Jack
                                </p> -->
                                                </div>
                                            </div>




                                        </div>
                                    </div>
                                </div>


                    </section>























                    <!----------------------------------------------------------------------------------------------------------->

                    <!----------------------------------------------------------------------------------------------------------->






















                    <!-- <section
            class="lqd-section process flex flex-col items-center justify-center transition-all rounded-30 bg-dark pt-40"
            id="process"
            data-custom-animations="true"
            data-ca-options='{"animationTarget": ".animation-element, figure, .ico')}}nbox", "duration" : 850, "startDelay" : 300, "delay" : 75, "ease": "expo.out", "initValues": {"y": "30px", "scaleX" : 0.8, "scaleY" : 0.8, "opacity" : 0} , "animations": {"y": "0px", "scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'
          >
            <div
              class="ld-fancy-heading relative flex self-center text-center bg-transparent rounded-100 animation-element"
              style="
                background-image: linear-gradient(
                  90deg,
                  #009fff 0%,
                  #8316bd 100%
                );
              "
            >
              <h6
                class="ld-fh-element inline-block relative text-white-90 py-5 px-15 m-0"
              >
                Register
              </h6>
            </div>
            <div class="spacer w-full animation-element">
              <div class="w-full h-20"></div>
            </div>
            <div
              class="ld-fancy-heading relative flex text-center animation-element"
            >
              <h2
                class="ld-fh-element inline-block relative ld-gradient-heading bg-transparent mb-0/2em pb-0/2em"
                style="
                  background-image: linear-gradient(
                    180deg,
                    #fff 0%,
                    #ffffff 100%
                  );
                "
              >
                How to Participate?
              </h2>
            </div>
            <div
              class="max-w-full absolute z-1 top-155 module-arrow"
              data-custom-animations="true"
              data-ca-options='{"animationTarget": "figure", "ease": "expo.out", "initValues": {"x": "-50px", "y": "-50px", "scaleX" : 0, "scaleY" : 0} , "animations": {"x": "0px", "y": "0px", "scaleX" : 1, "scaleY" : 1}}'
            >
              <div class="lqd-imggrp-single block relative">
                <div
                  class="lqd-imggrp-img-container inline-flex relative items-center justify-center"
                >
                  <figure class="w-full relative">
                    <img
                      class="w-75 h-auto"
                      width="72"
                      src="{{ asset('assets/images/demo/start-hub-x/process/arrow.png') }}"
                      alt="arrow"
                    />
                  </figure>
                </div>
              </div>
            </div>
            <div class="spacer w-full animation-element">
              <div class="w-full h-20"></div>
            </div>
            <div
              class="w-full flex flex-row border-top border-white-10 pt-10 px-10 pb-0 sm:flex-col-reverse"
            >
              <div
                class="w-50percent flex flex-col py-10 pr-20 pl-70 sm:w-full module-col"
              >
                <div
                  class="iconbox flex relative z-2 iconbox-circle iconbox-icon-linked mb-50 text-left"
                >
                  <div class="iconbox-icon-wrap relative mr-25">
                    <div
                      class="iconbox-icon-container inline-flex relative z-1 rounded-full items-center justify-center w-40 h-40 text-16 text-primary bg-purple-100"
                    >
                      <i
                        aria-hidden="true"
                        class="lqd-icn-ess icon-num-1 text-1em"
                      ></i>
                    </div>
                  </div>
                  <div class="contents">
                    <h3
                      class="lqd-iconbox-heading text-white-90 text-20 mt-0/5em mb-1em text-black leading-1em"
                    >
                      Register your app
                    </h3>
                    <p class="text-16 leading-23 text-white-80">
                      To be able to create an account, input your email
                      address and password.
                    </p>
                  </div>
                </div>
                <div
                  class="iconbox flex relative z-2 iconbox-circle iconbox-icon-linked mb-50 text-left"
                >
                  <div class="iconbox-icon-wrap relative mr-25">
                    <div
                      class="iconbox-icon-container inline-flex relative z-1 rounded-full items-center justify-center w-40 h-40 text-16 text-primary bg-purple-100"
                    >
                      <i
                        aria-hidden="true"
                        class="lqd-icn-ess icon-num-2 text-1em"
                      ></i>
                    </div>
                  </div>
                  <div class="contents">
                    <h3
                      class="lqd-iconbox-heading text-white-90 text-20 mt-0/5em mb-1em text-black leading-1em"
                    >
                      Select a Template
                    </h3>
                    <p class="text-16 leading-23 text-white-80">
                      Simply input some basic information or keywords about
                      your brand or product.
                    </p>
                  </div>
                </div>
                <div
                  class="iconbox flex relative z-2 iconbox-circle iconbox-icon-linked mb-30 text-left"
                >
                  <div
                    class="iconbox-icon-wrap relative mr-25 module-icon-box"
                  >
                    <div
                      class="iconbox-icon-container inline-flex relative z-1 rounded-full items-center justify-center w-40 h-40 text-16 text-primary bg-purple-100"
                    >
                      <i
                        aria-hidden="true"
                        class="lqd-icn-ess icon-num-3 text-1em"
                      ></i>
                    </div>
                  </div>
                  <div class="contents">
                    <h3
                      class="lqd-iconbox-heading text-white-90 text-20 mt-0/5em mb-1em text-black leading-1em"
                    >
                      Done
                    </h3>
                    <p class="text-16 leading-23 text-white-80">
                      View, edit or export your AI Powered copy with a few
                      clicks.
                    </p>
                  </div>
                </div>
              </div>
              <div class="w-50percent rounded-30 sm:w-full">
                <div class="lqd-imggrp-single block relative">
                  <div
                    class="lqd-imggrp-img-container inline-flex relative items-center justify-center"
                  >
                    <figure class="w-full relative">
                      <img
                        class="rounded-30"
                        width="995"
                        height="952"
                        src="{{ asset('assets/images/demo/start-hub-x/process/daily-payment1.jpg') }}"
                        alt="process"
                      />
                    </figure>
                  </div>
                </div>
              </div>
            </div>
          </section> -->


                    <!-- <section
              class="lqd-section compare flex flex-col items-center justify-center transition-all rounded-30 bg-dark bg-center bg-no-repeat py-40"
              id="compare"
              style="
                background-image: url({{ asset('assets/images/demo/start-hub-x/bg/map.png') }});
              "
              data-custom-animations="true"
              data-ca-options='{"animationTarget": ".animation-element, .ico')}}nbox", "duration" : 850, "startDelay" : 300, "delay" : 75, "ease": "expo.out", "initValues": {"y": "40px", "scaleX" : 0.8, "scaleY" : 0.8, "opacity" : 0} , "animations": {"y": "0px", "scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'>
                <div class="w-30percent flex flex-col gap-12 my-10 p-10 transition-bg sm:w-full animation-element">
          
                  <div class="spacer w-full animation-element">
                    <div class="w-full h-10"></div>
                    <div
                    class="ld-fancy-heading relative flex text-center animation-element"
                  >
                    <h2
                      class="ld-fh-element inline-block relative ld-gradient-heading bg-transparent m-0 pb-0/2em"
                      style="
                        background-image: linear-gradient(
                          180deg,
                          #fff 0%,
                                    #ffffff 100%
              
                        );
                      "
                    >
                      Our Pack
                    </h2>
                  </div>
              
                  </div>
                  <div
                    class="iconbox flex flex-grow-1 relative iconbox-circle text-left mb-10"
                  >
                    <div
                      class="iconbox-icon-wrap mr-15 text-12 w-20 h-20 flex items-center justify-center text-purple-500 bg-purple-100 rounded-full"
                    >
                      <div
                        class="iconbox-icon-container inline-flex relative z-1 rounded-full"
                      >
                        <i
                          aria-hidden="true"
                          class="lqd-icn-ess icon-ion-ios-checkmark"
                        ></i>
                      </div>
                    </div>
                    <div
                      class="lqd-iconbox-heading text-white-90 text-15 font-medium -mt-0/1em text-black"
                    >
                      15 conferences
                    </div>
                  </div>
                  <div
                    class="iconbox flex flex-grow-1 relative iconbox-circle text-left mb-10"
                  >
                    <div
                      class="iconbox-icon-wrap mr-15 text-12 w-20 h-20 flex items-center justify-center text-purple-500 bg-purple-100 rounded-full"
                    >
                      <div
                        class="iconbox-icon-container inline-flex relative z-1 rounded-full"
                      >
                        <i
                          aria-hidden="true"
                          class="lqd-icn-ess icon-ion-ios-checkmark"
                        ></i>
                      </div>
                    </div>
                    <div
                      class="lqd-iconbox-heading text-white-90 text-15 font-medium -mt-0/1em text-black"
                    >
                      2 Night Parties
                    </div>
                  </div>
                  <div
                    class="iconbox flex flex-grow-1 relative iconbox-circle text-left mb-10"
                  >
                    <div
                      class="iconbox-icon-wrap mr-15 text-12 w-20 h-20 flex items-center justify-center text-purple-500 bg-purple-100 rounded-full"
                    >
                      <div
                        class="iconbox-icon-container inline-flex relative z-1 rounded-full"
                      >
                        <i
                          aria-hidden="true"
                          class="lqd-icn-ess icon-ion-ios-checkmark"
                        ></i>
                      </div>
                    </div>
                    <div
                      class="lqd-iconbox-heading text-white-90 text-15 font-medium -mt-0/1em text-black"
                    >
                      10 Interaction games
                    </div>
                  </div>
                  <div
                    class="iconbox flex flex-grow-1 relative iconbox-circle text-left mb-10"
                  >
                    <div
                      class="iconbox-icon-wrap mr-15 text-12 w-20 h-20 flex items-center justify-center text-purple-500 bg-purple-100 rounded-full"
                    >
                      <div
                        class="iconbox-icon-container inline-flex relative z-1 rounded-full"
                      >
                        <i
                          aria-hidden="true"
                          class="lqd-icn-ess icon-ion-ios-checkmark"
                        ></i>
                      </div>
                    </div>
                    <div
                      class="lqd-iconbox-heading text-white-90 text-15 font-medium -mt-0/1em text-black"
                    >
                    Exchange forum with Sponsors
                    </div>
                  </div>
                  <div
                    class="iconbox flex flex-grow-1 relative iconbox-circle text-left mb-10"
                  >
                    <div
                      class="iconbox-icon-wrap mr-15 text-12 w-20 h-20 flex items-center justify-center text-purple-500 bg-purple-100 rounded-full"
                    >
                      <div
                        class="iconbox-icon-container inline-flex relative z-1 rounded-full"
                      >
                        <i
                          aria-hidden="true"
                          class="lqd-icn-ess icon-ion-ios-checkmark"
                        ></i>
                      </div>
                    </div>
                    <div
                      class="lqd-iconbox-heading text-white-90 text-15 font-medium -mt-0/1em text-black"
                    >
                      2 Discussion Panels
                    </div>
                  </div>
                  <div
                    class="iconbox flex flex-grow-1 relative iconbox-circle text-left mb-10"
                  >
                    <div
                      class="iconbox-icon-wrap mr-15 text-12 w-20 h-20 flex items-center justify-center text-purple-500 bg-purple-100 rounded-full"
                    >
                      <div
                        class="iconbox-icon-container inline-flex relative z-1 rounded-full"
                      >
                        <i
                          aria-hidden="true"
                          class="lqd-icn-ess icon-ion-ios-checkmark"
                        ></i>
                      </div>
                    </div>
                    <div
                      class="lqd-iconbox-heading text-white-90 text-15 font-medium -mt-0/1em text-black"
                    >
                    Workshops
                    </div>
                  </div>
                  <div
                  class="ld-fancy-heading relative flex self-start rounded-100 bg-transparent"
                  style="
                    background-image: linear-gradient(
                      90deg,
                      #009fff 0%,
                  #8316bd 100%

              
                    );
                  "
                >
                  <h6
                    class="ld-fh-element inline-block relative text-30 text-white font-semibold m-0 py-5 px-15"
                  >
                    
                  Price : 230 TND
                  </h6>
                </div>
                </div>
      
            </section> -->
                    <!--------------------------------------------------------------------------------->

                    <!-- <section
          class="lqd-section clients flex flex-col items-center justify-center transition-all rounded-30 bg-dark bg-center bg-no-repeat py-50"
          id="speakers"
          style="
          background-image: linear-gradient(
            180deg,
            #373e5c 100%
          );
        "
        data-custom-animations="true"
        data-ca-options='{"animationTarget": ".animation-element, .lqd-iconbox-scale", "duration" : 750, "startDelay" : 300, "delay" : 75, "ease": "expo.out", "initValues": {"y": "40px", "scaleX" : 0.8, "scaleY" : 0.8, "opacity" : 0} , "animations": {"y": "0px", "scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'
      >
      <div
      class="ld-fancy-heading relative flex self-center text-center bg-transparent rounded-100 animation-element"
      style="
        background-image: linear-gradient(
          90deg,
          #009fff 0%,
          #8316bd 100%
  
        );
      "
    >
    <h6 class="ld-fh-element inline-block relative text-white-90 py-5 px-15 m-0">

      Alone we can do so little but together we can do so much.
      </h6>
    </div>
    <div class="spacer w-full animation-element">
      <div class="w-full h-20"></div>
    </div>
    <div
      class="ld-fancy-heading relative flex text-center animation-element"
    >
      <h2
        class="ld-fh-element inline-block relative ld-gradient-heading bg-transparent m-0 pb-0/2em"
        style="
          background-image: linear-gradient(
            180deg,
            #fff 0%,
                      #ffffff 100%

          );
        "
      >
        Our Team
      </h2>
    </div>
    <div class="spacer w-full animation-element">
      <div class="w-full h-20"></div>
    </div>

            <div class="container">
              <div class="row">
                <div class="col col-12 col-md-8 col-xl-6 relative">
                  <div
                    class="w-full absolute top-15percent -right-80percent z-0 text-center"
                    data-parallax="true"
                    data-parallax-options='{ "ease" : "linear", "start" : "top bottom", "end" : "bottom-=100% top" }'
                    data-parallax-from='{ "y" : "65%", "rotationZ":-50,"opacity":0.6}'
                    data-parallax-to='{ "y" : "-10%", "rotationZ":0,"opacity":1}'
                  >
                  </div>
                </div>
                <div class="w-full"></div>
                <div class="col col-12 col-md-4">
                  <div
                    class="relative flex flex-col mr-15 mb-20 lg:mr-0 module-col"
                  >
                    <div
                      class="lqd-imggrp-single mb-25 rounded-inherit"
                      data-hover3d="true"
                    >
                      <div
                        class="lqd-imggrp-img-container rounded-inherit"
                        data-stacking-factor="1"
                      >
                        <figure class="rounded-inherit">
                          <img
                            class="rounded-8"
                            width="674"
                            height="662"
                            src="{{ asset('assets/images/demo/events-hub/speakers-1.jpg') }}"
                            alt="speakers"
                          />
                        </figure>
                      </div>
                      
                    </div>
                    <div>
                      <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
                        Amir Trigui
                        <a href="https://www.linkedin.com/in/amir-trigui-a010b3141/" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

                        </a>
                        <a href="{{ asset('assets/CV/61.pdf') }}" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

                        </a>
                      </h3>
                     </div>
                    
                  </div>



                </div>
                <div class="col col-12 col-md-4">
                  <div
                    class="relative flex flex-col mx-10 mb-20 lg:mx-0 module-col"
                  >
                    <div
                      class="lqd-imggrp-single mb-25 rounded-inherit"
                      data-hover3d="true"
                    >
                      <div
                        class="lqd-imggrp-img-container rounded-inherit"
                        data-stacking-factor="1"
                      >
                        <figure class="rounded-inherit">
                          <img
                            class="rounded-8"
                            width="674"
                            height="662"
                            src="{{ asset('assets/images/demo/events-hub/speakers-2.jpg') }}"
                            alt="speakers"
                          />
                        </figure>
                      </div>
                    </div>
                    <div>
                      <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
                        Maram Hammemi
                        <a href="https://www.linkedin.com/in/maramhammemi/" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

                        </a>
                        <a href="{{ asset('assets/CV/57.pdf') }}" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

                        </a>
                      </h3>
                     </div>

                  </div>
                </div>
                <div class="col col-12 col-md-4">
                  <div
                    class="relative flex flex-col ml-15 mb-20 lg:ml-0 module-col "
                  >
                    <div
                      class="lqd-imggrp-single mb-25 rounded-inherit"
                      data-hover3d="true"
                    >
                      <div
                        class="lqd-imggrp-img-container rounded-inherit"
                        data-stacking-factor="1"
                      >
                        <figure class="rounded-inherit">
                          <img
                            class="rounded-8"
                            width="674"
                            height="662"
                            src="{{ asset('assets/images/demo/events-hub/speakers-3.jpg') }}"
                            alt="speakers"
                          />
                        </figure>
                      </div>
                    </div>
                    <div>
                      <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
                        Hassen Akrout
                        <a href="https://www.linkedin.com/in/hassen-akrout/" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

                        </a>
                        <a href="{{ asset('assets/CV/26.pdf') }}" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

                        </a>
                      </h3>
                     </div>
                  </div>
                </div>
                <div class="col col-12 col-md-4">
                  <div
                    class="relative flex flex-col mr-15 mb-20 lg:mr-0 module-col"
                  >
                    <div
                      class="lqd-imggrp-single mb-25 rounded-inherit"
                      data-hover3d="true"
                    >
                      <div
                        class="lqd-imggrp-img-container rounded-inherit"
                        data-stacking-factor="1"
                      >
                        <figure class="rounded-inherit">
                          <img
                            class="rounded-8"
                            width="674"
                            height="662"
                            src="{{ asset('assets/images/demo/events-hub/speakers-4.jpg') }}"
                            alt="speakers"
                          />
                        </figure>
                      </div>
                    </div>
                    <div>
                      <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
                        Amir Mezghani
                        <a href="https://www.linkedin.com/in/amir-mezghani/" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

                        </a>
                        <a href="{{ asset('assets/CV/6.pdf') }}" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

                        </a>
                      </h3>
                     </div>
                  </div>
                </div>
                <div class="col col-12 col-md-4">
                  <div
                    class="relative flex flex-col mx-10 mb-20 lg:mx-0 module-col"
                  >
                    <div
                      class="lqd-imggrp-single mb-25 rounded-inherit"
                      data-hover3d="true"
                    >
                      <div
                        class="lqd-imggrp-img-container rounded-inherit"
                        data-stacking-factor="1"
                      >
                        <figure class="rounded-inherit">
                          <img
                            class="rounded-8"
                            width="674"
                            height="662"
                            src="{{ asset('assets/images/demo/events-hub/speakers-5.jpg') }}"
                            alt="speakers"
                          />
                        </figure>
                      </div>
                    </div>
                    <div>
                      <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
                        Oussama Bengagi
                        <a href="https://www.linkedin.com/your-linkedin-profile" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

                        </a>
                        <a href="{{ asset('assets/CV/59.pdf') }}" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

                        </a>
                      </h3>
                     </div>
                  </div>
                </div>
                <div class="col col-12 col-md-4">
                  <div
                    class="relative flex flex-col ml-15 mb-20 lg:ml-0 module-col"
                  >
                    <div
                      class="lqd-imggrp-single mb-25 rounded-inherit"
                      data-hover3d="true"
                    >
                      <div
                        class="lqd-imggrp-img-container rounded-inherit"
                        data-stacking-factor="1"
                      >
                        <figure class="rounded-inherit">
                          <img
                            class="rounded-8"
                            width="674"
                            height="662"
                            src="{{ asset('assets/images/demo/events-hub/58.png') }}"
                            alt="speakers"
                          />
                        </figure>
                      </div>
                    </div>
                    <div>
                      <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
                        Mahdi Hjkacem
                        <a href="https://www.linkedin.com/your-linkedin-profile" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

                        </a>
                        <a href="{{ asset('assets/CV/58.pdf') }}" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

                        </a>
                      </h3>
                     </div>
                  </div>
                </div>

              </div>
              <a
  class="ld-fancy-heading relative flex self-center text-center bg-transparent rounded-100 animation-element"
  href="/team" target=_blank
  style="
    background-image: linear-gradient(
      90deg,
      #009fff 0%,
      #8316bd 100%
    );
    display: inline-block;
    padding: 10px 20px; /* Adjust padding as needed */
    text-decoration: none; /* Remove underline */
    color: #fff; /* Text color */
    float: right;
    margin-right: 10px; /* Add margin for spacing, adjust as needed */

  "
>
  Show all the Team
</a>



            </div>
          </section> -->

                    <!--------------------------------------------------------------------------------->


                    <section
                        class="lqd-section clients flex flex-col items-center justify-center transition-all rounded-30 bg-dark bg-center bg-no-repeat py-50"
                        id="clients"
                        style="
    background-image: linear-gradient(
      180deg,
      #373e5c 100%
    );
  "
                        data-custom-animations="true"
                        data-ca-options='{"animationTarget": ".animation-element, .lqd-iconbox-scale", "duration" : 750, "startDelay" : 300, "delay" : 75, "ease": "expo.out", "initValues": {"y": "40px", "scaleX" : 0.8, "scaleY" : 0.8, "opacity" : 0} , "animations": {"y": "0px", "scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'>
                        <div class="ld-fancy-heading relative flex self-center text-center bg-transparent rounded-100 animation-element"
                            style="
      background-image: linear-gradient(
        90deg,
        #009fff 0%,
        #8316bd 100%
      );
    ">
                            <h6 class="ld-fh-element inline-block relative text-white-90 py-5 px-15 m-0">
                                Stronger together, united as partners.
                            </h6>
                        </div>
                        <div class="ld-fancy-heading relative flex text-center animation-element">
                            <h2 class="ld-fh-element inline-block relative ld-gradient-heading bg-transparent m-0 pb-0/2em"
                                style="
        background-image: linear-gradient(
          180deg,
          #fff 0%,
          #ffffff 100%
        );
      ">
                                Our Partners
                            </h2>
                        </div>
                        <div class="w-full flex flex-col items-center justify-center pt-10 px-10 pb-0 border-top border-white-10 bg-no-repeat bg-center module-bg"
                            style="
      background-image: url({{ asset('assets/images/demo/start-hub-x/bg/beyond-bg1.png') }});
    ">
                            <div class="w-full flex justify-center mt-40 p-10">
                                <div
                                    class="lqd-iconbox-scale flex w-full sm:w-1/2 hover:scale-1/1 hover:inner-text-white text-center">
                                    <div
                                        class="iconbox flex flex-grow-1 relative flex-col iconbox-default items-center">
                                        <div class="sm-icon-wrap">
                                            <div
                                                class="iconbox-icon-container inline-flex mb-10 text-white-30 inner-text-white">
                                                <img src="{{ asset('assets/images/demo/events-hub/DIGIX.svg') }}"
                                                    width="70px" height="70px" />
                                            </div>
                                        </div>
                                        <h3
                                            class="lqd-iconbox-heading text-white-90 text-14 font-medium leading-25 m-0 text-white">
                                            DIGIX</h3>
                                    </div>
                                </div>
                                <!-- <div class="lqd-iconbox-scale flex w-full sm:w-1/2 hover:scale-1/1 hover:inner-text-white text-center">
        <div class="iconbox flex flex-grow-1 relative flex-col iconbox-default items-center">
          <div class="sm-icon-wrap">
            <div class="iconbox-icon-container inline-flex mb-10 text-white-30 inner-text-white">
              <img src="{{ asset('assets/images/demo/events-hub/Diwan.svg') }}" width="70px" height="70px" />
            </div>
          </div>
          <h3 class="lqd-iconbox-heading text-white-90 text-14 font-medium leading-25 m-0 text-white">DIWAN FM</h3>
        </div>
      </div> -->
                            </div>
                        </div>
                    </section>


                    <!-- <section
              class="lqd-section cta flex flex-wrap items-stretch justify-between flex-grow-1 transition-all rounded-30 bg-transparent bg-no-repeat bg-center px-60 sm:items-end sm:flex-col"
              id="cta"
              data-custom-animations="true"
              data-ca-options='{"animationTarget": ".animation-element, .btn", "duration" : 800, "startDelay" : 300, "delay" : 75, "ease": "expo.out", "initValues": {"y": "40px", "opacity" : 0} , "animations": {"y": "0px", "opacity" : 1}}'
            >
              <div
                class="w-40percent flex flex-col justify-center transition-bg p-10 lg:w-50percent sm:w-full"
              >
                <div class="ld-fancy-heading relative animation-element">
                  <h2
                    class="ld-fh-element inline-block relative mb-0/2em text-white"
                  >
                    Coming Sooner than you think !
                  </h2>
                </div>
                <div class="ld-fancy-heading relative animation-element">
                  <p
                    class="ld-fh-element inline-block relative text-16 font-medium leading-22 text-white-70 mb-0/5em"
                  >
                    Our Apps will be available soon
                  </p>
                </div>
                <div
                  class="flex flex-row mt-20 mb-50 self-stretch transition-bg module-btn sm:flex-col"
                >
                  <div class="max-w-full">
                    <a
                      href="#"
                      class="btn btn-solid btn-icon-left text-13 font-medium bg-transparent border-3 text-white rounded-left-full module-btn-md"
                      target="_blank"
                      ><span data-text="App Store" class="btn-txt"
                        >App Store </span
                      ><span class="btn-icon text-1/4em mr-10"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          height="1em"
                          viewbox="0 0 384 512"
                          fill="currentColor"
                        >
                          <path
                            d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"
                          ></path></svg></span
                    ></a>
                  </div>
                  <div class="max-w-full">
                    <a
                      href="#"
                      class="btn btn-solid btn-icon-left text-13 font-medium bg-transparent border-3 text-white rounded-right-full border-left-0 module-btn-md"
                      target="_blank"
                      ><span data-text="Play Store" class="btn-txt"
                        >Play Store </span
                      ><span class="btn-icon text-1/4em mr-10"
                        ><svg
                          aria-hidden="true"
                          viewbox="0 0 512 512"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z"
                          ></path></svg></span
                    ></a>
                  </div>
                </div>
              </div>
              
              <div class="w-40percent flex self-end p-10 sm:w-full">
                <div class="ld-fancy-heading relative animation-element">
                  <h2
                    class="ld-fh-element inline-block relative txt-rotator-list text-36 font-bold m-0"
                    data-text-rotator="true"
                    data-text-rotator-options='{"animationType": "list"}'
                  >
                    <span class="txt-rotate-keywords text-black-20"
                      ><span class="txt-rotate-keywords-inner h-full block"
                        ><span class="txt-rotate-keyword"
                          ><span>Machine learning 🔋</span> </span
                        ><span class="txt-rotate-keyword"
                          ><span>Python Programming 💡</span> </span
                        ><span class="txt-rotate-keyword"
                          ><span>Data Preprocessing ✏️</span> </span
                        ><span class="txt-rotate-keyword"
                          ><span>Marketing</span> </span
                        ><span class="txt-rotate-keyword"
                          ><span>Own Chagpt 📝</span> </span
                        ><span class="txt-rotate-keyword"
                          ><span>Ai Technologies ⚡</span> </span
                        ><span class="txt-rotate-keyword"
                          ><span>Party</span> </span
                        ><span class="txt-rotate-keyword"
                          ><span>Business</span></span
                        ></span
                      ></span
                    >
                  </h2>
                </div>
              </div>
            </section> -->
                </div>
            </div>
        </main>




        <footer id="site-footer" #373e5c class="main-footer relative overflow-hidden transition-all bg-black">
            <div
                class="w-full max-w-full absolute z-0 -bottom-70percent ltr-left-0 module-lottie rotate-180 sm:hidden">
                <div id="lqd-lottie-footer" class="lqd-lottie h-full"></div>
            </div>


            <section class="lqd-section flex flex-wrap flex-grow-1 flex-shrink-1 mx-auto py-20 lg:py-0">
                <div class="w-30percent flex items-center pt-20 pb-35 sm:w-full sm:order-first sm:pt-0">
                    <div class="lqd-imggrp-single block relative w-90">
                        <div class="lqd-imggrp-img-container inline-flex relative items-center justify-center">
                            <figure class="w-full relative">
                                <img width="80" height="24"
                                    src="{{ asset('assets/images/demo/start-hub-x/logo/logo.svg') }}" />
                            </figure>
                        </div>
                    </div>
                </div>


                <div class="w-70percent flex items-center justify-end pt-20 pb-35 sm:w-full sm:pt-0">
                    <div class="lqd-fancy-menu lqd-custom-menu relative lqd-menu-td-none">
                    </div>
                </div>
                <div class="w-full flex items-center divider py-5">
                    <span class="w-full border-top border-black-20 pb-10"></span>
                </div>
                <div class="w-50percent flex items-center pt-20 pb-35 module-text sm:w-full">
                    <div class="ld-fancy-heading relative">
                        <p class="ld-fh-element inline-block relative mb-0/5em text-12 leading-20 text-white-60">
                            © Copyright 2023 NMTC
                        </p>
                    </div>
                </div>
                <div class="w-50percent flex items-center justify-end pt-20 pb-35 sm:w-full sm:justify-start">
                    <div class="social-icons-wrapper gap-30">
                        <span class="grid-item"><a class="icon social-icon social-icon-instagram"
                                href="https://www.instagram.com/nmtc_2023/" target="_blank"><span
                                    class="sr-only">Instagram</span>
                                <svg class="w-1em h-1em" viewbox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                                        fill="#6a7a90"></path>
                                </svg> </a></span><span class="grid-item"><a
                                class="icon social-icon social-icon-facebook-square"
                                href="https://www.facebook.com/NMTC.TUNISIA" target="_blank"><span
                                    class="sr-only">Facebooh</span>
                                <svg class="w-1em h-1em" viewbox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"
                                        fill="#6a7a90"></path>
                                </svg></a></span>
                    </div>
                </div>
            </section>
        </footer>
    </div>
    <div id="contact-modal" class="lity-modal lqd-modal lity-hide" data-modal-type="fullscreen">
        <div class="lqd-modal-inner">
            <div class="lqd-modal-head"></div>
            <section class="lqd-section lqd-modal-content link-black bg-center bg-cover bg-norepeat"
                style="background-image: url({{ asset('assets/images/common/modal-bg.jpeg') }})">
                <div class="container min-h-100vh flex items-center flex-wrap">
                    <div class="w-55percent relative flex flex-col sm:w-full">
                        <div class="flex flex-col items-start justify-center py-10 pr-100 pl-10 module-content">
                            <div class="ld-fancy-heading">
                                <h2 class="ld-fh-element mb-0/5em text-120 text-black leading-0/8em font-medium">
                                    Send a message.
                                </h2>
                            </div>
                            <div class="ld-fancy-heading">
                                <p class="ld-fh-element mb-0/5em text-18">
                                    We're here to answer any question you may have.
                                </p>
                            </div>
                            <div class="spacer w-full sm:hidden">
                                <div class="w-full h-140"></div>
                            </div>
                            <div class="w-full flex flex-row flex-grow-1 gap-10 module-info">
                                <div class="w-50percent flex flex-col gap-10">
                                    <div class="ld-fancy-heading relative">
                                        <h6
                                            class="ld-fh-element relative mb-0/5em text-14 font-bold text-black mb-0/5em tracking-0">
                                            careers
                                        </h6>
                                    </div>
                                    <div class="ld-fancy-heading relative">
                                        <p class="ld-fh-element relative mb-0/5em text-16 leading-1/2em mb-0/5em">
                                            Would you like to join our growing team?
                                        </p>
                                    </div>
                                    <div class="ld-fancy-heading relative">
                                        <p class="ld-fh-element relative mb-0/5em">
                                            <a href="#" class="text-16 font-bold leading-1/2em"><span
                                                    class="__cf_email__"
                                                    data-cfemail="d3b0b2a1b6b6a1a093bba6b1fdb0bcbe">[email&#160;protected]</span></a>
                                        </p>
                                    </div>
                                </div>
                                <div class="w-50percent flex flex-col gap-10 pl-15 sm:pl-0">
                                    <div class="ld-fancy-heading relative">
                                        <h6
                                            class="ld-fh-element relative mb-0/5em text-14 font-bold text-black mb-0/5em tracking-0">
                                            Feedbacks
                                        </h6>
                                    </div>
                                    <div class="ld-fancy-heading relative">
                                        <p class="ld-fh-element relative mb-0/5em text-16 leading-1/2em mb-0/5em">
                                            Have a project in mind? Send a message.
                                        </p>
                                    </div>
                                    <div class="ld-fancy-heading relative">
                                        <p class="ld-fh-element relative mb-0/5em">
                                            <a href="#" class="text-16 font-bold leading-1/2em"><span
                                                    class="__cf_email__"
                                                    data-cfemail="ddb4b3bbb29db5a8bff3beb2b0">[email&#160;protected]</span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-45percent relative flex flex-col sm:w-full p-10 module-form">
                        <div
                            class="lqd-contact-form lqd-contact-form-inputs-underlined lqd-contact-form-button-lg lqd-contact-form-button-block p-10 sm:p-0">
                            <div role="form">
                                <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                </div>
                                <form action="./assets/php/mailer.php" method="post" class="lqd-cf-form"
                                    novalidate="novalidate" data-status="init">
                                    <div class="row -mr-15 -ml-15">
                                        <div class="col col-12 col-md-6 px-15">
                                            <p>
                                                <span class="lqd-form-control-wrap text"><input
                                                        class="text-13 text-black border-black-20 bg-transparent"
                                                        type="text" name="name" value=""
                                                        size="40" aria-required="true" aria-invalid="false"
                                                        placeholder="What's your name?" /></span>
                                            </p>
                                        </div>
                                        <div class="col col-12 col-md-6 px-15">
                                            <p>
                                                <span class="lqd-form-control-wrap email"><input
                                                        class="text-13 text-black border-black-20 bg-transparent"
                                                        type="email" name="email" value=""
                                                        size="40" aria-required="true" aria-invalid="false"
                                                        placeholder="Email address" /></span>
                                            </p>
                                        </div>
                                        <div class="col col-12 col-md-6 px-15">
                                            <p>
                                                <span class="lqd-form-control-wrap tel"><input
                                                        class="text-13 text-black border-black-20 bg-transparent"
                                                        type="text" name="topic" value=""
                                                        size="40" aria-required="true" aria-invalid="false"
                                                        placeholder="Select a Discussion Topic" /></span>
                                            </p>
                                        </div>
                                        <div class="col col-12 col-md-6 px-15">
                                            <p>
                                                <span class="lqd-form-control-wrap text"><input
                                                        class="text-13 text-black border-black-20 bg-transparent"
                                                        type="text" name="budget" value=""
                                                        size="40" aria-required="true" aria-invalid="false"
                                                        placeholder="What's your budget?" /></span>
                                            </p>
                                        </div>
                                        <div class="col col-12 px-15">
                                            <p>
                                                <span class="lqd-form-control-wrap textarea">
                                                    <textarea class="text-13 text-black border-black-20 bg-transparent" name="message" cols="10" rows="6"
                                                        aria-required="true" aria-invalid="false" placeholder="Tell us about your project"></textarea>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="col col-12 px-15">
                                            <span class="lqd-form-control-wrap acceptance"><span
                                                    class="lqd-cf-form-control lqd-cf-acceptance"><span
                                                        class="lqd-cf-list-item"><label><input type="checkbox"
                                                                name="acceptance" value="1"
                                                                aria-invalid="false" />
                                                            <span class="lqd-cf-list-item-label">I am bound by the
                                                                terms of the Service I
                                                                accept Privacy
                                                                Policy</span></label></span></span></span>
                                        </div>
                                        <div class="col col-12 text-center px-15">
                                            <input type="submit" value="Send message"
                                                class="lqd-cf-form-control text-16 uppercase font-medium leading-1em tracking-1 font-bold bg-primary text-white border-none" />
                                        </div>
                                    </div>
                                </form>
                                <div class="lqd-cf-response-output"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="lqd-modal-foot"></div>
        </div>
    </div>
    <div id="modal-mini" class="lqd-modal modal-mini lity-hide" data-modal-type="box">
        <div class="lqd-modal-inner">
            <div class="lqd-modal-head">
                <h2>Contact</h2>
            </div>
            <div class="lqd-modal-content p-10">
                <div class="lqd-contact-form lqd-contact-form-inputs-circle lqd-contact-form-inputs-sm">
                    <div role="form" lang="en-US">
                        <div class="screen-reader-response">
                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                        </div>
                        <form action="./assets/php/mailer.php" method="post" class="lqd-cf-form"
                            novalidate="novalidate" data-status="init">
                            <p>
                                <span class="lqd-form-control-wrap m-0"><input
                                        class="text-gray-700 text-13 font-medium border-white-10 px-2em text-black-80"
                                        type="text" name="name" value="" size="40"
                                        aria-required="true" aria-invalid="false" placeholder="Name" />
                                </span><span class="lqd-form-control-wrap m-0"><input
                                        class="text-gray-700 text-13 font-medium border-white-10 px-2em text-black-80"
                                        type="email" name="email" value="" size="40"
                                        aria-required="true" aria-invalid="false" placeholder="Email Address" />
                                </span><span class="lqd-form-control-wrap m-0">
                                    <textarea class="text-gray-700 text-13 font-medium border-white-10 px-2em text-black-80" name="message"
                                        cols="10" rows="3" aria-invalid="false" placeholder="Message"></textarea>
                                </span>
                            </p>
                            <div class="mb-1/5em">
                                <p class="text-14 font-medium leading-1em mt-1/5em text-gray-300">
                                    By sending a message, you agree to the privacy terms.
                                </p>
                            </div>
                            <p>
                                <input type="submit" value="Send a message"
                                    class="has-spinner text-14 font-medium h-40 border-none bg-primary text-white" />
                            </p>
                        </form>
                        <div class="lqd-cf-response-output"></div>
                    </div>
                </div>
            </div>
            <div class="lqd-modal-foot"></div>
        </div>
    </div>

    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/vendors/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/fastdom/fastdom.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/fresco/js/fresco.js') }}"></script>
    <script src="{{ asset('assets/vendors/lity/lity.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/gsap/minified/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/gsap/minified/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/gsap/utils/CustomEase.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/gsap/minified/DrawSVGPlugin.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/gsap/minified/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/draw-shape/liquidDrawShape.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/animated-blob/liquidAnimatedBlob.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/fontfaceobserver.js') }}"></script>
    <script src="{{ asset('assets/vendors/tinycolor-min.js') }}"></script>
    <script src="{{ asset('assets/vendors/gsap/utils/SplitText.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/matter/matter.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/throwable/liquidThrowable.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/flickity/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/flickity/flickity-fade.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/lottie/lottie.min.js') }}"></script>
    <script src="{{ asset('assets/js/liquid-gdpr.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>
    <script src="{{ asset('assets/js/liquid-ajax-contact-form.min.js') }}"></script>
    <script src="{{ asset('assets/js/start-hub-x.js') }}"></script>
    <div class="lqd-cc lqd-cc--inner fixed pointer-events-none"></div>

    <div
        class="lqd-cc--el lqd-cc-solid lqd-cc-explore flex items-center justify-center rounded-full fixed pointer-events-none">
        <div class="lqd-cc-solid-bg flex absolute lqd-overlay"></div>
        <div class="lqd-cc-solid-txt flex justify-center text-center relative">
            <div class="lqd-cc-solid-txt-inner">Explide</div>
        </div>
    </div>
    <div
        class="lqd-cc--el lqd-cc-solid lqd-cc-drag flex items-center justify-center rounded-full fixed pointer-events-none">
        <div class="lqd-cc-solid-bg flex absolute lqd-overlay"></div>
        <div class="lqd-cc-solid-ext lqd-cc-solid-ext-left inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32"
                style="width: 1em; height: 1em">
                <path fill="currentColor"
                    d="M19.943 6.07L9.837 14.73a1.486 1.486 0 0 0 0 2.25l10.106 8.661c.96.826 2.457.145 2.447-1.125V7.195c0-1.27-1.487-1.951-2.447-1.125z">
                </path>
            </svg>
        </div>
        <div class="lqd-cc-solid-txt flex justify-center text-center relative">
            <div class="lqd-cc-solid-txt-inner">Drag</div>
        </div>
        <div class="lqd-cc-solid-ext lqd-cc-solid-ext-right inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewbox="0 0 32 32"
                style="width: 1em; height: 1em">
                <path fill="currentColor"
                    d="M11.768 25.641l10.106-8.66a1.486 1.486 0 0 0 0-2.25L11.768 6.07c-.96-.826-2.457-.145-2.447 1.125v17.321c0 1.27 1.487 1.951 2.447 1.125z">
                </path>
            </svg>
        </div>
    </div>
    <div class="lqd-cc--el lqd-cc-arrow inline-flex items-center fixed top-0 left-0 pointer-events-none">
        <svg width="80" height="80" viewbox="0 0 80 80" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M60.4993 0V4.77005H8.87285L80 75.9207L75.7886 79.1419L4.98796 8.35478V60.4993H0V0H60.4993Z"></path>
        </svg>
    </div>
    <div class="lqd-cc--el lqd-cc-custom-icon rounded-full fixed pointer-events-none">
        <div class="lqd-cc-ci inline-flex items-center justify-center rounded-full relative">
            <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 32 32"
                style="width: 1em; height: 1em">
                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"
                    d="M16.03 6a1 1 0 0 1 1 1v8.02h8.02a1 1 0 1 1 0 2.01h-8.02v8.02a1 1 0 1 1-2.01 0v-8.02h-8.02a1 1 0 1 1 0-2.01h8.02v-8.01a1 1 0 0 1 1.01-1.01z">
                </path>
            </svg>
        </div>
    </div>
    <div class="lqd-cc lqd-cc--outer fixed top-0 left-0 pointer-events-none"></div>
    <template id="lqd-temp-snickersbar">
        <div class="lqd-snickersbar flex flex-wrap lqd-snickersbar-in" data-item-id="">
            <div class="lqd-snickersbar-inner flex flex-wrap items-center">
                <div class="lqd-snickersbar-detail">
                    <p style="display: none" class="lqd-snickersbar-addding-temp mt-0mb-0">
                        Adding to cart
                    </p>
                    <p style="display: none" class="lqd-snickersbar-added-temp mt-0mb-0"></p>
                    <p class="lqd-snickersbar-msg flex items-center mt-0mb-0"></p>
                    <p class="lqd-snickersbar-msg-done flex items-center mt-0mb-0"></p>
                </div>
                <div class="lqd-snickersbar-ext ml-1/5em"></div>
            </div>
        </div>
    </template><template id="lqd-temp-sticky-header-sentinel">
        <div class="lqd-sticky-sentinel invisible absolute pointer-events-none"></div>
    </template>
    <div class="lity" role="dialog" aria-label="Dialog Window (Press escape to close)" tabindex="-1"
        data-modal-type="default" style="display: none">
        <div class="lity-backdrop"></div>
        <div class="lity-wrap" data-lity-close="" role="document">
            <div class="lity-loader" aria-hidden="true">Loading...</div>
            <div class="lity-container">
                <div class="lity-content"></div>
            </div>
            <button class="lity-close" type="button" aria-label="Close (Press escape to close)"
                data-lity-close="">
                &times;
            </button>
        </div>
    </div>
</body>

</html>

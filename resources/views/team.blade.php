<!DOCTYPE html>
<html lang="en">
   <head>
      <link
         rel="stylesheet"
         href="{{asset('assets/vendors/liquid-icon/lqd-essentials/lqd-essentials.min.css')}}"
         />
      <link rel="stylesheet" href="{{asset('assets/vendors/jquery-ui/jquery-ui.css')}}" />
      <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}" />
      <link rel="stylesheet" href="{{asset('assets/css/utility.min.css')}}" />
      <link rel="stylesheet" href="{{asset('assets/css/demo/start-hub-x.css')}}" />
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
      <link
         href="css2?family=Golos+Text:wght@400;500;600;700&display=swap"
         rel="stylesheet"
         />
      <title>NMTC</title>
      <link rel="icon" type="image/x-icon" href="{{asset('assets/images/demo/events-hub/logo.ico')}}">
   </head>
   <body
      class="lqd-preloader-activated lqd-preloader-style-spinner"
      data-localscroll-offset="120"
      data-mobile-nav-breakpoint="1199"
      data-mobile-nav-style="minimal"
      data-mobile-nav-scheme="light"
      data-mobile-nav-trigger-alignment="right"
      data-mobile-header-scheme="light"
      data-mobile-logo-alignment="default"
      data-overlay-onmobile="false"
      >
      <div
         class="lqd-preloader-wrap lqd-preloader-spinner"
         data-preloader-options='{"animationType": "fade" }'
         >
         <div class="lqd-preloader-inner">
            <div class="lqd-preloader-el inline-flex">
               <svg class="lqd-spinner-circular" height="64" width="64">
                  <circle
                     cx="32"
                     cy="32"
                     r="28"
                     fill="none"
                     stroke-width="5"
                     stroke-miterlimit="10"
                     ></circle>
               </svg>
            </div>
         </div>
      </div>
      <div id="wrap">
      <div class="lqd-sticky-placeholder hidden"></div>
      <header
         id="site-header"
         class="main-header main-header-overlay sticky-header-noshadow"
         data-sticky-header="true"
         data-sticky-values-measured="false"
         >
         <div
            class="lqd-hide-onstuck w-full flex justify-center module-header-middle mt-20 px-10 md:hidden"
            data-custom-animations="true"
            data-ca-options='{"animationTarget": ".animation-element", "ease": "power4.out", "initValues": {"opacity" : 0} , "animations": {"opacity" : 1}}'
            >
            <div class="w-950 flex items-center justify-between gap-10 py-10">
               <div
                  class="social-icons-wrapper flex-grow-1 gap-20 animation-element"
                  >
                  <span class="grid-item"
                     >
                     <a
                        class="icon social-icon social-icon-facebook-square"
                        href="https://www.facebook.com/NMTC.TUNISIA"
                        target="_blank"
                        >
                        <span class="sr-only">Facebook-square</span>
                        <svg
                           class="w-1em h-1em"
                           viewbox="0 0 448 512"
                           xmlns="http://www.w3.org/2000/svg"
                           >
                           <path
                              d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"
                              fill="#B4B6C6"
                              ></path>
                        </svg>
                     </a>
                  </span>
                  <span class="grid-item">
                     <a
                        class="icon social-icon social-icon-linkedin"
                        href="https://www.linkedin.com/company/nmtctunisia/"
                        target="_blank"
                        >
                        <span class="sr-only">Linkedin</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                           <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/>
                        </svg>
                     </a>
                  </span>
                  <span class="grid-item"
                     >
                     <a
                        class="icon social-icon social-icon-twitter"
                        href="https://www.instagram.com/nmtc_2023/"
                        target="_blank"
                        >
                        <span class="sr-only">Twitter</span>
                        <svg
                           class="w-1em h-1em"
                           viewbox="0 0 512 512"
                           xmlns="http://www.w3.org/2000/svg"
                           >
                           <path
                              d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                              fill="#B4B6C6"
                              ></path>
                        </svg>
                     </a>
                  </span>
               </div>
               <div
                  class="ld-dropdown-menu flex relative animation-element"
                  role="menubar"
                  >
                  <div
                     class="ld-module-dropdown left collapse absolute"
                     id="dropdown-language"
                     aria-expanded="false"
                     role="menuitem"
                     >
                  </div>
               </div>
               <div class="flex animation-element">
                  <div
                     class="ld-module-search lqd-module-search-default flex items-center relative"
                     >
                     <span
                        class="ld-module-trigger collapsed text-slate-500"
                        role="button"
                        data-ld-toggle="true"
                        data-bs-toggle="collapse"
                        data-bs-target="#search-header"
                        aria-controls="search-header"
                        aria-expanded="false"
                        >
                     <span class="ld-module-trigger-txt"></span>
                     <span class="ld-module-trigger-icon"
                        ></span>
                     <div
                        role="search"
                        class="ld-module-dropdown collapse absolute"
                        id="search-header"
                        aria-expanded="false"
                        >
                        <div class="ld-search-form-container">
                           <form
                              role="search"
                              method="get"
                              action="https://starthub-x.liquid-themes.com/"
                              class="ld-search-form relative"
                              >
                              <input
                                 class="w-full"
                                 type="search"
                                 placeholder="Start searching"
                                 value=""
                                 name="s"
                                 />
                              <span
                                 role="search"
                                 class="input-icon inline-block absolute"
                                 data-ld-toggle="true"
                                 data-bs-toggle="collapse"
                                 data-bs-target="#search-header"
                                 aria-controls="search-header"
                                 aria-expanded="false"
                                 ><i class="lqd-icn-ess icon-ld-search"></i
                                 ></span>
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
               <div
                  class="w-full statick flex items-center justify-between px-30 rounded-10 shadow-blue module-header-bottom"
                  style="background-color: #282828"
                  >
                  <div class="module-logo flex navbar-brand-plain">
                     <a
                        class="navbar-brand flex p-0 relative"
                        href="/"
                        rel="home"
                        ><span class="navbar-brand-inner post-rel"
                        ><img
                        class="logo-default"
                        src="{{asset('assets/images/demo/start-hub-x/logo/logo.svg')}}" width="90px"
                        ></a>
                  </div>
                  <div class="module-primary-nav flex">
                     <div
                        class="navbar-collapse inline-flex p-0 lqd-submenu-default-style"
                        aria-expanded="false"
                        role="navigation"
                        >
                        <ul
                           class="main-nav flex reset-ul inline-ul lqd-menu-counter-right lqd-menu-items-inline main-nav-hover-fill link-13 link-white link-medium"
                           data-submenu-options='{"toggleType": "fade", "handler": "mouse-in-out"}'
                           data-localscroll="true"
                           data-localscroll-options='{"itemsSelector":"> li > a", "trackWindowScroll": true, "includeParentAsOffset": true}'
                           >
                           <li>
                              <a href="#features"
                                 >Introduction
                              <span
                                 class="link-icon inline-flex hide-if-empty right-icon"
                                 >
                              </span
                                 ></a>
                           </li>
                           <li>
                              <a href="#commit"
                                 >What's NMTC </a>
                           </li>
                           <li>
                              <a href="#events"
                                 >Our Program
                              <span
                                 class="link-icon inline-flex hide-if-empty right-icon"
                                 ></span
                                 ></a>
                           </li>
                           <li>
                              <a href="#speakers"
                                 >Our Team
                              <span
                                 class="link-icon inline-flex hide-if-empty right-icon"
                                 ></i></span
                                 ></a>
                           </li>
                           <li>
                              <a href="#clients"
                                 >Partners
                              <span
                                 class="link-icon inline-flex hide-if-empty right-icon"
                                 ></i></span
                                 ></a>
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
                     <a
                        href="#"
                        class="btn btn-naked btn-icon-right btn-hover-reveal text-13 font-medium text-white hover:text-primery"
                        ><span data-text="Join Hub" class="btn-txt"> </span
                        ><span class="btn-icon"
                        ><i
                        aria-hidden="true"
                        class="lqd-icn-ess icon-ion-ios-arrow-round-forward"
                        ></i></span
                        ></a>
                  </div>
               </div>
            </div>
         </div>
         <div
            class="lqd-stickybar-wrap lqd-stickybar-right pointer-events-none items-end justify-center gap-10 px-10 md:hidden"
            >
            <div class="flex flex-col transition-bg mr-65 mb-30 p-10">
               <a
                  class="btn btn-solid btn-custom-size btn-icon-block btn-icon-top w-60 h-60 bg-white rounded-full p-0 text-black text-26 pointer-events-auto"
                  data-lity="#modal-mini"
                  href="#modal-mini"
                  >
                  <span class="btn-icon text-black"
                     >
                     <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="26.034"
                        height="26.039"
                        viewbox="0 0 26.034 26.039"
                        >
                        <path
                           d="M28.987,3.775a1.025,1.025,0,0,0-1.3-.739S3.646,11.521,3.642,11.524a1.018,1.018,0,0,0-.66.892,1.036,1.036,0,0,0,.574.954l9.312,4.347,4.545-4.545c.9-.9,2.337.492,1.414,1.414l-4.545,4.545s4.341,9.3,4.349,9.317a1.071,1.071,0,0,0,.9.573,1.033,1.033,0,0,0,.943-.667L28.962,4.312a.937.937,0,0,0,.025-.537Z"
                           transform="translate(-2.981 -2.983)"
                           ></path>
                     </svg>
                  </span
                     >
               </a>
            </div>
         </div>
         <div class="lqd-mobile-sec relative">
            <div
               class="lqd-mobile-sec-inner navbar-header flex items-stretch w-full"
               >
               <div class="lqd-mobile-modules-container empty"></div>
               <button
                  type="button"
                  class="navbar-toggle collapsed nav-trigger style-mobile flex relative items-center justify-end border-none bg-transparent p-0"
                  data-ld-toggle="true"
                  data-bs-toggle="collapse"
                  data-bs-target="#lqd-mobile-sec-nav"
                  aria-expanded="false"
                  data-bs-toggle-options='{"changeClassnames":  {"html": "mobile-nav-activated"} }'
                  >
               <span class="sr-only">Menu</span>
               <span class="bars inline-block relative z-1"
                  >
               </span>
               </button>
               <a class="navbar-brand flex relative" href="/"
                  ><span class="navbar-brand-inner"
                  ><img
                  class="logo-default"
                  src="{{asset('assets/images/demo/start-hub-x/logo/logoC.png')}}" width="90" height="90"
                   /></span
                  ></a>
            </div>
         </div>
      </header>
      <main class="content" id="lqd-site-content">
         <div id="lqd-contents-wrap">
         <section
            class="lqd-section banner min-h-100vh flex items-stretch justify-center bg-center bg-cover bg-no-repeat px-10 top-0 sm:justify-start"
            id="banner"
            style="
            background-image: url({{asset('assets/images/demo/start-hub-x/banner/bg1.jpg')}});
            "
            >
            <div
               class="w-full min-h-100vh flex flex-col justify-center items-center py-10"
               data-parallax="true"
               data-parallax-options='{"ease": "linear", "start": "top top", "end": "bottom top"}'
               data-parallax-from='{"y": "0vh", "scale": 1 }'
               data-parallax-to='{"y": "70vh", "scale": 1.5}'
               >
               <div
                  class="w-550 max-w-full flex flex-wrap transition-bg gap-5 p-10 mt-130 sm:w-full lg:m-0 items-center justify-center"
                  data-custom-animations="true"
                  data-ca-options='{"animationTarget": ".animation-element", "duration" : 850, "delay" : 100, "ease": "expo.out", "initValues": {"opacity" : 0, "y" : 150} , "animations": {"opacity" : 1, "y" : 0}}'
                  >
                  <div
                     class="ld-fancy-heading relative flex text-center max-w-full animation-element"
                     >
                     <h2
                        class="ld-fh-element inline-block relative ld-gradient-heading lqd-highlight-custom lqd-highlight-custom-2 bg-transparent text-80 font-bold -tracking-3/5 mb-0/2em pb-0/2em"
                        data-inview="true"
                        data-transition-delay="true"
                        data-delay-options='{"elements": ".lqd-highlight-inner", "delayType": "transition"}'
                        style="
                        background-image: linear-gradient(
                        180deg,
                        #f8f8f8 0%,
                        #f1f1f1 100%
                        );
                        "
                        >
                        <span>National Microsoft Tech</span>
                        <mark class="lqd-highlight"
                           >
                           <span class="lqd-highlight-txt">Camp</span>
                           <span
                              class="lqd-highlight-inner text-white left-0 -bottom-0/2em"
                              >
                              <svg
                                 class="lqd-highlight-pen"
                                 width="51"
                                 height="51"
                                 viewbox="0 0 51 51"
                                 xmlns="http://www.w3.org/2000/svg"
                                 >
                                 <path
                                    d="M36.204 1.044C32.02 2.814 5.66 31.155 4.514 35.116c-.632 2.182-1.75 5.516-2.483 7.409-3.024 7.805-1.54 9.29 6.265 6.265 1.893-.733 5.227-1.848 7.41-2.477 3.834-1.105 4.473-1.647 19.175-16.27 0 0 10.63-10.546 15.21-15.125C53 8.997 42.021-1.418 36.203 1.044Zm7.263 5.369c3.56 3.28 4.114 4.749 2.643 6.995l-1.115 1.7-4.586-4.543-4.585-4.544 1.42-1.157C39.311 3.18 40.2 3.4 43.467 6.413ZM37.863 13.3l4.266 4.304-11.547 11.561-11.547 11.561-4.48-4.446-4.481-4.447 11.404-11.418c6.273-6.28 11.566-11.42 11.762-11.42.197 0 2.277 1.938 4.623 4.305ZM12.016 39.03l3.54 3.584-3.562 1.098-5.316 1.641c-1.665.516-1.727.455-1.211-1.21l1.614-5.226c1.289-4.177.685-4.191 4.935.113Z"
                                    ></path>
                              </svg>
                              <svg
                                 class="lqd-highlight-brush-svg lqd-highlight-brush-svg-2"
                                 width="233"
                                 height="13"
                                 viewbox="0 0 233 13"
                                 xmlns="http://www.w3.org/2000/svg"
                                 aria-hidden="true"
                                 preserveaspectratio="none"
                                 >
                                 <path
                                    d="m.624 9.414-.312-2.48C0 4.454.001 4.454.002 4.454l.035-.005.102-.013.398-.047c.351-.042.872-.102 1.557-.179 1.37-.152 3.401-.368 6.05-.622C13.44 3.081 21.212 2.42 31.13 1.804 50.966.572 79.394-.48 113.797.24c34.387.717 63.927 2.663 84.874 4.429a1048.61 1048.61 0 0 1 24.513 2.34 641.605 641.605 0 0 1 8.243.944l.432.054.149.02-.318 2.479-.319 2.48-.137-.018c-.094-.012-.234-.03-.421-.052a634.593 634.593 0 0 0-8.167-.936 1043.26 1043.26 0 0 0-24.395-2.329c-20.864-1.76-50.296-3.697-84.558-4.413-34.246-.714-62.535.332-82.253 1.556-9.859.612-17.574 1.269-22.82 1.772-2.622.251-4.627.464-5.973.614a213.493 213.493 0 0 0-1.901.22l-.094.01-.028.004Z"
                                    ></path>
                              </svg>
                           </span
                              >
                        </mark>
                     </h2>
                  </div>
                  <div
                     class="ld-fancy-heading relative flex text-center animation-element text-center justify-center items-center"
                     >
                     <p
                        class="ld-fh-element inline-block relative mb-0/5em text-18 text-center font-medium leading-22 text-white-90"
                        >
                        “Strong, United, Working until we fall”
                     </p>
                  </div>
                  <div class="w-full mt-20">
                     <div
                        class="ld-sf relative ld-sf--input-bordered ld-sf--button-solid ld-sf--size-sm ld-sf--round ld-sf--border-none ld-sf--input-shadow ld-sf--button-show ld-sf--button-inline animation-element"
                        >
                        <div class="ld_sf_response"></div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!---------------------------->
         <div
            class="module-sections relative flex flex-col items-center gap-60 pt-100 pb-50 px-10 bg-top-center bg-cover bg-no-repeat transition-all shadow-top lg:border-radius-0 lg:py-0"
            style="
            background-image: url({{asset('assets/images/demo/start-hub-x/bg/page-bg.svg')}});
            "
            >
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
         <!-- <section
            class="lqd-section manage-data flex flex-grow-0 flex-shrink-1 items-center transition-all rounded-30   bg-dark py-40 px-60 lg:flex-col-reverse"
            id="manage-data"
            data-custom-animations="true"
            data-ca-options='{"animationTarget": ".animation-element", "duration" : 850, "startDelay" : 300, "delay" : 100, "ease": "expo.out", "initValues": {"y": "30px", "scaleX" : 0.8, "scaleY" : 0.8, "opacity" : 0} , "animations": {"y": "0px", "scaleX" : 1, "scaleY" : 1, "opacity" : 1}}'
            >
            <div
              class="w-50percent relative flex flex-col p-10 lg:w-full lg:text-center bg-top-left bg-cover"
              style="
                background-image: url({{asset('assets/images/demo/start-hub-x/manage-data/lines.jpg')}});
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
                  src="{{asset('assets/videos/start-hub-x/manage-data/sticky.mp4')}}"
                  height="370"
                  autoplay=""
                  muted=""
                  playsinline=""
                  loop=""
                ></video>
              </div>
            </div>
            </section> -->
         <!--------------------------------------------------------------------------------->

         
         <section 
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
                  #9b90d6 100%
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
                  <!--------------------------------------------------------------------------------->
                  <div class="col col-12 col-md-4 mb-4">
                     <div class="relative flex flex-col mb-20 module-col">
                        <div class="lqd-imggrp-single mb-25 rounded-inherit" data-hover3d="true">
                           <div class="lqd-imggrp-img-container rounded-inherit" data-stacking-factor="1">
                              <figure class="rounded-inherit">
                                 <img class="rounded-8" width="300" height="300" src="{{asset('assets/images/demo/events-hub/speakers-1.jpg')}}" alt="speakers" />
                              </figure>
                           </div>
                        </div>
                        <div>
                           <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
                              Amir Trigui
                              <a href="https://www.linkedin.com/in/amir-trigui-a010b3141/" target="_blank">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path
                                       d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                                       fill="#B4B6C6"
                                       />
                                 </svg>
                              </a>
                              <a href="{{asset('assets/CV/61.pdf')}}" target="_blank">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16">
                                    <path
                                       d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
                                    <path
                                       d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"
                                       />
                                 </svg>
                              </a>
                           </h3>
                        </div>
                     </div>
                  </div>
                  <!--------------------------------------------------------------------------------->
                  <div class="col col-12 col-md-4 mb-4">
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
                                    width="300"
                                    height="300"
                                    src="{{asset('assets/images/demo/events-hub/1.png')}}"
                                    alt="speakers"
                                    />
                              </figure>
                           </div>
                        </div>
                        <div>
                           <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
                              Badr Aydi 
                              <a href="https://www.linkedin.com/in/aydibadr/" target="_blank">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/>
                                 </svg>
                              </a>
                              </a>
                              <a href="{{asset('assets/CV/1.pdf')}}" target="_blank">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16">
                                    <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                                    <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/>
                                 </svg>
                              </a>
                           </h3>
                        </div>
                     </div>
                  </div>
                  <!--------------------------------------------------------------------------------->
                  <div class="col col-12 col-md-4 mb-4">
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
                                    width="300"
                                    height="300"
                                    src="{{asset('assets/images/demo/events-hub/3.png')}}"
                                    alt="speakers"
                                    />
                              </figure>
                           </div>
                        </div>
                        <div>
                           <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
                              Ahmed Chaabene
                              <a href="https://www.linkedin.com/in/ahmed-chaabene-5a1330217?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/>
                                 </svg>
                              </a>
                              </a>
                              <a href="{{asset('assets/CV/3.pdf')}}" target="_blank">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16">
                                    <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
                                    <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/>
                                 </svg>
                              </a>
                           </h3>
                        </div>
                     </div>
                  </div>
   
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
   
               





               <!--------------------------------------------------------------------------------->
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
                            src="{{asset('assets/images/demo/events-hub/4.png')}}"
                            alt="speakers"
                          />
                        </figure>
                      </div>
                    </div>
                    <div>
                      <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
                        Ahmed Trabelsi
                        <a href="https://www.linkedin.com/in/ahmed-trabelsi-506015224/" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

                        </a>
                        <a href="{{asset('assets/CV/4.pdf')}}" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

                        </a>
                      </h3>
                     </div>
                  </div>
                </div>

               <!--------------------------------------------------------------------------------->
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
                            src="{{asset('assets/images/demo/events-hub/5.png')}}"
                            alt="speakers"
                          />
                        </figure>
                      </div>
                    </div>
                    <div>
                      <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
                        Amin Kessmtini
                        <a href="https://www.linkedin.com/in/amin-kessmtini/" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

                        </a>
                        <a href="{{asset('assets/CV/5.pdf')}}" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

                        </a>
                      </h3>
                     </div>
                  </div>
                </div>

               <!--------------------------------------------------------------------------------->
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
                            src="{{asset('assets/images/demo/events-hub/6.png')}}"
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
                        <a href="{{asset('assets/CV/6.pdf')}}" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

                        </a>
                      </h3>
                     </div>
                  </div>
                </div>


            </div>
            </div>
         </section>

         <section 
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
               <!--------------------------------------------------------------------------------->
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
                            src="{{asset('assets/images/demo/events-hub/7.png')}}"
                            alt="speakers"
                          />
                        </figure>
                      </div>
                      
                    </div>
                    <div>
                      <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
                        Amor Rbai 
                        <a href="https://www.linkedin.com/in/amor-rebaii-258595208/" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

                        </a>
                        <a href="{{asset('assets/CV/7.pdf')}}" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

                        </a>
                      </h3>
                      <br>
                     </div>
                    
                  </div>



                </div>
     <!--------------------------------------------------------------------------------->
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
                src="{{asset('assets/images/demo/events-hub/8.png')}}"
                alt="speakers"
              />
            </figure>
          </div>
        </div>
        <div>
          <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
            Anis Daii
            <a href="https://www.linkedin.com/in/anis-daii/?fbclid=IwAR1_5gbVKPip3ifYC113yZy2a4BXffLSsh4NtenQeLMNTIvGfQ-tltXyvgI" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

            </a>
            <a href="{{asset('assets/CV/8.pdf')}}" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

            </a>
          </h3>
          <br>
        </div>

      </div>
    </div>

               <!--------------------------------------------------------------------------------->
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
                            src="{{asset('assets/images/demo/events-hub/9.png')}}"
                            alt="speakers"
                          />
                        </figure>
                      </div>
                    </div>
                    <div>
                      <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
                        Ghezlen Ben Abderrahmen
                        <a href="https://www.linkedin.com/your-linkedin-profile" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

                        </a>
                        <a href="{{asset('assets/CV/9.pdf')}}" target="_blank">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

                        </a>
                      </h3>
                      <br>
                     </div>
                  </div>
                </div>

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

            





            <!--------------------------------------------------------------------------------->
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
                         src="{{asset('assets/images/demo/events-hub/10.png')}}"
                         alt="speakers"
                       />
                     </figure>
                   </div>
                 </div>
                 <div>
                   <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
                     Heni Ben Mabrouk
                     <a href="https://www.linkedin.com/your-linkedin-profile" target="_blank">
                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

                     </a>
                     <a href="{{asset('assets/CV/10.pdf')}}" target="_blank">
                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

                     </a>
                   </h3>
                   <br>
                 </div>
               </div>
             </div>
<!--------------------------------------------------------------------------------->
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
             src="{{asset('assets/images/demo/events-hub/11.png')}}"
             alt="speakers"
           />
         </figure>
       </div>
     </div>
     <div>
       <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
         Chiheb kammoun
         <a href="https://www.linkedin.com/in/chihebkammoun/" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

         </a>
         <a href="{{asset('assets/CV/11.pdf')}}" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

         </a>
       </h3>
       <br>
     </div>
   </div>
 </div>

            <!--------------------------------------------------------------------------------->
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
                         src="{{asset('assets/images/demo/events-hub/12.png')}}"
                         alt="speakers"
                       />
                     </figure>
                   </div>
                 </div>
                 <div>
                   <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
                     Yasmine Khemakhem
                     <a href="https://www.linkedin.com/in/yasmine-khemakhem/" target="_blank">
                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

                     </a>
                     <a href="{{asset('assets/CV/12.pdf')}}" target="_blank">
                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

                     </a>
                   </h3>
                   <br>
                 </div>
               </div>
             </div>


         </div>
         </div>
      </section>

      <section 
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
            <!--------------------------------------------------------------------------------->
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
                         src="{{asset('assets/images/demo/events-hub/13.png')}}"
                         alt="speakers"
                       />
                     </figure>
                   </div>
                   
                 </div>
                 <div>
                   <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
                     Zied Haderich 
                       <a href="https://www.linkedin.com/in/zied-hadrich-4409a71a9/" target="_blank">
                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

                     </a>
                     <a href="{{asset('assets/CV/13.pdf')}}" target="_blank">
                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

                     </a>
                   </h3>
                   <br>
                    </div>
                 
               </div>



             </div>
<!--------------------------------------------------------------------------------->
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
             src="{{asset('assets/images/demo/events-hub/14.png')}}"
             alt="speakers"
           />
         </figure>
       </div>
     </div>
     <div>
       <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
         Asma Gharsallah
         <a href="https://www.linkedin.com/in/asma-gharsallah-098ab2187/" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

         </a>
         <a href="{{asset('assets/CV/14.pdf')}}" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

         </a>
       </h3>
       <br>
        </div>

   </div>
 </div>
<!--------------------------------------------------------------------------------->
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
             src="{{asset('assets/images/demo/events-hub/15.png')}}"
             alt="speakers"
           />
         </figure>
       </div>
     </div>
     <div>
       <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
         Aya Lansari
         <a href="https://www.linkedin.com/in/eya-lansari-a6600928a/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app&fbclid=IwAR3qlAEpyP63Wsp3EnqrcT1aUakyas-pY-lsmxjUWeWg3TBsVTxmtX2nBFk" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

         </a>
         <a href="{{asset('assets/CV/15.pdf')}}" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

         </a>
       </h3>
       <br>
        </div>
   </div>
 </div>

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

         





         <!--------------------------------------------------------------------------------->
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
                      src="{{asset('assets/images/demo/events-hub/16.png')}}"
                      alt="speakers"
                    />
                  </figure>
                </div>
              </div>
              <div>
                <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
                  Firas Hmidi
                  <a href="https://www.linkedin.com/your-linkedin-profile" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

                  </a>
                  <a href="{{asset('assets/CV/16.pdf')}}" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

                  </a>
                </h3>
                <br>
                 </div>
            </div>
          </div>
<!--------------------------------------------------------------------------------->
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
             src="{{asset('assets/images/demo/events-hub/17.png')}}"
             alt="speakers"
           />
         </figure>
       </div>
     </div>
     <div>
       <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
         Mariem Elkamel 
         <a href="https://www.linkedin.com/in/mariem-elkamel-" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

         </a>
         <a href="{{asset('assets/CV/17.pdf')}}" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

         </a>
       </h3>
       <br>
        </div>
   </div>
 </div>
<!--------------------------------------------------------------------------------->
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
             src="{{asset('assets/images/demo/events-hub/18.png')}}"
             alt="speakers"
           />
         </figure>
       </div>
     </div>
     <div>
       <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
         Nour Mroua
         <a href="https://www.linkedin.com/in/nour-mroua-bab499243/" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

         </a>
         <a href="{{asset('assets/CV/18.pdf')}}" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

         </a>
       </h3>
       <br>
        </div>
   </div>
 </div>

      </div>
      </div>
   </section>


   <section 
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
         <!--------------------------------------------------------------------------------->
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
                                                          src="{{asset('assets/images/demo/events-hub/19.png')}}"
                                                          alt="speakers"
                                                        />
                                                      </figure>
                                                    </div>
                                                    
                                                  </div>
                                                  <div>
                                                    <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
                                                      Adnen Kamoun
                                                      <a href="https://www.linkedin.com/in/adnen-kammoun-b350a425b/" target="_blank">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>
                              
                                                      </a>
                                                      <a href="{{asset('assets/CV/19.pdf')}}" target="_blank">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>
                              
                                                      </a>
                                                    </h3>
                                                    <br>
                                                  </div>
                                                  
                                                </div>
                              
                              
                              
                                              </div>
         <!--------------------------------------------------------------------------------->
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
                      src="{{asset('assets/images/demo/events-hub/20.png')}}"
                      alt="speakers"
                    />
                  </figure>
                </div>
              </div>
              <div>
                <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
                   Adam Zaier
                  <a href="https://www.linkedin.com/in/adam-zaier/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

                  </a>
                  <a href="{{asset('assets/CV/20.pdf')}}" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

                  </a>
                </h3>
                <br>
              </div>

            </div>
          </div>
<!--------------------------------------------------------------------------------->
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
             src="{{asset('assets/images/demo/events-hub/21.jpg')}}"
             alt="speakers"
           />
         </figure>
       </div>
     </div>
     <div>
       <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
         Habib belguith
         <a href="https://www.linkedin.com/your-linkedin-profile" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

         </a>
         <a href="{{asset('assets/CV/21.pdf')}}" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

         </a>
       </h3>
       <br>
     </div>
   </div>
 </div>

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

      





      <!--------------------------------------------------------------------------------->
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
                   src="{{asset('assets/images/demo/events-hub/22.png')}}"
                   alt="speakers"
                 />
               </figure>
             </div>
           </div>
           <div>
             <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
               Nour Ammar 
               <a href="https://www.linkedin.com/in/nour-ammar-7712801a9/" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

               </a>
               <a href="{{asset('assets/CV/22.pdf')}}" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

               </a>
             </h3>
             <br>
           </div>
         </div>
       </div>
<!--------------------------------------------------------------------------------->
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
             src="{{asset('assets/images/demo/events-hub/23.png')}}"
             alt="speakers"
           />
         </figure>
       </div>
     </div>
     <div>
       <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
         Hamed Sellami 
         <a href="https://www.linkedin.com/in/sellami-hamed-28aabb258?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

         </a>
         <a href="{{asset('assets/CV/23.pdf')}}" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

         </a>
       </h3>
       <br>
     </div>
   </div>
 </div>
<!--------------------------------------------------------------------------------->
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
                                                          src="{{asset('assets/images/demo/events-hub/24.png')}}"
                                                          alt="speakers"
                                                        />
                                                      </figure>
                                                    </div>
                                                  </div>
                                                  <div>
                                                    <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
                                                      Rania Fazzeni
                                                      <a href="https://www.linkedin.com/in/rania-fazzeni-076721279/" target="_blank">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>
                              
                                                      </a>
                                                      <a href="{{asset('assets/CV/24.pdf')}}" target="_blank">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>
                              
                                                      </a>
                                                    </h3>
                                                    <br>
                                                  </div>
                                                </div>
                                              </div>

   </div>
   </div>
</section>
<!-------------------->
<section 
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
      <!--------------------------------------------------------------------------------->
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
                   src="{{asset('assets/images/demo/events-hub/26.png')}}"
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
               <a href="{{asset('assets/CV/26.pdf')}}" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

               </a>
             </h3>
             <br>
           </div>

         </div>
       </div>
<!--------------------------------------------------------------------------------->
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
             src="{{asset('assets/images/demo/events-hub/27.png')}}"
             alt="speakers"
           />
         </figure>
       </div>
     </div>
     <div>
       <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
         Imen Jabeur 
         <a href="https://www.linkedin.com/in/jabeur-imen-76667a216/" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

         </a>
         <a href="{{asset('assets/CV/27.pdf')}}" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

         </a>
       </h3>
       <br>
     </div>
   </div>
 </div>
<!--------------------------------------------------------------------------------->
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
             src="{{asset('assets/images/demo/events-hub/25.png')}}"
             alt="speakers"
           />
         </figure>
       </div>
       
     </div>
     <div>
       <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
         Ghaya Derbali
         <a href="https://www.linkedin.com/in/ghaya-derbali-342bb91bb/" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

         </a>
         <a href="{{asset('assets/CV/25.pdf')}}" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

         </a>
       </h3>
       <br>
     </div>
     
   </div>



 </div>


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

   





   <!--------------------------------------------------------------------------------->
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
                src="{{asset('assets/images/demo/events-hub/28.png')}}"
                alt="speakers"
              />
            </figure>
          </div>
        </div>
        <div>
          <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
            Islem aloui
            <a href="https://www.linkedin.com/in/islem-aloui-2a86971b9" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

            </a>
            <a href="{{asset('assets/CV/28.pdf')}}" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

            </a>
          </h3>
          <br>
        </div>
      </div>
    </div>
<!--------------------------------------------------------------------------------->
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
             src="{{asset('assets/images/demo/events-hub/29.png')}}"
             alt="speakers"
           />
         </figure>
       </div>
     </div>
     <div>
       <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
         Jawhar Chaabene
         <a href="https://www.linkedin.com/in/jawhar-chaabene-230200243/" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

         </a>
         <a href="{{asset('assets/CV/29.pdf')}}" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

         </a>
       </h3>
       <br>
     </div>
   </div>
 </div>
<!--------------------------------------------------------------------------------->
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
             src="{{asset('assets/images/demo/events-hub/30.png')}}"
             alt="speakers"
           />
         </figure>
       </div>
     </div>
     <div>
       <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
         Kmar Ksentini
         <a href="https://www.linkedin.com/in/kmar-ksentini-988882253/" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

         </a>
         <a href="{{asset('assets/CV/30.pdf')}}" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

         </a>
       </h3>
       <br>
     </div>
   </div>
 </div>

</div>
</div>
</section>
<!-------------------->

<section 
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
      <!--------------------------------------------------------------------------------->
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
                   src="{{asset('assets/images/demo/events-hub/31.png')}}"
                   alt="speakers"
                 />
               </figure>
             </div>
             
           </div>
           <div>
             <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
               Malek Ayadi 
               <a href="https://www.linkedin.com/your-linkedin-profile" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

               </a>
               <a href="{{asset('assets/CV/31.pdf')}}" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

               </a>
             </h3>
             <br>
           </div>
           
         </div>



       </div>
<!--------------------------------------------------------------------------------->
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
             src="{{asset('assets/images/demo/events-hub/32.png')}}"
             alt="speakers"
           />
         </figure>
       </div>
     </div>
     <div>
       <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
         Mohamed Aziz Moalla 
         <a href="http://linkedin.com/in/mohamed-aziz-moalla-50627121a" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

         </a>
         <a href="{{asset('assets/CV/32.pdf')}}" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

         </a>
       </h3>
       <br>
     </div>

   </div>
 </div>

<!--------------------------------------------------------------------------------->
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
             src="{{asset('assets/images/demo/events-hub/33.png')}}"
             alt="speakers"
           />
         </figure>
       </div>
     </div>
     <div>
       <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
         Mohamed Njeh
         <a href="https://www.linkedin.com/in/mohamed-njeh-542962256/" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

         </a>
         <a href="{{asset('assets/CV/33.pdf')}}" target="_blank">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

         </a>
       </h3>
       <br>
     </div>
   </div>
 </div>

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

   





   <!--------------------------------------------------------------------------------->
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
                src="{{asset('assets/images/demo/events-hub/34.png')}}"
                alt="speakers"
              />
            </figure>
          </div>
        </div>
        <div>
          <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
            Montassar Ghodhbeni
            <a href="https://www.linkedin.com/your-linkedin-profile" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

            </a>
            <a href="{{asset('assets/CV/34.pdf')}}" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

            </a>
          </h3>
          <br>
        </div>
      </div>
    </div>

   <!--------------------------------------------------------------------------------->
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
                src="{{asset('assets/images/demo/events-hub/35.png')}}"
                alt="speakers"
              />
            </figure>
          </div>
        </div>
        <div>
          <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
            Nirvane Hmid
            <a href="https://www.linkedin.com/in/nirvane-hmid-344497277/" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

            </a>
            <a href="{{asset('assets/CV/35.pdf')}}" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

            </a>
          </h3>
          <br>
        </div>
      </div>
    </div>

   <!--------------------------------------------------------------------------------->
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
                src="{{asset('assets/images/demo/events-hub/36.png')}}"
                alt="speakers"
              />
            </figure>
          </div>
        </div>
        <div>
          <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
            Nour Bouzidi
            <a href="https://www.linkedin.com/in/nour-bouzidi-b94a34232/" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

            </a>
            <a href="{{asset('assets/CV/36.pdf')}}" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

            </a>
          </h3>
          <br>
        </div>
      </div>
    </div>


</div>
</div>
</section>
<!-------------------->
<section 
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
      <!--------------------------------------------------------------------------------->
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
                   src="{{asset('assets/images/demo/events-hub/37.png')}}"
                   alt="speakers"
                 />
               </figure>
             </div>
             
           </div>
           <div>
             <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
               Nour Karray 
               <a href="http://www.linkedin.com/in/karray-nour-el-houda" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

               </a>
               <a href="{{asset('assets/CV/37.pdf')}}" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

               </a>
             </h3>
             <br>
           </div>
           
         </div>



       </div>

      <!--------------------------------------------------------------------------------->
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
                   src="{{asset('assets/images/demo/events-hub/38.png')}}"
                   alt="speakers"
                 />
               </figure>
             </div>
           </div>
           <div>
             <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
               Omar Marnissi 
               <a href="https://www.linkedin.com/in/omar-marnissi" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

               </a>
               <a href="{{asset('assets/CV/38.pdf')}}" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

               </a>
             </h3>
             <br>
           </div>

         </div>
       </div>

      <!--------------------------------------------------------------------------------->
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
                   src="{{asset('assets/images/demo/events-hub/39.png')}}"
                   alt="speakers"
                 />
               </figure>
             </div>
           </div>
           <div>
             <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
               Omar Talbi
               <a href="https://www.linkedin.com/in/omar-talbi-sfax/" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

               </a>
               <a href="{{asset('assets/CV/39.pdf')}}" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

               </a>
             </h3>
             <br>
           </div>
         </div>
       </div>

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

   





   <!--------------------------------------------------------------------------------->
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
                src="{{asset('assets/images/demo/events-hub/40.png')}}"
                alt="speakers"
              />
            </figure>
          </div>
        </div>
        <div>
          <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
            Souha Omrani
            <a href="https://www.linkedin.com/in/omrani-souha-9244a9264?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

            </a>
            <a href="{{asset('assets/CV/40.pdf')}}" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

            </a>
          </h3>
          <br>
        </div>
      </div>
    </div>

   <!--------------------------------------------------------------------------------->
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
                src="{{asset('assets/images/demo/events-hub/41.png')}}"
                alt="speakers"
              />
            </figure>
          </div>
        </div>
        <div>
          <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
            Saber Berriche
            <a href="https://www.linkedin.com/in/saber-berriche-813472239/" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

            </a>
            <a href="{{asset('assets/CV/41.pdf')}}" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

            </a>
          </h3>
          <br>
        </div>
      </div>
    </div>

   <!--------------------------------------------------------------------------------->
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
                src="{{asset('assets/images/demo/events-hub/42.png')}}"
                alt="speakers"
              />
            </figure>
          </div>
        </div>
        <div>
          <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
            Walid Ouni 
            <a href="https://www.linkedin.com/in/walid-ouni/" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

            </a>
            <a href="{{asset('assets/CV/42.pdf')}}" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

            </a>
          </h3>
          <br>
        </div>
      </div>
    </div>


</div>
</div>
</section>
<!-------------------->

<section 
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
      <!--------------------------------------------------------------------------------->
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
                   src="{{asset('assets/images/demo/events-hub/43.png')}}"
                   alt="speakers"
                 />
               </figure>
             </div>
             
           </div>
           <div>
             <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
               Wijden Chaabouni
               <a href="https://www.linkedin.com/in/wijden-chaabouni-760385228/" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

               </a>
               <a href="{{asset('assets/CV/43.pdf')}}" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

               </a>
             </h3>
             <br>
           </div>
           
         </div>



       </div>

      <!--------------------------------------------------------------------------------->
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
                   src="{{asset('assets/images/demo/events-hub/44.png')}}"
                   alt="speakers"
                 />
               </figure>
             </div>
           </div>
           <div>
             <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
               Yasmine Zekri
               <a href="https://www.linkedin.com/your-linkedin-profile" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

               </a>
               <a href="{{asset('assets/CV/44.pdf')}}" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

               </a>
             </h3>
             <br>
           </div>

         </div>
       </div>

      <!--------------------------------------------------------------------------------->
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
                   src="{{asset('assets/images/demo/events-hub/45.png')}}"
                   alt="speakers"
                 />
               </figure>
             </div>
           </div>
           <div>
             <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
               Sirine Boussarssar 
               <a href="https://www.linkedin.com/your-linkedin-profile" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

               </a>
               <a href="{{asset('assets/CV/45.pdf')}}" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

               </a>
             </h3>
             <br>
           </div>
         </div>
       </div>


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

   





   <!--------------------------------------------------------------------------------->
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
                src="{{asset('assets/images/demo/events-hub/46.png')}}"
                alt="speakers"
              />
            </figure>
          </div>
        </div>
        <div>
          <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
            Emna Chouikhi
            <a href="https://www.linkedin.com/in/emna-chouikhi" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

            </a>
            <a href="{{asset('assets/CV/46.pdf')}}" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

            </a>
          </h3>
          <br>
        </div>
      </div>
    </div>

   <!--------------------------------------------------------------------------------->
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
                src="{{asset('assets/images/demo/events-hub/47.png')}}"
                alt="speakers"
              />
            </figure>
          </div>
        </div>
        <div>
          <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
            Ala Dammak
            <a href="https://www.linkedin.com/in/alaeddine-dammak-74125b20a/" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

            </a>
            <a href="{{asset('assets/CV/47.pdf')}}" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

            </a>
          </h3>
          <br>
        </div>
      </div>
    </div>

   <!--------------------------------------------------------------------------------->
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
                src="{{asset('assets/images/demo/events-hub/48.png')}}"
                alt="speakers"
              />
            </figure>
          </div>
        </div>
        <div>
          <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
            Ayoub Bouali 
            <a href="https://www.linkedin.com/in/ayoub-bouali-014b03202/" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

            </a>
            <a href="{{asset('assets/CV/48.pdf')}}" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

            </a>
          </h3>
          <br>
        </div>
      </div>
    </div>


</div>
</div>
</section>
<!-------------------->

<section 
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
      <!--------------------------------------------------------------------------------->
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
                   src="{{asset('assets/images/demo/events-hub/49.png')}}"
                   alt="speakers"
                 />
               </figure>
             </div>
             
           </div>
           <div>
             <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
               Sayf Khnissi
               <a href="www.linkedin.com/in/sayfkhnissi" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

               </a>
               <a href="{{asset('assets/CV/49.pdf')}}" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

               </a>
             </h3>
             <br>
             </div>
           
         </div>



       </div>

      <!--------------------------------------------------------------------------------->
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
                   src="{{asset('assets/images/demo/events-hub/50.png')}}"
                   alt="speakers"
                 />
               </figure>
             </div>
           </div>
           <div>
             <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
               Safa Othmani
               <a href="https://www.linkedin.com/in/safa-othmani-a20737242/" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

               </a>
               <a href="{{asset('assets/CV/50.pdf')}}" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

               </a>
             </h3>
             <br>
             </div>

         </div>
       </div>

      <!--------------------------------------------------------------------------------->
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
                   src="{{asset('assets/images/demo/events-hub/51.png')}}"
                   alt="speakers"
                 />
               </figure>
             </div>
           </div>
           <div>
             <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
               Ibrahim Ellouze
               <a href="https://www.linkedin.com/in/ibrahim-ellouze/" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

               </a>
               <a href="{{asset('assets/CV/51.pdf')}}" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

               </a>
             </h3>
             <br>
             </div>
         </div>
       </div>


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

   





   <!--------------------------------------------------------------------------------->
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
                src="{{asset('assets/images/demo/events-hub/52.png')}}"
                alt="speakers"
              />
            </figure>
          </div>
        </div>
        <div>
          <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
            Hadil Boussetta
            <a href="https://www.linkedin.com/in/hadil-boussetta-7a7025227/" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

            </a>
            <a href="{{asset('assets/CV/52.pdf')}}" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

            </a>
          </h3>
          <br>
          </div>
      </div>
    </div>

   <!--------------------------------------------------------------------------------->
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
                src="{{asset('assets/images/demo/events-hub/53.png')}}"
                alt="speakers"
              />
            </figure>
          </div>
        </div>
        <div>
          <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
            Emna Dlaila
            <a href="https://www.linkedin.com/your-linkedin-profile" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

            </a>
            <a href="{{asset('assets/CV/53.pdf')}}" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

            </a>
          </h3>
          <br>
          </div>
      </div>
    </div>

   <!--------------------------------------------------------------------------------->
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
                src="{{asset('assets/images/demo/events-hub/54.png')}}"
                alt="speakers"
              />
            </figure>
          </div>
        </div>
        <div>
          <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
            Bilel Elloumi  
            <a href="https://www.linkedin.com/in/bilel-elloumi-98137b264?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

            </a>
            <a href="{{asset('assets/CV/54.pdf')}}" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

            </a>
          </h3>
          <br>
          </div>
      </div>
    </div>


</div>
</div>
</section>
<!-------------------->

<section 
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
      <!--------------------------------------------------------------------------------->
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
                   src="{{asset('assets/images/demo/events-hub/55.png')}}"
                   alt="speakers"
                 />
               </figure>
             </div>
             
           </div>
           <div>
             <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
               Ahmed Esseket
               <a href="https://www.linkedin.com/your-linkedin-profile" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

               </a>
               <a href="{{asset('assets/CV/55.pdf')}}" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

               </a>
             </h3>
             <br>
           </div>
           
         </div>



       </div>

      <!--------------------------------------------------------------------------------->
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
                   src="{{asset('assets/images/demo/events-hub/56.png')}}"
                   alt="speakers"
                 />
               </figure>
             </div>
           </div>
           <div>
             <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
               Fekher Charfi
               <a href="https://www.linkedin.com/your-linkedin-profile" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

               </a>
               <a href="{{asset('assets/CV/56.pdf')}}" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

               </a>
             </h3>
             <br>
           </div>

         </div>
       </div>

      <!--------------------------------------------------------------------------------->
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
                   src="{{asset('assets/images/demo/events-hub/57.png')}}"
                   alt="speakers"
                 />
               </figure>
             </div>
           </div>
           <div>
             <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
               Maram Hamemmi
               <a href="https://www.linkedin.com/in/maramhammemi/" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

               </a>
               <a href="{{asset('assets/CV/57.pdf')}}" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

               </a>
             </h3>
             <br>
           </div>
         </div>
       </div>


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

   





   <!--------------------------------------------------------------------------------->
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
                src="{{asset('assets/images/demo/events-hub/58.png')}}"
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
            <a href="{{asset('assets/CV/58.pdf')}}" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

            </a>
          </h3>
          <br>
        </div>
      </div>
    </div>

   <!--------------------------------------------------------------------------------->
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
                src="{{asset('assets/images/demo/events-hub/59.png')}}"
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
            <a href="{{asset('assets/CV/59.pdf')}}" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

            </a>
          </h3>
          <br>
        </div>
      </div>
    </div>

   <!--------------------------------------------------------------------------------->
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
                src="{{asset('assets/images/demo/events-hub/60.png')}}"
                alt="speakers"
              />
            </figure>
          </div>
        </div>
        <div>
          <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
            Hsin Grati
            <a href="https://www.linkedin.com/in/hsin-grati-b3a1981b7/" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

            </a>
            <a href="{{asset('assets/CV/60.pdf')}}" target="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

            </a>
          </h3>
          <br>
        </div>
      </div>
    </div>


</div>
</div>
</section>
<!-------------------->
<section 
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
      <!--------------------------------------------------------------------------------->
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
                   src="{{asset('assets/images/demo/events-hub/2.png')}}"
                   alt="speakers"
                 />
               </figure>
             </div>
             
           </div>
           <div>
             <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
               Abir Chabchoub

      
               <a href="https://www.linkedin.com/in/abir-chabchoub-a124211b3/" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

               </a>
               <a href="{{asset('assets/CV/2.pdf')}}" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

               </a>
             </h3>
             <br>
            </div>
           
         </div>



       </div>

      <!--------------------------------------------------------------------------------->
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
                   src="{{asset('assets/images/demo/events-hub/62.png')}}"
                   alt="speakers"
                 />
               </figure>
             </div>
           </div>
           <div>
             <h3 class="ld-fh-element relative mb-0/5em text-14 uppercase tracking-1/5 text-white">
               Montassar Souifi
               <a href="https://www.linkedin.com/your-linkedin-profile" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"                       fill="#B4B6C6"/></svg>                </a>

               </a>
               <a href="{{asset('assets/CV/62.pdf')}}" target="_blank">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#B4B6C6" class="bi bi-file-pdf" viewBox="0 0 16 16"> <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/> <path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z"/> </svg>

               </a>
             </h3>
             <br>
            </div>

         </div>
       </div>

      <!--------------------------------------------------------------------------------->

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

   





   <!--------------------------------------------------------------------------------->
   <!--------------------------------------------------------------------------------->
   <!--------------------------------------------------------------------------------->

</div>
</div>
</section>


      

         <!--------------------------------------------------------------------------------->
         </div>
         </div>
      </main>
      <footer
         id="site-footer"
         #373e5c 
         class="main-footer relative overflow-hidden transition-all bg-black"
         >
      <div
         class="w-full max-w-full absolute z-0 -bottom-70percent ltr-left-0 module-lottie rotate-180 sm:hidden"
         >
      <div id="lqd-lottie-footer" class="lqd-lottie h-full"></div>
      </div>
      <section
         class="lqd-section flex flex-wrap flex-grow-1 flex-shrink-1 mx-auto py-20 lg:py-0"
         >
      <div
         class="w-30percent flex items-center pt-20 pb-35 sm:w-full sm:order-first sm:pt-0"
         >
      <div class="lqd-imggrp-single block relative w-90">
      <div
         class="lqd-imggrp-img-container inline-flex relative items-center justify-center"
         >
      <figure class="w-full relative">
      <img
         width="80"
         height="24"
         src="{{asset('assets/images/demo/start-hub-x/logo/logo.svg')}}"
         />
      </figure>
      </div>
      </div>
      </div>
      <div
         class="w-70percent flex items-center justify-end pt-20 pb-35 sm:w-full sm:pt-0"
         >
      <div
         class="lqd-fancy-menu lqd-custom-menu relative lqd-menu-td-none"
         >
      </div>
      </div>
      <div class="w-full flex items-center divider py-5">
      <span class="w-full border-top border-black-20 pb-10"></span>
      </div>
      <div
         class="w-50percent flex items-center pt-20 pb-35 module-text sm:w-full"
         >
      <div class="ld-fancy-heading relative">
      <p
         class="ld-fh-element inline-block relative mb-0/5em text-12 leading-20 text-white-60"
         >
      © Copyright 2023 NMTC
      </p>
      </div>
      </div>
      <div
         class="w-50percent flex items-center justify-end pt-20 pb-35 sm:w-full sm:justify-start"
         >
      <div class="social-icons-wrapper gap-30">
      <span class="grid-item"
         ><a
         class="icon social-icon social-icon-instagram"
         href="https://www.instagram.com/nmtc_2023/"
         target="_blank"
         ><span class="sr-only">Instagram</span>
      <svg
         class="w-1em h-1em"
         viewbox="0 0 448 512"
         xmlns="http://www.w3.org/2000/svg"
         >
      <path
         d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
         fill="#6a7a90"
         ></path>
      </svg> </a></span
         ><span class="grid-item"
         ><a
         class="icon social-icon social-icon-facebook-square"
         href="https://www.facebook.com/NMTC.TUNISIA"
         target="_blank"
         ><span class="sr-only">Facebooh</span>
      <svg
         class="w-1em h-1em"
         viewbox="0 0 512 512"
         xmlns="http://www.w3.org/2000/svg"
         >
      <path
         d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"
         fill="#6a7a90"
         ></path></svg></a
         ></span>
      </div>
      </div>
      </section>
      </footer>
      </div>
      <div
         id="contact-modal"
         class="lity-modal lqd-modal lity-hide"
         data-modal-type="fullscreen"
         >
         <div class="lqd-modal-inner">
            <div class="lqd-modal-head"></div>
            <section
               class="lqd-section lqd-modal-content link-black bg-center bg-cover bg-norepeat"
               style="background-image: url({{asset('assets/images/common/modal-bg.jpeg')}})"
               >
               <div class="container min-h-100vh flex items-center flex-wrap">
                  <div class="w-55percent relative flex flex-col sm:w-full">
                     <div
                        class="flex flex-col items-start justify-center py-10 pr-100 pl-10 module-content"
                        >
                        <div class="ld-fancy-heading">
                           <h2
                              class="ld-fh-element mb-0/5em text-120 text-black leading-0/8em font-medium"
                              >
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
                        <div
                           class="w-full flex flex-row flex-grow-1 gap-10 module-info"
                           >
                           <div class="w-50percent flex flex-col gap-10">
                              <div class="ld-fancy-heading relative">
                                 <h6
                                    class="ld-fh-element relative mb-0/5em text-14 font-bold text-black mb-0/5em tracking-0"
                                    >
                                    careers
                                 </h6>
                              </div>
                              <div class="ld-fancy-heading relative">
                                 <p
                                    class="ld-fh-element relative mb-0/5em text-16 leading-1/2em mb-0/5em"
                                    >
                                    Would you like to join our growing team?
                                 </p>
                              </div>
                              <div class="ld-fancy-heading relative">
                                 <p class="ld-fh-element relative mb-0/5em">
                                    <a href="#" class="text-16 font-bold leading-1/2em"
                                       ><span
                                       class="__cf_email__"
                                       data-cfemail="d3b0b2a1b6b6a1a093bba6b1fdb0bcbe"
                                       >[email&#160;protected]</span
                                       ></a
                                       >
                                 </p>
                              </div>
                           </div>
                           <div class="w-50percent flex flex-col gap-10 pl-15 sm:pl-0">
                              <div class="ld-fancy-heading relative">
                                 <h6
                                    class="ld-fh-element relative mb-0/5em text-14 font-bold text-black mb-0/5em tracking-0"
                                    >
                                    Feedbacks
                                 </h6>
                              </div>
                              <div class="ld-fancy-heading relative">
                                 <p
                                    class="ld-fh-element relative mb-0/5em text-16 leading-1/2em mb-0/5em"
                                    >
                                    Have a project in mind? Send a message.
                                 </p>
                              </div>
                              <div class="ld-fancy-heading relative">
                                 <p class="ld-fh-element relative mb-0/5em">
                                    <a href="#" class="text-16 font-bold leading-1/2em"
                                       ><span
                                       class="__cf_email__"
                                       data-cfemail="ddb4b3bbb29db5a8bff3beb2b0"
                                       >[email&#160;protected]</span
                                       ></a
                                       >
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div
                     class="w-45percent relative flex flex-col sm:w-full p-10 module-form"
                     >
                     <div
                        class="lqd-contact-form lqd-contact-form-inputs-underlined lqd-contact-form-button-lg lqd-contact-form-button-block p-10 sm:p-0"
                        >
                        <div role="form">
                           <div class="screen-reader-response">
                              <p role="status" aria-live="polite" aria-atomic="true"></p>
                           </div>
                           <form
                              action="./assets/php/mailer.php"
                              method="post"
                              class="lqd-cf-form"
                              novalidate="novalidate"
                              data-status="init"
                              >
                              <div class="row -mr-15 -ml-15">
                                 <div class="col col-12 col-md-6 px-15">
                                    <p>
                                       <span class="lqd-form-control-wrap text"
                                          ><input
                                          class="text-13 text-black border-black-20 bg-transparent"
                                          type="text"
                                          name="name"
                                          value=""
                                          size="40"
                                          aria-required="true"
                                          aria-invalid="false"
                                          placeholder="What's your name?"
                                          /></span>
                                    </p>
                                 </div>
                                 <div class="col col-12 col-md-6 px-15">
                                    <p>
                                       <span class="lqd-form-control-wrap email"
                                          ><input
                                          class="text-13 text-black border-black-20 bg-transparent"
                                          type="email"
                                          name="email"
                                          value=""
                                          size="40"
                                          aria-required="true"
                                          aria-invalid="false"
                                          placeholder="Email address"
                                          /></span>
                                    </p>
                                 </div>
                                 <div class="col col-12 col-md-6 px-15">
                                    <p>
                                       <span class="lqd-form-control-wrap tel"
                                          ><input
                                          class="text-13 text-black border-black-20 bg-transparent"
                                          type="text"
                                          name="topic"
                                          value=""
                                          size="40"
                                          aria-required="true"
                                          aria-invalid="false"
                                          placeholder="Select a Discussion Topic"
                                          /></span>
                                    </p>
                                 </div>
                                 <div class="col col-12 col-md-6 px-15">
                                    <p>
                                       <span class="lqd-form-control-wrap text"
                                          ><input
                                          class="text-13 text-black border-black-20 bg-transparent"
                                          type="text"
                                          name="budget"
                                          value=""
                                          size="40"
                                          aria-required="true"
                                          aria-invalid="false"
                                          placeholder="What's your budget?"
                                          /></span>
                                    </p>
                                 </div>
                                 <div class="col col-12 px-15">
                                    <p>
                                       <span class="lqd-form-control-wrap textarea">
                                       <textarea
                                          class="text-13 text-black border-black-20 bg-transparent"
                                          name="message"
                                          cols="10"
                                          rows="6"
                                          aria-required="true"
                                          aria-invalid="false"
                                          placeholder="Tell us about your project"
                                          ></textarea>
                                       </span>
                                    </p>
                                 </div>
                                 <div class="col col-12 px-15">
                                    <span class="lqd-form-control-wrap acceptance"
                                       ><span class="lqd-cf-form-control lqd-cf-acceptance"
                                       ><span class="lqd-cf-list-item"
                                       ><label
                                       ><input
                                       type="checkbox"
                                       name="acceptance"
                                       value="1"
                                       aria-invalid="false"
                                       />
                                    <span class="lqd-cf-list-item-label"
                                       >I am bound by the terms of the Service I
                                    accept Privacy Policy</span
                                       ></label
                                       ></span
                                       ></span
                                       ></span
                                       >
                                 </div>
                                 <div class="col col-12 text-center px-15">
                                    <input
                                       type="submit"
                                       value="Send message"
                                       class="lqd-cf-form-control text-16 uppercase font-medium leading-1em tracking-1 font-bold bg-primary text-white border-none"
                                       />
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
      <div
         id="modal-mini"
         class="lqd-modal modal-mini lity-hide"
         data-modal-type="box"
         >
         <div class="lqd-modal-inner">
            <div class="lqd-modal-head">
               <h2>Contact</h2>
            </div>
            <div class="lqd-modal-content p-10">
               <div
                  class="lqd-contact-form lqd-contact-form-inputs-circle lqd-contact-form-inputs-sm"
                  >
                  <div role="form" lang="en-US">
                     <div class="screen-reader-response">
                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                     </div>
                     <form
                        action="./assets/php/mailer.php"
                        method="post"
                        class="lqd-cf-form"
                        novalidate="novalidate"
                        data-status="init"
                        >
                        <p>
                           <span class="lqd-form-control-wrap m-0"
                              ><input
                              class="text-gray-700 text-13 font-medium border-white-10 px-2em text-black-80"
                              type="text"
                              name="name"
                              value=""
                              size="40"
                              aria-required="true"
                              aria-invalid="false"
                              placeholder="Name"
                              /> </span
                              ><span class="lqd-form-control-wrap m-0"
                              ><input
                              class="text-gray-700 text-13 font-medium border-white-10 px-2em text-black-80"
                              type="email"
                              name="email"
                              value=""
                              size="40"
                              aria-required="true"
                              aria-invalid="false"
                              placeholder="Email Address"
                              /> </span
                              ><span class="lqd-form-control-wrap m-0">
                           <textarea
                              class="text-gray-700 text-13 font-medium border-white-10 px-2em text-black-80"
                              name="message"
                              cols="10"
                              rows="3"
                              aria-invalid="false"
                              placeholder="Message"
                              ></textarea>
                           </span>
                        </p>
                        <div class="mb-1/5em">
                           <p
                              class="text-14 font-medium leading-1em mt-1/5em text-gray-300"
                              >
                              By sending a message, you agree to the privacy terms.
                           </p>
                        </div>
                        <p>
                           <input
                              type="submit"
                              value="Send a message"
                              class="has-spinner text-14 font-medium h-40 border-none bg-primary text-white"
                              />
                        </p>
                     </form>
                     <div class="lqd-cf-response-output"></div>
                  </div>
               </div>
            </div>
            <div class="lqd-modal-foot"></div>
         </div>
      </div>
      <script
         data-cfasync="false"
         src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
         ></script>
      <script src="{{asset('assets/vendors/jquery.min.js')}}"></script>
      <script src="{{asset('assets/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
      <script src="{{asset('assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('assets/vendors/fastdom/fastdom.min.js')}}"></script>
      <script src="{{asset('assets/vendors/fresco/js/fresco.js')}}"></script>
      <script src="{{asset('assets/vendors/lity/lity.min.js')}}"></script>
      <script src="{{asset('assets/vendors/gsap/minified/gsap.min.js')}}"></script>
      <script src="{{asset('assets/vendors/gsap/minified/gsap.min.js')}}"></script>
      <script src="{{asset('assets/vendors/gsap/utils/CustomEase.min.js')}}"></script>
      <script src="{{asset('assets/vendors/gsap/minified/DrawSVGPlugin.min.js')}}"></script>
      <script src="{{asset('assets/vendors/gsap/minified/ScrollTrigger.min.js')}}"></script>
      <script src="{{asset('assets/vendors/draw-shape/liquidDrawShape.min.js')}}"></script>
      <script src="{{asset('assets/vendors/animated-blob/liquidAnimatedBlob.min.js')}}"></script>
      <script src="{{asset('assets/vendors/fontfaceobserver.js')}}"></script>
      <script src="{{asset('assets/vendors/tinycolor-min.js')}}"></script>
      <script src="{{asset('assets/vendors/gsap/utils/SplitText.min.js')}}"></script>
      <script src="{{asset('assets/vendors/matter/matter.min.js')}}"></script>
      <script src="{{asset('assets/vendors/throwable/liquidThrowable.min.js')}}"></script>
      <script src="{{asset('assets/vendors/flickity/flickity.pkgd.min.js')}}"></script>
      <script src="{{asset('assets/vendors/flickity/flickity-fade.min.js')}}"></script>
      <script src="{{asset('assets/vendors/lottie/lottie.min.js')}}"></script>
      <script src="{{asset('assets/js/liquid-gdpr.min.js')}}"></script>
      <script src="{{asset('assets/js/theme.min.js')}}"></script>
      <script src="{{asset('assets/js/liquid-ajax-contact-form.min.js')}}"></script>
      <script src="{{asset('assets/js/demo/start-hub-x.js')}}"></script>
      <div class="lqd-cc lqd-cc--inner fixed pointer-events-none"></div>
      <div
         class="lqd-cc--el lqd-cc-solid lqd-cc-explore flex items-center justify-center rounded-full fixed pointer-events-none"
         >
         <div class="lqd-cc-solid-bg flex absolute lqd-overlay"></div>
         <div class="lqd-cc-solid-txt flex justify-center text-center relative">
            <div class="lqd-cc-solid-txt-inner">Explide</div>
         </div>
      </div>
      <div
         class="lqd-cc--el lqd-cc-solid lqd-cc-drag flex items-center justify-center rounded-full fixed pointer-events-none"
         >
         <div class="lqd-cc-solid-bg flex absolute lqd-overlay"></div>
         <div
            class="lqd-cc-solid-ext lqd-cc-solid-ext-left inline-flex items-center"
            >
            <svg
               xmlns="http://www.w3.org/2000/svg"
               width="32"
               height="32"
               viewbox="0 0 32 32"
               style="width: 1em; height: 1em"
               >
               <path
                  fill="currentColor"
                  d="M19.943 6.07L9.837 14.73a1.486 1.486 0 0 0 0 2.25l10.106 8.661c.96.826 2.457.145 2.447-1.125V7.195c0-1.27-1.487-1.951-2.447-1.125z"
                  ></path>
            </svg>
         </div>
         <div class="lqd-cc-solid-txt flex justify-center text-center relative">
            <div class="lqd-cc-solid-txt-inner">Drag</div>
         </div>
         <div
            class="lqd-cc-solid-ext lqd-cc-solid-ext-right inline-flex items-center"
            >
            <svg
               xmlns="http://www.w3.org/2000/svg"
               width="32"
               height="32"
               viewbox="0 0 32 32"
               style="width: 1em; height: 1em"
               >
               <path
                  fill="currentColor"
                  d="M11.768 25.641l10.106-8.66a1.486 1.486 0 0 0 0-2.25L11.768 6.07c-.96-.826-2.457-.145-2.447 1.125v17.321c0 1.27 1.487 1.951 2.447 1.125z"
                  ></path>
            </svg>
         </div>
      </div>
      <div
         class="lqd-cc--el lqd-cc-arrow inline-flex items-center fixed top-0 left-0 pointer-events-none"
         >
         <svg
            width="80"
            height="80"
            viewbox="0 0 80 80"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            >
            <path
               d="M60.4993 0V4.77005H8.87285L80 75.9207L75.7886 79.1419L4.98796 8.35478V60.4993H0V0H60.4993Z"
               ></path>
         </svg>
      </div>
      <div
         class="lqd-cc--el lqd-cc-custom-icon rounded-full fixed pointer-events-none"
         >
         <div
            class="lqd-cc-ci inline-flex items-center justify-center rounded-full relative"
            >
            <svg
               width="32"
               height="32"
               xmlns="http://www.w3.org/2000/svg"
               viewbox="0 0 32 32"
               style="width: 1em; height: 1em"
               >
               <path
                  fill="currentColor"
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M16.03 6a1 1 0 0 1 1 1v8.02h8.02a1 1 0 1 1 0 2.01h-8.02v8.02a1 1 0 1 1-2.01 0v-8.02h-8.02a1 1 0 1 1 0-2.01h8.02v-8.01a1 1 0 0 1 1.01-1.01z"
                  ></path>
            </svg>
         </div>
      </div>
      <div
         class="lqd-cc lqd-cc--outer fixed top-0 left-0 pointer-events-none"
         ></div>
      <template id="lqd-temp-snickersbar"
         >
         <div
            class="lqd-snickersbar flex flex-wrap lqd-snickersbar-in"
            data-item-id=""
            >
            <div class="lqd-snickersbar-inner flex flex-wrap items-center">
               <div class="lqd-snickersbar-detail">
                  <p
                     style="display: none"
                     class="lqd-snickersbar-addding-temp mt-0mb-0"
                     >
                     Adding to cart
                  </p>
                  <p
                     style="display: none"
                     class="lqd-snickersbar-added-temp mt-0mb-0"
                     ></p>
                  <p class="lqd-snickersbar-msg flex items-center mt-0mb-0"></p>
                  <p class="lqd-snickersbar-msg-done flex items-center mt-0mb-0"></p>
               </div>
               <div class="lqd-snickersbar-ext ml-1/5em"></div>
            </div>
         </div>
      </template
         >
      <template id="lqd-temp-sticky-header-sentinel"
         >
         <div
            class="lqd-sticky-sentinel invisible absolute pointer-events-none"
            ></div
            >
      </template>
      <div
         class="lity"
         role="dialog"
         aria-label="Dialog Window (Press escape to close)"
         tabindex="-1"
         data-modal-type="default"
         style="display: none"
         >
         <div class="lity-backdrop"></div>
         <div class="lity-wrap" data-lity-close="" role="document">
            <div class="lity-loader" aria-hidden="true">Loading...</div>
            <div class="lity-container">
               <div class="lity-content"></div>
            </div>
            <button
               class="lity-close"
               type="button"
               aria-label="Close (Press escape to close)"
               data-lity-close=""
               >
            &times;
            </button>
         </div>
      </div>
   </body>
</html>

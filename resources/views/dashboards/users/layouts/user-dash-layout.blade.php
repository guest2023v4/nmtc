<?php
$routeto = 'profile';
$cin_uploaded = session()->get('cin_uploaded');
if (session('route') != null) {
    $routeto = session('route');
    session()->forget('route');
} else {
    $routeto = 'profile';
}
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<!--begin::Head-->

<head>
    <title>NMTC</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <link href="{{ asset('assets/css/upload.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
        <link href="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!--end::Global Stylesheets Bundle-->
    @csrf
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled" data-theme="dark">
    <!--begin::Theme mode setup on page load-->

    <!--end::Theme mode setup on page load-->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header align-items-stretch" data-kt-sticky="true"
                    data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Container-->
                    <div class="container-xxl d-flex align-items-center justify-content-between">
                        <!--begin::Heaeder menu toggle-->
                        <div class="d-flex topbar align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">

                        </div>
                        <!--end::Heaeder menu toggle-->
                        <!--begin::Header Logo-->
                        <div class="header-logo me-5 me-md-10 flex-grow-1 flex-lg-grow-0">
                            <a href="/">
                                <img alt="Logo" src="{{ asset('assets/media/logos/logo.png') }}"
                                    class="logo-default h-25px" />
                                <img alt="Logo" src="{{ asset('assets/media/logos/logo.png') }}"
                                    class="logo-sticky h-25px" />
                            </a>
                        </div>
                        <!--end::Header Logo-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                            <!--begin::Navbar-->
                            <div class="d-flex align-items-stretch" id="kt_header_nav">
                                <!--begin::Menu wrapper-->
                                <div class="header-menu align-items-stretch">
                                    <!--begin::Menu-->
                                    <div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-400 fw-semibold my-5 my-lg-0 align-items-stretch px-2 px-lg-0"
                                        id="#kt_header_menu" data-kt-menu="true">




                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Navbar-->
                            <!--begin::Toolbar wrapper-->
                            <div class="topbar d-flex align-items-stretch flex-shrink-0">



                                <!--begin::User-->
                                <div class="d-flex align-items-center me-n3 ms-1 ms-lg-3"
                                    id="kt_header_user_menu_toggle">
                                    <!--begin::Menu wrapper-->
                                    <div class="row lh-1" style="padding-left: 0 !important;padding-right :0 ;">

                                        <p class="text-start"
                                            style="margin-bottom: 2px; font-weight: 100; padding-left: 0 !important;padding-right :0 ;">
                                            <small>Hi,</small>
                                        </p>

                                        <p class="text-start"
                                            style="margin-bottom: 0px; padding-left: 0 !important;padding-right :0 ;">
                                            {{ Auth::user()->name }} </p>

                                    </div>
                                    <div class="btn btn-icon  btn btn-icon  btn-custom w-30px h-30px w-md-40px h-md-40px"
                                        data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                        data-kt-menu-placement="bottom-end">

                                        <img class="h-30px w-30px rounded" src="{{ Auth::user()->picture }}"
                                            alt="" />
                                    </div>

                                    <!--begin::User account menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                                        data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content d-flex align-items-center px-3">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-50px me-5">
                                                    <img alt="Logo" src="{{ Auth::user()->picture }}" />
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Username-->
                                                <div class="d-flex flex-column">
                                                    <div class="fw-bold d-flex align-items-center fs-5">
                                                        {{ Auth::user()->name }}

                                                    </div>

                                                </div>
                                                <!--end::Username-->
                                            </div>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->



                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a class="menu-link px-5"href="{{ route('user.dashboard') }}"
                                                onclick="event.preventDefault();
															document.getElementById('dashboard').submit();">
                                                Dashboard</a>
                                            <form id="dashboard" action="{{ route('user.dashboard') }}" method="GET"
                                                class="d-none">
                                            </form>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a class="menu-link px-5"href="{{ route('user.profile') }}"
                                                onclick="event.preventDefault();
															document.getElementById('profile').submit();">
                                                Profile</a>
                                            <form id="profile" action="{{ route('user.profile') }}" method="GET"
                                                class="d-none">
                                            </form>
                                        </div>
                                        <!--end::Menu item-->
                                        @if (!$cin_uploaded)
                                            <div class="menu-item px-5">
                                                <a class="menu-link px-5"href="{{ route('user.uploadCIN') }}"
                                                    onclick="event.preventDefault();
															document.getElementById('upload-cin').submit();">
                                                    Upload CIN</a>
                                                <form id="upload-cin" action="{{ route('user.uploadCIN') }}"
                                                    method="GET" class="d-none">
                                                </form>
                                            </div>
                                        @endif
                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->
                                        <div class="menu-item px-5">
                                            <a class="menu-link px-5"href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
															document.getElementById('logout-form').submit();">
                                                Sign Out</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::User account menu-->
                                    <!--end::Menu wrapper-->
                                </div>
                                <!--end::User -->
                                <!--begin::Aside mobile toggle-->
                                <!--end::Aside mobile toggle-->
                            </div>
                            <!--end::Toolbar wrapper-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                @yield('content')


                <!--end::Page-->
            </div>
            <!--end::Root-->

            <!--end::Main-->

            <!--begin::Scrolltop-->
            <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                <span class="svg-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="13" y="6" width="13" height="2"
                            rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                        <path
                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
            <!--end::Scrolltop-->
            <!--begin::Modals-->
            <style>
                /* Default styles */
                .uppy-Dashboard-inner {
                    width: 100% !important;
                    max-width: 600px !important;
                    height: 200px !important;

                }

                /* Media query for smaller screens */
                @media (max-width: 768px) {
                    .uppy-Dashboard-inner {
                        height: 300px !important;
                        width: 100% !important;
                    }
                }

                /* Media query for even smaller screens */
                @media (max-width: 480px) {
                    .uppy-Dashboard-inner {
                        width: 100% !important;
                        height: 200px !important;
                    }
                }
            </style>



            <!--end::Modals-->
            <!--begin::Javascript-->


            <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
            <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
            <!--end::Global Javascript Bundle-->
            <!--begin::Vendors Javascript(used for this page only)-->
            <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
            <!--end::Vendors Javascript-->
            <!--begin::Custom Javascript(used for this page only)-->
            <script src="{{ asset('assets/js/DaystoNMTC.js') }}"></script>
            <script src="{{ asset('assets/js/close4.js') }}"></script>
            <script src="{{ asset('assets/js/close2.js') }}"></script>
            <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
            <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>

        <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
        <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
        <script src="{{ asset('assets/js/LoadUser.js') }}"></script>
        <script src="{{ asset('assets/js/exportParticipants.js') }}"></script>
        <script src="{{ asset('assets/js/createOrJoin.js') }}"></script>
        <script src="{{ asset('assets/js/createOrJoinTeam.js') }}"></script>
        <script src="{{ asset('assets/js/upload.js') }}"></script>
        <script>
            $("#kt_tab_pane_103").removeClass("active");
            var uppy = new Uppy.Uppy( {restrictions: {
                    maxNumberOfFiles: 1,
                    allowedFileTypes: ['image/*'],
                    maxFileSize: 10000000
                },
                fieldName: 'image',
       
              })
            
            uppy.use(Uppy.Webcam,{
                    modes: [
                        'picture',
                    ],
                    videoConstraints: {
                        facingMode: 'environment',
                },
                mirror: false,  
            })
            uppy.use(Uppy.Dashboard, {
                plugins: ['Webcam'],
                theme: 'dark',
                showLinkToFileUploadResult: false,
                hidePauseResumeButton: false,
                inline: true,
                target: '#drag-drop-area',
                replaceTargetContent: true,
                showProgressDetails: true,
                maxNumberOfFiles: 1,
                proudlyDisplayPoweredByUppy: false,
               // autoProceed
                autoProceed: true,
               
                note: 'Images only, 1 file, up to 10 MB',
          
               
                showNativeVideoCameraButton: false,
                thumbnailWidth: 100,
               
              
                metaFields: [{
                        id: 'name',
                        name: 'image',
                        placeholder: 'file name'
                    },
                   
                ],
                browserBackButtonClose: true
            })
         
            uppy.use(Uppy.XHRUpload, {
                endpoint: '{{route('uploadBankTransfer')}}',
                
                formData: true,
                fieldName: 'image',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                method: 'post',
                
                bundle: true,
                limit: 1,
                timeout: 0,
                withCredentials: false,
                responseType: '',
                locale: {
                    strings: {
                        timedOut: 'Connection timed out after %{seconds} seconds, aborting.'
                    }
                }
            })

                uppy.on('complete', (result) => {
                    console.log('Upload complete! We’ve uploaded these files:', result.successful)

                })
                uppy.on('upload-success', (file, response) => {
                    console.log(response);

                    window.location.reload();
                })
            </script>
<script>
    var uppy = new Uppy.Uppy({
        restrictions: {
            maxNumberOfFiles: 1,
            allowedFileTypes: ['image/*'],
            maxFileSize: 10000000
        },
        fieldName: 'image',

    })

    uppy.use(Uppy.Webcam, {
        modes: [
            'picture',
        ],
        videoConstraints: {
            facingMode: 'environment',
        },
        mirror: false,
    })
    uppy.use(Uppy.Dashboard, {
        plugins: ['Webcam'],
        theme: 'dark',
        showLinkToFileUploadResult: false,
        hidePauseResumeButton: false,
        inline: true,
        target: '#drag-drop-area2',
        replaceTargetContent: true,
        showProgressDetails: true,
        maxNumberOfFiles: 1,
        proudlyDisplayPoweredByUppy: false,
        // autoProceed
        autoProceed: true,

        note: 'Images only, 1 file, up to 10 MB',


        showNativeVideoCameraButton: false,
        thumbnailWidth: 100,


        metaFields: [{
                id: 'name',
                name: 'image',
                placeholder: 'file name'
            },

        ],
        browserBackButtonClose: true
    })

    uppy.use(Uppy.XHRUpload, {
        endpoint: '{{ route('uploadBankTransfer') }}',

        formData: true,
        fieldName: 'image',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method: 'post',

        bundle: true,
        limit: 1,
        timeout: 0,
        withCredentials: false,
        responseType: '',
        locale: {
            strings: {
                timedOut: 'Connection timed out after %{seconds} seconds, aborting.'
            }
        }
    })

    uppy.on('complete', (result) => {
        console.log('Upload complete!');

    })
    uppy.on('upload-success', (file, response) => {
        window.location.reload();
    })
</script>

            <?php
            if (Session::get('success') != null) {
                echo '<script>toastr.options = {
                                                              "closeButton": true,
                                                              "debug": false,
                                                              "newestOnTop": true,
                                                              "progressBar": true,
                                                              "positionClass": "toastr-top-right",
                                                              "preventDuplicates": false,
                                                              "onclick": null,
                                                              "showDuration": "300",
                                                              "hideDuration": "1000",
                                                              "timeOut": "5000",
                                                              "extendedTimeOut": "1000",
                                                              "showEasing": "swing",
                                                              "hideEasing": "linear",
                                                              "showMethod": "fadeIn",
                                                              "hideMethod": "fadeOut"
                                                            };
                                                            
                                                            toastr.success("' .
                    Session::get('success') .
                    '", "Success");
                                                            </script>
                                                            ';
            }
            if (Session::get('error') != null) {
                echo '<script>toastr.options = {
                                                              "closeButton": true,
                                                              "debug": false,
                                                              "newestOnTop": true,
                                                              "progressBar": true,
                                                              "positionClass": "toastr-top-right",
                                                              "preventDuplicates": false,
                                                              "onclick": null,
                                                              "showDuration": "300",
                                                              "hideDuration": "1000",
                                                              "timeOut": "5000",
                                                              "extendedTimeOut": "1000",
                                                              "showEasing": "swing",
                                                              "hideEasing": "linear",
                                                              "showMethod": "fadeIn",
                                                              "hideMethod": "fadeOut"
                                                            };
                                                            
                                                            toastr.error("' .
                    Session::get('error') .
                    '", "Error");
                                                            </script>
                                                            ';
            }
            
            ?>
            <!--end::Custom Javascript-->
            <!--end::Javascript-->
</body>
<!--end::Body-->

</html>

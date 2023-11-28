<!DOCTYPE html>
<html lang="en" data-theme="dark">
<!--begin::Head-->

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-core.min.js" type="text/javascript"></script>
    <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-map.min.js" type="text/javascript"></script>
    <script src="https://cdn.anychart.com/geodata/2.1.1/countries/tunisia/tunisia.js"></script>

    <link href="{{ asset('assets/css/upload.css') }}" rel="stylesheet">
    <style>
        #bank_n {
            max-width: 450px;
            /* Set your desired maximum width */
            max-height: 450px;
            /* Set your desired maximum height */
            width: auto;
            height: auto;
        }
    </style>
    <!--end::Global Stylesheets Bundle-->
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
                    <div class="container-xxl d-flex align-items-center ">
                        <!--begin::Heaeder menu toggle-->
                        <div class="d-flex topbar align-items-center d-lg-none ms-n2 me-3" title="Show aside menu">
                            <div class="btn btn-icon btn-active-light-primary btn-custom w-30px h-30px w-md-40px h-md-40px"
                                id="kt_header_menu_mobile_toggle">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                            fill="currentColor" />
                                        <path opacity="0.3"
                                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
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
                                <div class="header-menu align-items-stretch" data-kt-drawer="true"
                                    data-kt-drawer-name="header-menu"
                                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                    data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                                    data-kt-drawer-direction="start"
                                    data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true"
                                    data-kt-swapper-mode="prepend"
                                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                                    <!--begin::Menu-->
                                    <div class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-400 fw-semibold my-5 my-lg-0 align-items-stretch px-2 px-lg-0"
                                        id="#kt_header_menu" data-kt-menu="true">
                                        <!--end:Menu item-->
                                        <div class="menu-item me-0 me-lg-2">
                                            <!--begin:Menu link-->

                                            <span class="menu-link py-3">
                                                <span class="menu-title"><a style="color:white;"
                                                        href="{{ route('admin.account') }}">Account</a></span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </span>
                                            <!--end:Menu link-->

                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div data-kt-menu-placement="bottom-start"
                                            class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                                            <!--begin:Menu link-->
                                            <span class="menu-link py-3">
                                                <span class="menu-title"><a style="color:white;"
                                                        href="{{ route('admin.dashboard') }}">Dashboard</a></span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </span>
                                            <!--end:Menu link-->

                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->
                                        <div class="menu-item  me-0 me-lg-2">
                                            <!--begin:Menu link-->
                                            <span class="menu-link py-3">
                                                <span class="menu-title"><a style="color:white;"
                                                        href="{{ route('admin.participants') }}">Participants
                                                        List</a></span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </span>
                                            <!--end:Menu link-->

                                        </div>
                                        <!--end:Menu item-->
                                        <!--begin:Menu item-->

                                        <div class="menu-item me-0 me-lg-2">
                                            <!--begin:Menu link-->

                                            <span class="menu-link py-3">
                                                <span class="menu-title"><a style="color:white;"
                                                        href="{{ route('admin.organizers') }}">Organizers </a></span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </span>
                                            <!--end:Menu link-->

                                        </div>
                                        <div class="menu-item me-0 me-lg-2">
                                            <!--begin:Menu link-->

                                            <span class="menu-link py-3">
                                                <span class="menu-title"><a style="color:white;"
                                                        href="{{ route('admin.rooms') }}">Rooms </a></span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </span>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        <div class="menu-item me-0 me-lg-2">
                                            <!--begin:Menu link-->

                                            <span class="menu-link py-3">
                                                <span class="menu-title"><a style="color:white;"
                                                        href="{{ route('admin.teams') }}">Teams </a></span>
                                                <span class="menu-arrow d-lg-none"></span>
                                            </span>
                                            <!--end:Menu link-->
                                        </div>
                                        <!--end:Menu item-->
                                        @if (Auth::user()->role == 0)
                                            <div class="menu-item me-0 me-lg-2">
                                                <!--begin:Menu link-->

                                                <span class="menu-link py-3">
                                                    <span class="menu-title"><a style="color:white;"
                                                            href="{{ route('admin.payments') }}">Payments </a></span>
                                                    <span class="menu-arrow d-lg-none"></span>
                                                </span>
                                                <!--end:Menu link-->
                                            </div>
                                            <!--end:Menu item-->
                                            <div class="menu-item me-0 me-lg-2">
                                                <!--begin:Menu link-->

                                                <span class="menu-link py-3">
                                                    <span class="menu-title"><a style="color:white;"
                                                            href="{{ route('admin.controls') }}">Controls</a></span>
                                                    <span class="menu-arrow d-lg-none"></span>
                                                </span>
                                                <!--end:Menu link-->

                                            </div>
                                            <!--end:Menu item-->
                                        @endif
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
                                            {{ Auth::user()->name }}

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
                                                        @if (Auth::user()->role == 0)
                                                            <span
                                                                class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Super
                                                                Admin</span>
                                                        @elseif(Auth::user()->role == 1)
                                                            <span
                                                                class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Admin</span>
                                                        @endif

                                                    </div>
                                                    <a href="#"
                                                        class="fw-semibold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
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
                                            <a class="menu-link px-5"href="{{ route('admin.profile') }}"
                                                onclick="event.preventDefault();
															document.getElementById('profile').submit();">
                                                Profile</a>
                                            <form id="profile" action="{{ route('admin.profile') }}"
                                                method="GET" class="d-none">
                                            </form>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu separator-->
                                        <div class="separator my-2"></div>
                                        <!--end::Menu separator-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-5">
                                            <a class="menu-link px-5" href="{{ route('logout') }}"
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
            </div>
            <!--end::Wrapper-->
        </div>
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
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                    transform="rotate(90 13 6)" fill="currentColor" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="currentColor" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--begin::Modals-->





    <!--end::Modals-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "../assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <script src="{{ asset('assets/js/custom/apps/inbox/compose.js') }}"></script>
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/apps/user-management/users/list/table.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/user-management/users/list/export-users.js') }}"></script>
    <script src="{{ asset('assets/js/DaystoNMTC.js') }}"></script>
    <script src="{{ asset('assets/js/close4.js') }}"></script>
    <script src="{{ asset('assets/js/close2.js') }}"></script>

    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/LoadUser.js') }}"></script> --}}
    <script src="{{ asset('assets/js/exportParticipants.js') }}"></script>
    <script src="{{ asset('assets/js/createOrJoin3.js') }}"></script>
    <script src="{{ asset('assets/js/deleteuser.js') }}"></script>
    <script>
        $("#kt_datatable_zero_configuration").DataTable();
    </script>
    <script>
        function clean_update(id, name, status_pack, status_bus, total, paidMoney, bank, busFee) {

            document.getElementById('part_n').innerHTML = name;
            document.getElementById('price_n').innerHTML = total - paidMoney;
            document.getElementById('total_n').innerHTML = total;
            document.getElementById('part_id').value = id;
            var imageElement = document.getElementById('bank_n');
            

            if (status_bus == 2 && status_pack == 2){
                document.getElementById('pack_n').innerHTML = 'All';
                if (imageElement) {
                // Modify the src attribute
                imageElement.src = bank;
                }
            } else if (status_pack == 2){
                document.getElementById('pack_n').innerHTML = 'Pack';
                if (imageElement) {
                // Modify the src attribute
                imageElement.src = bank;
                }
            }else if (status_bus == 2 && status_pack == 1){ 
                document.getElementById('pack_n').innerHTML = 'Bus';
                if(busFee)
                    document.getElementById('price_n').innerHTML = busFee;
            }
            
            // Check if the element exists
            
           
        }
        function deleteUser(id){
            document.getElementById('del_id').value = id;
        }
    </script>

    <script src="{{ asset('assets/js/upload.js') }}"></script>

    <script>
        $("#kt_tab_pane_103").removeClass("active");
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
            endpoint: '{{ route('admin.uploadBankTransfer') }}',

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
            endpoint: '{{ route('admin.uploadBankTransfer') }}',

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
        endpoint: '{{ route('admin.uploadBankTransfer') }}',

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

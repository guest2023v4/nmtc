<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <title>CIN</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@500&display=swap" rel="stylesheet">
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/upload.css') }}" rel="stylesheet">

    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat" data-theme="dark">
    <!--begin::Theme mode setup on page load-->

    <div class="d-flex flex-column flex-root">
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url('{{ asset('assets/media/login-bg.png') }}');
            }

            [data-theme="dark"] body {
                background-image: url('{{ asset('assets/media/login-bg.png') }}');
            }
        </style>
        <!--end::Page bg image-->
        <!--begin::Authentication - Signup Welcome Message -->
        <div class="d-flex flex-column flex-center flex-column-fluid">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-center text-center p-10">
                <!--begin::Wrapper-->
                <div class="card card-flush w-md-650px py-5">
                    <div class="card-body py-15 py-lg-20">
                        <!--begin::Logo-->
                        <div class="mb-7">
                            <a href="/" class="">
                                <img alt="Logo" src="{{ asset('assets/media/logos/logo_2x.png') }}"
                                    class="h-40px" />
                            </a>
                        </div>
                        <!--end::Logo-->
                        <!--begin::Title-->
                        <h1 class="fw-bolder text-gray-900 mb-5">Dear Participants,</h1>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <p class="fw-semibold fs-6 text-white mb-7"> We would like to inform you that according to the
                            new hotel regulations, booking a room requires bringing a copy of your national ID card. You
                            can either send a scanned copy of your ID card to rh@nmtc.tn or upload it on our website to
                            facilitate the check-in process. </br>Thank you<span
                                class="svg-icon svg-icon-danger svg-icon-2hx"><svg width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                        </p>
                        <!--end::Text-->
                        <h1 class="fw-bolder text-gray-900 mb-5">للمشاركين الكرام</h1>
                        <p class="fw-semibold fs-6 text-white mb-7" style="font-family : 'Baloo Bhaijaan 2', cursive;">
                            نود إعلامكم بأنه وفقًا لقوانين الفنادق الجديدة، يتطلب حجز الغرف إصطحاب نسخة من بطاقة الهوية
                            الوطنية. يمكنكم إرسال صورة للبطاقة عبر البريد الإلكتروني أو تحميلها على موقعنا لتسهيل
                            إجراءات تسجيل الوصول الخاصة بكم.</br>
                            rh@nmtc.tn</br>
                            <span class="svg-icon svg-icon-danger svg-icon-2hx"><svg width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z"
                                        fill="currentColor" />
                                </svg>
                            </span> شكرًا لتعاونكم.
                        </p>
                        <!--begin::Illustration-->

                        <!--end::Illustration-->
                        <!--begin::Link-->
                        <h1 class="fw-bolder text-gray-900 mb-5">Front</h1>
                        @if ($cin == false)
                            <div class="mb-4">
                                <div id="drag-drop-area"></div>
                            </div>
                        @else
                            <div class="alert alert-primary d-flex align-items-center p-5">
                                <!--begin::Icon-->
                                <span class="svg-icon svg-icon-2hx svg-icon-primary me-3"><svg width="24"
                                        height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3"
                                            d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                            fill="currentColor" />
                                        <path
                                            d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                                            fill="currentColor" />
                                    </svg></span>
                                <!--end::Icon-->

                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column">
                                    <!--begin::Title-->
                                    <h4 class="mb-1 text-dark">ID Front uploaded successfuly</h4>
                                    <!--end::Title-->
                                    <!--begin::Content-->
                                    {{-- <span>The alert component can be used to highlight certain parts of your page for higher content visibility.</span> --}}
                                    <!--end::Content-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                        @endif
                        <h1 class="fw-bolder text-gray-900 mb-5">Back</h1>
                        @if ($cinBack == false)
                            <div class="mb-4">
                                <div id="drag-drop-area2"></div>
                            </div>
                        @else
                            <div class="alert alert-primary d-flex align-items-center p-5">
                                <!--begin::Icon-->
                                <span class="svg-icon svg-icon-2hx svg-icon-primary me-3"><svg width="24"
                                        height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3"
                                            d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                            fill="currentColor" />
                                        <path
                                            d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                                            fill="currentColor" />
                                    </svg></span>
                                <!--end::Icon-->

                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column">
                                    <!--begin::Title-->
                                    <h4 class="mb-1 text-dark">ID Back uploaded successfuly</h4>
                                    <!--end::Title-->

                                </div>
                                <!--end::Wrapper-->
                            </div>
                        @endif
                        <!--begin::Title-->
                        <h1 class="fw-bolder text-gray-900 mb-5">OR</h1>
                        <!--end::Title-->
                        <!--begin::Text-->
                        <p class="fw-semibold fs-6 text-white mb-7"> If you don't have a national ID card, upload the first page of you Passport or your
                            birth certificate if you're less than 18 years old </br>Thank you<span
                                class="svg-icon svg-icon-danger svg-icon-2hx"><svg width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                        </p>
                        <h1 class="fw-bolder text-gray-900 mb-5">Birth certificate / Passport</h1>
                        @if ($madhmoun == false)
                            <div class="mb-4">
                                <div id="drag-drop-area3"></div>
                            </div>
                        @else
                            <div class="alert alert-primary d-flex align-items-center p-5">
                                <!--begin::Icon-->
                                <span class="svg-icon svg-icon-2hx svg-icon-primary me-3"><svg width="24"
                                        height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3"
                                            d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                            fill="currentColor" />
                                        <path
                                            d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                                            fill="currentColor" />
                                    </svg></span>
                                <!--end::Icon-->

                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column">
                                    <!--begin::Title-->
                                    <h4 class="mb-1 text-dark">File uploaded successfuly</h4>
                                    <!--end::Title-->

                                </div>
                                <!--end::Wrapper-->
                            </div>
                        @endif
                        <div class="mb-0">


                            <a href=""
                                onclick="event.preventDefault();
                                document.getElementById('skip-form').submit();"
                                class="text-primary opacity-75-hover fs-6 fw-bold">Skip
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-3 svg-icon-primary">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="18" y="13" width="13"
                                            height="2" rx="1" transform="rotate(-180 18 13)"
                                            fill="currentColor" />
                                        <path
                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon--></a>
                            <form id="skip-form" action="{{ route('user.SkipCIN') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        <!--end::Link-->
                    </div>
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Authentication - Signup Welcome Message-->
    </div>
    <style>
        /* Default styles */
        .uppy-Dashboard-inner {
            width: 100% !important;
            max-width: 600px !important;
            height: 400px !important;
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

    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/upload.js') }}"></script>

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
            endpoint: '{{ route('user.uploadCinFront') }}',

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
            endpoint: '{{ route('user.uploadCinBack') }}',

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
            target: '#drag-drop-area3',
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
            endpoint: '{{ route('user.uploadMadhmounPassport') }}',

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
</body>

</html>

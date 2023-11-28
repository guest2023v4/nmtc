@extends('dashboards.organizers.layouts.organizers-dash-layout')
@section('title', 'NMTC - Participants')

@section('content')
    <div class="toolbar py-5 " id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-white fw-bold my-1 fs-3">Participants List</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">
                        <a href="index.html" class="text-white text-hover-primary">Dashboards</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">Participants List</li>
                    <!--end::Item-->

                </ul>
                <!--end::Breadcrumb-->

            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-3 py-md-1">
                <!--begin::Wrapper-->
                <div class="me-3">
                    <div class="d-flex align-items-center  my-8">

                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                    rx="1" transform="rotate(45 17.0365 15.1223)" fill="white" />
                                <path
                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                    fill="white" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" data-kt-filter="search"
                            class="form-control form-control-solid w-250px ps-14 search-user" placeholder="Search user" />
                    </div>
                </div>
                <!--end::Wrapper-->

                <!--begin::Button-->




            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->

    </div>
    <div class="row">
        <div class="col-md-12" id="UsersList">
            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                <!--begin::Post-->
                <div class="content flex-row-fluid" id="kt_content">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card header-->
                        <div class="card-header border-0 pt-6">
                            <!--begin::Card title-->
                            <div class="card-title">

                            </div>
                            <!--begin::Card title-->
                            <!--begin::Export buttons-->
                            <div id="kt_datatable_example_1_export" class="d-none"></div>
                            <!--end::Export buttons-->
                        </div>
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">

                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body py-4">
                            <!--begin::Table-->
                            <form action="{{ route('organizer.assign_room') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="fs-1">ROOM ID</label><input required type="text" name="room"
                                            class="form-control text-white fs-4hx" placeholder="000" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="fs-1">HOTEL ROOM</label><input required name="hotel"
                                            type="text" class="form-control text-white fs-4hx" placeholder="000" />
                                    </div>
                                </div>
                                <div class="row mt-6">
                                    <div class="col-md-8">
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary w-100">Assign</button>
                                    </div>
                                </div>
                            </form>

                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Post-->
            </div>
        </div>
        <div class="col-md-4" id="ViewUser">

        </div>

    </div>

   
    <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
        <!--begin::Container-->
        <div class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
            <!--begin::Copyright-->
            <div class="text-dark order-2 order-md-1">
                <span class="text-muted fw-semibold me-1">2023&copy;</span>
                <a href="#" target="_blank" class="text-gray-800 text-hover-primary">NMTC</a>
            </div>
            <!--end::Copyright-->
            <!--begin::Menu-->
            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                <li class="menu-item">
                    <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                </li>
                <li class="menu-item">
                    <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                </li>
                <li class="menu-item">
                    <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
                </li>
            </ul>
            <!--end::Menu-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Footer-->
    </div>

  



@endsection

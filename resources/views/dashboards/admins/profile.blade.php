@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title', 'Profile')

<?php $roles = ['Super Admin', 'Admin', 'Organizer', 'Pay agent', 'Challenger', 'Visitor', 'User']; ?>

@section('content')
    <!--begin::Toolbar-->
    <div class="toolbar py-5 py-lg-15" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class=" container-xxl  d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column">
                <!--begin::Title-->
                <h1 class="d-flex text-white fw-bold fs-2qx my-1 me-5">
                    Account Overview
                </h1>
                <!--end::Title-->


                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">
                        <a href="/" class="text-white text-hover-primary">
                            Home </a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">
                        <a href="{{ route('admin.dashboard') }}" class="text-white text-hover-primary">
                            Dashboard </a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">
                        Overview </li>
                    <!--end::Item-->

                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Container-->
    <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start  container-xxl ">

        <!--begin::Post-->
        <div class="content flex-row-fluid" id="kt_content">

            <!--begin::Layout - Settings-->
            <div class="d-flex flex-column flex-xl-row">
                <!--begin::Sidebar-->
                <div class="flex-column flex-lg-row-auto w-100 w-xl-300px mb-10">
                    <!--begin::Card-->
                    <div class="card card-flush" data-kt-sticky="true" data-kt-sticky-name="account-navbar"
                        data-kt-sticky-offset="{default: false, xl: '80px'}" data-kt-sticky-height-offset="50"
                        data-kt-sticky-width="{lg: '250px', xl: '300px'}" data-kt-sticky-animation="false"
                        data-kt-sticky-left="auto" data-kt-sticky-top="90px" data-kt-sticky-animation="false"
                        data-kt-sticky-zindex="95">

                        <!--begin::Card header-->
                        <div class="card-header justify-content-end">
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0 p-10">
                            <!--begin::Summary-->
                            <div class="d-flex flex-center flex-column mb-10">
                                <!--begin::Avatar-->
                                <div class="symbol  mb-3 symbol-100px symbol-circle "><img src="{{ Auth::user()->picture }}"
                                        alt="User profile picture" /></div><!--end::Avatar-->
                                <!--begin::Name-->
                                <a href="#" class="fs-2 text-gray-800 text-hover-primary fw-bold mb-1">
                                    {{ Auth::user()->name }} </a>
                                <!--end::Name-->

                                <!--begin::Position-->
                                <div class="fs-6 fw-semibold text-gray-400 mb-2">
                                    {{ $roles[Auth::user()->role] }} </div>
                                <!--end::Position-->
                            </div>
                            <!--end::Summary-->

                            <!--begin::Menu-->
                            <ul
                                class="menu menu-column menu-pill menu-title-gray-700 menu-bullet-gray-300 menu-state-bg menu-state-bullet-primary fw-bold fs-5 mb-10">
                                <!--begin::Menu item-->
                                <li class="menu-item mb-1">
                                    <!--begin::Menu link-->
                                    <a class="menu-link px-6 py-4 active" href="#">
                                        <span class="menu-bullet"><span class="bullet"></span></span>
                                        <span class="menu-title">
                                            Overview </span>
                                    </a>
                                    <!--end::Menu link-->
                                </li>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <li class="menu-item mb-1">
                                    <!--begin::Menu link-->
                                    <a class="menu-link px-6 py-4" href="{{ route('admin.settings') }}">
                                        <span class="menu-bullet"><span class="bullet"></span></span>
                                        <span class="menu-title">
                                            Settings </span>
                                    </a>
                                    <!--end::Menu link-->
                                </li>
                                <!--end::Menu item-->
                            </ul>
                            <!--end::Menu-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Sidebar-->

                <!--begin::Content-->
                <div class="flex-lg-row-fluid ms-lg-10">

                    <!--begin::details View-->
                    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
                        <!--begin::Card header-->
                        <div class="card-header cursor-pointer">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Profile Details</h3>
                            </div>
                            <!--end::Card title-->

                            <!--begin::Action-->
                            <a href="{{ route('admin.settings') }}" class="btn btn-primary align-self-center">Edit
                                Profile</a>
                            <!--end::Action-->
                        </div>
                        <!--begin::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body p-9">
                            @if (!session()->get('cin_uploaded'))
                                <!--begin::Notice-->
                                <div
                                    class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-7 p-6">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-information-5 fs-2tx text-warning me-4"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i> <!--end::Icon-->

                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack flex-grow-1 ">
                                        <!--begin::Content-->
                                        <div class=" fw-semibold">
                                            <h4 class="text-gray-900 fw-bold">We need your attention!</h4>

                                            <div class="fs-6 text-gray-700 ">Your CIN is not uploaded yet ! <a
                                                    class="fw-bold" href="{{ route('admin.uploadCIN') }}">Upload CIN</a>.
                                            </div>
                                        </div>
                                        <!--end::Content-->

                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Notice-->
                            @endif
                            <!--begin::Row-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Full Name</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-dark">{{ Auth::user()->name }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->

                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">CIN / Passport / Birth Certificate</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-semibold fs-6">{{ Auth::user()->cin }}</span>
                                    @if (session()->get('cin_uploaded'))
                                        <span class="badge badge-success">Uploaded</span>
                                    @else
                                        <span class="badge badge-danger">Not uploaded</span>
                                    @endif

                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Email</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-semibold fs-6">{{ Auth::user()->email }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted d-flex align-items-center">
                                    Contact Phone
                                </label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8 d-flex align-items-center">
                                    <span class="fw-bold fs-6 me-2">{{ Auth::user()->phone }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Participation type</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-semibold fs-6">{{ $roles[Auth::user()->role] }}</span>
                                    @if (Auth::user()->pack != null)
                                        <span class="badge badge-info">{{ Auth::user()->pack->type }}</span>
                                    @endif
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Birthday</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <span class="fw-semibold fs-6">{{ Auth::user()->birthday }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted d-flex align-items-center">
                                    City
                                </label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-dark">{{ Auth::user()->city }}</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Gender</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <span class="fw-bold fs-6 text-dark">
                                        @if (Auth::user()->gender == 'M')
                                            Male
                                        @elseif (Auth::user()->gender == 'F')
                                            Female
                                        @endif
                                    </span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">University</label>
                                <!--begin::Label-->

                                <!--begin::Label-->
                                <div class="col-lg-8">
                                    <span class="fw-semibold fs-6">{{ Auth::user()->university }}</span>
                                </div>
                                <!--begin::Label-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Level of studies</label>
                                <!--begin::Label-->

                                <!--begin::Label-->
                                <div class="col-lg-8">
                                    <span class="fw-semibold fs-6">{{ Auth::user()->level_of_study }}</span>
                                </div>
                                <!--begin::Label-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Github link</label>
                                <!--begin::Label-->

                                <!--begin::Label-->
                                <div class="col-lg-8">
                                    <span class="fw-semibold fs-6">{{ Auth::user()->github }}</span>
                                </div>
                                <!--begin::Label-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Linkedin link</label>
                                <!--begin::Label-->

                                <!--begin::Label-->
                                <div class="col-lg-8">
                                    <span class="fw-semibold fs-6">{{ Auth::user()->linkedin }}</span>
                                </div>
                                <!--begin::Label-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-7">
                                <!--begin::Label-->
                                <label class="col-lg-4 fw-semibold text-muted">Resume</label>
                                <!--begin::Label-->

                                <!--begin::Label-->
                                <div class="col-lg-8">
                                    <span class="fw-semibold fs-6">
                                        @if (Auth::user()->cv != null)
                                            <span class="badge badge-success">Resume uploaded</span>
                                        @else
                                            <span class="badge badge-warning">Resume not uploaded</span>
                                        @endif
                                    </span>
                                </div>
                                <!--begin::Label-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::details View-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Layout - Overview-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Container-->

@endsection

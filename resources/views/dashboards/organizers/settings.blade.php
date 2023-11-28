@extends('dashboards.organizers.layouts.organizers-dash-layout')
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
                    Account Settings
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
                        <a href="{{ route('organizer.dashboard') }}" class="text-white text-hover-primary">
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
                        Settings </li>
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
                                    <a class="menu-link px-6 py-4 " href="{{ route('organizer.profile') }}">
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
                                    <a class="menu-link px-6 py-4 active" href="#">
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

                    <!--begin::Basic info-->
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                            data-bs-target="#kt_account_profile_details" aria-expanded="true"
                            aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Profile Details</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->

                        <!--begin::Content-->
                        <div id="kt_account_settings_profile_details" class="collapse show">
                            <!--begin::Form-->
                            <form id="kt_account_profile_details_form" class="form" method="POST"
                                action="{{ route('organizerUpdateInfo') }} " enctype="multipart/form-data">
                                @csrf
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span>CIN <span class="text-sm text-gray-400">(Once set, it can't be modified)</span></span>


                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                title="CIN">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i></span> </label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            @if (Auth::user()->cin == null)
                                                <input type="text" name="cin"
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="CIN" value="{{ Auth::user()->cin }}" />
                                                <span class="text-danger">
                                                    @error('cin')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            @else
                                                <span class="form-control text-gray-500 form-control-lg form-control-solid ">{{ Auth::user()->cin }}</span>
                                            @endif
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span>Contact phone</span>


                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                title="Phone number must be active">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i></span> </label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="tel" name="phone"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Phone number" value="{{ Auth::user()->phone }}" />
                                            <span class="text-danger">
                                                @error('phone')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span>City</span>


                                            <span class="ms-1" data-bs-toggle="tooltip" title="City">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i></span> </label>
                                        <!--end::Label-->

                                        <!--begin::Col-->

                                        <div class="col-lg-8 fv-row">
                                            <select name="city" aria-label="Select participation type"
                                                data-control="select2" data-placeholder="Select participation type..."
                                                class="form-select form-select-solid form-select-lg fw-semibold">
                                                @foreach ($cities as $city)
                                                    <option value="{{$city}}" @if(Auth::user()->city == $city) selected @endif>{{$city}}</option>
                                                @endforeach
                                                
                                            </select>
                                            <span class="text-danger">
                                                @error('type')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        <!--end::Col-->
                                    </div>

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Birthday</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="date" name="birthday"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Birthday" value="{{ Auth::user()->birthday }}" />
                                            <span class="text-danger">
                                                @error('birthday')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">University</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="university"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="University" value="{{ Auth::user()->university }}" />
                                            <span class="text-danger">
                                                @error('university')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Level of study</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="lvl_of_stdy"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Level of study"
                                                value="{{ Auth::user()->level_of_study }}" />
                                            <span class="text-danger">
                                                @error('lvl_of_stdy')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Github link</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="github"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="https://github.com/" value="{{ Auth::user()->github }}" />
                                            <span class="text-danger">
                                                @error('github')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Linkedin
                                            link</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="linkedin"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="https://www.linkedin.com/in/"
                                                value="{{ Auth::user()->linkedin }}" />
                                            <span class="text-danger">
                                                @error('linkedin')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Resume
                                            @if (Auth::user()->cv != null)
                                                <span class="ml-2 badge badge-success">Uploaded</span>
                                            @endif
                                        </label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="file" name="cv"
                                                class="form-control form-control-lg form-control-solid" accept=".pdf" />
                                            <span class="text-danger">
                                                @error('cv')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card body-->

                                <!--begin::Actions-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="reset"
                                        class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                    <button type="submit" class="btn btn-primary"
                                        id="kt_account_profile_details_submit">Save Changes</button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Basic info-->

                    <!--begin::Basic info-->
                    <div class="card mb-5 mb-xl-10">
                        <!--begin::Card header-->
                        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                            data-bs-target="#kt_account_profile_details" aria-expanded="true"
                            aria-controls="kt_account_profile_details">
                            <!--begin::Card title-->
                            <div class="card-title m-0">
                                <h3 class="fw-bold m-0">Change password</h3>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--begin::Card header-->

                        <!--begin::Content-->
                        <div id="kt_account_settings_profile_details" class="collapse show">
                            <!--begin::Form-->
                            <form id="kt_account_profile_details_form" class="form" method="post"
                                action="{{ route('organizerUpdatePassword') }}">
                                @csrf
                                <!--begin::Card body-->
                                <div class="card-body border-top p-9">
                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Old
                                            password</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="password" name="old_password"
                                                class="form-control form-control-lg form-control-solid" />
                                            <span class="text-danger">
                                                @error('old_password')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Wrapper-->
                                    <div class="row mb-6" data-kt-password-meter="true">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">
                                            New password
                                        </label>
                                        <!--end::Label-->

                                        <!--begin::Input wrapper-->
                                        <div class="position-relative col-lg-8 fv-row">
                                            <input class="form-control form-control-lg form-control-solid" type="password"
                                                placeholder="" name="new_password" autocomplete="off" />

                                            <!--begin::Visibility toggle-->
                                            <span class="btn btn-sm btn-icon position-absolute top-0 end-0 mt-2 mx-5"
                                                data-kt-password-meter-control="visibility">
                                                <i class="bi bi-eye-slash fs-2"></i>

                                                <i class="bi bi-eye fs-2 d-none"></i>
                                            </span>
                                            <!--end::Visibility toggle-->
                                            <!--begin::Highlight meter-->
                                            <span class="text-danger">
                                                @error('new_password')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                            <div class="d-flex align-items-center my-3"
                                                data-kt-password-meter-control="highlight">
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px">
                                                </div>
                                            </div>
                                            <!--end::Highlight meter-->
                                            <!--begin::Hint-->
                                            <div class="text-muted">
                                                Use 8 or more characters with a mix of letters, numbers &
                                                symbols.
                                            </div>
                                            <!--end::Hint-->
                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Input group-->
                                    <div class="row mb-6">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Confirm
                                            password</label>
                                        <!--end::Label-->

                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="password" name="new_password_confirmation"
                                                class="form-control form-control-lg form-control-solid" />
                                            <span class="text-danger">
                                                @error('new_password_confirmation')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card body-->

                                <!--begin::Actions-->
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="reset"
                                        class="btn btn-light btn-active-light-primary me-2">Discard</button>
                                    <button type="submit" class="btn btn-danger"
                                        id="kt_account_profile_details_submit">Change password</button>
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Basic info-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Layout - Settings-->
        </div>
        <!--end::Post-->
    </div>
    <!--end::Container-->

@endsection

@extends('dashboards.organizers.layouts.organizers-dash-layout')
@section('title', 'Dashboard')
<?php
$routeto = 'profile';

if (session('route') != null) {
    $routeto = session('route');
    session()->forget('route');
} else {
    $routeto = 'profile';
}
$payment_cond = (Auth::user()->transport == 1 && (Auth::user()->pay_status_pack != '1' || Auth::user()->pay_status_bus != '1')) ||(Auth::user()->transport != 1 && Auth::user()->pay_status_pack != '1');

?>
@section('content')
    <!--begin::Toolbar-->
    <div class="toolbar py-6 d-flex justify-content-center" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex justify-content-center">
            <!--begin::Page title-->
            <div class="page-title d-flex justify-content-center me-3" id="demo1">
                <!--begin::Title-->
                <div class="d-flex flex-column justify-content-center text-center">

                    <h1 class="d-flex text-white fw-bold my-1 px-5 fs-4x" id="days_nmtc">00</h1>
                    <h1 class="d-flex text-white fw-bold my-1 px-5 fs-3 justify-content-center">Days</h1>
                </div>
                <div class="d-flex flex-column justify-content-center text-center">
                    <h1 class="d-flex text-white fw-bold my-1 px-5 fs-4x" id="hours_nmtc">00</h1>
                    <h1 class="d-flex text-white fw-bold my-1 px-5 fs-3 justify-content-center">Hours</h1>
                </div>
                <div class="d-flex flex-column justify-content-center text-center">
                    <h1 class="d-flex text-white fw-bold my-1 px-5 fs-4x" id="minutes_nmtc">00</h1>
                    <h1 class="d-flex text-white fw-bold my-1 px-5 fs-3 justify-content-center">Minutes
                    </h1>
                </div>
                <div class="d-flex flex-column justify-content-center text-center">
                    <h1 class="d-flex text-white fw-bold my-1 px-5 fs-4x" id="seconds_nmtc">00</h1>
                    <h1 class="d-flex text-white fw-bold my-1 px-5 fs-3 justify-content-center">Seconds
                    </h1>
                </div>

                <!--end::Title-->


            </div>
            <!--end::Page title-->

        </div>
        <!--end::Container-->

    </div>

    <!--end::Toolbar-->
    <!--begin::Container-->
    <div class="row ms-6">
        <div class="col-md-8">
            <!--begin::Post-->
            <div class="content flex-row-fluid " id="kt_content">
                <!--begin::Navbar-->
                <div class="card mb-5 mb-xxl-8">
                    <div class="card-body mt-9 pb-0">
                        <!--begin::Details-->
                        <div class="d-flex flex-wrap flex-sm-nowrap mb-6 name-sm">
                            <!--begin: Pic-->
                            <div class="pic-sm-cent mb-4 name-sm">
                                <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                    <img src="{{ Auth::user()->picture }}" alt="image" />

                                </div>
                            </div>
                            <!--end::Pic-->
                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <!--begin::Title-->
                                <div class="d-flex name-sm  align-items-start flex-wrap mb-2">
                                    <!--begin::User-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Name-->
                                        <div class="d-flex name-sm  align-items-center mb-1">
                                            <p class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">
                                                {{ Auth::user()->name }}</p>

                                        </div>
                                        <!--end::Name-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-wrap fw-semibold fs-6 mb-2 pe-2">


                                            <a href="#"
                                                class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
                                                <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                                <span class="svg-icon svg-icon-4 me-1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3"
                                                            d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->{{ Auth::user()->email }}
                                            </a>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::User-->

                                </div>
                                <!--end::Title-->
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap flex-sm-wrap">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-wrap justify-content-start">
                                        <!--begin::Stats-->
                                        <div class="d-flex flex-wrap">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-4 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">

                                                    <div class="fs-2 fw-bold">
                                                        @if (Auth::user()->role == '3')
                                                            Payagent
                                                        @elseif (Auth::user()->role == '2')
                                                            Organizer
                                                        @elseif(Auth::user()->role == '1')
                                                            Admin
                                                        @elseif(Auth::user()->role == '0')
                                                            Super Admin
                                                        @endif
                                                    </div>
                                                </div>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="fw-semibold fs-6 text-gray-400">Type</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-4 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">

                                                    <div class="fs-2 fw-bold">
                                                        @if (isset($data['room']))
                                                            {{ $data['room']->num }}
                                                        @else
                                                            --
                                                        @endif
                                                    </div>
                                                </div>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="fw-semibold fs-6 text-gray-400">Room</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-4 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">

                                                    <div class="fs-2 fw-bold" id="transport"
                                                        data-variable="<?php if (Auth::user()->bus_id) {
                                                            echo 1;
                                                        } else {
                                                            echo 0;
                                                        } ?>">
                                                        @if (Auth::user()->transport == '0')
                                                            Own
                                                        @elseif (Auth::user()->transport == '1')
                                                            Bus
                                                        @elseif (Auth::user()->transport == '2')
                                                            --
                                                        @endif
                                                    </div>
                                                </div>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="fw-semibold fs-6 text-gray-400">Transport</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-4 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">

                                                    <div class="fs-2 fw-bold">
                                                        @if (Auth::user()->pay_status_pack == 2)
                                                            Pending
                                                        @else
                                                            @if (Auth::user()->pay_status_pack == 1)
                                                                Paid
                                                            @elseif (Auth::user()->pay_status_pack == 0)
                                                                Unpaid
                                                            @endif
                                                        @endif
                                                    </div>
                                                </div>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="fw-semibold fs-6 text-gray-400">Pack Fee</div>
                                                <!--end::Label-->

                                            </div>
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-4 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">

                                                    <div class="fs-2 fw-bold">
                                                        @if (Auth::user()->transport == 1)
                                                            @if (Auth::user()->pay_status_bus == 1)
                                                                Paid
                                                            @elseif (Auth::user()->pay_status_bus == 2)
                                                                Pending
                                                            @else
                                                                Unpaid
                                                            @endif
                                                        @else
                                                            __
                                                        @endif
                                                    </div>
                                                </div>
                                                <!--end::Number-->
                                                <!--begin::Label-->
                                                <div class="fw-semibold fs-6 text-gray-400">Bus Fee</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Wrapper-->

                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Navs-->

                        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">

                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 @if ($routeto == 'profile') active @endif"
                                    data-bs-toggle="tab" href="#kt_tab_pane_1" onclick="clearOpen()">Buses</a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->

                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            @if ($data['c_rooms'] == 1 || Auth::user()->room_id != null)
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 @if ($routeto == 'room') active @endif"
                                    data-bs-toggle="tab" href="#kt_tab_pane_3"
                                    onclick="clearOpen('#kt_tab_pane_3')">Room</a>
                            </li>
                            @endif
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            @if ($data['c_payment'] == 1)
                                @if ($payment_cond)
                                    <li class="nav-item mt-2">
                                        <a class="nav-link text-active-primary ms-0 me-10 py-5 @if ($routeto == 'payment') active @endif"
                                            data-bs-toggle="tab" href="#kt_tab_pane_10"
                                            onclick="clearOpen('#kt_tab_pane_10')">Payment</a>
                                    </li>
                                @endif
                            @endif
                            <!--end::Nav item-->


                        </ul>



                        <!--begin::Navs-->
                    </div>
                </div>
                <!--end::Navbar-->
                <!--begin::Timeline-->
                <div class="card">
                    <!--begin::Card head-->
                    <div class="card-header card-header-stretch">
                        <!--begin::Title-->
                        <div class="card-title d-flex align-items-center">

                            <h3 class="fw-bold m-0 text-gray-800">NMTC</h3>
                        </div>
                        <!--end::Title-->

                    </div>
                    <!--end::Card head-->
                    <!--begin::Card body-->
                    <div class="card-body">

                        <!--begin::Tab Content-->
                        <div class="tab-content" id="myTabContent">
                            <!--begin::Tab panel-->
                            <div class="card-body p-0 tab-pane fade show  @if ($routeto == 'profile') active @endif"
                                id="kt_tab_pane_1" role="tabpanel">
                                <div class="row">
                                    @if (Auth::user()->pay_status_pack == 1)
                                        @if ($data['c_bus'])
                                            <table id="kt_datatable_zero_configuration"
                                                class="table table-row-dashed gs-2 gy-5">
                                                <thead>
                                                    <tr class="fw-semibold fs-6 text-muted">

                                                        <th class="pl-5">Name</th>
                                                        <th>Departure time</th>
                                                        <th>Fees</th>
                                                        <th>Seats</th>
                                                        <th>Reserve</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data['buses'] as $bus)
                                                        <tr>

                                                            <td><i class="fonticon-location fs-1"></i>{{ $bus->station }}
                                                            </td>
                                                            <td>{{ $bus->hour }}</td>
                                                            <td>{{ $bus->price }}</td>
                                                            <td class="w-auto">
                                                                <div
                                                                    class="progress  
                                                    @if (($bus->attendance_nb / $bus->capacity) * 100 == 100) bg-danger
                                                    @elseif (($bus->attendance_nb / $bus->capacity) * 100 > 50)
                                                    bg-warning
                                                    @else
                                                    bg-success @endif
                                                    bg-opacity-50 ">
                                                                    <div class="progress-bar 
                                                    @if (($bus->attendance_nb / $bus->capacity) * 100 == 100) bg-danger
                                                    @elseif (($bus->attendance_nb / $bus->capacity) * 100 > 50)
                                                    bg-warning
                                                    @else
                                                    bg-success @endif
                                                    
                                                    "
                                                                        role="progressbar"
                                                                        style="width: {{ ($bus->attendance_nb / $bus->capacity) * 100 }}%"
                                                                        aria-valuenow="{{ $bus->attendance_nb }}"
                                                                        aria-valuemin="0"
                                                                        aria-valuemax="{{ $bus->capacity }}"></div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                @if (!isset($data['bus']))
                                                                    <form action="{{ route('reserveBus') }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="id"
                                                                            value="{{ $bus->id }}">
                                                                        <input type="submit"
                                                                            class="btn btn-sm @if (($bus->attendance_nb / $bus->capacity) * 100 == 100) btn-light-danger @else btn-light-success @endif"
                                                                            name="submit"
                                                                            value="@if (($bus->attendance_nb / $bus->capacity) * 100 == 100) Full @else Reserve @endif">
                                                                    </form>
                                                                @elseif ($data['bus']->id == $bus->id)
                                                                    <form action="{{ route('cancelBus') }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="id"
                                                                            value="{{ $bus->id }}">
                                                                        <input type="submit"
                                                                            class="btn btn-sm btn-light-warning"
                                                                            name="submit" value="Cancel">
                                                                    </form>
                                                                @endif
                                                            </td>

                                                        </tr>
                                                    @endforeach

                                                </tbody>

                                            </table>
                                        @else
                                            <div class="col-md-12 d-flex justify-content-center justify-items-center">
                                                <p class="fs-4">Buses will be launched very soon</p>
                                            </div>
                                        @endif
                                    @else
                                        <div class="col-md-12 d-flex justify-content-center justify-items-center">
                                            <p class="fs-4">Bus module will be activated soon</p>
                                        </div>

                                    @endif
                                </div>
                            </div>
                            <!--end::Tab panel-->
                            <!--begin::Tab panel-->

                            <!--end::Tab panel-->
                            <!--begin::Tab panel-->
                            @if ($data['c_rooms'] == 1 || Auth::user()->room_id != null)
                            <div class="card-body p-0 tab-pane fade show  @if ($routeto == 'room') active @endif"
                                id="kt_tab_pane_3" role="tabpanel">
                                <!--begin::Type-->
                                <div class="current" data-kt-stepper-element="content">
                                    <!--begin::Wrapper-->
                                    <div class="w-100" id="joincreate">
                                        @if (!Auth::user()->room_id)
                                            <!--begin::Heading-->
                                            <div class="d-flex justify-content-center">
                                                <div class="pb-7 pb-lg-12 d-flex flex-column justify-content-center">
                                                    <!--begin::Title-->
                                                    <h1
                                                        class="fw-bold fs-2qx text-dark justify-content-center text-center my-6">
                                                        Step 1</h1>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="text-white fw-semibold fs-4 text-center">
                                                        Choose
                                                        <span class="link-primary fw-bold">"Create
                                                            Room"</span>
                                                        if you want to create one<br> or <span
                                                            class="link-primary fw-bold">"Join Room"</span>
                                                        if
                                                        you already have a room
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Input group-->


                                            <div class="d-flex justify-content-center mb-15 flex-wrap"
                                                data-kt-buttons="true">
                                                <!--begin::Mixed Widget 4-->
                                                <div class="card card-xl-stretch mb-xl-8 mx-6 mb-6"
                                                    style="background-color: #151521 !important;">

                                                    <!--begin::Body-->
                                                    <div
                                                        class="card-body d-flex create_btn_sm justify-content-center align-items-center padd-0">

                                                        <i class="bi bi-plus-circle fs-3qx py-6 icon-sm-si"
                                                            style="color: #8316bd;"></i>

                                                        <div class="pt-5">
                                                            <p class="text-center fs-6">
                                                            <p id="createRoom" class="btn btn-secondary w-100 py-3"
                                                                style="padding-left: 50px !important;padding-right: 50px !important;">
                                                                Create
                                                                a room</p>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Mixed Widget 4-->
                                                <!--begin::Mixed Widget 4-->
                                                <div class="card card-xl-stretch mb-xl-8 mx-6 mb-6"
                                                    style="background-color: #151521 !important;">

                                                    <!--begin::Body-->
                                                    <div
                                                        class="card-body d-flex create_btn_sm justify-content-center align-items-center padd-0">


                                                        <i class="bi bi-person-plus fs-3qx py-6 icon-sm-si"
                                                            style="color: #8316bd;"></i>
                                                        <div class="pt-5">
                                                            <p class="text-center fs-6">
                                                            <p id="joinRoom"
                                                                class="btn btn-secondary w-100 py-3 join_bt_sm">
                                                                Join a room</p>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Mixed Widget 4-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            {{-- <div class="d-flex justify-content-end">
                                            <button type="button" class="btn btn-lg btn-primary"
                                                data-kt-element="type-next">
                                                <span class="indicator-label">Save Changes</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div> --}}
                                            <!--end::Actions-->
                                        @else
                                            <!--begin::Wrapper-->
                                            <div class="w-100">

                                                <!--begin::Input group-->
                                                <ul
                                                    class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                                                    <li class="nav-item">
                                                        <a class="nav-link text-active-primary ms-0 me-10 py-5 active"
                                                            data-bs-toggle="tab" href="#nmtc_room">Dashboard</a>
                                                    </li>
                                                    @if (isset($data['room']) && Auth::user()->id == $data['room']->room_leader_id)
                                                        <li class="nav-item">
                                                            <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                                                data-bs-toggle="tab" href="#nmtc_room_inv">Join
                                                                requests</a>
                                                        </li>
                                                    @endif

                                                </ul>

                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active" id="nmtc_room"
                                                        role="tabpanel">
                                                        <div class="d-flex justify-content-center">
                                                            <div
                                                                class="pb-7 pb-lg-12 d-flex flex-column justify-content-center">
                                                                <!--begin::Title-->
                                                                <h1
                                                                    class="fw-bold  text-dark  d-flex justify-content-center justify-items-center text-center my-1">
                                                                    Room Members &nbsp;<span class="badge badge-success">
                                                                        {{ count($data['room_roomates']) }} /
                                                                        {{ $data['room']->capacity }}
                                                                    </span></h1>
                                                                <!--end::Title-->

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card card-xl-stretch mb-xl-8 mx-6 mt-7"
                                                                    style="background-color: #151521 !important;">

                                                                    <!--begin::Body-->
                                                                    <div
                                                                        class="card-body d-flex flex-column justify-content-center align-items-center">

                                                                        <div class=" symbol-50px pt-5">
                                                                            <img src="{{ asset('assets/media/logos/logo.png') }}"
                                                                                alt="" />
                                                                        </div>
                                                                        @if ($data['room']->type == 0)
                                                                            <div class="pt-10">
                                                                                <div class="d-flex">
                                                                                    <input id="kt_share_earn_link_input"
                                                                                        type="text"
                                                                                        class="form-control form-control-transparent me-3 flex-grow-1"
                                                                                        name="search"
                                                                                        value="{{ $data['room']->code }}"
                                                                                        readonly />

                                                                                    <button
                                                                                        id="kt_share_earn_link_copy_button"
                                                                                        class="btn btn-light fw-bold flex-shrink-0 h-40px w-40px text-center"
                                                                                        style="padding-left: 0px;
                                                                            padding-right: 0px;
                                                                            padding-top: 0px;
                                                                            padding-bottom: 0px;"
                                                                                        data-clipboard-target="#kt_share_earn_link_input"><svg
                                                                                            width="24" height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path opacity="0.5"
                                                                                                d="M18 2H9C7.34315 2 6 3.34315 6 5H8C8 4.44772 8.44772 4 9 4H18C18.5523 4 19 4.44772 19 5V16C19 16.5523 18.5523 17 18 17V19C19.6569 19 21 17.6569 21 16V5C21 3.34315 19.6569 2 18 2Z"
                                                                                                fill="currentColor" />
                                                                                            <path fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M14.7857 7.125H6.21429C5.62255 7.125 5.14286 7.6007 5.14286 8.1875V18.8125C5.14286 19.3993 5.62255 19.875 6.21429 19.875H14.7857C15.3774 19.875 15.8571 19.3993 15.8571 18.8125V8.1875C15.8571 7.6007 15.3774 7.125 14.7857 7.125ZM6.21429 5C4.43908 5 3 6.42709 3 8.1875V18.8125C3 20.5729 4.43909 22 6.21429 22H14.7857C16.5609 22 18 20.5729 18 18.8125V8.1875C18 6.42709 16.5609 5 14.7857 5H6.21429Z"
                                                                                                fill="currentColor" />
                                                                                        </svg></button>
                                                                                </div>

                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                    <!--end::Body-->
                                                                    <div class="card-footer">

                                                                        <!-- timestamp p -->
                                                                        <p class="text-center ">
                                                                            <?php
                                                                            $paid_room = false;
                                                                            foreach ($data['room_roomates'] as $roomPar) {
                                                                                if ($roomPar['pay_status_pack'] == 1) {
                                                                                    $paid_room = true;
                                                                                    break;
                                                                                }
                                                                            }
                                                                            ?>
                                                                            @if ($paid_room == false)
                                                                                @if (\Carbon\Carbon::now()->diffInHours($data['room']->updated_at) > 23)
                                                                                    <div
                                                                                        class="text-white text-center fs-4">
                                                                                        Room expired and marked to be deleted</div>
                                                                                    {{-- <div class="text-danger text-center fs-3
                                                                    "
                                                                                        id="closec"></div> --}}
                                                                                @else
                                                                                    <div
                                                                                        class="text-white text-center fs-4">
                                                                                        Room Will be closed after a period if no payment was done</div>
                                                                                    {{-- <div class="text-danger text-center fs-3
                                                                    "
                                                                                        id="twoda"></div> --}}
                                                                                @endif
                                                                            @endif


                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="card-body card-scroll h-300px">

                                                                    <div class="row">
                                                                        @if (is_array($data['room_roomates']))
                                                                            @foreach ($data['room_roomates'] as $roomPar)
                                                                                <!--begin::Mixed Widget 4-->
                                                                                <div class="card col-md-6 mb-xl-8 mx-2"
                                                                                    style="width: 250px;background-color: #151521 !important;">

                                                                                    <!--begin::Body-->
                                                                                    <div
                                                                                        class="card-body d-flex flex-column justify-content-center align-items-center">

                                                                                        <div
                                                                                            class="symbol symbol-50px overflow-hidden me-3 mb-5">

                                                                                            <div class="symbol-label">
                                                                                                <img src="{{ $roomPar['picture'] }}"
                                                                                                    alt=""
                                                                                                    class="w-100" />
                                                                                            </div>

                                                                                        </div>

                                                                                        <div class="pt-5 mt-5">
                                                                                                <p
                                                                                                    class="text-center fs-4 bold">
                                                                                                    <b>{{ $roomPar['name'] }}</b>
                                                                                                    @if (isset($data['room_leader']) && $roomPar['id'] == $data['room_leader']['id'])
                                                                                                        <span
                                                                                                            class="badge badge-success">C</span>
                                                                                                    @endif
                                                                                                    <span
                                                                                                        class="text-gray-600"><a
                                                                                                            href="mailto:{{ $roomPar['email'] }}">{{ $roomPar['email'] }}</a></span>
                                                                                                    <span
                                                                                                        class="text-gray-600">{{ $roomPar['phone'] }}</span>

                                                                                                </p>
                                                                                            </div>
                                                                                    </div>
                                                                                    <!--end::Body-->
                                                                                </div>
                                                                                <!--end::Mixed Widget 4-->
                                                                            @endforeach
                                                                            {{-- @else
                                                                            <div class="card col-md-6 mb-xl-8 mx-2"
                                                                                style="width: 250px;background-color: #151521 !important;">

                                                                                <!--begin::Body-->
                                                                                <div
                                                                                    class="card-body d-flex flex-column justify-content-center align-items-center">

                                                                                    <div
                                                                                        class="symbol symbol-50px overflow-hidden me-3 mb-5">

                                                                                        <div class="symbol-label">
                                                                                            <img src="{{ $users_in_room->picture }}"
                                                                                                alt=""
                                                                                                class="w-100" />
                                                                                        </div>

                                                                                    </div>

                                                                                    <div class="pt-5 mt-5">
                                                                                        <p class="text-center fs-4 bold">
                                                                                            <b>{{ $users_in_room->name }}</b>
                                                                                            @if ($users_in_room->id == $roomCaptain->RoomCaptain)
                                                                                                <span
                                                                                                    class="badge badge-success">C</span>
                                                                                            @endif
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                                <!--end::Body-->
                                                                            </div> --}}
                                                                        @endif
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if (Auth::user()->id == $data['room_leader']['id'])
                                                        <div class="tab-pane fade" id="nmtc_room_inv" role="tabpanel">
                                                            <div class="table-responsive">
                                                                <table class="table gs-7 gy-7 gx-7">
                                                                    <thead>
                                                                        <tr
                                                                            class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                                                            <th>Participants</th>
                                                                            <th>Phone</th>
                                                                            <th></th>
                                                                            <th></th>
                                                                            <th></th>
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @if (isset($data['room_join_requests']))
                                                                            @if (is_array($data['room_join_requests']))
                                                                                @foreach ($data['room_join_requests'] as $join_request)
                                                                                    <tr>
                                                                                        <td
                                                                                            class="d-flex align-items-center">
                                                                                            <!--begin:: Avatar -->
                                                                                            <div
                                                                                                class="symbol symbol-50px overflow-hidden me-3">

                                                                                                <div class="symbol-label">
                                                                                                    <img src="{{ $join_request['picture'] }}"
                                                                                                        alt=""
                                                                                                        class="w-100" />
                                                                                                </div>

                                                                                            </div>
                                                                                            <!--end::Avatar-->
                                                                                            <!--begin::User details-->
                                                                                            <div
                                                                                                class="d-flex flex-column">
                                                                                                <a href="#"
                                                                                                    class="text-gray-800 text-hover-primary mb-1">{{ $join_request['name'] }}</a>
                                                                                                <span>{{ $join_request['email'] }}</span>
                                                                                            </div>
                                                                                            <!--begin::User details-->
                                                                                        </td>
                                                                                        <td>{{ $join_request['phone'] }}
                                                                                        </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td class="d-flex flex-row">
                                                                                            @if($data['c_rooms'] == 1)
                                                                                            <form method="POST"
                                                                                                action="{{ route('organizer.rejectJoinRequest') }}">
                                                                                                @csrf
                                                                                                <button type="submit"
                                                                                                    value="{{ $join_request['id'] }}"
                                                                                                    name="id"
                                                                                                    class="btn btn-icon btn-secondary btn-active-icon-danger btn-active-text-primary ml-2"><span
                                                                                                        class="svg-icon svg-icon-1"><svg
                                                                                                            width="24"
                                                                                                            height="24"
                                                                                                            viewBox="0 0 24 24"
                                                                                                            fill="none"
                                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                                            <path
                                                                                                                opacity="0.3"
                                                                                                                d="M6.7 19.4L5.3 18C4.9 17.6 4.9 17 5.3 16.6L16.6 5.3C17 4.9 17.6 4.9 18 5.3L19.4 6.7C19.8 7.1 19.8 7.7 19.4 8.1L8.1 19.4C7.8 19.8 7.1 19.8 6.7 19.4Z"
                                                                                                                fill="currentColor" />
                                                                                                            <path
                                                                                                                d="M19.5 18L18.1 19.4C17.7 19.8 17.1 19.8 16.7 19.4L5.40001 8.1C5.00001 7.7 5.00001 7.1 5.40001 6.7L6.80001 5.3C7.20001 4.9 7.80001 4.9 8.20001 5.3L19.5 16.6C19.9 16.9 19.9 17.6 19.5 18Z"
                                                                                                                fill="currentColor" />
                                                                                                        </svg></span></button>
                                                                                            </form>
                                                                                            <form method="POST"
                                                                                                action="{{ route('organizer.acceptJoinRequest') }}">
                                                                                                @csrf
                                                                                                <button type="submit"
                                                                                                    value="{{ $join_request['id'] }}"
                                                                                                    name="id"
                                                                                                    data-bs-toggle="modal"
                                                                                                    data-bs-target="#kt_modal_1"
                                                                                                    class="btn btn-icon btn-secondary btn-active-icon-success btn-active-text-success"><span
                                                                                                        class="svg-icon svg-icon-1"><svg
                                                                                                            width="24"
                                                                                                            height="24"
                                                                                                            viewBox="0 0 24 24"
                                                                                                            fill="none"
                                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                                            <path
                                                                                                                d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z"
                                                                                                                fill="currentColor" />
                                                                                                        </svg></span></button>
                                                                                            </form>
                                                                                            @endif
                                                                                        </td>
                                                                                    </tr>
                                                                                @endforeach
                                                                                {{-- @else
                                                                                <tr>
                                                                                    <td class="d-flex align-items-center">
                                                                                        <!--begin:: Avatar -->
                                                                                        <div
                                                                                            class="symbol symbol-50px overflow-hidden me-3">

                                                                                            <div class="symbol-label">
                                                                                                <img src="{{ $join_requests->picture }}"
                                                                                                    alt=""
                                                                                                    class="w-100" />
                                                                                            </div>

                                                                                        </div>
                                                                                        <!--end::Avatar-->
                                                                                        <!--begin::User details-->
                                                                                        <div class="d-flex flex-column">
                                                                                            <a href="#"
                                                                                                class="text-gray-800 text-hover-primary mb-1">{{ $join_requests->name }}</a>
                                                                                            <span>{{ $join_requests->email }}</span>
                                                                                        </div>
                                                                                        <!--begin::User details-->
                                                                                    </td>
                                                                                    <td>{{ $join_requests->phone }}
                                                                                    </td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td class="d-flex flex-row">
                                                                                        <form method="POST"
                                                                                            action="{{ route('organizer.rejectJoinRequest') }}">
                                                                                            @csrf
                                                                                            <button type="submit"
                                                                                                value="{{ $join_requests->id }}"
                                                                                                name="id"
                                                                                                class="btn btn-icon btn-secondary btn-active-icon-danger btn-active-text-primary ml-2"><span
                                                                                                    class="svg-icon svg-icon-1"><svg
                                                                                                        width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            opacity="0.3"
                                                                                                            d="M6.7 19.4L5.3 18C4.9 17.6 4.9 17 5.3 16.6L16.6 5.3C17 4.9 17.6 4.9 18 5.3L19.4 6.7C19.8 7.1 19.8 7.7 19.4 8.1L8.1 19.4C7.8 19.8 7.1 19.8 6.7 19.4Z"
                                                                                                            fill="currentColor" />
                                                                                                        <path
                                                                                                            d="M19.5 18L18.1 19.4C17.7 19.8 17.1 19.8 16.7 19.4L5.40001 8.1C5.00001 7.7 5.00001 7.1 5.40001 6.7L6.80001 5.3C7.20001 4.9 7.80001 4.9 8.20001 5.3L19.5 16.6C19.9 16.9 19.9 17.6 19.5 18Z"
                                                                                                            fill="currentColor" />
                                                                                                    </svg></span></button>
                                                                                        </form>
                                                                                        <form method="POST"
                                                                                            action="{{ route('organizer.acceptJoinRequest') }}">
                                                                                            @csrf
                                                                                            <button type="submit"
                                                                                                value="{{ $join_requests->id }}"
                                                                                                name="id"
                                                                                                data-bs-toggle="modal"
                                                                                                data-bs-target="#kt_modal_1"
                                                                                                class="btn btn-icon btn-secondary btn-active-icon-success btn-active-text-success"><span
                                                                                                    class="svg-icon svg-icon-1"><svg
                                                                                                        width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path
                                                                                                            d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z"
                                                                                                            fill="currentColor" />
                                                                                                    </svg></span></button>
                                                                                        </form>
                                                                                    </td>
                                                                                </tr> --}}
                                                                            @endif
                                                                        @endif
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>

                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                                                @if($data['c_rooms'] == 1)
                                                <div class="d-flex justify-content-start">
                                                    <form name="lform" method="POST"
                                                        action="{{ route('organizer.leave-room') }}">
                                                        @csrf


                                                        <span class='fw-bold mt-6  p-6' onclick="lform.submit()"
                                                            style="cursor: pointer;"><span
                                                                class='badge badge-light-danger  py-6'
                                                                style="padding-right: 95px;padding-left: 95px;">Leave
                                                                Room</span></span>

                                                    </form>
                                                </div>
                                                @endif
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::Wrapper-->
                                        @endif

                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Type-->
                            </div>
                            @endif
                            <!--end::Tab panel-->
                            <!--begin::Tab panel-->
                            <div class="card-body p-0 tab-pane fade show " id="kt_tab_pane_4" role="tabpanel">
                                <!--begin::Type-->
                                <div class="current" data-kt-stepper-element="content">
                                    <!--begin::Wrapper-->
                                    <div class="w-100">
                                        <!--begin::Heading-->
                                        <div class="d-flex justify-content-center">
                                            <div class="pb-7 pb-lg-12 d-flex flex-column justify-content-center">
                                                <!--begin::Title-->
                                                <h1
                                                    class="fw-bold fs-2qx text-dark justify-content-center text-center my-6">
                                                    Step 2


                                                </h1>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="text-white fw-semibold fs-4 text-center">Choose
                                                    the
                                                    <span class="link-primary fw-bold"> Number</span>
                                                    of places in the room
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Input group-->

                                        <form method="POST" action="{{ route('organizer.createReservation') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="d-flex justify-content-center mb-15" data-kt-buttons="true">
                                                <!--begin::Mixed Widget 4-->

                                                <div class="d-flex flex-column mb-8 fv-row">


                                                    <!--begin::Buttons-->
                                                    <div class="d-flex flex-stack gap-5 mb-3">
                                                        <div class="row">
                                                            <div class="col-6 col-lg-4">
                                                                <button type="button" class="btn btn-light-primary fs-2"
                                                                    style="background-color: white; color: black; height: 50px; width: 120px; justify-content: center; justify-items: center; padding: 10px;"
                                                                    data-kt-docs-advanced-forms="interactive">2</button>
                                                            </div>
                                                            <div class="col-6 col-lg-4">
                                                                <button type="button" class="btn btn-light-primary fs-2"
                                                                    style="background-color: white; color: black; height: 50px; width: 120px; justify-content: center; justify-items: center; padding: 10px;"
                                                                    data-kt-docs-advanced-forms="interactive">3</button>
                                                            </div>
                                                            <div class="col-6 col-lg-4">
                                                                <button type="button" class="btn btn-light-primary fs-2"
                                                                    style="background-color: white; color: black; height: 50px; width: 120px; justify-content: center; justify-items: center; padding: 10px;"
                                                                    data-kt-docs-advanced-forms="interactive">4</button>
                                                            </div>
                                                            {{-- <div class="col-4 col-lg-3">
                                                                <select name="type"
                                                                    aria-label="Select room type"
                                                                    data-control="select2"
                                                                    data-placeholder="Select room type..."
                                                                    data-hide-search="true"
                                                                    class="form-select form-select-solid form-select-lg fw-semibold">
                                                                    <option value="0" selected>
                                                                        Private</option>
                                                                    <option value="1">
                                                                        Public</option>
                                                                </select>
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                    <!--begin::Buttons-->

                                                    <input type="text" hidden class="form-control form-control-solid"
                                                        placeholder="Enter Amount" name="roomSize" />
                                                </div>
                                                <div class="modal fade" tabindex="-1" id="kt_modal_11">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h3 class="modal-title">Upload proof</h3>
                                                
                                                                <!--begin::Close-->
                                                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                                </div>
                                                                <!--end::Close-->
                                                            </div>
                                                
                                                            <div class="modal-body">
                                                                <p>You choosed to create a room for couple. In order to accomplish this request, you and your roomate should upload your ID cards and a marriage proof.</p>
                                                                <input type="file" name="proof"
                                                                class="form-control form-control-lg form-control-solid" accept="image/png, image/gif, image/jpeg">
                                                            </div>
                                                
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <input type="submit" class="btn btn-primary" value="Create"
                                                                onclick="document.getElementById('fam').value = 1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <input type="hidden" name="family" id="fam" value="2">
                                                <input type="submit" class="btn btn-lg btn-info"
                                                data-kt-element="type-next" data-bs-toggle="tooltip" data-bs-placement="top" 
                                                title="Click here to create a room for sibilings of different gender" 
                                                value="Create Sibilings Room" onclick="document.getElementById('fam').value = 0">
                                                <button type="button" value="Create Couple's Room" class="btn btn-lg btn-info mx-5" 
                                                data-bs-toggle="modal" data-bs-target="#kt_modal_11" data-kt-element="type-next" 
                                                data-bs-placement="top" title="Click here to create a room for a married couple" 
                                                value="Create Couple's Room">
                                                    Create Couple's Room
                                                </button>
                                                <input type="submit" class="btn btn-lg btn-primary"
                                                    data-kt-element="type-next" value="Create">


                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Type-->
                            </div>
                            <!--end::Tab panel-->
                            <!--begin::Tab panel-->
                            <div class="card-body p-0 tab-pane fade show " id="kt_tab_pane_5" role="tabpanel">
                                <!--begin::Type-->
                                <div class="current" data-kt-stepper-element="content">
                                    <!--begin::Wrapper-->
                                    <div class="w-100">
                                        <!--begin::Heading-->
                                        <div class="d-flex justify-content-center">
                                            <div class="pb-7 pb-lg-12 d-flex flex-column justify-content-center">
                                                <!--begin::Title-->
                                                <h1
                                                    class="fw-bold fs-2qx text-dark justify-content-center text-center my-6">
                                                    Step 2</h1>
                                                <!--end::Title-->
                                                <!--begin::Description-->
                                                <div class="text-white fw-semibold fs-4 text-center">Enter
                                                    <span class="link-primary fw-bold"> invite </span>
                                                    code
                                                </div>
                                                <!--end::Description-->
                                            </div>
                                        </div>
                                        <!--end::Heading-->
                                        <!--begin::Input group-->

                                        <form method="POST" action="{{ route('organizer.createJoinRequest') }}">
                                            @csrf
                                            <div class="d-flex justify-content-center mb-15">
                                                <!--begin::Mixed Widget 4-->

                                                <div class="d-flex flex-column mb-8 row">


                                                    <!--begin::Buttons-->
                                                    <div class="d-flex flex-stack align-self-center gap-5 ">
                                                        <p class="text-white fw-semibold fs-5 text-center align-self-center"
                                                            style="margin-bottom: 0px;">Invite Code</p>
                                                        <input type="text" name="code"
                                                            class="form-control form-control-solid w-350px"
                                                            placeholder="Place your invite code here..." />
                                                    </div>
                                                    <!--begin::Buttons-->

                                                </div>
                                                <div class="d-flex flex-column mb-8 row">


                                                    <!--begin::Buttons-->
                                                    <div class="d-flex flex-stack align-self-center gap-5">
                                                        <input type="submit" class="btn btn-lg btn-primary w-100px"
                                                            value="Join">
                                                    </div>

                                                    <!--begin::Buttons-->

                                                </div>



                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            {{-- <div class="d-flex justify-content-end">
                                                <input type="submit" class="btn btn-lg btn-primary w-350px"
                                                    value="Join">
                                            </div> --}}
                                            <!--end::Actions-->
                                        </form>
                                        @if (isset($data['rooms_self_join_requests']))
                                            <div class="tab-pane" id="nmtc_room_inv" role="tabpanel">
                                                <div class="table-responsive">
                                                    <table class="table gs-7 gy-7 gx-7">
                                                        <thead>
                                                            <tr
                                                                class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
                                                                <th>#</th>
                                                                <th>Room code</th>
                                                                <th>Status</th>
                                                                <th></th>
                                                                <th></th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($data['rooms_self_join_requests'] as $id => $join_request)
                                                                <tr>
                                                                    <td>{{ $id + 1 }}</td>
                                                                    <td>{{ $join_request->code }}</td>
                                                                    <td>Pending</td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td class="d-flex flex-row">
                                                                        <form method="POST"
                                                                            action="{{ route('organizer.cancelJoinRequest') }}">
                                                                            @csrf
                                                                            <button type="submit"
                                                                                value="{{ $join_request['id'] }}"
                                                                                name="id"
                                                                                class="btn btn-icon btn-secondary btn-active-icon-danger btn-active-text-primary ml-2"><span
                                                                                    class="svg-icon svg-icon-1"><svg
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path opacity="0.3"
                                                                                            d="M6.7 19.4L5.3 18C4.9 17.6 4.9 17 5.3 16.6L16.6 5.3C17 4.9 17.6 4.9 18 5.3L19.4 6.7C19.8 7.1 19.8 7.7 19.4 8.1L8.1 19.4C7.8 19.8 7.1 19.8 6.7 19.4Z"
                                                                                            fill="currentColor" />
                                                                                        <path
                                                                                            d="M19.5 18L18.1 19.4C17.7 19.8 17.1 19.8 16.7 19.4L5.40001 8.1C5.00001 7.7 5.00001 7.1 5.40001 6.7L6.80001 5.3C7.20001 4.9 7.80001 4.9 8.20001 5.3L19.5 16.6C19.9 16.9 19.9 17.6 19.5 18Z"
                                                                                            fill="currentColor" />
                                                                                    </svg></span></button>
                                                                        </form>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        @endif
                                        <form method="POST" action="{{ route('organizer.joinPublicRoom') }}">
                                            @csrf
                                            <div class="d-flex justify-content-end">
                                                <input type="submit" class="btn btn-lg btn-danger w-300px"
                                                    value="Join Public Room">
                                            </div>
                                        </form>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Type-->
                            </div>
                            <!--end::Tab panel-->

                            @if ($data['c_payment'] == 1 && $payment_cond)
                                <div class="card-body p-0 tab-pane fade show  @if ($routeto == 'payment') active @endif"
                                    id="kt_tab_pane_10" role="tabpanel">
                                    <!--begin::Type-->
                                    <div class="current" data-kt-stepper-element="content">
                                        <!--begin::Wrapper-->
                                        <div class="w-100" id="joincreate">

                                            <!--begin::Heading-->
                                            <div class="d-flex justify-content-center">
                                                <div class="pb-7 pb-lg-12 d-flex flex-column justify-content-center">
                                                    <!--begin::Title-->
                                                    <h1
                                                        class="fw-bold fs-2qx text-dark justify-content-center text-center my-6">
                                                        Step 1</h1>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="text-white fw-semibold fs-4 text-center">
                                                        Choose your
                                                        <span class="link-primary fw-bold">Payment
                                                            Type</span>

                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Input group-->


                                            <div class="d-flex justify-content-center mb-15 flex-wrap"
                                                data-kt-buttons="true">
                                                <!--begin::Mixed Widget 4-->
                                                @if (Auth::user()->pay_status_pack == 0 || Auth::user()->pay_status_pack == 2)
                                                    <div class="card card-xl-stretch mb-xl-8 mx-6 mb-6"
                                                        style="background-color: #151521 !important;">

                                                        <!--begin::Body-->
                                                        <div
                                                            class="card-body d-flex create_btn_sm justify-content-center align-items-center padd-0">

                                                            {{-- <i class="bi bi-people fs-3qx py-6 icon-sm-si"
                                                            style="color: #8316bd;"></i> --}}
                                                            <i
                                                                class="bi bi-cash-stack fs-3qx py-6 icon-sm-si"style="color: #8316bd;"></i>
                                                            <div class="pt-5">
                                                                <p class="text-center fs-6">
                                                                <p id="onlyPack" class="btn btn-secondary w-100 py-3"
                                                                    style="padding-left: 50px !important;padding-right: 50px !important;">
                                                                    Pack Fee</p>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                @endif
                                                @if ((Auth::user()->pay_status_pack == 0 && Auth::user()->pay_status_bus == 0) || Auth::user()->pay_status_pack == 2)
                                                    <div class="card card-xl-stretch mb-xl-8 mx-6 mb-6"
                                                        style="background-color: #151521 !important;">

                                                        <!--begin::Body-->
                                                        <div
                                                            class="card-body d-flex create_btn_sm justify-content-center align-items-center padd-0">

                                                            {{-- <i class="bi bi-people fs-3qx py-6 icon-sm-si"
                                                            style="color: #8316bd;"></i> --}}
                                                            <div class="d-flex flex-wrap">
                                                                <i
                                                                    class="bi bi-cash-stack fs-3qx py-6 px-3 icon-sm-si"style="color: #8316bd;"></i>
                                                                <i class="bi bi-bus-front fs-3qx py-6 px-3 icon-sm-si"
                                                                    style="color: #8316bd;"></i>
                                                            </div>

                                                            <div class="pt-5">
                                                                <p class="text-center fs-6">
                                                                <p id="packWithBus" class="btn btn-secondary w-100 py-3"
                                                                    style="padding-left: 50px !important;padding-right: 50px !important;">
                                                                    All Fees</p>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                @endif
                                                <!--end::Mixed Widget 4-->
                                                <!--begin::Mixed Widget 4-->
                                                @if (Auth::user()->pay_status_pack == 1)
                                                    <div class="card card-xl-stretch mb-xl-8 mx-6 mb-6"
                                                        style="background-color: #151521 !important;">

                                                        <!--begin::Body-->
                                                        <div
                                                            class="card-body d-flex create_btn_sm justify-content-center align-items-center padd-0">

                                                            <i class="bi bi-bus-front fs-3qx py-6 icon-sm-si"
                                                                style="color: #8316bd;"></i>
                                                            {{-- <i class="bi bi-bank fs-3qx py-6 icon-sm-si"
                                                                style="color: #8316bd;"></i> --}}
                                                            <div class="pt-5">
                                                                <p class="text-center fs-6">
                                                                <p id="onlyBus"
                                                                    class="btn btn-secondary w-100 py-3 join_bt_sm">
                                                                    Bus Fee</p>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                @endif
                                                <!--end::Mixed Widget 4-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            {{-- <div class="d-flex justify-content-end">
                                                <button type="button" class="btn btn-lg btn-primary"
                                                    data-kt-element="type-next">
                                                    <span class="indicator-label">Save Changes</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div> --}}
                                            <!--end::Actions-->


                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Type-->
                                </div>
                                <div class="card-body p-0 tab-pane fade show  @if ($routeto == 'payment') active @endif"
                                    id="kt_tab_pane_103" role="tabpanel">
                                    <!--begin::Type-->
                                    <div class="current" data-kt-stepper-element="content">
                                        <!--begin::Wrapper-->
                                        <div class="w-100" id="joincreate">

                                            <!--begin::Heading-->
                                            <div class="d-flex justify-content-center">
                                                <div class="pb-7 pb-lg-12 d-flex flex-column justify-content-center">
                                                    <!--begin::Title-->
                                                    <h1
                                                        class="fw-bold fs-2qx text-dark justify-content-center text-center my-6">
                                                        Step 2
                                                        <!--end::Title-->
                                                        <!--begin::Description-->
                                                        <div class="text-white fw-semibold fs-4 text-center">
                                                            Choose your
                                                            <span class="link-primary fw-bold">Payment
                                                                Method</span>

                                                        </div>
                                                        <!--end::Description-->
                                                </div>
                                            </div>
                                            <!--end::Heading-->
                                            <!--begin::Input group-->


                                            <div class="d-flex justify-content-center mb-15 flex-wrap"
                                                data-kt-buttons="true">
                                                <!--begin::Mixed Widget 4-->
                                                <div class="card card-xl-stretch mb-xl-8 mx-6 mb-6"
                                                    style="background-color: #151521 !important;">

                                                    <!--begin::Body-->
                                                    <div
                                                        class="card-body d-flex create_btn_sm justify-content-center align-items-center padd-0">

                                                        <i class="bi bi-people fs-3qx py-6 icon-sm-si"
                                                            style="color: #8316bd;"></i>

                                                        <div class="pt-5">
                                                            <p class="text-center fs-6">
                                                            <p id="HandToHand" class="btn btn-secondary w-100 py-3"
                                                                style="padding-left: 50px !important;padding-right: 50px !important;">
                                                                Hand to Hand</p>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Mixed Widget 4-->
                                                <!--begin::Mixed Widget 4-->
                                                @if (
                                                    !(
                                                        (Auth::user()->pay_status_pack == 1 && Auth::user()->pay_status_bus == 0) ||
                                                        (Auth::user()->pay_status_pack == 1 && Auth::user()->pay_status_bus == 2)
                                                    ))
                                                    <div class="card card-xl-stretch mb-xl-8 mx-6 mb-6"
                                                        style="background-color: #151521 !important;">

                                                        <!--begin::Body-->
                                                        <div
                                                            class="card-body d-flex create_btn_sm justify-content-center align-items-center padd-0">


                                                            <i class="bi bi-bank fs-3qx py-6 icon-sm-si"
                                                                style="color: #8316bd;"></i>
                                                            <div class="pt-5">
                                                                <p class="text-center fs-6">
                                                                <p id="bankT"
                                                                    class="btn btn-secondary w-100 py-3 join_bt_sm">
                                                                    Bank Transfer</p>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                @endif
                                                <!--end::Mixed Widget 4-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            {{-- <div class="d-flex justify-content-end">
                                                <button type="button" class="btn btn-lg btn-primary"
                                                    data-kt-element="type-next">
                                                    <span class="indicator-label">Save Changes</span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div> --}}
                                            <!--end::Actions-->


                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Type-->
                                </div>
                                @if ($data['c_payment'] && (Auth::user()->pay_status_pack != 1 || Auth::user()->pay_status_bus != 1))
                                    <div class="card-body p-0 tab-pane fade show " id="kt_tab_pane_11" role="tabpanel">
                                        <!--begin::Type-->
                                        <div class="current" data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <!--begin::Heading-->
                                                <div class="pb-7 pb-lg-12 d-flex justify-content-center">
                                                    <!--begin::Title-->
                                                    <h1 class="fw-bold text-dark">Choose the closest payment
                                                        agent
                                                        in your city
                                                    </h1>
                                                    <div id="result_response">

                                                    </div>
                                                    </h1>
                                                    <!--end::Title-->

                                                </div>
                                                <!--end::Heading-->
                                                <div class="overflow-auto pb-5">
                                                    @foreach ($data['payagents'] as $agent)
                                                        <form method="POST"
                                                            action="{{ route('organizer.choosePaymentAgent') }}">
                                                            @csrf
                                                            <div
                                                                class="d-flex align-items-center border justify-content-between border-dashed 
                                                @if (Auth::user()->pay_status_pack != null) @if (Auth::user()->payagent_id == $agent->id && Auth::user()->payagent_bus_id == null)
                                                    border-success 
                                                    @else 
                                                    border-gray-300 @endif
@elseif(Auth::user()->city == $agent->city)
border-success
@else
border-gray-300  
                                                    @endif  
                                                    rounded min-w-250px px-7 py-3 mb-5">
                                                                <!--begin::Title-->
                                                                <a
                                                                    class="fs-5 text-dark text-hover-primary fw-semibold ">{{ $agent->name }}</a>
                                                                <a class="fs-5 text-dark text-hover-primary fw-semibold d-none d-md-inline"><span
                                                                        class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span> {{ $agent->university }}</a>
                                                                <!--end::Title-->

                                                                <a href="tel:20 000 000"
                                                                    class="fs-5 text-dark text-hover-primary d-none d-md-inline">{{ $agent->phone }}</a>
                                                                <!--begin::Progress-->
                                                                <div class="pe-2">
                                                                    <span
                                                                        class="badge @if (Auth::user()->city == $agent->city) badge-light-success @else badge-light-dark @endif">{{ $agent->city }}</span>
                                                                </div>
                                                                <!--end::Progress-->
                                                                <!--begin::Action-->
                                                                @if (Auth::user()->payagent_id != null && Auth::user()->payagent_bus_id == null)
                                                                    @if (Auth::user()->payagent_id == 1)
                                                                        <button type="submit" name="payment_agent"
                                                                            class="btn btn-sm btn-light disabled">Disabled</button>
                                                                    @elseif (Auth::user()->payagent_id == $agent->id)
                                                                        <button onclick="event.preventDefault()"
                                                                            style="cursor: default;"
                                                                            class="btn btn-sm btn-light btn-light-success">Selected</button>
                                                                    @else
                                                                        <button type="submit"
                                                                            value="{{ $agent->id }}"
                                                                            name="payment_agent"
                                                                            class="btn btn-sm btn-light btn-active-light-success">Change</button>
                                                                    @endif
                                                                @else
                                                                    <button type="submit" value="{{ $agent->id }}"
                                                                        name="payment_agent"
                                                                        class="btn btn-sm btn-light @if (Auth::user()->city == $agent->city) btn-light-success @else btn-active-light-success @endif">Select</button>
                                                                @endif

                                                                <!--end::Action-->
                                                            </div>
                                                        </form>
                                                    @endforeach
                                                </div>
                                                <!--end::Actions-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Type-->
                                    </div>
                                    @if (Auth::user()->pay_status_pack != 1)
                                        <div class="card-body p-0 tab-pane fade show " id="kt_tab_pane_111"
                                            role="tabpanel">
                                            <!--begin::Type-->
                                            <div class="current" data-kt-stepper-element="content">
                                                <!--begin::Wrapper-->
                                                <div class="w-100">
                                                    <!--begin::Heading-->
                                                    <div class="pb-7 pb-lg-12 d-flex justify-content-center">
                                                        <!--begin::Title-->
                                                        <h1 class="fw-bold text-dark">Choose the closest payment
                                                            agent
                                                            in your city
                                                        </h1>
                                                        <div id="result_response1">

                                                        </div>
                                                        </h1>
                                                        <!--end::Title-->

                                                    </div>
                                                    <!--end::Heading-->
                                                    <div class="overflow-auto pb-5">
                                                        @foreach ($data['payagents'] as $agent)
                                                            <form method="POST"
                                                                action="{{ route('organizer.choosePaymentAgent') }}">
                                                                @csrf
                                                                <div
                                                                    class="d-flex align-items-center border justify-content-between border-dashed 
                                                @if (Auth::user()->pay_status_pack != null) @if (Auth::user()->payagent_id == $agent->id && Auth::user()->payagent_bus_id == $agent->id)
                                                    border-success 
                                                    @else 
                                                    border-gray-300 @endif
@elseif(Auth::user()->city == $agent->city)
border-success
@else
border-gray-300  
                                                    @endif  
                                                    rounded min-w-250px px-7 py-3 mb-5">
                                                                    <!--begin::Title-->
                                                                    <a
                                                                        class="fs-5 text-dark text-hover-primary fw-semibold ">{{ $agent->name }}</a>
                                                                    <a
                                                                        class="fs-5 text-dark text-hover-primary fw-semibold d-none d-md-inline"><span
                                                                            class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z"
                                                                                    fill="currentColor" />
                                                                                <path opacity="0.3"
                                                                                    d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z"
                                                                                    fill="currentColor" />
                                                                            </svg>
                                                                        </span> {{ $agent->university }}</a>
                                                                    <!--end::Title-->

                                                                    <a href="tel:20 000 000"
                                                                        class="fs-5 text-dark text-hover-primary d-none d-md-inline">{{ $agent->phone }}</a>
                                                                    <!--begin::Progress-->
                                                                    <div class="pe-2">
                                                                        <span
                                                                            class="badge @if (Auth::user()->city == $agent->city) badge-light-success @else badge-light-dark @endif">{{ $agent->city }}</span>
                                                                    </div>
                                                                    <!--end::Progress-->
                                                                    <!--begin::Action-->
                                                                    @if (Auth::user()->payagent_id != null && Auth::user()->payagent_bus_id != null)
                                                                        @if (Auth::user()->payagent_id == 1)
                                                                            <button type="submit" name="payment_agent"
                                                                                class="btn btn-sm btn-light disabled">Disabled</button>
                                                                        @elseif (Auth::user()->payagent_id == $agent->id && Auth::user()->payagent_bus_id == $agent->id)
                                                                            <button onclick="event.preventDefault()"
                                                                                style="cursor: default;"
                                                                                class="btn btn-sm btn-light btn-light-success">Selected</button>
                                                                        @else
                                                                            <button type="submit"
                                                                                value="{{ $agent->id }}"
                                                                                name="payment_agent"
                                                                                class="btn btn-sm btn-light btn-active-light-success">Change</button>
                                                                        @endif
                                                                    @else
                                                                        <button type="submit"
                                                                            value="{{ $agent->id }}"
                                                                            name="payment_agent"
                                                                            class="btn btn-sm btn-light @if (Auth::user()->city == $agent->city) btn-light-success @else btn-active-light-success @endif">Select</button>
                                                                    @endif

                                                                    <!--end::Action-->
                                                                </div>
                                                            </form>
                                                        @endforeach
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Type-->
                                        </div>
                                    @endif
                                    @if (Auth::user()->transport == 1 && Auth::user()->pay_status_pack == 1 && Auth::user()->pay_status_bus != 1)
                                        <div class="card-body p-0 tab-pane fade show " id="kt_tab_pane_1111"
                                            role="tabpanel">
                                            <!--begin::Type-->
                                            <div class="current" data-kt-stepper-element="content">
                                                <!--begin::Wrapper-->
                                                <div class="w-100">
                                                    <!--begin::Heading-->
                                                    <div class="pb-7 pb-lg-12 d-flex justify-content-center">
                                                        <!--begin::Title-->
                                                        <h1 class="fw-bold text-dark">Choose the closest payment
                                                            agent
                                                            in your city
                                                        </h1>
                                                        <div id="result_response">

                                                        </div>
                                                        </h1>
                                                        <!--end::Title-->

                                                    </div>
                                                    <!--end::Heading-->
                                                    <div class="overflow-auto pb-5">
                                                        @foreach ($data['payagents'] as $agent)
                                                            <form method="POST"
                                                                action="{{ route('organizer.choosePaymentAgent') }}">
                                                                @csrf
                                                                <div
                                                                    class="d-flex align-items-center border justify-content-between border-dashed 
                                                @if (Auth::user()->pay_status_pack != null) @if (Auth::user()->payagent_bus_id == $agent->id)
                                                    border-success 
                                                    @else 
                                                    border-gray-300 @endif
@elseif(Auth::user()->city == $agent->city)
border-success
@else
border-gray-300  
                                                @endif  
                                                rounded min-w-250px px-7 py-3 mb-5">
                                                                    <!--begin::Title-->
                                                                    <a
                                                                        class="fs-5 text-dark text-hover-primary fw-semibold ">{{ $agent->name }}</a>
                                                                    <a
                                                                        class="fs-5 text-dark text-hover-primary fw-semibold d-none d-md-inline"><span
                                                                            class="svg-icon svg-icon-muted svg-icon-2hx"><svg
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path
                                                                                    d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z"
                                                                                    fill="currentColor" />
                                                                                <path opacity="0.3"
                                                                                    d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z"
                                                                                    fill="currentColor" />
                                                                            </svg>
                                                                        </span> {{ $agent->university }}</a>
                                                                    <!--end::Title-->

                                                                    <a href="tel:20 000 000"
                                                                        class="fs-5 text-dark text-hover-primary d-none d-md-inline" >{{ $agent->phone }}</a>
                                                                    <!--begin::Progress-->
                                                                    <div class="pe-2">
                                                                        <span
                                                                            class="badge @if (Auth::user()->city == $agent->city) badge-light-success @else badge-light-dark @endif">{{ $agent->city }}</span>
                                                                    </div>
                                                                    <!--end::Progress-->
                                                                    <!--begin::Action-->
                                                                    @if (Auth::user()->payagent_bus_id != null)
                                                                        @if (Auth::user()->payagent_bus_id == 1)
                                                                            <button type="submit" name="payment_agent"
                                                                                class="btn btn-sm btn-light disabled">Disabled</button>
                                                                        @elseif (Auth::user()->payagent_bus_id == $agent->id)
                                                                            <button onclick="event.preventDefault()"
                                                                                style="cursor: default;"
                                                                                class="btn btn-sm btn-light btn-light-success">Selected</button>
                                                                        @else
                                                                            <button type="submit"
                                                                                value="{{ $agent->id }}"
                                                                                name="payment_agent"
                                                                                class="btn btn-sm btn-light btn-active-light-success">Change</button>
                                                                        @endif
                                                                    @else
                                                                        <button type="submit"
                                                                            value="{{ $agent->id }}"
                                                                            name="payment_agent"
                                                                            class="btn btn-sm btn-light @if (Auth::user()->city == $agent->city) btn-light-success @else btn-active-light-success @endif">Select</button>
                                                                    @endif

                                                                    <!--end::Action-->
                                                                </div>
                                                            </form>
                                                        @endforeach
                                                    </div>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Type-->
                                        </div>
                                    @endif
                                @endif
                                @if ($data['c_payment'] && !(Auth::user()->pay_status_pack == 1 && Auth::user()->pay_status_bus == 0))
                                    <div class="card-body p-0 tab-pane fade show " id="kt_tab_pane_12" role="tabpanel">
                                        <!--begin::Type-->
                                        <div class="current" data-kt-stepper-element="content">
                                            <!--begin::Wrapper-->
                                            <div class="w-100">
                                                <!--begin::Heading-->
                                                <div class="pb-7 pb-lg-12 d-flex justify-content-center">
                                                    <!--begin::Title-->
                                                    <h1 class="fw-bold text-dark">Upload your bank transfer
                                                        receipt
                                                    </h1>
                                                    <!--end::Title-->

                                                </div>

                                                <!--end::Heading-->

                                                <div class="row">
                                                    @if (
                                                        (Auth::user()->pay_status_pack == 0 && Auth::user()->pay_status_bus == 0) ||
                                                            (Auth::user()->pay_status_pack != 0 && Auth::user()->pay_status_bus == 0) ||
                                                            (Auth::user()->pay_status_pack == 2 &&
                                                                Auth::user()->pay_status_bus == 2 &&
                                                                Auth::user()->bank_transfer == null))
                                                        <div class="mb-4 col-12 col-md-8 d-none" id="drag-drop-area2-div">
                                                            <div class="d-none" id="drag-drop-area2"></div>
                                                        </div>
                                                    @else
                                                        <div class="alert alert-primary d-flex align-items-center p-5"
                                                            id="drag-drop-area11">
                                                            <!--begin::Icon-->
                                                            <span class="svg-icon svg-icon-2hx svg-icon-primary me-3"><svg
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                                <h4 class="mb-1 text-dark">Your bank Transfer receipt
                                                                    uploaded successfuly</h4>
                                                                <!--end::Title-->
                                                                <!--begin::Content-->
                                                                {{-- <span>The alert component can be used to highlight certain parts of your page for higher content visibility.</span> --}}
                                                                <!--end::Content-->
                                                            </div>
                                                            <!--end::Wrapper-->
                                                        </div>

                                                        <div
                                                            class="alert alert-success d-flex align-items-center p-5 drag-drop-area12">
                                                            <!--begin::Icon-->
                                                            <span class="svg-icon svg-icon-2hx svg-icon-success me-3"><svg
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                                <h4 class="mb-1 text-dark">Under Review</h4>
                                                                <!--end::Title-->
                                                                <!--begin::Content-->
                                                                <span>Your uploaded bank receipt is under review</span>
                                                                <!--end::Content-->
                                                            </div>
                                                            <!--end::Wrapper-->
                                                        </div>
                                                    @endif
                                                    @if (
                                                        (Auth::user()->pay_status_pack == 0 && Auth::user()->pay_status_bus == 0) ||
                                                            (Auth::user()->pay_status_pack == 2 &&
                                                                Auth::user()->pay_status_bus == 0 &&
                                                                Auth::user()->bank_transfer == null) ||
                                                            (Auth::user()->pay_status_pack == 2 && Auth::user()->pay_status_bus == 2))
                                                        @if ($data['c_payment'] && (Auth::user()->pay_status_pack != 1 || Auth::user()->pay_status_bus != 1))
                                                            <div class="mb-4 col-12 col-md-8 " id="drag-drop-area-div">
                                                                <div class="" id="drag-drop-area"></div>
                                                            </div>

                                                        @endif
                                                    @else
                                                        <div
                                                            class="alert alert-primary d-flex align-items-center p-5 drag-drop-area21">
                                                            <!--begin::Icon-->
                                                            <span class="svg-icon svg-icon-2hx svg-icon-primary me-3"><svg
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                                <h4 class="mb-1 text-dark">Your bank Transfer receipt
                                                                    uploaded successfuly</h4>
                                                                <!--end::Title-->
                                                                <!--begin::Content-->
                                                                {{-- <span>The alert component can be used to highlight certain parts of your page for higher content visibility.</span> --}}
                                                                <!--end::Content-->
                                                            </div>
                                                            <!--end::Wrapper-->
                                                        </div>

                                                        <div class="alert alert-success d-flex align-items-center p-5"
                                                            id="drag-drop-area22">
                                                            <!--begin::Icon-->
                                                            <span class="svg-icon svg-icon-2hx svg-icon-success me-3"><svg
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                                <h4 class="mb-1 text-dark">Under Review</h4>
                                                                <!--end::Title-->
                                                                <!--begin::Content-->
                                                                <span>Your uploaded bank receipt is under review</span>
                                                                <!--end::Content-->
                                                            </div>
                                                            <!--end::Wrapper-->
                                                        </div>
                                                    @endif
                                                    <div class="col-12 col-md-4">
                                                        <div
                                                            class="alert alert-primary d-flex align-items-center p-5 border-dashed border-primary">
                                                            <!--begin::Icon-->

                                                            <!--end::Icon-->

                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex flex-column">
                                                                <!--begin::Title-->
                                                                <h4 class="mb-1 text-dark"><span
                                                                        class="h6 fw-semibold">Name :</span> Amir
                                                                    Trigui</h4>
                                                                <!--end::Title-->
                                                                <h4 class="mb-1 text-dark"><span
                                                                        class="h6 fw-semibold">RIB :</span> 016
                                                                    1130 0399 31</h4>
                                                                <h4 class="mb-1 text-dark"><span
                                                                        class="h6 fw-semibold">Bank :</span> ATB
                                                                    (Arab Tunisian Bank)</h4>
                                                                <h4 class="mb-1 text-dark"><span
                                                                        class="h6 fw-semibold">Phone :</span> 25 55
                                                                    66 33</h4>
                                                                <h4 class="mb-1 text-dark"><span
                                                                        class="h6 fw-semibold">E-mail :</span>
                                                                    amirtrigui@gmail.com</h4>
                                                                <!--begin::Content-->
                                                                <!--end::Content-->
                                                            </div>
                                                            <!--end::Wrapper-->

                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        @if (
                                                            !(
                                                                (Auth::user()->pay_status_pack == 0 && Auth::user()->pay_status_bus == 0) ||
                                                                (Auth::user()->pay_status_pack != 0 && Auth::user()->pay_status_bus == 0)
                                                            ))
                                                            <div class="drag-drop-area12">
                                                                @if (Auth::user()->bank_transfer)
                                                                    <form action="{{ route('organizer.removeBankTransfer') }}"
                                                                        method="Post">
                                                                        @csrf
                                                                        <input type="submit"
                                                                            class="btn btn-lg btn-danger mb-4"
                                                                            value="Remove">

                                                                    </form>

                                                                @endif
                                                            </div>
                                                        @endif
                                                        @if (
                                                            !(
                                                                (Auth::user()->pay_status_pack == 0 && Auth::user()->pay_status_bus == 0) ||
                                                                (Auth::user()->pay_status_pack == 2 && Auth::user()->pay_status_bus == 2)
                                                            ))
                                                            <div class="drag-drop-area21">
                                                                @if (Auth::user()->bank_transfer)
                                                                    <form action="{{ route('organizer.removeBankTransfer') }}"
                                                                        method="Post">
                                                                        @csrf
                                                                        <input type="submit"
                                                                            class="btn btn-lg btn-danger mb-4"
                                                                            value="Remove">

                                                                    </form>

                                                                @endif
                                                            </div>
                                                        @endif



                                                        {{-- <div
                                                            class="alert alert-primary d-flex align-items-center p-5 border-dashed border-primary">
                                                            <!--begin::Icon-->

                                                            <!--end::Icon-->

                                                            <!--begin::Wrapper-->
                                                            <div class="d-flex flex-column">
                                                                <!--begin::Title-->
                                                                <h4 class="mb-1 text-dark"><span
                                                                        class="h6 fw-semibold">Email your receipt to</span>
                                                                </h4>
                                                                <!--end::Title-->

                                                                <h4 class="mb-1 text-dark"><span
                                                                        class="h6 fw-semibold">E-mail :</span>
                                                                    <a href="mailto:contact@nmtc.tn">contact@nmtc.tn</a>
                                                                </h4>
                                                                <!--begin::Content-->
                                                                <!--end::Content-->
                                                            </div>
                                                            <!--end::Wrapper-->

                                                        </div> --}}

                                                    </div>

                                                </div>


                                                <!--end::Actions-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Type-->
                                    </div>
                                @endif
                            @endif
                            <!--end::Team-->
                        </div>
                        <!--end::Tab Content-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Timeline-->
            </div>
            <!--end::Post-->
        </div>
        <div class="col-md-4">

            <div class="flex-column flex-lg-row-auto w-lg-300px w-xl-450px mb-10">
                <div class="card mb-5 mb-xl-10">
                    <!--begin::Header-->
                    <div class="card-header border-1 pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">News</span>

                        </h3>
                        <!--end::Title-->

                    </div>
                    <!--end::Header-->
                    <div class="card-body">

                        <!--begin::Timeline-->
                        <div class="timeline">

                            {{-- <div class="timeline-item">
                                <!--begin::Timeline line-->
                                <div class="timeline-line w-40px"></div>
                                <!--end::Timeline line-->
                                <!--begin::Timeline icon-->
                                <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                </div>
                                <!--end::Timeline icon-->
                                <!--begin::Timeline content-->
                                <div class="timeline-content mb-10 mt-n2">
                                    <!--begin::Timeline heading-->
                                    <div class="overflow-auto pe-3">
                                        <!--begin::Title-->
                                        <div class="fs-5 fw-semibold mb-2">Rooms without payments will be cleared daily at
                                            8:00 PM.
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="d-flex align-items-center mt-1 fs-6">
                                            <!--begin::Info-->
                                            <div class="text-muted me-2 fs-7">Sent at 3:25 PM </div>
                                            <!--end::Info-->

                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                </div>
                                <!--end::Timeline content-->
                            </div> --}}
                            <!--begin::Timeline item-->
                            <div class="timeline-item">
                                <!--begin::Timeline line-->
                                <div class="timeline-line w-40px"></div>
                                <!--end::Timeline line-->
                                <!--begin::Timeline icon-->
                                <div class="timeline-icon symbol symbol-circle symbol-40px">
                                    <div class="symbol-label bg-light">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                </div>
                                <!--end::Timeline icon-->
                                <!--begin::Timeline content-->
                                <div class="timeline-content mb-10 mt-n2">
                                    <!--begin::Timeline heading-->
                                    <div class="overflow-auto pe-3">
                                        <!--begin::Title-->
                                        <div class="fs-5 fw-semibold mb-2">Welcome to our participant panel
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="d-flex align-items-center mt-1 fs-6">
                                            <!--begin::Info-->
                                            <div class="text-muted me-2 fs-7">Sent at 4:23 PM </div>
                                            <!--end::Info-->

                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Timeline heading-->
                                </div>
                                <!--end::Timeline content-->
                            </div>
                            <!--end::Timeline item-->
                            <!--begin::Timeline item-->

                            <!--end::Timeline item-->


                        </div>
                        <!--end::Timeline-->
                    </div>

                </div>
            </div>
        </div>

        <!--end::Container-->
        <!--begin::Footer-->
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

                </ul>
                <!--end::Menu-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Wrapper-->
    </div>

@endsection

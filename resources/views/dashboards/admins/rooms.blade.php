<?php
$i = 0;

?>
@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title', 'NMTC - Payments')

@section('content')
    <div class="toolbar py-5 " id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-white fw-bold my-1 fs-3">Payments</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">
                        <a href="/" class="text-white text-hover-primary">Dashboard</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">Payments</li>
                    <!--end::Item-->

                </ul>
                <!--end::Breadcrumb-->

            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-3 py-md-1">
                <!--begin::Wrapper-->
                <div class="me-3">

                </div>
                <!--end::Wrapper-->
                <div>
                    <!--begin::Filter-->

                    <!--end::Menu 1-->
                    <!--end::Filter-->
                </div>
                <!--begin::Button-->


                <!--begin::Menu-->

                <!--end::Menu-->
                <!--end::Export dropdown-->

                <!--begin::Hide default export buttons-->
                <div id="kt_datatable_example_buttons" class="d-none"></div>

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
                            <div class="row">

                                <div class="card card-flush pt-3 mb-5 mb-lg-10" data-kt-subscriptions-form="pricing">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <h2 class="fw-bold">Payment Method</h2>
                                        </div>
                                        <!--begin::Card title-->
                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar">
                                            <a href="#" class="btn btn-light-primary" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_new_card">New Method</a>
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Options-->
                                        <div id="kt_create_new_payment_method">
                                            <!--begin::Option-->
                                            @foreach ($rooms as $room)
                                                <div class="py-1">
                                                    <!--begin::Header-->
                                                    <div class="py-3 d-flex flex-stack flex-wrap">
                                                        <!--begin::Toggle-->
                                                        <div class="d-flex align-items-center collapsible toggle collapsed"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#kt_create_new_payment_method_{{ $i }}">
                                                            <!--begin::Arrow-->
                                                            <div
                                                                class="btn btn-sm btn-icon btn-active-color-primary ms-n3 me-2">
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
                                                                <span
                                                                    class="svg-icon toggle-on svg-icon-primary svg-icon-2">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2" y="2" width="20"
                                                                            height="20" rx="5"
                                                                            fill="currentColor" />
                                                                        <rect x="6.0104" y="10.9247" width="12"
                                                                            height="2" rx="1"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                                <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                                                                <span class="svg-icon toggle-off svg-icon-2">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.3" x="2" y="2" width="20"
                                                                            height="20" rx="5"
                                                                            fill="currentColor" />
                                                                        <rect x="10.8891" y="17.8033" width="12"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-90 10.8891 17.8033)"
                                                                            fill="currentColor" />
                                                                        <rect x="6.01041" y="10.9247" width="12"
                                                                            height="2" rx="1"
                                                                            fill="currentColor" />
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::Arrow-->
                                                            <!--begin::Logo-->
                                                            <img src="{{ asset('assets/media/room.svg') }}"
                                                                class="w-40px me-3" alt="" />
                                                            <!--end::Logo-->
                                                            <!--begin::Summary-->
                                                            <div class="me-3">
                                                                <div class="d-flex align-items-center fw-bold">
                                                                    {{ $room->num }}
                                                                    @if ($room->is_all_paid)
                                                                        <div class="badge badge-light-primary ms-5">
                                                                            Paid
                                                                        </div>
                                                                    @else
                                                                        <div class="badge badge-light-danger ms-5">
                                                                            Unpaid
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                                <div class="text-muted">Expires Dec 2024</div>
                                                            </div>
                                                            <!--end::Summary-->
                                                        </div>
                                                        <!--end::Toggle-->
                                                        <!--begin::Input-->
                                                        <div class="d-flex my-3 ms-9">
                                                            <!--begin::Radio-->
                                                            <label
                                                                class="form-check form-check-custom form-check-solid me-5">
                                                                <input class="form-check-input" type="radio"
                                                                    name="payment_method" checked="checked" />
                                                            </label>
                                                            <!--end::Radio-->
                                                        </div>
                                                        <!--end::Input-->
                                                    </div>
                                                    <!--end::Header-->
                                                    <!--begin::Body-->
                                                    <div id="kt_create_new_payment_method_{{ $i }}"
                                                        class="collapse fs-6 ps-10">
                                                        <!--begin::Details-->
                                                        <div class="d-flex flex-wrap py-5">
                                                            <!--begin::Col-->
                                                            <div class="flex-equal me-5">
                                                                <table class="table table-flush fw-semibold gy-1">
                                                                    <tr>
                                                                        <td
                                                                            class="text-muted min-w-125px w-125px">
                                                                            HEY </td>
                                                                        <td class="text-gray-800">
                                                                            YOU

                                                                        </td>
                                                                    </tr>
                                                                    {{-- @foreach ($resrv as $res)
                                                                        @if ($res->roomID == $room->id)
                                                                            @foreach ($users as $user)
                                                                                @if ($user->id == $res->userID && $room->id == $res->roomID)
                                                                                    <tr>
                                                                                        <td
                                                                                            class="text-muted min-w-125px w-125px">
                                                                                            {{ $user->name }}</td>
                                                                                        <td class="text-gray-800">
                                                                                            @if ($user->payment == '0')
                                                                                                <div
                                                                                                    class="badge badge-light-danger ms-5">
                                                                                                    Not Paid
                                                                                                </div>
                                                                                            @else
                                                                                                <div
                                                                                                    class="badge badge-light-success ms-5">
                                                                                                    Paid
                                                                                                </div>
                                                                                            @endif

                                                                                        </td>
                                                                                    </tr>
                                                                                @endif
                                                                            @endforeach
                                                                        @endif
                                                                    @endforeach --}}
                                                                </table>
                                                            </div>
                                                            <!--end::Col-->
                                                            <!--begin::Col-->
                                                            <div class="flex-equal">

                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end::Option-->
                                                <div class="separator separator-dashed"></div>
                                                <!--begin::Option-->
                                                <?php
                                                $i++;
                                                ?>
                                            @endforeach
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Card body-->
                                </div>


                            </div>



                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Post-->
            </div>
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

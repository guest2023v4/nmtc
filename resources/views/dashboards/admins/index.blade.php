@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title', 'NMTC - Dashboard')

@section('content')
    <div class="toolbar py-5 " id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-white fw-bold my-1 fs-3">Statistics</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">
                        <a href="" class="text-white text-hover-primary">Dashboard</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">Stats</li>
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
                                <div class="col-xl-3">
                                    <!--begin::Statistics Widget 5-->
                                    <a href="#" class="card bg-dark hoverable card-xl-stretch mb-xl-8">
                                        <!--begin::Body-->
                                        <div class="card-body">
                                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm008.svg-->
                                            <span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="text-gray-100 fw-bold fs-2 mb-2 mt-5">{{ $total_users }}</div>
                                            <div class="fw-semibold text-gray-100">Participants Accounts</div>
                                        </div>
                                        <!--end::Body-->
                                    </a>
                                    <!--end::Statistics Widget 5-->
                                </div>
                                <div class="col-xl-3">
                                    <!--begin::Statistics Widget 5-->
                                    <a href="#" class="card bg-info hoverable card-xl-stretch mb-5 mb-xl-8">
                                        <!--begin::Body-->
                                        <div class="card-body">
                                            <!--begin::Svg Icon | path: icons/duotune/graphs/gra007.svg-->
                                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="text-white fw-bold fs-2 mb-2 mt-5">{{ $total_teams }}</div>
                                            <div class="fw-semibold text-white">Total Teams</div>
                                        </div>
                                        <!--end::Body-->
                                    </a>
                                    <!--end::Statistics Widget 5-->
                                </div>
                                <div class="col-xl-3">
                                    <!--begin::Statistics Widget 5-->
                                    <a href="#" class="card bg-warning hoverable card-xl-stretch mb-xl-8">
                                        <!--begin::Body-->
                                        <div class="card-body">
                                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="text-white fw-bold fs-2 mb-2 mt-5">{{ $total_paid }}</div>
                                            <div class="fw-semibold text-white">Total Pack Paid </div>
                                        </div>
                                        
                                        <!--end::Body-->
                                    </a>
                                    <!--end::Statistics Widget 5-->
                                </div>
                                <div class="col-xl-3">
                                    <!--begin::Statistics Widget 5-->
                                    <a href="#" class="card bg-warning hoverable card-xl-stretch mb-xl-8">
                                        <!--begin::Body-->
                                        <div class="card-body">
                                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="text-white fw-bold fs-2 mb-2 mt-5">{{ $total_bus_paid }}</div>
                                            <div class="fw-semibold text-white">Total Bus Paid </div>
                                        </div>
                                        
                                        <!--end::Body-->
                                    </a>
                                    <!--end::Statistics Widget 5-->
                                </div>
                                @if (Auth::user()->role == 0)
                                <div class="col-xl-3">
                                    <!--begin::Statistics Widget 5-->
                                    <a href="#" class="card bg-danger hoverable card-xl-stretch mb-xl-8">
                                        <!--begin::Body-->
                                        <div class="card-body">
                                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="text-white fw-bold fs-2 mb-2 mt-5">{{ $total_amount }} TND</div>
                                            <div class="fw-semibold text-white">Amount collected (7amdoulah)</div>
                                        </div>
                                        <!--end::Body-->
                                    </a>
                                    <!--end::Statistics Widget 5-->
                                </div>
                                @endif
                                @if (Auth::user()->role == 0)
                                <div class="col-xl-3">
                                    <!--begin::Statistics Widget 5-->
                                    <a href="#" class="card bg-danger hoverable card-xl-stretch mb-xl-8">
                                        <!--begin::Body-->
                                        <div class="card-body">
                                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="text-white fw-bold fs-2 mb-2 mt-5">{{ $total_pack_amount }} TND</div>
                                            <div class="fw-semibold text-white">Pack Amount collected (7amdoulah)</div>
                                        </div>
                                        <!--end::Body-->
                                    </a>
                                    <!--end::Statistics Widget 5-->
                                </div>
                                @endif
                                @if (Auth::user()->role == 0)
                                <div class="col-xl-3">
                                    <!--begin::Statistics Widget 5-->
                                    <a href="#" class="card bg-danger hoverable card-xl-stretch mb-xl-8">
                                        <!--begin::Body-->
                                        <div class="card-body">
                                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <div class="text-white fw-bold fs-2 mb-2 mt-5">{{ $total_bus_amount }} TND</div>
                                            <div class="fw-semibold text-white">Bus Amount collected (7amdoulah)</div>
                                        </div>
                                        <!--end::Body-->
                                    </a>
                                    <!--end::Statistics Widget 5-->
                                </div>
                                @endif
                                
                            </div>
                            <div class="row">
                                <div class="col-xl-4">
                                    <!--begin: Statistics Widget 6-->
                                    <div class="card bg-light-success card-xl-stretch mb-xl-8">
                                        <!--begin::Body-->
                                        <div class="card-body my-3">
                                            <a href="#"
                                                class="card-title fw-bold text-success fs-5 mb-3 d-block">Genders</a>
                                            <div class="py-1">
                                                <span
                                                    class="text-dark fs-2 fw-bold me-2">{{ number_format((float) ($total_female / $all) * 100, 2, '.', '') }}%
                                                    Females / {{ number_format((float) ($total_men / $all) * 100, 2, '.', '') }}%
                                                    Men</span>
                                                <span class="fw-semibold text-muted fs-7">Genders</span>
                                            </div>
                                            <div class="progress h-7px bg-warning  mt-7">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: {{ ($total_female / $all) * 100 }}%"
                                                    aria-valuenow="{{ $total_female }}" aria-valuemin="0"
                                                    aria-valuemax="{{ $all }}"></div>
                                            </div>
                                        </div>
                                        <!--end:: Body-->
                                    </div>
                                    <!--end: Statistics Widget 6-->
                                </div>
                                <div class="col-xl-4">
                                    <!--begin: Statistics Widget 6-->
                                    <div class="card bg-light-success card-xl-stretch mb-xl-8">
                                        <!--begin::Body-->
                                        <div class="card-body my-3">
                                            <a href="#"
                                                class="card-title fw-bold text-success fs-5 mb-3 d-block">Reservations</a>
                                            <div class="py-1">
                                                <span
                                                    class="text-dark fs-1 fw-bold me-2">{{ ($total_empty_rooms / 500) * 100 }}%</span>
                                                <span class="fw-semibold text-muted fs-7">Of rooms are reserved</span>
                                            </div>
                                            <div class="progress h-7px bg-success bg-opacity-50 mt-7">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: {{ ($total_empty_rooms / 500) * 100 }}%"
                                                    aria-valuenow="{{ $total_empty_rooms }}" aria-valuemin="0"
                                                    aria-valuemax="500"></div>
                                            </div>
                                        </div>
                                        <!--end:: Body-->
                                    </div>
                                    <!--end: Statistics Widget 6-->
                                </div>
                            </div>
                            <div class="row">
                                <div id="container"
                                    style="width: 500px; height: 400px; border-radius:55px;overflow: hidden;"></div>
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

    <script>
        anychart.onDocumentReady(function() {
            // create map
            var map = anychart.map();

            // create data set
            var dataSet = anychart.data.set(
                [
                    @for ($i = 0; $i < count($total_users_per_city); $i++)
                        {
                            @switch($total_users_per_city[$i]->city)
                                @case('Tozeur')
                                "id": "TN.TO",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Sfax')
                                "id": "TN.SF",
                                "value": {{ $total_users_per_city[$i]->total}},
                                @break

                                @case('Sousse')
                                "id": "TN.SU",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Tunis')
                                "id": "TN.TU",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Bizerte')
                                "id": "TN.BZ",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Kairouan')
                                "id": "TN.KR",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Monastir')
                                "id": "TN.MN",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Nabeul')
                                "id": "TN.NB",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Ben Arous')
                                "id": "TN.BA",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Jendouba')
                                "id": "TN.JE",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Beja')
                                "id": "TN.BJ",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Gabes')
                                "id": "TN.GB",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Gafsa')
                                "id": "TN.GF",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Kasserine')
                                "id": "TN.KS",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Kebili')
                                "id": "TN.KB",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Mahdia')
                                "id": "TN.MH",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Medenine')
                                "id": "TN.MD",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Sidi Bouzid')
                                "id": "TN.SB",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Siliana')
                                "id": "TN.SL",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Tataouine')
                                "id": "TN.TT",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Ariana')
                                "id": "TN.AR",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Manouba')
                                "id": "TN.MN",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Touzeur')
                                "id": "TN.TO",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Tataouine')
                                "id": "TN.TT",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Tunis')
                                "id": "TN.TU",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Zaghouan')
                                "id": "TN.ZG",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break

                                @case('Kef')
                                "id": "TN.KF",
                                "value": {{ $total_users_per_city[$i]->total }}
                                @break
                            @endswitch

                        },
                    @endfor


                ]
            );

            // create choropleth series
            series = map.choropleth(dataSet);

            // set geoIdField to 'id', this field contains in geo data meta properties
            series.geoIdField('id');

            // set map color settings
            series.colorScale(anychart.scales.linearColor('#deebf7', '#3182bd'));
            series.hovered().fill('#addd8e');

            // set geo data, you can find this map in our geo maps collection
            // https://cdn.anychart.com/#maps-collection
            map.geoData(anychart.maps['tunisia']);

            //set map container id (div)
            map.container('container');

            //initiate map drawing
            map.draw();
        });
    </script>
@endsection

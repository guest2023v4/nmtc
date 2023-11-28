@extends('dashboards.organizers.layouts.organizers-dash-layout')
@section('title', 'NMTC - Dashboard')

@section('content')
<div class="toolbar py-5 py-lg-15" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column me-3">
            <!--begin::Title-->
            <h1 class="d-flex text-white fw-bold my-1 fs-3">NMTC Payment</h1>
            <!--end::Title-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        
        <!--end::Actions-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->
<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
            <!--begin::Col-->
            <div class="col-xl-3">
                <!--begin::Card widget 3-->
                <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100"
                    style="background-color: #F1416C;background-image:url('{{ asset('assets/media/svg/shapes/wave-bg-red.svg')}}')">
                    <!--begin::Header-->
                    <div class="card-header pt-5 mb-3">
                        <!--begin::Icon-->
                        <div class="d-flex flex-center rounded-circle h-80px w-80px"
                            style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #F1416C">
                            <i class="fa-solid fa-triangle-exclamation text-white fs-2qx lh-0"></i>
                        </div>
                        <!--end::Icon-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex align-items-end mb-3">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                            <span class="fs-4hx text-white fw-bold me-6">{{$unpaid}}</span>
                            <div class="fw-bold fs-6 text-white">
                                <span class="d-block">Unpaid</span>
                                <span class="">Participants</span>
                            </div>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="card-footer"
                        style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
                        <!--begin::Progress-->
                        <div class="fw-bold text-white py-2">
                            <span class="fs-1 d-block">{{$total}}</span>
                            <span class="opacity-50">Total Selections</span>
                        </div>
                        <!--end::Progress-->
                    </div>
                    <!--end::Card footer-->
                </div>
                <!--end::Card widget 3-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-3">
                <!--begin::Card widget 3-->
                <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100"
                    style="background-color: #7239EA;background-image:url('{{ asset('assets/media/svg/shapes/wave-bg-purple.svg')}}')">
                    <!--begin::Header-->
                    <div class="card-header pt-5 mb-3">
                        <!--begin::Icon-->
                        <div class="d-flex flex-center rounded-circle h-80px w-80px"
                            style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
                            <i class="fa-solid fa-circle-check text-white fs-2qx lh-0"></i>
                        </div>
                        <!--end::Icon-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex align-items-end mb-3">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                            <span class="fs-4hx text-white fw-bold me-6">{{$paid}}</span>
                            <div class="fw-bold fs-6 text-white">
                                <span class="d-block">Paid</span>
                                <span class="">Participants</span>
                            </div>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="card-footer"
                        style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
                        <!--begin::Progress-->
                        <div class="fw-bold text-white py-2">
                            <span class="fs-1 d-block">{{$total}}</span>
                            <span class="opacity-50">Total Selections</span>
                        </div>
                        <!--end::Progress-->
                    </div>
                    <!--end::Card footer-->
                </div>
                <!--end::Card widget 3-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-6">
                <!--begin::Budget-->
                <div class="row ">
                <div class="col-lg-12">
                    <!--begin::Statistics Widget 5-->
                    <div class="card bg-body hoverable card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                            <span class="svg-icon svg-icon-primary svg-icon-3x ms-n1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
                                    <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
                                    <rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
                                    <rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="text-gray-900 fw-bold fs-1 mb-2 mt-5">{{$total_amount-$totalcollected}} TND</div>
                            <div class="fw-semibold text-primary mb-3">In your wallet</div>
                            <div class="text-gray-900 fw-bold fs-1 mb-2 mt-5">{{$totalcollected}} TND</div>
                            <div class="fw-semibold text-primary mb-3">Collected by admins</div>
                            <div class="text-gray-900 fw-bold fs-1 mb-2 mt-5">{{$total_amount}} TND</div>
                            <div class="fw-semibold text-primary">Overall total</div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 5-->
                </div>
              
                </div>
                <!--end::Budget-->
            </div>
            <!--end::Col-->
        </div>
     
    </div>
    <!--end::Post-->
</div>
<!--end::Container-->
<!--begin::Footer-->
<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
    <!--begin::Container-->
    <div
        class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted fw-semibold me-1">2023&copy;</span>
            <a href="https://nmtc.tn" target="_blank"
                class="text-gray-800 text-hover-primary">NMTC</a>
        </div>
        <!--end::Copyright-->
        <!--begin::Menu-->
        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
            <li class="menu-item">
                <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
            </li>
            <li class="menu-item">
                <a href="https://devs.keenthemes.com" target="_blank"
                    class="menu-link px-2">Support</a>
            </li>
            <li class="menu-item">
                <a href="https://1.envato.market/EA4JP" target="_blank"
                    class="menu-link px-2">Purchase</a>
            </li>
        </ul>
        <!--end::Menu-->
    </div>
    <!--end::Container-->
</div>
<!--end::Footer-->
@endsection
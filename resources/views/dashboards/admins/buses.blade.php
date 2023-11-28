@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title', 'NMTC - Buses')

@section('content')
    <div class="toolbar py-5 " id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-white fw-bold my-1 fs-3">Buses</h1>
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
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-md-10">
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <!--begin::Card widget 2-->
                    <div class="card h-lg-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <!--begin::Icon-->
                            <div class="m-0">
                                <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3"
                                        d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z"
                                        fill="currentColor" />
                                    <path
                                        d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
                                        fill="currentColor" />
                                </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Section-->
                            <div class="d-flex flex-column my-7">
                                <!--begin::Number-->
                                <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">000</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0">
                                    <span class="fw-semibold fs-6 text-gray-400">To collect</span>
                                </div>
                                <!--end::Follower-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Badge-->
                            <span class="badge badge-light-success fs-base">
                                To be collected
                            </span>
                            <!--end::Badge-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 2-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <!--begin::Card widget 2-->
                    <div class="card h-lg-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <!--begin::Icon-->
                            <div class="m-0">
                                <!--begin::Svg Icon | path: icons/duotune/graphs/gra001.svg-->
                                <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3"
                                            d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z"
                                            fill="currentColor" />
                                        <path
                                            d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Section-->
                            <div class="d-flex flex-column my-7">
                                <!--begin::Number-->
                                <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">000</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0">
                                    <span class="fw-semibold fs-6 text-gray-400">Collected</span>
                                </div>
                                <!--end::Follower-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Badge-->
                            <span class="badge badge-light-danger fs-base">
                            Already taken
                            </span>
                            <!--end::Badge-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 2-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-6 col-xl-2 mb-xl-10">
                    <!--begin::Card widget 2-->
                    <div class="card h-lg-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <!--begin::Icon-->
                            <div class="m-0">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs048.svg-->
                                <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3"
                                        d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z"
                                        fill="currentColor" />
                                    <path
                                        d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
                                        fill="currentColor" />
                                </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Section-->
                            <div class="d-flex flex-column my-7">
                                <!--begin::Number-->
                                <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">000</span>
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <div class="m-0">
                                    <span class="fw-semibold fs-6 text-gray-400">Total</span>
                                </div>
                                <!--end::Follower-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Badge-->
                            <span class="badge badge-light-success fs-base">
                              Total
                            </span>
                            <!--end::Badge-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card widget 2-->
                </div>
                <!--end::Col-->
                <div class="col-sm-6 col-xl-6 mb-xl-10">
                    <div class="card h-lg-100">
                        <!--begin::Body-->
                        <div class="card-body d-flex justify-content-between align-items-start flex-column">
                            <!--begin::Icon-->
                            <div class="m-0">
                                <!--begin::Svg Icon | path: icons/duotune/graphs/gra001.svg-->
                                <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3"
                                            d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z"
                                            fill="currentColor" />
                                        <path
                                            d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                               
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Icon-->
                            <!--begin::Section-->
                            <div class="d-flex flex-column my-7">
                                <!--begin::Number-->
                             
                                <!--end::Number-->
                                <!--begin::Follower-->
                                <form action="{{route('launchBus')}}" method="POST">
                                    @csrf
                                 
                                <div>
                                <input type="submit" class="btn btn-light-success" value="Launch">
                               
                                </div>
                                </form>
                                <!--end::Follower-->
                            </div>
                            <!--end::Section-->
                            <!--begin::Badge-->
                       
                            <!--end::Badge-->
                        </div>
                        <!--end::Body-->
                    </div>
                    
                </div>
                <!--end::Col-->
            </div>
        </div>
        <div class="col-md-12" id="UsersList">
            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                <!--begin::Post-->
                <div class="content flex-row-fluid" id="kt_content">
                    <!--begin::Card-->
                    <div class="card">
                        <!--begin::Card header-->
                        <div class="card-header border-0 pt-6">
                            <!--begin::Card title-->
                            <div class="card-title d-flex justify-content-end">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
                                    Add Bus
                                </button>
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
                               
                                <table id="kt_datatable_zero_configuration" class="table table-row-bordered gy-5">
                                    <thead>
                                        <tr class="fw-semibold fs-6 text-muted">
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Time</th>
                                            <th>Price</th>
                                            <th>Seats</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($buses as $bus)
                                        <tr>
                                            <td>{{$bus->id}}</td>
                                            <td>{{$bus->name}}</td>
                                            <td>{{$bus->time}}</td>
                                            <td>{{$bus->price}}</td>
                                            <td><div class="progress h-7px bg-success bg-opacity-50 ">
												<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="{{$bus->seats}}" aria-valuemin="0" aria-valuemax="{{$bus->seats}}"></div>
											</div></td>
                                            
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                 
                                </table>
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

    <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Add Bus</h3>
    
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <span class="svg-icon svg-icon-1"></span>
                    </div>
                    <!--end::Close-->
                </div>
    
                <div class="modal-body">
                    <form action="{{route('addBus')}}" method="POST">
                        @csrf
                       
                    <div class="input-group mb-5">
                        <span class="input-group-text">Name</span>
                        <input type="text" class="form-control" name="name" aria-label="Name" value="" placeholder="" />
                    </div>
                    <div class="input-group mb-5">
                        <span class="input-group-text">Time</span>
                        <input type="text" class="form-control" name="time" aria-label="time" value="" placeholder="" />
                    </div>
                    <div class="input-group mb-5">
                        <span class="input-group-text">Price</span>
                        <input type="text" class="form-control" name="price" aria-label="price" value="" placeholder="" />
                        <span class="input-group-text">TND</span>
                    </div>
                    <div class="input-group mb-5">
                        <span class="input-group-text">Seats</span>
                        <input type="text" class="form-control" name="seats" aria-label="seats" value="" placeholder="" />
                    </div>
                    <div>
                    <input type="submit" class="btn btn-light-success px-6 w-100" value="Add">
                   
                    </div>
                    </form>
                </div>
    
              
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
              
            </ul>
            <!--end::Menu-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Footer-->
    </div>
   

@endsection

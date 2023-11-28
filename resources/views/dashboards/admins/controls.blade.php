@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title', 'NMTC - Controls')

@section('content')
    <div class="toolbar py-5 " id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-white fw-bold my-1 fs-3">Controls</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">
                        <a href="{{ route('admin.dashboard') }}" class="text-white text-hover-primary">Dashboard</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-white opacity-75 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white opacity-75">Controls</li>
                    <!--end::Item-->

                </ul>
                <!--end::Breadcrumb-->

            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->

    </div>
    <div class="row">
        <div class="col-md-12" id="UsersList">
            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                <!--begin::Post-->
                <div class="d-flex flex-row-fluid" id="kt_content">
                    <!--begin::Card-->
                    <div class="card flex-row-fluid m-2">
                        <!--begin::Card header-->
                        <div class="card-header border-0 pt-6">
                            <!--begin::Card title-->
                            <div class="card-title">
                                Control parameters
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

                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example">
                                <!--begin::Table head-->
                                <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-25px">Action</th>
                                        <th class="min-w-100px">Status</th>
                                        <th class="min-w-60px text-end">Action</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="text-gray-600 fw-semibold">
                                    <!--begin::Table row-->
                                    <form action="{{ route('admin.updateControls') }}" method="post">
                                        @csrf
                                        <tr>
                                            <td class="text-gray-800">Registration</td>
                                            <td class="text-gray-800">
                                                @if ($controls->registration == 1)
                                                    <div class="badge badge-light-success fw-bold">Active</div>
                                                @else
                                                    <div class="badge badge-light-danger fw-bold">Inactive</div>
                                            </td>
                                            @endif
                                            <td class="text-end">
                                                <button type="submit" name="control" value="reg"
                                                    class="btn btn-secondary btn-active-text-primary">
                                                    @if ($controls->registration == 1)
                                                        Deactivate
                                                    @else
                                                        Activate
                                                    @endif
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-gray-800">Rooms</td>
                                            <td class="text-gray-800">
                                                @if ($controls->rooms == 1)
                                                    <div class="badge badge-light-success fw-bold">Active</div>
                                                @else
                                                    <div class="badge badge-light-danger fw-bold">Inactive</div>
                                            </td>
                                            @endif
                                            <td class="text-end">
                                                <button type="submit" name="control" value="room"
                                                    class="btn btn-secondary btn-active-text-primary">
                                                    @if ($controls->rooms == 1)
                                                        Deactivate
                                                    @else
                                                        Activate
                                                    @endif
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-gray-800">Bus</td>
                                            <td class="text-gray-800">
                                                @if ($controls->bus == 1)
                                                    <div class="badge badge-light-success fw-bold">Active</div>
                                                @else
                                                    <div class="badge badge-light-danger fw-bold">Inactive</div>
                                            </td>
                                            @endif
                                            <td class="text-end">
                                                <button type="submit" name="control" value="bus"
                                                    class="btn btn-secondary btn-active-text-primary">
                                                    @if ($controls->bus == 1)
                                                        Deactivate
                                                    @else
                                                        Activate
                                                    @endif
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-gray-800">Teams</td>
                                            <td class="text-gray-800">
                                                @if ($controls->teams == 1)
                                                    <div class="badge badge-light-success fw-bold">Active</div>
                                                @else
                                                    <div class="badge badge-light-danger fw-bold">Inactive</div>
                                            </td>
                                            @endif
                                            <td class="text-end">
                                                <button type="submit" name="control" value="team"
                                                    class="btn btn-secondary btn-active-text-primary">
                                                    @if ($controls->teams == 1)
                                                        Deactivate
                                                    @else
                                                        Activate
                                                    @endif
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-gray-800">Payment</td>
                                            <td class="text-gray-800">
                                                @if ($controls->payment == 1)
                                                    <div class="badge badge-light-success fw-bold">Active</div>
                                                @else
                                                    <div class="badge badge-light-danger fw-bold">Inactive</div>
                                                @endif
                                            </td>

                                            <td class="text-end">
                                                <button type="submit" name="control" value="pay"
                                                    class="btn btn-secondary btn-active-text-primary">
                                                    @if ($controls->payment == 1)
                                                        Deactivate
                                                    @else
                                                        Activate
                                                    @endif
                                                </button>
                                            </td>
                                        </tr>

                                        <!--end::Table row-->

                                        <!--begin::Table row-->

                                        <!--end::Table row-->
                                    </form>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                    <!--begin::Card-->
                    <div class="card flex-row-fluid m-2">
                        <!--begin::Card header-->
                        <div class="card-header border-0 pt-6">
                            <!--begin::Card title-->
                            <div class="card-title">
                                Rooms parameters
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

                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example">
                                <!--begin::Table head-->
                                <thead>
                                    <!--begin::Table row-->
                                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-50px">Room type</th>
                                        <th class="min-w-50px">Rooms number</th>
                                        <th class="min-w-50px">Booked rooms</th>
                                        <th class="min-w-60px">Update</th>
                                        <th class="min-w-60px text-end">Action</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="text-gray-600 fw-semibold">
                                    <!--begin::Table row-->
                                    
                                    <?php $types = ['Single', 'Double', 'Triple', 'Quadriple']; ?>
                                    @foreach ($roomTypes as $id => $roomType)
                                        <form action="{{ route('admin.updateRoomTypes') }}" method="post">
                                            @csrf
                                            <tr>
                                                <td class="text-gray-800">{{ $types[$id] }}</td>
                                                <td class="text-gray-800">{{ $roomType->rooms_nb }}</td>
                                                <td class="text-gray-800">{{ $roomType->rooms->count() }}</td>
                                                <td class="text-gray-800">
                                                    <input class="form-control form-control-sm form-control-solid w-60px"
                                                        placeholder="..." type="number" min="{{ $roomType->rooms->count() }}" value="{{ $roomType->rooms_nb }}" name="rooms_number">
                                                    <input type="hidden" name="id" value="{{ $id+1 }}">
                                                </td>
                                                <td class="text-end">
                                                    <button type="submit" name="control" value="reg"
                                                        class="btn btn-secondary btn-active-text-primary">
                                                        Update
                                                    </button>
                                                </td>
                                            </tr>
                                        </form>
                                    @endforeach
                                    <!--end::Table row-->

                                    <!--begin::Table row-->

                                    <!--end::Table row-->

                                </tbody>
                                <!--end::Table body-->
                            </table>
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
        </div>
        <!--end::Container-->
    </div>
    <!--end::Footer-->
    </div>
@endsection

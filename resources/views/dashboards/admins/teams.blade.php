@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title', 'NMTC - Teams')

@section('content')
    <div class="toolbar py-5 " id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-3">
                <!--begin::Title-->
                <h1 class="d-flex text-white fw-bold my-1 fs-3">Teams List</h1>
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
                    <li class="breadcrumb-item text-white opacity-75">Teams List</li>
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
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                    transform="rotate(45 17.0365 15.1223)" fill="white" />
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
                <div>
                    <!--begin::Filter-->
                    <button type="button" class="btn btn-secondary export-btn me-3" data-kt-menu-trigger="click"
                        data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Filter
                    </button>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bold">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Separator-->
                        <!--begin::Content-->
                        <div class="px-7 py-5" data-kt-filter="form">
                            <!--begin::Input group-->
                            <div class = "d-flex  justify-content-between">
                                <div class="mb-5 ">
                                    <p class="form-label fs-6 fw-semibold">Teammates :</p>
                                    <label class="form-check form-check-sm form-check-custom form-check-solid mb-2">
                                        <input class="form-check-input" type="checkbox" name="teammate_select" value="1"
                                            id="teammate_select" />
                                        <span class="form-check-label">1</span>
                                    </label>
                                    <label class="form-check form-check-sm form-check-custom form-check-solid mb-2">
                                        <input class="form-check-input" type="checkbox" name="teammate_select" value="2"
                                            id="teammate_select_2" />
                                        <span class="form-check-label">2</span>
                                    </label>
                                    <label class="form-check form-check-sm form-check-custom form-check-solid mb-2">
                                        <input class="form-check-input" type="checkbox" name="teammate_select" value="3"
                                            id="teammate_select_3" />
                                        <span class="form-check-label">3</span>
                                    </label>
                                    <label class="form-check form-check-sm form-check-custom form-check-solid mb-2">
                                        <input class="form-check-input" type="checkbox" name="teammate_select" value="4"
                                            id="teammate_select_4" />
                                        <span class="form-check-label">4</span>
                                    </label>
                                </div>
                                
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="mb-5">
                                    <label class="form-label fs-6 fw-semibold">Type :</label>
                                    <label class="form-check form-check-sm form-check-custom form-check-solid mb-2">
                                        <input class="form-check-input" type="checkbox" name="type_select"
                                            value="Private" id="type_select" />
                                        <span class="form-check-label">Private</span>
                                    </label>
                                    <label class="form-check form-check-sm form-check-custom form-check-solid mb-2">
                                        <input class="form-check-input" type="checkbox" name="type_select"
                                            value="Public" id="type_select_2" />
                                        <span class="form-check-label">Public</span>
                                    </label>
                                </div>
                                <div class="mb-5">
                                    <label class="form-label fs-6 fw-semibold">Payment :</label>
                                    <label class="form-check form-check-sm form-check-custom form-check-solid mb-2">
                                        <input class="form-check-input" type="checkbox" name="pay_select"
                                            value="Paid" id="pay_select" />
                                        <span class="form-check-label">Paid</span>
                                    </label>
                                    <label class="form-check form-check-sm form-check-custom form-check-solid ">
                                        <input class="form-check-input" type="checkbox" name="pay_select"
                                            value="Unpaid" id="pay_select_2" />
                                        <span class="form-check-label">Unpaid</span>
                                    </label>
                                </div>
                            </div>

                            <!--end::Input group-->
                            <!--begin::Input group-->

                            <!--end::Input group-->
                            <!--begin::Actions-->

                            <!--end::Actions-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Filter-->
                </div>
                <!--begin::Button-->
                <a href="#" class="btn btn-icon btn-secondary export-btn me-3" id="deleteuser"><span
                        class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                fill="currentColor" />
                            <path opacity="0.5"
                                d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                fill="currentColor" />
                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                fill="currentColor" />
                        </svg></span></a>

                <!--begin::Export dropdown-->
                <button type="button" class="btn btn-bg-light btn-color-gray-900 export-btn"
                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <span class="svg-icon svg-icon-1 "><svg width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3"
                                d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z"
                                fill="currentColor" />
                            <rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor" />
                            <rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor" />
                            <rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor" />
                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
                        </svg></span>
                    Export
                </button>
                <!--begin::Menu-->
                <div id="kt_datatable_example_export_menu"
                    class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4"
                    data-kt-menu="true">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-export="copy">
                            Copy to clipboard
                        </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-export="excel">
                            Export as Excel
                        </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-export="csv">
                            Export as CSV
                        </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3" data-kt-export="pdf">
                            Export as PDF
                        </a>
                    </div>
                    <!--end::Menu item-->
                </div>
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
                            {{-- <div class="card-title">
                                @if (Auth::user()->id == 1)
                                    You have &nbsp;  <span class="text-primary">{{$users_bank_count}}</span>  &nbsp; bank transfer  @if ($users_bank_count > 1)operations
                                    @else operation @endif waiting for you !
                                @endif
                                    
                            </div> --}}
                            <!--begin::Card title-->
                            <!--begin::Export buttons-->
                            <div id="kt_datatable_example_1_export" class="d-none"></div>
                            <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                <!--begin::Filter-->


                                <!--end::Export-->
                                <!--begin::Clean-->
                                <form action="{{ route('admin.deleteUnpaidTeams') }}" class="mx-3" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                                    rx="1" transform="rotate(-90 11.364 20.364)"
                                                    fill="currentColor" />
                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->Delete unpaid
                                    </button>
                                </form>
                                <form action="{{ route('admin.refreshTeams') }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-success">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                                    rx="1" transform="rotate(-90 11.364 20.364)"
                                                    fill="currentColor" />
                                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->Refresh teams
                                    </button>
                                </form>
                                <!--end::Add user-->
                            </div>
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
                                        <th class="w-10px pe-2">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                    data-kt-check-target="#kt_table_users .form-check-input"
                                                    value="1" />
                                            </div>
                                        </th>
                                        <th class="min-w-25px">ID</th>
                                        <th class="min-w-100px">Name</th>
                                        <th class="min-w-100px">Teammates</th>
                                        <th class="min-w-100px d-none"></th>
                                        <th class="min-w-60px">Code</th>
                                        <th class="min-w-100px">Type</th>
                                        <th class="min-w-60px">Payment</th>
                                        <th class="min-w-60px">Leader</th>
                                        <th class="text-end min-w-125px">Actions</th>
                                    </tr>
                                    <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="text-gray-600 fw-semibold">
                                    <!--begin::Table row-->
                                    @foreach ($teams as $team)
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="{{ $team->id }} " />
                                                </div>
                                            </td>
                                            <td class="text-gray-800">{{ $team->id }}</td>
                                            <td class="text-gray-800">{{ $team->name }}</td>
                                            <td class="text-gray-800">
                                                <?php $count = 0; ?>
                                                @foreach ($team->users as $teammate)
                                                    <img data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="{{ $teammate->name }} : @if ($teammate->pay_status_pack != 0) PAID @else UNPAID @endif"
                                                        src="{{ $teammate->picture }}" width="20px">
                                                    <?php $count++; ?>
                                                @endforeach
                                                <p class="d-none"> {{$count}}</p>
                                            </td>
                                            <td class="d-none"></td>
                                            <td class="text-gray-800">{{ $team->code }}</td>
                                            <td class="text-gray-800">
                                                @if ($team->type == 0)
                                                    Private
                                                @else
                                                    Public
                                                @endif
                                            </td>                                            
                                            
                                            
                                            <td>
                                                @if ($team->is_all_paid == 0)
                                                    <div class="badge badge-light-danger fw-bold">Unpaid</div>
                                                @else
                                                    <div class="badge badge-light-success fw-bold">Paid</div>
                                                @endif
                                            </td>

                                            <td class="text-gray-800">
                                                @if ($team->teamLeader != null)
                                                    {{ $team->teamLeader->name }}
                                                @else
                                                    --
                                                @endif
                                            </td>
                                            <td class="text-end">
                                                {{-- <a href="#" onclick="ViewUser({{ $user->id }})"
                                                    class="btn btn-icon btn-secondary btn-active-icon-primary btn-active-text-primary"><span
                                                        class="svg-icon svg-icon-1"><svg width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                fill="currentColor" />
                                                            <path opacity="0.3"
                                                                d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                fill="currentColor" />
                                                        </svg></span></a> --}}
                                                {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_1"
                                                    onclick="getEditInfo({{ $user->id }})"
                                                    class="btn btn-icon btn-secondary btn-active-icon-success btn-active-text-success"><span
                                                        class="svg-icon svg-icon-1"><svg width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                fill="currentColor" />
                                                        </svg></span></a> --}}
                                                <a href="" data-bs-toggle="modal" data-bs-target="#kt_modal_6"
                                                    onclick="deleteUser({{ $team->id }})"
                                                    class="btn btn-icon btn-secondary btn-active-icon-danger btn-active-text-danger"><span
                                                        class="svg-icon svg-icon-1"><svg width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                fill="currentColor" />
                                                            <path opacity="0.5"
                                                                d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                fill="currentColor" />
                                                            <path opacity="0.5"
                                                                d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                fill="currentColor" />
                                                        </svg></span></a>
                                            </td>
                                        </tr>
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
        </div>
        <!--end::Container-->
    </div>
    <!--end::Footer-->
    </div>

    <div class="modal fade" tabindex="-1" id="kt_modal_5">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Confirm Room</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-1"></span>
                    </div>
                    <!--end::Close-->
                </div>
                <form method="POST" id="pay_form" action="{{ route('admin.confirm_room') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-5" class="col">
                            <div>


                                <p> Room ID : <span class="fw-bold h4 text-light-danger bg-danger px-3"
                                        style="color:white !important;" id="room_id"></span></p>
                                <p> Family Case : <span class="fw-bold h4 text-light-danger bg-danger px-3"
                                        style="color:white !important;" id= "family_case"></span></p>
                                <p> Roommate 1 : <span class="fw-bold h4 text-light-danger bg-danger px-3"
                                        style="color:white !important;" id= "roommate_0"></span></p>
                                <img src="" width="150px" alt="" id="cin_0" class="bank_n">
                                <p> Roommate 2 : <span class="fw-bold h4 text-light-danger bg-danger px-3"
                                        style="color:white !important;" id= "roommate_1"></span></p>
                                <img src="" width="150px" alt="" id="cin_1" class="bank_n">
                                <p> Roommate 3 : <span class="fw-bold h4 text-light-danger bg-danger px-3"
                                        style="color:white !important;" id= "roommate_2"></span></p>
                                <img src="" width="150px" alt="" id="cin_2" class="bank_n">
                                <p> Roommate 4 : <span class="fw-bold h4 text-light-danger bg-danger px-3"
                                        style="color:white !important;" id= "roommate_3"></span></p>
                                <img src="" width="150px" alt="" id="cin_3" class="bank_n">
                                <p> Proof : </p>
                                <img src="" width="150px" alt="" id="proof" class="bank_n">


                            </div>

                        </div>

                        <input type="hidden" name="roomID" id="room_id1">

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <input type="submit" name="refuse" class="btn btn-danger" value = "Refuse">
                        <input type="submit" name="confirm" class="btn btn-success" value = "Confirm">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="kt_modal_6">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Delete User</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-1"></span>
                    </div>
                    <!--end::Close-->
                </div>
                <form method="POST" id="del_form" action="{{ route('admin.delete_team') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-5" class="col">
                            <div>


                                <p> Are you sure you want to delete this team ?


                            </div>

                        </div>

                        <input type="hidden" name="teamID" id="del_id">

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <input type="submit" name="confirm" class="btn btn-danger" value = "Confirm">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        var userdetail = document.getElementById("ViewUser");

        function ViewUser($id) {
            if ($('#UsersList').is('.col-md-8')) {
                $('#UsersList').removeClass("col-md-8");
                $('#UsersList').addClass("col-md-12");
                $('#ViewUser').empty();
            } else {
                $('#UsersList').removeClass("col-md-12");
                $('#UsersList').addClass("col-md-8");
                $.get("../assets/user.php").done(function(data) {
                    userdetail.innerHTML = data;
                    getEntryData($id);
                });

            }

        }


        function getEntryData($id) {

            $.ajax({
                url: '/admin/userDetails/' + $id,
                type: 'get',
                dataType: 'json',
                success: function(response) {

                    if (response.length == 0) {
                        console.log("fail");
                    } else {
                        // set values

                        document.getElementById('part_img').src = response.picture;
                        document.getElementById('part_name').innerHTML = response.name;
                        document.getElementById('part_email').innerHTML = response.email;
                        document.getElementById('part_phone').innerHTML = response.phone;
                        document.getElementById('part_id').innerHTML = "#" + response.id;
                        document.getElementById('part_created').innerHTML = response.created_at;
                        document.getElementById('part_city').innerHTML = response.city;
                        document.getElementById('part_birthday').innerHTML = response.birthday;
                        document.getElementById('part_edu').innerHTML = response.level_of_study;
                        document.getElementById('part_university').innerHTML = response.university;
                        document.getElementById('part_gender').innerHTML = response.gender == 'F' ? 'Female' :
                            'Male';
                        let payment = [];
                        if (response.pay_status_pack == 0) {
                            payment[0] =
                                "<span class='fw-bold mt-6 ms-6'><span class='badge badge-danger'>Pack unpaid</span></span>";
                        } else if (response.pay_status_pack == 1) {
                            payment[0] =
                                "<span class='fw-bold mt-6 ms-6'><span class='badge badge-success'>Pack paid</span></span>";
                        } else if (response.pay_status_pack == 2) {
                            payment[0] =
                                "<span class='fw-bold mt-6 ms-6'><span class='badge badge-warning'>Pack waiting</span></span>";
                        } else if (response.pay_status_pack == 3) {
                            payment[0] =
                                "<span class='fw-bold mt-6 ms-6'><span class='badge badge-primary'>Pack waiting to upgrade</span></span>";
                        }
                        if (response.transport == 1) {
                            if (response.pay_status_bus == 0) {
                                payment[1] =
                                    "<span class='fw-bold mt-6 ms-6'><span class='badge badge-danger'>Bus unpaid</span></span>";
                            } else if (response.pay_status_bus == 1) {
                                payment[1] =
                                    "<span class='fw-bold mt-6 ms-6'><span class='badge badge-success'>Bus paid</span></span>";
                            } else if (response.pay_status_bus == 2) {
                                payment[1] =
                                    "<span class='fw-bold mt-6 ms-6'><span class='badge badge-warning'>Bus waiting</span></span>";
                            }
                        } else
                            payment[1] = "";
                        document.getElementById('part_payment').innerHTML = payment[0] + payment[1];
                        if (response.transport == 1) {
                            document.getElementById('part_transport').innerHTML =
                                "<span class='fw-bold mt-6 ms-6'><span class='badge badge-secondary'>Bus</span></span>";
                        } else if ((response.transport == 0)) {
                            document.getElementById('part_transport').innerHTML =
                                "<span class='fw-bold mt-6 ms-6'><span class='badge badge-secondary'>Own</span></span>";
                        } else if ((response.transport == 2)) {
                            document.getElementById('part_transport').innerHTML =
                                "<span class='fw-bold mt-6 ms-6'><span class='badge badge-secondary'>--</span></span>";
                        }
                        if (response.room_id == null) {
                            document.getElementById('part_room').innerHTML =
                                "<span class='fw-bold mt-6 ms-6'><span class='badge badge-danger'>Unbooked</span></span>";
                        } else {
                            document.getElementById('part_room').innerHTML =
                                "<span class='fw-bold mt-6 ms-6'><span class='badge badge-secondary'> N° " +
                                response.room_id + "</span></span>";
                        }
                        if (response.role == 5) {
                            document.getElementById('part_type').innerHTML =
                                "Visitor";
                        } else if (response.role == 4) {
                            document.getElementById('part_type').innerHTML =
                                "Challenger";
                        }
                        document.getElementById('edit_btn').addEventListener("click", getEditInfo(response.id));
                        // if (response.bank_transfer != null){
                        //     document.getElementById('bank_receipt').src = response.bank_transfer;
                        // }
                        // and so on
                    }
                }
            });
        }

        function getEditInfo($id) {

            $.ajax({
                url: '/admin/userDetails/' + $id,
                type: 'get',
                dataType: 'json',
                success: function(response) {

                    if (response.length == 0) {
                        console.log("fail");
                    } else {
                        // set values

                        document.getElementById('ed_id').value = response.id;
                        document.getElementById('edit_name').value = response.name;
                        document.getElementById('edit_email').value = response.email;
                        document.getElementById('edit_phone').value = response.phone;

                        if (response.transport == 1) {
                            document.getElementById('ed_tran').options[0].selected = true;

                        } else if (response.transport == 0) {
                            document.getElementById('ed_tran').options[1].selected = true;
                        }
                        if (response.role == "5") {
                            document.getElementById('edit_type').options[0].selected = true;
                        } else if (response.role == "4") {
                            document.getElementById('edit_type').options[1].selected = true;
                        }

                        if (response.pay_status_pack == 0)
                            document.getElementById('pack_unpaid').checked = true;
                        else if (response.pay_status_pack == 2)
                            document.getElementById('pack_waiting').checked = true;
                        else if (response.pay_status_pack == 1)
                            document.getElementById('pack_paid').checked = true;

                        if (response.pay_status_bus == 0)
                            document.getElementById('bus_unpaid').checked = true;
                        else if (response.pay_status_bus == 2)
                            document.getElementById('bus_waiting').checked = true;
                        else if (response.pay_status_bus == 1)
                            document.getElementById('bus_paid').checked = true;
                        // and so on
                    }
                },
                error: function(error) {
                    console.log("2");
                }
            });
        }

        // function deleteUser($id) {
        //     $.ajax({
        //         url: '/admin/userDelete/' + $id,
        //         type: 'PUT',
        //         dataType: 'json',
        //         success: function(response) {
        //             console.log("waaa haaassen");

        //             if (response.length == 0) {
        //             } else {
        //                 // set values

        //                 document.getElementById('ed_id').value = response.id;
        //                 document.getElementById('edit_name').value = response.name;
        //                 document.getElementById('edit_email').value = response.email;
        //                 document.getElementById('edit_phone').value = response.phone;


        //                 if (response.transport == 1) {
        //                     document.getElementById('ed_tran').options[0].selected = true;

        //                 } else if (response.transport == 0) {
        //                     document.getElementById('ed_tran').options[1].selected = true;
        //                 }
        //                 if (response.role == "5") {
        //                     document.getElementById('edit_type').options[0].selected = true;
        //                 } else if (response.role == "4") {
        //                     document.getElementById('edit_type').options[1].selected = true;
        //                 }

        //                 // and so on
        //             }
        //         }
        //     });
        // }
    </script>
    <script>
        document.querySelector('#pay_form').addEventListener('submit', function(e) {
            var form = this;

            // e.preventDefault(); // <--- prevent form from submitting

            // swal.fire({
            //     html: `A your sure that you want to confirm this payment ?`,
            //     icon: "question",
            //     buttonsStyling: false,
            //     showCancelButton: true,
            //     confirmButtonText: "Yes",
            //     cancelButtonText: 'No',
            //     customClass: {
            //         confirmButton: "btn btn-success",
            //         cancelButton: 'btn btn-danger'
            //     }
            // }).then(function(isConfirm) {
            //     if (isConfirm) {
            //         swal.fire({
            //             title: 'Success!',
            //             text: 'User set a paid',
            //             icon: 'success'

            //         }).then(function() {
            //             setTimeout(form.submit(), 3000);

            //         });
            //     } else {
            //         swal.fire("Cancelled", "You canceled the payment", "error");
            //     }
            // })
        });


        //         const button = document.getElementById('pay_form');

        // button.addEventListener('submit', e =>{
        //     e.preventDefault();

        //    Swal.fire({
        //         html: `A your sure that you want to confirm this payment ?`,
        //         icon: "question",
        //         buttonsStyling: false,
        //         showCancelButton: true,
        //         confirmButtonText: "Yes",
        //         cancelButtonText: 'No',
        //         customClass: {
        //             confirmButton: "btn btn-success",
        //             cancelButton: 'btn btn-danger'
        //         }
        //     }).then(isConfirmed){
        //         button.submit();
        //     }
        // });
    </script>
    {{-- ROOMS --}}
    <script>
        function confirm_room(id, family_case, proof, names, cins, proof) {
            document.getElementById('room_id1').value = id;
            document.getElementById('room_id').innerHTML = id;
            document.getElementById('family_case').innerHTML = family_case == 0 ? 'Sibilings' : 'Married';
            let i = 0;
            // Cleaning modal
            document.getElementById('proof').src = "";
            document.getElementById('proof').classList.remove('d-none');
            for (i = 0; i < 4; i++) {
                document.getElementById('roommate_' + i).innerHTML = "";
                document.getElementById('cin_' + i).src = "";
                document.getElementById('roommate_' + i).parentElement.classList.remove('d-none');
                document.getElementById('cin_' + i).classList.remove('d-none');
            }
            for (i = 0; i < names.length; i++) {
                document.getElementById('roommate_' + i).innerHTML = names[i];
                document.getElementById('cin_' + i).src = cins[i];
            }
            for (let j = i; j < 4; j++) {
                document.getElementById('roommate_' + j).parentElement.classList.add('d-none');
                document.getElementById('cin_' + j).classList.add('d-none');
            }

            document.getElementById('proof').src = proof;
            // Check if the element exists
        }

        function deleteRoom(id) {
            document.getElementById('del_id').value = id;
        }
    </script>
@endsection

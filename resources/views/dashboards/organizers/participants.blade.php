@extends('dashboards.organizers.layouts.organizers-dash-layout')
@section('title', 'NMTC - Participants')

@section('content')
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

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
                                        class="form-control form-control-solid w-250px ps-14 search-user"
                                        placeholder="Search user" />
                                </div>
                            </div>
                            <!--end::Wrapper-->
                            <div>
                                <!--begin::Filter-->
                                <button type="button" class="btn btn-secondary export-btn me-3"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
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
                                        <div class="mb-10">
                                            <p class="form-label fs-6 fw-semibold">Cities :</p>
                                            <label class="form-check form-check-sm form-check-custom form-check-solid mb-2">
                                                <select
                                                    class="form-select form-select-solid rounded-0 border-start border-end"
                                                    name="cities" id="cities">
                                                    <option value="" selected>Choose a city</option>
                                                    @foreach ($cities as $city)
                                                        <option value="{{ $city }}">{{ $city }}</option>
                                                    @endforeach
                                                </select>

                                            </label>

                                        </div>
                                        <!--begin::Input group-->
                                        <div class="d-flex justify-content-between flex-wrap">
                                            <div class="mb-10">
                                                <p class="form-label fs-6 fw-semibold">Pack Fee :</p>
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid mb-2">
                                                    <input class="form-check-input" type="checkbox" name="pay_select"
                                                        value="Paid" id="pay_select" />
                                                    <span class="form-check-label">Paid</span>
                                                </label>
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid mb-2">
                                                    <input class="form-check-input" type="checkbox" name="pay_select"
                                                        value="Unpaid" id="pay_select_2" />
                                                    <span class="form-check-label">Unpaid</span>
                                                </label>
                                                <label class="form-check form-check-sm form-check-custom form-check-solid ">
                                                    <input class="form-check-input" type="checkbox" name="pay_select"
                                                        value="Waiting" id="pay_select_3" />
                                                    <span class="form-check-label">Waiting</span>
                                                </label>
                                            </div>
                                            <div class="mb-10">
                                                <p class="form-label fs-6 fw-semibold">Bus Fee :</p>
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid mb-2">
                                                    <input class="form-check-input" type="checkbox" name="pay_bus_select"
                                                        value="Paid" id="pay_bus_select" />
                                                    <span class="form-check-label">Paid</span>
                                                </label>
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid mb-2">
                                                    <input class="form-check-input" type="checkbox" name="pay_bus_select"
                                                        value="Unpaid" id="pay_bus_select_2" />
                                                    <span class="form-check-label">Unpaid</span>
                                                </label>
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid ">
                                                    <input class="form-check-input" type="checkbox" name="pay_bus_select"
                                                        value="Waiting" id="pay_bus_select_3" />
                                                    <span class="form-check-label">Waiting</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between flex-wrap">
                                            <div class="mb-10">
                                                <label class="form-label fs-6 fw-semibold">Type :</label>
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid mb-2">
                                                    <input class="form-check-input" type="checkbox" name="type_select"
                                                        value="Visitor" id="type_select" />
                                                    <span class="form-check-label">Visitor</span>
                                                </label>
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid mb-2">
                                                    <input class="form-check-input" type="checkbox" name="type_select"
                                                        value="Challenger" id="type_select_2" />
                                                    <span class="form-check-label">Challenger</span>
                                                </label>
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid mb-2">
                                                    <input class="form-check-input" type="checkbox" name="type_select"
                                                        value="Organizer" id="type_select_5" />
                                                    <span class="form-check-label">Organizer</span>
                                                </label>
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid mb-2">
                                                    <input class="form-check-input" type="checkbox" name="type_select"
                                                        value="Payagent" id="type_select_6" />
                                                    <span class="form-check-label">Payagent</span>
                                                </label>
                                            </div>
                                            <div class="mb-10">
                                                <label class="form-label fs-6 fw-semibold">Transport :</label>
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid mb-2">
                                                    <input class="form-check-input" type="checkbox" name="tran_select"
                                                        value="Bus" id="tran_select" />
                                                    <span class="form-check-label">Bus</span>
                                                </label>
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid ">
                                                    <input class="form-check-input" type="checkbox" name="tran_select"
                                                        value="Own" id="tran_select_2" />
                                                    <span class="form-check-label">Own</span>
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



                            <!--begin::Hide default export buttons-->
                            <div id="kt_datatable_example_buttons" class="d-none"></div>

                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Container-->

                </div>
                <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                    <!--begin::Post-->
                    <div class="content flex-row-fluid" id="kt_content">
                        <!--begin::Card-->
                        <div class="card">
                            <!--begin::Card header-->
                            <div class="card-header border-0 pt-6">
                                <!--begin::Card title-->
                                @if (Auth::user()->role == 3)
                                    <div class="card-title">
                                        You have &nbsp; <span class="text-primary">{{ $count_user_waiting }}</span> &nbsp;
                                        @if ($count_user_waiting > 1)
                                            participants
                                        @else
                                            participant
                                        @endif waiting for you !
                                    </div>
                                @endif
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
                                            <th class="w-10px pe-2">
                                                <div
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                        data-kt-check-target="#kt_table_users .form-check-input"
                                                        value="1" />
                                                </div>
                                            </th>
                                            <th class="min-w-25px">ID</th>
                                            <th class="min-w-80px">User</th>
                                            <th class="min-w-60px">Phone</th>
                                            <th class="min-w-60px d-none">city</th>
                                            <th class="min-w-60px">Transport</th>
                                            <th class="min-w-60px">Type</th>
                                            <th class="min-w-60px">Pack Fee</th>
                                            <th class="min-w-60px">Bus Fee</th>
                                            @if (Auth::user()->role === 3)
                                                <th class="text-end min-w-100px">Actions</th>
                                            @else
                                                <th class="text-end min-w-100px d-none"></th> {{-- DO NOT TOUCH THIS --}}
                                            @endif
                                        </tr>
                                        <!--end::Table row-->
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="text-gray-600 fw-semibold">
                                        <!--begin::Table row-->
                                        @foreach ($users as $user)
                                            <tr>

                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="{{ $user->id }} " />
                                                    </div>
                                                </td>
                                                <td class="text-gray-800">#{{ $user->id }}</td>

                                                <td class="d-flex align-items-center">


                                                    <div class="d-flex flex-column">
                                                        <a href="#" onclick="ViewUser({{ $user->id }})"
                                                            class="text-gray-800 text-hover-primary mb-1">{{ $user->name }}</a>
                                                        <span>{{ $user->email }}</span>
                                                    </div>

                                                </td>
                                                <td class="text-gray-800">{{ $user->phone }}</td>
                                                <td class="text-gray-800 d-none">{{ $user->city }}</td>

                                                <td class="text-gray-800">
                                                    @if ($user->transport == 0)
                                                        Own
                                                    @elseif($user->transport == 1)
                                                        Bus
                                                    @else
                                                        --
                                                    @endif
                                                </td>

                                                <td class="text-gray-800">
                                                    @if ($user->role == 5)
                                                        Visitor
                                                    @elseif($user->role == 4)
                                                        Challenger
                                                    @elseif($user->role == 3)
                                                        Payagent
                                                    @elseif($user->role <= 2)
                                                        Organizer
                                                    @else
                                                        Future Participant
                                                    @endif
                                                </td>

                                                <td>
                                                    @if ($user->pay_status_pack == 1)
                                                        <p class="badge badge-light-success fw-bold">Paid</p>
                                                    @elseif($user->pay_status_pack == 2)
                                                        <p class="badge badge-light-warning fw-bold">Waiting</p>
                                                    @else
                                                        <p class="badge badge-light-danger fw-bold">Unpaid</p>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($user->transport == 1)
                                                        @if ($user->pay_status_bus == 1)
                                                            <p class="badge badge-light-success fw-bold">Paid</p>
                                                        @elseif($user->pay_status_bus == 2)
                                                            <p class="badge badge-light-warning fw-bold">Waiting</p>
                                                        @elseif ($user->pay_status_bus == 0)
                                                            <p class="badge badge-light-danger fw-bold">Unpaid</p>
                                                        @endif
                                                    @else
                                                        <span class="text-gray-800"> --</span>
                                                    @endif
                                                </td>
                                                <?php
                                                $amountToPaid = 0;
                                                if ($user->pack_id != null) {
                                                    $amountToPaid = $user->pack->amount;
                                                }
                                                if ($user->transport == 1 && $user->pay_status_bus == 2) {
                                                    if ($user->bus_id != null) {
                                                        $amountToPaid += $user->bus->price;
                                                    }
                                                }
                                                $busFee = null;
                                                if ($user->bus_id) {
                                                    $busFee = $user->bus->price;
                                                }
                                                ?>
                                                @if (Auth::user()->role === 3)
                                                    <td class="text-end">
                                                        @if ( $c_payment == 1 &&
                                                            (($user->pay_status_pack == 2 && $user->payagent_id === Auth::user()->id) ||
                                                                ($user->pay_status_bus == 2 && $user->payagent_bus_id === Auth::user()->id)))
                                                            <button type="button" class="btn btn-success"
                                                                data-bs-toggle="modal" data-bs-target="#kt_modal_1"
                                                                onclick="clean_update({{ $user->id }},'{{ $user->name }}', '{{ $user->pay_status_pack }}', '{{ $user->pay_status_bus }}', '{{ $amountToPaid }}','{{ $user->pay_amount_total }}','{{ $busFee }}')">
                                                                Pay
                                                            </button>
                                                        @endif
                                                    </td>
                                                @else
                                                    <td class="d-none"></td> {{-- DO NOT TOUCH THIS --}}
                                                @endif
                                            </tr>
                                        @endforeach
                                        <!--end::Table row-->

                                        <!--begin::Table row-->

                                        <!--end::Table row-->
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>

                            <!--end::Table-->
                        </div>
                        <!--end::Card body-->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Confirm Payment</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-1"></span>
                    </div>
                    <!--end::Close-->
                </div>
                <form method="POST" id="pay_form" action="{{ route('pay_user') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-5">
                            <div>
                                <p> Participant Name : <span class="fw-bold h4 text-light-danger bg-danger px-3"
                                        style="color:white !important;" id="part_n"></span></p>
                                <p> Fees : <span class="fw-bold h4 text-light-danger bg-danger px-3"
                                        style="color:white !important;" id= "pack_n"></span></p>
                                <p> Total : <span class="fw-bold h4 text-light-danger bg-danger px-3"
                                        style="color:white !important;" id= "total_n"></span></p>
                                <p> Amount To Pay : <span class="fw-bold h4 text-light-danger bg-danger px-3"
                                        style="color:white !important;" id= "price_n"></span></p>
                            </div>

                        </div>

                        <input type="hidden" name="userID" id="part_id">

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('#pay_form').addEventListener('submit', function(e) {
            var form = this;

            //e.preventDefault(); // <--- prevent form from submitting

            //   swal.fire({
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
            //     }).then(function(isConfirm) {
            //       if (isConfirm) {
            //         swal.fire({
            //           title: 'Success!',
            //           text: 'User set a paid',
            //           icon: 'success'

            //         }).then(function() {
            //             setTimeout(form.submit(), 3000);

            //         });
            //       } else {
            //         swal.fire("Cancelled", "You canceled the payment", "error");
            //       }
            //     })
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

@endsection

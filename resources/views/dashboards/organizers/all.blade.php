@extends('dashboards.organizers.layouts.organizers-dash-layout')
@section('title', 'NMTC - Participants')

@section('content')
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
                            class="form-control form-control-solid w-250px ps-14 search-user" placeholder="Search user" />
                    </div>
                </div>
                <!--end::Wrapper-->
                <div>
                    <!--begin::Filter-->
                  
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
                            <div class="mb-10">
                                <label class="form-label fs-6 fw-semibold">Payment :</label>
                                <label class="form-check form-check-sm form-check-custom form-check-solid mb-2">
                                    <input class="form-check-input" type="checkbox" value="Paid" id="pay_select" />
                                    <span class="form-check-label">Paid</span>
                                </label>
                                <label class="form-check form-check-sm form-check-custom form-check-solid ">
                                    <input class="form-check-input" type="checkbox" value="unpaiid" id="pay_select_2" />
                                    <span class="form-check-label">Unpaid</span>
                                </label>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <label class="form-label fs-6 fw-semibold">Type :</label>
                                <label class="form-check form-check-sm form-check-custom form-check-solid mb-2">
                                    <input class="form-check-input" type="checkbox" value="Visitor" id="type_select" />
                                    <span class="form-check-label">Visitor</span>
                                </label>
                                <label class="form-check form-check-sm form-check-custom form-check-solid ">
                                    <input class="form-check-input" type="checkbox" value="Challenger" id="type_select_2" />
                                    <span class="form-check-label">Challenger</span>
                                </label>
                            </div>
                            <div class="mb-10">
                                <label class="form-label fs-6 fw-semibold">Transport :</label>
                                <label class="form-check form-check-sm form-check-custom form-check-solid mb-2">
                                    <input class="form-check-input" type="checkbox" value="Bus" id="tran_select" />
                                    <span class="form-check-label">Bus</span>
                                </label>
                                <label class="form-check form-check-sm form-check-custom form-check-solid ">
                                    <input class="form-check-input" type="checkbox" value="Own" id="tran_select_2" />
                                    <span class="form-check-label">Own</span>
                                </label>
                            </div>
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
             <div class="w-50">
             </div>

                <!--begin::Export dropdown-->
              
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
                                        <th class="min-w-100px">User</th>
                                        <th class="min-w-60px">Phone</th>
                                        <th class="min-w-60px">Transport</th>
                                        <th class="min-w-60px">Type</th>
                                     
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
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="{{ $user->id }} " />
                                                </div>
                                            </td>
                                            <td class="text-danger fs-1">#{{ $user->id }}</td>

                                            <td class="d-flex align-items-center">


                                                <div class="d-flex flex-column">
                                                    <a href="#" 
                                                        class="text-gray-800 text-hover-primary mb-1 fs-1">{{ $user->name }}</a>
                                                  
                                                </div>

                                            </td>
                                            <td class="text-gray-800">{{ $user->phone }}</td>

                                            <td class="text-gray-800">Bus</td>

                                            <td class="text-gray-800">
                                                @if ($user->type == '1')
                                                    Visitor
                                                @else
                                                    Challenger
                                                @endif
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

    <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog" style="max-width: 900px !important;
            width: 900px;">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Edit</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-1"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <!--begin::Form-->
                    <form id="kt_account_profile_details_form" class="form" method="POST"
                        action="{{ route('adminupdateParticipantInfo') }}">
                        @csrf
                        <input type="hidden" name="id" id="ed_id">
                        <!--begin::Card body-->
                        <div class="card-body p-9">

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Full Name</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="col-lg-12 fv-row">
                                            <input type="text" name="name"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                id="edit_name" placeholder="First name" value="" />
                                        </div>
                                        <!--end::Col-->

                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                    <span>Contact Phone</span>

                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="tel" name="phone"
                                        class="form-control form-control-lg form-control-solid" placeholder="Phone number"
                                        value="" id="edit_phone" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">Email</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="email" name="email"
                                        class="form-control form-control-lg form-control-solid" id="edit_email"
                                        placeholder="Email" value="" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                    <span>Type</span>

                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <select name="type" aria-label="Select type" id="edit_type"
                                        data-placeholder="Type" data-hide-search="true"
                                        class="form-select form-select-solid form-select-lg fw-semibold">

                                        <option value="visitor">Visitor</option>
                                        <option value="challenger">Challenger</option>

                                    </select>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                    <span>Transport</span>

                                </label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <select name="transport" data-placeholder="--" data-hide-search="true"
                                                class="form-select form-select-solid form-select-lg fw-semibold"
                                                id="ed_tran">
                                                <option value="">--</option>
                                                <option value="2">Bus</option>
                                                <option value="1">Own</option>

                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <select name="country" data-control="select2" data-placeholder="--"
                                                data-hide-search="true"
                                                class="form-select form-select-solid form-select-lg fw-semibold">
                                                <option value="">--</option>
                                                <option value="visitor">Sfax 1</option>
                                                <option value="challenger">Sfax 2</option>
                                                <option value="challenger">Sfax 3</option>

                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->


                        </div>
                        <!--end::Card body-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>


            </div>
        </div>
    </div>
    <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
        <!--begin::Container-->
        <div
            class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
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
</div>
<div class="modal fade" tabindex="-1" id="kt_modal_5">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Confirm Payment</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-1"></span>
                </div>
                <!--end::Close-->
            </div>
            <form method="POST" id="pay_form"
            action="{{ route('admin.pay_userr') }}">
            @csrf
            <div class="modal-body">
                <div class="row mb-5">
                    <div> 
                        <p> Participant Name : <span class="fw-bold h4 text-light-danger bg-danger px-3" style="color:white !important;" id="part_n"></span></p>
                    </div>

                </div>
                
                <input type="hidden" name="userID" id="part_id">
                <div class="input-group input-group-solid flex-nowrap">
                    <span class="input-group-text"><i class="bi bi-cash-coin fs-4"></i></span>
                    <div class="overflow-hidden flex-grow-1">
                        <select name="amount" class="form-select form-select-solid rounded-0 border-start border-end" data-control="select2" data-allow-clear="true" data-hide-search="true" data-placeholder="Select an option">
                            <option></option>
                            <option value="190">190</option>
                            <option value="150">150</option>
                            <option value="187">187</option>
							<option value="260">260</option>
							<option value="70">70</option>
                        </select>
                    </div>
                    <span class="input-group-text">TND</span>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" id="kt_docs_sweetalert_html">Confirm</button>
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
                        console.log(response);
                        // set values

                        document.getElementById('part_img').src = response.picture;
                        document.getElementById('part_name').innerHTML = response.name;
                        document.getElementById('part_email').innerHTML = response.email;
                        document.getElementById('part_phone').innerHTML = response.phone;
                        document.getElementById('part_id').innerHTML = "#" + response.id;
                        document.getElementById('part_created').innerHTML = response.created_at;
                        document.getElementById('part_city').innerHTML = response.city;
                        document.getElementById('part_age').innerHTML = response.age;
                        document.getElementById('part_edu').innerHTML = response.levelOfstudy;
                        document.getElementById('part_university').innerHTML = response.university;
                        document.getElementById('part_gender').innerHTML = response.gender;
                        if (response.payment == "1") {
                            document.getElementById('part_payment').innerHTML =
                                "<span class='fw-bold mt-6 ms-6'><span class='badge badge-success'>Paid</span></span>";
                        } else if ((response.payment == "0")) {
                            document.getElementById('part_payment').innerHTML =
                                "<span class='fw-bold mt-6 ms-6'><span class='badge badge-danger'>Unpaid</span></span>";
                        }
                        if (response.transport == "1") {
                            document.getElementById('part_transport').innerHTML =
                                "<span class='fw-bold mt-6 ms-6'><span class='badge badge-primary'>Bus</span></span>";
                        } else if ((response.transport == "2")) {
                            document.getElementById('part_transport').innerHTML =
                                "<span class='fw-bold mt-6 ms-6'><span class='badge badge-primary'>Own</span></span>";
                        }
                        if (response.type == "1") {
                            document.getElementById('part_type').innerHTML =
                                "Visitor";
                        } else {
                            document.getElementById('part_type').innerHTML =
                                "Challenger";
                        }
                        document.getElementById('edit_btn').addEventListener("click", getEditInfo(response.id));

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
                        console.log(response);
                        // set values

                        document.getElementById('ed_id').value = response.id;
                        document.getElementById('edit_name').value = response.name;
                        document.getElementById('edit_email').value = response.email;
                        document.getElementById('edit_phone').value = response.phone;


                        if (response.transport == "1") {
                            document.getElementById('ed_tran').options[1].selected = true;

                        } else if ((response.transport == "2")) {
                            document.getElementById('ed_tran').options[2].selected = true;
                        }
                        if (response.type == "1") {
                            document.getElementById('edit_type').options[0].selected = true;
                        } else if (response.type == "2") {
                            document.getElementById('edit_type').options[1].selected = true;
                        }

                        // and so on
                    }
                }
            });
        }
    </script>
<script>
       


    document.querySelector('#pay_form').addEventListener('submit', function(e) {
var form = this;

e.preventDefault(); // <--- prevent form from submitting

swal.fire({
    html: `A your sure that you want to confirm this payment ?`,
    icon: "question",
    buttonsStyling: false,
    showCancelButton: true,
    confirmButtonText: "Yes",
    cancelButtonText: 'No',
    customClass: {
        confirmButton: "btn btn-success",
        cancelButton: 'btn btn-danger'
    }
}).then(function(isConfirm) {
  if (isConfirm) {
    swal.fire({
      title: 'Success!',
      text: 'User set a paid',
      icon: 'success'
      
    }).then(function() {
        setTimeout(form.submit(), 3000);
        
    });
  } else {
    swal.fire("Cancelled", "You canceled the payment", "error");
  }
})
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

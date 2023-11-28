"use strict";

function checkbox(name){
    var checkboxes = $('input[type="checkbox"][name="'+ name + '"]');

    // Add a change event listener to each checkbox.
    if(checkboxes)
    checkboxes.on('change', function() {
        // Uncheck all of the other checkboxes with the same name.
        checkboxes.not(this).prop('checked', false);
    });
}
if(document.getElementById('pay_select'))
    checkbox('pay_select');

if(document.getElementById('pay_bus_select'))
checkbox('pay_bus_select');

if(document.getElementById('type_select'))
checkbox('type_select');

if(document.getElementById('tran_select'))
checkbox('tran_select');

if(document.getElementById('bank_select'))
checkbox('bank_select');

if(document.getElementById('gender_select'))
checkbox('gender_select');

if(document.getElementById('capacity_select'))
checkbox('capacity_select');

if(document.getElementById('roommate_select'))
checkbox('roommate_select');

if(document.getElementById('teammate_select'))
checkbox('teammate_select');

var col = 9;
var order = "desc"
if(document.getElementById('roommate_select') || document.getElementById('teammate_select')){
    col = 1;
    order = "asc"
}
if(document.getElementById('bank_select'))
    col = 10;

// Class definition
var KTDatatablesExample = function () {
    // Shared variables
    var table;
    var datatable;

    // Private functions
    var initDatatable = function () {
        // Set date data order
        const tableRows = table.querySelectorAll('tbody tr');

        tableRows.forEach(row => {
            const dateRow = row.querySelectorAll('td');
         
        });

        // Init datatable --- more info on datatables: https://datatables.net/manual/
        datatable = $(table).DataTable({
            "info": false,
            'order': [[col, order]],
            'pageLength': 10,
        });
        
    }

    // Hook export buttons
    var exportButtons = () => {
        const documentTitle = 'NMTC Participants';
        var buttons = new $.fn.dataTable.Buttons(table, {
            buttons: [
                {
                    extend: 'copyHtml5',
                    title: documentTitle
                },
                {
                    extend: 'excelHtml5',
                    title: documentTitle
                },
                {
                    extend: 'csvHtml5',
                    title: documentTitle
                },
                {
                    extend: 'pdfHtml5',
                    title: documentTitle
                }
            ]
        }).container().appendTo($('#kt_datatable_example_buttons'));

        // Hook dropdown menu click event to datatable export buttons
        const exportButtons = document.querySelectorAll('#kt_datatable_example_export_menu [data-kt-export]');
        exportButtons.forEach(exportButton => {
            exportButton.addEventListener('click', e => {
                e.preventDefault();

                // Get clicked export value
                const exportValue = e.target.getAttribute('data-kt-export');
                const target = document.querySelector('.dt-buttons .buttons-' + exportValue);

                // Trigger click event on hidden datatable export buttons
                target.click();
            });
        });
    }
    
    
    // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
    var handleSearchDatatable = () => {
        const filterSearch = document.querySelector('[data-kt-filter="search"]');
        filterSearch.addEventListener('keyup', function (e) {
            datatable.search(e.target.value).draw();
        });
        const filterSearch1 = document.querySelector('#cities');
        if(filterSearch1)
        filterSearch1.addEventListener('change', function (e) {
            const selectedOption = this.value;
            if (selectedOption !== '') {
                const filterValue = '^' + selectedOption;
                datatable.column(4).search(filterValue, { regex: true }).draw();
            } else {
                // If no option is selected (or an empty option), clear the filter
                datatable.column(4).search('').draw();
            }
        });
        const filterSearch2 = document.querySelector('#pay_select');
        if(filterSearch2)
        filterSearch2.addEventListener('click', function (e) {
            const filterValue = this.checked ? '^' + e.target.value : '';
            datatable.column(7).search(filterValue, {regex: true}).draw();
        });
        const filterSearch3 = document.querySelector('#pay_select_2');
        if(filterSearch3)
        filterSearch3.addEventListener('click', function (e) {
            const filterValue = this.checked ? e.target.value : '';
            datatable.column(7).search(filterValue).draw();
        });
        const filterSearch4 = document.querySelector('#pay_select_3');
        if(filterSearch4)
        filterSearch4.addEventListener('click', function (e) {
            const filterValue = this.checked ? e.target.value : '';
            datatable.column(7).search(filterValue).draw();
        });
        const filterSearch5 = document.querySelector('#pay_bus_select');
        if(filterSearch5)
        filterSearch5.addEventListener('click', function (e) {
            const filterValue = this.checked ? '^' + e.target.value : '';
            datatable.column(8).search(filterValue, {regex: true}).draw();
        });
        const filterSearch6 = document.querySelector('#pay_bus_select_2');
        if(filterSearch6)
        filterSearch6.addEventListener('click', function (e) {
            const filterValue = this.checked ? e.target.value : '';
            datatable.column(8).search(filterValue).draw();
        });
        const filterSearch7 = document.querySelector('#pay_bus_select_3');
        if(filterSearch7)
        filterSearch7.addEventListener('click', function (e) {
            const filterValue = this.checked ? e.target.value : '';
            datatable.column(8).search(filterValue).draw();
        });
        const filterSearch8 = document.querySelector('#bank_select');
        if(filterSearch8)
        filterSearch8.addEventListener('click', function (e) {
            const filterValue = this.checked ? '^' + e.target.value : '';
            datatable.column(10).search(filterValue, {regex: true}).draw();
        });
        
        const filterSearch9 = document.querySelector('#bank_select_2');
        if(filterSearch9)
        filterSearch9.addEventListener('click', function (e) {
            const filterValue = this.checked ? e.target.value : '';
            datatable.column(10).search(filterValue).draw();
        });
        const type1 = document.querySelector('#type_select');
        if(type1)
            type1.addEventListener('click', function (e) {
                if (this.checked) {
                    datatable.column(6).search(e.target.value).draw();
                } else {
                    datatable.column(6).search('').draw();
                }
            });
        const type2 = document.querySelector('#type_select_2');
        if(type2)
            type2.addEventListener('click', function (e) {
                if (this.checked) {
                    datatable.column(6).search(e.target.value).draw();
                } else {
                    datatable.column(6).search('').draw();
                }
            });
        const type3 = document.querySelector('#type_select_3');
        if(type3)
            type3.addEventListener('click', function (e) {
                if (this.checked) {
                    datatable.column(6).search(e.target.value).draw();
                } else {
                    datatable.column(6).search('').draw();
                }
            });
        const type4 = document.querySelector('#type_select_4');
        if(type4)
            type4.addEventListener('click', function (e) {
                if (this.checked) {
                    datatable.column(6).search(e.target.value).draw();
                } else {
                    datatable.column(6).search('').draw();
                }
            });
        const type5 = document.querySelector('#type_select_5');
        if(type5)
            type5.addEventListener('click', function (e) {
                if (this.checked) {
                    datatable.column(6).search(e.target.value).draw();
                } else {
                    datatable.column(6).search('').draw();
                }
            });
        const type6 = document.querySelector('#type_select_6');
        if(type6)
            type6.addEventListener('click', function (e) {
                if (this.checked) {
                    datatable.column(6).search(e.target.value).draw();
                } else {
                    datatable.column(6).search('').draw();
                }
            });
        const transp2 = document.querySelector('#tran_select');
        if(transp2)
        transp2.addEventListener('click', function (e) {
            if (this.checked) {
                datatable.column(5).search(e.target.value).draw();
              } else {
                datatable.column(5).search('').draw();
              }
        });
        const transp3 = document.querySelector('#tran_select_2');
        if(transp3)
        transp3.addEventListener('click', function (e) {
            if (this.checked) {
                datatable.column(5).search(e.target.value).draw();
              } else {
                datatable.column(5).search('').draw();
              }
        });
        const gender_male = document.querySelector('#gender_select');
        if(gender_male)
        gender_male.addEventListener('click', function (e) {
            const filterValue = this.checked ? '^' + e.target.value : '';
            datatable.column(2).search(filterValue, {regex: true}).draw();
        });
        const gender_female = document.querySelector('#gender_select_2');
        if(gender_female)
        gender_female.addEventListener('click', function (e) {
            const filterValue = this.checked ? '^' + e.target.value : '';
            datatable.column(2).search(filterValue, {regex: true}).draw();
        });
        const gender_mix1 = document.querySelector('#gender_select_3');
        if(gender_mix1)
        gender_mix1.addEventListener('click', function (e) {
            const filterValue = this.checked ? e.target.value : '';
            datatable.column(2).search(filterValue).draw();
        });
        const gender_mix2 = document.querySelector('#gender_select_4');
        if(gender_mix2)
        gender_mix2.addEventListener('click', function (e) {
            const filterValue = this.checked ? e.target.value : '';
            datatable.column(2).search(filterValue).draw();
        });
        const capacity_1 = document.querySelector('#capacity_select');
        if(capacity_1)
        capacity_1.addEventListener('click', function (e) {
            const filterValue = this.checked ? e.target.value : '';
            datatable.column(4).search(filterValue).draw();
        });
        const capacity_2 = document.querySelector('#capacity_select_2');
        if(capacity_2)
        capacity_2.addEventListener('click', function (e) {
            const filterValue = this.checked ? e.target.value : '';
            datatable.column(4).search(filterValue).draw();
        });
        const capacity_3 = document.querySelector('#capacity_select_3');
        if(capacity_3)
        capacity_3.addEventListener('click', function (e) {
            const filterValue = this.checked ? e.target.value : '';
            datatable.column(4).search(filterValue).draw();
        });
        const capacity_4 = document.querySelector('#capacity_select_4');
        if(capacity_4)
        capacity_4.addEventListener('click', function (e) {
            const filterValue = this.checked ? e.target.value : '';
            datatable.column(4).search(filterValue).draw();
        });
        const room_paid = document.querySelector('#pay_select');
        if(room_paid)
        room_paid.addEventListener('click', function (e) {
            const filterValue = this.checked ? '^' + e.target.value : '';
            datatable.column(7).search(filterValue, {regex: true}).draw();
        });
        const room_unpaid = document.querySelector('#pay_select_2');
        if(room_unpaid)
        room_unpaid.addEventListener('click', function (e) {
            const filterValue = this.checked ? e.target.value : '';
            datatable.column(7).search(filterValue).draw();
        });
        const room_expired = document.querySelector('#pay_select_3');
        if(room_expired)
        room_expired.addEventListener('click', function (e) {
            const filterValue = this.checked ? e.target.value : '';
            datatable.column(7).search(filterValue).draw();
        });
        const roommate_1 = document.querySelector('#roommate_select');
        if(roommate_1)
        roommate_1.addEventListener('click', function (e) {
            const filterValue = this.checked ? e.target.value : '';
            datatable.column(3).search(filterValue).draw();
        });
        const roommate_2 = document.querySelector('#roommate_select_2');
        if(roommate_2)
        roommate_2.addEventListener('click', function (e) {
            const filterValue = this.checked ? e.target.value : '';
            datatable.column(3).search(filterValue).draw();
        });
        const roommate_3 = document.querySelector('#roommate_select_3');
        if(roommate_3)
        roommate_3.addEventListener('click', function (e) {
            const filterValue = this.checked ? e.target.value : '';
            datatable.column(3).search(filterValue).draw();
        });
        const roommate_4 = document.querySelector('#roommate_select_4');
        if(roommate_4)
        roommate_4.addEventListener('click', function (e) {
            const filterValue = this.checked ? e.target.value : '';
            datatable.column(3).search(filterValue).draw();
        });
        const teammate_1 = document.querySelector('#teammate_select');
        if(teammate_1)
        teammate_1.addEventListener('click', function (e) {
            const filterValue = this.checked ? e.target.value : '';
            datatable.column(3).search(filterValue).draw();
        });
        const teammate_2 = document.querySelector('#teammate_select_2');
        if(teammate_2)
        teammate_2.addEventListener('click', function (e) {
            const filterValue = this.checked ? e.target.value : '';
            datatable.column(3).search(filterValue).draw();
        });
        const teammate_3 = document.querySelector('#teammate_select_3');
        if(teammate_3)
        teammate_3.addEventListener('click', function (e) {
            const filterValue = this.checked ? e.target.value : '';
            datatable.column(3).search(filterValue).draw();
        });
        const teammate_4 = document.querySelector('#teammate_select_4');
        if(teammate_4)
        teammate_4.addEventListener('click', function (e) {
            const filterValue = this.checked ? e.target.value : '';
            datatable.column(3).search(filterValue).draw();
        });
    }

    // Public methods
    return {
        init: function () {
            table = document.querySelector('#kt_datatable_example');

            if ( !table ) {
                return;
            }

            initDatatable();
            exportButtons();
            handleSearchDatatable();
            
            
        }
    };

    
}();

// On document ready
KTUtil.onDOMContentLoaded(function () {
    KTDatatablesExample.init();
});
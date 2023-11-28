var createT = document.getElementById('createTeam');
var joinT = document.getElementById('joinTeam');

if (createT) {
    createT.addEventListener('click', function () {
        $('#kt_tab_pane_6').removeClass("active");
        $('#kt_tab_pane_7').addClass("active");
    });
}
if (joinT) {
    joinT.addEventListener('click', function () {
        $('#kt_tab_pane_6').removeClass("active");
        $('#kt_tab_pane_8').addClass("active");
    });
}


var button2 = document.querySelector('#kt_share_earn_link_copy_button_2');
var input2 = document.querySelector('#kt_share_earn_link_input_2');
var clipboard2 = new ClipboardJS(button2);

clipboard2.on('success', function(e) {
    var buttonCaption2 = button2.innerHTML;
    //Add bgcolor
    input2.classList.add('bg-success');
    input2.classList.add('text-inverse-success');

    button2.innerHTML = "<svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z' fill='currentColor'/></svg>";

    setTimeout(function() {
        button2.innerHTML = buttonCaption2;

        // Remove bgcolor
        input2.classList.remove('bg-success');
        input2.classList.remove('text-inverse-success');
    }, 3000);  // 3seconds

    e.clearSelection();
        });
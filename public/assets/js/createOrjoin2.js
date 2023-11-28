var pack = document.getElementById("onlyPack");
var bus = document.getElementById("onlyBus");
var packWithBus = document.getElementById("packWithBus");

var bank = document.getElementById("bankT");
var hand = document.getElementById("HandToHand");
function redirect(variable){
    $.ajax({
        url: '/organizer/store-variable/'+ variable, // Replace with the appropriate server endpoint
        method: 'get',
        data: {
            'jsVariable': variable
        },
        success: function(response) {
            if(response.jsVariable == 1 && hand )
            hand.addEventListener("click", function () {
                $("#kt_tab_pane_103").removeClass("active");
                $("#kt_tab_pane_111").removeClass("active");
                $("#kt_tab_pane_1111").removeClass("active");
                $("#kt_tab_pane_11").addClass("active");
            });
        else if (response.jsVariable == 2 && hand )
            hand.addEventListener("click", function () {
                $("#kt_tab_pane_103").removeClass("active");
                $("#kt_tab_pane_11").removeClass("active");
                $("#kt_tab_pane_111").removeClass("active");
                $("#kt_tab_pane_1111").addClass("active");
            });
        else if (response.jsVariable == 3 && hand )
        hand.addEventListener("click", function () {
            $("#kt_tab_pane_103").removeClass("active");
            $("#kt_tab_pane_1111").removeClass("active");
            $("#kt_tab_pane_11").removeClass("active");
            $("#kt_tab_pane_111").addClass("active");
        });
        if(response.jsVariable == 1 && bank ){
            bank.addEventListener("click", function () {
                $("#kt_tab_pane_103").removeClass("active");
                $("#kt_tab_pane_12").addClass("active");
                $("#drag-drop-area").removeClass("d-none");
                $("#drag-drop-area2").addClass("d-none");
                $("#drag-drop-area-div").removeClass("d-none");
                $("#drag-drop-area2-div").addClass("d-none");
                $(".drag-drop-area21").removeClass("d-none");
                $("#drag-drop-area22").removeClass("d-none");
                $("#drag-drop-area11").addClass("d-none");
                $(".drag-drop-area12").addClass("d-none");
            });
        }
        if(response.jsVariable == 3 && bank ){
            bank.addEventListener("click", function () {
                $("#kt_tab_pane_103").removeClass("active");
                $("#kt_tab_pane_12").addClass("active");
                $("#drag-drop-area").addClass("d-none");
                $("#drag-drop-area2").removeClass("d-none");
                $("#drag-drop-area-div").addClass("d-none");
                $("#drag-drop-area2-div").removeClass("d-none");
                $(".drag-drop-area21").addClass("d-none");
                $("#drag-drop-area22").addClass("d-none");
                $("#drag-drop-area11").removeClass("d-none");
                $(".drag-drop-area12").removeClass("d-none");
                
            });
        }
        },
        error: function(error) {
            console.log("2");
        }
    });
}
if(pack)
    pack.addEventListener("click", function () {
       
         // Replace with your actual variable value
       
            redirect(1);
    // Send the variable to the Laravel route
            $("#kt_tab_pane_10").removeClass("active");
            $("#kt_tab_pane_103").addClass("active");     
});
    if(bus)
    bus.addEventListener("click", function () {
         // Replace with your actual variable value
         var bus_reserved = document.getElementById('transport').getAttribute('data-variable');
        if(bus_reserved === "1"){
        redirect(2);
        $("#kt_tab_pane_10").removeClass("active");
        $("#kt_tab_pane_103").addClass("active");
         // Replace with your actual variable value
        }else {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toastr-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
              };
              
              toastr.error("Reserve your Bus First !");
        }
    });

    if(packWithBus)
    packWithBus.addEventListener("click", function () {
        var bus_reserved = document.getElementById('transport').getAttribute('data-variable');
        if(bus_reserved === "1"){
        redirect(3);
        $("#kt_tab_pane_10").removeClass("active");
        $("#kt_tab_pane_103").addClass("active");
    }else {
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toastr-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
          };
          
          toastr.error("Reserve your Bus First !");
    }
    });


if (bank) {
    bank.addEventListener("click", function () {
        $("#kt_tab_pane_103").removeClass("active");
        $("#kt_tab_pane_12").addClass("active");
    });
}



var create = document.getElementById("createRoom");
var join = document.getElementById("joinRoom");

if (create) {
    create.addEventListener("click", function () {
        $("#kt_tab_pane_3").removeClass("active");
        $("#kt_tab_pane_4").addClass("active");
    });
}
if (join) {
    join.addEventListener("click", function () {
        
        $("#kt_tab_pane_3").removeClass("active");
        $("#kt_tab_pane_5").addClass("active");
    });
}
function clearOpen(id) {
    $("#kt_tab_pane_7").removeClass("active");
    $("#kt_tab_pane_8").removeClass("active");
    $("#kt_tab_pane_5").removeClass("active");
    $("#kt_tab_pane_4").removeClass("active");
    $("#kt_tab_pane_11").removeClass("active");
    $("#kt_tab_pane_12").removeClass("active");
    $("#kt_tab_pane_103").removeClass("active");
    $("#kt_tab_pane_111").removeClass("active");
    $("#kt_tab_pane_1111").removeClass("active");
    $("#drag-drop-area2").removeClass("active");
    $("#drag-drop-area2-div").removeClass("active");
    $(id).addClass("active");
}
const options = document.querySelectorAll(
    '[data-kt-docs-advanced-forms="interactive"]'
);
const inputEl = document.querySelector('[name="roomSize"]');
options.forEach((option) => {
    option.addEventListener("click", (e) => {
        e.preventDefault();

        inputEl.value = e.target.innerText;
    });
});

var button = document.querySelector("#kt_share_earn_link_copy_button");
var input = document.querySelector("#kt_share_earn_link_input");
var clipboard = new ClipboardJS(button);

clipboard.on("success", function (e) {
    var buttonCaption = button.innerHTML;
    //Add bgcolor
    input.classList.add("bg-success");
    input.classList.add("text-inverse-success");

    button.innerHTML =
        "<svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'><path d='M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z' fill='currentColor'/></svg>";

    setTimeout(function () {
        button.innerHTML = buttonCaption;

        // Remove bgcolor
        input.classList.remove("bg-success");
        input.classList.remove("text-inverse-success");
    }, 3000); // 3seconds

    e.clearSelection();
});


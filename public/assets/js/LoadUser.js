
var userdetail = document.getElementById("ViewUser");

function ViewUser() {
    if ($('#UsersList').is('.col-md-8')) {
        $('#UsersList').removeClass("col-md-8");
        $('#UsersList').addClass("col-md-12");
        $('#ViewUser').empty();
    }
    else {
        $('#UsersList').removeClass("col-md-12");
        $('#UsersList').addClass("col-md-8");
        $.get("../assets/user.php").done(function (data) {
            userdetail.innerHTML = data;
        });

    }

}
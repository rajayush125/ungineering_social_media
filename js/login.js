$(document).ready(function () {
    $('#registration').submit(function() {
        var url = "registration_submit.php";
        var data = $('#registration').serialize();
        $.ajax({
            url: url,
            type: "POST",
            data: data,
            success: registration_success,
            error: on_error
        });
        return false;
    });

    $('#login').submit(function() {
        var url = "login_submit.php";
        var data = $('#login').serialize();
        $.ajax({
            url: url,
            type: "POST",
            data: data,
            success: login_success,
            error: on_error
        });
        return false;
    });
});

var registration_success = function (response) {
    response = JSON.parse(response);

    if (response.success) {
        alert(response.message);
        window.location.href = "login.php";
    } else {
        alert(response.message);
    }
};

var login_success = function (response) {
    response = JSON.parse(response);

    if (response.success) {
        alert(response.message);
        window.location.href = "homepage.php";
    } else {
        alert(response.message);
    }
};

var on_error = function () {
    alert("something went wrong");
};

$(document).ready(function (e) {
    $("#form").submit(function (e) {
        e.preventDefault();
        var ajaxRequest;
        var form_data = $(this).serialize();
        $.ajax({
            type: "POST",
            cache: false,
            url: "app.php",
            data: form_data,
            success: function (data) {
                // switch (data.key) {
                //     case "password":
                //         $("#password").html(data.value);
                //         break;
                //     case "login":
                //         $("#login").html(data.value);
                //         break;
                //     case "name":
                //         $("#name").html(data.value);
                //         break;
                //     case "verpass":
                //         $("#verpass").html(data.value);
                //         break;
                //     case "success":
                //         $("#message").html(data.value);
                //         break;
                // }
                console.log($.parseJSON(data));
            }
        });
    });
});
$(document).ready(function (e) {
    $("#form").submit(function (e) {
        e.preventDefault();
        var ajaxRequest;
        var form_data = $(this).serialize();
        $.ajax({
            type: "POST",
            cache: false,
            url: "login.php",
            data: form_data,
            success: function (data) {
                let temp = $.parseJSON(data);
                switch (temp.code) {
                    case "ok":
                        $(location).attr('href',"/index.php");
                        break;
                    case "error":
                        $("#message").text(temp.status);
                }
                console.log(temp.code);
            }
        });
    });
});
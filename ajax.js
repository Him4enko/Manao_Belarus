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
                let temp = $.parseJSON(data);
                switch (temp.code) {
                    case "password":
                        $("#password").text(temp.password);
                        break;
                    case "login":
                        $("#login").text(temp.login);
                        break;
                    case "name":
                        $("#name").text(temp.name);
                        break;
                    case "pass":
                        $("#message").text(temp.pass);
                        break;
                    case "user":
                        $("#message").text(temp.error);
                        break;
                }
                console.log(temp.code);
            }
        });
    });
});
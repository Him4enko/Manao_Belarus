$(document).ready(function (e) {
    $("#form").submit(function (e) {
        e.preventDefault();
        var ajaxRequest;
        var form_data = $(this).serialize();
        $.ajax({
            type: "POST",
            cache: false,
            url: "./destroy.php",
            data: form_data,
            success: function (data) {
                $(location).attr('href',"/index.php");
            }
        });
    });
});
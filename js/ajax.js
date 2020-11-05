function sendAjaxForm( ajax_form, url) {
    $.ajax({
        url: url,
        type: "GET",
        dataType: "html",
        data: $("#"+ajax_form).serialize(),
        success: function (response) {
            alert(response);
        },
        error: function (response) {
            alert("error");
        }
    });
}
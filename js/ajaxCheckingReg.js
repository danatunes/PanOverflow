
function checkInput(id,error_value,button) {
$("#"+id).click(function () {
    $('#'+error_value).text("Checking...");
    $("#"+error_value).css("color", "yellow");
})
$("#"+id).focusout(function () {
    if ($(this).val() == '') {
        $(this).css("border-color", "#cd2d00");
        $('#'+button).attr('disabled', true);
        $("#"+error_value).text("* You have to enter your Password!");
    } else {
        $(this).css("border-color", "#2eb82e");
        $('#'+button).attr('disabled', false);
        $("#"+error_value).text("");
    }
});
}
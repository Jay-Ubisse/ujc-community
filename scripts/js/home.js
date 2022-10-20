$(document).ready(function () {
    let logoutState = $("#logout").hide();
    $("#logout-icon").click(function() {
        if (logoutState.is(':hidden')) {
            $("#logout").show();
            $answer.slideDown(500);
        } else {
            $("#logout").hide();
        }
    });
});
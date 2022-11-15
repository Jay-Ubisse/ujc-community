$(document).ready(function () {
    let logoutState = $("#logout");
    logoutState.hide();
    $("#logoutSection").click(function() {
        if (logoutState.is(':hidden')) {
            $("#logout").slideDown(200);
        } else {
            $("#logout").slideUp(200);
        }
    });
});
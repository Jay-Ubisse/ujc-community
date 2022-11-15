$(document).ready(function () {
    let logoutState = $("#logout").hide();
    $("#logout-icon").click(function() {
        if (logoutState.is(':hidden')) {
            $("#logout").slideDown(500);
        } else {
            $("#logout").slideDown(500);
        }
    });
});
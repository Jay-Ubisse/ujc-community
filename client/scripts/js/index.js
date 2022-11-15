$(document).ready(function () {
    $("#paragraph").hide();
    $('#header').animate(
            {
            left: "5px"
        },
        1000,
        'easeOutBounce',
        function() {
            $("#paragraph").slideDown(800);
        }
    ); // end animate
}); // end ready
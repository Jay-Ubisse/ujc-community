$(document).ready(function () {
    $("#a1").hide();
    $("#a2").hide();
    $("#a3").hide();
    $("#q1up").hide();
    $("#q2up").hide();
    $("#q3up").hide();

    $("#q1").click(function () {
        let $answer = $("#a1");
        if ($answer.is(':hidden')) {
            $("#q1down").hide();
            $("#q1up").show();
            $answer.slideDown(500);
        } else {
            $("#q1up").hide();
            $("#q1down").show();
            $answer.slideUp(500);
        }
    });

    $("#q2").click(function () {
        let $answer = $("#a2");
        if ($answer.is(':hidden')) {
            $("#q2down").hide();
            $("#q2up").show();
            $answer.slideDown(500);
        } else {
            $("#q2up").hide();
            $("#q2down").show();
            $answer.slideUp(500);
        }
    });

    $("#q3").click(function () {
        let $answer = $("#a3");
        if ($answer.is(':hidden')) {
            $("#q3down").hide();
            $("#q3up").show();
            $answer.slideDown(500);
        } else {
            $("#q3up").hide();
            $("#q3down").show();
            $answer.slideUp(500);
        }
    });
});
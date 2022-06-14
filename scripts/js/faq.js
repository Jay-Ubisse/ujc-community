$(document).ready(function () {
    $("#a1").hide();
    $("#a2").hide();
    $("#a3").hide();

    $("#q1").click(function () {
        let $answer = $("#a1");
        if ($answer.is(':hidden')) {
            $answer.slideDown(500);
        } else {
            $answer.slideUp(500);
        }
    });

    $("#q2").click(function () {
        let $answer = $("#a2");
        if ($answer.is(':hidden')) {
            $answer.slideDown(500);
        } else {
            $answer.slideUp(500);
        }
    });

    $("#q3").click(function () {
        let $answer = $("#a3");
        if ($answer.is(':hidden')) {
            $answer.slideDown(500);
        } else {
            $answer.slideUp(500);
        }
    });
});
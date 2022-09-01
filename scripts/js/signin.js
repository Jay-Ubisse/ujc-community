$(document).ready(function () {
    $("#signin").validate({
        rules: {
            code: {
                required: true,
                rangelength: [7,7],
                number: true
            },
            password: {
                required: true,
                rangelength: [8,15]
            }
        },
        messages: {
            code: {
                required: "Introduza o seu código de estudante",
                rangelength:"O código de estudante deve ter 7 dígitos",
                number: "O código de estudante deve contar apenas dígitos"

            },
            password: {
                required: "Introduza a palavra-passe",
                rangelength: "A palavra-passe deve ter de 8 à 15 caracteres"
            }
        }
    });
}); // end ready
$(document).ready(function () {
    $("#signup").validate({
        rules: {
            name: {
                required: true
            },
            code: {
                required: true,
                rangelength: [7,7],
                number: true
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                rangelength: [8,15]
            },
            confirmpassword: {
                equalTo: "#password"
            }
        },
        messages: {
            name: {
                required: "Introduza o seu nome"
            },
            code: {
                required: "Introduza o seu código de estudante",
                rangelength:"O código de estudante deve ter 7 dígitos",
                number: "O código de estudante deve contar apenas dígitos"

            },
            email: {
                required: "Introduza o seu email",
                email: "Email inválido"
            },
            password: {
                required: "Introduza a palavra-passe",
                rangelength: "A palavra-passe deve ter de 8 à 15 caracteres"
            },
            confirmpassword: {
                equalTo: "Introduza a mesma palavra-passe que a anterior"
            }
        }
    });
}); // end ready
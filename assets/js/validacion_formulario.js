x = $(document);
x.ready(iniciar);

function iniciar() {
    boton = $("#boton-enviar");
    boton.click(validar);
}

function validar() {

    $("#contactForm").validate({

        rules: {

            nom: {
                required: true,
                minlength: 3,
                maxlength: 15,
                solo_letras: true
            },

            email: {
                required: true,
                email: true
            },

            tel: {
                required: true
            },

            ciudad: {
                required: true,
            },

            mensaje: {
                required: true
            },

        },

        messages: {

            nom: {
                solo_letras: "Sólo letras",
            }

        },

        errorElement: "span"

    }); //Fin del validate

    //Validación para validar letras 
    $.validator.addMethod("solo_letras", function (value, element) {
        return this.optional(element) || /^[A-Za-z]+$/.test(value);
    });

}
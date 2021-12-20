let x;
x = $(document);
x.ready(inicializar);

function inicializar() {
    mostrar_datos = $("#centrar_res");
    boton = $("#b1");
    boton.click(validar);
    // mostrar_datos.show();
}

function validar() {

    $("#form-contactar").validate({

        rules: {

            nom: {
                required: true,
                minlength: 3,
                maxlength: 15,
                solo_letras: true
            },

            ape: {
                required: true,
                minlength: 3,
                maxlength: 15,
                solo_letras: true
            },

            sexo: {
                required: true
            },

            email: {
                required: true,
                email: true
            },

            ciudad: {
                required: true
            },

            provincia: {
                required: true
            },

            consulta: {
                required: true
            }

        },

        //Para comprobar y posicionar los mensajes de error
        errorPlacement: function (error, element) {
            // Mostrar en la consola del navegador los name que produzcan error
            console.log("Form error en: ", element.attr("name"));
            if (element.is(":radio")) {
                error.appendTo("#messageBox"); //Error en los radio buttons
            } else { // Error en los demás, después del label
                error.insertAfter(element);
            }
        },

        messages: {

            nom: {
                solo_letras: "Sólo letras"
            },

            ape: {
                solo_letras: "Sólo letras"
            }

        },

        highlight: function (element) { //Para que los mensajes de error no tapen el control del formulario

        },

        unhighlight: function (element) {
            $(element).parent().removeClass("error");
        }

    }); //Fin del validate

    //Validación para validar letras 
    $.validator.addMethod("solo_letras", function (value, element) {
        return this.optional(element) || /^[A-Za-z]+$/.test(value);
    });

}

// Para realizaar el test de QUnit
test("Prueba formulario de contacto", function () {
    ok(inicializar(), "Función inicio ¡¡¡correcta!!!");
    ok(validar(), "Archivo con funciones validar ¡¡¡correcta!!!");
});
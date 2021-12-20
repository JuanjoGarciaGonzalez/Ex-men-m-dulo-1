x = $(document);
x.ready(iniciar);

function iniciar() {
    flecha_arriba();
    // Select all elements with data-toggle="tooltips" in the document
    $('[data-toggle="tooltip"]').tooltip(); // Select all elements with data-toggle="tooltips" in the document
}

function flecha_arriba() {
    let btn;
    btn = $("#button");
    $(window).scroll(function () {
        if ($(window).scrollTop() > 300) {
            btn.addClass("show");
        } else {
            btn.removeClass("show");
        }
    });
    btn.on("click", function (e) {
        e.preventDefault();
        // ESTO HACE EL TRUCO DE SUBIR ARRIBA CUANDO SE PULSE EL BOTÓN
        $("html, body").animate({
            scrollTop: 0
        }, "300");
    });
}
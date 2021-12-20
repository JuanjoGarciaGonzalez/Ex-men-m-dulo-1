<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Services- Formulario procesado</title>
    <!-- CDN de Bootstrap 4 para el Tooltip -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../img/favicon/site.webmanifest">
    <!-- Estilos base de Bootstrap Studio -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Estilos de la pagina principal -->
    <link rel="stylesheet" href="../CSS_propios/estilos_propios.css">
    
    <style>
        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
            margin: 0;
            padding: 0;
        }

        #contact{
            height: 100vh;
            width: 100%;
        }

        a{
            border: none !important;
            font-size: 18px !important;
        }

        .text-muted{
            color: #ff9800 !important;
            font-weight: bold !important;
        }
    </style>
</head>
<body>

    <?php
    // Recoger y asignar todos los campos a variables
        $nombre = $_GET["nom"];
        $email = $_GET["email"];
        $telefono = $_GET["tel"];
        $ciudad = $_GET["ciudad"];
        $mensaje = $_GET["mensaje"];

    ?>

    <section id="contact" style="background-image:url('../img/23322-min.jpg'); background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-uppercase section-heading fuente-1" data-toggle="tooltip" data-placement="top" title="Página para mostrar los datos validados y procesados del formulario de contacto">Datos recibidos
                    </h2>
                    <h3 class="section-subheading text-muted" title="Datos validados con Validate y procesados con PHP">Datos validados con Validate y procesados con PHP</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                     <!-- Start form-->
                     <form id="contactForm" name="contactForm" novalidate="novalidate" method="GET"
                        action="assets/PHP/procesarformulario.php">
                        <div class="form-row">
                            <div class="col col-md-6">
                                <div class="form-group"><input class="form-control" type="text"name="nom" value="<?php echo $nombre; ?>" readonly=""
                                        ><small
                                        class="form-text text-danger flex-grow-1 help-block lead"></small></div>
                                <div class="form-group"><input class="form-control" type="email"
                                        name="email" value="<?php echo $email; ?>" readonly=""><small
                                        class="form-text text-danger help-block lead"></small></div>

                                <div class="form-group"><input class="form-control" type="tel" name="tel" value ="<?php echo $telefono; ?>" readonly=""><small
                                        class="form-text text-danger help-block lead"></small></div>
                                <div class="form-group">
                                <input class="form-control" type="tel" name="text" value ="<?php echo $ciudad; ?>" readonly=""><small
                                        class="form-text text-danger help-block lead"></small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"><textarea class="form-control" name="mensaje" readonly=""
                                        ><?php echo $mensaje; ?></textarea><small
                                        class="form-text text-danger help-block lead"></small></div>
                            </div>
                            <div class="col">
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div id="success"><a href="../../index.html" class="btn btn-primary btn-xl text-uppercase color-boton fuente-1">Volver</a></div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End form -->

            </div>
        </div>
    </section>
    <!-- FIN SECTION CONTACTO -->

    <!--CDN A LIBRERÍA DE JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- JS de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- JS de funciones propias -->
    <script src="../js/funciones_propias.js"></script>
</body>
</html>
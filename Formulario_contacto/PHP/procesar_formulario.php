<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de contacto recibidos - Juanjo</title>
    <!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="../Images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../Images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../Images/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
    <!-- Estilos CSS Formoid -->
	<link rel="stylesheet" href="../formulario_contacto_files/formoid1/formoid-default-orange.css" type="text/css" />
	<link type="text/javascript" src="../formulario_contacto_files/formoid1/formoid-default-orange.js">
    <style>
        body{
            background-color: #aaff7f;
        }
        #container{
            margin: 0 auto;
            text-align: center;
        }
        label {
            font-weight: bold;
            font-style: italic;
        }

        .no-negrita {
            font-weight: normal;
        }
        textarea { 
            resize:vertical;
        }
    </style>
</head>
<body>

        <div id="container">
            <h1>Datos de contacto recibidos</h1>

            <?php

                $nom = $_POST['nom'];
                $ape = $_POST['ape'];
                $sexo = $_POST['sexo'];
                $email = $_POST['email'];
                $ciudad = $_POST['ciudad'];
                $provincia = $_POST['provincia'];
                $consulta = $_POST['consulta'];

                // echo $nom . " " . $ape . " " . $sexo . " " . $email . " " .  $ciudad  . " " . $provincia . " " . $consulta;
            ?>

            <!-- Mostramos los datos recibidos en un formulario -->

            <form class="formoid-default-orange"
		style="background-color:#FFFFFF;font-size:14px;font-family:'Trebuchet MS',Helvetica,sans-serif;color:#666666;max-width:480px;min-width:150px;margin-top: 50px;"
		method="post" id="form-contactar" action="PHP/procesar_formulario.php">

		<div class="element-input" title="Introduce tu nombre"><label class="title">Nombre<span
					></span></label><input readonly class="large" type="text" value="<?php echo $nom; ?>" />
		</div>

		<div class="element-input" title="Introduce tus apellidos"><label class="title">Apellidos<span
					></span></label><input readonly class="large" type="text" value="<?php echo $ape; ?>" />
		</div>

        <div>
        <label class="title">Sexo<span
					></span></label>
            <input readonly class="large" type="text" value="<?php echo $sexo; ?>" />
        </div>


		<div class="element-email" title="Introduce tu correo electrónico"><label class="title">Email<span
					></span></label><input readonly class="large" type="email" value="<?php echo $email; ?>"
				/>
		</div>

		<div class="element-select" title="Introduce tu ciudad"><label class="title">Ciudad<span
					></span></label>
			<div class="medium"><span><select>

						<option><?php echo $ciudad; ?></option>
					</select><i></i></span></div>
		</div>

		<div class="element-select" title="Introduce tu provincia"><label class="title">Provincia<span
					></span></label>
			<div class="medium"><span><select>

						<option><?php echo $provincia; ?></option>
					</select><i></i></span></div>
		</div>

		<div class="element-textarea" title="Escriba su consulta"><label class="title">Consulta<span
					></span></label><textarea readonly class="medium" cols="20" rows="5"
                    ><?php echo $consulta; ?></textarea>
		</div>


	</form>
            <?php
            ?>
        </div>
    

</body>
</html>
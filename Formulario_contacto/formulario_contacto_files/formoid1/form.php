<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-default-orange.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-default-orange.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-default-orange" style="background-color:#FFFFFF;font-size:14px;font-family:'Trebuchet MS',Helvetica,sans-serif;color:#666666;max-width:480px;min-width:150px" method="post"><div class="title"><h2>CONTACTAR</h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>" title="Introduce tu nombre"><label class="title">Nombre<span class="required">*</span></label><input class="medium" type="text" name="input" required="required"/></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>" title="Introduce tus apellidos"><label class="title">Apellidos<span class="required">*</span></label><input class="large" type="text" name="input1" required="required"/></div>
	<div class="element-radio<?php frmd_add_class("radio"); ?>" title="Introduce tu sexo"><label class="title">Sexo<span class="required">*</span></label>		<div class="column column2"><label><input type="radio" name="radio" value="Hombre" required="required"/><span>Hombre</span></label></div><span class="clearfix"></span>
		<div class="column column2"><label><input type="radio" name="radio" value="Mujer" required="required"/><span>Mujer</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-email<?php frmd_add_class("email"); ?>" title="Introduce tu correo electrónico"><label class="title">Email<span class="required">*</span></label><input class="large" type="email" name="email" value="" required="required"/></div>
	<div class="element-select<?php frmd_add_class("select"); ?>" title="Introduce tu ciudad"><label class="title">Ciudad<span class="required">*</span></label><div class="medium"><span><select name="select" required="required">

		<option value="Seleccionar">Seleccionar</option>
		<option value="Donostia">Donostia</option>
		<option value="Bilbao">Bilbao</option>
		<option value="Vitoria">Vitoria</option></select><i></i></span></div></div>
	<div class="element-select<?php frmd_add_class("select1"); ?>" title="Introduce tu provincia"><label class="title">Provincia<span class="required">*</span></label><div class="medium"><span><select name="select1" required="required">

		<option value="Seleccionar">Seleccionar</option>
		<option value="Gipuzkoa">Gipuzkoa</option>
		<option value="Bizkaia">Bizkaia</option>
		<option value="Arava">Arava</option></select><i></i></span></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>" title="Escriba su consulta"><label class="title">Consulta<span class="required">*</span></label><textarea class="medium" name="textarea" cols="20" rows="5" required="required"></textarea></div>
<div class="submit"><input type="submit" value="ENVIAR"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-default-orange.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>
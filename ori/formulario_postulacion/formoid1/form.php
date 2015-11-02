<?php

define('EMAIL_FOR_REPORTS', 'estimaops@gmail.com');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'redirect');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-blue.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-blue.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Información del Alumno</h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>" title="Primer Nombre"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input" required="required" placeholder="Nombre"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input1" required="required" placeholder="Apellido Paterno"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input2"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input2" required="required" placeholder="Apellido Materno"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input3"); ?>" title="xxxxxxxx-x"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input3" required="required" placeholder="Rut"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input4"); ?>" title="xx@correo.pal"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input4" required="required" placeholder="Email"/><span class="icon-place"></span></div></div>
	<div class="element-multiple<?php frmd_add_class("multiple"); ?>" title="Selecciona tu estado civil"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="large"><select data-no-selected="Nothing selected" name="multiple[]" multiple="multiple" required="required">

		<option value="Casado">Casado</option>
		<option value="Soltero">Soltero</option>
		<option value="Viudo">Viudo</option>
		<option value="Divorciado">Divorciado</option></select><span class="icon-place"></span></div></div></div>
	<div class="element-input<?php frmd_add_class("input5"); ?>" title="Dirección Completa"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input5" required="required" placeholder="Dirección"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input6"); ?>" title="Teléfono 1 + Cod. Área"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input6" placeholder="Teléfono 1 + Cód. Área"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input7"); ?>" title="Teléfono 2 + Cód. Área"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input7" placeholder="Teléfono 2 + Cód. Área"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input8"); ?>" title="Número de Celular ( +569 xxxxxxxx )"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input8" required="required" placeholder="Celular"/><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" value="Siguiente"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-blue.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>
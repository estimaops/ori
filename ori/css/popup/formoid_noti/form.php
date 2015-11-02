<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'redirect');
define('FINISH_MESSAGE', '');
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
<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:800px;min-width:150px" method="post"><div class="title"><h2>Crear Convenios/Universidad</h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input" required="required" placeholder="Nombre Universidad"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input3"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input3" placeholder="Facultad"/><span class="icon-place"></span></div></div>
	<div class="element-multiple<?php frmd_add_class("multiple"); ?>"><label class="title"><span class="required">*</span></label><div class="item-cont"><div class="large"><select data-no-selected="Nothing selected" name="multiple[]" multiple="multiple" required="required">

		<option value="cosa1">cosa1</option>
		<option value="cosa2">cosa2</option>
		<option value="cosa3">cosa3</option></select><span class="icon-place"></span></div></div></div>
	<div class="element-input<?php frmd_add_class("input2"); ?>"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="input2" placeholder="Enlace"/><span class="icon-place"></span></div></div>
	<div class="element-separator"><hr><h3 class="section-break-title"></h3></div>
<div class="submit"><input type="submit" value="Enviar"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-blue.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>
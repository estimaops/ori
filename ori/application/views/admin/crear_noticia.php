<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Crear Noticias - Formoid contact form html</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<script src="<?php echo base_url() ?>ckeditor/ckeditor.js">
  </script>
<body class="blurBg-false" style="background-color:#EBEBEB">

<br>
<br>
<br>
<br>
<br>
<br>

<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo base_url() ?>formularios_estilos/noticias_prueba_files/formoid1/formoid-solid-blue.css" type="text/css"/>

<script type="text/javascript" src="<?php echo base_url() ?>formularios_estilos/noticias_prueba_files/formoid1/jquery.min.js"></script>
<?echo form_open_multipart('crear/upload')?><div enctype="multipart/form-data" class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:800px;min-width:150px" method="post"><div class="title"><h2>Crear Noticias</h2></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="titulo_n" required="required" placeholder="Título"/><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="subtitulo_n" required="required" placeholder="Subtítulo"/><span class="icon-place"></span></div></div>
	<div class="element-textarea"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="ckeditor" name="cuerpo_n" cols="20" rows="5" required="required" placeholder="Cuerpo"></textarea><span class="icon-place"></span></div></div>
	<div class="element-input"><label class="title"></label><div class="item-cont"><input class="large" type="text" name="enlace_n" placeholder="Enlace"/><span class="icon-place"></span></div></div>
	<div class="element-file"><label class="title"><span class="required">*</span></label><div class="item-cont"><label class="large" ><div class="button">Selecciona Imagen</div><input type="file" class="file_input" name="userfile" required="required"  /><div class="file_text">Selecciona imagen</div><span class="icon-place"></span></label></div></div>
	<div class="element-separator"><hr><h3 class="section-break-title"></h3></div>
<div class="submit"><input type="submit" value="Enviar"/></div></div></form>

</body>
</html>
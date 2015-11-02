<!DOCTYPE html>
<html lang="en">
<head>
<title>404 Page Not Found</title>
<style type="text/css">

::selection{ background-color: #E13300; color: white; }
::moz-selection{ background-color: #E13300; color: white; }
::webkit-selection{ background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	-webkit-box-shadow: 0 0 8px #D0D0D0;
}

p {
	margin: 12px 15px 12px 15px;
}
</style>
</head>
<body>
	<div class="col-md-12">
	<div id="container">
		<h1><?php echo "Ups!, hemos tenido un error!"; ?></h1>
		<p><?php echo "Por favor intente nuevamente"; ?></p>
		<p> Posiblemente los errores han sido producto de una carga indevida, ya sea un formato de imagen no admitido o archivo</p>
		<p><?php echo "El error:", $error ?></p>
		<center><img src="<?php echo base_url() ?>images/001_seto_kaiba_defeated_yugi_duel.jpg" class="img-responsive" height="200px">
		<form id="form" name="form1" method="post" action="<?php echo base_url() ?>index.php/welcome/indexadmin"></center>
			<center><button type="submit"> Volver a menú </button><center>
		</form>	

	</div>
	</div>
</body>
</html>
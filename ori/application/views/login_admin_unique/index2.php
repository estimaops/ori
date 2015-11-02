<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Custom Login Form Styling</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/style.css" />

        <script src="<?php echo base_url() ?>js/modernizr.custom.63321.js"></script>
        <script src="<?php echo base_url() ?>js/jquery.placeholder.min.js"></script>

        <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>
			body {
				background: url(<?php echo base_url() ?>ima/Envio.jpg)no-repeat center top;
			}
		</style>
    </head>
    <body>
        <div class="container">
		
			<!-- Codrops top bar -->

			<header>
			

				
			</header>
			
			<section class="main">
				<form class="form-2" method='POST'>
					<h1><span class="log-in">Bienvenido</span> administrador</h1>
					<p class="float">
						<label for="login"><i class="icon-user"></i>Nombre usuario</label>
						<input type="text" name="login" placeholder="Nombre o correo">
					</p>
					<p class="float">
						<label for="password"><i class="icon-lock"></i>Contraseña</label>
						<input type="password" name="password" placeholder="Contraseña" class="showpassword">
					</p>
					<p class="clearfix"> 
						<input type="submit" name="submit" value="Ingresar">
						<h1><br><DIV ALIGN=center>si no puedes ingresar solicita al administrador una cuenta para realizar modificaciones</div></h1>

					</p>
				</form>​​
			</section>
			
        </div>
		<!-- jQuery if needed -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
			$(function(){
			    $(".showpassword").each(function(index,input) {
			        var $input = $(input);
			        $("<p class='opt'/>").append(
			            $("<input type='checkbox' class='showpasswordcheckbox' id='showPassword' />").click(function() {
			                var change = $(this).is(":checked") ? "text" : "password";
			                var rep = $("<input placeholder='Password' type='" + change + "' />")
			                    .attr("id", $input.attr("id"))
			                    .attr("name", $input.attr("name"))
			                    .attr('class', $input.attr('class'))
			                    .val($input.val())
			                    .insertBefore($input);
			                $input.remove();
			                $input = rep;
			             })
			        ).append($("<label for='showPassword'/>").text("Mostrar contraseña")).insertAfter($input.parent());
			    });

			    $('#showPassword').click(function(){
					if($("#showPassword").is(":checked")) {
						$('.icon-lock').addClass('icon-unlock');
						$('.icon-unlock').removeClass('icon-lock');    
					} else {
						$('.icon-unlock').addClass('icon-lock');
						$('.icon-lock').removeClass('icon-unlock');
					}
			    });
			});
		</script>
    </body>
</html>
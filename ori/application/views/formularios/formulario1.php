<br>
<br>
<br>

<h1><center>Formulario Postulación UCM</h1>
<br>
<br><center>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/supercss.css">



<!-- Comienzo FORM -->
<form id="form" name="frmContacto" method="post" action="<?php echo base_url() ?>index.php/welcome/insert2">	

<!-- comienzo FINANCIAMIENTO -->
<div class = "row">
	<div class="col-lg-12">
		<div class="col-md-6">
		<center><h3>Antecedentes Personales</h3></center>
		<center>
			<div id="estilizado" class="myform2">

				<label>Nombre
					<span class="small">Tu nombre</span>
				</label>
				<input type="text" name="name" id="name" />

				<label>Apellido P.
					<span class="small">Tu apellido paterno</span>
				</label>
				<input type="text" name="apellido" id="apellido" />


				<label>Apellido M.
					<span class="small">Tu apellido materno</span>
				</label>
				<input type="text" name="apellido2" id="apellido2" />

				<label>Rut
					<span class="small">Tu rut</span>
				</label>
				<input type="text" name="rut" id="rut" size="10" maxlength="10"/>

				<label>Email
					<span class="small">Tu correo electrónico</span>
				</label>
				<input type="text" name="mail" id="mail" />
		
				<label>Estado Civil 
					<span class="small">Tu estado civil s/c/v/d</span>
				</label>
				<center><select name="civil">
					<option value="soltero">soltero</option>
					<option value="casado">casado</option>
					<option value="viudo">viudo</option>
					<option value="divorciado">divorciado</option>
					</select><center>
				<br>
				<br>
				<br>

				<label>Dirección
					<span class="small">Tu dirección</span>
				</label>
				<input type="text" name="direccion" id="direccion" />
		
				<label>Teléfono Fijo 1
					<span class="small">Teléfono fijo (opcional)</span>
				</label>
				<input type="text" name="tel1" id="tel1" />
		
				<label>Teléfono Fijo 2
					<span class="small">Teléfono fijo (opcional)</span>
				</label>
				<input type="text" name="tel2" id="tel2" />

				<label>Celular
					<span class="small">Celular personal (opcional)</span>
				</label>
				<input type="text" name="celular" id="celular" />

				<div class="spacer"></div>
			</div>
		</center>
	</div>

<!-- Fin FINANCIAMIENTO -->

<!-- inicio ANTECEDENTES ACADEMICOS -->
	<div class="col-md-6">
	<center><h3>Antecedentes Académicos y Destino</h3><center>
	<div id="estilizado" class="myform2">
		<label>Carrera
		<span class="small">Tu actual carrera</span>
		</label>
		<select name="carrera">
		<option value= "Agronomia">Agronomía</option>
		<option value= "Ingenieria Civil Informatica">Ingeniería Civil Informática</option>
		<option value= "Ingenieria en Construccion">Ingeniería en Construcción</option>
		<option value= "Ingenieria en Biotecnologia">Ingeniería en Biotecnología</option>
		<option value= "Ingenieria Comercial">Ingeniería Comercial</option>
		<option value= "Auditoria">Auditoría</option>
		<option value= "Enfermeria">Enfermería</option>
		<option value= "Kinesiologia">Kinesiología</option>
		<option value= "Psicologia">Psicología</option>
		<option value= "Sicologia">Sicología</option>
		<option value= "Medicina">Medicina</option>
		<option value= "Nutricion y dietetica">Nutrición y Dietética</option>
		<option value= "Educacion Parvularia">Educación Parvularia</option>
		<option value= "Ped. Educacion Fisica">Ped. Educación Física</option>
		<option value= "Ped. Ingles">Ped. Inglés</option>
		<option value= "Ped. Ciencias">Ped. Ciencias</option>
		<option value= "Ped. Ed. Basica ">Ped. Ed. Básica</option>
		<option value= "Ped. Ed. Basica Mencion">Ped. Ed. Básica Mención</option>
		<option value= "Ped. Religion y Filosofia">Ped. Religión y Filosofía</option>
		<option value= "Ped. Matematicas y Computacion">Ped. Matemáticas y Computación</option>
		<option value= "Ped. Lengua Castellana y Comunicacion">Ped. Lengua Castellana y Comunicación</option>
		<option value= "Trabajo Social">Trabajo Social</option>

		</select>

		<br>
		<br>

		

		<label>Nivel que cursa
		<span class="small">Tu nivel actual (semestre)</span>
		</label>
		<select name="nivel_cursa">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		</select><center>
		<br>
		<br>
		<label>Facultad
		<span class="small">Facultad a actual</span>
		</label>
		<select name="facultad" align="right">
		<option value="Ciencas de la Salud">Facultad Ciencas de la Salud</option>
		<option value="Ciencias de la Educacion">Facultad Ciencias de la Educación</option>
		<option value="Ciencias de la Ingenieria">Facultad Ciencias de la Ingeniería</option>
		<option value="Ciencias Agrarias y Forestales">Facultad Ciencias Agrarias y Forestales</option>
		<option value="Ciencias Religiosas y Filosoficas">Facultad de Ciencias Religiosas y Filosóficas</option>
		<option value="Medicina">Facultad de Medicina</option>
		<option value="Ciencias Básicas">Facultad de Ciencias Básicas</option>
		<option value="Ciencas Sociales y Economicas">Facultad de Ciencias Sociales y Económicas</option>
		<option value="Estudios Generales">Instituto de Estudios Generales</option>
		</select>

		<br>
		<br>

		<label>Nivel al Salir
		<span class="small">Tu nivel salida(semestre)</span>
		</label>
		<select name="nivel_salir" align="left">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		</select><center>

		<br>
		<h1>Destino</h1>
		<br>


		<label>Institución de Destino
		<span class="small">Institución de destino</span>
		</label>
		<input type="text" name="i_destino" id="i_destino" />
		<br>
		<br>
		<br>
		<br>
		<label>País Destino
		<span class="small">País de destino</span>
		</label>
		<input type="text" name="p_destino" id="p_destino" />

		<label>Ciudad Destino
		<span class="small">Ciudad de destino</span>
		</label>
		<input type="text" name="c_destino" id="c_destino" />

		<label>Fecha inicio
		<span class="small">Fecha de inicio de pasantía</span>
		</label>
		<input type="date" name="fecha_inicio" id="fecha_inicio" />

		<label>Fecha término
		<span class="small">Fecha de fin de pasantía</span>
		</label>
		<input type="date" name="fecha_termino" id="fecha_termino" />
		
		<label>Comentarios
		<span class="small">Comentarios</span>
		</label>
		<textarea name="comentario" maxlength="500" cols="23" rows="5"></textarea>
		<div class="spacer"></div>

	</div>
</div>
</div>



<!-- Termino ANTECEDENTES ACADEMICOS -->

<!-- REALES ANTECEDENTES PERSONALES -->	







</div>
<div class="row">

<div class="col-mg-4">
</div>
<div class="col-mg-4"
<center><h3>Financiamiento</h3><center>
		<span class="small">Estando en lugar destino</span>

	<div id="estilizado" class="myform2">
		<label>Monto Pasajes
		<span class="small">Locomoción</span>
		</label>
		<input type="text" name="monto_pasaje" id="monto_pasaje" />

		<label>Monto Alojamiento
		<span class="small">Estadía</span>
		</label>
		<input type="text" name="monto_alojamiento" id="monto_alojamiento" />

		<label>Monto Alimentación
		<span class="small">Alimentación</span>
		</label>
		<input type="text" name="monto_alimentacion" id="monto_alimentacion" />

		<label>Monto Otros
		<span class="small">Gastos extras</span>
		</label>
		<input type="text" name="otros" id="otros" />

		<button type="submit">Enviar Postulación</button>
		
		<div class="spacer"></div>
	</div>
</div>
</div>




<!-- TERMINO ANTECEDENTES PERSONALES -->

	<center><img src="http://www.ucm.cl/uploads/media/LOGO_UCM2.gif" style="width:30%" class="img-responsive"></center>

</form>
center>

<!-- TERMINO TABLA -->















<body>

<script src="http://code.jquery.com/jquery-latest.js"></script> 

<script src="<?php echo base_url() ?>formulario_postulacion/formoid1/formoid-solid-blue.js"></script> 

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/popup/dist/magnific-popup.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/popup/video.css"> 

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/popup/formu.css"> 
<link rel="stylesheet" href="<?php echo base_url()?>css/popup/formoid1/formoid-solid-blue.css" type="text/css" />
<script src="http://localhost/ori/ckeditor/ckeditor.js"></script>




<script src="<?php echo base_url() ?>css/popup/dist/jquery.magnific-popup.min.js"></script> 
<script src="<?php echo base_url() ?>css/popup/dist/jquery.magnific-popup.js"></script> 
<script src="<?php echo base_url() ?>css/popup/form.js"></script> 

<script type="text/javascript">
      $(document).ready(function() {
        $('.popup-with-form').magnificPopup({
          type: 'inline',
          preloader: false,
          focus: '#name',

          // When elemened is focused, some mobile browsers in some cases zoom in
          // It looks not nice, so we disable it:
          callbacks: {
            beforeOpen: function() {
              if($(window).width() < 700) {
                this.st.focus = false;
              } else {
                this.st.focus = '#name';
              }
            }
          }
        });
      });
</script>

  <div class="navbar-wrapper">
    <div class="container">
      <div class="navbar navbar-inverse navbar-static-top">
        <div class="navbar-header">
          <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        </a>
          <a class="navbar-brand" href="<?php echo base_url() ?>index.php/welcome/indexadmin">Inicio</a>
          </div>
          <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Noticias <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url() ?>index.php/crear/crear_noticia">Crear Noticias</a></li>
                <li><a href="<?php echo base_url() ?>index.php/borrar/borrar_noticia_mod">Modificar Noticias </a></li>
            </ul>
            </li>

          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Becas <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url() ?>index.php/crear/crear_beca">Crear Becas</a></li>
                <li><a href="<?php echo base_url() ?>index.php/borrar/eliminar_beca">Modificar Becas </a></li>
            </ul>
            </li>

          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Convenios <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url() ?>index.php/crear/crear_convenio_universidad">Crear convenio</a></li>
                <li><a href="<?php echo base_url() ?>index.php/borrar/borrar_convenio_mod">Modificar Convenios </a></li>
            </ul>
            </li>

          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reglamento <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url() ?>index.php/crear/crear_reglamento_vista">Crear Reglamento</a></li>
                <li><a href="<?php echo base_url() ?>index.php/borrar/borrar_reglameto_vista">Eliminar Reglamento</a></li>

            </ul>
            </li>


          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Preguntas Frecuentes<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url() ?>index.php/crear/crear_pregunta">Crear pregunta</a></li>
                <li><a href="<?php echo base_url() ?>index.php/borrar/eliminar_pregunta">Modificar Preguntas Frecuentes</a></li>
            </ul>
            </li>
             
			    <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Postulación <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url() ?>index.php/borrar/admin_postulaciones_extranjeras">Estudiantes Extranjeros</a></li>
                <li><a href="<?php echo base_url() ?>index.php/borrar/admin_postulaciones"> Estudiantes UCM </a></li>



              </ul>
            </li>
            <li><a href="<?php echo base_url() ?>index.php/welcome/index">Inicio Visitante</a></li>
            <li><a href="<?php echo base_url() ?>index.php/welcome/salida">Salir</a></li>


          </ul>
        </div>
      </div>
    </div><!-- /container -->
  </div><!-- /navbar wrapper -->




</body>


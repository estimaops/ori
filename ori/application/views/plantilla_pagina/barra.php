    <script src="http://code.jquery.com/jquery-latest.js"></script> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <!-- <script src="http://code.jquery.com/jquery-latest.js"></script> -->
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script> 


<body>
  <div class="navbar-wrapper">
    <div class="container">
      <div class="navbar navbar-inverse navbar-static-top">
        <div class="navbar-header">
          <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        </a>
          <a class="navbar-brand" href="<?php echo base_url()?>">Inicio</a>
          </div>
          <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url() ?>index.php/noticias/listado_noticias">Noticias</a></li>
            <li><a href="<?php echo base_url() ?>index.php/becas/listado_becas">Becas</a></li>
            <li><a href="<?php echo base_url() ?>index.php/convenio/convenios">Convenios</a></li>
            <li><a href="<?php echo base_url() ?>index.php/norma/mostrar_reglamentos">Normativas</a></li>
            <li><a  href="<?php echo base_url() ?>index.php/contacto/preguntas_frecuentes">Preguntas Frecuentes</a></li>
			      <li><a href="<?php echo base_url() ?>index.php/contacto/vista_contacto">Contacto</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Postulación <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url() ?>index.php/welcome/forma_extranjero">Estudiantes Extranjeros</a></li>
                <li><a href="<?php echo base_url() ?>index.php/welcome/forma_ucm">Estudiantes UCM </a></li>
              </ul>
            </li>
            <li><a href="<?php echo base_url() ?>index.php/welcome/indexadmin">admin-"prueba"</a></li>

          </ul>
        </div>
      </div>
    </div><!-- /container -->
  </div><!-- /navbar wrapper -->
</body>


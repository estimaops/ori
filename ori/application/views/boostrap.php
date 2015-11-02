<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Sistema de Movilidad Estudiantil</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
    <link rel="stylesheet" type="text/css" href=" <?php echo base_url() ?>css/bootstrap.min.css ">

    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->

		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
    <link rel="stylesheet" type="text/css" href=" <?php echo base_url() ?>css/styles.css ">

		<!--<link href="css/styles.css" rel="stylesheet">-->
	</head>
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
        <a class="navbar-brand" href="#">Inicio</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Noticias</a></li>
            <li><a href="#">Becas</a></li>
            <li><a href="#">Convenios</a></li>
            <li><a href="#">Reglamento</a></li>
            <li><a  href="#abajo">Preguntas Frecuentes</a></li>







            <li><a href="#">Contacto</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Postulación <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Estudiantes Extranjeros</a></li>
                <li><a href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">Estudiantes UCM </a></li>
               
              </ul>
            </li>
          </ul>
        </div>

    </div>
  </div><!-- /container -->
</div><!-- /navbar wrapper -->


<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!---->
  <div class="carousel-inner">
    <div class="item active">
      <img src="http://1.bp.blogspot.com/-sC_thcOYHkM/VSbmEpDabZI/AAAAAAAABE8/WJPt1LyjeCs/s1600/slide1.jpg" style="width:100%" class="img-responsive">
      <div class="container">

        
        <div class="carousel-caption">
          <h1>Ven a vivir una experiencia única.</h1>
          <p></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="http://airastana.com/Portals/2/Destination%20Guides/LondonDGWide.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Conoce el Mundo</h1>
          <p>Postula con nosotros y conoce el mundo, compartiendo nuestra cultura </p>
          <p><a class="btn btn-large btn-primary" href="formulario1.php") >Postula Aquí</a></p>


        </div>
      </div>
    </div>
    <div class="item">
      <img src="http://www.incae.edu/sites/default/files/styles/flexslider_full/public/_mg_6107.jpg?itok=EaIX9BOf" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Si eres extranjero postula a la UCM</h1>
          <p>Ven y se parte de nuestra comunidad universitaria</p>
          <p><a class="btn btn-large btn-primary" href="#">Postula Aquí</a></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>  
</div>

<!---->

<!-- /.carousel -->


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">


  <div class="row">
    <div class="col-md-4 text-center">
      <img class="img-squad" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xpf1/v/t1.0-1/p160x160/10806248_673060399478740_9093912430086153628_n.jpg?oh=d702c15b8d77fa4b0d13bae856fb1eee&oe=55D94AF0&__gda__=1439217686_8ba951af1b836c038ef903d304cf6da1" class="img-responsive" height="200px">
      <h2>Estudiantes UCM</h2>
      <p><center>Si eres estudiante UCM, puedes postular a las distintas universidades con las que se posee convenio. Puedes conocer otros paises, otras culturas, además de crecer como futuro profesional. No esperes más y postula aquí:</center></p>
     
        <p><a class="btn btn-default" href="<?php echo base_url() ?>index.php/welcome/pag2">Postula Aquí »</a></p>
      


    </div>
    <div class="col-md-4 text-center">
      <img class="img-circle" src="http://www.ucm.cl/typo3temp/pics/3390cdba52.jpg" class ="img-responsive" height="200px">

      <h2>Estudiantes Extranjeros</h2>
      <p><center>Si no eres Chileno y te gustaría ser parte de la Comunidad UCM, ven y postula. Conocerás nuevas personas, que te ayudarán en tu formación como profesional. Postula aquí.</center></p>
      <p><a class="btn btn-default" href="#">Postula Aquí »</a></p>
    </div>
    <div class="col-md-4 text-center">
      <img class="img-circle" src="http://www.diariolaprensa.cl/wp-content/uploads/2012/12/estudiantes.jpg"class="img-responsive" height="200px">
      <h2>Calendario de Actividades</h2>
      <p>Puedes revisar nuestro Calendario de Actividades. Verifica cuando serán las postulaciones de la beca que deseas. Para ingresar haz click aquí:</p>
      <p><a class="btn btn-default" href="#">Calendario »</a></p>
    </div>
  </div><!-- /.row -->

  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">
  <abajo name="#abajo">
  <h1><center>Preguntas Frecuentes




  </center> </h1>
<br>
<br>
<br>
<br>
<br>
<br>






  <div class="featurette">
    <img class="featurette-image img-circle pull-right" src="http://www.ucm.cl/typo3temp/pics/6fd5f85d19.jpg" height="400px"  >
    <h2 class="featurette-heading"> <span class="text-muted">Pregunta 1:</span></h2>
    <p class="lead">Preguntas, preguntas, preguntas, preguntas, preguntas, </p>
     <p class="lead">Preguntas, preguntas, preguntas, preguntas, preguntas, </p>
      <p class="lead">Preguntas, preguntas, preguntas, preguntas, preguntas </p>

  </div>

  <hr class="featurette-divider">

  <div class="featurette">
    <img class="featurette-image img-circle pull-left" src="http://www.ucm.cl/typo3temp/pics/988823be94.jpg" height="400px">
    <h2 class="featurette-heading"><span class="text-muted">Pregunta 2:</span></h2>
    <p class="lead"> Preguntas, preguntas, preguntas, preguntas, preguntas,  </p>
     <p class="lead">Preguntas, preguntas, preguntas, preguntas, preguntas, </p>
      <p class="lead">Preguntas, preguntas, preguntas, preguntas, preguntas</p>

  </div>

  <hr class="featurette-divider">

 

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->


  <!-- FOOTER -->
  <footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>This Bootstrap layout is compliments of Bootply. · <a href="http://www.bootply.com/62603">Edit on Bootply.com</a></p>
  </footer>

</div><!-- /.container -->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
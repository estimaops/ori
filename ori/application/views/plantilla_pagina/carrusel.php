<div id="myCarousel" class="carousel slide">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href=" <?php echo base_url() ?>css/bootstrap.min.css ">

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!---->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo base_url() ?>imagenes/ucm11-980x300.png" style="width:100%" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Ven a vivir una experiencia única.</h1>
          <p></p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url() ?>imagenes/carrusel2.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Si eres estudiante UCM</h1>
          <p>Postula con nosotros y conoce el mundo, compartiendo nuestra cultura </p>
          <p><a class="btn btn-large btn-primary" href="<?php echo base_url() ?>index.php/welcome/forma_ucm") >Postula Aquí</a></p>


        </div>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url() ?>imagenes/carrusel3.jpg" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Si eres extranjero postula a la UCM</h1>
          <p>Ven y se parte de nuestra comunidad universitaria</p>
          <p><a class="btn btn-large btn-primary" href="<?php echo base_url() ?>index.php/welcome/forma_extranjero">Postula Aquí</a></p>
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
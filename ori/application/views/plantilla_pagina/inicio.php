
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/popup/dist/magnific-popup.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/popup/video.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/popup/formu.css"> 
<link rel="stylesheet" href="<?php echo base_url()?>css/popup/formoid1/formoid-solid-blue.css" type="text/css" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/popup/zoom.css"> 
<script src="<?php echo base_url() ?>css/popup/zoom.js"></script> 


<script src="<?php echo base_url() ?>css/popup/dist/jquery.magnific-popup.min.js"></script> 
<script src="<?php echo base_url() ?>css/popup/dist/jquery.magnific-popup.js"></script> 
<script src="<?php echo base_url() ?>css/popup/form.js"></script> 


  


<div class="container marketing">
  <div class="row">
    <div class="col-md-4 text-center">
      <img class="img-squad" src="<?php echo base_url() ?>imagenes/inicio1.jpg" class="img-responsive" height="200px">
      <h2>Estudiantes UCM</h2>
      <p><center>Si eres estudiante UCM, puedes postular a las distintas universidades con las que se posee convenio. Puedes conocer otros paises, otras culturas, además de crecer como futuro profesional. No esperes más y postula aquí:</center></p>
     
        <p><a class="btn btn-default" href="<?php echo base_url() ?>index.php/welcome/forma_ucm">Postula Aquí »</a></p>
    </div>
    <div class="col-md-4 text-center">
      <img class="img-circle" src="<?php echo base_url() ?>imagenes/carlos.jpg" class ="img-responsive" height="200px">

      <h2>Estudiantes Extranjeros</h2>
      <p><center>Si no eres Chileno y te gustaría ser parte de la Comunidad UCM, ven y postula. Conocerás nuevas personas, que te ayudarán en tu formación como profesional. Postula aquí.</center></p>
      <p><a class="btn btn-default" href="<?php echo base_url() ?>index.php/welcome/forma_extranjero">Postula Aquí »</a></p>
    </div>
    <div class="col-md-4 text-center">
      <img class="img-squad" src="<?php echo base_url() ?>imagenes/ucmm.jpg"; class="img-responsive" height="180px">
      <h2>Noticias recientes</h2>
      <p>Para ingresar haz click aquí:</p>
      <p><a class="btn btn-default" href="<?php echo base_url() ?>index.php/noticias/listado_noticias">Noticias »</a></p>
    </div>
  </div>
  

      
  <hr class="featurette-divider">
  <abajo name="#abajo">



<?php
      
            $contador=1;
            $imagen = 'http://redg9.cl/wp-content/uploads/2014/03/ucm11-980x300.png';

                    echo "
                    <div id='myCarousel2' class='carousel slide'>
                    <link rel='stylesheet' type='text/css' href='<?php echo base_url() ?>css/bootstrap.css'>
                    <link rel='stylesheet' type='text/css' href=' <?php echo base_url() ?>css/bootstrap.min.css '>
                    ";

                    
                    $iden=0;
                    $cont=0;
                    $cont2=0;
                    foreach($noticias -> result() as $noticia){
                        if ($cont<5) { 
                        if($iden==0){
                            echo "                  
                              <!-- Indicators -->
                              <ol class='carousel-indicators'>
                                <li data-target='#myCarousel2' data-slide-to='0' class='active'><p></p></li>
                              ";
                        }
                        if($iden>0){
                            echo "
                            <li data-target='#myCarousel2' data-slide-to='$iden'></li>
                            ";
                        }
                        $iden++;
                        }
                        $cont++;
                    }  
                    echo"
                    </ol>
                    <div class='carousel-inner'>
                    ";
                    $iden2=0;
                    foreach($noticias -> result() as $noticia){
                        if ($cont2<5) { 
                        if($iden2==0){
                            echo"
                            <div class='item active'>
                            <img src='$noticia->IMAGEN' style='width:100%' class='img-responsive'>
                              <div class='container'>
                                <div class='carousel-caption'>
                                  <h1>$noticia->TITULO</h1>
                                  <p>$noticia->SUBTITULO</p>
                                  <p><a class='btn btn-default' href='";?><?php echo base_url() ?><?php echo"index.php/noticias/listado_noticias'>Noticias aqui »</a></p>

                                  
                                </div>
                              </div>
                            </div>
                            ";
                        }
                        if($iden2>0){
                            echo"
                            <div class='item'>
                              <img src='$noticia->IMAGEN' style='width:100%'  class='img-responsive'>
                              <div class='container'>
                                <div class='carousel-caption'>
                                  <h1>$noticia->TITULO</h1>
                                  <p>$noticia->SUBTITULO</p>
                                  <p><a class='btn btn-default' href='";?><?php echo base_url() ?><?php echo"index.php/noticias/listado_noticias'>Noticias aqui »</a></p>

                                  
                                </div>
                              </div>
                            </div>
                            ";
                        }
                        $iden2++;
                        }
                        $cont2++;


                    }
                    echo "
                    </div>
                    ";
                    echo"
                    <a class='left carousel-control' href='#myCarousel2' data-slide='prev'>
                        <span class='icon-prev'></span>
                    </a>
                    <a class='right carousel-control' href='#myCarousel2' data-slide='next'>
                        <span class='icon-next'></span>
                    </a>  
                    ";

                    echo "
                    </div>
                    ";
        

        

        ?>
  
</div><!-- /.container -->
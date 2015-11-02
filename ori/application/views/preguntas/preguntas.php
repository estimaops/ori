
    <br>
    <br>
    <br>
    <br>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>3 Noticias ORI</title>

    <!-- Bootstrap Core CSS -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href=" <?php echo base_url() ?>css/bootstrap.min.css ">

    <!-- Custom CSS -->
    <!-- <link href="css/3-col-portfolio.css" rel="stylesheet">  -->
    <link rel="stylesheet" type="text/css" href=" <?php echo base_url() ?>css/3-col-portfolio.css ">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->





    <!-- Navigation -->
    
    <!-- Page Content -->
    <div class="container">
        <center>
        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Preguntas frecuentes
                    <small>informacion oficina relaciones internacionales</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
        <div class='row'>
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10">


        <!-- Projects Row -->
        <?php
      
            $contador=1;
            $imagen = 'http://cesf.cl/wordpress/wp-content/uploads/2014/01/becas.png';
            
    

                # code...
                    echo "
                    <div id='myCarousel' class='carousel slide'>
                    <link rel='stylesheet' type='text/css' href='<?php echo base_url() ?>css/bootstrap.css'>
                    <link rel='stylesheet' type='text/css' href=' <?php echo base_url() ?>css/bootstrap.min.css '>
                    ";

                    
                    $iden=0;
                    foreach($preguntas -> result() as $pregunta){
                        if($iden==0){
                            echo "                  
                              <!-- Indicators -->
                              <ol class='carousel-indicators'>
                                <li data-target='#myCarousel' data-slide-to='0' class='active'><p></p></li>
                              ";
                        }
                        if($iden>0){
                            echo "
                            <li data-target='#myCarousel' data-slide-to='$iden'></li>
                            ";
                        }
                        $iden++;
                    }  
                    echo"
                    </ol>
                    <div class='carousel-inner'>
                    ";
                    $iden2=0;
                    foreach($preguntas -> result() as $pregunta){
                        if($iden2==0){
                            echo"
                            <div class='item active'>
                            <img src='http://blog.jobandtalent.com/files/2013/05/blog_pregunta.jpg' style='width:100%' class='img-responsive'>
                              <div class='container'>
                                <div class='carousel-caption'>
                                  <h1>$pregunta->PREGUNTA</h1>
                                  <p>$pregunta->RESPUESTA</p>
                                </div>
                              </div>
                            </div>
                            ";
                        }
                        if($iden2>0){
                            echo"
                            <div class='item'>
                              <img src='http://www.apolarimoveis.imb.br/blog/wp-content/uploads/2014/03/05-alegria-alegria-os-acabamentos-coloridos-da-revestir-2014.jpeg' class='img-responsive'>
                              <div class='container'>
                                <div class='carousel-caption'>
                                  <h1>$pregunta->PREGUNTA</h1>
                                  <p>$pregunta->RESPUESTA</p>
                                  
                                </div>
                              </div>
                            </div>
                            ";
                        }
                        $iden2++;

                    }
                    echo "
                    </div>
                    ";
                    echo"
                    <a class='left carousel-control' href='#myCarousel' data-slide='prev'>
                        <span class='icon-prev'></span>
                    </a>
                    <a class='right carousel-control' href='#myCarousel' data-slide='next'>
                        <span class='icon-next'></span>
                    </a>  
                    ";

                    echo "
                    </div>
                    ";
        

        

        ?>
    </div>
    </center>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>




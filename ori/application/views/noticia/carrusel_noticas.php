
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
        <!-- /.row -->

        <div class="col-lg-12">


        <!-- Projects Row -->
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
                            <img src='http://blog.jobandtalent.com/files/2013/05/blog_pregunta.jpg' style='width:100%' class='img-responsive'>
                              <div class='container'>
                                <div class='carousel-caption'>
                                  <h1>$noticia->TITULO</h1>
                                  <p>$noticia->SUBTITULO</p>
                                
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
                                  <h1>$noticia->TITULO</h1>
                                  <p>$noticia->SUBTITULO</p>
                                 
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
    </div>
    </center>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>




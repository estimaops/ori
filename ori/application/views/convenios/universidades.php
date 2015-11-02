
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
        <h1 class='page-header'></h1>
        <!-- Page Header -->
    
        <!-- /.row -->

        <!-- Projects Row -->
        <?php
      
            $contador=1;
            $imagen = 'http://cesf.cl/wordpress/wp-content/uploads/2014/01/becas.png';
            
    

                # code...
                    echo "
                    <div class='row'>
                    <div class='col-lg-2'>
                    </div>
                    <div class='col-lg-4'>
                    <img src='http://www.ucm.cl/uploads/media/logo_UCM_calado_01.jpg' style='width:100%' class='img-responsive'>

                    <h1 class='page-header'>Universidades y Convenios
                    </h1>
                    <h1 class='page-header'>
                    <small>Oficina Relaciones Internacionales</small>
                    </h1>

                    </div>
                    <div class='col-lg-4'>
                    <div id='myCarousel' class='carousel slide'>
                    <link rel='stylesheet' type='text/css' href='<?php echo base_url() ?>css/bootstrap.css'>
                    <link rel='stylesheet' type='text/css' href=' <?php echo base_url() ?>css/bootstrap.min.css '>
                    ";

                    
                    $iden=0;
                    foreach($convenios -> result() as $convenio){
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
                    foreach($convenios -> result() as $convenio){
                        if($iden2==0){
                            echo"
                            <div class='item active'>
                            <img src='https://artama.es/553-thickbox_default/fieltro-fino-lana-azul-petroleo-50x160cm.jpg' style='width:100%' class='img-responsive'>
                              <div class='container'>
                                <div class='carousel-caption'>
                                  <h1>$convenio->NOMBRE</h1>
                                  <p>$convenio->PAIS</p>
                                </div>
                              </div>
                            </div>
                            ";
                        }
                        if($iden2>0){
                            echo"
                            <div class='item'>
                              <img src='https://artama.es/553-thickbox_default/fieltro-fino-lana-azul-petroleo-50x160cm.jpg' class='img-responsive'>
                              <div class='container'>
                                <div class='carousel-caption'>
                                  <h1>$convenio->NOMBRE</h1>
                                  <p>$convenio->PAIS</p>
                                  
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
                    

                    </div>
                    ";
        

        

        ?>
    </center>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>




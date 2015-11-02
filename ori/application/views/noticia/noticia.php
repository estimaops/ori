
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


<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/popup/dist/magnific-popup.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/popup/video.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/popup/formu.css"> 
<link rel="stylesheet" href="<?php echo base_url()?>css/popup/formoid1/formoid-solid-blue.css" type="text/css" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/popup/zoom.css"> 
<script src="<?php echo base_url() ?>css/popup/zoom.js"></script> 


<script src="<?php echo base_url() ?>css/popup/dist/jquery.magnific-popup.min.js"></script> 
<script src="<?php echo base_url() ?>css/popup/dist/jquery.magnific-popup.js"></script> 
<script src="<?php echo base_url() ?>css/popup/form.js"></script> 


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
                <h1 class="page-header">Noticias
                    <small>informacion oficina relaciones internacionales</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->

        <?php

      
            $contador=1;
            $imagen = 'http://2.bp.blogspot.com/-mOltBKafEN8/UkU9PBpqZQI/AAAAAAAAMlA/y7Uf4D7u6hQ/s1600/periodico-rosa-noticias-actualidad.png';
            echo "<div class='row'> 
            <div class='col-md-2 portfolio-item'>
                        
                        </div>";
  
       
            $i=1;
            foreach($noticias -> result() as $noticia){
   

                # code...
                if($i>($dat-1)*6 and $i<($dat*6)+1){
                    $num=$i + 1; 
                    echo "
                        
                        <div class='col-md-2 portfolio-item'>
                            <div class='zoom-gallery'>
                              <a href='$noticia->IMAGEN'>
                                <img class='img-responsive' src='$noticia->IMAGEN' alt=''>
                              </a>
                            </div>
                        </div>
                        <div class='col-md-6 portfolio-item'>
                        <h4>
                                <a href=";?><?php echo base_url() ?><?php echo "index.php/noticias/noticia_detalle/$i>$noticia->TITULO $i</a>
                            </h4>
                            <p>$noticia->SUBTITULO</p>
                        </div>
                        <div class='col-md-2 portfolio-item'>
                        
                        </div>
                        
                    ";
                    if ($contador%1==0) {
                        echo " 
                        </div>
                        
                        <h1 class='page-header'></h1>
                        <div class='row'>
                        <div class='col-md-2 portfolio-item'>
                        
                        </div> 
                        
"; 
                        
                    }
                    $contador++;
                }
                $i++;
            }
        

        echo "

                <!-- Pagination -->
                <div class='row text-center'>
                    <div class='col-lg-12'>
                        <ul class='pagination'>
                         ";
        for ($j=0; $j < ($i-1)/6 ; $j++) { 
                $numerop=$j+1;   
                echo "
                           
                            <li class='active'>
                                <a href=";?><?php echo base_url() ?><?php echo "index.php/noticias/listado_noticias/$numerop>$numerop</a>
                            </li>
                            
                            
                ";
                

                
        }
        
        echo "
                </ul>
            </div>
        </div>
        <!-- /.row -->";

        ?>
    </center>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>




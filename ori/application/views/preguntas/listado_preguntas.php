

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




    <!-- Navigation -->
    
    <!-- Page Content -->
    <div class="container">
        <center>
        <!-- /.row -->

        <!-- Projects Row -->
        <?php
      
            $contador=1;
            $imagen = 'http://cesf.cl/wordpress/wp-content/uploads/2014/01/becas.png';
            echo "<div class='row'> ";
            
            foreach($preguntas -> result() as $pregunta){
    

                # code...
                
                    echo "

                        <div class='col-md-3 portfolio-item'>
                            
                            <h4>
                                <a>$pregunta->PREGUNTA </a>
                            </h4>
                            <p>$pregunta->RESPUESTA</p>
                        </div>

                        ";
                    if($contador==4){
                        echo "
                        </div>
                        <div class='row'>
                        ";
                        $contador=0;

                    }
                    $contador++;
                    
                }
            
            echo "
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




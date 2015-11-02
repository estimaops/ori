<div></div>

    <br>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>3 convenios ORI</title>

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
        <h3 class='page-header'>Listado de universidades dentro de convenio</h3>

        <!-- Projects Row -->
        <?php
      
            $contador=1;
            $imagen = 'http://cesf.cl/wordpress/wp-content/uploads/2014/01/becas.png';
            echo "<div class='row'> 
            <div class='col-md-3 portfolio-item'>
            </div>
            ";
            
            foreach($convenios -> result() as $convenio){
    

                # code...
                
                    echo "

                        <div class='col-md-3 portfolio-item'>
                            
                            <h5>
                                <h3>$convenio->NOMBRE</h3>
                                
                            </h5>
                            <p>$convenio->PAIS</p>
                            <p>$convenio->ENLACE</p>
                        </div>

                        ";
                    if($contador==2){
                        echo "
                        </div>
                        <div class='row'>
                            <div class='col-md-3 portfolio-item'>
                            </div>

                        ";
                        $contador=0;

                    }
                    $contador++;
                    
                }
            
            echo "
            </div>
            ";
        

        

        ?>
                <h1 class='page-header'></h1>

    </center>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>




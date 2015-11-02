
<div class="container marketing">
  <div class="row">
  	<hr class="featurette-divider">
  </div>
  <div class="row">
  	<h1>Reglamento Interno</h1>
  	<br>
  	<br>
    <div class="col-md-12 text-center">
    	<?php
      
            $contador=1;
	echo "<div class='row'> ";
            foreach($reglamento -> result() as $reglamento){


                    echo "
                    <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        
                       
                        <div class='panel-body'>
                            <div class='dataTable_wrapper'>
                                <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>  
                                    <tr>
                                    	<th>ID REGLAMENTO</th>
                                    	<th>DESCRIPCION</th>
                                    	<th>ENLACE</th>
                                    </tr>  
                                    <tbody>
                                        <tr class='odd gradeX'>
                                            <td>$reglamento->IDREGLAMENTO</td>
                                            <td>$reglamento->DESCRIPCION</td>
                                            <td>$reglamento->ENLACE</td>
                                        </tr>
                                       
                                    </tbody>
                                    </thead>
                                    </table>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
						<div class='col-md-3 portfolio-item'>
                        </div>

                        </div>
                        <div class='row'> 
                        ";
                
                }
            
            echo "
            </div>
            ";
        ?>
     
    </div>
  </div>
  <div class="col-md-4 text-center"></div>
    <div class="col-md-4 text-center">
  <input type="button" value="Editar"> <!--Agregar Acción Editar!-->
</div>
  <div class="col-md-4 text-center"></div>
  <hr class="featurette-divider">

</div><!-- /.container -->





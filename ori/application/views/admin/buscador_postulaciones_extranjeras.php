

<body>

    <br>
    <br>
    <br>
    <br>
    <br>
    <container>
	<script type="text/javascript" language="javascript" src="<?php echo base_url()?>sorprende/media/js/jquery.dataTables.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>sorprende/media/css/jquery.dataTables.css">
	
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		} );	
	</script>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10"> 
	<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Id Postulacion</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Sexo</th>
            <th>Correo</th>
            <th>País Origen</th>
            <th>Universidad</th>
            <th>Fecha</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>

    <?php
    $contador1=0;
    foreach($postulacion -> result() as $postu){
        echo "  
            <tr>
             <form method='post';>
            <td><input type='hidden' value='$postu->IDEX' name='valor_enviar'>
            $postu->IDEX</td>
             <td>$postu->NOMBRE</td>
             <td>$postu->APELLIDO</td>
             <td>$postu->SEXO</td>
             <td>$postu->CORREO</td>
             <td>$postu->PAIS</td>
             <td>$postu->UNIVERSIDAD</td>
             <td>$postu->FECHA</td>";
             echo"<td><center><pre><INPUT type='submit'  value='Eliminar' onclick=this.form.action='";?><?php echo base_url() ?><?echo"index.php/borrar/borrar_postulacion_extranjero'> <a href='$postu->POSTULACION'>Descargar</a></pre></center></td></pre></center> </td>

             </tr></form> "


             ;
             $contador1++;
    }
    echo "</tbody>
                  </table>
                ";                                    
            
            
     


        ?>
    </div>
</div>
    </container>
    </body>
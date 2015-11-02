
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
            <th>Correo</th>
            <th>Rut</th>
            <th>Universidad</th>
            <th>Carrera</th>
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
            <td><input type='hidden' value='$postu->IDALUMNO' name='valor_enviar'>
            $postu->IDALUMNO</td>
             <td>$postu->NOMBRE</td>
             <td>$postu->APELLIDO</td>
             <td>$postu->CORREO</td>
             <td>$postu->RUT</td>
             <td>$postu->Universidad_IDUNIVERSIDAD</td>
             <td>$postu->CARRERA</td>
             <td>$postu->FECHA</td>";
             echo"<td><center><pre><INPUT type='submit'  value='Eliminar' onclick=this.form.action='";?><?php echo base_url() ?><?echo"index.php/borrar/borrar_postulacion'> <a href='$postu->POSTULACION'>Descargar</a></pre></center></td></pre></center> </td>

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
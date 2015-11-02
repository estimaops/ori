<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <container>
	<script type="text/javascript" language="javascript" src="<?php echo base_url()?>sorprende/media/js/jquery.js"></script>
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
            <th>Id Normativa</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>

    <?php
    foreach($reglamento -> result() as $reglamentos){
        echo "  
            <tr>
             <form action='";?><?php echo base_url() ?><?echo"index.php/borrar/borrar_reglamento'; method='post';>
            <input type='hidden' value='$reglamentos->IDREGLAMENTO' name='valor_enviar'>
            
             <td>$reglamentos->IDREGLAMENTO</td>
             <td>$reglamentos->Nombre</td>
             <td>$reglamentos->DESCRIPCION</td>";
             echo"<td><INPUT type='submit'  value='Eliminar'></td>
             </tr></form> ";
    }
    echo "</tbody>
                  </table>
                ";                                    

        ?>
    </div>
</div>
    </container>
    </body>
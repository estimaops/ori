
<body>
    <?php 
$contador=0;
        foreach($noticias -> result() as $noticia){

        echo "
        <div id='test-form_noti$contador' class='white-popup mfp-hide '>

  <form action='";?><?php echo base_url() ?><?php echo "index.php/editar/editar_noticia' class='formoid-solid-blue' style='background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:800px;min-width:150px' method='post' onsubmit='return validarForm(this);'><div class='title'><h2>Crear Preguntas Frecuentes</h2></div>
                <div class='element-input'><label class='title'><span class='required'>*</span></label><div class='item-cont'><input class='large' type='text' name='titulo' value='$noticia->TITULO' required='required' placeholder='Título'/><span class='icon-place'></span></div></div>
                <div class='element-input'><label class='title'><span class='required'>*</span></label><div class='item-cont'><input class='large' type='text' name='subtitulo' value='$noticia->SUBTITULO' required='required' placeholder='Subtítulo'/><span class='icon-place'></span></div></div>
                <div class='element-textarea'><label class='title'><span class='required'>*</span></label><div class='item-cont'><textarea  name='cuerpo' cols='20' rows='5' required='required' placeholder='Cuerpo'>$noticia->CUERPO</textarea><span class='icon-place'></span></div></div>
                <div class='element-input'><label class='title'></label><div class='item-cont'><input class='large' type='text' name='enlace' value='$noticia->ENLACE'  placeholder='Enlace'/><span class='icon-place'></span></div></div>
                <input type='hidden' name='iddo' value='$noticia->IDNOTICIA' >

            <div class='submit'><input type='submit' value='Enviar'/></div></div></form>

        </div>
";

$contador++;

}

     ?>



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
            <th>Id Noticia</th>
            <th>Título</th>
            <th>Enlace</th>
            <th>Subtítulo</th>
            <th>Autor</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>

    <?php
    $contador1=0;
    foreach($noticias -> result() as $noticia){
        echo "  
            <tr>
             <form method='post';>
            <td><input type='hidden' value='$noticia->IDNOTICIA' name='valor_enviar'>$noticia->IDNOTICIA
            </td>
             <td>$noticia->TITULO</td>
             <td>$noticia->ENLACE</td>
             <td>$noticia->SUBTITULO</td>
             <td>$noticia->Usuario_USER</td>";
             echo"<td><center><pre><INPUT type='submit'  value='Eliminar' onclick=this.form.action='";?><?php echo base_url() ?><?echo"index.php/borrar/borrar_noticia'> <a class='popup-with-form' href='#test-form_noti$contador1'>EDITAR</a></pre></center></td>
             </tr></form> ";
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
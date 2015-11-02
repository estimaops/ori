
<body>
    <?php
    $contador=0;
    foreach($preguntas -> result() as $pregunta){
        echo"
        <div id='test-form_pregunta$contador' class='white-popup mfp-hide '>
  <form action='";?><?php echo base_url() ?><?php echo "index.php/editar/editar_pregunta' class='formoid-solid-blue' style='background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:800px;min-width:150px' method='post' onsubmit='return validarForm(this);'><div class='title'><h2>Crear Preguntas Frecuentes</h2></div>
  <div class='element-input'><label class='title'><span class='required'>*</span></label><div class='item-cont'><input class='large' type='text' name='pregunta_p' value='$pregunta->PREGUNTA' required='required' /><span class='icon-place'></span></div></div>
  <div class='element-textarea'><label class='title'><span class='required'>*</span></label><div class='item-cont'><textarea class='medium' name='respuesta_p'  cols='20' rows='5' required='required'  >$pregunta->RESPUESTA</textarea><span class='icon-place'></span></div></div>
  <input type='hidden' name='iddo' value='$pregunta->IDPREGUNTA' >
  <div class='element-separator'><hr><h3 class='section-break-title'></h3></div>
  <div class='submit'><input type='submit' value='Enviar'/></div></form>
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
            <th>ID pregunta</th>
            <th>PREGUNTA</th>
            <th>RESPUESTA</th>
            <th>Modificar</th>
            
        </tr>
    </thead>
    <tbody>

    <?php
    $contador1=0;
    foreach($preguntas -> result() as $pregunta){
        echo "


            <tr>
             <form action=''; method='post';>
            <td><input type='hidden' value='$pregunta->IDPREGUNTA' name='preg'>$pregunta->IDPREGUNTA
            </td>
             <td>$pregunta->PREGUNTA</td>
             <td>$pregunta->RESPUESTA</td>
             ";
             echo"<td><center><pre><INPUT type='submit'  value='Eliminar' onclick=this.form.action='";?><?php echo base_url() ?><?echo"index.php/borrar/eliminar_pregunta_carga'> <a class='popup-with-form' href='#test-form_pregunta$contador1'>EDITAR</a></pre></center></td>
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
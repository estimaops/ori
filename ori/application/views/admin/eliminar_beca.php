
<body>
    <script type="text/javascript" src="http://localhost/ori/formularios_estilos/noticias_prueba_files/formoid1/jquery.min.js"></script>

    <?php
    $contador=0;

    foreach($becas -> result() as $beca){
 
        echo"
<div id='test-form_beca$contador' class='white-popup mfp-hide '>

        
  <form action='";?><?php echo base_url() ?><?php echo "index.php/editar/editar_beca' class='formoid-solid-blue' style='background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:800px;min-width:150px' method='post' onsubmit='return validarForm(this);'><div class='title'><h2>Crear Preguntas Frecuentes</h2></div>
        <div class='element-input'><label class='title'><span class='required'>*</span></label><div class='item-cont'><input class='large' type='text' name='nombre_p' value='$beca->NOMBRE' required='equired' placeholder='Nombre'/><span class='icon-place'></span></div></div>
        <div class='element-input'><label class='title'><span class='required'>*</span></label><div class='item-cont'><input class='large' type='text' name='beneficio_p' value='$beca->BENEFICIO' required='required' placeholder='Beneficio'/><span class='icon-place'><span class='icon-place'></span></span></div></div>
        <div class='element-textarea'><label class='title'><span class='required'>*</span></label><div class='item-cont'><textarea name='descripcion_p' cols='20' rows='5' required='required' placeholder='Descripcion'>$beca->DESCRIPCION</textarea></div></div>
          <input type='hidden' name='iddo' value='$beca->IDBECA' >

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
            <th>ID BECA</th>
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <td>BENEFICIO</td>
            <th>Modificar</th>
            
        </tr>
    </thead>
    <tbody>

    <?php
    $contador1=0;
    foreach($becas -> result() as $beca){
        echo "


            <tr>
             <form action=''; method='post';>
            <td><input type='hidden' value='$beca->IDBECA' name='bec'>$beca->IDBECA
            </td>
             <td>$beca->NOMBRE</td>
             <td>$beca->DESCRIPCION</td>
             <td>$beca->BENEFICIO</td>
             
             ";
             echo"<td><center><pre><INPUT type='submit'  value='Eliminar' onclick=this.form.action='";?><?php echo base_url() ?><?echo"index.php/borrar/eliminar_beca_carga'> <a class='popup-with-form' href='#test-form_beca$contador1'>EDITAR</a></pre></center></td>
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
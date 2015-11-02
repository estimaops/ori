<br>
<br>
<br>
<br>
<br>

<div class='row'>
    <div class="col-md-2">
</div>
  <div class="col-md-8">



  <form action="<?php echo base_url() ?>index.php/crear/crear_pregunta_carga" class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:800px;min-width:150px" method="post" onsubmit="return validarForm(this);"><div class="title"><h2>Crear Preguntas Frecuentes</h2></div>
    <div class="element-input"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="pregunta" required="required" placeholder="Pregunta"/><span class="icon-place"></span></div></div>
    <div class="element-textarea"><label class="title"><span class="required">*</span></label><div class="item-cont"><textarea class="medium" name="respuesta" cols="20" rows="5" required="required" placeholder="Respuesta"></textarea><span class="icon-place"></span></div></div>
    <div class="element-separator"><hr><h3 class="section-break-title"></h3></div>
    <div class="submit"><input type="submit" value="Enviar"/></div>
  </form>
</div>
</div>
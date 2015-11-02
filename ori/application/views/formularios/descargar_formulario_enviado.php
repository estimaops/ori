<script language="JavaScript">
     function premibottone() {
        nombre = document.getElementById("nombre").value;
        if(nombre!=""&&apellido!=""&&rut!=""&&userfile!=""&&destino!=""&&carrera!=""){
       alert("Envio de postulación: Exitoso!");
   }
   else{
    alert("Error Campos vacios");
   }
  }
 </script>

 

 <?php
            $imagen = 'http://cesf.cl/wordpress/wp-content/uploads/2014/01/becas.png';
            echo "<div class='row'> 
            <div class='col-md-3 portfolio-item'>
            </div>
            ";
            

    

                # code...
                
                    echo "

                        <div class='col-md-3 portfolio-item'>
                            
                            <h5>
                                <h3>FORMULARIO DE POSTULACIÓN</h3>
                                
                            </h5>";?>
                            
                             <a href="<?php echo base_url() ?>doc/formulario_ucm.docx" download="<?php echo base_url() ?>doc/formulario_ucm.docx">Descargar Formulario</a>
                            <p>Para poder postular necesitas rellenar el formulario de postulación. Luego ello rellena tus datos aquí a la derecha y sube tu postulación<p>
                        </div>

                        <div class='col-md-3 portfolio-item'>
                            <center><h2><a>Formulario: Envíado Exitosamente</a></h2></center>
                        </div>
				</div>
            
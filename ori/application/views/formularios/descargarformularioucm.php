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
                        	<?echo form_open_multipart('welcome/upload_formulario')?> 
                            <table >
                                <tr>
                                    <td>
                                        Nombre Postulante : 
                                    </td>
                                    <td>
                        	<center><p> <input type="text" class="required" name="nombre" required></p></center>
                        </td>
                        </tr>

                        <tr>
                            <td> Apellidos Postulante: </td>
                            <td><center><p> <input type="text" class="text_input" name="apellido" required></p></center></td>
                        </tr>


                        <tr>
                            <td> Rut Postulante : </td>
                            <td><center><p> <input type="number" name="rut" required></p></center></td>
                        </tr>


                        <tr>
                            <td> Correo Postulante : </td>
                            <td><center><p> <input type="email" name="correo" required></p></center></td>
                        </tr>




                        <tr>
                            <td> Carrera Postulante : </td>
                            <td><center><p> 



                        <select name="carrera" id="carrera" style="width:150px" required>
                            <option value=''>Seleccione</option>
                            <option value="Agronomía">Agronomía</option>
                            <option value="Ingeniería Civil Informática">Ingeniería Civil Informática</option>
                            <option value="Ingeniería en Construcción">Ingeniería en Construcción</option>
                            <option value="Ingeniería en Biotecnología">Ingeniería en Biotecnología</option>
                            <option value="Ingeniería Comercial">Ingeniería Comercial</option>
                            <option value="Auditoría">Auditoría</option>
                            <option value="Enfermería">Enfermería</option>
                            <option value="Kinesiología">Kinesiología</option>
                            <option value="Sociología">Sociología</option>
                            <option value="Psicología">Psicología</option>
                            <option value="Medicina">Medicina</option>
                            <option value="Nutrición y dietética">Nutrición y dietética</option>
                            <option value="Educación Parvularia">Educación Parvularia</option>
                            <option value="Ped. Educación Física">Ped. Educación Física</option>
                            <option value="Ped. Inglés">Ped. Inglés</option>
                            <option value="Ped. Ciencias">Ped. Ciencias</option>
                            <option value="Ped. Ed. Básica">Ped. Ed. Básica</option>
                            <option value="Ped. Ed. Básica Mención">Ped. Ed. Básica Mención</option>
                            <option value="Ped. Religión y filosofía">Ped. Religión y filosofía</option>
                            <option value="Ped. Matemáticas y Computación">Ped. Matemáticas y Computación</option>
                            <option value="Ped. Lengua Castellana y comunicación">Ped. Lengua Castellana y comunicación</option>
                            <option value="Trabajo Social">Trabajo Social</option>
                        </select>
                        </p></center></td>
                        </tr>






                      <!-- AQUIIII TIENES QUE HACER LA OPCIÖN ENTRE UNIVERSIDADES" -->  



                       <tr>
                            <td> Destino Postulante : </td>
                            <td><center><p> 
                                 <select  name='destino' required>
                            <?php  

                            foreach ($convenios ->result() as $convenio) {
                               echo"
                               
                                <option value='$convenio->IDUNIVERSIDAD'>$convenio->NOMBRE</option>";
                            }?>

                                </p></center></td>
                            </tr>
                            





                      
                      



                        </table>
                        	<br>
                        	<a><input type="file" class="file_input" name="userfile" required/></a>

                        	<br>
                        	<center><p><input type="submit" value="Enviar" name="enviar" ></p></center>
                         

                        </div>
				</div>
            
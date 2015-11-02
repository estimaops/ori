<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Modelo_model extends CI_Model
{
	
	function __construct()
	{
			parent::__construct();
			$this->load->database();
	}



/*------------------------------------------------------------------------------------/
							MODELOS ENLISTAR - MOSTRAR
-------------------------------------------------------------------------------------*/

	public function listar_noticias(){
			return $this->db->get('Noticias');
	}
	public function listar_becas(){
			return $this->db->get('Becas');
	}
	public function listar_preguntas(){
			return $this->db->get('Preguntas_Frecuentes');
	}
	public function listar_convenios(){
			return $this->db->get('Universidad');
	}
	public function listar_reglamento(){
			return $this->db->get('Reglamento');
	}

	public function listar_postulaciones_alumnos(){
		return $this->db->get('Alumno');
	}

	public function listar_postulaciones_alumnos_extranjeros(){
		return $this->db->get('Postulacion_Extranjero');
	}

/*------------------------------------------------------------------------------------/
							MODELOS INSERTAR - CREAR
-------------------------------------------------------------------------------------*/

	public function insertar_convenios($data){
		$this->db->insert('Universidad',array(
			'NOMBRE'=>$data['nombre_universidad'], 
			'PAIS'=>$data['pais_universidad'],
			'CIUDAD'=>$data['facultad_universidad'],
			'ENLACE'=>$data['enlace_universidad']));
	}
	public function insertar_pregunta($data){
		$this->db->insert('Preguntas_Frecuentes',array(
			'PREGUNTA'=>$data['pregunt'],
			'RESPUESTA'=>$data['respuest'],
			'Usuario_USER'=>'1'
			));
	}
	public function insertar_beca($data){
		$this->db->insert('Becas',array(
		'NOMBRE'=>$data['nombreb'],
		'DESCRIPCION'=>$data['descripcionb'],
		'BENEFICIO'=>$data['beneficiob'],
		'imagen'=>$data['imagenn']
		));
	}

	public function insertar_reglamento($data){
    	$this->db->insert('Reglamento',array(
    		'Nombre' =>$data['nombrer'],
    		'DESCRIPCION' =>$data['descripcionr'],
    		'DOCUMENTO'=>$data['docs'],
    		'Usuario_USER'=>'1'
			));
    }


    public function insertar_postulacion_alumno_extranjero($data){
		$this->db->insert('Postulacion_Extranjero',array(
		'NOMBRE'=>$data['nombrep'],
		'APELLIDO'=>$data['apellidop'],
		'SEXO'=>$data['sexop'],
		'CORREO'=>$data['correop'],
		'UNIVERSIDAD'=>$data['universidadp'],
		'PAIS'=>$data['paisp'],
		'FECHA'=>$data['fechap'],
		'POSTULACION'=>$data['formulariop'],
		'DOCUMENTOANEXO'=>$data['']
		));    
	}


	public function insertar_noticia($data){
		$this->db->insert('Noticias',array(
		'TITULO'=>$data['titulon'],
		'SUBTITULO'=>$data['subtitulon'],
		'CUERPO'=>$data['cuerpon'],
		'IMAGEN'=>$data['imagenn'],
		'ENLACE'=>$data['enlacen'],
		'Usuario_USER'=>'1'
		));
	}

	public function insertar_postulacion_alumno($data){
		$this->db->insert('Alumno',array(
		'NOMBRE'=>$data['nombrep'],
		'APELLIDO'=>$data['apellidop'],
		'RUT'=>$data['rutp'],
		'CORREO'=>$data['correop'],
		'CARRERA'=>$data['carrerap'],
		'DESTINO'=>'',
		'Universidad_IDUNIVERSIDAD'=>$data['destinop'],
		'POSTULACION'=>$data['formulariop'],
		'FECHA'=>$data['fechap']
		));     
	}



/*------------------------------------------------------------------------------------/
							MODELOS BORRAR - ELIMINAR
-------------------------------------------------------------------------------------*/


	public function eliminar_pregunta($data)
	{
		$this->db->where('IDPREGUNTA',$data['b_preg']);
		return $this->db->delete('Preguntas_Frecuentes');
	}
	public function eliminar_beca($data)
	{
		$this->db->where('IDBECA',$data['b_beca']);
		return $this->db->delete('Becas');
	}

	public function eliminar_reglamento($id){
		$this->db->where('IDREGLAMENTO',$id['idd']);
		return $this->db->delete('Reglamento');
	}


	public function eliminar_convenios($id){
		$this->db->where('IDUNIVERSIDAD',$id['idd']);
		return $this->db->delete('Universidad');
	}


	public function eliminar_noticias($id){
		$this->db->where('IDNOTICIA',$id['idd']);
		return $this->db->delete('Noticias');
	}

	
	public function eliminar_postulacion_alumno($id){
		$this->db->where('IDALUMNO',$id['idd']);
		return $this->db->delete('Alumno');
	}



		public function eliminar_postulacion_alumno_extranjero($id){
		$this->db->where('IDEX',$id['idd']);
		return $this->db->delete('Postulacion_Extranjero');
	}


/*------------------------------------------------------------------------------------/
							MODELOS CONSULTA 
-------------------------------------------------------------------------------------*/


	public function obtener_convenio($id)
	{
		return $this->db->get_where('Universidad',array('IDUNIVERSIDAD ='=> '$id'));
	}


/*------------------------------------------------------------------------------------/
							MODELOS EDITAR - ACTUALIZAR 
-------------------------------------------------------------------------------------*/

	public function editar_conveniio($data) {
		$this->db->where('IDUNIVERSIDAD', $data['id']);
        return $this->db->update('Universidad', array(
        	'NOMBRE'=>$data['nombreu'],
        	'CIUDAD' =>$data['facultadu'],
        	'PAIS' =>$data['paisu'],
        	'ENLACE'=>$data['enlaceu']
        	));
    }
    	public function editar_pregunta($data) {
		$this->db->where('IDPREGUNTA', $data['id']);
        return $this->db->update('Preguntas_Frecuentes', array(
        	'PREGUNTA'=>$data['preguntau'],
        	'RESPUESTA' =>$data['respuestau']
        	));
    }
    public function editar_beca($data) {
		$this->db->where('IDBECA', $data['id']);
        return $this->db->update('Becas', array(
        	'NOMBRE'=>$data['nombreu'],
        	'BENEFICIO' =>$data['beneficiou'],
        	'DESCRIPCION' =>$data['descripcionu']

        	));
    }
    public function editar_noti($data) {
		$this->db->where('IDNOTICIA', $data['id']);
        return $this->db->update('Noticias', array(
        	'TITULO'=>$data['titulo_t'],
        	'SUBTITULO' =>$data['subtitulo_t'],
        	'CUERPO' =>$data['cuerpo_t'],
        	'ENLACE' =>$data['enlace_t']


        	));
    } 
    

	



}


?>
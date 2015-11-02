<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
			parent::__construct();
			$this->load->model('modelo_model');
			$this->load->model('modelo_access');
	}


/*------------------------------------------------------------------------------------/
								LOGIN USUARIO
-------------------------------------------------------------------------------------*/
	
	
	public function salida(){				//salida o cierre sesión
		$this->session->sess_destroy();
		redirect('welcome/index');
	}

	public function log_a_d_m_i_n_unique(){ // Ingreso de usuario

		if (isset($_POST['password'])) {
			if($this->modelo_access->login($_POST['login'],$_POST['password'])){
				
				redirect('welcome/indexadmin');
				
			}else{
				redirect('welcome/log_a_d_m_i_n_unique');
			}
		}
		$this->load->view('login_admin_unique/index2');

	}


/*------------------------------------------------------------------------------------/
								MENÚ INICIOS
-------------------------------------------------------------------------------------*/

	public function indexadmin(){    //menú inicio administrador
		if ($this->session->userdata('logged_in')) {
				$this->load->view('plantilla_pagina/head');
				$this->load->view('plantilla_pagina/animaciones');
				$this->load->view('admin/barra_admin');
				$this->load->view('admin/inicio_admin');
				$this->load->view('plantilla_pagina/footer');
			# code...
		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}

	}
	
	
	public function index()		 // menú inicio visitante	
	{
		$listarnoticias = $this->modelo_model->listar_noticias();
		$datos['noticias'] = $listarnoticias;
		/**$this->load->view('boostrap');**/
		$this->load->view('plantilla_pagina/head');
		$this->load->view('plantilla_pagina/barra');
		$this->load->view('plantilla_pagina/carrusel');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('plantilla_pagina/inicio',$datos);
		$this->load->view('plantilla_pagina/contador');
		$this->load->view('plantilla_pagina/footer');
	

	}


/*------------------------------------------------------------------------------------/
								FORMULARIOS LLAMADOS
-------------------------------------------------------------------------------------*/

	public function forma_ucm() // formulario UCM
	{
		$listauniversidad = $this->modelo_model->listar_convenios();
		$datos['convenios'] = $listauniversidad;
		$this->load->view('plantilla_pagina/head');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('plantilla_pagina/barra');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('plantilla_pagina/carrusel');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('formularios/descargarformularioucm', $datos);
		$this->load->view('plantilla_pagina/footer');
		

	}

	public function forma_ucm_enviado() // formulario UCM
	{
		
		$this->load->view('plantilla_pagina/head');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('plantilla_pagina/barra');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('plantilla_pagina/carrusel');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('formularios/descargar_formulario_enviado');
		$this->load->view('plantilla_pagina/footer');
		

	}

	public function forma_extranjero()  // llama a formulario extranjero
	{
		$this->load->view('plantilla_pagina/head');
		$this->load->view('plantilla_pagina/barra');
		$this->load->view('plantilla_pagina/carrusel');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('formularios/descargarformularioextranjero');
		$this->load->view('plantilla_pagina/footer');
		

	}

	public function forma_extranjero_enviado()  // llama a formulario extranjero
	{
		$this->load->view('plantilla_pagina/head');
		$this->load->view('plantilla_pagina/barra');
		$this->load->view('plantilla_pagina/carrusel');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('formularios/descargar_formulario_extranjero_enviado');
		$this->load->view('plantilla_pagina/footer');
		

	}
	

	public function error_upload_formulario() //en caso de que la carga de archivo esté errónea
	{
		$this->load->view('plantilla_pagina/head');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('plantilla_pagina/barra');
		$this->load->view('plantilla_pagina/error_upload');	
		$this->load->view('plantilla_pagina/footer');
	}

/*------------------------------------------------------------------------------------/
								SUBIR FORMULARIO UCM
-------------------------------------------------------------------------------------*/


	public function upload_formulario()    // sube formulario y campos de postulación UCM
	{
		$config['upload_path']="./formularios_enviados";
		$config['allowed_types']='pdf|PDF|doc|DOC|docx|DOCX|xlsx|xlsm|xlsb|xltx|xltm|xls|xlt|xls|xml|xlam|xla|xlw|dotx|dot|zip|rar|ppt|pptx|jpge|jpg|png|gif';
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload()){
			$error=array('error'=>$this->upload->display_errors());
			$this->load->view('plantilla_pagina/head');
			$this->load->view('plantilla_pagina/animaciones');
			$this->load->view('plantilla_pagina/barra');
			$this->load->view('plantilla_pagina/error_upload');	
			$this->load->view('plantilla_pagina/footer');
		}
		else{
			$file_data=$this->upload->data();
			$dato['formulario'] = base_url().'formularios_enviados/'.$file_data['file_name'];

			$data = array(
			'nombrep' => $this->input->post('nombre'),
			'apellidop' =>$this->input->post('apellido'),
			'rutp' =>$this->input->post('rut'),
			'correop' =>$this->input->post('correo'),
			'carrerap' => $this->input->post('carrera'),
			'destinop' =>$this->input->post('destino'),
			'universidadp' =>$this->input->post('universidad'),
			'fechap'=>date("Y-m-d H:i:s")
			);
			$data['formulariop']=$dato['formulario'];
			$this->modelo_model->insertar_postulacion_alumno($data);
			redirect('welcome/forma_ucm_enviado');
		}
	}


/*------------------------------------------------------------------------------------/
								SUBIR FORMULARIO EXTRANJERO
-------------------------------------------------------------------------------------*/


	public function upload_formulario_extranjero()   //función que sube formularios extranjeros
	{
		$config['upload_path']="./formularios_enviados_extranjeros";
		$config['allowed_types']='pdf|PDF|doc|DOC|docx|DOCX|xlsx|xlsm|xlsb|xltx|xltm|xls|xlt|xls|xml|xlam|xla|xlw|dotx|dot|zip|rar|ppt|pptx|jpge|jpg|png|gif';
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload()){
			$error=array('error'=>$this->upload->display_errors());
			$this->load->view('plantilla_pagina/head');
			$this->load->view('plantilla_pagina/animaciones');
			$this->load->view('plantilla_pagina/barra');
			$this->load->view('plantilla_pagina/error_upload');	
			$this->load->view('plantilla_pagina/footer');
		}
		else{
			$file_data=$this->upload->data();
			$dato['formulario'] = base_url().'formularios_enviados_extranjeros/'.$file_data['file_name'];

			$data = array(
			'nombrep' => $this->input->post('nombre'),
			'apellidop' =>$this->input->post('apellido'),
			'sexop'=>$this->input->post('sexo'),
			'paisp' =>$this->input->post('pais'),
			'universidadp' => $this->input->post('universidad'),
			'correop' =>$this->input->post('correo'),
			'fechap'=>date("Y-m-d H:i:s"),
			'anexo'=>'-'
			);
			$data['formulariop']=$dato['formulario'];
			$this->modelo_model->insertar_postulacion_alumno_extranjero($data);
			redirect('welcome/forma_extranjero_enviado');
		}
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
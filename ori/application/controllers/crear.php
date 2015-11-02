<?php 
Class Crear Extends CI_Controller{

	function __construct()
	{
			parent::__construct();
			$this->load->model('modelo_model');
			$this->load->model('modelo_access');
	}

/*------------------------------------------------------------------------------------/
								CREAR REGLAMENTOS
-------------------------------------------------------------------------------------*/


	public function crear_reglamento_vista()	//llama a la vista de creación de reglamentos
	{
		if ($this->session->userdata('logged_in')) {

			$this->load->view('plantilla_pagina/head');
			$this->load->view('plantilla_pagina/animaciones');
			$this->load->view('admin/barra_admin');
			$this->load->view('admin/crear_reglamento');
			$this->load->view('plantilla_pagina/footer');

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}
		
	}

	public function crear_reglamentos()		// Función que crea reglamentos y sube documentos
	{
		if ($this->session->userdata('logged_in')) {

		$config['upload_path']="./doc";
		$config['allowed_types']='pdf|PDF|doc|DOC|docx|DOCX|xlsx|xlsm|xlsb|xltx|xltm|xls|xlt|xls|xml|xlam|xla|xlw|dotx|dot';
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload()){
			$error=array('error'=>$this->upload->display_errors());
			$this->load->view("errores/error_404",$error);	
		}
		else{
			$file_data=$this->upload->data();
			$dato['doc'] = base_url().'doc/'.$file_data['file_name'];
			$data = array(
			'nombrer' => $this->input->post('nombre_r'),
			'descripcionr' => $this->input->post('descripcion_r')
			);
			$data['docs']=$dato['doc'];
			$this->modelo_model->insertar_reglamento($data);
			redirect('crear/crear_reglamento_vista');
		}

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}
	}


/*------------------------------------------------------------------------------------/
								CREAR CONVENIO
-------------------------------------------------------------------------------------*/


	public function crear_convenio_universidad(){	//función que llama a la vista de creación de convenios
		
		if ($this->session->userdata('logged_in')) {

			$this->load->view('plantilla_pagina/head');
			$this->load->view('plantilla_pagina/animaciones');
			$this->load->view('admin/barra_admin');
			$this->load->view('admin/crear_convenio');
			$this->load->view('plantilla_pagina/footer');

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}
	}


	public function crear_convenio_universidad_carga(){ // función que crea convenios
		if ($this->session->userdata('logged_in')) {

		$data = array(
		'nombre_universidad'=>$this->input->post('nombre_u'),
		'pais_universidad'=>$this->input->post('pais_u'),
		'facultad_universidad'=>$this->input->post('facultad_u'),
		'enlace_universidad'=>$this->input->post('enlace_u'));

		$this->modelo_model->insertar_convenios($data);
		redirect('crear/crear_convenio_universidad');

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}

	}


/*------------------------------------------------------------------------------------/
								CREAR PREGUNTA
-------------------------------------------------------------------------------------*/

	public function crear_pregunta(){		//llama a la vista de crear preguntas
		
		if ($this->session->userdata('logged_in')) {

		$this->load->view('plantilla_pagina/head');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('admin/barra_admin');
		$this->load->view('admin/crear_preguntas_frecuentes');
		$this->load->view('plantilla_pagina/footer');

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}

	}

		public function crear_pregunta_carga(){  //función que crea preguntas 
		
		if ($this->session->userdata('logged_in')) {

		$data = array(
		'pregunt'=>$this->input->post('pregunta'),
		'respuest'=>$this->input->post('respuesta'));
		$this->modelo_model->insertar_pregunta($data);
		redirect('crear/crear_pregunta');

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}

		
	}

/*------------------------------------------------------------------------------------/
								CREAR BECA
-------------------------------------------------------------------------------------*/



	public function crear_beca(){		//llama a la vista de crear becas
		if ($this->session->userdata('logged_in')) {

		$this->load->view('plantilla_pagina/head');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('admin/barra_admin');
		$this->load->view('admin/crear_becas');
		$this->load->view('plantilla_pagina/footer');

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}
	}

	


	public function crear_beca_carga(){ //crea becas con imagenes

		if ($this->session->userdata('logged_in')) {

		$config['upload_path']="./images";
		$config['allowed_types']='jpg|jpge|gif|png|JPG|JPGE|PNG|GIF';
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload()){
			$error=array('error'=>$this->upload->display_errors());
			$this->load->view("errores/error_404",$error);	
		}
		else{
			$file_data=$this->upload->data();
			$dato['img'] = base_url().'images/'.$file_data['file_name'];
			$data = array(
			'nombreb' => $this->input->post('nombre_b'),
			'beneficiob' => $this->input->post('beneficio_b'),
			'descripcionb' => $this->input->post('descripcion_b')
			);
			$data['imagenn']=$dato['img'];
			$this->modelo_model->insertar_beca($data);
			redirect('crear/crear_beca');
		}

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}
	}

/*------------------------------------------------------------------------------------/
								CREAR NOTICIAS
-------------------------------------------------------------------------------------*/


	public function crear_noticia()		//llama a la vista de crear noticias
	{
		if ($this->session->userdata('logged_in')) {

		$this->load->view('plantilla_pagina/head');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('admin/barra_admin');
		$this->load->view('admin/crear_noticia');
		$this->load->view('plantilla_pagina/footer');

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}
	}

	public function upload(){		//sube noticias con imagenes... las crea
		
		if ($this->session->userdata('logged_in')) {

		$config['upload_path']="./images";
		$config['allowed_types']='jpg|jpge|gif|png|JPG|JPGE|PNG|GIF|JPEG|jpeg';
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload()){
			$error=array('error'=>$this->upload->display_errors());
			$this->load->view("errores/error_404",$error);	
		}
		else{
			$file_data=$this->upload->data();
			$dato['img'] = base_url().'images/'.$file_data['file_name'];
			$data = array(
			'titulon' => $this->input->post('titulo_n'),
			'subtitulon' => $this->input->post('subtitulo_n'),
			'enlacen' => $this->input->post('enlace_n'),
			'cuerpon' =>$this->input->post('cuerpo_n')
			);
			$data['imagenn']=$dato['img'];
			$this->modelo_model->insertar_noticia($data);
			redirect('crear/crear_noticia');
		}

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}
	}


}
 ?>
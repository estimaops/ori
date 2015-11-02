<?php 
Class Editar Extends CI_Controller{

	function __construct()
	{
			parent::__construct();
			$this->load->model('modelo_model');
			$this->load->model('modelo_access');
	}

/*------------------------------------------------------------------------------------/
								EDITAR PREGUNTA
-------------------------------------------------------------------------------------*/

	public function editar_pregunta()			//edita preguntas 
	{
		if ($this->session->userdata('logged_in')) {

		$data = array(
			'id'=>$this->input->post('iddo'),
			'preguntau' => $this->input->post('pregunta_p'),
			'respuestau'=> $this->input->post('respuesta_p')
			);
		$this->modelo_model->editar_pregunta($data);
		redirect('borrar/eliminar_pregunta');

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}
	}

/*------------------------------------------------------------------------------------/
								EDITAR BECA
-------------------------------------------------------------------------------------*/

	
	public function editar_beca()			//edita becas
	{
		if ($this->session->userdata('logged_in')) {

		$data = array(
			'id'=>$this->input->post('iddo'),
			'nombreu' => $this->input->post('nombre_p'),
			'beneficiou'=> $this->input->post('beneficio_p'),
			'descripcionu'=> $this->input->post('descripcion_p')

			);
		$this->modelo_model->editar_beca($data);
		redirect('borrar/eliminar_beca');

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}
	}

/*------------------------------------------------------------------------------------/
								EDITAR NOTICIA
-------------------------------------------------------------------------------------*/

	public function editar_noticia()		//edita noticias
	{
		if ($this->session->userdata('logged_in')) {

		$data = array(
			'id'=>$this->input->post('iddo'),
			'titulo_t' => $this->input->post('titulo'),
			'subtitulo_t'=> $this->input->post('subtitulo'),
			'cuerpo_t'=> $this->input->post('cuerpo'),
			'enlace_t'=> $this->input->post('enlace')

			);
		$this->modelo_model->editar_noti($data);
		redirect('borrar/borrar_noticia_mod');

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}

	}

/*------------------------------------------------------------------------------------/
								EDITAR CONVENIO
-------------------------------------------------------------------------------------*/


	public function editar_convenio_edit()		//edita convenios
	{
		if ($this->session->userdata('logged_in')) {

		$data = array(
			'id'=>$this->input->post('iddo'),
			'nombreu' => $this->input->post('nombre_u'),
			'facultadu'=> $this->input->post('facultad_u'),
			'paisu'=> $this->input->post('pais_u'),
			'enlaceu'=> $this->input->post('enlace_u')
			);
		$this->modelo_model->editar_conveniio($data);
		redirect('borrar/borrar_convenio_mod');

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}
	}



}
 ?>
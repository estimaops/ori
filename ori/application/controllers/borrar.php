<?php 
Class Borrar Extends CI_Controller{

	function __construct()
	{
			parent::__construct();
			$this->load->model('modelo_model');
			$this->load->model('modelo_access');
	}

/*------------------------------------------------------------------------------------/
								BORRAR REGLAMENTOS
-------------------------------------------------------------------------------------*/

	public function borrar_reglameto_vista()	//llama a la vista de buscador de reglamentos 
	{
		if ($this->session->userdata('logged_in')) {

			$listareglamento = $this->modelo_model->listar_reglamento();
			$datos['reglamento'] = $listareglamento;
			$this->load->view('plantilla_pagina/head');
			$this->load->view('plantilla_pagina/animaciones');
			$this->load->view('admin/barra_admin');
			$this->load->view('admin/buscador_reglamento',$datos);	
			$this->load->view('plantilla_pagina/footer');

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}
	}

	public function borrar_reglamento(){		//Elimina reglamentos por código
		
		if ($this->session->userdata('logged_in')) {

			$id2 = array('idd' => $this->input->post('valor_enviar'));
			$this->modelo_model->eliminar_reglamento($id2);
			redirect('borrar/borrar_reglameto_vista');

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}
	}

/*------------------------------------------------------------------------------------/
								BORRAR PREGUNTAS
-------------------------------------------------------------------------------------*/


	public function eliminar_pregunta(){		//llama a la vista que busca preguntas
		
		if ($this->session->userdata('logged_in')) {

		$listaconvenio = $this->modelo_model->listar_preguntas();
		$datos['preguntas'] = $listaconvenio;
		$this->load->view('plantilla_pagina/head');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('admin/barra_admin');
		$this->load->view('admin/eliminar_pregunta',$datos);	
		$this->load->view('plantilla_pagina/footer');

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}
	}
	
	public function eliminar_pregunta_carga(){		//elimina las preguntas por código
		
		if ($this->session->userdata('logged_in')) {

			$data = array('b_preg' => $this->input->post('preg'));
			$delete = $this->modelo_model->eliminar_pregunta($data);

			redirect('borrar/eliminar_pregunta');

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}
	}

/*------------------------------------------------------------------------------------/
								BORRAR BECAS
-------------------------------------------------------------------------------------*/


	public function eliminar_beca(){			//llama a la vista que busca becas
		
		if ($this->session->userdata('logged_in')) {

		$listabecas = $this->modelo_model->listar_becas();
		$datos['becas'] = $listabecas;
		$this->load->view('plantilla_pagina/head');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('admin/barra_admin');
		$this->load->view('admin/eliminar_beca',$datos);
		$this->load->view('plantilla_pagina/footer');

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}

	}
	
	public function eliminar_beca_carga(){			// elimina la beca por código
		if ($this->session->userdata('logged_in')) {

		$data = array('b_beca' => $this->input->post('bec'));
		$delete = $this->modelo_model->eliminar_beca($data);

		redirect('borrar/eliminar_beca');

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}

	}

/*------------------------------------------------------------------------------------/
								BORRAR CONVENIOS
-------------------------------------------------------------------------------------*/


	public function borrar_convenio_mod()			//llama a la vista que busca convenios
	{
		if ($this->session->userdata('logged_in')) {

		$listaconvenio = $this->modelo_model->listar_convenios();
		$datos['convenios'] = $listaconvenio;
		$this->load->view('plantilla_pagina/head');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('admin/barra_admin');
		$this->load->view('admin/buscador_convenios',$datos);	
		$this->load->view('plantilla_pagina/footer');

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}

	}
	
	public  function borrar_convenio()				//elimina el convenio por código
	{
		if ($this->session->userdata('logged_in')) {

		$id2 = array('idd' => $this->input->post('valor_enviar'));
		$this->modelo_model->eliminar_convenios($id2);
		redirect('borrar/borrar_convenio_mod');

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}

	}

/*------------------------------------------------------------------------------------/
								BORRAR NOTICIAS
-------------------------------------------------------------------------------------*/


	public function borrar_noticia_mod()			//llama a la vista que busca las noticias
	{
		if ($this->session->userdata('logged_in')) {		

		$listanoticias = $this->modelo_model->listar_noticias();
		$datos['noticias'] = $listanoticias;
		$this->load->view('plantilla_pagina/head');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('admin/barra_admin');
		$this->load->view('admin/buscador_noticias',$datos);	
		$this->load->view('plantilla_pagina/footer');

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}

	}

	public  function borrar_noticia()			//elimina las noticias por código
	{
		if ($this->session->userdata('logged_in')) {

		$id2 = array('idd' => $this->input->post('valor_enviar'));
		$this->modelo_model->eliminar_noticias($id2);
		redirect('borrar/borrar_noticia_mod');

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}

	}


/*------------------------------------------------------------------------------------/
							BORRAR POSTULACIONES UCM
-------------------------------------------------------------------------------------*/


	public function admin_postulaciones(){			//llama a la vista que busca las postulaciones UCM
		if ($this->session->userdata('logged_in')) {
		$listapostulaciones = $this->modelo_model->listar_postulaciones_alumnos();
		$datos['postulacion'] = $listapostulaciones;
		$this->load->view('plantilla_pagina/head');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('admin/barra_admin');
		$this->load->view('admin/buscador_postulaciones',$datos);	
		$this->load->view('plantilla_pagina/footer');
	}
	else{
		redirect('welcome/log_a_d_m_i_n_unique');	
	}
	} 

	public function borrar_postulacion(){		//elimina las postulaciones por código
		
		if ($this->session->userdata('logged_in')) {

		$id2 = array('idd' => $this->input->post('valor_enviar'));
		$this->modelo_model->eliminar_postulacion_alumno($id2);
		redirect('borrar/admin_postulaciones');

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}	
	}

/*------------------------------------------------------------------------------------/
						BORRAR POSTULACIONES EXTRANJEROS
-------------------------------------------------------------------------------------*/

	public function admin_postulaciones_extranjeras(){  	//llama a la vista que busca postulaciones extranjeras
		if ($this->session->userdata('logged_in')) {
		$listapostulaciones = $this->modelo_model->listar_postulaciones_alumnos_extranjeros();
		$datos['postulacion'] = $listapostulaciones;
		$this->load->view('plantilla_pagina/head');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('admin/barra_admin');
		$this->load->view('admin/buscador_postulaciones_extranjeras',$datos);	
		$this->load->view('plantilla_pagina/footer');
		}
		else{
			redirect('welcome/log_a_d_m_i_n_unique');	
		}

	} 

	public function borrar_postulacion_extranjero(){	//elimina las postulaciones extranjeras por código
		
		if ($this->session->userdata('logged_in')) {

		$id2 = array('idd' => $this->input->post('valor_enviar'));
		$this->modelo_model->eliminar_postulacion_alumno_extranjero($id2);
		redirect('borrar/admin_postulaciones_extranjeras');

		}else{
			redirect('welcome/log_a_d_m_i_n_unique');
		}	
	}
}
 ?>
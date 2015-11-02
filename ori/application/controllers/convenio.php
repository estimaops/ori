<?php 
Class Convenio Extends CI_Controller{

	function __construct()
	{
			parent::__construct();
			$this->load->model('modelo_model');
			$this->load->model('modelo_access');
	}

/*------------------------------------------------------------------------------------/
								MOSTRAR CONVENIOS
-------------------------------------------------------------------------------------*/

	public function convenios()				// función que muestra los convenios enlistados
	{
		$listaconvenio = $this->modelo_model->listar_convenios();
		$datos['convenios'] = $listaconvenio;
		$this->load->view('plantilla_pagina/head');
		$this->load->view('plantilla_pagina/barra');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('convenios/universidades',$datos);
		$this->load->view('convenios/listado_universidades',$datos);		
		$this->load->view('plantilla_pagina/footer');

	}
}
 ?>
<?php 
Class Norma Extends CI_Controller{

	function __construct()
	{
			parent::__construct();
			$this->load->model('modelo_model');
			$this->load->model('modelo_access');
	}

/*------------------------------------------------------------------------------------/
								MOSTRAR REGLAMENTOS
-------------------------------------------------------------------------------------*/

	public function mostrar_reglamentos() // función que muestra los reglamentos
	{
		$listareglamento = $this->modelo_model->listar_reglamento();
		$datos['reglamento'] = $listareglamento;
		$this->load->view('plantilla_pagina/head');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('plantilla_pagina/barra');
		$this->load->view('reglamento/mostrar_reglamento',$datos);	
		$this->load->view('plantilla_pagina/footer');
	}
}


 ?>
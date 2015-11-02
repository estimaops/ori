<?php 

Class Becas Extends CI_Controller{

	function __construct()
	{
			parent::__construct();
			$this->load->model('modelo_model');
			$this->load->model('modelo_access');
	}

/*------------------------------------------------------------------------------------/
								MOSTRAR BECAS
-------------------------------------------------------------------------------------*/	

	public function beca_cuerpo($datillo1=1)  	//función que muestra todos los datos de la beca
	{
		$datos['dat'] = $datillo1;
		$listarbecas = $this->modelo_model->listar_becas();
		$datos['becas'] = $listarbecas;
		$this->load->view('plantilla_pagina/head');
		$this->load->view('plantilla_pagina/barra');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('beca/cuerpo_beca',$datos);
		$this->load->view('plantilla_pagina/footer');

	}
	public function listado_becas()			// función que enlista las becas
	{
		$listabecas = $this->modelo_model->listar_becas();
		$datos['becas'] = $listabecas;
		$this->load->view('plantilla_pagina/head');
		$this->load->view('plantilla_pagina/barra');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('beca/beca',$datos);
		$this->load->view('plantilla_pagina/footer');

	}


}

 ?>
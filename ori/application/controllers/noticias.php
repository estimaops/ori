<?php 
Class Noticias Extends CI_Controller{

	function __construct()
	{
			parent::__construct();
			$this->load->model('modelo_model');
			$this->load->model('modelo_access');
	}


/*------------------------------------------------------------------------------------/
								MOSTRAR NOTICIAS
-------------------------------------------------------------------------------------*/
	
	public function listado_noticias($datillo=1)		//Enlista las noticias
	{
		$datos['dat'] = $datillo;
		$listarnoticias = $this->modelo_model->listar_noticias();
		$datos['noticias'] = $listarnoticias;
		$this->load->view('plantilla_pagina/head');
		$this->load->view('plantilla_pagina/barra');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('noticia/noticia',$datos);
		$this->load->view('plantilla_pagina/footer');

	}

	public function noticia_detalle($datillo1=1)		// muestra el cuerpo y el detalle de las noticias
	{
		$datos['dat'] = $datillo1;
		$listarnoticias = $this->modelo_model->listar_noticias();
		$datos['noticias'] = $listarnoticias;
		$this->load->view('plantilla_pagina/head');
		$this->load->view('plantilla_pagina/barra');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('noticia/cuerpo_notcia',$datos);
		$this->load->view('plantilla_pagina/footer');

	}



}
 ?>
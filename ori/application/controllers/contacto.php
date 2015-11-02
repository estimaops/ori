<?php 
Class Contacto Extends CI_controller{

	function __construct()
	{
			parent::__construct();
			$this->load->model('modelo_model');
			$this->load->model('modelo_access');
	}


/*------------------------------------------------------------------------------------/
								MOSTRAR PREGUNTAS
-------------------------------------------------------------------------------------*/
	
	public function preguntas_frecuentes()				// función que muestra las preguntas frecuentes
	{
		$listapregunta = $this->modelo_model->listar_preguntas();
		$datos['preguntas'] = $listapregunta;
		$this->load->view('plantilla_pagina/head');
		$this->load->view('plantilla_pagina/barra');
		$this->load->view('plantilla_pagina/animaciones');
		$this->load->view('preguntas/preguntas',$datos);
		$this->load->view('preguntas/listado_preguntas',$datos);		
		$this->load->view('plantilla_pagina/footer');

	}

/*------------------------------------------------------------------------------------/
								 CONTACTO
-------------------------------------------------------------------------------------*/

	public function vista_contacto(){				// función que muestra página de  contactos
	$this->load->view('plantilla_pagina/head');
	$this->load->view('plantilla_pagina/animaciones');
	$this->load->view('plantilla_pagina/barra');

	$this->load->view('contacto/send_email');
		$this->load->view('contacto/formulario_contacto.html');

	$this->load->view('plantilla_pagina/footer');
}

}
 ?>
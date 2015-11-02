<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class modelo_access extends CI_Model
{
	
	function __construct()
	{
			parent::__construct();
			$this->load->database();
	}

/*------------------------------------------------------------------------------------/
							LOGIN CONTROLADOR 
-------------------------------------------------------------------------------------*/

	public function login($username,$password) // función que controla el ingreso de usuario
	{
		$this->db->where('USER',$username);
		$this->db->where('PASSWORD',$password);
		$q = $this->db->get('Usuario');

		if ($q->num_rows>0) {

				$newdata = array(
                   'username'  => $username,
                   'password'     => $password,
                   'logged_in' => TRUE
               );
			$this->session->set_userdata($newdata);

			return true;
		}else{
			return false;
		}

	}
}



?>
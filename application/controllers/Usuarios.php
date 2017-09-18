<?php if (!defined('BASEPATH')) exit('No direct script acess allowed');

/**
* 
*/
class Usuarios extends CI_Controller {
	
	public function index(){
		
		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('listar_usuario');
		$this->load->view('includes/html_footer');
	}
}
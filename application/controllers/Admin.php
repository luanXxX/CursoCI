<?php if (!defined('BASEPATH')) exit('No direct script acess allowed');

/**
* 
*/
class Admin extends CI_Controller {
	
	public function index(){
		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('admin');
		$this->load->view('includes/html_footer');
	}
}
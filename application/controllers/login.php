<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('login.php');
	}
	
	
}

/* End of file homecontrol.php */
/* Location: ./application/controllers/home.php */
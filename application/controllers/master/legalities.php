<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Legalities extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$datahead['title'] = "Company Legalities";
		$datanav['activenav'] = "master";
		$dataside['activesidebar'] = "legalities";
		$databread['breadcumb'] = '<li><a href="">Dashboard</a></li>';
		$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="">Master</a></li>';
		$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="">Company Legalities</a></li>';
		
		$this->load->view('template/header.php',$datahead);
		$this->load->view('template/navigation.php',$datanav);
		$this->load->view('template/sidebar.php',$dataside);
		$this->load->view('template/contentbreadcumb.php',$databread);
		$this->load->view('master/legalities.php');
		$this->load->view('template/footer.php');	
	}	
	
}

/* End of file homecontrol.php */
/* Location: ./application/controllers/home.php */
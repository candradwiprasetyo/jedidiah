<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ratemanagement extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$datahead['title'] = "RATE MANAGEMENT";
			$datanav['activenav'] = "transaction";
			$dataside['activesidebar'] = "ratemanagement"; // harus ada isinya
			$databread['breadcumb'] = '<li><a href="">Transaction</a></li>';
			$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="ratemanagement">Rate Management</a></li>';
			
			$this->load->view('template/header.php',$datahead);
			$this->load->view('template/navigation.php',$datanav);
			$this->load->view('template/sidebar_transaction.php',$dataside);
			$this->load->view('template/contentbreadcumb.php',$databread);
			$this->load->view('transaction/ratemanagement/list.php');	
			$this->load->view('template/footer.php');	
	}
	

	public function form($page = 'form')
	{
		$datahead['title'] = "FORM RATE MANAGEMENT";
		$datanav['activenav'] = "transaction";
		$dataside['activesidebar'] = "ratemanagement";
		$databread['breadcumb'] = '<li><a href="">Transaction</a></li>';
		$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="">Rate Management</a></li>';
		$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="">Form</a></li>';
		
		$this->load->view('template/header.php',$datahead);
		$this->load->view('template/navigation.php',$datanav);
		$this->load->view('template/sidebar_transaction.php',$dataside);
		$this->load->view('template/contentbreadcumb.php',$databread);
		$this->load->view('transaction/ratemanagement/form.php');
		$this->load->view('template/footer.php');	
	}	
	
}

/* End of file homecontrol.php */
/* Location: ./application/controllers/home.php */
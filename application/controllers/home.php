<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}
	
	public function dashboard(){
		$datahead['title'] = "DASHBOARD";
		$datanav['activenav'] = "dashboard";
		$databread['breadcumb'] = '<li><a href="">Dashboard</a></li>';
		
		$this->load->view('template/header.php',$datahead);
		$this->load->view('template/navigation.php',$datanav);
		$this->load->view('template/sidebar_dashboard.php');
		$this->load->view('template/contentbreadcumb.php',$databread);
		$this->load->view('template/footer.php');	
		/*$this->load->view('blank/blank.html');	*/
	}
	
	public function master(){

		$datahead['title'] = "MASTER";
		$datanav['activenav'] = "master";
		$dataside['activesidebar'] = "";
		$databread['breadcumb'] = '<li><a href="">Dashboard</a></li>';
		$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="">Master</a></li>';
		
		$this->load->view('template/header.php',$datahead);
		$this->load->view('template/navigation.php',$datanav);
		$this->load->view('template/sidebar.php',$dataside);
		$this->load->view('template/contentbreadcumb.php',$databread);
		$this->load->view('template/footer.php');	
	}
	
	public function transaction($page){
		if($page === "joborder"){
			
			$datahead['title'] = "TRANSACTION";
			$datanav['activenav'] = "transaction";
			$dataside['activesidebar'] = "service"; // harus ada isinya
			$databread['breadcumb'] = '<li><a href="">Dashboard</a></li>';
			$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="">Master</a></li>';
			$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="">Commodity</a></li>';
			
			$this->load->view('template/header.php',$datahead);
			$this->load->view('template/navigation.php',$datanav);
			$this->load->view('template/sidebar_transaction.php',$dataside);
			$this->load->view('template/contentbreadcumb.php',$databread);
			$this->load->view('transaction/joborder/joborder.php');	
			$this->load->view('template/footer.php');	
			
		}
		else if($page === "ratemanagement"){
			
		}
		
		
	}
	
	
}

/* End of file homecontrol.php */
/* Location: ./application/controllers/home.php */
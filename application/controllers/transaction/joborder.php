<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Joborder extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		/*$data['title'] = "SERVICE - JEDIDIA";
		
		$this->load->view('template/header.php',$data);
		$this->load->view('template/sidebar.php');
		$this->load->view('transaction/joborder/home.php');
		$this->load->view('template/footer.php');*/	
	}
	
	public function service($page = 'service',$costumer = null)
	{
		if($page === 'service'){
			$datahead['title'] = "SERVICE";
			$datanav['activenav'] = "transaction";
			$dataside['activesidebar'] = "service";
			$databread['breadcumb'] = '<li><a href="">Dashboard</a></li>';
			$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="">Transaction</a></li>';
			$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="">Service</a></li>';
			$datacontent['activecontent'] = "service";
			$datacontent['id_costumer'] = $costumer;
			
			$this->load->view('template/header.php',$datahead);
			$this->load->view('template/navigation.php',$datanav);
			$this->load->view('template/sidebar_transaction.php',$dataside);
			$this->load->view('template/contentbreadcumb.php',$databread);
			$this->load->view('transaction/joborder/costumerinfo.php');	
			$this->load->view('transaction/joborder/template/content_header.php',$datacontent);
			$this->load->view('transaction/joborder/template/content_tabs_service.php',$datacontent);
			$this->load->view('transaction/joborder/service.php',$datacontent);
			$this->load->view('transaction/joborder/template/content_footer.php');
			$this->load->view('template/footer.php');	
		}
		else if($page === 'commodity'){
			$datahead['title'] = "COMMODITY";
			$datanav['activenav'] = "transaction";
			$dataside['activesidebar'] = "service";
			$databread['breadcumb'] = '<li><a href="">Dashboard</a></li>';
			$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="">Transaction</a></li>';
			$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="">Service</a></li>';
			$datacontent['activecontent'] = "commodity";
			$datacontent['id_costumer'] = $costumer;
			
			$this->load->view('template/header.php',$datahead);
			$this->load->view('template/navigation.php',$datanav);
			$this->load->view('template/sidebar_transaction.php',$dataside);
			$this->load->view('template/contentbreadcumb.php',$databread);
			$this->load->view('transaction/joborder/costumerinfo.php');	
			$this->load->view('transaction/joborder/template/content_header.php',$datacontent);
			$this->load->view('transaction/joborder/template/content_tabs_service.php',$datacontent);
			$this->load->view('transaction/joborder/commodity.php',$datacontent);
			$this->load->view('transaction/joborder/template/content_footer.php');
			$this->load->view('template/footer.php');
		}
		else if($page === 'schedule'){
			$datahead['title'] = "SCHEDULE";
			$datanav['activenav'] = "transaction";
			$dataside['activesidebar'] = "service";
			$databread['breadcumb'] = '<li><a href="">Dashboard</a></li>';
			$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="">Transaction</a></li>';
			$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="">Service</a></li>';
			$datacontent['activecontent'] = "schedule";
			$datacontent['id_costumer'] = $costumer;
			
			$this->load->view('template/header.php',$datahead);
			$this->load->view('template/navigation.php',$datanav);
			$this->load->view('template/sidebar_transaction.php',$dataside);
			$this->load->view('template/contentbreadcumb.php',$databread);
			$this->load->view('transaction/joborder/costumerinfo.php');	
			$this->load->view('transaction/joborder/template/content_header.php',$datacontent);
			$this->load->view('transaction/joborder/template/content_tabs_service.php',$datacontent);
			$this->load->view('transaction/joborder/schedule.php',$datacontent);
			$this->load->view('transaction/joborder/template/content_footer.php');
			$this->load->view('template/footer.php');
		}
		
	}
	
	public function handling($page = 'preparation',$costumer = null)
	{
		if($page === 'preparation'){
			$datahead['title'] = "PREPARATION";
			$datanav['activenav'] = "transaction";
			$dataside['activesidebar'] = "handling";
			$databread['breadcumb'] = '<li><a href="">Dashboard</a></li>';
			$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="">Transaction</a></li>';
			$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="">Service</a></li>';
			$datacontent['activecontent'] = "preparation";
			$datacontent['id_costumer'] = $costumer;
			
			$this->load->view('template/header.php',$datahead);
			$this->load->view('template/navigation.php',$datanav);
			$this->load->view('template/sidebar_transaction.php',$dataside);
			$this->load->view('template/contentbreadcumb.php',$databread);
			$this->load->view('transaction/joborder/costumerinfo.php');	
			$this->load->view('transaction/joborder/template/content_header.php',$datacontent);
			$this->load->view('transaction/joborder/template/content_tabs_handling.php',$datacontent);
			$this->load->view('transaction/joborder/preparation.php',$datacontent);
			$this->load->view('transaction/joborder/template/content_footer.php');
			$this->load->view('template/footer.php');
		}
		else if($page === 'stuffing'){
			$datahead['title'] = "STUFFING";
			$datanav['activenav'] = "transaction";
			$dataside['activesidebar'] = "handling";
			$databread['breadcumb'] = '<li><a href="">Dashboard</a></li>';
			$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="">Transaction</a></li>';
			$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="">Service</a></li>';
			$datacontent['activecontent'] = "stuffing";
			$datacontent['id_costumer'] = $costumer;
			
			$this->load->view('template/header.php',$datahead);
			$this->load->view('template/navigation.php',$datanav);
			$this->load->view('template/sidebar_transaction.php',$dataside);
			$this->load->view('template/contentbreadcumb.php',$databread);
			$this->load->view('transaction/joborder/costumerinfo.php');	
			$this->load->view('transaction/joborder/template/content_header.php',$datacontent);
			$this->load->view('transaction/joborder/template/content_tabs_handling.php',$datacontent);
			$this->load->view('transaction/joborder/stuffing.php',$datacontent);
			$this->load->view('transaction/joborder/template/content_footer.php');
			$this->load->view('template/footer.php');		
		}
		else if($page === 'documentation'){
			$datahead['title'] = "DOCUMENTATION";
			$datanav['activenav'] = "transaction";
			$dataside['activesidebar'] = "handling";
			$databread['breadcumb'] = '<li><a href="">Dashboard</a></li>';
			$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="">Transaction</a></li>';
			$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="">Service</a></li>';
			$datacontent['activecontent'] = "documentation";
			$datacontent['id_costumer'] = $costumer;
			
			$this->load->view('template/header.php',$datahead);
			$this->load->view('template/navigation.php',$datanav);
			$this->load->view('template/sidebar_transaction.php',$dataside);
			$this->load->view('template/contentbreadcumb.php',$databread);
			$this->load->view('transaction/joborder/costumerinfo.php');	
			$this->load->view('transaction/joborder/template/content_header.php',$datacontent);
			$this->load->view('transaction/joborder/template/content_tabs_handling.php',$datacontent);
			$this->load->view('transaction/joborder/documentation.php',$datacontent);
			$this->load->view('transaction/joborder/template/content_footer.php');
			$this->load->view('template/footer.php');
		}
		
	}
	
	public function monitoring($costumer = null)
	{
		$datahead['title'] = "MONITORING";
		$datanav['activenav'] = "transaction";
		$dataside['activesidebar'] = "monitoring";
		$databread['breadcumb'] = '<li><a href="">Dashboard</a></li>';
		$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="">Transaction</a></li>';
		$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="">Service</a></li>';
		$datacontent['activecontent'] = "monitoring";
		$datacontent['id_costumer'] = $costumer;
		
		$this->load->view('template/header.php',$datahead);
		$this->load->view('template/navigation.php',$datanav);
		$this->load->view('template/sidebar_transaction.php',$dataside);
		$this->load->view('template/contentbreadcumb.php',$databread);
		$this->load->view('transaction/joborder/costumerinfo.php');	
		$this->load->view('transaction/joborder/template/content_header.php',$datacontent);
		$this->load->view('transaction/joborder/template/content_tabs_monitoring.php',$datacontent);
		$this->load->view('transaction/joborder/monitoring.php',$datacontent);
		$this->load->view('transaction/joborder/template/content_footer.php');
		$this->load->view('template/footer.php');
	}
	

}

/* End of file homecontrol.php */
/* Location: ./application/controllers/home.php */
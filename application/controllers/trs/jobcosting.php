<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jobcosting extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('trs_jobcosting_model');
	}

	public function index()
	{
		$datahead['title'] = "JOB COSTING";
			$datanav['activenav'] = "transaction";
			$dataside['activesidebar'] = "jobcosting"; // harus ada isinya
			$databread['breadcumb'] = '<li><a href="">Transaction</a></li>';
			$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="jobcosting">Job Costing</a></li>';
			
			$this->load->view('template/header.php',$datahead);
			$this->load->view('template/navigation.php',$datanav);
			$this->load->view('template/sidebar_transaction.php',$dataside);
			$this->load->view('template/contentbreadcumb.php',$databread);
			$this->load->view('transaction/jobcosting/list.php');	
			$this->load->view('template/footer.php');	
	}
	

	public function form($id = 0)
	{

		$data = array();
		if($id==0){

			
			$data['row_id']						= '';
			$data['job_order_id']				= '';
			$data['jc_booking']					= '';
			$data['jc_closing_date']			= date("m/d/Y");
			$data['costumer_code']				= '';
			$data['costumer_name']				= '';
			$data['jc_transport_type_id']		= '';
			$data['jc_eid']						= '';	
			$data['jc_party']					= '';
			$data['jc_routing']					= '';
			$data['jc_etd']						= '';
			$data['jc_eta']						= '';
			$data['jc_status_id']				= '2';
			$data['jc_usd_rate']				= '';
			$data['jc_category_id']				= '1';

		}else{
			$result = $this->trs_jobcosting_model->read_id($id);
			if($result){
				$data = $result;
				$data['row_id'] = $id;
				$data['jc_closing_date'] = $this->trs_jobcosting_model->format_date($data['jc_closing_date']);
				}
		}

		$datahead['title'] = "FORM JOB COSTING";
		$datanav['activenav'] = "transaction";
		$dataside['activesidebar'] = "jobcosting";
		$databread['breadcumb'] = '<li><a href="">Transaction</a></li>';
		$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="">Job Costing</a></li>';
		$databread['breadcumb'] .= '<li><i class="fa fa-angle-right"></i><a href="">Form</a></li>';
		
		

		$this->load->view('template/header.php',$datahead);
		$this->load->view('template/navigation.php',$datanav);
		$this->load->view('template/sidebar_transaction.php',$dataside);
		$this->load->view('template/contentbreadcumb.php',$databread);
		$this->load->view('transaction/jobcosting/form.php', $data);
		$this->load->view('template/footer.php');	
	}	

	public function commit($id=0){

		if(empty($id)){			
			$temp = $this->trs_jobcosting_model->commit();
			echo json_encode($temp);
		}else{
			$temp = $this->trs_jobcosting_model->update($id);
			echo json_encode($temp);
		}
		
	}

	public function getbydetail($id){
		
			$data = $this->jobcosting->getby($id);
			echo json_encode($data);
	}

	public function getdetailcharge($id){
		
			$data = $this->trs_jobcosting_model->getdetailcharge($id);

			//$data['jcd_due_date'] = $this->trs_jobcosting_model->format_date($data['jcd_due_date']);
			echo json_encode($data);
	}

	public function getdetailie($id){
		
			$data = $this->jobcosting->getdetailie($id);
			echo json_encode($data);
	}

	public function getdetailnote($id){
		
			$data = $this->jobcosting->getdetailnote($id);
			echo json_encode($data);
	}

	public function deletebl($id){

		
			$this->jobcosting->deletebl($id);
			echo json_encode("Data deleted");
		
		
	}

	public function deleteie($id){

		
			$this->jobcosting->deleteie($id);
			echo json_encode("Data deleted");
		
		
	}

	public function deletenote($id){

		
			$this->jobcosting->deletenote($id);
			echo json_encode("Data deleted");
		
		
	}

	public function delete($ID){
		$result = $this->jobcosting->delete($ID);
		if($result){
			echo json_encode(true);
		}
		else{
			echo json_encode(false);
		}
	}

	
	public function getallrmrc()
	{
		$data = $this->trs_jobcosting_model->getallrmrc();
		echo json_encode($data);
	}



	public function getalldetailstatus()
	{
		$data = $this->trs_jobcosting_model->getalldetailstatus();
		echo json_encode($data);
	}
	
	public function getalljoborder()
	{
		$data = $this->trs_jobcosting_model->getalljoborder();
		echo json_encode($data);
	}
	
}

/* End of file homecontrol.php */
/* Location: ./application/controllers/home.php */
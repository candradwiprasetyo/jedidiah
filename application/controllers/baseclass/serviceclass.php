<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Serviceclass extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('trs_joborder');
		$this->load->model('trs_service');
		$this->load->model('trs_commodity');
		$this->load->model('trs_schedule');
		$this->load->model('trs_preparation');
		$this->load->model('trs_stuffing');
		$this->load->model('trs_documentation');
	}

	public function index()
	{
		$data = $this->trs_joborder->getall();
		echo json_encode($data);
	}
	
	
	public function commit($type){
		echo json_encode($type);
		/*if($type === "service"){
			$temp = $this->trs_service->commit();
			echo json_encode("Data Saved");
		}
		else if($type === "commodity"){
			$temp = $this->trs_commodity->commit();
			echo json_encode("Data Saved");
		}
		else if($type === "schedule"){
			$temp = $this->trs_schedule->commit();
			echo json_encode("Data Saved");
		}
		else if($type === "preparation"){
			$temp = $this->trs_preparation->commit();
			echo json_encode("Data Saved");
		}
		else if($type === "documentation"){
			$temp = $this->trs_documentation->commit();
			echo json_encode("Data Saved");
		}
		else{
			$temp = $this->trs_joborder->commit();
			echo json_encode("Data Saved");
		}*/
		
	}
	
	
	public function getbydetail($type,$id){
		if($type === "size"){		
			$data = $this->trs_stuffing->getbydetail($type,$id);
			echo json_encode($data);
		}
		else if($type === "container"){	
			$data = $this->trs_stuffing->getbydetail($type,$id);
			echo json_encode($data);
		}
		else if($type === "commodity"){		
			$data = $this->trs_commodity->getbydetail($id);
			echo json_encode($data);
		}
		else if($type === "common"){
			$data = $this->trs_stuffing->getbydetail($type,$id);
			echo json_encode($data);
		}
		else if($type === "trucking"){
			$data = $this->trs_stuffing->getbydetail($type,$id);
			echo json_encode($data);
		}
		else if($type === "containerbyjoborder"){
			$data = $this->trs_stuffing->getbydetail($type,$id);
			echo json_encode($data);
		}
		
		
	}
	
	public function commitdetail($type){
		if($type === "size"){
			$temp = $this->trs_stuffing->commitdetail($type);
			echo json_encode($temp);
		}
		else if($type === "container"){
			$temp = $this->trs_stuffing->commitdetail($type);
			echo json_encode($temp);
		}
		else if($type === "common"){
			$temp = $this->trs_stuffing->commitdetail($type);
			echo json_encode($temp);
		}
		else if($type === "trucking"){
			$temp = $this->trs_stuffing->commitdetail($type);
			echo json_encode($temp);
		}
		
	}
	
	public function delete($ID){
		$result = $this->trs_joborder->delete($ID);
		if($result){
			echo json_encode(true);
		}
		else{
			echo json_encode(false);
		}
	}

}

/* End of file cityclass.php */
/* Location: ./application/controllers/baseclass/cityclass.php */
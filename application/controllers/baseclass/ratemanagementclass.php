<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ratemanagementclass extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('trs_ratemanagement');
	}

	public function index()
	{
		$data = $this->trs_ratemanagement->getall();
		echo json_encode($data);
	}

	public function getmarketing()
	{
		$data = $this->trs_ratemanagement->getmarketing();
		echo json_encode($data);
	}

	public function getagent()
	{
		$data = $this->trs_ratemanagement->getagent();
		echo json_encode($data);
	}
	
	public function commit(){
		$this->trs_ratemanagement->commit();
		echo json_encode("Data Saved");
	}
	
	public function delete($ID){
		$result = $this->trs_ratemanagement->delete($ID);
		if($result){
			echo json_encode(true);
		}
		else{
			echo json_encode(false);
		}
	}
	
	public function getrow($ID){
		$result = $this->trs_ratemanagement->getrow($ID);
		echo json_encode($result);
	}
	
}

/* End of file cityclass.php */
/* Location: ./application/controllers/baseclass/cityclass.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jobcostingclass extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('trs_jobcosting_model');
	}

	public function index()
	{
		$data = $this->trs_jobcosting_model->getall();
		echo json_encode($data);
	}

	public function getmarketing()
	{
		$data = $this->trs_jobcosting_model->getmarketing();
		echo json_encode($data);
	}

	public function getagent()
	{
		$data = $this->trs_jobcosting_model->getagent();
		echo json_encode($data);
	}
	
	public function commit(){
		$this->trs_jobcosting_model->commit();
		echo json_encode("Data Saved");
	}
	
	public function delete($ID){
		$result = $this->trs_jobcosting_model->delete($ID);
		if($result){
			echo json_encode(true);
		}
		else{
			echo json_encode(false);
		}
	}
	
	public function getrow($ID){
		$result = $this->trs_jobcosting_model->getrow($ID);
		echo json_encode($result);
	}
	
	public function commitdetail(){
		$temp = $this->trs_jobcosting_model->commitdetail();
		echo json_encode($temp);
	}
	
	public function commitie(){
		$temp = $this->trs_jobcosting_model->commitie();
		echo json_encode($temp);
	}
	
	public function commitnote(){
		$temp = $this->trs_jobcosting_model->commitnote();
		echo json_encode($temp);
	}
}

/* End of file cityclass.php */
/* Location: ./application/controllers/baseclass/cityclass.php */
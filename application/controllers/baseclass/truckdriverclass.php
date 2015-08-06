<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Truckdriverclass extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mst_driver');
	}

	public function index()
	{
		$data = $this->mst_driver->getall();
		echo json_encode($data);
	}
	
	public function commit(){
		$this->mst_driver->commit();
		echo json_encode("Data Saved");
	}
	
	public function getby($level,$company){
		$data = $this->mst_driver->getby($level,$company);
		echo json_encode($data);
	}
	
	public function delete($ID){
		$result = $this->mst_driver->delete($ID);
		if($result){
			echo json_encode(true);
		}
		else{
			echo json_encode(false);
		}
	}
	
	public function getrow($ID){
		$result = $this->mst_driver->getrow($ID);
		echo json_encode($result);
	}
	
}

/* End of file cityclass.php */
/* Location: ./application/controllers/baseclass/cityclass.php */
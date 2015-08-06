<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Areaclass extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mst_area');
	}

	public function index()
	{
		$data = $this->mst_area->getall();
		echo json_encode($data);
	}
	
	public function commit(){
		$this->mst_area->commit();
		echo json_encode("Data Saved");
	}
	
	public function bycity($city){
		$data = $this->mst_area->getbycity($city);
		echo json_encode($data);
	}
	
	public function delete($ID){
		$result = $this->mst_area->delete($ID);
		if($result){
			echo json_encode(true);
		}
		else{
			echo json_encode(false);
		}
	}
	
	public function getrow($ID){
		$result = $this->mst_area->getrow($ID);
		echo json_encode($result);
	}
	
	
}

/* End of file cityclass.php */
/* Location: ./application/controllers/baseclass/cityclass.php */
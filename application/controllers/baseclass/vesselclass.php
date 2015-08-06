<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Vesselclass extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mst_vessel');
	}

	public function index()
	{
		$data = $this->mst_vessel->getall();
		echo json_encode($data);
	}

	public function commit(){
		$this->mst_vessel->commit();
		echo json_encode("Data Saved");
	}
	
	public function delete($ID){
		$result = $this->mst_vessel->delete($ID);
		if($result){
			echo json_encode(true);
		}
		else{
			echo json_encode(false);
		}
	}
	
	public function getrow($ID){
		$result = $this->mst_vessel->getrow($ID);
		echo json_encode($result);
	}
	
}

/* End of file cityclass.php */
/* Location: ./application/controllers/baseclass/cityclass.php */
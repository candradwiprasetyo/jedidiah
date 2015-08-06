<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Truckdetailclass extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mst_truck_detail');
	}

	public function index()
	{
		$data = $this->mst_truck_detail->getall();
		echo json_encode($data);
	}
	
	public function getby($categories,$ID){
		$data = $this->mst_truck_detail->getby($categories,$ID);
		echo json_encode($data);
	}
	
	public function commit(){
		$this->mst_truck_detail->commit();
		echo json_encode("Data Saved");
	}
	
	public function delete($ID){
		$result = $this->mst_truck_detail->delete($ID);
		if($result){
			echo json_encode(true);
		}
		else{
			echo json_encode(false);
		}
	}
	
	public function getrow($ID){
		$result = $this->mst_truck_detail->getrow($ID);
		echo json_encode($result);
	}
	
}

/* End of file cityclass.php */
/* Location: ./application/controllers/baseclass/cityclass.php */
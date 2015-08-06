<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cityclass extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mst_city');
	}

	public function index()
	{
		$data = $this->mst_city->getall();
		echo json_encode($data);
	}
	
	public function commit(){
		$this->mst_city->commit();
		echo json_encode("Data Saved");
	}
	
	public function bycountry($country){
		$data = $this->mst_city->getbycountry($country);
		echo json_encode($data);
	}
	
	public function delete($ID){
		$result = $this->mst_city->delete($ID);
		if($result){
			echo json_encode(true);
		}
		else{
			echo json_encode(false);
		}
	}
	
	public function getrow($ID){
		$result = $this->mst_city->getrow($ID);
		echo json_encode($result);
	}
	
}

/* End of file cityclass.php */
/* Location: ./application/controllers/baseclass/cityclass.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Seaportclass extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mst_seaport');
	}

	public function index()
	{
		$data = $this->mst_seaport->getall();
		echo json_encode($data);
	}
	
	public function bycity($city){
		$data = $this->mst_seaport->getbycity($city);
		echo json_encode($data);
	}
	
	public function bycountry($country){
		$data = $this->mst_seaport->getbycountry($country);
		echo json_encode($data);
	}
	
	public function commit(){
		$this->mst_seaport->commit();
		echo json_encode("Data Saved");
	}
	
	public function delete($ID){
		$result = $this->mst_seaport->delete($ID);
		if($result){
			echo json_encode(true);
		}
		else{
			echo json_encode(false);
		}
	}
	
	public function getrow($ID){
		$result = $this->mst_seaport->getrow($ID);
		echo json_encode($result);
	}
	
}

/* End of file cityclass.php */
/* Location: ./application/controllers/baseclass/cityclass.php */
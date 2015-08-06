<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Divisionclass extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mst_division');
	}

	public function index()
	{
		$data = $this->mst_division->getall();
		echo json_encode($data);
	}
	
	public function commit(){
		$this->mst_division->commit();
		echo json_encode("Data Saved");
	}
	
	public function byposition($position){
		$data = $this->mst_division->getbyposition($position);
		echo json_encode($data);
	}
	
	public function delete($ID){
		$result = $this->mst_division->delete($ID);
		if($result){
			echo json_encode(true);
		}
		else{
			echo json_encode(false);
		}
	}
	
	public function getrow($ID){
		$result = $this->mst_division->getrow($ID);
		echo json_encode($result);
	}
	
}

/* End of file cityclass.php */
/* Location: ./application/controllers/baseclass/cityclass.php */
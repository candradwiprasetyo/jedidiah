<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Departmentclass extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mst_department');
	}

	public function index()
	{
		$data = $this->mst_department->getall();
		echo json_encode($data);
	}
	
	public function commit(){
		$this->mst_department->commit();
		echo json_encode("Data Saved");
	}
	
	public function bydivision($division){
		$data = $this->mst_department->getbydivision($division);
		echo json_encode($data);
	}
	
	public function delete($ID){
		$result = $this->mst_department->delete($ID);
		if($result){
			echo json_encode(true);
		}
		else{
			echo json_encode(false);
		}
	}
	
	public function getrow($ID){
		$result = $this->mst_department->getrow($ID);
		echo json_encode($result);
	}
	
	
}

/* End of file cityclass.php */
/* Location: ./application/controllers/baseclass/cityclass.php */
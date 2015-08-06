<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employeeclass extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mst_employee');
	}

	public function index()
	{
		$data = $this->mst_employee->getall();
		echo json_encode($data);
	}
	
	public function commit(){
		$str = $this->mst_employee->commit();
		echo json_encode("Data Saved");
	}
	
	public function delete($ID){
		$result = $this->mst_employee->delete($ID);
		if($result){
			echo json_encode(true);
		}
		else{
			echo json_encode(false);
		}
	}
	
	public function getrow($ID){
		$result = $this->mst_employee->getrow($ID);
		echo json_encode($result);
	}
	
	public function getmarketing(){
		$result = $this->mst_employee->getmarketing();
		echo json_encode($result);
	}
	
}

/* End of file cityclass.php */
/* Location: ./application/controllers/baseclass/cityclass.php */
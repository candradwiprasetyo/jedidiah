<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Incotermclass extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mst_incoterm');
	}

	public function index()
	{
		$data = $this->mst_incoterm->getall();
		echo json_encode($data);
	}
	
	public function commit(){
		$this->mst_incoterm->commit();
		echo json_encode("Data Saved");
	}
	
	public function delete($ID){
		$result = $this->mst_incoterm->delete($ID);
		if($result){
			echo json_encode(true);
		}
		else{
			echo json_encode(false);
		}
	}
	
	public function getrow($ID){
		$result = $this->mst_incoterm->getrow($ID);
		echo json_encode($result);
	}
	
	
}

/* End of file cityclass.php */
/* Location: ./application/controllers/baseclass/cityclass.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Costumerclass extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mst_costumer');
	}

	public function index()
	{
		$data = $this->mst_costumer->getall();
		echo json_encode($data);
	}
	
	public function getby($categories){
		$result = $this->mst_costumer->getby($categories);
		echo json_encode($result);
	}
	
	public function getbynotify(){
		$result = $this->mst_costumer->getbynotify();
		echo json_encode($result);
	}
	
	public function getforshippingdoc(){
		$result = $this->mst_costumer->getforshippingdoc();
		echo json_encode($result);
	}
	
	
	public function commit(){
		$this->mst_costumer->commit();
		echo json_encode("Data Saved");
	}
	
	public function delete($ID){
		$result = $this->mst_costumer->delete($ID);
		if($result){
			echo json_encode(true);
		}
		else{
			echo json_encode(false);
		}
	}
	
	public function getrow($ID){
		$result = $this->mst_costumer->getrow($ID);
		echo json_encode($result);
	}
	
}

/* End of file cityclass.php */
/* Location: ./application/controllers/baseclass/cityclass.php */
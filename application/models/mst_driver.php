<?php
class Mst_driver extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('*');
		$this->db->from('mst_driver');
		
		$query = $this->db->get();
		return $query->result_array();
	}

	public function commit(){
		$hiddencode = $this->input->post('hiddendriver');
		
		$drivercode = $this->input->post('drivercode'); 
		$drivername = $this->input->post('drivername'); 
		$driverphone = $this->input->post('driverphone'); 
		$driverlevel = $this->input->post('driverlevel'); 
		$company = $this->input->post('company'); 
	
		$data = array(
			'driver_code' => $drivercode,
			'driver_name' => $drivername,
			'driver_mobile' => $driverphone,
			'driver_level' => $driverlevel,
			'company' => $company
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_driver', $data);
		}
		else{ //UPDATE
			$this->db->where('driver_code', $hiddencode);
			$this->db->update('mst_driver', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_driver');
		$this->db->where('driver_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}

	public function getby($level,$company){
		$this->db->select('*');
		$this->db->from('mst_driver');
		$this->db->where('driver_level',$level);
		$this->db->where('company',$company);
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_driver', array('driver_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
}
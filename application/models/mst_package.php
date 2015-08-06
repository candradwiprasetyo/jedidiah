<?php
class Mst_package extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('*');
		$this->db->from('mst_packaging');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('hiddenpackaging');
		
		$packagecode = $this->input->post('packagecode'); 
		$packaging = $this->input->post('packaging'); 
	
		$data = array(
			'package_code' => $packagecode,
			'packaging' => $packaging
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_packaging', $data);
		}
		else{ //UPDATE
			$this->db->where('package_code', $hiddencode);
			$this->db->update('mst_packaging', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_packaging');
		$this->db->where('package_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_packaging', array('package_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	
}
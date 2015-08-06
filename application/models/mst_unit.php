<?php
class Mst_unit extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('*');
		$this->db->from('mst_unit');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('hiddenunit');
		
		$unitcode = $this->input->post('unitcode'); 
		$unitname = $this->input->post('unitname'); 
	
		$data = array(
			'unit_code' => $unitcode,
			'unit_name' => $unitname
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_unit', $data);
		}
		else{ //UPDATE
			$this->db->where('unit_code', $hiddencode);
			$this->db->update('mst_unit', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_unit');
		$this->db->where('unit_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_unit', array('unit_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	
	
}
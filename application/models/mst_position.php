<?php
class Mst_position extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('*');
		$this->db->from('mst_position');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('hiddenposition');
		
		$positioncode = $this->input->post('code'); 
		$positionsales = $this->input->post('sales');
	
		$data = array(
			'position_code' => $positioncode,
			'position_sales' => $positionsales
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_position', $data);
		}
		else{ //UPDATE
			$this->db->where('position_code', $hiddencode);
			$this->db->update('mst_position', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_position');
		$this->db->where('position_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_position', array('position_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
}
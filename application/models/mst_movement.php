<?php
class Mst_movement extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('*');
		$this->db->from('mst_movement');
			
		$query = $this->db->get();
		return $query->result_array();
	}
		
	public function commit(){
		$hiddencode = $this->input->post('hiddenmovement');
		
		$movementcode = $this->input->post('movementcode'); 
		$description = $this->input->post('description'); 
	
		$data = array(
			'movement_code' => $movementcode,
			'movement_description' => $description
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_movement', $data);
		}
		else{ //UPDATE
			$this->db->where('movement_id', $hiddencode);
			$this->db->update('mst_movement', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_movement');
		$this->db->where('movement_id',$ID);
		
		$query = $this->db->get();
		$str = $this->db->last_query();
		return $query->row();
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_movement', array('movement_id' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	
	
}
<?php
class Mst_truck_type extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall(){
		$this->db->select('*');
		$this->db->from('mst_truck_type');

		$query = $this->db->get();
		return $query->result_array();
	}	
	
	public function commit(){
		$hiddencode = $this->input->post('hiddentrucktype');
		
		$trucktype = $this->input->post('trucktype'); 
		$description = $this->input->post('description'); 
		
		$data = array(
			'truck_name' => $trucktype,
			'truck_description' => $description
		);
		
		
		if($hiddencode === ''){ //INSERT
			
			$this->db->trans_begin();
		
			$this->db->insert('mst_truck_type', $data);
			
			if ($this->db->trans_status() === FALSE){
				$this->db->trans_rollback();
			}
			else{
				$this->db->trans_commit();
			}
			
		}
		else{ //UPDATE
			$this->db->where('truck_id', $hiddencode);
			$this->db->update('mst_truck_type', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_truck_type');
		$this->db->where('truck_id',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_truck_type', array('truck_id' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	
	
}
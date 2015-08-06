<?php
class Mst_division extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('*');
		$this->db->from('mst_division');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('hiddendivision');
		$position = $this->input->post('selectPositionForDivision'); 
		$divisionname = $this->input->post('divisionname'); 
	
		$data = array(
			'division_name' => $divisionname,
			'position_code' => $position
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_division', $data);
		}
		else{ //UPDATE
			$this->db->where('division_code', $hiddencode);
			$this->db->update('mst_division', $data); 
		}
		
		return true;
	}
	
	public function getbyposition($position){
		$this->db->select('*');
		$this->db->from('mst_division');
		$this->db->where('position_code', $position); 
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_division');
		$this->db->where('division_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_division', array('division_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}

}
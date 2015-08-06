<?php
class Mst_incoterm extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('*');
		$this->db->from('mst_incoterm');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('hiddenincoterm');
		
		$termcode = $this->input->post('incotermcode'); 
		$termname = $this->input->post('incotermname');
		$description = $this->input->post('description');
	
		$data = array(
			'term_code' => $termcode,
			'term_name' => $termname,
			'term_description' => $description
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_incoterm', $data);
		}
		else{ //UPDATE
			$this->db->where('term_code', $hiddencode);
			$this->db->update('mst_incoterm', $data); 
		}
		
		return true;
	}
	
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_incoterm');
		$this->db->where('term_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_incoterm', array('term_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	
}
<?php
class Mst_section extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('*');
		$this->db->from('mst_section');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('hiddensection');
		
		$sectioncode = $this->input->post('sectioncode'); 
		$sectionname = $this->input->post('sectionname'); 
		$description = $this->input->post('description'); 
	
		$data = array(
			'section_code' => $sectioncode,
			'section_name' => $sectionname,
			'section_description' => $description
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_section', $data);
		}
		else{ //UPDATE
			$this->db->where('section_code', $hiddencode);
			$this->db->update('mst_section', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_section');
		$this->db->where('section_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_section', array('section_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	
}
<?php
class Mst_legalities extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('*');
		$this->db->from('mst_company_legalities');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	
	public function commit(){
		$hiddencode = $this->input->post('hiddenlegal');
		
		$legalname = $this->input->post('legalname'); 
		$legaldescription = $this->input->post('legaldescription');
	
		$data = array(
			'legalities_name' => $legalname,
			'legalities_description' => $legaldescription
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_company_legalities', $data);
		}
		else{ //UPDATE
			$this->db->where('legalities_code', $hiddencode);
			$this->db->update('mst_company_legalities', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_company_legalities');
		$this->db->where('legalities_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_company_legalities', array('legalities_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	
	
}
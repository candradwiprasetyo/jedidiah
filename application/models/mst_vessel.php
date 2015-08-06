<?php
class Mst_vessel extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('V.*,C.costumer_name');
		$this->db->from('mst_vessel V');
		$this->db->join('mst_costumer C', 'C.costumer_code = V.company');
			
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('hiddenvessel');
		
		$vesselcode = $this->input->post('vesselcode'); 
		$vesselname = $this->input->post('vesselname'); 
		$company = $this->input->post('company'); 
		$information = $this->input->post('information'); 
	
		$data = array(
			'vessel_code' => $vesselcode,
			'vessel_name' => $vesselname,
			'company' => $company,
			'vessel_information' => $information
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_vessel', $data);
		}
		else{ //UPDATE
			$this->db->where('vessel_code', $hiddencode);
			$this->db->update('mst_vessel', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_vessel');
		$this->db->where('vessel_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_vessel', array('vessel_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	
	
}
<?php
class Mst_country extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('*');
		$this->db->from('mst_country');
		
		$query = $this->db->get();
		return $query->result_array();
	}

	public function commit(){
		$hiddencode = $this->input->post('hiddencountry');
		
		$countrycode = $this->input->post('countrycode'); 
		$countryname = $this->input->post('countryname');
	
		$data = array(
			'country_code' => $countrycode,
			'country_name' => $countryname
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_country', $data);
		}
		else{ //UPDATE
			$this->db->where('country_code', $hiddencode);
			$this->db->update('mst_country', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_country');
		$this->db->where('country_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_country', array('country_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
}
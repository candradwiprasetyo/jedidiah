<?php
class Mst_city extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('*');
		$this->db->from('mst_city');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('hiddencity');
		$countrycode = $this->input->post('countryselectforcity'); 
		$citycode = $this->input->post('citycode'); 
		$cityname = $this->input->post('cityname');
	
		$data = array(
			'city_code' => $citycode,
			'city_name' => $cityname,
			'country_code' => $countrycode
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_city', $data);
		}
		else{ //UPDATE
			$this->db->where('city_code', $hiddencode);
			$this->db->update('mst_city', $data); 
		}
		
		return true;
	}
	
	public function getbycountry($country){
		$this->db->select('*');
		$this->db->from('mst_city');
		$this->db->where('country_code', $country); 
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_city');
		$this->db->where('city_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_city', array('city_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}

}
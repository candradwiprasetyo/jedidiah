<?php
class Mst_airport extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('A.*,CY.city_name,CY.country_code,CT.country_name');
		$this->db->from('mst_airport A');
		$this->db->join('mst_city CY', 'CY.city_code = A.city_code');
		$this->db->join('mst_country CT', 'CT.country_code = CY.country_code');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function getbycity($city){
		$this->db->select('A.*,CY.city_name,CY.country_code,CT.country_name');
		$this->db->from('mst_airport A');
		$this->db->join('mst_city CY', 'CY.city_code = A.city_code');
		$this->db->join('mst_country CT', 'CT.country_code = CY.country_code');
		$this->db->where('A.city_code', $city); 
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('hiddenairport');
		
		$countrycode = $this->input->post('countryselectforairport'); 
		$citycode = $this->input->post('cityselectforairport');
		$airportcode = $this->input->post('airportcode');
		$airportname = $this->input->post('airportname');
	
		$data = array(
			'airport_code' => $airportcode,
			'airport_name' => $airportname,
			'city_code' => $citycode
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_airport', $data);
		}
		else{ //UPDATE
			$this->db->where('airport_code', $hiddencode);
			$this->db->update('mst_airport', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('A.*,CY.city_name,CY.country_code,CT.country_name');
		$this->db->from('mst_airport A');
		$this->db->join('mst_city CY', 'CY.city_code = A.city_code');
		$this->db->join('mst_country CT', 'CT.country_code = CY.country_code');
		$this->db->where('airport_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_airport', array('airport_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
}
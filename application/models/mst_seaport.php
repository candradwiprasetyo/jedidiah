<?php
class Mst_seaport extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('S.*,CY.city_name,CY.country_code,CT.country_name');
		$this->db->from('mst_seaport S');
		$this->db->join('mst_city CY', 'CY.city_code = S.city_code');
		$this->db->join('mst_country CT', 'CT.country_code = CY.country_code');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function getbycity($city){
		$this->db->select('S.*,CY.city_name,CY.country_code,CT.country_name');
		$this->db->from('mst_seaport S');
		$this->db->join('mst_city CY', 'CY.city_code = S.city_code');
		$this->db->join('mst_country CT', 'CT.country_code = CY.country_code');
		$this->db->where('S.city_code', $city); 
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function getbycountry($country){
		$this->db->select('S.*,CY.city_name,CY.country_code,CT.country_name');
		$this->db->from('mst_seaport S');
		$this->db->join('mst_city CY', 'CY.city_code = S.city_code');
		$this->db->join('mst_country CT', 'CT.country_code = CY.country_code');
		$this->db->where('CY.country_code', $country); 
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('hiddenseaport');
		
		$countrycode = $this->input->post('countryselectforseaport'); 
		$citycode = $this->input->post('cityselectforseaport');
		$seaportcode = $this->input->post('seaportcode');
		$seaportname = $this->input->post('seaportname');
	
		$data = array(
			'seaport_code' => $seaportcode,
			'seaport_name' => $seaportname,
			'city_code' => $citycode
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_seaport', $data);
		}
		else{ //UPDATE
			$this->db->where('seaport_code', $hiddencode);
			$this->db->update('mst_seaport', $data); 
		}
		$string = $this->db->last_query();
		
		return $hiddencode;
	}
	
	public function getrow($ID){
		$this->db->select('S.*,CY.city_name,CY.country_code,CT.country_name');
		$this->db->from('mst_seaport S');
		$this->db->join('mst_city CY', 'CY.city_code = S.city_code');
		$this->db->join('mst_country CT', 'CT.country_code = CY.country_code');
		$this->db->where('seaport_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_seaport', array('seaport_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
}
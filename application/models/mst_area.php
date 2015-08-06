<?php
class Mst_area extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('A.*,C.country_code');
		$this->db->from('mst_area A');
		$this->db->join('mst_city C', 'A.city_code = C.city_code');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('hiddenarea');
		$countrycode = $this->input->post('countryselectforarea'); 
		$citycode = $this->input->post('cityselect'); 
		$areacode = $this->input->post('areacode'); 
		$areaname = $this->input->post('areaname');
	
		$data = array(
			'area_code' => $areacode,
			'area_name' => $areaname,
			'city_code' => $citycode,
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_area', $data);
		}
		else{ //UPDATE
			$this->db->where('area_code', $hiddencode);
			$this->db->update('mst_area', $data); 
		}
		
		return true;
	}
	
	public function getbycity($city){
		$this->db->select('A.*,C.country_code');
		$this->db->from('mst_area A');
		$this->db->join('mst_city C', 'A.city_code = C.city_code');
		$this->db->where('A.city_code', $city); 
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function getrow($ID){
		$this->db->select('A.*,C.country_code');
		$this->db->from('mst_area A');
		$this->db->join('mst_city C', 'A.city_code = C.city_code');
		$this->db->where('area_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_area', array('area_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
}
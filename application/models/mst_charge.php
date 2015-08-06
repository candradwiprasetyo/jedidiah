<?php
class Mst_charge extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('*');
		$this->db->from('mst_charge');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('hiddencharge');
		
		$chargecode = $this->input->post('chargecode'); 
		$chargename = $this->input->post('chargename'); 
	
		$data = array(
			'charge_code' => $chargecode,
			'charge_name' => $chargename
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_charge', $data);
		}
		else{ //UPDATE
			$this->db->where('charge_code', $hiddencode);
			$this->db->update('mst_charge', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_charge');
		$this->db->where('charge_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_charge', array('charge_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
}
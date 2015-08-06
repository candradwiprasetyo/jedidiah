<?php
class Mst_commodity extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('*');
		$this->db->from('mst_commodity');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('hiddencommodity');
		
		$commoditycode = $this->input->post('commoditycode'); 
		$commodityname = $this->input->post('commodityname'); 
		$hscode = $this->input->post('hscode'); 
		$specificname = $this->input->post('specificname'); 
		$section = $this->input->post('section'); 
		$movingtype = $this->input->post('movingtype'); 
		$document = $this->input->post('document'); 
	
		$data = array(
			'commodity_code' => $commoditycode,
			'commodity_name' => $commodityname,
			'hs_code' => $hscode,
			'specific_name' => $specificname,
			'section' => $section,
			'moving_type' => $movingtype,
			'document_need' => $document
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_commodity', $data);
		}
		else{ //UPDATE
			$this->db->where('commodity_code', $hiddencode);
			$this->db->update('mst_commodity', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_commodity');
		$this->db->where('commodity_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_commodity', array('commodity_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	
	
}
<?php
class Mst_cargo extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('*');
		$this->db->from('mst_cargo');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('hiddencargo');
		
		$cargocode = $this->input->post('cargocode'); 
		$cargotype = $this->input->post('cargotype');
		$description = $this->input->post('description');
	
		$data = array(
			'cargo_code' => $cargocode,
			'cargo_type' => $cargotype,
			'cargo_description' => $description
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_cargo', $data);
		}
		else{ //UPDATE
			$this->db->where('cargo_code', $hiddencode);
			$this->db->update('mst_cargo', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_cargo');
		$this->db->where('cargo_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_cargo', array('cargo_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	
}
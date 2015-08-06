<?php
class Mst_container_type extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('*');
		$this->db->from('mst_container_type');
		
		$query = $this->db->get();
		return $query->result_array();
	}

	public function commit(){
		$hiddencode = $this->input->post('hiddencontainertype');
		
		$containertypecode = $this->input->post('containertypecode'); 
		$containertype = $this->input->post('containertype');
	
		$data = array(
			'container_type_code' => $containertypecode,
			'container_type' => $containertype
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_container_type', $data);
		}
		else{ //UPDATE
			$this->db->where('container_type_code', $hiddencode);
			$this->db->update('mst_container_type', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_container_type');
		$this->db->where('container_type_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_container_type', array('container_type_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
}
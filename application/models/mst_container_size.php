<?php
class Mst_container_size extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('*');
		$this->db->from('mst_container_size');
		
		$query = $this->db->get();
		return $query->result_array();
	}

	public function commit(){
		$hiddencode = $this->input->post('hiddencontainersize');
		
		$containersize = $this->input->post('containersize'); 
	
		$data = array(
			'container_size' => $containersize
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_container_size', $data);
		}
		else{ //UPDATE
			$this->db->where('container_size_code', $hiddencode);
			$this->db->update('mst_container_size', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_container_size');
		$this->db->where('container_size_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_container_size', array('container_size_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
}
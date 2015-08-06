<?php
class Mst_clearence extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('*');
		$this->db->from('mst_clearence');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('hiddenclearence');
		
		$clearencecode = $this->input->post('clearencecode'); 
		$clearencetype = $this->input->post('clearencetype'); 
	
		$data = array(
			'clearence_code' => $clearencecode,
			'clearence_type' => $clearencetype
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_clearence', $data);
		}
		else{ //UPDATE
			$this->db->where('clearence_code', $hiddencode);
			$this->db->update('mst_clearence', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_clearence');
		$this->db->where('clearence_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_clearence', array('clearence_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	
}
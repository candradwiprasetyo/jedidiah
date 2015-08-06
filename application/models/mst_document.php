<?php
class Mst_document extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('*');
		$this->db->from('mst_document');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('hiddendocument');
		
		$doccode = $this->input->post('documentcode'); 
		$doccategory = $this->input->post('category'); 
		$docname = $this->input->post('name'); 
		$docdescription = $this->input->post('description'); 
	
		$data = array(
			'doc_code' => $doccode,
			'doc_category' => $doccategory,
			'doc_name' => $docname,
			'doc_description' => $docdescription
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_document', $data);
		}
		else{ //UPDATE
			$this->db->where('doc_code', $hiddencode);
			$this->db->update('mst_document', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_document');
		$this->db->where('doc_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_document', array('doc_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	
	
}
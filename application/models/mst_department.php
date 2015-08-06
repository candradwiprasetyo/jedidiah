<?php
class Mst_department extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('DE.*,DI.division_name,DI.position_code');
		$this->db->from('mst_department DE');
		$this->db->join('mst_division DI', 'DI.division_code = DE.division_code');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('hiddendepartment');
		$position = $this->input->post('selectPositionForDepartment'); 
		$division = $this->input->post('selectDivision'); 
		$departmentname = $this->input->post('departmentname'); 
	
		$data = array(
			'department_name' => $departmentname,
			'division_code' => $division
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_department', $data);
		}
		else{ //UPDATE
			$this->db->where('department_code', $hiddencode);
			$this->db->update('mst_department', $data); 
		}
		
		return true;
	}
	
	public function getbydivision($division){
		$this->db->select('DE.*,DI.division_name,DI.position_code');
		$this->db->from('mst_department DE');
		$this->db->join('mst_division DI', 'DI.division_code = DE.division_code');
		$this->db->where('DE.division_code', $division); 
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function getrow($ID){
		$this->db->select('DE.*,DI.division_name,DI.position_code');
		$this->db->from('mst_department DE');
		$this->db->join('mst_division DI', 'DI.division_code = DE.division_code');
		$this->db->where('department_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_department', array('department_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
}
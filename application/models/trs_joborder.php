<?php
class Trs_joborder extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall(){
		$this->db->select('JO.*,C.costumer_name');
		$this->db->from('trs_job_order JO');
		$this->db->join('mst_costumer C', 'C.costumer_code = JO.costumer_code');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function commit(){	
		$date = $this->input->post('date'); 
		$costumer = $this->input->post('costumer');

		$data = array(
			'costumer_code' => $costumer,
			'booking_date' => $date
		);
		

		$this->db->insert('trs_job_order', $data);
		$last_insert = $this->db->insert_id();

		$this->db->insert('trs_job_order_service', array('job_order_id' => $last_insert));
		$this->db->insert('trs_job_order_commodity', array('job_order_id' => $last_insert));
		$this->db->insert('trs_job_order_schedule', array('job_order_id' => $last_insert));
		$this->db->insert('trs_job_order_preparation', array('job_order_id' => $last_insert));
		$this->db->insert('trs_job_order_stuffing', array('job_order_id' => $last_insert));
		$this->db->insert('trs_job_order_documentation', array('job_order_id' => $last_insert));
		
		return $last_insert;
	}

	public function delete($ID){
		$result = $this->db->delete('trs_job_order', array('job_order_id' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	
	
}
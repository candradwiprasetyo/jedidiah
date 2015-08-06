<?php
class Trs_ratemanagement extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall(){
		$this->db->select('a.*,c.costumer_name');
		$this->db->from('trs_rate_managements a');
		$this->db->join('mst_costumer c', 'c.costumer_code = a.costumer_code');
		
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getmarketing(){
		$this->db->select('a.name, a.employee_code');
		$this->db->from('mst_employee a');
		$this->db->join('mst_position c', 'c.position_code = a.position_code');
		$this->db->where("c.position_code = 'MKC' or c.position_code = 'MKT'");
		
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getagent(){
		$this->db->select('a.costumer_name, a.costumer_code');
		$this->db->from('mst_costumer a');
		$this->db->where("a.default_costumer_type = 'Agent'");
		
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
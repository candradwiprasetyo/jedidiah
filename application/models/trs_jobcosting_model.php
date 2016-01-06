<?php
class Trs_jobcosting_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall(){
		$this->db->select('a.*, b.costumer_name, c.jc_status_name, d.jc_transport_type_name, e.booking_no');
		$this->db->from('trs_job_costing a');
		$this->db->join('mst_costumer b', 'b.costumer_code = a.costumer_code');
		$this->db->join('trs_job_costing_transport_type d', 'd.jc_transport_type_id = a.jc_transport_type_id');
		$this->db->join('trs_job_costing_status c', 'c.jc_status_id = a.jc_status_id');
		$this->db->join('trs_job_order e', 'e.job_order_id = a.job_order_id');
		$this->db->order_by('a.jc_id');
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
		$jc_booking = $this->input->post('i_jc_booking');
		$job_order_id = $this->input->post('i_job_order_id'); 


		$jc_closing_date = $this->input->post('i_jc_closing_date');
		$costumer_code = $this->input->post('i_costumer_code');
		$jc_transport_type_id = $this->input->post('i_jc_transport_type_id');
		$jc_eid = $this->input->post('i_jc_eid');
		$jc_party = $this->input->post('i_jc_party');
		$jc_routing = $this->input->post('i_jc_routing');
		$jc_etd = $this->input->post('i_jc_etd');
		$jc_eta = $this->input->post('i_jc_eta');
		$jc_status_id = $this->input->post('i_jc_status_id');
		$jc_usd_rate = $this->input->post('i_jc_usd_rate');
		$jc_category_id = $this->input->post('i_jc_category_id');

		
		$data = array(
			'job_order_id' => $job_order_id,
			//'jc_booking' => $jc_booking,
			//'jc_closing_date' => $this->format_back_date($jc_closing_date),
			//'costumer_code' => $costumer_code,
			//'jc_transport_type_id' => $jc_transport_type_id,
			//'jc_eid' => $jc_eid,
			//'jc_party' => $jc_party,
			//'jc_routing' => $jc_routing,
			//'jc_etd' => $jc_etd,
			//'jc_eta' => $jc_eta,
			//'jc_status_id' => $jc_status_id,
			//'jc_usd_rate' => $jc_usd_rate,
			//'jc_category_id' => $jc_category_id
		);
		
		// input type buying_rate
		$this->db->insert('trs_job_costing', $data);
		$last_insert = $this->db->insert_id();

		// input type buying_rate
		//$data['rate_management_type_id'] = 2;
		//$data['rate_management_parent_id'] = $last_insert;
		//$this->db->insert('trs_rate_managements', $data);

		//$this->db->insert('trs_job_order_documentation', array('job_order_id' => $last_insert));
		
		return $last_insert;
		
	}


	public function update($id){	
		$job_order_id = $this->input->post('i_job_order_id'); 
		$jc_booking = $this->input->post('i_jc_booking'); 
		$jc_closing_date = $this->input->post('i_jc_closing_date');
		$costumer_code = $this->input->post('i_costumer_code');
		$jc_transport_type_id = $this->input->post('i_jc_transport_type_id');
		$jc_eid = $this->input->post('i_jc_eid');
		$jc_party = $this->input->post('i_jc_party');
		$jc_routing = $this->input->post('i_jc_routing');
		$jc_etd = $this->input->post('i_jc_etd');
		$jc_eta = $this->input->post('i_jc_eta');
		$jc_status_id = $this->input->post('i_jc_status_id');
		$jc_usd_rate = $this->input->post('i_jc_usd_rate');
		$jc_category_id = $this->input->post('i_jc_category_id');

		
		$data = array(
			'job_order_id' => $job_order_id,
			'jc_booking' => $jc_booking,
			'jc_closing_date' => $this->format_back_date($jc_closing_date),
			'costumer_code' => $costumer_code,
			'jc_transport_type_id' => $jc_transport_type_id,
			'jc_eid' => $jc_eid,
			'jc_party' => $jc_party,
			'jc_routing' => $jc_routing,
			'jc_etd' => $jc_etd,
			'jc_eta' => $jc_eta,
			'jc_status_id' => $jc_status_id,
			'jc_usd_rate' => $jc_usd_rate,
			'jc_category_id' => $jc_category_id
		);
		

		$this->db->where('jc_id', $id);
		$this->db->update('trs_job_costing', $data); 
		//$this->db->insert('trs_job_order_documentation', array('job_order_id' => $last_insert));
		
		return $id;
		
	}


	public function deletebl($id){
		// delete selling
		$child_id = $this->get_rmrc_id($id);
		$this->db->delete('trs_rate_management_rate_charges', array('rmrc_id' => $child_id)); 

		$result = $this->db->delete('trs_rate_management_rate_charges', array('rmrc_id' => $id)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}

	public function deleteie($id){

		// delete selling
		$child_id = $this->get_rmrie_id($id);
		$this->db->delete('trs_rate_management_rate_inc_exc', array('rmrie_id' => $child_id)); 

		$result = $this->db->delete('trs_rate_management_rate_inc_exc', array('rmrie_id' => $id)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}

	public function deletenote($id){

		// delete selling
		$child_id = $this->get_rmn_id($id);
		$this->db->delete('trs_rate_management_notes', array('rmn_id' => $child_id)); 

		$result = $this->db->delete('trs_rate_management_notes', array('rmn_id' => $id)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}

	function read_id($id){
		$this->db->select('a.*, b.costumer_name, c.jc_status_name, d.jc_transport_type_name');
		$this->db->join('mst_costumer b', 'b.costumer_code = a.costumer_code');
		$this->db->join('trs_job_costing_transport_type d', 'd.jc_transport_type_id = a.jc_transport_type_id');
		$this->db->join('trs_job_costing_status c', 'c.jc_status_id = a.jc_status_id');
		$this->db->where('a.jc_id', $id);
		$query = $this->db->get('trs_job_costing a', 1);
		$result = null;
		foreach($query->result_array() as $row)
		{
			$result = ($row);
		}
		return $result;
	}

	function get_counter()
	{
		$sql = "select max(rate_management_number) as result from trs_rate_managements";
		
		$query = $this->db->query($sql);
	//	query();
		$result = null;
		foreach ($query->result_array() as $row) $result = ($row);

		if($result['result']){
			$new_number = $result['result'] + 1;
		}else{
			$new_number = 1000;
		}

		return $new_number;
	}

	function format_date($date)
	{
		$date = explode("-", $date);
		return $date[1]."/".$date[2]."/".$date[0];
	}

	function format_back_date($date)
	{
		$date = explode("/", $date);
		return $date[2]."-".$date[0]."-".$date[1];
	}
	
	public function commitdetail(){


			$jc_id = $this->input->post('jc_id');
			$data = $this->input->post('object_data');
			
			//print_r($data);
			
			$data = array(
				'jc_id' => $jc_id,
				'rmrc_id' => $data['t_rmrc_id'],
				'jcd_description' => $data['t_description'],	
				'jcd_partner_type' => $data['t_partner_type'],
				'jcd_partner_name' => $data['t_partner_name'],
				'jcd_unit' => $data['t_unit'],
				'currency_code' => $data['t_currency_code'],
				'jcd_rate' => $data['t_rate'],
				'jcd_jc_qty' => $data['t_jc_qty'],
				'jcd_jc_price' => $data['t_jc_price'],
				'jcd_jc_subtotal' => $data['t_jc_subtotal'],
				'jcd_rei' => $data['t_rei'],
				'jcd_pc' => $data['t_pc'],
				'jcd_due_date' => $this->format_back_date($data['t_due_date']),
				'jcd_status_id' => $data['t_status_id'],
				'jcd_qty' => $data['t_qty'],
				'jcd_aqty' => $data['t_aqty']
			);
			
			
			$this->db->insert('trs_job_costing_detail', $data);
			$last_insert = $this->db->insert_id();

			
			
			return $last_insert;
			
			
			
	}

	public function editdetail(){


			$detail_id = $this->input->post('detail_id');
			$data = $this->input->post('object_data');
			
			
			$data = array(
				
				'rmrc_id' => $data['t_rmrc_id'],
				'jcd_description' => $data['t_description'],	
				'jcd_partner_type' => $data['t_partner_type'],
				'jcd_partner_name' => $data['t_partner_name'],
				'jcd_unit' => $data['t_unit'],
				'currency_code' => $data['t_currency_code'],
				'jcd_rate' => $data['t_rate'],
				'jcd_jc_qty' => $data['t_jc_qty'],
				'jcd_jc_price' => $data['t_jc_price'],
				'jcd_jc_subtotal' => $data['t_jc_subtotal'],
				'jcd_rei' => $data['t_rei'],
				'jcd_pc' => $data['t_pc'],
				'jcd_due_date' => $this->format_back_date($data['t_due_date']),
				'jcd_status_id' => $data['t_status_id'],
				'jcd_qty' => $data['t_qty'],
				'jcd_aqty' => $data['t_aqty']
			);
			
			
			$this->db->where('jcd_id', $detail_id);
			$this->db->update('trs_job_costing_detail', $data); 

			
			
			//return $last_insert;
			
			
			
	}
	
	public function commitie(){
			$id_ratemanagement = $this->input->post('id_ratemanagement');
			$data = $this->input->post('object_data');
			
			
			$data = array(
				'rate_management_id' => $id_ratemanagement,
				'rmrie_charge_name' => $data['t2_charge'],
				'rmrie_unit' => $data['t2_unit'],	
				'rmrie_currency' => $data['t2_currency'],
				'rmrie_sell_price' => $data['t2_sell_price'],
				'rmrie_type' => $data['t2_in_ex'],
				'rmrie_remark' => $data['t2_remark']
			);
			
			
			$this->db->insert('trs_rate_management_rate_inc_exc', $data);
			$last_insert = $this->db->insert_id();

			// input selling
			
			$data['parent_id'] = $last_insert;
			$data['rate_management_id'] = $this->get_rate_management_id($id_ratemanagement);
			$this->db->insert('trs_rate_management_rate_inc_exc', $data);
			
			return $last_insert;
			
	}
	
	public function commitnote(){
			$id_ratemanagement = $this->input->post('id_ratemanagement');
			$data = $this->input->post('object_data');
			
			
			$data = array(
				'rate_management_id' => $id_ratemanagement,
				'rmn_note' => $data['t3_note']
			);
			
			
			$this->db->insert('trs_rate_management_notes', $data);
			$last_insert = $this->db->insert_id();

			// input selling
			
			$data['parent_id'] = $last_insert;
			$data['rate_management_id'] = $this->get_rate_management_id($id_ratemanagement);
			$this->db->insert('trs_rate_management_notes', $data);
			
			return $last_insert;
			
	}

	public function getby($id){
		$this->db->select('a.*, b.costumer_name, b.main_address, b.costumer_email, b.main_phone', 1);
		$this->db->join('mst_costumer b', 'b.costumer_code = a.costumer_code');
		$this->db->where('a.rate_management_id', $id);
		$query = $this->db->get('trs_rate_managements a', 1);
		
		$query = $this->db->get();
		return $query->row();
	}


	public function getdetailcharge($id){
		
			$this->db->select('*');
			$this->db->from('trs_job_costing_detail');
			$this->db->where('jc_id', $id);
			
			$query = $this->db->get();
			$str =  $this->db->last_query();
			return $query->result_array();
	}

	public function getdetailie($id){
		
			$this->db->select('*');
			$this->db->from('trs_rate_management_rate_inc_exc');
			$this->db->where('rate_management_id', $id);
			
			$query = $this->db->get();
			$str =  $this->db->last_query();
			return $query->result_array();
	}

	public function getdetailnote($id){
		
			$this->db->select('*');
			$this->db->from('trs_rate_management_notes');
			$this->db->where('rate_management_id', $id);
			
			$query = $this->db->get();
			$str =  $this->db->last_query();
			return $query->result_array();
	}

	public function delete($ID){

		// delete selling
		$child_id = $this->get_rate_management_id($ID);
		$this->db->delete('trs_rate_management_notes', array('rate_management_id' => $child_id)); 
		$this->db->delete('trs_rate_management_rate_charges', array('rate_management_id' => $child_id)); 
		$this->db->delete('trs_rate_management_rate_inc_exc', array('rate_management_id' => $child_id)); 
		$this->db->delete('trs_rate_managements', array('rate_management_id' => $child_id)); 
		
		// delete buyinh
		$this->db->delete('trs_rate_management_notes', array('rate_management_id' => $ID)); 
		$this->db->delete('trs_rate_management_rate_charges', array('rate_management_id' => $ID)); 
		$this->db->delete('trs_rate_management_rate_inc_exc', array('rate_management_id' => $ID)); 
		$result = $this->db->delete('trs_rate_managements', array('rate_management_id' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}

	function get_rate_management_id($id)
	{
		$sql = "select rate_management_id as result from trs_rate_managements where rate_management_parent_id = '$id'
				";
		
		$query = $this->db->query($sql);
		
		$result = null;
		foreach ($query->result_array() as $row) $result = ($row);
		
		return $result['result'];
	}

	function get_margin($id)
	{
		$sql = "select rate_management_margin as result from trs_rate_managements where rate_management_parent_id = '$id'
				";
		
		$query = $this->db->query($sql);
		
		$result = null;
		foreach ($query->result_array() as $row) $result = ($row);
		
		return $result['result'];
	}

	function get_rmrc_id($id)
	{
		$sql = "select rmrc_id as result from trs_rate_management_rate_charges where parent_id = '$id'
				";
		
		$query = $this->db->query($sql);
		
		$result = null;
		foreach ($query->result_array() as $row) $result = ($row);
		
		return $result['result'];
	}

	function get_rmrie_id($id)
	{
		$sql = "select rmrie_id as result from trs_rate_management_rate_inc_exc where parent_id = '$id'
				";
		
		$query = $this->db->query($sql);
		
		$result = null;
		foreach ($query->result_array() as $row) $result = ($row);
		
		return $result['result'];
	}

	function get_rmn_id($id)
	{
		$sql = "select rmn_id as result from trs_rate_management_notes where parent_id = '$id'
				";
		
		$query = $this->db->query($sql);
		
		$result = null;
		foreach ($query->result_array() as $row) $result = ($row);
		
		return $result['result'];
	}


	public function getalljoborder()
	{
		$this->db->select('a.*, b.costumer_name, c.close_date, d.mode_of_transport');
		$this->db->from('trs_job_order a');
		$this->db->join('mst_costumer b', 'b.costumer_code = a.costumer_code');
		$this->db->join('trs_job_order_schedule c', 'c.job_order_id = a.job_order_id');
		$this->db->join('trs_job_order_service d', 'd.job_order_id = a.job_order_id');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function getallrmrc()
	{
		$this->db->select('a.*, b.charge_name, c.rate_management_number');
		$this->db->from('trs_rate_management_rate_charges a');
		$this->db->join('mst_charge b', 'b.charge_code = a.rmrc_charge_name');
		$this->db->join('trs_rate_managements c', 'c.rate_management_id = a.rate_management_id');
		$this->db->where('c.rate_management_type_id', 2);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getalldetailstatus()
	{
		$this->db->select('a.*');
		$this->db->from('trs_job_costing_detail_status a');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	
}
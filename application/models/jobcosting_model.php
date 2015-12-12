<?php
class Jobcosting_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall(){
		$this->db->select('a.*, b.costumer_name');
		$this->db->from('trs_rate_managements a');
		$this->db->join('mst_costumer b', 'b.costumer_code = a.costumer_code');
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
		$rate_management_number = $this->input->post('i_rate_management_number'); 
		$rate_management_date = $this->input->post('i_rate_management_date');
		$costumer_code = $this->input->post('i_costumer_code');
		$rate_management_valid_date = $this->input->post('i_rate_management_valid_date');
		$rate_management_marketing = $this->input->post('i_rate_management_marketing');
		$rate_management_pic = $this->input->post('i_rate_management_pic');
		$service_shipment_status = $this->input->post('i_service_shipment_status');
		$service_marketing_id = $this->input->post('i_service_marketing_id');
		$service_agent_id = $this->input->post('i_service_agent_id');
		$service_moving_type = $this->input->post('i_service_moving_type');
		$service_mode_transport = $this->input->post('i_service_mode_transport');
		$product_type = $this->input->post('i_product_type');


		$data = array(
			'rate_management_number' => $rate_management_number,
			'rate_management_date' => $this->format_back_date($rate_management_date),
			'costumer_code' => $costumer_code,
			'rate_management_valid_date' => $this->format_back_date($rate_management_valid_date),
			'rate_management_marketing' => $rate_management_marketing,
			'rate_management_pic' => $rate_management_pic,
			'service_shipment_status' => $service_shipment_status,
			'service_marketing_id' => $service_marketing_id,
			'service_agent_id' => $service_agent_id,
			'service_moving_type' => $service_moving_type,
			'service_mode_transport' => $service_mode_transport,
			'product_type' => $product_type
		);
		

		$this->db->insert('trs_rate_managements', $data);
		$last_insert = $this->db->insert_id();
		//$this->db->insert('trs_job_order_documentation', array('job_order_id' => $last_insert));
		
		return $last_insert;
	}


	public function update($id){	
		$rate_management_number = $this->input->post('i_rate_management_number'); 
		$rate_management_date = $this->input->post('i_rate_management_date');
		$costumer_code = $this->input->post('i_costumer_code');
		$rate_management_valid_date = $this->input->post('i_rate_management_valid_date');
		$rate_management_marketing = $this->input->post('i_rate_management_marketing');
		$rate_management_pic = $this->input->post('i_rate_management_pic');
		$service_shipment_status = $this->input->post('i_service_shipment_status');
		$service_marketing_id = $this->input->post('i_service_marketing_id');
		$service_agent_id = $this->input->post('i_service_agent_id');
		$service_moving_type = $this->input->post('i_service_moving_type');
		$service_mode_transport = $this->input->post('i_service_mode_transport');
		$product_type = $this->input->post('i_product_type');


		$data = array(
			'rate_management_number' => $rate_management_number,
			'rate_management_date' => $this->format_back_date($rate_management_date),
			'costumer_code' => $costumer_code,
			'rate_management_valid_date' => $this->format_back_date($rate_management_valid_date),
			'rate_management_marketing' => $rate_management_marketing,
			'rate_management_pic' => $rate_management_pic,
			'service_shipment_status' => $service_shipment_status,
			'service_marketing_id' => $service_marketing_id,
			'service_agent_id' => $service_agent_id,
			'service_moving_type' => $service_moving_type,
			'service_mode_transport' => $service_mode_transport,
			'product_type' => $product_type
		);
		

		$this->db->where('rate_management_id', $id);
		$this->db->update('trs_rate_managements', $data); 
		//$this->db->insert('trs_job_order_documentation', array('job_order_id' => $last_insert));
		
		return $id;
	}


	public function deletebl($id){
		$result = $this->db->delete('trs_rate_management_rate_charges', array('rmrc_id' => $id)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}

	public function deleteie($id){
		$result = $this->db->delete('trs_rate_management_rate_inc_exc', array('rmrie_id' => $id)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}

	public function deletenote($id){
		$result = $this->db->delete('trs_rate_management_notes', array('rmn_id' => $id)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}

	function read_id($id){
		$this->db->select('a.*, b.costumer_name, b.main_address, b.costumer_email, b.main_phone', 1);
		$this->db->join('mst_costumer b', 'b.costumer_code = a.costumer_code');
		$this->db->where('a.rate_management_id', $id);
		$query = $this->db->get('trs_rate_managements a', 1);
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
		return $date[2]."/".$date[1]."/".$date[0];
	}

	function format_back_date($date)
	{
		$date = explode("/", $date);
		return $date[2]."-".$date[0]."-".$date[1];
	}
	
	public function commitdetail(){
			$id_ratemanagement = $this->input->post('id_ratemanagement');
			$data = $this->input->post('object_data');
			
			
			$data = array(
				'rate_management_id' => $id_ratemanagement,
				'rmrc_charge_name' => $data['t_charge'],
				'rmrc_origin' => $data['t_origin'],	
				'rmrc_destination' => $data['t_destionation'],
				'rmrc_unit' => $data['t_unit'],
				'rmrc_currency' => $data['t_currency'],
				'rmrc_buying' => $data['t_buying'],
				'rmrc_movement' => $data['t_movement'],
				'rmrc_load' => $data['t_load'],
				'rmrc_pc' => $data['t_pc'],
				'rmrc_cargo_type' => $data['t_cargo'],
				'rmrc_transshipment' => $data['t_transshipment'],
				'rmrc_t_time' => $data['t_time'],
				'rmrc_free_det' => $data['t_free_det'],
				'rmrc_free_dem' => $data['t_free_dem'],
				'rmrc_free_dem_det' => $data['t_free_dem_det'],
				'rmrc_min_qty' => $data['t_min_qty'],
				'rmrc_remark' => $data['t_remark']
			);
			
			
			$this->db->insert('trs_rate_management_rate_charges', $data);
			$last_insert = $this->db->insert_id();
			
			return $last_insert;
			
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
			$this->db->from('trs_rate_management_rate_charges');
			$this->db->where('rate_management_id', $id);
			
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
	
	
}
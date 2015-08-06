<?php
class Trs_stuffing extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getby($ID){
		$this->db->select('*');
		$this->db->from('trs_job_order_stuffing');
		$this->db->where('job_order_id', $ID);

		$query = $this->db->get();
		return $query->row();
	}
	
	public function getbydetail($type,$ID){
		if($type === "size"){
			$this->db->select('JO.*,S.container_size AS size_name,T.container_type AS type_name');
			$this->db->from('trs_job_order_detail_size JO');
			$this->db->join('mst_container_size S', 'S.container_size_code = JO.container_size');
			$this->db->join('mst_container_type T', 'T.container_type_code = JO.container_type');
			$this->db->where('JO.job_order_id', $ID);
			
			$query = $this->db->get();
			$str =  $this->db->last_query();
			return $query->result_array();
		}
		else if($type === "container"){
			$this->db->select('*');
			$this->db->from('trs_job_order_detail_container');
			$this->db->where('detail_size_id', $ID);
			
			$query = $this->db->get();
			$str =  $this->db->last_query();
			return $query->result_array();
		}
		else if($type === "common"){
			$id_container = $ID;
			
			$this->db->select('*');
			$this->db->from('trs_job_order_detail_commodity');
			$this->db->where('detail_container_id', $id_container);
			
			$query = $this->db->get();
			$str =  $this->db->last_query();
			return $query->result_array();
		}
		else if($type === "trucking"){
			$id_job_order = $ID;
			
			$this->db->select('*');
			$this->db->from('trs_job_order_detail_trucking');
			$this->db->where('job_order_id', $id_job_order);
			
			$query = $this->db->get();
			$str =  $this->db->last_query();
			return $query->result_array();
		}
		else if($type === "containerbyjoborder"){
			$id_job_order = $ID;
			
			$this->db->select('DC.*');
			$this->db->from('trs_job_order_detail_container DC');
			$this->db->join('trs_job_order_detail_size DS','DS.detail_size_id = DC.detail_size_id');
			$this->db->where('DS.job_order_id', $ID);
			
			$query = $this->db->get();
			$str =  $this->db->last_query();
			return $query->result_array();
		}
	}
	
	
	public function getalldetail($type){
		if($type = "quantity"){
			
		}
	}
	
	public function commitdetail($type){
		if($type === "size"){
			$id_job_order = $this->input->post('idjoborder');
			$size = $this->input->post('containersize');
			$type = $this->input->post('containertype');
			
			$data = array(
				'job_order_id' => $id_job_order,
				'container_size' => $size,
				'container_type' => $type
			);
			
			$this->db->insert('trs_job_order_detail_size', $data);
			$last_insert = $this->db->insert_id();
			$this->updateDateStuffing($id_job_order);
			return $last_insert;
		}
		else if($type === "container"){
			$id_job_order = $this->input->post('idjoborder');
			$id = $this->input->post('idSize');
			$container = $this->input->post('containerNumber');
			$seal = $this->input->post('sealNumber');
			
			$data = array(
				'detail_size_id' => $id,
				'container_number' => $container,
				'seal_number' => $seal
			);
			
			$this->db->insert('trs_job_order_detail_container', $data);
			$last_insert = $this->db->insert_id();
			$this->updateDateStuffing($id_job_order);
			return $last_insert;
		}
		else if($type === "common"){
			$id_job_order = $this->input->post('idjoborder');
			$id = $this->input->post('id_container');
			$common_id = $this->input->post('common');
			$qty = $this->input->post('qty');
			$gw = $this->input->post('gw');
			$nw = $this->input->post('nw');
			$meas = $this->input->post('meas');
			
			$data = array(
				'detail_container_id' => $id,
				'detail_common_id' => $common_id,
				'qty' => $qty,
				'gw' => $gw,
				'nw' => $nw,
				'meas' => $meas
			);
			
			$this->db->insert('trs_job_order_detail_commodity', $data);
			$last_insert = $this->db->insert_id();
			$this->updateDateStuffing($id_job_order);
			return $last_insert;
		}
		else if($type === "trucking"){
			$id = $this->input->post('idjoborder');
			$date = $this->input->post('date');
			$warehouse = $this->input->post('warehouse');
			$party = $this->input->post('party');
			
			$data = array(
				'job_order_id' => $id,
				'warehouse' => $warehouse,
				'date' => $date,
				'party' => $party
			);
			
			$this->db->insert('trs_job_order_detail_trucking', $data);
			$last_insert = $this->db->insert_id();
			$this->updateDateStuffing($id);
			return $last_insert;
		}
		
	}
	

	public function commit(){
		$hiddencode = $this->input->post('codestuffing');
		
		$ID = $this->input->post('idjoborder');
		
		date_default_timezone_set("Asia/Jakarta"); 
		$datenow = date("Y-m-d"); 

		$data = array(
			'job_order_id' => $ID,
			'date_create' => $datenow
		);

		$this->db->where('stuffing_id', $hiddencode);
		$this->db->update('trs_job_order_stuffing', $data); 
		
		$str = $this->db->last_query();
		return $str;
	}
	
	
	public function delete($ID){
		$result = $this->db->delete('mst_costumer', array('costumer_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	private function updateDateStuffing($ID){
		date_default_timezone_set("Asia/Jakarta"); 
		$datenow = date("Y-m-d"); 

		$data = array(
			'date_create' => $datenow
		);

		$this->db->where('job_order_id', $ID);
		$this->db->update('trs_job_order_stuffing', $data); 
	}
	
}
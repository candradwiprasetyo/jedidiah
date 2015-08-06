<?php
class Mst_truck_detail extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall(){
		$this->db->select('TD.*,T.truck_name,T.truck_description,C.costumer_name,D1.driver_name AS driver,D1.driver_mobile AS driver_mobile,D2.driver_name AS admin,D2.driver_mobile AS admin_mobile,D3.driver_name AS assistant,D3.driver_mobile AS assistant_mobile');
		$this->db->from('mst_truck_detail TD');
		$this->db->join('mst_truck_type T','T.truck_id = TD.truck_type');
		$this->db->join('mst_costumer C','C.costumer_code = TD.company');
		$this->db->join('mst_driver D1','D1.driver_code = TD.driver');
		$this->db->join('mst_driver D2','D2.driver_code = TD.admin');
		$this->db->join('mst_driver D3','D3.driver_code = TD.assistant');

		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function getby($categories,$ID)
	{
		$attribut = "TD.$categories";
		$this->db->select('TD.*,C.costumer_name,D1.driver_name AS driver,D1.driver_mobile AS driver_mobile,D2.driver_name AS admin,D2.driver_mobile AS admin_mobile,D3.driver_name AS assistant,D3.driver_mobile AS assistant_mobile');
		$this->db->from('mst_truck_detail TD');
		$this->db->join('mst_truck_type T','T.truck_id = TD.truck_type');
		$this->db->join('mst_costumer C','C.costumer_code = TD.company');
		$this->db->join('mst_driver D1','D1.driver_code = TD.driver');
		$this->db->join('mst_driver D2','D2.driver_code = TD.admin');
		$this->db->join('mst_driver D3','D3.driver_code = TD.assistant');
		$this->db->where($attribut, $ID);
			
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('hiddentruck');
		
		$policenumber = $this->input->post('policenumber'); 
		$trucktype = $this->input->post('trucktype');
		$company = $this->input->post('company'); 
		$driver = $this->input->post('driver'); 
		$admin = $this->input->post('admin'); 
		$assistant = $this->input->post('assistant'); 
		$remark = $this->input->post('remark'); 
		
		$data = array(
			'police_number' => $policenumber,
			'truck_type' => $trucktype,
			'driver' => $driver,
			'admin' => $admin,
			'assistant' => $assistant,
			'company' => $company,
			'remark' => $remark
		);
		
		
		if($hiddencode === ''){ //INSERT
			
			$this->db->trans_begin();
		
			$this->db->insert('mst_truck_detail', $data);
			
			if ($this->db->trans_status() === FALSE){
				$this->db->trans_rollback();
			}
			else{
				$this->db->trans_commit();
			}
			
		}
		else{ //UPDATE
			$this->db->where('detail_truck_id', $hiddencode);
			$this->db->update('mst_truck_detail', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_truck_detail');
		$this->db->where('detail_truck_id',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_truck_detail', array('detail_truck_id' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	
	
}
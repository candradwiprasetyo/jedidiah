<?php
class Trs_preparation extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('codepreparation');
		
		$ID = $this->input->post('idjoborder');
		
		$shipper = $this->input->post('shipper'); 
		$consignee = $this->input->post('consignee'); 
		$notifyparty = $this->input->post('notifyparty'); 
		$alsonotifyparty = $this->input->post('alsonotifyparty'); 
		$brokerage = $this->input->post('brokerage'); 
		$ppjk = $this->input->post('ppjk'); 
		$shipping = $this->input->post('shipping'); 
		$forwader = $this->input->post('forwader'); 
		$transshipmentagent = $this->input->post('transshipmentagent'); 
		$deliveryagent = $this->input->post('deliveryagent'); 
		
		$data = array(
			'job_order_id' => $ID,
			'shipper' => $shipper,
			'consignee' => $consignee,
			'notify' => $notifyparty,
			'also_notify' => $alsonotifyparty,
			'brokerage' => $brokerage,
			'ppjk' => $ppjk,
			'shipping' => $shipping,
			'forwader' => $forwader,
			'transshipment_agent' => $transshipmentagent,
			'delivery_agent' => $deliveryagent
		);
		
		if($hiddencode === ''){ //INSERT
			
			$this->db->trans_begin();
			$this->db->insert('trs_job_order_preparation', $data);
			
			if ($this->db->trans_status() === FALSE){
				$this->db->trans_rollback();
			}
			else{
				$this->db->trans_commit();
			}
			$str = $this->db->last_query();
			
		}
		else{ //UPDATE
			$this->db->where('preparation_id', $hiddencode);
			$this->db->update('trs_job_order_preparation', $data); 
			$str = $this->db->last_query();
		}
		
		return $str;
	}

	public function getby($ID){
		$this->db->select('*');
		$this->db->from('trs_job_order_preparation');
		$this->db->where('job_order_id', $ID);
		
		$query = $this->db->get();
		return $query->row();
	}

	public function delete($ID){
		/*$result = $this->db->delete('mst_costumer', array('costumer_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}*/
	}
	
	
	
}
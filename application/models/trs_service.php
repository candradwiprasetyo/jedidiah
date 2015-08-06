<?php
class Trs_service extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('codeservice');
		
		$ID = $this->input->post('idjoborder');
		
		$status = $this->input->post('status'); 
		$marketing = $this->input->post('marketing'); 
		$agent = $this->input->post('agent'); 
		$movingtype = $this->input->post('movingtype'); 
		$transport = $this->input->post('transport'); 
		$categories = $this->input->post('categories'); 
		$loadtype = $this->input->post('loadtype'); 
		$movementservice = $this->input->post('movementservice'); 
		$clearence = $this->input->post('clearence'); 
		$cityorigin = $this->input->post('cityorigin'); 
		$areaorigin = $this->input->post('areaorigin'); 
		$portorigin = $this->input->post('portorigin'); 
		$citydst = $this->input->post('citydst'); 
		$areadst = $this->input->post('areadst'); 
		$portdst = $this->input->post('portdst'); 
		$freight = $this->input->post('freight'); 
		$incoterm = $this->input->post('incoterm'); 
		$contract = $this->input->post('contract'); 
		$payable = $this->input->post('payable'); 
		$payment = $this->input->post('payment'); 

	
		$data = array(
			'job_order_id' => $ID,
			'shipment_status' => $status,
			'marketing' => $marketing,
			'agent' => $agent,
			'moving_type' => $movingtype,
			'mode_of_transport' => $transport,
			'product_categories' => $categories,
			'load_type' => $loadtype,
			'movement_service' => $movementservice,
			'clearence' => $clearence,
			'place_of_receipt' => $cityorigin,
			'pickup_area' => $areaorigin,
			'port_of_loading' => $portorigin,
			'place_of_delivery' => $citydst,
			'delivery_area' => $areadst,
			'port_of_discharge' => $portdst,
			'freight' => $freight,
			'incoterm' => $incoterm,
			'contract_no' => $contract,
			'payable_at' => $payable,
			'payment_method' => $payment
		);
		
		if($hiddencode === ''){ //INSERT
			
			$this->db->trans_begin();
			$this->db->insert('trs_job_order_service', $data);
			
			if ($this->db->trans_status() === FALSE){
				$this->db->trans_rollback();
			}
			else{
				$this->db->trans_commit();
			}
			$str = $this->db->last_query();
			
		}
		else{ //UPDATE
			$this->db->where('service_id', $hiddencode);
			$this->db->update('trs_job_order_service', $data); 
			$str = $this->db->last_query();
		}
		
		return $str;
	}

	public function getby($ID){
		$this->db->select('*');
		$this->db->from('trs_job_order_service');
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
<?php
class Mst_payment extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('*');
		$this->db->from('mst_payment');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('hiddenpayment');
		
		$paymentcode = $this->input->post('paymentcode'); 
		$paymentmethod = $this->input->post('paymentmethod');
	
		$data = array(
			'payment_code' => $paymentcode,
			'payment_method' => $paymentmethod
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_payment', $data);
		}
		else{ //UPDATE
			$this->db->where('payment_code', $hiddencode);
			$this->db->update('mst_payment', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_payment');
		$this->db->where('payment_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_payment', array('payment_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	
	
}
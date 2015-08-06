<?php
class Mst_exchange extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('E.*,C.currency_name,C.currency_symbol');
		$this->db->from('mst_exchange E');
		$this->db->join('mst_currency C', 'C.currency_code = E.currency_code');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('hiddenexchange');
		
		$validdate = $this->input->post('validdate');
		$validuntil = $this->input->post('validuntil');
		$exchange = $this->input->post('exchange');
		$currencycode = $this->input->post('currencyselect');
	
		$data = array(
			'valid_date' => $validdate,
			'valid_until' => $validuntil,
			'exchange_rate' => $exchange,
			'currency_code' => $currencycode
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_exchange', $data);
		}
		else{ //UPDATE
			$this->db->where('exchange_code', $hiddencode);
			$this->db->update('mst_exchange', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('E.*,C.currency_name,C.currency_symbol');
		$this->db->from('mst_exchange E');
		$this->db->join('mst_currency C', 'C.currency_code = E.currency_code');
		$this->db->where('exchange_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_exchange', array('exchange_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	
	
}
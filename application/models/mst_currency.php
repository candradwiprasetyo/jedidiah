<?php
class Mst_currency extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('*');
		$this->db->from('mst_currency');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('hiddencurrency');
		
		$currencycode = $this->input->post('currencycode'); 
		$currencysymbol = $this->input->post('currencysymbol');
		$currencyname = $this->input->post('currencyname');
	
		$data = array(
			'currency_code' => $currencycode,
			'currency_symbol' => $currencysymbol,
			'currency_name' => $currencyname
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_currency', $data);
		}
		else{ //UPDATE
			$this->db->where('currency_code', $hiddencode);
			$this->db->update('mst_currency', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_currency');
		$this->db->where('currency_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_currency', array('currency_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	
	
}
<?php
class Mst_company extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('*');
		$this->db->from('mst_company');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('hiddencompany');
		
		$companyname = $this->input->post('companyname'); 
		$phone = $this->input->post('phone'); 
		$fax = $this->input->post('fax'); 
		$email = $this->input->post('email'); 
		$website = $this->input->post('website'); 
		$address = $this->input->post('address'); 
		$city = $this->input->post('city'); 
		$country = $this->input->post('country'); 
		$zip = $this->input->post('zip'); 
		$currency = $this->input->post('currency'); 
	
		$data = array(
			'company_name' => $companyname,
			'phone' => $phone,
			'fax' => $fax,
			'email' => $email,
			'web' => $website,
			'address' => $address,
			'city' => $city,
			'country' => $country,
			'zip_code' => $zip,
			'default_currency' => $currency
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_company', $data);
		}
		else{ //UPDATE
			$this->db->where('company_code', $hiddencode);
			$this->db->update('mst_company', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_company');
		$this->db->where('company_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_company', array('company_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	
	
}
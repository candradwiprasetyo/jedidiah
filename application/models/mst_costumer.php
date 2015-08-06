<?php
class Mst_costumer extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		/*$this->db->select('E.*,DP.department_name,D.division_name,P.position_sales');
		$this->db->from('mst_employee E');
		$this->db->join('mst_position P', 'P.position_code = E.position_code','left');
		$this->db->join('mst_division D', 'D.division_code = E.division_code','left');
		$this->db->join('mst_department DP', 'DP.department_code = E.department_code','left');*/
		
		$this->db->select('*');
		$this->db->from('mst_costumer');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function getby($categories)
	{
		$categories = "C.$categories";

		$this->db->select('C.*');
		$this->db->from('mst_costumer C');
		$this->db->where($categories, '1'); 
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function getbynotify()
	{
		$this->db->select('C.*');
		$this->db->from('mst_costumer C');
		$this->db->where('C.consignee', '1');
		$this->db->or_where('C.shipper', '1'); 		
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function getforshippingdoc()
	{
		$this->db->select('C.*');
		$this->db->from('mst_costumer C');
		$this->db->where('C.as_costumer', '1');
		$this->db->or_where('C.consignee', '1'); 		
		$this->db->or_where('C.shipper', '1'); 		
		$this->db->or_where('C.other', '1'); 		
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	
	public function commit(){
		$hiddencode = $this->input->post('hiddencostumer');
		
		$code = $this->input->post('code'); 
		$name = $this->input->post('name'); 
		$email = $this->input->post('email'); 
		$web = $this->input->post('web'); 
		$note = $this->input->post('note'); 
		$addressmain = $this->input->post('addressmain'); 
		$citymain = $this->input->post('citymain'); 
		$provincymain = $this->input->post('provincymain'); 
		$countrymain = $this->input->post('countrymain'); 
		$postcodemain = $this->input->post('postcodemain'); 
		$phonemain = $this->input->post('phonemain'); 
		$faxmain = $this->input->post('faxmain'); 
		$picmain = $this->input->post('picmain'); 
		$picmobilemain = $this->input->post('picmobilemain'); 
		$costumertype = $this->input->post('costumertype'); 
		$creditlimit = $this->input->post('creditlimit'); 
		$creditperiode = $this->input->post('creditperiode'); 
		$vendortype = $this->input->post('vendortype'); 
		$creditperiodevendor = $this->input->post('creditperiodevendor'); 

		$ascostumer = ($this->input->post('ascostumer') === "1" ? "1" : "0");
		$asvendor = ($this->input->post('asvendor') === "1" ? "1" : "0");
		$costumer = ($this->input->post('costumer') === "1" ? "1" : "0");
		$agent = ($this->input->post('agent') === "1" ? "1" : "0");
		$shipping = ($this->input->post('shipping') === "1" ? "1" : "0");
		$air = ($this->input->post('air') === "1" ? "1" : "0");
		$forwader = ($this->input->post('forwader') === "1" ? "1" : "0");
		$brokerage = ($this->input->post('brokerage') === "1" ? "1" : "0");
		$trucking = ($this->input->post('trucking') === "1" ? "1" : "0");
		$warehousing = ($this->input->post('warehousing') === "1" ? "1" : "0");
		$government = ($this->input->post('government') === "1" ? "1" : "0");
		$other = ($this->input->post('other') === "1" ? "1" : "0");
		$shipper = ($this->input->post('shipper') === "1" ? "1" : "0");
		$consignee = ($this->input->post('consignee') === "1" ? "1" : "0");
		$consolidator = ($this->input->post('consolidator') === "1" ? "1" : "0");
		$buyer = ($this->input->post('buyer') === "1" ? "1" : "0");
		$seller = ($this->input->post('seller') === "1" ? "1" : "0");
		$fumigator = ($this->input->post('fumigator') === "1" ? "1" : "0");
		$container = ($this->input->post('container') === "1" ? "1" : "0");
		$customs = ($this->input->post('customs') === "1" ? "1" : "0");
		$port = ($this->input->post('port') === "1" ? "1" : "0");
		
		$data = array(
			'costumer_code' => $code,
			'costumer_name' => $name,
			'costumer_email' => $email,
			'costumer_website' => $web,
			'note' => $note,
			'main_address' => $addressmain,
			'main_city' => $citymain,
			'main_provincy' => $provincymain,
			'main_country' => $countrymain,
			'main_zipcode' => $postcodemain,
			'main_phone' => $phonemain,
			'main_fax' => $faxmain,
			'main_pic' => $picmain,
			'main_pic_mobile' => $picmobilemain,
			'default_costumer_type' => $costumertype,
			'costumer_credit_limit' => $creditlimit,
			'costumer_credit_periode' => $creditperiode,
			'default_vendor_type' => $vendortype,
			'vendor_credit_periode' => $creditperiodevendor,
			'as_costumer' => $ascostumer,
			'as_vendor' => $asvendor,
			'costumer' => $costumer,
			'agent' => $agent,
			'shipping' => $shipping,
			'air' => $air,
			'forwader' => $forwader,
			'brokerage' => $brokerage,
			'trucking' => $trucking,
			'warehousing' => $warehousing,
			'government' => $government,
			'other' => $other,
			'shipper' => $shipper,
			'consignee' => $consignee,
			'consolidator' => $consolidator,
			'buyer' => $buyer,
			'seller' => $seller,
			'fumigator' => $fumigator,
			'container' => $container,
			'customs' => $customs,
			'port' => $port
		);
		
		$addresses = $this->input->post('addresswh');
		$cities = $this->input->post('citywh');
		$provincies = $this->input->post('provincywh');
		$countries = $this->input->post('countrywh');
		$postcodes = $this->input->post('postcodewh');
		$jumlahwarehouse = count($addresses);
		
		$legals = $this->input->post('legalities');
		$numbers = $this->input->post('number');
		$dates = $this->input->post('date');
		$jumlahlegal = count($legals);
		
		if($hiddencode === ''){ //INSERT
			
			$this->db->trans_begin();
			
			$this->db->insert('mst_costumer', $data);
			
			for($i=0; $i<$jumlahwarehouse ; $i++){
				if($addresses[$i]=='' && $cities[$i]=='' && $provincies[$i]=='' && $countries[$i]=='' && $postcodes[$i]==''){
					continue;
				}
				else{
					
					$datawarehouse = array(
						'costumer_code' => $code,
						'warehouse_address' => $addresses[$i],
						'warehouse_city' => $cities[$i],
						'warehouse_provincy' => $provincies[$i],
						'warehouse_country' => $countries[$i],
						'warehouse_zipcode' => $postcodes[$i]
					);
					
					$this->db->insert('mst_costumer_detail_warehouse', $datawarehouse);
				}
			}
			
			
			for($i=0; $i<$jumlahlegal ; $i++){
				if($legals[$i]=='' && $numbers[$i]=='' && $dates[$i]==''){
					continue;
				}
				else{
					
					$datalegal = array(
						'costumer_code' => $code,
						'legalities_code' => $legals[$i],
						'legal_number' => $numbers[$i],
						'legal_date' => $dates[$i]
					);
					
					$this->db->insert('mst_costumer_detail_legal', $datalegal);
				}
			}
			
			if ($this->db->trans_status() === FALSE){
				$this->db->trans_rollback();
			}
			else{
				$this->db->trans_commit();
			}
			
		}
		else{ //UPDATE
			$this->db->where('costumer_code', $hiddencode);
			$this->db->update('mst_costumer', $data); 
		}
		
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('*');
		$this->db->from('mst_costumer');
		$this->db->where('costumer_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
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
	
	
	
}
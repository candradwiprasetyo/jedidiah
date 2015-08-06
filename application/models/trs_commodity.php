<?php
class Trs_commodity extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('codecommodity');
		
		$ID =  $this->input->post('idjoborder');
		
		$cargotype = $this->input->post('cargotype'); 
		$nett = $this->input->post('nett'); 
		$gross = $this->input->post('gross'); 
		$totalmeass = $this->input->post('totalmeass'); 
		
		//detail common
		$commodity = $this->input->post('commodity'); 
		$hscode = $this->input->post('hscode'); 
		$writteninbl = $this->input->post('writteninbl'); 
		$merk = $this->input->post('merk'); 
		$type = $this->input->post('type'); 
		$code = $this->input->post('code'); 
		$qty = $this->input->post('qty'); 
		$packaging = $this->input->post('packaging'); 
		$gw = $this->input->post('gw'); 
		$nw = $this->input->post('nw'); 
		$meas = $this->input->post('meas'); 
		$currency = $this->input->post('currency'); 
		$price = $this->input->post('price'); 
		$amount = $this->input->post('amount'); 
		
		$jumlahcommon = count($commodity);
		
		//detail instruction
		$instruction = $this->input->post('instruction'); 
		
		$jumlahins = count($instruction);

		$data = array(
			'job_order_id' => $ID,
			'cargo_code' => $cargotype,
			'total_nett' => $nett,
			'total_gross' => $gross,
			'total_meas' => $totalmeass

		);
		
		if($hiddencode === ''){ //INSERT
			
			$this->db->trans_begin();
			
			$this->db->insert('trs_job_order_commodity', $data);
			
			for($i=0; $i<$jumlahcommon ; $i++){
				if($commodity[$i]==''){
					continue;
				}
				else{
					$datacommon = array(
						'job_order_id' => $ID,
						'common_name' => $commodity[$i],
						'written_in_bl' => $writteninbl[$i],
						'merk' => $merk[$i],
						'type' => $type[$i],
						'code' => $code[$i],
						'qty' => $qty[$i],
						'packaging' => $packaging[$i],
						'gw' => $gw[$i],
						'nw' => $nw[$i],
						'meas' => $meas[$i],
						'currency' => $currency[$i],
						'price' => $price[$i],
						'amount' => $amount[$i]
					);	
					$this->db->insert('trs_job_order_detail_common', $datacommon);
				}
			}
			
			for($i=0; $i<$jumlahins ; $i++){
				if($instruction[$i]==''){
					continue;
				}
				else{
					$datainstruction = array(
						'job_order_id' => $ID,
						'instruction' => $instruction[$i]
					);	
					$this->db->insert('trs_job_order_detail_instruction', $datainstruction);
				}
			}
			
			
			if ($this->db->trans_status() === FALSE){
				$this->db->trans_rollback();
			}
			else{
				$this->db->trans_commit();
			}
			$str = $this->db->last_query();
			
		}
		else{ //UPDATE

			$this->db->trans_begin();

			$this->db->where('commodity_id', $hiddencode);
			$this->db->update('trs_job_order_commodity', $data); 

			$this->db->delete('trs_job_order_detail_common', array('job_order_id' => $ID)); 
			$this->db->delete('trs_job_order_detail_instruction', array('job_order_id' => $ID)); 

			for($i=0; $i<$jumlahcommon ; $i++){
				if($commodity[$i]==''){
					continue;
				}
				else{
					$datacommon = array(
						'job_order_id' => $ID,
						'common_name' => $commodity[$i],
						'written_in_bl' => $writteninbl[$i],
						'merk' => $merk[$i],
						'type' => $type[$i],
						'code' => $code[$i],
						'qty' => $qty[$i],
						'packaging' => $packaging[$i],
						'gw' => $gw[$i],
						'nw' => $nw[$i],
						'meas' => $meas[$i],
						'currency' => $currency[$i],
						'price' => $price[$i],
						'amount' => $amount[$i]
					);	
					$this->db->insert('trs_job_order_detail_common', $datacommon);
				}
			}
			
			for($i=0; $i<$jumlahins ; $i++){
				if($instruction[$i]==''){
					continue;
				}
				else{
					$datainstruction = array(
						'job_order_id' => $ID,
						'instruction' => $instruction[$i]
					);	
					$this->db->insert('trs_job_order_detail_instruction', $datainstruction);
				}
			}

			if ($this->db->trans_status() === FALSE){
				$this->db->trans_rollback();
			}
			else{
				$this->db->trans_commit();
			}
			$str = $this->db->last_query();

		}
		
		return $str;
	}

	public function getbydetail($type,$ID){
		if($type === "commodity"){
			$this->db->select('DC.*,C.commodity_name,P.package_code,P.packaging,CU.currency_symbol,CU.currency_name');
			$this->db->from('trs_job_order_detail_common DC');
			$this->db->join('mst_commodity C', 'C.commodity_code = DC.common_name');
			$this->db->join('mst_packaging P', 'P.package_code = DC.packaging');
			$this->db->join('mst_currency CU', 'CU.currency_code = DC.currency');
			$this->db->where('DC.job_order_id', $ID);
			
			$query = $this->db->get();
			return $query->result_array();
		}
		else if($type === "commodityform"){
			$this->db->select('*');
			$this->db->from('trs_job_order_commodity');
			$this->db->where('job_order_id', $ID);

			$query = $this->db->get();
			return $query->row();
		}
		else if($type === "instruction"){
			$this->db->select('*');
			$this->db->from('trs_job_order_detail_instruction');
			$this->db->where('job_order_id', $ID);

			$query = $this->db->get();
			return $query->result_array();
		}
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
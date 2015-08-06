<?php
class Trs_schedule extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('codeschedule');
		
		$ID = $this->input->post('idjoborder');
		
		$readinessdate = $this->input->post('readinessdate'); 
		$shippingafter = $this->input->post('shippingafter'); 
		$shippingbefore = $this->input->post('shippingbefore'); 
		$deliveryafter = $this->input->post('deliveryafter'); 
		$deliverybefore = $this->input->post('deliverybefore'); 
		$transshipment = $this->input->post('transshipment'); 
		$transcountry = $this->input->post('transcountry'); 
		$transport = $this->input->post('transport'); 
		$vessel = $this->input->post('vessel'); 
		$voy = $this->input->post('voy'); 
		$etdpol = $this->input->post('etdpol'); 
		$etdpod = $this->input->post('etdpod'); 
		$opentime = $this->input->post('opentime'); 
		$opendate = $this->input->post('opendate'); 
		$closingtime = $this->input->post('closingtime'); 
		$closingdate = $this->input->post('closingdate'); 
		
		//detail transshipment
		$connectingvessel = $this->input->post('connectingvessel'); 
		$connectingport = $this->input->post('connectingport'); 
		$etd = $this->input->post('etd'); 
		$eta = $this->input->post('eta'); 
		
		$jumlahvessel = count($connectingvessel);
		
		$data = array(
			'job_order_id' => $ID,
			'readiness_date' => $readinessdate,
			'shipping_after' => $shippingafter,
			'shipping_before' => $shippingbefore,
			'request_after' => $deliveryafter,
			'request_before' => $deliverybefore,
			'transshipment' => $transshipment,
			'transshipment_country' => $transcountry,
			'transshipment_port' => $transport,
			'vessel_code' => $vessel,
			'voy' => $voy,
			'etd_pol' => $etdpol,
			'etd_pod' => $etdpod,
			'open_time' => $opentime,
			'open_date' => $opendate,
			'close_time' => $closingtime,
			'close_date' => $closingdate
		);
		
		if($hiddencode === ''){ //INSERT
			
			$this->db->trans_begin();
			
			$this->db->insert('trs_job_order_schedule', $data);
			
			for($i=0; $i<$jumlahvessel ; $i++){
				if($connectingvessel[$i]==''){
					continue;
				}
				else{
					$datatransshipment = array(
						'job_order_id' => $ID,
						'connecting_vessel' => $connectingvessel[$i],
						'connecting_port' => $connectingport[$i],
						'etd' => $etd[$i],
						'eta' => $eta[$i]
					);	
					$this->db->insert('trs_job_order_detail_transshipment', $datatransshipment);
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

			$this->db->where('schedule_id', $hiddencode);
			$this->db->update('trs_job_order_schedule', $data); 

			$this->db->delete('trs_job_order_detail_transshipment', array('job_order_id' => $ID)); 

			for($i=0; $i<$jumlahvessel ; $i++){
				if($connectingvessel[$i]==''){
					continue;
				}
				else{
					$datatransshipment = array(
						'job_order_id' => $ID,
						'connecting_vessel' => $connectingvessel[$i],
						'connecting_port' => $connectingport[$i],
						'etd' => $etd[$i],
						'eta' => $eta[$i]
					);	
					$this->db->insert('trs_job_order_detail_transshipment', $datatransshipment);
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

	public function getby($ID){
		$this->db->select('*');
		$this->db->from('trs_job_order_schedule');
		$this->db->where('job_order_id', $ID);
		
		$query = $this->db->get();
		return $query->row();
	}

	public function getbydetail($type,$ID){
		if($type === "vessel"){
			$this->db->select('*');
			$this->db->from('trs_job_order_detail_transshipment');
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
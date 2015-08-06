<?php
class Trs_documentation extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function commit(){
		$hiddencode = $this->input->post('codedocumentation');

		$ID = $this->input->post('idjoborder'); 
		
		$costumersi = $this->input->post('costumersi'); 
		$ajunumber = $this->input->post('ajunumber'); 
		$ajuDate = $this->input->post('ajudate'); 
		$pebnumber = $this->input->post('pebnumber'); 
		$pebdate = $this->input->post('pebdate'); 
		$insurance = $this->input->post('insurance'); 
		$insurancecondition = $this->input->post('insurancecondition'); 
		$insurancevalue = $this->input->post('insurancevalue'); 
		$shippingdoc = $this->input->post('shippingdoc'); 
		$address = $this->input->post('address'); 
		$phone = $this->input->post('phone'); 
		$pic = $this->input->post('pic'); 
		$sentby = $this->input->post('sentby'); 
		$employee = $this->input->post('employee'); 
		$courrier = $this->input->post('courrier'); 
		$deliverynumber = $this->input->post('deliverynumber'); 
		$receiptnumber = $this->input->post('receiptnumber'); 

	
		$data = array(
			'job_order_id' => $ID,
			'costumer_si_no' => $costumersi,
			'aju_number' => $ajunumber,
			'aju_date' => $ajuDate,
			'peb_number' => $pebnumber,
			'peb_date' => $pebdate,
			'insurance' => $insurance,
			'insurance_condition' => $insurancecondition,
			'insurance_value' => $insurancevalue,
			'shipping_doc' => $shippingdoc,
			'sent_by' => $sentby,
			'sent_by_us' => $employee,
			'sent_by_courrier' => $courrier,
			'delivery_number' => $deliverynumber,
			'receipt_number' => $receiptnumber
		);
		
		if($hiddencode === ''){ //INSERT
			
			$this->db->trans_begin();
			$this->db->insert('trs_job_order_documentation', $data);
			
			if ($this->db->trans_status() === FALSE){
				$this->db->trans_rollback();
			}
			else{
				$this->db->trans_commit();
			}
			$str = $this->db->last_query();
			
		}
		else{ //UPDATE
			$this->db->where('documentation_id', $hiddencode);
			$this->db->update('trs_job_order_documentation', $data); 
			$str = $this->db->last_query();
		}
		
		return $str;
	}
	
	public function getby($ID){
		$this->db->select('*');
		$this->db->from('trs_job_order_documentation');
		$this->db->where('job_order_id', $ID);
		
		$query = $this->db->get();
		return $query->row();
	}

	public function getbydetail($type,$ID){
		if($type === "billofleading"){
			$this->db->select('*');
			$this->db->from('trs_job_order_detail_billofleading');
			$this->db->where('job_order_id', $ID);
			
			$query = $this->db->get();
			$str =  $this->db->last_query();
			return $query->result_array();
		}
		else if($type === "requestdocument"){
			$this->db->select('*');
			$this->db->from('trs_job_order_detail_requestdocument');
			$this->db->where('job_order_id', $ID);
			
			$query = $this->db->get();
			$str =  $this->db->last_query();
			return $query->result_array();
		}
		else if($type === "wdbl"){
			$this->db->select('WD.*,WDM.*');
			$this->db->from('trs_job_order_detail_workingdetail WD');
			$this->db->join('trs_job_order_detail_billofleading BL', 'BL.detail_billofleading_id = WD.detail_billofleading_id');
			$this->db->join('trs_job_order_detail_workingdetail_master WDM', 'WDM.job_order_id = BL.job_order_id');
			$this->db->where('BL.detail_billofleading_id', $ID);
			
			$query = $this->db->get();
			return $query->row(); 
		}
		else if($type === "wdrequest"){
			$this->db->select('WD.*,WDM.*');
			$this->db->from('trs_job_order_detail_workingdetail WD');
			$this->db->join('trs_job_order_detail_requestdocument RD', 'RD.detail_requestdocument_id = WD.detail_requestdocument_id');
			$this->db->join('trs_job_order_detail_workingdetail_master WDM', 'WDM.job_order_id = RD.job_order_id');
			$this->db->where('RD.detail_requestdocument_id', $ID);

			$query = $this->db->get();
			return $query->row(); 
		}	
	}
	
	public function commitdetail($type){
		if($type === "billofleading"){
			$id_job_order = $this->input->post('idjoborder');
			$data = $this->input->post('object_data');
			
			$data = array(
				'job_order_id' => $id_job_order,
				'bl_type' => $data['bl_type'],
				'number' => $data['number'],	
				'original' => $data['original'],
				'copy' => $data['copy'],
				'freight' => $data['freight'],
				'status' => $data['status'],
				'movement' => $data['movement'],
				'load_type' => $data['load_type'],
				'note' => $data['note']
			);
			
			$this->db->insert('trs_job_order_detail_billofleading', $data);
			$last_insert = $this->db->insert_id();
			
			$dataWorkingDetail = array(
				'detail_billofleading_id' => $last_insert
			);

			$this->db->insert('trs_job_order_detail_workingdetail', $dataWorkingDetail);

			return $last_insert;
		}
		else if($type === "requestdocument"){
			$id_job_order = $this->input->post('idjoborder');
			$data = $this->input->post('object_data');
			
			$data = array(
				'job_order_id' => $id_job_order,
				'document' => $data['document_name'],
				'number' => $data['number'],	
				'original' => $data['original'],
				'copy' => $data['copy'],
				'legalisir' => $data['legalisir'],
				'note' => $data['note']
			);
			
			$this->db->insert('trs_job_order_detail_requestdocument', $data);
			$last_insert = $this->db->insert_id();
			
			$dataWorkingDetail = array(
				'detail_requestdocument_id' => $last_insert
			);

			$this->db->insert('trs_job_order_detail_workingdetail', $dataWorkingDetail);

			return $last_insert;
		}
		else if($type === "workingdetail"){
			$data = array(
				'kirim_data' => $this->input->post('kirimData'),
				'terima_draft' => $this->input->post('terimaDraft'),
				'cek_draft' => $this->input->post('cekDraft'),
				'draft_ok' => $this->input->post('draftOk'),
				'kirim_draft' => $this->input->post('kirimDraft'),
				'terima_konfirmasi' => $this->input->post('terimaKonfirmasi'),
				'kirim_konfirmasi' => $this->input->post('kirimKonfirmasi'),
				'cetak_original' => $this->input->post('cetakOriginal'),
				'ambil_original' => $this->input->post('ambilOriginal'),
				'kirim_original' => $this->input->post('kirimOriginal'),
				'telex_release' => $this->input->post('telexRelease'),
				'mbl_finished' => $this->input->post('mblFinished'),
				'kirim_data_ket' => $this->input->post('kirimDataKet'),
				'terima_draft_ket' => $this->input->post('terimaDraftKet'),
				'cek_draft_ket' => $this->input->post('cekDraftKet'),
				'draft_ok_ket' => $this->input->post('draftOkKet'),
				'kirim_draft_ket' => $this->input->post('kirimDraftKet'),
				'terima_konfirmasi_ket' => $this->input->post('terimaKonfirmasiKet'),
				'kirim_konfirmasi_ket' => $this->input->post('kirimKonfirmasiKet'),
				'cetak_original_ket' => $this->input->post('cetakOriginalKet'),
				'ambil_original_ket' => $this->input->post('ambilOriginalKet'),
				'kirim_original_ket' => $this->input->post('kirimOriginalKet'),
				'telex_release_ket' => $this->input->post('telexReleaseKet'),
				'mbl_finished_ket' => $this->input->post('mblFinishedKet')
			);

			$this->db->where('detail_workingdetail_id', $this->input->post('idWorkingDetail'));
			$this->db->update('trs_job_order_detail_workingdetail', $data); 
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
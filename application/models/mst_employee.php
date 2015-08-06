<?php
class Mst_employee extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function getall()
	{
		$this->db->select('E.*,DP.department_name,D.division_name,P.position_sales');
		$this->db->from('mst_employee E');
		$this->db->join('mst_position P', 'P.position_code = E.position_code','left');
		$this->db->join('mst_division D', 'D.division_code = E.division_code','left');
		$this->db->join('mst_department DP', 'DP.department_code = E.department_code','left');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function getmarketing(){
		$this->db->select('E.*,DP.department_name,D.division_name,P.position_sales');
		$this->db->from('mst_employee E');
		$this->db->join('mst_position P', 'P.position_code = E.position_code','left');
		$this->db->join('mst_division D', 'D.division_code = E.division_code','left');
		$this->db->join('mst_department DP', 'DP.department_code = E.department_code','left');
		$this->db->where('P.position_code', 'MKT');
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	
	public function commit(){
		$hiddencode = $this->input->post('hiddenemployee');
		
		$code = $this->input->post('code'); 
		$name = $this->input->post('name'); 
		$address = $this->input->post('address'); 
		$city = $this->input->post('city'); 
		$phone = $this->input->post('phone'); 
		$mobile = $this->input->post('mobile'); 
		$email = $this->input->post('email'); 
		$idcardnumber = $this->input->post('idcardnumber'); 
		$idcardname = $this->input->post('idcardname'); 
		$idcardaddress = $this->input->post('idcardaddress'); 
		$idcardcity = $this->input->post('idcardcity'); 
		
		$datebirth = $this->input->post('datebirth');
		$datebirth = ($datebirth === "" ? "0000-00-00" : $datebirth);
		
		$placebirth = $this->input->post('placebirth'); 
		$educationlevel = $this->input->post('educationlevel'); 
		$educationname = $this->input->post('educationname'); 
		$lastempcompany = $this->input->post('lastempcompany'); 
		
		$lastempdate = $this->input->post('lastempdate'); 
		$lastempdate = ($lastempdate === "" ? "0000-00-00" : $lastempdate);
		
		$lastempposition = $this->input->post('lastempposition'); 
		$religion = $this->input->post('religion'); 
		$bloodgroup = $this->input->post('bloodgroup'); 
		$citizen = $this->input->post('citizen'); 
		$sex = $this->input->post('sex'); 
		$maritalstatus = $this->input->post('maritalstatus'); 
		
		$children = $this->input->post('children'); 
		$children = ($children === "" ? "0" : $children);
		
		$position = $this->input->post('position'); 
		$division = $this->input->post('division'); 
		$department = $this->input->post('department'); 
		
		$workingdate = $this->input->post('workingdate');
		$workingdate = ($workingdate === "" ? "0000-00-00" : $workingdate);
		
		$appointmentdate = $this->input->post('appointmentdate'); 
		$appointmentdate = ($appointmentdate === "" ? "0000-00-00" : $appointmentdate);
		
		$workingage = $this->input->post('workingage');
		$npwpnumber = $this->input->post('npwpnumber');
		
		$npwpdate = $this->input->post('npwpdate'); 
		$npwpdate = ($npwpdate === "" ? "0000-00-00" : $npwpdate);
		
		$bpjsnumber = $this->input->post('bpjsnumber'); 
		
		$bpjsdate = $this->input->post('bpjsdate'); 
		$bpjsdate = ($bpjsdate === "" ? "0000-00-00" : $bpjsdate);
		
		$insurancenumber = $this->input->post('insurancenumber');
		
		$insurancedate = $this->input->post('insurancedate'); 
		$insurancedate = ($insurancedate === "" ? "0000-00-00" : $insurancedate);
		
		$banknumber = $this->input->post('banknumber'); 
		$bankname = $this->input->post('bankname'); 
		$bankaddress = $this->input->post('bankaddress'); 
		$employeestatus = $this->input->post('employeestatus');		
	
		$data = array(
			'employee_code' => $code,
			'name' => $name,
			'address' => $address,
			'city' => $city,
			'phone' => $phone,
			'mobile' => $mobile,
			'email' => $email,
			'id_card_number' => $idcardnumber,
			'id_card_name' => $idcardname,
			'id_card_address' => $idcardaddress,
			'id_card_city' => $idcardcity,
			'date_of_birth' => $datebirth,
			'place_of_birth' => $placebirth,
			'education_level' => $educationlevel,
			'education_name' => $educationname,
			'last_employment_company' => $lastempcompany,
			'last_employment_date' => $lastempdate,
			'last_employment_position' => $lastempposition,
			'religion' => $religion,
			'blood_group' => $bloodgroup,
			'citizen' => $citizen,
			'sex' => $sex,
			'marital_status' => $maritalstatus,
			'children' => $children,
			'position_code' => $position,
			'division_code' => $division,
			'department_code' => $department,
			'start_working_date' => $workingdate,
			'appointment_date' => $appointmentdate,
			'working_age' => $workingage,
			'npwp_number' => $npwpnumber,
			'npwp_date' => $npwpdate,
			'bpjs_number' => $bpjsnumber,
			'bpjs_date' => $bpjsdate,
			'insurance_number' => $insurancenumber,
			'insurance_date' => $insurancedate,
			'bank_account_number' => $banknumber,
			'bank_name' => $bankname,
			'bank_address' => $bankaddress,
			'status' => $employeestatus
		);
		
		if($hiddencode === ''){ //INSERT
			$this->db->insert('mst_employee', $data);
		}
		else{ //UPDATE
			$this->db->where('employee_code', $hiddencode);
			$this->db->update('mst_employee', $data); 
		}
		
		$str = $this->db->last_query();
		return true;
	}
	
	public function getrow($ID){
		$this->db->select('E.*,DP.department_name,D.division_name,P.position_sales');
		$this->db->from('mst_employee E');
		$this->db->join('mst_position P', 'P.position_code = E.position_code','left');
		$this->db->join('mst_division D', 'D.division_code = E.division_code','left');
		$this->db->join('mst_department DP', 'DP.department_code = E.department_code','left');
		$this->db->where('E.employee_code',$ID);
		
		$query = $this->db->get();
		return $query->row(); 
	}
	
	public function delete($ID){
		$result = $this->db->delete('mst_employee', array('employee_code' => $ID)); 
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	
	
	
}
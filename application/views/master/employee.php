
<div class="row">

	<div class="col-sm-12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST EMPLOYEE
				</h3>
				<button id="btnAddEmployee" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="tabelEmployee" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Code</th>
							<th>Employee Name</th>
							<th>Phone / Mobile / Email </th>
							<th width="30%">Position / Department / Division </th>
							<th width="120px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>

</div>
		

<div class="modal fade" id="modalEmployee">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Employee</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formEmployee">
		  <input type="hidden" id="hiddenemployee" name="hiddenemployee" value="">
		  
	      <div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<label for="code">Code</label>
					<input type="text" class="form-control input-sm" id="code" name="code">
				</div>
			</div>
			<div class="col-sm-8">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control input-sm" id="name" name="name">
				</div>
			</div>
		  </div>
		  
		  <div class="row">
			<div class="col-sm-8">
				<div class="form-group">
					<label for="address">Address</label>
					<input type="text" class="form-control input-sm" id="address" name="address">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="city">City</label>
					<input type="text" class="form-control input-sm" id="city" name="city">
				</div>
			</div>
		  </div>
		  
		  <div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="text" class="form-control input-sm" id="phone" name="phone">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="mobile">Mobile</label>
					<input type="text" class="form-control input-sm" id="mobile" name="mobile">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" class="form-control input-sm" id="email" name="email">
				</div>
			</div>
		  </div>
		  
		  <div class="well well-sm text-center">Personal Data</div>
		  
		   <div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<label for="idcardnumber">ID Card Number</label>
					<input type="text" class="form-control input-sm" id="idcardnumber" name="idcardnumber">
				</div>
			</div>
			<div class="col-sm-8">
				<div class="form-group">
					<label for="idcardname">ID Card Name</label>
					<input type="text" class="form-control input-sm" id="idcardname" name="idcardname">
				</div>
			</div>
		   </div>
			
		   <div class="row">
			<div class="col-sm-8">
				<div class="form-group">
					<label for="idcardaddress">ID Card Address</label>
					<input type="text" class="form-control input-sm" id="idcardaddress" name="idcardaddress">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="idcardcity">ID Card City</label>
					<input type="text" class="form-control input-sm" id="idcardcity" name="idcardcity">
				</div>
			</div>
		   </div>
		   
		   <div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="datebirth">Date of Birth</label>
					<input type="text" class="form-control input-sm datepicker" id="datebirth" name="datebirth">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="placebirth">Place of Birth</label>
					<input type="text" class="form-control input-sm" id="placebirth" name="placebirth">
				</div>
			</div>
		   </div>
		   
		   <div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<label for="educationlevel">Education Level</label>
					<select class="form-control input-sm" id="educationlevel" name="educationlevel">
						<option value="">- Select Education Below -</option>
						<option value="SD">SD</option>
						<option value="SMP">SMP</option>
						<option value="SMU">SMU</option>
						<option value="D3">D3</option>
						<option value="S1">S1</option>
						<option value="S2">S2</option>
						<option value="S3">S3</option>
					</select>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="form-group">
					<label for="educationname">Education Name</label>
					<input type="text" class="form-control input-sm" id="educationname" name="educationname">
				</div>
			</div>
		   </div>
		   
		   
		   <div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<label for="lastempcompany">Last Employment Company</label>
					<input type="text" class="form-control input-sm" id="lastempcompany" name="lastempcompany">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="lastempdate">Last Employment Date</label>
					<input type="text" class="form-control input-sm" id="lastempdate" name="lastempdate">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="lastempposition">Last Employment Position</label>
					<input type="text" class="form-control input-sm" id="lastempposition" name="lastempposition">
				</div>
			</div>
		   </div>
		   
		   <div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<label for="religion">Religion</label>
					<select class="form-control input-sm" id="religion" name="religion">
						<option value="">- Select Religion Below -</option>
						<option value="Islam">Islam</option>
						<option value="Protestan">Kristen Protestan</option>
						<option value="Katolik">Kristen Katolik</option>
						<option value="Hindu">Hindu</option>
						<option value="Buddha">Buddha</option>
						<option value="Konghuchu">Konghuchu</option>
						<option value="Other">Other</option>
					</select>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="bloodgroup">Blood Group</label>
					<select class="form-control input-sm" id="bloodgroup" name="bloodgroup">
						<option value="">- Select Blood Group Below -</option>
						<option value="O">O</option>
						<option value="AB">AB</option>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="Other">Other</option>
					</select>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="citizen">Citizen</label>
					<input type="text" class="form-control input-sm" id="citizen" name="citizen">
				</div>
			</div>
		   </div>
		   
		   <div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<label for="lastempcompany">Sex</label>
					<div class="radio">
						<label>
						<input type="radio" class="sex" name="sex" value="M" id="M" checked>Male</label>
					</div>
					<div class="radio">
						<label>
						<input type="radio" class="sex" name="sex" value="F" id="F">Female</label>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="bloodgroup">Marital Status</label>
					<div class="radio">
						<label>
						<input type="radio" class="maritalstatus" name="maritalstatus" value="1" id="1" checked>Menikah</label>
					</div>
					<div class="radio">
						<label>
						<input type="radio" class="maritalstatus" name="maritalstatus" value="0" id="0">Belum Menikah</label>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="children">Children</label>
					<input type="text" class="form-control input-sm" id="children" name="children">
				</div>
			</div>
		   </div>
	
		  
		  <div class="well well-sm text-center">Employee Data</div>
		  
		  <div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<label for="position">Position</label>
					<select class="form-control input-sm" id="position" name="position"></select>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="division">Division</label>
					<select class="form-control input-sm" id="division" name="division"></select>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="department">Department</label>
					<select class="form-control input-sm" id="department" name="department"></select>
				</div>
			</div>
		   </div>
		   
		   <div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<label for="workingdate">Start Working Date</label>
					<input type="text" class="form-control input-sm" id="workingdate" name="workingdate">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="appointmentdate">Appointment Date</label>
					<input type="text" class="form-control input-sm" id="appointmentdate" name="appointmentdate">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="workingage">Working Age</label>
					<input type="text" class="form-control input-sm" id="workingage" name="workingage">
				</div>
			</div>
		   </div>
		   
		   <div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="npwpnumber">NPWP Number</label>
					<input type="text" class="form-control input-sm" id="npwpnumber" name="npwpnumber">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="npwpdate">NPWP Date</label>
					<input type="text" class="form-control input-sm" id="npwpdate" name="npwpdate">
				</div>
			</div>
		   </div>
		   
		   <div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="bpjsnumber">BPJS Number</label>
					<input type="text" class="form-control input-sm" id="bpjsnumber" name="bpjsnumber">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="bpjsdate">BPJS Date</label>
					<input type="text" class="form-control input-sm" id="bpjsdate" name="bpjsdate">
				</div>
			</div>
		   </div>
		   
		   <div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="insurancenumber">Insurance Number</label>
					<input type="text" class="form-control input-sm" id="insurancenumber" name="insurancenumber">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="insurancedate">Insurance Date</label>
					<input type="text" class="form-control input-sm" id="insurancedate" name="insurancedate">
				</div>
			</div>
		   </div>
		   
		   <div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<label for="banknumber">Bank Account Number</label>
					<input type="text" class="form-control input-sm" id="banknumber" name="banknumber">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="bankname">Bank Name</label>
					<input type="text" class="form-control input-sm" id="bankname" name="bankname">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="bankaddress">Bank Address</label>
					<input type="text" class="form-control input-sm" id="bankaddress" name="bankaddress">
				</div>
			</div>
		   </div>
		   
		   <div class="row">
			<div class="col-sm-12">
				<div class="form-group">
					<label for="employeestatus">Status</label>
					<div class="radio">
						<label>
						<input type="radio" class="employeestatus" name="employeestatus" value="Active" id="Active" checked>Active</label>
					</div>
					<div class="radio">
						<label>
						<input type="radio" class="employeestatus" name="employeestatus" value="Suspend" id="Suspend">Suspend</label>
					</div>
					<div class="radio">
						<label>
						<input type="radio" class="employeestatus" name="employeestatus" value="Inactive" id="Inactive">Inactive</label>
					</div>
				</div>
			</div>
		   </div>
		   
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formEmployee" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	

<script>

	$(document).ready(function(){
		
		$('input.datepicker').datepicker({
			format: "yyyy-mm-dd"
		});
		
		listEmployee();
		
		$("button#btnAddEmployee").click(function(){
			fillSelectPosition();
			$('div#modalEmployee').modal("show");
		});
		
		$("select#position").change(function(){
			var position = $(this).val();
			fillSelectDivision(position);
		});
		
		$("select#division").change(function(){
			var division = $(this).val();
			fillSelectDepartment(division);
		});
		
		$('form#formEmployee').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				code : { 
					validators : {
						trigger : 'blur', 
						notEmpty : {
							message : 'Required - you have to fill this field'
						},
						stringLength: {
							message: 'Fill of this field must be less than 10 characters',
							max: function (value, validator, $field) {
								return 10 - (value.match(/\r/g) || []).length;
							}
						}
					}
				},
				name : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				position : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				division : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				department : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				}
			}
		}).on('success.form.bv', function(e) {
			e.preventDefault();
			var $form = $(e.target);
			var dataSerialize = $form.serialize();
			
			$.ajax({
				type		: "POST",
				dataType	: 'json',
				url			: "<?php echo base_url('employee/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listEmployee();
					$('input#hiddenemployee').val('');
					$('form#formEmployee')[0].reset();
					$('form#formEmployee').data('bootstrapValidator').resetForm();	
					$('div#modalEmployee').modal("hide");
				}
			});
		});
		
	});
	
	
	function listEmployee(){
		
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('employee/getall') ?>",
			success		: function(json){
				var number = 0;
				jqTabel = $('table#tabelEmployee').DataTable({
					"bDestroy" : true,
					paging: true,
					searching: false,
					ordering: false,
					data: json,
					columns: [
						{ data: 'employee_code' },
						{ data: 'employee_code' },
						{ data: 'name' },
						{ data: 'phone' },
						{ data: 'position_code' },
						{ data: null}
					],
					"columnDefs": [ 
						{ 
							"targets": [0], 
							"render": function ( data, type, row, meta ) {
								number++;
								return number;
							}
						},
						{ 
							"targets": [3], 
							"render": function ( data, type, row, meta ) {
								var phone = ((row.phone == "") ? "-" : row.phone);
								var mobile = ((row.mobile == "") ? "-" : row.mobile);
								var email = ((row.email == "") ? "-" : row.email);
								var isi = phone + " / " + mobile + " / " + email;
								return isi;
							}
						},
						{ 
							"targets": [4], 
							"render": function ( data, type, row, meta ) {
								var position = row.position_sales;
								var division = row.division_name;
								var department = row.department_name
								var isi = position + " / " + division + " / " + department;
								return isi;
							}
						},	
						{ 
							"targets": [5], 
							"render": function ( data, type, row, meta ) {
								var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editEmployee(\''+row.employee_code+'\')" ><i class="fa fa-edit"></i></a> ';
								var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusEmployee(\''+row.employee_code+'\')" ><i class="fa fa-times"></i></a>';
								return edit + del;
							}
						}
					]
				});
			},
			error		: function(){
				alert("error");
			}
		});	
		
	}
	
	function editEmployee(ID){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('employee/getrow') ?>"+"/"+ID,
			success		: function(data){
				fillSelectPosition();
				fillSelectDivision(data.position_code);
				fillSelectDepartment(data.division_code);
				$("input#hiddenemployee").val(data.employee_code);
				$("input#code").val(data.employee_code);
				$("input#name").val(data.name);
				$("input#address").val(data.address);
				$("input#city").val(data.city);
				$("input#phone").val(data.phone);
				$("input#mobile").val(data.mobile);
				$("input#email").val(data.email);
				$("input#idcardnumber").val(data.id_card_number);
				$("input#idcardname").val(data.id_card_name);
				$("input#idcardaddress").val(data.id_card_address);
				$("input#idcardcity").val(data.id_card_city);
				$("input#datebirth").val(data.date_of_birth);
				$("input#placebirth").val(data.place_of_birth);
				$("select#educationlevel").val(data.education_level);
				$("input#educationname").val(data.education_name);
				$("input#lastempcompany").val(data.last_employment_company);
				$("input#lastempdate").val(data.last_employment_date);
				$("input#lastempposition").val(data.last_employment_position);
				$("select#religion").val(data.religion);
				$("select#bloodgroup").val(data.blood_group);
				$("input#citizen").val(data.citizen);
				$("input[type='radio'].sex#"+data.sex).prop("checked", true);
				$("input[type='radio'].maritalstatus#"+data.marital_status).prop("checked", true);
				$("input#children").val(data.children);
				$("select#position").val(data.position_code);
				$("select#division").val(data.division_code);
				$("select#department").val(data.department_code);
				$("input#workingdate").val(data.start_working_date);
				$("input#appointmentdate").val(data.appointment_date);
				$("input#workingage").val(data.working_age);
				$("input#npwpnumber").val(data.npwp_number);
				$("input#npwpdate").val(data.npwp_date);
				$("input#bpjsnumber").val(data.bpjs_number);
				$("input#bpjsdate").val(data.bpjs_date);
				$("input#insurancenumber").val(data.insurance_number);
				$("input#insurancedate").val(data.insurance_date);
				$("input#banknumber").val(data.bank_account_number);
				$("input#bankname").val(data.bank_name);
				$("input#bankaddress").val(data.bank_address);
				$("input[type='radio'].employeestatus#"+data.status).prop("checked", true);
			},
			complete	: function(){
				$("div#modalEmployee").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusEmployee(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('employee/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listEmployee();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}
	
	
	function getPosition(handleData){
		return $.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('position/getall') ?>",
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error");
			}
		});	
	}
	
	function fillSelectPosition(){
		
		getPosition(function(output){
			$("select#position").empty().append("<option>Loading Data ...</option>");
			
			var fillOption = "<option value=''>- Select Position -</option>";
			
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.position_code+'">'+row.position_sales+'</option>';
			});
			
			$("select#position").empty().append(fillOption);		
		});
	}
	
	function getDivisionBy(position,handleData){
		return $.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('division/byposition') ?>"+"/"+position,
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error");
			}
		});	
	}

	
	function fillSelectDivision(position){
		getDivisionBy(position,function(output){
			$("select#division").empty().append("<option>Loading Data ...</option>");
			
			var fillOption = "<option value=''>- Select Division -</option>";
			
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.division_code+'">'+row.division_name+'</option>';
			});
			
			$("select#division").empty().append(fillOption);		
		});
	}
	
	function getDepartmentBy(division,handleData){
		return $.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('department/bydivision') ?>"+"/"+division,
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error");
			}
		});	
	}

	
	function fillSelectDepartment(division){
		getDepartmentBy(division,function(output){
			$("select#department").empty().append("<option>Loading Data ...</option>");
			
			var fillOption = "<option value=''>- Select Department -</option>";
			
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.department_code+'">'+row.department_name+'</option>';
			});
			
			$("select#department").empty().append(fillOption);		
		});
	}

	
</script>





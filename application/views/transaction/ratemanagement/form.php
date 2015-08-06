<div class="tab-content padding tab-content-inline tab-content-bottom">
	<div class="tab-pane active">

		<form id="formdocumentation" class="form-horizontal" role="form">
			
			<input type="hidden" id="codedocumentation" name="codedocumentation" value="" />
			
			<div class="form-group">
				<label class="col-sm-2 control-label">BR No | Date</label>
				<div class="col-sm-4">
					<input type="text" class="form-control input-sm" name="i_rate_management_number" id="i_rate_management_number">
				</div>
				<label class="col-sm-2 control-label">Valid Until</label>
				<div class="col-sm-2">
					<input type="text" class="form-control input-sm datepicker" name="i_rate_management_valid_date" id="i_rate_management_valid_date">
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-6">
					<div class="form-group">
						<label class="col-sm-4 control-label">Vendor Name</label>
						<div class="col-sm-8">
							<select name="i_costumer_code" id="i_costumer_code" style="width:100%"></select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label">Vendor Address</label>
						<div class="col-sm-8">
						<textarea class="form-control" name="i_costumer_address" id="i_costumer_address" readonly></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label">Vendor Phone</label>
						<div class="col-sm-8">
						<input type="text" class="form-control input-sm" name="i_costumer_phone" id="i_costumer_phone" readonly>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label">Vendor Email</label>
						<div class="col-sm-8">
						<input type="text" class="form-control input-sm" name="i_costumer_email" id="i_costumer_email" readonly>
						</div>
					</div>

				</div>

				<div class="col-sm-6">
					<div class="form-group">
				
						<label class="col-sm-4 control-label">Marketing</label>
						<div class="col-sm-8">
							<input type="text" class="form-control input-sm" name="i_rate_management_marketing" id="i_rate_management_marketing">
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label">Deal With</label>
						<div class="col-sm-8">
							<input type="text" class="form-control input-sm" name="i_rate_management_pic" id="i_rate_management_pic">
						</div>
						
					</div>

					
				</div>
			</div>
			
			


			<div class="well well-sm text-center" >SERVICES</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Shipment Status</label>
				<div class="col-sm-4">
					<select class="form-control input-sm" id="i_service_shipment_status" name="i_service_shipment_status">
						<option value="1">Freehand</option>
						<option value="2">Nominate</option>
						<option value="3">Corporate</option>
					</select>
					
				</div>
			</div>

			<div class="form-group">
				
					
						<label class="col-sm-2 control-label">Marketing</label>
						<div class="col-sm-4">
							<select name="i_service_marketing_id" id="i_service_marketing_id" style="width:100%"></select>
						</div>
					
				
			</div>

			<div class="form-group">
				
					
						<label class="col-sm-2 control-label">Agent</label>
						<div class="col-sm-4">
							<select name="i_service_agent_id" id="i_service_agent_id" style="width:100%"></select>
						</div>
					
				
			</div>

			<div class="form-group">
						<label class="col-sm-2 control-label">Moving Type</label>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_service_moving_type" value="1" id="i_service_moving_type" checked>Export</label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_service_moving_type" value="2" id="i_service_moving_type">Import</label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_service_moving_type" value="3" id="i_service_moving_type">Domestic In</label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_service_moving_type" value="4" id="i_service_moving_type">Domestic Out</label>
							</div>
						</div>
			</div>

			<div class="form-group">
						<label class="col-sm-2 control-label">Mode of Transport</label>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_service_mode_transport" value="1" id="i_service_mode_transport" checked>By Sea</label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_service_mode_transport" value="2" id="i_service_mode_transport">By Air</label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_service_mode_transport" value="3" id="i_service_mode_transport">By Road</label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_service_mode_transport" value="4" id="i_service_mode_transport">By Rail</label>
							</div>
						</div>
			</div>

			<div class="well well-sm text-center" >RATE & CHARGE</div>

			<div class="form-group">
						
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_product_type" value="1" id="i_product_type" checked>FON : Freight Only
								</label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_product_type" value="2" id="i_product_type">FNC : Freight & Clearance
								</label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_product_type" value="3" id="i_product_type">CLC : Clearance/Local Charge
								</label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_product_type" value="4" id="i_product_type">TRK : Trucking 
								</label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_product_type" value="5" id="i_product_type">WRH : Warehousing Service
								</label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_product_type" value="6" id="i_product_type">VAD : Value Added Service
								</label>
							</div>
						</div>
			</div>
			

					

			<div class="table-responsive">
				<table id="tabelbl" class="table table-condensed table-striped table-hover table-bordered">
					<caption class="bg-primary">Rate & Charge</caption>
					<thead>
						<tr>
							<th>Charge Name</th>
							<th>Origin </th>
							<th>Destination</th>
							<th>Unit</th>
							<th>Currency</th>
							<th>Buying</th>
							<th>Movement</th>
							<th>Load</th>
							<th>P/C</th>
							<th>Cargo Type</th>
							<th>Transshipment</th>
							<th>T.Time</th>
							<th>Free Dem</th>
							<th>Free Det</th>
							<th>Free Dem + Det</th>
							<th>Min Qty</th>
							<th>Remark</th>
							<th class="text-center" style="width:150px">*</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
			
			<br>
			
			<div class="table-responsive">
				<table id="tabel2" class="table table-condensed table-striped table-hover table-bordered">
					<caption class="bg-primary">Our Rate Included or Excluded</caption>
					<thead>
						<tr>
							<th>Charge Name / Chargeable</th>
							<th>Unit</th>
							<th>Currency</th>
							<th>Sell Price</th>
							<th>In/Ex</th>
							<th>Remark</th>
							<th class="text-center" style="width:150px">*</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>

			<div class="table-responsive">
				<table id="tabel3" class="table table-condensed table-striped table-hover table-bordered">
					<caption class="bg-primary">Notes</caption>
					<thead>
						<tr>
							<th>Notes</th>
							<th class="text-center" style="width:150px">*</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
				
		
			
			
			<hr>
			<div class="row">
				<div class="col-sm-4">
					<div class="pull-left">
						<button type="reset" class="btn btn-warning">RESET</button>
						<button type="submit" class="btn btn-primary">SAVE</button>
					</div>
				</div>
				
				
			</div>
			
		</form>
								
	</div>
</div>


<script>

	$(document).ready(function(){
		initiateTabelBl();
		initiateTabel2();
		initiateTabel3();

		getDataDocumentation($("input#idjoborder").val());
		
		$('.datepicker').datepicker({
			format: 'yyyy-mm-dd',
			todayHighlight: true,
			autoclose: true
		});
		
		$("select#insurance").change(function(){
			var value = $(this).val();
			onChangeInsurance(value);
		});
		
		$("select#i_costumer_code").change(function(){
			
			onChangeCostumerCode();
		});
		
		$("input[type='radio']#us").click(function(){	
			$(".employee").prop("disabled",false);
			$(".courrier").prop("disabled",true);
		});
		
		$("input[type='radio']#courrier").click(function(){
			$(".courrier").prop("disabled",false);
			$(".employee").prop("disabled",true);	
		});
		
		
		$('form#formdocumentation').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			}
		}).on('success.form.bv', function(e) {
			e.preventDefault();
			var $form = $(e.target);
			var dataSerialize = $form.serialize();
			
			$.ajax({
				type		: "POST",
				dataType	: 'json',
				url			: "<?php echo base_url('joborder/commit/documentation') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					$('input#codedocumentation').val('');
					//$('form#formdocumentation')[0].reset();
					$('form#formdocumentation').data('bootstrapValidator').resetForm();	
				}
			});
		});

		$('form#formWorkingDetail').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			}
		}).on('success.form.bv', function(e) {
			e.preventDefault();
			var $form = $(e.target);
			var dataSerialize = $form.serialize();
			
			$.ajax({
				type		: "POST",
				dataType	: 'json',
				url			: "<?php echo base_url('joborder/commitdetail/workingdetail') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					$('input#idWorkingDetail').val('');
					//$('form#formWorkingDetail')[0].reset();
					$('form#formWorkingDetail').data('bootstrapValidator').resetForm();	
					$("div#workingDetail").modal("hide");
				}
			});
		});
		
	});
	
	function onChangeInsurance(value){
		if (value == "Cover by Us"){
			$("select#insurancecondition").prop("disabled",false);
			$("select#insurancevalue").prop("disabled",false);
		}
		else{
			$("select#insurancecondition").prop("disabled",true);
			$("select#insurancevalue").prop("disabled",true);
		}
	}

	function onChangeCostumerCode(){
		var costumer_address = $("select#i_costumer_code option:selected").data("address");
		var costumer_phone = $("select#i_costumer_code option:selected").data("phone");
		var costumer_email = $("select#i_costumer_code option:selected").data("email");
		
		$("textarea#i_costumer_address").val(costumer_address);
		$("input#i_costumer_phone").val(costumer_phone);
		$("input#i_costumer_email").val(costumer_email);
		

	}

	function  getDataDocumentation(IDJobOrder){
		fillSelectCostumerCode();
		fillSelectEmployee();
		fillSelectCostumer();

		fillSelectMarketingId();
		fillSelectAgentId();

		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('joborder/getbydetail/documentation') ?>"+"/"+IDJobOrder,
			beforeSend	: function(){

			},
			success		: function(json){
				$("input#codedocumentation").val(json.documentation_id);
				$("input#costumersi").val(json.costumer_si_no);
				$("input#ajunumber").val(json.aju_number);
				$("input#ajudate").val(json.aju_date);
				$("input#pebnumber").val(json.peb_number);
				$("input#pebdate").val(json.peb_date);
				$("select#insurance").val(json.insurance); onChangeInsurance(json.insurance);
				$("select#insurancecondition").val(json.insurance_condition);
				$("select#insurancevalue").val(json.insurance_value);
				$("select#i_costumer_code").select2("val", json.shipping_doc); onChangeCostumerCode();
				$("input[type='radio']#"+json.sent_by).prop("checked",true); 
				//$("input[type='radio']#"+json.sent_by).trigger("click");
				$("select#employee").select2("val", json.sent_by_us); 
				$("select#courrier").select2("val", json.sent_by_courrier); 
				$("input#deliverynumber").val(json.delivery_number);
				$("input#receiptnumber").val(json.receipt_number);

				if(json.sent_by == "us"){
					$(".employee").prop("disabled",false);
					$(".courrier").prop("disabled",true);
				}
				else if(json.sent_by == "courrier"){
					$(".courrier").prop("disabled",false);
					$(".employee").prop("disabled",true);	
				}

			},
			complete	: function(){
				
			}
		});		
	}

	// UNTUK TABEL BILL OF LEADING
	function initiateTabelBl(){
		var job_order_id = $("input#idjoborder").val();
		var no = 0;
		$("table#tabelbl tbody").empty();
		
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("joborder/getbydetail/billofleading") ?>"+"/"+job_order_id,
			success		: function(json){	
				var optionMovement = fillSelectMovement();
				var optionCharge = fillSelectCharge();
				
				$.each(json, function(index, row) {
					var isiTrow = '';
					no = row.detail_billofleading_id;
					
					isiTrow = '<tr id="'+no+'">';
					isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
					isiTrow += '<td class="text-center">';
					isiTrow += '<button type="button" class="btn btn-xs btn-info" id="btnWdBl" onclick="return onClickWdBl('+no+')" >WD</button> ';
					isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-danger" id="btnSaveBl" onclick="return onClickSaveBl('+no+')" >Save</button> ';
					isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-success" id="btnAddBl" onclick="return onClickAddBl('+no+')"> Add </button> ';
					isiTrow += '<input type="hidden" id="idBl" value="'+no+'" />';
					isiTrow += '</td>';
					isiTrow += '</tr>';
					
					$("table#tabelbl tbody").append(isiTrow);
					var thisRow = $("table#tabelbl tbody").find("tr#"+no);
					thisRow.find("select#bltype").val(row.bl_type);
					thisRow.find("select#status").val(row.status);
					thisRow.find("select#movement").val(row.movement);
					thisRow.find("select#loadtype").val(row.load_type);
				});
			},
			error		: function(){
				alert("error");
			}
		});	
		
		var number = no+1;
		var newRow = generateRowBl(number);
		$("table#tabelbl tbody").append(newRow);
	}
	
	function fillSelectMovement(){
		var isi = "";
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('movement/getall') ?>",
			success		: function(json){
				var fillOption = "<option value=''>- Select Movement -</option>";
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.movement_code+'">'+row.movement_code+'</option>';
				});
				isi = fillOption;
			},
			error		: function(){
				alert("error");
			}
		});	
		return isi;
	}

	function fillSelectCharge(){
		var isi = "";
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('charge/getall') ?>",
			success		: function(json){
				var fillOption = "<option value=''>- Select Charge -</option>";
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.charge_code+'">'+row.charge_name+'</option>';
				});
				isi = fillOption;
			},
			error		: function(){
				alert("error");
			}
		});	
		return isi;
	}
	
	function generateRowBl(no){
		var isiTrow = '';
		var optionMovement = fillSelectMovement();
		var optionCharge = fillSelectCharge();
	
		isiTrow = '<tr id="'+no+'">';
		isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
		isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
		isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
		isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
		isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
		isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
		isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
		isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
		isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
		isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
		isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
		isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
		isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
		isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
		isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
		isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
		isiTrow += '<td><select class="form-control input-sm" name="t_charge_name" id="t_charge_name">'+optionCharge+'</select></td>';
		isiTrow += '<td class="text-center">';
		isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-info" id="btnWdBl" onclick="return onClickWdBl('+no+')" >WD</button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-danger" id="btnSaveBl" onclick="return onClickSaveBl('+no+')" >Save</button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnAddBl" onclick="return onClickAddBl('+no+')"> Add </button> ';
		isiTrow += '<input type="hidden" id="idBl" />';
		isiTrow += '</td>';
		isiTrow += '</tr>';
		
		return isiTrow;
	}
	
	function onClickAddBl(number){
		var tRow = $("table#tabelbl tbody").find("tr#"+number);
		var no = number+1;
		var isiTrow = generateRowBl(no);
		
		$("table#tabelbl tbody").append(isiTrow);
		tRow.find("button#btnAddBl").hide();
	}
	
	function onClickSaveBl(number){
		var tRow = $("table#tabelbl tbody").find("tr#"+number);
		var thisButton = tRow.find("button#btnSaveBl");
		var buttonDetail = tRow.find("button#btnWdBl")
		
		var idjoborder = $("input#idjoborder").val();
		
		var data_bl = {
						bl_type: tRow.find("select#bltype").val(), 
						number: tRow.find("input#number").val(), 
						original: tRow.find("input#original").val(),
						copy: tRow.find("input#copy").val(), 
						freight: tRow.find("input#freight").val(), 
						status: tRow.find("select#status").val(),
						movement: tRow.find("select#movement").val(), 
						load_type: tRow.find("select#loadtype").val(), 
						note: tRow.find("input#note").val()
					  };
			
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			data		: {idjoborder:idjoborder, object_data: data_bl},
			url			: "<?php echo base_url('joborder/commitdetail/billofleading') ?>",
			success		: function(json){
				tRow.find("input#idBl").val(json);
				thisButton.hide();
				buttonDetail.show();
			},
			error		: function(){
				alert("error");
			}
		});	
	}

	function onClickWdBl(number){
		var tRow = $("table#tabelbl tbody").find("tr#"+number);	
		var idBl = tRow.find("input#idBl").val();
		var typeBl = tRow.find("select#bltype option:selected").text();
		var number = tRow.find("input#number").val();

		var modalWd = $("div#workingDetail");
		modalWd.find("span#title").text("BL Type");
		modalWd.find("strong#blTypeInModal").text(typeBl);
		modalWd.find("strong#numberInModal").text(number);

		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("joborder/getbydetail/wdbl") ?>"+"/"+idBl,
			success		: function(json){
				modalWd.find("input#idWorkingDetail").val(json.detail_workingdetail_id);

				modalWd.find("select#kirimData").val(json.kirim_data);
				modalWd.find("select#terimaDraft").val(json.terima_draft);
				modalWd.find("select#cekDraft").val(json.cek_draft);
				modalWd.find("select#draftOk").val(json.draft_ok);
				modalWd.find("select#kirimDraft").val(json.kirim_draft);
				modalWd.find("select#terimaKonfirmasi").val(json.terima_konfirmasi);
				modalWd.find("select#kirimKonfirmasi").val(json.kirim_konfirmasi);
				modalWd.find("select#cetakOriginal").val(json.cetak_original);
				modalWd.find("select#ambilOriginal").val(json.ambil_original);
				modalWd.find("select#kirimOriginal").val(json.kirim_original);
				modalWd.find("select#telexRelease").val(json.telex_release);
				modalWd.find("select#mblFinished").val(json.mbl_finished);

				modalWd.find("input#kirimDataStart").val(json.kirim_data_start);
				modalWd.find("input#terimaDraftStart").val(json.terima_draft_start);
				modalWd.find("input#cekDraftStart").val(json.cek_draft_start);
				modalWd.find("input#draftOkStart").val(json.draft_ok_start);
				modalWd.find("input#kirimDraftStart").val(json.kirim_draft_start);
				modalWd.find("input#terimaKonfirmasiStart").val(json.terima_konfirmasi_start);
				modalWd.find("input#kirimKonfirmasiStart").val(json.kirim_konfirmasi_start);
				modalWd.find("input#cetakOriginalStart").val(json.cetak_original_start);
				modalWd.find("input#ambilOriginalStart").val(json.ambil_original_start);
				modalWd.find("input#kirimOriginalStart").val(json.kirim_original_start);

				modalWd.find("input#kirimDataEnd").val(json.kirim_data_end);
				modalWd.find("input#terimaDraftEnd").val(json.terima_draft_end);
				modalWd.find("input#cekDraftEnd").val(json.cek_draft_end);
				modalWd.find("input#draftOkEnd").val(json.draft_ok_end);
				modalWd.find("input#kirimDraftEnd").val(json.kirim_draft_end);
				modalWd.find("input#terimaKonfirmasiEnd").val(json.terima_konfirmasi_end);
				modalWd.find("input#kirimKonfirmasiEnd").val(json.kirim_konfirmasi_end);
				modalWd.find("input#cetakOriginalEnd").val(json.cetak_original_end);
				modalWd.find("input#ambilOriginalEnd").val(json.ambil_original_end);
				modalWd.find("input#kirimOriginalEnd").val(json.kirim_original_end);

				modalWd.find("input#kirimDataKet").val(json.kirim_data_ket);
				modalWd.find("input#terimaDraftKet").val(json.terima_draft_ket);
				modalWd.find("input#cekDraftKet").val(json.cek_draft_ket);
				modalWd.find("input#draftOkKet").val(json.draft_ok_ket);
				modalWd.find("input#kirimDraftKet").val(json.kirim_draft_ket);
				modalWd.find("input#terimaKonfirmasiKet").val(json.terima_konfirmasi_ket);
				modalWd.find("input#kirimKonfirmasiKet").val(json.kirim_konfirmasi_ket);
				modalWd.find("input#cetakOriginalKet").val(json.cetak_original_ket);
				modalWd.find("input#ambilOriginalKet").val(json.ambil_original_ket);
				modalWd.find("input#kirimOriginalKet").val(json.kirim_original_ket);
				modalWd.find("input#telexReleaseKet").val(json.telex_release_ket);
				modalWd.find("input#mblFinishedKet").val(json.mbl_finished_ket);

			},
			error		: function(){
				alert("error");
			},
			complete	: function(){
				modalWd.modal("show");
			}
			
		});	
	}
	
	// UNTUK TABEL BILL OF LEADING SELESAI
	
	// UNTUK TABEL REQUEST DOCUMENT	
	
	function initiateTabel2(){
		var job_order_id = $("input#idjoborder").val();
		var no = 0;
		$("table#tabel2 tbody").empty();
		
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("joborder/getbydetail/requestdocument") ?>"+"/"+job_order_id,
			success		: function(json){	
				var optionDocument = fillSelectDocument();
				var optionCharge = fillSelectCharge();
				
				$.each(json, function(index, row) {
					var isiTrow = '';
					no = row.detail_requestdocument_id;
					
					isiTrow = '<tr id="'+no+'">';
					isiTrow += '<td><select class="form-control input-sm" name="document" id="document">'+optionCharge+'</select></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="number" id="number" value="'+row.number+'"></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="original" id="original" value="'+row.original+'"></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="copy" id="copy" value="'+row.copy+'"></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="legalisir" id="legalisir" value="'+row.legalisir+'"></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="note" id="note" value="'+row.note+'"></td>';
					isiTrow += '<td class="text-center">';
					isiTrow += '<button type="button" class="btn btn-xs btn-info" id="btnWdRequest" onclick="return onClickWdRequest('+no+')" >WD</button> ';
					isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-danger" id="btnSaveRequest" onclick="return onClickSaveRequest('+no+')" >Save</button> ';
					isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-success" id="btnAddRequest" onclick="return onClickAddRequest('+no+')"> Add </button> ';
					isiTrow += '<input type="hidden" id="idRequest" value="'+no+'" />';
					isiTrow += '</td>';
					isiTrow += '</tr>';
					
					$("table#tabel2 tbody").append(isiTrow);
					var thisRow = $("table#tabel2 tbody").find("tr#"+no);
					thisRow.find("select#document").val(row.document);
					
				});
			},
			error		: function(){
				alert("error");
			}
		});	
	
		var number = no+1;
		var newRow = generateRow2(number);
		$("table#tabel2 tbody").append(newRow);
	}

	function initiateTabel3(){
		var job_order_id = $("input#idjoborder").val();
		var no = 0;
		$("table#tabel3 tbody").empty();
		
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("joborder/getbydetail/requestdocument") ?>"+"/"+job_order_id,
			success		: function(json){	
				
				$.each(json, function(index, row) {
					var isiTrow = '';
					no = row.detail_requestdocument_id;
					
					isiTrow = '<tr id="'+no+'">';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="number" id="number"></td>';
					isiTrow += '<td class="text-center">';
					isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-info" id="btnWdRequest" onclick="return onClickWdRequest('+no+')" >WD</button> ';
					isiTrow += '<button type="button" class="btn btn-xs btn-danger" id="btnSaveRequest" onclick="return onClickSaveRequest('+no+')" >Save</button> ';
					isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnAddRequest" onclick="return onClickAddRequest('+no+')"> Add </button> ';
					isiTrow += '<input type="hidden" id="idRequest" />';
					isiTrow += '</td>';
					isiTrow += '</tr>';
					
					$("table#tabel3 tbody").append(isiTrow);
					var thisRow = $("table#tabel3 tbody").find("tr#"+no);
					thisRow.find("select#document").val(row.document);
					
				});
			},
			error		: function(){
				alert("error");
			}
		});	
	
		var number = no+1;
		var newRow = generateRow3(number);
		$("table#tabel3 tbody").append(newRow);
	}
	
	function fillSelectDocument(){
		var isi = "";
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('document/getall') ?>",
			success		: function(json){
				var fillOption = "<option value=''>- Select Document -</option>";
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.doc_code+'">'+row.doc_name+'</option>';
				});
				isi = fillOption;
			},
			error		: function(){
				alert("error");
			}
		});	
		return isi;
	}
	
	function generateRow2(no){
		var isiTrow = '';
		var optionDocument = fillSelectDocument();
		var optionCharge = fillSelectCharge();
	
		isiTrow = '<tr id="'+no+'">';
		isiTrow += '<td><select class="form-control input-sm" name="document" id="document">'+optionCharge+'</select></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" name="number" id="number"></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" name="original" id="original"></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" name="copy" id="copy"></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" name="legalisir" id="legalisir"></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" name="note" id="note"></td>';
		isiTrow += '<td class="text-center">';
		isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-info" id="btnWdRequest" onclick="return onClickWdRequest('+no+')" >WD</button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-danger" id="btnSaveRequest" onclick="return onClickSaveRequest('+no+')" >Save</button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnAddRequest" onclick="return onClickAddRequest('+no+')"> Add </button> ';
		isiTrow += '<input type="hidden" id="idRequest" />';
		isiTrow += '</td>';
		isiTrow += '</tr>';
		
		return isiTrow;
	}


	function generateRow3(no){
		var isiTrow = '';
		var optionDocument = fillSelectDocument();
		var optionCharge = fillSelectCharge();
	
		isiTrow = '<tr id="'+no+'">';
		isiTrow += '<td><input type="text" class="form-control input-sm" name="number" id="number"></td>';
		isiTrow += '<td class="text-center">';
		isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-info" id="btnWdRequest" onclick="return onClickWdRequest('+no+')" >WD</button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-danger" id="btnSaveRequest" onclick="return onClickSaveRequest('+no+')" >Save</button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnAddRequest" onclick="return onClickAddRequest('+no+')"> Add </button> ';
		isiTrow += '<input type="hidden" id="idRequest" />';
		isiTrow += '</td>';
		isiTrow += '</tr>';
		
		return isiTrow;
	}
	
	function onClickAddRequest(number){
		var tRow = $("table#tabelRequest tbody").find("tr#"+number);
		var no = number+1;
		var isiTrow = generateRowRequest(no);
		
		$("table#tabelRequest tbody").append(isiTrow);
		tRow.find("button#btnAddRequest").hide();
	}
	
	function onClickSaveRequest(number){
		var tRow = $("table#tabelRequest tbody").find("tr#"+number);
		var thisButton = tRow.find("button#btnSaveRequest");
		var buttonDetail = tRow.find("button#btnWdRequest")
		
		var idjoborder = $("input#idjoborder").val();
		
		var data_request = 	{
								document_name: tRow.find("select#document").val(), 
								number: tRow.find("input#number").val(), 
								original: tRow.find("input#original").val(),
								copy: tRow.find("input#copy").val(), 
								legalisir: tRow.find("input#legalisir").val(),
								note: tRow.find("input#note").val()
							};
			
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			data		: {idjoborder:idjoborder, object_data: data_request},
			url			: "<?php echo base_url('joborder/commitdetail/requestdocument') ?>",
			success		: function(json){
				tRow.find("input#idRequest").val(json);
				buttonDetail.show();
				thisButton.hide();
			},
			error		: function(){
				alert("error");
			}
		});	
	}

	function onClickWdRequest(number){
		var tRow = $("table#tabelRequest tbody").find("tr#"+number);	
		var idRequest = tRow.find("input#idRequest").val();
		var documentRequest = tRow.find("select#document option:selected").text();
		var number = tRow.find("input#number").val();

		var modalWd = $("div#workingDetail");
		modalWd.find("span#title").text("Document");
		modalWd.find("strong#blTypeInModal").text(documentRequest);
		modalWd.find("strong#numberInModal").text(number);

		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("joborder/getbydetail/wdrequest") ?>"+"/"+idRequest,
			success		: function(json){
				modalWd.find("input#idWorkingDetail").val(json.detail_workingdetail_id);

				modalWd.find("select#kirimData").val(json.kirim_data);
				modalWd.find("select#terimaDraft").val(json.terima_draft);
				modalWd.find("select#cekDraft").val(json.cek_draft);
				modalWd.find("select#draftOk").val(json.draft_ok);
				modalWd.find("select#kirimDraft").val(json.kirim_draft);
				modalWd.find("select#terimaKonfirmasi").val(json.terima_konfirmasi);
				modalWd.find("select#kirimKonfirmasi").val(json.kirim_konfirmasi);
				modalWd.find("select#cetakOriginal").val(json.cetak_original);
				modalWd.find("select#ambilOriginal").val(json.ambil_original);
				modalWd.find("select#kirimOriginal").val(json.kirim_original);
				modalWd.find("select#telexRelease").val(json.telex_release);
				modalWd.find("select#mblFinished").val(json.mbl_finished);

				modalWd.find("input#kirimDataStart").val(json.kirim_data_start);
				modalWd.find("input#terimaDraftStart").val(json.terima_draft_start);
				modalWd.find("input#cekDraftStart").val(json.cek_draft_start);
				modalWd.find("input#draftOkStart").val(json.draft_ok_start);
				modalWd.find("input#kirimDraftStart").val(json.kirim_draft_start);
				modalWd.find("input#terimaKonfirmasiStart").val(json.terima_konfirmasi_start);
				modalWd.find("input#kirimKonfirmasiStart").val(json.kirim_konfirmasi_start);
				modalWd.find("input#cetakOriginalStart").val(json.cetak_original_start);
				modalWd.find("input#ambilOriginalStart").val(json.ambil_original_start);
				modalWd.find("input#kirimOriginalStart").val(json.kirim_original_start);

				modalWd.find("input#kirimDataEnd").val(json.kirim_data_end);
				modalWd.find("input#terimaDraftEnd").val(json.terima_draft_end);
				modalWd.find("input#cekDraftEnd").val(json.cek_draft_end);
				modalWd.find("input#draftOkEnd").val(json.draft_ok_end);
				modalWd.find("input#kirimDraftEnd").val(json.kirim_draft_end);
				modalWd.find("input#terimaKonfirmasiEnd").val(json.terima_konfirmasi_end);
				modalWd.find("input#kirimKonfirmasiEnd").val(json.kirim_konfirmasi_end);
				modalWd.find("input#cetakOriginalEnd").val(json.cetak_original_end);
				modalWd.find("input#ambilOriginalEnd").val(json.ambil_original_end);
				modalWd.find("input#kirimOriginalEnd").val(json.kirim_original_end);

				modalWd.find("input#kirimDataKet").val(json.kirim_data_ket);
				modalWd.find("input#terimaDraftKet").val(json.terima_draft_ket);
				modalWd.find("input#cekDraftKet").val(json.cek_draft_ket);
				modalWd.find("input#draftOkKet").val(json.draft_ok_ket);
				modalWd.find("input#kirimDraftKet").val(json.kirim_draft_ket);
				modalWd.find("input#terimaKonfirmasiKet").val(json.terima_konfirmasi_ket);
				modalWd.find("input#kirimKonfirmasiKet").val(json.kirim_konfirmasi_ket);
				modalWd.find("input#cetakOriginalKet").val(json.cetak_original_ket);
				modalWd.find("input#ambilOriginalKet").val(json.ambil_original_ket);
				modalWd.find("input#kirimOriginalKet").val(json.kirim_original_ket);
				modalWd.find("input#telexReleaseKet").val(json.telex_release_ket);
				modalWd.find("input#mblFinishedKet").val(json.mbl_finished_ket);
			},
			error		: function(){
				alert("error");
			},
			
		});	
			
		modalWd.modal("show");
	}
						
	// UNTUK TABEL REQUEST DOCUMENT	SELESAI
	
	function fillSelectCostumerCode(){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("costumer/getall") ?>",
			success		: function(json){
				$("select#i_costumer_code").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Vendor -</option>";
				
				$.each(json, function(index, row) {
					var address = row.main_address + " " + row.main_city + " " + row.main_provincy + " " + row.main_country + " " + row.main_zipcode;
					
					var phone = row.main_phone + " / " + row.main_fax;
					var email = row.costumer_email;
					
					fillOption += '<option data-address="'+address+'" data-phone="'+phone+'" data-email="'+email+'" value="'+row.costumer_code+'">'+row.costumer_name+'</option>';
				});

				$("select#i_costumer_code").empty().append(fillOption);
			},
			complete	: function(){
				$("select#i_costumer_code").select2();
			}
		});			
	}

	function fillSelectMarketingId(){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("ratemanagement/getmarketing") ?>",
			success		: function(json){
				$("select#i_service_marketing_id").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Marketing -</option>";
				
				$.each(json, function(index, row) {
										
					fillOption += '<option value="'+row.employee_code+'">'+row.name+'</option>';
				});

				$("select#i_service_marketing_id").empty().append(fillOption);
			},
			complete	: function(){
				$("select#i_service_marketing_id").select2();
			}
		});			
	}
	

	function fillSelectAgentId(){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("ratemanagement/getagent") ?>",
			success		: function(json){
				$("select#i_service_agent_id").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Agent -</option>";
				
				$.each(json, function(index, row) {
										
					fillOption += '<option value="'+row.costumer_code+'">'+row.costumer_name+'</option>';
				});

				$("select#i_service_agent_id").empty().append(fillOption);
			},
			complete	: function(){
				$("select#i_service_agent_id").select2();
			}
		});			
	}
	

	function fillSelectEmployee(){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("employee/getall") ?>",
			success		: function(json){
				$("select#employee").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Employee -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.employee_code+'">'+row.name+' ('+row.position_sales+')</option>';
				});

				$("select#employee").empty().append(fillOption);
			},
			complete	: function(){
				$("select#employee").select2();
			}
		});		
	}
	
	function fillSelectCostumer(){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("costumer/getall") ?>",
			success		: function(json){
				$("select#courrier").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Courrier -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.costumer_code+'">'+row.costumer_name+'</option>';
				});

				$("select#courrier").empty().append(fillOption);
			},
			complete	: function(){
				$("select#courrier").select2();
			}
		});		
	}

		
</script>





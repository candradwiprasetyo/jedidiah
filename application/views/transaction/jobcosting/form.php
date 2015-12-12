<div class="tab-content padding tab-content-inline tab-content-bottom">
	<div class="tab-pane active">

		<form id="formjobcosting" class="form-horizontal" role="form">
			
			
			
			<div class="form-group">
				<label class="col-sm-2 control-label">BR No | Date</label>
				<div class="col-sm-2">
					<input type="hidden" class="form-control input-sm" name="i_row_id" id="i_row_id" value="<?= $row_id ?>">
					<input type="text" class="form-control input-sm" name="i_jobcosting_number" id="i_jobcosting_number" value="<?= $jobcosting_number ?>">
				</div>
				<div class="col-sm-2">
					<input type="text" class="form-control input-sm datepicker" name="i_jobcosting_date" id="i_jobcosting_date" value="<?= $jobcosting_date?>">
				</div>
				<label class="col-sm-2 control-label">Valid Until</label>
				<div class="col-sm-2">
					<input type="text" class="form-control input-sm datepicker" name="i_jobcosting_valid_date" id="i_jobcosting_valid_date" value="<?= $jobcosting_valid_date?>">
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
						<textarea class="form-control" name="i_costumer_address" id="i_costumer_address" readonly><?= $main_address?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label">Vendor Phone</label>
						<div class="col-sm-8">
						<input type="text" class="form-control input-sm" name="i_costumer_phone" id="i_costumer_phone" value="<?= $main_phone?>" readonly>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label">Vendor Email</label>
						<div class="col-sm-8">
						<input type="text" class="form-control input-sm" name="i_costumer_email" id="i_costumer_email" value="<?= $costumer_email?>" readonly>
						</div>
					</div>

				</div>

				<div class="col-sm-6">
					<div class="form-group">
				
						<label class="col-sm-4 control-label">Marketing</label>
						<div class="col-sm-8">
							<input type="text" class="form-control input-sm" name="i_jobcosting_marketing" id="i_jobcosting_marketing" value="<?= $jobcosting_marketing?>">
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-4 control-label">Deal With</label>
						<div class="col-sm-8">
							<input type="text" class="form-control input-sm" name="i_jobcosting_pic" id="i_jobcosting_pic" value="<?= $jobcosting_pic ?>">
						</div>
					</div>
				</div>
                
			</div>
			
			


			<div class="well well-sm text-center" >SERVICES</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Shipment Status</label>
				<div class="col-sm-4">
					<select class="form-control input-sm" id="i_service_shipment_status" name="i_service_shipment_status">
						<option value="1" <?php if($service_shipment_status == 1){ ?>selected<?php }?>>Freehand</option>
						<option value="2" <?php if($service_shipment_status == 2){ ?>selected<?php }?>>Nominate</option>
						<option value="3" <?php if($service_shipment_status == 3){ ?>selected<?php }?>>Corporate</option>
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
								<input type="radio" class="maritalstatus" name="i_service_moving_type" value="1" id="i_service_moving_type" <?php if($service_moving_type == 1){ ?> checked<?php } ?>>Export</label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_service_moving_type" value="2" id="i_service_moving_type" <?php if($service_moving_type == 2){ ?> checked<?php } ?>>Import</label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_service_moving_type" value="3" id="i_service_moving_type" <?php if($service_moving_type == 3){ ?> checked<?php } ?>>Domestic In</label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_service_moving_type" value="4" id="i_service_moving_type" <?php if($service_moving_type == 4){ ?> checked<?php } ?>>Domestic Out</label>
							</div>
						</div>
			</div>

			<div class="form-group">
						<label class="col-sm-2 control-label">Mode of Transport</label>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_service_mode_transport" value="1" id="i_service_mode_transport" <?php if($service_mode_transport == 1){ ?> checked<?php } ?>>By Sea</label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_service_mode_transport" value="2" id="i_service_mode_transport" <?php if($service_mode_transport == 2){ ?> checked<?php } ?>>By Air</label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_service_mode_transport" value="3" id="i_service_mode_transport" <?php if($service_mode_transport == 3){ ?> checked<?php } ?>>By Road</label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_service_mode_transport" value="4" id="i_service_mode_transport" <?php if($service_mode_transport == 4){ ?> checked<?php } ?>>By Rail</label>
							</div>
						</div>
			</div>

			<div class="well well-sm text-center" >RATE & CHARGE</div>

			<div class="form-group">
						
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_product_type" value="1" id="i_product_type" <?php if($product_type == 1){ ?> checked<?php } ?>>FON : Freight Only
								</label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_product_type" value="2" id="i_product_type" <?php if($product_type == 2){ ?> checked<?php } ?>>FNC : Freight & Clearance
								</label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_product_type" value="3" id="i_product_type" <?php if($product_type == 3){ ?> checked<?php } ?>>CLC : Clearance/Local Charge
								</label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_product_type" value="4" id="i_product_type" <?php if($product_type == 4){ ?> checked<?php } ?>>TRK : Trucking 
								</label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_product_type" value="5" id="i_product_type" <?php if($product_type == 5){ ?> checked<?php } ?>>WRH : Warehousing Service
								</label>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="radio">
								<label>
								<input type="radio" class="maritalstatus" name="i_product_type" value="6" id="i_product_type" <?php if($product_type == 6){ ?> checked<?php } ?>>VAD : Value Added Service
								</label>
							</div>
						</div>
			</div>
			
		<?php
        if($row_id){
		?>
					
			<div style="max-width:100%; width:100%; border: 1px solid #ccc; overflow-x:scroll;">
			<div class="table-responsive">
				<table id="tabelbl" class="table table-condensed table-striped table-hover table-bordered" style="width: 3000px !important; ">
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
            
            
				
		<?php
		}
		?>
			
			
			<hr>
			<div class="row">
				<div class="col-sm-4">
					<div class="pull-left">
						<?php
						//echo $row_id;
						if(!$row_id){
						?>
						<button type="reset" class="btn btn-warning">RESET</button>
						<button type="submit" class="btn btn-primary">SAVE</button>
						<?php
						}
						?>
						<button type="button" class="btn btn-warning" id="close_form" onclick="return onBackForm()" >BACK</button>
					</div>
				</div>
				
				
			</div>
			<br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br>
		</form>
								
	</div>
</div>


<script>

	$(document).ready(function(){
		initiateTabelBl();
		initiateTabel2();
		initiateTabel3();

		getDatajobcosting($("input#i_row_id").val());
		
		$('.datepicker').datepicker({
			format: 'yyyy-mm-dd',
			todayHighlight: true,
			autoclose: true
		});

		$("select#i_costumer_code").change(function(){
			onChangeCostumerCode();
		});
		

		
		
		
		$('form#formjobcosting').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			
			fields : {
				i_jobcosting_number : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				i_costumer_code : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				i_jobcosting_marketing : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				i_jobcosting_pic : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				i_service_marketing_id : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				i_service_agent_id : {
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
				url			: "<?php echo base_url('trs/jobcosting/commit/'.$row_id) ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					
					window.location.href = "<?php echo base_url('trs/jobcosting/form') ?>" + "/" + json;
					
				},
				complete	: function(){
					//$('input#codedocumentation').val('');
					//$('form#formdocumentation')[0].reset();
					//$('form#formdocumentation').data('bootstrapValidator').resetForm();	
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
	
	function onChangeCostumerCode(){
		var address = $("select#i_costumer_code option:selected").data("address");
		var phone = $("select#i_costumer_code option:selected").data("phone");
		var email = $("select#i_costumer_code option:selected").data("email");
		
		$("textarea#i_costumer_address").val(address);
		$("input#i_costumer_phone").val(phone);
		$("input#i_costumer_email").val(email);
	}

	function  getDatajobcosting(id_jobcosting){
		fillSelectCostumerCode();
		fillSelectEmployee();
		fillSelectCostumer();

		fillSelectMarketingId();
		fillSelectAgentId();

		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('trs/jobcosting/getbydetail') ?>"+"/"+id_jobcosting,
			beforeSend	: function(){

			},
			success		: function(json){
				$("input#i_row_id").val(json.jobcosting_id);
				$("input#i_costumer_code").val(json.costumer_code);
			
				//$("select#insurance").val(json.insurance); onChangeInsurance(json.insurance);
				//$("select#insurancevalue").val(json.insurance_value);
				//$("select#i_costumer_code").select2("val", json.shipping_doc); onChangeCostumerCode();
				//$("input[type='radio']#"+json.sent_by).prop("checked",true); 
				
			
			

			},
			complete	: function(){
				
			}
		});		
	}

	// UNTUK TABEL BILL OF LEADING
	function initiateTabelBl(){
		var id_jobcosting = $("input#i_row_id").val();
		var no = 0;
		$("table#tabelbl tbody").empty();
		
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("trs/jobcosting/getdetailcharge") ?>"+"/"+id_jobcosting,
			success		: function(json){	
				var optionCharge = fillSelectCharge();
				var optionOrigin = fillSelectCity(1);
				var optionDestination = fillSelectCity(2);
				var optionUnit = fillSelectUnit();
				var optionCurrency = fillSelectCurrency();
				var optionMovement = fillSelectMovement();
				var optionCargo = fillSelectCargo();
				
				$.each(json, function(index, row) {
					var isiTrow = '';
					no = row.rmrc_id;
					
					isiTrow = '<tr id="'+no+'">';
					isiTrow += '<td><select class="form-control input-sm" name="t_charge" id="t_charge"">'+optionCharge+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_origin" id="t_origin">'+optionOrigin+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_destination" id="t_destination">'+optionDestination+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_unit" id="t_unit">'+optionUnit+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_currency" id="t_currency">'+optionCurrency+'</select></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="t_buying" id="t_buying" value="'+row.rmrc_buying+'"></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_movement" id="t_movement">'+optionMovement+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_load" id="t_load">';
					isiTrow += '<option>- Select Load Type -</option>';
					isiTrow += '<option value="FCL/FCL">FCL/FCL </option>';
					isiTrow += '<option value="FCL/FCL">LCL/LCL  </option>';
					isiTrow += '<option value="FCL/FCL">FCL/LCL  </option>';
					isiTrow += '<option value="FCL/FCL">LCL/FCL  </option>';
					isiTrow += '<option value="FCL/FCL">Break-bulk  </option>';
					isiTrow += '<option value="FCL/FCL">Bulk </option>';
					isiTrow += '</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_pc" id="t_pc">'+optionCharge+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_cargo" id="t_cargo">'+optionCargo+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_transshipment" id="t_transshipment">'+optionCharge+'</select></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="t_time" id="t_time" value="'+row.rmrc_t_time+'"></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="t_free_dem" id="t_free_dem" value="'+row.rmrc_free_dem+'"></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="t_free_det" id="t_free_det" value="'+row.rmrc_free_det+'"></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="t_free_dem_det" id="t_free_dem_det" value="'+row.rmrc_free_dem_det+'"></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="t_min_qty" id="t_min_qty" value="'+row.rmrc_min_qty+'"></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="t_remark" id="t_remark" value="'+row.rmrc_remark+'"></td>';
					isiTrow += '<td class="text-center">';
					//isiTrow += '<button type="button" class="btn btn-xs btn-info" id="btnWdBl" onclick="return onClickWdBl('+no+')" >WD</button> ';
					isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-danger" id="btnSaveBl" onclick="return onClickSaveBl('+no+')" >Save</button> ';
					isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-success" id="btnAddBl" onclick="return onClickAddBl('+no+')"> Add </button> ';
							isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnDelBl" onclick="return onClickDelBl('+no+')"> Del </button> ';
							isiTrow += '<input type="hidden" id="idBl" value="'+no+'" />';
					isiTrow += '</td>';
					isiTrow += '</tr>';
					
					$("table#tabelbl tbody").append(isiTrow);
					var thisRow = $("table#tabelbl tbody").find("tr#"+no);
					thisRow.find("select#t_charge").val(row.rmrc_charge_name);
					thisRow.find("select#t_origin").val(row.rmrc_origin);
					thisRow.find("select#t_destination").val(row.rmrc_destination);
					thisRow.find("select#t_unit").val(row.rmrc_unit);
					thisRow.find("select#t_currency").val(row.rmrc_currency);
					thisRow.find("select#t_movement").val(row.rmrc_movement);
					thisRow.find("select#t_load").val(row.rmrc_load);
					thisRow.find("select#t_pc").val(row.rmrc_pc);
					thisRow.find("select#t_cargo").val(row.rmrc_cargo_type);
					thisRow.find("select#t_transshipment").val(row.rmrc_transshipment);
				});
			},
			//error		: function(){
			//	alert("error");
			//}
		});	
		
		var number = no+1;
		var newRow = generateRowBl(number);
		$("table#tabelbl tbody").append(newRow);
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

	function fillSelectCity(type){
		var isi = "";
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('city/getall') ?>",
			success		: function(json){
				if(type==1){
					var fillOption = "<option value=''>- Select Origin -</option>";
				}else{
					var fillOption = "<option value=''>- Select Destination -</option>";
				}
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.city_code+'">'+row.city_name+'</option>';
				});
				isi = fillOption;
			},
			error		: function(){
				alert("error");
			}
		});	
		return isi;
	}

	function fillSelectUnit(){
		var isi = "";
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('unit/getall') ?>",
			success		: function(json){
				
				var fillOption = "<option value=''>- Select Unit -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.unit_code+'">'+row.unit_name+'</option>';
				});
				isi = fillOption;
			},
			error		: function(){
				alert("error");
			}
		});	
		return isi;
	}

	function fillSelectCurrency(){
		var isi = "";
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('currency/getall') ?>",
			success		: function(json){
				
				var fillOption = "<option value=''>- Select Currency -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.currency_code+'">'+row.currency_name+'</option>';
				});
				isi = fillOption;
			},
			error		: function(){
				alert("error");
			}
		});	
		return isi;
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
					fillOption += '<option value="'+row.movement_code+'">'+row.movement_description+'</option>';
				});
				isi = fillOption;
			},
			error		: function(){
				alert("error");
			}
		});	
		return isi;
	}

	function fillSelectCargo(){
		var isi = "";
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('cargo/getall') ?>",
			success		: function(json){
				
				var fillOption = "<option value=''>- Select Cargo Type -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.cargo_code+'">'+row.cargo_type+'</option>';
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
		var optionCharge = fillSelectCharge();
		var optionOrigin = fillSelectCity(1);
		var optionDestination = fillSelectCity(2);
		var optionUnit = fillSelectUnit();
		var optionCurrency = fillSelectCurrency();
		var optionMovement = fillSelectMovement();
		var optionCargo = fillSelectCargo();

		isiTrow = '<tr id="'+no+'">';
		isiTrow += '<td><select class="form-control input-sm" name="t_charge" id="t_charge" required>'+optionCharge+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_origin" id="t_origin">'+optionOrigin+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_destination" id="t_destination">'+optionDestination+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_unit" id="t_unit">'+optionUnit+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_currency" id="t_currency">'+optionCurrency+'</select></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="t_buying" id="t_buying" value=""></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_movement" id="t_movement">'+optionMovement+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_load" id="t_load">';
					isiTrow += '<option>- Select Load Type -</option>';
					isiTrow += '<option value="FCL/FCL">FCL/FCL </option>';
					isiTrow += '<option value="FCL/FCL">LCL/LCL  </option>';
					isiTrow += '<option value="FCL/FCL">FCL/LCL  </option>';
					isiTrow += '<option value="FCL/FCL">LCL/FCL  </option>';
					isiTrow += '<option value="FCL/FCL">Break-bulk  </option>';
					isiTrow += '<option value="FCL/FCL">Bulk </option>';
					isiTrow += '</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_pc" id="t_pc">'+optionCharge+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_cargo" id="t_cargo">'+optionCargo+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t_transshipment" id="t_transshipment">'+optionCharge+'</select></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="t_time" id="t_time" value="" required></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="t_free_dem" id="t_free_dem" value=""></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="t_free_det" id="t_free_det" value=""></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="t_free_dem_det" id="t_free_dem_det" value=""></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="t_min_qty" id="t_min_qty" value=""></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="t_remark" id="t_remark" value=""></td>';
					isiTrow += '<td class="text-center">';
		//isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-info" id="btnWdBl" onclick="return onClickWdBl('+no+')" >WD</button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-danger" id="btnSaveBl" onclick="return onClickSaveBl('+no+')" >Save</button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnAddBl" onclick="return onClickAddBl('+no+')"> Add </button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnDelBl" onclick="return onClickDelBl('+no+')"> Del </button> ';
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
	
	function deleteRow(number)  
	{   
		var row = document.getElementById(number);
		var table = row.parentNode;
		while ( table && table.tagName != 'TABLE' )
			table = table.parentNode;
		if ( !table )
			return;
		table.deleteRow(row.rowIndex);
	}
	
	function onClickDelBl(number){

		var tRow_delete = $("table#tabelbl tbody").find("tr#"+number);
	
		tRow_delete.remove();

		last_row = $("table#tabelbl tbody").find("tr:last");
		 
		last_row.find("button#btnAddIE").show();

				 
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('trs/jobcosting/deletebl') ?>"+"/"+number,
			success		: function(json) {
					alert(json);
					
			},
			complete	: function(){
				
			}
		});		

		 
		
	}
	
	function onClickDelIE(number){

		var tRow_delete = $("table#tabel2 tbody").find("tr#"+number);
		 //document.getElementById('tabelbl').deleteRow(number);
		 //$("table#tabel2 tr:eq("+number_delete+")").remove();
		tRow_delete.remove();

		last_row = $("table#tabel2 tbody").find("tr:last");
		 
		last_row.find("button#btnAddIE").show();
		 
		 $.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('trs/jobcosting/deleteie') ?>"+"/"+number,
			success		: function(json) {
					alert(json);
					
			},
			complete	: function(){
				
			}
		});		
		
		
	}
	
	function onClickDelNote(number){

		var tRow_delete = $("table#tabel3 tbody").find("tr#"+number);

		tRow_delete.remove();

		last_row = $("table#tabel3 tbody").find("tr:last");
		 
		last_row.find("button#btnAddIE").show();
		 
		 $.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('trs/jobcosting/deletenote') ?>"+"/"+number,
			success		: function(json) {
					alert(json);
					
			},
			complete	: function(){
				
			}
		});		
		
		
	}
	
	function onClickSaveBl(number){
		var tRow = $("table#tabelbl tbody").find("tr#"+number);
		var thisButton = tRow.find("button#btnSaveBl");
		var buttonDetail = tRow.find("button#btnWdBl")
		
		var id_jobcosting = $("input#i_row_id").val();
		
		var data_bl = {
						t_charge: tRow.find("select#t_charge").val(), 
						t_origin: tRow.find("select#t_origin").val(), 
						t_destionation: tRow.find("select#t_destination").val(),
						t_unit: tRow.find("select#t_unit").val(), 
						t_currency: tRow.find("select#t_currency").val(), 
						t_buying: tRow.find("input#t_buying").val(),
						t_movement: tRow.find("select#t_movement").val(), 
						t_load: tRow.find("select#t_load").val(), 
						t_pc: tRow.find("select#t_pc").val(),
						t_cargo: tRow.find("select#t_cargo").val(),
						t_transshipment: tRow.find("select#t_transshipment").val(),
						t_time: tRow.find("input#t_time").val(),
						t_free_dem: tRow.find("input#t_free_dem").val(),
						t_free_det: tRow.find("input#t_free_det").val(),
						t_free_dem_det: tRow.find("input#t_free_dem_det").val(),
						t_min_qty: tRow.find("input#t_min_qty").val(),
						t_remark: tRow.find("input#t_remark").val()
					  };
			
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			data		: {id_jobcosting:id_jobcosting, object_data: data_bl},
			url			: "<?php echo base_url('jobcosting/commitdetail') ?>",
			success		: function(json){
				alert("Data saved");
				tRow.find("input#idBl").val(json);
				thisButton.hide();
				buttonDetail.show();
			},
			error		: function(){
				alert("error");
			}
		});	
	}

	function onBackForm(){

		window.location.href = "<?php echo base_url('trs/jobcosting') ?>";

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
			//error		: function(){
			//	alert("error");
			//},
			complete	: function(){
				modalWd.modal("show");
			}
			
		});	
	}
	
	// UNTUK TABEL BILL OF LEADING SELESAI
	
	// UNTUK TABEL REQUEST DOCUMENT	
	
	function initiateTabel2(){
		var id_jobcosting = $("input#i_row_id").val();
		var no = 0;
		$("table#tabel2 tbody").empty();
		
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("trs/jobcosting/getdetailie") ?>"+"/"+id_jobcosting,
			success		: function(json){	
				var optionCharge = fillSelectCharge();
				var optionUnit = fillSelectUnit();
				var optionCurrency = fillSelectCurrency();
				
				$.each(json, function(index, row) {
					var isiTrow = '';
					no = row.rmrie_id;
					
					isiTrow = '<tr id="'+no+'">';
					isiTrow += '<td><select class="form-control input-sm" name="t2_charge" id="t2_charge">'+optionCharge+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t2_unit" id="t2_unit">'+optionUnit+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="t2_currency" id="t2_currency">'+optionCurrency+'</select></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="t2_sell_price" id="t2_sell_price" value="'+row.rmrie_sell_price+'"></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="t2_in_ex" id="t2_in_ex" value="'+row.rmrie_type+'"></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="t2_remark" id="t2_remark" value="'+row.rmrie_remark+'"></td>';
					isiTrow += '<td class="text-center">';
					//isiTrow += '<button type="button" class="btn btn-xs btn-info" id="btnWdRequest" onclick="return onClickWdRequest('+no+')" >WD</button> ';
					isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-danger" id="btnSaveIE" onclick="return onClickSaveIE('+no+')" >Save</button> ';
					isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-success" id="btnAddIE" onclick="return onClickAddIE('+no+')"> Add </button> ';
					isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnDelIE" onclick="return onClickDelIE('+no+')"> Del </button> ';
					isiTrow += '<input type="hidden" id="idIE" value="'+no+'" />';
					isiTrow += '</td>';
					isiTrow += '</tr>';
					
					$("table#tabel2 tbody").append(isiTrow);
					var thisRow = $("table#tabel2 tbody").find("tr#"+no);
					thisRow.find("select#t2_charge").val(row.rmrie_charge_name);
					thisRow.find("select#t2_unit").val(row.rmrie_unit);
					thisRow.find("select#t2_currency").val(row.rmrie_currency);
					
				});
			},
			//error		: function(){
			//	alert("error");
			//}
		});	
	
		var number = no+1;
		var newRow = generateRow2(number);
		$("table#tabel2 tbody").append(newRow);
	}

	function initiateTabel3(){
		var id_jobcosting = $("input#i_row_id").val();
		var no = 0;
		$("table#tabel3 tbody").empty();
		
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("trs/jobcosting/getdetailnote") ?>"+"/"+id_jobcosting,
			success		: function(json){	
				
				$.each(json, function(index, row) {
					var isiTrow = '';
					no = row.rmn_id;
					
					isiTrow = '<tr id="'+no+'">';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="t3_note" id="t3_note" value="'+row.rmn_note+'"></td>';
					isiTrow += '<td class="text-center">';
					//isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-info" id="btnWdRequest" onclick="return onClickWdRequest('+no+')" >WD</button> ';
					isiTrow += '<button type="button" style="display:none"  class="btn btn-xs btn-danger" id="btnSaveNote" onclick="return onClickSaveNote('+no+')" >Save</button> ';
					isiTrow += '<button type="button" style="display:none"  class="btn btn-xs btn-success" id="btnAddNote" onclick="return onClickAddNote('+no+')"> Add </button> ';
					isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnDelNote" onclick="return onClickDelNote('+no+')"> Del </button> ';
					isiTrow += '<input type="hidden" id="idNote" />';
					isiTrow += '</td>';
					isiTrow += '</tr>';
					
					$("table#tabel3 tbody").append(isiTrow);
					var thisRow = $("table#tabel3 tbody").find("tr#"+no);
					
				});
			},
			//error		: function(){
			//	alert("error");
			//}
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
		var optionUnit = fillSelectUnit();
		var optionCurrency = fillSelectCurrency();
	
		isiTrow = '<tr id="'+no+'">';
		isiTrow += '<td><select class="form-control input-sm" name="t2_charge" id="t2_charge">'+optionCharge+'</select></td>';
		isiTrow += '<td><select class="form-control input-sm" name="t2_unit" id="t2_unit">'+optionUnit+'</select></td>';
		isiTrow += '<td><select class="form-control input-sm" name="t2_currency" id="t2_currency">'+optionCurrency+'</select></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" name="t2_sell_price" id="t2_sell_price"></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" name="t2_in_ex" id="t2_in_ex"></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" name="t2_remark" id="t2_remark"></td>';
		isiTrow += '<td class="text-center">';
		//isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-info" id="btnWdIE" onclick="return onClickWdIE('+no+')" >WD</button> ';
		isiTrow += '<button  type="button" class="btn btn-xs btn-danger" id="btnSaveIE" onclick="return onClickSaveIE('+no+')" >Save</button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnAddIE" onclick="return onClickAddIE('+no+')"> Add </button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnDelIE" onclick="return onClickDelIE('+no+')"> Del </button> ';
		isiTrow += '<input type="hidden" id="idIE" />';
		isiTrow += '</td>';
		isiTrow += '</tr>';
		
		return isiTrow;
	}


	function generateRow3(no){
		var isiTrow = '';
		var optionDocument = fillSelectDocument();
		var optionCharge = fillSelectCharge();
	
		isiTrow = '<tr id="'+no+'">';
		isiTrow += '<td><input type="text" class="form-control input-sm" name="t3_note" id="t3_note"></td>';
		isiTrow += '<td class="text-center">';
		//isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-info" id="btnWdNote" onclick="return onClickWdNote('+no+')" >WD</button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-danger" id="btnSaveNote" onclick="return onClickSaveNote('+no+')" >Save</button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnAddNote" onclick="return onClickAddNote('+no+')"> Add </button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnDelNote" onclick="return onClickDelNote('+no+')"> Del </button> ';
		isiTrow += '<input type="hidden" id="idNote" />';
		isiTrow += '</td>';
		isiTrow += '</tr>';
		
		return isiTrow;
	}
	
	function onClickAddIE(number){
		var tRow = $("table#tabel2 tbody").find("tr#"+number);
		var no = number+1;
		var isiTrow = generateRow2(no);
		
		$("table#tabel2 tbody").append(isiTrow);
		tRow.find("button#btnAddIE").hide();
	}
	
	function onClickAddNote(number){
		var tRow = $("table#tabel3 tbody").find("tr#"+number);
		var no = number+1;
		var isiTrow = generateRow3(no);
		
		$("table#tabel3 tbody").append(isiTrow);
		tRow.find("button#btnAddNote").hide();
	}
	
	function onClickSaveIE(number){
		var tRow = $("table#tabel2 tbody").find("tr#"+number);
		var thisButton = tRow.find("button#btnSaveIE");
		var buttonDetail = tRow.find("button#btnWdIE")
		
		var id_jobcosting = $("input#i_row_id").val();
		
		var data_ie = 	{
								t2_charge: tRow.find("select#t2_charge").val(), 
								t2_unit: tRow.find("select#t2_unit").val(), 
								t2_currency: tRow.find("select#t2_currency").val(),
								t2_sell_price: tRow.find("input#t2_sell_price").val(), 
								t2_in_ex: tRow.find("input#t2_in_ex").val(),
								t2_remark: tRow.find("input#t2_remark").val()
							};
			
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			data		: {id_jobcosting:id_jobcosting, object_data: data_ie},
			url			: "<?php echo base_url('jobcosting/commitie') ?>",
			success		: function(json){
				tRow.find("input#idIE").val(json);
				buttonDetail.show();
				thisButton.hide();
			},
			error		: function(){
				alert("error");
			}
		});	
	}


	function onClickSaveNote(number){
		var tRow = $("table#tabel3 tbody").find("tr#"+number);
		var thisButton = tRow.find("button#btnSaveNote");
		var buttonDetail = tRow.find("button#btnWdNote")
		
		var id_jobcosting = $("input#i_row_id").val();
		
		var data_note = 	{
								t3_note: tRow.find("input#t3_note").val()
							};
			
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			data		: {id_jobcosting:id_jobcosting, object_data: data_note},
			url			: "<?php echo base_url('jobcosting/commitnote') ?>",
			success		: function(json){
				tRow.find("input#idNote").val(json);
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

					if(row.costumer_code == '<?= $costumer_code ?>'){

						fillOption += '<option selected data-address="'+address+'" data-phone="'+phone+'" data-email="'+email+'" value="'+row.costumer_code+'">'+row.costumer_name+'</option>';
					
					}else{
					
						fillOption += '<option data-address="'+address+'" data-phone="'+phone+'" data-email="'+email+'" value="'+row.costumer_code+'">'+row.costumer_name+'</option>';

					}
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
			url			: "<?php echo base_url("jobcosting/getmarketing") ?>",
			success		: function(json){
				$("select#i_service_marketing_id").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Marketing -</option>";
				
				$.each(json, function(index, row) {

				if(row.employee_code == '<?= $service_marketing_id ?>'){										
					fillOption += '<option selected value="'+row.employee_code+'">'+row.name+'</option>';
				}else{
					fillOption += '<option value="'+row.employee_code+'">'+row.name+'</option>';
					
				}
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
			url			: "<?php echo base_url("jobcosting/getagent") ?>",
			success		: function(json){
				$("select#i_service_agent_id").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Agent -</option>";
				
				$.each(json, function(index, row) {
				if(row.costumer_code == '<?= $service_agent_id ?>'){										
					fillOption += '<option selected value="'+row.costumer_code+'">'+row.costumer_name+'</option>';
				}else{
					fillOption += '<option value="'+row.costumer_code+'">'+row.costumer_name+'</option>';
				
				}
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





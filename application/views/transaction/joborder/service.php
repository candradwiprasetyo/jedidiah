<div class="tab-content padding tab-content-inline tab-content-bottom">
	<div class="tab-pane active">
				
		<form id="formservice" class="form-horizontal" role="form">
			<input type="hidden" id="idjoborder" name="idjoborder" value="<?php echo $id_costumer ?>" />
			<input type="hidden" id="codeservice" name="codeservice" value="" />
				
			<div class="form-group">
				<label class="col-sm-2 control-label">Shipment Diwek</label>
				<div class="col-sm-2">
					<select class="form-control input-sm" name="status" id="status">
						<option value="">- Select One Below -</option>
						<option value="FREEHAND">Freehand</option>
						<option value="NOMINATE">Nominate</option>
						<option value="CORPORATE">Corporate</option>
					</select>
				</div>
				<label class="col-sm-1 control-label">Marketing</label>
				<div class="col-sm-3">
					<select name="marketing" id="marketing" style="width:100%;">
						<option value=""></option>
					</select>
				</div>
				<label class="col-sm-1 control-label">Agent</label>
				<div class="col-sm-3">
					<select  name="agent" id="agent" style="width:100%;">
						<option value=""></option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Moving Type</label>
				<div class="col-sm-3">
					<div class="radio">
						<label>
						<input type="radio" name="movingtype" value="INTERNATIONAL" id="INTERNATIONAL">International Inbound</label>
					</div>
					<div class="radio">
						<label>
						<input type="radio" name="movingtype" value="DOMESTIC" id="DOMESTIC">International Outbound</label>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="radio">
						<label>
						<input type="radio" name="movingtype" value="INBOUND" id="INBOUND">Domestic Inbound</label>
					</div>
					<div class="radio">
						<label>
						<input type="radio" name="movingtype" value="OUTBOND" id="OUTBOND">Domestic Outbound</label>
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Mode of Transport</label>
				<div class="col-sm-10">
					<div class="radio-inline">
						<label>
						<input type="radio" name="transport" value="SEA" id="SEA">By SEA</label>
					</div>
					<div class="radio-inline">
						<label>
						<input type="radio" name="transport" value="AIR" id="AIR">By AIR</label>
					</div>
					<div class="radio-inline">
						<label>
						<input type="radio" name="transport" value="ROAD" id="ROAD">By ROAD</label>
					</div>
					<div class="radio-inline">
						<label>
						<input type="radio" name="transport" value="RAIL" id="RAIL">By RAIL</label>
					</div>
				</div>		
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Product Categories</label>
				<div class="col-sm-3">
					<div class="radio">
						<label>
						<input type="radio" name="categories" value="FON" id="FON">FON: Freight Only</label>
					</div>
					<div class="radio">
						<label>
						<input type="radio" name="categories" value="FNC" id="FNC">FNC: Freight & Clearance</label>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="radio">
						<label>
						<input type="radio" name="categories" value="CLC" id="CLC">CLC: Clearance/ Local Charge</label>
					</div>
					<div class="radio">
						<label>
						<input type="radio" name="categories" value="TRK" id="TRK">TRK: Trucking</label>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="radio">
						<label>
						<input type="radio" name="categories" value="WRH" id="WRH">WRH: Warehousing Service</label>
					</div>
					<div class="radio">
						<label>
						<input type="radio" name="categories" value="VAD" id="VAD">VAD: Value Added Service</label>
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Load Type</label>
				<div class="col-sm-2">
					<select class="form-control input-sm" id="loadtype" name="loadtype">
						<option value=""></option>
					</select>
				</div>
				<label class="col-sm-2 control-label">Movement Service</label>
				<div class="col-sm-2">
					<select class="form-control input-sm" id="movementservice" name="movementservice">
						<option value=""></option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 control-label">Clearance Type</label>
				<div class="col-sm-6">
					<select class="form-control input-sm" name="clearence" id="clearence">
						<option value=""></option>
					</select>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-6">
					<section class="panel panel-primary">
						<header class="panel-heading text-center"> 
							Origin
						</header>
						
						<div class="panel-body">
							<div class="form-group">
								<label class="col-sm-4 control-label">Place of Receipt</label>
								<div class="col-sm-8">
									<select name="cityorigin" id="cityorigin" class="city" style="width:100%">
										<option value=""></option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Pickup Area</label>
								<div class="col-sm-8">
									<select name="areaorigin" id="areaorigin" style="width:100%">
										<option value=""></option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Port of Loading</label>
								<div class="col-sm-8">
									<select name="portorigin" id="portorigin" style="width:100%" >
										<option value=""></option>
									</select>
								</div>
							</div>
						</div>
					</section>
				</div>
				
				<div class="col-sm-6">
					<section class="panel panel-success">
						<header class="panel-heading text-center"> 
							Destination
						</header>
						
						<div class="panel-body">
							<div class="form-group">
								<label class="col-sm-4 control-label">Place of Delivery</label>
								<div class="col-sm-8">
									<select name="citydst" id="citydst" class="city" style="width:100%">
										<option value=""></option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Delivery Area</label>
								<div class="col-sm-8">
									<select name="areadst" id="areadst" style="width:100%">
										<option value=""></option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-4 control-label">Port of Loading</label>
								<div class="col-sm-8">
									<select name="portdst" id="portdst" style="width:100%">
										<option value=""></option>
									</select>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
			
			
			<div class="row">
				<div class="col-sm-12">
					<section class="panel panel-warning">
						<header class="panel-heading text-center"> 
							Term  of Payment
						</header>
						
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label class="col-sm-4 control-label">Freight</label>
										<div class="col-sm-8">
											<select class="form-control input-sm" id="freight" name="freight">
												<option value="">- Select Freight -</option>
												<option value="PREPAID">Prepaid</option>
												<option value="COLLECT">Collect</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="col-sm-4 control-label">Incoterm</label>
										<div class="col-sm-8">
											<select class="form-control input-sm" id="incoterm" name="incoterm">
												<option value=""></option>
											</select>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label class="col-sm-4 control-label">Contract No.</label>
										<div class="col-sm-8">
											<input type="text" class="form-control input-sm" id="contract" name="contract">
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="col-sm-4 control-label">Payable at</label>
										<div class="col-sm-8">
											<select class="city" id="payable" name="payable" style="width:100%">
												<option value=""></option>
											</select>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label class="col-sm-4 control-label">Methods of Payment</label>
										<div class="col-sm-8">
											<select class="form-control input-sm" id="payment" name="payment">
												<option value=""></option>
											</select>
										</div>
									</div>
								</div>
							</div>
								
						</div>
					</section>
				</div>
			</div>
			
			<hr>
			<div class="row">
				<div class="col-sm-4">
					<div class="pull-left">
						<button type="reset" class="btn btn-warning">RESET</button>
						<button type="submit" class="btn btn-primary" id="btnSave">SAVE</button>
					</div>
				</div>
				
				<div class="col-sm-8">
					<div class="pull-right">
						<button type="button" class="btn btn-success" id="btnNext">NEXT</button>
					</div>
				</div>
			</div>
			
		</form>
		
	</div>
</div>

<script>

	$(document).ready(function(){
		
		getDataService($("input#idjoborder").val());
		
		$("select#status").change(function(){
			var value = $(this).val();
			if(value == 'NOMINATE'){
				$("select#marketing").prop("disabled",false);
				$("select#agent").prop("disabled",false);
			}
			else if(value == 'FREEHAND'){
				$("select#marketing").prop("disabled",false);
				$("select#agent").prop("disabled",false);
			}
			else if(value == 'CORPORATE'){
				$("select#marketing").prop("disabled",true);
				$("select#agent").prop("disabled",true);
			}
		});
		
		
		$("input[type='radio']#SEA").click(function(){
			var value = $(this).val();
			fillSelectLoadType(value);
		});
		
		$("input[type='radio']#AIR").click(function(){
			var value = $(this).val();
			fillSelectLoadType(value);
		});
		
		$("input[type='radio']#ROAD").click(function(){
			var value = $(this).val();
			fillSelectLoadType(value);
		});
		
		$("input[type='radio']#RAIL").click(function(){
			var value = $(this).val();
			fillSelectLoadType(value);
		});
		
		$("select#loadtype").change(function(){
			var value = $(this).val();
			fillSelectMovementService(value);
		});

		$("select#cityorigin").change(function(){
			var city = $(this).val();
			onChangeCityOrigin(city);
		});
		
		$("select#citydst").change(function(){
			var city = $(this).val();
			onChangeCityDestination(city);
		});
		
		$('form#formservice').bootstrapValidator({
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
				url			: "<?php echo base_url('joborder/commit/service') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					window.location.href = "<?php echo base_url('joborder/service/commodity') ?>" + "/"  + $("input#idjoborder").val();
				},
				complete	: function(){
					$('input#codeservice').val('');
					//$('form#formservice')[0].reset();
					$('form#formservice').data('bootstrapValidator').resetForm();	
				}
			});
		});

		$("button#btnNext").click(function(){
			$("button#btnSave").trigger("click");
		});
		
	});

	function getDataService(IDCostumer){
		fillSelectMarketing();
		fillSelectAgent();
		fillSelectClearence();
		fillSelectCity();
		fillSelectIncoterm();
		fillSelectPayment();

		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('joborder/getbydetail/service') ?>"+"/"+IDCostumer,
			beforeSend	: function(){

			},
			success		: function(json){
				$("input#codeservice").val(json.service_id);
				$("select#status").val(json.shipment_status);
				$("select#marketing").select2("val", json.marketing); 
				$("select#agent").select2("val", json.agent); 
				$("input[type='radio']#"+json.moving_type).prop("checked",true); 
				$("input[type='radio']#"+json.mode_of_transport).prop("checked",true); 
				$("input[type='radio']#"+json.product_categories).prop("checked",true);
				if(json.mode_of_transport != ""){
					fillSelectLoadType(json.mode_of_transport); $("select#loadtype").val(json.load_type); 
				}
				if(json.load_type != ""){
					fillSelectMovementService(json.load_type); $("select#movementservice").val(json.movement_service);  
				}
				
				
				$("select#clearence").val(json.clearence);
				$("select#cityorigin").select2("val", json.place_of_receipt); 
				if(json.place_of_receipt != ""){
					onChangeCityOrigin(json.place_of_receipt); $("select#areaorigin").select2("val", json.pickup_area); $("select#portorigin").select2("val", json.port_of_loading);
				}
				$("select#citydst").select2("val", json.place_of_delivery); 
				if(json.place_of_delivery != ""){
					onChangeCityDestination(json.place_of_delivery); $("select#areadst").select2("val", json.delivery_area); $("select#portdst").select2("val", json.port_of_discharge);
				}
				$("select#freight").val(json.freight);
				$("select#incoterm").val(json.incoterm);
				$("input#contract").val(json.contract_no);
				$("select#payable").select2("val", json.payable_at); 
				$("select#payment").val(json.payment_method);
			},
			complete	: function(){
				
			}
		});		

	}
	
	function fillSelectMarketing(){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('employee/getmarketing') ?>",
			success		: function(json){
				$("select#marketing").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Marketing -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.employee_code+'">'+row.name+'</option>';
				});

				$("select#marketing").empty().append(fillOption);
			},
			complete	: function(){
				$("select#marketing").select2();
			}
		});			
	}
	
	function fillSelectAgent(){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('costumer/getby/agent') ?>",
			success		: function(json){
				$("select#agent").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Agent -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.costumer_code+'">'+row.costumer_name+'</option>';
				});

				$("select#agent").empty().append(fillOption);
			},
			complete	: function(){
				$("select#agent").select2();
			}
		});			
	}
	
	function fillSelectClearence(){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('clearence/getall') ?>",
			success		: function(json){
				$("select#clearence").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Clearence -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.clearence_code+'">'+row.clearence_type+'</option>';
				});

				$("select#clearence").empty().append(fillOption);
			},
			complete	: function(){
				
			}
		});			
	}
	
	function fillSelectCity(){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('city/getall') ?>",
			success		: function(json){
				$("select.city").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select City -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.city_code+'">'+row.city_name+' ('+row.country_code+')</option>';
				});

				$("select.city").empty().append(fillOption);
			},
			error		: function(){
				alert("error");
			},
			complete	: function(){
				$("select.city").select2();
			}
		});			
	}
	
	function fillSelectIncoterm(){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('incoterm/getall') ?>",
			success		: function(json){
				$("select#incoterm").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Incoterm -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.term_code+'">'+row.term_name+'</option>';
				});

				$("select#incoterm").empty().append(fillOption);
			},
			error		: function(){
				alert("error");
			}
		});			
	}
	
	function fillSelectPayment(){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('payment/getall') ?>",
			success		: function(json){
				$("select#payment").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Payment -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.payment_code+'">'+row.payment_method+'</option>';
				});

				$("select#payment").empty().append(fillOption);
			},
			error		: function(){
				alert("error");
			}
		});	
	}
	
	function fillSelectLoadType(value){
		var option = "<option value=''>- Select One Below -</option>";
		
		if(value == "SEA"){
			option += "<option value='FCL'>FCL</option>";
			option += "<option value='LCL'>LCL</option>";
			option += "<option value='BREAKBULK'>Breakbulk</option>";
			option += "<option value='BULK'>Bulk</option>";		
		}
		else if(value == "AIR"){
			option += "<option value='+45'>+45</option>";
			option += "<option value='+100'>+100</option>";
			option += "<option value='+250'>+250</option>";
			option += "<option value='+300'>+300</option>";
			option += "<option value='+500'>+500</option>";
			option += "<option value='+1000'>+1000</option>";
		}
		else if(value == "ROAD"){
			option += "<option value='FCL'>FCL</option>";
			option += "<option value='FTL'>FTL</option>";
			option += "<option value='LTL'>LTL</option>";
			option += "<option value='LOOSE'>LOOSE</option>";
		}
		else if(value == "RAIL"){
			option += "<option value='FCL'>FCL</option>";
			option += "<option value='LCL'>LCL</option>";
			option += "<option value='BREAKBULK'>Breakbulk</option>";
		}
	
		$("select#loadtype").empty();
		$("select#loadtype").append(option);
	}
	
	function fillSelectMovementService(value){
		if(value == 'FCL'){
			var option = "<option value=''>- Select One Below -</option>";
			option += "<option value='CY/CY'>CY/CY</option>";
			option += "<option value='Port/Port'>Port/Port</option>";
			option += "<option value='Door/Door'>Door/Door</option>";
			option += "<option value='CY/Port'>CY/Port</option>";
			option += "<option value='CY/Door'>CY/Door</option>";
			option += "<option value='Door/CY'>Door/CY</option>"
			option += "<option value='Port/Door'>Port/Door</option>";
			option += "<option value='Port/CY'>Port/CY</option>";
			option += "<option value='Door/CY'>Door/CY</option>";
			option += "<option value='Door/Port'>Door/Port</option>";
			
			$("select#movementservice").empty();
			$("select#movementservice").append(option);
		}
		else if(value == 'LCL' || value == 'LOOSE' || value == 'BULK'){
			var option = "<option value=''>- Select One Below -</option>";
			option += "<option value='CFS/CFS'>CFS/CFS</option>";
			option += "<option value='Port/Port'>Port/Port</option>";
			option += "<option value='Door/Door'>Door/Door</option>";
			option += "<option value='CFS/Port'>CFS/Port</option>";
			option += "<option value='CFS/Door'>CFS/Door</option>";
			option += "<option value='Door/CFS'>Door/CFS</option>"
			option += "<option value='Port/Door'>Port/Door</option>";
			option += "<option value='Port/CFS'>Port/CFS</option>";
			option += "<option value='Door/CFS'>Door/CFS</option>";
			option += "<option value='Door/Port'>Door/Port</option>";
			
			$("select#movementservice").empty();
			$("select#movementservice").append(option);
		}
		else{
			$("select#movementservice").empty();
			$("select#movementservice").append(option);
		}
	}
	
	function fillSelectAirport(city,handleData){

		return $.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('airport/bycity') ?>"+"/"+city,
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error");
			}
		});	
		
	}
	
	function fillSelectSeaport(city,handleData){

		return $.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('seaport/bycity') ?>"+"/"+city,
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error");
			}
		});	
		
	}
		
	function fillSelectArea(city,handleData){

		return $.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('area/bycity') ?>"+"/"+city,
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error");
			}
		});	
		
	}

	function onChangeCityOrigin(city){
		fillSelectArea(city, function(output){
			$("select#areaorigin").empty().append("<option>Loading Data ...</option>");
		
			var fillOption = "<option value=''>- Select Area -</option>";
			
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.area_code+'">'+row.area_name+' ('+row.area_code+')</option>';
			});

			$("select#areaorigin").empty().append(fillOption);	
			
			$("select#areaorigin").select2();
		});
		
		
		var modetransport = $('input:radio[name=transport]').filter(":checked").val();
		if(modetransport == 'SEA'){
			$("select#portorigin").prop("disabled",false);	
			
			fillSelectSeaport(city, function(output){
				$("select#portorigin").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Port -</option>";
				
				$.each(output, function(index, row) {
					fillOption += '<option value="'+row.seaport_code+'">'+row.seaport_name+' ('+row.seaport_code+')</option>';
				});

				$("select#portorigin").empty().append(fillOption);	
				$("select#portorigin").select2();
			});
		
		}
		else if(modetransport == 'AIR'){
			$("select#portorigin").prop("disabled",false);

			fillSelectAirport(city, function(output){
				$("select#portorigin").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Port -</option>";
				
				$.each(output, function(index, row) {
					fillOption += '<option value="'+row.airport_code+'">'+row.airport_name+' ('+row.airport_code+')</option>';
				});

				$("select#portorigin").empty().append(fillOption);	
				$("select#portorigin").select2();
			});	
		}
		else{
			$("select#portorigin").prop("disabled",true);		
		}	
	}

	function onChangeCityDestination(city){
		fillSelectArea(city, function(output){
			$("select#areadst").empty().append("<option>Loading Data ...</option>");
		
			var fillOption = "<option value=''>- Select Area -</option>";
			
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.area_code+'">'+row.area_name+' ('+row.area_code+')</option>';
			});

			$("select#areadst").empty().append(fillOption);	
			
			$("select#areadst").select2();
		});
		
		
		var modetransport = $('input:radio[name=transport]').filter(":checked").val()
		if(modetransport == 'SEA'){
			$("select#portdst").prop("disabled",false);	

			fillSelectSeaport(city, function(output){
				$("select#portdst").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Port -</option>";
				
				$.each(output, function(index, row) {
					fillOption += '<option value="'+row.seaport_code+'">'+row.seaport_name+' ('+row.seaport_code+')</option>';
				});

				$("select#portdst").empty().append(fillOption);	
				$("select#portdst").select2();
			});				
		}
		else if(modetransport == 'AIR'){
			$("select#portdst").prop("disabled",false);		
			
			fillSelectAirport(city, function(output){
				$("select#portdst").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Port -</option>";
				
				$.each(output, function(index, row) {
					fillOption += '<option value="'+row.airport_code+'">'+row.airport_name+' ('+row.airport_code+')</option>';
				});

				$("select#portdst").empty().append(fillOption);	
				$("select#portdst").select2();
			});		
		}
		else{
			$("select#portdst").prop("disabled",true);		
		}
	}
	
		
</script>





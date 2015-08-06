<div class="tab-content padding tab-content-inline tab-content-bottom">
	<div class="tab-pane active">
						
		<form id="formschedule" class="form-horizontal" role="form">
			<input type="hidden" id="idjoborder" name="idjoborder" value="<?php echo $id_costumer ?>" />
			<input type="hidden" id="codeschedule" name="codeschedule" value="" />
			<div class="form-group">
				<label class="col-sm-3 control-label">Cargo Readiness Date</label>
				<label class="col-sm-1 control-label"></label>
				<div class="col-sm-3">
					<input type="text" class="form-control input-sm datepicker" name="readinessdate" id="readinessdate">
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label">Requested Shipping Date</label>
				<label class="col-sm-1 control-label">After</label>
				<div class="col-sm-3">
					<input type="text" class="form-control input-sm datepicker" name="shippingafter" id="shippingafter">
				</div>
				<label class="col-sm-1 control-label">Before</label>
				<div class="col-sm-3">
					<input type="text" class="form-control input-sm datepicker" name="shippingbefore" id="shippingbefore">
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label">Requested Delivery Date</label>
				<label class="col-sm-1 control-label">After</label>
				<div class="col-sm-3">
					<input type="text" class="form-control input-sm datepicker" name="deliveryafter" id="deliveryafter">
				</div>
				<label class="col-sm-1 control-label">Before</label>
				<div class="col-sm-3">
					<input type="text" class="form-control input-sm datepicker" name="deliverybefore" id="deliverybefore">
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-4 control-label">Transshipment</label>
				<div class="col-sm-3">
					<select class="form-control input-sm" id="transshipment" name="transshipment">
						<option value=""> - Select Transshipment - </option>
						<option value="DS"> Must be Direct Service </option>
						<option value="AT"> Allow Transshipment</option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label">Transshipment Port Allowed</label>
				<label class="col-sm-1 control-label">Country</label>
				<div class="col-sm-3">
					<select class="form-control input-sm country transshipment" id="transcountry" name="transcountry"></select>
				</div>
				<label class="col-sm-1 control-label">Port</label>
				<div class="col-sm-3">
					<select class="form-control input-sm port transshipment" id="transport" name="transport"></select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-4 control-label">Vessel Name</label>
				<div class="col-sm-3">
					<select class="form-control input-sm vessel" name="vessel" id="vessel"></select>	
				</div>
				<label class="col-sm-1 control-label">Voy</label>
				<div class="col-sm-3">
					<input type="text" class="form-control input-sm" name="voy" id="voy">
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label">ETD</label>
				<label class="col-sm-1 control-label">POL</label>
				<div class="col-sm-3">
					<input type="text" class="form-control input-sm datepicker" name="etdpol" id="etdpol">
				</div>
				<label class="col-sm-1 control-label">POD</label>
				<div class="col-sm-3">
					<input type="text" class="form-control input-sm datepicker" name="etdpod" id="etdpod">
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label">Open</label>
				<label class="col-sm-1 control-label">Time</label>
				<div class="col-sm-3">
					<input type="text" class="form-control input-sm timepicker" name="opentime" id="opentime">
				</div>
				<label class="col-sm-1 control-label">Date</label>
				<div class="col-sm-3">
					<input type="text" class="form-control input-sm datepicker" name="opendate" id="opendate">
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label">Closing</label>
				<label class="col-sm-1 control-label">Time</label>
				<div class="col-sm-3">
					<input type="text" class="form-control input-sm timepicker" name="closingtime" id="closingtime">
				</div>
				<label class="col-sm-1 control-label">Date</label>
				<div class="col-sm-3">
					<input type="text" class="form-control input-sm datepicker" name="closingdate" id="closingdate">
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-11">
					<div class="table-responsive">
						<table id="tabelVesel" class="table table-condensed table-striped table-hover table-bordered">
							<thead>
								<tr>
									<th width="27.5%">Connecting Vessel</th>
									<th width="27.5%">Connecting Port</th>
									<th width="15%">ETD</th>
									<th width="15%">ETA</th>
									<th class="text-center"> * </th>
								</tr>
							</thead>
							<tbody>
							</tbody>
						</table>
					</div>
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
						<button type="button" class="btn btn-info" id="btnSave">PREVIOUS</button>
						<button type="button" class="btn btn-success" id="btnNext">NEXT</button>
					</div>
				</div>
			</div>
		
		</form>
						
	</div>
</div>	

	
<script>

	$(document).ready(function(){

		$("button#btnNext").click(function(){
			$("button#btnSave").trigger("click");
		});

		$("button#btnPrevious").click(function(){
			window.location.href = "<?php echo base_url('joborder/service/commodity') ?>" + "/"  + $("input#idjoborder").val();
		});
		

		getDataSchedule($("input#idjoborder").val());
		initiateTabelVessel($("input#idjoborder").val());
		
		$('input.datepicker').datepicker({
		    format: 'yyyy-mm-dd',
		    autoclose: true
		})

		initiateDate("shippingafter","shippingbefore");
		initiateDate("deliveryafter","deliverybefore");
		
		$('.timepicker').timepicker({
			showMeridian: false
		});
		
		$("select#transshipment").change(function(){
			var value = $(this).val();
			
			if(value == 'DS'){
				$("select.transshipment").prop("disabled",false);
			}
			else if(value == 'AT'){
				$("select.transshipment").prop("disabled",true);
			}
		});
		
		$("select#transcountry").change(function(){
			var country = $(this).val();
			onChangeTransCountry(country);	
		});
		
		$('form#formschedule').bootstrapValidator({
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
				url			: "<?php echo base_url('joborder/commit/schedule') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					window.location.href = "<?php echo base_url('joborder/handling/preparation') ?>" + "/"  + $("input#idjoborder").val();
				},
				complete	: function(){
					$('input#codeschedule').val('');
					//$('form#formschedule')[0].reset();
					$('form#formschedule').data('bootstrapValidator').resetForm();	
				}
			});
		});
		
		
	});

	// UNTUK INISIASI TABEL VESSEL
	function initiateTabelVessel(IDJobOrder){
		var no = 0;
		$("table#tabelVesel tbody").empty();

		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("joborder/getbydetail/vessel") ?>"+"/"+IDJobOrder,
			success		: function(json){	
				
				var optionVessel = fillSelectVesselForTable();
				if($("select#transcountry").val() != ""){
					var optionPort = fillSelectPortForTable($("select#transcountry").val());
				}

				if(json.length == 0){
					var number = no+1;
					var newRow = generateRowVessel(number);

					$("table#tabelVesel tbody").append(newRow);
					
					$('input.datepicker').datepicker({
					    format: 'yyyy-mm-dd',
					    autoclose: true
					});
					initiateDate("etd","eta");
				}
				else{

					$.each(json, function(index, row) {
						var isiTrow = '';
						var styleNone = "";
						if(index == (json.length-1)){
							styleNone = "";
						}else{
							styleNone = "display:none";
						}

						no = row.detail_transshipment_id;
						
						isiTrow = '<tr id="'+no+'">';
						isiTrow += '<td><select class="form-control input-sm vessel" name="connectingvessel[]" id="connectingvessel">'+optionVessel+'</select></td>';
						isiTrow += '<td><select class="form-control input-sm port" name="connectingport[]" id="connectingport">'+optionPort+'</select></td>';
						isiTrow += '<td><input value="'+row.etd+'" type="text" class="form-control input-sm datepicker" name="etd[]" id="etd"></td>';
						isiTrow += '<td><input value="'+row.eta+'"type="text" class="form-control input-sm datepicker" name="eta[]" id="eta"></td>';
						isiTrow += '<td class="text-center">';
						isiTrow += '<button type="button" class="btn btn-xs btn-danger" id="btnRemoveVessel" onclick="return onClickRemoveVessel('+no+')"> Remove </button> ';
						isiTrow += '<button style="'+styleNone+'" type="button" class="btn btn-xs btn-success" id="btnAddVessel" onclick="return onClickAddVessel('+no+')"> Add </button> ';
						isiTrow += '<input value="'+no+'" type="hidden" id="idVessel" />';
						isiTrow += '</td>';
						isiTrow += '</tr>';
						
						$("table#tabelVesel tbody").append(isiTrow);
						var thisRow = $("table#tabelVesel tbody").find("tr#"+no);
						thisRow.find("select#connectingvessel").val(row.connecting_vessel);
						thisRow.find("select#connectingport").val(row.connecting_port);
						
						$('input.datepicker').datepicker({
						    format: 'yyyy-mm-dd',
						    autoclose: true
						});
						initiateDate("etd","eta");
					});
				}
			},
			error		: function(){
				alert("error tabel vessel");
			}
		});	
		
	}

	function generateRowVessel(no){
		var isiTrow = '';
		var optionPort = "";
		var optionVessel = "";
		optionVessel = fillSelectVesselForTable();
		if($("select#transcountry").val() != ""){
			var optionPort = fillSelectPortForTable($("select#transcountry").val());
		}
	
		isiTrow = '<tr id="'+no+'">';
		isiTrow += '<td><select class="form-control input-sm vessel" name="connectingvessel[]" id="connectingvessel">'+optionVessel+'</select></td>';
		isiTrow += '<td><select class="form-control input-sm port" name="connectingport[]" id="connectingport">'+optionPort+'</select></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm datepicker" name="etd[]" id="etd"></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm datepicker" name="eta[]" id="eta"></td>';
		isiTrow += '<td class="text-center">';
		isiTrow += '<button type="button" class="btn btn-xs btn-danger" id="btnRemoveVessel" onclick="return onClickRemoveVessel('+no+')"> Remove </button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnAddVessel" onclick="return onClickAddVessel('+no+')"> Add </button> ';
		isiTrow += '<input type="hidden" id="idHandling" />';
		isiTrow += '</td>';
		isiTrow += '</tr>';

		return isiTrow;
	}

	function onClickAddVessel(number){
		var tRow = $("table#tabelVesel tbody").find("tr#"+number);
		var no = number+1;
		var isiTrow = generateRowVessel(no);
		$("table#tabelVesel tbody").append(isiTrow);
		tRow.find("button#btnAddVessel").hide();


		$('input.datepicker').datepicker({
		    format: 'yyyy-mm-dd',
		    autoclose: true
		});
		initiateDate("etd","eta");
	}

	function onClickRemoveVessel(number){
		var no = number-1;
		var bRow = $("table#tabelVesel tbody").find("tr#"+no);
		var tRow = $("table#tabelVesel tbody").find("tr#"+number);
		bRow.find("button#btnAddVessel").show();
		tRow.remove();
	}

	// UNTUK INISIASI TABEL VESSEL SELESAI


	function onChangeTransCountry(country){
		fillSelectPort(country);
	}

	function getDataSchedule(IDCostumer){
		fillSelectCountry();
		fillSelectVessel();

		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('joborder/getbydetail/schedule') ?>"+"/"+IDCostumer,
			beforeSend	: function(){

			},
			success		: function(json){
				$("input#codeschedule").val(json.schedule_id);
				$("input#readinessdate").val(json.readiness_date);
				$("input#shippingafter").val(json.shipping_after);
				$("input#shippingbefore").val(json.shipping_before);
				$("input#deliveryafter").val(json.request_after);
				$("input#deliverybefore").val(json.request_before);
				$("select#transshipment").val(json.transshipment); $("select#transshipment").trigger("change");
				$("select#transcountry").val(json.transshipment_country); 
				onChangeTransCountry(json.transshipment_country); $("select#transport").val(json.transshipment_port); 
				$("select#vessel").val(json.vessel_code); 
				$("input#voy").val(json.voy);
				$("input#etdpol").val(json.etd_pol);
				$("input#etdpod").val(json.etd_pod);
				$("input#opentime").val(json.open_time);
				$("input#opendate").val(json.open_date);
				$("input#closingtime").val(json.close_time);
				$("input#closingdate").val(json.close_date);
			},
			complete	: function(){
				
			}
		});		
	}

	function getCountry(handleData){
		return $.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('country/getall') ?>",
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error country");
			}
		});	
	}
	
	function fillSelectCountry(){
		getCountry(function(output){
			$("select.country").empty().append("<option>Loading Data ...</option>");
			
			var fillOption = "<option value=''>- Select Country -</option>";
			
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.country_code+'">'+row.country_name+' ('+row.country_code+')</option>';
			});
			
			$("select.country").empty().append(fillOption);		
		});
	}
	
	function getPort(country,handleData){
		return $.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('seaport/bycountry') ?>"+"/"+country,
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error port");
			}
		});	
	}
	
	function fillSelectPort(country){
		getPort(country,function(output){
			$("select.port").empty().append("<option>Loading Data ...</option>");
			
			var fillOption = "<option value=''>- Select Port -</option>";
			
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.seaport_code+'">'+row.seaport_name+' ('+row.city_code+')</option>';
			});
			
			$("select.port").empty().append(fillOption);	
		});	
	}

	function fillSelectPortForTable(country){
		var isi = "";
		getPort(country,function(output){
			var fillOption = "<option value=''>- Select Port -</option>";
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.seaport_code+'">'+row.seaport_name+' ('+row.city_code+')</option>';
			});
			isi = fillOption;
		});	
		return isi;
	}
	
	function getVessel(handleData){

		return $.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('vessel/getall') ?>",
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error vessel");
			}
		});	
	}
	
	function fillSelectVessel(){

		getVessel(function(output){
			$("select.vessel").empty().append("<option>Loading Data ...</option>");
			
			var fillOption = "<option value=''>- Select Vessel -</option>";
			
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.vessel_code+'">'+row.vessel_name+' ('+row.costumer_name+')</option>';
			});
			
			$("select.vessel").empty().append(fillOption);
		});
	}

	function fillSelectVesselForTable(){
		var isi = "";
		getVessel(function(output){
			var fillOption = "<option value=''>- Select Vessel -</option>";
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.vessel_code+'">'+row.vessel_name+' ('+row.costumer_name+')</option>';
			});
			isi = fillOption;
		});
		return isi;
	}

	function initiateDate(dateBefore,dateAfter){
		
		var FromEndDate = new Date();
		var ToEndDate = new Date();

		$('input#'+dateBefore).on('changeDate', function(selected){
	        startDate = new Date(selected.date.valueOf());
	        startDate.setDate(startDate.getDate(new Date(selected.date.valueOf())));
	        $('input#'+dateAfter).datepicker('setStartDate', startDate);
	    });

		$('input#'+dateAfter).on('changeDate', function(selected){
	        FromEndDate = new Date(selected.date.valueOf());
	        FromEndDate.setDate(FromEndDate.getDate(new Date(selected.date.valueOf())));
	        $('input#'+dateBefore).datepicker('setEndDate', FromEndDate);
	    });
	   
	}
		
</script>




				
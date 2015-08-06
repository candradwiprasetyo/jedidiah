<div class="tab-content padding tab-content-inline tab-content-bottom">
	<div class="tab-pane active">

		<form id="formpreparation" class="form-horizontal" role="form">
			<input type="hidden" id="idjoborder" name="idjoborder" value="<?php echo $id_costumer ?>" />
			<input type="hidden" id="codepreparation" name="codepreparation" value="" />
			
			<div class="row">
				<div class="col-sm-6">
					<div class="well well-sm text-center" >P.A.R.T.I.E.S</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Shipper</label>
						<div class="col-sm-9">
							<select name="shipper" id="shipper" style="width:100%"></select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Address</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="shipperaddress" id="shipperaddress" readonly></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Phone/ Fax</label>
						<div class="col-sm-9">
							<input type="text" class="form-control input-sm" name="shipperphone" id="shipperphone" readonly>
						</div>
					</div>
					
					<hr>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Consignee</label>
						<div class="col-sm-9">
							<select name="consignee" id="consignee" style="width:100%"></select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Address</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="consigneeaddress" id="consigneeaddress" readonly></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Phone/ Fax</label>
						<div class="col-sm-9">
							<input type="text" class="form-control input-sm" name="consigneephone" id="consigneephone" readonly>
						</div>
					</div>
					
					<hr>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Notify Party</label>
						<div class="col-sm-9">
							<select class="notify" name="notifyparty" id="notifyparty" style="width:100%"></select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Address</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="notifyaddress" id="notifyaddress" readonly></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Phone/ Fax</label>
						<div class="col-sm-9">
							<input type="text" class="form-control input-sm" name="notifyphone" id="notifyphone" readonly>
						</div>
					</div>
					
					<hr>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Also Notify Party</label>
						<div class="col-sm-9">
							<select class="notify" name="alsonotifyparty" id="alsonotifyparty" style="width:100%"></select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Address</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="alsonotifyaddress" id="alsonotifyaddress" readonly></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Phone/ Fax</label>
						<div class="col-sm-9">
							<input type="text" class="form-control input-sm" name="alsonotifyphone" id="alsonotifyphone" readonly>
						</div>
					</div>
						
				</div>
				<div class="col-sm-6">
					<div class="well well-sm text-center" >CARRIER</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Customs Brokerage</label>
						<div class="col-sm-8">
							<select name="brokerage" id="brokerage" style="width:100%"></select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">PPJK Company</label>
						<div class="col-sm-8">
							<select name="ppjk" id="ppjk" style="width:100%"></select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Shipping Line</label>
						<div class="col-sm-8">
							<select name="shipping" id="shipping" style="width:100%"></select>
						</div>
					</div>
					
					<hr>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">Freight Forwader</label>
						<div class="col-sm-8">
							<select name="forwader" id="forwader" style="width:100%"></select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">#Transshipment Agent</label>
						<div class="col-sm-8">
							<select class="agent" name="transshipmentagent" id="transshipmentagent" style="width:100%"></select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-4 control-label">#Delivery Agent</label>
						<div class="col-sm-8">
							<select class="agent" name="deliveryagent" id="deliveryagent" style="width:100%"></select>
						</div>
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
			window.location.href = "<?php echo base_url('joborder/service/schedule') ?>" + "/"  + $("input#idjoborder").val();
		});

		getDataPreparation($("input#idjoborder").val());
		
		$("select#shipper").change(function(){
			onChangeShipper();
		});
		
		$("select#consignee").change(function(){
			onChangeConsignee();
		});
		
		$("select#notifyparty").change(function(){
			onChangeNotify();
		});
		
		$("select#alsonotifyparty").change(function(){
			onChangeAlsoNotify();
		});
		
		
		$('form#formpreparation').bootstrapValidator({
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
				url			: "<?php echo base_url('joborder/commit/preparation') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					window.location.href = "<?php echo base_url('joborder/handling/stuffing') ?>" + "/"  + $("input#idjoborder").val();
				},
				complete	: function(){
					$('input#codepreparation').val('');
					//$('form#formpreparation')[0].reset();
					$('form#formpreparation').data('bootstrapValidator').resetForm();	
				}
			});
		});
		
	});

	function onChangeShipper(){
		var address = $("select#shipper option:selected").data("address");
		var phone = $("select#shipper option:selected").data("phone");

		$("textarea#shipperaddress").val(address);
		$("input#shipperphone").val(phone);
	}

	function onChangeConsignee(){
		var address = $("select#consignee option:selected").data("address");
		var phone = $("select#consignee option:selected").data("phone");
		
		$("textarea#consigneeaddress").val(address);
		$("input#consigneephone").val(phone);
	}

	function onChangeNotify(){
		var address = $("select#notifyparty option:selected").data("address");
		var phone = $("select#notifyparty option:selected").data("phone");
		
		$("textarea#notifyaddress").val(address);
		$("input#notifyphone").val(phone);
	}

	function onChangeAlsoNotify(){
		var address = $("select#alsonotifyparty option:selected").data("address");
		var phone = $("select#alsonotifyparty option:selected").data("phone");
		
		$("textarea#alsonotifyaddress").val(address);
		$("input#alsonotifyphone").val(phone);
	}

	function getDataPreparation(IDCostumer){
		fillSelectShipper();
		fillSelectConsignee();
		fillSelectBrokerage();
		fillSelectShipping();
		fillSelectForwader();
		fillSelectAgent();
		fillSelectPpjk();
		fillSelectNotify();

		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('joborder/getbydetail/preparation') ?>"+"/"+IDCostumer,
			beforeSend	: function(){

			},
			success		: function(json){
				$("input#codepreparation").val(json.preparation_id);
				$("select#shipper").select2("val", json.shipper); onChangeShipper();
				$("select#consignee").select2("val", json.consignee); onChangeConsignee();
				$("select#notifyparty").select2("val", json.notify); onChangeNotify();
				$("select#alsonotifyparty").select2("val", json.also_notify); onChangeAlsoNotify();
				$("select#brokerage").select2("val", json.brokerage);
				$("select#ppjk").select2("val", json.ppjk);
				$("select#shipping").select2("val", json.shipping);
				$("select#forwader").select2("val", json.forwader);
				$("select#transshipmentagent").select2("val", json.transshipment_agent);
				$("select#deliveryagent").select2("val", json.delivery_agent);
			},
			complete	: function(){
				
			}
		});		
	}
	
	function fillSelectShipper(){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("costumer/getby/shipper") ?>",
			success		: function(json){
				$("select#shipper").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Shipper -</option>";
				
				$.each(json, function(index, row) {
					var address = row.main_address + " " + row.main_city + " " + row.main_provincy + " " + row.main_country + " " + row.main_zipcode;
					
					var phone = row.main_phone + " / " + row.main_fax;
					
					fillOption += '<option data-address="'+address+'" data-phone="'+phone+'" value="'+row.costumer_code+'">'+row.costumer_name+'</option>';
				});

				$("select#shipper").empty().append(fillOption);
			},
			complete	: function(){
				$("select#shipper").select2();
			}
		});			
	}
	
	function fillSelectConsignee(){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("costumer/getby/consignee") ?>",
			success		: function(json){
				$("select#consignee").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Consignee -</option>";
				
				$.each(json, function(index, row) {
					var address = row.main_address + " " + row.main_city + " " + row.main_provincy + " " + row.main_country + " " + row.main_zipcode;
					
					var phone = row.main_phone + " / " + row.main_fax;
					
					fillOption += '<option data-address="'+address+'" data-phone="'+phone+'" value="'+row.costumer_code+'">'+row.costumer_name+'</option>';
				});

				$("select#consignee").empty().append(fillOption);
			},
			complete	: function(){
				$("select#consignee").select2();
			}
		});			
	}
	
	function fillSelectBrokerage(){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("costumer/getby/brokerage") ?>",
			success		: function(json){
				$("select#brokerage").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Brokerage -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.costumer_code+'">'+row.costumer_name+'</option>';
				});

				$("select#brokerage").empty().append(fillOption);
			},
			complete	: function(){
				$("select#brokerage").select2();
			}
		});			
	}
	
	function fillSelectShipping(){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("costumer/getby/shipping") ?>",
			success		: function(json){
				$("select#shipping").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Shipping -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.costumer_code+'">'+row.costumer_name+'</option>';
				});

				$("select#shipping").empty().append(fillOption);
			},
			complete	: function(){
				$("select#shipping").select2();
			}
		});			
	}
	
	function fillSelectForwader(){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("costumer/getby/forwader") ?>",
			success		: function(json){
				$("select#forwader").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Forwader -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.costumer_code+'">'+row.costumer_name+'</option>';
				});

				$("select#forwader").empty().append(fillOption);
			},
			complete	: function(){
				$("select#forwader").select2();
			}
		});			
	}
	
	function fillSelectAgent(){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("costumer/getby/agent") ?>",
			success		: function(json){
				$("select.agent").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Agent -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.costumer_code+'">'+row.costumer_name+'</option>';
				});

				$("select.agent").empty().append(fillOption);
			},
			complete	: function(){
				$("select.agent").select2();
			}
		});			
	}
	
	function fillSelectPpjk(){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("costumer/getall") ?>",
			success		: function(json){
				$("select#ppjk").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select PPJK -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.costumer_code+'">'+row.costumer_name+'</option>';
				});

				$("select#ppjk").empty().append(fillOption);
			},
			complete	: function(){
				$("select#ppjk").select2();
			}
		});			
	}

	function fillSelectNotify(){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("costumer/getbynotify") ?>",
			success		: function(json){
				$("select.notify").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Notify -</option>";
				
				$.each(json, function(index, row) {
					var address = row.main_address + " " + row.main_city + " " + row.main_provincy + " " + row.main_country + " " + row.main_zipcode;
					
					var phone = row.main_phone + " / " + row.main_fax;
					
					fillOption += '<option data-address="'+address+'" data-phone="'+phone+'" value="'+row.costumer_code+'">'+row.costumer_name+'</option>';
				});

				$("select.notify").empty().append(fillOption);
			},
			complete	: function(){
				$("select.notify").select2();
			}
		});			
	}

		
</script>





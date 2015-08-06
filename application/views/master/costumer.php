
<div class="row">

	<div class="col-sm-12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST COSTUMER
				</h3>
				<button id="btnAddCostumer" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="tabelCostumer" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Code</th>
							<th>Costumer Name</th>
							<th>Main Email / Web </th>
							<th width="20%">Note</th>
							<th width="120px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>

</div>
		

<div class="modal fade" id="modalCostumer">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Costumer</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formCostumer">
		  <input type="hidden" id="hiddencostumer" name="hiddencostumer" value="">
		  
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
			<div class="col-sm-4">
				<div class="form-group">
					<label for="email">Main Email</label>
					<input type="text" class="form-control input-sm" id="email" name="email">
				</div>
			</div>
			<div class="col-sm-8">
				<div class="form-group">
					<label for="web">Website</label>
					<input type="text" class="form-control input-sm" id="web" name="web">
				</div>
			</div>
		  </div>
		  
		  <div class="row">
			<div class="col-sm-12">
				<div class="form-group">
					<label for="note">Note</label>
					<input type="text" class="form-control input-sm" id="note" name="note">
				</div>
			</div>
		  </div>
		  
		  <div class="well well-sm text-center">Main Address</div>
		  
		  <div class="row">
			<div class="col-sm-12">
				<div class="form-group">
					<label for="addressmain">Address</label>
					<input type="text" class="form-control input-sm" id="addressmain" name="addressmain">
				</div>
			</div>
		  </div>
		  
		  <div class="row">
			<div class="col-sm-3">
				<div class="form-group">
					<label for="citymain">City</label>
					<input type="text" class="form-control input-sm" id="citymain" name="citymain">
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
					<label for="provincymain">Provincy</label>
					<input type="text" class="form-control input-sm" id="provincymain" name="provincymain">
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
					<label for="countrymain">Country</label>
					<input type="text" class="form-control input-sm" id="countrymain" name="countrymain">
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
					<label for="postcodemain">Post Code</label>
					<input type="text" class="form-control input-sm" id="postcodemain" name="postcodemain">
				</div>
			</div>
		  </div>
		  
		  <div class="row">
			<div class="col-sm-3">
				<div class="form-group">
					<label for="phonemain">Phone</label>
					<input type="text" class="form-control input-sm" id="phonemain" name="phonemain">
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
					<label for="faxmain">Fax</label>
					<input type="text" class="form-control input-sm" id="faxmain" name="faxmain">
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
					<label for="picmain">PIC</label>
					<input type="text" class="form-control input-sm" id="picmain" name="picmain">
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
					<label for="picmobilemain">PIC Mobile</label>
					<input type="text" class="form-control input-sm" id="picmobilemain" name="picmobilemain">
				</div>
			</div>
		  </div>
		  
		  <div class="well well-sm text-center">Warehouse Address</div>
		  
		  <fieldset id="warehouseaddress">
			  <div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<label for="addresswh">Address</label>
						<input type="text" class="form-control input-sm" id="addresswh" name="addresswh[]">
					</div>
				</div>
			  </div>
			  
			  <div class="row">
				<div class="col-sm-3">
					<div class="form-group">
						<label for="citywh">City</label>
						<input type="text" class="form-control input-sm" id="citywh" name="citywh[]">
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<label for="provincywh">Provincy</label>
						<input type="text" class="form-control input-sm" id="provincywh" name="provincywh[]">
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<label for="countrywh">Country</label>
						<input type="text" class="form-control input-sm" id="countrywh" name="countrywh[]">
					</div>
				</div>
				<div class="col-sm-3">
					<div class="form-group">
						<label for="postcodewh">Post Code</label>
						<input type="text" class="form-control input-sm" id="postcodewh" name="postcodewh[]">
					</div>
				</div>
			  </div>
		  
			  <div class="row button">
				<div class="col-md-3 col-md-offset-9">
					<div class="form-group">
						<button type="button" class="btn btn-xs btn-primary btn-block" id="btnAddWarehouse">Add Warehouse Address</button>
					</div>
				</div>
			  </div>
			  
		  </fieldset>
		  
		  <div class="well well-sm text-center">Revenue</div>
		  
		  <div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<label for="citywh">Costumer Type</label>
					<select class="form-control input-sm" id="costumertype" name="costumertype">
						<option value="">- Select Default Costumer Type - </option>
						<option value="Costumer">Costumer</option>
						<option value="Agent">Agent</option>
					</select>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="creditlimit">Credit Limit</label>
					<input type="text" class="form-control input-sm" id="creditlimit" name="creditlimit">
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="creditperiode">Credit Periode</label>
					<input type="text" class="form-control input-sm" id="creditperiode" name="creditperiode">
				</div>
			</div>
		  </div>
		  
		  <div class="well well-sm text-center">Cost</div>
		  
		  <div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<label for="citywh">Vendor Type</label>
					<select class="form-control input-sm" id="vendortype" name="vendortype">
						<option value="">- Select Default Vendor Type - </option>
						<option value="Shipping">Shipping Line</option>
						<option value="Air">Air Line</option>
						<option value="Forwader">Forwader</option>
						<option value="Brokerage">Customs Brokerage</option>
						<option value="Trucking">Trucking</option>
						<option value="Warehousing">Warehousing</option>
						<option value="Government">Government</option>
						<option value="Other">Other</option>
					</select>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="creditperiodevendor">Credit Periode</label>
					<input type="text" class="form-control input-sm" id="creditperiodevendor" name="creditperiodevendor">
				</div>
			</div>
		  </div>
		  
		  <div class="well well-sm text-center">Company Legalities</div>
		  
		  <fieldset id="companylegalities">
			  <div class="row">
				<div class="col-sm-4">
					<div class="form-group">
						<label for="legalities">Legalities</label>
						<select class="form-control input-sm" id="legalities" name="legalities[]"></select>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label for="number">Number</label>
						<input type="text" class="form-control input-sm" id="number" name="number[]">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="form-group">
						<label for="date">Date</label>
						<input type="text" class="form-control input-sm" id="date" name="date[]">
					</div>
				</div>
			  </div>
		 
			  <div class="row button">
				<div class="col-md-4 col-md-offset-8">
					<div class="form-group">
						<button type="button" class="btn btn-xs btn-primary btn-block" id="btnAddLegalities">Add Company Legalities</button>
					</div>
				</div>
			  </div>			  
		  </fieldset>
		  
		  
		  <div class="well well-sm text-center">All Categories As Costumer & Vendor</div>
		  
		  <div class="row">
			<div class="col-sm-3">
				<div class="form-group">
					<label for="legalities">Categories</label>
					<div class="checkbox">
						<label>
						<input type="checkbox" name="ascostumer" value="1" id="ascostumer">As Costumer</label>
					</div>
					<div class="checkbox">
						<label>
						<input type="checkbox" name="asvendor" value="1" id="asvendor">As Vendor</label>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
					<label for="number">As Costumer</label>
					<div class="checkbox">
						<label>
						<input type="checkbox" name="costumer" value="1" id="costumer">Costumer</label>
					</div>
					<div class="checkbox">
						<label>
						<input type="checkbox" name="agent" value="1" id="agent">Agent</label>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
					<label for="date">As Vendor</label>
					<div class="checkbox">
						<label>
						<input type="checkbox" name="shipping" value="1" id="shipping">Shipping Line</label>
					</div>
					<div class="checkbox">
						<label>
						<input type="checkbox" name="air" value="1" id="air">Air Line</label>
					</div>
					<div class="checkbox">
						<label>
						<input type="checkbox" name="forwader" value="1" id="forwader">Forwader</label>
					</div>
					<div class="checkbox">
						<label>
						<input type="checkbox" name="brokerage" value="1" id="brokerage">Customs Brokerage</label>
					</div>
					<div class="checkbox">
						<label>
						<input type="checkbox" name="trucking" value="1" id="trucking">Trucking</label>
					</div>
					<div class="checkbox">
						<label>
						<input type="checkbox" name="warehousing" value="1" id="warehousing">Warehousing</label>
					</div>
					<div class="checkbox">
						<label>
						<input type="checkbox" name="government" value="1" id="government">Government</label>
					</div>
					<div class="checkbox">
						<label>
						<input type="checkbox" name="other" value="1" id="other">Other</label>
					</div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
					<label for="date">Shipping Docs & Remark only</label>
					<div class="checkbox">
						<label>
						<input type="checkbox" name="shipper" value="1" id="shipper">Shipper</label>
					</div>
					<div class="checkbox">
						<label>
						<input type="checkbox" name="consignee" value="1" id="consignee">Consignee</label>
					</div>
					<div class="checkbox">
						<label>
						<input type="checkbox" name="consolidator" value="1" id="consolidator">Consolidator</label>
					</div>
					<div class="checkbox">
						<label>
						<input type="checkbox" name="buyer" value="1" id="buyer">Buyer</label>
					</div>
					<div class="checkbox">
						<label>
						<input type="checkbox" name="seller" value="1" id="seller">Seller</label>
					</div>
					<div class="checkbox">
						<label>
						<input type="checkbox" name="fumigator" value="1" id="fumigator">Fumigator</label>
					</div>
					<div class="checkbox">
						<label>
						<input type="checkbox" name="container" value="1" id="container">Container Depot</label>
					</div>
					<div class="checkbox">
						<label>
						<input type="checkbox" name="customs" value="1" id="customs">Customs (BC)  </label>
					</div>
					<div class="checkbox">
						<label>
						<input type="checkbox" name="port" value="1" id="port">Port Authority  </label>
					</div>
				</div>
			</div>
		  </div>
		  
		  
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formCostumer" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	

<script>

	$(document).ready(function(){
		
		listCostumer();
		
		$("button#btnAddCostumer").click(function(){
			fillSelectLegalities();
			$('div#modalCostumer').modal("show");
		});
		
		$("button#btnAddWarehouse").click(function(){
			var field = $(this).closest('fieldset#warehouseaddress');
			var field_new = field.clone();
			field_new.find('div.button').remove();
			field_new.insertBefore( field );
			field.find('input').val("");
		});
		
		$("button#btnAddLegalities").click(function(){
			var field = $(this).closest('fieldset#companylegalities');
			var field_new = field.clone();
			field_new.find('div.button').remove();
			
			var selectedLegal = field.find("select#legalities").val();	
			field_new.find("select#legalities").val(selectedLegal);
			
			field_new.insertBefore( field );
			field.find('input').val("");
			field.find('select#legalities').val("");
		});
		
		$('form#formCostumer').bootstrapValidator({
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
							message: 'Fill of this field must be less than 5 characters',
							max: function (value, validator, $field) {
								return 5 - (value.match(/\r/g) || []).length;
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
				}
			}
		}).on('success.form.bv', function(e) {
			e.preventDefault();
			var $form = $(e.target);
			var dataSerialize = $form.serialize();
			
			$.ajax({
				type		: "POST",
				dataType	: 'json',
				url			: "<?php echo base_url('costumer/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listCostumer();
					$('input#hiddencostumer').val('');
					$('form#formCostumer')[0].reset();
					$('form#formCostumer').data('bootstrapValidator').resetForm();	
					$('div#modalCostumer').modal("hide");
				}
			});
		});
		
	});
	
	function getLegalities(handleData){
		return $.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('legalities/getall') ?>",
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error");
			}
		});	
	}
	
	function fillSelectLegalities(){
		getLegalities(function(output){
			$("select#legalities").empty().append("<option>Loading Data ...</option>");
			
			var fillOption = "<option value=''>- Select Legalities -</option>";
			
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.legalities_code+'">'+row.legalities_name+'</option>';
			});
			
			$("select#legalities").empty().append(fillOption);		
		});
	}
	
	function getCostumer(handleData){
		return $.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('costumer/getall') ?>",
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error");
			}
		});	
	}
	
	function listCostumer(){
		
		getCostumer(function(output){
			var number = 0;
			jqTabel = $('table#tabelCostumer').DataTable({
				"bDestroy" : true,
				paging: true,
				searching: false,
				ordering: false,
				data: output,
				columns: [
					{ data: 'costumer_code' },
					{ data: 'costumer_code' },
					{ data: 'costumer_name' },
					{ data: 'costumer_email' },
					{ data: 'note' },
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
							var email = ((row.costumer_email == "") ? "-" : row.costumer_email);
							var website = ((row.costumer_website == "") ? "-" : row.costumer_website);
							var isi = email + " / " + website;
							return isi;
						}
					},	
					{ 
						"targets": [5], 
						"render": function ( data, type, row, meta ) {
							var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editCostumer(\''+row.costumer_code+'\')" ><i class="fa fa-edit"></i></a> ';
							var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusCostumer(\''+row.costumer_code+'\')" ><i class="fa fa-times"></i></a>';
							return edit + del;
						}
					}
				]
			});
		});
		
	
	}
	
	function editCostumer(ID){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('costumer/getrow') ?>"+"/"+ID,
			success		: function(data){
				$("input#hiddencostumer").val(data.costumer_code);
				$("input#code").val(data.costumer_code);
				$("input#name").val(data.costumer_name);
				$("input#email").val(data.costumer_email);
				$("input#web").val(data.costumer_website);
				$("input#note").val(data.note);
				$("input#addressmain").val(data.main_address);
				$("input#citymain").val(data.main_city);
				$("input#provincymain").val(data.main_provincy);
				$("input#countrymain").val(data.main_country);
				$("input#postcodemain").val(data.main_zipcode);
				$("input#phonemain").val(data.main_phone);
				$("input#faxmain").val(data.main_fax);
				$("input#picmain").val(data.main_pic);
				$("input#picmobilemain").val(data.main_pic_mobile);
				$("select#costumertype").val(data.default_costumer_type);
				$("input#creditlimit").val(data.costumer_credit_limit);
				$("input#creditperiode").val(data.costumer_credit_periode);
				$("select#vendortype").val(data.default_vendor_type);
				$("input#creditperiodevendor").val(data.vendor_credit_periode);
				
				
				$("input[type='checkbox']").prop("checked",false);
				
				if(data.as_costumer == '1')
					$("input[type='checkbox']#ascostumer").prop("checked",true);
			
				if(data.as_vendor == '1')
					$("input[type='checkbox']#asvendor").prop("checked",true);
				
				if(data.costumer == '1')
					$("input[type='checkbox']#costumer").prop("checked",true);
				
				if(data.agent == '1')
					$("input[type='checkbox']#agent").prop("checked",true);
				
				if(data.shipping == '1')
					$("input[type='checkbox']#shipping").prop("checked",true);
				
				if(data.air == '1')
					$("input[type='checkbox']#air").prop("checked",true);
				
				if(data.forwader == '1')
					$("input[type='checkbox']#forwader").prop("checked",true);
				
				if(data.brokerage == '1')
					$("input[type='checkbox']#brokerage").prop("checked",true);
				
				if(data.trucking == '1')
					$("input[type='checkbox']#trucking").prop("checked",true);
				
				if(data.warehousing == '1')
					$("input[type='checkbox']#warehousing").prop("checked",true);
				
				if(data.government == '1')
					$("input[type='checkbox']#government").prop("checked",true);
				
				if(data.other == '1')
					$("input[type='checkbox']#other").prop("checked",true);
				
				if(data.shipper == '1')
					$("input[type='checkbox']#shipper").prop("checked",true);
				
				if(data.consignee == '1')
					$("input[type='checkbox']#consignee").prop("checked",true);
				
				if(data.consolidator == '1')
					$("input[type='checkbox']#consolidator").prop("checked",true);
				
				if(data.buyer == '1')
					$("input[type='checkbox']#buyer").prop("checked",true);
				
				if(data.seller == '1')
					$("input[type='checkbox']#seller").prop("checked",true);
				
				if(data.fumigator == '1')
					$("input[type='checkbox']#fumigator").prop("checked",true);
				
				if(data.container == '1')
					$("input[type='checkbox']#container").prop("checked",true);
				
				if(data.customs == '1')
					$("input[type='checkbox']#customs").prop("checked",true);
				
				if(data.port == '1')
					$("input[type='checkbox']#port").prop("checked",true);
				
				
			},
			complete	: function(){
				$("div#modalCostumer").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusCostumer(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('costumer/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listCostumer();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}
	
	
	
</script>





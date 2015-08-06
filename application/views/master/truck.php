
<div class="row">

	<div class="col-sm-12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST TRUCK
				</h3>
				<button id="btnAddTruck" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="tabelTruck" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Police No</th>
							<th>Truck Type</th>
							<th>Driver</th>
							<th>Admin</th>
							<th>Asistant</th>
							<th>Company</th>
							<th>Renmark</th>
							<th width="120px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>

</div>
		

<div class="modal fade" id="modalTruck">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Company</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formTruck">
		  <input type="hidden" id="hiddentruck" name="hiddentruck" value="">

		  <div class="row">
		  	<div class="col-sm-4">
		  		<div class="form-group">
					<label for="policenumber">Police Number</label>
					<input type="text" class="form-control input-sm" id="policenumber" name="policenumber">
				</div>
		  	</div>
		  	<div class="col-sm-4">
		  		<div class="form-group">
					<label for="trucktype">Truck Type</label>
					<select style="width:100%" id="trucktype" name="trucktype"></select>
				</div>
		  	</div>
		  	<div class="col-sm-4">
		  		<div class="form-group">
					<label for="company">Company</label>
					<select style="width:100%" id="company" name="company"></select>
				</div>
		  	</div>
		  </div>

		  <div class="row">
		  	<div class="col-sm-4">
		  		<div class="form-group">
					<label for="driver">Driver</label>
					<select style="width:100%" id="driver" name="driver"></select>
				</div>
		  	</div>
		  	<div class="col-sm-4">
		  		<div class="form-group">
					<label for="admin">Admin</label>
					<select style="width:100%" id="admin" name="admin"></select>
				</div>
		  	</div>
		  	<div class="col-sm-4">
		  		<div class="form-group">
					<label for="assistant">Assistant</label>
					<select style="width:100%" id="assistant" name="assistant"></select>
				</div>
		  	</div>
		  </div>
		  
		  <div class="row">
		  	<div class="col-sm-12">
		  		<div class="form-group">
					<label for="remark">Remark</label>
					<input type="text" class="form-control input-sm" id="remark" name="remark">
				</div>
		  	</div>
		  </div>
		   
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formTruck" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	

<script>
	
	$(document).ready(function(){
		listTruck();

		$("button#btnAddTruck").click(function(){
			fillSelectTruckType();
			fillSelectCompany();

			$("div#modalTruck").modal("show");
		});

		$("select#company").change(function(){
			var thisValue = $(this).val();

			fillSelectDriver(thisValue);
			fillSelectAdmin(thisValue);
			fillSelectAssistant(thisValue);
		});

		$('form#formTruck').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				policenumber : { 
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				trucktype : { 
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				company : { 
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				driver : { 
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
				url			: "<?php echo base_url('truckdetail/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listTruck();
					$('input#hiddentruck').val('');
					$('form#formTruck')[0].reset();
					$('form#formTruck').data('bootstrapValidator').resetForm();	
					$('div#modalTruck').modal("hide");
				}
			});
		});

	});

	function fillSelectTruckType(){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('trucktype/getall') ?>",
			success		: function(json){
				$("select#trucktype").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Truck Type -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.truck_id+'">'+row.truck_name+'</option>';
				});

				$("select#trucktype").empty().append(fillOption);	
			},
			error		: function(){
				alert("error");
			},
			complete	: function(){
				$("select#trucktype").select2();
			}
		});	
	}

	function fillSelectCompany(){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('costumer/getby/trucking') ?>",
			success		: function(json){
				$("select#company").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Company -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.costumer_code+'">'+row.costumer_name+'</option>';
				});

				$("select#company").empty().append(fillOption);	
			},
			error		: function(){
				alert("error");
			},
			complete	: function(){
				$("select#company").select2();
			}
		});	
	}

	function fillSelectDriver(company){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('truckdriver/getbylevel/Driver') ?>"+"/"+company,
			success		: function(json){
				$("select#driver").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Driver -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.driver_code+'">'+row.driver_name+'</option>';
				});

				$("select#driver").empty().append(fillOption);	
			},
			error		: function(){
				alert("error");
			},
			complete	: function(){
				$("select#driver").select2();
			}
		});	
	}

	function fillSelectAdmin(company){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('truckdriver/getbylevel/Admin') ?>"+"/"+company,
			success		: function(json){
				$("select#admin").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Admin -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.driver_code+'">'+row.driver_name+'</option>';
				});

				$("select#admin").empty().append(fillOption);	
			},
			error		: function(){
				alert("error");
			},
			complete	: function(){
				$("select#admin").select2();
			}
		});	
	}
	function fillSelectAssistant(company){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('truckdriver/getbylevel/Assistant') ?>"+"/"+company,
			success		: function(json){
				$("select#assistant").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Assistant -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.driver_code+'">'+row.driver_name+'</option>';
				});

				$("select#assistant").empty().append(fillOption);	
			},
			error		: function(){
				alert("error");
			},
			complete	: function(){
				$("select#assistant").select2();
			}
		});	
	}

	function getTruck(handleData){
		return $.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('truckdetail/getall') ?>",
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error");
			}
		});	
	}


	function listTruck(){
		getTruck(function(output){
			var number = 0;
			jqTabel = $('table#tabelTruck').DataTable({
				"bDestroy" : true,
				paging: true,
				searching: false,
				ordering: false,
				data: output,
				columns: [
					{ data: 'detail_truck_id' },
					{ data: 'police_number' },
					{ data: 'truck_name' },
					{ data: 'driver' },
					{ data: 'admin' },
					{ data: 'assistant' },
					{ data: 'costumer_name' },
					{ data: 'remark' },
					{ data: null }
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
						"targets": [6], 
						"render": function ( data, type, row, meta ) {
							var isi = data + " (" + row.company + ")";
							return isi;
						}
					},	
					{ 
						"targets": [8], 
						"render": function ( data, type, row, meta ) {
							var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editTruck(\''+row.detail_truck_id+'\')" ><i class="fa fa-edit"></i></a> ';
							var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusTruck(\''+row.detail_truck_id+'\')" ><i class="fa fa-times"></i></a>';
							return edit + del;
						}
					}
				]
			});
			
		});
	}

	function editTruck(ID){
		fillSelectTruckType();
		fillSelectCompany();

		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('truckdetail/getrow') ?>"+"/"+ID,
			success		: function(data){
				$("input#hiddentruck").val(data.detail_truck_id);
				$("input#policenumber").val(data.police_number);
				$("select#trucktype").select2("val", data.truck_type); 
				$("select#company").select2("val", data.company);
				fillSelectDriver(data.company); fillSelectAdmin(data.company); fillSelectAssistant(data.company);
				$("select#driver").select2("val", data.driver);
				$("select#admin").select2("val", data.admin);
				$("select#assistant").select2("val", data.assistant);
				$("input#remark").val(data.remark);
			},
			complete	: function(){
				$("div#modalTruck").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusTruck(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('truckdetail/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listTruck();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}

	
	
</script>





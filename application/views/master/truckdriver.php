
<div class="row">

	<div class="col-sm-12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST TRUCKING DRIVER
				</h3>
				<button id="btnAddDriver" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="tabelDriver" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Code</th>
							<th>Driver Name</th>
							<th>Phone / Mobile</th>
							<th>Level</th>
							<th>Company</th>
							<th width="120px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>

</div>
		

<div class="modal fade" id="modalDriver">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Trucking Driver</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formDriver">
		  <input type="hidden" id="hiddendriver" name="hiddendriver" value="">
		  <div class="form-group">
			<label for="drivercode">Driver Code</label>
			<input type="text" class="form-control" id="drivercode" name="drivercode">
		  </div>
		  <div class="form-group">
			<label for="drivername">Driver Name</label>
			<input type="text" class="form-control" id="drivername" name="drivername">
		  </div>
		   <div class="form-group">
			<label for="driverphone">Phone / Mobile</label>
			<input type="text" class="form-control" id="driverphone" name="driverphone">
		  </div>
		  
		  <div class="form-group">
			<label for="driverlevel">Level</label>
			<select class="form-control" id="driverlevel" name="driverlevel">
				<option value="">- Select Level -</option>
				<option value="Admin">Admin</option>
				<option value="Driver">Driver</option>
				<option value="Assistant">Assistant</option>
			</select>
		  </div>
		  
		  <div class="form-group">
			<label for="company">Company</label>
			<select id="company" name="company" style="width:100%">
				<option value="">- Select Company -</option>
			</select>
		  </div>
		  
		
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formDriver" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	

<script>

	$(document).ready(function(){
		
		listDriver();
		
		$("button#btnAddDriver").click(function(){
			fillSelectCompany();
			$('div#modalDriver').modal("show");
		});
		
		$('form#formDriver').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				drivercode : { 
					validators : {
						trigger : 'blur',
						notEmpty : {
							message : 'Required - you have to fill this field'
						},
						stringLength: {
							message: 'Fill of this field must be less than 3 characters',
							max: function (value, validator, $field) {
								return 3 - (value.match(/\r/g) || []).length;
							}
						}
					}
				},
				drivername : { 
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				driverphone : { 
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				driverlevel : { 
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
				url			: "<?php echo base_url('truckdriver/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listDriver();
					$('input#hiddendriver').val('');
					$('form#formDriver')[0].reset();
					$('form#formDriver').data('bootstrapValidator').resetForm();	
					$('div#modalDriver').modal("hide");
				}
			});
		});
		
	});

	function fillSelectCompany(){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("costumer/getby/trucking") ?>",
			success		: function(json){
				$("select#company").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Company -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.costumer_code+'">'+row.costumer_name+'</option>';
				});

				$("select#company").empty().append(fillOption);
			},
			complete	: function(){
				$("select#company").select2();
			}
		});	
	}
	
	
	function listDriver(){
		
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('truckdriver/getall') ?>",
			success		: function(json){
				var number = 0;
				jqTabel = $('table#tabelDriver').DataTable({
					"bDestroy" : true,
					paging: true,
					searching: false,
					ordering: false,
					data: json,
					columns: [
						{ data: 'driver_code' },
						{ data: 'driver_code' },
						{ data: 'driver_name' },
						{ data: 'driver_mobile' },
						{ data: 'driver_level' },
						{ data: 'company' },
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
								var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editDriver(\''+row.driver_code+'\')" ><i class="fa fa-edit"></i></a> ';
								var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusDriver(\''+row.driver_code+'\')" ><i class="fa fa-times"></i></a>';
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
	
	
	function editDriver(ID){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('truckdriver/getrow') ?>"+"/"+ID,
			success		: function(data){
				$("input#hiddendriver").val(data.driver_code);
				$("input#drivercode").val(data.driver_code);
				$("input#drivername").val(data.driver_name);
				$("input#driverphone").val(data.driver_mobile);
				$("select#driverlevel").val(data.driver_level);
				$("select#company").val(data.company);
			},
			complete	: function(){
				$("div#modalDriver").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusDriver(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('truckdriver/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listDriver();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}
	
	
</script>





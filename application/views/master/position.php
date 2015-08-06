
<div class="row">

	<div class="col-sm-4">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST POSITON
				</h3>
				<button id="btnAddPosition" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="tabelPosition" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Code</th>
							<th>Sales</th>
							<th width="100px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>
	
	<div class="col-sm-4">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST DIVISION
				</h3>
				<button id="btnAddDivision" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="tabelDivision" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Division Name</th>
							<th width="100px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>
	
	<div class="col-sm-4">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST DEPARTMENT
				</h3>
				<button id="btnAddDepartment" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="tabelDepartment" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Department Name</th>
							<th width="100px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>

</div>
		

<div class="modal fade" id="modalPosition">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Position</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formPosition">
		  <input type="hidden" id="hiddenposition" name="hiddenposition" value="">
		  <div class="form-group">
			<label for="code">Code</label>
			<input type="text" class="form-control" id="code" name="code">
		  </div>
		  <div class="form-group">
			<label for="sales">Sales</label>
			<input type="text" class="form-control" id="sales" name="sales">
		  </div>
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formPosition" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="modalDivision">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Division</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formDivision">
		  <input type="hidden" id="hiddendivision" name="hiddendivision" value="">
		  <div class="form-group">
			<label for="selectPositionForDivision">Position</label>
			<select class="form-control selectPosition" id="selectPositionForDivision" name="selectPositionForDivision">
			</select>
		  </div>
		  <div class="form-group">
			<label for="divisionname">Division Name</label>
			<input type="text" class="form-control" id="divisionname" name="divisionname">
		  </div>
		  
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formDivision" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="modalDepartment">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Department</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formDepartment">
		  <input type="hidden" id="hiddendepartment" name="hiddendepartment" value="">
		  <div class="form-group">
			<label for="selectPositionForDepartment">Position</label>
			<select class="form-control selectPosition" id="selectPositionForDepartment" name="selectPositionForDepartment">
			</select>
		  </div>
		  <div class="form-group">
			<label for="sales">Division</label>
			<select class="form-control" id="selectDivision" name="selectDivision">
			</select>
		  </div>
		  <div class="form-group">
			<label for="departmentname">Department Name</label>
			<input type="text" class="form-control" id="departmentname" name="departmentname">
		  </div>
		  
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formDepartment" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	

<script>

	$(document).ready(function(){
		
		listPosition();
		listDivision();
		listDepartment();
		
		$("button#btnAddPosition").click(function(){
			$('div#modalPosition').modal("show");
		});
		
		$("button#btnAddDivision").click(function(){
			fillSelectPosition();
			$('div#modalDivision').modal("show");
		});
		
		$("button#btnAddDepartment").click(function(){
			fillSelectPosition();
			$('div#modalDepartment').modal("show");
		});
		
		$("select#selectPositionForDepartment").change(function(){
			var position = $(this).val();
			fillSelectDivision(position);
		});
		
		$('form#formPosition').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				code : {
					trigger : 'blur', 
					validators : {
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
				sales : {
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
				url			: "<?php echo base_url('position/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listPosition();
					$('input#hiddenposition').val('');
					$('form#formPosition')[0].reset();
					$('form#formPosition').data('bootstrapValidator').resetForm();	
					$('div#modalPosition').modal("hide");
				}
			});
		});
		
		$('form#formDivision').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				selectPositionForDivision : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				divisionname : {
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
				url			: "<?php echo base_url('division/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listDivision();
					$('input#hiddendivision').val('');
					$('form#formDivision')[0].reset();
					$('form#formDivision').data('bootstrapValidator').resetForm();	
					$('div#modalDivision').modal("hide");
				}
			});
		});
		
		$('form#formDepartment').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				selectPositionForDepartment : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				selectDivision : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				departmentname : {
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
				url			: "<?php echo base_url('department/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listDepartment();
					$('input#hiddendepartment').val('');
					$('form#formDepartment')[0].reset();
					$('form#formDepartment').data('bootstrapValidator').resetForm();	
					$('div#modalDepartment').modal("hide");
				}
			});
		});
		
	});
	
	
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
	
	function listPosition(){
		getPosition(function(output){
			var number = 0;
			jqTabel = $('table#tabelPosition').DataTable({
				"bDestroy" : true,
				paging: true,
				searching: false,
				ordering: false,
				data: output,
				columns: [
					{ data: 'position_code' },
					{ data: 'position_code' },
					{ data: 'position_sales' },
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
						"targets": [3], 
						"render": function ( data, type, row, meta ) {
							var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editPosition(\''+row.position_code+'\')" ><i class="fa fa-edit"></i></a> ';
							var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusPosition(\''+row.position_code+'\')" ><i class="fa fa-times"></i></a>';
							return edit + del;
						}
					}
				]
			});
		});
		
	}
	
	function editPosition(ID){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('position/getrow') ?>"+"/"+ID,
			success		: function(data){
				$("input#hiddenposition").val(data.position_code);
				$("input#code").val(data.position_code);
				$("input#sales").val(data.position_sales);
			},
			complete	: function(){
				$("div#modalPosition").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusPosition(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('position/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listPositon();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}
	
	function getDivision(handleData){
		return $.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('division/getall') ?>",
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error");
			}
		});	
	}
	
	
	function listDivision(){
		getDivision(function(output){
			var number = 0;
			jqTabel = $('table#tabelDivision').DataTable({
				"bDestroy" : true,
				paging: true,
				searching: false,
				ordering: false,
				data: output,
				columns: [
					{ data: 'division_code' },
					{ data: 'division_name' },
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
						"targets": [1], 
						"render": function ( data, type, row, meta ) {
							var isi = data + " ("+row.position_code+")";
							return isi;
						}
					},	
					{ 
						"targets": [2], 
						"render": function ( data, type, row, meta ) {
							var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editDivision(\''+row.division_code+'\')" ><i class="fa fa-edit"></i></a> ';
							var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusDivision(\''+row.division_code+'\')" ><i class="fa fa-times"></i></a>';
							return edit + del;
						}
					}
				]
			});
		});
			
	}
	
	function editDivision(ID){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('division/getrow') ?>"+"/"+ID,
			success		: function(data){
				fillSelectPosition();
				$("input#hiddendivision").val(data.division_code);
				$("select#selectPositionForDivision").val(data.position_code);
				$("input#divisionname").val(data.division_name);
			},
			complete	: function(){
				$("div#modalDivision").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusDivision(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('division/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listDivision();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}
	
	function getDepartment(handleData){
		return $.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('department/getall') ?>",
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error");
			}
		});	
	}
	
	function listDepartment(){
		getDepartment(function(output){
			var number = 0;
			jqTabel = $('table#tabelDepartment').DataTable({
				"bDestroy" : true,
				paging: true,
				searching: false,
				ordering: false,
				data: output,
				columns: [
					{ data: 'department_code' },
					{ data: 'department_name' },
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
						"targets": [1], 
						"render": function ( data, type, row, meta ) {
							var isi = data + " ("+row.division_name+")";
							return isi;
						}
					},
					{ 
						"targets": [2], 
						"render": function ( data, type, row, meta ) {
							var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editDepartment(\''+row.department_code+'\')" ><i class="fa fa-edit"></i></a> ';
							var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusDepartment(\''+row.department_code+'\')" ><i class="fa fa-times"></i></a>';
							return edit + del;
						}
					}
				]
			});
		});
			
	}
	
	function editDepartment(ID){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('department/getrow') ?>"+"/"+ID,
			success		: function(data){
				fillSelectPosition();
				fillSelectDivision(data.position_code);
				$("input#hiddendepartment").val(data.department_code);
				$("select#selectPositionForDepartment").val(data.position_code);
				$("select#selectDivision").val(data.division_code);
				$("input#departmentname").val(data.department_name);
			},
			complete	: function(){
				$("div#modalDepartment").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusDepartment(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('department/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listDepartment();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}
	
	function fillSelectPosition(){
		getPosition(function(output){
			$("select.selectPosition").empty().append("<option>Loading Data ...</option>");
			
			var fillOption = "<option value=''>- Select Position -</option>";
			
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.position_code+'">'+row.position_sales+' ('+row.position_code+')</option>';
			});
			
			$("select.selectPosition").empty().append(fillOption);		
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
			$("select#selectDivision").empty().append("<option>Loading Data ...</option>");
			
			var fillOption = "<option value=''>- Select Division -</option>";
			
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.division_code+'">'+row.division_name+'</option>';
			});
			
			$("select#selectDivision").empty().append(fillOption);		
		});
	}
	
	
</script>






<div class="row">

	<div class="col-sm-4">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST CONTAINER SIZE
				</h3>
				<button id="btnAddContainerSize" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="tabelContainerSize" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Container Size</th>
							<th width="120px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>
	
	<div class="col-sm-8">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST CONTAINER TYPE
				</h3>
				<button id="btnAddContainerType" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="tabelContainerType" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Code</th>
							<th>Container Type</th>
							<th width="120px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>
	

</div>
		

<div class="modal fade" id="modalContainerSize">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Container Size</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formContainerSize">
		  <input type="hidden" id="hiddencontainersize" name="hiddencontainersize" value="">
		  <div class="form-group">
			<label for="containersize">Container Size</label>
			<input type="text" class="form-control" id="containersize" name="containersize">
		  </div>
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formContainerSize" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="modalContainerType">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Container Type</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formContainerType">
		  <input type="hidden" id="hiddencontainertype" name="hiddencontainertype" value="">
		  <div class="form-group">
			<label for="containertypecode">Container Type Code</label>
			<input type="text" class="form-control" id="containertypecode" name="containertypecode">
		  </div>
		  <div class="form-group">
			<label for="containertype">Container Type</label>
			<input type="text" class="form-control" id="containertype" name="containertype">
		  </div>
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formContainerType" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	

<script>

	$(document).ready(function(){
		
		listContainerSize();
		listContainerType();
		
		$("button#btnAddContainerSize").click(function(){
			$('div#modalContainerSize').modal("show");
		});
		
		$("button#btnAddContainerType").click(function(){
			$('div#modalContainerType').modal("show");
		});
		
		
		$('form#formContainerSize').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				containersize : { 
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
				url			: "<?php echo base_url('containersize/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listContainerSize();
					$('input#hiddencontainersize').val('');
					$('form#formContainerSize')[0].reset();
					$('form#formContainerSize').data('bootstrapValidator').resetForm();	
					$('div#modalContainerSize').modal("hide");
				}
			});
		});
		
		$('form#formContainerType').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				containertypecode : { 
					validators : {
						trigger : 'blur', 
						notEmpty : {
							message : 'Required - you have to fill this field'
						},
						stringLength: {
							message: 'Fill of this field must be less than 2 characters',
							max: function (value, validator, $field) {
								return 2 - (value.match(/\r/g) || []).length;
							}
						}
					}
				},
				containertype : { 
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
				url			: "<?php echo base_url('containertype/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listContainerType();
					$('input#hiddencontainertype').val('');
					$('form#formContainerType')[0].reset();
					$('form#formContainerType').data('bootstrapValidator').resetForm();	
					$('div#modalContainerType').modal("hide");
				}
			});
		});
		
	});
	
	
	function listContainerSize(){
		
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('containersize/getall') ?>",
			success		: function(json){
				var number = 0;
				jqTabel = $('table#tabelContainerSize').DataTable({
					"bDestroy" : true,
					paging: true,
					searching: false,
					ordering: false,
					data: json,
					columns: [
						{ data: 'container_size_code' },
						{ data: 'container_size' },
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
							"targets": [2], 
							"render": function ( data, type, row, meta ) {
								var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editContainerSize(\''+row.container_size_code+'\')" ><i class="fa fa-edit"></i></a> ';
								var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusContainerSize(\''+row.container_size_code+'\')" ><i class="fa fa-times"></i></a>';
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
	
	function editContainerSize(ID){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('containersize/getrow') ?>"+"/"+ID,
			success		: function(data){
				$("input#hiddencontainersize").val(data.container_size_code);
				$("input#containersize").val(data.container_size);
			},
			complete	: function(){
				$("div#modalContainerSize").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusContainerSize(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('containersize/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listContainerSize();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}
	
	function listContainerType(){
		
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('containertype/getall') ?>",
			success		: function(json){
				var number = 0;
				jqTabel = $('table#tabelContainerType').DataTable({
					"bDestroy" : true,
					paging: true,
					searching: false,
					ordering: false,
					data: json,
					columns: [
						{ data: 'container_type_code' },
						{ data: 'container_type_code' },
						{ data: 'container_type' },
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
								var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editContainerType(\''+row.container_type_code+'\')" ><i class="fa fa-edit"></i></a> ';
								var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusContainerType(\''+row.container_type_code+'\')" ><i class="fa fa-times"></i></a>';
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
	
	
	function editContainerType(ID){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('containertype/getrow') ?>"+"/"+ID,
			success		: function(data){
				$("input#hiddencontainertype").val(data.container_type_code);
				$("input#containertypecode").val(data.container_type_code);
				$("input#containertype").val(data.container_type);
			},
			complete	: function(){
				$("div#modalContainerType").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusContainerType(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('containertype/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listContainerType();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}
	
	
	
	
	
</script>





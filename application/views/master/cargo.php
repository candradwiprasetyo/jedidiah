
<div class="row">
	<div class="col-sm-12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST CARGO TYPE
				</h3>
				<button id="btnAddCargo" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="cargotable" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Code</th>
							<th>Cargo Type</th>
							<th width="60%">Description</th>
							<th width="90px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>

</div>


<div class="modal fade" id="modalCargo">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Cargo</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formCargo">
		  <input type="hidden" id="hiddencargo" name="hiddencargo" value="">
		  <div class="form-group">
			<label for="cargocode">Cargo Code</label>
			<input type="text" class="form-control" id="cargocode" name="cargocode">
		  </div>
		  <div class="form-group">
			<label for="cargotype">Cargo Type</label>
			<input type="text" class="form-control" id="cargotype" name="cargotype">
		  </div>
		  <div class="form-group">
			<label for="description">Description</label>
			<textarea class="form-control" id="description" name="description"></textarea>
		  </div>
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formCargo" type="submit" class="btn btn-primary" >Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
		
	

<script>

	$(document).ready(function(){
		
		listCargo();
		
		$("button#btnAddCargo").click(function(){
			$('div#modalCargo').modal("show");
		});
		
		$('form#formCargo').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				cargocode : {
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
				cargotype : {
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
				url			: "<?php echo base_url('cargo/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listCargo();
					$('input#hiddencargo').val('');
					$('form#formCargo')[0].reset();
					$('form#formCargo').data('bootstrapValidator').resetForm();	
					$('div#modalCargo').modal("hide");
				}
			});
		});
		
	});
	
	
	function getCargo(handleData){
		return $.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('cargo/getall') ?>",
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error");
			}
		});	
	}
	
	function listCargo(){
		
		getCargo(function(output){
			var number = 0;
			jqTabel = $('table#cargotable').DataTable({
				"bDestroy" : true,
				paging: true,
				searching: false,
				ordering: false,
				data: output,
				columns: [
					{ data: 'cargo_code' },
					{ data: 'cargo_code' },
					{ data: 'cargo_type' },
					{ data: 'cargo_description' },
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
						"targets": [4], 
						"render": function ( data, type, row, meta ) {
							var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editCargo(\''+row.cargo_code+'\')" ><i class="fa fa-edit"></i></a> ';
							var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusCargo(\''+row.cargo_code+'\')" ><i class="fa fa-times"></i></a>';
							return edit + del;
						}
					}
				]
			});
			
		});
	}
	
	function editCargo(ID){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('cargo/getrow') ?>"+"/"+ID,
			success		: function(data){
				$("input#hiddencargo").val(data.cargo_code);
				$("input#cargocode").val(data.cargo_code);
				$("input#cargotype").val(data.cargo_type);
				$("textarea#description").val(data.cargo_description);
			},
			complete	: function(){
				$("div#modalCargo").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusCargo(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('cargo/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listCargo();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}
	
	
		
</script>






<div class="row">

	<div class="col-sm-12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST MOVEMENT SERVICE
				</h3>
				<button id="btnAddMovement" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="tabelMovement" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Movement Code</th>
							<th>Movement Description</th>
							<th width="120px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>

</div>
		

<div class="modal fade" id="modalMovement">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Movement Service</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formMovement">
		  <input type="hidden" id="hiddenmovement" name="hiddenmovement" value="">
		  <div class="form-group">
			<label for="movementcode">Movement Code</label>
			<input type="text" class="form-control" id="movementcode" name="movementcode">
		  </div>
		  <div class="form-group">
			<label for="description">Description</label>
			<textarea class="form-control" id="description" name="description"></textarea>
		  </div>
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formMovement" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	

<script>

	$(document).ready(function(){
		
		listMovement();
		
		$("button#btnAddMovement").click(function(){
			$('div#modalMovement').modal("show");
		});
		
		$('form#formMovement').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				chargecode : {
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
				chargename : {
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
				url			: "<?php echo base_url('movement/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listMovement();
					$('input#hiddenmovement').val('');
					$('form#formMovement')[0].reset();
					$('form#formMovement').data('bootstrapValidator').resetForm();	
					$('div#modalMovement').modal("hide");
				}
			});
		});
		
	});
	
	
	function listMovement(){
		
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('movement/getall') ?>",
			success		: function(json){
				var number = 0;
				jqTabel = $('table#tabelMovement').DataTable({
					"bDestroy" : true,
					paging: true,
					searching: false,
					ordering: false,
					data: json,
					columns: [
						{ data: 'movement_id' },
						{ data: 'movement_code' },
						{ data: 'movement_description' },
						{ data: 'null' }
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
								var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editMovement(\''+row.movement_id+'\')" ><i class="fa fa-edit"></i></a> ';
								var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusMovement(\''+row.movement_id+'\')" ><i class="fa fa-times"></i></a>';
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
	
	function editMovement(ID){

		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('movement/getrow') ?>"+"/"+ID,
			success		: function(data){
				$("input#hiddenmovement").val(data.movement_id);
				$("input#movementcode").val(data.movement_code);
				$("textarea#description").val(data.movement_description);
			},
			complete	: function(){
				$("div#modalMovement").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusMovement(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('movement/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listMovement();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}
	
	
</script>





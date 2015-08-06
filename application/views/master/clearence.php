
<div class="row">

	<div class="col-sm-12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST CLEARENCE TYPE
				</h3>
				<button id="btnAddClearence" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="tabelClearence" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Code</th>
							<th>Clearence Type</th>
							<th width="120px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>

</div>
		

<div class="modal fade" id="modalClearence">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Clearence Type</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formClearence">
		  <input type="hidden" id="hiddenclearence" name="hiddenclearence" value="">
		  <div class="form-group">
			<label for="clearencecode">Code</label>
			<input type="text" class="form-control" id="clearencecode" name="clearencecode">
		  </div>
		  <div class="form-group">
			<label for="clearencetype">Clearence Type</label>
			<input type="text" class="form-control" id="clearencetype" name="clearencetype">
		  </div>
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formClearence" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	

<script>

	$(document).ready(function(){
		
		listClearence();
		
		$("button#btnAddClearence").click(function(){
			$('div#modalClearence').modal("show");
		});
		
		$('form#formClearence').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				clearencecode : {
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
				clearencetype : {
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
				url			: "<?php echo base_url('clearence/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listClearence();
					$('input#hiddenclearence').val('');
					$('form#formClearence')[0].reset();
					$('form#formClearence').data('bootstrapValidator').resetForm();	
					$('div#modalClearence').modal("hide");
				}
			});
		});
		
	});
	
	
	function listClearence(){
		
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('clearence/getall') ?>",
			success		: function(json){
				var number = 0;
				jqTabel = $('table#tabelClearence').DataTable({
					"bDestroy" : true,
					paging: true,
					searching: false,
					ordering: false,
					data: json,
					columns: [
						{ data: 'clearence_code' },
						{ data: 'clearence_code' },
						{ data: 'clearence_type' },
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
								var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editClearence(\''+row.clearence_code+'\')" ><i class="fa fa-edit"></i></a> ';
								var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusClearence(\''+row.clearence_code+'\')" ><i class="fa fa-times"></i></a>';
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
	
	function editClearence(ID){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('clearence/getrow') ?>"+"/"+ID,
			success		: function(data){
				$("input#hiddenclearence").val(data.clearence_code);
				$("input#clearencecode").val(data.clearence_code);
				$("input#clearencetype").val(data.clearence_type);
			},
			complete	: function(){
				$("div#modalClearence").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusClearence(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('clearence/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listClearence();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}
	
	
</script>






<div class="row">
	<div class="col-sm-12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST INCOTERM
				</h3>
				<button id="btnAddIncoterm" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="incotermtable" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Code</th>
							<th>Term Name</th>
							<th width="60%">Description</th>
							<th width="90px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>

</div>
		

<div class="modal fade" id="modalIncoterm">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Incoterm</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formIncoterm">
		  <input type="hidden" id="hiddenincoterm" name="hiddenincoterm" value="">
		  <div class="form-group">
			<label for="incotermcode">Incoterm Code</label>
			<input type="text" class="form-control" id="incotermcode" name="incotermcode">
		  </div>
		  <div class="form-group">
			<label for="incotermname">Incoterm Name</label>
			<input type="text" class="form-control" id="incotermname" name="incotermname">
		  </div>
		  <div class="form-group">
			<label for="description">Description</label>
			<textarea class="form-control" id="description" name="description"></textarea>
		  </div>
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formIncoterm" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	

<script>

	$(document).ready(function(){
		
		listIncoterm();
		
		$("button#btnAddIncoterm").click(function(){
			$('div#modalIncoterm').modal("show");
		});
		
		$('form#formIncoterm').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				incotermcode : {
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
				incotermname : {
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
				url			: "<?php echo base_url('incoterm/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listIncoterm();
					$('input#hiddenincoterm').val('');
					$('form#formIncoterm')[0].reset();
					$('form#formIncoterm').data('bootstrapValidator').resetForm();	
					$('div#modalIncoterm').modal("hide");
				}
			});
		});
		
	});
	
	function getIncoterm(handleData){
		return $.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('incoterm/getall') ?>",
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error");
			}
		});	
	}
	
	function listIncoterm(){
		
		getIncoterm(function(output){
			var number = 0;
			jqTabel = $('table#incotermtable').DataTable({
				"bDestroy" : true,
				paging: true,
				searching: false,
				ordering: false,
				data: output,
				columns: [
					{ data: 'term_code' },
					{ data: 'term_code' },
					{ data: 'term_name' },
					{ data: 'term_description' },
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
							var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editTerm(\''+row.term_code+'\')" ><i class="fa fa-edit"></i></a> ';
							var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusTerm(\''+row.term_code+'\')" ><i class="fa fa-times"></i></a>';
							return edit + del;
						}
					}
				]
			});
			
		});
	}
	
	function editTerm(ID){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('incoterm/getrow') ?>"+"/"+ID,
			success		: function(data){
				$("input#hiddenincoterm").val(data.term_code);
				$("input#incotermcode").val(data.term_code);
				$("input#incotermname").val(data.term_name);
				$("textarea#description").val(data.term_description);
			},
			complete	: function(){
				$("div#modalIncoterm").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusTerm(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('incoterm/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listIncoterm();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}
	
	
</script>





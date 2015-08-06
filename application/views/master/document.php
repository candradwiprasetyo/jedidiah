
<div class="row">

	<div class="col-sm-12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST DOCUMENT
				</h3>
				<button id="btnAddDocument" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="tabelDocument" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Code</th>
							<th>Docs Category</th>
							<th>Docs Name</th>
							<th width="40%">Description</th>
							<th width="120px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>

</div>
		

<div class="modal fade" id="modalDocument">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Document</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formDocument">
		  <input type="hidden" id="hiddendocument" name="hiddendocument" value="">
		  <div class="form-group">
			<label for="documentcode">Code</label>
			<input type="text" class="form-control" id="documentcode" name="documentcode">
		  </div>
		   <div class="form-group">
			<label for="category">Docs Category</label>
			<select class="form-control" id="category" name="category">
				<option value="Company Legalities">Company Legalities</option>
				<option value="Shipping Document">Shipping Document</option>
			</select>
		  </div>
		  <div class="form-group">
			<label for="name">Docs Name</label>
			<input type="text" class="form-control" id="name" name="name">
		  </div>
		  <div class="form-group">
			<label for="description">Description</label>
			<input type="text" class="form-control" id="description" name="description">
		  </div>
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formDocument" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	

<script>

	$(document).ready(function(){
		
		listDocument();
		
		$("button#btnAddDocument").click(function(){
			$('div#modalDocument').modal("show");
		});
		
		$('form#formDocument').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				documentcode : {
					trigger : 'blur', 
					validators : {
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
				category : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
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
				url			: "<?php echo base_url('document/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listDocument();
					$('input#hiddendocument').val('');
					$('form#formDocument')[0].reset();
					$('form#formDocument').data('bootstrapValidator').resetForm();	
					$('div#modalDocument').modal("hide");
				}
			});
		});
		
	});
	
	
	function listDocument(){
		
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('document/getall') ?>",
			success		: function(json){
				var number = 0;
				jqTabel = $('table#tabelDocument').DataTable({
					"bDestroy" : true,
					paging: true,
					searching: false,
					ordering: false,
					data: json,
					columns: [
						{ data: 'doc_code' },
						{ data: 'doc_code' },
						{ data: 'doc_category' },
						{ data: 'doc_name' },
						{ data: 'doc_description' },
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
							"targets": [5], 
							"render": function ( data, type, row, meta ) {
								var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editDocument(\''+row.doc_code+'\')" ><i class="fa fa-edit"></i></a> ';
								var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusDocument(\''+row.doc_code+'\')" ><i class="fa fa-times"></i></a>';
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
	
	
	function editDocument(ID){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('document/getrow') ?>"+"/"+ID,
			success		: function(data){
				$("input#hiddendocument").val(data.doc_code);
				$("input#documentcode").val(data.doc_code);
				$("select#category").val(data.doc_category);
				$("input#name").val(data.doc_name);
				$("input#description").val(data.doc_description);
			},
			complete	: function(){
				$("div#modalDocument").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusDocument(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('document/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listDocument();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}
	
	
</script>





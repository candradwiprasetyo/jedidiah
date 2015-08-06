
<div class="row">

	<div class="col-sm-12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST SECTION OF COMMODITY
				</h3>
				<button id="btnAddSectionCommodity" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="tabelSectionCommodity" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Code</th>
							<th>Section Name</th>
							<th width="40%">Description</th>
							<th width="120px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>

</div>
		

<div class="modal fade" id="modalSectionCommodity">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Section of Commodity</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formSectionCommodity">
		  <input type="hidden" id="hiddensection" name="hiddensection" value="">
		  <div class="form-group">
			<label for="sectioncode">Code</label>
			<input type="text" class="form-control" id="sectioncode" name="sectioncode">
		  </div>
		   <div class="form-group">
			<label for="sectionname">Section Name</label>
			<input type="text" class="form-control" id="sectionname" name="sectionname">
		  </div>
		  <div class="form-group">
			<label for="description">Description</label>
			<input type="text" class="form-control" id="description" name="description">
		  </div>
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formSectionCommodity" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	

<script>

	$(document).ready(function(){
		
		listSectionCommodity();
		
		$("button#btnAddSectionCommodity").click(function(){
			$('div#modalSectionCommodity').modal("show");
		});
		
		$('form#formSectionCommodity').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				sectioncode : {
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
				sectionname : {
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
				url			: "<?php echo base_url('sectioncommodity/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listSectionCommodity();
					$('input#hiddensection').val('');
					$('form#formSectionCommodity')[0].reset();
					$('form#formSectionCommodity').data('bootstrapValidator').resetForm();	
					$('div#modalSectionCommodity').modal("hide");
				}
			});
		});
		
	});
	
	
	function listSectionCommodity(){
		
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('sectioncommodity/getall') ?>",
			success		: function(json){
				var number = 0;
				jqTabel = $('table#tabelSectionCommodity').DataTable({
					"bDestroy" : true,
					paging: true,
					searching: false,
					ordering: false,
					data: json,
					columns: [
						{ data: 'section_code' },
						{ data: 'section_code' },
						{ data: 'section_name' },
						{ data: 'section_description' },
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
								var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editSection(\''+row.section_code+'\')" ><i class="fa fa-edit"></i></a> ';
								var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusSection(\''+row.section_code+'\')" ><i class="fa fa-times"></i></a>';
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
	
	function editSection(ID){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('sectioncommodity/getrow') ?>"+"/"+ID,
			success		: function(data){
				$("input#hiddensection").val(data.section_code);
				$("input#sectioncode").val(data.section_code);
				$("input#sectionname").val(data.section_name);
				$("input#description").val(data.section_description);
			},
			complete	: function(){
				$("div#modalSectionCommodity").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusSection(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('sectioncommodity/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listSectionCommodity();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}
	
	
</script>





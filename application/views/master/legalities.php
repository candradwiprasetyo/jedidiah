
<div class="row">

	<div class="col-sm-12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST COMPANY LEGALITIES
				</h3>
				<button id="btnAddLegalities" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="tabelLegalities" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Legalities Name</th>
							<th>Description</th>
							<th width="120px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>

</div>
		

<div class="modal fade" id="modalLegalities">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Company Legalities</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formLegalities">
		  <input type="hidden" id="hiddenlegal" name="hiddenlegal" value="">
		  <div class="form-group">
			<label for="legalname">Legalities Name</label>
			<input type="text" class="form-control" id="legalname" name="legalname">
		  </div>
		  <div class="form-group">
			<label for="legaldescription">Legalities Description</label>
			<input type="text" class="form-control" id="legaldescription" name="legaldescription">
		  </div>
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formLegalities" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	

<script>

$(document).ready(function(){
	
	listLegalities();
	
	$("button#btnAddLegalities").click(function(){
		$('div#modalLegalities').modal("show");
	});
	
	$('form#formLegalities').bootstrapValidator({
		feedbackIcons : {
			valid : 'glyphicon glyphicon-ok',
			invalid : 'glyphicon glyphicon-remove',
			validating : 'glyphicon glyphicon-refresh'
		},
		fields : {
			legalname : {
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
			url			: "<?php echo base_url('legalities/commit') ?>",
			data		: dataSerialize,
			error		: function(){
				alert("AJAX Error");
			},
			success		: function(json) {
				alert(json);
			},
			complete	: function(){
				listLegalities();
				$('input#hiddenlegal').val('');
				$('form#formLegalities')[0].reset();
				$('form#formLegalities').data('bootstrapValidator').resetForm();	
				$('div#modalLegalities').modal("hide");
			}
		});
	});
	
});


function listLegalities(){
	
	$.ajax({
		type		: "POST",
		dataType	: 'json',
		url			: "<?php echo base_url('legalities/getall') ?>",
		success		: function(json){
			var number = 0;
			jqTabel = $('table#tabelLegalities').DataTable({
				"bDestroy" : true,
				paging: true,
				searching: false,
				ordering: false,
				data: json,
				columns: [
					{ data: 'legalities_code' },
					{ data: 'legalities_name' },
					{ data: 'legalities_description' },
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
							var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editLegalities(\''+row.legalities_code+'\')" ><i class="fa fa-edit"></i></a> ';
							var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusLegalities(\''+row.legalities_code+'\')" ><i class="fa fa-times"></i></a>';
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
	
function editLegalities(ID){
	$.ajax({
		type		: "POST",
		dataType	: 'json',
		url			: "<?php echo base_url('legalities/getrow') ?>"+"/"+ID,
		success		: function(data){
			$("input#hiddenlegal").val(data.legalities_code);
			$("input#legalname").val(data.legalities_name);
			$("input#legaldescription").val(data.legalities_description);
		},
		complete	: function(){
			$("div#modalLegalities").modal("show");
		},
		error		: function(){
			toastr["error"]("Selecting Data Failed. AJAX Error !");
		}
	});
}

function hapusLegalities(ID){
	$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
		if (button == 'hapus'){
			$.ajax({
				type		: "POST",
				dataType	: 'json',
				url			: "<?php echo base_url('legalities/delete') ?>"+"/"+ID,
				success		: function(result){
					if(result){
						toastr["info"]("Data Deleted");
					}
					else{
						toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
					}
				},
				complete	: function(){
					listLegalities();
				},
				error		: function(){
					toastr["error"]("Deleting Data Failed. AJAX Error !");
				}
			});
		}
	});
}

	
</script>





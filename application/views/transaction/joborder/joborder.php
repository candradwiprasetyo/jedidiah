
<div class="row">

	<div class="col-sm-12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST JOB ORDER
				</h3>
				<button id="btnAddJoborder" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="tabelJoborder" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Date</th>
							<th>Code</th>
							<th>Costumer</th>
							<th>Status</th>
							<th width="110px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>

</div>
		

<div class="modal fade" id="modalJoborder">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Job Order</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formJoborder">
		 
		  <div class="form-group">
			<label for="date">Date</label>
			<input type="text" class="form-control datepicker" id="date" name="date">
		  </div>
		  <div class="form-group">
			<label for="costumer">Costumer</label>
			<select id="costumer" name="costumer" style="width:100%"></select>
		  </div>
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formJoborder" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	

<script>

$(document).ready(function(){
	$('.datepicker').datepicker({
		format: 'yyyy-mm-dd',
		todayHighlight: true,
		autoclose: true
	});
	
	listJoborder();
	
	$("button#btnAddJoborder").click(function(){
		fillSelectCostumer();
		$('div#modalJoborder').modal("show");
	});
	
	$('form#formJoborder').bootstrapValidator({
		feedbackIcons : {
			valid : 'glyphicon glyphicon-ok',
			invalid : 'glyphicon glyphicon-remove',
			validating : 'glyphicon glyphicon-refresh'
		},
		fields : {
			date : {
				validators : {
					notEmpty : {
						message : 'Required - you have to fill this field'
					}
				}
			},
			costumer : {
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
			url			: "<?php echo base_url('joborder/commit') ?>",
			data		: dataSerialize,
			error		: function(){
				alert("AJAX Error");
			},
			success		: function(json) {
				window.location.href = "<?php echo base_url('joborder/service/service') ?>" + "/" + json;
			},
			complete	: function(){
				/*listJoborder();
				$('input#hiddenjoborder').val('');
				$('form#formJoborder')[0].reset();
				$('form#formJoborder').data('bootstrapValidator').resetForm();	
				$('div#modalJoborder').modal("hide");*/
			}
		});
	});
	
});


function listJoborder(){
	$.ajax({
		type		: "POST",
		dataType	: 'json',
		url			: "<?php echo base_url('joborder') ?>",
		success		: function(json){
			var number = 0;
			jqTabel = $('table#tabelJoborder').DataTable({
				"bDestroy" : true,
				paging: true,
				searching: false,
				ordering: false,
				data: json,
				columns: [
					{ data: 'job_order_id' },
					{ data: 'booking_date' },
					{ data: 'booking_no' },
					{ data: 'costumer_code' },
					{ data: 'status' },
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
							var isi = row.costumer_name + " (" +data+")";
							return isi;
						}
					},
					{ 
						"targets": [5], 
						"render": function ( data, type, row, meta ) {
							var edit = '<a class="btn btn-xs" rel="tooltip" title="Fill Form" onclick="return editJoborder(\''+row.job_order_id+'\')" ><i class="fa fa-file-text-o"></i></a> ';
							var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusJoborder(\''+row.job_order_id+'\')" ><i class="fa fa-times"></i></a>';
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

function fillSelectCostumer(){
	$.ajax({
		type		: "POST",
		dataType	: 'json',
		url			: "<?php echo base_url("costumer/getby/as_costumer") ?>",
		success		: function(json){
			$("select#costumer").empty().append("<option>Loading Data ...</option>");
		
			var fillOption = "<option value=''>- Select Costumer -</option>";
			
			$.each(json, function(index, row) {
				fillOption += '<option value="'+row.costumer_code+'">'+row.costumer_name+'</option>';
			});

			$("select#costumer").empty().append(fillOption);
		},
		complete	: function(){
			$("select#costumer").select2();
		}
	});		
}

function editJoborder(ID){
	var url = "<?php echo base_url('joborder/service/service') ?>"+"/"+ID;
	window.location.href = url;
}

function hapusJoborder(ID){
	$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
		if (button == 'hapus'){
			$.ajax({
				type		: "POST",
				dataType	: 'json',
				url			: "<?php echo base_url('joborder/delete') ?>"+"/"+ID,
				success		: function(result){
					if(result){
						toastr["info"]("Data Deleted");
					}
					else{
						toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
					}
				},
				complete	: function(){
					listJoborder();
				},
				error		: function(){
					toastr["error"]("Deleting Data Failed. AJAX Error !");
				}
			});
		}
	});
}

	
</script>





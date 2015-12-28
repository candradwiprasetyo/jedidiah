
<div class="row">

	<div class="col-sm-12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST JOB COSTING
				</h3>
					<a href="<?php echo base_url('trs/jobcosting/form') ?>">
					<button id="btnAddJoborder" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
						ADD
					</button>
					</a>
			</div>
			<div class="box-content nopadding">
				<table id="tabeljobcosting" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>Booking</th>
							<th>Closing Date</th>
							<th>Customer Name</th>
							<th>Transport</th>
							<th>Routing</th>
							<th>Status</th>
							<th width="110px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>

</div>
		


<script>

function get_format_date(str){
	var result = $.datepicker.formatDate("d/m/yy", new Date(str));
	return result;
}

$(document).ready(function(){
	$('.datepicker').datepicker({
		format: 'yyyy-mm-dd',
		todayHighlight: true,
		autoclose: true
	});
	
	listjobcosting();
	

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


function listjobcosting(){
	$.ajax({
		type		: "POST",
		dataType	: 'json',
		url			: "<?php echo base_url('jobcosting/getall') ?>",
		success		: function(json){
			var number = 0;
			jqTabel = $('table#tabeljobcosting').DataTable({
				"bDestroy" : true,
				paging: true,
				searching: false,
				ordering: false,
				data: json,
				columns: [
					
					{ data: 'jc_id' },
					{ data: 'jc_closing_date' },
					{ data: 'costumer_name' },
					{ data: 'jc_transport_type_name' },
					{ data: 'jc_routing' },
					{ data: 'jc_status_name' },
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
							var date = get_format_date(row.jc_closing_date)
							return date;
						}
					},	
					
					
					{ 
						"targets": [6], 
						"render": function ( data, type, row, meta ) {
							var edit = '<a href="<?php echo base_url('trs/jobcosting/form/') ?>'+'/'+row.jc_id+'" class="btn btn-xs" rel="tooltip" title="Fill Form" ><i class="fa fa-file-text-o"></i></a> ';
							var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusjobcosting(\''+row.rate_management_id+'\')" ><i class="fa fa-times"></i></a>';
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



function editJoborder(ID){
	var url = "<?php echo base_url('joborder/service/service') ?>"+"/"+ID;
	window.location.href = url;
}

function hapusjobcosting(ID){
	$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
		if (button == 'hapus'){
			$.ajax({
				type		: "POST",
				dataType	: 'json',
				url			: "<?php echo base_url('trs/jobcosting/delete') ?>"+"/"+ID,
				success		: function(result){
					if(result){
						toastr["info"]("Data Deleted");
					}
					else{
						toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
					}
				},
				complete	: function(){
					listjobcosting();
				},
				error		: function(){
					toastr["error"]("Deleting Data Failed. AJAX Error !");
				}
			});
		}
	});
}

	
</script>






<div class="row">

	<div class="col-sm-12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST RATE MANAGEMENT
				</h3>
					<a href="<?php echo base_url('trs/ratemanagement/form') ?>">
					<button id="btnAddJoborder" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
						ADD
					</button>
					</a>
			</div>
			<div class="box-content nopadding">
				<table id="tabelRatemanagement" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>BR No</th>
							<th>Date</th>
							<th>Vendor Name</th>
							<th>Valid Until</th>
							<th>Marketing</th>
							<th>Deal With</th>
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
	
	listRatemanagement();
	

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


function listRatemanagement(){
	$.ajax({
		type		: "POST",
		dataType	: 'json',
		url			: "<?php echo base_url('ratemanagement/getall') ?>",
		success		: function(json){
			var number = 0;
			jqTabel = $('table#tabelRatemanagement').DataTable({
				"bDestroy" : true,
				paging: true,
				searching: false,
				ordering: false,
				data: json,
				columns: [
					
					{ data: 'rate_management_number' },
					{ data: 'rate_management_date' },
					{ data: 'costumer_name' },
					{ data: 'rate_management_valid_date' },
					{ data: 'rate_management_marketing' },
					{ data: 'rate_management_pic' },
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
							var date = get_format_date(row.rate_management_date)
							return date;
						}
					},	
					{ 
						"targets": [2], 
						"render": function ( data, type, row, meta ) {
							var isi = row.costumer_name;
							return isi;
						}
					},
					{ 
						"targets": [3], 
						"render": function ( data, type, row, meta ) {
							var valid_date = get_format_date(row.rate_management_valid_date)
							return valid_date;
						}
					},	
					{ 
						"targets": [6], 
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





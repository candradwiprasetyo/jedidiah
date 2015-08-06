
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
							<th>No</th>
							<th>BR No</th>
							<th>Date</th>
							<th>Vendor</th>
							<th width="110px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>

</div>
		

<script>

$(document).ready(function(){
	$('.datepicker').datepicker({
		format: 'yyyy-mm-dd',
		todayHighlight: true,
		autoclose: true
	});
	
	listRatemanagement();

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
					{ data: 'rate_management_id' },
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





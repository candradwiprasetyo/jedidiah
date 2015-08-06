
<div class="row">

	<div class="col-sm-12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST VESSEL
				</h3>
				<button id="btnAddVessel" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="tabelVessel" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Code</th>
							<th>Vessel Name</th>
							<th>Company</th>
							<th>Vessel Information</th>
							<th width="110px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>

</div>
		

<div class="modal fade" id="modalVessel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Vessel</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formVessel">
		  <input type="hidden" id="hiddenvessel" name="hiddenvessel" value="">
		  <div class="form-group">
			<label for="vesselcode">Code</label>
			<input type="text" class="form-control input-sm" id="vesselcode" name="vesselcode">
		  </div>
		  <div class="form-group">
			<label for="vesselname">Vessel Name</label>
			<input type="text" class="form-control input-sm" id="vesselname" name="vesselname">
		  </div>
		  <div class="form-group">
			<label for="company">Company</label>
			<select type="text" style="width:100%" id="company" name="company"></select>
		  </div>
		  <div class="form-group">
			<label for="information">Vessel Information</label>
			<textarea class="form-control input-sm" id="information" name="information"></textarea>
		  </div>
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formVessel" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	

<script>

$(document).ready(function(){

	listVessel();
	
	$("button#btnAddVessel").click(function(){
		fillSelectCompany();
		$('div#modalVessel').modal("show");
	});
	
	$('form#formVessel').bootstrapValidator({
		feedbackIcons : {
			valid : 'glyphicon glyphicon-ok',
			invalid : 'glyphicon glyphicon-remove',
			validating : 'glyphicon glyphicon-refresh'
		},
		fields : {
			vesselcode : {
				trigger : 'blur', 
				validators : {
					notEmpty : {
						message : 'Required - you have to fill this field'
					}
				}
			},
			vesselname : {
				validators : {
					notEmpty : {
						message : 'Required - you have to fill this field'
					}
				}
			},
			company : {
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
			url			: "<?php echo base_url('vessel/commit') ?>",
			data		: dataSerialize,
			error		: function(){
				alert("AJAX Error");
			},
			success		: function(json) {
				alert(json);
			},
			complete	: function(){
				listVessel();
				$('input#hiddenvessel').val('');
				$('form#formVessel')[0].reset();
				$('form#formVessel').data('bootstrapValidator').resetForm();	
				$('div#modalVessel').modal("hide");
			}
		});
	});
	
});	

function fillSelectCompany(){
	$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('costumer/getby/shipping') ?>",
			success		: function(json){
				$("select#company").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Company -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.costumer_code+'">'+row.costumer_name+'</option>';
				});

				$("select#company").empty().append(fillOption);	
			},
			error		: function(){
				alert("error");
			},
			complete	: function(){
				$("select#company").select2();
			}
		});	
}

function listVessel(){

	$.ajax({
		type		: "POST",
		dataType	: 'json',
		url			: "<?php echo base_url('vessel/getall') ?>",
		success		: function(json){

			var number = 0;
			jqTabel = $('table#tabelVessel').DataTable({
				"bDestroy" : true,
				paging: true,
				searching: false,
				ordering: false,
				data: json,
				columns: [
					{ data: 'vessel_code' },
					{ data: 'vessel_code' },
					{ data: 'vessel_name' },
					{ data: 'company' },
					{ data: 'vessel_information' },
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
						"targets": [5], 
						"render": function ( data, type, row, meta ) {
							var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editVessel(\''+row.vessel_code+'\')" ><i class="fa fa-edit"></i></a> ';
							var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusVessel(\''+row.vessel_code+'\')" ><i class="fa fa-times"></i></a>';
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

function editVessel(ID){
	fillSelectCompany();

	$.ajax({
		type		: "POST",
		dataType	: 'json',
		url			: "<?php echo base_url('vessel/getrow') ?>"+"/"+ID,
		success		: function(data){
			$("input#hiddenvessel").val(data.vessel_code);
			$("input#vesselcode").val(data.vessel_code);
			$("input#vesselname").val(data.vessel_name);
			$("select#company").select2("val",data.company);
			$("textarea#information").val(data.vessel_information);
		},
		complete	: function(){
			$("div#modalVessel").modal("show");
		},
		error		: function(){
			toastr["error"]("Selecting Data Failed. AJAX Error !");
		}
	});
}

function hapusVessel(ID){
	$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
		if (button == 'hapus'){
			$.ajax({
				type		: "POST",
				dataType	: 'json',
				url			: "<?php echo base_url('vessel/delete') ?>"+"/"+ID,
				success		: function(result){
					if(result){
						toastr["info"]("Data Deleted");
					}
					else{
						toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
					}
				},
				complete	: function(){
					listVessel();
				},
				error		: function(){
					toastr["error"]("Deleting Data Failed. AJAX Error !");
				}
			});
		}
	});
}


/*	
function listVessel(){
	alert("tes");
	$.ajax({
		type		: "POST",
		dataType	: 'json',
		url			: "<?php echo base_url('vessel/getall') ?>",
		success		: function(json){
			alert(json);
			var number = 0;
			jqTabel = $('table#tabelCharge').DataTable({
				"bDestroy" : true,
				paging: true,
				searching: false,
				ordering: false,
				data: json,
				columns: [
					{ data: 'charge_code' },
					{ data: 'charge_code' },
					{ data: 'charge_name' },
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
							var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editCharge(\''+row.charge_code+'\')" ><i class="fa fa-edit"></i></a> ';
							var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusCharge(\''+row.charge_code+'\')" ><i class="fa fa-times"></i></a>';
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
	
}*/

/*function editCharge(ID){
	$.ajax({
		type		: "POST",
		dataType	: 'json',
		url			: "<?php echo base_url('charge/getrow') ?>"+"/"+ID,
		success		: function(data){
			$("input#hiddencharge").val(data.charge_code);
			$("input#chargecode").val(data.charge_code);
			$("input#chargename").val(data.charge_name);
		},
		complete	: function(){
			$("div#modalCharge").modal("show");
		},
		error		: function(){
			toastr["error"]("Selecting Data Failed. AJAX Error !");
		}
	});
}

function hapusCharge(ID){
	$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
		if (button == 'hapus'){
			$.ajax({
				type		: "POST",
				dataType	: 'json',
				url			: "<?php echo base_url('charge/delete') ?>"+"/"+ID,
				success		: function(result){
					if(result){
						toastr["info"]("Data Deleted");
					}
					else{
						toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
					}
				},
				complete	: function(){
					listCharge();
				},
				error		: function(){
					toastr["error"]("Deleting Data Failed. AJAX Error !");
				}
			});
		}
	});
}
*/
	
</script>





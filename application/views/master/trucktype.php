
<div class="row">

	<div class="col-sm-12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST TRUCK TYPE
				</h3>
				<button id="btnAddTruckType" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="tabelTruckType" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Truck Type</th>
							<th>Description</th>
							<th width="110px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>
	

</div>
		

<div class="modal fade" id="modalTruckType">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Truck Type</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formTruckType">
		  <input type="hidden" id="hiddentrucktype" name="hiddentrucktype" value="">
		  <div class="form-group">
			<label for="trucktype">Truck Type</label>
			<input type="text" class="form-control" id="trucktype" name="trucktype">
		  </div>
		  <div class="form-group">
			<label for="description">Description</label>
			<textarea class="form-control" id="description" name="description"></textarea>
		  </div>  
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formTruckType" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	

<script>
	
	$(document).ready(function(){
		listTruckType();

		$("button#btnAddTruckType").click(function(){
			$("div#modalTruckType").modal("show");
		});

		$('form#formTruckType').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				trucktype : { 
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
				url			: "<?php echo base_url('trucktype/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listTruckType();
					$('input#hiddentrucktype').val('');
					$('form#formTruckType')[0].reset();
					$('form#formTruckType').data('bootstrapValidator').resetForm();	
					$('div#modalTruckType').modal("hide");
				}
			});
		});

	});

	function getTruckType(handleData){
		return $.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('trucktype/getall') ?>",
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error");
			}
		});	
	}

	function listTruckType(){
		getTruckType(function(output){
			var number = 0;
			jqTabel = $('table#tabelTruckType').DataTable({
				"bDestroy" : true,
				paging: true,
				searching: false,
				ordering: false,
				data: output,
				columns: [
					{ data: 'truck_id' },
					{ data: 'truck_name' },
					{ data: 'truck_description' },
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
							var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editTruckType(\''+row.truck_id+'\')" ><i class="fa fa-edit"></i></a> ';
							var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusTruckType(\''+row.truck_id+'\')" ><i class="fa fa-times"></i></a>';
							return edit + del;
						}
					}
				]
			});
			
		});
	}

	function editTruckType(ID){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('trucktype/getrow') ?>"+"/"+ID,
			success		: function(data){
				$("input#hiddentrucktype").val(data.truck_id);
				$("input#trucktype").val(data.truck_name);
				$("textarea#description").val(data.truck_description);
			},
			complete	: function(){
				$("div#modalTruckType").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusTruckType(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('trucktype/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listTruckType();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}

</script>






<div class="row">

	<div class="col-sm-12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST PAYMENT
				</h3>
				<button id="btnAddPayment" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="tabelPayment" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Code</th>
							<th>Payment Method</th>
							<th width="90px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>

</div>
		

<div class="modal fade" id="modalPayment">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Methods Of Payment</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formPayment">
		  <input type="hidden" id="hiddenpayment" name="hiddenpayment" value="">
		  <div class="form-group">
			<label for="paymentcode">Payment Code</label>
			<input type="text" class="form-control" id="paymentcode" name="paymentcode">
		  </div>
		  <div class="form-group">
			<label for="paymentmethod">Payment Method</label>
			<input type="text" class="form-control" id="paymentmethod" name="paymentmethod">
		  </div>
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formPayment" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	

<script>

$(document).ready(function(){
	
	listPayment();
	
	$("button#btnAddPayment").click(function(){
		$('div#modalPayment').modal("show");
	});
	
	$('form#formPayment').bootstrapValidator({
		feedbackIcons : {
			valid : 'glyphicon glyphicon-ok',
			invalid : 'glyphicon glyphicon-remove',
			validating : 'glyphicon glyphicon-refresh'
		},
		fields : {
			paymentcode : {
				trigger : 'blur', 
				validators : {
					notEmpty : {
						message : 'Required - you have to fill this field'
					},
					stringLength: {
						message: 'Fill of this field must be less than 3 characters',
						max: function (value, validator, $field) {
							return 2 - (value.match(/\r/g) || []).length;
						}
					}
				}
			},
			paymentmethod : {
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
			url			: "<?php echo base_url('payment/commit') ?>",
			data		: dataSerialize,
			error		: function(){
				alert("AJAX Error");
			},
			success		: function(json) {
				alert(json);
			},
			complete	: function(){
				listPayment();
				$('input#hiddenpayment').val('');
				$('form#formPayment')[0].reset();
				$('form#formPayment').data('bootstrapValidator').resetForm();	
				$('div#modalPayment').modal("hide");
			}
		});
	});
	
});


function listPayment(){
	
	$.ajax({
		type		: "POST",
		dataType	: 'json',
		url			: "<?php echo base_url('payment/getall') ?>",
		success		: function(json){
			var number = 0;
			jqTabel = $('table#tabelPayment').DataTable({
				"bDestroy" : true,
				paging: true,
				searching: false,
				ordering: false,
				data: json,
				columns: [
					{ data: 'payment_code' },
					{ data: 'payment_code' },
					{ data: 'payment_method' },
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
							var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editPayment(\''+row.payment_code+'\')" ><i class="fa fa-edit"></i></a> ';
							var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusPayment(\''+row.payment_code+'\')" ><i class="fa fa-times"></i></a>';
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
	
function editPayment(ID){
	$.ajax({
		type		: "POST",
		dataType	: 'json',
		url			: "<?php echo base_url('payment/getrow') ?>"+"/"+ID,
		success		: function(data){
			$("input#hiddenpayment").val(data.payment_code);
			$("input#paymentcode").val(data.payment_code);
			$("input#paymentmethod").val(data.payment_method);
		},
		complete	: function(){
			$("div#modalPayment").modal("show");
		},
		error		: function(){
			toastr["error"]("Selecting Data Failed. AJAX Error !");
		}
	});
}

function hapusPayment(ID){
	$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
		if (button == 'hapus'){
			$.ajax({
				type		: "POST",
				dataType	: 'json',
				url			: "<?php echo base_url('payment/delete') ?>"+"/"+ID,
				success		: function(result){
					if(result){
						toastr["info"]("Data Deleted");
					}
					else{
						toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
					}
				},
				complete	: function(){
					listPayment();
				},
				error		: function(){
					toastr["error"]("Deleting Data Failed. AJAX Error !");
				}
			});
		}
	});
}

	
</script>





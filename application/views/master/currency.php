
<div class="row">
	<div class="col-sm-5">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST CURRENCY
				</h3>
				<button id="btnAddCurrency" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="tabelCurrency" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Code</th>
							<th>Symbol</th>
							<th>Currency Name</th>
							<th width="90px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>
	
	<div class="col-sm-7">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST EXCHANGE RATE
				</h3>
				<button id="btnAddExchange" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="tabelExchange" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Currency Name</th>
							<th>Valid Date</th>
							<th>Valid Until</th>
							<th>Exchange Rate</th>
							<th width="90px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>
	
	

</div>
		

<div class="modal fade" id="modalCurrency">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Currency</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formCurrency">
		  <input type="hidden" id="hiddencurrency" name="hiddencurrency" value="">
		  <div class="form-group">
			<label for="currencycode">Currency Code</label>
			<input type="text" class="form-control" id="currencycode" name="currencycode">
		  </div>
		  <div class="form-group">
			<label for="currencysymbol">Currency Symbol</label>
			<input type="text" class="form-control" id="currencysymbol" name="currencysymbol">
		  </div>
		  <div class="form-group">
			<label for="currencyname">Currency Name</label>
			<input type="text" class="form-control" id="currencyname" name="currencyname">
		  </div>
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formCurrency" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="modalEcxhange">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Exchange</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formExchange">
		  <input type="hidden" id="hiddenexchange" name="hiddenexchange" value="">
		  <div class="form-group">
			<label for="currencyselect">Currency Name</label>
			<select class="form-control" id="currencyselect" name="currencyselect">
			</select>
		  </div>
		  <div class="form-group">
			<label for="validdate">Valid Date</label>
			<input type="text" class="form-control" id="validdate" name="validdate">
		  </div>
		  <div class="form-group">
			<label for="validuntil">Valid Until</label>
			<input type="text" class="form-control" id="validuntil" name="validuntil">
		  </div>
		  <div class="form-group">
			<label for="exchange">Exchange Rate</label>
			<input type="text" class="form-control" id="exchange" name="exchange">
		  </div>
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formExchange" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	

<script>

	$(document).ready(function(){
		
		listCurrency();
		listExchange();
		
		$("button#btnAddCurrency").click(function(){
			$('div#modalCurrency').modal("show");
		});
		
		$("button#btnAddExchange").click(function(){
			fillSelectCurrency();
			$('div#modalEcxhange').modal("show");
		});
		
		$('form#formCurrency').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				currencycode : {
					trigger : 'blur', 
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						},
						stringLength: {
							message: 'Fill of this field must be less than 3 characters',
							max: function (value, validator, $field) {
								return 3 - (value.match(/\r/g) || []).length;
							}
						}
					}
				},
				currencysymbol : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				currencyname : {
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
				url			: "<?php echo base_url('currency/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listCurrency();
					$('input#hiddencurrency').val('');
					$('form#formCurrency')[0].reset();
					$('form#formCurrency').data('bootstrapValidator').resetForm();	
					$('div#modalCurrency').modal("hide");
				}
			});
		});
		
		
		$('form#formExchange').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				currencyselect : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				validdate : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				validuntil : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				exchange : {
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
				url			: "<?php echo base_url('exchange/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listExchange();
					$('input#hiddenexchange').val('');
					$('form#formExchange')[0].reset();
					$('form#formExchange').data('bootstrapValidator').resetForm();	
					$('div#modalEcxhange').modal("hide");
				}
			});
		});
		
	});
	
	
	
	function getCurrency(handleData){
		return $.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('currency/getall') ?>",
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error");
			}
		});	
	}
	
	function listCurrency(){
		
		getCurrency(function(json){
			var number = 0;
			jqTabel = $('table#tabelCurrency').DataTable({
				"bDestroy" : true,
				paging: true,
				searching: false,
				ordering: false,
				data: json,
				columns: [
					{ data: 'currency_code' },
					{ data: 'currency_code' },
					{ data: 'currency_symbol' },
					{ data: 'currency_name' },
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
							var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editCurrency(\''+row.currency_code+'\')" ><i class="fa fa-edit"></i></a> ';
							var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusCurrency(\''+row.currency_code+'\')" ><i class="fa fa-times"></i></a>';
							return edit + del;
						}
					}
				]
			});
			
		});
		
		
	}
	
	function listExchange(){
		
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('exchange/getall') ?>",
			success		: function(json){
				var number = 0;
				jqTabel = $('table#tabelExchange').DataTable({
					"bDestroy" : true,
					paging: true,
					searching: false,
					ordering: false,
					data: json,
					columns: [
						{ data: 'currency_name' },
						{ data: 'currency_name' },
						{ data: 'valid_date' },
						{ data: 'valid_until' },
						{ data: 'exchange_rate' },
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
								var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editExchange(\''+row.exchange_code+'\')" ><i class="fa fa-edit"></i></a> ';
								var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusExchange(\''+row.exchange_code+'\')" ><i class="fa fa-times"></i></a>';
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
	
	function fillSelectCurrency(){
		getCurrency(function(output){
			$("select#currencyselect").empty().append("<option>Loading Data ...</option>");
			
			var fillOption = "<option value=''>- Select Currency -</option>";
			
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.currency_code+'">'+row.currency_name+' ('+row.currency_code+')</option>';
			});

			$("select#currencyselect").empty().append(fillOption);		
		});
	}
	
	
	function editCurrency(ID){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('currency/getrow') ?>"+"/"+ID,
			success		: function(data){
				$("input#hiddencurrency").val(data.currency_code);
				$("input#currencycode").val(data.currency_code);
				$("input#currencysymbol").val(data.currency_symbol);
				$("input#currencyname").val(data.currency_name);
			},
			complete	: function(){
				$("div#modalCurrency").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusCurrency(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('currency/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listCurrency();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}
	
	
	function editExchange(ID){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('exchange/getrow') ?>"+"/"+ID,
			success		: function(data){
				fillSelectCurrency();
				$("input#hiddenexchange").val(data.exchange_code);
				$("select#currencyselect").val(data.currency_code);
				$("input#validdate").val(data.valid_date);
				$("input#validuntil").val(data.valid_until);
				$("input#exchange").val(data.exchange_rate);
			},
			complete	: function(){
				$("div#modalEcxhange").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusExchange(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('exchange/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listExchange();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}
	
	
</script>





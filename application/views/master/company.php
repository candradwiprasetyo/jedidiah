
<div class="row">

	<div class="col-sm-12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST COMPANY
				</h3>
				<button id="btnAddCompany" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="tabelCompany" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Company Name</th>
							<th>Phone / Fax </th>
							<th>Email / Web </th>
							<th width="40%">Address</th>
							<th width="120px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>

</div>
		

<div class="modal fade" id="modalCompany">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Company</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formCompany">
		  <input type="hidden" id="hiddencompany" name="hiddencompany" value="">
		  <div class="form-group">
			<label for="companyname">Company Name</label>
			<input type="text" class="form-control" id="companyname" name="companyname">
		  </div>
		  <div class="form-group">
			<label for="address">Address</label>
			<input type="text" class="form-control" id="address" name="address" placeholder="input your address here">
		  </div>
		  
		  <div class="row">
			<div class="col-sm-4">
				<div class="form-group">
					<label for="country">Country</label>
					<select class="form-control" id="country" name="country">
					</select>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="city">City</label>
					<select class="form-control" id="city" name="city">
					</select>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="zip">ZIP Code</label>
					<input type="text" class="form-control" id="zip" name="zip">
				</div>
			</div> 
		  </div>
		  
		  <div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="text" class="form-control" id="phone" name="phone">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="fax">Fax</label>
					<input type="text" class="form-control" id="fax" name="fax">
				</div>
			</div>
		  </div>
		  
		  <div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" class="form-control" id="email" name="email">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="website">Website</label>
					<input type="text" class="form-control" id="website" name="website">
				</div>
			</div>
		  </div>
		  
		  <div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="currency">Default Currency</label>
					<select class="form-control" id="currency" name="currency">
					</select>
				</div>
			</div>
		  </div>
		  
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formCompany" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	

<script>

	$(document).ready(function(){
		
		listCompany();
		
		$("button#btnAddCompany").click(function(){
			fillSelectCountry();
			fillSelectCurrency();
			$('div#modalCompany').modal("show");
		});
		
		$("select#country").change(function(){
			var country = $(this).val();
			fillSelectCity(country);
		});
		
		$('form#formCompany').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				companyname : { 
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
				url			: "<?php echo base_url('company/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listCompany();
					$('input#hiddencompany').val('');
					$('form#formCompany')[0].reset();
					$('form#formCompany').data('bootstrapValidator').resetForm();	
					$('div#modalCompany').modal("hide");
				}
			});
		});
		
	});
	
	
	function listCompany(){
		
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('company/getall') ?>",
			success		: function(json){
				var number = 0;
				jqTabel = $('table#tabelCompany').DataTable({
					"bDestroy" : true,
					paging: true,
					searching: false,
					ordering: false,
					data: json,
					columns: [
						{ data: 'company_code' },
						{ data: 'company_name' },
						{ data: 'phone' },
						{ data: 'email' },
						{ data: 'address' },
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
							"targets": [2], 
							"render": function ( data, type, row, meta ) {
								return data + " / " + row.fax;
							}
						},
						{ 
							"targets": [3], 
							"render": function ( data, type, row, meta ) {
								return data + " / " + row.web;
							}
						},
						{ 
							"targets": [4], 
							"render": function ( data, type, row, meta ) {
								return data + " , " + row.city + " , " + row.country + " , " + row.zip_code;
							}
						},	
						{ 
							"targets": [5], 
							"render": function ( data, type, row, meta ) {
								var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editCompany(\''+row.company_code+'\')" ><i class="fa fa-edit"></i></a> ';
								var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusCompany(\''+row.company_code+'\')" ><i class="fa fa-times"></i></a>';
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
	
	function getCountry(handleData){
		return $.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('country/getall') ?>",
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error");
			}
		});	
	}
	
	function fillSelectCountry(){
		getCountry(function(output){
			$("select#country").empty().append("<option>Loading Data ...</option>");
			
			var fillOption = "<option value=''>- Select Country -</option>";
			
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.country_code+'">'+row.country_name+' ('+row.country_code+')</option>';
			});
			
			$("select#country").empty().append(fillOption);		
		});
	}
	
	function getCity(country,handleData){
		return $.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('city/bycountry') ?>"+"/"+country,
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error");
			}
		});	
	}
	
	function fillSelectCity(country){
		getCity(country,function(output){
			$("select#city").empty().append("<option>Loading Data ...</option>");
			
			var fillOption = "<option value=''>- Select City -</option>";
			
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.city_code+'">'+row.city_name+' ('+row.city_code+')</option>';
			});

			$("select#city").empty().append(fillOption);		
		});
	}
	
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
	
	function fillSelectCurrency(){
		getCurrency(function(output){
			$("select#currency").empty().append("<option>Loading Data ...</option>");
			
			var fillOption = "<option value=''>- Select Currency -</option>";
			
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.currency_code+'">'+row.currency_symbol+' ('+row.currency_name+')</option>';
			});

			$("select#currency").empty().append(fillOption);		
		});
	}
	
	function editCompany(ID){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('company/getrow') ?>"+"/"+ID,
			success		: function(data){
				fillSelectCountry();
				fillSelectCity(data.country);
				fillSelectCurrency();
				$("input#hiddencompany").val(data.company_code);
				$("input#companyname").val(data.company_name);
				$("input#address").val(data.address);
				$("select#country").val(data.country);
				$("select#city").val(data.city);
				$("input#zip").val(data.zip_code);
				$("input#phone").val(data.phone);
				$("input#fax").val(data.fax);
				$("input#email").val(data.email);
				$("input#website").val(data.web);
				$("select#currency").val(data.default_currency);
			},
			complete	: function(){
				$("div#modalCompany").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusCompany(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('company/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listCompany();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}
	
	
</script>





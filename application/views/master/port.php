
<div class="row">
	<div class="col-sm-6">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST SEAPORT
				</h3>
				<button id="btnAddSeaport" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="seaporttable" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Code</th>
							<th>Seaport Name</th>
							<th>City</th>
							<th>Country</th>
							<th width="90px">Options</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
	
	<div class="col-sm-6">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST AIRPORT
				</h3>
				<button id="btnAddAirport" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="airporttable" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Code</th>
							<th>Airport Name</th>
							<th>City</th>
							<th>Country</th>
							<th width="90px">Options</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>

</div>


<div class="modal fade" id="modalSeaport">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Seaport</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formSeaport">
		  <input type="hidden" id="hiddenseaport" name="hiddenseaport">
		  <div class="form-group">
			<label for="countryselectforseaport">Country</label>
			<select class="form-control country" id="countryselectforseaport" name="countryselectforseaport">
			</select>
		  </div>
		  <div class="form-group">
			<label for="cityselectforseaport">City</label>
			<select class="form-control" id="cityselectforseaport" name="cityselectforseaport">
			</select>
		  </div>
		  <div class="form-group">
			<label for="seaportcode">Seaport Code</label>
			<input type="text" class="form-control" id="seaportcode" name="seaportcode">
		  </div>
		  <div class="form-group">
			<label for="seaportname">Seaport Name</label>
			<input type="text" class="form-control" id="seaportname" name="seaportname">
		  </div>
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formSeaport" type="submit" class="btn btn-primary" id="btnSaveSeaport">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="modalAirport">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Airport</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formAirport">
		  <input type="hidden" id="hiddenairport" name="hiddenairport">
		  <div class="form-group">
			<label for="countryselectforairport">Country</label>
			<select class="form-control country" id="countryselectforairport" name="countryselectforairport">
			</select>
		  </div>
		  <div class="form-group">
			<label for="cityselectforairport">City</label>
			<select class="form-control" id="cityselectforairport" name="cityselectforairport">
			</select>
		  </div>
		  <div class="form-group">
			<label for="airportcode">Airport Code</label>
			<input type="text" class="form-control" id="airportcode" name="airportcode">
		  </div>
		  <div class="form-group">
			<label for="airportname">Airport Name</label>
			<input type="text" class="form-control" id="airportname" name="airportname">
		  </div>
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formAirport" type="submit" class="btn btn-primary" id="btnSaveAirport">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
		
	

<script>

	$(document).ready(function(){
		listSeaport();
		listAirport();
		
		$("button#btnAddSeaport").click(function(){
			$('div#modalSeaport').modal("show");		
			selectCountrySeaport();		
		});
		
		$("button#btnAddAirport").click(function(){
			$('div#modalAirport').modal("show");
			selectCountryAirport();			
		});
		
		$("select#countryselectforseaport").change(function(){
			var country = $(this).val();
			selectCitySeaport(country);	
		});
		
		$("select#countryselectforairport").change(function(){
			var country = $(this).val();
			selectCityAirport(country);	
		});
		
		
		$('form#formSeaport').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				countryselectforseaport : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				cityselectforseaport : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				seaportcode : {
					trigger : 'blur', 
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						},
						stringLength: {
							message: 'Fill of this field must be less than 5 characters',
							max: function (value, validator, $field) {
								return 5 - (value.match(/\r/g) || []).length;
							}
						}
					}
				},
				seaportname : {
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
				url			: "<?php echo base_url('seaport/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listSeaport();
					$('input#hiddenseaport').val('');
					$('form#formSeaport')[0].reset();
					$('form#formSeaport').data('bootstrapValidator').resetForm();	
					$('div#modalSeaport').modal("hide");
				}
			});
		});
		
		$('form#formAirport').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				countryselectforairport : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				cityselectforairport : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				airportcode : {
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
				airportname : {
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
				url			: "<?php echo base_url('airport/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listAirport();
					$('input#hiddenairport').val('');
					$('form#formAirport')[0].reset();
					$('form#formAirport').data('bootstrapValidator').resetForm();	
					$('div#modalAirport').modal("hide");
				}
			});
		});
		
		
		
	});
	
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
	
	
	function listSeaport(){
		
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('seaport/getall') ?>",
			success		: function(json){
				var number = 0;
				jqTabel = $('table#seaporttable').DataTable({
					"bDestroy" : true,
					paging: true,
					searching: false,
					ordering: false,
					data: json,
					columns: [
						{ data: 'seaport_code' },
						{ data: 'seaport_code' },
						{ data: 'seaport_name' },
						{ data: 'city_name' },
						{ data: 'country_name' },
						{ data: null }
					],
					"columnDefs": [ 
						{ 
							"targets": [0], 
							"render": function ( data, type, row, meta ) {
								return ++number;
							}
						},
						{ 
							"targets": [5], 
							"render": function ( data, type, row, meta ) {
								var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editSeaport(\''+row.seaport_code+'\')" ><i class="fa fa-edit"></i></a> ';
								var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusSeaport(\''+row.seaport_code+'\')" ><i class="fa fa-times"></i></a>';
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
	
	function listAirport(){
		
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('airport/getall') ?>",
			success		: function(json){
				var number = 0;
				jqTabel = $('table#airporttable').DataTable({
					"bDestroy" : true,
					paging: true,
					searching: false,
					ordering: false,
					data: json,
					columns: [
						{ data: 'airport_code' },
						{ data: 'airport_code' },
						{ data: 'airport_name' },
						{ data: 'city_name' },
						{ data: 'country_name' },
						{ data: null }
					],
					"columnDefs": [ 
						{ 
							"targets": [0], 
							"render": function ( data, type, row, meta ) {
								return ++number;
							}
						},
						{ 
							"targets": [5], 
							"render": function ( data, type, row, meta ) {
								var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editAirport(\''+row.airport_code+'\')" ><i class="fa fa-edit"></i></a> ';
								var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusAirport(\''+row.airport_code+'\')" ><i class="fa fa-times"></i></a>';
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
	
	function selectCountrySeaport(){
		getCountry(function(output){
			$("select#countryselectforseaport").empty().append("<option>Loading Data ...</option>");
			
			var fillOption = "<option value=''>- Select Country -</option>";
			
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.country_code+'">'+row.country_name+' ('+row.country_code+')</option>';
			});
			
			$("select#countryselectforseaport").empty().append(fillOption);		
		});
	}
	
	function selectCountryAirport(){
		getCountry(function(output){
			$("select#countryselectforairport").empty().append("<option>Loading Data ...</option>");
			
			var fillOption = "<option value=''>- Select Country -</option>";
			
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.country_code+'">'+row.country_name+' ('+row.country_code+')</option>';
			});
			
			$("select#countryselectforairport").empty().append(fillOption);		
		});
	}
	
	function selectCitySeaport(country){
		getCity(country,function(output){
			$("select#cityselectforseaport").empty().append("<option>Loading Data ...</option>");
			
			var fillOption = "<option value=''>- Select City -</option>";
			
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.city_code+'">'+row.city_name+' ('+row.city_code+')</option>';
			});

			$("select#cityselectforseaport").empty().append(fillOption);		
		});
	}
	
	function selectCityAirport(country){
		getCity(country,function(output){
			$("select#cityselectforairport").empty().append("<option>Loading Data ...</option>");
			
			var fillOption = "<option value=''>- Select City -</option>";
			
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.city_code+'">'+row.city_name+' ('+row.city_code+')</option>';
			});

			$("select#cityselectforairport").empty().append(fillOption);		
		});
	}
	
	
	function editSeaport(ID){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('seaport/getrow') ?>"+"/"+ID,
			success		: function(data){
				selectCountrySeaport();
				selectCitySeaport(data.country_code);
				$("input#hiddenseaport").val(data.seaport_code);
				$("select#countryselectforseaport").val(data.country_code);
				$("select#cityselectforseaport").val(data.city_code);
				$("input#seaportcode").val(data.seaport_code);
				$("input#seaportname").val(data.seaport_name);
			},
			complete	: function(){
				$("div#modalSeaport").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusSeaport(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('seaport/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listSeaport();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}
	
	function editAirport(ID){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('airport/getrow') ?>"+"/"+ID,
			success		: function(data){
				selectCountryAirport();
				selectCityAirport(data.country_code);
				
				$("input#hiddenairport").val(data.airport_code);
				$("select#countryselectforairport").val(data.country_code);
				$("select#cityselectforairport").val(data.city_code);
				$("input#airportcode").val(data.airport_code);
				$("input#airportname").val(data.airport_name);
			},
			complete	: function(){
				$("div#modalAirport").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusAirport(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('airport/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listAirport();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}

	
	
	
		
</script>





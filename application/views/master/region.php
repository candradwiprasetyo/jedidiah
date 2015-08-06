
<div class="row">
	<div class="col-sm-4">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST COUNTRY
				</h3>
				<button id="btnAddCountry" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="countrytable" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Code</th>
							<th>Country Name</th>
							<th width="90px">Options</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
	
	<div class="col-sm-4">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST CITY
				</h3>
				<button id="btnAddCity" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="citytable" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Code</th>
							<th>City Name</th>
							<th width="90px">Options</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>
	
	<div class="col-sm-4">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST AREA
				</h3>
				<button id="btnAddArea" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">
				<table id="areatable" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Code</th>
							<th>Area Name</th>
							<th width="90px">Options</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
	
</div>

<div class="modal fade" id="modalCountry">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Country</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formCountry">
		  <input type="hidden" id="hiddencountry" name="hiddencountry" value="">
		  <div class="form-group">
			<label for="countrycode">Country Code</label>
			<input type="text" class="form-control" id="countrycode" name="countrycode">
		  </div>
		  <div class="form-group">
			<label for="countryname">Country Name</label>
			<input type="text" class="form-control" id="countryname" name="countryname">
		  </div>
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formCountry" type="submit" class="btn btn-primary" id="btnSaveCountry">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="modalCity">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form City</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formCity">
		  <input type="hidden" id="hiddencity" name="hiddencity">
		  <div class="form-group">
			<label for="countryselectforcity">Country</label>
			<select class="form-control country" id="countryselectforcity" name="countryselectforcity">
			</select>
		  </div>
		  <div class="form-group">
			<label for="citycode">City Code</label>
			<input type="text" class="form-control" id="citycode" name="citycode">
		  </div>
		  <div class="form-group">
			<label for="cityname">City Name</label>
			<input type="text" class="form-control" id="cityname" name="cityname">
		  </div>
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formCity" type="submit" class="btn btn-primary" id="btnSaveCity">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="modalArea">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form City</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formArea">
		  <input type="hidden" id="hiddenarea" name="hiddenarea">
		  <div class="form-group">
			<label for="countryselectforarea">Country</label>
			<select class="form-control country" id="countryselectforarea" name="countryselectforarea">
			</select>
		  </div>
		  <div class="form-group">
			<label for="cityselect">City</label>
			<select class="form-control" id="cityselect" name="cityselect">
			</select>
		  </div>
		  <div class="form-group">
			<label for="areacode">Area Code</label>
			<input type="text" class="form-control" id="areacode" name="areacode">
		  </div>
		  <div class="form-group">
			<label for="areaname">Area Name</label>
			<input type="text" class="form-control" id="areaname" name="areaname">
		  </div>
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formArea" type="submit" class="btn btn-primary" id="btnSaveCity">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>

	$(document).ready(function(){
		listCountry();
		listCity();
		listArea();
		
		$("button#btnAddCountry").click(function(){
			$('div#modalCountry').modal("show");
		});
		
		$("button#btnAddCity").click(function(){
			listCountrySelect();
			$('div#modalCity').modal("show");
		});
		
		$("button#btnAddArea").click(function(){
			listCountrySelect();
			$('div#modalArea').modal("show");
		});
		
		$("select#countryselectforarea").change(function(){
			listCitySelect();
		});
		
		$('form#formCountry').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				countrycode : {
					trigger : 'blur', 
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						},
						stringLength: {
							message: 'Fill of this field must be less than 2 characters',
							max: function (value, validator, $field) {
								return 2 - (value.match(/\r/g) || []).length;
							}
						}
					}
				},
				countryname : {
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
				url			: "<?php echo base_url('country/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					toastr["error"]("Saving Data Failed. AJAX Error !");
				},
				success		: function(json) {
					toastr["success"]("Data Saved");
					//toastr["warning"]("Not Good");
				},
				complete	: function(){
					listCountry();
					$('input#hiddencountry').val('');
					$('form#formCountry')[0].reset();
					$('form#formCountry').data('bootstrapValidator').resetForm();	
					$('div#modalCountry').modal("hide");
				}
			});
		});
		
	
		$('form#formCity').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				countryselectforcity : {
					validators : {
						notEmpty : {
							message : 'Required - you have to select this field'
						}
					}
				},
				citycode : {
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
				cityname : {
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
				url			: "<?php echo base_url('city/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listCity();
					$('input#hiddencity').val('');
					$('form#formCity')[0].reset();
					$('form#formCity').data('bootstrapValidator').resetForm();	
					$('div#modalCity').modal("hide");
				}
			});
		});
		
		$('form#formArea').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				countryselectforarea : {
					validators : {
						notEmpty : {
							message : 'Required - you have to select this field'
						}
					}
				},
				cityselect : {
					validators : {
						notEmpty : {
							message : 'Required - you have to select this field'
						}
					}
				},
				areacode : {
					trigger : 'blur', 
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						},
						stringLength: {
							message: 'Fill of this field must be less than 6 characters',
							max: function (value, validator, $field) {
								return 6 - (value.match(/\r/g) || []).length;
							}
						}
					}
				},
				areaname : {
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
				url			: "<?php echo base_url('area/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listArea();
					$('input#hiddenarea').val('');
					$('form#formArea')[0].reset();
					$('form#formArea').data('bootstrapValidator').resetForm();	
					$('div#modalArea').modal("hide");
				}
			});
		});
		
		
		$('#citytable tbody').on( 'click', 'tr', function () {
			if ( $(this).hasClass('selected') ) {
				$(this).removeClass('selected');
			}
			else {
				table.$('tr.selected').removeClass('selected');
				$(this).addClass('selected');
			}
		} );
		
	});
	
	//FUNCTION
	
	function getCity(handleData){
		return $.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('city/getall') ?>",
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error");
			}
		});	
	}

	function listCity(){
		
		getCity(function(output){
			var number = 0;
			jqTabel = $('table#citytable').DataTable({
				"bDestroy" : true,
				paging: true,
				searching: false,
				ordering: false,
				data: output,
				columns: [
					{ data: 'city_code' },
					{ data: 'city_code' },
					{ data: 'city_name' },
					{ data: 'city_code' }
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
							var contentrow = data + ' ('+row.country_code+')';
							return contentrow;
						}
					},	
					{ 
						"targets": [3], 
						"render": function ( data, type, row, meta ) {
							var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editCity(\''+row.city_code+'\')" ><i class="fa fa-edit"></i></a> ';
							var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusCity(\''+row.city_code+'\')" ><i class="fa fa-times"></i></a>';
							return edit + del;
						}
					}
				]
			});
			
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
	
	function listCountry(){
		
		getCountry(function(output){
			var number = 0;
			jqTabel = $('table#countrytable').DataTable({
				"bDestroy" : true,
				paging: true,
				searching: false,
				ordering: false,
				data: output,
				columns: [
					{ data: 'country_code' },
					{ data: 'country_code' },
					{ data: 'country_name' },
					{ data: 'country_code' }
				],
				"columnDefs": [ 
					{ 
						"targets": [0], 
						"render": function ( data, type, row, meta ) {
							return ++number;
						}
					},	
					{ 
						"targets": [3], 
						"render": function ( data, type, row, meta ) {
							var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editCountry(\''+row.country_code+'\')" ><i class="fa fa-edit"></i></a> ';
							var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusCountry(\''+row.country_code+'\')" ><i class="fa fa-times"></i></a>';
							return edit + del;
						}
					}
				]
			});
			
		});
	}
	
	
	function getArea(handleData){
		return $.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('area/getall') ?>",
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error");
			}
		});	
	}
	
	function listArea(){
		
		getArea(function(output){
			
			var number = 0;
			jqTabel = $('table#areatable').DataTable({
				"bDestroy" : true,
				paging: true,
				searching: false,
				ordering: false,
				data: output,
				columns: [
					{ data: 'area_code' },
					{ data: 'area_code' },
					{ data: 'area_name' },
					{ data: 'area_code' }
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
							var contentrow = data + ' ('+row.city_code+')';
							return contentrow;
						}
					},	
					{ 
						"targets": [3], 
						"render": function ( data, type, row, meta ) {
							var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editArea(\''+row.area_code+'\')" ><i class="fa fa-edit"></i></a> ';
							var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusArea(\''+row.area_code+'\')" ><i class="fa fa-times"></i></a>';
							return edit + del;
						}
					}
				]
			});
			
		});
	}
	
	function listCountrySelect(){
		getCountry(function(output){
			$("select.country").empty().append("<option>Loading Data ...</option>");
			
			var fillOption = "<option value=''>- Select Country -</option>";
			
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.country_code+'">'+row.country_name+' ('+row.country_code+')</option>';
			});
			
			$("select.country").empty().append(fillOption);		
		});
	}
	
	function listCitySelect(){
		getCity(function(output){
			$("select#cityselect").empty().append("<option>Loading Data ...</option>");
			
			var fillOption = "<option value=''>- Select City -</option>";
			
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.city_code+'">'+row.city_name+' ('+row.city_code+')</option>';
			});

			$("select#cityselect").empty().append(fillOption);		
		});
	}
	
	function editCountry(ID){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('country/getrow') ?>"+"/"+ID,
			success		: function(data){
				$("input#hiddencountry").val(data.country_code);
				$("input#countrycode").val(data.country_code);
				$("input#countryname").val(data.country_name);
			},
			complete	: function(){
				$("div#modalCountry").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusCountry(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('country/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listCountry();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}
	
	function editCity(ID){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('city/getrow') ?>"+"/"+ID,
			success		: function(data){
				listCountrySelect();
				$("input#hiddencity").val(data.city_code);
				$("select#countryselectforcity").val(data.country_code);
				$("input#citycode").val(data.city_code);
				$("input#cityname").val(data.city_name);
			},
			complete	: function(){
				$("div#modalCity").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusCity(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('city/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listCountry();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}
	
	function editArea(ID){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('area/getrow') ?>"+"/"+ID,
			success		: function(data){
				listCountrySelect();
				listCitySelect();
				$("input#hiddenarea").val(data.area_code);
				$("select#countryselectforarea").val(data.country_code);
				$("select#cityselect").val(data.city_code);
				$("input#areacode").val(data.area_code);
				$("input#areaname").val(data.area_name);
			},
			complete	: function(){
				$("div#modalArea").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusArea(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('area/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listCountry();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}

		
</script>





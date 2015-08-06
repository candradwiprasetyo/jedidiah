
<div class="row">
	<div class="col-sm-12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-server"></i>
					LIST COMMODITY
				</h3>
				<button id="btnAddCommodity" class="btn btn-sm btn-default pull-right" style="margin-right:10px">
					ADD
				</button>
			</div>
			<div class="box-content nopadding">

				<table id="tabelCommodity" class="table table-hover table-nomargin table-bordered table-condensed">
					<thead>
						<tr>
							<th>#</th>
							<th>Code</th>
							<th>Commodity Name</th>
							<th>HS Code</th>
							<th>Specific Name on BL</th>
							<th>Section</th>
							<th>Moving Type</th>
							<th>Document Need</th>
							<th width="120px">Options</th>
						</tr>
					</thead>
				</table>
				
			</div>
		</div>
	</div>
	
	
</div>
		
<div class="modal fade" id="modalCommodity">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form Commodity</h4>
      </div>
      <div class="modal-body">
       
	   <form id="formCommodity">
		  <input type="hidden" id="hiddencommodity" name="hiddencommodity" value="">
		  <div class="form-group">
			<label for="commoditycode">Commodity Code</label>
			<input type="text" class="form-control" id="commoditycode" name="commoditycode">
		  </div>
		  <div class="form-group">
			<label for="commodityname">Commodity Name</label>
			<input type="text" class="form-control" id="commodityname" name="commodityname">
		  </div>
		   <div class="form-group">
			<label for="hscode">HS Code</label>
			<input type="text" class="form-control" id="hscode" name="hscode">
		  </div>
		  <div class="form-group">
			<label for="specificname">Specific Name</label>
			<input type="text" class="form-control" id="specificname" name="specificname">
		  </div>
		  
		  <div class="form-group">
			<label for="section">Section</label>
			<select class="form-control" id="section" name="section">
			</select>
		  </div>
		  
		  <div class="form-group">
			<label for="movingtype">Moving Type</label>
			<select class="form-control" id="movingtype" name="movingtype">
				<option value="">- Select One Below -</option>
				<option value="Export">Export</option>
				<option value="Import">Import</option>
				<option value="Domestic Inbound">Domestic Inbound</option>
				<option value="Domestic Outbound">Domestic Outbound</option>
			</select>
		  </div>
		  
		  <div class="form-group">
			<label for="document">Document Need</label>
			<select class="form-control" id="document" name="document">
			</select>
		  </div>
		 
		  
		</form>
		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button form="formCommodity" type="submit" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>

	$(document).ready(function(){
		listCommodity();
				
		$("button#btnAddCommodity").click(function(){
			fillSelectSection();
			fillSelectDocument();
			$('div#modalCommodity').modal("show");
		});
		
		$('form#formCommodity').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			},
			fields : {
				commoditycode : { 
					validators : {
						trigger : 'blur', 
						notEmpty : {
							message : 'Required - you have to fill this field'
						},
						stringLength: {
							message: 'Fill of this field must be less than 4 characters',
							max: function (value, validator, $field) {
								return 4 - (value.match(/\r/g) || []).length;
							}
						}
					}
				},
				commodityname : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				hscode : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				specificname : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				section : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				movingtype : {
					validators : {
						notEmpty : {
							message : 'Required - you have to fill this field'
						}
					}
				},
				document : {
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
				url			: "<?php echo base_url('commodity/commit') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					listCommodity();
					$('input#hiddencommodity').val('');
					$('form#formCommodity')[0].reset();
					$('form#formCommodity').data('bootstrapValidator').resetForm();	
					$('div#modalCommodity').modal("hide");
				}
			});
		});
	});
	
	function listCommodity(){
		
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('commodity/getall') ?>",
			success		: function(json){
				var number = 0;
				jqTabel = $('table#tabelCommodity').DataTable({
					"bDestroy" : true,
					paging: true,
					searching: false,
					ordering: false,
					data: json,
					columns: [
						{ data: 'commodity_code' },
						{ data: 'commodity_code' },
						{ data: 'commodity_name' },
						{ data: 'hs_code' },
						{ data: 'specific_name' },
						{ data: 'section' },
						{ data: 'moving_type' },
						{ data: 'document_need' },
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
							"targets": [8], 
							"render": function ( data, type, row, meta ) {
								var edit = '<a class="btn btn-xs" rel="tooltip" title="Edit" onclick="return editCommodity(\''+row.commodity_code+'\')" ><i class="fa fa-edit"></i></a> ';
								var del = '<a class="btn btn-xs" rel="tooltip" title="Delete" onclick="return hapusCommodity(\''+row.commodity_code+'\')" ><i class="fa fa-times"></i></a>';
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
	
	function getSection(handleData){
		return $.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('sectioncommodity/getall') ?>",
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error");
			}
		});	
	}
	
	function fillSelectSection(){
		getSection(function(output){
			$("select#section").empty().append("<option>Loading Data ...</option>");
			
			var fillOption = "<option value=''>- Select Section -</option>";
			
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.section_code+'">'+row.section_name+'</option>';
			});
			
			$("select#section").empty().append(fillOption);		
		});
	}
	
	function getDocument(handleData){
		return $.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('document/getall') ?>",
			success		: function(json){
				handleData(json);
			},
			error		: function(){
				alert("error");
			}
		});	
	}
	
	function fillSelectDocument(){
		getDocument(function(output){
			$("select#document").empty().append("<option>Loading Data ...</option>");
			
			var fillOption = "<option value=''>- Select Document -</option>";
			
			$.each(output, function(index, row) {
				fillOption += '<option value="'+row.doc_code+'">'+row.doc_name+'</option>';
			});
			
			$("select#document").empty().append(fillOption);		
		});
	}
	
	function editCommodity(ID){
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('commodity/getrow') ?>"+"/"+ID,
			success		: function(data){
				fillSelectSection();
				fillSelectDocument();
				$("input#hiddencommodity").val(data.commodity_code);
				$("input#commoditycode").val(data.commodity_code);
				$("input#commodityname").val(data.commodity_name);
				$("input#hscode").val(data.hs_code);
				$("input#specificname").val(data.specific_name);
				$("select#section").val(data.section);
				$("select#movingtype").val(data.moving_type);
				$("select#document").val(data.document_need);
			},
			complete	: function(){
				$("div#modalCommodity").modal("show");
			},
			error		: function(){
				toastr["error"]("Selecting Data Failed. AJAX Error !");
			}
		});
	}
	
	function hapusCommodity(ID){
		$.alert.open('warning', 'Are you sure to delete this data ?', {hapus: 'Delete', batal: 'Cancel'}, function(button) {
			if (button == 'hapus'){
				$.ajax({
					type		: "POST",
					dataType	: 'json',
					url			: "<?php echo base_url('commodity/delete') ?>"+"/"+ID,
					success		: function(result){
						if(result){
							toastr["info"]("Data Deleted");
						}
						else{
							toastr["warning"]("Ooops.. Not Good. Deleting Data Failed.");
						}
					},
					complete	: function(){
						listCommodity();
					},
					error		: function(){
						toastr["error"]("Deleting Data Failed. AJAX Error !");
					}
				});
			}
		});
	}
	

		
</script>





<div class="tab-content padding tab-content-inline tab-content-bottom">
	<div class="tab-pane active">
	
		<form id="formStuffing" class="form-horizontal" role="form">
		
			<input type="hidden" id="idjoborder" name="idjoborder" value="<?php echo $id_costumer ?>" />
			<input type="hidden" id="codestuffing" name="codestuffing" value="" />
			
			<div class="table-responsive">
				
				<div class="row">
				
					<div class="col-sm-8">
						<table id="tabelSize" class="table table-condensed table-striped table-hover table-bordered">
							<caption class="bg-primary">CONTAINER (FCL & LCL)</caption>
							<thead>
								<tr>
									<th>Size</th>
									<th>Type</th>
									<th class="text-center" style="width:150px">*</th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
						</table>
					</div>
					
					<div class="col-sm-4">
						<div class="form-group">
							<label class="col-sm-3 bg-primary text-right">Party :</label>
							<label class="col-sm-8 bg-info text-center">3x40'HC ; 1x20'</label>
						</div>
					</div>
					
				</div>
				
				<hr>
				<div class="row">
					<div class="col-sm-12">
						<table id="tabelTrucking" class="table table-condensed table-striped table-hover table-bordered">
							<caption class="bg-primary">TRUCKING PICKUP & DELIVERY</caption>
							<thead>
								<tr>
									<th width="10%">Date</th>
									<th>Warehouse</th>
									<th>Address</th>
									<th>PIC</th>
									<th>Phone</th>
									<th>Party</th>
									<th>Note</th>
									<th class="text-center" style="width:150px">*</th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
						</table>
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-12 text-center">
						<button type="button" class="btn btn-danger">Create Surat Jalan</button>
					</div>
				</div>
				
				   
				
			</div>
			
			<hr>
			<div class="row">
				<div class="col-sm-4">
					
				</div>
				
				<div class="col-sm-8">
					<div class="pull-right">
						<button id="btnPrevious" type="button" class="btn btn-info">PREVIOUS</button>
						<button id="btnNext" type="button" class="btn btn-success">NEXT</button>
					</div>
				</div>
			</div>
			
		</form>
						
	</div>
</div>


<div class="modal fade" id="detailContainer">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Detail Quantity</h4>
      </div>
      <div class="modal-body">
       
		<div class="row">
			<div class="col-sm-12">
				
				<input type="hidden" id="idSizeInDetailContainer" />
				
				<table id="tabelContainer" class="table table-condensed table-striped table-hover table-bordered">
					<thead>
						<tr>
							<th>Container No</th>
							<th>Seal No</th>
							<th class="text-center" style="width:150px">*</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
		
      </div>
	  
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-default">OK</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div id="detailcommodity" class="modal fade">
  <div class="modal-dialog" style="width:1200px">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Detail Container</h4>
      </div>
      <div class="modal-body">
       
		<div class="row">
			<div class="col-sm-12">
				<input type="hidden" id="idFillQty" />
				<table id="tabelCommon" class="table table-condensed table-striped table-hover table-bordered">
					<thead>
						<tr>
							<th>Commodity</th>
							<th>Written in BL</th>
							<th>Qty</th>
							<th>Pkg</th>
							<th>GW/Kgs</th>
							<th>NW/Kgs</th>
							<th>Meas./M3</th>
							<th class="text-center" style="width:150px">*</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
		
      </div>
	  
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-default">OK</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
		
<div class="modal fade" id="detailtrucking">
  <div class="modal-dialog" style="width:1200px">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Date: <span id="date"></span></h4>
      </div>
      <div class="modal-body">
       
		<div class="row">
			<div class="col-sm-12">
				<input type="hidden" id="idTruckingInDetail" />
				<table id="tabelDetailTrucking" class="table table-condensed table-striped table-hover table-bordered">
					<thead>
						<tr>
							<th>Container No.</th>
							<th>CD</th>
							<th>Company Name</th>
							<th>Pengurus</th>
							<th>HP Pengurus</th>
							<th>Nopol</th>
							<th>Driver Name</th>
							<th>HP Driver</th>
							<th class="text-center" style="width:150px">*</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
		
      </div>
	  
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-default">OK</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="detaildata">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Detail Container</h4>
      </div>
      <div class="modal-body">
       
		<div class="row">
			<div class="col-sm-6">
				<form>
				
				  <div class="form-group">
					<label for="">Container Size</label>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;
						<span>40'HC</span>
					</p>
				  </div>
				  
				  <div class="form-group">
					<label for="">Container Type</label>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;
						<span>Dry Heavy Duty</span>
					</p>
				  </div>
				  
				  <div class="form-group">
					<label for="">Container Number</label>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;
						<span>FSCU84949404</span>
					</p>
				  </div>
				  
				  <div class="form-group">
					<label for="">Container Seal</label>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;
						<span>YMLU008873</span>
					</p>
				  </div>
				  
				</form>
			</div>
			<div class="col-sm-6">
				<form>
				
				  <div class="form-group">
					<label for="">Commodity</label>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;
						<span>SPAREPART MESIN GILING</span>
					</p>
				  </div>
				  
				  <div class="form-group">
					<label for="">Quantity</label>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;
						<span>500</span>
					</p>
				  </div>
				  
				  <div class="form-group">
					<label for="">Packaging</label>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;
						<span>BAG</span>
					</p>
				  </div>
				  
				  
				  
				</form>
			</div>
			
		</div>
				
      </div>
	  
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-default">OK</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script>

	$(document).ready(function(){
		getDataStuffing($("input#idjoborder").val());
		
		initiateTabelSize();
		initiateTabelTrucking();	

	});

	function  getDataStuffing(IDCostumer){

		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('joborder/getbydetail/stuffing') ?>"+"/"+IDCostumer,
			beforeSend	: function(){

			},
			success		: function(json){
				$("input#idjoborder").val(json.job_order_id);
				$("input#codestuffing").val(json.stuffing_id);
			},
			complete	: function(){
				
			}
		});		
	}
	
	// UNTUK TABEL CONTAINER
	
	function fillSelectSize(){
		var isi = "";
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('containersize/getall') ?>",
			success		: function(json){
				//$("select#size").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Size -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.container_size_code+'">'+row.container_size+'</option>';
				});
				
				isi = fillOption;
				//$("select#size").empty().append(fillOption);
			},
			error		: function(){
				alert("error");
			}
		});	
		
		return isi;
	}
	
	function fillSelectType(){
		var isi = "";
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('containertype/getall') ?>",
			success		: function(json){
				//$("select#type").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Type -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.container_type_code+'">'+row.container_type+'</option>';
				});

				isi = fillOption;
				//$("select#type").empty().append(fillOption);
			},
			error		: function(){
				alert("error");
			}
		});	
		
		return isi;
	}
	
	function initiateTabelSize(){
		var job_order_id = $("input#idjoborder").val();
		var no = 0;
		$("table#tabelSize tbody").empty();
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("joborder/getbydetail/size") ?>"+"/"+job_order_id,
			success		: function(json){	
				var optionSize = fillSelectSize();
				var optionType = fillSelectType();
				
				$.each(json, function(index, row) {
					var isiTrow = '';
					no = row.detail_size_id;
					
					isiTrow = '<tr id="'+no+'">';
					isiTrow += '<td><select class="form-control input-sm" name="size[]" id="size">'+optionSize+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="type[]" id="type">'+optionType+'</select></td>';
					isiTrow += '<td class="text-center">';
					isiTrow += '<button type="button" class="btn btn-xs btn-primary"  id="btnDetailContainer" onclick="return onClickDetailSize('+no+')">Fill Qty - <span class="badge">0</span></button> ';
					isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-danger" id="btnSaveSize" onclick="return onClickSaveSize('+no+')" >Save</button> ';
					isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-success" id="btnAddSize" onclick="return onClickAddSize('+no+')"> Add </button> ';
					isiTrow += '<input type="hidden" id="idSize" value="'+no+'" />';
					isiTrow += '</td>';
					isiTrow += '</tr>';
					
					$("table#tabelSize tbody").append(isiTrow);
					var thisRow = $("table#tabelSize tbody").find("tr#"+no);
					thisRow.find("select#size").val(row.container_size);
					thisRow.find("select#type").val(row.container_type);
				});
			},
			error		: function(){
				alert("error");
			}
		});	
		
		var number = no+1;
		var newRow = generateRowSize(number);
		$("table#tabelSize tbody").append(newRow);
	}
	
	function generateRowSize(no){
		var isiTrow = '';
		var optionSize = fillSelectSize();
		var optionType = fillSelectType();
	
		isiTrow = '<tr id="'+no+'">';
		isiTrow += '<td><select class="form-control input-sm" name="size[]" id="size">'+optionSize+'</select></td>';
		isiTrow += '<td><select class="form-control input-sm" name="type[]" id="type">'+optionType+'</select></td>';
		isiTrow += '<td class="text-center">';
		isiTrow += '<button type="button" class="btn btn-xs btn-primary" style="display:none" id="btnDetailContainer" onclick="return onClickDetailSize('+no+')">Fill Qty - <span class="badge">0</span></button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-danger" id="btnSaveSize" onclick="return onClickSaveSize('+no+')" >Save</button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnAddSize" onclick="return onClickAddSize('+no+')"> Add </button> ';
		isiTrow += '<input type="hidden" id="idSize" />';
		isiTrow += '</td>';
		isiTrow += '</tr>';
		
		return isiTrow;
	}
	
	function onClickAddSize(number){
		var tRow = $("table#tabelSize tbody").find("tr#"+number);
		var no = number+1;
		var isiTrow = generateRowSize(no);
		
		$("table#tabelSize tbody").append(isiTrow);
		tRow.find("button#btnAddSize").hide();
	
	}
	
	function onClickSaveSize(number){
		var tRow = $("table#tabelSize tbody").find("tr#"+number);
		var thisButton = tRow.find("button#btnSaveSize");
		
		var idjoborder = $("input#idjoborder").val();
		var size = tRow.find("select#size").val();
		var type = tRow.find("select#type").val();
		
		var btnDetailContainer = tRow.find("button#btnDetailContainer");
		
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			data		: {idjoborder:idjoborder, containersize: size, containertype: type},
			url			: "<?php echo base_url('joborder/commitdetail/size') ?>",
			success		: function(json){
				tRow.find("input#idSize").val(json);
				thisButton.hide();
				btnDetailContainer.show();
			},
			error		: function(){
				alert("error");
			}
		});	
	}
	
	function onClickDetailSize(number){
		var tRow = $("table#tabelSize tbody").find("tr#"+number);	
		var idSize = tRow.find("input#idSize").val();
		
		var modalContainer = $("div#detailContainer");
		modalContainer.find("input#idSizeInDetailContainer").val(idSize);
		
		var no = 0;
		modalContainer.find("table#tabelContainer tbody").empty();
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("joborder/getbydetail/container") ?>"+"/"+idSize,
			success		: function(json){
				$.each(json, function(index, row) {
					var isiTrow = '';
					no = row.detail_container_id;
					
					isiTrow = '<tr id="'+no+'">';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="containerNumber" id="containerNumber" value="'+row.container_number+'"></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="sealNumber" id="sealNumber" value="'+row.seal_number+'"></td>';
					isiTrow += '<td class="text-center">';
					isiTrow += '<button type="button" class="btn btn-xs btn-primary" id="btnDetailContainer" onclick="return onClickDetailContainer('+no+','+idSize+')">Fill Detail</button> ';
					isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-danger" id="btnSaveContainer" onclick="return onClickSaveContainer('+no+','+idSize+')" >Save</button> ';
					isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-success" id="btnAddContainer" onclick="return onClickAddContainer('+no+','+idSize+')"> Add </button> ';
					isiTrow += '<input type="hidden" id="idContainer" value="'+no+'"/>';
					isiTrow += '</td>';
					isiTrow += '</tr>';
					
					$("table#tabelContainer tbody").append(isiTrow);
					
				});
				
			},
			error		: function(){
				alert("error");
			},
			
		});	
			
		var no = no+1;
		var newRow = generateRowContainer(no,idSize);
		modalContainer.find("table#tabelContainer tbody").append(newRow);	
		modalContainer.modal("show");
	}
	
	// UNTUK TABEL CONTAINER SELESAI	


	// UNTUK TABEL DETAIL QTY 
	function generateRowContainer(no,id_size){
		var isiTrow = '';
	
		isiTrow = '<tr id="'+no+'">';
		isiTrow += '<td><input type="text" class="form-control input-sm" name="containerNumber" id="containerNumber"></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" name="sealNumber" id="sealNumber"></td>';
		isiTrow += '<td class="text-center">';
		isiTrow += '<button type="button" class="btn btn-xs btn-primary" style="display:none" id="btnDetailContainer" onclick="return onClickDetailContainer('+no+','+id_size+')">Fill Detail</button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-danger" id="btnSaveContainer" onclick="return onClickSaveContainer('+no+','+id_size+')" >Save</button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnAddContainer" onclick="return onClickAddContainer('+no+','+id_size+')"> Add </button> ';
		isiTrow += '<input type="hidden" id="idContainer" />';
		isiTrow += '</td>';
		isiTrow += '</tr>';
		
		return isiTrow;
	}					
	
	function onClickSaveContainer(number,id_size){
		var idjoborder = $("input#idjoborder").val();
		var tRow = $("table#tabelContainer tbody").find("tr#"+number);
		var thisButton = tRow.find("button#btnSaveContainer");
		
		var container = tRow.find("input#containerNumber").val();
		var seal = tRow.find("input#sealNumber").val();
		
		var btnDetail = tRow.find("button#btnDetailContainer");
		
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			data		: {idSize:id_size ,containerNumber: container, sealNumber: seal, idjoborder: idjoborder},
			url			: "<?php echo base_url('joborder/commitdetail/container') ?>",
			success		: function(json){
				tRow.find("input#idContainer").val(json);
				thisButton.hide();
				btnDetail.show();
			},
			error		: function(){
				alert("error");
			}
		});	
	}
	
	function onClickAddContainer(number,id_size){
		var tRow = $("table#tabelContainer tbody").find("tr#"+number);
		var no = number+1;
		var isiTrow = generateRowContainer(no,id_size);
		
		$("table#tabelContainer tbody").append(isiTrow);
	
		tRow.find("button#btnAddContainer").hide();
	}
	
	function onClickDetailContainer(number, id_size){
		var tRow = $("table#tabelContainer tbody").find("tr#"+number);	
		var idContainer = tRow.find("input#idContainer").val();
		
		var modalCommodity = $("div#detailcommodity");
		modalCommodity.find("input#idFillQty").val(idContainer);
		
		var no = 0;
		modalCommodity.find("table#tabelCommon tbody").empty();
		
		var job_order_id = $("input#idjoborder").val();
		var optionCommodity = fillSelectCommodity(job_order_id);
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("joborder/getbydetail/common") ?>"+"/"+idContainer,
			success		: function(json){
				$.each(json, function(index, row) {
					var isiTrow = '';
					no = row.detail_container_id;
					
					isiTrow = '<tr id="'+no+'">';
					isiTrow += '<td><select class="form-control input-sm" name="common" id="common" onclick="return onChangeCommon('+no+')">'+optionCommodity+'</select></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" id="written" readonly></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" id="qty" name="qty" value="'+row.qty+'"></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" id="package" readonly></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" id="gw" name="gw" value="'+row.gw+'" ></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" id="nw" name="nw" value="'+row.nw+'"></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" id="meas" name="meas" value="'+row.meas+'" ></td>';
					isiTrow += '<td class="text-center">';
					isiTrow += '<input type="hidden" id="idCommon" value="'+row.detail_commodity_id+'" />';
					isiTrow += '</td>';
					isiTrow += '</tr>';
					
					$("table#tabelCommon tbody").append(isiTrow);
					
					var thisRow = $("table#tabelCommon tbody").find("tr#"+no);
					thisRow.find("select#common").val(row.detail_common_id);
					onChangeCommon(no);
				});
				
			},
			error		: function(){
				alert("error");
			},
			
		});
		
		
		no = no+1;
		var newRow = generateRowCommon(no,idContainer);
		modalCommodity.find("table#tabelCommon tbody").append(newRow);
		modalCommodity.modal("show");
	}
	
	// UNTUK TABEL DETAIL QTY SELESAI
	
	
	// UNTUK TABEL FILL QTY
	function generateRowCommon(no,idContainer){
		var job_order_id = $("input#idjoborder").val();
		
		var isiTrow = '';
		var optionCommodity = fillSelectCommodity(job_order_id);

		isiTrow = '<tr id="'+no+'">';
		isiTrow += '<td><select class="form-control input-sm" name="common" id="common" onchange="return onChangeCommon('+no+')">'+optionCommodity+'</select></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" id="written" readonly></td>';
		isiTrow += '<td><input type="text" onblur="return onBlurQty('+no+')" class="form-control input-sm" id="qty" name="qty" ></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" id="package" readonly></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" id="gw" name="gw" ></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" id="nw" name="nw"></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" id="meas" name="meas"></td>';
		isiTrow += '<td class="text-center">';
		isiTrow += '<button type="button" class="btn btn-xs btn-danger" id="btnSaveCommon" onclick="return onClickSaveCommon('+no+','+idContainer+')" >Save</button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnAddCommon" onclick="return onClickAddCommon('+no+','+idContainer+')"> Add </button> ';
		isiTrow += '<input type="hidden" id="idCommon" />';
		isiTrow += '</td>';
		isiTrow += '</tr>';
		
		return isiTrow;
	}
	
	function onClickSaveCommon(number,id_container){
		var idjoborder = $("input#idjoborder").val();
		var tRow = $("table#tabelCommon tbody").find("tr#"+number);
		var thisButton = tRow.find("button#btnSaveCommon");
		
		var common = tRow.find("select#common").val();
		var qty = tRow.find("input#qty").val();
		var gw = tRow.find("input#gw").val();
		var nw = tRow.find("input#nw").val();
		var meas = tRow.find("input#meas").val();
		
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			data		: {id_container:id_container, common:common, qty:qty ,gw:gw, nw:nw, meas:meas, idjoborder:idjoborder},
			url			: "<?php echo base_url('joborder/commitdetail/common') ?>",
			success		: function(json){
				tRow.find("input#idCommon").val(json);
				thisButton.hide();
			},
			error		: function(){
				alert("error");
			}
		});	
	}
	
	function onClickAddCommon(number,id_container){	
		var tRow = $("table#tabelCommon tbody").find("tr#"+number);

		tRow.find("button#btnAddCommon").hide();
			
		var no = number+1;	
		var isiTrow = generateRowCommon(no,id_container);
		$("table#tabelCommon tbody").append(isiTrow);
	}
	
	function onChangeCommon(number){
		var tRow = $("table#tabelCommon tbody").find("tr#"+number);	
		
		var written = tRow.find("select#common option:selected").data("written");
		var packaging = tRow.find("select#common option:selected").data("packaging");
		//var qty = parseInt(tRow.find("select#common option:selected").data("qty"));
		//var qtyUsed = parseInt(tRow.find("select#common option:selected").data("used"));
	
		tRow.find("input#written").val(written);
		tRow.find("input#package").val(packaging);
		//tRow.find("input#qty").val(qty-qtyUsed);
	}
	
	function fillSelectCommodity(job_order_id){
		var isi = "";
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('joborder/getbydetail/commodity') ?>"+"/"+job_order_id,
			success		: function(json){
				var fillOption = "<option value=''>- Select Common -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option data-qty="'+row.qty+'" data-used="'+row.qty_used+'" data-packaging="'+row.packaging+'" data-written="'+row.written_in_bl+'" value="'+row.detail_common_id+'">'+row.commodity_name+'</option>';
				});

				isi = fillOption;
			},
			error		: function(){
				alert("error");
			}
		});	
		return isi;
	}
	
	function onBlurQty(number){
		var tRow = $("table#tabelCommon tbody").find("tr#"+number);	

		var thisValue = tRow.find("input#qty").val();
		var qty = parseInt(tRow.find("select#common option:selected").data("qty"));
		var qtyUsed = parseInt(tRow.find("select#common option:selected").data("used"));

		var sisa = qty-qtyUsed;

		if(thisValue > sisa){
			alert("Qty value can't more higher from "+sisa);
		}
	}
	// UNTUK TABEL FILL QTY SELESAI
	
	
	// UNTUK TABEL TRUCKING
								
	function initiateTabelTrucking(){
		var idjoborder = $("input#idjoborder").val();
		var no = 0;
		$("table#tabelTrucking tbody").empty();
		
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("joborder/getbydetail/trucking") ?>"+"/"+idjoborder,
			success		: function(json){	
				var optionWarehouse = fillSelectWarehouse();			
				$.each(json, function(index, row) {
					
					var isiTrow = '';
					no = row.detail_trucking_id;
					
					isiTrow = '<tr id="'+no+'">';
					isiTrow += '<td><input type="text" class="form-control input-sm datepicker" id="date" name="date[]" value="'+row.date+'" ></td>';
					isiTrow += '<td><select class="form-control input-sm" name="warehouse[]" id="warehouse" onchange="return onChangeWarehouse('+no+')" >'+optionWarehouse+'</select></td>';
					isiTrow += '<td><span id="address"></span></td>';
					isiTrow += '<td><span id="pic"></span></td>';
					isiTrow += '<td><span id="phone"></span></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" id="party" name="party[]" value="'+row.party+'" ></td>';
					isiTrow += '<td><span id="note"></span></td>';
					isiTrow += '<td class="text-center">';
					isiTrow += '<button type="button" class="btn btn-xs btn-primary"  id="btnDetailTrucking" onclick="return onClickDetailTrucking('+no+')">Detail - <span class="badge">0</span></button> ';
					isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-danger" id="btnSaveTrucking" onclick="return onClickSaveSizeTrucking('+no+')" >Save</button> ';
					isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-success" id="btnAddSizeTrucking" onclick="return onClickAddSizeTrucking('+no+')"> Add </button> ';
					isiTrow += '<input type="hidden" id="idTrucking" />';
					isiTrow += '</td>';
					isiTrow += '</tr>';
					
					$("table#tabelTrucking tbody").append(isiTrow);
					var thisRow = $("table#tabelTrucking tbody").find("tr#"+no);
					thisRow.find("select#warehouse").val(row.warehouse);
					onChangeWarehouse(no);
				});
			},
			error		: function(){
				alert("error");
			}
		});	
		
		var number = no+1;
		var newRow = generateRowTrucking(number);
		$("table#tabelTrucking tbody").append(newRow);
		
		$('.datepicker').datepicker({
			format: 'yyyy-mm-dd',
			todayHighlight: true,
			autoclose: true
		});
	}			
	
	function generateRowTrucking(no){
		var isiTrow = '';
		var optionWarehouse = fillSelectWarehouse();
	
		isiTrow = '<tr id="'+no+'">';
		isiTrow += '<td><input type="text" class="form-control input-sm datepicker" id="date" name="date[]"></td>';
		isiTrow += '<td><select class="form-control input-sm" name="warehouse[]" id="warehouse" onchange="return onChangeWarehouse('+no+')" >'+optionWarehouse+'</select></td>';
		isiTrow += '<td><span id="address"></span></td>';
		isiTrow += '<td><span id="pic"></span></td>';
		isiTrow += '<td><span id="phone"></span></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" id="party" name="party[]"></td>';
		isiTrow += '<td><span id="note"></span></td>';
		isiTrow += '<td class="text-center">';
		isiTrow += '<button type="button" class="btn btn-xs btn-primary" style="display:none" id="btnDetailTrucking" onclick="return onClickDetailTrucking('+no+')">Detail - <span class="badge">0</span></button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-danger" id="btnSaveTrucking" onclick="return onClickSaveSizeTrucking('+no+')" >Save</button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnAddSizeTrucking" onclick="return onClickAddSizeTrucking('+no+')"> Add </button> ';
		isiTrow += '<input type="hidden" id="idTrucking" />';
		isiTrow += '</td>';
		isiTrow += '</tr>';

		return isiTrow;
	}
	
	function onClickAddSizeTrucking(number){
		var tRow = $("table#tabelTrucking tbody").find("tr#"+number);
		var no = number+1;
		var isiTrow = generateRowTrucking(no);
		
		$("table#tabelTrucking tbody").append(isiTrow);
		
		tRow.find("button#btnAddSizeTrucking").hide();
		
		$('.datepicker').datepicker({
			format: 'yyyy-mm-dd',
			todayHighlight: true,
			autoclose: true
		});
	}
	
	function onClickSaveSizeTrucking(number){
		var tRow = $("table#tabelTrucking tbody").find("tr#"+number);
		var thisButton = tRow.find("button#btnSaveTrucking");
		
		var idjoborder = $("input#idjoborder").val();
		
		var date = tRow.find("input#date").val();
		var warehouse = tRow.find("select#warehouse").val();
		var party = tRow.find("input#party").val();
		
		var btnDetailTrucking = tRow.find("button#btnDetailTrucking");
		
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			data		: {idjoborder:idjoborder, date: date, warehouse: warehouse, party:party},
			url			: "<?php echo base_url('joborder/commitdetail/trucking') ?>",
			success		: function(json){
				tRow.find("input#idTrucking").val(json);
				thisButton.hide();
				btnDetailTrucking.show();
			},
			error		: function(){
				alert("error");
			}
		});	
	}
	
	
	function onClickDetailTrucking(number){
		var tRow = $("table#tabelTrucking tbody").find("tr#"+number);	
		var idTrucking = tRow.find("input#idTrucking").val();
		var date = tRow.find("input#date").val();
		
		var modalTrucking = $("div#detailtrucking");
		modalTrucking.find("span#date").html(date);
		modalTrucking.find("input#idTruckingInDetail").val(idTrucking);
		
		var no = 0;
		modalTrucking.find("table#tabelDetailTrucking tbody").empty();
			
		var no = no+1;
		var newRow = generateRowDetailTrucking(no,idTrucking);
		modalTrucking.find("table#tabelDetailTrucking tbody").append(newRow);	
		modalTrucking.modal("show");
	}
		
	function fillSelectWarehouse(){
		var isi = "";
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("costumer/getby/warehousing") ?>",
			success		: function(json){
				var fillOption = "<option value=''>- Select Warehouse -</option>";
				
				$.each(json, function(index, row) {
					var address = row.main_address + " " + row.main_city + " " + row.main_provincy + " " + row.main_country + " " + row.main_zipcode;
					
					fillOption += '<option data-address="'+address+'" data-phone="'+row.main_phone+'" data-pic="'+row.main_pic+'" data-note="'+row.note+'" value="'+row.costumer_code+'">'+row.costumer_name+'</option>';
				});
				isi = fillOption;
			},
			error		: function(){
				alert("error");
			}
		});	
		return isi;
	}
	
	function onChangeWarehouse(number){
		var tRow = $("table#tabelTrucking tbody").find("tr#"+number);	
		
		var address = tRow.find("select#warehouse option:selected").data("address");
		var pic = tRow.find("select#warehouse option:selected").data("pic");
		var phone = tRow.find("select#warehouse option:selected").data("phone");
		var note = tRow.find("select#warehouse option:selected").data("note");

		tRow.find("span#address").html(address);
		tRow.find("span#pic").html(pic);
		tRow.find("span#phone").html(phone);
		tRow.find("span#note").html(note);
	}	
	
	// UNTUK TABEL DETAIL TRUCKING 
	function generateRowDetailTrucking(no,id_trucking){
		var isiTrow = '';
		
		var idjoborder = $("input#idjoborder").val();
		var optionContainer = fillSelectContainer(idjoborder);
		var optionTrucking = fillSelectTrucking();
		
		isiTrow = '<tr id="'+no+'">';
		isiTrow += '<td><select class="form-control input-sm" name="container[]" id="container">'+optionContainer+'</select></td>';
		isiTrow += '<td><button type="button" class="btn btn-xs btn-success" data-toggle="modal" href="#detaildata">look</button></td>';
		isiTrow += '<td><select class="form-control input-sm" name="trucking" id="trucking" onchange="return onChangeTruckingCompany('+no+')">'+optionTrucking+'</select></td>';
		isiTrow += '<td><span id="name"></span></td>';
		isiTrow += '<td><span id="phone"></span></td>';
		isiTrow += '<td><select class="form-control input-sm" name="police" id="police" onchange="return onChangePolice('+no+')"></select></td>';
		isiTrow += '<td><span id="drivername"></span></td>';
		isiTrow += '<td><span id="driverphone"></span></td>';
		isiTrow += '<td class="text-center">';
		isiTrow += '<button type="button" class="btn btn-xs btn-danger" id="btnSaveDetailTruck" onclick="return onClickDetailTruck('+no+','+id_trucking+')" >Save</button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnAddDetailTruck" onclick="return onClickAddDetailTruck('+no+','+id_trucking+')"> Add </button> ';
		isiTrow += '<input type="hidden" id="idDetailTrucking" />';
		isiTrow += '</td>';
		isiTrow += '</tr>';
		
		return isiTrow;
	}					

	function fillSelectContainer(job_order_id){
		var isi = "";
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("joborder/getbydetail/containerbyjoborder") ?>"+"/"+job_order_id,
			success		: function(json){
				var fillOption = "<option value=''>- Select Container -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.detail_container_id+'">'+row.container_number+'</option>';
				});

				isi = fillOption;	
			},
			error		: function(){
				alert("error");
			},
			
		});	
		return isi;
	}
	
	function fillSelectTrucking(){
		var isi = "";
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("costumer/getby/trucking") ?>",
			success		: function(json){
				var fillOption = "<option value=''>- Select Trucking -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option data-phone="'+row.main_phone+'" value="'+row.costumer_code+'">'+row.costumer_name+'</option>';
				});

				isi = fillOption;	
			},
			error		: function(){
				alert("error");
			},
			
		});	
		return isi;
	}
	
	function onChangeTruckingCompany(number){
		var tRow = $("table#tabelDetailTrucking tbody").find("tr#"+number);	
		
		var companyID = tRow.find("select#trucking").val();
		var name = tRow.find("select#trucking option:selected").text();
		var phone = tRow.find("select#trucking option:selected").data("phone");
		
		tRow.find("span#name").html(name);
		tRow.find("span#phone").html(phone);

		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("truckdetail/getby/company") ?>"+"/"+companyID,
			success		: function(json){
				tRow.find("select#police").empty();
				var fillOption = "<option value=''>- Select Police No -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option data-name="'+row.driver+'" data-phone="'+row.driver_mobile+'" value="'+row.detail_truck_id+'">'+row.police_number+'</option>';
				});

				tRow.find("select#police").append(fillOption);
			},
			error		: function(){
				alert("error");
			},
			
		});	
		
	}
	
	function onChangePolice(number){
		var tRow = $("table#tabelDetailTrucking tbody").find("tr#"+number);	
		
		var police_no = tRow.find("select#police").val();
		var name = tRow.find("select#police option:selected").data("name");
		var phone = tRow.find("select#police option:selected").data("phone");
		
		tRow.find("span#drivername").html(name);
		tRow.find("span#driverphone").html(phone);
	}
	
</script>





<div class="tab-content padding tab-content-inline tab-content-bottom">
	<div class="tab-pane active">
	
		<form id="formcommodity">
			<input type="hidden" id="idjoborder" name="idjoborder" value="<?php echo $id_costumer ?>" />
			<input type="hidden" id="codecommodity" name="codecommodity" value="" />
			<label class="control-label" id="cargorow"><b>Cargo Type</b></label>
				
			<div id="fieldsetCommon">
				
			</div>
	
			<br>
			<div class="row">
				<div class="col-sm-6">
					<div class="table-responsive">
						<table id="tabelTotal" class="table table-condensed table-striped table-hover table-bordered">
							<thead>
								<tr>
									<th>Total Nett Weight</th>
									<th>Total Gross Weight</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<input type="text" class="form-control input-sm" id="nett" name="nett" value="0" readonly>
									</td>
									<td>
										<input type="text" class="form-control input-sm" id="gross" name="gross" value="0" readonly>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
				<div class="col-sm-2">
					<div class="table-responsive">
						<table id="tabelMeas" class="table table-condensed table-striped table-hover table-bordered">
							<thead>
								<tr>
									<th>Total Measurement</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<input type="text" class="form-control input-sm" id="totalmeass" name="totalmeass" value="0" readonly>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
			<br>
			<div class="row">
				<div class="col-sm-8">
					<div class="table-responsive" id="tabeldocumentneed">
						<table id="tableDocument" class="table table-condensed table-striped table-hover table-bordered">
							<caption class="bg-success">DOCUMENT NEED FOR HANDLING</caption>
							<thead>
								<tr>
									<th>Document Name</th>
									<th>Original</th>
									<th>Copy</th>
									<th>Legalized</th>
									<th>Ready</th>
									<th>Note</th>
									<th class="text-center">*</th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
			<br>
			
			<div class="row">
				<div class="col-sm-8">
					<div class="table-responsive">
						<table id="tableHandling" class="table table-condensed table-striped table-hover table-bordered">
							<caption class="bg-info">HANDLING INSTRUCTION (SOP & Shipper Request)</caption>
							<tbody>
								
							</tbody>
						</table>
					</div>
				</div>
				
				<div class="col-sm-4">
					<button type="button" class="btn btn-sm btn-danger">?</button>
				</div>
			</div>
			
			<hr>
			<div class="row">
				<div class="col-sm-4">
					<div class="pull-left">
						<button type="reset" class="btn btn-warning">RESET</button>
						<button type="submit" class="btn btn-primary" id="btnSave">SAVE</button>
					</div>
				</div>
				
				<div class="col-sm-8">
					<div class="pull-right">
						<button type="button" class="btn btn-info" id="btnPrevious">PREVIOUS</button>
						<button type="button" class="btn btn-success" id="btnNext">NEXT</button>
					</div>
				</div>
			</div>
			

		</form>
		
	</div>
</div>

<div class="modal fade" id="detailCargo">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Detail Cargo</h4>
      </div>
      <div class="modal-body">
       
		<form>
		  <div class="form-group">
		    <label for="cargo_code">Cargo Code</label>
		    <input type="text" class="form-control" id="cargo_code">
		  </div>
		  <div class="form-group">
		    <label for="cargo_name">Cargo Name</label>
		    <input type="text" class="form-control" id="cargo_name">
		  </div>
		  <div class="form-group">
		    <label for="cargo_desc">Cargo Description</label>
		    <textarea class="form-control" id="cargo_desc"> </textarea>
		  </div>	

		</form>	
		
      </div>
	  
      <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-default">OK</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>

	$(document).ready(function(){
		
		getDataCommodity($("input#idjoborder").val());
		
		$('form#formcommodity').bootstrapValidator({
			feedbackIcons : {
				valid : 'glyphicon glyphicon-ok',
				invalid : 'glyphicon glyphicon-remove',
				validating : 'glyphicon glyphicon-refresh'
			}
		}).on('success.form.bv', function(e) {
			e.preventDefault();
			var $form = $(e.target);
			var dataSerialize = $form.serialize();

			$.ajax({
				type		: "POST",
				dataType	: 'json',
				url			: "<?php echo base_url('joborder/commit/commodity') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					window.location.href = "<?php echo base_url('joborder/service/schedule') ?>" + "/"  + $("input#idjoborder").val();
				},
				complete	: function(){
					$('input#codecommodity').val('');
					//$('form#formcommodity')[0].reset();
					$('form#formcommodity').data('bootstrapValidator').resetForm();	
				}
			});
		});

		$("button#btnNext").click(function(){
			$("button#btnSave").trigger("click");
		});

		$("button#btnPrevious").click(function(){
			window.location.href = "<?php echo base_url('joborder/service/service') ?>" + "/"  + $("input#idjoborder").val();
		});
		
	});
	
	function getDataCommodity(IDCostumer){
		var tabelTotal = $("table#tabelTotal tbody");
		var tabelMeas = $("table#tabelMeas tbody");
		SchedulePageInitiation();
		initiateTabelCommon();
		inititateTabelDocument();
		inititateTabelHandling();

		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('joborder/getbydetail/commodityform') ?>"+"/"+IDCostumer,
			beforeSend	: function(){

			},
			success		: function(json){
				$("input#codecommodity").val(json.commodity_id);
				if(json.cargo_code != ""){
					$("input[type='radio']#"+json.cargo_code).prop("checked",true); DetailCargoClick(json.cargo_code);
				}
				tabelTotal.find("tr:first").find("input#nett").val(json.total_nett);
				tabelTotal.find("tr:first").find("input#gross").val(json.total_gross);
				tabelMeas.find("tr:first").find("input#totalmeass").val(json.total_meas);
			},
			complete	: function(){
				
			}
		});		
	}

	// UNTUK TABEL COMMON
	function initiateTabelCommon(){
		var idjoborder = $("input#idjoborder").val();
		var no = 0;
		$("div#fieldsetCommon").empty();
		
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("joborder/getbydetail/commodity") ?>"+"/"+idjoborder,
			success		: function(json){	
				var optionCommodity = fillSelectCommodity();
				var optionPackaging = fillSelectPackaging();
				var optionCurrency = fillSelectCurrency();

				if(json.length == 0){
					var number = no+1;
					var newRow = generateRowCommon(number);
					$("div#fieldsetCommon").append(newRow);
				}
				else{

					$.each(json, function(index, row) {
						var isiTrow = '';
						var styleNone = "";
						if(index == (json.length-1)){
							styleNone = "";
						}else{
							styleNone = "display:none";
						}
						no = row.detail_common_id;

						isiTrow = '<fieldset id="'+no+'">';
						isiTrow += '<hr>';
						isiTrow += '<div class="row">';
						isiTrow += '<div class="col-sm-2"><div class="form-group"><label>Common Name</label><select onchange="return onChangeCommodity('+no+')" class="form-control input-sm" id="commodity" name="commodity[]">'+optionCommodity+'</select></div></div>';
						isiTrow += '<div class="col-sm-2"><div class="form-group"><label>HS Code</label><input type="text" class="form-control input-sm" id="hscode" name="hscode[]" readonly></div></div>';
						isiTrow += '<div class="col-sm-2"><div class="form-group"><label>Written in BL</label><input value="'+row.written_in_bl+'" type="text" class="form-control input-sm" id="writteninbl" name="writteninbl[]"></div></div>';
						isiTrow += '<div class="col-sm-2"><div class="form-group"><label>Merk</label><input value="'+row.merk+'" type="text" class="form-control input-sm" id="merk" name="merk[]"></div></div>';
						isiTrow += '<div class="col-sm-2"><div class="form-group"><label>Type</label><input value="'+row.type+'" type="text" class="form-control input-sm" id="type" name="type[]"></div></div>';
						isiTrow += '<div class="col-sm-2"><div class="form-group"><label>Code</label><input <input value="'+row.code+'" type="text" class="form-control input-sm" id="code" name="code[]"></div></div>';
						isiTrow += '</div>';
						isiTrow += '<div class="row">';
						isiTrow += '<div class="col-sm-2"><div class="form-group"><label>Packaging</label><select class="form-control input-sm" id="packaging" name="packaging[]">'+optionPackaging+'</select></div></div>';
						isiTrow += '<div class="col-sm-1"><div class="form-group"><label>Qty/Pkg</label><input value="'+row.qty+'" type="text" class="form-control input-sm" id="qty" name="qty[]"></div></div>';
						isiTrow += '<div class="col-sm-1"><div class="form-group"><label>Gw/Kgs</label><input value="'+row.gw+'" onchange="return onChangeCalculate('+no+')" type="text" class="form-control input-sm" id="gw" name="gw[]"></div></div>';
						isiTrow += '<div class="col-sm-1"><div class="form-group"><label>Nw/Kgs</label><input value="'+row.nw+'" onchange="return onChangeCalculate('+no+')" type="text" class="form-control input-sm" id="nw" name="nw[]"></div></div>';
						isiTrow += '<div class="col-sm-1"><div class="form-group"><label>Meas.</label><input value="'+row.meas+'" onchange="return onChangeCalculate('+no+')" type="text" class="form-control input-sm" id="meas" name="meas[]"></div></div>';
						isiTrow += '<div class="col-sm-1"><div class="form-group"><label>Currency</label><select class="form-control input-sm" id="currency" name="currency[]">'+optionCurrency+'</select></div></div>';
						isiTrow += '<div class="col-sm-1"><div class="form-group"><label>@Price/Kgs</label><input value="'+row.price+'" onchange="return onChangeCalculate('+no+')" type="text" class="form-control input-sm" id="price" name="price[]" ></div></div>';
						isiTrow += '<div class="col-sm-2"><div class="form-group"><label>Amount</label><input value="'+row.amount+'" type="text" class="form-control input-sm" id="amount" name="amount[]" readonly></div></div>';
						isiTrow += '<div class="col-sm-2"><br>';
						isiTrow += '<button type="button" class="btn btn-xs btn-danger" id="btnRemoveCommon" onclick="return onClickRemoveCommon('+no+')"> Remove </button> ';
						isiTrow += '<button style="'+styleNone+'" type="button" class="btn btn-xs btn-success" id="btnAddCommon" onclick="return onClickAddCommon('+no+')"> Add </button>';
						isiTrow += '<input type="hidden" id="idCommon" value="'+no+'"/>';	
						isiTrow += '</div';
						isiTrow += '</div>';
						isiTrow += '</fieldset>';
						
						$("div#fieldsetCommon").append(isiTrow);
						var thisRow = $("div#fieldsetCommon").find("fieldset#"+no);
						thisRow.find("select#commodity").val(row.common_name); onChangeCommodity(no);
						thisRow.find("select#packaging").val(row.package_code);
						thisRow.find("select#currency").val(row.currency);

					});
				}
			},
			error		: function(){
				alert("error");
			},
			complete	: function(){
				calculateTotal();
			}
		});	
		
	}

	function generateRowCommon(no){
		var isiTrow = '';
		var optionCommodity = fillSelectCommodity();
		var optionPackaging = fillSelectPackaging();
		var optionCurrency = fillSelectCurrency();
		
		isiTrow = '<fieldset id="'+no+'">';
		isiTrow += '<hr>';
		isiTrow += '<div class="row">';
		isiTrow += '<div class="col-sm-2"><div class="form-group"><label>Common Name</label><select onchange="return onChangeCommodity('+no+')" class="form-control input-sm" id="commodity" name="commodity[]">'+optionCommodity+'</select></div></div>';
		isiTrow += '<div class="col-sm-2"><div class="form-group"><label>HS Code</label><input type="text" class="form-control input-sm" id="hscode" name="hscode[]" readonly></div></div>';
		isiTrow += '<div class="col-sm-2"><div class="form-group"><label>Written in BL</label><input type="text" class="form-control input-sm" id="writteninbl" name="writteninbl[]"></div></div>';
		isiTrow += '<div class="col-sm-2"><div class="form-group"><label>Merk</label><input type="text" class="form-control input-sm" id="merk" name="merk[]"></div></div>';
		isiTrow += '<div class="col-sm-2"><div class="form-group"><label>Type</label><input type="text" class="form-control input-sm" id="type" name="type[]"></div></div>';
		isiTrow += '<div class="col-sm-2"><div class="form-group"><label>Code</label><input type="text" class="form-control input-sm" id="code" name="code[]"></div></div>';
		isiTrow += '</div>';
		isiTrow += '<div class="row">';
		isiTrow += '<div class="col-sm-2"><div class="form-group"><label>Packaging</label><select class="form-control input-sm" id="packaging" name="packaging[]">'+optionPackaging+'</select></div></div>';
		isiTrow += '<div class="col-sm-1"><div class="form-group"><label>Qty/Pkg</label><input type="text" class="form-control input-sm" id="qty" name="qty[]"></div></div>';
		isiTrow += '<div class="col-sm-1"><div class="form-group"><label>Gw/Kgs</label><input onchange="return onChangeCalculate('+no+')" type="text" class="form-control input-sm" id="gw" name="gw[]"></div></div>';
		isiTrow += '<div class="col-sm-1"><div class="form-group"><label>Nw/Kgs</label><input onchange="return onChangeCalculate('+no+')" type="text" class="form-control input-sm" id="nw" name="nw[]"></div></div>';
		isiTrow += '<div class="col-sm-1"><div class="form-group"><label>Meas.</label><input onchange="return onChangeCalculate('+no+')" type="text" class="form-control input-sm" id="meas" name="meas[]"></div></div>';
		isiTrow += '<div class="col-sm-1"><div class="form-group"><label>Currency</label><select class="form-control input-sm" id="currency" name="currency[]">'+optionCurrency+'</select></div></div>';
		isiTrow += '<div class="col-sm-1"><div class="form-group"><label>@Price/Kgs</label><input onchange="return onChangeCalculate('+no+')" type="text" class="form-control input-sm" id="price" name="price[]" ></div></div>';
		isiTrow += '<div class="col-sm-2"><div class="form-group"><label>Amount</label><input value="0" type="text" class="form-control input-sm" id="amount" name="amount[]" readonly></div></div>';
		isiTrow += '<div class="col-sm-2"><br>';
		isiTrow += '<button type="button" class="btn btn-xs btn-danger" id="btnRemoveCommon" onclick="return onClickRemoveCommon('+no+')"> Remove </button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnAddCommon" onclick="return onClickAddCommon('+no+')"> Add </button>';
		isiTrow += '<input type="hidden" id="idCommon" />';	
		isiTrow += '</div';
		isiTrow += '</div>';
		isiTrow += '</fieldset>';

		return isiTrow;
	}


	function onClickAddCommon(number){
		var tRow = $("div#fieldsetCommon").find("fieldset#"+number);
		var no = number+1;
		var isiTrow = generateRowCommon(no);
		$("div#fieldsetCommon").append(isiTrow);
		tRow.find("button#btnAddCommon").hide();
	}

	function onClickRemoveCommon(number){
		var no = number-1;
		var bRow = $("div#fieldsetCommon").find("fieldset#"+no);
		var tRow = $("div#fieldsetCommon").find("fieldset#"+number);
		bRow.find("button#btnAddCommon").show();
		tRow.remove();
	}

	function onChangeCommodity(number){
		var tRow = $("div#fieldsetCommon").find("fieldset#"+number);
		var hscode = tRow.find("select#commodity option:selected").data("hscode");

		tRow.find("input#hscode").val(hscode);
	}

	function onChangeCalculate(number){
		var tRow =$("div#fieldsetCommon").find("fieldset#"+number);		

		var nw = tRow.find("input#nw").val();
		var price = tRow.find("input#price").val();
		
		nw = ((nw == "") ? 0 : parseInt(nw));
		price = ((price == "") ? 0 : parseInt(price));

		tRow.find("input#amount").val(nw*price);
		
		calculateTotal();
	}

	function calculateTotal(){
		var totalGw = 0;
		var totalNw = 0;
		var totalMeas = 0;

		$("div#fieldsetCommon").find("fieldset").each(function(){
			totalGw = totalGw + parseInt($(this).find("input#gw").val());
			totalNw = totalNw + parseInt($(this).find("input#nw").val());
			totalMeas = totalMeas + parseInt($(this).find("input#meas").val());

		});
		var tabelTotal = $("table#tabelTotal tbody");
		var tabelMeas = $("table#tabelMeas tbody");
		
		tabelTotal.find("tr:first").find("input#nett").val(totalNw);
		tabelTotal.find("tr:first").find("input#gross").val(totalGw);
		tabelMeas.find("tr:first").find("input#totalmeass").val(totalMeas);
	}

	// UNTUK TABEL COMMON SELESAI

	// UNTUK TABEL DOCUMENT
	function inititateTabelDocument(){
		var idjoborder = $("input#idjoborder").val();
		var no = 0;
		$("table#tableDocument tbody").empty();


		var number = no+1;
		var newRow = generateRowDocument(number);
		$("table#tableDocument tbody").append(newRow);
	}

	function generateRowDocument(no){
		var isiTrow = '';
		var optionDocument = fillSelectDocument();
	
		isiTrow = '<tr id="'+no+'">';
		isiTrow += '<td><select class="form-control input-sm" id="document" name="document">'+optionDocument+'</select></td>';
		isiTrow += '<td><button type="button" class="btn btn-sm btn-primary">Upload</button></td>';
		isiTrow += '<td><button type="button" class="btn btn-sm btn-primary">Upload</button></td>';
		isiTrow += '<td><button type="button" class="btn btn-sm btn-primary">Upload</button></td>';
		isiTrow += '<td><select class="form-control input-sm"><option> Yes </option><option> Not Yet </option></select></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" id="note" name="note[]"></td>';
		isiTrow += '<td class="text-center">';
		isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnAddDocument" onclick="return onClickAddDocument('+no+')"> Add </button> ';
		isiTrow += '<input type="hidden" id="idDocument" />';
		isiTrow += '</td>';
		isiTrow += '</tr>';

		return isiTrow;
	}
	
	function onClickAddDocument(number){
		var tRow = $("table#tableDocument tbody").find("tr#"+number);
		var no = number+1;
		var isiTrow = generateRowDocument(no);
		$("table#tableDocument tbody").append(isiTrow);
		tRow.find("button#btnAddDocument").hide();
	}
	// UNTUK TABEL DOCUMENT SELESAI


	// UNTUK TABEL HANDLING INSTRUCTION
	function inititateTabelHandling(){
		var idjoborder = $("input#idjoborder").val();
		var no = 0;
		$("table#tableHandling tbody").empty();

		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("joborder/getbydetail/instruction") ?>"+"/"+idjoborder,
			success		: function(json){	
				
				if(json.length == 0){
					var number = no+1;
					var newRow = generateRowHandling(number);
					$("table#tableHandling tbody").append(newRow);
				}
				else{
					$.each(json, function(index, row) {

						var isiTrow = '';
						var styleNone = "";
						if(index == (json.length-1)){
							styleNone = "";
						}else{
							styleNone = "display:none";
						}

						no = row.detail_instruction_id;
						
						isiTrow = '<tr id="'+no+'">';
						isiTrow += '<td><input value="'+row.instruction+'" type="text" class="form-control input-sm" id="instruction" name="instruction[]"></td>';
						isiTrow += '<td class="text-center">';
						isiTrow += '<button type="button" class="btn btn-xs btn-danger" id="btnRemoveHandling" onclick="return onClickRemoveHandling('+no+')"> Delete </button> ';
						isiTrow += '<button style="'+styleNone+'" type="button" class="btn btn-xs btn-success" id="btnAddHandling" onclick="return onClickAddHandling('+no+')"> Add </button> ';
						isiTrow += '<input type="hidden" id="idHandling" />';
						isiTrow += '</td>';
						isiTrow += '</tr>';
						
						$("table#tableHandling tbody").append(isiTrow);
					});
				}
				
			},
			error		: function(){
				alert("error");
			}
		});	
	
	}

	function generateRowHandling(no){
		var isiTrow = '';
		var optionDocument = fillSelectDocument();
	
		isiTrow = '<tr id="'+no+'">';
		isiTrow += '<td><input type="text" class="form-control input-sm" id="instruction" name="instruction[]"></td>';
		isiTrow += '<td class="text-center" width="120px">';
		isiTrow += '<button type="button" class="btn btn-xs btn-danger" id="btnRemoveHandling" onclick="return onClickRemoveHandling('+no+')"> Delete </button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnAddHandling" onclick="return onClickAddHandling('+no+')"> Add </button> ';
		isiTrow += '<input type="hidden" id="idHandling" />';
		isiTrow += '</td>';
		isiTrow += '</tr>';

		return isiTrow;
	}

	function onClickAddHandling(number){
		var tRow = $("table#tableHandling tbody").find("tr#"+number);
		var no = number+1;
		var isiTrow = generateRowHandling(no);
		$("table#tableHandling tbody").append(isiTrow);
		tRow.find("button#btnAddHandling").hide();
	}

	function onClickRemoveHandling(number){
		var no = number-1;
		var bRow = $("table#tableHandling tbody").find("tr#"+no);
		var tRow = $("table#tableHandling tbody").find("tr#"+number);
		bRow.find("button#btnAddHandling").show();
		tRow.remove();
	}

	// UNTUK TABEL HANDLING INSTRUCTION SELESAI

	function SchedulePageInitiation(){
		/* INISISASI RADIO BUTTON TYPE CARGO */
		var dataCargo = getCargo();
		var isiCargo = '<div class="row">';
		var no = 1;
		$.each(dataCargo, function(index, row) {	
			if(no == 4){
				isiCargo += '<div class="row">';
			}
			isiCargo += '<div class="col-sm-3">';
			isiCargo += '<div class="radio"><label>';
			isiCargo += '<input onclick="DetailCargoClick(\''+row.cargo_code+'\')" type="radio" name="cargotype" value="'+row.cargo_code+'" id="'+row.cargo_code+'">'+row.cargo_type+'</label>';	
			isiCargo += '&nbsp;&nbsp';	
			isiCargo += '<a onclick="return showModal(\''+row.cargo_code+'\',\''+row.cargo_type+'\',\''+row.cargo_description+'\')" class="btn btn-xs btn-success detailcargo" id="'+row.cargo_code+'" style="display:none">detail cargo</a>';		
			isiCargo += '</div>';		
			isiCargo += '</div>';	

			if(no == 4){
				isiCargo += '</div>';
				no = 0;
			}

			no++;
		});
		isiCargo += '</div>';
		$(isiCargo).insertAfter( "label#cargorow" );
		//$("label#cargorow").append(isiCargo);
		/* INISISASI RADIO BUTTON TYPE CARGO END */
		
	}
	
	function DetailCargoClick(index){
		$("a.detailcargo").hide();
		$("a.detailcargo#"+index).show();
	}

	function showModal(code,type,description){
		var modal = $("div#detailCargo");
		modal.find("input#cargo_code").val(code);
		modal.find("input#cargo_name").val(type);
		modal.find("textarea#cargo_desc").val(description);

		modal.modal("show");
	}
	
	function getCargo(){	
		var result;
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('cargo/getall') ?>",
			success		: function(json){
				result = json;
			},
			error		: function(){
				alert("error");
			}
		});
		return result;
	}

	function fillSelectCommodity(){
		var isi = "";
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('commodity/getall') ?>",
			success		: function(json){
				var fillOption = "<option value=''>- Select Commodity -</option>";
				$.each(json, function(index, row) {
					fillOption += '<option data-hscode="'+row.hs_code+'" value="'+row.commodity_code+'">'+row.commodity_name+'</option>';
				});
				isi = fillOption;	
			}
		});
		return isi;
	}
	
	function fillSelectPackaging(){
		var isi = "";
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('packaging/getall') ?>",
			success		: function(json){
				var fillOption = "<option value=''>- Select Packaging -</option>";
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.package_code+'">'+row.packaging+'</option>';
				});
				isi = fillOption;		
			}
		});
		return isi;
	}
	
	function fillSelectCurrency(){
		var isi = "";
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('currency/getall') ?>",
			success		: function(json){
				var fillOption = "<option value=''>- Select Currency -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.currency_code+'">'+row.currency_name+' ('+row.currency_symbol+')</option>';
				});
				isi = fillOption;		
			}
		});
		return isi;
	}
	
	function fillSelectDocument(){
		var isi = "";
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('document/getall') ?>",
			success		: function(json){
				var fillOption = "<option value=''>- Select Document -</option>";
				
				$.each(json, function(index, row) {
	
					fillOption += '<option value="'+row.doc_code+'">'+row.doc_name+'</option>';
				});
				isi = fillOption;	
			}
		});
		return isi;
	}
	
	
</script>
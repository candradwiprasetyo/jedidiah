<div class="tab-content padding tab-content-inline tab-content-bottom">
	<div class="tab-pane active">

		<form id="formdocumentation" class="form-horizontal" role="form">
			<input type="hidden" id="idjoborder" name="idjoborder" value="<?php echo $id_costumer ?>" />
			<input type="hidden" id="codedocumentation" name="codedocumentation" value="" />
			
			<div class="form-group">
				<label class="col-sm-3 control-label">Costumer SI No | Date</label>
				<div class="col-sm-3">
					<input type="text" class="form-control input-sm" name="costumersi" id="costumersi">
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label">AJU Number</label>
				<div class="col-sm-3">
					<input type="text" class="form-control input-sm" name="ajunumber" id="ajunumber">
				</div>
				<label class="col-sm-1 control-label">Date</label>
				<div class="col-sm-2">
					<input type="text" class="form-control input-sm datepicker" name="ajudate" id="ajudate">
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label">PEB / PIB Number</label>
				<div class="col-sm-3">
					<input type="text" class="form-control input-sm" name="pebnumber" id="pebnumber">
				</div>
				<label class="col-sm-1 control-label">Date</label>
				<div class="col-sm-2">
					<input type="text" class="form-control input-sm datepicker" name="pebdate" id="pebdate">
				</div>
			</div>
			<hr>
			<div class="form-group">
				<label class="col-sm-3 control-label"></label>
				<div class="col-sm-2">
					<button type="button" class="btn btn-sm btn-success">Invoice & Pack List</button>
				</div>
				<div class="col-sm-2">
					<button type="button" class="btn btn-sm btn-danger">Create SI to Vendor</button>
				</div>
			</div>
			<hr>	
			
			<div class="table-responsive">
				<table id="tabelbl" class="table table-condensed table-striped table-hover table-bordered">
					<caption class="bg-primary">Ocean Bill of Leading</caption>
					<thead>
						<tr>
							<th>BL Type</th>
							<th>Number</th>
							<th>Original</th>
							<th>Copy</th>
							<th>Freight</th>
							<th>Status</th>
							<th>Movement</th>
							<th>Load Type</th>
							<th>Note</th>
							<th class="text-center" style="width:150px">*</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
			
			<br>
			
			<div class="table-responsive">
				<table id="tabelRequest" class="table table-condensed table-striped table-hover table-bordered">
					<caption class="bg-primary">Shipper/ Consignee Request Document</caption>
					<thead>
						<tr>
							<th>Document Name</th>
							<th>Number</th>
							<th>Original</th>
							<th>Copy</th>
							<th>Legalisir</th>
							<th>Note</th>
							<th class="text-center" style="width:150px">*</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
				
			<br>
			
			<div class="well well-sm text-center" >INSURANCE</div>
		
			<div class="form-group">
				<label class="col-sm-3 control-label">Insurance</label>
				<div class="col-sm-6">
					<select class="form-control input-sm" name="insurance" id="insurance">
						<option value="">- Select One Below -</option>
						<option value="Cover by Us">Cover by Us</option>
						<option value="Cover by Consignee">Cover by Consignee</option>
						<option value="Cover by Shipper">Cover by Shipper</option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label">Insurance Condition</label>
				<div class="col-sm-6">
					<select class="form-control input-sm" name="insurancecondition" id="insurancecondition">
						<option value="">- Select One Below -</option>
						<option value="ICC A">ICC A</option>
						<option value="ICC B">ICC B</option>
						<option value="ICC C">ICC C</option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label">Insurance Value</label>
				<div class="col-sm-6">
					<select class="form-control input-sm" name="insurancevalue" id="insurancevalue">
						<option value="">- Select One Below -</option>
						<option value="IV">As Invoice Value</option>
						<option value="IVF">Invoice Value + Freight</option>
						<option value="REQ">As Per Request</option>
					</select>
				</div>
			</div>
		
			<div class="well well-sm text-center" >SHIPPING DOCUMENTS</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label">Sent Shipping Doc To</label>
				<div class="col-sm-6">
					<select name="shippingdoc" id="shippingdoc" style="width:100%"></select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label">Address</label>
				<div class="col-sm-6">
					<textarea class="form-control" name="address" id="address" readonly></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label">Phone / Fax</label>
				<div class="col-sm-6">
					<input type="text" class="form-control input-sm" name="phone" id="phone" readonly>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label">PIC</label>
				<div class="col-sm-6">
					<input type="text" class="form-control input-sm" name="pic" id="pic" readonly>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label">Shipping Doc Sent By</label>
				<div class="col-sm-3">
					<div class="radio">
						<label>
						<input type="radio" name="sentby" id="us" value="us">By Us</label>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="radio">
						<label>
						<input type="radio" name="sentby" id="courrier" value="courrier">By Courrier</label>
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label"></label>
				<div class="col-sm-3">
					<select class="employee" style="width:100%" name="employee" id="employee" disabled>
						<option>Select Employee</option>
					</select>
				</div>
				<div class="col-sm-3">
					<select class="courrier" style="width:100%" name="courrier" id="courrier" disabled>
						<option>Select Courrier</option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-3 control-label"></label>
				<div class="col-sm-3">
					<input type="text" class="form-control input-sm employee" name="deliverynumber" id="deliverynumber" placeholder="Delivery Number" disabled>
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control input-sm courrier" name="receiptnumber" id="receiptnumber" placeholder="Receipt Number" disabled>
				</div>
			</div>
			
			<hr>
			<div class="row">
				<div class="col-sm-4">
					<div class="pull-left">
						<button type="reset" class="btn btn-warning">RESET</button>
						<button type="submit" class="btn btn-primary">SAVE</button>
					</div>
				</div>
				
				<div class="col-sm-8">
					<div class="pull-right">
						<button type="button" class="btn btn-info">PREVIOUS</button>
					</div>
				</div>
			</div>
			
		</form>
								
	</div>
</div>
					
<div class="modal fade" id="workingDetail">
  <div class="modal-dialog" style="width:1100px">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Working Detail</h4>
        <div class="row">
        	<div class="col-sm-6">
        		<h6><span id="title">BL Type</span>: <strong id="blTypeInModal"></strong></h6>
        	</div>
        	<div class="col-sm-6">
        		<h6>Number: <strong id="numberInModal"></strong></h6>
        	</div>
        </div>
      </div>
      <div class="modal-body">
       
		<div class="row">
			<div class="col-sm-12">

				<form id="formWorkingDetail" class="form-horizontal">
				  
				  <div class="form-group">
				    <label for="idWorkingDetail" class="col-sm-6 control-label"></label>
				    <div class="col-sm-3">
				       <input type="hidden" class="form-control" id="idWorkingDetail" name="idWorkingDetail" />
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="col-sm-3 control-label"><b>Action</b></label>
				    <label class="col-sm-2 control-label" style="text-align:center"><b>Status</b></label>
				   	<label class="col-sm-2 control-label" style="text-align:center"><b>Start</b></label>
				   	<label class="col-sm-2 control-label" style="text-align:center"><b>End</b></label>
				   	<label class="col-sm-3 control-label" style="text-align:center"><b>Keterangan</b></label>
				  </div>

				  
				  <div class="form-group">
				    <label for="kirimData" class="col-sm-3 control-label">Kirim data BL ke shipping line</label>
				    <div class="col-sm-2">
				      <select class="form-control" id="kirimData" name="kirimData">
				      	<option value="0">Not Yet</option>
				      	<option value="1">Ready</option>
				      </select>
				    </div>
				    <div class="col-sm-2">
				      <input type="text" class="form-control" id="kirimDataStart" name="kirimDataStart" readonly />
				    </div>
				    <div class="col-sm-2">
				      <input type="text" class="form-control" id="kirimDataEnd" name="kirimDataEnd" readonly />
				    </div>
				    <div class="col-sm-3">
				      <input type="text" class="form-control" id="kirimDataKet" name="kirimDataKet" />
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="terimaDraft" class="col-sm-3 control-label">Terima draft BL dari shipping</label>
				    <div class="col-sm-2">
				      <select class="form-control" id="terimaDraft" name="terimaDraft">
				      	<option value="0">Not Yet</option>
				      	<option value="1">Ready</option>
				      </select>
				    </div>
				    <div class="col-sm-2">
				      <input type="text" class="form-control" id="terimaDraftStart" name="terimaDraftStart" readonly />
				    </div>
				    <div class="col-sm-2">
				      <input type="text" class="form-control" id="terimaDraftEnd" name="terimaDraftEnd" readonly />
				    </div>
				    <div class="col-sm-3">
				      <input type="text" class="form-control" id="terimaDraftKet" name="terimaDraftKet" />
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="cekDraft" class="col-sm-3 control-label">Cek draft BL sesuai data fix</label>
				    <div class="col-sm-2">
				      <select class="form-control" id="cekDraft" name="cekDraft">
				      	<option value="0">Not Yet</option>
				      	<option value="1">Ready</option>
				      </select>
				    </div>
				    <div class="col-sm-2">
				      <input type="text" class="form-control" id="cekDraftStart" name="cekDraftStart" readonly />
				    </div>
				    <div class="col-sm-2">
				      <input type="text" class="form-control" id="cekDraftEnd" name="cekDraftEnd" readonly />
				    </div>
				    <div class="col-sm-3">
				      <input type="text" class="form-control" id="cekDraftKet" name="cekDraftKet" />
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="draftOk" class="col-sm-3 control-label">Draft BL oke siap kirim ke costumer</label>
				    <div class="col-sm-2">
				      <select class="form-control" id="draftOk" name="draftOk">
				      	<option value="0">Not Yet</option>
				      	<option value="1">Ready</option>
				      </select>
				    </div>
				    <div class="col-sm-2">
				      <input type="text" class="form-control" id="draftOkStart" name="draftOkStart" readonly />
				    </div>
				    <div class="col-sm-2">
				      <input type="text" class="form-control" id="draftOkEnd" name="draftOkEnd" readonly />
				    </div>
				    <div class="col-sm-3">
				      <input type="text" class="form-control" id="draftOkKet" name="draftOkKet" />
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="kirimDraft" class="col-sm-3 control-label">Kirim draft BL ke costumer</label>
				    <div class="col-sm-2">
				      <select class="form-control" id="kirimDraft" name="kirimDraft">
				      	<option value="0">Not Yet</option>
				      	<option value="1">Ready</option>
				      </select>
				    </div>
				    <div class="col-sm-2">
				      <input type="text" class="form-control" id="kirimDraftStart" name="kirimDraftStart" readonly />
				    </div>
				    <div class="col-sm-2">
				      <input type="text" class="form-control" id="kirimDraftEnd" name="kirimDraftEnd" readonly />
				    </div>
				    <div class="col-sm-3">
				      <input type="text" class="form-control" id="kirimDraftKet" name="kirimDraftKet" />
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="terimaKonfirmasi" class="col-sm-3 control-label">Menerima konfirmasi OK dari costumer</label>
				    <div class="col-sm-2">
				      <select class="form-control" id="terimaKonfirmasi" name="terimaKonfirmasi">
				      	<option value="0">Not Yet</option>
				      	<option value="1">Ready</option>
				      </select>
				    </div>
				    <div class="col-sm-2">
				      <input type="text" class="form-control" id="terimaKonfirmasiStart" name="terimaKonfirmasiStart" readonly />
				    </div>
				    <div class="col-sm-2">
				      <input type="text" class="form-control" id="terimaKonfirmasiEnd" name="terimaKonfirmasiEnd" readonly />
				    </div>
				    <div class="col-sm-3">
				      <input type="text" class="form-control" id="terimaKonfirmasiKet" name="terimaKonfirmasiKet" />
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="kirimKonfirmasi" class="col-sm-3 control-label">Kirim konfirmasi OK ke shipping line</label>
				    <div class="col-sm-2">
				      <select class="form-control" id="kirimKonfirmasi" name="kirimKonfirmasi">
				      	<option value="0">Not Yet</option>
				      	<option value="1">Ready</option>
				      </select>
				    </div>
				    <div class="col-sm-2">
				      <input type="text" class="form-control" id="kirimKonfirmasiStart" name="kirimKonfirmasiStart" readonly />
				    </div>
				    <div class="col-sm-2">
				      <input type="text" class="form-control" id="kirimKonfirmasiEnd" name="kirimKonfirmasiEnd" readonly />
				    </div>
				    <div class="col-sm-3">
				      <input type="text" class="form-control" id="kirimKonfirmasiKet" name="kirimKonfirmasiKet" />
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="cetakOriginal" class="col-sm-3 control-label">Cetak original MBL</label>
				    <div class="col-sm-2">
				      <select class="form-control" id="cetakOriginal" name="cetakOriginal">
				      	<option value="0">Not Yet</option>
				      	<option value="1">Ready</option>
				      </select>
				    </div>
				    <div class="col-sm-2">
				      <input type="text" class="form-control" id="cetakOriginalStart" name="cetakOriginalStart" readonly />
				    </div>
				    <div class="col-sm-2">
				      <input type="text" class="form-control" id="cetakOriginalEnd" name="cetakOriginalEnd" readonly />
				    </div>
				    <div class="col-sm-3">
				      <input type="text" class="form-control" id="cetakOriginalKet" name="cetakOriginalKet" />
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="ambilOriginal" class="col-sm-3 control-label">Ambil original MBL</label>
				    <div class="col-sm-2">
				      <select class="form-control" id="ambilOriginal" name="ambilOriginal">
				      	<option value="0">Not Yet</option>
				      	<option value="1">Ready</option>
				      </select>
				    </div>
				    <div class="col-sm-2">
				      <input type="text" class="form-control" id="ambilOriginalStart" name="ambilOriginalStart" readonly />
				    </div>
				    <div class="col-sm-2">
				      <input type="text" class="form-control" id="ambilOriginalEnd" name="ambilOriginalEnd" readonly />
				    </div>
				    <div class="col-sm-3">
				      <input type="text" class="form-control" id="ambilOriginalKet" name="ambilOriginalKet" />
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="kirimOriginal" class="col-sm-3 control-label">Kirim original MBL</label>
				    <div class="col-sm-2">
				      <select class="form-control" id="kirimOriginal" name="kirimOriginal">
				      	<option value="0">Not Yet</option>
				      	<option value="1">Ready</option>
				      </select>
				    </div>
				    <div class="col-sm-2">
				      <input type="text" class="form-control" id="kirimOriginalStart" name="kirimOriginalStart" readonly />
				    </div>
				    <div class="col-sm-2">
				      <input type="text" class="form-control" id="kirimOriginalEnd" name="kirimOriginalEnd" readonly />
				    </div>
				    <div class="col-sm-3">
				      <input type="text" class="form-control" id="kirimOriginalKet" name="kirimOriginalKet" />
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="telexRelease" class="col-sm-3 control-label">Telex release original MBL</label>
				    <div class="col-sm-2">
				      <select class="form-control" id="telexRelease" name="telexRelease">
				      	<option value="0">Not Yet</option>
				      	<option value="1">Ready</option>
				      </select>
				    </div>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="telexReleaseKet" name="telexReleaseKet" />
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="mblFinished" class="col-sm-3 control-label">MBL finished</label>
				    <div class="col-sm-2">
				      <select class="form-control" id="mblFinished" name="mblFinished">
				      	<option value="0">Not Yet</option>
				      	<option value="1">Ready</option>
				      </select>
				    </div>
				    <div class="col-sm-7">
				      <input type="text" class="form-control" id="mblFinishedKet" name="mblFinishedKet" />
				    </div>
				  </div>
				 
				</form>

			</div>
		</div>
		
      </div>
	  
      <div class="modal-footer">
      	<button type="button" data-dismiss="modal" class="btn btn-warning">Close</button>
        <button type="submit" form="formWorkingDetail" class="btn btn-success">Save</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>

	$(document).ready(function(){
		initiateTabelBl();
		initiateTabelRequest();

		getDataDocumentation($("input#idjoborder").val());
		
		$('.datepicker').datepicker({
			format: 'yyyy-mm-dd',
			todayHighlight: true,
			autoclose: true
		});
		
		$("select#insurance").change(function(){
			var value = $(this).val();
			onChangeInsurance(value);
		});
		
		$("select#shippingdoc").change(function(){
			onChangeShippingDoc();
		});
		
		$("input[type='radio']#us").click(function(){	
			$(".employee").prop("disabled",false);
			$(".courrier").prop("disabled",true);
		});
		
		$("input[type='radio']#courrier").click(function(){
			$(".courrier").prop("disabled",false);
			$(".employee").prop("disabled",true);	
		});
		
		
		$('form#formdocumentation').bootstrapValidator({
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
				url			: "<?php echo base_url('joborder/commit/documentation') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					$('input#codedocumentation').val('');
					//$('form#formdocumentation')[0].reset();
					$('form#formdocumentation').data('bootstrapValidator').resetForm();	
				}
			});
		});

		$('form#formWorkingDetail').bootstrapValidator({
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
				url			: "<?php echo base_url('joborder/commitdetail/workingdetail') ?>",
				data		: dataSerialize,
				error		: function(){
					alert("AJAX Error");
				},
				success		: function(json) {
					alert(json);
				},
				complete	: function(){
					$('input#idWorkingDetail').val('');
					//$('form#formWorkingDetail')[0].reset();
					$('form#formWorkingDetail').data('bootstrapValidator').resetForm();	
					$("div#workingDetail").modal("hide");
				}
			});
		});
		
	});
	
	function onChangeInsurance(value){
		if (value == "Cover by Us"){
			$("select#insurancecondition").prop("disabled",false);
			$("select#insurancevalue").prop("disabled",false);
		}
		else{
			$("select#insurancecondition").prop("disabled",true);
			$("select#insurancevalue").prop("disabled",true);
		}
	}

	function onChangeShippingDoc(){
		var address = $("select#shippingdoc option:selected").data("address");
		var phone = $("select#shippingdoc option:selected").data("phone");
		var pic = $("select#shippingdoc option:selected").data("pic");
		
		$("textarea#address").val(address);
		$("input#phone").val(phone);
		$("input#pic").val(pic);
	}

	function  getDataDocumentation(IDJobOrder){
		fillSelectShippingDocument();
		fillSelectEmployee();
		fillSelectCostumer();

		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('joborder/getbydetail/documentation') ?>"+"/"+IDJobOrder,
			beforeSend	: function(){

			},
			success		: function(json){
				$("input#codedocumentation").val(json.documentation_id);
				$("input#costumersi").val(json.costumer_si_no);
				$("input#ajunumber").val(json.aju_number);
				$("input#ajudate").val(json.aju_date);
				$("input#pebnumber").val(json.peb_number);
				$("input#pebdate").val(json.peb_date);
				$("select#insurance").val(json.insurance); onChangeInsurance(json.insurance);
				$("select#insurancecondition").val(json.insurance_condition);
				$("select#insurancevalue").val(json.insurance_value);
				$("select#shippingdoc").select2("val", json.shipping_doc); onChangeShippingDoc();
				$("input[type='radio']#"+json.sent_by).prop("checked",true); 
				//$("input[type='radio']#"+json.sent_by).trigger("click");
				$("select#employee").select2("val", json.sent_by_us); 
				$("select#courrier").select2("val", json.sent_by_courrier); 
				$("input#deliverynumber").val(json.delivery_number);
				$("input#receiptnumber").val(json.receipt_number);

				if(json.sent_by == "us"){
					$(".employee").prop("disabled",false);
					$(".courrier").prop("disabled",true);
				}
				else if(json.sent_by == "courrier"){
					$(".courrier").prop("disabled",false);
					$(".employee").prop("disabled",true);	
				}

			},
			complete	: function(){
				
			}
		});		
	}

	// UNTUK TABEL BILL OF LEADING
	function initiateTabelBl(){
		var job_order_id = $("input#idjoborder").val();
		var no = 0;
		$("table#tabelbl tbody").empty();
		
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("joborder/getbydetail/billofleading") ?>"+"/"+job_order_id,
			success		: function(json){	
				var optionMovement = fillSelectMovement();
				
				$.each(json, function(index, row) {
					var isiTrow = '';
					no = row.detail_billofleading_id;
					
					isiTrow = '<tr id="'+no+'">';
					isiTrow += '<td><select class="form-control input-sm" name="bltype" id="bltype">';
					isiTrow += '<option value="">- Select BL Type -</option>';
					isiTrow += '<option value="MBL">MBL</option>';
					isiTrow += '<option value="HBL">HBL</option>';
					isiTrow += '<option value="Seaway Bill">Seaway Bill</option>';
					isiTrow += '<option value="Express BL">Express BL</option>';
					isiTrow += '</select></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="number" id="number" value="'+row.number+'"></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="original" id="original" value="'+row.original+'"></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="copy" id="copy" value="'+row.copy+'"></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="freight" id="freight" value="'+row.freight+'"></td>';
					isiTrow += '<td><select class="form-control input-sm" name="status" id="status">';
					isiTrow += '<option value="">- Select Status -</option>';
					isiTrow += '<option value="Original">Original</option>';
					isiTrow += '<option value="Telex Release">Telex Release</option>';
					isiTrow += '</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="movement" id="movement">'+optionMovement+'</select></td>';
					isiTrow += '<td><select class="form-control input-sm" name="loadtype" id="loadtype">';
					isiTrow += '<option>- Select Load Type -</option>';
					isiTrow += '<option value="FCL/FCL">FCL/FCL </option>';
					isiTrow += '<option value="FCL/FCL">LCL/LCL  </option>';
					isiTrow += '<option value="FCL/FCL">FCL/LCL  </option>';
					isiTrow += '<option value="FCL/FCL">LCL/FCL  </option>';
					isiTrow += '<option value="FCL/FCL">Break-bulk  </option>';
					isiTrow += '<option value="FCL/FCL">Bulk </option>';
					isiTrow += '</select></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="note" id="note" value="'+row.note+'"></td>';
					isiTrow += '<td class="text-center">';
					isiTrow += '<button type="button" class="btn btn-xs btn-info" id="btnWdBl" onclick="return onClickWdBl('+no+')" >WD</button> ';
					isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-danger" id="btnSaveBl" onclick="return onClickSaveBl('+no+')" >Save</button> ';
					isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-success" id="btnAddBl" onclick="return onClickAddBl('+no+')"> Add </button> ';
					isiTrow += '<input type="hidden" id="idBl" value="'+no+'" />';
					isiTrow += '</td>';
					isiTrow += '</tr>';
					
					$("table#tabelbl tbody").append(isiTrow);
					var thisRow = $("table#tabelbl tbody").find("tr#"+no);
					thisRow.find("select#bltype").val(row.bl_type);
					thisRow.find("select#status").val(row.status);
					thisRow.find("select#movement").val(row.movement);
					thisRow.find("select#loadtype").val(row.load_type);
				});
			},
			error		: function(){
				alert("error");
			}
		});	
		
		var number = no+1;
		var newRow = generateRowBl(number);
		$("table#tabelbl tbody").append(newRow);
	}
	
	function fillSelectMovement(){
		var isi = "";
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url('movement/getall') ?>",
			success		: function(json){
				var fillOption = "<option value=''>- Select Movement -</option>";
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.movement_code+'">'+row.movement_code+'</option>';
				});
				isi = fillOption;
			},
			error		: function(){
				alert("error");
			}
		});	
		return isi;
	}
	
	function generateRowBl(no){
		var isiTrow = '';
		var optionMovement = fillSelectMovement();
	
		isiTrow = '<tr id="'+no+'">';
		isiTrow += '<td><select class="form-control input-sm" name="bltype" id="bltype">';
		isiTrow += '<option value="">- Select BL Type -</option>';
		isiTrow += '<option value="MBL">MBL</option>';
		isiTrow += '<option value="HBL">HBL</option>';
		isiTrow += '<option value="Seaway Bill">Seaway Bill</option>';
		isiTrow += '<option value="Express BL">Express BL</option>';
		isiTrow += '</select></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" name="number" id="number"></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" name="original" id="original"></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" name="copy" id="copy"></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" name="freight" id="freight"></td>';
		isiTrow += '<td><select class="form-control input-sm" name="status" id="status">';
		isiTrow += '<option value="">- Select Status -</option>';
		isiTrow += '<option value="Original">Original</option>';
		isiTrow += '<option value="Telex Release">Telex Release</option>';
		isiTrow += '</select></td>';
		isiTrow += '<td><select class="form-control input-sm" name="movement" id="movement">'+optionMovement+'</select></td>';
		isiTrow += '<td><select class="form-control input-sm" name="loadtype" id="loadtype">';
		isiTrow += '<option>- Select Load Type -</option>';
		isiTrow += '<option value="FCL/FCL">FCL/FCL </option>';
		isiTrow += '<option value="FCL/FCL">LCL/LCL  </option>';
		isiTrow += '<option value="FCL/FCL">FCL/LCL  </option>';
		isiTrow += '<option value="FCL/FCL">LCL/FCL  </option>';
		isiTrow += '<option value="FCL/FCL">Break-bulk  </option>';
		isiTrow += '<option value="FCL/FCL">Bulk </option>';
		isiTrow += '</select></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" name="note" id="note"></td>';
		isiTrow += '<td class="text-center">';
		isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-info" id="btnWdBl" onclick="return onClickWdBl('+no+')" >WD</button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-danger" id="btnSaveBl" onclick="return onClickSaveBl('+no+')" >Save</button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnAddBl" onclick="return onClickAddBl('+no+')"> Add </button> ';
		isiTrow += '<input type="hidden" id="idBl" />';
		isiTrow += '</td>';
		isiTrow += '</tr>';
		
		return isiTrow;
	}
	
	function onClickAddBl(number){
		var tRow = $("table#tabelbl tbody").find("tr#"+number);
		var no = number+1;
		var isiTrow = generateRowBl(no);
		
		$("table#tabelbl tbody").append(isiTrow);
		tRow.find("button#btnAddBl").hide();
	}
	
	function onClickSaveBl(number){
		var tRow = $("table#tabelbl tbody").find("tr#"+number);
		var thisButton = tRow.find("button#btnSaveBl");
		var buttonDetail = tRow.find("button#btnWdBl")
		
		var idjoborder = $("input#idjoborder").val();
		
		var data_bl = {
						bl_type: tRow.find("select#bltype").val(), 
						number: tRow.find("input#number").val(), 
						original: tRow.find("input#original").val(),
						copy: tRow.find("input#copy").val(), 
						freight: tRow.find("input#freight").val(), 
						status: tRow.find("select#status").val(),
						movement: tRow.find("select#movement").val(), 
						load_type: tRow.find("select#loadtype").val(), 
						note: tRow.find("input#note").val()
					  };
			
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			data		: {idjoborder:idjoborder, object_data: data_bl},
			url			: "<?php echo base_url('joborder/commitdetail/billofleading') ?>",
			success		: function(json){
				tRow.find("input#idBl").val(json);
				thisButton.hide();
				buttonDetail.show();
			},
			error		: function(){
				alert("error");
			}
		});	
	}

	function onClickWdBl(number){
		var tRow = $("table#tabelbl tbody").find("tr#"+number);	
		var idBl = tRow.find("input#idBl").val();
		var typeBl = tRow.find("select#bltype option:selected").text();
		var number = tRow.find("input#number").val();

		var modalWd = $("div#workingDetail");
		modalWd.find("span#title").text("BL Type");
		modalWd.find("strong#blTypeInModal").text(typeBl);
		modalWd.find("strong#numberInModal").text(number);

		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("joborder/getbydetail/wdbl") ?>"+"/"+idBl,
			success		: function(json){
				modalWd.find("input#idWorkingDetail").val(json.detail_workingdetail_id);

				modalWd.find("select#kirimData").val(json.kirim_data);
				modalWd.find("select#terimaDraft").val(json.terima_draft);
				modalWd.find("select#cekDraft").val(json.cek_draft);
				modalWd.find("select#draftOk").val(json.draft_ok);
				modalWd.find("select#kirimDraft").val(json.kirim_draft);
				modalWd.find("select#terimaKonfirmasi").val(json.terima_konfirmasi);
				modalWd.find("select#kirimKonfirmasi").val(json.kirim_konfirmasi);
				modalWd.find("select#cetakOriginal").val(json.cetak_original);
				modalWd.find("select#ambilOriginal").val(json.ambil_original);
				modalWd.find("select#kirimOriginal").val(json.kirim_original);
				modalWd.find("select#telexRelease").val(json.telex_release);
				modalWd.find("select#mblFinished").val(json.mbl_finished);

				modalWd.find("input#kirimDataStart").val(json.kirim_data_start);
				modalWd.find("input#terimaDraftStart").val(json.terima_draft_start);
				modalWd.find("input#cekDraftStart").val(json.cek_draft_start);
				modalWd.find("input#draftOkStart").val(json.draft_ok_start);
				modalWd.find("input#kirimDraftStart").val(json.kirim_draft_start);
				modalWd.find("input#terimaKonfirmasiStart").val(json.terima_konfirmasi_start);
				modalWd.find("input#kirimKonfirmasiStart").val(json.kirim_konfirmasi_start);
				modalWd.find("input#cetakOriginalStart").val(json.cetak_original_start);
				modalWd.find("input#ambilOriginalStart").val(json.ambil_original_start);
				modalWd.find("input#kirimOriginalStart").val(json.kirim_original_start);

				modalWd.find("input#kirimDataEnd").val(json.kirim_data_end);
				modalWd.find("input#terimaDraftEnd").val(json.terima_draft_end);
				modalWd.find("input#cekDraftEnd").val(json.cek_draft_end);
				modalWd.find("input#draftOkEnd").val(json.draft_ok_end);
				modalWd.find("input#kirimDraftEnd").val(json.kirim_draft_end);
				modalWd.find("input#terimaKonfirmasiEnd").val(json.terima_konfirmasi_end);
				modalWd.find("input#kirimKonfirmasiEnd").val(json.kirim_konfirmasi_end);
				modalWd.find("input#cetakOriginalEnd").val(json.cetak_original_end);
				modalWd.find("input#ambilOriginalEnd").val(json.ambil_original_end);
				modalWd.find("input#kirimOriginalEnd").val(json.kirim_original_end);

				modalWd.find("input#kirimDataKet").val(json.kirim_data_ket);
				modalWd.find("input#terimaDraftKet").val(json.terima_draft_ket);
				modalWd.find("input#cekDraftKet").val(json.cek_draft_ket);
				modalWd.find("input#draftOkKet").val(json.draft_ok_ket);
				modalWd.find("input#kirimDraftKet").val(json.kirim_draft_ket);
				modalWd.find("input#terimaKonfirmasiKet").val(json.terima_konfirmasi_ket);
				modalWd.find("input#kirimKonfirmasiKet").val(json.kirim_konfirmasi_ket);
				modalWd.find("input#cetakOriginalKet").val(json.cetak_original_ket);
				modalWd.find("input#ambilOriginalKet").val(json.ambil_original_ket);
				modalWd.find("input#kirimOriginalKet").val(json.kirim_original_ket);
				modalWd.find("input#telexReleaseKet").val(json.telex_release_ket);
				modalWd.find("input#mblFinishedKet").val(json.mbl_finished_ket);

			},
			error		: function(){
				alert("error");
			},
			complete	: function(){
				modalWd.modal("show");
			}
			
		});	
	}
	
	// UNTUK TABEL BILL OF LEADING SELESAI
	
	// UNTUK TABEL REQUEST DOCUMENT	
	
	function initiateTabelRequest(){
		var job_order_id = $("input#idjoborder").val();
		var no = 0;
		$("table#tabelRequest tbody").empty();
		
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("joborder/getbydetail/requestdocument") ?>"+"/"+job_order_id,
			success		: function(json){	
				var optionDocument = fillSelectDocument();
				
				$.each(json, function(index, row) {
					var isiTrow = '';
					no = row.detail_requestdocument_id;
					
					isiTrow = '<tr id="'+no+'">';
					isiTrow += '<td><select class="form-control input-sm" name="document" id="document">'+optionDocument+'</select></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="number" id="number" value="'+row.number+'"></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="original" id="original" value="'+row.original+'"></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="copy" id="copy" value="'+row.copy+'"></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="legalisir" id="legalisir" value="'+row.legalisir+'"></td>';
					isiTrow += '<td><input type="text" class="form-control input-sm" name="note" id="note" value="'+row.note+'"></td>';
					isiTrow += '<td class="text-center">';
					isiTrow += '<button type="button" class="btn btn-xs btn-info" id="btnWdRequest" onclick="return onClickWdRequest('+no+')" >WD</button> ';
					isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-danger" id="btnSaveRequest" onclick="return onClickSaveRequest('+no+')" >Save</button> ';
					isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-success" id="btnAddRequest" onclick="return onClickAddRequest('+no+')"> Add </button> ';
					isiTrow += '<input type="hidden" id="idRequest" value="'+no+'" />';
					isiTrow += '</td>';
					isiTrow += '</tr>';
					
					$("table#tabelRequest tbody").append(isiTrow);
					var thisRow = $("table#tabelRequest tbody").find("tr#"+no);
					thisRow.find("select#document").val(row.document);
					
				});
			},
			error		: function(){
				alert("error");
			}
		});	
	
		var number = no+1;
		var newRow = generateRowRequest(number);
		$("table#tabelRequest tbody").append(newRow);
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
			},
			error		: function(){
				alert("error");
			}
		});	
		return isi;
	}
	
	function generateRowRequest(no){
		var isiTrow = '';
		var optionDocument = fillSelectDocument();
	
		isiTrow = '<tr id="'+no+'">';
		isiTrow += '<td><select class="form-control input-sm" name="document" id="document">'+optionDocument+'</select></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" name="number" id="number"></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" name="original" id="original"></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" name="copy" id="copy"></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" name="legalisir" id="legalisir"></td>';
		isiTrow += '<td><input type="text" class="form-control input-sm" name="note" id="note"></td>';
		isiTrow += '<td class="text-center">';
		isiTrow += '<button style="display:none" type="button" class="btn btn-xs btn-info" id="btnWdRequest" onclick="return onClickWdRequest('+no+')" >WD</button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-danger" id="btnSaveRequest" onclick="return onClickSaveRequest('+no+')" >Save</button> ';
		isiTrow += '<button type="button" class="btn btn-xs btn-success" id="btnAddRequest" onclick="return onClickAddRequest('+no+')"> Add </button> ';
		isiTrow += '<input type="hidden" id="idRequest" />';
		isiTrow += '</td>';
		isiTrow += '</tr>';
		
		return isiTrow;
	}
	
	function onClickAddRequest(number){
		var tRow = $("table#tabelRequest tbody").find("tr#"+number);
		var no = number+1;
		var isiTrow = generateRowRequest(no);
		
		$("table#tabelRequest tbody").append(isiTrow);
		tRow.find("button#btnAddRequest").hide();
	}
	
	function onClickSaveRequest(number){
		var tRow = $("table#tabelRequest tbody").find("tr#"+number);
		var thisButton = tRow.find("button#btnSaveRequest");
		var buttonDetail = tRow.find("button#btnWdRequest")
		
		var idjoborder = $("input#idjoborder").val();
		
		var data_request = 	{
								document_name: tRow.find("select#document").val(), 
								number: tRow.find("input#number").val(), 
								original: tRow.find("input#original").val(),
								copy: tRow.find("input#copy").val(), 
								legalisir: tRow.find("input#legalisir").val(),
								note: tRow.find("input#note").val()
							};
			
		$.ajax({
			type		: "POST",
			dataType	: 'json',
			data		: {idjoborder:idjoborder, object_data: data_request},
			url			: "<?php echo base_url('joborder/commitdetail/requestdocument') ?>",
			success		: function(json){
				tRow.find("input#idRequest").val(json);
				buttonDetail.show();
				thisButton.hide();
			},
			error		: function(){
				alert("error");
			}
		});	
	}

	function onClickWdRequest(number){
		var tRow = $("table#tabelRequest tbody").find("tr#"+number);	
		var idRequest = tRow.find("input#idRequest").val();
		var documentRequest = tRow.find("select#document option:selected").text();
		var number = tRow.find("input#number").val();

		var modalWd = $("div#workingDetail");
		modalWd.find("span#title").text("Document");
		modalWd.find("strong#blTypeInModal").text(documentRequest);
		modalWd.find("strong#numberInModal").text(number);

		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("joborder/getbydetail/wdrequest") ?>"+"/"+idRequest,
			success		: function(json){
				modalWd.find("input#idWorkingDetail").val(json.detail_workingdetail_id);

				modalWd.find("select#kirimData").val(json.kirim_data);
				modalWd.find("select#terimaDraft").val(json.terima_draft);
				modalWd.find("select#cekDraft").val(json.cek_draft);
				modalWd.find("select#draftOk").val(json.draft_ok);
				modalWd.find("select#kirimDraft").val(json.kirim_draft);
				modalWd.find("select#terimaKonfirmasi").val(json.terima_konfirmasi);
				modalWd.find("select#kirimKonfirmasi").val(json.kirim_konfirmasi);
				modalWd.find("select#cetakOriginal").val(json.cetak_original);
				modalWd.find("select#ambilOriginal").val(json.ambil_original);
				modalWd.find("select#kirimOriginal").val(json.kirim_original);
				modalWd.find("select#telexRelease").val(json.telex_release);
				modalWd.find("select#mblFinished").val(json.mbl_finished);

				modalWd.find("input#kirimDataStart").val(json.kirim_data_start);
				modalWd.find("input#terimaDraftStart").val(json.terima_draft_start);
				modalWd.find("input#cekDraftStart").val(json.cek_draft_start);
				modalWd.find("input#draftOkStart").val(json.draft_ok_start);
				modalWd.find("input#kirimDraftStart").val(json.kirim_draft_start);
				modalWd.find("input#terimaKonfirmasiStart").val(json.terima_konfirmasi_start);
				modalWd.find("input#kirimKonfirmasiStart").val(json.kirim_konfirmasi_start);
				modalWd.find("input#cetakOriginalStart").val(json.cetak_original_start);
				modalWd.find("input#ambilOriginalStart").val(json.ambil_original_start);
				modalWd.find("input#kirimOriginalStart").val(json.kirim_original_start);

				modalWd.find("input#kirimDataEnd").val(json.kirim_data_end);
				modalWd.find("input#terimaDraftEnd").val(json.terima_draft_end);
				modalWd.find("input#cekDraftEnd").val(json.cek_draft_end);
				modalWd.find("input#draftOkEnd").val(json.draft_ok_end);
				modalWd.find("input#kirimDraftEnd").val(json.kirim_draft_end);
				modalWd.find("input#terimaKonfirmasiEnd").val(json.terima_konfirmasi_end);
				modalWd.find("input#kirimKonfirmasiEnd").val(json.kirim_konfirmasi_end);
				modalWd.find("input#cetakOriginalEnd").val(json.cetak_original_end);
				modalWd.find("input#ambilOriginalEnd").val(json.ambil_original_end);
				modalWd.find("input#kirimOriginalEnd").val(json.kirim_original_end);

				modalWd.find("input#kirimDataKet").val(json.kirim_data_ket);
				modalWd.find("input#terimaDraftKet").val(json.terima_draft_ket);
				modalWd.find("input#cekDraftKet").val(json.cek_draft_ket);
				modalWd.find("input#draftOkKet").val(json.draft_ok_ket);
				modalWd.find("input#kirimDraftKet").val(json.kirim_draft_ket);
				modalWd.find("input#terimaKonfirmasiKet").val(json.terima_konfirmasi_ket);
				modalWd.find("input#kirimKonfirmasiKet").val(json.kirim_konfirmasi_ket);
				modalWd.find("input#cetakOriginalKet").val(json.cetak_original_ket);
				modalWd.find("input#ambilOriginalKet").val(json.ambil_original_ket);
				modalWd.find("input#kirimOriginalKet").val(json.kirim_original_ket);
				modalWd.find("input#telexReleaseKet").val(json.telex_release_ket);
				modalWd.find("input#mblFinishedKet").val(json.mbl_finished_ket);
			},
			error		: function(){
				alert("error");
			},
			
		});	
			
		modalWd.modal("show");
	}
						
	// UNTUK TABEL REQUEST DOCUMENT	SELESAI
	
	function fillSelectShippingDocument(){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("costumer/getforshippingdoc") ?>",
			success		: function(json){
				$("select#shippingdoc").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Costumer -</option>";
				
				$.each(json, function(index, row) {
					var address = row.main_address + " " + row.main_city + " " + row.main_provincy + " " + row.main_country + " " + row.main_zipcode;
					
					var phone = row.main_phone + " / " + row.main_fax;
					
					fillOption += '<option data-address="'+address+'" data-phone="'+phone+'" data-pic="'+row.main_pic+'" value="'+row.costumer_code+'">'+row.costumer_name+'</option>';
				});

				$("select#shippingdoc").empty().append(fillOption);
			},
			complete	: function(){
				$("select#shippingdoc").select2();
			}
		});			
	}
	
	function fillSelectEmployee(){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("employee/getall") ?>",
			success		: function(json){
				$("select#employee").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Employee -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.employee_code+'">'+row.name+' ('+row.position_sales+')</option>';
				});

				$("select#employee").empty().append(fillOption);
			},
			complete	: function(){
				$("select#employee").select2();
			}
		});		
	}
	
	function fillSelectCostumer(){
		$.ajax({
			async		: false,
			type		: "POST",
			dataType	: 'json',
			url			: "<?php echo base_url("costumer/getall") ?>",
			success		: function(json){
				$("select#courrier").empty().append("<option>Loading Data ...</option>");
			
				var fillOption = "<option value=''>- Select Courrier -</option>";
				
				$.each(json, function(index, row) {
					fillOption += '<option value="'+row.costumer_code+'">'+row.costumer_name+'</option>';
				});

				$("select#courrier").empty().append(fillOption);
			},
			complete	: function(){
				$("select#courrier").select2();
			}
		});		
	}

		
</script>





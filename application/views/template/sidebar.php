	<input type="hidden" value="<?php echo $activesidebar ?>" id="activeside" />
	
	<div class="container-fluid" id="content">
		<div id="left">
			
			<div class="subnav subnav-hidden">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Data Reference</span>
					</a>
				</div>
				<ul class="subnav-menu">
					<li id="region"><a href="<?php echo base_url('master/region') ?>">Region</a></li>	
					<li id="port"><a href="<?php echo base_url('master/port') ?>">Seaport & Airport</a></li>
					<li id="currency"><a href="<?php echo base_url('master/currency') ?>">Currency & Exchange</a></li>
					<li id="payment"><a href="<?php echo base_url('master/payment') ?>">Methods of Payment</a></li>
					<li id="incoterm"><a href="<?php echo base_url('master/incoterm') ?>">Incoterm</a></li>
				</ul>
			</div>
			
			<div class="subnav subnav-hidden">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Data Primer</span>
					</a>
				</div>
				<ul class="subnav-menu">
					<li id="company"><a href="<?php echo base_url('master/company') ?>">Company</a></li>
					<li id="position"><a href="<?php echo base_url('master/position') ?>">Position</a></li>
					<li id="employee"><a href="<?php echo base_url('master/employee') ?>">Employee</a></li>	
				</ul>
			</div>
			
			<div class="subnav subnav-hidden">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Costumer & Vendor</span>
					</a>
				</div>
				<ul class="subnav-menu">
					<li id="legalities"><a href="<?php echo base_url('master/legalities') ?>">Company Legalities</a></li>	
					<li id="costumer"><a href="<?php echo base_url('master/costumer') ?>">Costumer & Vendor</a></li>
				</ul>
			</div>
			
			<div class="subnav subnav-hidden">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Commodity</span>
					</a>
				</div>
				<ul class="subnav-menu">
					<li id="cargo"><a href="<?php echo base_url('master/cargo') ?>">Cargo Type</a></li>
					<li id="document"><a href="<?php echo base_url('master/document') ?>">Document</a></li>
					<li id="unit"><a href="<?php echo base_url('master/unit') ?>">Unit</a></li>
					<li id="sectioncommodity"><a href="<?php echo base_url('master/sectioncommodity') ?>">Section of Commodity</a></li>
					<li id="commodity"><a href="<?php echo base_url('master/commodity') ?>">Commodity</a></li>
					<li id="packaging"><a href="<?php echo base_url('master/packaging') ?>">Packaging of Commodity</a></li>
				</ul>
			</div>
			
			<div class="subnav subnav-hidden">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Forwader Service</span>
					</a>
				</div>
				<ul class="subnav-menu">
					<li id="movement"><a href="<?php echo base_url('master/movement') ?>">Movement Service</a></li>
					<li id="vessel"><a href="<?php echo base_url('master/vessel') ?>">Vessel</a></li>
					<li id="charge"><a href="<?php echo base_url('master/charge') ?>">Charge Categories</a></li>
					<li id="clearence"><a href="<?php echo base_url('master/clearence') ?>">Clearence Type</a></li>
				</ul>
			</div>
			
			<div class="subnav subnav-hidden">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-right"></i>
						<span>Container</span>
					</a>
				</div>
				<ul class="subnav-menu">
					<li id="container"><a href="<?php echo base_url('master/container') ?>">Container</a></li>
					<li id="trukcdriver"><a href="<?php echo base_url('master/truckdriver') ?>">Trucking Driver</a></li>
					<li id="trukctype"><a href="<?php echo base_url('master/trucktype') ?>">Truck Type</a></li>
					<li id="truck"><a href="<?php echo base_url('master/truck') ?>">Truck</a></li>
					<!--<li><a href="">Working Area</a></li>-->
				</ul>
			</div>
			
		
		</div>
		
		<script>
		$(document).ready(function(){
			var activeside = $("input#activeside").val();
			var activeMenu = $("div.subnav").find("li#"+activeside);
			activeMenu.addClass("active");
			
			var parent = activeMenu.closest("div");
			parent.find(".toggle-subnav").trigger("click");
			//parent.css({"color": "red", "border": "2px solid red"});
		});
		</script>
		
		<div id="main">
			<div class="container-fluid">
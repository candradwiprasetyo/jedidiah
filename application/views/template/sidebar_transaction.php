	<input type="hidden" value="<?php echo $activesidebar ?>" id="activeside" />
	
	<div class="container-fluid" id="content">
		<div id="left">
			
			<div class="subnav subnav-hidden">
				<div class="subnav-title ">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Job Order</span>
					</a>
				</div>
				<ul class="subnav-menu">
					<li id="service"><a href="<?php echo base_url('joborder/service/service') ?>">Service</a></li>		
					<li id="handling"><a href="<?php echo base_url('joborder/handling') ?>">Handling</a></li>
					<li id="monitoring"><a href="<?php echo base_url('joborder/monitoring') ?>">Monitoring</a></li>
				</ul>
			</div>

			<div class="subnav subnav-hidden">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Rate Management</span>
					</a>
				</div>
				<ul class="subnav-menu">
					<li id="ratemanagement"><a href="<?php echo base_url('ratemanagement') ?>">Rate Management</a></li>		
					
				</ul>
			</div>
			
		
		</div>
		
		<script>
		$(document).ready(function(){
			/*
			var activeside = $("input#activeside").val();
			$("div.subnav").find("li#"+activeside).addClass("active");
			*/
			var activeside = $("input#activeside").val();
			var activeMenu = $("div.subnav").find("li#"+activeside);
			activeMenu.addClass("active");
			
			var parent = activeMenu.closest("div");
			parent.find(".toggle-subnav").trigger("click");
		});
		</script>
		
		<div id="main">
			<div class="container-fluid">
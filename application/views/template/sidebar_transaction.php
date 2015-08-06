	<input type="hidden" value="<?php echo $activesidebar ?>" id="activeside" />
	
	<div class="container-fluid" id="content">
		<div id="left">
			
			<div class="subnav">
				<div class="subnav-title">
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
			
		
		</div>
		
		<script>
		$(document).ready(function(){
			var activeside = $("input#activeside").val();
			$("div.subnav").find("li#"+activeside).addClass("active");
		});
		</script>
		
		<div id="main">
			<div class="container-fluid">
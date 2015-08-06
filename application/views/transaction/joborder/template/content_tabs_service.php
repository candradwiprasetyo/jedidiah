<div class="box-content nopadding">
	
	<ul class="tabs tabs-inline tabs-top">
		<li id="service">
			<a href="<?php echo base_url('joborder/service/service').'/'.$id_costumer ?>">
				<i class="fa fa-inbox"></i>Service</a>
		</li>
		<li id="commodity">
			<a href="<?php echo base_url('joborder/service/commodity').'/'.$id_costumer ?>">
				<i class="fa fa-share"></i>Commodity</a>
		</li>
		<li id="schedule">
			<a href="<?php echo base_url('joborder/service/schedule').'/'.$id_costumer ?>">
				<i class="fa fa-tag"></i>Schedule</a>
		</li>
	</ul>
	
	<script>
	$(document).ready(function(){
		var activecontent = $("input#activecontent").val();
		$("ul.tabs-inline").find("li#"+activecontent).addClass("active");
	});
	</script>
	
	
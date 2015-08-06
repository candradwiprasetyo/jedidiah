<div class="box-content nopadding">
	
	<ul class="tabs tabs-inline tabs-top">
		<li id="preparation">
			<a href="<?php echo base_url('joborder/handling/preparation').'/'.$id_costumer ?>">
				<i class="fa fa-inbox"></i>Preparation</a>
		</li>
		<li id="stuffing">
			<a href="<?php echo base_url('joborder/handling/stuffing').'/'.$id_costumer ?>">
				<i class="fa fa-share"></i>Stuffing</a>
		</li>
		<li id="documentation">
			<a href="<?php echo base_url('joborder/handling/documentation').'/'.$id_costumer ?>">
				<i class="fa fa-tag"></i>Documentation</a>
		</li>
	</ul>
	
	<script>
	$(document).ready(function(){
		var activecontent = $("input#activecontent").val();
		$("ul.tabs-inline").find("li#"+activecontent).addClass("active");
	});
	</script>
	
	
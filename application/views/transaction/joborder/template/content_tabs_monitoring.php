<div class="box-content nopadding">
	
	<ul class="tabs tabs-inline tabs-top">
		<li id="monitoring">
			<a href="<?php echo base_url('joborder/monitoring').'/'.$id_costumer ?>">
				<i class="fa fa-inbox"></i>Monitoring</a>
		</li>
	</ul>
	
	<script>
	$(document).ready(function(){
		var activecontent = $("input#activecontent").val();
		$("ul.tabs-inline").find("li#"+activecontent).addClass("active");
	});
	</script>
	
	
<input type="hidden" value="<?php echo $activecontent ?>" id="activecontent" />

<div class="box box-bordered">
	<div class="box-title">
		<ul class="tabs tabs-left">
			<li id="service">
				<a href="<?php echo base_url('joborder/service/service').'/'.$id_costumer ?>">SERVICE</a>
			</li>
			<li id="handling">
				<a href="<?php echo base_url('joborder/handling/preparation').'/'.$id_costumer ?>" id="handling">HANDLING</a>
			</li>
			<li id="monitoring">
				<a href="<?php echo base_url('joborder/monitoring/monitoring').'/'.$id_costumer ?>" id="monitoring">MONITORING</a>
			</li>
		</ul>
		
		<script>
		$(document).ready(function(){
			var activeside = $("input#activeside").val();
			$("ul.tabs-left").find("li#"+activeside).addClass("active");
		});
		</script>
		
		<div class="actions">
			<a href="#" class="btn btn-mini content-refresh">
				<i class="fa fa-refresh"></i>
			</a>
		</div>
	</div>
	
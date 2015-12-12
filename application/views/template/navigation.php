<body>
	<input type="hidden" value="<?php echo $activenav ?>" id="activenav" />
	<div id="navigation">
		<div class="container-fluid">
			<a href="#" id="brand">JEDIDIAH</a>
			<a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation">
				<i class="fa fa-bars"></i>
			</a>
			<ul class='main-nav'>
				<li id="dashboard">
					<a href="<?php echo base_url('dashboard') ?>">
						<span>Dashboard</span>
					</a>
				</li>
				<li id="master">
					<a href="<?php echo base_url('master') ?>">
						<span>Master</span>
					</a>
				</li>
				<li id="transaction">
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Transaction</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
							<a href="<?php echo base_url('transaction/joborder') ?>">Job Order</a>
						</li>
						<li>
							<a href="<?php echo base_url('trs/ratemanagement') ?>">Rate Management</a>
						</li>
						<li>
							<a href="<?php echo base_url('trs/jobcosting') ?>">Job Costing</a>
						</li>
					</ul>
				</li>	
			</ul>
			
			<script>
			$(document).ready(function(){
				var activenav = $("input#activenav").val();
				$("ul.main-nav").find("li#"+activenav).addClass("active");
			});
			</script>
				
			<div class="user">
				<ul class="icon-nav">
					<li class='dropdown'>
						<a href="#" class='dropdown-toggle' data-toggle="dropdown">
							<i class="fa fa-envelope"></i>
							<span class="label label-lightred">4</span>
						</a>
						<ul class="dropdown-menu pull-right message-ul">
							<li>
								<a href="#">
									<img src="<?php echo base_url('assets/img/user-1.jpg') ?>" alt="">
									<div class="details">
										<div class="name">Jane Doe</div>
										<div class="message">
											Lorem ipsum Commodo quis nisi ...
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="<?php echo base_url('assets/img/user-1.jpg') ?>" alt="">
									<div class="details">
										<div class="name">John Doedoe</div>
										<div class="message">
											Ut ad laboris est anim ut ...
										</div>
									</div>
									<div class="count">
										<i class="fa fa-comment"></i>
										<span>3</span>
									</div>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="<?php echo base_url('assets/img/user-1.jpg') ?>" alt="">
									<div class="details">
										<div class="name">Bob Doe</div>
										<div class="message">
											Excepteur Duis magna dolor!
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="components-messages.html" class='more-messages'>Go to Message center
									<i class="fa fa-arrow-right"></i>
								</a>
							</li>
						</ul>
					</li>

				</ul>
				<div class="dropdown">
					<a href="#" class='dropdown-toggle' data-toggle="dropdown">John Doe
						<img src="<?php echo base_url('assets/img/user-avatar.jpg') ?>" alt="">
					</a>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="more-userprofile.html">Edit profile</a>
						</li>
						<li>
							<a href="#">Account settings</a>
						</li>
						<li>
							<a href="more-login.html">Sign out</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
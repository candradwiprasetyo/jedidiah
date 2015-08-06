<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title>JEDIDIAH - Login</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<!-- icheck -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/icheck/all.css') ?>">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
	<!-- Color CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/themes.css') ?>">


	<!-- jQuery -->
	<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>

	<!-- Nice Scroll -->
	<script src="<?php echo base_url('assets/js/plugins/nicescroll/jquery.nicescroll.min.js') ?>"></script>
	<!-- Validation -->
	<script src="<?php echo base_url('assets/js/plugins/validation/jquery.validate.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/plugins/validation/additional-methods.min.js') ?>"></script>
	<!-- icheck -->
	<script src="<?php echo base_url('assets/js/plugins/icheck/jquery.icheck.min.js') ?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/eakroko.js') ?>"></script>


	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico') ?>" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/img/apple-touch-icon-precomposed.png') ?>" />

</head>

<body class='login'>
	<div class="wrapper">
		<h1>
			<a href="<?php echo base_url() ?>">
				<img src="<?php echo base_url('assets/img/logo-big.png') ?>" alt="" class='retina-ready' width="59" height="49">JEDIDIAH</a>
		</h1>
		<div class="login-body">
			<h2>SIGN IN</h2>
			<form action="" method='post' class='form-validate' id="formlogin">
				<div class="form-group">
					<div class="email controls">
						<input type="text" id='username' placeholder="input username" class='form-control' data-rule-required="true">
					</div>
				</div>
				<div class="form-group">
					<div class="pw controls">
						<input type="password" id="password" placeholder="input password" class='form-control' data-rule-required="true">
					</div>
				</div>
				<div class="submit">
					<label class="pull-left" id="msg"></label>
					<button type="button" class='btn btn-primary pull-right' id="btnlogin">Log In</button>
				</div>
			</form>
			<hr>
		</div>
	</div>
	
	<script>
	
	$(document).ready(function(){

		$("button#btnlogin").click(function(){
			var user = $("input#username").val();
			var pass = $("input#password").val();
			
			if(user == 'admin' && pass == 'admin'){
				window.location.href = '<?php echo base_url('dashboard') ?>';
			}
			else{
				var pesan = "Wrong username or password. Please input again.";
				$("label#msg").text(pesan);
			}
		});
		
	});
	
	</script>
	
</body>


<!-- Mirrored from www.eakroko.de/flat/more-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2015 08:28:50 GMT -->
</html>

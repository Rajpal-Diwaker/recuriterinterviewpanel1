<style>
	.error {
		color: red;
	}
</style>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Techugo Recruiter Pane</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=no;" />
	<link href="<?php echo base_url(); ?>panel_assets/css/login.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>panel_assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>panel_assets/css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css">
	<script src="<?php echo base_url(); ?>panel_assets/js/jquery-2.1.1.js"></script>
	<script src="<?php echo base_url(); ?>panel_assets/js/bootstrap.js"></script>
	<!-- <script src="<?php echo base_url(); ?>panel_assets/js/script.js"></script> -->
</head>

<body>
	<div class="container">
		<!--Login Screen Start Here-->
		<div class="loginwrap">
			<div class="row clearfix">
				<div class="col-sm-5 col-md-5">
					<div class="login-content">
						<div class="login-text">
							<h2>Login</h2>
							<h5>Enter your email id to be proceed</h5>
							<form action="<?php echo base_url('Recruiter/login') ?>" method="post">
								<?php
								$error_msg = $this->session->flashdata('error_msg');
								if ($error_msg) {
									print_r("<span class='error'>" . $error_msg . "</span>");
								}
								?>
								<div class="form-group">
									<input type="email" name="email" class="form-control" placeholder="Email Id" value="" />
								</div>
								<!-- <div class="form-group">
									<input type="password" name="password" class="form-control" placeholder="Password" value="12345" />
								</div> -->
								<div class="form-group">
									<input type="submit" class="form-control sbmtbtn" value="CONTINUE" />
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-7 col-md-7">
					<div class="imagebanner">
						<div class="logobox">
							<div class="logoimg">
								<img src="<?php echo base_url(); ?>panel_assets/images/logo.png" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>

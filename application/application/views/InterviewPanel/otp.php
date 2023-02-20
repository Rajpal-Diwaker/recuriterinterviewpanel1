<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Techugo Interviewer Panel</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=no;" />
	<link href="<?php echo base_url(); ?>panel_assets/css/login.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>panel_assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>panel_assets/css/font-awesome.min.css" media="screen" rel="stylesheet" type="text/css">
	<script src="<?php echo base_url(); ?>panel_assets/js/jquery-2.1.1.js"></script>
	<script src="<?php echo base_url(); ?>panel_assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>panel_assets/js/script.js"></script>
</head>
<style>
	.error {
		color: red;
	}
</style>

<body>
	<div class="container">
		<!--OTP Screen Start Here-->
		<div class="loginwrap">
			<div class="row clearfix">
				<div class="col-sm-5 col-md-5">
					<div class="login-content">
						<div class="login-text verify">
							<h2>Verify Details</h2>
							<h5>OTP sent to <?php echo $this->session->userdata('email'); ?></h5>
							<?php
							$error_msg = $this->session->flashdata('error_msg');
							if ($error_msg) {
								print_r("<span class='error'>" . $error_msg . "</span>");
							}
							?>
							<form action="<?php echo base_url('Interview/submitOTP') ?>" method="post">
								<div class="form-group">
									<div class="row clearfix">
										<input type="hidden" name="email" value="<?php echo $this->session->userdata('email'); ?>">
										<div class="col-xs-3 col-sm-3 col-md-3">
											<input type="password" class="form-control" placeholder="" name="one" id="codeBox1" maxlength="1" onkeypress="return isNumber(event)" onkeyup="onKeyUpEvent(1, event)" autofocus />
										</div>
										<div class="col-xs-3 col-sm-3 col-md-3">
											<input type="password" class="form-control" placeholder="" name="two" id="codeBox2" maxlength="1" onkeypress="return isNumber(event)" onkeyup="onKeyUpEvent(2, event)" autofocus />
										</div>
										<div class="col-xs-3 col-sm-3 col-md-3">
											<input type="password" class="form-control" placeholder="" name="three" id="codeBox3" maxlength="1" onkeypress="return isNumber(event)" onkeyup="onKeyUpEvent(3, event)" autofocus />
										</div>
										<div class="col-xs-3 col-sm-3 col-md-3">
											<input type="password" class="form-control" placeholder="" name="four" id="codeBox4" maxlength="1" onkeypress="return isNumber(event)" onkeyup="onKeyUpEvent(4, event)" autofocus />
										</div>
									</div>
								</div>
								<div id="responseDiv" class="alert text-center" style="margin-top:20px; display:none;margin-right:-380px; height: 57px;margin-top: 30px;width: 380px;">
									<span id="message"></span>
								</div>

								<div class="form-group">
									<input type="submit" class="form-control sbmtbtn" value="VERIFY" />
								</div>
								<h6>Didn't receive OTP? <a href="" onClick="ResendOTP();"> Resend Now </a></h6>
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
		<!--OTP Screen End Here-->
	</div>

</body>

</html>
<script>
	var email = '<?php echo $this->session->userdata('email'); ?>';

	function isNumber(evt) {
		evt = (evt) ? evt : window.event;
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode > 31 && (charCode < 48 || charCode > 57)) {
			return false;
		}
		return true;
	}

	function ResendOTP() {
		var email = '<?php echo $this->session->userdata('email'); ?>';
		$.ajax({
			url: '<?php echo base_url(); ?>Interview/reSendOTP',
			type: 'POST',
			dataType: "json",
			data: {
				'email': email
			},
			success: function(response) {
				$('#message').html(response.error_string);
				$('#responseDiv').removeClass('alert-success').addClass('alert-danger').show();
				setTimeout(function() {
					$('#responseDiv').hide();
				}, 3000);
			}
		});
	}

	function verifyOTP() {

		alert("hello")

		console.log("<?php echo base_url(); ?>Interview/dashboard");

		window.location.href = "<?php echo base_url(); ?>Interview/dashboard"

		window.location.replace("http://www.w3schools.com");

		alert("<?php echo base_url(); ?>Interview/dashboard")

		// console.log("response", response)

		// var otp = $("#codeBox1").val().concat($("#codeBox2").val(), $("#codeBox3").val(), $("#codeBox4").val());
		// var email = '<?php echo $this->session->userdata('email'); ?>';

		// if (otp == '') {
		// 	$('#message').html('Please enter OTP.');
		// 	$('#responseDiv').removeClass('alert-danger').addClass('alert-success').show();
		// 	setTimeout(function() {
		// 		$('#responseDiv').hide();
		// 	}, 3000);
		// 	return false;

		// } else {
		// 	alert(otp);
		// 	alert(email);

		// 	$.ajax({
		// 		url: '<?php echo base_url(); ?>Interview/submitOTP',
		// 		type: 'POST',
		// 		dataType: 'json',
		// 		data: {
		// 			"otp": otp,
		// 			"email": '<?php echo $this->session->userdata('email'); ?>'
		// 		},
		// 		success: function(response) {
		// 			alert(response);
		// 			console.log("response", response)
		// 			$('#message').html(response.error_string);

		// 			if (response.error_code == 0) {
		// 				$('#responseDiv').removeClass('alert-success').addClass('alert-danger').show();
		// 				setTimeout(function() {
		// 					$('#responseDiv').hide();
		// 				}, 3000);
		// 				console.log("response", response)

		// 			} else {

		// 				$('#responseDiv').removeClass('alert-danger').addClass('alert-success').show();
		// window.location.href = "<?php echo base_url(); ?>Interview/dashboard"
		// console.log("response", response)
		// }
		// }
		// error: function(err) {
		// 	alert(err);
		// 	console.log("err", err)
		// 	alert(err);
		// }
		// });
		// }
	}

	function getCodeBoxElement(index) {
		return document.getElementById('codeBox' + index);
	}

	function onKeyUpEvent(index, event) {
		const eventCode = event.which || event.keyCode;
		if (getCodeBoxElement(index).value.length === 1) {
			if (index !== 4) {
				getCodeBoxElement(index + 1).focus();
			} else {
				getCodeBoxElement(index).blur();
				// Submit code
				console.log('submit code ');
			}
		}
		if (eventCode === 6 && index !== 1) {
			getCodeBoxElement(index - 1).focus();
		}
	}

	function onFocusEvent(index) {
		console.log("indesx==", index)
		for (item = 1; item < index; item++) {
			const currentElement = getCodeBoxElement(item);
			if (!currentElement.value) {
				currentElement.focus();
				break;
			}
		}
	}
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

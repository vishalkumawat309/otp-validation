<!DOCTYPE html>
<html>
<head>
	<title>Send Otp</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1 class="text-center"></h1>
<hr>
	<div class="row">
	<div class="col-md-9 col-md-offset-2">
		<?php
		if(isset($_POST['verifyotp'])) {
				$otp = $_POST['otp'];
				if($_COOKIE['otp'] == $otp) {
					echo "Congratulation, Your mobile is verified.";
				} else {
					echo "Please enter correct otp.";
				}
			}
		?>
	</div>
		</div>
</div>
</body>
</html>	

<!DOCTYPE html>
<html>
<head>
<title>OTP Varification </title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>

<div class="container">
	<div class="row">
	<div class="col-md-9 col-md-offset-2">
		<?php
			if(isset($_POST['sendopt'])) {
				require('textlocal.class.php');
				require('credential.php');

				$textlocal = new Textlocal(false, false, API_KEY);

                $numbers = array($_POST['mobile']);

				$sender = 'TXTLCL';
				$otp = mt_rand(10000, 99999);
				$message = "Hello " . $_POST['uname'] . " This is your OTP: " . $otp;

				try {
				    $result = $textlocal->sendSms($numbers, $message, $sender);
				    setcookie('otp', $otp);
				    echo "OTP successfully send..";
				} catch (Exception $e) {
				    die('Error: ' . $e->getMessage());
				}
			}

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
<form role="form" method="post" action="index2.php" enctype="multipart/form-data">
		 			<div class="form-heading">Mobile Number Verification</div>
            <div class="form-row">
                    <input type="text" class="form-input" id="otp" name="otp" placeholder="Enter OTP" maxlength="5" required="">
            </div>
             <div class="row">
                <div class="col-sm-9 form-group">
                    <button type="submit" name="verifyotp" class="btn btn-lg btn-info btn-block">Verify</button>
                </div>
            </div>
        </form>
	</div>
</div>
</body>
</html>	

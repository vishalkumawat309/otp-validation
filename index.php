<!DOCTYPE html>
<html>
<head>
<title>OTP Varification </title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>

	<div class="container">
		 <form role="form" method="post" action="index1.php" enctype="multipart/form-data">
		 			<div class="form-heading">Mobile Number Verification</div>
            
			<div class="form-row">
                    <input type="text" class="form-input" id="uname" name="uname" value="" maxlength="10" placeholder="Enter your name" required="">
			</div>
		 

			<div class="form-row">
<input type="text" class="form-input" id="mobile" name="mobile" value="" maxlength="10" placeholder="Enter valid mobile number" required="">
			</div>
	
			 <button type="submit" name="sendopt" class="btn btn-lg  btn-primary">Sign in with OTP </button>
</form>
	</div>

</body>
</html>
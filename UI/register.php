<!DOCTYPE html>
<html>
<head>
	<title>RM ABCD</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row" style="margin-top: 10%;">
			<div class="col-sm-4" id="latarReg">
				<!-- Form -->
				<form method="post" action="hregister.php" style="background-color: lavender; padding-left: 20%;">
					<fieldset>
					<legend>Register</legend>
					First Name<br>
					<input class="txtReg" type="text" name="fnama" required style="margin-bottom: 5px;"><br>
					Last Name<br>
					<input class="txtReg" type="text" name="lnama" required style="margin-bottom: 5px;"><br>
					Phone Number<br>
					<input class="txtReg" type="text" name="nohp" required style="margin-bottom: 5px;"><br>
					Gender<br>
					<input type="radio" name="gender" value="male" checked> Male<br>
					<input type="radio" name="gender" value="female" style="margin-bottom: 5px;"> Female<br>
					Email<br>
					<input class="txtReg" type="email" name="email" required style="margin-bottom: 5px;"><br>
					Password<br>
					<input class="txtReg" type="password" name="pass" required style="margin-bottom: 10px;"> <br>
					<input id="btnSbmt" type="submit" name="oke" class="btn btn-primary" style="padding-left: 50px; padding-right: 50px; margin-left: 15px;">
					</fieldset>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
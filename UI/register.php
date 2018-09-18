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
  	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row" style="margin-top: 5%;">
			<div class="col-sm-4" id="latarReg">
				<!-- Form -->
				<form method="post" action="hregister.php" style="background-color: lavender; padding-left: 20%;">
					<fieldset>
					<legend>Register</legend>
					Fullname<br>
					<input type="text" name="nama" required style="margin-bottom: 5px;"><br>
					Username<br>
					<input type="text" name="unama" required style="margin-bottom: 5px;"><br>
					Place & Date of Birth<br>
					<input type="text" name="nohp" required style="margin-bottom: 5px;"><br>
					Address<br>
					<input type="text" name="Address" required style="margin-bottom: 5px;"><br>
					Gender<br>
					<input type="radio" name="gender" value="male" checked> Male<br>
					<input type="radio" name="gender" value="female" style="margin-bottom: 5px;"> Female<br>
					Role<br>
					<select name="Role" style="margin-bottom: 5px;">
    					<option value="Kasir">Kasir</option>
    					<option value="Dapur">Dapur</option>
    					<option value="Manager">Manager</option>
  					</select>
  					<br>
					Password<br>
					<input type="password" name="pass" required style="margin-bottom: 10px;"> <br>
					<input type="submit" name="oke" class="btn btn-primary" style="padding-left: 50px; padding-right: 50px; margin-left: 15px;">
					</fieldset>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
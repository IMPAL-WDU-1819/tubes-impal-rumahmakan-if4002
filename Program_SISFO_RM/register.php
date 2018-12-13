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
<body background= "assets/img/bg_food.jpg">
	<div class="container" style="margin-top: 7%;">
		<div class="row">
			<div class="boxRL" id="latarReg">
				<!-- Form -->
				<form method="post" action="fungsi/pregister.php" class="form-horizontal">
					<h2>Register</h2>
					<div class="form-group">
						<label for="nama" class="col-sm-4 control-label">Fullname</label>
						<div class="col-sm-8">
							<input type="text" class="form-control"  name="nama" id="nama" placeholder="Fullname" required>
						</div>
					</div>
					<div class="form-group">
							<label for="unama" class="col-sm-4 control-label">Username</label>
							<div class="col-sm-8">
								<input type="text" class="form-control"  name="unama" id="unama" placeholder="Username" required>
							</div>
					</div>
					<div class="form-group">
							<label for="pass" class="col-sm-4 control-label">Password</label>
							<div class="col-sm-8">
								<input type="password" class="form-control"  name="pass" id="pass" placeholder="Password" required>
							</div>
					</div>
					<div class="form-group">
						<label for="ttl" class="col-sm-4 control-label">Date of Birth</label>
						<div class="col-sm-8">
							<input type="date" class="form-control"  name="ttl" id="ttl" placeholder="Place & Date of Birth" required>
						</div>
					</div>
					<div class="form-group">
						<label for="address" class="col-sm-4 control-label">Address</label>
						<div class="col-sm-8">
							<input type="text" class="form-control"  name="address" id="Address" placeholder="Address" required>
						</div>
					</div>
					<div class="form-group">
						<label for="gender" class="col-sm-4 control-label">Gender</label>
						<div class="radio col-sm-8">
							<label>
						  	  <input type="radio" name="gender" id="gender1" value="male" checked required>
								Male
							</label>
						</div>
						<div class="radio  col-sm-offset-4 col-sm-8">
							<label>
							  <input type="radio" name="gender" id="gender2" value="female">
							  Female
							</label>
						 </div>
					</div>
					<div class="form-group">
						<label for="role" class="col-sm-4 control-label">Role</label>
						<div class="col-sm-8">
							<select class="form-control col-sm-12" name="role" style="height: 40px;" required>
								<option value="kasir">Kasir</option>
								<option value="gudang">Gudang</option>
								<option value="manager">Manager</option>
							</select>
						</div>
					</div>
  					<br>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-primary btn-lg btn-block" id="btnRegister" name="Register">Sign Up</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
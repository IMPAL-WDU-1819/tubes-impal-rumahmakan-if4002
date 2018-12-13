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
<body background= "assets/img/bg_food.jpg">
	<div class="container" style="margin-top: 15%;">
		<div class="row">
			<div class="boxRL"  id="latarTabel">
				<!-- Form Sign In-->
				<form name="singin" method="post" action="fungsi/psignin.php" style="align-content: center" class="form-horizontal">
						<h2>Sign In</h2>
						<h2></h2>
						<div class="form-group">
							<label for="username" class="col-sm-2 control-label glyphicon glyphicon-user"></label>
							<div class="col-sm-10">
								<input type="text" class="form-control"  name="unama" id="email" placeholder="Username" required>
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="col-sm-2 control-label glyphicon glyphicon-lock"></label>
							<div class="col-sm-10">
								<input type="password" class="form-control"  name="pass" id="pass" placeholder="Password" required>
							</div>
						</div>
						<div class="form-group">
								<label for="role" class="col-sm-2 control-label">Role</label>
								<div class="col-sm-10">
									<select class="form-control col-sm-12" name="role" style="height: 40px;" required>
										<option value="kasir">Kasir</option>
										<option value="gudang">Gudang</option>
										<option value="manager">Manager</option>
									</select>
								</div>
							</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary btn-lg btn-block" id="bynLgn" name="sbmt">Sign In</button>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offser-2 col-sm-10">
								Belum Punya Akun? Klik<a href="register.php" style="margin-left: 10px; align-content: center" >Disini</a>
							</div>
						</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
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
  	<script type="text/javascript">
  	function validasiForm() {
    var x = document.forms["sinin"]["email"].value;
    var y = document.forms["sinin"]["pass"].value;
    	if (x == "" && y == "") {
        	alert("Username dan Password harus diisi!");
        return false;
    	} else if (x == "") {
    		alert("Username harus diisi!")
    		return false;
    	} else if (y == "") {
    		alert("Password harus diisi!")
    	} else {
        header('location: hsignin.php')
      }
	}
  	</script>
</head>
<body>
	<div class="container" style="background-color: lavender; margin-top: 15%;">
		<div class="row">
			<div class="col-sm-8" id="latarTabel">
				<!-- Form Sign In-->
				<form name="sinin" onsubmit="return validasiForm()" method="post" action="hsignin.php" style="padding-left: 60%;">
					<fieldset>
						<legend>Sign In</legend>
						<span id="icn1" class="glyphicon glyphicon-user" style="padding-right: 10px; padding-bottom: 15px;"></span>
            <input type="email" name="email" placeholder="Email" ><br>
						<span id="icn1" class="glyphicon glyphicon-lock" style="padding-right: 10px; padding-bottom: 15px;"></span>
            <input type="password" name="pass" placeholder="Password"><br>
            <select name="Role" style="margin-bottom: 5px; padding-left: 60px; padding-right: 35px; margin-left: 23px;">
              <option>Role</option>
              <option value="Kasir">Kasir</option>
              <option value="Dapur">Dapur</option>
              <option value="Manager">Manager</option>
            </select><br>
						<input id="btnLgn" type="submit" name="sbmt" value="Login" class="btn btn-primary" style="padding-left: 50px; padding-right: 50px; margin-left: 40px;"><br>
            <a href="register.php" style="margin-left: 10px;">Belum Punya Akun? Klik Disini</a>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
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
<div class="row">
  <div class="col-sm-2">
    <img src="logo.png" class="rounded" alt="Cinque Terre" style="margin-left: 60px;">
  </div>
  <div class="col-sm-5" style="background-color: blue;">
    <h2>KELOLA BAHAN</h2>
  </div>
  <div class="col-sm-5" style="background-color: blue;">
    <h3>Nama User</h3>
  </div>
</div>
<div class="row">
  <div class="col-sm-2">
    <button type="button" class="btn" id="btnlftT">Transaksi</button>
  </div>
  <div class="col-sm-2"></div>
  <div class="col-sm-8"><h4>Daftar Bahan</h4></div>
</div>
<div class="row">
  <div class="col-sm-2">
    <button type="button" class="btn" id="btnlftHM">Menu
    </button>
  </div>
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
    <table class="table-bordered" style="border-color: black;">
      <tr>
        <th>NO</th>
        <th>Nama Bahan</th>
        <th>Tanggal Kadaluarsa</th>
        <th>Jumlah</th>
        <th>Satuan</th>
      </tr>
      <tr>
        <td>Contoh 1</td>
        <td>Contoh 2</td>
        <td>Contoh 3</td>
        <td>Contoh 4</td>
        <td>Contoh 5</td>
      </tr>
    </table>
  </div>
</div>
<div class="row">
  <div class="col-sm-2">
    <button type="button" class="btn" id="btnlftK">Kelola Bahan
    </button>
  </div>
</div>
<div class="row">
  <div class="col-sm-2">
    <button type="button" class="btn" id="btnlftHM">Home
    </button>
  </div>
  <div class="col-sm-2"></div>
  <div class="col-sm-2">
    <table>
      <tr>
        <td><button>EDIT</button></td>
        <td><button>DELETE</button></td>
      </tr>
    </table>
  </div>
</div>
<div class="row">
  <div class="col-sm-2">
    <button type="button" class="btn btn-danger" id="btnlftHM">Logout
    </button>
  </div>
  <div class="col-sm-2"></div>
  <div class="col-sm-3"></div>
  <div class="col-sm-2">
    <table>
      <tr>
        <td><button>SUBMIT</button></td>
      </tr>
    </table>
  </div>
</div>
</body>
</html>
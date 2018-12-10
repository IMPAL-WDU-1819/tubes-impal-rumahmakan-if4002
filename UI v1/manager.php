<?php
session_start(); 
include('koneksi.php');
  if (empty($_SESSION['idlogin'])){
  header("Location: signin.php");
}else if ($_SESSION['idlogin']){
  if ($_SESSION['level']=!"manager"){
    header("Location: signin.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manager</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #FAFAFA">
    <div class="tab">
        <div style="margin: 30px 60px 30px 60px">
            <img src="assets/img/logo.png" width="90%" style="border-radius: 50%; align-content: center">
        </div>
        <button class="tablinks" onclick="openMenu(event, 'home')" id="defaultOpen">Home</button>
        <button class="tablinks" onclick="openMenu(event, 'laporan')">Laporan</button>
        <button class="tablinks" onclick="openMenu(event, 'kelolabahan')">Kelola Bahan</button>
        <button class="tablinks" onclick="openMenu(event, 'meditprofil')">Edit Profile</button>
        <a href="fungsi/plogout.php"><button class="btnS btn btn-outline-danger">Logout</button></a>
    </div>
    <div id="laporan" class="tabcontent">
        <div class="header row">
            <div class="col-sm-9">
                <h3>Laporan</h3>
            </div>
            <div class="col-sm-3 namauser">
                <h4><center>Manager</center></h4>
            </div>
        </div>
        <h3><center>Laporan Transaksi</center></h3>
        <br>
        <div>
            <center>
                <h4>
                    <label class="radio-inline"><input type="radio" name="optradio" value="transaksi">Transaksi</label>
                    <label class="radio-inline"><input type="radio" name="optradio" value="bahan">Bahan</label>
                </h4>
            </center>
        </div>
        <div>
            <form>
                <div class="row">
                    <div class="col-sm-1">
                        Periode : 
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="Tanggal Mulai">
                    </div>
                    <div class="col-sm-1">
                        <center>s/d</center>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" placeholder="Tanggal Akhir">
                    </div>
                </div>
            </form>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6">
                <button class="btn btn-primary pull-right" style="background-color: #26C6DA; border: 0px;">Tampilkan</button>
            </div>
            <div class="col-sm-6">
                <button class="btn btn-primary" style="background-color: #26C6DA; border: 0px;">Cetak</button>
            </div>
        </div>
        <br>
        <table id="mlaporan" class="display table table-striped table-bordered" cellspacing="0" style="width:100%">
            <thead>
                <tr>
                    <th>Id Transaksi</th>
                    <th>Nama Pesanan</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Keterangan</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>A123</td>
                    <td>Daging Ayam</td>
                    <td>16</td>
                    <td>120000</td>
                    <td>12/5/2018</td>
                    <td>12:35</td>
                    <td>asdasd</td>
                    <td>120000</td>
                </tr>
                <tr>
                    <td>A123</td>
                    <td>Daging Ayam</td>
                    <td>16</td>
                    <td>120000</td>
                    <td>12/5/2018</td>
                    <td>12:35</td>
                    <td>asdasd</td>
                    <td>120000</td>
                </tr>
                <tr>
                    <td>A123</td>
                    <td>Daging Ayam</td>
                    <td>16</td>
                    <td>120000</td>
                    <td>12/5/2018</td>
                    <td>12:35</td>
                    <td>asdasd</td>
                    <td>120000</td>
                </tr>
                <tr>
                    <td>A123</td>
                    <td>Daging Ayam</td>
                    <td>16</td>
                    <td>120000</td>
                    <td>12/5/2018</td>
                    <td>12:35</td>
                    <td>asdasd</td>
                    <td>120000</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>Id Transaksi</th>
                    <th>Nama Pesanan</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Keterangan</th>
                    <th>Total Harga</th>
                </tr>
            </tfoot>
        </table>
        <br>
    </div>
<div id="home" class="tabcontent">
        <div class="header row">
            <div class="col-sm-9">
                <h3>Home</h3>
            </div>
            <div class="col-sm-3 namauser">
                <h4>
                    <center>Manager</center>
                </h4>
            </div>
        </div>
        <br>
        <div>
            <h3>Profile</h3>
            <form class="form-horizontal">
                <?php 
                    $id = $_SESSION['idlogin'];
              
                    $sql = "SELECT * from manager where username = '$id'";
                    $query = mysqli_query($conn,$sql);
                        if ($data = mysqli_fetch_array($query)){
                            $nama = $data['nama_manager'];
                            $jk = $data['jeniskelamin'];
                            $ttl = $data['ttl'];
                            $addr = $data['alamat'];
                        }
                 ?>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 control-label">Name : </label>
                    <div class="col-sm-6">
                        <label class="col-sm-2 control-label"><?php echo $nama; ?></label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-2 control-label">Gender : </label>
                    <div class="col-sm-6">
                        <label class="col-sm-2 control-label"><?php echo $jk; ?></label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ttl" class="col-sm-2 control-label">Place & Date of birth : </label>
                    <div class="col-sm-7">
                        <label class="col-sm-2 control-label"><?php echo $ttl; ?></label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-2 control-label">Address : </label>
                    <div class="col-sm-6">
                        <label class="col-sm-2 control-label"><?php echo $addr; ?></label>
                    </div>
                </div>
                <br>
            </form>
        </div>
    </div>
    <div id="kelolabahan" class="tabcontent">
        <div class="header row">
            <div class="col-sm-9">
                <h3>Kelola Bahan</h3>
            </div>
            <div class="col-sm-3 namauser">
                <h4><center>Manager</center></h4>
            </div>
        </div>
        <br>
        <h3><center>Daftar Bahan</center></h3>
        <br>
        <table id="mbahan" class="display table table-striped table-bordered" cellspacing="0" style="width:100%">
            <thead>
                <tr>
                    <th>Id Bahan</th>
                    <th>Nama Bahan</th>
                    <th>Jumlah</th>
                    <th>Satuan</th>
                    <th>harga Satuan</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Kadaluarsa</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = mysqli_query($conn,"SELECT * from bahan");
                        while ($data = mysqli_fetch_array($query)){
                 ?>
                <tr>
                    <td><?php echo $data['id_bahan']; ?></td>
                    <td><?php echo $data['nama_bahan']; ?></td>
                    <td><?php echo $data['jumlah']; ?></td>
                    <td><?php echo $data['satuan']; ?></td>
                    <td><?php echo $data['harga_satuan']; ?></td>
                    <td><?php echo $data['tgl_masuk']; ?></td>
                    <td><?php echo $data['tgl_kadaluarsa']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Id Bahan</th>
                    <th>Nama Bahan</th>
                    <th>Jumlah</th>
                    <th>Satuan</th>
                    <th>harga Satuan</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Kadaluarsa</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <div id="meditprofil" class="tabcontent">
        <div class="header row">
            <div class="col-sm-9">
                <h3>Edit Profile</h3>
            </div>
            <div class="col-sm-3 namauser">
                <h4>
                    <center>Manager</center>
                </h4>
            </div>
        </div>
        <h3>Edit Profile</h3>
        <?php 
            $id = $_SESSION['idlogin'];
              
            $sql = "SELECT * from manager where username = '$id'";
            $query = mysqli_query($conn,$sql);
                if ($data = mysqli_fetch_array($query)){
                    $nama = $data['nama_manager'];
                    $jk = $data['jeniskelamin'];
                    $ttl = $data['ttl'];
                    $addr = $data['alamat'];
                    $pass = $data['password'];
                    $unama = $data['username'];
                }
        ?>
        <form method="post" action="fungsi/uakunm.php" class="form-horizontal">
            <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="unama" id="nama" placeholder="Fullname" value="<?php echo $unama; ?>" readonly>
                </div>
            </div>
            <div class="form-group">
                <label for="nama" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Fullname" value="<?php echo $nama; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="gender" class="col-sm-2 control-label">Gender</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="gender" id="gender" placeholder="Gender" value="<?php echo $jk; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="ttl" class="col-sm-2 control-label">Date of birth</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" name="ttl" id="ttl" placeholder="Date of Birth" value="<?php echo $ttl; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="address" class="col-sm-2 control-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" id="Address" placeholder="Address" value="<?php echo $addr; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="pass" class="col-sm-2 control-label">New Password</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="New Password" value="<?php echo $pass; ?>">
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="col-sm-offset-6 col-sm-2">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" style="background-color: #26C6DA; border: 0px;"
                        id="submit" name="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>

    
</body>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" language="javascript">

    $(document).ready(function() {
        $('#mlaporan').DataTable();
        $('#mbahan').DataTable();
    });

    function openMenu(evt, menuName) {
        var i, tabcontent, tablinks;

        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        document.getElementById(menuName).style.display = "block";
        evt.currentTarget.className += " active";

    }
    document.getElementById("defaultOpen").click(); 
</script>
</html>
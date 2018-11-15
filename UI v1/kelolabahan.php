<?php
session_start();
include('koneksi.php');
  if (empty($_SESSION['idlogin'])){
  header("Location: signin.php");
}//else if ($_SESSION['idlogin']){
  //if ($_SESSION['level']=!"kasir"){
    //header("Location: signin.php");
  //}
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Informasi RM ABCD</title>
	<link rel="stylesheet" href="style.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="post.css">

</head>
<body style="background-color: #FAFAFA">
<div class="tab">
    <div style="margin: 30px 60px 30px 60px">
        <img src="assets/img/logo.png" width="90%" style="border-radius: 50%; align-content: center">
    </div>
    <button class="tablinks" onclick="openMenu(event, 'transaksi')">Transaksi</button>
    <button class="tablinks" onclick="openMenu(event, 'kelolabahan')">Kelola Bahan</button>
    <button class="tablinks" onclick="openMenu(event, 'menu')">Menu</button>
    <button class="tablinks" onclick="openMenu(event, 'home')" id="defaultOpen">Home</button>
    <button class="tablinks" onclick="openMenu(event, 'editprofile')">Edit Profile</button>
    <a href="fungsi/plogout.php"><button class="btnS btn btn-outline-danger">Logout</button></a>
</div>

<div id="home" class="tabcontent">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" id="kanan">Nama User-ID User</a>
                </li>
            </ul>
        </div>
    </nav>
        
    <div class="profile">
        <?php
            $role = $_SESSION['level'];
            $id = $_SESSION['idlogin'];
              
            $sql = "SELECT * from $role where username = '$id'";
            $query = mysqli_query($conn,$sql);
            if ($data = mysqli_fetch_array($query)){
            $nama = $data['nama_kasir'];
            $jk = $data['jeniskelamin'];
            $ttl = $data['ttl'];
            $addr = $data['alamat'];
        }
         ?>
        <center><h2>Profile</h2></center>
        <div class="profile-img" style="margin: 60px 60px 30px 60px">
            <img src="assets/img/pp.jpg" width="25%" style="border-radius: 50%; align-content: center">
        </div>
        <div class="profile-box container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <label>Name</label>
                </div>
                <div class="col-md-5">
                    <p><?php echo $nama;?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Gender</label>
                </div>
                <div class="col-md-5">
                    <p><?php echo $jk;?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Date of Birth</label>
                </div>
                <div class="col-md-5">
                    <p><?php echo $ttl?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Address</label>
                </div>
                <div class="col-md-5">
                    <p><?php echo $addr;?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="menu" class="tabcontent">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" id="kanan">Nama User-ID User</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="content" class="mx-auto d-block">
        <center><h1>Pilih Menu</h1></center>
        <div class="posts">
            <div class="post">
                <div class="masking">
                    <img src="https://cdn.pixabay.com/photo/2013/04/06/11/50/image-editing-101040_960_720.jpg">
                </div>
                <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
                <div class="col-md-3">
                    <h4>Jumlah</h4>
                </div>
                <div class="col-md-6">
                    <input type="number" class="form-control" id="usr">
                </div>
            </div>
            <div class="post">
                <div class="masking">
                    <img src="https://cdn.pixabay.com/photo/2013/04/06/11/50/image-editing-101040_960_720.jpg">
                </div>
                <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
                <div class="col-md-3">
                    <h4>Jumlah</h4>
                </div>
                <div class="col-md-6">
                    <input type="number" class="form-control" id="usr">
                </div>
            </div>
            <div class="post">
                <div class="masking">
                    <img src="https://cdn.pixabay.com/photo/2013/04/06/11/50/image-editing-101040_960_720.jpg">
                </div>
                <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
                <div class="col-md-3">
                    <h4>Jumlah</h4>
                </div>
                <div class="col-md-6">
                    <input type="number" class="form-control" id="usr">
                </div>
            </div>
            <div class="post">
                <div class="masking">
                    <img src="https://cdn.pixabay.com/photo/2013/04/06/11/50/image-editing-101040_960_720.jpg">
                </div>
                <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
                <div class="col-md-3">
                    <h4>Jumlah</h4>
                </div>
                <div class="col-md-6">
                    <input type="number" class="form-control" id="usr">
                </div>
            </div>
            <div class="post">
                <div class="masking">
                    <img src="https://cdn.pixabay.com/photo/2013/04/06/11/50/image-editing-101040_960_720.jpg">
                </div>
                <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
                <div class="col-md-3">
                    <h4>Jumlah</h4>
                </div>
                <div class="col-md-6">
                    <input type="number" class="form-control" id="usr">
                </div>
            </div>
            <div class="post">
                <div class="masking">
                    <img src="https://cdn.pixabay.com/photo/2013/04/06/11/50/image-editing-101040_960_720.jpg">
                </div>
                <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
                <div class="col-md-3">
                    <h4>Jumlah</h4>
                </div>
                <div class="col-md-6">
                    <input type="number" class="form-control" id="usr">
                </div>
            </div>
            <div class="post">
                <div class="masking">
                    <img src="https://cdn.pixabay.com/photo/2013/04/06/11/50/image-editing-101040_960_720.jpg">
                </div>
                <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
                <div class="col-md-3">
                    <h4>Jumlah</h4>
                </div>
                <div class="col-md-6">
                    <input type="number" class="form-control" id="usr">
                </div>
            </div>
            <div class="post">
                <div class="masking">
                    <img src="https://cdn.pixabay.com/photo/2013/04/06/11/50/image-editing-101040_960_720.jpg">
                </div>
                <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
                <div class="col-md-3">
                    <h4>Jumlah</h4>
                </div>
                <div class="col-md-6">
                    <input type="number" class="form-control" id="usr">
                </div>
            </div>
            <div class="post">
                <div class="masking">
                    <img src="https://cdn.pixabay.com/photo/2013/04/06/11/50/image-editing-101040_960_720.jpg">
                </div>
                <h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
                <div class="col-md-3">
                    <h4>Jumlah</h4>
                </div>
                <div class="col-md-6">
                    <input type="number" class="form-control" id="usr">
                </div>
            </div>
        </div>
        <center><button type="button" id="btn" class="btn btn-primary btn-lg">Submit</button></center>
    </div>
</div>

<div id="transaksi" class="tabcontent">
    <div class="header row">
        <div class="col-sm-9">
            <h3>Aplikasi Rumah Makan ABCD Kasir</h3>
        </div>
        <div class="col-sm-3 namauser">
            <h4><center>Nama User - ID</center></h4>
        </div>
    </div>
    <h3>Transaksi</h3>
    <br>
    <div class="row">
        <div class="col-sm-6">
            <div class="row">
                <label for="idmakanan" class="col-sm-3 control-label">ID Makanan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control"  name="idmakanan" id="idmakanan" placeholder="ID Makanan">
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
                <label for="quantity" class="col-sm-3 control-label">Quantity</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control"  name="quantity" id="quantity" placeholder="Quantity">
                </div>
            </div>
        </div>
    </div> 
    <br>
    <div class="row">
        <div class="col-sm-6">
            <div class="row">
                <label for="harga" class="col-sm-3 control-label">Harga</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control"  name="harga" id="harga" placeholder="Harga">
                </div>
            </div>
        </div>
    </div> 
    <br> 
    <h4>Daftar</h4>
    <table id="table_id" class="display table table-striped table-bordered" cellspacing="0" style="width:100%">
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
                <th> <center>Action</center></th>
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
                <th> <center>Action</center></th>
            </tr>
        </tfoot>
    </table>
    <br>
    <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <label for="total" class="col-sm-3 control-label">Total</label>
                    <div class="col-sm-6">
                        <!--isi nya jumlah dari total harga -->
                        <input type="text" class="form-control"  name="Total" id="total" disabled>
                    </div>
                </div>
            </div>
        </div> 
        <br>
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <label for="bayar" class="col-sm-3 control-label">Bayar</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control"  name="bayar" id="bayar" placeholder="Bayar">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <label for="kembalian" class="col-sm-3 control-label">Kembalian</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control"  name="kembalian" id="kembalian" placeholder="Kembalian">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <button>Proses</button>
                </div>
            </div>
        </div> 
        <br>
    </div>
</div>

<div id="kelolabahan" class="tabcontent">
    <div class="header row">
        <div class="col-sm-9">
            <h3>Kelola Bahan</h3>
        </div>
        <div class="col-sm-3 namauser">
            <h4><center>Nama User - ID</center></h4>
        </div>
    </div>
    <br>
    <h3><center><strong>Daftar Bahan</strong></center></h3>
    <br>
    <table id="table_id" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Id Bahan</th>
                <th>Nama Bahan</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>harga Satuan</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Kadaluarsa</th>
                <th> <center>Action</center></th>
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
                <td>
                <center>
                    <button class="btn btn-primary glyphicon glyphicon-edit" data-toggle = "modal" data-target ="#myModal<?php echo $data['id_bahan']?>">
                    </button>
                    <div id="myModal<?php echo $data['id_bahan']; ?>" class="modal fade" role="dialog" style="color:black;">
                        <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Data Bahan</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>  
                            </div>
                            <div class="modal-body">
                                <form method="post" action="fungsi/ubahan.php">
                                <div class="form-group">
                                    <label>ID Bahan</label>
                                    <input type="text" class="form-control" name="id_bahan" value="<?php echo $data['id_bahan'];?>"readonly>
                                    <?php echo("<script>console.log('PHP: ".$data['id_bahan']."');</script>"); ?>
                                </div>
                                <div class="form-group">
                                    <label>Nama Bahan</label>
                                    <input type="text" class="form-control" name="nama_bahan" value="<?php echo $data['nama_bahan'];?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Jumlah</label>
                                        <input type="text" class="form-control" name="jumlah"  value="<?php echo $data['jumlah'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Satuan</label>
                                        <input type="text" class="form-control" name="satuan"  value="<?php echo $data['satuan'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Harga Satuan</label>
                                        <input type="text" class="form-control" name="harga_satuan"  value="<?php echo $data['harga_satuan'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Masuk</label>
                                        <input type="date" class="form-control" name="tgl_masuk"  value="<?php echo $data['tgl_masuk'];?>">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Kadaluarsa</label>
                                        <input type="text" class="form-control" name="tgl_kadaluarsa" value="<?php echo $data['tgl_kadaluarsa'];?>">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>                    
                </center>
                </td>
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
                <th> <center>Action</center></th>
            </tr>
        </tfoot>
    </table>
</div>

<div id="editprofile" class="tabcontent">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" id="kanan">Nama User-ID User</a>
                </li>
            </ul>
        </div>
    </nav>
        
    <div class="profile">
        <div class="profile-img" style="margin: 60px 60px 30px 60px">
            <img src="assets/img/pp.jpg" width="25%" style="border-radius: 50%; align-content: center">
        </div>
        
        <div class="profile-box container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <label>Edit Profile</label>
                </div>
                <div class="col-md-6">
                    <div class="profile-image">
                        <div class="file btn btn-lg btn-sm" style="background-color:grey; border-color:grey;">
                            <input type="file" name="file"/>
                        </div>
                    </div>
                </div>
            </div>    
            <div class="row">
                <div class="col-md-4">
                    <label>Name</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="usr">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label>Gender</label>
                </div>
                <div class="col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="male" checked>Male
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="female">Female
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                     <label>Place & Date of Birth</label>
                </div>
                <div class="col-md-6">
                        <input type="text" class="form-control" id="usr">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label>Address</label>
                </div>
                <div class="col-md-6">
                    <textarea class="form-control" rows="5" id="address"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label>New Password</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="usr">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"></label>
                        <div class="col-lg-9">
                            <input type="reset" class="btn btn-secondary" value="Cancel" />
                            <input type="button" class="btn btn-primary" value="Save Changes" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>        
</div>
  
<script type="text/javascript" language="javascript">

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
    
    $(document).ready(function() {
        $('#table_id').DataTable();

} );
</script>
</body>
</html>
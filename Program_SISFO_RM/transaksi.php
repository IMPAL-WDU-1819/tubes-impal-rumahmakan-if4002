<?php
session_start();
include('koneksi.php');
  if (empty($_SESSION['idlogin'])){
  header("Location: signin.php");
} else if ($_SESSION['idlogin']){
  if ($_SESSION['level']!="kasir"){
    header("Location: login.php");
  }
}
?>
<?php  
$id = $_SESSION['idlogin'];
$role = $_SESSION['level'];
function namaU($p,$q)
{
    include ('koneksi.php');
    $sql = "SELECT nama_kasir from kasir where username = '$p'";
    $query = mysqli_query($conn,$sql);
    if ($data = mysqli_fetch_array($query)){
        $nama = $data['nama_kasir'];
    }
    echo "Hai! ".$nama."-".$q;
}
function harga($z)
{
    include ('koneksi.php');
    $sql = "SELECT sum(total_harga) from transaksi where id_transaksi = $z and status = 'Pesan'";
    $query = mysqli_query($conn,$sql);
    if (empty($data = mysqli_fetch_array($query))) {
        echo $total = 0;
    } else {
        echo $total = $data['sum(total_harga)'];
    }
    
}
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
    <script>     
        $(document).ready(function(){
            $("#cbcb").click(function(){
                $hasil = ($("#bayar").val() - $("#total").val());
                $("#kembalian").val($hasil);
            });
        });
        function bayar(x) {
            xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET","ppesan.php?q="+x,true);
            xmlhttp.send();
        }
    </script>

</head>
<body style="background-color: #FAFAFA;">
<div class="tab">
    <div style="margin: 30px 60px 30px 60px">
        <img src="assets/img/logo.png" width="90%" style="border-radius: 50%; align-content: center">
    </div>
    <button class="tablinks" onclick="openMenu(event, 'transaksi')">Transaksi</button>
    <button class="tablinks" onclick="openMenu(event, '#')" disabled>Kelola Bahan</button>
    <button class="tablinks" onclick="openMenu(event, 'menu')" id="defaultOpen">Menu</button>
    <button class="tablinks" onclick="openMenu(event, 'home')" >Home</button>
    <button class="tablinks" onclick="openMenu(event, 'editprofile')">Edit Profile</button>
    <a href="fungsi/plogout.php"><button class="btnS btn btn-outline-danger">Logout</button></a>
</div>

<div id="home" class="tabcontent">
    <nav class="navbar navbar-expand-lg navbar-light header">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" class="namaU"><?php namaU($id,$role); ?></a>
                </li>
            </ul>
        </div>
    </nav>
        
    <div class="profile">
        <center><h2>Profile</h2></center>
        <!-- <div class="profile-img" style="margin: 60px 60px 30px 60px">
            <img src="assets/img/pp.jpg" width="25%" style="border-radius: 50%; align-content: center">
        </div> -->
        <div class="profile-box container-fluid">
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
            <div class="row">
                <div class="col-md-5">
                    <label>Name</label>
                </div>
                <div class="col-md-5">
                    <p><?php echo $nama; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Gender</label>
                </div>
                <div class="col-md-5">
                    <p><?php echo $jk; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Date of Birth</label>
                </div>
                <div class="col-md-5">
                    <p><?php echo $ttl; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <label>Address</label>
                </div>
                <div class="col-md-5">
                    <p><?php echo $addr; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="menu" class="tabcontent">
    <div class="header row">
        <div class="col-sm-9">
            <h3>Aplikasi Rumah Makan ABCD Kasir</h3>
        </div>
        <div class="col-sm-3 namauser">
            <h5><center><?php namaU($id,$role); ?></center></h5>
        </div>
    </div>
    <form method="post" action="fungsi/imakanan.php">
    <div id="content" class="mx-auto d-block konten">
        <center><h1>Pilih Menu</h1></center>
        <div class="posts">
            <div class="post">
                <div class="masking">
                    <img src="assets/img/menu/1.jpg">
                </div>
                <h4>Ayam Goreng</h4>
                <div class="col-md-3">
                    <h5>Jumlah</h5>
                </div>
                <div class="col-md-6">
                    <input type="hidden" name="ayam" value="Ayam Goreng">
                    <input type="hidden" name="hayam" value="10000">
                    <input type="number" class="form-control" id="usr" name="jayam">
                    <input type="text" name="aketerangan" class="form-control" id="usr" placeholder="Keterangan">
                </div>
            </div>
            <div class="post">
                <div class="masking">
                    <img src="assets/img/menu/2.jpg">
                </div>
                <h4><a href="#">Burger</a></h4>
                <div class="col-md-3">
                    <h5>Jumlah</h5>
                </div>
                <div class="col-md-6">
                    <input type="hidden" name="burger" value="Burger">
                    <input type="hidden" name="hburger" value="20000">
                    <input type="number" class="form-control" id="usr" name="jburger">
                    <input type="text" name="bketerangan" class="form-control" id="usr" placeholder="Keterangan">
                </div>
            </div>
            <div class="post">
                <div class="masking">
                    <img src="assets/img/menu/3.jpg">
                </div>
                <h4><a href="#">Pizza</a></h4>
                <div class="col-md-3">
                    <h5>Jumlah</h5>
                </div>
                <div class="col-md-6">
                    <input type="hidden" name="pizza" value="Pizza">
                    <input type="hidden" name="hpizza" value="25000">
                    <input type="number" class="form-control" id="usr" name="jpizza">
                    <input type="text" name="pketerangan" class="form-control" id="usr" placeholder="Keterangan">
                </div>
            </div>
            <div class="post">
                <div class="masking">
                    <img src="assets/img/menu/4.jpg">
                </div>
                <h4><a href="#">Lasagna</a></h4>
                <div class="col-md-3">
                    <h5>Jumlah</h5>
                </div>
                <div class="col-md-6">
                    <input type="hidden" name="lasagna" value="Lasagna">
                    <input type="hidden" name="hlasagna" value="30000">
                    <input type="number" class="form-control" id="usr" name="jlasagna">
                    <input type="text" name="lketerangan" class="form-control" id="usr" placeholder="Keterangan">
                </div>
            </div>
            <div class="post">
                <div class="masking">
                    <img src="assets/img/menu/5.jpg">
                </div>
                <h4><a href="#">Spaghetti</a></h4>
                <div class="col-md-3">
                    <h5>Jumlah</h5>
                </div>
                <div class="col-md-6">
                    <input type="hidden" name="spaghetti" value="Spaghetti">
                    <input type="hidden" name="hspaghetti" value="15000">
                    <input type="number" class="form-control" id="usr" name="jspaghetti">
                    <input type="text" name="spketerangan" class="form-control" id="usr" placeholder="Keterangan">
                </div>
            </div>
            <div class="post">
                <div class="masking">
                    <img src="assets/img/menu/6.jpg">
                </div>
                <h4><a href="#">Steak</a></h4>
                <div class="col-md-3">
                    <h5>Jumlah</h5>
                </div>
                <div class="col-md-6">
                    <input type="hidden" name="steak" value="Steak">
                    <input type="hidden" name="hsteak" value="35000">
                    <input type="number" class="form-control" id="usr" name="jsteak">
                    <input type="text" name="stketerangan" class="form-control" id="usr" placeholder="Keterangan">
                </div>
            </div>
            <div class="post">
                <div class="masking">
                    <img src="assets/img/menu/7.jpg">
                </div>
                <h4><a href="#">Lemon Tea</a></h4>
                <div class="col-md-3">
                    <h5>Jumlah</h5>
                </div>
                <div class="col-md-6">
                    <input type="hidden" name="lemont" value="Lemon Tea">
                    <input type="hidden" name="hlemont" value="8000">
                    <input type="number" class="form-control" id="usr" name="jlemont">
                    <input type="text" name="ltketerangan" class="form-control" id="usr" placeholder="Keterangan">
                </div>
            </div>
            <div class="post">
                <div class="masking">
                    <img src="assets/img/menu/8.jpg">
                </div>
                <h4><a href="#">Es Teh Manis</a></h4>
                <div class="col-md-3">
                    <h5>Jumlah</h5>
                </div>
                <div class="col-md-6">
                    <input type="hidden" name="tehm" value="Es Teh Manis">
                    <input type="hidden" name="htehm" value="5000">
                    <input type="number" class="form-control" id="usr" name="jtehm">
                    <input type="text" name="tmketerangan" class="form-control" id="usr" placeholder="Keterangan">
                </div>
            </div>
        </div>
        <center><button type="submit" id="btn" class="btn btn-primary btn-lg" style="background-color: #00BCD4; border: 0px">Submit</button></center>
    </div>
</form>
</div>

<div id="transaksi" class="tabcontent">
    <div class="header row">
        <div class="col-sm-9">
            <h3>Aplikasi Rumah Makan ABCD Kasir</h3>
        </div>
        <div class="col-sm-3 namauser">
            <h5><center><?php namaU($id,$role); ?></center></h5>
        </div>
    </div>
    <div class="konten">
        <h3>Daftar Transaksi </h3>
        <table id="ttransaksi" class="display table table-striped table-bordered" cellspacing="0" style="width:100%">
            <thead>
                <tr>
                    <th>Id Transaksi</th>
                    <th>Nama Pesanan</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Tanggal</th>
                    <th>Keterangan</th>
                    <th>Total Harga</th>
                    <th> <center>Action</center></th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $query = mysqli_query($conn,"SELECT * from transaksi where status = 'Pesan'");
                while ($data = mysqli_fetch_array($query)) {
                    $idtr = $data['id_transaksi'];
                ?>
                <tr>
                    <td><?php echo $data['id_transaksi']; ?></td>
                    <td><?php echo $data['nama_pesanan']; ?></td>
                    <td><?php echo $data['jumlah']; ?></td>
                    <td><?php echo $data['harga']; ?></td>
                    <td><?php echo $data['tanggal']; ?></td>
                    <td><?php echo $data['keterangan']; ?></td>
                    <td><?php echo $data['total_harga']; ?></td>
                    <td>
                        <center>
                            <button class="btn btn-primary glyphicon glyphicon-edit" data-toggle = "modal" data-target ="#myModal<?php echo $data['id']?>">
                            </button>
                            <div id="myModal<?php echo $data['id'];?>" class="modal fade" role="dialog" style="color:black;">
                            <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Pesanan</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>  
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="fungsi/upesanan.php">
                                    <div class="form-group">
                                        <label>ID Transaksi</label>
                                        <input type="text" class="form-control" name="id_transaksi" value="<?php echo $data['id_transaksi'];?>"readonly>
                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Pesanan</label>
                                        <input type="text" class="form-control" name="nama_pesanan" value="<?php echo $data['nama_pesanan'];?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Jumlah</label>
                                            <input type="text" class="form-control" name="jumlah"  value="<?php echo $data['jumlah'];?>">
                                            <input type="hidden" name="harga" value="<?php echo $data['harga'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Keterangan</label>
                                            <input type="text" class="form-control" name="keterangan"  value="<?php echo $data['keterangan'];?>">
                                    </div>
                                    <button type="submit" class="btn btn-primary"  style="background-color: #00BCD4; border: 0px">Update</button>
                                    </form>
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                            <a href="fungsi/dpesanan.php?id=<?php echo $data['id'];?>" onclick="return confirm('Delete?')"><button class="btn btn-danger glyphicon glyphicon-trash"></button></a>                         
                        </center>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Id Transaksi</th>
                    <th>Nama Pesanan</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Tanggal</th>
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
                            <input type="text" class="form-control"  name="Total" id="total" value="<?php harga($idtr); ?>" disabled>
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
                            <input type="text" class="form-control"  name="bayar" id="bayar" placeholder="Bayar" required>
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
                            <input type="text" class="form-control"  name="kembalian" id="kembalian" placeholder="Kembalian" disabled>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <button id="cbcb" style="background-color: #00BCD4; border: 0px" onclick="bayar(<?php echo $idtr; ?>)">Proses</button>
                    </div>
                </div>
            </div> 
            <br>
        </div>
    </div>
</div>

<div id="editprofile" class="tabcontent">
    <div class="header row">
        <div class="col-sm-9">
            <h3>Aplikasi Rumah Makan ABCD Kasir</h3>
        </div>
        <div class="col-sm-3 namauser">
            <h5><center><?php namaU($id,$role); ?></center></h5>
        </div>
    </div>
        
    <div class="profile konten">
        
        <div class="profile-box container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <H3>Edit Profile</h3>
                </div>
                <?php
                $id = $_SESSION['idlogin'];
                  
                $sql = "SELECT * from kasir where username = '$id'";
                $query = mysqli_query($conn,$sql);
                if ($data = mysqli_fetch_array($query)){
                $nama = $data['nama_kasir'];
                $jk = $data['jeniskelamin'];
                $ttl = $data['ttl'];
                $addr = $data['alamat'];
                $pass = $data['password'];
                }
                ?>
                
            </div>
            <div>
            <form method="post" action="fungsi/uakunk.php">
            <div class="row">
                <div class="col-md-4">
                    <label>Username</label>
                </div>
                <div class="col-md-6">
                    <input type="text" value="<?php echo $id; ?>" class="form-control" name="unama" id="usr" readonly>
                </div>
            </div>    
            <div class="row">
                <div class="col-md-4">
                    <label>Name</label>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="usr" name="nama" value="<?php echo $nama; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label>Gender</label>
                </div>
                <div class="col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="male">male
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" value="female">female
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                     <label>Date of Birth</label>
                </div>
                <div class="col-md-6">
                        <input type="date" class="form-control" id="usr" name="ttl" value="<?php echo $ttl; ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label>Address</label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="alamat" value="<?php echo $addr; ?>" class="form-control" id="usr">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label>Password</label>
                </div>
                <div class="col-md-6">
                    <input type="password" class="form-control" id="usr" value="<?php echo $pass; ?>" name="pass">
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
                            <input type="submit" class="btn btn-primary"  style="background-color: #00BCD4; border: 0px" value="Save Changes" />
                        </div>
                    </div>
                </div>
            </div>
            </form>
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
        $('#ttransaksi').DataTable();

} );
</script>
</body>
</html>
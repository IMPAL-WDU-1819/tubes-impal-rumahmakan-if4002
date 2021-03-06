<?php
session_start();
include('koneksi.php');
  if (empty($_SESSION['idlogin'])){
  header("Location: signin.php");
} else if ($_SESSION['idlogin']){
    if ($_SESSION['level']!="gudang"){
    header("Location: signin.php");
    }
}
?>
<?php  
$id = $_SESSION['idlogin'];
$role = $_SESSION['level'];
function namaU($p,$q)
{
    include ('koneksi.php');
    $sql = "SELECT nama from gudang where username = '$p'";
    $query = mysqli_query($conn,$sql);
    if ($data = mysqli_fetch_array($query)){
        $nama = $data['nama'];
    }

    echo "Hai! ".$nama."-".$q;
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

</head>
<body style="background-color: #FAFAFA">
<div class="tab">
    <div style="margin: 30px 60px 30px 60px">
        <img src="assets/img/logo.png" width="90%" style="border-radius: 50%; align-content: center">
    </div>
    <button class="tablinks" onclick="openMenu(event, 'transaksi')" disabled>Transaksi</button>
    <button class="tablinks" onclick="openMenu(event, 'kelolabahan')" id="defaultOpen">Kelola Bahan</button>
    <button class="tablinks" onclick="openMenu(event, 'menu')" disabled>Menu</button>
    <button class="tablinks" onclick="openMenu(event, 'home')" >Home</button>
    <button class="tablinks" onclick="openMenu(event, 'editprofile')">Edit Profile</button>
    <a href="fungsi/plogout.php"><button class="btnS btn btn-outline-danger">Logout</button></a>
</div>

<div id="home" class="tabcontent">
    <div class="header row">
            <div class="col-sm-9">
                <h3>Kelola Bahan</h3>
            </div>
            <div class="col-sm-3 namauser">
                <h5><center><?php namaU($id,$role); ?></center></h5>
            </div>
        </div>
            
        <div class="profile konten">
            <?php
                $role = $_SESSION['level'];
                $id = $_SESSION['idlogin'];
                
                $sql = "SELECT * from gudang where username = '$id'";
                $query = mysqli_query($conn,$sql);
                if ($data = mysqli_fetch_array($query)){
                $nama = $data['nama'];
                $jk = $data['jeniskelamin'];
                $ttl = $data['ttl'];
                $addr = $data['alamat'];
            }
            ?>
            <center><h2>Profile</h2></center>
            <!-- <div class="profile-img" style="margin: 60px 60px 30px 60px">
                <img src="assets/img/pp.jpg" width="25%" style="border-radius: 50%; align-content: center">
            </div> -->
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
</div>

<div id="kelolabahan" class="tabcontent">
    <div class="header row">
        <div class="col-sm-9">
            <h3>Kelola Bahan</h3>
        </div>
        <div class="col-sm-3 namauser">
            <h5><center><?php namaU($id,$role); ?></center></h5>
        </div>
    </div>
    <div class="konten">
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
                                    <button type="submit" class="btn btn-primary"  style="background-color: #00BCD4; border: 0px">Update</button>
                                    </form>
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                        <a href="fungsi/dbahan.php?id_bahan=<?php echo $data['id_bahan'];?>" onclick="return confirm('Delete?')"><button class="btn btn-danger glyphicon glyphicon-trash"></button></a>                    
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
        <br>
        <br>
        <div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tbahan">Tambah Bahan</button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="tbahan" tabindex="-1" role="dialog" aria-labelledby="tbahanlabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tbahanlabel">Tambah Bahan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form -->
                    <form method="post" action="fungsi/tbahan.php" class="form-horizontal">
                        <h2>Tambah Bahan</h2>
                        <div class="form-group">
                                <label for="nama" class="col-sm-4 control-label">Nama Bahan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control"  name="nbahan" id="nama" placeholder="Nama Bahan" required>
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="jumlah" class="col-sm-4 control-label">Jumlah</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control"  name="jumlah" id="jumlah" placeholder="Jumlah" required>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="satuan" class="col-sm-4 control-label">Satuan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control"  name="satuan" id="satuan" placeholder="Satuan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga" class="col-sm-4 control-label">Harga Satuan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control"  name="harga" id="harga" placeholder="Harga Satuan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tglmasuk" class="col-sm-4 control-label">Tanggal Masuk</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control"  name="tglmasuk" id="tglmasuk" placeholder="Tanggal Masuk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tglkadaluarsa" class="col-sm-4 control-label">Tanggal Kadaluarsa</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control"  name="tglkadaluarsa" id="tglkadaluarsa" placeholder="Tanggal Kadaluarsa" required>
                            </div>
                        </div>
                        <br>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="editprofile" class="tabcontent">
    <div class="header row">
        <div class="col-sm-9">
            <h3>Kelola Bahan</h3>
        </div>
        <div class="col-sm-3 namauser">
            <h5><center><?php namaU($id,$role); ?></center></h5>
        </div>
    </div>
        
    <div class="profile konten">
        <div class="profile-box container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <h3>Edit Profile</h3>
                </div>
                <?php
                $role = $_SESSION['level'];
                $id = $_SESSION['idlogin'];
                  
                $sql = "SELECT * from gudang where username = '$id'";
                $query = mysqli_query($conn,$sql);
                if ($data = mysqli_fetch_array($query)){
                $nama = $data['nama'];
                $jk = $data['jeniskelamin'];
                $ttl = $data['ttl'];
                $addr = $data['alamat'];
                $pass = $data['password'];
                }
                ?>
            </div>
            <div>
            <form method="post" action="fungsi/uakund.php">
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
                    <input type="text" value="<?php echo $nama; ?>" class="form-control" name="nama" id="usr">
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
                     <label>Date of Birth</label>
                </div>
                <div class="col-md-6">
                        <input type="date" value="<?php echo $ttl; ?>" class="form-control" name="ttl" id="usr">
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
        $('#table_id').DataTable();

} );
</script>
</body>
</html>
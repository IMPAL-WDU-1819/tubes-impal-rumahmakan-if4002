<?php
session_start(); 
include('../koneksi.php');
  if (empty($_SESSION['idlogin'])){
  header("Location: signin.php");
}else if ($_SESSION['idlogin']){
  if ($_SESSION['level']=!"manager"){
    header("Location: signin.php");
  }
}
$id = $_SESSION['idlogin'];
?>
<!-- Setting CSS bagian header/ kop -->
<style type="text/css">
  table.page_header {width: 1020px; border: none; background-color: #DDDDFF; border-bottom: solid 1mm #AAAADD; padding: 2mm }
  table.page_footer {width: 1020px; border: none; background-color: #DDDDFF; border-top: solid 1mm #AAAADD; padding: 2mm}
  h1 {color: #000033}
  h2 {color: #000055}
  h3 {color: #000077}
</style>
<!-- Setting Margin header/ kop -->
<page backtop="14mm" backbottom="14mm" backleft="1mm" backright="10mm">
  <page_header>
    <!-- Setting Header -->
    <table class="page_header">
      <tr>
        <td style="text-align: left;    width: 10%">SISFO RM</td>
        <td style="text-align: center;    width: 80%">LAPORAN RUMAH MAKAN</td>
        <td style="text-align: right;    width: 10%"><?php echo date('d/m/Y'); ?></td>
      </tr>
    </table>
  </page_header>
  <!-- Setting CSS Tabel data yang akan ditampilkan -->
  <style type="text/css">
  .tabel2 {
    border-collapse: collapse;
  }
  .tabel2 th, .tabel2 td {
      padding: 5px 5px;
      border: 1px solid #000;
  }
  </style>
  <table>
    <tr>
      <th rowspan="3"><img src="../assets/img/logo.png" style="width:120px;height:100px" /></th>
      <td align="center" style="width: 800px;"><font style="font-size: 18px"><br><b>RUMAH MAKAN ABCD</b></font>
        <br><br>Restoran dengan kualitas terbaik dan rasa bintang 5.
        <br><br>Telkom University, Bandung | Telp: (022) 7777777</td>
    </tr>
  </table>
  <hr><br>
  <table class="tabel2" style="margin-left: 330px">
    <thead>
      <tr>
        <td style="text-align: center; background: #ddd"><b>No.</b></td>
        <td style="text-align: center; background: #ddd"><b>Tanggal Awal</b></td>
        <td style="text-align: center; background: #ddd"><b>Tanggal Akhir</b></td>
        <td style="text-align: center; background: #ddd"><b>Jenis</b></td>
        <td style="text-align: center; background: #ddd"><b>Jumlah</b></td>
      </tr>
    </thead>
    <tbody>
      <?php
      
      $sql = "SELECT * FROM laporan";
      $query = mysqli_query($conn,$sql);  
      $i   = 1;
      while($data=mysqli_fetch_array($query))
      {
      ?>
      <tr>
        <td style="text-align: center; width=50px;"><?php echo $i; ?></td>
        <td style="text-align: center; width=100px;"><?php echo $data['tgl_awal']; ?></td>
        <td style="text-align: center; width=100px;"><?php echo $data['tgl_akhir']; ?></td>
        <td style="text-align: center; width=87px;"><?php echo $data['jenis']; ?></td>
        <td style="text-align: center; width=75px;"><?php echo $data['jumlah']; ?></td>
      </tr>
    <?php
    $i++;
    }
    ?>
    </tbody>
  </table>
  <br><br>
  <!-- Setting Footer -->
  <page_footer>
    <table class="page_footer">
      <tr>
        <td style="width: 33%; text-align: left">
        </td>
        <td style="width: 34%; text-align: center">
          Dicetak oleh: <?php echo $id ?>
        </td>
        <td style="width: 33%; text-align: right">
        </td>
      </tr>
    </table>
  </page_footer>
</page>
<script>
  window.print();
  location.href='../manager.php';
</script>

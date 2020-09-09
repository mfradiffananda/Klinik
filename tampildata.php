<?php
  if($_SESSION['ID']==""){
    header("Location:login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEGER WARAS</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <style>
      .center{
        text-align: center;
      }
      th{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div style="margin-top:20px; margin-left:20px; margin-right:20px; padding:1px; background-color:white;">
      <div style="margin:20px;padding: 1px; background-color:#66b3ff;">
        <h3 style="text-align:center">Daftar Pasian Rawat Jalan</h3>
      </div>
      <div style="margin:20px;">
      <form action='proses.php?aksi=kosongkan' method='post'> <button type="submit" class="btn btn-danger">kosongkan</button></form>
      <table class="table table-bordered table-striped table-hover table-conseded table-responsive" style="margin-top:20px;">
        <tr>
          <th>No</th>
          <th>No Registrasi</th>
          <th>Tanggal Registrasi</th>
          <th>Nama Pasien</th>
          <th>Alamat</th>
          <th>Tanggal Lahir</th>
          <th>Nama Ibu</th>
          <th>Telepon</th>
          <th>Aksi</th>
        </tr>
        <?php
          require_once 'class.php';
          $user = new USER();
          $no = 1;
          foreach($user->tampilpasien() as $pasien) {
        ?>
        <tr>
          <td class="center"><?php echo $no++; ?></td>
          <td class="center"><?php echo $pasien['No']; ?></td>
          <td class="center"><?php echo date("d M Y", strtotime($pasien['TglInput']));?></td>
          <td><?php echo $pasien['NamaPasien']; ?></td>
          <td><?php echo $pasien['Alamat']; ?></td>
          <td class="center"><?php echo date("d M Y", strtotime($pasien['TglLahir']));?></td>
          <td><?php echo $pasien['NamaIbu']; ?></td>
          <td class="center"><?php echo $pasien['Telepon']; ?></td>
          <td>
            <a href="edit.php?id=<?php echo $pasien['No'] ?>"><button class="btn btn-warning">Edit</button></a>
            <a href="proses.php?id=<?php echo $pasien['No'] ?>&aksi=delete"><button class="btn btn-danger">Delete</button></a>
          </td>
        </tr>
        <?php } ?>
      </table>
    </div>
    </div>
    <script src="assets/jquery-1.11.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>

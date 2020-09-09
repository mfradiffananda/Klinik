<?php
  session_start();
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

  </head>
  <body>
    <div style="margin-top:20px; margin-left:230px; margin-right:230px; padding:1px; background-color:white;">
      <div style="margin:20px;padding: 1px; background-color:#66b3ff;">
        <h3 style="text-align:center">Edit Data Pasian Rawat Jalan</h3>
      </div>
      <div style="margin:20px;">
      <?php $id =  $_GET['id'];
        require_once 'class.php'; 
        $user = new USER();
        foreach($user->tampilpasiennya($id) as $pasien) {
      ?>

        <form action='proses.php?aksi=update' method="post">
          <div class="form-group">
            <label for="">No. Registrasi</label>
            <input type="text" class="form-control" id="" value="<?php echo $pasien['No'] ?>" name="no">
            <input type="hidden" class="form-control" id="" value="<?php echo $pasien['No'] ?>" name="nolama">
          </div>
          <div class="form-group">
            <label for="">Nama Pasien</label>
            <input type="text" class="form-control" id="" value="<?php echo $pasien['NamaPasien'] ?>" name="nama">
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" class="form-control" id="" value="<?php echo $pasien['Alamat'] ?>" name="alamat">
          </div>
          <div class="form-group">
            <label for="">Tanggal Lahir</label>
            <input type="date" class="form-control" id="" value="<?php echo $pasien['TglLahir'] ?>" name="tgl">
          </div>
          <div class="form-group">
            <label for="">Nama Ibu</label>
            <input type="text" class="form-control" id="" value="<?php echo $pasien['NamaIbu'] ?>" name="ibu">
          </div>
          <div class="form-group">
            <label for="">No. Telepon</label>
            <input type="text" class="form-control" id="" value="<?php echo $pasien['Telepon'] ?>" name="tlp">
          </div>
          <div class="form-group">
            <button type="reset" class="btn btn-warning">Reset</button>
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
        <?php } ?>
      </div>
    </div>
    <script src="assets/jquery-1.11.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>

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

  </head>
  <body>
    <div style="margin-top:20px; margin-left:230px; margin-right:230px; padding:1px; background-color:white;">
      <div style="margin:20px;padding: 1px; background-color:#66b3ff;">
        <h3 style="text-align:center">Pendaftaran Pasian Rawat Jalan</h3>
      </div>
      <div style="margin:20px;">
        <form action='proses.php?aksi=registrasi' method="post">
          <div class="form-group">
            <label for="">No. Registrasi</label>
            <input type="text" class="form-control" id="" name="no">
          </div>
          <div class="form-group">
            <label for="">Nama Pasien</label>
            <input type="text" class="form-control" id="" name="nama">
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <textarea type="text" class="form-control" id="" name="alamat"></textarea>
          </div>
          <div class="form-group">
            <label for="">Tanggal Lahir</label>
            <input type="date" class="form-control" id="" name="tgl">
          </div>
          <div class="form-group">
            <label for="">Nama Ibu</label>
            <input type="text" class="form-control" id="" name="ibu">
          </div>
          <div class="form-group">
            <label for="">No. Telepon</label>
            <input type="text" class="form-control" id="" name="tlp">
          </div>
          <div class="form-group">
            <button type="reset" class="btn btn-warning">Reset</button>
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      </div>
    </div>
    <script src="assets/jquery-1.11.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>

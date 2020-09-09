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
    <div style="margin-top:20px; margin-left:100px; margin-right:100px; padding:1px; background-color:white;">
      <div style="margin:20px;">
        <div class="row">
          <div class="col-md-4">
            <img class="img-responsive" src="assets/img/doctor_icon.png" alt="Chania">
          </div>
          <div class="col-md-8">
            <p style="font-size:20px;">
              <strong>Klinik</strong> adalah suatu fasilitas kesehatan publik kecil yang didirikan untuk memberikan perawatan kepada pasien luar. Biasanya klinik hanya mengobati penyakit-penyakit ringan seperti demam dan sebagainya, sedangkan kasus-kasus yang lebih parah diajukan ke rumah sakit.
            </p>
            <p style="font-size:20px;">
              <strong>Rawat jalan</strong> adalah pelayanan medis kepada seorang pasien untuk tujuan pengamatan, diagnosis, pengobatan, rehabilitasi, dan pelayanan kesehatan lainnya, tanpa mengharuskan pasien tersebut dirawat inap. Keuntungannya, pasien tidak perlu mengeluarkan biaya untuk menginap (opname).
            </p>
          </div>
        </div>

      </div>
    </div>

    <script src="assets/jquery-1.11.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>

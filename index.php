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
    <title>Klinik Seger Waras</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/style.css">

  </head>
  <body>
  <div class="container" style="background-color:white;margin-top:30px;">
    <h1>KLINIK <i>"Seger Waras"</i></h1>

      <div style="margin:20px">
        <?php
          require_once 'navbar.php';
        ?>
      </div>
      <div style="margin:20px">
        <?php
          if(isset($_GET['page'])){
            $page = $_GET['page'];

            switch ($page) {
              case 'home':
                include "home.php";
                break;
              case 'registrasi':
                include "registrasi.php";
                break;
              case 'laporan':
                include "tampildata.php";
                break;
              case 'edituser':
                include "edituser.php";
                break;
              default:
                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;
            }
          }else{
            include "home.php";
          }

           ?>
      </div>
      <div class="copyright" style="margin-top: 220px;">
        <div class="container">
          <div class="col-md-12">
            <p style="text-align: center;">Copyright (c) 2017 Copyright Holder All Rights Reserved.</p>
          </div>
        </div>
      </div>
  </div>



    <script src="assets/jquery-1.11.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>

<?php
        session_start();
        session_destroy();
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
  <h1 style="text-align: center;margin-top: 70px">Klinik <i>"Seger Waras"<i/></h1>
  <img src="assets/img/logo.png" class="img-responsive" style="width: 150px;height: 150px;margin-left: auto;margin-right: auto;">

  <div class="container" style="margin-top: 10px;">
    <form method="post" action="proses.php?aksi=login" style="margin-left: 400px;margin-right: 400px;">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username">
      </div>
      <div class="form-group">
        <label for="pass">Password</label>
        <input type="password" class="form-control" id="pass" name="pass">
      </div>
      <button type="submit" class="btn btn-warning" style="float: right;">Submit</button>
    </form>
  </div>
      <div class="copyright" style="margin-top: 120px;">
        <div class="container">
          <div class="col-md-12">
            <p style="text-align: center;">Copyright (c) 2017 Copyright Holder All Rights Reserved.</p>
          </div>
        </div>
      </div>

    <script src="assets/jquery-1.11.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
s
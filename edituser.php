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
        <h3 style="text-align:center">Edit User Akses</h3>
      </div>
      <div style="margin:20px;">
      <?php
        require_once 'class.php'; 
        $user = new USER();
        foreach($user->tampildatauser() as $data) {
      ?>
        <form action='proses.php?aksi=updateuser' method="post">
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" class="form-control" id="" name="username" value="<?php echo $data['Username']; ?>">
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="text" class="form-control" id="" name="pass" value="<?php echo $data['Password']; ?>">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </form>
        <?php } ?>
      </div>
    </div>
    <script src="assets/jquery-1.11.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>

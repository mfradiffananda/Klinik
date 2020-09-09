<!DOCTYPE html>
<html>
<head>
	<!--<meta http-equiv="Refresh" content="1; URL=index.php?page=registrasi">-->
</head>
<body>
<?php
  session_start();
  require_once 'class.php';
  $aksi = $_GET['aksi'];
  $user = new USER();
  if ($aksi == 'registrasi') {
    if($user->ceknomorregistrasi($_POST['no'])==""){
        $user->registrasi($_POST['no'],$_POST['nama'],$_POST['alamat'],$_POST['tgl'],$_POST['ibu'],$_POST['tlp']);
        header('location:index.php?page=laporan');
    }
    else{
      echo "<script>alert('No registrasi anda sudah digunakan pasien lain')</script>";
    }
  }elseif ($aksi=='kosongkan') {
    $user->kosongkantabel();
    header('location:index.php?page=laporan');
  }elseif ($aksi == 'update') {
    if ($_POST['no']==$_POST['nolama']) {
      $user->updatedata($_POST['nolama'],$_POST['no'],$_POST['nama'],$_POST['alamat'],$_POST['tgl'],$_POST['ibu'],$_POST['tlp']);
      header('location:index.php?page=laporan');
    } else {
      if($user->ceknomorregistrasi($_POST['no'])==""){
        $user->updatedata($_POST['nolama'],$_POST['no'],$_POST['nama'],$_POST['alamat'],$_POST['tgl'],$_POST['ibu'],$_POST['tlp']);
        header('location:index.php?page=laporan');
      }else{
        echo "<script>alert('No registrasi anda sudah digunakan pasien lain')</script>";
      }
    }
  }elseif($aksi == 'delete'){
    $user->hapusdata($_GET['id']);
    header('location:index.php?page=laporan');
  }elseif($aksi == 'login'){
    if ($user->cekdata($_POST['username'],$_POST['pass'])!="") {
    $user->login($_POST['username'],$_POST['pass']);
    } else {
      echo "<script>alert('Data yang anda masukkan salah')</script>";
    }
  }elseif($aksi == 'logout'){
    session_destroy();
    header("location:index.php");
  }elseif($aksi == 'updateuser'){
    $user->updatelogin($_POST['username'],$_POST['pass']);
    header('location:index.php?page=home');
  }
?>
</body>
</html>

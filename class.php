<?php

require_once('dbconfig.php');

class USER
{

	private $conn;

	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }

	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}

	public function ceknomorregistrasi($no){
		$stmt = $this->conn->prepare("SELECT * FROM datapasien WHERE No=:no");
		$stmt->bindparam(":no", $no);
		$stmt->execute();
		if($stmt->rowCount() == 1)
			{
				return true;
			}
	}

	public function registrasi($no,$nama,$alamat,$tgl,$ibu,$tlp)
	{
		$stmt = $this->conn->prepare("INSERT INTO datapasien(No,NamaPasien,Alamat,TglLahir,NamaIbu,Telepon) VALUES ('$no','$nama','$alamat','$tgl','$ibu','$tlp') ");
		$stmt->execute();
	}

	public function tampilpasien()
	{
		$stmt = $this->conn->prepare("SELECT * FROM datapasien ORDER BY TglInput ASC");
		$stmt->execute();
		return $stmt;
	}

	public function tampilpasiennya($id)
	{
		$stmt = $this->conn->prepare("SELECT * FROM datapasien WHERE No='$id' ");
		$stmt->execute();
		return $stmt;
	}

	public function tampildatauser()
	{
		$stmt = $this->conn->prepare("SELECT * FROM userlogin WHERE ID='1'");
		$stmt->execute();
		return $stmt;
	}

	public function kosongkantabel()
	{
		$stmt = $this->conn->prepare("TRUNCATE TABLE datapasien");
		$stmt->execute();
	}

	public function updatedata($nolama,$no,$nama,$alamat,$tgl,$ibu,$tlp){
		$stmt = $this->conn->prepare("UPDATE datapasien SET No='$no', NamaPasien='$nama', Alamat='$alamat', TglLahir='$tgl', NamaIbu='$ibu', Telepon='$tlp' ");
		$stmt->execute();
		return $stmt;
	}

	public function updatelogin($username,$password){
		$stmt = $this->conn->prepare("UPDATE userlogin SET Username='$username', Password='$password' WHERE ID='1'");
		$stmt->execute();
	}

	public function hapusdata($no){
		$stmt = $this->conn->prepare("DELETE FROM datapasien WHERE No='$no'");
		$stmt->execute();
	}

	public function cekdata($username,$password){
		$stmt = $this->conn->prepare("SELECT * FROM userlogin WHERE Username='$username' AND Password='$password'");
		$stmt->execute();
		if($stmt->rowCount() == 1)
			{
				return true;
			}
	}

	public function login($username,$password){
		$stmt = $this->conn->prepare("SELECT * FROM userlogin WHERE Username='$username' AND Password='$password'");
		$stmt->execute();
		$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
		if($stmt->rowCount() == 1)
			{
				session_start();
				$_SESSION['ID'] = $userRow['ID'];
				header("Location:index.php");
			}
	}
}
?>

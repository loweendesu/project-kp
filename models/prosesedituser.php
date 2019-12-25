<?php
require_once('../config/_koneksi.php');
require_once('../models/database.php');
include "../models/m_user.php";

$connection = new Database($host, $user, $pass, $database);
$Usr = new User($connection);

$user = $connection->conn->real_escape_string($_POST['user']);
$nama = $connection->conn->real_escape_string($_POST['nama']);
// $jk = $connection->conn->real_escape_string($_POST['jk']);
$almt = $connection->conn->real_escape_string($_POST['almt']);
$no_tlp = $connection->conn->real_escape_string($_POST['no_tlp']);
$lvl = $connection->conn->real_escape_string($_POST['lvl']);

// $cekusr=$Usr->tampil($user);
// $rowusr = mysqli_fetch_array($cekusr,MYSQLI_ASSOC);
// echo $rowusr['lvl'];
// if ($passwd == $repasswd) {
	$Usr->edit("UPDATE user SET nm_ptgs='$nama', almt='$almt', no_tlp='$no_tlp', lvl=$lvl WHERE id_ptgs='$user'");

	//header("location: ../supervi/index.php?page=dtmngusr");
	echo "<script>window.location='?page=dtmngusr';</script>";	
									
// ?>
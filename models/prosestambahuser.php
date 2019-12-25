<?php
require_once('../config/_koneksi.php');
require_once('../models/database.php');
include "../models/m_user.php";

$connection = new Database($host, $user, $pass, $database);
$Usr = new User($connection);

$id_ptgs = $connection->conn->real_escape_string($_POST['usr']);
$passwd = md5($connection->conn->real_escape_string($_POST['passwd']));
$repasswd = md5($connection->conn->real_escape_string($_POST['repasswd']));
$nm_ptgs = $connection->conn->real_escape_string($_POST['nma']);
$jk = $connection->conn->real_escape_string($_POST['jk']);
$almt = $connection->conn->real_escape_string($_POST['almt']);
$no_tlp = $connection->conn->real_escape_string($_POST['no_tlp']);
$lvl = $connection->conn->real_escape_string($_POST['lvl']);
if ($passwd == $repasswd) {
	$Usr->tambah($id_ptgs, $nm_ptgs, $jk, $repasswd, $almt, $no_tlp, $lvl);

	header("location: ../supervi/index.php?page=dtmngusr");
}else {
		header("location: ../supervi/index.php?page=dtmngusr");
	}
	

                            //header("location: ?page=barang");
// echo "<script>window.location='?page=barang';</script>";										
// ?>
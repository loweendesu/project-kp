<?php
require_once('../config/_koneksi.php');
require_once('../models/database.php');
include "../models/m_trans.php";

$connection = new Database($host, $user, $pass, $database);
$Mskan = new Trans($connection);

$transmsk = $connection->conn->real_escape_string($_POST['id']);
$byr = ($connection->conn->real_escape_string($_POST['byr']));
if (isset($transmsk)) {
	$Mskan->edit("UPDATE trans_msk SET byr='$byr' WHERE transmsk='$transmsk'");

	header("location: ../supervi/index.php?page=dtputng");
}else {
		header("location: ../supervi/index.php?page=dtputng");
	}
	

                            //header("location: ?page=barang");
// echo "<script>window.location='?page=barang';</script>";										
// ?>
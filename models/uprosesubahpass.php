<?php
require_once('../config/_koneksi.php');
require_once('../models/database.php');
include "../models/m_user.php";

$connection = new Database($host, $user, $pass, $database);
$Useredit = new User($connection);


$username = $connection->conn->real_escape_string($_POST['user']);
@$pass = $connection->conn->real_escape_string($_POST['pass']);
@$passlama = md5($connection->conn->real_escape_string($_POST['passlama']));
@$passbaru = md5($connection->conn->real_escape_string($_POST['passbaru']));
@$repassbaru = md5($connection->conn->real_escape_string($_POST['repassbaru']));

if (isset($pass)) {
	if ($passlama == $pass) {
		$Useredit->edit("UPDATE user SET passwd='$repassbaru' WHERE id_ptgs='$username'");

		header("location: ../officer/index.php?page=uprofile");

	}else{
		header("location: ../officer/index.php?page=uprofile&msg=Gagal");
	}
}else{
	header("location: ../officer/index.php?page=uprofile");
}

                            //header("location: ?page=barang");
// echo "<script>window.location='?page=barang';</script>";										
// ?>
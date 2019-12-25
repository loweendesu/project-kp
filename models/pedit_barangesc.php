<?php
require_once('../config/_koneksi.php');
require_once('../models/database.php');
include "../models/m_barang.php";
$connection = new Database($host, $user, $pass, $database);
$brg = new Barang($connection);

//$id_brg = $_POST['id_brg'];
$kd_brg = $connection->conn->real_escape_string($_POST['kd_brg']);
$nama_barang = $connection->conn->real_escape_string($_POST['nama_barang']);
/*$expr = $connection->conn->real_escape_string($_POST['expr']);
$hrg_jual = $connection->conn->real_escape_string($_POST['hrg_jual']);
$hrg_beli= $connection->conn->real_escape_string($_POST['hrg_beli']);
$stok = $connection->conn->real_escape_string($_POST['stok']);*/

$brg->edit("UPDATE tb_brg SET nm_brg='$nama_barang' WHERE kd_brg='$kd_brg'");
echo "<script>window.location='?page=barang';</script>";	
									
?>
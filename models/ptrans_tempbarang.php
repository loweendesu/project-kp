<?php
require_once('../config/_koneksi.php');
require_once('../models/database.php');

include "../models/m_tempbrg.php";
$connection = new Database($host, $user, $pass, $database);
$Tempbarang = new TempBrg($connection);

$kd_brg = $connection->conn->real_escape_string($_POST['kd_brg']);
										$jns_brg = $connection->conn->real_escape_string($_POST['jns_brg']);
										$hrg = $connection->conn->real_escape_string($_POST['hrg']);
										$jmlh = $connection->conn->real_escape_string($_POST['stok']);
										$satuan = $connection->conn->real_escape_string($_POST['satuan']);
										$expr = $connection->conn->real_escape_string($_POST['expr']);
										$tempo = $connection->conn->real_escape_string($_POST['tempo']);
										$byr = $connection->conn->real_escape_string($_POST['bayar']);
										//$byr = "Lunas";
										$kd_supp= $connection->conn->real_escape_string($_POST['kd_sup']);
										$almtsupp = $connection->conn->real_escape_string($_POST['alamat']);
										$tlpsup = $connection->conn->real_escape_string($_POST['no_tlp']);
										
										$Tempbarang->tambah($jns_brg, $kd_brg, $hrg, $jmlh, $satuan, $expr, $byr, $tempo, $kd_supp, $almtsupp, $tlpsup);
echo "<script>window.location='?page=barang';</script>";										
?>
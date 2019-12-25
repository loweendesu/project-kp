<?php
require_once('../config/_koneksi.php');
require_once('../models/database.php');

include "../models/m_dttrans.php";
$connection = new Database($host, $user, $pass, $database);
$Transin = new TransMasuk($connection);

$kd_brg = $connection->conn->real_escape_string($_POST['kd_brg']);
										$jns_brg = $connection->conn->real_escape_string($_POST['jns_brg']);
										$hrg = $connection->conn->real_escape_string($_POST['hrg']);
										$jmlh = $connection->conn->real_escape_string($_POST['stok']);
										$satuan = $connection->conn->real_escape_string($_POST['satuan']);
										$expr = $connection->conn->real_escape_string($_POST['expr']);
										$byr = $connection->conn->real_escape_string($_POST['bayar']);
										$kd_supp= $connection->conn->real_escape_string($_POST['kd_sup']);
										$almtsupp = $connection->conn->real_escape_string($_POST['alamat']);
										$tlpsup = $connection->conn->real_escape_string($_POST['no_tlp']);
										
										$Transin->tambah($jns_brg, $kd_brg, $hrg, $jmlh, $satuan, $expr, $byr, $kd_supp, $almtsupp, $tlpsup);
echo "<script>window.location='?page=barang';</script>";										
?>
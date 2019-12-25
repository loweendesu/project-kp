<?php
require_once('../config/_koneksi.php');
require_once('../models/database.php');
include "../models/m_tempbrg.php";
$connection = new Database($host, $user, $pass, $database);
$Tempbarang = new TempBrg($connection);

//$id_brg = $_POST['id_brg'];
$transbrgmsk = $connection->conn->real_escape_string($_POST['temptransmsk2']);
$hrg = $connection->conn->real_escape_string($_POST['hrg2']);
$jmlh = $connection->conn->real_escape_string($_POST['jmlh2']);
// $hrg_jual = $connection->conn->real_escape_string($_POST['hrg_jual']);
// $hrg_beli= $connection->conn->real_escape_string($_POST['hrg_beli']);
// $stok = $connection->conn->real_escape_string($_POST['stok']);

$Tempbarang->edit("UPDATE tempbarang SET hrg=$hrg, jmlh=$jmlh WHERE tamptransmsk = $transbrgmsk");
echo "<script>window.location='?page=trbrgmsk';</script>";										
?>
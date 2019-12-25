<?php
require_once('../config/_koneksi.php');
require_once('../models/database.php');

include "../models/m_dtklr.php";
$connection = new Database($host, $user, $pass, $database);
$Transout = new TransKeluar($connection);

$kd_brg = $connection->conn->real_escape_string($_POST['kd_brg']);
$transbrg_msk = $connection->conn->real_escape_string($_POST['transbrg_msk']);
$hrg = $connection->conn->real_escape_string($_POST['hrg']);
$jmlh = $connection->conn->real_escape_string($_POST['jmlh']);

$nm_supp= $connection->conn->real_escape_string($_POST['kdsupp']);
$almtsupp = $connection->conn->real_escape_string($_POST['almtsupp']);
$tlpsup = $connection->conn->real_escape_string($_POST['tlpsup']);
$ket="Return";

$cekstk=$Transout->tampilv2($transbrg_msk);
$data = mysqli_fetch_array($cekstk,MYSQLI_ASSOC);

if ($jmlh>$data['jmlhesc']) {
	echo "<script>window.location='?page=dtbrgexpr&msg=Gagal';</script>";
}else{
$Transout->tambah($transbrg_msk, $kd_brg, $hrg, $jmlh, $nm_supp, $almtsupp, $tlpsup, $ket);
echo "<script>window.location='?page=dtbrgexpr';</script>";

}										
?>
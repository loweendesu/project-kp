<?php
require_once('../config/_koneksi.php');
require_once('../models/database.php');
include "../models/m_tempbrg.php";
include "../models/m_trans.php";
$connection = new Database($host, $user, $pass, $database);
$Trans = new Trans($connection);
$Tempbarang = new TempBrg($connection);

$tampilesc = $Tempbarang->tampilescv3();
$row = mysqli_fetch_array($tampilesc,MYSQLI_ASSOC);
$nm_supp = $connection->conn->real_escape_string($_POST['nm_supp']);
$almtsupp = $connection->conn->real_escape_string($_POST['almtsupp']);
$tlpsup = $connection->conn->real_escape_string($_POST['tlpsup']);
$tottrans = $connection->conn->real_escape_string($_POST['tottrans']);
$byr = $connection->conn->real_escape_string($_POST['byr']);
$tgltrans = $connection->conn->real_escape_string($_POST['tgltrans']);	
$Trans->tambah($nm_supp, $almtsupp, $tlpsup, $tottrans, $byr, $tgltrans);
                            //header("location: ?page=barang");
echo "<script>window.location='?page=barang';</script>";										
?>
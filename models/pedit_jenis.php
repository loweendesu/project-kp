<?php
require_once('../config/_koneksi.php');
require_once('../models/database.php');
include "../models/m_jenis.php";
$connection = new Database($host, $user, $pass, $database);
$jns = new Jenis($connection);

//$id_brg = $_POST['id_brg'];
$id_jns = $connection->conn->real_escape_string($_POST['id_jns']);
$jnsbrg = $connection->conn->real_escape_string($_POST['jns_brg']);
// $expr = $connection->conn->real_escape_string($_POST['expr']);
// $hrg_jual = $connection->conn->real_escape_string($_POST['hrg_jual']);
// $hrg_beli= $connection->conn->real_escape_string($_POST['hrg_beli']);
// $stok = $connection->conn->real_escape_string($_POST['stok']);

$jns->edit("UPDATE jns_brg SET jns_brg='$jnsbrg' WHERE id_jns='$id_jns'");
echo "<script>window.location='?page=barang';</script>";										
?>
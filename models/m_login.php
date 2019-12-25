<?php 
require_once('../config/_koneksi.php');
$db=mysqli_connect($host,$user,$pass,$database);

$usern = $_POST['username'];
$passp = md5($_POST['password']);
 
$sql = "SELECT * FROM user WHERE id_ptgs='$usern' AND passwd='$passp'";
$result=mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$cek = mysqli_num_rows($result);
 
if($cek > '0'){
	if($row['lvl'] == '1'){
	session_start();
	$_SESSION['username'] = $row['id_ptgs'];
	$_SESSION['status'] = "login";
	echo "<script>window.location='../supervi/index.php';</script>";
	}else if ($row['lvl'] == '0'){
	session_start();
	$_SESSION['username'] = $row['id_ptgs'];
	$_SESSION['status'] = "login";
	echo "<script>window.location='../officer/index.php';</script>";
	}
}else{
	header("location:../login.php");	
}
?>
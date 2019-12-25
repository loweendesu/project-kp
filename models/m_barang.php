<?php
class Barang {
	private $mysqli;
	
	function __construct($conn) {
		$this->mysqli = $conn;
	}
	
	public function tampil ($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM tb_brg";
		if ($id != null) {
		$sql .= " WHERE kd_brg = '$id'";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}
	public function tampilnot ($istk) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM tb_brg";
		if ($istk != null) {
		$sql .= " WHERE stk <= $istk LIMIT 5";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampilnotv2 ($istk) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM tb_brg";
		if ($istk != null) {
		$sql .= " WHERE stk <= $istk";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampilnotv2limit ($istk,$posisi,$batas) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM tb_brg";
		if ($istk != null) {
		$sql .= " WHERE stk <= $istk LIMIT $posisi, $batas";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampillimit ($posisi,$batas) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM tb_brg LIMIT $posisi, $batas";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampillimitcari ($cari) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM tb_brg WHERE tb_brg.nm_brg LIKE '%$cari%' ";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampilnotv2limitcari ($istk,$cari) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM tb_brg WHERE tb_brg.stk <= $istk And tb_brg.nm_brg LIKE '%$cari%' ";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampilesc ($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT kd_brg, nm_brg FROM tb_brg";
		if ($id != null) {
		$sql .= " WHERE kd_brg = $kd_brg";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	// public function tampilescv2 ($id = null) {
	// 	$db = $this->mysqli->conn;
	// 	$sql = "SELECT kd_brg, nm_brg FROM tb_brg";
	// 	if ($id != null) {
	// 	$sql .= " WHERE kd_brg = $kd_brg";
	// 	}
	// 	$query = $db->query($sql) or die ($db->error);
	// 	return $query;
	// }

	public function tampilesclimit ($posisi, $batas) {
		$db = $this->mysqli->conn;
		$sql = "SELECT kd_brg, nm_brg FROM tb_brg LIMIT $posisi, $batas";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}
	
	public function tambah($kd_brg, $nama_barang, $expr, $hrg_jual, $hrg_beli, $stok) {
		$db=$this->mysqli->conn;
		$db->query("INSERT INTO tb_brg VALUES ('$kd_brg', '$nama_barang', '$hrg_beli', '$hrg_jual', '$stok', '$expr', 1)") or die ($db->error);
	}
	
	public function edit($sql){
		$db=$this->mysqli->conn;
		$db->query($sql) or die ($db->error);
	}
}
?>
<?php
class Jenis {
	private $mysqli;
	
	function __construct($conn) {
		$this->mysqli = $conn;
	}
	
	public function tampil ($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM jns_brg";
		if ($id != null) {
		$sql .= " WHERE id_jns = '$id'";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}
	public function tampillimit ($posisi,$batas) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM jns_brg LIMIT $posisi, $batas";
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
	
	public function tambah($id_jns, $jns_brgg) {
		$db=$this->mysqli->conn;
		$db->query("INSERT INTO jns_brg VALUES ('$id_jns', '$jns_brgg')") or die ($db->error);
	}
	
	public function edit($sql){
		$db=$this->mysqli->conn;
		$db->query($sql) or die ($db->error);
	}
}
?>
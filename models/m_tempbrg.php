<?php
class TempBrg {
	private $mysqli;
	
	function __construct($conn) {
		$this->mysqli = $conn;
	}
	
	public function tampil ($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM tempbarang";
		if ($id != null) {
		$sql .= " WHERE trans_msk = $trans_msk";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	} 
	public function tampillimit ($posisi,$batas) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM tempbarang LIMIT $posisi, $batas";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	} 

	public function tampilesc ($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM `tempbarang` ORDER BY `tamptransmsk` DESC LIMIT 1";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}
	public function tampilescv2 ($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT tgltrans, byr, sum(hrg*jmlh) as total FROM `tempbarang`";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampilescv3 ($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT DISTINCT `nm_supp`,`almtsupp`,`tlpsup`,`byr`, `tempo`,`tgltrans`, sum(hrg*jmlh) as total FROM tempbarang";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}
	
	public function tambah($id_jns, $kd_brg, $hrg, $jmlh, $satuan, $expr, $byr, $tempo, $kd_supp, $almtsupp, $tlpsup) {
		$tgl_trans = date("Y-m-d H:i:s");
		$db=$this->mysqli->conn;
		$db->query("INSERT INTO tempbarang VALUES ('','$kd_supp','$almtsupp', '$tlpsup', '$byr', '$tempo', '$tgl_trans', '$id_jns', '$kd_brg','$hrg','$jmlh','$satuan','$expr')") or die ($db->error);
	}
	
	public function edit($sql){
		$db=$this->mysqli->conn;
		$db->query($sql) or die ($db->error);
	}

	public function hapus() {
		$db=$this->mysqli->conn;
		$db->query("DELETE FROM tempbarang") or die ($db->error);
	}
}
?>
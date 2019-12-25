<?php
class Trans {
	private $mysqli;
	
	function __construct($conn) {
		$this->mysqli = $conn;
	}
	
	public function tampil ($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM trans_msk";
		if ($id != null) {
		$sql .= " WHERE transmsk = $transmsk";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	} 
	public function tampillimit ($posisi,$batas) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM trans_msk ORDER BY trans_msk.tgltrans DESC LIMIT $posisi, $batas";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	} 

	public function tampillimitv2 ($posisi,$batas) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM trans_msk WHERE byr='Piutang' ORDER BY trans_msk.tempo LIMIT $posisi, $batas";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	} 
	public function tampillimitv3() {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM trans_msk WHERE byr='Piutang'";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	} 

	public function tampilesc ($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT `transmsk` FROM `trans_msk` ORDER BY `transmsk`DESC LIMIT 1";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampilnot ($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT `transmsk`,`nm_supp`,`almtsupp`,`tlpsup`,`tottrans`,`byr`,`tempo`,`tgltrans`, datediff(current_date(), tempo) as selisih FROM `trans_msk` WHERE byr='Piutang' AND tempo >= current_date()";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampilnotv2 ($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT `transmsk`,`nm_supp`,`almtsupp`,`tlpsup`,`tottrans`,`byr`,`tempo`,`tgltrans`, datediff(current_date(), tempo) as selisih FROM `trans_msk` WHERE byr='Piutang' AND tempo >= current_date() ORDER BY trans_msk.tempo LIMIT 3";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampilv2 ($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT `transmsk`,`nm_supp`,`almtsupp`,`tlpsup`,`tottrans`,`byr`,`tempo`,`tgltrans`, datediff(current_date(), tempo) as selisih FROM `trans_msk` WHERE byr='Piutang' AND datediff(current_date(), tempo) >=-3 AND datediff(current_date(), tempo) < 0";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampilv3 ($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT `transmsk`,`nm_supp`,`almtsupp`,`tlpsup`,`tottrans`,`byr`,`tempo`,`tgltrans`, datediff(current_date(), tempo) as selisih FROM `trans_msk` WHERE byr='Piutang' AND datediff(current_date(), tempo) = 0";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}
	
	public function tambah($nm_supp, $almtsupp, $tlpsup, $tottrans, $byr, $tempo, $tgltrans) {
		$db=$this->mysqli->conn;
		$db->query("INSERT INTO trans_msk VALUES ('','$nm_supp', '$almtsupp', '$tlpsup', '$tottrans', '$byr', '$tempo', '$tgltrans')") or die ($db->error);
	}
	
	public function edit($sql){
		$db=$this->mysqli->conn;
		$db->query($sql) or die ($db->error);
	}
}
?>
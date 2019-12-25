<?php
class TransMasuk {
	private $mysqli;
	
	function __construct($conn) {
		$this->mysqli = $conn;
	}
	
	public function tampil ($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM transbrg_msk";
		if ($id != null) {
		$sql .= " WHERE transbrg_msk = $transbrg_msk";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	} 
	public function tampillimit ($posisi,$batas) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM transbrg_msk LIMIT $posisi, $batas";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	} 

	public function tampillimitv2 ($posisi,$batas) {
		$db = $this->mysqli->conn;
		$sql = "SELECT `transbrg_msk`, trans_msk.`transmsk`,transbrg_msk.`kd_brg`,tb_brg.`nm_brg` ,transbrg_msk.`id_jns`, jns_brg.`jns_brg`, transbrg_msk.`hrg`, transbrg_msk.`jmlh`,transbrg_msk.`expr`, transbrg_msk.`satuan`,trans_msk.`nm_supp`, trans_msk.`almtsupp`,trans_msk.`tlpsup`, trans_msk.`tottrans`,trans_msk.`byr`, trans_msk.`tgltrans` FROM `transbrg_msk` INNER join `trans_msk` on trans_msk.transmsk=transbrg_msk.transmsk join tb_brg on transbrg_msk.kd_brg=tb_brg.kd_brg JOIN jns_brg on transbrg_msk.id_jns=jns_brg.id_jns ORDER BY trans_msk.tgltrans DESC LIMIT $posisi, $batas";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	} 

	

	public function tampillimitv3 ($posisi,$batas) {
		$db = $this->mysqli->conn;
		$sql = "SELECT DISTINCT * FROM `trans_msk` LIMIT $posisi, $batas";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampilnot () {
		$db = $this->mysqli->conn;
		$tglnow = date("Y-m-d H:i:s");
		$sql = "SELECT transbrg_msk.transbrg_msk, transbrg_msk.hrg, transbrg_msk.jmlh, transbrg_msk.jmlhesc,  transbrg_msk.satuan, transbrg_msk.expr, tb_brg.kd_brg, tb_brg.nm_brg, trans_msk.nm_supp, trans_msk.almtsupp, trans_msk.tlpsup, datediff(current_date(), transbrg_msk.expr) as selisih FROM transbrg_msk INNER JOIN trans_msk on transbrg_msk.transmsk=trans_msk.transmsk JOIN tb_brg ON transbrg_msk.kd_brg=tb_brg.kd_brg WHERE datediff(current_date(), transbrg_msk.expr) >= -7 and datediff(current_date(), transbrg_msk.expr) <=7 and transbrg_msk.jmlhesc > 0";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampilnotv2 () {
		$db = $this->mysqli->conn;
		$tglnow = date("Y-m-d H:i:s");
		$sql = "SELECT transbrg_msk.transbrg_msk, transbrg_msk.hrg, transbrg_msk.jmlh, transbrg_msk.jmlhesc,  transbrg_msk.satuan, transbrg_msk.expr, tb_brg.kd_brg, tb_brg.nm_brg, trans_msk.nm_supp, trans_msk.almtsupp, trans_msk.tlpsup, datediff(current_date(), transbrg_msk.expr) as selisih FROM transbrg_msk INNER JOIN trans_msk on transbrg_msk.transmsk=trans_msk.transmsk JOIN tb_brg ON transbrg_msk.kd_brg=tb_brg.kd_brg WHERE datediff(current_date(), transbrg_msk.expr) >= -7 and datediff(current_date(), transbrg_msk.expr) <=7 and transbrg_msk.jmlhesc > 0 ORDER BY transbrg_msk.expr LIMIT 4";
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

	public function tampilprt ($dari, $sampai) {
		$db = $this->mysqli->conn;
		$sql = "SELECT transbrg_msk.transbrg_msk, transbrg_msk.transmsk, transbrg_msk.id_jns, transbrg_msk.kd_brg, transbrg_msk.hrg, transbrg_msk.jmlh, transbrg_msk.jmlh*transbrg_msk.hrg AS total, tb_brg.nm_brg, jns_brg.jns_brg, trans_msk.tgltrans FROM transbrg_msk INNER JOIN trans_msk on transbrg_msk.transmsk=trans_msk.transmsk JOIN tb_brg ON transbrg_msk.kd_brg=tb_brg.kd_brg JOIN jns_brg on transbrg_msk.id_jns=jns_brg.id_jns WHERE trans_msk.tgltrans >= '$dari' AND trans_msk.tgltrans <= '$sampai'";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}
	public function tampiltot ($dari, $sampai) {
		$db = $this->mysqli->conn;
		$sql = "SELECT transbrg_msk.transbrg_msk, transbrg_msk.transmsk, transbrg_msk.id_jns, transbrg_msk.kd_brg, transbrg_msk.hrg, transbrg_msk.jmlh, transbrg_msk.jmlh*transbrg_msk.hrg AS total, tb_brg.nm_brg, jns_brg.jns_brg, trans_msk.tgltrans, SUM(transbrg_msk.hrg*transbrg_msk.jmlh) AS jumtot FROM transbrg_msk INNER JOIN trans_msk on transbrg_msk.transmsk=trans_msk.transmsk JOIN tb_brg ON transbrg_msk.kd_brg=tb_brg.kd_brg JOIN jns_brg on transbrg_msk.id_jns=jns_brg.id_jns WHERE trans_msk.tgltrans >= '$dari' AND trans_msk.tgltrans <= '$sampai'";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}
	
	public function tambah($transmsk, $id_jns, $kd_brg, $hrg, $jmlh, $satuan, $expr, $byr, $kd_supp, $almtsupp, $tlpsup) {
		$tgl_trans = date("Y-m-d H:i:s");
		$db=$this->mysqli->conn;
		$db->query("INSERT INTO transbrg_msk VALUES ('','$transmsk','$id_jns','$kd_brg', '$hrg', '$jmlh','$jmlh' , '$satuan', '$expr', '$byr','$kd_supp','$almtsupp','$tlpsup','$tgl_trans')") or die ($db->error);
	}

	public function tambahv2($transmsk, $id_jns, $kd_brg, $hrg, $jmlh, $satuan, $expr) {
		//$tgl_trans = date("Y-m-d H:i:s");
		$db=$this->mysqli->conn;
		$db->query("INSERT INTO transbrg_msk VALUES ('','$transmsk','$id_jns','$kd_brg', '$hrg', '$jmlh','$jmlh', '$satuan', '$expr', 'byr','kd_supp','almtsupp','tlpsup','tgltrans')") or die ($db->error);
	}
	
	public function edit($sql){
		$db=$this->mysqli->conn;
		$db->query($sql) or die ($db->error);
	}
}
?>
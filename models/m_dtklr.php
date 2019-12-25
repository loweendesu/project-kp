<?php
class TransKeluar {
	private $mysqli;
	
	function __construct($conn) {
		$this->mysqli = $conn;
	}
	
	public function tampil ($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT DISTINCT tb_brg.kd_brg, nm_brg, hrg, stk, kd_supp, almtsupp, tlpsup FROM transbrg_msk INNER JOIN 
tb_brg ON tb_brg.kd_brg=transbrg_msk.kd_brg;
";
		if ($id != null) {
		$sql .= " WHERE transbrg_msk = $transbrg_msk";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampilv2limit ($posisi, $batas) {
		$db = $this->mysqli->conn;
		$sql = "SELECT transbrg_msk.transbrg_msk, transbrg_msk.hrg, transbrg_msk.jmlh, transbrg_msk.jmlhesc,  transbrg_msk.satuan, transbrg_msk.expr, tb_brg.kd_brg, tb_brg.nm_brg, trans_msk.nm_supp, trans_msk.almtsupp, trans_msk.tlpsup FROM transbrg_msk INNER JOIN trans_msk on transbrg_msk.transmsk=trans_msk.transmsk JOIN tb_brg ON transbrg_msk.kd_brg=tb_brg.kd_brg WHERE transbrg_msk.jmlhesc > 0 LIMIT $posisi, $batas";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampilv2limitcari ($cari) {
		$db = $this->mysqli->conn;
		$sql = "SELECT transbrg_msk.transbrg_msk, transbrg_msk.hrg, transbrg_msk.jmlh, transbrg_msk.jmlhesc,  transbrg_msk.satuan, transbrg_msk.expr, tb_brg.kd_brg, tb_brg.nm_brg, trans_msk.nm_supp, trans_msk.almtsupp, trans_msk.tlpsup FROM transbrg_msk INNER JOIN trans_msk on transbrg_msk.transmsk=trans_msk.transmsk JOIN tb_brg ON transbrg_msk.kd_brg=tb_brg.kd_brg WHERE transbrg_msk.jmlhesc > 0 and tb_brg.nm_brg LIKE '%$cari%' ";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampilv2 ($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT transbrg_msk.transbrg_msk, transbrg_msk.hrg, transbrg_msk.jmlh, transbrg_msk.jmlhesc,  transbrg_msk.satuan, transbrg_msk.expr, tb_brg.kd_brg, tb_brg.nm_brg, trans_msk.nm_supp, trans_msk.almtsupp, trans_msk.tlpsup FROM transbrg_msk INNER JOIN trans_msk on transbrg_msk.transmsk=trans_msk.transmsk JOIN tb_brg ON transbrg_msk.kd_brg=tb_brg.kd_brg WHERE transbrg_msk.jmlhesc > 0";
		if ($id != null) {
		$sql .= " AND transbrg_msk = $id";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampilv3limit ($posisi, $batas) {
		$db = $this->mysqli->conn;
		$sql = "SELECT DISTINCT transbrg_klr.nm_supp, transbrg_klr.almtsupp, transbrg_klr.tlpsup, transbrg_klr.ket, transbrg_klr.tgl FROM transbrg_klr ORDER BY transbrg_klr.tgl DESC LIMIT $posisi, $batas";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampilv3 () {
		$db = $this->mysqli->conn;
		$sql = "SELECT DISTINCT transbrg_klr.nm_supp, transbrg_klr.almtsupp, transbrg_klr.tlpsup, transbrg_klr.ket, transbrg_klr.tgl FROM transbrg_klr";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampilv3esc ($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT DISTINCT transbrg_klr.nm_supp, transbrg_klr.almtsupp, transbrg_klr.tlpsup, transbrg_klr.ket, transbrg_klr.tgl FROM transbrg_klr";
		if ($id != null) {
		$sql .= " WHERE transbrg_msk = $transbrg_msk";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampilesc ($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT transbrg_msk.transbrg_msk, transbrg_msk.hrg, transbrg_msk.jmlh, transbrg_msk.jmlhesc,  transbrg_msk.satuan, transbrg_msk.expr, tb_brg.kd_brg, tb_brg.nm_brg, trans_msk.nm_supp, trans_msk.almtsupp, trans_msk.tlpsup, datediff(current_date(), transbrg_msk.expr) as selisih FROM transbrg_msk INNER JOIN trans_msk on transbrg_msk.transmsk=trans_msk.transmsk JOIN tb_brg ON transbrg_msk.kd_brg=tb_brg.kd_brg WHERE datediff(current_date(), transbrg_msk.expr) >= -7 and datediff(current_date(), transbrg_msk.expr) <=7 and transbrg_msk.jmlhesc > 0 ORDER BY transbrg_msk.expr";
		if ($id != null) {
		$sql .= " WHERE transbrg_klr = $transbrg_klr";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}
	

	public function tampilescv2 ($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM transbrg_klr";
		if ($id != null) {
		$sql .= " WHERE transbrg_klr = $transbrg_klr";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampilescv3 ($posisi, $batas) {
		$db = $this->mysqli->conn;
		$sql = "SELECT transbrg_klr.transbrg_klr, transbrg_klr.kd_brg, transbrg_klr.kd_brg, tb_brg.nm_brg, transbrg_klr.hrg, transbrg_klr.jlmh, transbrg_klr.nm_supp, transbrg_klr.almtsupp, transbrg_klr.tlpsup, transbrg_klr.ket, transbrg_klr.tgl FROM transbrg_klr INNER JOIN tb_brg ON transbrg_klr.kd_brg = tb_brg.kd_brg ORDER BY transbrg_klr.tgl DESC LIMIT $posisi, $batas";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

		public function tampilescv4 ($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT transbrg_klr.transbrg_klr, transbrg_klr.kd_brg, transbrg_klr.kd_brg, tb_brg.nm_brg, transbrg_klr.hrg, transbrg_klr.jlmh, transbrg_klr.nm_supp, transbrg_klr.almtsupp, transbrg_klr.tlpsup, transbrg_klr.ket, transbrg_klr.tgl FROM transbrg_klr INNER JOIN tb_brg ON transbrg_klr.kd_brg = tb_brg.kd_brg ORDER BY transbrg_klr.tgl DESC";
		if ($id != null) {
		$sql .= " WHERE transbrg_klr = $transbrg_klr";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampilprt ($dari,$sampai,$ket) {
		$db = $this->mysqli->conn;
		$sql = "SELECT transbrg_klr.transbrg_klr, transbrg_klr.kd_brg, transbrg_klr.kd_brg, tb_brg.nm_brg, transbrg_klr.hrg, transbrg_klr.jlmh, transbrg_klr.hrg*transbrg_klr.jlmh AS total, transbrg_klr.nm_supp, transbrg_klr.almtsupp, transbrg_klr.tlpsup, transbrg_klr.ket, transbrg_klr.tgl FROM transbrg_klr INNER JOIN tb_brg ON transbrg_klr.kd_brg = tb_brg.kd_brg WHERE transbrg_klr.tgl >= '$dari' AND transbrg_klr.tgl <= '$sampai' AND transbrg_klr.ket='$ket'";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampilprtv2 ($nm_supp,$ket,$tgl) {
		$db = $this->mysqli->conn;
		$sql = "SELECT transbrg_klr.transbrg_klr, transbrg_klr.kd_brg, transbrg_klr.kd_brg, tb_brg.nm_brg, transbrg_klr.hrg, transbrg_klr.jlmh, transbrg_klr.hrg*transbrg_klr.jlmh AS total, transbrg_klr.nm_supp, transbrg_klr.almtsupp, transbrg_klr.tlpsup, transbrg_klr.ket, transbrg_klr.tgl FROM transbrg_klr INNER JOIN tb_brg ON transbrg_klr.kd_brg = tb_brg.kd_brg WHERE transbrg_klr.nm_supp='$nm_supp' AND transbrg_klr.ket='$ket' AND transbrg_klr.tgl='$tgl'";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampiltot ($dari,$sampai,$ket) {
		$db = $this->mysqli->conn;
		$sql = "SELECT transbrg_klr.transbrg_klr, transbrg_klr.kd_brg, transbrg_klr.kd_brg, tb_brg.nm_brg, transbrg_klr.hrg, transbrg_klr.jlmh, transbrg_klr.nm_supp, transbrg_klr.almtsupp, transbrg_klr.tlpsup, transbrg_klr.ket, transbrg_klr.tgl, SUM(transbrg_klr.hrg*transbrg_klr.jlmh) AS jumtot FROM transbrg_klr INNER JOIN tb_brg ON transbrg_klr.kd_brg = tb_brg.kd_brg WHERE transbrg_klr.tgl >= '$dari' AND transbrg_klr.tgl <= '$sampai' AND transbrg_klr.ket='$ket'";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tampiltotv2 ($nm_supp,$ket,$tgl) {
		$db = $this->mysqli->conn;
		$sql = "SELECT transbrg_klr.transbrg_klr, transbrg_klr.kd_brg, transbrg_klr.kd_brg, tb_brg.nm_brg, transbrg_klr.hrg, transbrg_klr.jlmh, SUM(transbrg_klr.hrg*transbrg_klr.jlmh) AS jumtot, transbrg_klr.nm_supp, transbrg_klr.almtsupp, transbrg_klr.tlpsup, transbrg_klr.ket, transbrg_klr.tgl FROM transbrg_klr INNER JOIN tb_brg ON transbrg_klr.kd_brg = tb_brg.kd_brg WHERE transbrg_klr.nm_supp='$nm_supp' AND transbrg_klr.ket='$ket' AND transbrg_klr.tgl='$tgl'";
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tambah($transbrg_msk,$kd_brg, $hrg, $jmlh, $nm_supp, $almtsupp, $tlpsup, $ket) {
		$tgl_trans = date("Y-m-d H:i:s");
		//$ket="Masuk Toko";
		$db=$this->mysqli->conn;
		$db->query("INSERT INTO transbrg_klr VALUES ('','$transbrg_msk','$kd_brg', '$hrg', '$jmlh', '$nm_supp','$almtsupp','$tlpsup','$ket','$tgl_trans')") or die ($db->error);
	}
	
	public function edit($sql){
		$db=$this->mysqli->conn;
		$db->query($sql) or die ($db->error);
	}
}
?>
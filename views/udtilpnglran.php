<?php
//include "../models/m_dtklr.php";

$Transout = new TransKeluar($connection);
?>
<div class="graphs">
	<div class="col-lg-12">
		<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
			<div class="panel-heading">
				<h2>Detail Pengeluaran Barang</h2>
				<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
			</div>
			<div class="panel-body no-padding" style="display: block;">
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<tr>
							<td>No</td>
							<!-- <td>Kode Trans. Keluar</td> -->
							<td>Nama Barang</td>
							<td>Harga</td>
							<td>Jumlah</td>
							<td>Nama Supplier</td>
							<td>Alamat</td>
							<td>Telepon</td>
							<td>Keterangan</td>
							<td>Tgl Transaksi</td>
							<!-- <td>Opsi</td> -->
						</tr>
						<tbody id="carit">
						<?php
						$batas=10;
								$hal=@$_GET['hal'];
								if(empty($hal)){
									$posisi = 0;
									$hal = 1;
								} else {
									$posisi = ($hal - 1)* $batas;
								}

								$no = $posisi +1;
						$tampil = $Transout->tampilescv3($posisi,$batas);
						while($data = $tampil->fetch_object()){

							?>
							<tr>
								<td><?php echo $no++."."; ?></td>
							<!-- 	<td><?php echo $data->transbrg_klr; ?></td> -->
								<td><?php echo $data->nm_brg; ?></td>
								<td><?php echo 'Rp. '.number_format($data->hrg).',-' ?></td>
								<td><?php echo $data->jlmh; ?></td>
								<td><?php echo $data->nm_supp; ?></td>
								<td><?php echo $data->almtsupp; ?></td>
								<td><?php echo $data->tlpsup; ?></td>
								<td><?php echo $data->ket; ?></td>
								<td><?php echo $data->tgl; ?></td>

								<!-- <td>
									<button class="btn btn-default btn-xs"><i class="fa fa-edit"></i>Cetak Nota</button>
								</td> -->
							</tr>
							<?php
						}
						?>
						</tbody>
					</table>
				</div>
				<div class="pagination">

				<?php 
				$baris=$Transout->tampilescv2();
				$jml=mysqli_num_rows($baris);
				$jml_hal = ceil($jml/$batas);
				for ($i=1; $i<=$jml_hal ; $i++){
					if($i != $hal){
						echo "<a href='?page=udtilpnglran&hal=$i'><button style='background-color:#fff; border:1px solid:#666; color:#666'>$i</button></a>";
					}else{
						echo "<button style='background-color:#ccc; border:1px solid:#000;'><b>$i</b></button></a>";
					}
				} ?>
			</div>
				<!-- <div class="panel-heading">
				<h2>Cetak Rekap Pengeluaran Barang</h2>
				<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
			</div>
			<form action="../views/ctktransklr.php" method="POST">
				<div class="col-md-6 col-centered">
					<h4><label for="radio" class="panel-warning">Cetak Data Pengeluaran: </label></h4>
					<h3><div class="checkbox-inline1"><label><input name="ket" type="radio" value="Masuk Toko"> Masuk Toko</label></div>
					<div class="checkbox-inline1"><label><input name="ket" type="radio" value="Return"> Return</label></div></h3>
					<h4><label class="control-label" for="print">Dari Tanggal</label></h4><input type="date" name="dari" class="form-control" id="dari" required></h4>
				</div>
				<div class="col-md-6 col-centered">
					<h4><label class="panel-warning" for="print">Sampai Tanggal</label></h4><input type="date" name="sampai" class="form-control" id="sampai" required>
					<input type="submit" class="btn btn-success panel-warning" name="cetak" value="CETAK">
				</div>
			</form> -->
			</div>
		</div>
	</div>
</div>

<!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah">Tambah Data</button> -->
<div id="tambah" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Tambah Data Barang</h4>
			</div>
			<form action="" method="post">
				<div class="modal-body">
					<div class="form-group">
						<label class="control-label" for="kd_brg">Kode Barang:</label>
						<input type="text" name="kd_brg" class="form-control" id="kd_brg" required>

						<label class="control-label" for="nama_barang">Nama Barang:</label>
						<input type="text" name="nama_barang" class="form-control" id="nama_barang" required>

						<label class="control-label" for="hrg_beli">Harga Beli:</label>
						<input type="number" name="hrg_beli" class="form-control" id="hrg_beli" required>

						<label class="control-label" for="hrg_jual">Harga Jual:</label>
						<input type="number" name="hrg_jual" class="form-control" id="hrg_jual" required>

						<label class="control-label" for="stok">Stok:</label>
						<input type="number" name="stok" class="form-control" id="stok" required>

						<label class="control-label" for="expr">Expired:</label>
						<input type="text" name="expr" class="form-control" id="expr" required>
						
						<div class="modal-footer">
							<button type="reset" class="btn btn-danger">Reset</button>
							<input type="submit" class="btn btn-success" name="tambah" value="Tambah">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
if(@$_POST['tambah']){
	$kd_brg = $connection->conn->real_escape_string($_POST['kd_brg']);
	$nama_barang = $connection->conn->real_escape_string($_POST['nama_barang']);
	$expr = $connection->conn->real_escape_string($_POST['expr']);
	$hrg_jual = $connection->conn->real_escape_string($_POST['hrg_jual']);
	$hrg_beli= $connection->conn->real_escape_string($_POST['hrg_beli']);
	$stok = $connection->conn->real_escape_string($_POST['stok']);

	$brg->tambah($kd_brg, $nama_barang, $expr, $hrg_beli, $hrg_jual, $stok);
	header("location: ?page=barang");
}
?>



<div id="edit" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Edit Data Barang</h4>
			</div>
			<form id="edt">
				<div class="modal-body" id="modal-edit">
					<div class="form-group">

						<label class="control-label" for="kd_brg">Kode Barang:</label>
						<input type="text" name="kd_brg" class="form-control" id="kd_brg" required>
						<input type="hidden" name="id_brg" id="id_brg">

						<label class="control-label" for="id_jns">Nama Barang:</label>
						<input type="text" name="id_jns" class="form-control" id="id_jns" required>

						<label class="control-label" for="hrg">Harga:</label>
						<input type="number" name="hrg" class="form-control" id="hrg" required>



						<label class="control-label" for="hrg_beli">Jumlah:</label>
						<input type="number" name="jmlh" class="form-control" id="jmlh" required>


						<label class="control-label" for="byr">Supplier:</label>
						<input type="text" name="kdsupp" class="form-control" id="kdsupp" required>

						<label class="control-label" for="almtsupp">Alamat Supplier:</label>
						<input type="text" name="almtsupp" class="form-control" id="almtsupp" required>

						<label class="control-label" for="tlpsup">No Tlp:</label>
						<input type="text" name="tlpsup" class="form-control" id="tlpsup" required>


						<div class="modal-footer">
							<input type="submit" class="btn btn-success" id="submit" name="edit" value="Simpan">
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<script src="assets/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
	$(document).on("click", "#edit_brg", function(){

		var kdbrg = $(this).data('kd');
		var nama = $(this).data('nama');

		var hrg = $(this).data('hrg');

		var jmlh = $(this).data('jmlh');

		var kdsupp = $(this).data('namasup');
		var almtsupp = $(this).data('almtsup');
		var tlpsup = $(this).data('tlpsup');
		var tgltrans = $(this).data('tgltrans');

		$("#modal-edit #kd_brg").val(kdbrg);
		$("#modal-edit #id_jns").val(nama);

		$("#modal-edit #hrg").val(hrg);

		$("#modal-edit #jmlh").val(jmlh);

		$("#modal-edit #kdsupp").val(kdsupp);
		$("#modal-edit #almtsupp").val(almtsupp);
		$("#modal-edit #tlpsup").val(tlpsup);

	})

	$(document).ready(function(e){
		$("#edt").on("submit", (function(e){
			e.preventDefault();
			$.ajax({
				url : '../models/ptrans_brgklr.php',
				type : 'POST',
				data : new FormData(this),
				contentType : false,
				cache : false,
				processData : false,
				success : function(msg){
					$('.table').html(msg);
				}
			});
		}));
	})
</script>


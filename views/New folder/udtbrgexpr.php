<?php
//include "../models/m_dtklr.php";

$Transout = new TransKeluar($connection);
?>
<div class="graphs">
	<div class="col-lg-12">
		<?php 
		if(isset($_GET['msg'])){
			if($_GET['msg']=='Gagal'){
				?>
				<div class="alert alert-danger">
					Gagal Transaksi!. Cek kembali pilihan anda.
				</div>
		<?php
			}
		}
		 ?>
		<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
			<div class="panel-heading">
				<h2>Data Barang Expired</h2>
				<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
			</div>
			<div class="panel-body no-padding" style="display: block;">
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<tr>
							<td>No</td>
							<td>Nama Barang</td>

							<td>Harga</td>
							<td>Stok</td>
							<td>Expired</td>
							<td>Nama Supplier</td>
							<td>Alamat</td>
							<td>Status</td>

							<td>Opsi</td>
						</tr>
						<tbody id="carit">
						<?php
						$no = 1;
						$tampil = $Transout->tampilesc();
						while($data = $tampil->fetch_object()){

							?>
							<tr>
								<td><?php echo $no++."."; ?></td>
								<td><?php echo $data->nm_brg; ?></td>

								<td><?php echo 'Rp. '.number_format($data->hrg).',-' ?></td>
								<td><?php echo $data->jmlhesc; ?> <?php echo $data->satuan; ?></td>
								<td><?php echo $data->expr; ?></td>
								<td><?php echo $data->nm_supp; ?></td>
								<td><?php echo $data->almtsupp; ?></td>
								<td><?php 
									$tglnow = date("Y-m-d");
									if($data->expr < $tglnow){
										echo "Sudah Expired!";
									}elseif ($data->expr == $tglnow) {
										echo "Tersisa 1 Hari";
									}else{
										echo "Expired Sudah Dekat!";
									}
								 ?></td>
								<td>
									<a id="edit_brg" data-toggle="modal" data-target="#edit" data-transbrgmsk="<?php echo $data->transbrg_msk; ?>" data-kd="<?php echo $data->kd_brg; ?>" data-nama="<?php echo $data->nm_brg; ?>" data-expr="<?php echo $data->expr; ?>" data-hrg="<?php echo $data->hrg; ?>" data-satuan="<?php echo $data->satuan; ?>" data-jmlh="<?php echo $data->jmlhesc; ?>"data-byr="<?php echo $data->byr; ?>"data-namasup="<?php echo $data->nm_supp; ?>"data-almtsup="<?php echo $data->almtsupp; ?>"data-tgltrans="<?php echo $data->tgl_trans; ?>"data-tlpsup="<?php echo $data->tlpsup; ?>">
										<button class="btn btn-default btn-xs"><i class="fa fa-edit"></i>Ketoko</button>
									</a>

									<a id="edit_brg2" data-toggle="modal" data-target="#edit2" data-transbrgmsk="<?php echo $data->transbrg_msk; ?>" data-kd="<?php echo $data->kd_brg; ?>" data-nama="<?php echo $data->nm_brg; ?>" data-expr="<?php echo $data->expr; ?>" data-hrg="<?php echo $data->hrg; ?>" data-satuan="<?php echo $data->satuan; ?>" data-jmlh="<?php echo $data->jmlhesc; ?>"data-byr="<?php echo $data->byr; ?>"data-namasup="<?php echo $data->nm_supp; ?>"data-almtsup="<?php echo $data->almtsupp; ?>"data-tgltrans="<?php echo $data->tgl_trans; ?>"data-tlpsup="<?php echo $data->tlpsup; ?>">
										<button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Return</button>
									</a>
									

									
								</td>
							</tr>
							<?php
						}
						?>
					</tbody>
					</table>
				</div>
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
				<h4 class="modal-title">Pengeluaran Barang</h4>
				<h6 class="modal-title">Barang Masuk Toko!</h6>
			</div>
			<form id="edt">
				<div class="modal-body" id="modal-edit">
					<div class="form-group">

						<label class="control-label" for="kd_brg">Kode Barang:</label>
						<input type="text" name="kd_brg" class="form-control" id="kd_brg" required>
						<input type="hidden" name="transbrg_msk" id="transbrg_msk">

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

<div id="edit2" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Pengeluaran Barang</h4>
				<h6 class="modal-title">Returnkan Barang!</h6>
			</div>
			<form id="edt2">
				<div class="modal-body" id="modal-edit2">
					<div class="form-group">

						<label class="control-label" for="kd_brg">Kode Barang:</label>
						<input type="text" name="kd_brg" class="form-control" id="kd_brg" required>
						<input type="hidden" name="transbrg_msk" id="transbrg_msk">

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
							<input type="submit" class="btn btn-success" id="submit2" name="edit" value="Simpan">
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
							var transbrg_msk = $(this).data('transbrgmsk');
							var kdbrg = $(this).data('kd');
							var nama = $(this).data('nama');
							// var expr = $(this).data('expr');
							var hrg = $(this).data('hrg');
							// var satuan = $(this).data('satuan');
							var jmlh = $(this).data('jmlh');
							// var byr = $(this).data('byr');
							var kdsupp = $(this).data('namasup');
							var almtsupp = $(this).data('almtsup');
							var tlpsup = $(this).data('tlpsup');
							var tgltrans = $(this).data('tgltrans');
							$("#modal-edit #transbrg_msk").val(transbrg_msk);
							$("#modal-edit #kd_brg").val(kdbrg);
							$("#modal-edit #id_jns").val(nama);
							// $("#modal-edit #expr").val(expr);
							$("#modal-edit #hrg").val(hrg);
							// $("#modal-edit #satuan").val(satuan);
							$("#modal-edit #jmlh").val(jmlh);
							// $("#modal-edit #byr").val(byr);
							$("#modal-edit #kdsupp").val(kdsupp);
							$("#modal-edit #almtsupp").val(almtsupp);
							$("#modal-edit #tlpsup").val(tlpsup);
							// $("#modal-edit #tgltrans").val(tgltrans);
						})

	$(document).ready(function(e){
		$("#edt").on("submit", (function(e){
			e.preventDefault();
			$.ajax({
				url : '../models/ptransexpr_brgklr.php',
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

<script type="text/javascript">
	$(document).on("click", "#edit_brg2", function(){
							var transbrg_msk = $(this).data('transbrgmsk');
							var kdbrg = $(this).data('kd');
							var nama = $(this).data('nama');
							// var expr = $(this).data('expr');
							var hrg = $(this).data('hrg');
							// var satuan = $(this).data('satuan');
							var jmlh = $(this).data('jmlh');
							// var byr = $(this).data('byr');
							var kdsupp = $(this).data('namasup');
							var almtsupp = $(this).data('almtsup');
							var tlpsup = $(this).data('tlpsup');
							var tgltrans = $(this).data('tgltrans');
							$("#modal-edit2 #transbrg_msk").val(transbrg_msk);
							$("#modal-edit2 #kd_brg").val(kdbrg);
							$("#modal-edit2 #id_jns").val(nama);
							// $("#modal-edit #expr").val(expr);
							$("#modal-edit2 #hrg").val(hrg);
							// $("#modal-edit #satuan").val(satuan);
							$("#modal-edit2 #jmlh").val(jmlh);
							// $("#modal-edit #byr").val(byr);
							$("#modal-edit2 #kdsupp").val(kdsupp);
							$("#modal-edit2 #almtsupp").val(almtsupp);
							$("#modal-edit2 #tlpsup").val(tlpsup);
							// $("#modal-edit #tgltrans").val(tgltrans);
						})

	$(document).ready(function(e){
		$("#edt2").on("submit", (function(e){
			e.preventDefault();
			$.ajax({
				url : '../models/ptransexpr_brgklrr.php',
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


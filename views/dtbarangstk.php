<?php
//include "../models/m_barang.php";

$brg = new Barang($connection);
?>
<div class="graphs">
	<div class="col-lg-12">
			<?php 
		if(isset($_GET['msg'])){
			if($_GET['msg']=='Gagal'){
				?>
				<div class="alert alert-danger">
					Tambah Barang Gagal!-Kode Barang Sudah Digunakan!
				</div>
		<?php
			}
		}
		 ?>
		<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
			<div class="panel-heading">
				<h2>Detail Barang</h2>
				<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
			</div>
			<div class="panel-body no-padding" style="display: block;">
				<form action="" method="POST">
								<div class="input-group input-group-ind">
									<input type="text" name="caribrg" class="form-control1 input-search" placeholder="Cari barang dengan nama....">
									<span class="input-group-btn">
										<button class="btn btn-success" name="btncari" type="submit"><i class="fa fa-search icon-ser"></i></button>
									</span>
								</div><!-- Input Group -->
							</form>
				<div class="table-responsive">
					<!-- <input type="text" id="cari" name="cari"> -->
					<table class="table table-bordered table-hover table-striped">
						<tr>
							<td>No</td>
							<td>Kode Barang</td>
							<td>Nama Barang</td>
							<!-- <td>Expired</td>
							<td>Harga Jual</td>
							<td>Harga Beli</td> -->
							<td>Stok Barang</td>
							<td>Opsi</td>

						</tr>
						<tbody id="carit">	
						<?php
						$batas=10;
						$istk=10;
						$hal=@$_GET['hal'];
						if(empty($hal)){
							$posisi = 0;
							$hal = 1;
						} else {
							$posisi = ($hal - 1)* $batas;
						}
						
						$no = $posisi +1;
						if(isset($_POST['btncari'])){
							$cari = $_POST['caribrg'];
							$tampil = $brg->tampilnotv2limitcari($istk,$cari);
						}else{
						$tampil = $brg->tampilnotv2limit($istk,$posisi,$batas);
					    }
						while($data = $tampil->fetch_object()){

							?>
							<tr>
								<td><?php echo $no++."."; ?></td>
								<td><?php echo $data->kd_brg; ?></td>
								<td><?php echo $data->nm_brg; ?></td>
								<!-- <td><?php echo $data->expr; ?></td>
								<td><?php echo $data->hrg_jwl; ?></td>
								<td><?php echo $data->hrg_bli; ?></td> -->
								<td><?php echo $data->stk; ?></td>
								<td>
									<a id="edit_brg" data-toggle="modal" data-target="#edit" data-kd="<?php echo $data->kd_brg; ?>" data-nama="<?php echo $data->nm_brg; ?>" data-expr="<?php echo $data->expr; ?>" data-hrgj="<?php echo $data->hrg_jwl; ?>" data-hrgb="<?php echo $data->hrg_bli; ?>" data-stok="<?php echo $data->stk; ?>">
										<button class="btn btn-default btn-xs"><i class="fa fa-edit"></i>Edit</button>
									</a>
									<!-- <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Hapus</button> -->
								</td>
							</tr>
							<?php
						}
						?>
						</tbody>
					</table>
				</div>



				<div class="pagination">

					<?php 
					$baris=$brg->tampilnotv2($istk);
					$jml=mysqli_num_rows($baris);
					$jml_hal = ceil($jml/$batas);
					for ($i=1; $i<=$jml_hal ; $i++){
						if($i != $hal){
							echo "<a href='?page=dtbarangstk&hal=$i'><button style='background-color:#fff; border:1px solid:#666; color:#666'>$i</button></a>";
						}else{
							echo "<button style='background-color:#ccc; border:1px solid:#000;'><b>$i</b></button></a>";
						}
					} ?>
				</div>

				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah">Tambah Data</button>
			</div>
		</div>
	</div>
</div>
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
											
	$hrg_jual = 0;
	$hrg_beli = 0;
	$stok= 0;
	$expr=0000-00-00;

	$cekkd=$brg->tampil($kd_brg);
	$kdcek=mysqli_num_rows($cekkd);								
	if ($kdcek > 0) {
		header("location: ?page=dtbarang&msg=Gagal");
	}else{
	$brg->tambah($kd_brg, $nama_barang, $expr, $hrg_beli, $hrg_jual, $stok);
	header("location: ?page=dtbarang");
	}
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
						<input type="text" name="kd_brg2" class="form-control" id="kd_brg2" disabled>
						<input type="hidden" name="kd_brg" class="form-control" id="kd_brg" required>
						<input type="hidden" name="id_brg" id="id_brg">

						<label class="control-label" for="nama_barang">Nama Barang:</label>
						<input type="text" name="nama_barang" class="form-control" id="nama_barang" required>

						<!-- <label class="control-label" for="expr">Expired:</label> -->
						<input type="hidden" name="expr" class="form-control" id="expr" required>

						<!-- <label class="control-label" for="hrg_jual">Harga Jual:</label> -->
						<input type="hidden" name="hrg_jual" class="form-control" id="hrg_jual" required>

						<!-- <label class="control-label" for="hrg_beli">Harga Beli:</label >-->
						<input type="hidden" name="hrg_beli" class="form-control" id="hrg_beli" required>

						<!-- <label class="control-label" for="stok">Stok:</label> -->
						<input type="hidden" name="stok" class="form-control" id="stok" required>
						
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
							//var idbrg = $(this).data('id');
							var kdbrg = $(this).data('kd');
							var nmbrg = $(this).data('nama');
							var expr = $(this).data('expr');
							var hrgjual = $(this).data('hrgj');
							var hrgbeli = $(this).data('hrgb');
							var stok = $(this).data('stok');
							//$("#modal-edit #id_brg").val(idbrg);
							$("#modal-edit #kd_brg").val(kdbrg);
							$("#modal-edit #kd_brg2").val(kdbrg);
							$("#modal-edit #nama_barang").val(nmbrg);
							$("#modal-edit #expr").val(expr);
							$("#modal-edit #hrg_jual").val(hrgjual);
							$("#modal-edit #hrg_beli").val(hrgbeli);
							$("#modal-edit #stok").val(stok);
						})

	$(document).ready(function(e){
		$("#edt").on("submit", (function(e){
			e.preventDefault();
			$.ajax({
				url : '../models/proses_edit_barang.php',
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
<!-- <script>
	$(document).ready(function(){
		$("#cari").on("keyup", function(){
			var value = $(this).val().toLowerCase();
			$("#carit tr").filter(function(){
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});
	});
	
</script> -->

<?php
//include "../models/m_barang.php";
// include "../models/m_jenis.php";

$brg = new Barang($connection);
$jns = new Jenis($connection);
?>
<div class="graphs">
	<div class="col-lg-12">
		<?php 
		if(isset($_GET['msg'])){
			if($_GET['msg']=='Gagal'){
				?>
				<div class="alert alert-danger">
					Tambah Jenis Barang Gagal!-Kode Jenis Sudah Digunakan!
				</div>
		<?php
			}
		}
		 ?>
		<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
			<div class="panel-heading">
				<h2>Barang</h2>
				<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
			</div>
			<div class="panel-body no-padding" style="display: block;">
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<tbody id="carit">
						<tr>
							<td>
								<table class="table table-bordered table-hover table-striped">
									<tr>
										<td>No</td>
										<td>Kode Jenis</td>
										<td>Nama Jenis</td>
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
									$tampil = $jns->tampillimit($posisi,$batas);
									while($data = $tampil->fetch_object()){
										
										?>
																			
											<tr>
											<td><?php echo $no++."."; ?></td>
											<td><?php echo $data->id_jns; ?></td>
											<td><?php echo $data->jns_brg; ?></td>
											<!-- <td>
												<a id="edit_jns" data-toggle="modal" data-target="#edit" data-kd="<?php echo $data->id_jns; ?>" data-jenis="<?php echo $data->jns_brg; ?>">
													<button class="btn btn-default btn-xs"><i class="fa fa-edit"></i>Edit</button>
												</a>
												<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Hapus</button> -->
											</td> 
										</tr>
										
										<?php
									}
									?>
									</tbody>

								</table>
								<div class="pagination">

									<?php 
									$baris=$jns->tampil();
									$jml=mysqli_num_rows($baris);
									$jml_hal = ceil($jml/$batas);
									for ($i=1; $i<=$jml_hal ; $i++){
										if($i != $hal){
											echo "<a href='?page=ubarang&hal=$i'><button style='background-color:#fff; border:1px solid:#666; color:#666'>$i</button></a>";
										}else{
											echo "<button style='background-color:#ccc; border:1px solid:#000;'><b>$i</b></button></a>";
										}
									} ?>
								</div>
<br>
								<!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah">Tambah Data</button> -->
								<div id="tambah" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Tambah Jenis</h4>
											</div>
											<form action="" method="post">
												<div class="modal-body">
													<div class="form-group">
														<label class="control-label" for="kd_brg">Kode Jenis:</label>
														<input type="text" name="id_jns" class="form-control" id="id_jns" required>
														
														<label class="control-label" for="nama_barang">Nama Jenis Barang:</label>
														<input type="text" name="nm_jns" class="form-control" id="nm_jns" required>
														<div>
															<div class="modal-footer">
																<button type="reset" class="btn btn-danger">Reset</button>
																<input type="submit" class="btn btn-success" name="tambah" value="Tambah">
															</div>
														</div>
													</div>
												</div>
											</form>
											<?php
											if(@$_POST['tambah']){
												$id_jns = $connection->conn->real_escape_string($_POST['id_jns']);
												$nm_jns = $connection->conn->real_escape_string($_POST['nm_jns']);

												$cekkd=$jns->tampil($id_jns);
												$kdcek=mysqli_num_rows($cekkd);								
												if ($kdcek > 0) {
													header("location: ?page=barang&msg=Gagal");
												}
												else{
												$jns->tambah($id_jns, $nm_jns);
												header("location: ?page=barang");
												}
											}
											?>
										</div>
									</div>
								</div>
							</div>	
						</div>




					</td>
					
					<td>
						<table class="table table-bordered table-hover table-striped">
							<tr>
								<td>No</td>
								<td>Kode Barang</td>
								<td>Nama Barang</td>
								<td>Opsi</td>
							</tr>
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
							$tampil = $brg->tampilesclimit($posisi,$batas);
							while($data = $tampil->fetch_object()){
								
								?>
								<tr>
									<td><?php echo $no++."."; ?></td>
									<td><?php echo $data->kd_brg; ?></td>
									<td><?php echo $data->nm_brg; ?></td>
									<td>
										<a href="?page=udtbarang">
											<button class="btn btn-default btn-xs"><i class="fa fa-edit"></i>Lihat Detail</button>
										</a>		
									</td>
								</tr>
								
								<?php
							}
							?>
						</table>
						
					</div>
					<div class="pagination">

						<?php 
						$baris=$jns->tampilesc();
						$jml=mysqli_num_rows($baris);
						$jml_hal = ceil($jml/$batas);
						for ($i=1; $i<=$jml_hal ; $i++){
							if($i != $hal){
								echo "<a href='?page=ubarang&hal=$i'><button style='background-color:#fff; border:1px solid:#666; color:#666'>$i</button></a>";
							}else{
								echo "<button style='background-color:#ccc; border:1px solid:#000;'><b>$i</b></button></a>";
							}
						} ?>
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
											<div>
												<div class="modal-footer">
													<button type="reset" class="btn btn-danger">Reset</button>
													<input type="submit" class="btn btn-success" name="tambah" value="Tambah">
												</div>
											</div>
										</div>
									</div>
								</form>
								<?php
								if(@$_POST['tambah']){
									$kd_brg = $connection->conn->real_escape_string($_POST['kd_brg']);
									$nama_barang = $connection->conn->real_escape_string($_POST['nama_barang']);
									$expr = "0000-00-00";
									$hrg_jual = 0;
									$hrg_beli= 0;
									$stok = 0;
									
									$brg->tambah($kd_brg, $nama_barang, $expr, $hrg_beli, $hrg_jual, $stok);
									
								}
								?>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</td>
	</tr>
</tbody>
</table>

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
						
						<label class="control-label" for="id_jns">Kode Jenis:</label>
						<input type="text" name="id_jns" class="form-control" id="id_jns" required>
						<!-- <input type="hidden" name="id_brg" id="id_brg"> -->
						
						<label class="control-label" for="jns_brg">Jenis Barang:</label>
						<input type="text" name="jns_brg" class="form-control" id="jns_brg" required>						

					</div>
					<div class="modal-footer">
						<input type="submit" class="btn btn-success" id="submit" name="edit" value="Simpan">
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="assets/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript">
		$(document).on("click", "#edit_jns", function(){
							//var idbrg = $(this).data('id');
							var kdbrg = $(this).data('kd');
							var nmbrg = $(this).data('jenis');
							/*var expr = $(this).data('expr');
							var hrgjual = $(this).data('hrgj');
							var hrgbeli = $(this).data('hrgb');
							var stok = $(this).data('stok');*/
							//$("#modal-edit #id_brg").val(idbrg);
							$("#modal-edit #id_jns").val(kdbrg);
							$("#modal-edit #jns_brg").val(nmbrg);
							/*$("#modal-edit #expr").val(expr);
							$("#modal-edit #hrg_jual").val(hrgjual);
							$("#modal-edit #hrg_beli").val(hrgbeli);
							$("#modal-edit #stok").val(stok);*/
						})

		$(document).ready(function(e){
			$("#edt").on("submit", (function(e){
				e.preventDefault();
				$.ajax({
					url : '../models/pedit_jenis.php',
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
</div>				
</div>	

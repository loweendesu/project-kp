<?php
include "../models/m_user.php";

$Usr = new User($connection);
?>
<div class="graphs">
	<div class="col-lg-12">
		<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
			<div class="panel-heading">
				<h2>Data Pengguna</h2>
				<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
			</div>
			<div class="panel-body no-padding" style="display: block;">
				<div class="table-responsive">
					<!-- <input type="text" id="cari" name="cari"> -->
					<table class="table table-bordered table-hover table-striped">
						<tr>
							<td>No</td>
							<!-- <td>Username</td> -->
							<td>Nama</td>
							<!-- <td>Expired</td>
							<td>Harga Jual</td>
							<td>Harga Beli</td> -->
							<td>Jenis Kelamin</td>
							<td>Alamat</td>
							<td>No. Tlp</td>
							<td>Level</td>
							<td>Opsi</td>

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

						$tampil = $Usr->tampillimit($posisi,$batas);
						while($data = $tampil->fetch_object()){

							?>
							<tr>
								<td><?php echo $no++."."; ?></td>
								<!-- <td><?php echo $data->id_ptgs; ?></td> -->
								<td><?php echo $data->nm_ptgs; ?></td>
								<td><?php 
								if ($data->jk == "L") {
									echo 'Laki-Laki';
								}elseif ($data->jk=="P") {
									echo 'Perempuan';
								}
								 ?></td>
								<td><?php echo $data->almt; ?></td>
								<td><?php echo $data->no_tlp; ?></td>
								<td><?php 
								if ($data->lvl == "1") {
									echo 'Pengawas';
								}elseif ($data->lvl=="0") {
									echo 'Petugas';
								}
								 ?></td>
								<td>
									<a id="edit_user" data-toggle="modal" data-target="#edit" data-idptgs="<?php echo $data->id_ptgs; ?>" data-nama="<?php echo $data->nm_ptgs; ?>" data-jk="<?php echo $data->jk; ?>" data-almt="<?php echo $data->almt; ?>" data-notlp="<?php echo $data->no_tlp; ?>" data-lvl="<?php echo $data->lvl; ?>">
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
					$baris=$Usr->tampil();
					$jml=mysqli_num_rows($baris);
					$jml_hal = ceil($jml/$batas);
					for ($i=1; $i<=$jml_hal ; $i++){
						if($i != $hal){
							echo "<a href='?page=dtbarang&hal=$i'><button style='background-color:#fff; border:1px solid:#666; color:#666'>$i</button></a>";
						}else{
							echo "<button style='background-color:#ccc; border:1px solid:#000;'><b>$i</b></button></a>";
						}
					} ?>
				</div>
				<br />
				<button type="button" class="btn btn-default" data-toggle="modal" data-target="#tambah">Tambah Pengguna</button>
			</div>
		</div>

	</div>

</div>

<div id="tambah" class="modal fade" role="dialog">

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Tambah User</h4>
			</div>
			<form action="../models/prosestambahuser.php" method="POST"  onsubmit="return checkPassword(this);">
				<div class="modal-body">
					<div class="form-group">
						<label class="control-label" for="username">Username:</label>
						<input type="text" name="usr" class="form-control" id="usr" required>

						<label class="control-label" for="username">Nama:</label>
						<input type="text" name="nma" class="form-control" id="nma" required>

						<label class="control-label" for="pass">Password:</label>
						<input type="Password" name="passwd" class="form-control" id="passwd" required>

						<label class="control-label" for="pass">Ulangi Password:</label>
						<input type="Password" name="repasswd" class="form-control" id="repasswd" required>

						<label for="radio" class="control-label">Jenis Kelamin: </label>
							<div class="radio-inline"><label><input name="jk" type="radio" value="L"> Laki-Laki</label></div><div class="radio-inline"><label><input name="jk" type="radio" value="P"> Perempuan</label></div><br/>

						<label class="control-label" for="almt">Alamat:</label>
						<input type="text" name="almt" class="form-control" id="almt" required>

						<label class="control-label" for="notlp">No. Tlp:</label>
						<input type="text" name="no_tlp" class="form-control" id="no_tlp" required>

						<label class="control-label" for="notlp">Sebagai:</label>
						<div class="radio-inline"><label><input name="lvl" type="radio" value="1"> Pengawas</label></div><div class="radio-inline"><label><input name="lvl" type="radio" value="0"> Petugas</label></div><br/>

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

<div id="edit" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Edit Data</h4>
			</div>
			<form id="edt">
				<div class="modal-body" id="modal-edit">
					<div class="form-group">

						<!-- <label class="control-label" for="kd_brg">Username:</label> -->
						<input type="hidden" name="username" class="form-control" id="username" disabled>
						<input type="hidden" name="user" id="user">

						<label class="control-label" for="nama_barang">Nama:</label>
						<input type="text" name="nama" class="form-control" id="nama" required>

						<!-- <label class="control-label" for="expr">Jenis Kelamin:</label>
						<select class="form-control" name="jk" id="jk">
							<option value="L">Laki-Laki</option>
							<option value="P">Perempuan</option>
						</select> -->

						<label class="control-label" for="hrg_jual">Alamat</label>
						<input type="text" name="almt" class="form-control" id="almt" required>

						<label class="control-label" for="hrg_beli">No. Tlp</label>
						<input type="text" name="no_tlp" class="form-control" id="no_tlp" required>

						<!-- <label class="control-label" for="stok">Sebagai:</label> -->
						<input type="hidden" name="lvl" class="form-control" id="lvl" required>
						<!-- <select class="form-control" name="lvl" id="lvl">
							<option value="0">Petugas</option>
							<option value="1">Pengawas</option>
						</select> -->
						
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
		function checkPassword(theForm){
		if (theForm.passwd.value != theForm.repasswd.value) {
			alert('Password Tidak Sama!');
			return false;
		}else{
			return true;
		}
	}
	$(document).on("click", "#edit_user", function(){
							//var idbrg = $(this).data('id');
							var kdbrg = $(this).data('idptgs');
							var user = $(this).data('idptgs');
							var nmbrg = $(this).data('nama');
							var expr = $(this).data('jk');
							var hrgjual = $(this).data('almt');
							var hrgbeli = $(this).data('notlp');
							var stok = $(this).data('lvl');
							//$("#modal-edit #id_brg").val(idbrg);
							$("#modal-edit #username").val(kdbrg);
							$("#modal-edit #user").val(user);
							$("#modal-edit #nama").val(nmbrg);
							// $("#modal-edit #jk").val(expr);
							$("#modal-edit #almt").val(hrgjual);
							$("#modal-edit #no_tlp").val(hrgbeli);
							$("#modal-edit #lvl").val(stok);
						})

	$(document).ready(function(e){
		$("#edt").on("submit", (function(e){
			e.preventDefault();
			$.ajax({
				url : '../models/prosesedituser.php',
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

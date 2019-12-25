<?php
require_once('../config/_koneksi.php');
require_once('../models/database.php');
include "../models/m_dtrans.php";
$connection = new Database($host, $user, $pass, $database);
$Transin = new TransMasuk($connection);

//$id_brg = $_POST['id_brg'];
									
?>
<div class="graphs">
	<div class="col-lg-12">
		<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
			<div class="panel-heading">
				<h2>Detail Barang</h2>
				<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
			</div>
			<div class="panel-body no-padding" style="display: block;">
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
						$hal=@$_GET['hal'];
						if(empty($hal)){
							$posisi = 0;
							$hal = 1;
						} else {
							$posisi = ($hal - 1)* $batas;
						}
						
						$no = $posisi +1;
						$trans = $connection->conn->real_escape_string($_POST['trans']);
	
						$tampil = $Transin->tampillimitv2($posisi,$batas,$trans);
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
									<button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Hapus</button>
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
					$baris=$Transin->tampil();
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

				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah">Tambah Data</button>
			</div>
		</div>
	</div>
</div>
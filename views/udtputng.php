<?php
//include "../models/m_trans.php";
//include "../models/m_dtklr.php";

$Mskan = new Trans($connection);
$Transout = new TransKeluar($connection);
?>
<div class="graphs">
	<div class="col-lg-12">
		<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
			<div class="panel-heading">
				<h2>Data Transaksi Piutang</h2>
				<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
			</div>
			<div class="panel-body no-padding" style="display: block;">
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
						<tr>
							<td>No</td>

							<td>Nama Supplier</td>

							<td>Jatuh Tempo</td>
							<td>Status</td>

							<td>Tanggal Transaksi</td>

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
							$tampil = $Mskan->tampillimitv2($posisi,$batas);
							while($data = $tampil->fetch_object()){

								?> 
								<tr>
									<td><?php echo $no++."."; ?></td>
									<td><?php echo $data->nm_supp; ?></td>
									<td><?php echo $data->tempo; ?></td>
									<td><?php echo $data->byr; ?></td>
									<td><?php echo $data->tgltrans; ?></td>
									<td>
										<a id="edit_brg" data-toggle="modal" data-target="#modal-edit<?=$data->transmsk;?>" data-kd="<?php echo $data->transmsk; ?>" data-jns="<?php echo $data->id_jns; ?>" data-expr="<?php echo $data->expr; ?>" data-hrg="<?php echo $data->hrg; ?>" data-satuan="<?php echo $data->satuan; ?>" data-jmlh="<?php echo $data->jmlh; ?>"data-byr="<?php echo $data->byr; ?>"data-namasup="<?php echo $data->nm_supp; ?>"data-almtsup="<?php echo $data->almtsupp; ?>"data-tgltrans="<?php echo $data->tgl_trans; ?>"data-tlpsup="<?php echo $data->tlpsup; ?>">
										</a>							


										<button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#myModal<?=$data->transmsk;?>">Lihat</button>

										<!-- Modal -->
										<div id="myModal<?=$data->transmsk;?>" class="modal fade" role="dialog">
											<div class="modal-dialog">

												<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h4 class="modal-title">Detail Transaksi : <?=$data->transmsk;?></h4>
													</div>
													<div class="modal-body">
														<div class="panel-body no-padding" style="display: block;">
															<form action="../models/uubahstatusbyr.php" method="POST">
																<input type="hidden" name="id" value="<?=$data->transmsk;?>">
																<div class="radio-inline"><label><input name="byr" type="radio" value="Piutang" checked> Belum Bayar</label></div><div class="radio-inline"><label><input name="byr" type="radio" value="Lunas"> Sudah Dibayar</label></div> <input type="submit" class="btn btn-default btn-xs" name="tambah" value="Perbaharui Status"><br/>
															</form>

															<div class="table-responsive">
																<table class="table table-bordered table-hover table-striped">
																	<tr>
																		<!-- <td>No</td> -->
							<!-- <td>Kode Detail Trans.</td>
								<td>Kode Trankaksi</td> -->
								<td>Nama Supplier</td>
								<td>Alamat</td>
								<td>No. Tlp</td>
								<td>Total Transaksi</td>
								<td>Status</td>
								
								<td>Jatuh Tempo</td>

								<!-- <td>Opsi</td> -->
							</tr>

							<tr>
								<td><?php echo $data->nm_supp; ?></td>
								<td><?php echo $data->almtsupp ?></td>
								<td><?php echo $data->tlpsup; ?></td>
								<td><?php echo 'Rp. '.number_format($data->tottrans).',-' ?></td>
								<td><?php echo $data->byr; ?></td>
								<td><?php echo $data->tempo; ?></td>
							</tr>
						</table>
					</div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>
	<!--ini bukan modal-->
</td>

</div>

</tr>

<?php
}
?>
</tbody>
</table>
</div>				
<div class="pagination">

	<?php 
	$baris=$Mskan->tampillimitv3();
	$jml=mysqli_num_rows($baris);
	$jml_hal = ceil($jml/$batas);
	for ($i=1; $i<=$jml_hal ; $i++){
		if($i != $hal){
			echo "<a href='?page=dtputng&hal=$i'><button style='background-color:#fff; border:1px solid:#666; color:#666'>$i</button></a>";
		}else{
			echo "<button style='background-color:#ccc; border:1px solid:#000;'><b>$i</b></button></a>";
		}
	} ?>
</div>

</div>				
</div>	
</div>
</div>


<?php
//include "../models/m_trans.php";
//include "../models/m_dtklr.php";

$Mskan = new Trans($connection);
$Transout = new TransKeluar($connection);
?>
<div class="graphs">
	<div class="col-lg-12">
		<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">

<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
							<div class="panel-body no-padding">
								<table class="table table-striped">
					
							<thead>
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
								$tampil = $Mskan->tampilv3();
								while($data = $tampil->fetch_object()){

									?> 
									<tr class="danger">
										
									<td align="center"><?php echo 'Hari ini Tanggal Jatuh Tempo transaksi dengan '.$data->nm_supp.'. Segera bayar Piutang anda!.'; ?></td>
									<td>
										<button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#myModalputangnow<?=$data->transmsk;?>">Lihat</button>

										<!-- Modal -->
									<div id="myModalputangnow<?=$data->transmsk;?>" class="modal fade" role="dialog">
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
									        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
									      </div>
									    </div>

									  </div>
									</div>
									</td>

							</tr>

							<?php
						}
						if(@$_POST['return']){
							$ket='Return';							
							$Transout->tambah($kd_brg, $hrg, $jmlh, $kd_supp, $almtsupp, $tlpsup, $ket);
							header("location: ?page=dttransklr");
						}
						?>
					</thead>
				</table>
			</div>				
			
		</div>				
	</div>	
</div>
</div>


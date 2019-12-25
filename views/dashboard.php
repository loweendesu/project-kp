<?php
//include "../models/m_dtklr.php";

$Transout = new TransKeluar($connection);
$Tranin = new TransMasuk($connection);
$bdta = new Barang($connection);
?>
<div id="page-wrapper">
	<div class="graphs">
		<div class="col_3">
			<div class="col-md-3 widget widget1">
				<div class="r3_counter_box">
					<i class="fa fa-mail-forward"></i>
					<div class="stats">
						<?php
												//$istk=10;
												$bout = $Transout->tampilescv4();
												$boutcek = mysqli_num_rows($bout);
												?>
						<h5><?php echo $boutcek; ?><span>Transaksi</span></h5>
						<div class="grow">
							<p>Barang Keluar</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 widget widget1">
				<div class="r3_counter_box">
					<i class="fa fa-level-down" style="font-size:48px"></i>
					<div class="stats">
						<?php
												//$istk=10;
												$bin = $Tranin->tampil();
												$bincek = mysqli_num_rows($bin);
												?>
						<h5><?php echo $bincek; ?><span>Transaksi</span></h5>
						<div class="grow grow1">
							<p>Barang Masuk</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 widget widget1">
				<div class="r3_counter_box">
					<i class="fa fa-clock-o" style="font-size:48px;color:red"></i>
					<div class="stats">
						<?php
												//$istk=10;
												$bexpr = $Transout->tampilesc();
												$bexprcek = mysqli_num_rows($bexpr);
												?>
						<h5><?php echo $bexprcek; ?><span>Data</span></h5>
						<div class="grow grow3">
							<p>Expierd</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 widget">
				<div class="r3_counter_box">
					<i class="fa fa-shopping-cart" style="font-size:48px;color:yellow"></i>
					<div class="stats">
						<?php
												//$istk=10;
												$bdta = $bdta->tampil();
												$bdtacek = mysqli_num_rows($bdta);
												?>
						<h5><?php echo $bdtacek; ?><span>Data</span></h5>
						<div class="grow grow2">
							<p>Data Barang</p>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
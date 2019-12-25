<?php
ob_start();
require_once('../config/_koneksi.php');
require_once('../models/database.php');
include "../models/m_barang.php";
include "../models/m_jenis.php";
include "../models/m_dttrans.php";
include "../models/m_trans.php";
include "../models/m_dtklr.php";

session_start();
if($_SESSION['status'] !="login"){
	header("location:../login.php");
}

$connection = new Database ($host, $user, $pass, $database);
$brgs = new Barang($connection);
$Transins = new TransMasuk($connection);
$jns = new Jenis($connection);
$Mskcek = new Trans($connection);
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Barang Drop-dropan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Barang Drop-dropan" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="../assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="../assets/css/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="../assets/css/font-awesome.css" rel="stylesheet"> 
	<!-- jQuery -->
	<!-- lined-icons -->
	<link rel="stylesheet" href="../assets/css/icon-font.min.css" type='text/css' />
	<!-- //lined-icons -->
	<!-- chart -->
	<script src="../assets/js/Chart.js"></script>
	<!-- //chart -->
	<!--animate-->
	<link href="../assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="../assets/js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!--//end-animate-->
	<!----webfonts--->
	<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
	<!---//webfonts---> 
	<!-- Meters graphs -->
	<script src="../assets/js/jquery-1.10.2.min.js"></script>
	<!-- Placed js at the end of the document so the pages load faster -->

</head> 

<body class="sticky-header left-side-collapsed" onload="initMap()">
	<section>
		<!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="">Minimarket <span>LPP</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="?page=dashboard"><i class="lnr lnr-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
				<ul class="nav nav-pills nav-stacked custom-nav">
					<li class="menu-list">
						<a href="#"><i class="lnr lnr-cart"></i>
							<span>Pemasukan</span></a>
							<ul class="sub-menu-list">
								<li><a href="?page=trbrgmsk">Pemasukan Barang</a> </li>
								<li><a href="?page=transmskan">Trans. Barang Masuk</a> </li>
								<li><a href="?page=dttransmsk">Detail Transaksi Masuk</a> </li>
							</ul>
						</li>
						<li class="menu-list">
							<a href="#"><i class="lnr lnr-upload"></i>
								<span>Pengeluaran</span></a>
								<ul class="sub-menu-list">
									<li><a href="?page=dttransklr">Pengeluaran Barang</a> </li>
									<li><a href="?page=transklran">Trans. Barang Keluar</a> </li>
									<li><a href="?page=dtilpnglran">Detail Pengeluaranr</a> </li>
								</ul>
							</li>             
							<li class="menu-list"><a href="#"><i class="lnr lnr-book"></i> <span>Barang</span></a>
								<ul class="sub-menu-list">
									<li><a href="?page=barang">Barang</a> </li>
									<li><a href="?page=dtbarang">Detail Barang</a></li>
								</ul>
							</li>  

							<!-- <li class="menu-list"><a href="#"><i class="lnr lnr-book"></i>  <span>Laporan</span></a> 
								<ul class="sub-menu-list">
									<li><a href="#">Laporan Barang Masuk</a> </li>
									<li><a href="#">Laporan Barang Keluar</a></li>
								</ul>
							</li> -->
						</ul>
						<!--sidebar nav end-->
					</div>
				</div>
				<!-- left side end-->

				<!-- main content start-->
				<div class="main-content main-content2 main-content2copy">
					<!-- header-starts -->
					<div class="header-section">

						<!--toggle button start-->
						<!-- 	<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a> -->
						<!--toggle button end-->

						<!--notification menu start -->
						<div class="menu-right">
							<div class="user-panel-top">  	
								<div class="profile_details_left">
									<ul class="nofitications-dropdown">
										<li class="login_box" id="loginContainer">
											<!-- <div class="search-box">
												<div id="sb-search" class="sb-search">
													<form> -->
														<input class="form-control" placeholder="Cari..." type="text" id="cari">
														<!-- <input class="sb-search-submit" type="submit" value="">
															<span class="sb-icon-search"> </span> -->
															<!-- <input type="text" id="cari" name="cari">  -->
												<!-- 	</form>
												</div>
											</div> -->
											<!-- search-scripts -->
											<!-- <script src="../assets/js/classie.js"></script>
											<script src="../assets/js/uisearch.js"></script>
											<script>
												new UISearch( document.getElementById( 'sb-search' ) );
											</script> -->
											<!-- //search-scripts -->
											<!-- <input type="text" id="cari" name="cari"> -->
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												<?php
												$pesans = $Transins->tampilnot();
												$cekin = mysqli_num_rows($pesans);
												?>
												<i class="fa fa-envelope"></i><span class="badge"><?php echo $cekin; ?></span></a>

												<ul class="dropdown-menu">
													<li>
														<div class="notification_header">
															<h3>Pesan Expired</h3>
														</div>
													</li>
													<?php



													$pesans = $Transins->tampilnotv2();
													while($data = $pesans->fetch_object()){

														?>
														<li><!-- <a href="#"> -->
															<div class="user_img"><img src="images/1.png" alt=""></div>
															<div class="notification_desc">
																<p><?php echo $data->nm_brg; ?> Tanggal Expire Tercapai!</p>
																<p>Tanggal <?php echo $data->expr; ?></p>
																<!-- <p><span>1 hour ago</span></p> -->
																<hr>
															</div>
															<div class="clearfix"></div>	
														</a></li>

														<?php
													}
													?>
													<li>
														<div class="notification_bottom">
															<a href="?page=dtbrgexpr">Buka Data Barang</a>
														</div> 
													</li>
												</ul>
											</li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
													<?php
													$tampilutng = $Mskcek->tampilnot();
													$cekutng = mysqli_num_rows($tampilutng);
													?>
													<i class="fa fa-tasks"></i><span class="badge blue1"><?php echo $cekutng; ?></span></a>
													<ul class="dropdown-menu">
														<li>
															<div class="notification_header">
																<h3>Pemberitahuan Piutang</h3>
															</div>
														</li>
														<?php



														$tampilmsk = $Mskcek->tampilnotv2();
														while($data = $tampilmsk->fetch_object()){

															?>
															<li><!-- <a href="#"> -->
																<div class="user_img"><img src="images/1.png" alt=""></div>
																<div class="notification_desc">
																	<p>Transaksi pemasukan dengan <?php echo $data->nm_supp; ?> Memasuki waktu jatuh tempo pembayaran</p>
																	<p>Jatuh tempo pembayaran pada: <?php echo $data->tempo; ?> </p>
																	<!-- <p><span>1 hour ago</span></p> -->
																	<hr>
																</div>
																<div class="clearfix"></div>	
															</a></li>

															<?php
														}
														?>
														<li>
															<div class="notification_bottom">
																<a href="?page=dtputng">Buka Data Pitutang</a>
															</div> 
														</li>
													</ul>
												</li>		   	
												<li class="dropdown">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
														<?php
														$istk=10;
														$tampils = $brgs->tampilnotv2($istk);
														$cekbrgs = mysqli_num_rows($tampils);
														?>
														<i class="fa fa-bell"></i><span class="badge blue"><?php echo $cekbrgs; ?></span></a>
														<ul class="dropdown-menu">
															<li>
																<div class="notification_header">
																	<h3>Pemberitahuan Stok Sisa</h3>
																</div>
															</li>
															<?php



															$tampils = $brgs->tampilnot($istk);
															while($data = $tampils->fetch_object()){

																?>
																<li><!-- <a href="#"> -->
																	<div class="user_img"><img src="images/1.png" alt=""></div>
																	<div class="notification_desc">
																		<p><?php echo $data->nm_brg; ?></p>
																		<p>Tersisa: <?php echo $data->stk; ?> Stok</p>
																		<!-- <p><span>1 hour ago</span></p> -->
																		<hr>
																	</div>
																	<div class="clearfix"></div>	
																</a></li>

																<?php
															}
															?>
															<li>
																<div class="notification_bottom">
																	<a href="?page=dtbarangstk">Buka Data Barang</a>
																</div> 
															</li>
														</ul>
													</li>		   							   		
													<div class="clearfix"></div>	
												</ul>
											</div>
											<div class="profile_details">		
												<ul>
													<li class="dropdown profile_details_drop">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
															<div class="profile_img">	
																<span style="background:url(../assets/images/149071v2j.png) no-repeat center"> </span> 
																<div class="user-name">
																	<?php 
																	$u=$_SESSION['username'];
																	$db=mysqli_connect($host,$user,$pass,$database);
																	$sql = "SELECT * FROM user WHERE id_ptgs='$u'";
																	$result=mysqli_query($db,$sql);
																	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
																	$cek = mysqli_num_rows($result);
																	?>
																	<p><?php echo $row['nm_ptgs']?><span>Pengawas</span></p>
																</div>
																<i class="lnr lnr-chevron-down"></i>
																<i class="lnr lnr-chevron-up"></i>
																<div class="clearfix"></div>	
															</div>	
														</a>
														<ul class="dropdown-menu drp-mnu">
															<li> <a href="?page=dtmngusr"><i class="fa fa-cog"></i> Kelola Pengguna</a> </li> 
															<li> <a href="?page=profile"><i class="fa fa-user"></i>Profil</a> </li> 
															<li> <a href="../models/m_logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
														</ul>
													</li>
													<div class="clearfix"> </div>
												</ul>
											</div>		
					<!-- <div class="social_icons">
						
						<div class="clearfix"> </div>
					</div> -->			             	
					<div class="clearfix"></div>
				</div>
			</div>
			<!--notification menu end -->
		</div>
		<!-- //header-ends -->
		<div id="page-wrapper" style="height: 2450px">
			
			<?php
			$tampilutngnow = $Mskcek->tampilv3();
			$cekutngnow = mysqli_num_rows($tampilutngnow);
			if($cekutngnow > '0'){
				include "../views/tmpilputngnow.php";
			}

			$tampilutng2 = $Mskcek->tampilv2();
			$cekutng2 = mysqli_num_rows($tampilutng2);
			if($cekutng2 > '0'){
				include "../views/tmpilputng.php";
			}

			if(@$_GET['page']=='dashboard' || @$_GET['page']==''){
				include "../views/dashboard.php";
			}else if(@$_GET['page']=='dtbarang'){
				include "../views/dtbarang.php";
			}else if(@$_GET['page']=='barang'){
				include "../views/barang.php";
			}else if(@$_GET['page']=='profile'){
				include "../views/profile.php";
			}else if(@$_GET['page']=='trbrgmsk'){
				include "../views/trbrgmsk.php";
			}else if(@$_GET['page']=='dttransmsk'){
				include "../views/dttransmsk.php";
			}else if(@$_GET['page']=='dttransklr'){
				include "../views/dttransklr.php";
			}else if(@$_GET['page']=='dtilpnglran'){
				include "../views/dtilpnglran.php";
			}else if(@$_GET['page']=='dtbrgexpr'){
				include "../views/dtbrgexpr.php";
			}else if(@$_GET['page']=='transklran'){
				include "../views/transklran.php";
			}else if(@$_GET['page']=='transmskan'){
				include "../views/transmskan.php";
			}else if(@$_GET['page']=='dtputng'){
				include "../views/dtputng.php";
			}else if(@$_GET['page']=='dtmngusr'){
				include "../views/dtmngusr.php";
			}else if(@$_GET['page']=='dtbarangstk'){
				include "../views/dtbarangstk.php";
			}

			?>				

		</div>
	</div>
	<!--footer section start-->
	<footer>
		<p>&copy ini footer</p>
	</footer>
	<!--footer section end-->
</section>

<script src="../assets/js/jquery.nicescroll.js"></script>
<script src="../assets/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/bootstrap-datepicker.js"></script>
<script src="../assets/js/jquery-1.10.2.min.js"></script>
<script>
	$(document).ready(function(){
		$("#cari").on("keyup", function(){
			var value = $(this).val().toLowerCase();
			$("#carit tr").filter(function(){
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});

		});

	});
	
</script>
</body>
</html>
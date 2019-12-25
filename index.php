<?php
ob_start();
require_once('config/_koneksi.php');
require_once('models/database.php');
session_start();
if($_SESSION['status'] !="login"){
	header("location:login.php");
}elseif($_SESSION['status'] ="login"){
	header("location:/models/m_login.php");
}

$connection = new Database ($host, $user, $pass, $database);
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
<link href="assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="assets/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="assets/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="assets/js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="assets/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="assets/js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
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
							<a href="#"><i class="llnr lnr-power-switch"></i>
								<span>Pemasukan</span></a>
								<ul class="sub-menu-list">
									<li><a href="grids.html">Trans. Barang Masuk</a> </li>
								</ul>
						</li>
						<li class="menu-list">
							<a href="#"><i class="lnr lnr-cog"></i>
								<span>Pengeluaran</span></a>
								<ul class="sub-menu-list">
									<li><a href="grids.html">Trans. Barang Keluar</a> </li>
								</ul>
						</li>             
						<li class="menu-list"><a href="#"><i class="lnr lnr-envelope"></i> <span>Barang</span></a>
							<ul class="sub-menu-list">
								<li><a href="?page=barang">Barang</a> </li>
								<li><a href="?page=dtbarang">Detail Barang</a></li>
							</ul>
						</li>  
						
						<li class="menu-list"><a href="#"><i class="lnr lnr-book"></i>  <span>Laporan</span></a> 
							<ul class="sub-menu-list">
								<li><a href="#">Laporan Barang Masuk</a> </li>
								<li><a href="#">Laporan Barang Keluar</a></li>
							</ul>
						</li>
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
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->

			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">  	
					<div class="profile_details_left">
						<ul class="nofitications-dropdown">
							
							<li class="login_box" id="loginContainer">
									<div class="search-box">
										<div id="sb-search" class="sb-search">
											<form>
												<input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
												<input class="sb-search-submit" type="submit" value="">
												<span class="sb-icon-search"> </span>
											</form>
										</div>
									</div>
										<!-- search-scripts -->
										<script src="assets/js/classie.js"></script>
										<script src="assets/js/uisearch.js"></script>
											<script>
												new UISearch( document.getElementById( 'sb-search' ) );
											</script>
										<!-- //search-scripts -->
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
									<ul class="dropdown-menu">
										<li>
											<div class="notification_header">
												<h3>pemberitahuan</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>barang ini seisa </p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>	
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>baran gini sisa 2 </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lstok 3 </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">cek semua</a>
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
										<span style="background:url(images/1.jpg) no-repeat center"> </span> 
										 <div class="user-name">
											<p>Pengguna<span>Peutugas</span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Setting</a> </li> 
									<li> <a href="?page=profile"><i class="fa fa-user"></i>Profil</a> </li> 
									<li> <a href="models/m_logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
			<div id="page-wrapper">
				<?php
				if(@$_GET['page']=='dashboard' || @$_GET['page']==''){
					include "views/dashboard.php";
				}else if(@$_GET['page']=='dtbarang'){
					include "views/dtbarang.php";
				}else if(@$_GET['page']=='barang'){
					include "views/barang.php";
				}else if(@$_GET['page']=='profile'){
					include "views/profile.php";
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
	
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
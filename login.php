<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
   
 <body class="sign-in-up">
    <section>
			<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<p><span>Halaman</span> <a href="index.html">Login</a></p>
						</div>
						<div class="signin">
							<!-- <div class="signin-rit">
								<span class="checkbox1">
									 <label class="checkbox"><input type="checkbox" name="checkbox" checked="">Lupa Password ?</label>
								</span>
								<p><a href="#">Klik Disini!</a> </p>
								<div class="clearfix"> </div>
							</div> -->
							<form action="models/m_login.php" method="POST" onSubmit="return validasi()">
							<div class="log-input">
								<div class="log-input-left">
									<!-- <p>Username: admin</p> -->
								   <input type="text" class="user" name="username" value="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'username';}"/>
								</div>
								<span class="checkbox2">
									 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i></label>
								</span>
								<div class="clearfix"> </div>
							</div>
							<div class="log-input">
								<div class="log-input-left">
									<!-- <p>Password: admin</p> -->
								   <input type="password" name="password" class="lock" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"/>
								</div>
								<span class="checkbox2">
									 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i></label>
								</span>
								<div class="clearfix"> </div>
							</div>
							<input type="submit" value="Masuk">
						</form>	 
						</div>

					</div>
				</div>
			</div>
		
	</section>
	
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="assets/js/bootstrap.min.js"></script>
</body>
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
<!-- <?php
//echo md5('user');
?> -->
</html>
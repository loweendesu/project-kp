<?php
require_once('../config/_koneksi.php');
$db=mysqli_connect($host,$user,$pass,$database);
if (@$_SESSION['username']){
	$sesi =  $_SESSION['username'];
}

$sql_profile = "select * from user where id_ptgs='$sesi'";
$result=mysqli_query($db,$sql_profile);
$data = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>	
<div class="graphs">
	<div class="col-lg-12">
		<?php 
		if(isset($_GET['msg'])){
			if($_GET['msg']=='Gagal'){
				?>
				<div class="alert alert-danger">
					Ganti Password Gagal!
				</div>
		<?php
			}
		}
		 ?>
		
		<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
			<div class="panel-heading">
				<h2>Profile</h2>
				<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
			</div>
			<div class="panel-body no-padding" style="display: block;">
				<div class="table-responsive">
					<table border="0" class="table table-bordered table-hover table-striped">
						<tr>
							<td>Nama:</td>

							<td><input name="nama" class="form-control" type="text" id="nama" value="<?php echo $data['id_ptgs']; ?>"></td>
						</tr>
							<!-- <tr>
								<td>Password</td>
								
								<td><input name="password" class="form-control" type="type" id="password" value="<?php echo $data['passwd']; ?>"></td>
							</tr> -->

							<tr>
								<td>Alamat:</td>

								<td>
									<textarea name="textarea" class="form-control" cols="30" row="5" ><?php echo $data['almt']; ?>"</textarea>
								</td>
							</tr>
							<tr>
								<td>No. Tlp</td>

								<td><input name="tlp" class="form-control" type="text" id="tlp" value="<?php echo $data['no_tlp']; ?>"></td>
							</tr>
							<tr>
								<td colspan="3">
									
										<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Ganti Password</button>
								
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Menu Ubah Password</h4>
      </div>
      <div class="modal-body">
      	<form id="ubahpass" action="../models/uprosesubahpass.php" method="POST" onsubmit="return checkPassword(this);">
      	<input type="hidden" name="user" class="form-control" id="user" value="<?php echo $data['id_ptgs']; ?>">
      	<input type="hidden" name="pass" class="form-control" id="pass" value="<?php echo $data['passwd']; ?>">
        <label class="control-label" for="pass">Password Lama:</label>
		<input type="password" name="passlama" class="form-control" id="passlama" required>
		<label class="control-label" for="pass">Password Baru:</label>
		<input type="password" name="passbaru" class="form-control" id="passbaru" required>
		<label class="control-label" for="pass">Ulangi Password Baru:</label>
		<input type="password" name="repassbaru" class="form-control" id="repassbaru" required>
		
      </div>
      <div class="modal-footer">
        <input type="submit" id="submit" class="btn btn-success" name="ubah" value="Ubah">
        </form>
      </div>
    </div>

  </div>
</div>

<script src="assets/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
	function checkPassword(theForm){
		if (theForm.passbaru.value != theForm.repassbaru.value) {
			alert('Password Tidak Sama!');
			return false;
		}else{
			return true;
		}
	}
	// $(document).ready(function(e){
	// 	$("#ubahpass").on("submit", (function(e){
	// 		e.preventDefault();
	// 		$.ajax({
	// 			url : '../models/prosesubahpass.php',
	// 			type : 'POST',
	// 			data : new FormData(this),
	// 			contentType : false,
	// 			cache : false,
	// 			processData : false,
	// 			success : function(msg){
	// 				$('.table').html(msg);
	// 			}
	// 		});
	// 	}));
	// })
</script>


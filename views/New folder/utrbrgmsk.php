<?php
//include "../models/m_dttrans.php";
include "../models/m_tempbrg.php";
$Tempbarang = new TempBrg($connection);
$Transin = new TransMasuk($connection);
//include "../models/m_trans.php";
$Trans = new Trans($connection);
?>

<div class="graphs">
	<!-- <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
	<div class="panel-body no-padding" style="display: block;"> -->
		<div>
			<div>
	<div class="col-md-6 col-centered">
		<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
			<div class="panel-body no-padding" style="display: block;">

				<div class="panel-heading">
					<h2>Data Supplier</h2>
					<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
				</div>

				<div class="item">
					<div class="content">
						<form action="" method="post" class="transbrg">
							<label class="control-label" for="kd_sup">Nama Supplier:</label>
							<input type="text" name="kd_sup" class="form-control" id="kd_sup" placeholder="Nama Supplier">
							<label class="control-label" for="alamat">Alamat:</label>
							<textarea placeholder="Alamat" name="alamat" id="alamat" name="textarea" class="form-control" cols="30" row="5" ></textarea>

							<label class="control-label" for="no_tlp">Telepon:</label>
							<input type="text" name="no_tlp" class="form-control" id="no_tlp" placeholder="No. Tlp">
							<label for="radio" class="control-label">Pembayaran: </label>
							<div class="radio-inline"><label><input name="bayar" type="radio" value="Lunas"> Cash</label></div><div class="radio-inline"><label><input name="bayar" type="radio" value="Piutang"> Piutang</label></div><br/>
							<label class="control-label" for="tempo">Jatuh Tempo:</label>
							<br/>
							<p class="help-block">*(Abaikan apabila pembayaran langsung!).</p>	
							<input type="date" name="tempo" class="form-control" id="tempo" required>
						</form>
						<br />
						<br />
						<div class="modal-footer">
						<a id="tombol-simpan2" class="btn btn-default">Lihat Data Beli!</a>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-6 col-centered">
		<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
			<div class="panel-body no-padding" style="display: block;">
				
				<div class="panel-heading">
					<h2>Data Barang</h2>
					<div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
				</div>

				<div class="item">
					<div class="content">
						<form action="" method="post" class="transbrg">
							<label class="control-label" for="kd_brg">Kode Barang:</label>

							<select name="kd_brg" id="kd_brg" class="form-control1" required>
								<option value="">Nama Barang</option>
								<?php
								$tampils = $brgs->tampil();
								while($data = $tampils->fetch_object()){

									?>
									<option value="<?php echo $data->kd_brg; ?>"><?php echo $data->nm_brg; ?></option>
									<?php
								}
								?>
							</select>
							<label class="control-label" for="jns_brg">Jenis Barang:</label>
							<select name="jns_brg" id="jns_brg" class="form-control1" required>
								<option value="">Jenis Barang</option>
								<?php
								$tampils = $jns->tampil();
								while($data = $tampils->fetch_object()){

									?>
									<option value="<?php echo $data->id_jns; ?>"><?php echo $data->jns_brg; ?></option>
									<?php
								}
								?>
							</select>
							<label class="control-label" for="hrg">Harga:</label>
							<input type="number" name="hrg" class="form-control" id="hrg" placeholder=0 required>

							<label class="control-label" for="stok">Jumlah:</label>
							<input type="number" name="stok" class="form-control" id="stok" placeholder=0 required>

							<label class="control-label" for="satuan">Satuan:</label>
							<select name="satuan" id="satuan" class="form-control1" required>
								<option value="">Satuan</option>
								<option value="Box">Box</option>
								<option value="Saset">Saset</option>
								<option value="Buah">Buah</option>
							</select>
							<label class="control-label" for="expr">Expired:</label>
							<br/>
							<p class="help-block">*(Abaikan apabila barang tidak expire!).</p>
							<input type="date" name="expr" class="form-control" id="expr" required>

							<button type="reset" class="btn btn-danger">Reset</button>
							<a id="tombol-simpan" class="btn btn-success">Simpan</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
</div>
</div>
<div class="tampildata"></div>
<!-- Modal -->
<div id="edit" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Data Barang</h4>
      </div>
      <form id="edt" class="edttemp">
        <div class="modal-body" id="modal-edit">
          <div class="form-group">
<!-- 
            <label class="control-label" for="kd_brg">Kode Barang:</label> -->
            
            <input type="hidden" name="temptransmsk2" class="form-control" id="temptransmsk2" required>

            <label class="control-label" for="nama_barang">Harga Barang</label>
            <input type="text" name="hrg2" class="form-control" id="hrg2" required>

            <label class="control-label" for="expr">Jumlah:</label>
            <input type="text" name="jmlh2" class="form-control" id="jmlh2" required>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <a id="tombol-simpan3" class="btn btn-success">Ubah</a>
            </div>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
<!-- bukan modal-->

<script src="assets/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#tombol-simpan").click(function(){
			var data = $('.transbrg').serialize();
			$.ajax({
				type: 'POST',
				url: "../models/ptrans_tempbarang.php",
				data: data,
				success: function() {
					$('.tampildata').load("../views/tampil.php");
				}
			});

			document.getElementById("kd_brg").value = "";
			document.getElementById("jns_brg").value = "";
			document.getElementById("hrg").value = "";
			document.getElementById("stok").value = "";
			document.getElementById("satuan").value = "";
			document.getElementById("expr").value = "";
										// document.getElementById("bayar").value = "";
		});
	});

	$(document).ready(function(){
		$("#tombol-simpan2").click(function(){
			var data = $('.transbrg').serialize();
			$.ajax({
				type: 'POST',
				//url: "../models/ptrans_tempbarang.php",
				data: data,
				success: function() {
					$('.tampildata').load("../views/tampil.php");
				}
			});

		});
	});

$(document).on("click", "#edit_brg", function(){
              //var idbrg = $(this).data('id');
              var kdtemp = $(this).data('kd');
              var hrg = $(this).data('hrg');
              var jmlh = $(this).data('jmlh');
              // var hrgjual = $(this).data('hrgj');
              // var hrgbeli = $(this).data('hrgb');
              // var stok = $(this).data('stok');
              //$("#modal-edit #id_brg").val(idbrg);
              $("#modal-edit #temptransmsk2").val(kdtemp);
              // $("#modal-edit #kd_brg2").val(kdbrg);
              $("#modal-edit #hrg2").val(hrg);
              $("#modal-edit #jmlh2").val(jmlh);
              // $("#modal-edit #hrg_jual").val(hrgjual);
              // $("#modal-edit #hrg_beli").val(hrgbeli);
              // $("#modal-edit #stok").val(stok);
            })

	$(document).ready(function(){
		$("#tombol-simpan3").click(function(){
			var data = $('.edttemp').serialize();
			$.ajax({
				type: 'POST',
				url: "../models/pedit_temp.php",
				data: data,
				success: function() {
					$('.tampildata').load("../views/tampil.php");
				}

			});

		});
	});

</script>
<?php
require_once('../config/_koneksi.php');
require_once('../models/database.php');
include "../models/m_tempbrg.php";
include "../models/m_dtklr.php";
include "../models/m_trans.php";
$connection = new Database ($host, $user, $pass, $database);
$Tempbarang = new TempBrg($connection);
$Transout = new TransKeluar($connection);
$Trans = new Trans($connection);
?>
 <div class="col-lg-12">
      <div class="col-md-6 col-centered">
        <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">  
        <div class="panel-heading">
          <h2>Data Supplier</h2>
          <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <?php
        $tampilesc = $Tempbarang->tampilesc();
        while($dataesc = $tampilesc->fetch_object()){
          ?>
            <input type='text' name='kd_supesc' class='form-control' id='kd_supesc' value="<?php echo $dataesc->nm_supp; ?>" disabled>
            <textarea name="alamatesc" id="alamatesc" name="textarea" class="form-control" cols="30" row="5" disabled><?php echo $dataesc->almtsupp; ?> telp: <?php echo $dataesc->tlpsup; ?> </textarea>
            <?php
          }
          ?>
        
      </div>
    </div>
  <!-- </div> -->

      <div class="col-md-6 col-centered">
        <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">  
        <div class="panel-heading">
          <h2>Data Transaksi</h2>
          <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <?php
        $tampilesc = $Tempbarang->tampilescv2();
        while($dataesc = $tampilesc->fetch_object()){
          ?>
          <label style="text-align: right;" class="control-label" for="dttgl">Tgl Transaksi: <?php echo $dataesc->tgltrans; ?></label>
          <h1><label class="control-label" for="kd_brg" color="red">TOTAL: Rp. <?php echo number_format($dataesc->total).',-'  ?></label></h1>
          <?php
          if ($dataesc->byr == "Piutang"){
            echo "<h2>Pembayaran: Piutang!!</h2>";
          }elseif ($dataesc->byr == "Lunas"){
            echo "<h2>Pembayaran: #Cash!!</h2>";
          }
        }
        ?>
      </div>
    </div>
    
      <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">  
      <div class="panel-body no-padding" style="display: block;">
        <div class="panel-heading">
        <h2>Data Barang</h2>
        <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
      </div>
        <div class="table-responsive">
          <table class="table table-bordered table-hover table-striped">
            <tr>
              <!-- <td>ID TEMP</td> -->
              <td>Kode Jenis</td>
              <td>Kode Barang</td>
              <td>Harga</td>
              <td>Jumlah</td>
              <td>Satuan</td>
              <!-- <td>Expired</td> -->
              <td>Bayar</td>
              <td>Telepon</td>
              <td>Opsi</td>
            </tr>
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
            $tampil = $Tempbarang->tampillimit($posisi,$batas);
            while($data = $tampil->fetch_object()){

              ?> 
              <tr>
                <!-- <td><?php echo $data->tamptransmsk; ?></td> -->
                <td><?php echo $data->id_jns; ?></td>
                <td><?php echo $data->kd_brg; ?></td>
                <td><?php echo 'Rp. '.number_format($data->hrg).',-' ?></td>
                <td><?php echo $data->jmlh; ?></td>
                <td><?php echo $data->satuan; ?></td>
                <!-- <td><?php echo $data->expr; ?></td> -->
                <td><?php echo $data->byr; ?></td>

                <td><?php echo $data->tlpsup; ?></td>
                <td>
                <a id="edit_brg" data-toggle="modal" data-target="#edit" data-kd="<?php echo $data->tamptransmsk; ?>" data-hrg="<?php echo $data->hrg; ?>" data-jmlh="<?php echo $data->jmlh; ?>" data-hrgj="<?php echo $data->hrg_jwl; ?>" data-hrgb="<?php echo $data->hrg_bli; ?>" data-stok="<?php echo $data->stk; ?>">
                    <button class="btn btn-default btn-xs"><i class="fa fa-edit"></i>Edit</button>
                  </a>

                </td>
              </tr>
              <?php
            }
            ?>
          </table>
  </div>
<form action="../models/prosestransdetl.php" method="POST">
  <input type="submit" class="btn btn-success"  name="prosess" value="Prosess">
</form>

</div>
</div>
</div>





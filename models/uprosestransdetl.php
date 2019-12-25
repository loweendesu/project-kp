<?php
require_once('../config/_koneksi.php');
require_once('../models/database.php');
include "../models/m_dttrans.php";
include "../models/m_tempbrg.php";
include "../models/m_trans.php";
$connection = new Database($host, $user, $pass, $database);
$Tempbarang = new TempBrg($connection);
$Transin = new TransMasuk($connection);
$Trans = new Trans($connection);



// if(@$_POST['prosess']){
  $tampilesc = $Tempbarang->tampilescv3();
  $row = mysqli_fetch_array($tampilesc,MYSQLI_ASSOC);
  $cek = mysqli_num_rows($tampilesc);
  if($cek > '0'){
    $nm_supp = $row['nm_supp'];
    $almtsupp = $row['almtsupp'];
    $tlpsup = $row['tlpsup'];
    $tottrans = $row['total'];
    $byr = $row['byr'];
    $tgltrans = $row['tgltrans'];
    if($row['tempo']=='0000-00-00'){
      $tempo='9999-12-28';
    }else{
      $tempo = $row['tempo'];
    }

    $Trans->tambah($nm_supp, $almtsupp, $tlpsup, $tottrans, $byr, $tempo, $tgltrans);


    $cektrans = $Trans->tampilesc();
    $trans = mysqli_fetch_array($cektrans,MYSQLI_ASSOC);
    $transmsk = $trans['transmsk'];

    $tampil = $Tempbarang->tampil();
    while($databrg = $tampil->fetch_object()){
      $nm_supp = $databrg->nm_supp;
      $almtsupp = $databrg->almtsupp;
      $tlpsup = $databrg->tlpsup;

      $byr = $databrg->byr;
      $tgltrans = $databrg->tgltrans;
      $id_jns = $databrg->id_jns;
      $kd_brg = $databrg->kd_brg;
      $hrg = $databrg->hrg;
      $jmlh = $databrg->jmlh;
      $satuan = $databrg->satuan;
      if($databrg->expr=='0000-00-00'){
        $expr='9999-12-28';
      }else{
        $expr = $databrg->expr;
      }
      $Transin->tambahv2($transmsk,$id_jns, $kd_brg, $hrg, $jmlh, $satuan, $expr);

      $Tempbarang->hapus();
    }
  }
// }else{

// } 
  header("location: ../officer/index.php?page=utrbrgmsk");
  ?>
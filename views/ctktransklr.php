<?php
// echo $dari = $_POST['dari'];
// echo $sampai = $_POST['sampai'];
$ket = $_POST['ket'];
$dari = $_POST['dari'];
$sampai = $_POST['sampai'];
require_once('../config/_koneksi.php');
require_once('../models/database.php');
include "../models/m_dttrans.php";
include "../models/m_dtklr.php";
$logo= "../assets/images/logo.jpg";
// memanggil library FPDF
require('../assets/fpdf181/fpdf.php');

$connection = new Database ($host, $user, $pass, $database);
$Transin = new TransMasuk($connection);
$Transout = new TransKeluar($connection);

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->AddPage();
$pdf->Image($logo,40,3,30,30);
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(250,7,'REKAP PERSEDIAAN BARANG DAGANGAN',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(250,7,'MINIMARKET KOPERASI LPP VISHVA MITRA YOGYAKARTA',0,1,'C');
 $pdf->SetFont('Arial','B',8);
$pdf->Cell(250,7,'Jl. Urip Sumoharjo No 100, Klitren, Gondokusuman, Kota Yogyakarta (0274) 586201',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);

$pdf->SetLineWidth(1);
$pdf->Line(10,35,285,35);
$pdf->SetLineWidth(0);
$pdf->Line(10,35,285,35);

$pdf->Cell(190,6,'Rekap Pengeluaran: '.$ket,0,1);
$pdf->Cell(190,6,'Tanggal: '.$dari.' - '.$sampai,0,1);

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'No.',1,0);
$pdf->Cell(85,6,'NAMA BARANG',1,0);
$pdf->Cell(20,6,'QTY',1,0);
$pdf->Cell(30,6,'HARGA',1,0);
$pdf->Cell(25,6,'JUMLAH',1,1);
 
$pdf->SetFont('Arial','',10);
$no=1;
$namafile= date("Y-m-d H:i:s");
$tampil = $Transout->tampilprt($dari,$sampai,$ket);
while($data = $tampil->fetch_object()){
	$pdf->Cell(10,6,$no++.'.',1,0);
    $pdf->Cell(85,6,$data->nm_brg,1,0);
    $pdf->Cell(20,6,$data->jlmh,1,0);
    $pdf->Cell(30,6,'Rp. '.number_format($data->hrg).',-',1,0);
    $pdf->Cell(25,6,'Rp. '.number_format($data->total).',-',1,1); 
}
$tampiltot = $Transout->tampiltot($dari,$sampai,$ket);
$ttot = mysqli_fetch_array($tampiltot,MYSQLI_ASSOC);
$pdf->Cell(145,6,'JUMLAH',1,0,'R');
$pdf->Cell(25,6,'Rp. '.number_format($ttot['jumtot']).',-',1,1);
 
$pdf->Output('Laporan'.$namafile.'.pdf','D');
?>
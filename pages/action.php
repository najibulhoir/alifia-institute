<?php
error_reporting(0);
session_start();
include "../koneksi.php";


if ($_GET['action']=="tambah") {
  
  $nama = $_POST['nama'];
  $tetala = $_POST['tetala'];
  $telpsiswa = $_POST['TelpSiswa'];
  $telportu = $_POST['TelpOrtu'];
  $paket = $_POST['paket'];
  $hpaket = $_POST['hargaP'];
  $asrama = $_POST['asrama'];
  $hasrama = $_POST['hargaK'];
  $total = $hasrama+$hpaket;

  $koneksi->query("insert into tb_pendaftaran set nama = '$nama', tetala ='$tetala', TelpSiswa='$telpsiswa', TelpOrtu='$telportu', Paket = '$paket', hargaP='$hpaket', Asrama='$asrama', HargaK='$hasrama', Total='$total'");
}

  


  require('fpdf17/fpdf.php'); 
  $pdf=new FPDF('P','mm','A4'); 
  $pdf->SetMargins(30,20,30,20); 
  $pdf->AddPage(); 
  
  $pdf->SetFont('Times','B',12); 
  $pdf->Cell(0, 0, 'IDENTITAS PESERTA DIDIK', 0, 1, 'C', 0, '');
  $pdf->MultiCell(0,10,'');
  
  
  
    $pdf->SetFont('Times','',10); 
    $pdf->Cell(80, 6, '1.   Nama', 0, 0, 'L', 0, '');
    $pdf->Cell(3, 6, ':', 0, 0, 'L', 0, '');
    $pdf->Cell(0, 6, $nama, '0', 1, 'L', 0, '');
    
    $pdf->Cell(80, 6, '2.   Tempat dan tanggal lahir', 0, 0, 'L', 0, '');
    $pdf->Cell(3, 6, ':', 0, 0, 'L', 0, '');
    $pdf->Cell(0, 6, $tetala, '0', 1, 'L', 0, '');
    
    $pdf->Cell(80, 6, '3.   Telp. Siswa', 0, 0, 'L', 0, '');
    $pdf->Cell(3, 6, ':', 0, 0, 'L', 0, '');
    $pdf->Cell(0, 6, $telpsiswa, '0', 1, 'L', 0, '');  
    
    $pdf->Cell(80, 6, '4.   Telp. Orang tua', 0, 0, 'L', 0, '');
    $pdf->Cell(3, 6, ':', 0, 0, 'L', 0, '');
    $pdf->Cell(0, 6, $jenis_kelamin, '0', 1, 'L', 0, '');
    
    $pdf->Cell(80, 6, '5.   Paket', 0, 0, 'L', 0, '');
    $pdf->Cell(3, 6, ':', 0, 0, 'L', 0, '');
    $pdf->Cell(0, 6, $paket, '0', 1, 'L', 0, '');
    
    $pdf->Cell(80, 6, '6.   Harga Paket', 0, 0, 'L', 0, '');
    $pdf->Cell(3, 6, ':', 0, 0, 'L', 0, '');
    $pdf->Cell(0, 6, $hpaket, '0', 1, 'L', 0, '');
    
    $pdf->Cell(80, 6, '7.   Asrama/ kost/ home stay', 0, 0, 'L', 0, '');
    $pdf->Cell(3, 6, ':', 0, 0, 'L', 0, '');
    $pdf->Cell(0, 6, $asrama, '0', 1, 'L', 0, '');
    
    $pdf->Cell(80, 6, '8.   Harga Tempat', 0, 0, 'L', 0, '');
    $pdf->Cell(3, 6, ':', 0, 0, 'L', 0, '');
    $pdf->Cell(0, 6, $hasrama, '0', 1, 'L', 0, '');
    
    $pdf->Cell(80, 6, '7   Total', 0, 0, 'L', 0, '');
    $pdf->Cell(3, 6, ':', 0, 0, 'L', 0, '');
    $pdf->Cell(0, 6, $total, '0', 1, 'L', 0, '');
    
        
    $pdf->MultiCell(0,6,'');
   
    # Sintak untuk ttd Kepala Sekolah
    $pdf->SetFont('Arial','',8); 
        $pdf->Cell(127, 5, 'Pare', 0, 2, 'R', 0, '');  
        $pdf->Cell(138, 7, 'Manajer Alifia Institut', 0, 1, 0, 0, '');
        
       
        $pdf->Image('image/anonimus.jpg',140,100,30,20);
        $pdf->MultiCell(0,17,'');
        
        $pdf->SetFont('Arial','U',8);
        $pdf->Cell(145, 5, 'Drs. H. MOH. IDRIS, M.Pd', 0, 2, 'R', 0, '');  
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(147, 5, 'NIP. 19550612 198203 1 020', 0, 1, 'R', 0, ''); 
  
   
  $pdf->Output(); 
?> 
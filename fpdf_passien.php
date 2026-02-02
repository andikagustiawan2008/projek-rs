<?php
include 'koneksi.php';
include 'fpdf.php';

$pdf=new FPDF();
$pdf ->Addpage();
$pdf ->SetFont('Arial','B',16);

$pdf ->Cell(0,10,'RAWAT INAP',0,1,"C");

$pdf ->Cell(0,10,'Data Passien',0,1,"C");


// header tabel
$pdf ->SetFont('Arial','B',16);
$pdf ->Cell(30,7,'NIS',1);
$pdf ->Cell(50,7,'NAMA',1);
$pdf ->Cell(70,7,'ALAMAT',1);
$pdf ->Cell(40,7,'NOMOR TELP',1);
$pdf ->Ln();

//data tabel
$pdf ->SetFont('Arial','',16);
$query = mysqli_query($conn,"SELECT * FROM pasien_andika");

while($data = mysqli_fetch_array($query)){
    $pdf -> Cell(30,7,$data['id_pasien_andika'],1);
    $pdf -> Cell(50,7,$data['nama_andika'],1);
    $pdf -> Cell(70,7,$data['alamat_andika'],1);
    $pdf -> Cell(40,7,$data['kontak_andika'],1);
    $pdf ->Ln();
}
$pdf ->Output();

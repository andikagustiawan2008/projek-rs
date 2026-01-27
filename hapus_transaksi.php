<?php
include('koneksi.php');

$id_transaksi_andika = $_GET['id_transaksi_andika']; 
$query = "DELETE FROM transaksi_andika WHERE id_transaksi_andika = '$id_transaksi_andika'"; 

if ($conn->query($query)) {
    echo "<script>alert('Data berhasil dihapus!');</script>"; 
    header("location:transaksi.php");
    exit;
} else {
    
    echo "<script>alert('Data gagal dihapus!');</script>";
    header("location:transaksi.php");
    exit;
}
?>

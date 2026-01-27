<?php
session_start(); 
include 'koneksi.php';

if (isset($_POST['submit'])) {
 
    $id_transaksi_andika1 = $_POST['id_transaksi_andika']; 


    $id_transaksi_andika1 = $_POST['id_transaksi_andika'];
    $id_passien_andika = $_POST['id_passien_andika'];
    $total_biaya_andika = $_POST['total_biaya_andika'];
    $status_pembayaran_andika = $_POST['status_pembayaran_andika'];
    $tanggal_andika = $_POST['tanggal_andika'];

  
    $query = "UPDATE transaksi_andika SET 
                id_transaksi_andika = '$id_transaksi_andika1', 
                id_passien_andika = '$id_passien_andika', 
                total_biaya_andika = '$total_biaya_andika', 
                status_pembayaran_andika = '$status_pembayaran_andika',
                tanggal_andika = '$tanggal_andika'
              WHERE id_transaksi_andika = '$id_transaksi_andika1'";

    $sukses = mysqli_query($conn, $query);

    if ($sukses) {
        $_SESSION['status_update'] = "Data id_passien_andika dengan id_transaksi_andika " . $_POST['id_transaksi_andika'] . " berhasil diperbarui!";
    } else {
        $_SESSION['status_update'] = "Update Gagal! Error: " . mysqli_error($conn);
    }

    header("location:transaksi.php");
    exit;
}
?>
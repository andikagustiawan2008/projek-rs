<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<style>
    
</style>
<body>
    <center>
    <table >
    <form action="menambahkan.php" method="post">
    
        <tr>
            <td>ID transaksi</td>
            <td> : <input type="text" name="id_transaksi_andika" required></td>
        </tr>
        <tr>
            <td>ID pasien</td>
            <td> : <input type="text" name="id_passien_andika" required></td>
        </tr>
        <tr>
            <td>total biaya</td>
            <td> : <input type="text" name="total_biaya_andika" required></td>
        </tr>
        <tr>
        <td>Status Pembayaran</td>
        <td> : <select name="status_pembayaran_andika" id="">
            <option value="SUDAH">SUDAH</option>
            <option value="BELUM">BELUM</option>
        </select>
        </td>
        </tr>
        <tr>
            <td>tanggal</td>
            <td> : <input type="date" name="tanggal_andika">
        </tr>
           
        
    </table>
    <input type="submit" name="submit">
    </center>

</form>
</body>
</html>
<?php 
if (isset($_POST['submit'])) {

include 'koneksi.php';
 

    $id_transaksi_andika = $_POST['id_transaksi_andika'];
    $id_passien_andika = $_POST['id_passien_andika'];
    $total_biaya_andika = $_POST['total_biaya_andika'];
    $status_pembayaran_andika = $_POST['status_pembayaran_andika'];
    $tanggal_andika = $_POST['tanggal_andika'];
 

mysqli_query($conn,"INSERT INTO transaksi_andika (id_transaksi_andika,id_passien_andika,total_biaya_andika,status_pembayaran_andika,tanggal_andika)
            VALUES('$id_transaksi_andika','$id_passien_andika','$total_biaya_andika','$status_pembayaran_andika','$tanggal_andika')");
 

header("location:transaksi.php");
}
?>

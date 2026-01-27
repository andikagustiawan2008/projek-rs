<?php
include 'koneksi.php';

$sql="select id_transaksi_andika, id_passien_andika, total_biaya_andika, status_pembayaran_andika, tanggal_andika from transaksi_andika";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
 <style>
    table{
        border-collapse:collapse;
        margin-top: 15px;
        color: black;
        background-color:rgb(255, 255, 255);
        
    }
    th,td{
        border: 1px solid black;
        padding: 5px 10px;
        text-align: center;
    }
    
    /* memanggil tambah */
    a:link, a:visited {
    background-color:rgb(0, 0, 0);
    color: white;
    padding: 15px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    }
    
    button{
        background-color: rgb(0, 255, 21);
    }
    /* input{
       background-color:rgb(102, 255, 0); 
    } */

    /* input{ 
        background-color:rgb(255, 0, 0);
    }   */
</style> 

<body>

    <center><h1></h1></center>
<center>


    <?php
    if (isset($_SESSION['status_update'])) {
        $pesan = $_SESSION['status_update'];
        unset($_SESSION['status_update']);
    ?>
        <script>
            alert("<?php echo $pesan; ?>");
        </script>
    <?php
    }
    ?>

    <table>
        <tr>
            
            <th>id transaksi</th>
            <th>id passien</th>
            <th>total biaya</th>
            <th>status pembayaran</th>
            <th>tanggal</th>
            <th>Aksi</th>
        </tr>
            
        
        <?php 
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) { 
        ?>
        <tr>
            <td><?php echo $row['id_transaksi_andika']; ?></td>
            <td><?php echo $row['id_passien_andika']; ?></td>
            <td><?php echo $row['total_biaya_andika']; ?></td>
            <td><?php echo $row['status_pembayaran_andika']; ?></td>
            <td><?php echo $row['tanggal_andika']; ?></td>
            <td>
                <a href="edit_transaksi.php?id_transaksi_andika=<?php echo $row['id_transaksi_andika']; ?>">EDIT</a>
                
                <a href="hapus_transaksi.php?id_transaksi_andika=<?php echo $row['id_transaksi_andika']; ?>" 
                    onclick="return confirm('Apakah Anda yakin ingin menghapus data <?php echo $row['id_transaksi_andika']; ?>?');">HAPUS</a></button>
            </td>
        </tr>
        <?php 
            } 
        } else {
           
            echo "<tr><td>Tidak ada data ditemukan.</td></tr>";
        }
        
        ?>
       
    </table>
    <br>
     <a href="menambahkan.php">Tambah Data</a><br><br>
    
</center>

</body>
</html>
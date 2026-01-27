
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Edit Data</title>
    
    </style>
</head>
<body>

    <?php
    include 'koneksi.php';
    if (isset($_GET['id_transaksi_andika'])) {
        $id_transaksi_andika = mysqli_real_escape_string($conn, $_GET['id_transaksi_andika']);
        
        $query = "SELECT * FROM transaksi_andika WHERE id_transaksi_andika = '$id_transaksi_andika'";
        $data = mysqli_query($conn, $query);

        
        if (mysqli_num_rows($data) > 0) {
            $row = mysqli_fetch_array($data);
        } else {
            echo "<p>Data transaksi dengan transaksi  $id_transaksi_andika tidak ditemukan.</p>";
            exit;
        }
    } else {
        echo "<p>Error: id_transaksi_andika tidak ditentukan. Silakan kembali ke halaman transaksi dan pilih 'Edit'.</p>";
    
        exit;
    }
    ?>


        
    <center>
    <center><h2>Edit Data</h2></center>
    <form action="update_transaksi.php" method="post">
           <table>
               <tr>
                <td>Id transaksi</td>
                <td><input type="text" name="id_transaksi_andika" value="<?php echo $row['id_transaksi_andika']; ?>" readonly></td>
               </tr>
               <tr>
                    <td><label> Id passien </label></td>
                  <td>
                     <input type="text" name="id_passien_andika" value="<?php echo $row['id_passien_andika']; ?>" >
                  </td>
               </tr>
               <tr>
                    <td>total biaya</td>
                  <td>
                     <input type="text" name="total_biaya_andika" value="<?php echo $row['total_biaya_andika']; ?>" >
                  </td>
               </tr>

               <tr>
                <td>status pembayaran</td>
                  <td>
                      <select name="status_pembayaran_andika" id="">
                        <option value="SUDAH">SUDAH</option>
                        <option value="BELUM">BELUM</option>
                        
                  </td>
               </tr>

               <tr>
                <td>Tanggal</td>
                  <td>
                     <input type="date" name="tanggal_andika" value="<?php echo $row['tanggal_andika']; ?>" >
                  </td>
               </tr>

               <tr>
                  <td>
                     <input type="submit" name="submit" value="Update Data">
                  </td>
               </tr>
            </table>
        </form>
    </center>

</body>

</html>


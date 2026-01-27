<?php
include 'koneksi.php';
include 'fpdf.php';

$pdf=new FPDF();
$pdf ->Addpage();
$pdf ->SetFont('Arial','B',16);




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

$sql="select id_pasien_andika, nama_andika, alamat_andika, kontak_andika from pasien_andika";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    border-radius: 10px;
    }
    

</style>

<body>
<center>
    <table>
    <tr>
        <th>id passien</th>
        <th>nama passien</th>
        <th>alamat passien</th>
        <th>kontak passien</th>
        
    </tr>

        <?php 
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>        
        <tr>
            <td><?php echo $row['id_pasien_andika']; ?></td>
            <td><?php echo $row['nama_andika']; ?></td>
            <td><?php echo $row['alamat_andika']; ?></td>
            <td><?php echo $row['kontak_andika']; ?></td>
            
           
        </tr>
        <?php 
            } 
        } else {
           
            echo "<tr><td>Tidak ada data ditemukan.</td></tr>";
        }
        ?>
  
                

</table> 
<br>     
<a href="?id_pasien_andika=<?php echo $row['id_pasien_andika']; ?>">CETAK</a>
</center>

                
             
        

</body>
</html>
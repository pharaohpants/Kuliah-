<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class = "table1">
    <center><h3> DATA TRANS UPN </h3><center>
    <table border = "1">
        <tr>
            <th>Id Trans UPN</th>
            <th>Id Kondektur</th>
            <th>Id Bus</th>
            <th>Id Driver</th>
            <th>Jumlah KM</th>
            <th>Tanggal</th>
        <?php 
        include ('connect1.php');
        $ambildata = mysqli_query($koneksi,"SELECT * FROM `trans_upn`");
        while ($tampil = mysqli_fetch_array($ambildata)){
            echo "
            <tr>
            <td>$tampil[id_trans_upn]</td>
            <td>$tampil[id_kondektur]</td>
            <td>$tampil[id_bus]</td>
            <td>$tampil[id_driver]</td>
            <td>$tampil[jumlah_km]</td>
            <td>$tampil[tanggal]</td>
            </tr>";
        }
        ?>
    </table>
    </div>
</body>
</html>
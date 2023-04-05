
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
    <form method="post">
            <label for="status">Filter status Bus</label>
            <select name="status" id="status">
                <option value="semua">semua</option>
                <option value='1'>Beroprasi</option>
                <option value='2'>Cadangan</option>
                <option value='0'>Rusak</option>
            </select>
            <input type="submit" name="submit" value="filter">
    <center><h3> DATA BUS </h3><center>
    <table border = "1">
        <tr>
        <th>Id Bus</th>
            <th>Plat Bus</th>
            <th>Status Bus</th>
            <th>Jumlah KM</th>
        </tr>
        <?php 
        include ('connect1.php');
        if(isset($_POST['submit'])){
            $status = $_POST['status'];
            if($status == "semua"){
                $ambildata = mysqli_query($koneksi,"SELECT trans_upn.jumlah_km, bus.id_bus, bus.plat, bus.status FROM trans_upn JOIN bus ON id_trans_upn = bus.id_bus");
            } else {
                $ambildata = mysqli_query($koneksi,"SELECT trans_upn.jumlah_km, bus.id_bus, bus.plat, bus.status FROM trans_upn JOIN bus ON id_trans_upn = bus.id_bus WHERE bus.status = '$status'");
            }
        } else {
            $ambildata = mysqli_query($koneksi,"SELECT trans_upn.jumlah_km, bus.id_bus, bus.plat, bus.status FROM trans_upn JOIN bus ON id_trans_upn = bus.id_bus");
        }
        while ($tampil = mysqli_fetch_array($ambildata)){
            if ($tampil['status'] == '1') {
                $warna = 'green';
            } elseif ($tampil['status'] == '2') {
                $warna = 'yellow';
            } else {
                $warna = 'red';
            }
            echo "
            <tr>
            <td>$tampil[id_bus] </td>
            <td>$tampil[plat] </td>
            <td><span style='color: $warna;'>".$tampil['status']."</span></td>
            <td>$tampil[jumlah_km]</td>
            </tr>";
        }
        echo "</table>"
        ?>
    </table>
    </div>
    <head>
	<title>GFG- Store Data</title>
</head>
	<center>
		<h1>Form Input Data Bus in Database</h1>
		<form action="" method="post">			
<p>
			<label for="ID Bus">ID Bus:</label>
			<input type="text" name="id_bus" >
			</p>			
<p>
			<label for="Plat Bus">Plat Bus:</label>
			<input type="text" name="plat" >
			</p>		
<p>
			<label for="Status">Status:</label>
			<input type="text" name="status" >
			</p>
			<input type="submit" name="save" value="submit">
		</form>
 </center>
    <?php
  include_once'connect1.php';
  if (isset($_POST['save'])){

    $simpan = mysqli_query($koneksi, "insert into bus set 
    id_bus = '$_POST[id_bus]',
    plat = '$_POST[plat]',
    status = '$_POST[status]'");

    if ($simpan){
      echo "<script> alert ('Data berhasil disimpan')</script>";
      header ("refresh:0;main.php");
    }
    else{
      echo "<script> alert ('Data tidak berhasil disimpan')</script>";
      header ("refresh:0;main.php");
    }

  }
  ?>

<body>
    <center>
    <h1>Update Data</h1>
    <form action="" method="post">
        
            <label for="id_bus">id_Bus :</label>
                <input type="text" name="id_bus$id_bus" id="id_bus$id_bus">
     
            <label for="plat">plat :</label>
                <input type="text" name="plat&plat" id="plat$plat">
            <label for="status">status :</label>
                <input type="text" name="status&stasus" id="status$status">
                <input type="submit" name="update" value="update">
                </button>
    </form>
</center>
    <?php 
include('connect1.php');
if (isset($_POST["update"])){

    $id_bus = $_POST['id_bus$id_bus'];
    $plat = $_POST['plat&plat'];
    $status =$_POST['status$status'];


    $sql = "UPDATE bus SET plat='$plat', status='$status' WHERE id_bus='$id_bus'";
    $result = mysqli_query($koneksi, $sql);


    if ($result){
        echo "<script> alert('Data berhasil diupdate')</script>";
        header("refresh:0;customers.php");
    } else {
        echo "<script> alert('Data tidak terupdate')</script>";
    }
}
?>

<body>
    <center>
    <h1>Delete Data</h1>
    <form action="" method="post">
        
            <label for="id_bus">id_Bus :</label>
                <input type="text" name="id_bus$id_bus" id="id_bus$id_bus">
                <input type="submit" name="hapus" value="hapus">
                </button>
    </form>
</center>
    <?php 
include('connect1.php');
if (isset($_POST["hapus"])){

    if(!empty($_POST['id_bus'])){
        $id_bus=$_POST['id_bus'];


    $sql = "DELETE FROM bus WHERE id_bus =$id_bus";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_query($koneksi,$sql)){
    $sql2 ==  "DELETE FROM trans_upn WHERE id_bus = $id_bus";
    if ($result){
        echo "<script> alert('Data berhasil dihapus')</script>";
        header("refresh:0;customers.php");
    } else {
        echo "<script> alert('Data tidak terhapus')</script>";
    }
}
}
}?>
</body>
</html>

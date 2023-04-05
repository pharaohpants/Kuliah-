
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
    <center><h3> DATA KONDEKTUR </h3><center>
    <table border = "1">
        <tr>
            <th>Nama Kondektur</th>
            <th>Id Kondektur</th>
            <th>Jumlah KM</th>
        <?php 
        include ('connect1.php');
        $ambildata = mysqli_query($koneksi,"SELECT kondektur.id_kondektur, kondektur.nama, jumlah_km FROM kondektur JOIN trans_upn ON kondektur.id_kondektur = trans_upn.id_kondektur;");
        while ($tampil = mysqli_fetch_array($ambildata)){
            echo "
            <tr>
            <td>$tampil[nama]</td>
            <td>$tampil[id_kondektur]</td>
            <td>$tampil[jumlah_km]</td>
            </tr>";
        }
        ?>
    </table>
    </div>
    <head>
	<title>GFG- Store Data</title>
</head>
	<center>
		<h1>Form Input Data Kondektur in Database</h1>
		<form action="" method="post">			
<p>
			<label for="Nama">Nama:</label>
			<input type="text" name="nama" >
			</p>			
<p>
			<label for="IDKondektur">IDKondektur:</label>
			<input type="text" name="id_kondektur" >
			</p>		
			<input type="submit" name="save" value="submit">
		</form>
        <?php
  include_once'connect1.php';
  if (isset($_POST['save'])){

    $simpan = mysqli_query($koneksi, "insert into kondektur set 
    id_kondektur = '$_POST[id_kondektur]',
    nama = '$_POST[nama]'");

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
        
            <label for="id_kondektur$id_kondektur">id_driver :</label>
                <input type="text" name="id_kondektur$id_kondektur" id="id_kondektur$id_kondektur">
     
            <label for="nama$nama">nama :</label>
                <input type="text" name="nama$nama" id="nama$nama">
                <input type="submit" name="update" value="update">
                </button>
    </form>
</center>
    <?php 
include('connect1.php');
if (isset($_POST["update"])){

    $id_driver = $_POST['id_kondektur$id_kondektur'];
    $nama = $_POST['nama$nama'];


    $sql = "UPDATE kondektur SET nama='$nama' WHERE id_kondektur='$id_kondektur'";
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
        
            <label for="id_kondektur$id_kondektur">id_driver :</label>
                <input type="text" name="id_kondektur$id_kondektur" id="id_kondektur$id_kondekturr">
                <input type="submit" name="delete" value="delete">
                </button>
    </form>
</center>
    <?php 
include('connect1.php');
if (isset($_POST["delete"])){
    if(!empty($_POST['id_kondektur'])){
    $id_kondektur = $_POST['id_kondektur'];


    $sql = "DELETE FROM trans_upn WHERE id_kondektur = $id_kondektur";
    $result = mysqli_query($koneksi, $sql);


    if ($result){
        echo "<script> alert('Data berhasil dihapus')</script>";
        header("refresh:0;customers.php");
    } else {
        echo "<script> alert('Data tidak terhapus')</script>";
    }
}
}
?>

</body>
</html>
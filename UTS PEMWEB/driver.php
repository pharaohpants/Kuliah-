
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
    <center><h3> DATA DRIVER </h3><center>
    <table border = "1">
        <tr>
            <th>no</th>
            <th>Id Driver</th>
            <th>Nama Driver</th>
            <th>No Sim Driver</th>
            <th>alamat</th>
            <th>Jumlah KM</th>
        <?php 
        include ('connect1.php');
        $no=1;
        $ambildata = mysqli_query($koneksi,"SELECT driver.id_driver, driver.nama,driver.no_sim,driver.alamat, jumlah_km FROM driver JOIN trans_upn ON driver.id_driver = trans_upn.id_driver;");
        while ($tampil = mysqli_fetch_array($ambildata)){
            echo "
            <tr>
            <td>$no</td>
            <td>$tampil[id_driver]</td>
            <td>$tampil[nama]</td>
            <td>$tampil[no_sim]</td>
            <td>$tampil[alamat]</td>
            <td>$tampil[jumlah_km]</td>
            </tr>";
            $no++;
        }
        ?>
    </table>
    </div>
    <head>
	<title>GFG- Store Data</title>
</head>
	<center>
		<h1>Form Input Data Driver in Database</h1>
		<form action="" method="post">			
<p>
			<label for="ID Driver">ID Driver:</label>
			<input type="text" name="id_driver" >
			</p>			
<p>
			<label for="Nama">Nama:</label>
			<input type="text" name="nama" >
			</p>		
<p>
			<label for="No Sim">No Sim:</label>
			<input type="text" name="no_sim" >
			</p>
<p>
			<label for="Alamat">Alamat:</label>
			<input type="text" name="alamat" >
			</p>
			<input type="submit" name="save" value="submit">
		</form>
	</center>
    <?php
  include_once'connect1.php';
  if (isset($_POST['save'])){

    $simpan = mysqli_query($koneksi, "insert into driver set 
    id_driver = '$_POST[id_driver]',
    nama = '$_POST[nama]',
    no_sim = '$_POST[no_sim]',
    alamat ='$_POST[alamat]'");

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
        
            <label for="id_driver$id_driver">id_driver :</label>
                <input type="text" name="id_driver$id_driver" id="id_driver$id_driver">
     
            <label for="nama$nama">nama :</label>
                <input type="text" name="nama$nama" id="nama$nama">

            <label for="no_sim">no_sim :</label>
                <input type="text" name="no_sim" id="no_sim">

            <label for="alamat">alamat :</label>
                <input type="text" name="alamat" id="alamat">
                <input type="submit" name="update" value="update">
                </button>
    </form>
</center>
    <?php 
include('connect1.php');
if (isset($_POST["update"])){

    $id_driver = $_POST['id_driver$id_driver'];
    $nama = $_POST['nama$nama'];
    $no_sim = $_POST['no_sim'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE driver SET nama='$nama', no_sim='$no_sim', alamat='$alamat' WHERE id_driver='$id_driver'";
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
        
            <label for="id_driver$id_driver">id_driver :</label>
                <input type="text" name="id_driver$id_driver" id="id_driver$id_driver">
                <input type="submit" name="delete" value="delete">
                </button>
    </form>
</center>
    <?php 
include('connect1.php');
if (isset($_POST["delete"])){

    if(!empty($_POST['id_driver'])){
    $id_driver = $_POST['id_driver'];

    $sql = "DELETE FROM driver WHERE id_driver = $id_driver";
    $result = mysqli_query($koneksi, $sql);
    if ($result){
        echo "<script> alert('Data berhasil dihapus')</script>";
        header("refresh:0;customers.php");
    } else {
        echo "<script> alert('Data tidak terupdate')</script>";
    }
}
}
?>


</body>
</html>
</body>
</html>
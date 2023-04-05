<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji Kondektur</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center><h1>Total Gaji kondektur</h1>

    <form action="" method="post">
        <ul>
            <label for="km">Total Jarak Tempuh /km :</label>
                <input type="number" name="km" id="km">
            <label for="tarif">Tarif/km :</label>
                <input type="number" name="tarif" id="tarif">
            <form method="POST">
		    <label for="bulan">Pilih Bulan:</label>
		        <select name="bulan" id="bulan">
                    <option value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="Septembe">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
		        </select>
	        </form>
                <button type="submit" name="check" style="border-radius: 20px;">
                    submit
                </button>
            </li>
        </ul>
    </form>
    <?php 
if (isset($_POST["check"])){
    $jarak = $_POST['km'];
    $tarifkm = $_POST['tarif'];
    $bulan = $_POST['bulan'];
    $total_sebulan = $jarak*$tarifkm;
    echo "<h2><br>SELAMAT!! Total gaji Kondektur pada bulan $bulan adalah Sebesar Rp.".number_format($total_sebulan,0,",",".<h2>");
}
?></center>
</body>
</html>
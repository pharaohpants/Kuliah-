
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
    <center><h3> DATA CUSTOMER </h3><center>
    <table border = "1">
        <tr>
            <th>no</th>
            <th>Customer Number</th>
            <th>Customer Name</th>
            <th>Contact Last Name</th>
            <th>Phone </th>
            <th>Address Line 1</th>
            <th>Address Line 2</th>
            <th>City</th>
            <th>State</th>
            <th>Postal Code</th>
            <th>Country</th>
            <th>Sales Rep Employee Number</th>
            <th>Credit Limit</th>
        <?php 
        include ('connect1.php');
        $no=1;
        $ambildata = $koneksi->prepare("SELECT * FROM `customers`");
        $ambildata->execute();

        while ($tampil = $ambildata->fetch(PDO::FETCH_ASSOC)){
            echo "
            <tr>
            <td>$no</td>
            <td>$tampil[customerNumber]</td>
            <td>$tampil[customerName]</td>
            <td>$tampil[contactLastName]</td>
            <td>$tampil[phone]</td>
            <td>$tampil[addressLine1]</td>
            <td>$tampil[addressLine2]</td>
            <td>$tampil[city]</td>
            <td>$tampil[state]</td>
            <td>$tampil[postalCode]</td>
            <td>$tampil[country]</td>
            <td>$tampil[salesRepEmployeeNumber]</td>
            <td>$tampil[creditLimit]</td>
            </tr>";
            $no++;
        }
        ?>
    </table>
    </div>
</body>
</html>

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
    <center><h3>DATA PRODUCT</h3><center>
    <table border = "1">
        <tr>
            <th>No</th>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Product Line</th>
            <th>Product Scale</th>
            <th>Product Vendor</th>
            <th>Product Description</th>
            <th>Quantity In Stock</th>
            <th>Buy Price</th>
            <th>MSRP</th>
        </tr>
        <?php 
        include ('connect1.php');
        $no=1;
        $ambildata = $koneksi->prepare("SELECT * FROM `products`");
        $ambildata->execute();
        while ($tampil = $ambildata->fetch(PDO::FETCH_ASSOC)){
            echo "
            <tr>
            <td>$no</td>
            <td>$tampil[productCode]</td>
            <td>$tampil[productName]</td>
            <td>$tampil[productLine]</td>
            <td>$tampil[productScale]</td>
            <td>$tampil[productVendor]</td>
            <td>$tampil[productDescription]</td>
            <td>$tampil[quantityInStock]</td>
            <td>$tampil[buyPrice]</td>
            <td>$tampil[MSRP]</td>
            </tr>";
            $no++;
        }
        ?>
    </table>
    </div>
</body>
</html>
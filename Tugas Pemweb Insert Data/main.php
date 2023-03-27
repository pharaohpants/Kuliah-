<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><div style="background-color:#666362; top:40%; width:40%;border-radius:100px;">
    <center><h1>SELAMAT DATANG</h1>
    <h2>Silahkan Pilih Data Mana yang ditampilkan</h2></center>
</div></center>
        <center><table border = "1"> 
        <tr>
        <td><center><h3>Jenis Data<h3></td>
        </tr>
        <tr>
        <td><a href="customer.php"><h3>Data Customer</h3></a></td>
        </tr>
        <tr>
        <td> <a href="product.php"><h3>Data Product</h3></a></td>
        </tr>
        </table></center>
        <!DOCTYPE html>

<head>
	<title>GFG- Store Data</title>
</head>
<body>
	<center>
		<h1>Form Input data Customer in Database</h1>
		<form action="insertdata.php" method="post">
			
<p>
			<label for="Customer Number">Customer Number:</label>
			<input type="text" name="customerNumber" >
			</p>

			
<p>
			<label for="Customer Name">Customer Name:</label>
			<input type="text" name="customerName" >
			</p>

			
<p>
			<label for="Contact Last Name">Contact Last Name:</label>
			<input type="text" name="contactLastName" >
			</p>

			
<p>
			<label for="Phone">Phone:</label>
			<input type="text" name="phone" >
			</p>

			
<p>
			<label for="Address Line 1">Address Line 1:</label>
			<input type="text" name="addressLine1">
			</p>
<p>

            <label for="Address Line 2">Address Line 2:</label>
			<input type="text" name="addressLine2" >
			</p>
<p>
    
            <label for="City">City:</label>
            <input type="text" name="city" >
            </p>

<p>
    
            <label for="State">State:</label>
            <input type="text" name="state" >
            </p>

<p>
    
            <label for="Postal Code">Postal Code:</label>
            <input type="text" name="postalCode" >
            </p>

<p>
    
            <label for="Country">Country:</label>
            <input type="text" name="country" >
            </p>
<p>
    
            <label for="Sales Rep Employee Number">Sales Rep Employee Number:</label>
            <input type="text" name="salesRepEmployeeNumber" >
            </p>
<p>
    
            <label for="Credit Limit">Credit Limit:</label>
            <input type="text" name="creditLimit" >
            </p>


			<input type="submit" name="save" value="submit">
		</form>
	</center>
</body>
</body> 
</html>
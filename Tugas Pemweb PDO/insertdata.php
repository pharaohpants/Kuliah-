<?php
include_once 'connect1.php';
if(isset($_POST['save']))
{	
  $sql = mysqli_query($koneksi,"insert into customers set 
	  customerNumber =  '$_POST[customerNumber]',
    customerName = '$_POST[customerName]',
    contactLastName =  '$_POST[contactLastName]',
    phone = '$_POST[phone]',
    addressLine1= '$_POST[addressLine1]',
    addressLine2 = '$_REQUEST[addressLine2]',
    city = '$_POST[city]',
    state = '$_POST[state]',
    postalCode = '$_POST[postalCode]',
    country = '$_POST[country]',
    salesRepEmployeeNumber = '$_POST[salesRepEmployeeNumber]',
    creditLimit = '$_POST[creditLimit]'");

	 if (mysqli_query($koneksi, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
    " . mysqli_error($koneksi);
	 }
	 mysqli_close($koneksi);
}
?>

         
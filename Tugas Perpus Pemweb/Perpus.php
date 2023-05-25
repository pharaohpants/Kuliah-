
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORM DATA BUKU PERPUSTAKAAN</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
        <td>Cover : </td>
        <td> <input type="file" name="cover" id="cover"></td>
        <td><input type="submit" value="Submit" name="submit"></td>
            </tr>
          </table>
    </form>

    <table>
    <tr>
        <td>Kode Buku: </td>
        <td><input type="text" name="kode"><br></td>
            </tr>
            <tr>
        <td>Judul Buku: </td>
        <td><input type="text" name="judul"><br></td>
            </tr>
            <tr>
        <td>Pengarang : </td>
        <td><input type="text" name="pengarang"><br></td>
            </tr>
            <tr>
        <td>Tahun Terbit: </td>
        <td><input type="text" name="tahun"><br></td>
            </tr>
            <tr>
        <td>Jumlah Halaman: </td>
        <td><input type="text" name="jumlah"><br></td>
            </tr>
            <tr>
        <td>Penerbit : </td>
        <td><input type="text" name="penerbit"><br></td>
            </tr>
            <tr>
        <td>Kategori: </td>
        <td><input type="text" name="kategori"><br></td>
            </tr>
    <tr>
                <form action="read.php" method="post">
                <td><input type="submit" value="Read" name="submit"></td></form>
        
                <form action="create.php" method="post">
                <td><input type="submit" value="Create" name="submit"></td></form>
        
                <form action="update.php" method="post">
                <td><input type="submit" value="Update" name="submit"></td></form>
        
                <form action="delete.php" method="post">
                <td><input type="submit" value="Delete" name="submit"></td></form>
                        </tr>
    </table>
    
</body>
</html>

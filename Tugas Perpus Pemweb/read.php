<!DOCTYPE html>
<html>
<head>
    <title>File Reader</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $filename = "uploads/Buku.txt";
        $file = fopen($filename, "r");
        
        if ($file) {
            echo "<h2>File Contents:</h2>";
            echo "<table>";
            echo "<tr><th>Number</th>
                      <th>Data Buku</th>
                      </tr>";
            
            $no = 1;
            while (($line = fgets($file)) !== false) {
                echo "<tr><td>$no</td><td>$line</td></tr>";
                $no++;
            }
            
            echo "</table>";
            
            fclose($file);
        } else {
            echo "<h2>Error:</h2>";
            echo "Gagal Membuka File.";
        }
    }
    ?>
</body>
</html>

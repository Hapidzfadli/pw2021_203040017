<?php 
// cek apakah tidak ada data di get
if ( !isset($_GET["merek"]) || 
     !isset($_GET["seri"]) ||
     !isset($_GET["warna"]) ||
     !isset($_GET["ram"])
     ){

    //redirect
    header("Location: latihan1.php");
    exit;
}
?>;


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Handphone</title>
</head>
<body>
    
    <ul>
        <li><?= $_GET["merek"]; ?></li>
        <li><?= $_GET["seri"]; ?></li>
        <li><?= $_GET["warna"]; ?></li>
        <li><?= $_GET["ram"]; ?></li>
        
    </ul>
    <a href="latihan1.php">Kembali</a>

</body>
</html>

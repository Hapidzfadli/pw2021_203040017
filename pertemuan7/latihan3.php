<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>

<form action="latihan4.php" method="POST">
<!-- // Jika actionya kosong data akan dikirimkan ke halaman ini sendiri
// jika method nyakosong defaultnya GET -->
    Masukan Nama:
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit">Kirim</button>
</form>
    <br>
    <br>


    <?php if( isset($_POST["submit"])) : ?>
        <h1>Halo, selamat datang <?= $_POST["nama"]?></h1>
<?php endif;?>;
    
    
<form action="" method="POST">
    Masukan Ngaran: 
    <input type="text" name="nama">
    <br>
    <button type="submit" name="submit"> Kirim</button>
</form>
</body>
</html>
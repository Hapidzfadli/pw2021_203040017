<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP
// Nama : Hapid Fadli
// NRP : 203040017
// Kelas : IF - A
// Mata Kuliah : Pemrograman WEB

// Standar Output
// Perintah Untuk debugging: 
// echo, print
// print_r
// var_dump


// Contoh
// echo "echo, Hapid Fadli";
// print "print, Hapid Fadli";
// print_r ("Hapid Fadli");
// var_dump ("var_dump, Hapid FAdli")

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di Dalam PHP


// Variabel dan Tiped Data

// Variabel
// tidak boleh di awali dengan anka tapi boleh mengandung angka
$nama = 'Fadli';


// Operator
// Aritmatika
// + -+ / %
// $x = 10;
// echo $x * $x

// Penggabung string / concatenation / concat
// .
// $nama_depan = 'Sandhika';
// $nama_belakang = "Galing";
// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=

// $x = 1;
// $x -= 5;
// echo $x;

// $nama = "Hapid";
// $nama .= " ";
// $nama .= "Fadli";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==

// var_dump(1 < 5);

// Identitas (Ngecheck True/false)
// ===, !==
// var_dump(1 === '1');


// Operator Logika
// &&, ||, !

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <h1>Halo Hapid <?php echo $nama ?></h1>

</body>

</html>
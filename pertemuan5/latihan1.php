<?php 
// Array
// Variabel yang dapat menyimpan banyak nilai
// Pasangan antara key dan value
// key-nya adalah index, yang di mulai dari 0

// membuat array
// cara lama 
$hari = array('Senin', 'Selasa', 'Rabu');

//Cara BAru
$bulan = ['Januari', 'Februari', 'Maret'];

//TIpe data berbeda
$arr1 = [123, false, 'Hapid'];


//Menampilkan Array
// var_dum() / print_r()
// echo $hari[0] ;
// echo "<br>";
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
echo "<br>";
var_dump($hari);

?>
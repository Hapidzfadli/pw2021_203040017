<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: http://localhost/pw2021_203040017/praktikum/tubes/login.php");
    exit;
}
require '../function/function.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
        alert('Data berhasil dihapus');
        document.location.href = 'admin.php';
        </script>";
} else {
    echo "<script>
        alert('Data Tidak berhasil dihapus');
       
        </script>";
}
